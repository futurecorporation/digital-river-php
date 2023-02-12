# DigitalRiver\ApiSdk\InventoryLevelsApi

All URIs are relative to https://api.digitalriver.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listInventoryLevels()**](InventoryLevelsApi.md#listInventoryLevels) | **GET** /inventory-levels | Returns a list of inventory levels. |


## `listInventoryLevels()`

```php
listInventoryLevels($inventory_item_ids, $updated_time, $ship_to_country, $available): \DigitalRiver\ApiSdk\Model\ListInventoryLevels200Response
```

Returns a list of inventory levels.

Get all Inventory levels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DigitalRiver\ApiSdk\Api\InventoryLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_item_ids = array('inventory_item_ids_example'); // string[] | Only return inventory levels for these inventory items.
$updated_time = updatedTime[gt]=2020-09-22T12:09:44Z; // array<string,\DateTime> | A filter on the list based on the **updatedTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&mdash;return values where the updatedTime field is after this timestamp   - **gte**&mdash;return values where the updatedTime field is after or equal to this timestamp   - **lt**&mdash;return values where the updatedTime field is before this timestamp   - **lte**&mdash;return values where the updatedTime field is before or equal to this timestamp
$ship_to_country = 'ship_to_country_example'; // string | Only return inventory levels for locations that ship to this country.
$available = True; // bool | Only return available (i.e. greater than zero) inventory levels.

try {
    $result = $apiInstance->listInventoryLevels($inventory_item_ids, $updated_time, $ship_to_country, $available);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryLevelsApi->listInventoryLevels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **inventory_item_ids** | [**string[]**](../Model/string.md)| Only return inventory levels for these inventory items. | |
| **updated_time** | [**array<string,\DateTime>**](../Model/\DateTime.md)| A filter on the list based on the **updatedTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the updatedTime field is after this timestamp   - **gte**&amp;mdash;return values where the updatedTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the updatedTime field is before this timestamp   - **lte**&amp;mdash;return values where the updatedTime field is before or equal to this timestamp | [optional] |
| **ship_to_country** | **string**| Only return inventory levels for locations that ship to this country. | [optional] |
| **available** | **bool**| Only return available (i.e. greater than zero) inventory levels. | [optional] |

### Return type

[**\DigitalRiver\ApiSdk\Model\ListInventoryLevels200Response**](../Model/ListInventoryLevels200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
