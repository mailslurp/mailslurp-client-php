# MailSlurp\ExportControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportEntities**](ExportControllerApi#exportEntities) | **GET** /export | Export inboxes link callable via browser
[**getExportLink**](ExportControllerApi#getExportLink) | **POST** /export | Get export link



## exportEntities

> string exportEntities($api_key, $export_type, $output_format, $created_earliest_time, $created_oldest_time, $exclude_previously_exported, $filter, $list_separator_token)

Export inboxes link callable via browser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\ExportControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key = 'api_key_example'; // string | apiKey
$export_type = 'export_type_example'; // string | exportType
$output_format = 'output_format_example'; // string | outputFormat
$created_earliest_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | createdEarliestTime
$created_oldest_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | createdOldestTime
$exclude_previously_exported = True; // bool | excludePreviouslyExported
$filter = 'filter_example'; // string | filter
$list_separator_token = 'list_separator_token_example'; // string | listSeparatorToken

try {
    $result = $apiInstance->exportEntities($api_key, $export_type, $output_format, $created_earliest_time, $created_oldest_time, $exclude_previously_exported, $filter, $list_separator_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportControllerApi->exportEntities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **export_type** | **string**| exportType |
 **output_format** | **string**| outputFormat |
 **created_earliest_time** | **\DateTime**| createdEarliestTime | [optional]
 **created_oldest_time** | **\DateTime**| createdOldestTime | [optional]
 **exclude_previously_exported** | **bool**| excludePreviouslyExported | [optional]
 **filter** | **string**| filter | [optional]
 **list_separator_token** | **string**| listSeparatorToken | [optional]

### Return type

**string**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getExportLink

> \MailSlurp\Models\ExportLink getExportLink($export_type, $export_options, $api_key)

Get export link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\ExportControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_type = 'export_type_example'; // string | exportType
$export_options = new \MailSlurp\Models\ExportOptions(); // \MailSlurp\Models\ExportOptions | exportOptions
$api_key = 'api_key_example'; // string | apiKey

try {
    $result = $apiInstance->getExportLink($export_type, $export_options, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportControllerApi->getExportLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_type** | **string**| exportType |
 **export_options** | [**\MailSlurp\Models\ExportOptions**](../Model/ExportOptions)| exportOptions |
 **api_key** | **string**| apiKey | [optional]

### Return type

[**\MailSlurp\Models\ExportLink**](../Model/ExportLink)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

