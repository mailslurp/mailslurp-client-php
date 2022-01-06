# # WebhookNewAttachmentPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Idempotent message ID. Store this ID locally or in a database to prevent message duplication. | [optional] 
**webhook_id** | **string** | ID of webhook entity being triggered | [optional] 
**webhook_name** | **string** | Name of the webhook being triggered | [optional] 
**event_name** | **string** | Name of the event type webhook is being triggered for. | [optional] 
**attachment_id** | **string** | ID of attachment. Use the &#x60;AttachmentController&#x60; to | [optional] 
**name** | **string** | Filename of the attachment if present | [optional] 
**content_type** | **string** | Content type of attachment such as &#39;image/png&#39; or &#39;application/pdf | [optional] 
**content_length** | **int** | Size of attachment in bytes | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


