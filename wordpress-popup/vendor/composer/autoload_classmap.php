<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Ctct\\Auth\\CtctDataStore' => $baseDir . '/inc/providers/constantcontact/CtCt/Auth/CtctDataStore.php',
    'Ctct\\Auth\\CtctOAuth2' => $baseDir . '/inc/providers/constantcontact/CtCt/Auth/CtctOAuth2.php',
    'Ctct\\Auth\\SessionDataStore' => $baseDir . '/inc/providers/constantcontact/CtCt/Auth/SessionDataStore.php',
    'Ctct\\Components\\Account\\AccountInfo' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Account/AccountInfo.php',
    'Ctct\\Components\\Account\\VerifiedEmailAddress' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Account/VerifiedEmailAddress.php',
    'Ctct\\Components\\Activities\\Activity' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Activities/Activity.php',
    'Ctct\\Components\\Activities\\ActivityError' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Activities/ActivityError.php',
    'Ctct\\Components\\Activities\\AddContacts' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Activities/AddContacts.php',
    'Ctct\\Components\\Activities\\AddContactsImportData' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Activities/AddContactsImportData.php',
    'Ctct\\Components\\Activities\\ExportContacts' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Activities/ExportContacts.php',
    'Ctct\\Components\\Component' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Component.php',
    'Ctct\\Components\\Contacts\\Address' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Contacts/Address.php',
    'Ctct\\Components\\Contacts\\Contact' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Contacts/Contact.php',
    'Ctct\\Components\\Contacts\\ContactList' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Contacts/ContactList.php',
    'Ctct\\Components\\Contacts\\CustomField' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Contacts/CustomField.php',
    'Ctct\\Components\\Contacts\\EmailAddress' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Contacts/EmailAddress.php',
    'Ctct\\Components\\Contacts\\Note' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Contacts/Note.php',
    'Ctct\\Components\\EmailMarketing\\Campaign' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/EmailMarketing/Campaign.php',
    'Ctct\\Components\\EmailMarketing\\ClickThroughDetails' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/EmailMarketing/ClickThroughDetails.php',
    'Ctct\\Components\\EmailMarketing\\MessageFooter' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/EmailMarketing/MessageFooter.php',
    'Ctct\\Components\\EmailMarketing\\Schedule' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/EmailMarketing/Schedule.php',
    'Ctct\\Components\\EmailMarketing\\TestSend' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/EmailMarketing/TestSend.php',
    'Ctct\\Components\\Library\\File' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Library/File.php',
    'Ctct\\Components\\Library\\Folder' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Library/Folder.php',
    'Ctct\\Components\\Library\\Thumbnail' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Library/Thumbnail.php',
    'Ctct\\Components\\ResultSet' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/ResultSet.php',
    'Ctct\\Components\\Tracking\\BounceActivity' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Tracking/BounceActivity.php',
    'Ctct\\Components\\Tracking\\ClickActivity' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Tracking/ClickActivity.php',
    'Ctct\\Components\\Tracking\\ForwardActivity' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Tracking/ForwardActivity.php',
    'Ctct\\Components\\Tracking\\OpenActivity' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Tracking/OpenActivity.php',
    'Ctct\\Components\\Tracking\\SendActivity' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Tracking/SendActivity.php',
    'Ctct\\Components\\Tracking\\TrackingActivity' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Tracking/TrackingActivity.php',
    'Ctct\\Components\\Tracking\\TrackingSummary' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Tracking/TrackingSummary.php',
    'Ctct\\Components\\Tracking\\UnsubscribeActivity' => $baseDir . '/inc/providers/constantcontact/CtCt/Components/Tracking/UnsubscribeActivity.php',
    'Ctct\\ConstantContact' => $baseDir . '/inc/providers/constantcontact/CtCt/ConstantContact.php',
    'Ctct\\Exceptions\\CtctException' => $baseDir . '/inc/providers/constantcontact/CtCt/Exceptions/CtctException.php',
    'Ctct\\Exceptions\\IllegalArgumentException' => $baseDir . '/inc/providers/constantcontact/CtCt/Exceptions/IllegalArgumentException.php',
    'Ctct\\Exceptions\\OAuth2Exception' => $baseDir . '/inc/providers/constantcontact/CtCt/Exceptions/OAuth2Exception.php',
    'Ctct\\Services\\AccountService' => $baseDir . '/inc/providers/constantcontact/CtCt/Services/AccountService.php',
    'Ctct\\Services\\ActivityService' => $baseDir . '/inc/providers/constantcontact/CtCt/Services/ActivityService.php',
    'Ctct\\Services\\BaseService' => $baseDir . '/inc/providers/constantcontact/CtCt/Services/BaseService.php',
    'Ctct\\Services\\CampaignScheduleService' => $baseDir . '/inc/providers/constantcontact/CtCt/Services/CampaignScheduleService.php',
    'Ctct\\Services\\CampaignTrackingService' => $baseDir . '/inc/providers/constantcontact/CtCt/Services/CampaignTrackingService.php',
    'Ctct\\Services\\ContactService' => $baseDir . '/inc/providers/constantcontact/CtCt/Services/ContactService.php',
    'Ctct\\Services\\ContactTrackingService' => $baseDir . '/inc/providers/constantcontact/CtCt/Services/ContactTrackingService.php',
    'Ctct\\Services\\EmailMarketingService' => $baseDir . '/inc/providers/constantcontact/CtCt/Services/EmailMarketingService.php',
    'Ctct\\Services\\LibraryService' => $baseDir . '/inc/providers/constantcontact/CtCt/Services/LibraryService.php',
    'Ctct\\Services\\ListService' => $baseDir . '/inc/providers/constantcontact/CtCt/Services/ListService.php',
    'Ctct\\SplClassLoader' => $baseDir . '/inc/providers/constantcontact/CtCt/SplClassLoader.php',
    'Ctct\\Util\\Config' => $baseDir . '/inc/providers/constantcontact/CtCt/Util/Config.php',
    'Ctct\\Util\\CurlResponse' => $baseDir . '/inc/providers/constantcontact/CtCt/Util/CurlResponse.php',
    'Ctct\\Util\\RestClient' => $baseDir . '/inc/providers/constantcontact/CtCt/Util/RestClient.php',
    'Ctct\\Util\\RestClientInterface' => $baseDir . '/inc/providers/constantcontact/CtCt/Util/RestClientInterface.php',
    'Ctct\\WebHooks\\CTCTWebhookUtil' => $baseDir . '/inc/providers/constantcontact/CtCt/WebHooks/CTCTWebhookUtil.php',
    'Hustle_410_Migration' => $baseDir . '/inc/update/class-hustle-410-migration.php',
    'Hustle_430_Migration' => $baseDir . '/inc/update/class-hustle-430-migration.php',
    'Hustle_441_Migration' => $baseDir . '/inc/update/class-hustle-441-migration.php',
    'Hustle_ActiveCampaign_Form_Hooks' => $baseDir . '/inc/providers/activecampaign/hustle-activecampaign-form-hooks.php',
    'Hustle_Activecampaign' => $baseDir . '/inc/providers/activecampaign/hustle-activecampaign.php',
    'Hustle_Activecampaign_Api' => $baseDir . '/inc/providers/activecampaign/hustle-activecampaign-api.php',
    'Hustle_Activecampaign_Form_Settings' => $baseDir . '/inc/providers/activecampaign/hustle-activecampaign-form-settings.php',
    'Hustle_Addon_Aweber_Exception' => $baseDir . '/inc/providers/aweber/hustle-addon-aweber-exception.php',
    'Hustle_Addon_Aweber_Form_Settings_Exception' => $baseDir . '/inc/providers/aweber/hustle-addon-aweber-form-settings-exception.php',
    'Hustle_Addon_Aweber_Oauth' => $baseDir . '/inc/providers/aweber/lib/class-aweber-oauth.php',
    'Hustle_Addon_Aweber_Oauth2' => $baseDir . '/inc/providers/aweber/lib/class-aweber-oauth2.php',
    'Hustle_Addon_Aweber_Wp_Api' => $baseDir . '/inc/providers/aweber/lib/class-wp-aweber-api.php',
    'Hustle_Addon_Aweber_Wp_Api_Exception' => $baseDir . '/inc/providers/aweber/lib/class-wp-aweber-api-exception.php',
    'Hustle_Addon_Aweber_Wp_Api_Not_Found_Exception' => $baseDir . '/inc/providers/aweber/lib/class-wp-aweber-api-not-found-exception.php',
    'Hustle_Admin_Page_Abstract' => $baseDir . '/inc/class-hustle-admin-page-abstract.php',
    'Hustle_Aweber' => $baseDir . '/inc/providers/aweber/hustle-aweber.php',
    'Hustle_Aweber_Form_Hooks' => $baseDir . '/inc/providers/aweber/hustle-aweber-form-hooks.php',
    'Hustle_Aweber_Form_Settings' => $baseDir . '/inc/providers/aweber/hustle-aweber-form-settings.php',
    'Hustle_Campaignmonitor' => $baseDir . '/inc/providers/campaignmonitor/hustle-campaignmonitor.php',
    'Hustle_Campaignmonitor_API' => $baseDir . '/inc/providers/campaignmonitor/hustle-campaignmonitor-api.php',
    'Hustle_Campaignmonitor_Form_Hooks' => $baseDir . '/inc/providers/campaignmonitor/hustle-campaignmonitor-form-hooks.php',
    'Hustle_Campaignmonitor_Form_Settings' => $baseDir . '/inc/providers/campaignmonitor/hustle-campaignmonitor-form-settings.php',
    'Hustle_Condition_Factory' => $baseDir . '/inc/class-hustle-condition-factory.php',
    'Hustle_ConstantContact' => $baseDir . '/inc/providers/constantcontact/hustle-constantcontact.php',
    'Hustle_ConstantContact_Api' => $baseDir . '/inc/providers/constantcontact/hustle-constantcontact-api.php',
    'Hustle_ConstantContact_Form_Hooks' => $baseDir . '/inc/providers/constantcontact/hustle-constantcontact-form-hooks.php',
    'Hustle_ConstantContact_Form_Settings' => $baseDir . '/inc/providers/constantcontact/hustle-constantcontact-form-settings.php',
    'Hustle_ConvertKit' => $baseDir . '/inc/providers/convertkit/hustle-convertkit.php',
    'Hustle_ConvertKit_Api' => $baseDir . '/inc/providers/convertkit/hustle-convertkit-api.php',
    'Hustle_ConvertKit_Form_Hooks' => $baseDir . '/inc/providers/convertkit/hustle-convertkit-form-hooks.php',
    'Hustle_ConvertKit_Form_Settings' => $baseDir . '/inc/providers/convertkit/hustle-convertkit-form-settings.php',
    'Hustle_Cross_Sell' => $baseDir . '/inc/class-hustle-cross-sell.php',
    'Hustle_Custom_Fonts_Helper' => $baseDir . '/inc/helpers/class-hustle-custom-fonts-helper.php',
    'Hustle_Dashboard_Admin' => $baseDir . '/inc/class-hustle-dashboard-admin.php',
    'Hustle_Data' => $baseDir . '/inc/class-hustle-data.php',
    'Hustle_Db' => $baseDir . '/inc/class-hustle-db.php',
    'Hustle_Decorator_Abstract' => $baseDir . '/inc/front/class-hustle-decorator_abstract.php',
    'Hustle_Decorator_Non_Sshare' => $baseDir . '/inc/front/class-hustle-decorator-non-sshare.php',
    'Hustle_Decorator_Sshare' => $baseDir . '/inc/front/class-hustle-decorator-sshare.php',
    'Hustle_Deletion' => $baseDir . '/inc/hustle-deletion.php',
    'Hustle_E_Newsletter' => $baseDir . '/inc/providers/e_newsletter/hustle-e-newsletter.php',
    'Hustle_E_Newsletter_Form_Hooks' => $baseDir . '/inc/providers/e_newsletter/hustle-e-newsletter-form-hooks.php',
    'Hustle_E_Newsletter_Form_Settings' => $baseDir . '/inc/providers/e_newsletter/hustle-e-newsletter-form-settings.php',
    'Hustle_Embedded_Admin' => $baseDir . '/inc/hustle-embedded-admin.php',
    'Hustle_Entries_Admin' => $baseDir . '/inc/hustle-entries-admin.php',
    'Hustle_Entry_Model' => $baseDir . '/inc/hustle-entry-model.php',
    'Hustle_GHBlock_Abstract' => $baseDir . '/inc/providers/gutenberg/abstract-block.php',
    'Hustle_GHBlock_Embeds' => $baseDir . '/inc/providers/gutenberg/blocks/block-embeds.php',
    'Hustle_GHBlock_Popup_Trigger' => $baseDir . '/inc/providers/gutenberg/blocks/block-popup-trigger.php',
    'Hustle_GHBlock_Slidein_Trigger' => $baseDir . '/inc/providers/gutenberg/blocks/block-slidein-trigger.php',
    'Hustle_GHBlock_Social_Share' => $baseDir . '/inc/providers/gutenberg/blocks/block-social-share.php',
    'Hustle_GHBlock_Unsubscribe' => $baseDir . '/inc/providers/gutenberg/blocks/block-unsubscribe.php',
    'Hustle_General_Data_Protection' => $baseDir . '/inc/hustle-general-data-protection.php',
    'Hustle_Get_Response' => $baseDir . '/inc/providers/getresponse/hustle-get-response.php',
    'Hustle_Get_Response_Api' => $baseDir . '/inc/providers/getresponse/hustle-get-response-api.php',
    'Hustle_Get_Response_Form_Hooks' => $baseDir . '/inc/providers/getresponse/hustle-get-response-form-hooks.php',
    'Hustle_Get_Response_Form_Settings' => $baseDir . '/inc/providers/getresponse/hustle-get-response-form-settings.php',
    'Hustle_Gutenberg' => $baseDir . '/inc/providers/gutenberg/gutenberg.php',
    'Hustle_HubSpot' => $baseDir . '/inc/providers/hubspot/hustle-hubspot.php',
    'Hustle_HubSpot_Api' => $baseDir . '/inc/providers/hubspot/hustle-hubspot-api.php',
    'Hustle_HubSpot_Form_Hooks' => $baseDir . '/inc/providers/hubspot/hustle-hubspot-form-hooks.php',
    'Hustle_HubSpot_Form_Settings' => $baseDir . '/inc/providers/hubspot/hustle-hubspot-form-settings.php',
    'Hustle_Icontact' => $baseDir . '/inc/providers/icontact/hustle-icontact.php',
    'Hustle_Icontact_Api' => $baseDir . '/inc/providers/icontact/hustle-icontact-api.php',
    'Hustle_Icontact_Form_Hooks' => $baseDir . '/inc/providers/icontact/hustle-icontact-form-hooks.php',
    'Hustle_Icontact_Form_Settings' => $baseDir . '/inc/providers/icontact/hustle-icontact-form-settings.php',
    'Hustle_InfusionSoft_Form_Hooks' => $baseDir . '/inc/providers/infusionsoft/hustle-infusion-soft-form-hooks.php',
    'Hustle_Infusion_Soft' => $baseDir . '/inc/providers/infusionsoft/hustle-infusion-soft.php',
    'Hustle_Infusion_Soft_Form_Settings' => $baseDir . '/inc/providers/infusionsoft/hustle-infusion-soft-form-settings.php',
    'Hustle_Init' => $baseDir . '/inc/hustle-init.php',
    'Hustle_Installer' => $baseDir . '/inc/class-hustle-installer.php',
    'Hustle_Layout_Helper' => $baseDir . '/inc/helpers/class-hustle-layout-helper.php',
    'Hustle_Local_List' => $baseDir . '/inc/providers/local-list/hustle-local-list.php',
    'Hustle_Local_List_Form_Hooks' => $baseDir . '/inc/providers/local-list/hustle-local-list-form-hooks.php',
    'Hustle_Local_List_Form_Settings' => $baseDir . '/inc/providers/local-list/hustle-local-list-form-settings.php',
    'Hustle_Mad_Mimi' => $baseDir . '/inc/providers/madmimi/hustle-mad-mimi.php',
    'Hustle_Mad_Mimi_Api' => $baseDir . '/inc/providers/madmimi/hustle-mad-mimi-api.php',
    'Hustle_Mad_Mimi_Form_Hooks' => $baseDir . '/inc/providers/madmimi/hustle-mad-mimi-form-hooks.php',
    'Hustle_Mad_Mimi_Form_Settings' => $baseDir . '/inc/providers/madmimi/hustle-mad-mimi-form-settings.php',
    'Hustle_Mail' => $baseDir . '/inc/hustle-mail.php',
    'Hustle_Mailchimp' => $baseDir . '/inc/providers/mailchimp/hustle-mailchimp.php',
    'Hustle_Mailchimp_Api' => $baseDir . '/inc/providers/mailchimp/hustle-mailchimp-api.php',
    'Hustle_Mailchimp_Form_Hooks' => $baseDir . '/inc/providers/mailchimp/hustle-mailchimp-form-hooks.php',
    'Hustle_Mailchimp_Form_Settings' => $baseDir . '/inc/providers/mailchimp/hustle-mailchimp-form-settings.php',
    'Hustle_MailerLite' => $baseDir . '/inc/providers/mailerlite/hustle-mailerlite.php',
    'Hustle_MailerLite_Api' => $baseDir . '/inc/providers/mailerlite/hustle-mailerlite-api.php',
    'Hustle_MailerLite_Form_Hooks' => $baseDir . '/inc/providers/mailerlite/hustle-mailerlite-form-hooks.php',
    'Hustle_MailerLite_Form_Settings' => $baseDir . '/inc/providers/mailerlite/hustle-mailerlite-form-settings.php',
    'Hustle_Mailpoet' => $baseDir . '/inc/providers/mailpoet/class-hustle-mailpoet.php',
    'Hustle_Mailpoet_Form_Hooks' => $baseDir . '/inc/providers/mailpoet/class-hustle-mailpoet-form-hooks.php',
    'Hustle_Mailpoet_Form_Settings' => $baseDir . '/inc/providers/mailpoet/class-hustle-mailpoet-form-settings.php',
    'Hustle_Mailster' => $baseDir . '/inc/providers/mailster/class-hustle-mailster.php',
    'Hustle_Mailster_Form_Hooks' => $baseDir . '/inc/providers/mailster/class-hustle-mailster-form-hooks.php',
    'Hustle_Mailster_Form_Settings' => $baseDir . '/inc/providers/mailster/class-hustle-mailster-form-settings.php',
    'Hustle_Mautic' => $baseDir . '/inc/providers/mautic/hustle-mautic.php',
    'Hustle_Mautic_Api' => $baseDir . '/inc/providers/mautic/hustle-mautic-api.php',
    'Hustle_Mautic_Form_Hooks' => $baseDir . '/inc/providers/mautic/hustle-mautic-form-hooks.php',
    'Hustle_Mautic_Form_Settings' => $baseDir . '/inc/providers/mautic/hustle-mautic-form-settings.php',
    'Hustle_Meta' => $baseDir . '/inc/class-hustle-meta.php',
    'Hustle_Meta_Base_Content' => $baseDir . '/inc/metas/class-hustle-meta-base-content.php',
    'Hustle_Meta_Base_Design' => $baseDir . '/inc/metas/class-hustle-meta-base-design.php',
    'Hustle_Meta_Base_Display' => $baseDir . '/inc/metas/class-hustle-meta-base-display.php',
    'Hustle_Meta_Base_Emails' => $baseDir . '/inc/metas/class-hustle-meta-base-emails.php',
    'Hustle_Meta_Base_Integrations' => $baseDir . '/inc/metas/class-hustle-meta-base-integrations.php',
    'Hustle_Meta_Base_Settings' => $baseDir . '/inc/metas/class-hustle-meta-base-settings.php',
    'Hustle_Meta_Base_Visibility' => $baseDir . '/inc/metas/class-hustle-meta-base-visibility.php',
    'Hustle_Migration' => $baseDir . '/inc/hustle-migration.php',
    'Hustle_Model' => $baseDir . '/inc/hustle-model.php',
    'Hustle_Module_Admin' => $baseDir . '/inc/class-hustle-module-admin.php',
    'Hustle_Module_Collection' => $baseDir . '/inc/class-hustle-module-collection.php',
    'Hustle_Module_Front' => $baseDir . '/inc/front/hustle-module-front.php',
    'Hustle_Module_Front_Ajax' => $baseDir . '/inc/front/hustle-module-front-ajax.php',
    'Hustle_Module_Model' => $baseDir . '/inc/hustle-module-model.php',
    'Hustle_Module_Page_Abstract' => $baseDir . '/inc/class-hustle-module-page-abstract.php',
    'Hustle_Module_Preview' => $baseDir . '/inc/front/class-hustle-module-preview.php',
    'Hustle_Module_Renderer' => $baseDir . '/inc/front/hustle-module-renderer.php',
    'Hustle_Module_Widget' => $baseDir . '/inc/hustle-module-widget.php',
    'Hustle_Module_Widget_Legacy' => $baseDir . '/inc/hustle-module-widget-legacy.php',
    'Hustle_Modules_Common_Admin_Ajax' => $baseDir . '/inc/hustle-modules-common-admin-ajax.php',
    'Hustle_Multisite' => $baseDir . '/inc/multisite/class-hustle-multisite.php',
    'Hustle_New_SendGrid_Api' => $baseDir . '/inc/providers/sendgrid/hustle-sendgrid-api-new.php',
    'Hustle_Notifications' => $baseDir . '/inc/class-hustle-notifications.php',
    'Hustle_Palettes_Helper' => $baseDir . '/inc/helpers/class-hustle-palettes-helper.php',
    'Hustle_Popup_Admin' => $baseDir . '/inc/hustle-popup-admin.php',
    'Hustle_Popup_Settings' => $baseDir . '/inc/metas/popup/hustle-popup-settings.php',
    'Hustle_Provider_Abstract' => $baseDir . '/inc/provider/class-hustle-provider-abstract.php',
    'Hustle_Provider_Admin_Ajax' => $baseDir . '/inc/provider/class-hustle-provider-admin-ajax.php',
    'Hustle_Provider_Autoload' => $baseDir . '/inc/provider/class-hustle-provider-autoload.php',
    'Hustle_Provider_Container' => $baseDir . '/inc/provider/class-hustle-provider-container.php',
    'Hustle_Provider_Form_Hooks_Abstract' => $baseDir . '/inc/provider/class-hustle-provider-form-hooks-abstract.php',
    'Hustle_Provider_Form_Settings_Abstract' => $baseDir . '/inc/provider/class-hustle-provider-form-settings-abstract.php',
    'Hustle_Provider_Interface' => $baseDir . '/inc/provider/class-hustle-provider-interface.php',
    'Hustle_Provider_Utils' => $baseDir . '/inc/provider/class-hustle-provider-utils.php',
    'Hustle_Providers' => $baseDir . '/inc/hustle-providers.php',
    'Hustle_Providers_Admin' => $baseDir . '/inc/hustle-providers-admin.php',
    'Hustle_Renderer_Abstract' => $baseDir . '/inc/front/hustle-renderer-abstract.php',
    'Hustle_Renderer_Sshare' => $baseDir . '/inc/front/hustle-renderer-sshare.php',
    'Hustle_SShare_Admin' => $baseDir . '/inc/hustle-sshare-admin.php',
    'Hustle_SShare_Content' => $baseDir . '/inc/metas/sshare/hustle-sshare-content.php',
    'Hustle_SShare_Design' => $baseDir . '/inc/metas/sshare/hustle-sshare-design.php',
    'Hustle_SShare_Display' => $baseDir . '/inc/metas/sshare/hustle-sshare-display.php',
    'Hustle_SShare_Model' => $baseDir . '/inc/hustle-sshare-model.php',
    'Hustle_SendGrid' => $baseDir . '/inc/providers/sendgrid/hustle-sendgrid.php',
    'Hustle_SendGrid_Api' => $baseDir . '/inc/providers/sendgrid/hustle-sendgrid-api.php',
    'Hustle_SendGrid_Form_Settings' => $baseDir . '/inc/providers/sendgrid/hustle-sendgrid-form-settings.php',
    'Hustle_Sendgrid_Form_Hooks' => $baseDir . '/inc/providers/sendgrid/hustle-sendgrid-form-hooks.php',
    'Hustle_SendinBlue' => $baseDir . '/inc/providers/sendinblue/hustle-sendinblue.php',
    'Hustle_SendinBlue_Api' => $baseDir . '/inc/providers/sendinblue/hustle-sendinblue-api.php',
    'Hustle_SendinBlue_Form_Hooks' => $baseDir . '/inc/providers/sendinblue/hustle-sendinblue-form-hooks.php',
    'Hustle_SendinBlue_Form_Settings' => $baseDir . '/inc/providers/sendinblue/hustle-sendinblue-form-settings.php',
    'Hustle_Sendy' => $baseDir . '/inc/providers/sendy/hustle-sendy.php',
    'Hustle_Sendy_API' => $baseDir . '/inc/providers/sendy/hustle-sendy-api.php',
    'Hustle_Sendy_Form_Hooks' => $baseDir . '/inc/providers/sendy/hustle-sendy-form-hooks.php',
    'Hustle_Sendy_Form_Settings' => $baseDir . '/inc/providers/sendy/hustle-sendy-form-settings.php',
    'Hustle_Settings_Admin' => $baseDir . '/inc/class-hustle-settings-admin.php',
    'Hustle_Settings_Admin_Ajax' => $baseDir . '/inc/hustle-settings-admin-ajax.php',
    'Hustle_Settings_Page' => $baseDir . '/inc/hustle-settings-page.php',
    'Hustle_Slidein_Admin' => $baseDir . '/inc/hustle-slidein-admin.php',
    'Hustle_Slidein_Settings' => $baseDir . '/inc/metas/slidein/hustle-slidein-settings.php',
    'Hustle_Templates_Helper' => $baseDir . '/inc/helpers/class-hustle-templates-helper.php',
    'Hustle_Time_Helper' => $baseDir . '/inc/helpers/class-hustle-time-helper.php',
    'Hustle_Tracking_Model' => $baseDir . '/inc/hustle-tracking-model.php',
    'Hustle_Tutorials_Page' => $baseDir . '/inc/class-hustle-tutorials-page.php',
    'Hustle_Upsell_Page' => $baseDir . '/inc/class-hustle-upsell-page.php',
    'Hustle_Wp_Dashboard_Page' => $baseDir . '/inc/class-hustle-wp-dashboard-page.php',
    'Hustle_Zapier' => $baseDir . '/inc/providers/zapier/hustle-zapier.php',
    'Hustle_Zapier_API' => $baseDir . '/inc/providers/zapier/hustle-zapier-api.php',
    'Hustle_Zapier_Form_Hooks' => $baseDir . '/inc/providers/zapier/hustle-zapier-form-hooks.php',
    'Hustle_Zapier_Form_Settings' => $baseDir . '/inc/providers/zapier/hustle-zapier-form-settings.php',
    'Opt_In_Condition_Abstract' => $baseDir . '/inc/display-conditions/class-opt-in-condition-abstract.php',
    'Opt_In_Condition_Archive_Pages' => $baseDir . '/inc/display-conditions/class-opt-in-condition-archive-pages.php',
    'Opt_In_Condition_Categories' => $baseDir . '/inc/display-conditions/class-opt-in-condition-categories.php',
    'Opt_In_Condition_Cookie_Set' => $baseDir . '/inc/display-conditions/class-opt-in-condition-cookie-set.php',
    'Opt_In_Condition_Cpt' => $baseDir . '/inc/display-conditions/class-opt-in-condition-cpt.php',
    'Opt_In_Condition_From_Referrer' => $baseDir . '/inc/display-conditions/class-opt-in-condition-from-referrer.php',
    'Opt_In_Condition_On_Browser' => $baseDir . '/inc/display-conditions/class-opt-in-condition-on-browser.php',
    'Opt_In_Condition_On_Url' => $baseDir . '/inc/display-conditions/class-opt-in-condition-on-url.php',
    'Opt_In_Condition_Page_Templates' => $baseDir . '/inc/display-conditions/class-opt-in-condition-page-templates.php',
    'Opt_In_Condition_Pages' => $baseDir . '/inc/display-conditions/class-opt-in-condition-pages.php',
    'Opt_In_Condition_Posts' => $baseDir . '/inc/display-conditions/class-opt-in-condition-posts.php',
    'Opt_In_Condition_Shown_Less_Than' => $baseDir . '/inc/display-conditions/class-opt-in-condition-shown-less-than.php',
    'Opt_In_Condition_Source_Of_Arrival' => $baseDir . '/inc/display-conditions/class-opt-in-condition-source-of-arrival.php',
    'Opt_In_Condition_Tags' => $baseDir . '/inc/display-conditions/class-opt-in-condition-tags.php',
    'Opt_In_Condition_User_Registration' => $baseDir . '/inc/display-conditions/class-opt-in-condition-user-registration.php',
    'Opt_In_Condition_User_Roles' => $baseDir . '/inc/display-conditions/class-opt-in-condition-user-roles.php',
    'Opt_In_Condition_Visitor_Commented' => $baseDir . '/inc/display-conditions/class-opt-in-condition-visitor-commented.php',
    'Opt_In_Condition_Visitor_Country' => $baseDir . '/inc/display-conditions/class-opt-in-condition-visitor-country.php',
    'Opt_In_Condition_Visitor_Device' => $baseDir . '/inc/display-conditions/class-opt-in-condition-visitor-device.php',
    'Opt_In_Condition_Visitor_Logged_In_Status' => $baseDir . '/inc/display-conditions/class-opt-in-condition-visitor-logged-in-status.php',
    'Opt_In_Condition_Wc_Archive_Pages' => $baseDir . '/inc/display-conditions/class-opt-in-condition-wc-archive-pages.php',
    'Opt_In_Condition_Wc_Categories' => $baseDir . '/inc/display-conditions/class-opt-in-condition-wc-categories.php',
    'Opt_In_Condition_Wc_Pages' => $baseDir . '/inc/display-conditions/class-opt-in-condition-wc-pages.php',
    'Opt_In_Condition_Wc_Static_Pages' => $baseDir . '/inc/display-conditions/class-opt-in-condition-wc-static-pages.php',
    'Opt_In_Condition_Wc_Tags' => $baseDir . '/inc/display-conditions/class-opt-in-condition-wc-tags.php',
    'Opt_In_Condition_Wp_Conditions' => $baseDir . '/inc/display-conditions/class-opt-in-condition-wp-conditions.php',
    'Opt_In_Geo' => $baseDir . '/inc/opt-in-geo.php',
    'Opt_In_Infusionsoft_Api' => $baseDir . '/inc/providers/infusionsoft/hustle-infusion-soft-api.php',
    'Opt_In_Infusionsoft_XML_Res' => $baseDir . '/inc/providers/infusionsoft/class-opt-in-infusionsoft-xml-res.php',
    'Opt_In_Utils' => $baseDir . '/inc/opt-in-utils.php',
    'Opt_In_WPMUDEV_API' => $baseDir . '/inc/opt-in-wpmudev-api.php',
);
