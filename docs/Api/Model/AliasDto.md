# # AliasDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**email_address** | **string** | The alias&#39;s email address for receiving email | 
**masked_email_address** | **string** | The underlying email address that is hidden and will received forwarded email | [optional] 
**user_id** | **string** |  | 
**inbox_id** | **string** | Inbox that is associated with the alias | 
**name** | **string** |  | [optional] 
**use_threads** | **bool** | If alias will generate response threads or not when email are received by it | [optional] 
**is_verified** | **bool** | Has the alias been verified. You must verify an alias if the masked email address has not yet been verified by your account | 
**created_at** | [**\DateTime**](\DateTime) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime) |  | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


