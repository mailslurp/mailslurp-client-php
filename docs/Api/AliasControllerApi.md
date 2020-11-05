# MailSlurp\AliasControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAlias**](AliasControllerApi.md#createAlias) | **POST** /aliases | Create an email alias
[**createAnonymousAlias**](AliasControllerApi.md#createAnonymousAlias) | **POST** /aliases/anonymous | Create an anonymous email alias
[**deleteAlias**](AliasControllerApi.md#deleteAlias) | **DELETE** /aliases/{aliasId} | Delete an owned alias
[**getAlias**](AliasControllerApi.md#getAlias) | **GET** /aliases/{aliasId} | Get an email alias
[**getAliases**](AliasControllerApi.md#getAliases) | **GET** /aliases | Get all email aliases
[**updateAlias**](AliasControllerApi.md#updateAlias) | **PUT** /aliases/{aliasId} | Update an owned alias



## createAlias

> createAlias($create_owned_alias_options)

Create an email alias

Create an email alias belonging to a user ID. To create anonymous aliases use the `createAnonymousAlias` method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AliasControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_owned_alias_options = new \MailSlurp\Models\CreateOwnedAliasOptions(); // \MailSlurp\Models\CreateOwnedAliasOptions | createOwnedAliasOptions

try {
    $apiInstance->createAlias($create_owned_alias_options);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->createAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_owned_alias_options** | [**\MailSlurp\Models\CreateOwnedAliasOptions**](../Model/CreateOwnedAliasOptions.md)| createOwnedAliasOptions |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAnonymousAlias

> \MailSlurp\Models\Alias createAnonymousAlias($create_anonymous_alias_options)

Create an anonymous email alias

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AliasControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_anonymous_alias_options = new \MailSlurp\Models\CreateAnonymousAliasOptions(); // \MailSlurp\Models\CreateAnonymousAliasOptions | createAnonymousAliasOptions

try {
    $result = $apiInstance->createAnonymousAlias($create_anonymous_alias_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->createAnonymousAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_anonymous_alias_options** | [**\MailSlurp\Models\CreateAnonymousAliasOptions**](../Model/CreateAnonymousAliasOptions.md)| createAnonymousAliasOptions |

### Return type

[**\MailSlurp\Models\Alias**](../Model/Alias.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAlias

> deleteAlias($alias_id)

Delete an owned alias

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AliasControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alias_id = 'alias_id_example'; // string | aliasId

try {
    $apiInstance->deleteAlias($alias_id);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->deleteAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias_id** | [**string**](../Model/.md)| aliasId |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAlias

> \MailSlurp\Models\Alias getAlias($alias_id)

Get an email alias

Get an email alias by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AliasControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alias_id = 'alias_id_example'; // string | aliasId

try {
    $result = $apiInstance->getAlias($alias_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->getAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias_id** | [**string**](../Model/.md)| aliasId |

### Return type

[**\MailSlurp\Models\Alias**](../Model/Alias.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAliases

> \MailSlurp\Models\PageAlias getAliases($page, $size, $sort)

Get all email aliases

Get all email aliases in paginated form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AliasControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index in alias list pagination
$size = 20; // int | Optional page size in alias list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC

try {
    $result = $apiInstance->getAliases($page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->getAliases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Optional page index in alias list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in alias list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]

### Return type

[**\MailSlurp\Models\PageAlias**](../Model/PageAlias.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAlias

> updateAlias($alias_id, $create_owned_alias_options)

Update an owned alias

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AliasControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alias_id = 'alias_id_example'; // string | aliasId
$create_owned_alias_options = new \MailSlurp\Models\CreateOwnedAliasOptions(); // \MailSlurp\Models\CreateOwnedAliasOptions | createOwnedAliasOptions

try {
    $apiInstance->updateAlias($alias_id, $create_owned_alias_options);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->updateAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias_id** | [**string**](../Model/.md)| aliasId |
 **create_owned_alias_options** | [**\MailSlurp\Models\CreateOwnedAliasOptions**](../Model/CreateOwnedAliasOptions.md)| createOwnedAliasOptions |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

