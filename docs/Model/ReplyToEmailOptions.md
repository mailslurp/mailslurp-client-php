# # ReplyToEmailOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachments** | **string[]** | List of uploaded attachments to send with the reply. Optional. | [optional] 
**body** | **string** | Body of the reply email you want to send | [optional] 
**charset** | **string** | The charset that your message should be sent with. Optional. Default is UTF-8 | [optional] 
**is_html** | **bool** | Is the reply HTML | [optional] 
**reply_to** | **string** | The replyTo header that should be used. Optional | [optional] 
**send_strategy** | **string** | When to send the email. Typically immediately | [optional] 
**template** | **string** | Template ID to use instead of body. Will use template variable map to fill defined variable slots. | [optional] 
**template_variables** | [**object**](.md) | Template variables if using a template | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


