# MailSlurp\InboxControllerApi

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInbox**](InboxControllerApi#createInbox) | **POST** /inboxes | Create an inbox email address. An inbox has a real email address and can send and receive emails. Inboxes can be either &#x60;SMTP&#x60; or &#x60;HTTP&#x60; inboxes.
[**createInboxRuleset**](InboxControllerApi#createInboxRuleset) | **POST** /inboxes/{inboxId}/rulesets | Create an inbox ruleset
[**createInboxWithDefaults**](InboxControllerApi#createInboxWithDefaults) | **POST** /inboxes/withDefaults | Create an inbox with default options. Uses MailSlurp domain pool address and is private.
[**createInboxWithOptions**](InboxControllerApi#createInboxWithOptions) | **POST** /inboxes/withOptions | Create an inbox with options. Extended options for inbox creation.
[**deleteAllInboxes**](InboxControllerApi#deleteAllInboxes) | **DELETE** /inboxes | Delete all inboxes
[**deleteInbox**](InboxControllerApi#deleteInbox) | **DELETE** /inboxes/{inboxId} | Delete inbox
[**doesInboxExist**](InboxControllerApi#doesInboxExist) | **GET** /inboxes/exists | Does inbox exist
[**flushExpired**](InboxControllerApi#flushExpired) | **DELETE** /inboxes/expired | Remove expired inboxes
[**getAllInboxes**](InboxControllerApi#getAllInboxes) | **GET** /inboxes/paginated | List All Inboxes Paginated
[**getEmails**](InboxControllerApi#getEmails) | **GET** /inboxes/{inboxId}/emails | Get emails in an Inbox. This method is not idempotent as it allows retries and waits if you want certain conditions to be met before returning. For simple listing and sorting of known emails use the email controller instead.
[**getInbox**](InboxControllerApi#getInbox) | **GET** /inboxes/{inboxId} | Get Inbox. Returns properties of an inbox.
[**getInboxCount**](InboxControllerApi#getInboxCount) | **GET** /inboxes/count | Get total inbox count
[**getInboxEmailCount**](InboxControllerApi#getInboxEmailCount) | **GET** /inboxes/{inboxId}/emails/count | Get email count in inbox
[**getInboxEmailsPaginated**](InboxControllerApi#getInboxEmailsPaginated) | **GET** /inboxes/{inboxId}/emails/paginated | Get inbox emails paginated
[**getInboxSentEmails**](InboxControllerApi#getInboxSentEmails) | **GET** /inboxes/{inboxId}/sent | Get Inbox Sent Emails
[**getInboxTags**](InboxControllerApi#getInboxTags) | **GET** /inboxes/tags | Get inbox tags
[**getInboxes**](InboxControllerApi#getInboxes) | **GET** /inboxes | List Inboxes and email addresses
[**getOrganizationInboxes**](InboxControllerApi#getOrganizationInboxes) | **GET** /inboxes/organization | List Organization Inboxes Paginated
[**listInboxRulesets**](InboxControllerApi#listInboxRulesets) | **GET** /inboxes/{inboxId}/rulesets | List inbox rulesets
[**listInboxTrackingPixels**](InboxControllerApi#listInboxTrackingPixels) | **GET** /inboxes/{inboxId}/tracking-pixels | List inbox tracking pixels
[**sendEmail**](InboxControllerApi#sendEmail) | **POST** /inboxes/{inboxId} | Send Email
[**sendEmailAndConfirm**](InboxControllerApi#sendEmailAndConfirm) | **POST** /inboxes/{inboxId}/confirm | Send email and return sent confirmation
[**sendTestEmail**](InboxControllerApi#sendTestEmail) | **POST** /inboxes/{inboxId}/send-test-email | Send a test email to inbox
[**setInboxFavourited**](InboxControllerApi#setInboxFavourited) | **PUT** /inboxes/{inboxId}/favourite | Set inbox favourited state
[**updateInbox**](InboxControllerApi#updateInbox) | **PATCH** /inboxes/{inboxId} | Update Inbox. Change name and description. Email address is not editable.



## createInbox

> \MailSlurp\Models\InboxDto createInbox($a_custom_email_address_to_use_with_the_inbox__defaults_to_null__when_null_mail_slurp_will_assign_a_random_email_address_to_the_inbox_such_as_123mailslurp_com__if_you_use_the_use_domain_pool_option_when_the_email_address_is_null_it_will_generate_an_email_address_with_a_more_varied_domain_ending_such_as_123mailslurp_info_or_123mailslurp_biz__when_a_custom_email_address_is_provided_the_address_is_split_into_a_domain_and_the_domain_is_queried_against_your_user__if_you_have_created_the_domain_in_the_mail_slurp_dashboard_and_verified_it_you_can_use_any_email_address_that_ends_with_the_domain__note_domain_types_must_match_the_inbox_type___so_smtp_inboxes_will_only_work_with_smtp_type_domains__avoid_smtp_inboxes_if_you_need_to_send_emails_as_they_can_only_receive__send_an_email_to_this_address_and_the_inbox_will_receive_and_store_it_for_you__to_retrieve_the_email_use_the_inbox_and_email_controller_endpoints_with_the_inbox_id_, $tags_that_inbox_has_been_tagged_with__tags_can_be_added_to_inboxes_to_group_different_inboxes_within_an_account__you_can_also_search_for_inboxes_by_tag_in_the_dashboard_ui_, $optional_name_of_the_inbox__displayed_in_the_dashboard_for_easier_search_and_used_as_the_sender_name_when_sending_emails_, $optional_description_of_the_inbox_for_labelling_purposes__is_shown_in_the_dashboard_and_can_be_used_with, $use_the_mail_slurp_domain_name_pool_with_this_inbox_when_creating_the_email_address__defaults_to_null__if_enabled_the_inbox_will_be_an_email_address_with_a_domain_randomly_chosen_from_a_list_of_the_mail_slurp_domains__this_is_useful_when_the_default_mailslurp_com_email_addresses_used_with_inboxes_are_blocked_or_considered_spam_by_a_provider_or_receiving_service__when_domain_pool_is_enabled_an_email_address_will_be_generated_ending_in_mailslurp_worldinfoxyz______this_means_a_tld_is_randomly_selecting_from_a_list_of__biz__info__xyz_etc_to_add_variance_to_the_generated_email_addresses__when_null_or_false_mail_slurp_uses_the_default_behavior_of_mailslurp_com_or_custom_email_address_provided_by_the_email_address_field__note_this_feature_is_only_available_for_http_inbox_types_, $is_the_inbox_a_favorite__marking_an_inbox_as_a_favorite_is_typically_done_in_the_dashboard_for_quick_access_or_filtering, $optional_inbox_expiration_date__if_null_then_this_inbox_is_permanent_and_the_emails_in_it_wont_be_deleted__if_an_expiration_date_is_provided_or_is_required_by_your_plan_the_inbox_will_be_closed_when_the_expiration_time_is_reached__expired_inboxes_still_contain_their_emails_but_can_no_longer_send_or_receive_emails__an_expired_inbox_record_is_created_when_an_inbox_and_the_email_address_and_inbox_id_are_recorded__the_expires_at_property_is_a_timestamp_string_in_iso_date_time_format_yyyy_mm_dd_th_hmmss_sssxxx_, $number_of_milliseconds_that_inbox_should_exist_for, $deprecated__team_access_is_always_true__grant_team_access_to_this_inbox_and_the_emails_that_belong_to_it_for_team_members_of_your_organization_, $http__default_or_smtp_inbox_type__http_inboxes_are_default_and_best_solution_for_most_cases__smtp_inboxes_are_more_reliable_for_public_inbound_email_consumption__but_do_not_support_sending_emails__when_using_custom_domains_the_domain_type_must_match_the_inbox_type__http_inboxes_are_processed_by_aws_ses_while_smtp_inboxes_use_a_custom_mail_server_running_at_mx_mailslurp_com_)

Create an inbox email address. An inbox has a real email address and can send and receive emails. Inboxes can be either `SMTP` or `HTTP` inboxes.

Create a new inbox and with a randomized email address to send and receive from. Pass emailAddress parameter if you wish to use a specific email address. Creating an inbox is required before sending or receiving emails. If writing tests it is recommended that you create a new inbox during each test method so that it is unique and empty.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$a_custom_email_address_to_use_with_the_inbox__defaults_to_null__when_null_mail_slurp_will_assign_a_random_email_address_to_the_inbox_such_as_123mailslurp_com__if_you_use_the_use_domain_pool_option_when_the_email_address_is_null_it_will_generate_an_email_address_with_a_more_varied_domain_ending_such_as_123mailslurp_info_or_123mailslurp_biz__when_a_custom_email_address_is_provided_the_address_is_split_into_a_domain_and_the_domain_is_queried_against_your_user__if_you_have_created_the_domain_in_the_mail_slurp_dashboard_and_verified_it_you_can_use_any_email_address_that_ends_with_the_domain__note_domain_types_must_match_the_inbox_type___so_smtp_inboxes_will_only_work_with_smtp_type_domains__avoid_smtp_inboxes_if_you_need_to_send_emails_as_they_can_only_receive__send_an_email_to_this_address_and_the_inbox_will_receive_and_store_it_for_you__to_retrieve_the_email_use_the_inbox_and_email_controller_endpoints_with_the_inbox_id_ = 'a_custom_email_address_to_use_with_the_inbox__defaults_to_null__when_null_mail_slurp_will_assign_a_random_email_address_to_the_inbox_such_as_123mailslurp_com__if_you_use_the_use_domain_pool_option_when_the_email_address_is_null_it_will_generate_an_email_address_with_a_more_varied_domain_ending_such_as_123mailslurp_info_or_123mailslurp_biz__when_a_custom_email_address_is_provided_the_address_is_split_into_a_domain_and_the_domain_is_queried_against_your_user__if_you_have_created_the_domain_in_the_mail_slurp_dashboard_and_verified_it_you_can_use_any_email_address_that_ends_with_the_domain__note_domain_types_must_match_the_inbox_type___so_smtp_inboxes_will_only_work_with_smtp_type_domains__avoid_smtp_inboxes_if_you_need_to_send_emails_as_they_can_only_receive__send_an_email_to_this_address_and_the_inbox_will_receive_and_store_it_for_you__to_retrieve_the_email_use_the_inbox_and_email_controller_endpoints_with_the_inbox_id__example'; // string | 
$tags_that_inbox_has_been_tagged_with__tags_can_be_added_to_inboxes_to_group_different_inboxes_within_an_account__you_can_also_search_for_inboxes_by_tag_in_the_dashboard_ui_ = array('tags_that_inbox_has_been_tagged_with__tags_can_be_added_to_inboxes_to_group_different_inboxes_within_an_account__you_can_also_search_for_inboxes_by_tag_in_the_dashboard_ui__example'); // string[] | 
$optional_name_of_the_inbox__displayed_in_the_dashboard_for_easier_search_and_used_as_the_sender_name_when_sending_emails_ = 'optional_name_of_the_inbox__displayed_in_the_dashboard_for_easier_search_and_used_as_the_sender_name_when_sending_emails__example'; // string | 
$optional_description_of_the_inbox_for_labelling_purposes__is_shown_in_the_dashboard_and_can_be_used_with = 'optional_description_of_the_inbox_for_labelling_purposes__is_shown_in_the_dashboard_and_can_be_used_with_example'; // string | 
$use_the_mail_slurp_domain_name_pool_with_this_inbox_when_creating_the_email_address__defaults_to_null__if_enabled_the_inbox_will_be_an_email_address_with_a_domain_randomly_chosen_from_a_list_of_the_mail_slurp_domains__this_is_useful_when_the_default_mailslurp_com_email_addresses_used_with_inboxes_are_blocked_or_considered_spam_by_a_provider_or_receiving_service__when_domain_pool_is_enabled_an_email_address_will_be_generated_ending_in_mailslurp_worldinfoxyz______this_means_a_tld_is_randomly_selecting_from_a_list_of__biz__info__xyz_etc_to_add_variance_to_the_generated_email_addresses__when_null_or_false_mail_slurp_uses_the_default_behavior_of_mailslurp_com_or_custom_email_address_provided_by_the_email_address_field__note_this_feature_is_only_available_for_http_inbox_types_ = True; // bool | 
$is_the_inbox_a_favorite__marking_an_inbox_as_a_favorite_is_typically_done_in_the_dashboard_for_quick_access_or_filtering = True; // bool | 
$optional_inbox_expiration_date__if_null_then_this_inbox_is_permanent_and_the_emails_in_it_wont_be_deleted__if_an_expiration_date_is_provided_or_is_required_by_your_plan_the_inbox_will_be_closed_when_the_expiration_time_is_reached__expired_inboxes_still_contain_their_emails_but_can_no_longer_send_or_receive_emails__an_expired_inbox_record_is_created_when_an_inbox_and_the_email_address_and_inbox_id_are_recorded__the_expires_at_property_is_a_timestamp_string_in_iso_date_time_format_yyyy_mm_dd_th_hmmss_sssxxx_ = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$number_of_milliseconds_that_inbox_should_exist_for = 56; // int | 
$deprecated__team_access_is_always_true__grant_team_access_to_this_inbox_and_the_emails_that_belong_to_it_for_team_members_of_your_organization_ = True; // bool | 
$http__default_or_smtp_inbox_type__http_inboxes_are_default_and_best_solution_for_most_cases__smtp_inboxes_are_more_reliable_for_public_inbound_email_consumption__but_do_not_support_sending_emails__when_using_custom_domains_the_domain_type_must_match_the_inbox_type__http_inboxes_are_processed_by_aws_ses_while_smtp_inboxes_use_a_custom_mail_server_running_at_mx_mailslurp_com_ = 'http__default_or_smtp_inbox_type__http_inboxes_are_default_and_best_solution_for_most_cases__smtp_inboxes_are_more_reliable_for_public_inbound_email_consumption__but_do_not_support_sending_emails__when_using_custom_domains_the_domain_type_must_match_the_inbox_type__http_inboxes_are_processed_by_aws_ses_while_smtp_inboxes_use_a_custom_mail_server_running_at_mx_mailslurp_com__example'; // string | 

try {
    $result = $apiInstance->createInbox($a_custom_email_address_to_use_with_the_inbox__defaults_to_null__when_null_mail_slurp_will_assign_a_random_email_address_to_the_inbox_such_as_123mailslurp_com__if_you_use_the_use_domain_pool_option_when_the_email_address_is_null_it_will_generate_an_email_address_with_a_more_varied_domain_ending_such_as_123mailslurp_info_or_123mailslurp_biz__when_a_custom_email_address_is_provided_the_address_is_split_into_a_domain_and_the_domain_is_queried_against_your_user__if_you_have_created_the_domain_in_the_mail_slurp_dashboard_and_verified_it_you_can_use_any_email_address_that_ends_with_the_domain__note_domain_types_must_match_the_inbox_type___so_smtp_inboxes_will_only_work_with_smtp_type_domains__avoid_smtp_inboxes_if_you_need_to_send_emails_as_they_can_only_receive__send_an_email_to_this_address_and_the_inbox_will_receive_and_store_it_for_you__to_retrieve_the_email_use_the_inbox_and_email_controller_endpoints_with_the_inbox_id_, $tags_that_inbox_has_been_tagged_with__tags_can_be_added_to_inboxes_to_group_different_inboxes_within_an_account__you_can_also_search_for_inboxes_by_tag_in_the_dashboard_ui_, $optional_name_of_the_inbox__displayed_in_the_dashboard_for_easier_search_and_used_as_the_sender_name_when_sending_emails_, $optional_description_of_the_inbox_for_labelling_purposes__is_shown_in_the_dashboard_and_can_be_used_with, $use_the_mail_slurp_domain_name_pool_with_this_inbox_when_creating_the_email_address__defaults_to_null__if_enabled_the_inbox_will_be_an_email_address_with_a_domain_randomly_chosen_from_a_list_of_the_mail_slurp_domains__this_is_useful_when_the_default_mailslurp_com_email_addresses_used_with_inboxes_are_blocked_or_considered_spam_by_a_provider_or_receiving_service__when_domain_pool_is_enabled_an_email_address_will_be_generated_ending_in_mailslurp_worldinfoxyz______this_means_a_tld_is_randomly_selecting_from_a_list_of__biz__info__xyz_etc_to_add_variance_to_the_generated_email_addresses__when_null_or_false_mail_slurp_uses_the_default_behavior_of_mailslurp_com_or_custom_email_address_provided_by_the_email_address_field__note_this_feature_is_only_available_for_http_inbox_types_, $is_the_inbox_a_favorite__marking_an_inbox_as_a_favorite_is_typically_done_in_the_dashboard_for_quick_access_or_filtering, $optional_inbox_expiration_date__if_null_then_this_inbox_is_permanent_and_the_emails_in_it_wont_be_deleted__if_an_expiration_date_is_provided_or_is_required_by_your_plan_the_inbox_will_be_closed_when_the_expiration_time_is_reached__expired_inboxes_still_contain_their_emails_but_can_no_longer_send_or_receive_emails__an_expired_inbox_record_is_created_when_an_inbox_and_the_email_address_and_inbox_id_are_recorded__the_expires_at_property_is_a_timestamp_string_in_iso_date_time_format_yyyy_mm_dd_th_hmmss_sssxxx_, $number_of_milliseconds_that_inbox_should_exist_for, $deprecated__team_access_is_always_true__grant_team_access_to_this_inbox_and_the_emails_that_belong_to_it_for_team_members_of_your_organization_, $http__default_or_smtp_inbox_type__http_inboxes_are_default_and_best_solution_for_most_cases__smtp_inboxes_are_more_reliable_for_public_inbound_email_consumption__but_do_not_support_sending_emails__when_using_custom_domains_the_domain_type_must_match_the_inbox_type__http_inboxes_are_processed_by_aws_ses_while_smtp_inboxes_use_a_custom_mail_server_running_at_mx_mailslurp_com_);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->createInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **a_custom_email_address_to_use_with_the_inbox__defaults_to_null__when_null_mail_slurp_will_assign_a_random_email_address_to_the_inbox_such_as_123mailslurp_com__if_you_use_the_use_domain_pool_option_when_the_email_address_is_null_it_will_generate_an_email_address_with_a_more_varied_domain_ending_such_as_123mailslurp_info_or_123mailslurp_biz__when_a_custom_email_address_is_provided_the_address_is_split_into_a_domain_and_the_domain_is_queried_against_your_user__if_you_have_created_the_domain_in_the_mail_slurp_dashboard_and_verified_it_you_can_use_any_email_address_that_ends_with_the_domain__note_domain_types_must_match_the_inbox_type___so_smtp_inboxes_will_only_work_with_smtp_type_domains__avoid_smtp_inboxes_if_you_need_to_send_emails_as_they_can_only_receive__send_an_email_to_this_address_and_the_inbox_will_receive_and_store_it_for_you__to_retrieve_the_email_use_the_inbox_and_email_controller_endpoints_with_the_inbox_id_** | **string**|  | [optional]
 **tags_that_inbox_has_been_tagged_with__tags_can_be_added_to_inboxes_to_group_different_inboxes_within_an_account__you_can_also_search_for_inboxes_by_tag_in_the_dashboard_ui_** | [**string[]**](../Model/string)|  | [optional]
 **optional_name_of_the_inbox__displayed_in_the_dashboard_for_easier_search_and_used_as_the_sender_name_when_sending_emails_** | **string**|  | [optional]
 **optional_description_of_the_inbox_for_labelling_purposes__is_shown_in_the_dashboard_and_can_be_used_with** | **string**|  | [optional]
 **use_the_mail_slurp_domain_name_pool_with_this_inbox_when_creating_the_email_address__defaults_to_null__if_enabled_the_inbox_will_be_an_email_address_with_a_domain_randomly_chosen_from_a_list_of_the_mail_slurp_domains__this_is_useful_when_the_default_mailslurp_com_email_addresses_used_with_inboxes_are_blocked_or_considered_spam_by_a_provider_or_receiving_service__when_domain_pool_is_enabled_an_email_address_will_be_generated_ending_in_mailslurp_worldinfoxyz______this_means_a_tld_is_randomly_selecting_from_a_list_of__biz__info__xyz_etc_to_add_variance_to_the_generated_email_addresses__when_null_or_false_mail_slurp_uses_the_default_behavior_of_mailslurp_com_or_custom_email_address_provided_by_the_email_address_field__note_this_feature_is_only_available_for_http_inbox_types_** | **bool**|  | [optional]
 **is_the_inbox_a_favorite__marking_an_inbox_as_a_favorite_is_typically_done_in_the_dashboard_for_quick_access_or_filtering** | **bool**|  | [optional]
 **optional_inbox_expiration_date__if_null_then_this_inbox_is_permanent_and_the_emails_in_it_wont_be_deleted__if_an_expiration_date_is_provided_or_is_required_by_your_plan_the_inbox_will_be_closed_when_the_expiration_time_is_reached__expired_inboxes_still_contain_their_emails_but_can_no_longer_send_or_receive_emails__an_expired_inbox_record_is_created_when_an_inbox_and_the_email_address_and_inbox_id_are_recorded__the_expires_at_property_is_a_timestamp_string_in_iso_date_time_format_yyyy_mm_dd_th_hmmss_sssxxx_** | **\DateTime**|  | [optional]
 **number_of_milliseconds_that_inbox_should_exist_for** | **int**|  | [optional]
 **deprecated__team_access_is_always_true__grant_team_access_to_this_inbox_and_the_emails_that_belong_to_it_for_team_members_of_your_organization_** | **bool**|  | [optional]
 **http__default_or_smtp_inbox_type__http_inboxes_are_default_and_best_solution_for_most_cases__smtp_inboxes_are_more_reliable_for_public_inbound_email_consumption__but_do_not_support_sending_emails__when_using_custom_domains_the_domain_type_must_match_the_inbox_type__http_inboxes_are_processed_by_aws_ses_while_smtp_inboxes_use_a_custom_mail_server_running_at_mx_mailslurp_com_** | **string**|  | [optional]

### Return type

[**\MailSlurp\Models\InboxDto**](../Model/InboxDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## createInboxRuleset

> \MailSlurp\Models\InboxRulesetDto createInboxRuleset($inbox_id, $create_inbox_ruleset_options)

Create an inbox ruleset

Create a new inbox rule for forwarding, blocking, and allowing emails when sending and receiving

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 
$create_inbox_ruleset_options = new \MailSlurp\Models\CreateInboxRulesetOptions(); // \MailSlurp\Models\CreateInboxRulesetOptions | 

try {
    $result = $apiInstance->createInboxRuleset($inbox_id, $create_inbox_ruleset_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->createInboxRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |
 **create_inbox_ruleset_options** | [**\MailSlurp\Models\CreateInboxRulesetOptions**](../Model/CreateInboxRulesetOptions)|  |

### Return type

[**\MailSlurp\Models\InboxRulesetDto**](../Model/InboxRulesetDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## createInboxWithDefaults

> \MailSlurp\Models\InboxDto createInboxWithDefaults()

Create an inbox with default options. Uses MailSlurp domain pool address and is private.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createInboxWithDefaults();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->createInboxWithDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\InboxDto**](../Model/InboxDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## createInboxWithOptions

> \MailSlurp\Models\InboxDto createInboxWithOptions($create_inbox_dto)

Create an inbox with options. Extended options for inbox creation.

Additional endpoint that allows inbox creation with request body options. Can be more flexible that other methods for some clients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_inbox_dto = new \MailSlurp\Models\CreateInboxDto(); // \MailSlurp\Models\CreateInboxDto | 

try {
    $result = $apiInstance->createInboxWithOptions($create_inbox_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->createInboxWithOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_inbox_dto** | [**\MailSlurp\Models\CreateInboxDto**](../Model/CreateInboxDto)|  |

### Return type

[**\MailSlurp\Models\InboxDto**](../Model/InboxDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## deleteAllInboxes

> deleteAllInboxes()

Delete all inboxes

Permanently delete all inboxes and associated email addresses. This will also delete all emails within the inboxes. Be careful as inboxes cannot be recovered once deleted. Note: deleting inboxes will not impact your usage limits. Monthly inbox creation limits are based on how many inboxes were created in the last 30 days, not how many inboxes you currently have.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAllInboxes();
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->deleteAllInboxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## deleteInbox

> deleteInbox($inbox_id)

Delete inbox

Permanently delete an inbox and associated email address as well as all emails within the given inbox. This action cannot be undone. Note: deleting an inbox will not affect your account usage. Monthly inbox usage is based on how many inboxes you create within 30 days, not how many exist at time of request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 

try {
    $apiInstance->deleteInbox($inbox_id);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->deleteInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## doesInboxExist

> \MailSlurp\Models\InboxExistsDto doesInboxExist($email_address)

Does inbox exist

Check if inboxes exist by email address. Useful if you are sending emails to mailslurp addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_address = 'email_address_example'; // string | Email address

try {
    $result = $apiInstance->doesInboxExist($email_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->doesInboxExist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address** | **string**| Email address |

### Return type

[**\MailSlurp\Models\InboxExistsDto**](../Model/InboxExistsDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## flushExpired

> \MailSlurp\Models\FlushExpiredInboxesResult flushExpired($before)

Remove expired inboxes

Remove any expired inboxes for your account (instead of waiting for scheduled removal on server)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional expired at before flag to flush expired inboxes that have expired before the given time

try {
    $result = $apiInstance->flushExpired($before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->flushExpired: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **before** | **\DateTime**| Optional expired at before flag to flush expired inboxes that have expired before the given time | [optional]

### Return type

[**\MailSlurp\Models\FlushExpiredInboxesResult**](../Model/FlushExpiredInboxesResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getAllInboxes

> \MailSlurp\Models\PageInboxProjection getAllInboxes($page, $size, $sort, $favourite, $search, $tag, $deprecated__optionally_filter_by_team_access_, $since, $before)

List All Inboxes Paginated

List inboxes in paginated form. The results are available on the `content` property of the returned object. This method allows for page index (zero based), page size (how many results to return), and a sort direction (based on createdAt time). You Can also filter by whether an inbox is favorited or use email address pattern. This method is the recommended way to query inboxes. The alternative `getInboxes` method returns a full list of inboxes but is limited to 100 results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index in list pagination
$size = 20; // int | Optional page size in list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$favourite = false; // bool | Optionally filter results for favourites only
$search = 'search_example'; // string | Optionally filter by search words partial matching ID, tags, name, and email address
$tag = 'tag_example'; // string | Optionally filter by tags. Will return inboxes that include given tags
$deprecated__optionally_filter_by_team_access_ = True; // bool | 
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created before given date time

try {
    $result = $apiInstance->getAllInboxes($page, $size, $sort, $favourite, $search, $tag, $deprecated__optionally_filter_by_team_access_, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getAllInboxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Optional page index in list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **favourite** | **bool**| Optionally filter results for favourites only | [optional] [default to false]
 **search** | **string**| Optionally filter by search words partial matching ID, tags, name, and email address | [optional]
 **tag** | **string**| Optionally filter by tags. Will return inboxes that include given tags | [optional]
 **deprecated__optionally_filter_by_team_access_** | **bool**|  | [optional]
 **since** | **\DateTime**| Optional filter by created after given date time | [optional]
 **before** | **\DateTime**| Optional filter by created before given date time | [optional]

### Return type

[**\MailSlurp\Models\PageInboxProjection**](../Model/PageInboxProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getEmails

> \MailSlurp\Models\EmailPreview[] getEmails($id_of_inbox_that_emails_belongs_to, $alias_for_limit__assessed_first_before_assessing_any_passed_limit_, $limit, $sort_the_results_by_received_date_and_direction_asc_or_desc, $retry_timeout, $delay_timeout, $min_count, $unread_only, $exclude_emails_received_after_this_iso_8601_date_time, $exclude_emails_received_before_this_iso_8601_date_time)

Get emails in an Inbox. This method is not idempotent as it allows retries and waits if you want certain conditions to be met before returning. For simple listing and sorting of known emails use the email controller instead.

List emails that an inbox has received. Only emails that are sent to the inbox's email address will appear in the inbox. It may take several seconds for any email you send to an inbox's email address to appear in the inbox. To make this endpoint wait for a minimum number of emails use the `minCount` parameter. The server will retry the inbox database until the `minCount` is satisfied or the `retryTimeout` is reached

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_of_inbox_that_emails_belongs_to = 'id_of_inbox_that_emails_belongs_to_example'; // string | 
$alias_for_limit__assessed_first_before_assessing_any_passed_limit_ = 56; // int | 
$limit = 56; // int | Limit the result set, ordered by received date time sort direction. Maximum 100. For more listing options see the email controller
$sort_the_results_by_received_date_and_direction_asc_or_desc = 'sort_the_results_by_received_date_and_direction_asc_or_desc_example'; // string | 
$retry_timeout = 56; // int | Maximum milliseconds to spend retrying inbox database until minCount emails are returned
$delay_timeout = 56; // int | 
$min_count = 56; // int | Minimum acceptable email count. Will cause request to hang (and retry) until minCount is satisfied or retryTimeout is reached.
$unread_only = True; // bool | 
$exclude_emails_received_after_this_iso_8601_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$exclude_emails_received_before_this_iso_8601_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->getEmails($id_of_inbox_that_emails_belongs_to, $alias_for_limit__assessed_first_before_assessing_any_passed_limit_, $limit, $sort_the_results_by_received_date_and_direction_asc_or_desc, $retry_timeout, $delay_timeout, $min_count, $unread_only, $exclude_emails_received_after_this_iso_8601_date_time, $exclude_emails_received_before_this_iso_8601_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_of_inbox_that_emails_belongs_to** | [**string**](../Model/)|  |
 **alias_for_limit__assessed_first_before_assessing_any_passed_limit_** | **int**|  | [optional]
 **limit** | **int**| Limit the result set, ordered by received date time sort direction. Maximum 100. For more listing options see the email controller | [optional]
 **sort_the_results_by_received_date_and_direction_asc_or_desc** | **string**|  | [optional]
 **retry_timeout** | **int**| Maximum milliseconds to spend retrying inbox database until minCount emails are returned | [optional]
 **delay_timeout** | **int**|  | [optional]
 **min_count** | **int**| Minimum acceptable email count. Will cause request to hang (and retry) until minCount is satisfied or retryTimeout is reached. | [optional]
 **unread_only** | **bool**|  | [optional]
 **exclude_emails_received_after_this_iso_8601_date_time** | **\DateTime**|  | [optional]
 **exclude_emails_received_before_this_iso_8601_date_time** | **\DateTime**|  | [optional]

### Return type

[**\MailSlurp\Models\EmailPreview[]**](../Model/EmailPreview)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getInbox

> \MailSlurp\Models\InboxDto getInbox($inbox_id)

Get Inbox. Returns properties of an inbox.

Returns an inbox's properties, including its email address and ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 

try {
    $result = $apiInstance->getInbox($inbox_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\InboxDto**](../Model/InboxDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getInboxCount

> \MailSlurp\Models\CountDto getInboxCount()

Get total inbox count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInboxCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getInboxCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\CountDto**](../Model/CountDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getInboxEmailCount

> \MailSlurp\Models\CountDto getInboxEmailCount($id_of_inbox_that_emails_belongs_to)

Get email count in inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_of_inbox_that_emails_belongs_to = 'id_of_inbox_that_emails_belongs_to_example'; // string | 

try {
    $result = $apiInstance->getInboxEmailCount($id_of_inbox_that_emails_belongs_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getInboxEmailCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_of_inbox_that_emails_belongs_to** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\CountDto**](../Model/CountDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getInboxEmailsPaginated

> \MailSlurp\Models\PageEmailPreview getInboxEmailsPaginated($id_of_inbox_that_emails_belongs_to, $page, $size, $sort, $since, $before)

Get inbox emails paginated

Get a paginated list of emails in an inbox. Does not hold connections open.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_of_inbox_that_emails_belongs_to = 'id_of_inbox_that_emails_belongs_to_example'; // string | 
$page = 0; // int | Optional page index in inbox emails list pagination
$size = 20; // int | Optional page size in inbox emails list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by received after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by received before given date time

try {
    $result = $apiInstance->getInboxEmailsPaginated($id_of_inbox_that_emails_belongs_to, $page, $size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getInboxEmailsPaginated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_of_inbox_that_emails_belongs_to** | [**string**](../Model/)|  |
 **page** | **int**| Optional page index in inbox emails list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in inbox emails list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **since** | **\DateTime**| Optional filter by received after given date time | [optional]
 **before** | **\DateTime**| Optional filter by received before given date time | [optional]

### Return type

[**\MailSlurp\Models\PageEmailPreview**](../Model/PageEmailPreview)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getInboxSentEmails

> \MailSlurp\Models\PageSentEmailProjection getInboxSentEmails($inbox_id, $page, $optional_page_size_in_inbox_sent_email_list_pagination, $sort, $search_filter, $since, $before)

Get Inbox Sent Emails

Returns an inbox's sent email receipts. Call individual sent email endpoints for more details. Note for privacy reasons the full body of sent emails is never stored. An MD5 hash hex is available for comparison instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 
$page = 0; // int | Optional page index in inbox sent email list pagination
$optional_page_size_in_inbox_sent_email_list_pagination = 20; // int | 
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional sent email search
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by sent after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by sent before given date time

try {
    $result = $apiInstance->getInboxSentEmails($inbox_id, $page, $optional_page_size_in_inbox_sent_email_list_pagination, $sort, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getInboxSentEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |
 **page** | **int**| Optional page index in inbox sent email list pagination | [optional] [default to 0]
 **optional_page_size_in_inbox_sent_email_list_pagination** | **int**|  | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional sent email search | [optional]
 **since** | **\DateTime**| Optional filter by sent after given date time | [optional]
 **before** | **\DateTime**| Optional filter by sent before given date time | [optional]

### Return type

[**\MailSlurp\Models\PageSentEmailProjection**](../Model/PageSentEmailProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getInboxTags

> string[] getInboxTags()

Get inbox tags

Get all inbox tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInboxTags();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getInboxTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getInboxes

> \MailSlurp\Models\InboxDto[] getInboxes($size, $sort, $since, $before)

List Inboxes and email addresses

List the inboxes you have created. Note use of the more advanced `getAllEmails` is recommended and allows paginated access using a limit and sort parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$size = 100; // int | Optional result size limit. Note an automatic limit of 100 results is applied. See the paginated `getAllEmails` for larger queries.
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created before given date time

try {
    $result = $apiInstance->getInboxes($size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getInboxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| Optional result size limit. Note an automatic limit of 100 results is applied. See the paginated &#x60;getAllEmails&#x60; for larger queries. | [optional] [default to 100]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **since** | **\DateTime**| Optional filter by created after given date time | [optional]
 **before** | **\DateTime**| Optional filter by created before given date time | [optional]

### Return type

[**\MailSlurp\Models\InboxDto[]**](../Model/InboxDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getOrganizationInboxes

> \MailSlurp\Models\PageOrganizationInboxProjection getOrganizationInboxes($page, $size, $sort, $search_filter, $since, $before)

List Organization Inboxes Paginated

List organization inboxes in paginated form. These are inboxes created with `allowTeamAccess` flag enabled. Organization inboxes are `readOnly` for non-admin users. The results are available on the `content` property of the returned object. This method allows for page index (zero based), page size (how many results to return), and a sort direction (based on createdAt time).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index in list pagination
$size = 20; // int | Optional page size in list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created before given date time

try {
    $result = $apiInstance->getOrganizationInboxes($page, $size, $sort, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getOrganizationInboxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Optional page index in list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Optional filter by created after given date time | [optional]
 **before** | **\DateTime**| Optional filter by created before given date time | [optional]

### Return type

[**\MailSlurp\Models\PageOrganizationInboxProjection**](../Model/PageOrganizationInboxProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## listInboxRulesets

> \MailSlurp\Models\PageInboxRulesetDto listInboxRulesets($inbox_id, $page, $size, $sort, $search_filter, $since, $before)

List inbox rulesets

List all rulesets attached to an inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 
$page = 0; // int | Optional page index in inbox ruleset list pagination
$size = 20; // int | Optional page size in inbox ruleset list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created before given date time

try {
    $result = $apiInstance->listInboxRulesets($inbox_id, $page, $size, $sort, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->listInboxRulesets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |
 **page** | **int**| Optional page index in inbox ruleset list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in inbox ruleset list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Optional filter by created after given date time | [optional]
 **before** | **\DateTime**| Optional filter by created before given date time | [optional]

### Return type

[**\MailSlurp\Models\PageInboxRulesetDto**](../Model/PageInboxRulesetDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## listInboxTrackingPixels

> \MailSlurp\Models\PageTrackingPixelProjection listInboxTrackingPixels($inbox_id, $page, $optional_page_size_in_inbox_tracking_pixel_list_pagination, $sort, $search_filter, $since, $before)

List inbox tracking pixels

List all tracking pixels sent from an inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 
$page = 0; // int | Optional page index in inbox tracking pixel list pagination
$optional_page_size_in_inbox_tracking_pixel_list_pagination = 20; // int | 
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created before given date time

try {
    $result = $apiInstance->listInboxTrackingPixels($inbox_id, $page, $optional_page_size_in_inbox_tracking_pixel_list_pagination, $sort, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->listInboxTrackingPixels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |
 **page** | **int**| Optional page index in inbox tracking pixel list pagination | [optional] [default to 0]
 **optional_page_size_in_inbox_tracking_pixel_list_pagination** | **int**|  | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Optional filter by created after given date time | [optional]
 **before** | **\DateTime**| Optional filter by created before given date time | [optional]

### Return type

[**\MailSlurp\Models\PageTrackingPixelProjection**](../Model/PageTrackingPixelProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## sendEmail

> sendEmail($id_of_the_inbox_you_want_to_send_the_email_from, $send_email_options)

Send Email

Send an email from an inbox's email address.  The request body should contain the `SendEmailOptions` that include recipients, attachments, body etc. See `SendEmailOptions` for all available properties. Note the `inboxId` refers to the inbox's id not the inbox's email address. See https://www.mailslurp.com/guides/ for more information on how to send emails. This method does not return a sent email entity due to legacy reasons. To send and get a sent email as returned response use the sister method `sendEmailAndConfirm`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_of_the_inbox_you_want_to_send_the_email_from = 'id_of_the_inbox_you_want_to_send_the_email_from_example'; // string | 
$send_email_options = new \MailSlurp\Models\SendEmailOptions(); // \MailSlurp\Models\SendEmailOptions | 

try {
    $apiInstance->sendEmail($id_of_the_inbox_you_want_to_send_the_email_from, $send_email_options);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_of_the_inbox_you_want_to_send_the_email_from** | [**string**](../Model/)|  |
 **send_email_options** | [**\MailSlurp\Models\SendEmailOptions**](../Model/SendEmailOptions)|  |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## sendEmailAndConfirm

> \MailSlurp\Models\SentEmailDto sendEmailAndConfirm($id_of_the_inbox_you_want_to_send_the_email_from, $send_email_options)

Send email and return sent confirmation

Sister method for standard `sendEmail` method with the benefit of returning a `SentEmail` entity confirming the successful sending of the email with a link to the sent object created for it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_of_the_inbox_you_want_to_send_the_email_from = 'id_of_the_inbox_you_want_to_send_the_email_from_example'; // string | 
$send_email_options = new \MailSlurp\Models\SendEmailOptions(); // \MailSlurp\Models\SendEmailOptions | 

try {
    $result = $apiInstance->sendEmailAndConfirm($id_of_the_inbox_you_want_to_send_the_email_from, $send_email_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->sendEmailAndConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_of_the_inbox_you_want_to_send_the_email_from** | [**string**](../Model/)|  |
 **send_email_options** | [**\MailSlurp\Models\SendEmailOptions**](../Model/SendEmailOptions)|  |

### Return type

[**\MailSlurp\Models\SentEmailDto**](../Model/SentEmailDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## sendTestEmail

> sendTestEmail($inbox_id)

Send a test email to inbox

Send an inbox a test email to test email receiving is working

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 

try {
    $apiInstance->sendTestEmail($inbox_id);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->sendTestEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## setInboxFavourited

> \MailSlurp\Models\InboxDto setInboxFavourited($inbox_id, $set_inbox_favourited_options)

Set inbox favourited state

Set and return new favourite state for an inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 
$set_inbox_favourited_options = new \MailSlurp\Models\SetInboxFavouritedOptions(); // \MailSlurp\Models\SetInboxFavouritedOptions | 

try {
    $result = $apiInstance->setInboxFavourited($inbox_id, $set_inbox_favourited_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->setInboxFavourited: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |
 **set_inbox_favourited_options** | [**\MailSlurp\Models\SetInboxFavouritedOptions**](../Model/SetInboxFavouritedOptions)|  |

### Return type

[**\MailSlurp\Models\InboxDto**](../Model/InboxDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## updateInbox

> \MailSlurp\Models\InboxDto updateInbox($inbox_id, $update_inbox_options)

Update Inbox. Change name and description. Email address is not editable.

Update editable fields on an inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 
$update_inbox_options = new \MailSlurp\Models\UpdateInboxOptions(); // \MailSlurp\Models\UpdateInboxOptions | 

try {
    $result = $apiInstance->updateInbox($inbox_id, $update_inbox_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->updateInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |
 **update_inbox_options** | [**\MailSlurp\Models\UpdateInboxOptions**](../Model/UpdateInboxOptions)|  |

### Return type

[**\MailSlurp\Models\InboxDto**](../Model/InboxDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

