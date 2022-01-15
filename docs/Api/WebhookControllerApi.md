# MailSlurp\WebhookControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhook**](WebhookControllerApi#createWebhook) | **POST** /inboxes/{inboxId}/webhooks | Attach a WebHook URL to an inbox
[**deleteAllWebhooks**](WebhookControllerApi#deleteAllWebhooks) | **DELETE** /webhooks | Delete all webhooks
[**deleteWebhook**](WebhookControllerApi#deleteWebhook) | **DELETE** /inboxes/{inboxId}/webhooks/{webhookId} | Delete and disable a Webhook for an Inbox
[**getAllWebhookResults**](WebhookControllerApi#getAllWebhookResults) | **GET** /webhooks/results | Get results for all webhooks
[**getAllWebhooks**](WebhookControllerApi#getAllWebhooks) | **GET** /webhooks/paginated | List Webhooks Paginated
[**getInboxWebhooksPaginated**](WebhookControllerApi#getInboxWebhooksPaginated) | **GET** /inboxes/{inboxId}/webhooks/paginated | Get paginated webhooks for an Inbox
[**getJsonSchemaForWebhookPayload**](WebhookControllerApi#getJsonSchemaForWebhookPayload) | **POST** /webhooks/{webhookId}/schema | 
[**getTestWebhookPayload**](WebhookControllerApi#getTestWebhookPayload) | **GET** /webhooks/test | 
[**getTestWebhookPayloadEmailOpened**](WebhookControllerApi#getTestWebhookPayloadEmailOpened) | **GET** /webhooks/test/email-opened-payload | 
[**getTestWebhookPayloadEmailRead**](WebhookControllerApi#getTestWebhookPayloadEmailRead) | **GET** /webhooks/test/email-read-payload | 
[**getTestWebhookPayloadForWebhook**](WebhookControllerApi#getTestWebhookPayloadForWebhook) | **POST** /webhooks/{webhookId}/example | 
[**getTestWebhookPayloadNewAttachment**](WebhookControllerApi#getTestWebhookPayloadNewAttachment) | **GET** /webhooks/test/new-attachment-payload | Get webhook test payload for new attachment event
[**getTestWebhookPayloadNewContact**](WebhookControllerApi#getTestWebhookPayloadNewContact) | **GET** /webhooks/test/new-contact-payload | Get webhook test payload for new contact event
[**getTestWebhookPayloadNewEmail**](WebhookControllerApi#getTestWebhookPayloadNewEmail) | **GET** /webhooks/test/new-email-payload | Get webhook test payload for new email event
[**getWebhook**](WebhookControllerApi#getWebhook) | **GET** /webhooks/{webhookId} | Get a webhook for an Inbox
[**getWebhookResult**](WebhookControllerApi#getWebhookResult) | **GET** /webhooks/results/{webhookResultId} | Get a webhook result for a webhook
[**getWebhookResults**](WebhookControllerApi#getWebhookResults) | **GET** /webhooks/{webhookId}/results | Get a webhook results for a webhook
[**getWebhookResultsUnseenErrorCount**](WebhookControllerApi#getWebhookResultsUnseenErrorCount) | **GET** /webhooks/results/unseen-count | Get count of unseen webhook results with error status
[**getWebhooks**](WebhookControllerApi#getWebhooks) | **GET** /inboxes/{inboxId}/webhooks | Get all webhooks for an Inbox
[**redriveWebhookResult**](WebhookControllerApi#redriveWebhookResult) | **POST** /webhooks/results/{webhookResultId}/redrive | Get a webhook result and try to resend the original webhook payload
[**sendTestData**](WebhookControllerApi#sendTestData) | **POST** /webhooks/{webhookId}/test | Send webhook test data



## createWebhook

> \MailSlurp\Models\WebhookDto createWebhook($inbox_id, $create_webhook_options)

Attach a WebHook URL to an inbox

Get notified whenever an inbox receives an email via a WebHook URL. An emailID will be posted to this URL every time an email is received for this inbox. The URL must be publicly reachable by the MailSlurp server. You can provide basicAuth values if you wish to secure this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 
$create_webhook_options = new \MailSlurp\Models\CreateWebhookOptions(); // \MailSlurp\Models\CreateWebhookOptions | 

try {
    $result = $apiInstance->createWebhook($inbox_id, $create_webhook_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |
 **create_webhook_options** | [**\MailSlurp\Models\CreateWebhookOptions**](../Model/CreateWebhookOptions)|  |

### Return type

[**\MailSlurp\Models\WebhookDto**](../Model/WebhookDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## deleteAllWebhooks

> deleteAllWebhooks()

Delete all webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAllWebhooks();
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->deleteAllWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

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


## deleteWebhook

> deleteWebhook($inbox_id, $webhook_id)

Delete and disable a Webhook for an Inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 
$webhook_id = 'webhook_id_example'; // string | 

try {
    $apiInstance->deleteWebhook($inbox_id, $webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |
 **webhook_id** | [**string**](../Model/)|  |

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


## getAllWebhookResults

> \MailSlurp\Models\PageWebhookResult getAllWebhookResults($page, $size, $sort, $search_filter, $since, $before, $unseen_only)

Get results for all webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index in list pagination
$size = 20; // int | Optional page size in list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp
$unseen_only = True; // bool | Filter for unseen exceptions only

try {
    $result = $apiInstance->getAllWebhookResults($page, $size, $sort, $search_filter, $since, $before, $unseen_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getAllWebhookResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Optional page index in list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]
 **unseen_only** | **bool**| Filter for unseen exceptions only | [optional]

### Return type

[**\MailSlurp\Models\PageWebhookResult**](../Model/PageWebhookResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getAllWebhooks

> \MailSlurp\Models\PageWebhookProjection getAllWebhooks($page, $size, $sort, $search_filter, $since, $before)

List Webhooks Paginated

List webhooks in paginated form. Allows for page index, page size, and sort direction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
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

try {
    $result = $apiInstance->getAllWebhooks($page, $size, $sort, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getAllWebhooks: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\MailSlurp\Models\PageWebhookProjection**](../Model/PageWebhookProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getInboxWebhooksPaginated

> \MailSlurp\Models\PageWebhookProjection getInboxWebhooksPaginated($inbox_id, $page, $size, $sort, $search_filter, $since, $before)

Get paginated webhooks for an Inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 
$page = 0; // int | Optional page index in list pagination
$size = 20; // int | Optional page size in list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getInboxWebhooksPaginated($inbox_id, $page, $size, $sort, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getInboxWebhooksPaginated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |
 **page** | **int**| Optional page index in list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageWebhookProjection**](../Model/PageWebhookProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getJsonSchemaForWebhookPayload

> \MailSlurp\Models\JSONSchemaDto getJsonSchemaForWebhookPayload($webhook_id)



Get JSON Schema definition for webhook payload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string | 

try {
    $result = $apiInstance->getJsonSchemaForWebhookPayload($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getJsonSchemaForWebhookPayload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\JSONSchemaDto**](../Model/JSONSchemaDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getTestWebhookPayload

> \MailSlurp\Models\AbstractWebhookPayload getTestWebhookPayload($event_name)



Get test webhook payload example. Response content depends on eventName passed. Uses `EMAIL_RECEIVED` as default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_name = 'event_name_example'; // string | 

try {
    $result = $apiInstance->getTestWebhookPayload($event_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getTestWebhookPayload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**|  | [optional]

### Return type

[**\MailSlurp\Models\AbstractWebhookPayload**](../Model/AbstractWebhookPayload)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getTestWebhookPayloadEmailOpened

> \MailSlurp\Models\WebhookEmailOpenedPayload getTestWebhookPayloadEmailOpened()



Get webhook test payload for email opened event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTestWebhookPayloadEmailOpened();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getTestWebhookPayloadEmailOpened: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\WebhookEmailOpenedPayload**](../Model/WebhookEmailOpenedPayload)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getTestWebhookPayloadEmailRead

> \MailSlurp\Models\WebhookEmailReadPayload getTestWebhookPayloadEmailRead()



Get webhook test payload for email opened event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTestWebhookPayloadEmailRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getTestWebhookPayloadEmailRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\WebhookEmailReadPayload**](../Model/WebhookEmailReadPayload)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getTestWebhookPayloadForWebhook

> \MailSlurp\Models\AbstractWebhookPayload getTestWebhookPayloadForWebhook($webhook_id)



Get example payload for webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string | 

try {
    $result = $apiInstance->getTestWebhookPayloadForWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getTestWebhookPayloadForWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\AbstractWebhookPayload**](../Model/AbstractWebhookPayload)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getTestWebhookPayloadNewAttachment

> \MailSlurp\Models\WebhookNewAttachmentPayload getTestWebhookPayloadNewAttachment()

Get webhook test payload for new attachment event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTestWebhookPayloadNewAttachment();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getTestWebhookPayloadNewAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\WebhookNewAttachmentPayload**](../Model/WebhookNewAttachmentPayload)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getTestWebhookPayloadNewContact

> \MailSlurp\Models\WebhookNewContactPayload getTestWebhookPayloadNewContact()

Get webhook test payload for new contact event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTestWebhookPayloadNewContact();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getTestWebhookPayloadNewContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\WebhookNewContactPayload**](../Model/WebhookNewContactPayload)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getTestWebhookPayloadNewEmail

> \MailSlurp\Models\WebhookNewEmailPayload getTestWebhookPayloadNewEmail()

Get webhook test payload for new email event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTestWebhookPayloadNewEmail();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getTestWebhookPayloadNewEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\WebhookNewEmailPayload**](../Model/WebhookNewEmailPayload)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getWebhook

> \MailSlurp\Models\WebhookDto getWebhook($webhook_id)

Get a webhook for an Inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string | 

try {
    $result = $apiInstance->getWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\WebhookDto**](../Model/WebhookDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getWebhookResult

> \MailSlurp\Models\WebhookResultDto getWebhookResult($webhook_result_id)

Get a webhook result for a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_result_id = 'webhook_result_id_example'; // string | Webhook Result ID

try {
    $result = $apiInstance->getWebhookResult($webhook_result_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getWebhookResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_result_id** | [**string**](../Model/)| Webhook Result ID |

### Return type

[**\MailSlurp\Models\WebhookResultDto**](../Model/WebhookResultDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getWebhookResults

> \MailSlurp\Models\PageWebhookResult getWebhookResults($webhook_id, $page, $size, $sort, $search_filter, $since, $before, $unseen_only)

Get a webhook results for a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string | ID of webhook to get results for
$page = 0; // int | Optional page index in list pagination
$size = 20; // int | Optional page size in list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp
$unseen_only = True; // bool | Filter for unseen exceptions only

try {
    $result = $apiInstance->getWebhookResults($webhook_id, $page, $size, $sort, $search_filter, $since, $before, $unseen_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getWebhookResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | [**string**](../Model/)| ID of webhook to get results for |
 **page** | **int**| Optional page index in list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]
 **unseen_only** | **bool**| Filter for unseen exceptions only | [optional]

### Return type

[**\MailSlurp\Models\PageWebhookResult**](../Model/PageWebhookResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getWebhookResultsUnseenErrorCount

> \MailSlurp\Models\UnseenErrorCountDto getWebhookResultsUnseenErrorCount($inbox_id)

Get count of unseen webhook results with error status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 

try {
    $result = $apiInstance->getWebhookResultsUnseenErrorCount($inbox_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getWebhookResultsUnseenErrorCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\UnseenErrorCountDto**](../Model/UnseenErrorCountDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getWebhooks

> \MailSlurp\Models\WebhookDto[] getWebhooks($inbox_id)

Get all webhooks for an Inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 

try {
    $result = $apiInstance->getWebhooks($inbox_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\WebhookDto[]**](../Model/WebhookDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## redriveWebhookResult

> \MailSlurp\Models\WebhookRedriveResult redriveWebhookResult($webhook_result_id)

Get a webhook result and try to resend the original webhook payload

Allows you to resend a webhook payload that was already sent. Webhooks that fail are retried automatically for 24 hours and then put in a dead letter queue. You can retry results manually using this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_result_id = 'webhook_result_id_example'; // string | Webhook Result ID

try {
    $result = $apiInstance->redriveWebhookResult($webhook_result_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->redriveWebhookResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_result_id** | [**string**](../Model/)| Webhook Result ID |

### Return type

[**\MailSlurp\Models\WebhookRedriveResult**](../Model/WebhookRedriveResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## sendTestData

> \MailSlurp\Models\WebhookTestResult sendTestData($webhook_id)

Send webhook test data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WebhookControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string | 

try {
    $result = $apiInstance->sendTestData($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookControllerApi->sendTestData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\WebhookTestResult**](../Model/WebhookTestResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

