# # WebhookNewAttachmentPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Idempotent message ID. Store this ID locally or in a database to prevent message duplication. | 
**webhook_id** | **string** | ID of webhook entity being triggered | 
**webhook_name** | **string** | Name of the webhook being triggered | [optional] 
**event_name** | **string** | Name of the event type webhook is being triggered for. | 
**attachment_id** | **string** | ID of attachment. Use the &#x60;AttachmentController&#x60; to | 
**name** | **string** | Filename of the attachment if present | 
**content_type** | **string** | Content type of attachment such as &#39;image/png&#39; or &#39;application/pdf | 
**content_length** | **int** | Size of attachment in bytes | 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


