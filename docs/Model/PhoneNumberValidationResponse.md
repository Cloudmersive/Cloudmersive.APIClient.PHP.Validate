# PhoneNumberValidationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_valid** | **bool** | True if the phone number is valid, false otherwise | [optional] 
**successful** | **bool** | True if the operation was successful, false if there was an error during validation.  See IsValid for validation result. | [optional] 
**phone_number_type** | **string** | Type of phone number; possible values are: FixedLine, Mobile, FixedLineOrMobile, TollFree, PremiumRate,   SharedCost, Voip, PersonalNumber, Pager, Uan, Voicemail, Unknown | [optional] 
**e164_format** | **string** | E.164 format of the phone number | [optional] 
**international_format** | **string** | Internaltional format of the phone number | [optional] 
**national_format** | **string** | National format of the phone number | [optional] 
**country_code** | **string** | Two digit country code of the phone number | [optional] 
**country_name** | **string** | User-friendly long name of the country for the phone number | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


