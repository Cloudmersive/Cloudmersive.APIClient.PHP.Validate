# Swagger\Client\LeadEnrichmentApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadEnrichmentEnrichLead**](LeadEnrichmentApi.md#leadEnrichmentEnrichLead) | **POST** /validate/lead-enrichment/lead/enrich | Enrich an input lead with additional fields of data
[**leadEnrichmentGetCompanyInformation**](LeadEnrichmentApi.md#leadEnrichmentGetCompanyInformation) | **POST** /validate/lead-enrichment/lead/email/company-information | Get company information from email address


# **leadEnrichmentEnrichLead**
> \Swagger\Client\Model\LeadEnrichmentResponse leadEnrichmentEnrichLead($request)

Enrich an input lead with additional fields of data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadEnrichmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\LeadEnrichmentRequest(); // \Swagger\Client\Model\LeadEnrichmentRequest | Input lead with known fields set, and unknown fields left blank (null)

try {
    $result = $apiInstance->leadEnrichmentEnrichLead($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadEnrichmentApi->leadEnrichmentEnrichLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\LeadEnrichmentRequest**](../Model/LeadEnrichmentRequest.md)| Input lead with known fields set, and unknown fields left blank (null) |

### Return type

[**\Swagger\Client\Model\LeadEnrichmentResponse**](../Model/LeadEnrichmentResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadEnrichmentGetCompanyInformation**
> \Swagger\Client\Model\LeadEnrichmentResponse leadEnrichmentGetCompanyInformation($request)

Get company information from email address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadEnrichmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\EmailLead(); // \Swagger\Client\Model\EmailLead | Input email address lead

try {
    $result = $apiInstance->leadEnrichmentGetCompanyInformation($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadEnrichmentApi->leadEnrichmentGetCompanyInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\EmailLead**](../Model/EmailLead.md)| Input email address lead |

### Return type

[**\Swagger\Client\Model\LeadEnrichmentResponse**](../Model/LeadEnrichmentResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

