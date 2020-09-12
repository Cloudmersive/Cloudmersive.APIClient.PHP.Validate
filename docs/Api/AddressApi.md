# Swagger\Client\AddressApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressCheckEUMembership**](AddressApi.md#addressCheckEUMembership) | **POST** /validate/address/country/check-eu-membership | Check if a country is a member of the European Union (EU)
[**addressCountry**](AddressApi.md#addressCountry) | **POST** /validate/address/country | Validate and normalize country information, return ISO 3166-1 country codes and country name
[**addressCountryList**](AddressApi.md#addressCountryList) | **POST** /validate/address/country/list | Get a list of ISO 3166-1 countries
[**addressGetTimezone**](AddressApi.md#addressGetTimezone) | **POST** /validate/address/country/get-timezones | Gets IANA/Olsen time zones for a country
[**addressParseString**](AddressApi.md#addressParseString) | **POST** /validate/address/parse | Parse an unstructured input text string into an international, formatted address
[**addressValidateAddress**](AddressApi.md#addressValidateAddress) | **POST** /validate/address/street-address | Validate a street address
[**addressValidateCity**](AddressApi.md#addressValidateCity) | **POST** /validate/address/city | Validate a City and State/Province combination, get location information about it
[**addressValidatePostalCode**](AddressApi.md#addressValidatePostalCode) | **POST** /validate/address/postal-code | Validate a postal code, get location information about it
[**addressValidateState**](AddressApi.md#addressValidateState) | **POST** /validate/address/state | Validate a state or province, name or abbreviation, get location information about it


# **addressCheckEUMembership**
> \Swagger\Client\Model\ValidateCountryResponse addressCheckEUMembership($input)

Check if a country is a member of the European Union (EU)

Checks if the input country is a member of the European Union or not.

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\ValidateCountryRequest**](../Model/ValidateCountryRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\ValidateCountryResponse**](../Model/ValidateCountryResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressCountry**
> \Swagger\Client\Model\ValidateCountryResponse addressCountry($input)

Validate and normalize country information, return ISO 3166-1 country codes and country name

Validates and normalizes country information, and returns key information about a country, as well as whether it is a member of the European Union.  Also returns distinct time zones in the country.

### Example
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
    $result = $apiInstance->addressCountry($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\ValidateCountryRequest**](../Model/ValidateCountryRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\ValidateCountryResponse**](../Model/ValidateCountryResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressCountryList**
> \Swagger\Client\Model\CountryListResult addressCountryList()

Get a list of ISO 3166-1 countries

Enumerates the list of ISO 3166-1 countries, including name, country codes, and more.

### Example
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

try {
    $result = $apiInstance->addressCountryList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressCountryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CountryListResult**](../Model/CountryListResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressGetTimezone**
> \Swagger\Client\Model\GetTimezonesResponse addressGetTimezone($input)

Gets IANA/Olsen time zones for a country

Gets the IANA/Olsen time zones for a country.

### Example
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
$input = new \Swagger\Client\Model\GetTimezonesRequest(); // \Swagger\Client\Model\GetTimezonesRequest | Input request

try {
    $result = $apiInstance->addressGetTimezone($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressGetTimezone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\GetTimezonesRequest**](../Model/GetTimezonesRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\GetTimezonesResponse**](../Model/GetTimezonesResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressParseString**
> \Swagger\Client\Model\ParseAddressResponse addressParseString($input)

Parse an unstructured input text string into an international, formatted address

Uses machine learning and Natural Language Processing (NLP) to handle a wide array of cases, including non-standard and unstructured address strings across a wide array of countries and address formatting norms.

### Example
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
$input = new \Swagger\Client\Model\ParseAddressRequest(); // \Swagger\Client\Model\ParseAddressRequest | Input parse request

try {
    $result = $apiInstance->addressParseString($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressParseString: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\ParseAddressRequest**](../Model/ParseAddressRequest.md)| Input parse request |

### Return type

[**\Swagger\Client\Model\ParseAddressResponse**](../Model/ParseAddressResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressValidateAddress**
> \Swagger\Client\Model\ValidateAddressResponse addressValidateAddress($input)

Validate a street address

Determines if an input structured street address is valid or invalid.  If the address is valid, also returns the latitude and longitude of the address.  Supports all major international addresses.

### Example
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
$input = new \Swagger\Client\Model\ValidateAddressRequest(); // \Swagger\Client\Model\ValidateAddressRequest | Input parse request

try {
    $result = $apiInstance->addressValidateAddress($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressValidateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\ValidateAddressRequest**](../Model/ValidateAddressRequest.md)| Input parse request |

### Return type

[**\Swagger\Client\Model\ValidateAddressResponse**](../Model/ValidateAddressResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressValidateCity**
> \Swagger\Client\Model\ValidateCityResponse addressValidateCity($input)

Validate a City and State/Province combination, get location information about it

Checks if the input city and state name or code is valid, and returns information about it such as normalized City name, State name and more.  Supports all major international addresses.

### Example
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
$input = new \Swagger\Client\Model\ValidateCityRequest(); // \Swagger\Client\Model\ValidateCityRequest | Input parse request

try {
    $result = $apiInstance->addressValidateCity($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressValidateCity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\ValidateCityRequest**](../Model/ValidateCityRequest.md)| Input parse request |

### Return type

[**\Swagger\Client\Model\ValidateCityResponse**](../Model/ValidateCityResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressValidatePostalCode**
> \Swagger\Client\Model\ValidatePostalCodeResponse addressValidatePostalCode($input)

Validate a postal code, get location information about it

Checks if the input postal code is valid, and returns information about it such as City, State and more.  Supports all major countries.

### Example
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
$input = new \Swagger\Client\Model\ValidatePostalCodeRequest(); // \Swagger\Client\Model\ValidatePostalCodeRequest | Input parse request

try {
    $result = $apiInstance->addressValidatePostalCode($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressValidatePostalCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\ValidatePostalCodeRequest**](../Model/ValidatePostalCodeRequest.md)| Input parse request |

### Return type

[**\Swagger\Client\Model\ValidatePostalCodeResponse**](../Model/ValidatePostalCodeResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressValidateState**
> \Swagger\Client\Model\ValidateStateResponse addressValidateState($input)

Validate a state or province, name or abbreviation, get location information about it

Checks if the input state name or code is valid, and returns information about it such as normalized State name and more.  Supports all major countries.

### Example
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
$input = new \Swagger\Client\Model\ValidateStateRequest(); // \Swagger\Client\Model\ValidateStateRequest | Input parse request

try {
    $result = $apiInstance->addressValidateState($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressValidateState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\ValidateStateRequest**](../Model/ValidateStateRequest.md)| Input parse request |

### Return type

[**\Swagger\Client\Model\ValidateStateResponse**](../Model/ValidateStateResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

