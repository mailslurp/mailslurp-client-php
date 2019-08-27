# MailSlurp\CommonOperationsApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewEmailAddress**](CommonOperationsApi.md#createNewEmailAddress) | **POST** /newEmailAddress | Create new email address
[**sendEmailSimple**](CommonOperationsApi.md#sendEmailSimple) | **POST** /sendEmail | Send an email from a random email address
[**waitForLatestEmail**](CommonOperationsApi.md#waitForLatestEmail) | **GET** /fetchLatestEmail | Fetch inbox&#39;s latest email or if empty wait for email to arrive


# **createNewEmailAddress**
> \MailSlurp\Models\Inbox createNewEmailAddress()

Create new email address

Returns an Inbox with an `id` and an `emailAddress`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurp\Api\CommonOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createNewEmailAddress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonOperationsApi->createNewEmailAddress: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendEmailSimple**
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

$apiInstance = new MailSlurp\Api\CommonOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_email_options = new \MailSlurp\Models\SendEmailOptions(); // \MailSlurp\Models\SendEmailOptions | sendEmailOptions

try {
    $apiInstance->sendEmailSimple($send_email_options);
} catch (Exception $e) {
    echo 'Exception when calling CommonOperationsApi->sendEmailSimple: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **waitForLatestEmail**
> \MailSlurp\Models\Email waitForLatestEmail($inbox_email_address, $inbox_id)

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

$apiInstance = new MailSlurp\Api\CommonOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_email_address = 'inbox_email_address_example'; // string | Email address of the inbox we are fetching emails from
$inbox_id = 'inbox_id_example'; // string | Id of the inbox we are fetching emails from

try {
    $result = $apiInstance->waitForLatestEmail($inbox_email_address, $inbox_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonOperationsApi->waitForLatestEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_email_address** | **string**| Email address of the inbox we are fetching emails from | [optional]
 **inbox_id** | [**string**](../Model/.md)| Id of the inbox we are fetching emails from | [optional]

### Return type

[**\MailSlurp\Models\Email**](../Model/Email.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

