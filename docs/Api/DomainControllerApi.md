# MailSlurp\DomainControllerApi

All URIs are relative to https://php.api.mailslurp.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDomainWildcardCatchAll()**](DomainControllerApi#addDomainWildcardCatchAll) | **POST** /domains/{id}/wildcard | Add catch all wild card inbox to domain
[**createDomain()**](DomainControllerApi#createDomain) | **POST** /domains | Create Domain
[**deleteDomain()**](DomainControllerApi#deleteDomain) | **DELETE** /domains/{id} | Delete a domain
[**getDomain()**](DomainControllerApi#getDomain) | **GET** /domains/{id} | Get a domain
[**getDomains()**](DomainControllerApi#getDomains) | **GET** /domains | Get domains
[**updateDomain()**](DomainControllerApi#updateDomain) | **PUT** /domains/{id} | Update a domain


## `addDomainWildcardCatchAll()`

```php
addDomainWildcardCatchAll($id): \MailSlurp\Models\DomainDto
```

Add catch all wild card inbox to domain

Add a catch all inbox to a domain so that any emails sent to it that cannot be matched will be sent to the catch all inbox generated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\DomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->addDomainWildcardCatchAll($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainControllerApi->addDomainWildcardCatchAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\DomainDto**](../Model/DomainDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `createDomain()`

```php
createDomain($create_domain_options): \MailSlurp\Models\DomainDto
```

Create Domain

Link a domain that you own with MailSlurp so you can create email addresses using it. Endpoint returns DNS records used for validation. You must add these verification records to your host provider's DNS setup to verify the domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\DomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_domain_options = new \MailSlurp\Models\CreateDomainOptions(); // \MailSlurp\Models\CreateDomainOptions

try {
    $result = $apiInstance->createDomain($create_domain_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainControllerApi->createDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_domain_options** | [**\MailSlurp\Models\CreateDomainOptions**](../Model/CreateDomainOptions)|  |

### Return type

[**\MailSlurp\Models\DomainDto**](../Model/DomainDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `deleteDomain()`

```php
deleteDomain($id): string[]
```

Delete a domain

Delete a domain. This will disable any existing inboxes that use this domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\DomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteDomain($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainControllerApi->deleteDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)|  |

### Return type

**string[]**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getDomain()`

```php
getDomain($id): \MailSlurp\Models\DomainDto
```

Get a domain

Returns domain verification status and tokens for a given domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\DomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getDomain($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainControllerApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\DomainDto**](../Model/DomainDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getDomains()`

```php
getDomains(): \MailSlurp\Models\DomainPreview[]
```

Get domains

List all custom domains you have created

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\DomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDomains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainControllerApi->getDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\DomainPreview[]**](../Model/DomainPreview)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `updateDomain()`

```php
updateDomain($id, $update_domain_options): \MailSlurp\Models\DomainDto
```

Update a domain

Update values on a domain. Note you cannot change the domain name as it is immutable. Recreate the domain if you need to alter this.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\DomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_domain_options = new \MailSlurp\Models\UpdateDomainOptions(); // \MailSlurp\Models\UpdateDomainOptions

try {
    $result = $apiInstance->updateDomain($id, $update_domain_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainControllerApi->updateDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)|  |
 **update_domain_options** | [**\MailSlurp\Models\UpdateDomainOptions**](../Model/UpdateDomainOptions)|  |

### Return type

[**\MailSlurp\Models\DomainDto**](../Model/DomainDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)
