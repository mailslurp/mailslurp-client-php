# # WebhookNewEmailPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachment_meta_datas** | [**\MailSlurp\Models\AttachmentMetaData[]**](AttachmentMetaData) | List of attachment meta data objects if attachments present | [optional] 
**bcc** | **string[]** | List of &#x60;BCC&#x60; recipients email addresses that the email was addressed to. See recipients object for names. | [optional] 
**cc** | **string[]** | List of &#x60;CC&#x60; recipients email addresses that the email was addressed to. See recipients object for names. | [optional] 
**created_at** | [**\DateTime**](\DateTime) | Date time of event creation | [optional] 
**email_id** | **string** | ID of the email that was received. Use this ID for fetching the email with the &#x60;EmailController&#x60;. | [optional] 
**event_name** | **string** | Name of the event type webhook is being triggered for. | [optional] 
**from** | **string** | Who the email was sent from. An email address - see fromName for the sender name. | [optional] 
**inbox_id** | **string** | Id of the inbox that received an email | [optional] 
**message_id** | **string** | Idempotent message ID. Store this ID locally or in a database to prevent message duplication. | [optional] 
**subject** | **string** | The subject line of the email message as specified by SMTP subject header | [optional] 
**to** | **string[]** | List of &#x60;To&#x60; recipient email addresses that the email was addressed to. See recipients object for names. | [optional] 
**webhook_id** | **string** | ID of webhook entity being triggered | [optional] 
**webhook_name** | **string** | Name of the webhook being triggered | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


