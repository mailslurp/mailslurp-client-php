# # WebhookNewSmsPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Idempotent message ID. Store this ID locally or in a database to prevent message duplication. |
**webhook_id** | **string** | ID of webhook entity being triggered |
**event_name** | **string** | Name of the event type webhook is being triggered for. |
**webhook_name** | **string** | Name of the webhook being triggered | [optional]
**sms_id** | **string** | ID of SMS message |
**user_id** | **string** | User ID of event |
**phone_number** | **string** | ID of phone number receiving SMS |
**to_number** | **string** | Recipient phone number |
**from_number** | **string** | Sender phone number |
**body** | **string** | SMS message body |
**read** | **bool** | SMS has been read |

[[Back to Model list]](../../README#models) [[Back to API list]](../../README#endpoints) [[Back to README]](../../README)
