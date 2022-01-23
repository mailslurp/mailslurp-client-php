# # WebhookEmailOpenedPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Idempotent message ID. Store this ID locally or in a database to prevent message duplication. | 
**webhook_id** | **string** | ID of webhook entity being triggered | 
**event_name** | **string** | Name of the event type webhook is being triggered for. | 
**webhook_name** | **string** | Name of the webhook being triggered | [optional] 
**inbox_id** | **string** | Id of the inbox that received an email | 
**pixel_id** | **string** | ID of the tracking pixel | 
**sent_email_id** | **string** | ID of sent email | 
**recipient** | **string** | Email address for the recipient of the tracking pixel | 
**created_at** | [**\DateTime**](\DateTime) | Date time of event creation | 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


