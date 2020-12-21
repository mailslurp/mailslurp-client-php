# MailSlurp\AliasControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAlias**](AliasControllerApi.md#createAlias) | **POST** /aliases | Create an email alias. Must be verified by clicking link inside verification email that will be sent to the address. Once verified the alias will be active.
[**deleteAlias**](AliasControllerApi.md#deleteAlias) | **DELETE** /aliases/{aliasId} | Delete an email alias
[**getAlias**](AliasControllerApi.md#getAlias) | **GET** /aliases/{aliasId} | Get an email alias
[**getAliasEmails**](AliasControllerApi.md#getAliasEmails) | **GET** /aliases/{aliasId}/emails | Get emails for an alias
[**getAliasThreads**](AliasControllerApi.md#getAliasThreads) | **GET** /aliases/{aliasId}/threads | Get threads created for an alias
[**getAliases**](AliasControllerApi.md#getAliases) | **GET** /aliases | Get all email aliases you have created
[**replyToEmail**](AliasControllerApi.md#replyToEmail) | **PUT** /aliases/{aliasId}/emails/{emailId} | Reply to an email
[**sendAliasEmail**](AliasControllerApi.md#sendAliasEmail) | **POST** /aliases/{aliasId}/emails | Send an email from an alias inbox
[**updateAlias**](AliasControllerApi.md#updateAlias) | **PUT** /aliases/{aliasId} | Update an email alias



## createAlias

> \MailSlurp\Models\AliasDto createAlias($create_alias_options)

Create an email alias. Must be verified by clicking link inside verification email that will be sent to the address. Once verified the alias will be active.

Email aliases use a MailSlurp randomly generated email address (or a custom domain inbox that you provide) to mask or proxy a real email address. Emails sent to the alias address will be forwarded to the hidden email address it was created for. If you want to send a reply use the threadId attached

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
$create_alias_options = new \MailSlurp\Models\CreateAliasOptions(); // \MailSlurp\Models\CreateAliasOptions | createAliasOptions

try {
    $result = $apiInstance->createAlias($create_alias_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->createAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_alias_options** | [**\MailSlurp\Models\CreateAliasOptions**](../Model/CreateAliasOptions.md)| createAliasOptions |

### Return type

[**\MailSlurp\Models\AliasDto**](../Model/AliasDto.md)

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

Delete an email alias

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

> \MailSlurp\Models\AliasDto getAlias($alias_id)

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

[**\MailSlurp\Models\AliasDto**](../Model/AliasDto.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAliasEmails

> \MailSlurp\Models\PageEmailProjection getAliasEmails($alias_id, $page, $size, $sort)

Get emails for an alias

Get paginated emails for an alias by ID

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
$page = 0; // int | Optional page index alias email list pagination
$size = 20; // int | Optional page size alias email list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC

try {
    $result = $apiInstance->getAliasEmails($alias_id, $page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->getAliasEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias_id** | [**string**](../Model/.md)| aliasId |
 **page** | **int**| Optional page index alias email list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size alias email list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]

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


## getAliasThreads

> \MailSlurp\Models\PageThreadProjection getAliasThreads($alias_id, $page, $size, $sort)

Get threads created for an alias

Returns threads created for an email alias in paginated form

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
$page = 0; // int | Optional page index in thread list pagination
$size = 20; // int | Optional page size in thread list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC

try {
    $result = $apiInstance->getAliasThreads($alias_id, $page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->getAliasThreads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias_id** | [**string**](../Model/.md)| aliasId |
 **page** | **int**| Optional page index in thread list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in thread list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]

### Return type

[**\MailSlurp\Models\PageThreadProjection**](../Model/PageThreadProjection.md)

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

Get all email aliases you have created

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


## replyToEmail

> \MailSlurp\Models\SentEmailDto replyToEmail($alias_id, $email_id, $reply_to_alias_email_options)

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


$apiInstance = new MailSlurp\Api\AliasControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alias_id = 'alias_id_example'; // string | ID of the alias that email belongs to
$email_id = 'email_id_example'; // string | ID of the email that should be replied to
$reply_to_alias_email_options = new \MailSlurp\Models\ReplyToAliasEmailOptions(); // \MailSlurp\Models\ReplyToAliasEmailOptions | replyToAliasEmailOptions

try {
    $result = $apiInstance->replyToEmail($alias_id, $email_id, $reply_to_alias_email_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->replyToEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias_id** | [**string**](../Model/.md)| ID of the alias that email belongs to |
 **email_id** | [**string**](../Model/.md)| ID of the email that should be replied to |
 **reply_to_alias_email_options** | [**\MailSlurp\Models\ReplyToAliasEmailOptions**](../Model/ReplyToAliasEmailOptions.md)| replyToAliasEmailOptions |

### Return type

[**\MailSlurp\Models\SentEmailDto**](../Model/SentEmailDto.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendAliasEmail

> \MailSlurp\Models\SentEmailDto sendAliasEmail($alias_id, $send_email_options)

Send an email from an alias inbox

Send an email from an alias. Replies to the email will be forwared to the alias masked email address

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
$send_email_options = new \MailSlurp\Models\SendEmailOptions(); // \MailSlurp\Models\SendEmailOptions | Options for the email to be sent

try {
    $result = $apiInstance->sendAliasEmail($alias_id, $send_email_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->sendAliasEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias_id** | [**string**](../Model/.md)| aliasId |
 **send_email_options** | [**\MailSlurp\Models\SendEmailOptions**](../Model/SendEmailOptions.md)| Options for the email to be sent | [optional]

### Return type

[**\MailSlurp\Models\SentEmailDto**](../Model/SentEmailDto.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAlias

> updateAlias($alias_id, $update_alias_options)

Update an email alias

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
$update_alias_options = new \MailSlurp\Models\UpdateAliasOptions(); // \MailSlurp\Models\UpdateAliasOptions | updateAliasOptions

try {
    $apiInstance->updateAlias($alias_id, $update_alias_options);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->updateAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias_id** | [**string**](../Model/.md)| aliasId |
 **update_alias_options** | [**\MailSlurp\Models\UpdateAliasOptions**](../Model/UpdateAliasOptions.md)| updateAliasOptions |

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

