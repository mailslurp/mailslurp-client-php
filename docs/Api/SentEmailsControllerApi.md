# MailSlurp\SentEmailsControllerApi

All URIs are relative to https://php.api.mailslurp.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAllSentEmails()**](SentEmailsControllerApi#deleteAllSentEmails) | **DELETE** /sent | Delete all sent email receipts
[**deleteSentEmail()**](SentEmailsControllerApi#deleteSentEmail) | **DELETE** /sent/{id} | Delete sent email receipt
[**getAllSentTrackingPixels()**](SentEmailsControllerApi#getAllSentTrackingPixels) | **GET** /sent/tracking-pixels | 
[**getRawSentEmailContents()**](SentEmailsControllerApi#getRawSentEmailContents) | **GET** /sent/{emailId}/raw | Get raw sent email string. Returns unparsed raw SMTP message with headers and body.
[**getRawSentEmailJson()**](SentEmailsControllerApi#getRawSentEmailJson) | **GET** /sent/{emailId}/raw/json | Get raw sent email in JSON. Unparsed SMTP message in JSON wrapper format.
[**getSentDeliveryStatus()**](SentEmailsControllerApi#getSentDeliveryStatus) | **GET** /sent/delivery-status/{deliveryId} | 
[**getSentDeliveryStatuses()**](SentEmailsControllerApi#getSentDeliveryStatuses) | **GET** /sent/delivery-status | 
[**getSentDeliveryStatusesBySentId()**](SentEmailsControllerApi#getSentDeliveryStatusesBySentId) | **GET** /sent/{sentId}/delivery-status | 
[**getSentEmail()**](SentEmailsControllerApi#getSentEmail) | **GET** /sent/{id} | Get sent email receipt
[**getSentEmailHTMLContent()**](SentEmailsControllerApi#getSentEmailHTMLContent) | **GET** /sent/{id}/html | Get sent email HTML content
[**getSentEmailPreviewURLs()**](SentEmailsControllerApi#getSentEmailPreviewURLs) | **GET** /sent/{id}/urls | Get sent email URL for viewing in browser or downloading
[**getSentEmailTrackingPixels()**](SentEmailsControllerApi#getSentEmailTrackingPixels) | **GET** /sent/{id}/tracking-pixels | 
[**getSentEmails()**](SentEmailsControllerApi#getSentEmails) | **GET** /sent | Get all sent emails in paginated form
[**getSentEmailsWithQueueResults()**](SentEmailsControllerApi#getSentEmailsWithQueueResults) | **GET** /sent/queue-results | Get results of email sent with queues in paginated form
[**getSentOrganizationEmails()**](SentEmailsControllerApi#getSentOrganizationEmails) | **GET** /sent/organization | 
[**waitForDeliveryStatuses()**](SentEmailsControllerApi#waitForDeliveryStatuses) | **GET** /sent/delivery-status/wait-for | 


## `deleteAllSentEmails()`

```php
deleteAllSentEmails()
```

Delete all sent email receipts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAllSentEmails();
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->deleteAllSentEmails: ', $e->getMessage(), PHP_EOL;
}
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

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `deleteSentEmail()`

```php
deleteSentEmail($id)
```

Delete sent email receipt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteSentEmail($id);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->deleteSentEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)|  |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getAllSentTrackingPixels()`

```php
getAllSentTrackingPixels($page, $size, $sort, $search_filter, $since, $before): \MailSlurp\Models\PageTrackingPixelProjection
```



Get all sent email tracking pixels in paginated form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index in sent email tracking pixel list pagination
$size = 20; // int | Optional page size in sent email tracking pixel list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getAllSentTrackingPixels($page, $size, $sort, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getAllSentTrackingPixels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Optional page index in sent email tracking pixel list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in sent email tracking pixel list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageTrackingPixelProjection**](../Model/PageTrackingPixelProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getRawSentEmailContents()`

```php
getRawSentEmailContents($email_id): string
```

Get raw sent email string. Returns unparsed raw SMTP message with headers and body.

Returns a raw, unparsed, and unprocessed sent email. If your client has issues processing the response it is likely due to the response content-type which is text/plain. If you need a JSON response content-type use the getRawSentEmailJson endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | ID of email

try {
    $result = $apiInstance->getRawSentEmailContents($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getRawSentEmailContents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email |

### Return type

**string**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getRawSentEmailJson()`

```php
getRawSentEmailJson($email_id): \MailSlurp\Models\RawEmailJson
```

Get raw sent email in JSON. Unparsed SMTP message in JSON wrapper format.

Returns a raw, unparsed, and unprocessed sent email wrapped in a JSON response object for easier handling when compared with the getRawSentEmail text/plain response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | ID of email

try {
    $result = $apiInstance->getRawSentEmailJson($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getRawSentEmailJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email |

### Return type

[**\MailSlurp\Models\RawEmailJson**](../Model/RawEmailJson)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getSentDeliveryStatus()`

```php
getSentDeliveryStatus($delivery_id): \MailSlurp\Models\DeliveryStatusDto
```



Get a sent email delivery status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_id = 'delivery_id_example'; // string

try {
    $result = $apiInstance->getSentDeliveryStatus($delivery_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getSentDeliveryStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\DeliveryStatusDto**](../Model/DeliveryStatusDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getSentDeliveryStatuses()`

```php
getSentDeliveryStatuses($page, $size, $sort, $since, $before): \MailSlurp\Models\PageDeliveryStatus
```



Get all sent email delivery statuses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index in delivery status list pagination
$size = 20; // int | Optional page size in delivery status list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getSentDeliveryStatuses($page, $size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getSentDeliveryStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Optional page index in delivery status list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in delivery status list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageDeliveryStatus**](../Model/PageDeliveryStatus)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getSentDeliveryStatusesBySentId()`

```php
getSentDeliveryStatusesBySentId($sent_id, $page, $size, $sort, $since, $before): \MailSlurp\Models\PageDeliveryStatus
```



Get all sent email delivery statuses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sent_id = 'sent_id_example'; // string
$page = 0; // int | Optional page index in delivery status list pagination
$size = 20; // int | Optional page size in delivery status list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getSentDeliveryStatusesBySentId($sent_id, $page, $size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getSentDeliveryStatusesBySentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sent_id** | [**string**](../Model/)|  |
 **page** | **int**| Optional page index in delivery status list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in delivery status list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageDeliveryStatus**](../Model/PageDeliveryStatus)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getSentEmail()`

```php
getSentEmail($id): \MailSlurp\Models\SentEmailDto
```

Get sent email receipt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getSentEmail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getSentEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\SentEmailDto**](../Model/SentEmailDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getSentEmailHTMLContent()`

```php
getSentEmailHTMLContent($id): string
```

Get sent email HTML content

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getSentEmailHTMLContent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getSentEmailHTMLContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)|  |

### Return type

**string**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getSentEmailPreviewURLs()`

```php
getSentEmailPreviewURLs($id): \MailSlurp\Models\EmailPreviewUrls
```

Get sent email URL for viewing in browser or downloading

Get a list of URLs for sent email content as text/html or raw SMTP message for viewing the message in a browser.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getSentEmailPreviewURLs($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getSentEmailPreviewURLs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\EmailPreviewUrls**](../Model/EmailPreviewUrls)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getSentEmailTrackingPixels()`

```php
getSentEmailTrackingPixels($id, $page, $size, $sort, $search_filter, $since, $before): \MailSlurp\Models\PageTrackingPixelProjection
```



Get all tracking pixels for a sent email in paginated form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$page = 0; // int | Optional page index in sent email tracking pixel list pagination
$size = 20; // int | Optional page size in sent email tracking pixel list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getSentEmailTrackingPixels($id, $page, $size, $sort, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getSentEmailTrackingPixels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)|  |
 **page** | **int**| Optional page index in sent email tracking pixel list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in sent email tracking pixel list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageTrackingPixelProjection**](../Model/PageTrackingPixelProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getSentEmails()`

```php
getSentEmails($inbox_id, $page, $size, $sort, $search_filter, $since, $before): \MailSlurp\Models\PageSentEmailProjection
```

Get all sent emails in paginated form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Optional inboxId to filter sender of sent emails by
$page = 0; // int | Optional page index in inbox sent email list pagination
$size = 20; // int | Optional page size in inbox sent email list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getSentEmails($inbox_id, $page, $size, $sort, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getSentEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Optional inboxId to filter sender of sent emails by | [optional]
 **page** | **int**| Optional page index in inbox sent email list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in inbox sent email list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageSentEmailProjection**](../Model/PageSentEmailProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getSentEmailsWithQueueResults()`

```php
getSentEmailsWithQueueResults($page, $size, $sort, $since, $before): \MailSlurp\Models\PageSentEmailWithQueueProjection
```

Get results of email sent with queues in paginated form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index in inbox sent email list pagination
$size = 20; // int | Optional page size in inbox sent email list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getSentEmailsWithQueueResults($page, $size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getSentEmailsWithQueueResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Optional page index in inbox sent email list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in inbox sent email list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageSentEmailWithQueueProjection**](../Model/PageSentEmailWithQueueProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getSentOrganizationEmails()`

```php
getSentOrganizationEmails($inbox_id, $page, $size, $sort, $search_filter, $since, $before): \MailSlurp\Models\PageSentEmailProjection
```



Get all sent organization emails in paginated form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Optional inboxId to filter sender of sent emails by
$page = 0; // int | Optional page index in sent email list pagination
$size = 20; // int | Optional page size in sent email list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getSentOrganizationEmails($inbox_id, $page, $size, $sort, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->getSentOrganizationEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Optional inboxId to filter sender of sent emails by | [optional]
 **page** | **int**| Optional page index in sent email list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in sent email list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageSentEmailProjection**](../Model/PageSentEmailProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `waitForDeliveryStatuses()`

```php
waitForDeliveryStatuses($sent_id, $inbox_id, $timeout, $index, $since, $before): \MailSlurp\Models\DeliveryStatusDto
```



Wait for delivery statuses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\SentEmailsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sent_id = 'sent_id_example'; // string | Optional sent email ID filter
$inbox_id = 'inbox_id_example'; // string | Optional inbox ID filter
$timeout = 56; // int | Optional timeout milliseconds
$index = 56; // int | Zero based index of the delivery status to wait for. If 1 delivery status already and you want to wait for the 2nd pass index=1
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->waitForDeliveryStatuses($sent_id, $inbox_id, $timeout, $index, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentEmailsControllerApi->waitForDeliveryStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sent_id** | [**string**](../Model/)| Optional sent email ID filter | [optional]
 **inbox_id** | [**string**](../Model/)| Optional inbox ID filter | [optional]
 **timeout** | **int**| Optional timeout milliseconds | [optional]
 **index** | **int**| Zero based index of the delivery status to wait for. If 1 delivery status already and you want to wait for the 2nd pass index&#x3D;1 | [optional]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\DeliveryStatusDto**](../Model/DeliveryStatusDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)
