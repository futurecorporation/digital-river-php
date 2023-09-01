# DigitalRiver\ApiSdk\StoreCreditCalloutApi

All URIs are relative to https://api.digitalriver.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**removeStoreCreditsCallout()**](StoreCreditCalloutApi.md#removeStoreCreditsCallout) | **DELETE** /checkouts/store-credits/{upstreamId} | Remove store credit callout |
| [**storeCreditsCallout()**](StoreCreditCalloutApi.md#storeCreditsCallout) | **POST** /checkouts/store-credits | Store credit callout |


## `removeStoreCreditsCallout()`

```php
removeStoreCreditsCallout($upstream_id)
```

Remove store credit callout

Store credit callout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\StoreCreditCalloutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upstream_id = 'upstream_id_example'; // string | The unique identifier of the store credit

try {
    $apiInstance->removeStoreCreditsCallout($upstream_id);
} catch (Exception $e) {
    echo 'Exception when calling StoreCreditCalloutApi->removeStoreCreditsCallout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upstream_id** | **string**| The unique identifier of the store credit | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storeCreditsCallout()`

```php
storeCreditsCallout($store_credit_authorization_request): \DigitalRiver\ApiSdk\Model\StoreCreditValidationResponse
```

Store credit callout

Store credit callout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\StoreCreditCalloutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_credit_authorization_request = new \DigitalRiver\ApiSdk\Model\StoreCreditAuthorizationRequest(); // \DigitalRiver\ApiSdk\Model\StoreCreditAuthorizationRequest

try {
    $result = $apiInstance->storeCreditsCallout($store_credit_authorization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreCreditCalloutApi->storeCreditsCallout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_credit_authorization_request** | [**\DigitalRiver\ApiSdk\Model\StoreCreditAuthorizationRequest**](../Model/StoreCreditAuthorizationRequest.md)|  | [optional] |

### Return type

[**\DigitalRiver\ApiSdk\Model\StoreCreditValidationResponse**](../Model/StoreCreditValidationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
