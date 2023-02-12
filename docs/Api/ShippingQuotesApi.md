# DigitalRiver\ApiSdk\ShippingQuotesApi

All URIs are relative to https://api.digitalriver.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postShippingQuotes()**](ShippingQuotesApi.md#postShippingQuotes) | **POST** /shipping-quotes | Returns shipping quotes |


## `postShippingQuotes()`

```php
postShippingQuotes($shipping_quote_request): \DigitalRiver\ApiSdk\Model\ShippingQuoteResponse
```

Returns shipping quotes

Get all available shipping quotes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DigitalRiver\ApiSdk\Api\ShippingQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_quote_request = new \DigitalRiver\ApiSdk\Model\ShippingQuoteRequest(); // \DigitalRiver\ApiSdk\Model\ShippingQuoteRequest

try {
    $result = $apiInstance->postShippingQuotes($shipping_quote_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingQuotesApi->postShippingQuotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipping_quote_request** | [**\DigitalRiver\ApiSdk\Model\ShippingQuoteRequest**](../Model/ShippingQuoteRequest.md)|  | [optional] |

### Return type

[**\DigitalRiver\ApiSdk\Model\ShippingQuoteResponse**](../Model/ShippingQuoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
