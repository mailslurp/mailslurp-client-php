# MailSlurp\BounceControllerApi

All URIs are relative to https://php.api.mailslurp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**filterBouncedRecipient()**](BounceControllerApi#filterBouncedRecipient) | **POST** /bounce/filter-recipients | Filter a list of email recipients and remove those who have bounced |
| [**getBouncedEmail()**](BounceControllerApi#getBouncedEmail) | **GET** /bounce/emails/{id} | Get a bounced email. |
| [**getBouncedEmails()**](BounceControllerApi#getBouncedEmails) | **GET** /bounce/emails | Get paginated list of bounced emails. |
| [**getBouncedRecipient()**](BounceControllerApi#getBouncedRecipient) | **GET** /bounce/recipients/{id} | Get a bounced email. |
| [**getBouncedRecipients()**](BounceControllerApi#getBouncedRecipients) | **GET** /bounce/recipients | Get paginated list of bounced recipients. |
| [**getComplaints()**](BounceControllerApi#getComplaints) | **GET** /bounce/complaints | Get paginated list of complaints. |
| [**getListUnsubscribeRecipients()**](BounceControllerApi#getListUnsubscribeRecipients) | **GET** /bounce/list-unsubscribe-recipients | Get paginated list of unsubscribed recipients. |


## `filterBouncedRecipient()`

```php
filterBouncedRecipient($filter_bounced_recipients_options): \MailSlurp\Models\FilterBouncedRecipientsResult
```

Filter a list of email recipients and remove those who have bounced

Prevent email sending errors by remove recipients who have resulted in past email bounces or complaints

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\BounceControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_bounced_recipients_options = new \MailSlurp\Models\FilterBouncedRecipientsOptions(); // \MailSlurp\Models\FilterBouncedRecipientsOptions

try {
    $result = $apiInstance->filterBouncedRecipient($filter_bounced_recipients_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BounceControllerApi->filterBouncedRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter_bounced_recipients_options** | [**\MailSlurp\Models\FilterBouncedRecipientsOptions**](../Model/FilterBouncedRecipientsOptions)|  | |

### Return type

[**\MailSlurp\Models\FilterBouncedRecipientsResult**](../Model/FilterBouncedRecipientsResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getBouncedEmail()`

```php
getBouncedEmail($id): \MailSlurp\Models\BouncedEmailDto
```

Get a bounced email.

Bounced emails are email you have sent that were rejected by a recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\BounceControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the bounced email to fetch

try {
    $result = $apiInstance->getBouncedEmail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BounceControllerApi->getBouncedEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the bounced email to fetch | |

### Return type

[**\MailSlurp\Models\BouncedEmailDto**](../Model/BouncedEmailDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getBouncedEmails()`

```php
getBouncedEmails($page, $size, $sort, $since, $before): \MailSlurp\Models\PageBouncedEmail
```

Get paginated list of bounced emails.

Bounced emails are email you have sent that were rejected by a recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\BounceControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index
$size = 20; // int | Optional page size
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getBouncedEmails($page, $size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BounceControllerApi->getBouncedEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Optional page index | [optional] [default to 0] |
| **size** | **int**| Optional page size | [optional] [default to 20] |
| **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;] |
| **since** | **\DateTime**| Filter by created at after the given timestamp | [optional] |
| **before** | **\DateTime**| Filter by created at before the given timestamp | [optional] |

### Return type

[**\MailSlurp\Models\PageBouncedEmail**](../Model/PageBouncedEmail)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getBouncedRecipient()`

```php
getBouncedRecipient($id): \MailSlurp\Models\BouncedRecipientDto
```

Get a bounced email.

Bounced emails are email you have sent that were rejected by a recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\BounceControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the bounced recipient

try {
    $result = $apiInstance->getBouncedRecipient($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BounceControllerApi->getBouncedRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the bounced recipient | |

### Return type

[**\MailSlurp\Models\BouncedRecipientDto**](../Model/BouncedRecipientDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getBouncedRecipients()`

```php
getBouncedRecipients($page, $size, $sort, $since, $before): \MailSlurp\Models\PageBouncedRecipients
```

Get paginated list of bounced recipients.

Bounced recipients are email addresses that you have sent emails to that did not accept the sent email. Once a recipient is bounced you cannot send emails to that address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\BounceControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index
$size = 20; // int | Optional page size
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getBouncedRecipients($page, $size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BounceControllerApi->getBouncedRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Optional page index | [optional] [default to 0] |
| **size** | **int**| Optional page size | [optional] [default to 20] |
| **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;] |
| **since** | **\DateTime**| Filter by created at after the given timestamp | [optional] |
| **before** | **\DateTime**| Filter by created at before the given timestamp | [optional] |

### Return type

[**\MailSlurp\Models\PageBouncedRecipients**](../Model/PageBouncedRecipients)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getComplaints()`

```php
getComplaints($page, $size, $sort, $since, $before): \MailSlurp\Models\PageComplaint
```

Get paginated list of complaints.

SMTP complaints made against your account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\BounceControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index
$size = 20; // int | Optional page size
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getComplaints($page, $size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BounceControllerApi->getComplaints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Optional page index | [optional] [default to 0] |
| **size** | **int**| Optional page size | [optional] [default to 20] |
| **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;] |
| **since** | **\DateTime**| Filter by created at after the given timestamp | [optional] |
| **before** | **\DateTime**| Filter by created at before the given timestamp | [optional] |

### Return type

[**\MailSlurp\Models\PageComplaint**](../Model/PageComplaint)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getListUnsubscribeRecipients()`

```php
getListUnsubscribeRecipients($page, $size, $sort, $domain_id): \MailSlurp\Models\PageListUnsubscribeRecipients
```

Get paginated list of unsubscribed recipients.

Unsubscribed recipient have unsubscribed from a mailing list for a user or domain and cannot be contacted again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\BounceControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index
$size = 20; // int | Optional page size
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$domain_id = 'domain_id_example'; // string | Filter by domainId

try {
    $result = $apiInstance->getListUnsubscribeRecipients($page, $size, $sort, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BounceControllerApi->getListUnsubscribeRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Optional page index | [optional] [default to 0] |
| **size** | **int**| Optional page size | [optional] [default to 20] |
| **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;] |
| **domain_id** | **string**| Filter by domainId | [optional] |

### Return type

[**\MailSlurp\Models\PageListUnsubscribeRecipients**](../Model/PageListUnsubscribeRecipients)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)
