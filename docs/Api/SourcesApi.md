# DigitalRiver\ApiSdk\SourcesApi

All URIs are relative to https://api.digitalriver.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSources()**](SourcesApi.md#createSources) | **POST** /sources | Posts a source |
| [**retrieveSources()**](SourcesApi.md#retrieveSources) | **GET** /sources/{id} | Gets a source by identifier |


## `createSources()`

```php
createSources($credit_source): \DigitalRiver\ApiSdk\Model\Source
```

Posts a source

Create a secondary source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_source = new \DigitalRiver\ApiSdk\Model\CreditSource(); // \DigitalRiver\ApiSdk\Model\CreditSource

try {
    $result = $apiInstance->createSources($credit_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->createSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_source** | [**\DigitalRiver\ApiSdk\Model\CreditSource**](../Model/CreditSource.md)|  | [optional] |

### Return type

[**\DigitalRiver\ApiSdk\Model\Source**](../Model/Source.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveSources()`

```php
retrieveSources($id): \DigitalRiver\ApiSdk\Model\Source
```

Gets a source by identifier

Retrieve the details of a source by supplying its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source identifier

try {
    $result = $apiInstance->retrieveSources($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->retrieveSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source identifier | |

### Return type

[**\DigitalRiver\ApiSdk\Model\Source**](../Model/Source.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
