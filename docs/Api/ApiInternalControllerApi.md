# MailSlurp\ApiInternalControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSamlUserOrCreate**](ApiInternalControllerApi#getSamlUserOrCreate) | **POST** /internal/saml/user | 



## getSamlUserOrCreate

> \MailSlurp\Models\UserDto getSamlUserOrCreate($key, $get_or_create_saml_user_options)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\ApiInternalControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | 
$get_or_create_saml_user_options = new \MailSlurp\Models\GetOrCreateSamlUserOptions(); // \MailSlurp\Models\GetOrCreateSamlUserOptions | 

try {
    $result = $apiInstance->getSamlUserOrCreate($key, $get_or_create_saml_user_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiInternalControllerApi->getSamlUserOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**|  |
 **get_or_create_saml_user_options** | [**\MailSlurp\Models\GetOrCreateSamlUserOptions**](../Model/GetOrCreateSamlUserOptions)|  |

### Return type

[**\MailSlurp\Models\UserDto**](../Model/UserDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

