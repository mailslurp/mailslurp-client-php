# MailSlurp\EmailControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAllEmails**](EmailControllerApi.md#deleteAllEmails) | **DELETE** /emails | Delete all emails
[**deleteEmail**](EmailControllerApi.md#deleteEmail) | **DELETE** /emails/{emailId} | Delete Email
[**downloadAttachment**](EmailControllerApi.md#downloadAttachment) | **GET** /emails/{emailId}/attachments/{attachmentId} | Get email attachment
[**forwardEmail**](EmailControllerApi.md#forwardEmail) | **POST** /emails/{emailId}/forward | Forward Email
[**getAttachmentMetaData**](EmailControllerApi.md#getAttachmentMetaData) | **GET** /emails/{emailId}/attachments/{attachmentId}/metadata | Get email attachment metadata
[**getAttachments**](EmailControllerApi.md#getAttachments) | **GET** /emails/{emailId}/attachments | Get all email attachment metadata
[**getEmail**](EmailControllerApi.md#getEmail) | **GET** /emails/{emailId} | Get Email Content
[**getEmailsPaginated**](EmailControllerApi.md#getEmailsPaginated) | **GET** /emails | Get all emails
[**getRawEmailContents**](EmailControllerApi.md#getRawEmailContents) | **GET** /emails/{emailId}/raw | Get Raw Email Content
[**validateEmail**](EmailControllerApi.md#validateEmail) | **POST** /emails/{emailId}/validate | Validate email



## deleteAllEmails

> deleteAllEmails()

Delete all emails

Deletes all emails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\EmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAllEmails();
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->deleteAllEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

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


## deleteEmail

> deleteEmail($email_id)

Delete Email

Deletes an email and removes it from the inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\EmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | emailId

try {
    $apiInstance->deleteEmail($email_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->deleteEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/.md)| emailId |

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


## downloadAttachment

> string downloadAttachment($attachment_id, $email_id, $api_key)

Get email attachment

Returns the specified attachment for a given email as a byte stream (file download). Get the attachmentId from the email response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\EmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | attachmentId
$email_id = 'email_id_example'; // string | emailId
$api_key = 'api_key_example'; // string | Can pass apiKey in url for this request if you wish to download the file in a browser

try {
    $result = $apiInstance->downloadAttachment($attachment_id, $email_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->downloadAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| attachmentId |
 **email_id** | [**string**](../Model/.md)| emailId |
 **api_key** | **string**| Can pass apiKey in url for this request if you wish to download the file in a browser | [optional]

### Return type

**string**

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## forwardEmail

> forwardEmail($email_id, $forward_email_options)

Forward Email

Forward email content to given recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\EmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | emailId
$forward_email_options = new \MailSlurp\Models\ForwardEmailOptions(); // \MailSlurp\Models\ForwardEmailOptions | forwardEmailOptions

try {
    $apiInstance->forwardEmail($email_id, $forward_email_options);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->forwardEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/.md)| emailId |
 **forward_email_options** | [**\MailSlurp\Models\ForwardEmailOptions**](../Model/ForwardEmailOptions.md)| forwardEmailOptions |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAttachmentMetaData

> \MailSlurp\Models\AttachmentMetaData getAttachmentMetaData($attachment_id, $email_id)

Get email attachment metadata

Returns the metadata such as name and content-type for a given attachment and email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\EmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | attachmentId
$email_id = 'email_id_example'; // string | emailId

try {
    $result = $apiInstance->getAttachmentMetaData($attachment_id, $email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getAttachmentMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| attachmentId |
 **email_id** | [**string**](../Model/.md)| emailId |

### Return type

[**\MailSlurp\Models\AttachmentMetaData**](../Model/AttachmentMetaData.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAttachments

> \MailSlurp\Models\AttachmentMetaData[] getAttachments($email_id)

Get all email attachment metadata

Returns an array of attachment metadata such as name and content-type for a given email if present.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\EmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | emailId

try {
    $result = $apiInstance->getAttachments($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/.md)| emailId |

### Return type

[**\MailSlurp\Models\AttachmentMetaData[]**](../Model/AttachmentMetaData.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEmail

> \MailSlurp\Models\Email getEmail($email_id)

Get Email Content

Returns a email summary object with headers and content. To retrieve the raw unparsed email use the getRawMessage endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\EmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | emailId

try {
    $result = $apiInstance->getEmail($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/.md)| emailId |

### Return type

[**\MailSlurp\Models\Email**](../Model/Email.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEmailsPaginated

> \MailSlurp\Models\PageEmailProjection getEmailsPaginated($inbox_id, $page, $size, $sort, $unread_only)

Get all emails

Responses are paginated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\EmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = array('inbox_id_example'); // string[] | Optional inbox ids to filter by. Can be repeated
$page = 0; // int | Optional page index in email list pagination
$size = 20; // int | Optional page size in email list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$unread_only = false; // bool | Optional filter for unread emails only

try {
    $result = $apiInstance->getEmailsPaginated($inbox_id, $page, $size, $sort, $unread_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmailsPaginated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string[]**](../Model/string.md)| Optional inbox ids to filter by. Can be repeated | [optional]
 **page** | **int**| Optional page index in email list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in email list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **unread_only** | **bool**| Optional filter for unread emails only | [optional] [default to false]

### Return type

[**\MailSlurp\Models\PageEmailProjection**](../Model/PageEmailProjection.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRawEmailContents

> string getRawEmailContents($email_id)

Get Raw Email Content

Returns a raw, unparsed and unprocessed email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\EmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | emailId

try {
    $result = $apiInstance->getRawEmailContents($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getRawEmailContents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/.md)| emailId |

### Return type

**string**

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## validateEmail

> \MailSlurp\Models\ValidationDto validateEmail($email_id)

Validate email

Validate HTML content of email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\EmailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | emailId

try {
    $result = $apiInstance->validateEmail($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->validateEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/.md)| emailId |

### Return type

[**\MailSlurp\Models\ValidationDto**](../Model/ValidationDto.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

