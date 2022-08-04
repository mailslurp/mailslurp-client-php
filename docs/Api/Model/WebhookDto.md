# # WebhookDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the Webhook |
**user_id** | **string** | User ID of the Webhook |
**basic_auth** | **bool** | Does webhook expect basic authentication? If true it means you created this webhook with a username and password. MailSlurp will use these in the URL to authenticate itself. |
**name** | **string** | Name of the webhook | [optional]
**inbox_id** | **string** | The inbox that the Webhook will be triggered by. If null then webhook triggered at account level | [optional]
**url** | **string** | URL of your server that the webhook will be sent to. The schema of the JSON that is sent is described by the payloadJsonSchema. |
**method** | **string** | HTTP method that your server endpoint must listen for |
**payload_json_schema** | **string** | Deprecated. Fetch JSON Schema for webhook using the getJsonSchemaForWebhookPayload method |
**created_at** | [**\DateTime**](\DateTime) | When the webhook was created |
**updated_at** | [**\DateTime**](\DateTime) |  |
**event_name** | **string** | Webhook trigger event name | [optional]
**request_headers** | [**\MailSlurp\Models\WebhookHeaders**](WebhookHeaders) |  | [optional]

[[Back to Model list]](../../README#models) [[Back to API list]](../../README#endpoints) [[Back to README]](../../README)
