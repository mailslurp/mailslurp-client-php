# MailSlurp\CommonActionsControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewEmailAddress**](CommonActionsControllerApi#createNewEmailAddress) | **POST** /createInbox | Create new random inbox
[**createNewEmailAddress1**](CommonActionsControllerApi#createNewEmailAddress1) | **POST** /newEmailAddress | Create new random inbox
[**emptyInbox**](CommonActionsControllerApi#emptyInbox) | **DELETE** /emptyInbox | Delete all emails in an inbox
[**sendEmailSimple**](CommonActionsControllerApi#sendEmailSimple) | **POST** /sendEmail | Send an email



## createNewEmailAddress

> \MailSlurp\Models\Inbox createNewEmailAddress($allow_team_access, $expires_at, $expires_in, $use_domain_pool)

Create new random inbox

Returns an Inbox with an `id` and an `emailAddress`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\CommonActionsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$allow_team_access = True; // bool | allowTeamAccess
$expires_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | expiresAt
$expires_in = 56; // int | expiresIn
$use_domain_pool = True; // bool | useDomainPool

try {
    $result = $apiInstance->createNewEmailAddress($allow_team_access, $expires_at, $expires_in, $use_domain_pool);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->createNewEmailAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allow_team_access** | **bool**| allowTeamAccess | [optional]
 **expires_at** | **\DateTime**| expiresAt | [optional]
 **expires_in** | **int**| expiresIn | [optional]
 **use_domain_pool** | **bool**| useDomainPool | [optional]

### Return type

[**\MailSlurp\Models\Inbox**](../Model/Inbox)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## createNewEmailAddress1

> \MailSlurp\Models\Inbox createNewEmailAddress1($allow_team_access, $expires_at, $expires_in, $use_domain_pool)

Create new random inbox

Returns an Inbox with an `id` and an `emailAddress`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\CommonActionsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$allow_team_access = True; // bool | allowTeamAccess
$expires_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | expiresAt
$expires_in = 56; // int | expiresIn
$use_domain_pool = True; // bool | useDomainPool

try {
    $result = $apiInstance->createNewEmailAddress1($allow_team_access, $expires_at, $expires_in, $use_domain_pool);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->createNewEmailAddress1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allow_team_access** | **bool**| allowTeamAccess | [optional]
 **expires_at** | **\DateTime**| expiresAt | [optional]
 **expires_in** | **int**| expiresIn | [optional]
 **use_domain_pool** | **bool**| useDomainPool | [optional]

### Return type

[**\MailSlurp\Models\Inbox**](../Model/Inbox)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## emptyInbox

> emptyInbox($inbox_id)

Delete all emails in an inbox

Deletes all emails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\CommonActionsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | inboxId

try {
    $apiInstance->emptyInbox($inbox_id);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->emptyInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| inboxId |

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


## sendEmailSimple

> sendEmailSimple($email_options)

Send an email

If no senderId or inboxId provided a random email address will be used to send from.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\CommonActionsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_options = new \MailSlurp\Models\SimpleSendEmailOptions(); // \MailSlurp\Models\SimpleSendEmailOptions | emailOptions

try {
    $apiInstance->sendEmailSimple($email_options);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->sendEmailSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_options** | [**\MailSlurp\Models\SimpleSendEmailOptions**](../Model/SimpleSendEmailOptions)| emailOptions |

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

