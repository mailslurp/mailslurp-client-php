# MailSlurp\InboxForwarderControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewInboxForwarder**](InboxForwarderControllerApi#createNewInboxForwarder) | **POST** /forwarders | Create an inbox forwarder
[**deleteInboxForwarder**](InboxForwarderControllerApi#deleteInboxForwarder) | **DELETE** /forwarders/{id} | Delete an inbox forwarder
[**deleteInboxForwarders**](InboxForwarderControllerApi#deleteInboxForwarders) | **DELETE** /forwarders | Delete inbox forwarders
[**getInboxForwarder**](InboxForwarderControllerApi#getInboxForwarder) | **GET** /forwarders/{id} | Get an inbox forwarder
[**getInboxForwarders**](InboxForwarderControllerApi#getInboxForwarders) | **GET** /forwarders | List inbox forwarders
[**testInboxForwarder**](InboxForwarderControllerApi#testInboxForwarder) | **POST** /forwarders/{id}/test | Test an inbox forwarder
[**testInboxForwardersForInbox**](InboxForwarderControllerApi#testInboxForwardersForInbox) | **PUT** /forwarders | Test inbox forwarders for inbox
[**testNewInboxForwarder**](InboxForwarderControllerApi#testNewInboxForwarder) | **PATCH** /forwarders | Test new inbox forwarder



## createNewInboxForwarder

> \MailSlurp\Models\InboxForwarderDto createNewInboxForwarder($inbox_id, $create_inbox_forwarder_options)

Create an inbox forwarder

Create a new inbox rule for forwarding, blocking, and allowing emails when sending and receiving

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxForwarderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Inbox id to attach forwarder to
$create_inbox_forwarder_options = new \MailSlurp\Models\CreateInboxForwarderOptions(); // \MailSlurp\Models\CreateInboxForwarderOptions | 

try {
    $result = $apiInstance->createNewInboxForwarder($inbox_id, $create_inbox_forwarder_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxForwarderControllerApi->createNewInboxForwarder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Inbox id to attach forwarder to |
 **create_inbox_forwarder_options** | [**\MailSlurp\Models\CreateInboxForwarderOptions**](../Model/CreateInboxForwarderOptions)|  |

### Return type

[**\MailSlurp\Models\InboxForwarderDto**](../Model/InboxForwarderDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## deleteInboxForwarder

> deleteInboxForwarder($id)

Delete an inbox forwarder

Delete inbox forwarder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxForwarderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of inbox forwarder

try {
    $apiInstance->deleteInboxForwarder($id);
} catch (Exception $e) {
    echo 'Exception when calling InboxForwarderControllerApi->deleteInboxForwarder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)| ID of inbox forwarder |

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


## deleteInboxForwarders

> deleteInboxForwarders($inbox_id)

Delete inbox forwarders

Delete inbox forwarders. Accepts optional inboxId filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxForwarderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Optional inbox id to attach forwarder to

try {
    $apiInstance->deleteInboxForwarders($inbox_id);
} catch (Exception $e) {
    echo 'Exception when calling InboxForwarderControllerApi->deleteInboxForwarders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Optional inbox id to attach forwarder to | [optional]

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


## getInboxForwarder

> \MailSlurp\Models\InboxForwarderDto getInboxForwarder($id)

Get an inbox forwarder

Get inbox ruleset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxForwarderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of inbox forwarder

try {
    $result = $apiInstance->getInboxForwarder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxForwarderControllerApi->getInboxForwarder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)| ID of inbox forwarder |

### Return type

[**\MailSlurp\Models\InboxForwarderDto**](../Model/InboxForwarderDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getInboxForwarders

> \MailSlurp\Models\PageInboxForwarderDto getInboxForwarders($inbox_id, $page, $size, $sort, $search_filter, $since, $before)

List inbox forwarders

List all forwarders attached to an inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxForwarderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Optional inbox id to get forwarders from
$page = 0; // int | Optional page index in inbox forwarder list pagination
$size = 20; // int | Optional page size in inbox forwarder list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getInboxForwarders($inbox_id, $page, $size, $sort, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxForwarderControllerApi->getInboxForwarders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Optional inbox id to get forwarders from | [optional]
 **page** | **int**| Optional page index in inbox forwarder list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in inbox forwarder list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageInboxForwarderDto**](../Model/PageInboxForwarderDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## testInboxForwarder

> \MailSlurp\Models\InboxForwarderTestResult testInboxForwarder($id, $inbox_forwarder_test_options)

Test an inbox forwarder

Test an inbox forwarder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxForwarderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of inbox forwarder
$inbox_forwarder_test_options = new \MailSlurp\Models\InboxForwarderTestOptions(); // \MailSlurp\Models\InboxForwarderTestOptions | 

try {
    $result = $apiInstance->testInboxForwarder($id, $inbox_forwarder_test_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxForwarderControllerApi->testInboxForwarder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)| ID of inbox forwarder |
 **inbox_forwarder_test_options** | [**\MailSlurp\Models\InboxForwarderTestOptions**](../Model/InboxForwarderTestOptions)|  |

### Return type

[**\MailSlurp\Models\InboxForwarderTestResult**](../Model/InboxForwarderTestResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## testInboxForwardersForInbox

> \MailSlurp\Models\InboxForwarderTestResult testInboxForwardersForInbox($inbox_id, $inbox_forwarder_test_options)

Test inbox forwarders for inbox

Test inbox forwarders for inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxForwarderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | ID of inbox
$inbox_forwarder_test_options = new \MailSlurp\Models\InboxForwarderTestOptions(); // \MailSlurp\Models\InboxForwarderTestOptions | 

try {
    $result = $apiInstance->testInboxForwardersForInbox($inbox_id, $inbox_forwarder_test_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxForwarderControllerApi->testInboxForwardersForInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| ID of inbox |
 **inbox_forwarder_test_options** | [**\MailSlurp\Models\InboxForwarderTestOptions**](../Model/InboxForwarderTestOptions)|  |

### Return type

[**\MailSlurp\Models\InboxForwarderTestResult**](../Model/InboxForwarderTestResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## testNewInboxForwarder

> \MailSlurp\Models\InboxForwarderTestResult testNewInboxForwarder($test_new_inbox_forwarder_options)

Test new inbox forwarder

Test new inbox forwarder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxForwarderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_new_inbox_forwarder_options = new \MailSlurp\Models\TestNewInboxForwarderOptions(); // \MailSlurp\Models\TestNewInboxForwarderOptions | 

try {
    $result = $apiInstance->testNewInboxForwarder($test_new_inbox_forwarder_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxForwarderControllerApi->testNewInboxForwarder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_new_inbox_forwarder_options** | [**\MailSlurp\Models\TestNewInboxForwarderOptions**](../Model/TestNewInboxForwarderOptions)|  |

### Return type

[**\MailSlurp\Models\InboxForwarderTestResult**](../Model/InboxForwarderTestResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

