# # CreateWebhookOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | Public URL on your server that MailSlurp can post WebhookNotification payload to when an email is received or an event is trigger. The payload of the submitted JSON is dependent on the webhook event type. The default &#x60;EMAIL_RECEIVED&#x60; payload is described by &#x60;https://api.mailslurp.com/schemas/webhook-payload&#x60;. The other events, &#x60;NEW_EMAIL&#x60;, &#x60;NEW_CONTACT&#x60;, and &#x60;NEW_ATTACHMENT&#x60; are described by &#x60;https://api.mailslurp.com/schemas/webhook-new-email-payload&#x60;, &#x60;https://api.mailslurp.com/schemas/webhook-new-contact-payload&#x60;,&#x60;https://api.mailslurp.com/schemas/webhook-new-attachment-payload&#x60; respectively. | 
**basic_auth** | [**\MailSlurp\Models\BasicAuthOptions**](BasicAuthOptions) |  | [optional] 
**name** | **string** | Optional name for the webhook | [optional] 
**event_name** | **string** | Optional webhook event name. Default is &#x60;EMAIL_RECEIVED&#x60; and is triggered when an email is received by the inbox associated with the webhook. Payload differ according to the webhook event name. The other events are &#x60;NEW_EMAIL&#x60;, &#x60;NEW_CONTACT&#x60;, and &#x60;NEW_ATTACHMENT&#x60; and &#x60;EMAIL_OPENED&#x60;. &#x60;EMAIL_OPENED&#x60; requires the use of tracking pixels when sending. See the email tracking guide for more information. | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


