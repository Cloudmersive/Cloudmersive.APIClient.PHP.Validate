# Swagger\Client\PhoneNumberApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**phoneNumberSyntaxOnly**](PhoneNumberApi.md#phoneNumberSyntaxOnly) | **POST** /validate/phonenumber/basic | Validate phone number (basic)


# **phoneNumberSyntaxOnly**
> \Swagger\Client\Model\PhoneNumberValidationResponse phoneNumberSyntaxOnly($value)

Validate phone number (basic)

Validate a phone number by analyzing the syntax

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PhoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value = new \Swagger\Client\Model\PhoneNumberValidateRequest(); // \Swagger\Client\Model\PhoneNumberValidateRequest | Phone number to validate in a PhoneNumberValidateRequest object.  Try a phone number such as \"1.800.463.3339\", and either leave DefaultCountryCode blank or use \"US\".

try {
    $result = $apiInstance->phoneNumberSyntaxOnly($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->phoneNumberSyntaxOnly: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | [**\Swagger\Client\Model\PhoneNumberValidateRequest**](../Model/PhoneNumberValidateRequest.md)| Phone number to validate in a PhoneNumberValidateRequest object.  Try a phone number such as \&quot;1.800.463.3339\&quot;, and either leave DefaultCountryCode blank or use \&quot;US\&quot;. |

### Return type

[**\Swagger\Client\Model\PhoneNumberValidationResponse**](../Model/PhoneNumberValidationResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

