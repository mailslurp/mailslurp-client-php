# MailSlurp\FormControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitForm**](FormControllerApi#submitForm) | **POST** /forms | Submit a form to be parsed and sent as an email to an address determined by the form fields



## submitForm

> string submitForm($_to, $_subject, $_redirect_to, $_email_address, $_success_message, $_spam_check, $other_parameters)

Submit a form to be parsed and sent as an email to an address determined by the form fields

This endpoint allows you to submit HTML forms and receive the field values and files via email.   #### Parameters The endpoint looks for special meta parameters in the form fields OR in the URL request parameters. The meta parameters can be used to specify the behaviour of the email.   You must provide at-least a `_to` email address to tell the endpoint where the form should be emailed. These can be submitted as hidden HTML input fields with the corresponding `name` attributes or as URL query parameters such as `?_to=test@example.com`  The endpoint takes all other form fields that are named and includes them in the message body of the email. Files are sent as attachments.  #### Submitting This endpoint accepts form submission via POST method. It accepts `application/x-www-form-urlencoded`, and `multipart/form-data` content-types.  #### HTML Example ```html <form    action=\"https://api.mailslurp.com/forms\"   method=\"post\" >   <input name=\"_to\" type=\"hidden\" value=\"test@example.com\"/>   <textarea name=\"feedback\"></textarea>   <button type=\"submit\">Submit</button> </form> ```  #### URL Example ```html <form    action=\"https://api.mailslurp.com/forms?_to=test@example.com\"   method=\"post\" >   <textarea name=\"feedback\"></textarea>   <button type=\"submit\">Submit</button> </form> ```    The email address is specified by a `_to` field OR is extracted from an email alias specified by a `_toAlias` field (see the alias controller for more information).  Endpoint accepts .  You can specify a content type in HTML forms using the `enctype` attribute, for instance: `<form enctype=\"multipart/form-data\">`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_to = test@example.com; // string | The email address that submitted form should be sent to.
$_subject = My form submission; // string | Optional subject of the email that will be sent.
$_redirect_to = https://mysite.com/form-success; // string | Optional URL to redirect form submitter to after submission. If not present user will see a success message.
$_email_address = test@example.com; // string | Email address of the submitting user. Include this if you wish to record the submitters email address and reply to it later.
$_success_message = Thanks for submitting; // string | Optional success message to display if no _redirectTo present.
$_spam_check = '_spam_check_example'; // string | Optional but recommended field that catches spammers out. Include as a hidden form field but LEAVE EMPTY. Spam-bots will usually fill every field. If the _spamCheck field is filled the form submission will be ignored.
$other_parameters = 'other_parameters_example'; // string | All other parameters or fields will be accepted and attached to the sent email. This includes files and any HTML form field with a name. These fields will become the body of the email that is sent.

try {
    $result = $apiInstance->submitForm($_to, $_subject, $_redirect_to, $_email_address, $_success_message, $_spam_check, $other_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->submitForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_to** | **string**| The email address that submitted form should be sent to. | [optional]
 **_subject** | **string**| Optional subject of the email that will be sent. | [optional]
 **_redirect_to** | **string**| Optional URL to redirect form submitter to after submission. If not present user will see a success message. | [optional]
 **_email_address** | **string**| Email address of the submitting user. Include this if you wish to record the submitters email address and reply to it later. | [optional]
 **_success_message** | **string**| Optional success message to display if no _redirectTo present. | [optional]
 **_spam_check** | **string**| Optional but recommended field that catches spammers out. Include as a hidden form field but LEAVE EMPTY. Spam-bots will usually fill every field. If the _spamCheck field is filled the form submission will be ignored. | [optional]
 **other_parameters** | **string**| All other parameters or fields will be accepted and attached to the sent email. This includes files and any HTML form field with a name. These fields will become the body of the email that is sent. | [optional]

### Return type

**string**

### Authorization

[API_KEY](../../README#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README#documentation-for-api-endpoints)
[[Back to Model list]](../../README#documentation-for-models)
[[Back to README]](../../README)

