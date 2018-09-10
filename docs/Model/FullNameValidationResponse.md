# FullNameValidationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**successful** | **bool** | True if the validation operation was successful, false otherwise | [optional] 
**validation_result_first_name** | **string** | Possible values are: ValidFirstName, ValidUnknownFirstName, InvalidSpamInput, InvalidCharacters, InvalidEmpty | [optional] 
**validation_result_last_name** | **string** | Possible values are: ValidLastName, ValidUnknownLastName, InvalidSpamInput, InvalidCharacters, InvalidEmpty | [optional] 
**title** | **string** | The person&#39;s title (if supplied), e.g. \&quot;Mr.\&quot; or \&quot;Ms.\&quot; | [optional] 
**first_name** | **string** | The first name (given name) | [optional] 
**middle_name** | **string** | The middle name(s); if there are multiple names they will be separated by spaces | [optional] 
**last_name** | **string** | The last name (surname) | [optional] 
**nick_name** | **string** | Nickname (if supplied) | [optional] 
**suffix** | **string** | Suffix to the name, e.g. \&quot;Jr.\&quot; or \&quot;Sr.\&quot; | [optional] 
**display_name** | **string** | The full display name of the name | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


