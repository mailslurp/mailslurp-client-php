# # Email

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**analysis** | [**\MailSlurp\Models\EmailAnalysis**](EmailAnalysis.md) |  | [optional] 
**attachments** | **string[]** | List of IDs of attachments found in the email. Use these IDs with the Inbox and Email Controllers to download attachments and attachment meta data such as filesize, name, extension. | [optional] 
**bcc** | **string[]** | List of &#x60;BCC&#x60; recipients email was addressed to | [optional] 
**body** | **string** | The body of the email message | [optional] 
**cc** | **string[]** | List of &#x60;CC&#x60; recipients email was addressed to | [optional] 
**charset** | **string** | Detected character set of the email body such as UTF-8 | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | When was the email received by MailSlurp | [optional] 
**from** | **string** | Who was the email sent from | [optional] 
**headers** | **map[string,string]** |  | [optional] 
**id** | **string** | ID of the email | [optional] 
**inbox_id** | **string** | ID of the inbox that received the email | [optional] 
**is_html** | **bool** | Was HTML sent in the email body | [optional] 
**read** | **bool** | Has the email been viewed ever | [optional] 
**subject** | **string** | The subject line of the email message | [optional] 
**to** | **string[]** | List of &#x60;To&#x60; recipients email was addressed to | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | When was the email last updated | [optional] 
**user_id** | **string** | ID of user that email belongs | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


