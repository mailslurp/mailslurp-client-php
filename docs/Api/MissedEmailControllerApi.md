# MailSlurp\MissedEmailControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllMissedEmails**](MissedEmailControllerApi#getAllMissedEmails) | **GET** /missed-emails | Get all MissedEmails in paginated format
[**getMissedEmail**](MissedEmailControllerApi#getMissedEmail) | **GET** /missed-emails/{missedEmailId} | Get MissedEmail
[**waitForNthMissedEmail**](MissedEmailControllerApi#waitForNthMissedEmail) | **GET** /missed-emails/waitForNthMissedEmail | Wait for Nth missed email



## getAllMissedEmails

> \MailSlurp\Models\PageMissedEmailProjection getAllMissedEmails($inbox_id, $page, $search_filter, $size, $sort)

Get all MissedEmails in paginated format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\MissedEmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Optional inbox ID filter
$page = 0; // int | Optional page index in list pagination
$search_filter = 'search_filter_example'; // string | Optional search filter
$size = 20; // int | Optional page size in list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC

try {
    $result = $apiInstance->getAllMissedEmails($inbox_id, $page, $search_filter, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MissedEmailControllerApi->getAllMissedEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Optional inbox ID filter | [optional]
 **page** | **int**| Optional page index in list pagination | [optional] [default to 0]
 **search_filter** | **string**| Optional search filter | [optional]
 **size** | **int**| Optional page size in list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]

### Return type

[**\MailSlurp\Models\PageMissedEmailProjection**](../Model/PageMissedEmailProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getMissedEmail

> \MailSlurp\Models\MissedEmail getMissedEmail($missed_email_id)

Get MissedEmail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\MissedEmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$missed_email_id = 'missed_email_id_example'; // string | missedEmailId

try {
    $result = $apiInstance->getMissedEmail($missed_email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MissedEmailControllerApi->getMissedEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **missed_email_id** | [**string**](../Model/)| missedEmailId |

### Return type

[**\MailSlurp\Models\MissedEmail**](../Model/MissedEmail)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## waitForNthMissedEmail

> \MailSlurp\Models\MissedEmail waitForNthMissedEmail($inbox_id, $index, $timeout)

Wait for Nth missed email

Wait for 0 based index missed email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\MissedEmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Optional inbox ID filter
$index = 56; // int | Zero based index of the email to wait for. If 1 missed email already and you want to wait for the 2nd email pass index=1
$timeout = 56; // int | Optional timeout milliseconds

try {
    $result = $apiInstance->waitForNthMissedEmail($inbox_id, $index, $timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MissedEmailControllerApi->waitForNthMissedEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Optional inbox ID filter | [optional]
 **index** | **int**| Zero based index of the email to wait for. If 1 missed email already and you want to wait for the 2nd email pass index&#x3D;1 | [optional]
 **timeout** | **int**| Optional timeout milliseconds | [optional]

### Return type

[**\MailSlurp\Models\MissedEmail**](../Model/MissedEmail)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

