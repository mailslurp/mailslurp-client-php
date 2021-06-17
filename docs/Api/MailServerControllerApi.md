# MailSlurp\MailServerControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**describeMailServerDomain**](MailServerControllerApi#describeMailServerDomain) | **POST** /mail-server/describe/domain | Get DNS Mail Server records for a domain
[**getDnsLookup**](MailServerControllerApi#getDnsLookup) | **POST** /mail-server/describe/dns-lookup | Lookup DNS records for a domain
[**getIpAddress**](MailServerControllerApi#getIpAddress) | **POST** /mail-server/describe/ip-address | Get IP address for a domain
[**verifyEmailAddress**](MailServerControllerApi#verifyEmailAddress) | **POST** /mail-server/verify/email-address | Verify the existence of an email address at a given mail server.



## describeMailServerDomain

> \MailSlurp\Models\DescribeMailServerDomainResult describeMailServerDomain($describe_options)

Get DNS Mail Server records for a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\MailServerControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$describe_options = new \MailSlurp\Models\DescribeDomainOptions(); // \MailSlurp\Models\DescribeDomainOptions | describeOptions

try {
    $result = $apiInstance->describeMailServerDomain($describe_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailServerControllerApi->describeMailServerDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **describe_options** | [**\MailSlurp\Models\DescribeDomainOptions**](../Model/DescribeDomainOptions)| describeOptions |

### Return type

[**\MailSlurp\Models\DescribeMailServerDomainResult**](../Model/DescribeMailServerDomainResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getDnsLookup

> \MailSlurp\Models\DNSLookupResults getDnsLookup($dns_lookup_options)

Lookup DNS records for a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\MailServerControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dns_lookup_options = new \MailSlurp\Models\DNSLookupOptions(); // \MailSlurp\Models\DNSLookupOptions | dnsLookupOptions

try {
    $result = $apiInstance->getDnsLookup($dns_lookup_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailServerControllerApi->getDnsLookup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dns_lookup_options** | [**\MailSlurp\Models\DNSLookupOptions**](../Model/DNSLookupOptions)| dnsLookupOptions |

### Return type

[**\MailSlurp\Models\DNSLookupResults**](../Model/DNSLookupResults)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getIpAddress

> \MailSlurp\Models\IPAddressResult getIpAddress($name)

Get IP address for a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\MailServerControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | name

try {
    $result = $apiInstance->getIpAddress($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailServerControllerApi->getIpAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name |

### Return type

[**\MailSlurp\Models\IPAddressResult**](../Model/IPAddressResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## verifyEmailAddress

> \MailSlurp\Models\EmailVerificationResult verifyEmailAddress($verify_options)

Verify the existence of an email address at a given mail server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\MailServerControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verify_options = new \MailSlurp\Models\VerifyEmailAddressOptions(); // \MailSlurp\Models\VerifyEmailAddressOptions | verifyOptions

try {
    $result = $apiInstance->verifyEmailAddress($verify_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailServerControllerApi->verifyEmailAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verify_options** | [**\MailSlurp\Models\VerifyEmailAddressOptions**](../Model/VerifyEmailAddressOptions)| verifyOptions |

### Return type

[**\MailSlurp\Models\EmailVerificationResult**](../Model/EmailVerificationResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

