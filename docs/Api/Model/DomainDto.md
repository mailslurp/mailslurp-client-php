# # DomainDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**catch_all_inbox_id** | **string** | The optional catch all inbox that will receive emails sent to the domain that cannot be matched. | [optional] 
**created_at** | [**\DateTime**](\DateTime) |  | 
**dkim_tokens** | **string[]** | Unique token DKIM tokens | [optional] 
**domain** | **string** | Custom domain name | [optional] 
**domain_name_records** | [**\MailSlurp\Models\DomainNameRecord[]**](DomainNameRecord) | List of DNS domain name records (C, MX, TXT) etc that you must add to the DNS server associated with your domain provider. | [optional] 
**domain_type** | **string** | The type of domain. SMTP or HTTP domains differ in what inboxes can be used with them. | [optional] 
**id** | **string** |  | 
**is_verified** | **bool** | Whether domain has been verified or not. If the domain is not verified after 72 hours there is most likely an issue with the domains DNS records. | [optional] 
**updated_at** | [**\DateTime**](\DateTime) |  | 
**user_id** | **string** |  | 
**verification_token** | **string** | Verification tokens | [optional] 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


