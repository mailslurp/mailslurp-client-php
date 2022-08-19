# # WebhookBounceRecipientPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Idempotent message ID. Store this ID locally or in a database to prevent message duplication. |
**webhook_id** | **string** | ID of webhook entity being triggered |
**event_name** | **string** | Name of the event type webhook is being triggered for. |
**webhook_name** | **string** | Name of the webhook being triggered | [optional]
**recipient** | **string** | Email address that caused a bounce. Make note of the address and try not to message it again to preserve your reputation. |

[[Back to Model list]](../../README#models) [[Back to API list]](../../README#endpoints) [[Back to README]](../../README)
