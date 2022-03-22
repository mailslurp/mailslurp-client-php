# MailSlurp\EmailVerificationControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getValidationRequests**](EmailVerificationControllerApi#getValidationRequests) | **GET** /email-verification/validation-requests | Validate a list of email addresses. Per unit billing. See your plan for pricing.
[**validateEmailAddressList**](EmailVerificationControllerApi#validateEmailAddressList) | **POST** /email-verification/email-address-list | Validate a list of email addresses. Per unit billing. See your plan for pricing.



## getValidationRequests

> \MailSlurp\Models\PageEmailValidationRequest getValidationRequests($page, $size, $sort, $search_filter, $since, $before, $is_valid)

Validate a list of email addresses. Per unit billing. See your plan for pricing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\EmailVerificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index in list pagination
$size = 20; // int | Optional page size for paginated result list.
$sort = 'DESC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp
$is_valid = True; // bool | Filter where email is valid is true or false

try {
    $result = $apiInstance->getValidationRequests($page, $size, $sort, $search_filter, $since, $before, $is_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailVerificationControllerApi->getValidationRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Optional page index in list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size for paginated result list. | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;DESC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]
 **is_valid** | **bool**| Filter where email is valid is true or false | [optional]

### Return type

[**\MailSlurp\Models\PageEmailValidationRequest**](../Model/PageEmailValidationRequest)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## validateEmailAddressList

> \MailSlurp\Models\ValidateEmailAddressListResult validateEmailAddressList($validate_email_address_list_options)

Validate a list of email addresses. Per unit billing. See your plan for pricing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\EmailVerificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_email_address_list_options = new \MailSlurp\Models\ValidateEmailAddressListOptions(); // \MailSlurp\Models\ValidateEmailAddressListOptions | 

try {
    $result = $apiInstance->validateEmailAddressList($validate_email_address_list_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailVerificationControllerApi->validateEmailAddressList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **validate_email_address_list_options** | [**\MailSlurp\Models\ValidateEmailAddressListOptions**](../Model/ValidateEmailAddressListOptions)|  |

### Return type

[**\MailSlurp\Models\ValidateEmailAddressListResult**](../Model/ValidateEmailAddressListResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

