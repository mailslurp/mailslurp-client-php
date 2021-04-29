# # WebhookPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachment_meta_datas** | [**\MailSlurp\Models\AttachmentMetaData[]**](AttachmentMetaData) | List of attachment meta data objects if attachments present | [optional] 
**bcc** | **string[]** | List of &#x60;BCC&#x60; recipients email was addressed to | [optional] 
**cc** | **string[]** | List of &#x60;CC&#x60; recipients email was addressed to | [optional] 
**created_at** | [**\DateTime**](\DateTime) | Date time of event creation | [optional] 
**email_id** | **string** | ID of the email that was received. Use this ID for fetching the email | [optional] 
**event_name** | **string** | Name of the event type webhook is being triggered for | [optional] 
**from** | **string** | Who the email was sent from | [optional] 
**id** | **string** | Idempotent message ID. Store this ID locally or in a database to prevent message duplication. | [optional] 
**inbox_id** | **string** | Id of the inbox that receive an email | [optional] 
**subject** | **string** | The subject line of the email message | [optional] 
**to** | **string[]** | List of &#x60;To&#x60; recipients email was addressed to | [optional] 
**webhook_id** | **string** | ID of webhook entity being triggered | [optional] 
**webhook_name** | **string** | Name of the webhook being triggered | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


