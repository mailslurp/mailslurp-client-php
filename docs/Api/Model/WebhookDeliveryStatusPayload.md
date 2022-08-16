# # WebhookDeliveryStatusPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Idempotent message ID. Store this ID locally or in a database to prevent message duplication. |
**webhook_id** | **string** | ID of webhook entity being triggered |
**event_name** | **string** | Name of the event type webhook is being triggered for. |
**webhook_name** | **string** | Name of the webhook being triggered | [optional]
**id** | **string** | ID of delivery status |
**user_id** | **string** | User ID of event |
**sent_id** | **string** | ID of sent email | [optional]
**remote_mta_ip** | **string** | IP address of the remote Mail Transfer Agent | [optional]
**inbox_id** | **string** | Id of the inbox | [optional]
**reporting_mta** | **string** | Mail Transfer Agent reporting delivery status | [optional]
**recipients** | **string[]** | Recipients for delivery | [optional]
**smtp_response** | **string** | SMTP server response message | [optional]
**smtp_status_code** | **int** | SMTP server status | [optional]
**processing_time_millis** | **int** | Time in milliseconds for delivery processing | [optional]
**received** | [**\DateTime**](\DateTime) | Time event was received | [optional]
**subject** | **string** | Email subject | [optional]

[[Back to Model list]](../../README#models) [[Back to API list]](../../README#endpoints) [[Back to README]](../../README)
