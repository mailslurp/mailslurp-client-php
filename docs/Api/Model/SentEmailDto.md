# # SentEmailDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of sent email | [optional] 
**user_id** | **string** | User ID | [optional] 
**inbox_id** | **string** | Inbox ID email was sent from | [optional] 
**to** | **string[]** | Recipients email was sent to | [optional] 
**from** | **string** |  | [optional] 
**reply_to** | **string** |  | [optional] 
**cc** | **string[]** |  | [optional] 
**bcc** | **string[]** |  | [optional] 
**attachments** | **string[]** | Array of IDs of attachments that were sent with this email | [optional] 
**subject** | **string** |  | [optional] 
**body_md5_hash** | **string** | MD5 Hash | [optional] 
**body** | **string** |  | [optional] 
**charset** | **string** |  | [optional] 
**sent_at** | [**\DateTime**](\DateTime) |  | [optional] 
**pixel_ids** | **string[]** |  | [optional] 
**html** | **bool** |  | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


