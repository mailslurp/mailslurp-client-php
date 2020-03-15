# # WaitForConditions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | Number of results that should match conditions | [optional] 
**count_type** | **string** | Should exactly count number of results be returned or at least that many. | [optional] 
**inbox_id** | **string** | Inbox to search within | [optional] 
**matches** | [**\MailSlurp\Models\MatchOption[]**](MatchOption.md) | Conditions that should be matched | [optional] 
**sort_direction** | **string** | Direction to sort matching emails by created time | [optional] 
**timeout** | **int** | Max time in milliseconds to wait until conditions are met | [optional] 
**unread_only** | **bool** | Apply only to unread emails | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


