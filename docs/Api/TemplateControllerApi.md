# MailSlurp\TemplateControllerApi

All URIs are relative to *https://php.api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTemplate**](TemplateControllerApi#createTemplate) | **POST** /templates | Create a Template
[**deleteTemplate**](TemplateControllerApi#deleteTemplate) | **DELETE** /templates/{templateId} | Delete email template
[**getAllTemplates**](TemplateControllerApi#getAllTemplates) | **GET** /templates/paginated | List templates
[**getTemplate**](TemplateControllerApi#getTemplate) | **GET** /templates/{templateId} | Get template
[**getTemplates**](TemplateControllerApi#getTemplates) | **GET** /templates | List templates
[**updateTemplate**](TemplateControllerApi#updateTemplate) | **PUT** /templates/{templateId} | Update template



## createTemplate

> \MailSlurp\Models\TemplateDto createTemplate($create_template_options)

Create a Template

Create an email template with variables for use with templated transactional emails.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_template_options = new \MailSlurp\Models\CreateTemplateOptions(); // \MailSlurp\Models\CreateTemplateOptions | 

try {
    $result = $apiInstance->createTemplate($create_template_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_template_options** | [**\MailSlurp\Models\CreateTemplateOptions**](../Model/CreateTemplateOptions)|  |

### Return type

[**\MailSlurp\Models\TemplateDto**](../Model/TemplateDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## deleteTemplate

> deleteTemplate($template_id)

Delete email template

Delete template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string | Template ID

try {
    $apiInstance->deleteTemplate($template_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | [**string**](../Model/)| Template ID |

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


## getAllTemplates

> \MailSlurp\Models\PageTemplateProjection getAllTemplates($page, $size, $sort, $since, $before)

List templates

Get all templates in paginated format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index in list pagination
$size = 20; // int | Optional page size in list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getAllTemplates($page, $size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getAllTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Optional page index in list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageTemplateProjection**](../Model/PageTemplateProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getTemplate

> \MailSlurp\Models\TemplateDto getTemplate($template_id)

Get template

Get email template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string | Template ID

try {
    $result = $apiInstance->getTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | [**string**](../Model/)| Template ID |

### Return type

[**\MailSlurp\Models\TemplateDto**](../Model/TemplateDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getTemplates

> \MailSlurp\Models\TemplateProjection[] getTemplates()

List templates

Get all templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\TemplateProjection[]**](../Model/TemplateProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## updateTemplate

> \MailSlurp\Models\TemplateDto updateTemplate($template_id, $create_template_options)

Update template

Update email template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string | Template ID
$create_template_options = new \MailSlurp\Models\CreateTemplateOptions(); // \MailSlurp\Models\CreateTemplateOptions | 

try {
    $result = $apiInstance->updateTemplate($template_id, $create_template_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | [**string**](../Model/)| Template ID |
 **create_template_options** | [**\MailSlurp\Models\CreateTemplateOptions**](../Model/CreateTemplateOptions)|  |

### Return type

[**\MailSlurp\Models\TemplateDto**](../Model/TemplateDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

