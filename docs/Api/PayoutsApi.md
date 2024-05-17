# DigitalRiver\ApiSdk\PayoutsApi

All URIs are relative to https://api.digitalriver.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listPayoutTransactions()**](PayoutsApi.md#listPayoutTransactions) | **GET** /payouts/{id}/transactions | Lists the payout transactions for a payout. |
| [**listPayouts()**](PayoutsApi.md#listPayouts) | **GET** /payouts | Returns a list of payouts |
| [**retrievePayouts()**](PayoutsApi.md#retrievePayouts) | **GET** /payouts/{id} | Gets a payout by ID. |


## `listPayoutTransactions()`

```php
listPayoutTransactions($id, $ending_before, $starting_after, $limit): \DigitalRiver\ApiSdk\Model\ListPayoutTransactionResponse
```

Lists the payout transactions for a payout.

Retrieves the details of the payout transactions for a payout. Supply the unique identifier of the payout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Payout ID
$ending_before = 'ending_before_example'; // string | A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore=xyz in order to fetch the previous page of the list.
$starting_after = 'starting_after_example'; // string | A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter=xyz in order to fetch the next page of the list.
$limit = 56; // int | A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10.

try {
    $result = $apiInstance->listPayoutTransactions($id, $ending_before, $starting_after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->listPayoutTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Payout ID | |
| **ending_before** | **string**| A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. | [optional] |
| **starting_after** | **string**| A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. | [optional] |
| **limit** | **int**| A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10. | [optional] |

### Return type

[**\DigitalRiver\ApiSdk\Model\ListPayoutTransactionResponse**](../Model/ListPayoutTransactionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPayouts()`

```php
listPayouts($created_time, $ending_before, $starting_after, $ids, $limit, $payout_time, $payer_id, $payer_name, $payee_id, $payee_name, $currency, $amount): \DigitalRiver\ApiSdk\Model\ListPayoutsResponse
```

Returns a list of payouts

Get all payouts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created_time = createdTime[gt]=2020-09-22T12:09:44Z; // array<string,\DateTime> | A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&mdash;return values where the createdTime field is after this timestamp   - **gte**&mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&mdash;return values where the createdTime field is before this timestamp   - **lte**&mdash;return values where the createdTime field is before or equal to this timestamp
$ending_before = 'ending_before_example'; // string | A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore=xyz in order to fetch the previous page of the list.
$starting_after = 'starting_after_example'; // string | A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter=xyz in order to fetch the next page of the list.
$ids = array('ids_example'); // string[] | Only return objects with these IDs.
$limit = 56; // int | A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10.
$payout_time = 2018-03-25T20:36:00Z; // array<string,\DateTime> | A filter on the list based on the payout **payoutTime** field. The value can be a string with an ISO-601 UTC format datetime or it can be a dictionary with the following options:    - **gt** - *return values where the payoutTime field is after this timestamp*   - **gte** - *return values where the payoutTime field is after or equal to this timestamp*   - **lt** - *return values where the payoutTime field is before this timestamp*   - **lte** - *return values where the payoutTime field is before or equal to this timestamp*
$payer_id = 'payer_id_example'; // string | Only return payouts with this payer identifier
$payer_name = 'payer_name_example'; // string | Only return payouts with this payer name
$payee_id = 'payee_id_example'; // string | Only return payouts with this payee identifier
$payee_name = 'payee_name_example'; // string | Only return payouts with this payee name
$currency = 'currency_example'; // string | Only return payouts in the given currency
$amount = 20.99; // array<string,string> | A filter on the list based on the payout **amount** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the amount field is greater than this amount*   - **gte** - *return values where the amount field is greater than or equal to this amount*   - **lt** - *return values where the amount field is less than this amount*   - **lte** - *return values where the amount field is less than or equal to this amount*

try {
    $result = $apiInstance->listPayouts($created_time, $ending_before, $starting_after, $ids, $limit, $payout_time, $payer_id, $payer_name, $payee_id, $payee_name, $currency, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->listPayouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **created_time** | [**array<string,\DateTime>**](../Model/\DateTime.md)| A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the createdTime field is after this timestamp   - **gte**&amp;mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the createdTime field is before this timestamp   - **lte**&amp;mdash;return values where the createdTime field is before or equal to this timestamp | [optional] |
| **ending_before** | **string**| A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. | [optional] |
| **starting_after** | **string**| A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Only return objects with these IDs. | [optional] |
| **limit** | **int**| A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10. | [optional] |
| **payout_time** | [**array<string,\DateTime>**](../Model/\DateTime.md)| A filter on the list based on the payout **payoutTime** field. The value can be a string with an ISO-601 UTC format datetime or it can be a dictionary with the following options:    - **gt** - *return values where the payoutTime field is after this timestamp*   - **gte** - *return values where the payoutTime field is after or equal to this timestamp*   - **lt** - *return values where the payoutTime field is before this timestamp*   - **lte** - *return values where the payoutTime field is before or equal to this timestamp* | [optional] |
| **payer_id** | **string**| Only return payouts with this payer identifier | [optional] |
| **payer_name** | **string**| Only return payouts with this payer name | [optional] |
| **payee_id** | **string**| Only return payouts with this payee identifier | [optional] |
| **payee_name** | **string**| Only return payouts with this payee name | [optional] |
| **currency** | **string**| Only return payouts in the given currency | [optional] |
| **amount** | [**array<string,string>**](../Model/string.md)| A filter on the list based on the payout **amount** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the amount field is greater than this amount*   - **gte** - *return values where the amount field is greater than or equal to this amount*   - **lt** - *return values where the amount field is less than this amount*   - **lte** - *return values where the amount field is less than or equal to this amount* | [optional] |

### Return type

[**\DigitalRiver\ApiSdk\Model\ListPayoutsResponse**](../Model/ListPayoutsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePayouts()`

```php
retrievePayouts($id): \DigitalRiver\ApiSdk\Model\Payout
```

Gets a payout by ID.

Retrieves the details of a payout. Supply the unique identifier of the payout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Payout ID

try {
    $result = $apiInstance->retrievePayouts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->retrievePayouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Payout ID | |

### Return type

[**\DigitalRiver\ApiSdk\Model\Payout**](../Model/Payout.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
