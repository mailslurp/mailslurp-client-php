# MailSlurp\GroupControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContactsToGroup**](GroupControllerApi#addContactsToGroup) | **PUT** /groups/{groupId}/contacts | Add contacts to a group
[**createGroup**](GroupControllerApi#createGroup) | **POST** /groups | Create a group
[**deleteGroup**](GroupControllerApi#deleteGroup) | **DELETE** /groups/{groupId} | Delete group
[**getAllGroups**](GroupControllerApi#getAllGroups) | **GET** /groups/paginated | Get all Contact Groups in paginated format
[**getGroup**](GroupControllerApi#getGroup) | **GET** /groups/{groupId} | Get group
[**getGroupWithContacts**](GroupControllerApi#getGroupWithContacts) | **GET** /groups/{groupId}/contacts | Get group and contacts belonging to it
[**getGroupWithContactsPaginated**](GroupControllerApi#getGroupWithContactsPaginated) | **GET** /groups/{groupId}/contacts-paginated | 
[**getGroups**](GroupControllerApi#getGroups) | **GET** /groups | Get all groups
[**removeContactsFromGroup**](GroupControllerApi#removeContactsFromGroup) | **DELETE** /groups/{groupId}/contacts | Remove contacts from a group



## addContactsToGroup

> \MailSlurp\Models\GroupContactsDto addContactsToGroup($group_id, $update_group_contacts)

Add contacts to a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\GroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | 
$update_group_contacts = new \MailSlurp\Models\UpdateGroupContacts(); // \MailSlurp\Models\UpdateGroupContacts | 

try {
    $result = $apiInstance->addContactsToGroup($group_id, $update_group_contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupControllerApi->addContactsToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | [**string**](../Model/)|  |
 **update_group_contacts** | [**\MailSlurp\Models\UpdateGroupContacts**](../Model/UpdateGroupContacts)|  |

### Return type

[**\MailSlurp\Models\GroupContactsDto**](../Model/GroupContactsDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## createGroup

> \MailSlurp\Models\GroupDto createGroup($create_group_options)

Create a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\GroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_group_options = new \MailSlurp\Models\CreateGroupOptions(); // \MailSlurp\Models\CreateGroupOptions | 

try {
    $result = $apiInstance->createGroup($create_group_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupControllerApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_group_options** | [**\MailSlurp\Models\CreateGroupOptions**](../Model/CreateGroupOptions)|  |

### Return type

[**\MailSlurp\Models\GroupDto**](../Model/GroupDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## deleteGroup

> deleteGroup($group_id)

Delete group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\GroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | 

try {
    $apiInstance->deleteGroup($group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupControllerApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | [**string**](../Model/)|  |

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


## getAllGroups

> \MailSlurp\Models\PageGroupProjection getAllGroups($page, $size, $sort, $since, $before)

Get all Contact Groups in paginated format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\GroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Optional page index in list pagination
$size = 20; // int | Optional page size in list pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getAllGroups($page, $size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupControllerApi->getAllGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Optional page index in list pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in list pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageGroupProjection**](../Model/PageGroupProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getGroup

> \MailSlurp\Models\GroupDto getGroup($group_id)

Get group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\GroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | 

try {
    $result = $apiInstance->getGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupControllerApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\GroupDto**](../Model/GroupDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getGroupWithContacts

> \MailSlurp\Models\GroupContactsDto getGroupWithContacts($group_id)

Get group and contacts belonging to it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\GroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | 

try {
    $result = $apiInstance->getGroupWithContacts($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupControllerApi->getGroupWithContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | [**string**](../Model/)|  |

### Return type

[**\MailSlurp\Models\GroupContactsDto**](../Model/GroupContactsDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getGroupWithContactsPaginated

> \MailSlurp\Models\PageContactProjection getGroupWithContactsPaginated($group_id, $page, $size, $sort, $since, $before)



Get group and paginated contacts belonging to it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\GroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | 
$page = 0; // int | Optional page index in group contact pagination
$size = 20; // int | Optional page size in group contact pagination
$sort = 'ASC'; // string | Optional createdAt sort direction ASC or DESC
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at after the given timestamp
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created at before the given timestamp

try {
    $result = $apiInstance->getGroupWithContactsPaginated($group_id, $page, $size, $sort, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupControllerApi->getGroupWithContactsPaginated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | [**string**](../Model/)|  |
 **page** | **int**| Optional page index in group contact pagination | [optional] [default to 0]
 **size** | **int**| Optional page size in group contact pagination | [optional] [default to 20]
 **sort** | **string**| Optional createdAt sort direction ASC or DESC | [optional] [default to &#39;ASC&#39;]
 **since** | **\DateTime**| Filter by created at after the given timestamp | [optional]
 **before** | **\DateTime**| Filter by created at before the given timestamp | [optional]

### Return type

[**\MailSlurp\Models\PageContactProjection**](../Model/PageContactProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## getGroups

> \MailSlurp\Models\GroupProjection[] getGroups()

Get all groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\GroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupControllerApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailSlurp\Models\GroupProjection[]**](../Model/GroupProjection)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)


## removeContactsFromGroup

> \MailSlurp\Models\GroupContactsDto removeContactsFromGroup($group_id, $update_group_contacts)

Remove contacts from a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\GroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | 
$update_group_contacts = new \MailSlurp\Models\UpdateGroupContacts(); // \MailSlurp\Models\UpdateGroupContacts | 

try {
    $result = $apiInstance->removeContactsFromGroup($group_id, $update_group_contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupControllerApi->removeContactsFromGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | [**string**](../Model/)|  |
 **update_group_contacts** | [**\MailSlurp\Models\UpdateGroupContacts**](../Model/UpdateGroupContacts)|  |

### Return type

[**\MailSlurp\Models\GroupContactsDto**](../Model/GroupContactsDto)

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

