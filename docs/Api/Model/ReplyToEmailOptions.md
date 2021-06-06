# # ReplyToEmailOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachments** | **string[]** | List of uploaded attachments to send with the reply. Optional. | [optional] 
**body** | **string** | Body of the reply email you want to send | [optional] 
**charset** | **string** | The charset that your message should be sent with. Optional. Default is UTF-8 | [optional] 
**from** | **string** | The from header that should be used. Optional | [optional] 
**is_html** | **bool** | Is the reply HTML | [optional] 
**reply_to** | **string** | The replyTo header that should be used. Optional | [optional] 
**send_strategy** | **string** | When to send the email. Typically immediately | [optional] 
**template** | **string** | Template ID to use instead of body. Will use template variable map to fill defined variable slots. | [optional] 
**template_variables** | [**object**]() | Template variables if using a template | [optional] 
**use_inbox_name** | **bool** | Optionally use inbox name as display name for sender email address | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


