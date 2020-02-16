# MailSlurp\CommonActionsControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewEmailAddress**](CommonActionsControllerApi.md#createNewEmailAddress) | **POST** /newEmailAddress | Create new random inbox
[**emptyInbox**](CommonActionsControllerApi.md#emptyInbox) | **DELETE** /emptyInbox | Delete all emails in an inbox
[**sendEmailSimple**](CommonActionsControllerApi.md#sendEmailSimple) | **POST** /sendEmail | Send an email from a random email address
[**waitForEmailCount**](CommonActionsControllerApi.md#waitForEmailCount) | **GET** /waitForEmailCount | Wait for and return count number of emails
[**waitForLatestEmail**](CommonActionsControllerApi.md#waitForLatestEmail) | **GET** /waitForLatestEmail | Fetch inbox&#39;s latest email or if empty wait for email to arrive
[**waitForMatchingEmail**](CommonActionsControllerApi.md#waitForMatchingEmail) | **POST** /waitForMatchingEmails | Wait or return list of emails that match simple matching patterns
[**waitForNthEmail**](CommonActionsControllerApi.md#waitForNthEmail) | **GET** /waitForNthEmail | Wait for or fetch the email with a given index in the inbox specified



## createNewEmailAddress

> \MailSlurp\Models\Inbox createNewEmailAddress()

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

try {
    $result = $apiInstance->createNewEmailAddress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->createNewEmailAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\Inbox**](../Model/Inbox.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


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
 **inbox_id** | [**string**](../Model/.md)| inboxId |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendEmailSimple

> sendEmailSimple($send_email_options)

Send an email from a random email address

To specify an email address first create an inbox and use that with the other send email methods

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
$send_email_options = new \MailSlurp\Models\SendEmailOptions(); // \MailSlurp\Models\SendEmailOptions | sendEmailOptions

try {
    $apiInstance->sendEmailSimple($send_email_options);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->sendEmailSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_email_options** | [**\MailSlurp\Models\SendEmailOptions**](../Model/SendEmailOptions.md)| sendEmailOptions |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## waitForEmailCount

> \MailSlurp\Models\EmailPreview[] waitForEmailCount($count, $inbox_id, $timeout, $unread_only)

Wait for and return count number of emails

Will only wait if count is greater that the found emails in given inbox.If you need to wait for an email for a non-empty inbox see the other receive methods.

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
$count = 56; // int | Number of emails to wait for. Must be greater that 1
$inbox_id = 'inbox_id_example'; // string | Id of the inbox we are fetching emails from
$timeout = 56; // int | Max milliseconds to wait
$unread_only = false; // bool | Optional filter for unread only

try {
    $result = $apiInstance->waitForEmailCount($count, $inbox_id, $timeout, $unread_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->waitForEmailCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of emails to wait for. Must be greater that 1 | [optional]
 **inbox_id** | [**string**](../Model/.md)| Id of the inbox we are fetching emails from | [optional]
 **timeout** | **int**| Max milliseconds to wait | [optional]
 **unread_only** | **bool**| Optional filter for unread only | [optional] [default to false]

### Return type

[**\MailSlurp\Models\EmailPreview[]**](../Model/EmailPreview.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## waitForLatestEmail

> \MailSlurp\Models\Email waitForLatestEmail($inbox_id, $timeout, $unread_only)

Fetch inbox's latest email or if empty wait for email to arrive

Will return either the last received email or wait for an email to arrive and return that. If you need to wait for an email for a non-empty inbox see the other receive methods.

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
$inbox_id = 'inbox_id_example'; // string | Id of the inbox we are fetching emails from
$timeout = 56; // int | Max milliseconds to wait
$unread_only = false; // bool | Optional filter for unread only

try {
    $result = $apiInstance->waitForLatestEmail($inbox_id, $timeout, $unread_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->waitForLatestEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/.md)| Id of the inbox we are fetching emails from | [optional]
 **timeout** | **int**| Max milliseconds to wait | [optional]
 **unread_only** | **bool**| Optional filter for unread only | [optional] [default to false]

### Return type

[**\MailSlurp\Models\Email**](../Model/Email.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## waitForMatchingEmail

> \MailSlurp\Models\EmailPreview[] waitForMatchingEmail($match_options, $count, $inbox_id, $timeout, $unread_only)

Wait or return list of emails that match simple matching patterns

Results must also meet provided count. Match options allow simple CONTAINS or EQUALS filtering on SUBJECT, TO, BCC, CC, and FROM.

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
$match_options = new \MailSlurp\Models\MatchOptions(); // \MailSlurp\Models\MatchOptions | matchOptions
$count = 56; // int | Number of emails to wait for. Must be greater that 1
$inbox_id = 'inbox_id_example'; // string | Id of the inbox we are fetching emails from
$timeout = 56; // int | Max milliseconds to wait
$unread_only = false; // bool | Optional filter for unread only

try {
    $result = $apiInstance->waitForMatchingEmail($match_options, $count, $inbox_id, $timeout, $unread_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->waitForMatchingEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_options** | [**\MailSlurp\Models\MatchOptions**](../Model/MatchOptions.md)| matchOptions |
 **count** | **int**| Number of emails to wait for. Must be greater that 1 | [optional]
 **inbox_id** | [**string**](../Model/.md)| Id of the inbox we are fetching emails from | [optional]
 **timeout** | **int**| Max milliseconds to wait | [optional]
 **unread_only** | **bool**| Optional filter for unread only | [optional] [default to false]

### Return type

[**\MailSlurp\Models\EmailPreview[]**](../Model/EmailPreview.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## waitForNthEmail

> \MailSlurp\Models\Email waitForNthEmail($inbox_id, $index, $timeout, $unread_only)

Wait for or fetch the email with a given index in the inbox specified

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
$inbox_id = 'inbox_id_example'; // string | Id of the inbox you are fetching emails from
$index = 56; // int | Zero based index of the email to wait for
$timeout = 56; // int | Max milliseconds to wait
$unread_only = false; // bool | Optional filter for unread only

try {
    $result = $apiInstance->waitForNthEmail($inbox_id, $index, $timeout, $unread_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->waitForNthEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/.md)| Id of the inbox you are fetching emails from | [optional]
 **index** | **int**| Zero based index of the email to wait for | [optional]
 **timeout** | **int**| Max milliseconds to wait | [optional]
 **unread_only** | **bool**| Optional filter for unread only | [optional] [default to false]

### Return type

[**\MailSlurp\Models\Email**](../Model/Email.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

