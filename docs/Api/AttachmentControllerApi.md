# MailSlurp\AttachmentControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**uploadAttachment**](AttachmentControllerApi.md#uploadAttachment) | **POST** /attachments | Upload an attachment for sending using base64 file encoding
[**uploadAttachmentBytes**](AttachmentControllerApi.md#uploadAttachmentBytes) | **POST** /attachments/bytes | Upload an attachment for sending using file byte stream input octet stream
[**uploadMultipartForm**](AttachmentControllerApi.md#uploadMultipartForm) | **POST** /attachments/multipart | Upload an attachment for sending using Multipart Form



## uploadAttachment

> string[] uploadAttachment($upload_options)

Upload an attachment for sending using base64 file encoding

When sending emails with attachments first upload each attachment with this endpoint. Record the returned attachment IDs. Then use these attachment IDs in the SendEmailOptions when sending an email. This means that attachments can easily be reused.

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
 **upload_options** | [**\MailSlurp\Models\UploadAttachmentOptions**](../Model/UploadAttachmentOptions.md)| uploadOptions |

### Return type

**string[]**

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## uploadAttachmentBytes

> string[] uploadAttachmentBytes($filename)

Upload an attachment for sending using file byte stream input octet stream

When sending emails with attachments first upload each attachment with this endpoint. Record the returned attachment IDs. Then use these attachment IDs in the SendEmailOptions when sending an email. This means that attachments can easily be reused.

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
$filename = 'filename_example'; // string | Optional filename to save upload with

try {
    $result = $apiInstance->uploadAttachmentBytes($filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentControllerApi->uploadAttachmentBytes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | **string**| Optional filename to save upload with | [optional]

### Return type

**string[]**

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## uploadMultipartForm

> string[] uploadMultipartForm($file, $content_type, $filename, $x_filename)

Upload an attachment for sending using Multipart Form

When sending emails with attachments first upload each attachment with this endpoint. Record the returned attachment IDs. Then use these attachment IDs in the SendEmailOptions when sending an email. This means that attachments can easily be reused.

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
$content_type = 'content_type_example'; // string | contentType
$filename = 'filename_example'; // string | filename
$x_filename = 'x_filename_example'; // string | x-filename

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
 **content_type** | **string**| contentType | [optional]
 **filename** | **string**| filename | [optional]
 **x_filename** | **string**| x-filename | [optional]

### Return type

**string[]**

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

