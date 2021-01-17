# MailSlurp\ExpiredControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExpiredInboxByInboxId**](ExpiredControllerApi.md#getExpiredInboxByInboxId) | **GET** /expired/inbox/{inboxId} | Get expired inbox record for a previously existing inbox
[**getExpiredInboxRecord**](ExpiredControllerApi.md#getExpiredInboxRecord) | **GET** /expired/{expiredId} | Get an expired inbox record
[**getExpiredInboxes**](ExpiredControllerApi.md#getExpiredInboxes) | **GET** /expired | List records of expired inboxes



## getExpiredInboxByInboxId

> \MailSlurp\Models\ExpiredInboxDto getExpiredInboxByInboxId($inbox_id)

Get expired inbox record for a previously existing inbox

Use the inboxId to return an ExpiredInboxRecord if an inbox has expired. Inboxes expire and are disabled if an expiration date is set or plan requires. Returns 404 if no expired inbox is found for the inboxId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\ExpiredControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | ID of inbox you want to retrieve (not the inbox ID)

try {
    $result = $apiInstance->getExpiredInboxByInboxId($inbox_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpiredControllerApi->getExpiredInboxByInboxId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/.md)| ID of inbox you want to retrieve (not the inbox ID) |

### Return type

[**\MailSlurp\Models\ExpiredInboxDto**](../Model/ExpiredInboxDto.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getExpiredInboxRecord

> \MailSlurp\Models\ExpiredInboxDto getExpiredInboxRecord($expired_id)

Get an expired inbox record

Inboxes created with an expiration date will expire after the given date and be moved to an ExpiredInbox entity. You can still read emails in the inbox but it can no longer send or receive emails. Fetch the expired inboxes to view the old inboxes properties

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\ExpiredControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expired_id = 'expired_id_example'; // string | ID of the ExpiredInboxRecord you want to retrieve. This is different from the ID of the inbox you are interested in. See other methods for getting ExpiredInboxRecord for an inbox inboxId)

try {
    $result = $apiInstance->getExpiredInboxRecord($expired_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpiredControllerApi->getExpiredInboxRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expired_id** | [**string**](../Model/.md)| ID of the ExpiredInboxRecord you want to retrieve. This is different from the ID of the inbox you are interested in. See other methods for getting ExpiredInboxRecord for an inbox inboxId) |

### Return type

[**\MailSlurp\Models\ExpiredInboxDto**](../Model/ExpiredInboxDto.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getExpiredInboxes

> \MailSlurp\Models\PageExpiredInboxRecordProjection getExpiredInboxes($page, $size, $sort)

List records of expired inboxes

Inboxes created with an expiration date will expire after the given date. An ExpiredInboxRecord is created that records the inboxes old ID and email address. You can still read emails in the inbox (using the inboxes old ID) but the email address associated with the inbox can no longer send or receive emails. Fetch expired inbox records to view the old inboxes properties

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\ExpiredControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index in inbox sent email list pagination
$size = 20; // int | Optional page size in inbox sent email list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC

try {
    $result = $apiInstance->getExpiredInboxes($page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpiredControllerApi->getExpiredInboxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Optional page index in inbox sent email list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in inbox sent email list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]

### Return type

[**\MailSlurp\Models\PageExpiredInboxRecordProjection**](../Model/PageExpiredInboxRecordProjection.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

