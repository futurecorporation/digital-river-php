# # RefundItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the refund. | [optional]
**item_id** | **string** | The identifier of the item. |
**sku_id** | **string** | The identifier of the SKU. | [optional]
**quantity** | **int** | The number of items to refund. | [optional]
**amount** | **float** | The amount to refund. You are required to provide this value or &lt;code&gt;items[].percent&lt;/code&gt;. | [optional]
**percent** | **float** | The percent to refund. You are required to provide this value or &lt;code&gt;items[].amount&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
