# # WebhookNewContactPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company** | **string** |  | [optional] 
**contact_id** | **string** |  | 
**created_at** | [**\DateTime**](\DateTime) |  | 
**email_addresses** | **string[]** |  | 
**event_name** | **string** | Name of the event type webhook is being triggered for. | [optional] 
**first_name** | **string** |  | [optional] 
**group_id** | **string** |  | [optional] 
**last_name** | **string** |  | [optional] 
**message_id** | **string** | Idempotent message ID. Store this ID locally or in a database to prevent message duplication. | [optional] 
**meta_data** | [**object**]() |  | [optional] 
**opt_out** | **bool** |  | [optional] 
**primary_email_address** | **string** |  | [optional] 
**tags** | **string[]** |  | 
**webhook_id** | **string** | ID of webhook entity being triggered | [optional] 
**webhook_name** | **string** | Name of the webhook being triggered | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


