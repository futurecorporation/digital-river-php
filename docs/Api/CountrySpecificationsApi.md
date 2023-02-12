# DigitalRiver\ApiSdk\CountrySpecificationsApi

All URIs are relative to https://api.digitalriver.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listCountrySpecifications()**](CountrySpecificationsApi.md#listCountrySpecifications) | **GET** /country-specs | Returns an array containing a country specification |


## `listCountrySpecifications()`

```php
listCountrySpecifications($country, $selling_entity): \DigitalRiver\ApiSdk\Model\ListCountrySpecsResponse
```

Returns an array containing a country specification

Gets a country specification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\CountrySpecificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = 'country_example'; // string | Represents the expected billing or ship to country of the customer.
$selling_entity = 'selling_entity_example'; // string | Represents the selling entity assigned to the order.

try {
    $result = $apiInstance->listCountrySpecifications($country, $selling_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountrySpecificationsApi->listCountrySpecifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| Represents the expected billing or ship to country of the customer. | |
| **selling_entity** | **string**| Represents the selling entity assigned to the order. | |

### Return type

[**\DigitalRiver\ApiSdk\Model\ListCountrySpecsResponse**](../Model/ListCountrySpecsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
