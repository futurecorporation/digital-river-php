<?php
/**
 * InventoryLevelsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Digital River API Reference
 *
 * removed by liao, too long
 *
 * The version of the OpenAPI document: 2023
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalRiver\ApiSdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use DigitalRiver\ApiSdk\ApiException;
use DigitalRiver\ApiSdk\Configuration;
use DigitalRiver\ApiSdk\HeaderSelector;
use DigitalRiver\ApiSdk\ObjectSerializer;

/**
 * InventoryLevelsApi Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InventoryLevelsApi
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
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'listInventoryLevels' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listInventoryLevels
     *
     * Returns a list of inventory levels.
     *
     * @param  string[] $inventory_item_ids Only return inventory levels for these inventory items. (required)
     * @param  array<string,\DateTime> $updated_time A filter on the list based on the **updatedTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the updatedTime field is after this timestamp   - **gte**&amp;mdash;return values where the updatedTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the updatedTime field is before this timestamp   - **lte**&amp;mdash;return values where the updatedTime field is before or equal to this timestamp (optional)
     * @param  string $ship_to_country Only return inventory levels for locations that ship to this country. (optional)
     * @param  bool $available Only return available (i.e. greater than zero) inventory levels. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listInventoryLevels'] to see the possible values for this operation
     *
     * @throws \DigitalRiver\ApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DigitalRiver\ApiSdk\Model\ListInventoryLevels200Response|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors
     */
    public function listInventoryLevels($inventory_item_ids, $updated_time = null, $ship_to_country = null, $available = null, string $contentType = self::contentTypes['listInventoryLevels'][0])
    {
        list($response) = $this->listInventoryLevelsWithHttpInfo($inventory_item_ids, $updated_time, $ship_to_country, $available, $contentType);
        return $response;
    }

    /**
     * Operation listInventoryLevelsWithHttpInfo
     *
     * Returns a list of inventory levels.
     *
     * @param  string[] $inventory_item_ids Only return inventory levels for these inventory items. (required)
     * @param  array<string,\DateTime> $updated_time A filter on the list based on the **updatedTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the updatedTime field is after this timestamp   - **gte**&amp;mdash;return values where the updatedTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the updatedTime field is before this timestamp   - **lte**&amp;mdash;return values where the updatedTime field is before or equal to this timestamp (optional)
     * @param  string $ship_to_country Only return inventory levels for locations that ship to this country. (optional)
     * @param  bool $available Only return available (i.e. greater than zero) inventory levels. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listInventoryLevels'] to see the possible values for this operation
     *
     * @throws \DigitalRiver\ApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DigitalRiver\ApiSdk\Model\ListInventoryLevels200Response|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors, HTTP status code, HTTP response headers (array of strings)
     */
    public function listInventoryLevelsWithHttpInfo($inventory_item_ids, $updated_time = null, $ship_to_country = null, $available = null, string $contentType = self::contentTypes['listInventoryLevels'][0])
    {
        $request = $this->listInventoryLevelsRequest($inventory_item_ids, $updated_time, $ship_to_country, $available, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\DigitalRiver\ApiSdk\Model\ListInventoryLevels200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\ListInventoryLevels200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\ListInventoryLevels200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 408:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\DigitalRiver\ApiSdk\Model\ListInventoryLevels200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\DigitalRiver\ApiSdk\Model\ListInventoryLevels200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 408:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listInventoryLevelsAsync
     *
     * Returns a list of inventory levels.
     *
     * @param  string[] $inventory_item_ids Only return inventory levels for these inventory items. (required)
     * @param  array<string,\DateTime> $updated_time A filter on the list based on the **updatedTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the updatedTime field is after this timestamp   - **gte**&amp;mdash;return values where the updatedTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the updatedTime field is before this timestamp   - **lte**&amp;mdash;return values where the updatedTime field is before or equal to this timestamp (optional)
     * @param  string $ship_to_country Only return inventory levels for locations that ship to this country. (optional)
     * @param  bool $available Only return available (i.e. greater than zero) inventory levels. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listInventoryLevels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInventoryLevelsAsync($inventory_item_ids, $updated_time = null, $ship_to_country = null, $available = null, string $contentType = self::contentTypes['listInventoryLevels'][0])
    {
        return $this->listInventoryLevelsAsyncWithHttpInfo($inventory_item_ids, $updated_time, $ship_to_country, $available, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listInventoryLevelsAsyncWithHttpInfo
     *
     * Returns a list of inventory levels.
     *
     * @param  string[] $inventory_item_ids Only return inventory levels for these inventory items. (required)
     * @param  array<string,\DateTime> $updated_time A filter on the list based on the **updatedTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the updatedTime field is after this timestamp   - **gte**&amp;mdash;return values where the updatedTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the updatedTime field is before this timestamp   - **lte**&amp;mdash;return values where the updatedTime field is before or equal to this timestamp (optional)
     * @param  string $ship_to_country Only return inventory levels for locations that ship to this country. (optional)
     * @param  bool $available Only return available (i.e. greater than zero) inventory levels. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listInventoryLevels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInventoryLevelsAsyncWithHttpInfo($inventory_item_ids, $updated_time = null, $ship_to_country = null, $available = null, string $contentType = self::contentTypes['listInventoryLevels'][0])
    {
        $returnType = '\DigitalRiver\ApiSdk\Model\ListInventoryLevels200Response';
        $request = $this->listInventoryLevelsRequest($inventory_item_ids, $updated_time, $ship_to_country, $available, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listInventoryLevels'
     *
     * @param  string[] $inventory_item_ids Only return inventory levels for these inventory items. (required)
     * @param  array<string,\DateTime> $updated_time A filter on the list based on the **updatedTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the updatedTime field is after this timestamp   - **gte**&amp;mdash;return values where the updatedTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the updatedTime field is before this timestamp   - **lte**&amp;mdash;return values where the updatedTime field is before or equal to this timestamp (optional)
     * @param  string $ship_to_country Only return inventory levels for locations that ship to this country. (optional)
     * @param  bool $available Only return available (i.e. greater than zero) inventory levels. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listInventoryLevels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listInventoryLevelsRequest($inventory_item_ids, $updated_time = null, $ship_to_country = null, $available = null, string $contentType = self::contentTypes['listInventoryLevels'][0])
    {

        // verify the required parameter 'inventory_item_ids' is set
        if ($inventory_item_ids === null || (is_array($inventory_item_ids) && count($inventory_item_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inventory_item_ids when calling listInventoryLevels'
            );
        }





        $resourcePath = '/inventory-levels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $updated_time,
            'updatedTime', // param base name
            'object', // openApiType
            'deepObject', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $inventory_item_ids,
            'inventoryItemIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ship_to_country,
            'shipToCountry', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $available,
            'available', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
