# # DomainDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**user_id** | **string** |  | 
**domain** | **string** | Custom domain name | 
**verification_token** | **string** | Verification tokens | 
**dkim_tokens** | **string[]** | Unique token DKIM tokens | 
**is_verified** | **bool** | Whether domain has been verified or not. If the domain is not verified after 72 hours there is most likely an issue with the domains DNS records. | 
**domain_name_records** | [**\MailSlurp\Models\DomainNameRecord[]**](DomainNameRecord) | List of DNS domain name records (C, MX, TXT) etc that you must add to the DNS server associated with your domain provider. | 
**catch_all_inbox_id** | **string** | The optional catch all inbox that will receive emails sent to the domain that cannot be matched. | [optional] 
**created_at** | [**\DateTime**](\DateTime) |  | 
**updated_at** | [**\DateTime**](\DateTime) |  | 
**domain_type** | **string** | Type of domain. Dictates type of inbox that can be created with domain. HTTP means inboxes are processed using SES while SMTP inboxes use a custom SMTP mail server. SMTP does not support sending so use HTTP for sending emails. | 

[[Back to Model list]](../../README#documentation-for-models) [[Back to API list]](../../README#documentation-for-api-endpoints) [[Back to README]](../../README)


