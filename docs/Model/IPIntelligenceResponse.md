# IPIntelligenceResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_bot** | **bool** | True if the IP address is a known bot, otherwise false | [optional] 
**is_tor_node** | **bool** | True if the IP address is a known Tor exit node, otherwise false | [optional] 
**is_threat** | **bool** | True if the IP address is a known threat IP, otherwise false | [optional] 
**is_eu** | **bool** | True if the IP address is in the European Union, otherwise false | [optional] 
**location** | [**\Swagger\Client\Model\GeolocateResponse**](GeolocateResponse.md) | Returns the location of the IP address | [optional] 
**currency_code** | **string** | ISO 4217 currency code for the IP address location | [optional] 
**currency_name** | **string** | Name of the currency in English | [optional] 
**region_area** | **string** | Region (continent) in which the country is located; possible values are None, Europe, Americas, Asia, Africa, Oceania | [optional] 
**subregion_area** | **string** | Subregion in which the country is located; possible values are None, NorthernEurope, WesternEurope, SouthernEurope, EasternEurope, CentralAmerica, NorthernAmerica, SouthAmerica, EasternAfrica, MiddleAfrica, NorthernAfrica , SouthernAfrica , WesternAfrica , CentralAsia , EasternAsia , SouthernAsia , SouthEasternAsia , WesternAsia , Southern , Middle , AustraliaandNewZealand , Melanesia , Polynesia , Micronesia , Caribbean, | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


