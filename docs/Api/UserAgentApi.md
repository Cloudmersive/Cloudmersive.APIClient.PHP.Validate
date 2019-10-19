# Swagger\Client\UserAgentApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userAgentParse**](UserAgentApi.md#userAgentParse) | **POST** /validate/useragent/parse | Parse an HTTP User-Agent string, identify robots


# **userAgentParse**
> \Swagger\Client\Model\UserAgentValidateResponse userAgentParse($request)

Parse an HTTP User-Agent string, identify robots

Uses a parsing system and database to parse the User-Agent into its structured component parts, such as Browser, Browser Version, Browser Engine, Operating System, and importantly, Robot identification.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\UserAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UserAgentValidateRequest(); // \Swagger\Client\Model\UserAgentValidateRequest | Input parse request

try {
    $result = $apiInstance->userAgentParse($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAgentApi->userAgentParse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UserAgentValidateRequest**](../Model/UserAgentValidateRequest.md)| Input parse request |

### Return type

[**\Swagger\Client\Model\UserAgentValidateResponse**](../Model/UserAgentValidateResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

