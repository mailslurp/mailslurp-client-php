# MailSlurp\CommonActionsControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewEmailAddress**](CommonActionsControllerApi#createNewEmailAddress) | **POST** /newEmailAddress | Create new random inbox
[**createRandomInbox**](CommonActionsControllerApi#createRandomInbox) | **POST** /createInbox | Create new random inbox
[**deleteEmailAddress**](CommonActionsControllerApi#deleteEmailAddress) | **DELETE** /deleteEmailAddress | Delete inbox email address by inbox id
[**emptyInbox**](CommonActionsControllerApi#emptyInbox) | **DELETE** /emptyInbox | Delete all emails in an inbox
[**sendEmailSimple**](CommonActionsControllerApi#sendEmailSimple) | **POST** /sendEmail | Send an email



## createNewEmailAddress

> \MailSlurp\Models\InboxDto createNewEmailAddress($allow_team_access, $use_domain_pool, $expires_at, $expires_in, $email_address, $inbox_type, $description, $name, $tags, $favourite)

Create new random inbox

Returns an Inbox with an `id` and an `emailAddress`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\CommonActionsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$allow_team_access = True; // bool | 
$use_domain_pool = True; // bool | 
$expires_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$expires_in = 56; // int | 
$email_address = 'email_address_example'; // string | 
$inbox_type = 'inbox_type_example'; // string | 
$description = 'description_example'; // string | 
$name = 'name_example'; // string | 
$tags = array('tags_example'); // string[] | 
$favourite = True; // bool | 

try {
    $result = $apiInstance->createNewEmailAddress($allow_team_access, $use_domain_pool, $expires_at, $expires_in, $email_address, $inbox_type, $description, $name, $tags, $favourite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->createNewEmailAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allow_team_access** | **bool**|  | [optional]
 **use_domain_pool** | **bool**|  | [optional]
 **expires_at** | **\DateTime**|  | [optional]
 **expires_in** | **int**|  | [optional]
 **email_address** | **string**|  | [optional]
 **inbox_type** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **tags** | [**string[]**](../Model/string)|  | [optional]
 **favourite** | **bool**|  | [optional]

### Return type

[**\MailSlurp\Models\InboxDto**](../Model/InboxDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## createRandomInbox

> \MailSlurp\Models\InboxDto createRandomInbox($allow_team_access, $use_domain_pool, $expires_at, $expires_in, $email_address, $inbox_type, $description, $name, $tags, $favourite)

Create new random inbox

Returns an Inbox with an `id` and an `emailAddress`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\CommonActionsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$allow_team_access = True; // bool | 
$use_domain_pool = True; // bool | 
$expires_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$expires_in = 56; // int | 
$email_address = 'email_address_example'; // string | 
$inbox_type = 'inbox_type_example'; // string | 
$description = 'description_example'; // string | 
$name = 'name_example'; // string | 
$tags = array('tags_example'); // string[] | 
$favourite = True; // bool | 

try {
    $result = $apiInstance->createRandomInbox($allow_team_access, $use_domain_pool, $expires_at, $expires_in, $email_address, $inbox_type, $description, $name, $tags, $favourite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->createRandomInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allow_team_access** | **bool**|  | [optional]
 **use_domain_pool** | **bool**|  | [optional]
 **expires_at** | **\DateTime**|  | [optional]
 **expires_in** | **int**|  | [optional]
 **email_address** | **string**|  | [optional]
 **inbox_type** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **tags** | [**string[]**](../Model/string)|  | [optional]
 **favourite** | **bool**|  | [optional]

### Return type

[**\MailSlurp\Models\InboxDto**](../Model/InboxDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## deleteEmailAddress

> deleteEmailAddress($inbox_id)

Delete inbox email address by inbox id

Deletes inbox email address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\CommonActionsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 

try {
    $apiInstance->deleteEmailAddress($inbox_id);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->deleteEmailAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |

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


## emptyInbox

> emptyInbox($inbox_id)

Delete all emails in an inbox

Deletes all emails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\CommonActionsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | 

try {
    $apiInstance->emptyInbox($inbox_id);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->emptyInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)|  |

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


## sendEmailSimple

> sendEmailSimple($simple_send_email_options)

Send an email

If no senderId or inboxId provided a random email address will be used to send from.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\CommonActionsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$simple_send_email_options = new \MailSlurp\Models\SimpleSendEmailOptions(); // \MailSlurp\Models\SimpleSendEmailOptions | 

try {
    $apiInstance->sendEmailSimple($simple_send_email_options);
} catch (Exception $e) {
    echo 'Exception when calling CommonActionsControllerApi->sendEmailSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **simple_send_email_options** | [**\MailSlurp\Models\SimpleSendEmailOptions**](../Model/SimpleSendEmailOptions)|  |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

