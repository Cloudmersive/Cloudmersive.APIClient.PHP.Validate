# cloudmersive_validate_api_client
The validation APIs help you validate data. Check if an E-mail address is real. Check if a domain is real. Check up on an IP address, and even where it is located. All this and much more is available in the validation API.

[Cloudmersive Validation API](https://www.cloudmersive.com/validate-api) provides data validation capabilities for validating email addresses, phone numbers, IP addresses, and many other types of business data.

- API version: v1
- Package version: 1.6.3


## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/cloudmersive/cloudmersive_validate_api_client.git"
    }
  ],
  "require": {
    "cloudmersive/cloudmersive_validate_api_client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/cloudmersive_validate_api_client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\ValidateCountryRequest(); // \Swagger\Client\Model\ValidateCountryRequest | Input request

try {
    $result = $apiInstance->addressCheckEUMembership($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressCheckEUMembership: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.cloudmersive.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressApi* | [**addressCheckEUMembership**](docs/Api/AddressApi.md#addresscheckeumembership) | **POST** /validate/address/country/check-eu-membership | Check if a country is a member of the European Union (EU)
*AddressApi* | [**addressCountry**](docs/Api/AddressApi.md#addresscountry) | **POST** /validate/address/country | Validate and normalize country information, return ISO 3166-1 country codes and country name
*AddressApi* | [**addressCountryList**](docs/Api/AddressApi.md#addresscountrylist) | **POST** /validate/address/country/list | Get a list of ISO 3166-1 countries
*AddressApi* | [**addressGetCountryCurrency**](docs/Api/AddressApi.md#addressgetcountrycurrency) | **POST** /validate/address/country/get-currency | Get the currency of the input country
*AddressApi* | [**addressGetCountryRegion**](docs/Api/AddressApi.md#addressgetcountryregion) | **POST** /validate/address/country/get-region | Get the region, subregion and continent of the country
*AddressApi* | [**addressGetTimezone**](docs/Api/AddressApi.md#addressgettimezone) | **POST** /validate/address/country/get-timezones | Gets IANA/Olsen time zones for a country
*AddressApi* | [**addressParseString**](docs/Api/AddressApi.md#addressparsestring) | **POST** /validate/address/parse | Parse an unstructured input text string into an international, formatted address
*AddressApi* | [**addressValidateAddress**](docs/Api/AddressApi.md#addressvalidateaddress) | **POST** /validate/address/street-address | Validate a street address
*AddressApi* | [**addressValidateCity**](docs/Api/AddressApi.md#addressvalidatecity) | **POST** /validate/address/city | Validate a City and State/Province combination, get location information about it
*AddressApi* | [**addressValidatePostalCode**](docs/Api/AddressApi.md#addressvalidatepostalcode) | **POST** /validate/address/postal-code | Validate a postal code, get location information about it
*AddressApi* | [**addressValidateState**](docs/Api/AddressApi.md#addressvalidatestate) | **POST** /validate/address/state | Validate a state or province, name or abbreviation, get location information about it
*DomainApi* | [**domainCheck**](docs/Api/DomainApi.md#domaincheck) | **POST** /validate/domain/check | Validate a domain name
*DomainApi* | [**domainPost**](docs/Api/DomainApi.md#domainpost) | **POST** /validate/domain/whois | Get WHOIS information for a domain
*DomainApi* | [**domainUrlFull**](docs/Api/DomainApi.md#domainurlfull) | **POST** /validate/domain/url/full | Validate a URL fully
*DomainApi* | [**domainUrlSyntaxOnly**](docs/Api/DomainApi.md#domainurlsyntaxonly) | **POST** /validate/domain/url/syntax-only | Validate a URL syntactically
*EmailApi* | [**emailAddressGetServers**](docs/Api/EmailApi.md#emailaddressgetservers) | **POST** /validate/email/address/servers | Partially check whether an email address is valid
*EmailApi* | [**emailFullValidation**](docs/Api/EmailApi.md#emailfullvalidation) | **POST** /validate/email/address/full | Fully validate an email address
*EmailApi* | [**emailPost**](docs/Api/EmailApi.md#emailpost) | **POST** /validate/email/address/syntaxOnly | Validate email adddress for syntactic correctness only
*IPAddressApi* | [**iPAddressIsThreat**](docs/Api/IPAddressApi.md#ipaddressisthreat) | **POST** /validate/ip/is-threat | Check if IP address is a known threat
*IPAddressApi* | [**iPAddressIsTorNode**](docs/Api/IPAddressApi.md#ipaddressistornode) | **POST** /validate/ip/is-tor-node | Check if IP address is a Tor node server
*IPAddressApi* | [**iPAddressPost**](docs/Api/IPAddressApi.md#ipaddresspost) | **POST** /validate/ip/geolocate | Geolocate an IP address
*LeadEnrichmentApi* | [**leadEnrichmentEnrichLead**](docs/Api/LeadEnrichmentApi.md#leadenrichmentenrichlead) | **POST** /validate/lead-enrichment/lead/enrich | Enrich an input lead with additional fields of data
*NameApi* | [**nameGetGender**](docs/Api/NameApi.md#namegetgender) | **POST** /validate/name/get-gender | Get the gender of a first name
*NameApi* | [**nameIdentifier**](docs/Api/NameApi.md#nameidentifier) | **POST** /validate/name/identifier | Validate a code identifier
*NameApi* | [**nameValidateFirstName**](docs/Api/NameApi.md#namevalidatefirstname) | **POST** /validate/name/first | Validate a first name
*NameApi* | [**nameValidateFullName**](docs/Api/NameApi.md#namevalidatefullname) | **POST** /validate/name/full-name | Parse and validate a full name
*NameApi* | [**nameValidateLastName**](docs/Api/NameApi.md#namevalidatelastname) | **POST** /validate/name/last | Validate a last name
*PhoneNumberApi* | [**phoneNumberSyntaxOnly**](docs/Api/PhoneNumberApi.md#phonenumbersyntaxonly) | **POST** /validate/phonenumber/basic | Validate phone number (basic)
*UserAgentApi* | [**userAgentParse**](docs/Api/UserAgentApi.md#useragentparse) | **POST** /validate/useragent/parse | Parse an HTTP User-Agent string, identify robots
*VatApi* | [**vatVatLookup**](docs/Api/VatApi.md#vatvatlookup) | **POST** /validate/vat/lookup | Validate a VAT number


## Documentation For Models

 - [AddressGetServersResponse](docs/Model/AddressGetServersResponse.md)
 - [AddressVerifySyntaxOnlyResponse](docs/Model/AddressVerifySyntaxOnlyResponse.md)
 - [CheckResponse](docs/Model/CheckResponse.md)
 - [CountryDetails](docs/Model/CountryDetails.md)
 - [CountryListResult](docs/Model/CountryListResult.md)
 - [FirstNameValidationRequest](docs/Model/FirstNameValidationRequest.md)
 - [FirstNameValidationResponse](docs/Model/FirstNameValidationResponse.md)
 - [FullEmailValidationResponse](docs/Model/FullEmailValidationResponse.md)
 - [FullNameValidationRequest](docs/Model/FullNameValidationRequest.md)
 - [FullNameValidationResponse](docs/Model/FullNameValidationResponse.md)
 - [GeolocateResponse](docs/Model/GeolocateResponse.md)
 - [GetGenderRequest](docs/Model/GetGenderRequest.md)
 - [GetGenderResponse](docs/Model/GetGenderResponse.md)
 - [GetTimezonesRequest](docs/Model/GetTimezonesRequest.md)
 - [GetTimezonesResponse](docs/Model/GetTimezonesResponse.md)
 - [IPThreatResponse](docs/Model/IPThreatResponse.md)
 - [LastNameValidationRequest](docs/Model/LastNameValidationRequest.md)
 - [LastNameValidationResponse](docs/Model/LastNameValidationResponse.md)
 - [LeadEnrichmentRequest](docs/Model/LeadEnrichmentRequest.md)
 - [LeadEnrichmentResponse](docs/Model/LeadEnrichmentResponse.md)
 - [ParseAddressRequest](docs/Model/ParseAddressRequest.md)
 - [ParseAddressResponse](docs/Model/ParseAddressResponse.md)
 - [PhoneNumberValidateRequest](docs/Model/PhoneNumberValidateRequest.md)
 - [PhoneNumberValidationResponse](docs/Model/PhoneNumberValidationResponse.md)
 - [Timezone](docs/Model/Timezone.md)
 - [TorNodeResponse](docs/Model/TorNodeResponse.md)
 - [UserAgentValidateRequest](docs/Model/UserAgentValidateRequest.md)
 - [UserAgentValidateResponse](docs/Model/UserAgentValidateResponse.md)
 - [ValidateAddressRequest](docs/Model/ValidateAddressRequest.md)
 - [ValidateAddressResponse](docs/Model/ValidateAddressResponse.md)
 - [ValidateCityRequest](docs/Model/ValidateCityRequest.md)
 - [ValidateCityResponse](docs/Model/ValidateCityResponse.md)
 - [ValidateCountryRequest](docs/Model/ValidateCountryRequest.md)
 - [ValidateCountryResponse](docs/Model/ValidateCountryResponse.md)
 - [ValidateIdentifierRequest](docs/Model/ValidateIdentifierRequest.md)
 - [ValidateIdentifierResponse](docs/Model/ValidateIdentifierResponse.md)
 - [ValidatePostalCodeRequest](docs/Model/ValidatePostalCodeRequest.md)
 - [ValidatePostalCodeResponse](docs/Model/ValidatePostalCodeResponse.md)
 - [ValidateStateRequest](docs/Model/ValidateStateRequest.md)
 - [ValidateStateResponse](docs/Model/ValidateStateResponse.md)
 - [ValidateUrlRequestFull](docs/Model/ValidateUrlRequestFull.md)
 - [ValidateUrlRequestSyntaxOnly](docs/Model/ValidateUrlRequestSyntaxOnly.md)
 - [ValidateUrlResponseFull](docs/Model/ValidateUrlResponseFull.md)
 - [ValidateUrlResponseSyntaxOnly](docs/Model/ValidateUrlResponseSyntaxOnly.md)
 - [VatLookupRequest](docs/Model/VatLookupRequest.md)
 - [VatLookupResponse](docs/Model/VatLookupResponse.md)
 - [WhoisResponse](docs/Model/WhoisResponse.md)


## Documentation For Authorization


## Apikey

- **Type**: API key
- **API key parameter name**: Apikey
- **Location**: HTTP header


## Author




