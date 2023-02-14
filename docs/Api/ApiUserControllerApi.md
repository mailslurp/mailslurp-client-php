# MailSlurp\ApiUserControllerApi

All URIs are relative to https://php.api.mailslurp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getJsonPropertyAsString()**](ApiUserControllerApi#getJsonPropertyAsString) | **POST** /user/json/pluck |  |
| [**getUserInfo()**](ApiUserControllerApi#getUserInfo) | **GET** /user/info |  |


## `getJsonPropertyAsString()`

```php
getJsonPropertyAsString($property, $body): string
```



Utility function to extract properties from JSON objects in language where this is cumbersome.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\ApiUserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property = 'property_example'; // string | JSON property name or dot separated path selector such as `a.b.c`
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->getJsonPropertyAsString($property, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiUserControllerApi->getJsonPropertyAsString: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property** | **string**| JSON property name or dot separated path selector such as &#x60;a.b.c&#x60; | |
| **body** | **object**|  | |

### Return type

**string**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getUserInfo()`

```php
getUserInfo(): \MailSlurp\Models\UserInfoDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\ApiUserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiUserControllerApi->getUserInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\UserInfoDto**](../Model/UserInfoDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)
