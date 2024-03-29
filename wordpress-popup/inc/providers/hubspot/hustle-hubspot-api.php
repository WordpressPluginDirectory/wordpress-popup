<?php // phpcs:ignore WordPress.Files.FileName.InvalidClassFileName
/**
 * Hustle_HubSpot_Api class
 *
 * @package Hustle
 */

if ( ! class_exists( 'Hustle_HubSpot_Api' ) ) :
	/**
	 * Class Hustle_HubSpot_Api
	 */
	class Hustle_HubSpot_Api extends Opt_In_WPMUDEV_API {
		const CLIENT_ID = '5253e533-2dd2-48fd-b102-b92b8f250d1b';
		const BASE_URL  = 'https://app.hubspot.com/';
		const API_URL   = 'https://api.hubapi.com/';
		const SCOPE     = 'oauth crm.objects.contacts.write crm.lists.read crm.objects.contacts.read crm.schemas.contacts.write crm.schemas.contacts.read crm.lists.write';

		const REFERER     = 'hustle_hubspot_referer';
		const CURRENTPAGE = 'hustle_hubspot_current_page';

		/**
		 * Option name
		 *
		 * @var string
		 */
		private $option_name = 'hustle_opt-in-hubspot-token';

		/**
		 * Is error
		 *
		 * @var bool
		 */
		public $is_error = false;

		/**
		 * Error message
		 *
		 * @var string
		 */
		public $error_message;

		/**
		 * Sending
		 *
		 * @var boolean
		 */
		public $sending = false;

		/**
		 * Hustle_HubSpot_Api constructor.
		 */
		public function __construct() {
			// Init request callback listener.
			add_action( 'init', array( $this, 'process_callback_request' ) );

		}

		/**
		 * Helper function to listen to request callback sent from WPMUDEV
		 */
		public function process_callback_request() {
			if ( $this->validate_callback_request( 'hubspot' ) ) {

				$code   = filter_input( INPUT_GET, 'code', FILTER_SANITIZE_SPECIAL_CHARS );
				$status = 'error';

				// Get the referer page that sent the request.
				$referer      = get_option( self::REFERER );
				$current_page = get_option( self::CURRENTPAGE );
				if ( $code ) {
					if ( $this->get_access_token( array( 'code' => $code ) ) ) {
						$status = 'success';
					}
				}

				if ( ! empty( $referer ) ) {
					$referer = add_query_arg( 'status', $status, $referer );
					wp_safe_redirect( $referer );
					exit;
				}

				// Allow retry but don't log referrer.
				$authorization_uri = $this->get_authorization_uri( false, false, $current_page );

				$this->api_die( __( 'HubSpot integration failed!', 'hustle' ), $authorization_uri, $referer );
			}
		}

		/**
		 * Get token
		 *
		 * @param string $key Key.
		 * @return bool|mixed
		 */
		public function get_token( $key ) {
			$auth = $this->get_auth_token();

			if ( ! empty( $auth ) && ! empty( $auth[ $key ] ) ) {
				return $auth[ $key ]; }

			return false;
		}

		/**
		 * Compose redirect_uri to use on request argument.
		 * The redirect uri must be constant and should not be change per request.
		 *
		 * @param array $args Args.
		 * @return string
		 */
		private function get_redirect_uri( $args = array() ) {
			$params = wp_parse_args(
				$args,
				array(
					'action'    => 'authorize',
					'provider'  => 'hubspot',
					'client_id' => self::CLIENT_ID,
				)
			);

			return add_query_arg( $params, self::REDIRECT_URI );
		}

		/**
		 * Get access token
		 *
		 * @return string
		 */
		public function refresh_access_token() {
			$args = array(
				'grant_type'    => 'refresh_token',
				'refresh_token' => $this->get_token( 'refresh_token' ),
			);

			return $this->get_access_token( $args );
		}

		/**
		 * Get or retrieve access token from HubSpot.
		 *
		 * @param array $args Args.
		 * @return bool
		 */
		public function get_access_token( array $args ) {
			$args = wp_parse_args(
				$args,
				array(
					'redirect_uri' => rawurlencode( $this->get_redirect_uri() ),
					'grant_type'   => 'authorization_code',
					'state'        => 'state', // It's added just because state param is required on the final endpoint. It's unuseful here.
					'action'       => 'get_access_token',
				)
			);

			$url      = $this->get_redirect_uri( $args );
			$res      = wp_remote_get( $url );
			$body     = is_wp_error( $res ) || ! $res ? '' : wp_remote_retrieve_body( $res );
			$response = $body ? json_decode( $body ) : '';

			if ( ! empty( $response->refresh_token ) ) {
				$token_data = get_object_vars( $response );

				$token_data['expires_in'] += time();

				// Update auth token.
				$this->update_auth_token( $token_data );

				return true;
			}

			return false;
		}

		/**
		 * Request
		 *
		 * @param string  $endpoint The endpoint the request will be sent to.
		 * @param string  $method Method.
		 * @param array   $query_args Additional args to include in the request body.
		 * @param string  $access_token Access token.
		 * @param boolean $x_www Whether the request is sent in application/x-www-form format.
		 * @param boolean $json If json.
		 *
		 * @return mixed
		 */
		private function request( $endpoint, $method = 'GET', $query_args = array(), $access_token = '', $x_www = false, $json = false ) {
			// Avoid multiple call at once.
			if ( $this->sending ) {
				return false; }

			$this->sending = true;
			$url           = self::API_URL . $endpoint;

			$args = array(
				'client_id' => self::CLIENT_ID,
				'scope'     => self::SCOPE,
			);
			$args = wp_parse_args( $args, $query_args );

			if ( ! $x_www && $json ) {
				$args = wp_json_encode( $args ); }

			$_args = array(
				'method'  => $method,
				'headers' => array(
					'Content-Type' => 'application/json;charset=utf-8',
				),
				'body'    => $args,
			);

			if ( $access_token ) {
				$_args['headers']['Authorization'] = 'Bearer ' . $access_token;
			}
			if ( 'POST' === $method && $x_www ) {
				$_args['headers']['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
			}

			$response = wp_remote_request( $url, $_args );

			// logging data.
			$utils                     = Hustle_Provider_Utils::get_instance();
			$utils->last_url_request   = $url;
			$utils->last_data_sent     = $_args;
			$utils->last_data_received = $response;

			$this->sending = false;

			if ( ! is_wp_error( $response ) ) {
				$body = json_decode( wp_remote_retrieve_body( $response ) );

				if ( 204 === $response['response']['code'] && 'No Content' === $response['response']['message'] ) {
					return true;
				}

				if ( $response['response']['code'] <= 204
					|| isset( $body->status ) && 'error' === $body->status ) {
					return $body; }
			}
			return $response;
		}

		/**
		 * Helper function to send authenticated Post request.
		 *
		 * @param string  $end_point The endpoint the request will be sent to.
		 * @param array   $query_args Args.
		 * @param boolean $x_www Whether the request is sent in application/x-www-form format.
		 * @param boolean $json If json.
		 *
		 * @return mixed
		 */
		public function send_authenticated_post( $end_point, $query_args = array(), $x_www = false, $json = false ) {
			$access_token = $this->get_token( 'access_token' );
			return $this->request( $end_point, 'POST', $query_args, $access_token, $x_www, $json );
		}

		/**
		 * Helper function to send authenticated GET request.
		 *
		 * @param string $endpoint The endpoint the request will be sent to.
		 * @param array  $query_args Args.
		 *
		 * @return mixed
		 */
		public function send_authenticated_get( $endpoint, $query_args = array() ) {
			$access_token = $this->get_token( 'access_token' );
			return $this->request( $endpoint, 'GET', $query_args, $access_token );
		}

		/**
		 * Get stored token data.
		 *
		 * @return array|null
		 */
		public function get_auth_token() {
			return get_option( $this->option_name );
		}

		/**
		 * Update token data.
		 *
		 * @param array $token Token.
		 * @return void
		 */
		public function update_auth_token( array $token ) {
			update_option( $this->option_name, $token );
		}

		/**
		 * Remove wp_option rows.
		 */
		public function remove_wp_options() {
			delete_option( $this->option_name );
			delete_option( self::REFERER );
			delete_option( self::CURRENTPAGE );
		}

		/**
		 * Is authorized
		 *
		 * @return bool
		 */
		public function is_authorized() {
			$auth = $this->get_auth_token();

			if ( empty( $auth ) ) {
				return false; }

			if ( ! empty( $auth['expires_in'] ) && time() < $auth['expires_in'] ) {
				return true;
			}

			// Attempt to refresh token.
			$refresh = $this->refresh_access_token();
			return $refresh;
		}

		/**
		 * Generates authorization URL
		 *
		 * @param int    $module_id Module ID.
		 * @param bool   $log_referrer Log referrer.
		 * @param string $page Page.
		 * @return string
		 */
		public function get_authorization_uri( $module_id = 0, $log_referrer = true, $page = 'hustle_embedded' ) {
			if ( $log_referrer ) {

				$params = array(
					'page'   => $page,
					'action' => 'external-redirect',
					'slug'   => 'hubspot',
					'nonce'  => wp_create_nonce( 'hustle_provider_external_redirect' ),
				);

				if ( ! empty( $module_id ) ) {
					$params['id']      = $module_id;
					$params['section'] = 'integrations';
				}
				$referer = add_query_arg( $params, admin_url( 'admin.php' ) );

				update_option( self::REFERER, $referer );
				update_option( self::CURRENTPAGE, $page );
			}

			$auth_url = add_query_arg(
				array(
					'client_id'    => self::CLIENT_ID,
					'scope'        => rawurlencode( self::SCOPE ),
					'redirect_uri' => rawurlencode( $this->get_redirect_uri() ),
					'state'        => rawurlencode( $this->get_nonce_value() . '|' . site_url( '/' ) ),
				),
				self::BASE_URL . 'oauth/authorize'
			);

			return $auth_url;
		}

		/**
		 * Delete subscriber from the list
		 *
		 * @param string $list_id List ID.
		 * @param string $email Email.
		 *
		 * @return array|mixed|object|WP_Error
		 */
		public function delete_email( $list_id, $email ) {
			$email_exist = $this->email_exists( $email );
			if ( ! $email_exist || empty( $email_exist->vid ) ) {
				return false;
			}

			$endpoint = 'contacts/v1/lists/' . $list_id . '/remove';
			$res      = $this->send_authenticated_post( $endpoint, array( 'vids' => array( $email_exist->vid ) ), false, true );

			return ! is_wp_error( $res ) && ! empty( $res->updated );
		}

		/**
		 * Get the current token's information.
		 *
		 * @since 4.0.2
		 * @return array
		 */
		public function get_access_token_information() {

			$res   = array();
			$token = $this->get_token( 'access_token' );

			if ( ! empty( $token ) ) {
				$res = $this->send_authenticated_get( 'oauth/v1/access-tokens/' . $token );
			}

			return $res;
		}

		/**
		 * Retrieve contact lists from Hubspot
		 *
		 * @return array
		 */
		public function get_contact_list() {
			$listing = array();

			$args = array(
				'count'  => 200,
				'offset' => 0,
			);
			$res  = $this->send_authenticated_get( 'contacts/v1/lists/static', $args );

			if ( ! is_wp_error( $res ) && ! empty( $res->lists ) ) {
				$listing = wp_list_pluck( $res->lists, 'name', 'listId' );
			}

			return $listing;
		}

		/**
		 * Check if the given email address is already a subscriber.
		 *
		 * @param string $email The email address to check.
		 *
		 * @return bool|mixed
		 */
		public function email_exists( $email ) {
			$endpoint = 'contacts/v1/contact/email/' . $email . '/profile';

			$res = $this->send_authenticated_get( $endpoint );

			if ( ! is_wp_error( $res ) && ! empty( $res->vid ) ) {
				return $res; }

			return false;
		}

		/**
		 * Get the list of existing properties from HubSpot account.
		 *
		 * @return array
		 */
		public function get_properties() {
			$properties = array();
			$res        = $this->send_authenticated_get( 'properties/v1/contacts/properties' );
			if ( ! is_wp_error( $res ) && ! isset( $res->status ) ) {
				foreach ( $res as $prop ) {
					$properties[ $prop->name ] = $prop->label; }
			}

			return $properties;
		}

		/**
		 * Add new field contact property to HubSpot.
		 *
		 * @param array $property Property.
		 *
		 * @return bool
		 */
		public function add_property( array $property ) {
			$res = $this->send_authenticated_post( 'properties/v1/contacts/properties', $property, false, true );

			return ! is_wp_error( $res ) && ! empty( $res->name );
		}

		/**
		 * Add contact subscriber to HubSpot.
		 *
		 * @param array $data Data.
		 *
		 * @return mixed
		 * @throws Exception Custom fields do not exist.
		 */
		public function add_contact( $data ) {
			$props = array();

			// Add error log entries for subscription errors caused by custom fields not registered in HubSpot.
			$default_data        = array( 'first_name', 'last_name' );
			$existing_properties = array_merge( $this->get_properties(), array_flip( $default_data ) );
			$filtered_data       = array_intersect_key( $data, $existing_properties );

			$difference = array_diff_key( $data, $filtered_data );
			if ( ! empty( $difference ) ) {
				$message = 'These fields are preventing your users from subscribing because they do not exist in your Hubspot account: ' . implode( ', ', array_keys( $difference ) );
				throw new Exception( $message );
			}

			foreach ( $data as $key => $value ) {
				if ( 'first_name' === $key ) {
					$key = 'firstname';
				}
				if ( 'last_name' === $key ) {
					$key = 'lastname';
				}

				$props[] = array(
					'property' => $key,
					'value'    => $value,
				);
			}

			$args     = array( 'properties' => $props );
			$endpoint = 'contacts/v1/contact';

			$res = $this->send_authenticated_post( $endpoint, $args, false, true );

			if ( ! is_wp_error( $res ) && ! empty( $res->vid ) ) {
				return $res->vid; }

			return $res;
		}

		/**
		 * Add contact subscriber to HubSpot.
		 *
		 * @param dtring $id ID.
		 * @param array  $data Data.
		 *
		 * @return mixed
		 * @throws Exception Custom fields do not exist.
		 */
		public function update_contact( $id, $data ) {
			$props = array();

			// Add error log entries for subscription errors caused by custom fields not registered in HubSpot.
			$default_data        = array( 'first_name', 'last_name' );
			$existing_properties = array_merge( $this->get_properties(), array_flip( $default_data ) );
			$filtered_data       = array_intersect_key( $data, $existing_properties );

			$difference = array_diff_key( $data, $filtered_data );
			if ( ! empty( $difference ) ) {
				$message = 'These fields are preventing your users from subscribing because they do not exist in your Hubspot account: ' . implode( ', ', array_keys( $difference ) );
				throw new Exception( $message );
			}

			foreach ( $data as $key => $value ) {
				if ( 'first_name' === $key ) {
					$key = 'firstname';
				}
				if ( 'last_name' === $key ) {
					$key = 'lastname';
				}

				$props[] = array(
					'property' => $key,
					'value'    => $value,
				);
			}

			$args     = array( 'properties' => $props );
			$endpoint = 'contacts/v1/contact/vid/' . $id . '/profile';

			$res = $this->send_authenticated_post( $endpoint, $args, false, true );

			if ( ! is_wp_error( $res ) && ! empty( $res->vid ) ) {
				return $res->vid; }

			return $res;
		}

		/**
		 * Add contact to contact list.
		 *
		 * @param string $contact_id Contact ID.
		 * @param string $email Email.
		 * @param string $email_list Email list.
		 *
		 * @return bool|mixed
		 */
		public function add_to_contact_list( $contact_id, $email, $email_list ) {
			$args     = array(
				'listId' => $email_list,
				'vid'    => array( $contact_id ),
				'emails' => array( $email ),
			);
			$endpoint = 'contacts/v1/lists/' . $email_list . '/add';
			$res      = $this->send_authenticated_post( $endpoint, $args, false, true );

			if ( ! is_wp_error( $res ) && ! empty( $res->updated ) ) {
				return true;
			}

			if ( ! empty( $res->status ) && 'error' === $res->status && ! empty( $res->message ) ) {
				$res = new WP_Error( 'provider_error', $res->message );
			}

			return $res;
		}
	}
endif;
