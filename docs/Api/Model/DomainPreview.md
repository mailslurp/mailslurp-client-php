# # DomainPreview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**domain** | **string** |  | 
**catch_all_inbox_id** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime) |  | 
**domain_type** | **string** | Type of domain. Dictates type of inbox that can be created with domain. HTTP means inboxes are processed using SES while SMTP inboxes use a custom SMTP mail server. SMTP does not support sending so use HTTP for sending emails. | 
**is_verified** | **bool** |  | 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


