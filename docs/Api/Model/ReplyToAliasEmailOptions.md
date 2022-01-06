# # ReplyToAliasEmailOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**body** | **string** | Body of the reply email you want to send | 
**is_html** | **bool** | Is the reply HTML | 
**charset** | **string** | The charset that your message should be sent with. Optional. Default is UTF-8 | [optional] 
**attachments** | **string[]** | List of uploaded attachments to send with the reply. Optional. | [optional] 
**template_variables** | **map[string,object]** | Template variables if using a template | [optional] 
**template** | **string** | Template ID to use instead of body. Will use template variable map to fill defined variable slots. | [optional] 
**send_strategy** | **string** | How an email should be sent based on its recipients | [optional] 
**use_inbox_name** | **bool** | Optionally use inbox name as display name for sender email address | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


