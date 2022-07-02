# MailSlurp\SmsControllerApi

All URIs are relative to *https://php.api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSmsMessage**](SmsControllerApi#deleteSmsMessage) | **DELETE** /sms/{smsId} | Delete SMS message.
[**deleteSmsMessages**](SmsControllerApi#deleteSmsMessages) | **DELETE** /sms | Delete all SMS messages
[**getSmsMessage**](SmsControllerApi#getSmsMessage) | **GET** /sms/{smsId} | Get SMS content including body. Expects SMS to exist by ID. For SMS that may not have arrived yet use the WaitForController.
[**getSmsMessagesPaginated**](SmsControllerApi#getSmsMessagesPaginated) | **GET** /sms | Get all SMS messages in all phone numbers in paginated form. .



## deleteSmsMessage

> deleteSmsMessage($sms_id)

Delete SMS message.

Delete an SMS message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SmsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_id = 'sms_id_example'; // string | 

try {
    $apiInstance->deleteSmsMessage($sms_id);
} catch (Exception $e) {
    echo 'Exception when calling SmsControllerApi->deleteSmsMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sms_id** | [**string**](../Model/)|  |

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


## deleteSmsMessages

> deleteSmsMessages($phone_number_id)

Delete all SMS messages

Delete all SMS messages or all messages for a given phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SmsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number_id = 'phone_number_id_example'; // string | 

try {
    $apiInstance->deleteSmsMessages($phone_number_id);
} catch (Exception $e) {
    echo 'Exception when calling SmsControllerApi->deleteSmsMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | [**string**](../Model/)|  | [optional]

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


## getSmsMessage

> \MailSlurp\Models\SmsMessage getSmsMessage($sms_id)

Get SMS content including body. Expects SMS to exist by ID. For SMS that may not have arrived yet use the WaitForController.

Returns a SMS summary object with content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SmsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_id = 'sms_id_example'; // string | 

try {
    $result = $apiInstance->getSmsMessage($sms_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsControllerApi->getSmsMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sms_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\SmsMessage**](../Model/SmsMessage)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getSmsMessagesPaginated

> \MailSlurp\Models\PageSmsProjection getSmsMessagesPaginated($phone_number, $page, $size, $sort, $unread_only, $since, $before)

Get all SMS messages in all phone numbers in paginated form. .

By default returns all SMS messages across all phone numbers sorted by ascending created at date. Responses are paginated. You can restrict results to a list of phone number IDs. You can also filter out read messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SmsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number = 'phone_number_example'; // string | Optional receiving phone number to filter SMS messages for
$page = 0; // int | Optional page index in SMS list pagination
$size = 20; // int | Optional page size in SMS list pagination. Maximum size is 100. Use page index and sort to page through larger results
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$unread_only = false; // bool | Optional filter for unread SMS only. All SMS are considered unread until they are viewed in the dashboard or requested directly
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter SMSs received after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter SMSs received before given date time

try {
    $result = $apiInstance->getSmsMessagesPaginated($phone_number, $page, $size, $sort, $unread_only, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsControllerApi->getSmsMessagesPaginated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number** | [**string**](../Model/)| Optional receiving phone number to filter SMS messages for | [optional]
 **page** | **int**| Optional page index in SMS list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in SMS list pagination. Maximum size is 100. Use page index and sort to page through larger results | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **unread_only** | **bool**| Optional filter for unread SMS only. All SMS are considered unread until they are viewed in the dashboard or requested directly | [optional] [default to false]
 **since** | **\DateTime**| Optional filter SMSs received after given date time | [optional]
 **before** | **\DateTime**| Optional filter SMSs received before given date time | [optional]

### Return type

[**\MailSlurp\Models\PageSmsProjection**](../Model/PageSmsProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

