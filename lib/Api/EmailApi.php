<?php
/**
 * EmailApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * validateapi
 *
 * The validation APIs help you validate data. Check if an E-mail address is real. Check if a domain is real. Check up on an IP address, and even where it is located. All this and much more is available in the validation API.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * EmailApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation emailAddressGetServers
     *
     * Partially check whether an email address is valid
     *
     * @param  string $email Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\AddressGetServersResponse
     */
    public function emailAddressGetServers($email)
    {
        list($response) = $this->emailAddressGetServersWithHttpInfo($email);
        return $response;
    }

    /**
     * Operation emailAddressGetServersWithHttpInfo
     *
     * Partially check whether an email address is valid
     *
     * @param  string $email Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\AddressGetServersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function emailAddressGetServersWithHttpInfo($email)
    {
        $returnType = '\Swagger\Client\Model\AddressGetServersResponse';
        $request = $this->emailAddressGetServersRequest($email);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\AddressGetServersResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation emailAddressGetServersAsync
     *
     * Partially check whether an email address is valid
     *
     * @param  string $email Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function emailAddressGetServersAsync($email)
    {
        return $this->emailAddressGetServersAsyncWithHttpInfo($email)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailAddressGetServersAsyncWithHttpInfo
     *
     * Partially check whether an email address is valid
     *
     * @param  string $email Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function emailAddressGetServersAsyncWithHttpInfo($email)
    {
        $returnType = '\Swagger\Client\Model\AddressGetServersResponse';
        $request = $this->emailAddressGetServersRequest($email);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'emailAddressGetServers'
     *
     * @param  string $email Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function emailAddressGetServersRequest($email)
    {
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $email when calling emailAddressGetServers'
            );
        }

        $resourcePath = '/validate/email/address/servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($email)) {
            $_tempBody = $email;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Apikey');
        if ($apiKey !== null) {
            $headers['Apikey'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation emailFullValidation
     *
     * Fully validate an email address
     *
     * @param  string $email Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\FullEmailValidationResponse
     */
    public function emailFullValidation($email)
    {
        list($response) = $this->emailFullValidationWithHttpInfo($email);
        return $response;
    }

    /**
     * Operation emailFullValidationWithHttpInfo
     *
     * Fully validate an email address
     *
     * @param  string $email Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\FullEmailValidationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function emailFullValidationWithHttpInfo($email)
    {
        $returnType = '\Swagger\Client\Model\FullEmailValidationResponse';
        $request = $this->emailFullValidationRequest($email);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\FullEmailValidationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation emailFullValidationAsync
     *
     * Fully validate an email address
     *
     * @param  string $email Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function emailFullValidationAsync($email)
    {
        return $this->emailFullValidationAsyncWithHttpInfo($email)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailFullValidationAsyncWithHttpInfo
     *
     * Fully validate an email address
     *
     * @param  string $email Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function emailFullValidationAsyncWithHttpInfo($email)
    {
        $returnType = '\Swagger\Client\Model\FullEmailValidationResponse';
        $request = $this->emailFullValidationRequest($email);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'emailFullValidation'
     *
     * @param  string $email Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function emailFullValidationRequest($email)
    {
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $email when calling emailFullValidation'
            );
        }

        $resourcePath = '/validate/email/address/full';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($email)) {
            $_tempBody = $email;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Apikey');
        if ($apiKey !== null) {
            $headers['Apikey'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation emailPost
     *
     * Validate email adddress for syntactic correctness only
     *
     * @param  string $value Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\AddressVerifySyntaxOnlyResponse
     */
    public function emailPost($value)
    {
        list($response) = $this->emailPostWithHttpInfo($value);
        return $response;
    }

    /**
     * Operation emailPostWithHttpInfo
     *
     * Validate email adddress for syntactic correctness only
     *
     * @param  string $value Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\AddressVerifySyntaxOnlyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function emailPostWithHttpInfo($value)
    {
        $returnType = '\Swagger\Client\Model\AddressVerifySyntaxOnlyResponse';
        $request = $this->emailPostRequest($value);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\AddressVerifySyntaxOnlyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation emailPostAsync
     *
     * Validate email adddress for syntactic correctness only
     *
     * @param  string $value Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function emailPostAsync($value)
    {
        return $this->emailPostAsyncWithHttpInfo($value)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailPostAsyncWithHttpInfo
     *
     * Validate email adddress for syntactic correctness only
     *
     * @param  string $value Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function emailPostAsyncWithHttpInfo($value)
    {
        $returnType = '\Swagger\Client\Model\AddressVerifySyntaxOnlyResponse';
        $request = $this->emailPostRequest($value);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'emailPost'
     *
     * @param  string $value Email address to validate, e.g. \&quot;support@cloudmersive.com\&quot;.    The input is a string so be sure to enclose it in double-quotes. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function emailPostRequest($value)
    {
        // verify the required parameter 'value' is set
        if ($value === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $value when calling emailPost'
            );
        }

        $resourcePath = '/validate/email/address/syntaxOnly';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($value)) {
            $_tempBody = $value;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Apikey');
        if ($apiKey !== null) {
            $headers['Apikey'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
