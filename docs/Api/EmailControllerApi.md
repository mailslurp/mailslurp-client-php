# MailSlurp\EmailControllerApi

All URIs are relative to https://php.api.mailslurp.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**applyImapFlagOperation()**](EmailControllerApi#applyImapFlagOperation) | **POST** /emails/{emailId}/imap-flag-operation | Set IMAP flags associated with a message. Only supports &#39;\\Seen&#39; flag.
[**deleteAllEmails()**](EmailControllerApi#deleteAllEmails) | **DELETE** /emails | Delete all emails in all inboxes.
[**deleteEmail()**](EmailControllerApi#deleteEmail) | **DELETE** /emails/{emailId} | Delete an email
[**downloadAttachment()**](EmailControllerApi#downloadAttachment) | **GET** /emails/{emailId}/attachments/{attachmentId} | Get email attachment bytes. Returned as &#x60;octet-stream&#x60; with content type header. If you have trouble with byte responses try the &#x60;downloadAttachmentBase64&#x60; response endpoints and convert the base 64 encoded content to a file or string.
[**downloadAttachmentBase64()**](EmailControllerApi#downloadAttachmentBase64) | **GET** /emails/{emailId}/attachments/{attachmentId}/base64 | Get email attachment as base64 encoded string as an alternative to binary responses. Decode the &#x60;base64FileContents&#x60; as a &#x60;utf-8&#x60; encoded string or array of bytes depending on the &#x60;contentType&#x60;.
[**downloadBody()**](EmailControllerApi#downloadBody) | **GET** /emails/{emailId}/body | Get email body as string. Returned as &#x60;plain/text&#x60; with content type header.
[**downloadBodyBytes()**](EmailControllerApi#downloadBodyBytes) | **GET** /emails/{emailId}/body-bytes | Get email body in bytes. Returned as &#x60;octet-stream&#x60; with content type header.
[**forwardEmail()**](EmailControllerApi#forwardEmail) | **POST** /emails/{emailId}/forward | Forward email to recipients
[**getAttachmentMetaData()**](EmailControllerApi#getAttachmentMetaData) | **GET** /emails/{emailId}/attachments/{attachmentId}/metadata | Get email attachment metadata. This is the &#x60;contentType&#x60; and &#x60;contentLength&#x60; of an attachment. To get the individual attachments  use the &#x60;downloadAttachment&#x60; methods.
[**getEmail()**](EmailControllerApi#getEmail) | **GET** /emails/{emailId} | Get email content including headers and body. Expects email to exist by ID. For emails that may not have arrived yet use the WaitForController.
[**getEmailAttachments()**](EmailControllerApi#getEmailAttachments) | **GET** /emails/{emailId}/attachments | Get all email attachment metadata. Metadata includes name and size of attachments.
[**getEmailContentMatch()**](EmailControllerApi#getEmailContentMatch) | **POST** /emails/{emailId}/contentMatch | Get email content regex pattern match results. Runs regex against email body and returns match groups.
[**getEmailCount()**](EmailControllerApi#getEmailCount) | **GET** /emails/emails/count | Get email count
[**getEmailHTML()**](EmailControllerApi#getEmailHTML) | **GET** /emails/{emailId}/html | Get email content as HTML. For displaying emails in browser context.
[**getEmailHTMLJson()**](EmailControllerApi#getEmailHTMLJson) | **GET** /emails/{emailId}/html/json | Get email content as HTML in JSON wrapper. For fetching entity decoded HTML content
[**getEmailHTMLQuery()**](EmailControllerApi#getEmailHTMLQuery) | **GET** /emails/{emailId}/htmlQuery | Parse and return text from an email, stripping HTML and decoding encoded characters
[**getEmailLinks()**](EmailControllerApi#getEmailLinks) | **GET** /emails/{emailId}/links | Parse and return list of links found in an email (only works for HTML content)
[**getEmailPreviewURLs()**](EmailControllerApi#getEmailPreviewURLs) | **GET** /emails/{emailId}/urls | Get email URLs for viewing in browser or downloading
[**getEmailTextLines()**](EmailControllerApi#getEmailTextLines) | **GET** /emails/{emailId}/textLines | Parse and return text from an email, stripping HTML and decoding encoded characters
[**getEmailsPaginated()**](EmailControllerApi#getEmailsPaginated) | **GET** /emails | Get all emails in all inboxes in paginated form. Email API list all.
[**getGravatarUrlForEmailAddress()**](EmailControllerApi#getGravatarUrlForEmailAddress) | **GET** /emails/gravatarFor | 
[**getLatestEmail()**](EmailControllerApi#getLatestEmail) | **GET** /emails/latest | Get latest email in all inboxes. Most recently received.
[**getLatestEmailInInbox1()**](EmailControllerApi#getLatestEmailInInbox1) | **GET** /emails/latestIn | Get latest email in an inbox. Use &#x60;WaitForController&#x60; to get emails that may not have arrived yet.
[**getOrganizationEmailsPaginated()**](EmailControllerApi#getOrganizationEmailsPaginated) | **GET** /emails/organization | Get all organization emails. List team or shared test email accounts
[**getRawEmailContents()**](EmailControllerApi#getRawEmailContents) | **GET** /emails/{emailId}/raw | Get raw email string. Returns unparsed raw SMTP message with headers and body.
[**getRawEmailJson()**](EmailControllerApi#getRawEmailJson) | **GET** /emails/{emailId}/raw/json | Get raw email in JSON. Unparsed SMTP message in JSON wrapper format.
[**getUnreadEmailCount()**](EmailControllerApi#getUnreadEmailCount) | **GET** /emails/unreadCount | Get unread email count
[**markAsRead()**](EmailControllerApi#markAsRead) | **PATCH** /emails/{emailId}/read | Mark an email as read on unread
[**replyToEmail()**](EmailControllerApi#replyToEmail) | **PUT** /emails/{emailId} | Reply to an email
[**sendEmailSourceOptional()**](EmailControllerApi#sendEmailSourceOptional) | **POST** /emails | Send email
[**validateEmail()**](EmailControllerApi#validateEmail) | **POST** /emails/{emailId}/validate | Validate email HTML contents


## `applyImapFlagOperation()`

```php
applyImapFlagOperation($email_id, $imap_flag_operation_options): \MailSlurp\Models\EmailPreview
```

Set IMAP flags associated with a message. Only supports '\\Seen' flag.

Apply RFC3501 section-2.3.2 IMAP flag operations on an email

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
$email_id = 'email_id_example'; // string
$imap_flag_operation_options = new \MailSlurp\Models\ImapFlagOperationOptions(); // \MailSlurp\Models\ImapFlagOperationOptions

try {
    $result = $apiInstance->applyImapFlagOperation($email_id, $imap_flag_operation_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->applyImapFlagOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)|  |
 **imap_flag_operation_options** | [**\MailSlurp\Models\ImapFlagOperationOptions**](../Model/ImapFlagOperationOptions)|  |

### Return type

[**\MailSlurp\Models\EmailPreview**](../Model/EmailPreview)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `deleteAllEmails()`

```php
deleteAllEmails()
```

Delete all emails in all inboxes.

Deletes all emails in your account. Be careful as emails cannot be recovered

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

## `deleteEmail()`

```php
deleteEmail($email_id)
```

Delete an email

Deletes an email and removes it from the inbox. Deleted emails cannot be recovered.

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
$email_id = 'email_id_example'; // string | ID of email to delete

try {
    $apiInstance->deleteEmail($email_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->deleteEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email to delete |

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

## `downloadAttachment()`

```php
downloadAttachment($email_id, $attachment_id, $api_key): string
```

Get email attachment bytes. Returned as `octet-stream` with content type header. If you have trouble with byte responses try the `downloadAttachmentBase64` response endpoints and convert the base 64 encoded content to a file or string.

Returns the specified attachment for a given email as a stream / array of bytes. You can find attachment ids in email responses endpoint responses. The response type is application/octet-stream.

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
$email_id = 'email_id_example'; // string | ID of email
$attachment_id = 'attachment_id_example'; // string | ID of attachment
$api_key = 'api_key_example'; // string | Can pass apiKey in url for this request if you wish to download the file in a browser. Content type will be set to original content type of the attachment file. This is so that browsers can download the file correctly.

try {
    $result = $apiInstance->downloadAttachment($email_id, $attachment_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->downloadAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email |
 **attachment_id** | **string**| ID of attachment |
 **api_key** | **string**| Can pass apiKey in url for this request if you wish to download the file in a browser. Content type will be set to original content type of the attachment file. This is so that browsers can download the file correctly. | [optional]

### Return type

**string**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `downloadAttachmentBase64()`

```php
downloadAttachmentBase64($email_id, $attachment_id): \MailSlurp\Models\DownloadAttachmentDto
```

Get email attachment as base64 encoded string as an alternative to binary responses. Decode the `base64FileContents` as a `utf-8` encoded string or array of bytes depending on the `contentType`.

Returns the specified attachment for a given email as a base 64 encoded string. The response type is application/json. This method is similar to the `downloadAttachment` method but allows some clients to get around issues with binary responses.

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
$email_id = 'email_id_example'; // string | ID of email
$attachment_id = 'attachment_id_example'; // string | ID of attachment

try {
    $result = $apiInstance->downloadAttachmentBase64($email_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->downloadAttachmentBase64: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email |
 **attachment_id** | **string**| ID of attachment |

### Return type

[**\MailSlurp\Models\DownloadAttachmentDto**](../Model/DownloadAttachmentDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `downloadBody()`

```php
downloadBody($email_id): string
```

Get email body as string. Returned as `plain/text` with content type header.

Returns the specified email body for a given email as a string

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
$email_id = 'email_id_example'; // string | ID of email

try {
    $result = $apiInstance->downloadBody($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->downloadBody: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `downloadBodyBytes()`

```php
downloadBodyBytes($email_id): string
```

Get email body in bytes. Returned as `octet-stream` with content type header.

Returns the specified email body for a given email as a stream / array of bytes.

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
$email_id = 'email_id_example'; // string | ID of email

try {
    $result = $apiInstance->downloadBodyBytes($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->downloadBodyBytes: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `forwardEmail()`

```php
forwardEmail($email_id, $forward_email_options): \MailSlurp\Models\SentEmailDto
```

Forward email to recipients

Forward an existing email to new recipients. The sender of the email will be the inbox that received the email you are forwarding. You can override the sender with the `from` option. Note you must have access to the from address in MailSlurp to use the override. For more control consider fetching the email and sending it a new using the send email endpoints.

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
$email_id = 'email_id_example'; // string | ID of email
$forward_email_options = new \MailSlurp\Models\ForwardEmailOptions(); // \MailSlurp\Models\ForwardEmailOptions

try {
    $result = $apiInstance->forwardEmail($email_id, $forward_email_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->forwardEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email |
 **forward_email_options** | [**\MailSlurp\Models\ForwardEmailOptions**](../Model/ForwardEmailOptions)|  |

### Return type

[**\MailSlurp\Models\SentEmailDto**](../Model/SentEmailDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getAttachmentMetaData()`

```php
getAttachmentMetaData($email_id, $attachment_id): \MailSlurp\Models\AttachmentMetaData
```

Get email attachment metadata. This is the `contentType` and `contentLength` of an attachment. To get the individual attachments  use the `downloadAttachment` methods.

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
$email_id = 'email_id_example'; // string | ID of email
$attachment_id = 'attachment_id_example'; // string | ID of attachment

try {
    $result = $apiInstance->getAttachmentMetaData($email_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getAttachmentMetaData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email |
 **attachment_id** | **string**| ID of attachment |

### Return type

[**\MailSlurp\Models\AttachmentMetaData**](../Model/AttachmentMetaData)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getEmail()`

```php
getEmail($email_id, $decode): \MailSlurp\Models\Email
```

Get email content including headers and body. Expects email to exist by ID. For emails that may not have arrived yet use the WaitForController.

Returns a email summary object with headers and content. To retrieve the raw unparsed email use the getRawEmail endpoints

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
$email_id = 'email_id_example'; // string
$decode = false; // bool | Decode email body quoted-printable encoding to plain text. SMTP servers often encode text using quoted-printable format (for instance `=D7`). This can be a pain for testing

try {
    $result = $apiInstance->getEmail($email_id, $decode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)|  |
 **decode** | **bool**| Decode email body quoted-printable encoding to plain text. SMTP servers often encode text using quoted-printable format (for instance &#x60;&#x3D;D7&#x60;). This can be a pain for testing | [optional] [default to false]

### Return type

[**\MailSlurp\Models\Email**](../Model/Email)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getEmailAttachments()`

```php
getEmailAttachments($email_id): \MailSlurp\Models\AttachmentMetaData[]
```

Get all email attachment metadata. Metadata includes name and size of attachments.

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
$email_id = 'email_id_example'; // string | ID of email

try {
    $result = $apiInstance->getEmailAttachments($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmailAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email |

### Return type

[**\MailSlurp\Models\AttachmentMetaData[]**](../Model/AttachmentMetaData)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getEmailContentMatch()`

```php
getEmailContentMatch($email_id, $content_match_options): \MailSlurp\Models\EmailContentMatchResult
```

Get email content regex pattern match results. Runs regex against email body and returns match groups.

Return the matches for a given Java style regex pattern. Do not include the typical `/` at start or end of regex in some languages. Given an example `your code is: 12345` the pattern to extract match looks like `code is: (\\d{6})`. This will return an array of matches with the first matching the entire pattern and the subsequent matching the groups: `['code is: 123456', '123456']` See https://docs.oracle.com/javase/8/docs/api/java/util/regex/Pattern.html for more information of available patterns.

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
$email_id = 'email_id_example'; // string | ID of email to match against
$content_match_options = new \MailSlurp\Models\ContentMatchOptions(); // \MailSlurp\Models\ContentMatchOptions

try {
    $result = $apiInstance->getEmailContentMatch($email_id, $content_match_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmailContentMatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email to match against |
 **content_match_options** | [**\MailSlurp\Models\ContentMatchOptions**](../Model/ContentMatchOptions)|  |

### Return type

[**\MailSlurp\Models\EmailContentMatchResult**](../Model/EmailContentMatchResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getEmailCount()`

```php
getEmailCount(): \MailSlurp\Models\CountDto
```

Get email count

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
    $result = $apiInstance->getEmailCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmailCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\CountDto**](../Model/CountDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getEmailHTML()`

```php
getEmailHTML($email_id, $decode): string
```

Get email content as HTML. For displaying emails in browser context.

Retrieve email content as HTML response for viewing in browsers. Decodes quoted-printable entities and converts charset to UTF-8. Pass your API KEY as a request parameter when viewing in a browser: `?apiKey=xxx`. Returns content-type `text/html;charset=utf-8` so you must call expecting that content response not JSON. For JSON response see the `getEmailHTMLJson` method.

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
$email_id = 'email_id_example'; // string
$decode = false; // bool

try {
    $result = $apiInstance->getEmailHTML($email_id, $decode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmailHTML: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)|  |
 **decode** | **bool**|  | [optional] [default to false]

### Return type

**string**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html;charset=utf-8`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getEmailHTMLJson()`

```php
getEmailHTMLJson($email_id, $decode): \MailSlurp\Models\EmailHtmlDto
```

Get email content as HTML in JSON wrapper. For fetching entity decoded HTML content

Retrieve email content as HTML response. Decodes quoted-printable entities and converts charset to UTF-8. Returns content-type `application/json;charset=utf-8` so you must call expecting that content response not JSON.

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
$email_id = 'email_id_example'; // string
$decode = false; // bool

try {
    $result = $apiInstance->getEmailHTMLJson($email_id, $decode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmailHTMLJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)|  |
 **decode** | **bool**|  | [optional] [default to false]

### Return type

[**\MailSlurp\Models\EmailHtmlDto**](../Model/EmailHtmlDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getEmailHTMLQuery()`

```php
getEmailHTMLQuery($email_id, $html_selector): \MailSlurp\Models\EmailTextLinesResult
```

Parse and return text from an email, stripping HTML and decoding encoded characters

Parse an email body and return the content as an array of text. HTML parsing uses JSoup which supports JQuery/CSS style selectors

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
$email_id = 'email_id_example'; // string | ID of email to perform HTML query on
$html_selector = 'html_selector_example'; // string | HTML selector to search for. Uses JQuery/JSoup/CSS style selector like '.my-div' to match content. See https://jsoup.org/apidocs/org/jsoup/select/Selector.html for more information.

try {
    $result = $apiInstance->getEmailHTMLQuery($email_id, $html_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmailHTMLQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email to perform HTML query on |
 **html_selector** | **string**| HTML selector to search for. Uses JQuery/JSoup/CSS style selector like &#39;.my-div&#39; to match content. See https://jsoup.org/apidocs/org/jsoup/select/Selector.html for more information. |

### Return type

[**\MailSlurp\Models\EmailTextLinesResult**](../Model/EmailTextLinesResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getEmailLinks()`

```php
getEmailLinks($email_id): \MailSlurp\Models\EmailLinksResult
```

Parse and return list of links found in an email (only works for HTML content)

HTML parsing uses JSoup and UNIX line separators. Searches content for href attributes

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
$email_id = 'email_id_example'; // string | ID of email to fetch text for

try {
    $result = $apiInstance->getEmailLinks($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmailLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email to fetch text for |

### Return type

[**\MailSlurp\Models\EmailLinksResult**](../Model/EmailLinksResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getEmailPreviewURLs()`

```php
getEmailPreviewURLs($email_id): \MailSlurp\Models\EmailPreviewUrls
```

Get email URLs for viewing in browser or downloading

Get a list of URLs for email content as text/html or raw SMTP message for viewing the message in a browser.

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
$email_id = 'email_id_example'; // string

try {
    $result = $apiInstance->getEmailPreviewURLs($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmailPreviewURLs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)|  |

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

## `getEmailTextLines()`

```php
getEmailTextLines($email_id, $decode_html_entities, $line_separator): \MailSlurp\Models\EmailTextLinesResult
```

Parse and return text from an email, stripping HTML and decoding encoded characters

Parse an email body and return the content as an array of strings. HTML parsing uses JSoup and UNIX line separators.

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
$email_id = 'email_id_example'; // string | ID of email to fetch text for
$decode_html_entities = True; // bool | Decode HTML entities
$line_separator = 'line_separator_example'; // string | Line separator character

try {
    $result = $apiInstance->getEmailTextLines($email_id, $decode_html_entities, $line_separator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmailTextLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email to fetch text for |
 **decode_html_entities** | **bool**| Decode HTML entities | [optional]
 **line_separator** | **string**| Line separator character | [optional]

### Return type

[**\MailSlurp\Models\EmailTextLinesResult**](../Model/EmailTextLinesResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getEmailsPaginated()`

```php
getEmailsPaginated($inbox_id, $page, $size, $sort, $unread_only, $search_filter, $since, $before): \MailSlurp\Models\PageEmailProjection
```

Get all emails in all inboxes in paginated form. Email API list all.

By default returns all emails across all inboxes sorted by ascending created at date. Responses are paginated. You can restrict results to a list of inbox IDs. You can also filter out read messages

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
$inbox_id = array('inbox_id_example'); // string[] | Optional inbox ids to filter by. Can be repeated. By default will use all inboxes belonging to your account.
$page = 0; // int | Optional page index in email list pagination
$size = 20; // int | Optional page size in email list pagination. Maximum size is 100. Use page index and sort to page through larger results
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$unread_only = false; // bool | Optional filter for unread emails only. All emails are considered unread until they are viewed in the dashboard or requested directly
$search_filter = 'search_filter_example'; // string | Optional search filter. Searches email recipients, sender, subject, email address and ID. Does not search email body
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter emails received after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter emails received before given date time

try {
    $result = $apiInstance->getEmailsPaginated($inbox_id, $page, $size, $sort, $unread_only, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getEmailsPaginated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string[]**](../Model/string)| Optional inbox ids to filter by. Can be repeated. By default will use all inboxes belonging to your account. | [optional]
 **page** | **int**| Optional page index in email list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in email list pagination. Maximum size is 100. Use page index and sort to page through larger results | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **unread_only** | **bool**| Optional filter for unread emails only. All emails are considered unread until they are viewed in the dashboard or requested directly | [optional] [default to false]
 **search_filter** | **string**| Optional search filter. Searches email recipients, sender, subject, email address and ID. Does not search email body | [optional]
 **since** | **\DateTime**| Optional filter emails received after given date time | [optional]
 **before** | **\DateTime**| Optional filter emails received before given date time | [optional]

### Return type

[**\MailSlurp\Models\PageEmailProjection**](../Model/PageEmailProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getGravatarUrlForEmailAddress()`

```php
getGravatarUrlForEmailAddress($email_address, $size): \MailSlurp\Models\GravatarUrl
```



Get gravatar url for email address

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
$email_address = 'email_address_example'; // string
$size = 'size_example'; // string

try {
    $result = $apiInstance->getGravatarUrlForEmailAddress($email_address, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getGravatarUrlForEmailAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address** | **string**|  |
 **size** | **string**|  | [optional]

### Return type

[**\MailSlurp\Models\GravatarUrl**](../Model/GravatarUrl)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getLatestEmail()`

```php
getLatestEmail($inbox_ids): \MailSlurp\Models\Email
```

Get latest email in all inboxes. Most recently received.

Get the newest email in all inboxes or in a passed set of inbox IDs

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
$inbox_ids = array('inbox_ids_example'); // string[] | Optional set of inboxes to filter by. Only get the latest email from these inbox IDs. If not provided will search across all inboxes

try {
    $result = $apiInstance->getLatestEmail($inbox_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getLatestEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_ids** | [**string[]**](../Model/string)| Optional set of inboxes to filter by. Only get the latest email from these inbox IDs. If not provided will search across all inboxes | [optional]

### Return type

[**\MailSlurp\Models\Email**](../Model/Email)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getLatestEmailInInbox1()`

```php
getLatestEmailInInbox1($inbox_id): \MailSlurp\Models\Email
```

Get latest email in an inbox. Use `WaitForController` to get emails that may not have arrived yet.

Get the newest email in all inboxes or in a passed set of inbox IDs

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
$inbox_id = 'inbox_id_example'; // string | ID of the inbox you want to get the latest email from

try {
    $result = $apiInstance->getLatestEmailInInbox1($inbox_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getLatestEmailInInbox1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| ID of the inbox you want to get the latest email from |

### Return type

[**\MailSlurp\Models\Email**](../Model/Email)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getOrganizationEmailsPaginated()`

```php
getOrganizationEmailsPaginated($inbox_id, $page, $size, $sort, $unread_only, $search_filter, $since, $before): \MailSlurp\Models\PageEmailProjection
```

Get all organization emails. List team or shared test email accounts

By default returns all emails across all team inboxes sorted by ascending created at date. Responses are paginated. You can restrict results to a list of inbox IDs. You can also filter out read messages

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
$inbox_id = array('inbox_id_example'); // string[] | Optional inbox ids to filter by. Can be repeated. By default will use all inboxes belonging to your account.
$page = 0; // int | Optional page index in email list pagination
$size = 20; // int | Optional page size in email list pagination. Maximum size is 100. Use page index and sort to page through larger results
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$unread_only = false; // bool | Optional filter for unread emails only. All emails are considered unread until they are viewed in the dashboard or requested directly
$search_filter = 'search_filter_example'; // string | Optional search filter search filter for emails.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter emails received after given date time
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional filter emails received before given date time

try {
    $result = $apiInstance->getOrganizationEmailsPaginated($inbox_id, $page, $size, $sort, $unread_only, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getOrganizationEmailsPaginated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string[]**](../Model/string)| Optional inbox ids to filter by. Can be repeated. By default will use all inboxes belonging to your account. | [optional]
 **page** | **int**| Optional page index in email list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in email list pagination. Maximum size is 100. Use page index and sort to page through larger results | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **unread_only** | **bool**| Optional filter for unread emails only. All emails are considered unread until they are viewed in the dashboard or requested directly | [optional] [default to false]
 **search_filter** | **string**| Optional search filter search filter for emails. | [optional]
 **since** | **\DateTime**| Optional filter emails received after given date time | [optional]
 **before** | **\DateTime**| Optional filter emails received before given date time | [optional]

### Return type

[**\MailSlurp\Models\PageEmailProjection**](../Model/PageEmailProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getRawEmailContents()`

```php
getRawEmailContents($email_id): string
```

Get raw email string. Returns unparsed raw SMTP message with headers and body.

Returns a raw, unparsed, and unprocessed email. If your client has issues processing the response it is likely due to the response content-type which is text/plain. If you need a JSON response content-type use the getRawEmailJson endpoint

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
$email_id = 'email_id_example'; // string | ID of email

try {
    $result = $apiInstance->getRawEmailContents($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getRawEmailContents: ', $e->getMessage(), PHP_EOL;
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

## `getRawEmailJson()`

```php
getRawEmailJson($email_id): \MailSlurp\Models\RawEmailJson
```

Get raw email in JSON. Unparsed SMTP message in JSON wrapper format.

Returns a raw, unparsed, and unprocessed email wrapped in a JSON response object for easier handling when compared with the getRawEmail text/plain response

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
$email_id = 'email_id_example'; // string | ID of email

try {
    $result = $apiInstance->getRawEmailJson($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getRawEmailJson: ', $e->getMessage(), PHP_EOL;
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

## `getUnreadEmailCount()`

```php
getUnreadEmailCount(): \MailSlurp\Models\UnreadCount
```

Get unread email count

Get number of emails unread. Unread means has not been viewed in dashboard or returned in an email API response

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
    $result = $apiInstance->getUnreadEmailCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->getUnreadEmailCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\UnreadCount**](../Model/UnreadCount)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `markAsRead()`

```php
markAsRead($email_id, $read): \MailSlurp\Models\EmailPreview
```

Mark an email as read on unread

Marks an email as read or unread. Pass boolean read flag to set value. This is useful if you want to read an email but keep it as unread

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
$email_id = 'email_id_example'; // string
$read = true; // bool | What value to assign to email read property. Default true.

try {
    $result = $apiInstance->markAsRead($email_id, $read);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->markAsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)|  |
 **read** | **bool**| What value to assign to email read property. Default true. | [optional] [default to true]

### Return type

[**\MailSlurp\Models\EmailPreview**](../Model/EmailPreview)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `replyToEmail()`

```php
replyToEmail($email_id, $reply_to_email_options): \MailSlurp\Models\SentEmailDto
```

Reply to an email

Send the reply to the email sender or reply-to and include same subject cc bcc etc. Reply to an email and the contents will be sent with the existing subject to the emails `to`, `cc`, and `bcc`.

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
$email_id = 'email_id_example'; // string | ID of the email that should be replied to
$reply_to_email_options = new \MailSlurp\Models\ReplyToEmailOptions(); // \MailSlurp\Models\ReplyToEmailOptions

try {
    $result = $apiInstance->replyToEmail($email_id, $reply_to_email_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->replyToEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of the email that should be replied to |
 **reply_to_email_options** | [**\MailSlurp\Models\ReplyToEmailOptions**](../Model/ReplyToEmailOptions)|  |

### Return type

[**\MailSlurp\Models\SentEmailDto**](../Model/SentEmailDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `sendEmailSourceOptional()`

```php
sendEmailSourceOptional($inbox_id, $send_email_options, $use_domain_pool, $virtual_send)
```

Send email

Alias for `InboxController.sendEmail` method - see original method for full details. Sends an email from a given inbox that you have created. If no inbox is supplied a random inbox will be created for you and used to send the email.

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
$inbox_id = 'inbox_id_example'; // string | ID of the inbox you want to send the email from
$send_email_options = new \MailSlurp\Models\SendEmailOptions(); // \MailSlurp\Models\SendEmailOptions
$use_domain_pool = True; // bool | Use domain pool. Optionally create inbox to send from using the mailslurp domain pool.
$virtual_send = True; // bool | Optionally create inbox to send from that is a virtual inbox and won't send to external addresses

try {
    $apiInstance->sendEmailSourceOptional($inbox_id, $send_email_options, $use_domain_pool, $virtual_send);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->sendEmailSourceOptional: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| ID of the inbox you want to send the email from |
 **send_email_options** | [**\MailSlurp\Models\SendEmailOptions**](../Model/SendEmailOptions)|  |
 **use_domain_pool** | **bool**| Use domain pool. Optionally create inbox to send from using the mailslurp domain pool. | [optional]
 **virtual_send** | **bool**| Optionally create inbox to send from that is a virtual inbox and won&#39;t send to external addresses | [optional]

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `validateEmail()`

```php
validateEmail($email_id): \MailSlurp\Models\ValidationDto
```

Validate email HTML contents

Validate the HTML content of email if HTML is found. Considered valid if no HTML is present.

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
$email_id = 'email_id_example'; // string | ID of email

try {
    $result = $apiInstance->validateEmail($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailControllerApi->validateEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/)| ID of email |

### Return type

[**\MailSlurp\Models\ValidationDto**](../Model/ValidationDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)
