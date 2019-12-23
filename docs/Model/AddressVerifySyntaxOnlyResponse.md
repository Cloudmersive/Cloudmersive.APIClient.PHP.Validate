# AddressVerifySyntaxOnlyResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**valid_address** | **bool** | True if the email address is syntactically valid, false if it is not | [optional] 
**domain** | **string** | Domain name of the email address | [optional] 
**is_free_email_provider** | **bool** | True if the email domain name is a free provider (typically a free to sign up web email provider for consumers / personal use), false otherwise. | [optional] 
**is_disposable** | **bool** | True if the email address is a disposable email address, false otherwise; these disposable providers are not typically used to receive email and so will have a low likelihood of opening mail sent there. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


