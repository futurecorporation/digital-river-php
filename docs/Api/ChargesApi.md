# DigitalRiver\ApiSdk\ChargesApi

All URIs are relative to https://api.digitalriver.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**retrieveCharges()**](ChargesApi.md#retrieveCharges) | **GET** /charges/{id} | Gets a charge by ID |


## `retrieveCharges()`

```php
retrieveCharges($id): \DigitalRiver\ApiSdk\Model\Charge
```

Gets a charge by ID

Retrieves the details of a Charge by supplying its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Charge ID

try {
    $result = $apiInstance->retrieveCharges($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->retrieveCharges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Charge ID | |

### Return type

[**\DigitalRiver\ApiSdk\Model\Charge**](../Model/Charge.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
