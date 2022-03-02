# MailSlurp\InboxControllerApi

All URIs are relative to *https://api.mailslurp.com*

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
[**getImapSmtpAccess**](InboxControllerApi#getImapSmtpAccess) | **GET** /inboxes/imap-smtp-access | 
[**getInbox**](InboxControllerApi#getInbox) | **GET** /inboxes/{inboxId} | Get Inbox. Returns properties of an inbox.
[**getInboxByEmailAddress**](InboxControllerApi#getInboxByEmailAddress) | **GET** /inboxes/byEmailAddress | Search for an inbox with the provided email address
[**getInboxCount**](InboxControllerApi#getInboxCount) | **GET** /inboxes/count | Get total inbox count
[**getInboxEmailCount**](InboxControllerApi#getInboxEmailCount) | **GET** /inboxes/{inboxId}/emails/count | Get email count in inbox
[**getInboxEmailsPaginated**](InboxControllerApi#getInboxEmailsPaginated) | **GET** /inboxes/{inboxId}/emails/paginated | Get inbox emails paginated
[**getInboxIds**](InboxControllerApi#getInboxIds) | **GET** /inboxes/ids | Get all inbox IDs
[**getInboxSentEmails**](InboxControllerApi#getInboxSentEmails) | **GET** /inboxes/{inboxId}/sent | Get Inbox Sent Emails
[**getInboxTags**](InboxControllerApi#getInboxTags) | **GET** /inboxes/tags | Get inbox tags
[**getInboxes**](InboxControllerApi#getInboxes) | **GET** /inboxes | List Inboxes and email addresses
[**getLatestEmailInInbox**](InboxControllerApi#getLatestEmailInInbox) | **GET** /inboxes/getLatestEmail | Get latest email in an inbox. Use &#x60;WaitForController&#x60; to get emails that may not have arrived yet.
[**getOrganizationInboxes**](InboxControllerApi#getOrganizationInboxes) | **GET** /inboxes/organization | List Organization Inboxes Paginated
[**listInboxRulesets**](InboxControllerApi#listInboxRulesets) | **GET** /inboxes/{inboxId}/rulesets | List inbox rulesets
[**listInboxTrackingPixels**](InboxControllerApi#listInboxTrackingPixels) | **GET** /inboxes/{inboxId}/tracking-pixels | List inbox tracking pixels
[**sendEmail**](InboxControllerApi#sendEmail) | **POST** /inboxes/{inboxId} | Send Email
[**sendEmailAndConfirm**](InboxControllerApi#sendEmailAndConfirm) | **POST** /inboxes/{inboxId}/confirm | Send email and return sent confirmation
[**sendSmtpEnvelope**](InboxControllerApi#sendSmtpEnvelope) | **POST** /inboxes/{inboxId}/smtp-envelope | Send email using an SMTP mail envelope and message body and return sent confirmation
[**sendTestEmail**](InboxControllerApi#sendTestEmail) | **POST** /inboxes/{inboxId}/send-test-email | Send a test email to inbox
[**setInboxFavourited**](InboxControllerApi#setInboxFavourited) | **PUT** /inboxes/{inboxId}/favourite | Set inbox favourited state
[**updateInbox**](InboxControllerApi#updateInbox) | **PATCH** /inboxes/{inboxId} | Update Inbox. Change name and description. Email address is not editable.



## createInbox

> \MailSlurp\Models\InboxDto createInbox($email_address, $tags, $name, $description, $use_domain_pool, $favourite, $expires_at, $expires_in, $allow_team_access, $inbox_type)

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
$email_address = 'email_address_example'; // string | A custom email address to use with the inbox. Defaults to null. When null MailSlurp will assign a random email address to the inbox such as `123@mailslurp.com`. If you use the `useDomainPool` option when the email address is null it will generate an email address with a more varied domain ending such as `123@mailslurp.info` or `123@mailslurp.biz`. When a custom email address is provided the address is split into a domain and the domain is queried against your user. If you have created the domain in the MailSlurp dashboard and verified it you can use any email address that ends with the domain. Note domain types must match the inbox type - so `SMTP` inboxes will only work with `SMTP` type domains. Avoid `SMTP` inboxes if you need to send emails as they can only receive. Send an email to this address and the inbox will receive and store it for you. To retrieve the email use the Inbox and Email Controller endpoints with the inbox ID.
$tags = array('tags_example'); // string[] | Tags that inbox has been tagged with. Tags can be added to inboxes to group different inboxes within an account. You can also search for inboxes by tag in the dashboard UI.
$name = 'name_example'; // string | Optional name of the inbox. Displayed in the dashboard for easier search and used as the sender name when sending emails.
$description = 'description_example'; // string | Optional description of the inbox for labelling purposes. Is shown in the dashboard and can be used with
$use_domain_pool = True; // bool | Use the MailSlurp domain name pool with this inbox when creating the email address. Defaults to null. If enabled the inbox will be an email address with a domain randomly chosen from a list of the MailSlurp domains. This is useful when the default `@mailslurp.com` email addresses used with inboxes are blocked or considered spam by a provider or receiving service. When domain pool is enabled an email address will be generated ending in `@mailslurp.{world,info,xyz,...}` . This means a TLD is randomly selecting from a list of `.biz`, `.info`, `.xyz` etc to add variance to the generated email addresses. When null or false MailSlurp uses the default behavior of `@mailslurp.com` or custom email address provided by the emailAddress field. Note this feature is only available for `HTTP` inbox types.
$favourite = True; // bool | Is the inbox a favorite. Marking an inbox as a favorite is typically done in the dashboard for quick access or filtering
$expires_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional inbox expiration date. If null then this inbox is permanent and the emails in it won't be deleted. If an expiration date is provided or is required by your plan the inbox will be closed when the expiration time is reached. Expired inboxes still contain their emails but can no longer send or receive emails. An ExpiredInboxRecord is created when an inbox and the email address and inbox ID are recorded. The expiresAt property is a timestamp string in ISO DateTime Format yyyy-MM-dd'T'HH:mm:ss.SSSXXX.
$expires_in = 56; // int | Number of milliseconds that inbox should exist for
$allow_team_access = True; // bool | DEPRECATED (team access is always true). Grant team access to this inbox and the emails that belong to it for team members of your organization.
$inbox_type = 'inbox_type_example'; // string | HTTP (default) or SMTP inbox type. HTTP inboxes are default and best solution for most cases. SMTP inboxes are more reliable for public inbound email consumption (but do not support sending emails). When using custom domains the domain type must match the inbox type. HTTP inboxes are processed by AWS SES while SMTP inboxes use a custom mail server running at `mx.mailslurp.com`.

try {
    $result = $apiInstance->createInbox($email_address, $tags, $name, $description, $use_domain_pool, $favourite, $expires_at, $expires_in, $allow_team_access, $inbox_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->createInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address** | **string**| A custom email address to use with the inbox. Defaults to null. When null MailSlurp will assign a random email address to the inbox such as &#x60;123@mailslurp.com&#x60;. If you use the &#x60;useDomainPool&#x60; option when the email address is null it will generate an email address with a more varied domain ending such as &#x60;123@mailslurp.info&#x60; or &#x60;123@mailslurp.biz&#x60;. When a custom email address is provided the address is split into a domain and the domain is queried against your user. If you have created the domain in the MailSlurp dashboard and verified it you can use any email address that ends with the domain. Note domain types must match the inbox type - so &#x60;SMTP&#x60; inboxes will only work with &#x60;SMTP&#x60; type domains. Avoid &#x60;SMTP&#x60; inboxes if you need to send emails as they can only receive. Send an email to this address and the inbox will receive and store it for you. To retrieve the email use the Inbox and Email Controller endpoints with the inbox ID. | [optional]
 **tags** | [**string[]**](../Model/string)| Tags that inbox has been tagged with. Tags can be added to inboxes to group different inboxes within an account. You can also search for inboxes by tag in the dashboard UI. | [optional]
 **name** | **string**| Optional name of the inbox. Displayed in the dashboard for easier search and used as the sender name when sending emails. | [optional]
 **description** | **string**| Optional description of the inbox for labelling purposes. Is shown in the dashboard and can be used with | [optional]
 **use_domain_pool** | **bool**| Use the MailSlurp domain name pool with this inbox when creating the email address. Defaults to null. If enabled the inbox will be an email address with a domain randomly chosen from a list of the MailSlurp domains. This is useful when the default &#x60;@mailslurp.com&#x60; email addresses used with inboxes are blocked or considered spam by a provider or receiving service. When domain pool is enabled an email address will be generated ending in &#x60;@mailslurp.{world,info,xyz,...}&#x60; . This means a TLD is randomly selecting from a list of &#x60;.biz&#x60;, &#x60;.info&#x60;, &#x60;.xyz&#x60; etc to add variance to the generated email addresses. When null or false MailSlurp uses the default behavior of &#x60;@mailslurp.com&#x60; or custom email address provided by the emailAddress field. Note this feature is only available for &#x60;HTTP&#x60; inbox types. | [optional]
 **favourite** | **bool**| Is the inbox a favorite. Marking an inbox as a favorite is typically done in the dashboard for quick access or filtering | [optional]
 **expires_at** | **\DateTime**| Optional inbox expiration date. If null then this inbox is permanent and the emails in it won&#39;t be deleted. If an expiration date is provided or is required by your plan the inbox will be closed when the expiration time is reached. Expired inboxes still contain their emails but can no longer send or receive emails. An ExpiredInboxRecord is created when an inbox and the email address and inbox ID are recorded. The expiresAt property is a timestamp string in ISO DateTime Format yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSXXX. | [optional]
 **expires_in** | **int**| Number of milliseconds that inbox should exist for | [optional]
 **allow_team_access** | **bool**| DEPRECATED (team access is always true). Grant team access to this inbox and the emails that belong to it for team members of your organization. | [optional]
 **inbox_type** | **string**| HTTP (default) or SMTP inbox type. HTTP inboxes are default and best solution for most cases. SMTP inboxes are more reliable for public inbound email consumption (but do not support sending emails). When using custom domains the domain type must match the inbox type. HTTP inboxes are processed by AWS SES while SMTP inboxes use a custom mail server running at &#x60;mx.mailslurp.com&#x60;. | [optional]

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
$inbox_id = 'inbox_id_example'; // string | inboxId
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
 **inbox_id** | [**string**](../Model/)| inboxId |
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

> \MailSlurp\Models\PageInboxProjection getAllInboxes($page, $size, $sort, $favourite, $search, $tag, $team_access, $since, $before)

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
$team_access = True; // bool | DEPRECATED. Optionally filter by team access.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created before given date time

try {
    $result = $apiInstance->getAllInboxes($page, $size, $sort, $favourite, $search, $tag, $team_access, $since, $before);
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
 **team_access** | **bool**| DEPRECATED. Optionally filter by team access. | [optional]
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

> \MailSlurp\Models\EmailPreview[] getEmails($inbox_id, $size, $limit, $sort, $retry_timeout, $delay_timeout, $min_count, $unread_only, $before, $since)

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
$inbox_id = 'inbox_id_example'; // string | Id of inbox that emails belongs to
$size = 56; // int | Alias for limit. Assessed first before assessing any passed limit.
$limit = 56; // int | Limit the result set, ordered by received date time sort direction. Maximum 100. For more listing options see the email controller
$sort = 'sort_example'; // string | Sort the results by received date and direction ASC or DESC
$retry_timeout = 56; // int | Maximum milliseconds to spend retrying inbox database until minCount emails are returned
$delay_timeout = 56; // int | 
$min_count = 56; // int | Minimum acceptable email count. Will cause request to hang (and retry) until minCount is satisfied or retryTimeout is reached.
$unread_only = True; // bool | 
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Exclude emails received after this ISO 8601 date time
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Exclude emails received before this ISO 8601 date time

try {
    $result = $apiInstance->getEmails($inbox_id, $size, $limit, $sort, $retry_timeout, $delay_timeout, $min_count, $unread_only, $before, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Id of inbox that emails belongs to |
 **size** | **int**| Alias for limit. Assessed first before assessing any passed limit. | [optional]
 **limit** | **int**| Limit the result set, ordered by received date time sort direction. Maximum 100. For more listing options see the email controller | [optional]
 **sort** | **string**| Sort the results by received date and direction ASC or DESC | [optional]
 **retry_timeout** | **int**| Maximum milliseconds to spend retrying inbox database until minCount emails are returned | [optional]
 **delay_timeout** | **int**|  | [optional]
 **min_count** | **int**| Minimum acceptable email count. Will cause request to hang (and retry) until minCount is satisfied or retryTimeout is reached. | [optional]
 **unread_only** | **bool**|  | [optional]
 **before** | **\DateTime**| Exclude emails received after this ISO 8601 date time | [optional]
 **since** | **\DateTime**| Exclude emails received before this ISO 8601 date time | [optional]

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


## getImapSmtpAccess

> \MailSlurp\Models\ImapSmtpAccessDetails getImapSmtpAccess($inbox_id)



Get IMAP and SMTP access usernames and passwords

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
$inbox_id = 'inbox_id_example'; // string | Inbox ID

try {
    $result = $apiInstance->getImapSmtpAccess($inbox_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getImapSmtpAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Inbox ID | [optional]

### Return type

[**\MailSlurp\Models\ImapSmtpAccessDetails**](../Model/ImapSmtpAccessDetails)

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


## getInboxByEmailAddress

> \MailSlurp\Models\InboxByEmailAddressResult getInboxByEmailAddress($email_address)

Search for an inbox with the provided email address

Get a inbox result by email address

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
$email_address = 'email_address_example'; // string | 

try {
    $result = $apiInstance->getInboxByEmailAddress($email_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getInboxByEmailAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address** | **string**|  |

### Return type

[**\MailSlurp\Models\InboxByEmailAddressResult**](../Model/InboxByEmailAddressResult)

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

> \MailSlurp\Models\CountDto getInboxEmailCount($inbox_id)

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
$inbox_id = 'inbox_id_example'; // string | Id of inbox that emails belongs to

try {
    $result = $apiInstance->getInboxEmailCount($inbox_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getInboxEmailCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Id of inbox that emails belongs to |

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

> \MailSlurp\Models\PageEmailPreview getInboxEmailsPaginated($inbox_id, $page, $size, $sort, $since, $before)

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
$inbox_id = 'inbox_id_example'; // string | Id of inbox that emails belongs to
$page = 0; // int | Optional page index in inbox emails list pagination
$size = 20; // int | Optional page size in inbox emails list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by received after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by received before given date time

try {
    $result = $apiInstance->getInboxEmailsPaginated($inbox_id, $page, $size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getInboxEmailsPaginated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Id of inbox that emails belongs to |
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


## getInboxIds

> \MailSlurp\Models\InboxIdsResult getInboxIds()

Get all inbox IDs

Get list of inbox IDs

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
    $result = $apiInstance->getInboxIds();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getInboxIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\InboxIdsResult**](../Model/InboxIdsResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getInboxSentEmails

> \MailSlurp\Models\PageSentEmailProjection getInboxSentEmails($inbox_id, $page, $size, $sort, $search_filter, $since, $before)

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
$size = 20; // int | Optional page size in inbox sent email list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional sent email search
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by sent after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by sent before given date time

try {
    $result = $apiInstance->getInboxSentEmails($inbox_id, $page, $size, $sort, $search_filter, $since, $before);
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
 **size** | **int**| Optional page size in inbox sent email list pagination | [optional] [default to 20]
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


## getLatestEmailInInbox

> \MailSlurp\Models\Email getLatestEmailInInbox($inbox_id, $timeout_millis)

Get latest email in an inbox. Use `WaitForController` to get emails that may not have arrived yet.

Get the newest email in an inbox or wait for one to arrive

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
$inbox_id = 'inbox_id_example'; // string | ID of the inbox you want to get the latest email from
$timeout_millis = 56; // int | Timeout milliseconds to wait for latest email

try {
    $result = $apiInstance->getLatestEmailInInbox($inbox_id, $timeout_millis);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->getLatestEmailInInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| ID of the inbox you want to get the latest email from |
 **timeout_millis** | **int**| Timeout milliseconds to wait for latest email |

### Return type

[**\MailSlurp\Models\Email**](../Model/Email)

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

> \MailSlurp\Models\PageTrackingPixelProjection listInboxTrackingPixels($inbox_id, $page, $size, $sort, $search_filter, $since, $before)

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
$size = 20; // int | Optional page size in inbox tracking pixel list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter by created before given date time

try {
    $result = $apiInstance->listInboxTrackingPixels($inbox_id, $page, $size, $sort, $search_filter, $since, $before);
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
 **size** | **int**| Optional page size in inbox tracking pixel list pagination | [optional] [default to 20]
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

> sendEmail($inbox_id, $send_email_options)

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
$inbox_id = 'inbox_id_example'; // string | ID of the inbox you want to send the email from
$send_email_options = new \MailSlurp\Models\SendEmailOptions(); // \MailSlurp\Models\SendEmailOptions | 

try {
    $apiInstance->sendEmail($inbox_id, $send_email_options);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| ID of the inbox you want to send the email from |
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

> \MailSlurp\Models\SentEmailDto sendEmailAndConfirm($inbox_id, $send_email_options)

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
$inbox_id = 'inbox_id_example'; // string | ID of the inbox you want to send the email from
$send_email_options = new \MailSlurp\Models\SendEmailOptions(); // \MailSlurp\Models\SendEmailOptions | 

try {
    $result = $apiInstance->sendEmailAndConfirm($inbox_id, $send_email_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->sendEmailAndConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| ID of the inbox you want to send the email from |
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


## sendSmtpEnvelope

> \MailSlurp\Models\SentEmailDto sendSmtpEnvelope($inbox_id, $send_smtp_envelope_options)

Send email using an SMTP mail envelope and message body and return sent confirmation

Send email using an SMTP envelope containing RCPT TO, MAIL FROM, and a SMTP BODY.

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
$inbox_id = 'inbox_id_example'; // string | ID of the inbox you want to send the email from
$send_smtp_envelope_options = new \MailSlurp\Models\SendSMTPEnvelopeOptions(); // \MailSlurp\Models\SendSMTPEnvelopeOptions | 

try {
    $result = $apiInstance->sendSmtpEnvelope($inbox_id, $send_smtp_envelope_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxControllerApi->sendSmtpEnvelope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| ID of the inbox you want to send the email from |
 **send_smtp_envelope_options** | [**\MailSlurp\Models\SendSMTPEnvelopeOptions**](../Model/SendSMTPEnvelopeOptions)|  |

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

