# Swagger\Client\DomainApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**domainCheck**](DomainApi.md#domainCheck) | **POST** /validate/domain/check | Validate a domain name
[**domainGetTopLevelDomainFromUrl**](DomainApi.md#domainGetTopLevelDomainFromUrl) | **POST** /validate/domain/url/get-top-level-domain | Get top-level domain name from URL
[**domainIsAdminPath**](DomainApi.md#domainIsAdminPath) | **POST** /validate/domain/url/is-admin-path | Check if path is a high-risk or vulnerable server administration path
[**domainPhishingCheck**](DomainApi.md#domainPhishingCheck) | **POST** /validate/domain/url/phishing-threat-check | Check a URL for Phishing threats
[**domainPost**](DomainApi.md#domainPost) | **POST** /validate/domain/whois | Get WHOIS information for a domain
[**domainQualityScore**](DomainApi.md#domainQualityScore) | **POST** /validate/domain/quality-score | Validate a domain name&#39;s quality score
[**domainSafetyCheck**](DomainApi.md#domainSafetyCheck) | **POST** /validate/domain/url/safety-threat-check | Check a URL for safety threats
[**domainSsrfCheck**](DomainApi.md#domainSsrfCheck) | **POST** /validate/domain/url/ssrf-threat-check | Check a URL for SSRF threats
[**domainSsrfCheckBatch**](DomainApi.md#domainSsrfCheckBatch) | **POST** /validate/domain/url/ssrf-threat-check/batch | Check a URL for SSRF threats in batches
[**domainUrlFull**](DomainApi.md#domainUrlFull) | **POST** /validate/domain/url/full | Validate a URL fully
[**domainUrlHtmlSsrfCheck**](DomainApi.md#domainUrlHtmlSsrfCheck) | **POST** /validate/domain/url/ssrf-threat-check/html-embedded | Check a URL for HTML embedded SSRF threats
[**domainUrlSyntaxOnly**](DomainApi.md#domainUrlSyntaxOnly) | **POST** /validate/domain/url/syntax-only | Validate a URL syntactically


# **domainCheck**
> \Swagger\Client\Model\CheckResponse domainCheck($domain)

Validate a domain name

Check whether a domain name is valid or not.  API performs a live validation by contacting DNS services to validate the existence of the domain name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = "domain_example"; // string | Domain name to check, for example \"cloudmersive.com\".  The input is a string so be sure to enclose it in double-quotes.

try {
    $result = $apiInstance->domainCheck($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| Domain name to check, for example \&quot;cloudmersive.com\&quot;.  The input is a string so be sure to enclose it in double-quotes. |

### Return type

[**\Swagger\Client\Model\CheckResponse**](../Model/CheckResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainGetTopLevelDomainFromUrl**
> \Swagger\Client\Model\ValidateUrlResponseSyntaxOnly domainGetTopLevelDomainFromUrl($request)

Get top-level domain name from URL

Gets the top-level domain name from a URL, such as mydomain.com.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ValidateUrlRequestSyntaxOnly(); // \Swagger\Client\Model\ValidateUrlRequestSyntaxOnly | Input URL information

try {
    $result = $apiInstance->domainGetTopLevelDomainFromUrl($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainGetTopLevelDomainFromUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ValidateUrlRequestSyntaxOnly**](../Model/ValidateUrlRequestSyntaxOnly.md)| Input URL information |

### Return type

[**\Swagger\Client\Model\ValidateUrlResponseSyntaxOnly**](../Model/ValidateUrlResponseSyntaxOnly.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainIsAdminPath**
> \Swagger\Client\Model\IsAdminPathResponse domainIsAdminPath($value)

Check if path is a high-risk or vulnerable server administration path

Check if the input URL or relative path is a server Administration Path, and therefore a risk or vulnerability for remote access.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value = "value_example"; // string | URL or relative path to check, e.g. \"/admin/login\".  The input is a string so be sure to enclose it in double-quotes.

try {
    $result = $apiInstance->domainIsAdminPath($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainIsAdminPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | **string**| URL or relative path to check, e.g. \&quot;/admin/login\&quot;.  The input is a string so be sure to enclose it in double-quotes. |

### Return type

[**\Swagger\Client\Model\IsAdminPathResponse**](../Model/IsAdminPathResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainPhishingCheck**
> \Swagger\Client\Model\PhishingCheckResponse domainPhishingCheck($request)

Check a URL for Phishing threats

Checks if an input URL is at risk of being an Phishing (fake login page, or other page designed to collect information via social engineering) threat or attack.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\PhishingCheckRequest(); // \Swagger\Client\Model\PhishingCheckRequest | Input URL request

try {
    $result = $apiInstance->domainPhishingCheck($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainPhishingCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\PhishingCheckRequest**](../Model/PhishingCheckRequest.md)| Input URL request |

### Return type

[**\Swagger\Client\Model\PhishingCheckResponse**](../Model/PhishingCheckResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainPost**
> \Swagger\Client\Model\WhoisResponse domainPost($domain)

Get WHOIS information for a domain

Validate whether a domain name exists, and also return the full WHOIS record for that domain name.  WHOIS records include all the registration details of the domain name, such as information about the domain's owners.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = "domain_example"; // string | Domain name to check, for example \"cloudmersive.com\".   The input is a string so be sure to enclose it in double-quotes.

try {
    $result = $apiInstance->domainPost($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| Domain name to check, for example \&quot;cloudmersive.com\&quot;.   The input is a string so be sure to enclose it in double-quotes. |

### Return type

[**\Swagger\Client\Model\WhoisResponse**](../Model/WhoisResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainQualityScore**
> \Swagger\Client\Model\DomainQualityResponse domainQualityScore($domain)

Validate a domain name's quality score

Check the quality of a domain name.  Supports over 9 million domain names.  Higher quality scores indicate more trust and authority in the domain name, with values ranging from 0.0 (low quality) to 10.0 (maximum quality).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = "domain_example"; // string | Domain name to check, for example \"cloudmersive.com\".

try {
    $result = $apiInstance->domainQualityScore($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainQualityScore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| Domain name to check, for example \&quot;cloudmersive.com\&quot;. |

### Return type

[**\Swagger\Client\Model\DomainQualityResponse**](../Model/DomainQualityResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainSafetyCheck**
> \Swagger\Client\Model\UrlSafetyCheckResponseFull domainSafetyCheck($request)

Check a URL for safety threats

Checks if an input URL is at risk of being a safety threat through malware, unwanted software, or social engineering threats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UrlSafetyCheckRequestFull(); // \Swagger\Client\Model\UrlSafetyCheckRequestFull | Input URL request

try {
    $result = $apiInstance->domainSafetyCheck($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainSafetyCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UrlSafetyCheckRequestFull**](../Model/UrlSafetyCheckRequestFull.md)| Input URL request |

### Return type

[**\Swagger\Client\Model\UrlSafetyCheckResponseFull**](../Model/UrlSafetyCheckResponseFull.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainSsrfCheck**
> \Swagger\Client\Model\UrlSsrfResponseFull domainSsrfCheck($request)

Check a URL for SSRF threats

Checks if an input URL is at risk of being an SSRF (Server-side request forgery) threat or attack.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UrlSsrfRequestFull(); // \Swagger\Client\Model\UrlSsrfRequestFull | Input URL request

try {
    $result = $apiInstance->domainSsrfCheck($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainSsrfCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UrlSsrfRequestFull**](../Model/UrlSsrfRequestFull.md)| Input URL request |

### Return type

[**\Swagger\Client\Model\UrlSsrfResponseFull**](../Model/UrlSsrfResponseFull.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainSsrfCheckBatch**
> \Swagger\Client\Model\UrlSsrfResponseBatch domainSsrfCheckBatch($request)

Check a URL for SSRF threats in batches

Batch-checks if input URLs are at risk of being an SSRF (Server-side request forgery) threat or attack.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UrlSsrfRequestBatch(); // \Swagger\Client\Model\UrlSsrfRequestBatch | Input URL request as a batch of multiple URLs

try {
    $result = $apiInstance->domainSsrfCheckBatch($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainSsrfCheckBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UrlSsrfRequestBatch**](../Model/UrlSsrfRequestBatch.md)| Input URL request as a batch of multiple URLs |

### Return type

[**\Swagger\Client\Model\UrlSsrfResponseBatch**](../Model/UrlSsrfResponseBatch.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainUrlFull**
> \Swagger\Client\Model\ValidateUrlResponseFull domainUrlFull($request)

Validate a URL fully

Validate whether a URL is syntactically valid (does not check endpoint for validity), whether it exists, and whether the endpoint is up and passes virus scan checks.  Accepts various types of input and produces a well-formed URL as output.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ValidateUrlRequestFull(); // \Swagger\Client\Model\ValidateUrlRequestFull | Input URL request

try {
    $result = $apiInstance->domainUrlFull($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainUrlFull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ValidateUrlRequestFull**](../Model/ValidateUrlRequestFull.md)| Input URL request |

### Return type

[**\Swagger\Client\Model\ValidateUrlResponseFull**](../Model/ValidateUrlResponseFull.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainUrlHtmlSsrfCheck**
> \Swagger\Client\Model\UrlHtmlSsrfResponseFull domainUrlHtmlSsrfCheck($request)

Check a URL for HTML embedded SSRF threats

Checks if an input URL HTML is at risk of containing one or more embedded SSRF (Server-side request forgery) threats or attacks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UrlHtmlSsrfRequestFull(); // \Swagger\Client\Model\UrlHtmlSsrfRequestFull | Input URL request

try {
    $result = $apiInstance->domainUrlHtmlSsrfCheck($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainUrlHtmlSsrfCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UrlHtmlSsrfRequestFull**](../Model/UrlHtmlSsrfRequestFull.md)| Input URL request |

### Return type

[**\Swagger\Client\Model\UrlHtmlSsrfResponseFull**](../Model/UrlHtmlSsrfResponseFull.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainUrlSyntaxOnly**
> \Swagger\Client\Model\ValidateUrlResponseSyntaxOnly domainUrlSyntaxOnly($request)

Validate a URL syntactically

Validate whether a URL is syntactically valid (does not check endpoint for validity).  Accepts various types of input and produces a well-formed URL as output.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ValidateUrlRequestSyntaxOnly(); // \Swagger\Client\Model\ValidateUrlRequestSyntaxOnly | Input URL information

try {
    $result = $apiInstance->domainUrlSyntaxOnly($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainUrlSyntaxOnly: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ValidateUrlRequestSyntaxOnly**](../Model/ValidateUrlRequestSyntaxOnly.md)| Input URL information |

### Return type

[**\Swagger\Client\Model\ValidateUrlResponseSyntaxOnly**](../Model/ValidateUrlResponseSyntaxOnly.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

