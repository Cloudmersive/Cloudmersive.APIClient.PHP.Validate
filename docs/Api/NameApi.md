# Swagger\Client\NameApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**nameGetGender**](NameApi.md#nameGetGender) | **POST** /validate/name/get-gender | Get the gender of a first name
[**nameIdentifier**](NameApi.md#nameIdentifier) | **POST** /validate/name/identifier | Validate a code identifier
[**nameValidateFirstName**](NameApi.md#nameValidateFirstName) | **POST** /validate/name/first | Validate a first name
[**nameValidateFullName**](NameApi.md#nameValidateFullName) | **POST** /validate/name/full-name | Parse and validate a full name
[**nameValidateLastName**](NameApi.md#nameValidateLastName) | **POST** /validate/name/last | Validate a last name


# **nameGetGender**
> \Swagger\Client\Model\GetGenderResponse nameGetGender($input)

Get the gender of a first name

Determines the gender of a first name (given name)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\GetGenderRequest(); // \Swagger\Client\Model\GetGenderRequest | Gender request information

try {
    $result = $apiInstance->nameGetGender($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameApi->nameGetGender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\GetGenderRequest**](../Model/GetGenderRequest.md)| Gender request information |

### Return type

[**\Swagger\Client\Model\GetGenderResponse**](../Model/GetGenderResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nameIdentifier**
> \Swagger\Client\Model\ValidateIdentifierResponse nameIdentifier($input)

Validate a code identifier

Determines if the input name is a valid technical / code identifier.  Configure input rules such as whether whitespace, hyphens, underscores, etc. are allowed.  For example, a valid identifier might be \"helloWorld\" but not \"hello*World\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\ValidateIdentifierRequest(); // \Swagger\Client\Model\ValidateIdentifierRequest | Identifier validation request information

try {
    $result = $apiInstance->nameIdentifier($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameApi->nameIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\ValidateIdentifierRequest**](../Model/ValidateIdentifierRequest.md)| Identifier validation request information |

### Return type

[**\Swagger\Client\Model\ValidateIdentifierResponse**](../Model/ValidateIdentifierResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nameValidateFirstName**
> \Swagger\Client\Model\FirstNameValidationResponse nameValidateFirstName($input)

Validate a first name

Determines if a string is a valid first name (given name)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\FirstNameValidationRequest(); // \Swagger\Client\Model\FirstNameValidationRequest | Validation request information

try {
    $result = $apiInstance->nameValidateFirstName($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameApi->nameValidateFirstName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\FirstNameValidationRequest**](../Model/FirstNameValidationRequest.md)| Validation request information |

### Return type

[**\Swagger\Client\Model\FirstNameValidationResponse**](../Model/FirstNameValidationResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nameValidateFullName**
> \Swagger\Client\Model\FullNameValidationResponse nameValidateFullName($input)

Parse and validate a full name

Parses a full name string (e.g. \"Mr. Jon van der Waal Jr.\") into its component parts (and returns these component parts), and then validates whether it is a valid name string or not

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\FullNameValidationRequest(); // \Swagger\Client\Model\FullNameValidationRequest | Validation request information

try {
    $result = $apiInstance->nameValidateFullName($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameApi->nameValidateFullName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\FullNameValidationRequest**](../Model/FullNameValidationRequest.md)| Validation request information |

### Return type

[**\Swagger\Client\Model\FullNameValidationResponse**](../Model/FullNameValidationResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nameValidateLastName**
> \Swagger\Client\Model\LastNameValidationResponse nameValidateLastName($input)

Validate a last name

Determines if a string is a valid last name (surname)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\LastNameValidationRequest(); // \Swagger\Client\Model\LastNameValidationRequest | Validation request information

try {
    $result = $apiInstance->nameValidateLastName($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameApi->nameValidateLastName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\LastNameValidationRequest**](../Model/LastNameValidationRequest.md)| Validation request information |

### Return type

[**\Swagger\Client\Model\LastNameValidationResponse**](../Model/LastNameValidationResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

