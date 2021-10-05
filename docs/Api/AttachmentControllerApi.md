# MailSlurp\AttachmentControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAllAttachments**](AttachmentControllerApi#deleteAllAttachments) | **DELETE** /attachments | Delete all attachments
[**deleteAttachment**](AttachmentControllerApi#deleteAttachment) | **DELETE** /attachments/{attachmentId} | Delete an attachment
[**downloadAttachmentAsBase64Encoded**](AttachmentControllerApi#downloadAttachmentAsBase64Encoded) | **GET** /attachments/{attachmentId}/base64 | Get email attachment as base64 encoded string as alternative to binary responses. To read the content decode the Base64 encoded contents.
[**downloadAttachmentAsBytes**](AttachmentControllerApi#downloadAttachmentAsBytes) | **GET** /attachments/{attachmentId}/bytes | Download attachments. Get email attachment bytes. If you have trouble with byte responses try the &#x60;downloadAttachmentBase64&#x60; response endpoints.
[**getAttachment**](AttachmentControllerApi#getAttachment) | **GET** /attachments/{attachmentId} | Get an attachment entity
[**getAttachmentInfo**](AttachmentControllerApi#getAttachmentInfo) | **GET** /attachments/{attachmentId}/metadata | Get email attachment metadata information
[**getAttachments**](AttachmentControllerApi#getAttachments) | **GET** /attachments | Get email attachments
[**uploadAttachment**](AttachmentControllerApi#uploadAttachment) | **POST** /attachments | Upload an attachment for sending using base64 file encoding. Returns an array whose first element is the ID of the uploaded attachment.
[**uploadAttachmentBytes**](AttachmentControllerApi#uploadAttachmentBytes) | **POST** /attachments/bytes | Upload an attachment for sending using file byte stream input octet stream. Returns an array whose first element is the ID of the uploaded attachment.
[**uploadMultipartForm**](AttachmentControllerApi#uploadMultipartForm) | **POST** /attachments/multipart | Upload an attachment for sending using a Multipart Form request. Returns an array whose first element is the ID of the uploaded attachment.



## deleteAllAttachments

> deleteAllAttachments()

Delete all attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AttachmentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAllAttachments();
} catch (Exception $e) {
    echo 'Exception when calling AttachmentControllerApi->deleteAllAttachments: ', $e->getMessage(), PHP_EOL;
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


## deleteAttachment

> deleteAttachment($attachment_id)

Delete an attachment

Email attachments are essentially files with meta data. Files are byte arrays and the meta data is a content type and a filename. These properties allow email clients to display the filename and icon etc. When sending emails with attachments first upload each attachment with an upload endpoint. Record the returned attachment ID and use it with subsequent email sending. For legacy reasons the ID is returned as the first element in an array. Only a single ID is ever returned. To send the attachments pass a list of attachment IDs with `SendEmailOptions` when sending an email. Using the upload endpoints prior to sending mean attachments can easily be reused.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AttachmentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | ID of attachment

try {
    $apiInstance->deleteAttachment($attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentControllerApi->deleteAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| ID of attachment |

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


## downloadAttachmentAsBase64Encoded

> \MailSlurp\Models\DownloadAttachmentDto downloadAttachmentAsBase64Encoded($attachment_id)

Get email attachment as base64 encoded string as alternative to binary responses. To read the content decode the Base64 encoded contents.

Returns the specified attachment for a given email as a base 64 encoded string. The response type is application/json. This method is similar to the `downloadAttachment` method but allows some clients to get around issues with binary responses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AttachmentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | ID of attachment

try {
    $result = $apiInstance->downloadAttachmentAsBase64Encoded($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentControllerApi->downloadAttachmentAsBase64Encoded: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| ID of attachment |

### Return type

[**\MailSlurp\Models\DownloadAttachmentDto**](../Model/DownloadAttachmentDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## downloadAttachmentAsBytes

> string downloadAttachmentAsBytes($attachment_id)

Download attachments. Get email attachment bytes. If you have trouble with byte responses try the `downloadAttachmentBase64` response endpoints.

Returns the specified attachment for a given email as a stream / array of bytes. You can find attachment ids in email responses endpoint responses. The response type is application/octet-stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AttachmentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | ID of attachment

try {
    $result = $apiInstance->downloadAttachmentAsBytes($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentControllerApi->downloadAttachmentAsBytes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| ID of attachment |

### Return type

**string**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getAttachment

> \MailSlurp\Models\AttachmentEntity getAttachment($attachment_id)

Get an attachment entity

Email attachments are essentially files with meta data. Files are byte arrays and the meta data is a content type and a filename. These properties allow email clients to display the filename and icon etc. When sending emails with attachments first upload each attachment with an upload endpoint. Record the returned attachment ID and use it with subsequent email sending. For legacy reasons the ID is returned as the first element in an array. Only a single ID is ever returned. To send the attachments pass a list of attachment IDs with `SendEmailOptions` when sending an email. Using the upload endpoints prior to sending mean attachments can easily be reused.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AttachmentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | ID of attachment

try {
    $result = $apiInstance->getAttachment($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentControllerApi->getAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| ID of attachment |

### Return type

[**\MailSlurp\Models\AttachmentEntity**](../Model/AttachmentEntity)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getAttachmentInfo

> \MailSlurp\Models\AttachmentMetaData getAttachmentInfo($attachment_id)

Get email attachment metadata information

Returns the metadata for an attachment. It is saved separately to the content of the attachment. Contains properties `name` and `content-type` and `content-length` in bytes for a given attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AttachmentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | ID of attachment

try {
    $result = $apiInstance->getAttachmentInfo($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentControllerApi->getAttachmentInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| ID of attachment |

### Return type

[**\MailSlurp\Models\AttachmentMetaData**](../Model/AttachmentMetaData)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getAttachments

> \MailSlurp\Models\PageAttachmentEntity getAttachments($before, $file_name_filter, $page, $since, $size, $sort)

Get email attachments

Get all attachments in paginated response. Each entity contains meta data for the attachment such as `name` and `content-type`. Use the `attachmentId` and the download endpoints to get the file contents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AttachmentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp
$file_name_filter = 'file_name_filter_example'; // string | Optional file name and content type search filter
$page = 0; // int | Optional page index event list pagination
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$size = 20; // int | Optional page size event list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC

try {
    $result = $apiInstance->getAttachments($before, $file_name_filter, $page, $since, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentControllerApi->getAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]
 **file_name_filter** | **string**| Optional file name and content type search filter | [optional]
 **page** | **int**| Optional page index event list pagination | [optional] [default to 0]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **size** | **int**| Optional page size event list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]

### Return type

[**\MailSlurp\Models\PageAttachmentEntity**](../Model/PageAttachmentEntity)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## uploadAttachment

> string[] uploadAttachment($upload_options)

Upload an attachment for sending using base64 file encoding. Returns an array whose first element is the ID of the uploaded attachment.

Email attachments are essentially files with meta data. Files are byte arrays and the meta data is a content type and a filename. These properties allow email clients to display the filename and icon etc. When sending emails with attachments first upload each attachment with an upload endpoint. Record the returned attachment ID and use it with subsequent email sending. For legacy reasons the ID is returned as the first element in an array. Only a single ID is ever returned. To send the attachments pass a list of attachment IDs with `SendEmailOptions` when sending an email. Using the upload endpoints prior to sending mean attachments can easily be reused.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AttachmentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_options = new \MailSlurp\Models\UploadAttachmentOptions(); // \MailSlurp\Models\UploadAttachmentOptions | uploadOptions

try {
    $result = $apiInstance->uploadAttachment($upload_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentControllerApi->uploadAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_options** | [**\MailSlurp\Models\UploadAttachmentOptions**](../Model/UploadAttachmentOptions)| uploadOptions |

### Return type

**string[]**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## uploadAttachmentBytes

> string[] uploadAttachmentBytes($content_type, $filename, $byte_array)

Upload an attachment for sending using file byte stream input octet stream. Returns an array whose first element is the ID of the uploaded attachment.

Email attachments are essentially files with meta data. Files are byte arrays and the meta data is a content type and a filename. These properties allow email clients to display the filename and icon etc. When sending emails with attachments first upload each attachment with an upload endpoint. Record the returned attachment ID and use it with subsequent email sending. For legacy reasons the ID is returned as the first element in an array. Only a single ID is ever returned. To send the attachments pass a list of attachment IDs with `SendEmailOptions` when sending an email. Using the upload endpoints prior to sending mean attachments can easily be reused.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AttachmentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'content_type_example'; // string | Optional contentType for file. For instance `application/pdf`
$filename = 'filename_example'; // string | Optional filename to save upload with
$byte_array = 'byte_array_example'; // string | Byte array request body

try {
    $result = $apiInstance->uploadAttachmentBytes($content_type, $filename, $byte_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentControllerApi->uploadAttachmentBytes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Optional contentType for file. For instance &#x60;application/pdf&#x60; | [optional]
 **filename** | **string**| Optional filename to save upload with | [optional]
 **byte_array** | **string**| Byte array request body | [optional]

### Return type

**string[]**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## uploadMultipartForm

> string[] uploadMultipartForm($file, $content_type, $filename, $x_filename)

Upload an attachment for sending using a Multipart Form request. Returns an array whose first element is the ID of the uploaded attachment.

Email attachments are essentially files with meta data. Files are byte arrays and the meta data is a content type and a filename. These properties allow email clients to display the filename and icon etc. When sending emails with attachments first upload each attachment with an upload endpoint. Record the returned attachment ID and use it with subsequent email sending. For legacy reasons the ID is returned as the first element in an array. Only a single ID is ever returned. To send the attachments pass a list of attachment IDs with `SendEmailOptions` when sending an email. Using the upload endpoints prior to sending mean attachments can easily be reused.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AttachmentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | file
$content_type = 'content_type_example'; // string | Optional content type of attachment
$filename = 'filename_example'; // string | Optional name of file
$x_filename = 'x_filename_example'; // string | Optional content type header of attachment

try {
    $result = $apiInstance->uploadMultipartForm($file, $content_type, $filename, $x_filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentControllerApi->uploadMultipartForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject****\SplFileObject**| file |
 **content_type** | **string**| Optional content type of attachment | [optional]
 **filename** | **string**| Optional name of file | [optional]
 **x_filename** | **string**| Optional content type header of attachment | [optional]

### Return type

**string[]**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

