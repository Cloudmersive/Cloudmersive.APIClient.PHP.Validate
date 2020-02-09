# Swagger\Client\VatApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vatVatLookup**](VatApi.md#vatVatLookup) | **POST** /validate/vat/lookup | Validate a VAT number


# **vatVatLookup**
> \Swagger\Client\Model\VatLookupResponse vatVatLookup($input)

Validate a VAT number

Checks if a VAT code is valid, and if it is, returns more information about it.  The first two letters of the VAT number must be letters that indicate the country, such as LU20260743.  Possible country codes include Austria (AT), Belgium (BE), Bulgaria (BG), Cyprus (CY), Czech Republic (CZ), Germany (DE), Denmark (DK), Estonia (EE), Greece (EL), Spain (ES), Finland (FI), France (FR), United Kingdom (GB), Croatia (HR), Hungary (HU), Ireland (IE), Italy (IT), Lithuania (LT), Luxembourg (LU), Latvia (LV), Malta (MT), The Netherlands (NL), Poland (PL), Portugal (PT), Romania (RO), Sweden (SE), Slovenia (SI), Slovakia (SK).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\VatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\VatLookupRequest(); // \Swagger\Client\Model\VatLookupRequest | Input VAT code

try {
    $result = $apiInstance->vatVatLookup($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatApi->vatVatLookup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\VatLookupRequest**](../Model/VatLookupRequest.md)| Input VAT code |

### Return type

[**\Swagger\Client\Model\VatLookupResponse**](../Model/VatLookupResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

