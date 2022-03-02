# MailSlurp\WaitForControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**waitFor**](WaitForControllerApi#waitFor) | **POST** /waitFor | Wait for an email to match the provided filter conditions such as subject contains keyword.
[**waitForEmailCount**](WaitForControllerApi#waitForEmailCount) | **GET** /waitForEmailCount | Wait for and return count number of emails. Hold connection until inbox count matches expected or timeout occurs
[**waitForLatestEmail**](WaitForControllerApi#waitForLatestEmail) | **GET** /waitForLatestEmail | Fetch inbox&#39;s latest email or if empty wait for an email to arrive
[**waitForMatchingEmails**](WaitForControllerApi#waitForMatchingEmails) | **POST** /waitForMatchingEmails | Wait or return list of emails that match simple matching patterns
[**waitForMatchingFirstEmail**](WaitForControllerApi#waitForMatchingFirstEmail) | **POST** /waitForMatchingFirstEmail | Wait for or return the first email that matches provided MatchOptions array
[**waitForNthEmail**](WaitForControllerApi#waitForNthEmail) | **GET** /waitForNthEmail | Wait for or fetch the email with a given index in the inbox specified. If index doesn&#39;t exist waits for it to exist or timeout to occur.



## waitFor

> \MailSlurp\Models\EmailPreview[] waitFor($wait_for_conditions)

Wait for an email to match the provided filter conditions such as subject contains keyword.

Generic waitFor method that will wait until an inbox meets given conditions or return immediately if already met

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WaitForControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wait_for_conditions = new \MailSlurp\Models\WaitForConditions(); // \MailSlurp\Models\WaitForConditions | 

try {
    $result = $apiInstance->waitFor($wait_for_conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaitForControllerApi->waitFor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wait_for_conditions** | [**\MailSlurp\Models\WaitForConditions**](../Model/WaitForConditions)|  |

### Return type

[**\MailSlurp\Models\EmailPreview[]**](../Model/EmailPreview)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## waitForEmailCount

> \MailSlurp\Models\EmailPreview[] waitForEmailCount($inbox_id, $count, $timeout, $unread_only, $before, $since, $sort, $delay)

Wait for and return count number of emails. Hold connection until inbox count matches expected or timeout occurs

If inbox contains count or more emails at time of request then return count worth of emails. If not wait until the count is reached and return those or return an error if timeout is exceeded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WaitForControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Id of the inbox we are fetching emails from
$count = 56; // int | Number of emails to wait for. Must be greater that 1
$timeout = 56; // int | Max milliseconds to wait
$unread_only = false; // bool | Optional filter for unread only
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter for emails that were received before the given timestamp
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter for emails that were received after the given timestamp
$sort = 'sort_example'; // string | Sort direction
$delay = 56; // int | Max milliseconds delay between calls

try {
    $result = $apiInstance->waitForEmailCount($inbox_id, $count, $timeout, $unread_only, $before, $since, $sort, $delay);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaitForControllerApi->waitForEmailCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Id of the inbox we are fetching emails from |
 **count** | **int**| Number of emails to wait for. Must be greater that 1 |
 **timeout** | **int**| Max milliseconds to wait | [optional]
 **unread_only** | **bool**| Optional filter for unread only | [optional] [default to false]
 **before** | **\DateTime**| Filter for emails that were received before the given timestamp | [optional]
 **since** | **\DateTime**| Filter for emails that were received after the given timestamp | [optional]
 **sort** | **string**| Sort direction | [optional]
 **delay** | **int**| Max milliseconds delay between calls | [optional]

### Return type

[**\MailSlurp\Models\EmailPreview[]**](../Model/EmailPreview)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## waitForLatestEmail

> \MailSlurp\Models\Email waitForLatestEmail($inbox_id, $timeout, $unread_only, $before, $since, $sort, $delay)

Fetch inbox's latest email or if empty wait for an email to arrive

Will return either the last received email or wait for an email to arrive and return that. If you need to wait for an email for a non-empty inbox set `unreadOnly=true` or see the other receive methods such as `waitForNthEmail` or `waitForEmailCount`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WaitForControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Id of the inbox we are fetching emails from
$timeout = 56; // int | Max milliseconds to wait
$unread_only = false; // bool | Optional filter for unread only.
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter for emails that were before after the given timestamp
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter for emails that were received after the given timestamp
$sort = 'sort_example'; // string | Sort direction
$delay = 56; // int | Max milliseconds delay between calls

try {
    $result = $apiInstance->waitForLatestEmail($inbox_id, $timeout, $unread_only, $before, $since, $sort, $delay);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaitForControllerApi->waitForLatestEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Id of the inbox we are fetching emails from | [optional]
 **timeout** | **int**| Max milliseconds to wait | [optional]
 **unread_only** | **bool**| Optional filter for unread only. | [optional] [default to false]
 **before** | **\DateTime**| Filter for emails that were before after the given timestamp | [optional]
 **since** | **\DateTime**| Filter for emails that were received after the given timestamp | [optional]
 **sort** | **string**| Sort direction | [optional]
 **delay** | **int**| Max milliseconds delay between calls | [optional]

### Return type

[**\MailSlurp\Models\Email**](../Model/Email)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## waitForMatchingEmails

> \MailSlurp\Models\EmailPreview[] waitForMatchingEmails($inbox_id, $count, $match_options, $before, $since, $sort, $delay, $timeout, $unread_only)

Wait or return list of emails that match simple matching patterns

Perform a search of emails in an inbox with the given patterns. If results match expected count then return or else retry the search until results are found or timeout is reached. Match options allow simple CONTAINS or EQUALS filtering on SUBJECT, TO, BCC, CC, and FROM. See the `MatchOptions` object for options. An example payload is `{ matches: [{field: 'SUBJECT',should:'CONTAIN',value:'needle'}] }`. You can use an array of matches and they will be applied sequentially to filter out emails. If you want to perform matches and extractions of content using Regex patterns see the EmailController `getEmailContentMatch` method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WaitForControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Id of the inbox we are fetching emails from
$count = 56; // int | Number of emails to wait for. Must be greater or equal to 1
$match_options = new \MailSlurp\Models\MatchOptions(); // \MailSlurp\Models\MatchOptions | 
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter for emails that were received before the given timestamp
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter for emails that were received after the given timestamp
$sort = 'sort_example'; // string | Sort direction
$delay = 56; // int | Max milliseconds delay between calls
$timeout = 56; // int | Max milliseconds to wait
$unread_only = false; // bool | Optional filter for unread only

try {
    $result = $apiInstance->waitForMatchingEmails($inbox_id, $count, $match_options, $before, $since, $sort, $delay, $timeout, $unread_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaitForControllerApi->waitForMatchingEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Id of the inbox we are fetching emails from |
 **count** | **int**| Number of emails to wait for. Must be greater or equal to 1 |
 **match_options** | [**\MailSlurp\Models\MatchOptions**](../Model/MatchOptions)|  |
 **before** | **\DateTime**| Filter for emails that were received before the given timestamp | [optional]
 **since** | **\DateTime**| Filter for emails that were received after the given timestamp | [optional]
 **sort** | **string**| Sort direction | [optional]
 **delay** | **int**| Max milliseconds delay between calls | [optional]
 **timeout** | **int**| Max milliseconds to wait | [optional]
 **unread_only** | **bool**| Optional filter for unread only | [optional] [default to false]

### Return type

[**\MailSlurp\Models\EmailPreview[]**](../Model/EmailPreview)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## waitForMatchingFirstEmail

> \MailSlurp\Models\Email waitForMatchingFirstEmail($inbox_id, $match_options, $timeout, $unread_only, $since, $before, $sort, $delay)

Wait for or return the first email that matches provided MatchOptions array

Perform a search of emails in an inbox with the given patterns. If a result if found then return or else retry the search until a result is found or timeout is reached. Match options allow simple CONTAINS or EQUALS filtering on SUBJECT, TO, BCC, CC, and FROM. See the `MatchOptions` object for options. An example payload is `{ matches: [{field: 'SUBJECT',should:'CONTAIN',value:'needle'}] }`. You can use an array of matches and they will be applied sequentially to filter out emails. If you want to perform matches and extractions of content using Regex patterns see the EmailController `getEmailContentMatch` method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WaitForControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Id of the inbox we are matching an email for
$match_options = new \MailSlurp\Models\MatchOptions(); // \MailSlurp\Models\MatchOptions | 
$timeout = 56; // int | Max milliseconds to wait
$unread_only = false; // bool | Optional filter for unread only
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter for emails that were received after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter for emails that were received before the given timestamp
$sort = 'sort_example'; // string | Sort direction
$delay = 56; // int | Max milliseconds delay between calls

try {
    $result = $apiInstance->waitForMatchingFirstEmail($inbox_id, $match_options, $timeout, $unread_only, $since, $before, $sort, $delay);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaitForControllerApi->waitForMatchingFirstEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Id of the inbox we are matching an email for |
 **match_options** | [**\MailSlurp\Models\MatchOptions**](../Model/MatchOptions)|  |
 **timeout** | **int**| Max milliseconds to wait | [optional]
 **unread_only** | **bool**| Optional filter for unread only | [optional] [default to false]
 **since** | **\DateTime**| Filter for emails that were received after the given timestamp | [optional]
 **before** | **\DateTime**| Filter for emails that were received before the given timestamp | [optional]
 **sort** | **string**| Sort direction | [optional]
 **delay** | **int**| Max milliseconds delay between calls | [optional]

### Return type

[**\MailSlurp\Models\Email**](../Model/Email)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## waitForNthEmail

> \MailSlurp\Models\Email waitForNthEmail($inbox_id, $index, $timeout, $unread_only, $since, $before, $sort, $delay)

Wait for or fetch the email with a given index in the inbox specified. If index doesn't exist waits for it to exist or timeout to occur.

If nth email is already present in inbox then return it. If not hold the connection open until timeout expires or the nth email is received and returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WaitForControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Id of the inbox you are fetching emails from
$index = 0; // int | Zero based index of the email to wait for. If an inbox has 1 email already and you want to wait for the 2nd email pass index=1
$timeout = 56; // int | Max milliseconds to wait for the nth email if not already present
$unread_only = false; // bool | Optional filter for unread only
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter for emails that were received after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter for emails that were received before the given timestamp
$sort = 'sort_example'; // string | Sort direction
$delay = 56; // int | Max milliseconds delay between calls

try {
    $result = $apiInstance->waitForNthEmail($inbox_id, $index, $timeout, $unread_only, $since, $before, $sort, $delay);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaitForControllerApi->waitForNthEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/)| Id of the inbox you are fetching emails from | [optional]
 **index** | **int**| Zero based index of the email to wait for. If an inbox has 1 email already and you want to wait for the 2nd email pass index&#x3D;1 | [optional] [default to 0]
 **timeout** | **int**| Max milliseconds to wait for the nth email if not already present | [optional]
 **unread_only** | **bool**| Optional filter for unread only | [optional] [default to false]
 **since** | **\DateTime**| Filter for emails that were received after the given timestamp | [optional]
 **before** | **\DateTime**| Filter for emails that were received before the given timestamp | [optional]
 **sort** | **string**| Sort direction | [optional]
 **delay** | **int**| Max milliseconds delay between calls | [optional]

### Return type

[**\MailSlurp\Models\Email**](../Model/Email)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

