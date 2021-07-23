# # Email

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**analysis** | [**\MailSlurp\Models\EmailAnalysis**](EmailAnalysis) |  | [optional] 
**attachments** | **string[]** | List of IDs of attachments found in the email. Use these IDs with the Inbox and Email Controllers to download attachments and attachment meta data such as filesize, name, extension. | [optional] 
**bcc** | **string[]** | List of &#x60;BCC&#x60; recipients email was addressed to | [optional] 
**body** | **string** | The body of the email message | [optional] 
**body_excerpt** | **string** | An excerpt of the body of the email message | [optional] 
**body_md5_hash** | **string** | A hash signature of the email message | [optional] 
**cc** | **string[]** | List of &#x60;CC&#x60; recipients email was addressed to | [optional] 
**charset** | **string** | Detected character set of the email body such as UTF-8 | [optional] 
**created_at** | [**\DateTime**](\DateTime) | When was the email received by MailSlurp | [optional] 
**from** | **string** | Who the email was sent from | [optional] 
**headers** | **map[string,string]** | Collection of SMTP headers attached to email | [optional] 
**id** | **string** | ID of the email entity | [optional] 
**inbox_id** | **string** | ID of the inbox that received the email | [optional] 
**is_html** | **bool** | Is the email body HTML | [optional] 
**read** | **bool** | Read flag. Has the email ever been viewed in the dashboard or fetched via the API? If so the email is marked as read. | [optional] 
**reply_to** | **string** | The &#x60;replyTo&#x60; field on the received email message | [optional] 
**subject** | **string** | The subject line of the email message | [optional] 
**team_access** | **bool** | Can the email be accessed by organization team members | [optional] 
**to** | **string[]** | List of &#x60;To&#x60; recipients that email was addressed to | [optional] 
**updated_at** | [**\DateTime**](\DateTime) | When was the email last updated | [optional] 
**user_id** | **string** | ID of user that email belongs to | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


