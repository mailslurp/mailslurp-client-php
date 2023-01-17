# # WebhookEmailReadPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Idempotent message ID. Store this ID locally or in a database to prevent message duplication. |
**webhook_id** | **string** | ID of webhook entity being triggered |
**event_name** | **string** | Name of the event type webhook is being triggered for. |
**webhook_name** | **string** | Name of the webhook being triggered | [optional]
**email_id** | **string** | ID of the email that was received. Use this ID for fetching the email with the &#x60;EmailController&#x60;. |
**inbox_id** | **string** | Id of the inbox |
**email_is_read** | **bool** | Is the email read |
**created_at** | **\DateTime** | Date time of event creation |

[[Back to Model list]](../../README#models) [[Back to API list]](../../README#endpoints) [[Back to README]](../../README)
