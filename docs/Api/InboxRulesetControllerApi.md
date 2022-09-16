# MailSlurp\InboxRulesetControllerApi

All URIs are relative to https://php.api.mailslurp.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewInboxRuleset()**](InboxRulesetControllerApi#createNewInboxRuleset) | **POST** /rulesets | Create an inbox ruleset
[**deleteInboxRuleset()**](InboxRulesetControllerApi#deleteInboxRuleset) | **DELETE** /rulesets/{id} | Delete an inbox ruleset
[**deleteInboxRulesets()**](InboxRulesetControllerApi#deleteInboxRulesets) | **DELETE** /rulesets | Delete inbox rulesets
[**getInboxRuleset()**](InboxRulesetControllerApi#getInboxRuleset) | **GET** /rulesets/{id} | Get an inbox ruleset
[**getInboxRulesets()**](InboxRulesetControllerApi#getInboxRulesets) | **GET** /rulesets | List inbox rulesets
[**testInboxRuleset()**](InboxRulesetControllerApi#testInboxRuleset) | **POST** /rulesets/{id}/test | Test an inbox ruleset
[**testInboxRulesetsForInbox()**](InboxRulesetControllerApi#testInboxRulesetsForInbox) | **PUT** /rulesets | Test inbox rulesets for inbox
[**testNewInboxRuleset()**](InboxRulesetControllerApi#testNewInboxRuleset) | **PATCH** /rulesets | Test new inbox ruleset


## `createNewInboxRuleset()`

```php
createNewInboxRuleset($inbox_id, $create_inbox_ruleset_options): \MailSlurp\Models\InboxRulesetDto
```

Create an inbox ruleset

Create a new inbox rule for forwarding, blocking, and allowing emails when sending and receiving

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxRulesetControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Inbox id to attach ruleset to
$create_inbox_ruleset_options = new \MailSlurp\Models\CreateInboxRulesetOptions(); // \MailSlurp\Models\CreateInboxRulesetOptions

try {
    $result = $apiInstance->createNewInboxRuleset($inbox_id, $create_inbox_ruleset_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxRulesetControllerApi->createNewInboxRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Inbox id to attach ruleset to |
 **create_inbox_ruleset_options** | [**\MailSlurp\Models\CreateInboxRulesetOptions**](../Model/CreateInboxRulesetOptions)|  |

### Return type

[**\MailSlurp\Models\InboxRulesetDto**](../Model/InboxRulesetDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `deleteInboxRuleset()`

```php
deleteInboxRuleset($id)
```

Delete an inbox ruleset

Delete inbox ruleset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxRulesetControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of inbox ruleset

try {
    $apiInstance->deleteInboxRuleset($id);
} catch (Exception $e) {
    echo 'Exception when calling InboxRulesetControllerApi->deleteInboxRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)| ID of inbox ruleset |

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

## `deleteInboxRulesets()`

```php
deleteInboxRulesets($inbox_id)
```

Delete inbox rulesets

Delete inbox rulesets. Accepts optional inboxId filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxRulesetControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Optional inbox id to attach ruleset to

try {
    $apiInstance->deleteInboxRulesets($inbox_id);
} catch (Exception $e) {
    echo 'Exception when calling InboxRulesetControllerApi->deleteInboxRulesets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Optional inbox id to attach ruleset to | [optional]

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

## `getInboxRuleset()`

```php
getInboxRuleset($id): \MailSlurp\Models\InboxRulesetDto
```

Get an inbox ruleset

Get inbox ruleset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxRulesetControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of inbox ruleset

try {
    $result = $apiInstance->getInboxRuleset($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxRulesetControllerApi->getInboxRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)| ID of inbox ruleset |

### Return type

[**\MailSlurp\Models\InboxRulesetDto**](../Model/InboxRulesetDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `getInboxRulesets()`

```php
getInboxRulesets($inbox_id, $page, $size, $sort, $search_filter, $since, $before): \MailSlurp\Models\PageInboxRulesetDto
```

List inbox rulesets

List all rulesets attached to an inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxRulesetControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Optional inbox id to get rulesets from
$page = 0; // int | Optional page index in inbox ruleset list pagination
$size = 20; // int | Optional page size in inbox ruleset list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$search_filter = 'search_filter_example'; // string | Optional search filter
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getInboxRulesets($inbox_id, $page, $size, $sort, $search_filter, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxRulesetControllerApi->getInboxRulesets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Optional inbox id to get rulesets from | [optional]
 **page** | **int**| Optional page index in inbox ruleset list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in inbox ruleset list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **search_filter** | **string**| Optional search filter | [optional]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageInboxRulesetDto**](../Model/PageInboxRulesetDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `testInboxRuleset()`

```php
testInboxRuleset($id, $inbox_ruleset_test_options): \MailSlurp\Models\InboxRulesetTestResult
```

Test an inbox ruleset

Test an inbox ruleset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxRulesetControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of inbox ruleset
$inbox_ruleset_test_options = new \MailSlurp\Models\InboxRulesetTestOptions(); // \MailSlurp\Models\InboxRulesetTestOptions

try {
    $result = $apiInstance->testInboxRuleset($id, $inbox_ruleset_test_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxRulesetControllerApi->testInboxRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/)| ID of inbox ruleset |
 **inbox_ruleset_test_options** | [**\MailSlurp\Models\InboxRulesetTestOptions**](../Model/InboxRulesetTestOptions)|  |

### Return type

[**\MailSlurp\Models\InboxRulesetTestResult**](../Model/InboxRulesetTestResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `testInboxRulesetsForInbox()`

```php
testInboxRulesetsForInbox($inbox_id, $inbox_ruleset_test_options): \MailSlurp\Models\InboxRulesetTestResult
```

Test inbox rulesets for inbox

Test inbox rulesets for inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxRulesetControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | ID of inbox
$inbox_ruleset_test_options = new \MailSlurp\Models\InboxRulesetTestOptions(); // \MailSlurp\Models\InboxRulesetTestOptions

try {
    $result = $apiInstance->testInboxRulesetsForInbox($inbox_id, $inbox_ruleset_test_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxRulesetControllerApi->testInboxRulesetsForInbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| ID of inbox |
 **inbox_ruleset_test_options** | [**\MailSlurp\Models\InboxRulesetTestOptions**](../Model/InboxRulesetTestOptions)|  |

### Return type

[**\MailSlurp\Models\InboxRulesetTestResult**](../Model/InboxRulesetTestResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)

## `testNewInboxRuleset()`

```php
testNewInboxRuleset($test_new_inbox_ruleset_options): \MailSlurp\Models\InboxRulesetTestResult
```

Test new inbox ruleset

Test new inbox ruleset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\InboxRulesetControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_new_inbox_ruleset_options = new \MailSlurp\Models\TestNewInboxRulesetOptions(); // \MailSlurp\Models\TestNewInboxRulesetOptions

try {
    $result = $apiInstance->testNewInboxRuleset($test_new_inbox_ruleset_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxRulesetControllerApi->testNewInboxRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_new_inbox_ruleset_options** | [**\MailSlurp\Models\TestNewInboxRulesetOptions**](../Model/TestNewInboxRulesetOptions)|  |

### Return type

[**\MailSlurp\Models\InboxRulesetTestResult**](../Model/InboxRulesetTestResult)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README#endpoints)
[[Back to Model list]](../../README#models)
[[Back to README]](../../README)
