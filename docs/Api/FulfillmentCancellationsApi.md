# DigitalRiver\ApiSdk\FulfillmentCancellationsApi

All URIs are relative to https://api.digitalriver.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFulfillmentCancellations()**](FulfillmentCancellationsApi.md#createFulfillmentCancellations) | **POST** /fulfillment-cancellations | Creates a cancellation |
| [**listFulfillmentCancellations()**](FulfillmentCancellationsApi.md#listFulfillmentCancellations) | **GET** /fulfillment-cancellations | Returns a list of fulfillment cancellations |
| [**retrieveFulfillmentCancellations()**](FulfillmentCancellationsApi.md#retrieveFulfillmentCancellations) | **GET** /fulfillment-cancellations/{id} | Gets a fulfillment cancellation by its unique identifier. |


## `createFulfillmentCancellations()`

```php
createFulfillmentCancellations($global_fulfillment_cancellation_request): \DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationResponse
```

Creates a cancellation

Cancels all or part of a previously created fulfillment order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DigitalRiver\ApiSdk\Api\FulfillmentCancellationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$global_fulfillment_cancellation_request = new \DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationRequest(); // \DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationRequest

try {
    $result = $apiInstance->createFulfillmentCancellations($global_fulfillment_cancellation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentCancellationsApi->createFulfillmentCancellations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **global_fulfillment_cancellation_request** | [**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationRequest**](../Model/GlobalFulfillmentCancellationRequest.md)|  | [optional] |

### Return type

[**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationResponse**](../Model/GlobalFulfillmentCancellationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFulfillmentCancellations()`

```php
listFulfillmentCancellations($created_time, $ending_before, $starting_after, $limit, $ids, $upstream_ids, $state, $fulfillment_order_id, $inventory_item_id): \DigitalRiver\ApiSdk\Model\ListGlobalFulfillmentCancellationsResponse
```

Returns a list of fulfillment cancellations

Get all fulfillment cancellations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DigitalRiver\ApiSdk\Api\FulfillmentCancellationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$created_time = createdTime[gt]=2020-09-22T12:09:44Z; // array<string,\DateTime> | A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq**&mdash;return values where the createdTime field equals to this timestamp   - **gt**&mdash;return values where the createdTime field is after this timestamp   - **gte**&mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&mdash;return values where the createdTime field is before this timestamp   - **lte**&mdash;return values where the createdTime field is before or equal to this timestamp
$ending_before = 'ending_before_example'; // string | A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore=xyz in order to fetch the previous page of the list.
$starting_after = 'starting_after_example'; // string | A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter=xyz in order to fetch the next page of the list.
$limit = 56; // int | A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10.
$ids = array('ids_example'); // string[] | Only return objects with these IDs.
$upstream_ids = array('upstream_ids_example'); // string[] | Only return objects with these upstreamIds.
$state = 'state_example'; // string | Only return objects in the given state
$fulfillment_order_id = 'fulfillment_order_id_example'; // string | The fulfillment order to retrieve cancellations for.
$inventory_item_id = 'inventory_item_id_example'; // string | The inventory item id to retrieve cancellations for.

try {
    $result = $apiInstance->listFulfillmentCancellations($created_time, $ending_before, $starting_after, $limit, $ids, $upstream_ids, $state, $fulfillment_order_id, $inventory_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentCancellationsApi->listFulfillmentCancellations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **created_time** | [**array<string,\DateTime>**](../Model/\DateTime.md)| A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq**&amp;mdash;return values where the createdTime field equals to this timestamp   - **gt**&amp;mdash;return values where the createdTime field is after this timestamp   - **gte**&amp;mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the createdTime field is before this timestamp   - **lte**&amp;mdash;return values where the createdTime field is before or equal to this timestamp | [optional] |
| **ending_before** | **string**| A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. | [optional] |
| **starting_after** | **string**| A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. | [optional] |
| **limit** | **int**| A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10. | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Only return objects with these IDs. | [optional] |
| **upstream_ids** | [**string[]**](../Model/string.md)| Only return objects with these upstreamIds. | [optional] |
| **state** | **string**| Only return objects in the given state | [optional] |
| **fulfillment_order_id** | **string**| The fulfillment order to retrieve cancellations for. | [optional] |
| **inventory_item_id** | **string**| The inventory item id to retrieve cancellations for. | [optional] |

### Return type

[**\DigitalRiver\ApiSdk\Model\ListGlobalFulfillmentCancellationsResponse**](../Model/ListGlobalFulfillmentCancellationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveFulfillmentCancellations()`

```php
retrieveFulfillmentCancellations($id): \DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationResponse
```

Gets a fulfillment cancellation by its unique identifier.

Retrieves the details of a fulfillment cancellation. Supply the unique identifier of the cancellation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DigitalRiver\ApiSdk\Api\FulfillmentCancellationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Cancellation ID

try {
    $result = $apiInstance->retrieveFulfillmentCancellations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentCancellationsApi->retrieveFulfillmentCancellations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Cancellation ID | |

### Return type

[**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationResponse**](../Model/GlobalFulfillmentCancellationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
