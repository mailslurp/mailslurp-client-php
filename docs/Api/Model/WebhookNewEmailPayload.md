# # WebhookNewEmailPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Idempotent message ID. Store this ID locally or in a database to prevent message duplication. | 
**webhook_id** | **string** | ID of webhook entity being triggered | 
**event_name** | **string** | Name of the event type webhook is being triggered for. | 
**webhook_name** | **string** | Name of the webhook being triggered | [optional] 
**inbox_id** | **string** | Id of the inbox that received an email | 
**email_id** | **string** | ID of the email that was received. Use this ID for fetching the email with the &#x60;EmailController&#x60;. | 
**created_at** | [**\DateTime**](\DateTime) | Date time of event creation | 
**to** | **string[]** | List of &#x60;To&#x60; recipient email addresses that the email was addressed to. See recipients object for names. | 
**from** | **string** | Who the email was sent from. An email address - see fromName for the sender name. | 
**cc** | **string[]** | List of &#x60;CC&#x60; recipients email addresses that the email was addressed to. See recipients object for names. | 
**bcc** | **string[]** | List of &#x60;BCC&#x60; recipients email addresses that the email was addressed to. See recipients object for names. | 
**subject** | **string** | The subject line of the email message as specified by SMTP subject header | [optional] 
**attachment_meta_datas** | [**\MailSlurp\Models\AttachmentMetaData[]**](AttachmentMetaData) | List of attachment meta data objects if attachments present | 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


