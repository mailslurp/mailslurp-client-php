# # WebhookEmailReadPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Idempotent message ID. Store this ID locally or in a database to prevent message duplication. | [optional] 
**webhook_id** | **string** | ID of webhook entity being triggered | [optional] 
**event_name** | **string** | Name of the event type webhook is being triggered for. | [optional] 
**webhook_name** | **string** | Name of the webhook being triggered | [optional] 
**email_id** | **string** | ID of the email that was received. Use this ID for fetching the email with the &#x60;EmailController&#x60;. | [optional] 
**inbox_id** | **string** | Id of the inbox that received an email | [optional] 
**email_is_read** | **bool** | Is the email read | [optional] 
**created_at** | [**\DateTime**](\DateTime) | Date time of event creation | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


