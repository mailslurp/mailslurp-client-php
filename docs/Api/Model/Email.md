# # Email

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the email entity | 
**user_id** | **string** | ID of user that email belongs to | 
**inbox_id** | **string** | ID of the inbox that received the email | 
**to** | **string[]** | List of &#x60;To&#x60; recipient email addresses that the email was addressed to. See recipients object for names. | 
**from** | **string** | Who the email was sent from. An email address - see fromName for the sender name. | [optional] 
**sender** | [**\MailSlurp\Models\Sender**](Sender) |  | [optional] 
**recipients** | [**\MailSlurp\Models\EmailRecipients**](EmailRecipients) |  | [optional] 
**reply_to** | **string** | The &#x60;replyTo&#x60; field on the received email message | [optional] 
**cc** | **string[]** | List of &#x60;CC&#x60; recipients email addresses that the email was addressed to. See recipients object for names. | [optional] 
**bcc** | **string[]** | List of &#x60;BCC&#x60; recipients email addresses that the email was addressed to. See recipients object for names. | [optional] 
**headers** | **map[string,string]** | Collection of SMTP headers attached to email | [optional] 
**attachments** | **string[]** | List of IDs of attachments found in the email. Use these IDs with the Inbox and Email Controllers to download attachments and attachment meta data such as filesize, name, extension. | [optional] 
**subject** | **string** | The subject line of the email message as specified by SMTP subject header | [optional] 
**body** | **string** | The body of the email message as text parsed from the SMTP message body (does not include attachments). Fetch the raw content to access the SMTP message and use the attachments property to access attachments. The body is stored separately to the email entity so the body is not returned in paginated results only in full single email or wait requests. | [optional] 
**body_excerpt** | **string** | An excerpt of the body of the email message for quick preview . | [optional] 
**body_md5_hash** | **string** | A hash signature of the email message using MD5. Useful for comparing emails without fetching full body. | [optional] 
**is_html** | **bool** | Is the email body content type HTML? | [optional] 
**charset** | **string** | Detected character set of the email body such as UTF-8 | [optional] 
**analysis** | [**\MailSlurp\Models\EmailAnalysis**](EmailAnalysis) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime) | When was the email received by MailSlurp | 
**updated_at** | [**\DateTime**](\DateTime) | When was the email last updated | 
**read** | **bool** | Read flag. Has the email ever been viewed in the dashboard or fetched via the API with a hydrated body? If so the email is marked as read. Paginated results do not affect read status. Read status is different to email opened event as it depends on your own account accessing the email. Email opened is determined by tracking pixels sent to other uses if enable during sending. You can listened for both email read and email opened events using webhooks. | 
**team_access** | **bool** | Can the email be accessed by organization team members | 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


