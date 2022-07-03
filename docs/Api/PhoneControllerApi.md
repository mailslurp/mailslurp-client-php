# MailSlurp\PhoneControllerApi

All URIs are relative to *https://php.api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEmergencyAddress**](PhoneControllerApi#createEmergencyAddress) | **POST** /phone/emergency-addresses | 
[**deleteEmergencyAddress**](PhoneControllerApi#deleteEmergencyAddress) | **DELETE** /phone/emergency-addresses/{addressId} | 
[**deletePhoneNumber**](PhoneControllerApi#deletePhoneNumber) | **DELETE** /phone/numbers/{phoneNumberId} | 
[**getEmergencyAddress**](PhoneControllerApi#getEmergencyAddress) | **GET** /phone/emergency-addresses/{addressId} | 
[**getEmergencyAddresses**](PhoneControllerApi#getEmergencyAddresses) | **GET** /phone/emergency-addresses | 
[**getPhoneNumber**](PhoneControllerApi#getPhoneNumber) | **GET** /phone/numbers/{phoneNumberId} | 
[**getPhoneNumbers**](PhoneControllerApi#getPhoneNumbers) | **GET** /phone/numbers | 
[**getPhonePlans**](PhoneControllerApi#getPhonePlans) | **GET** /phone/plans | 



## createEmergencyAddress

> \MailSlurp\Models\EmergencyAddress createEmergencyAddress($create_emergency_address_options)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\PhoneControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_emergency_address_options = new \MailSlurp\Models\CreateEmergencyAddressOptions(); // \MailSlurp\Models\CreateEmergencyAddressOptions | 

try {
    $result = $apiInstance->createEmergencyAddress($create_emergency_address_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneControllerApi->createEmergencyAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_emergency_address_options** | [**\MailSlurp\Models\CreateEmergencyAddressOptions**](../Model/CreateEmergencyAddressOptions)|  |

### Return type

[**\MailSlurp\Models\EmergencyAddress**](../Model/EmergencyAddress)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## deleteEmergencyAddress

> \MailSlurp\Models\EmptyResponseDto deleteEmergencyAddress($address_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\PhoneControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | 

try {
    $result = $apiInstance->deleteEmergencyAddress($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneControllerApi->deleteEmergencyAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\EmptyResponseDto**](../Model/EmptyResponseDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## deletePhoneNumber

> deletePhoneNumber($phone_number_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\PhoneControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number_id = 'phone_number_id_example'; // string | 

try {
    $apiInstance->deletePhoneNumber($phone_number_id);
} catch (Exception $e) {
    echo 'Exception when calling PhoneControllerApi->deletePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | [**string**](../Model/)|  |

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


## getEmergencyAddress

> \MailSlurp\Models\EmergencyAddress getEmergencyAddress($address_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\PhoneControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | 

try {
    $result = $apiInstance->getEmergencyAddress($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneControllerApi->getEmergencyAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\EmergencyAddress**](../Model/EmergencyAddress)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getEmergencyAddresses

> \MailSlurp\Models\EmergencyAddressDto[] getEmergencyAddresses()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\PhoneControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getEmergencyAddresses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneControllerApi->getEmergencyAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\EmergencyAddressDto[]**](../Model/EmergencyAddressDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getPhoneNumber

> \MailSlurp\Models\PhoneNumberDto getPhoneNumber($phone_number_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\PhoneControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number_id = 'phone_number_id_example'; // string | 

try {
    $result = $apiInstance->getPhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneControllerApi->getPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\PhoneNumberDto**](../Model/PhoneNumberDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getPhoneNumbers

> \MailSlurp\Models\PagePhoneNumberProjection getPhoneNumbers($page, $size, $sort, $since, $before)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\PhoneControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index for list pagination
$size = 20; // int | Optional page size for list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getPhoneNumbers($page, $size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneControllerApi->getPhoneNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Optional page index for list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size for list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PagePhoneNumberProjection**](../Model/PagePhoneNumberProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getPhonePlans

> \MailSlurp\Models\PhonePlanDto[] getPhonePlans()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\PhoneControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPhonePlans();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneControllerApi->getPhonePlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\PhonePlanDto[]**](../Model/PhonePlanDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

