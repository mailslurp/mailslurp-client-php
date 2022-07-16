# # CreateWebhookOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | Public URL on your server that MailSlurp can post WebhookNotification payload to when an email is received or an event is trigger. The payload of the submitted JSON is dependent on the webhook event type. See docs.mailslurp.com/webhooks for event payload documentation. | 
**basic_auth** | [**\MailSlurp\Models\BasicAuthOptions**](BasicAuthOptions) |  | [optional] 
**name** | **string** | Optional name for the webhook | [optional] 
**event_name** | **string** | Optional webhook event name. Default is &#x60;EMAIL_RECEIVED&#x60; and is triggered when an email is received by the inbox associated with the webhook. Payload differ according to the webhook event name. | [optional] 
**include_headers** | [**\MailSlurp\Models\WebhookHeaders**](WebhookHeaders) |  | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


