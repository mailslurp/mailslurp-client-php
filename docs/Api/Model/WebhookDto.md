# # WebhookDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the Webhook | [optional] 
**user_id** | **string** | User ID of the Webhook | [optional] 
**basic_auth** | **bool** | Does webhook expect basic authentication? If true it means you created this webhook with a username and password. MailSlurp will use these in the URL to authenticate itself. | [optional] 
**name** | **string** | Name of the webhook | [optional] 
**inbox_id** | **string** | The inbox that the Webhook will be triggered by | [optional] 
**url** | **string** | URL of your server that the webhook will be sent to. The schema of the JSON that is sent is described by the payloadJsonSchema. | [optional] 
**method** | **string** | HTTP method that your server endpoint must listen for | [optional] 
**payload_json_schema** | **string** | Deprecated. Fetch JSON Schema for webhook using the getJsonSchemaForWebhookPayload method | [optional] 
**created_at** | [**\DateTime**](\DateTime) | When the webhook was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime) |  | [optional] 
**event_name** | **string** |  | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


