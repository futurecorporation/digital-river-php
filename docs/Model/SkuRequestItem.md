# # SkuRequestItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku_id** | **string** | The identifier of the stock keeping unit (SKU). | [optional]
**product_details** | [**\DigitalRiver\ApiSdk\Model\ProductDetails**](ProductDetails.md) |  | [optional]
**subscription_info** | [**\DigitalRiver\ApiSdk\Model\SubscriptionInfo**](SubscriptionInfo.md) |  | [optional]
**price** | **float** | The price of an item. | [optional]
**aggregate_price** | **float** | The total price of multiple items. | [optional]
**quantity** | **int** | The number of items. | [optional]
**discount** | [**\DigitalRiver\ApiSdk\Model\SkuDiscount**](SkuDiscount.md) |  | [optional]
**ship_from** | [**\DigitalRiver\ApiSdk\Model\ShipFrom**](ShipFrom.md) |  | [optional]
**metadata** | **array<string,mixed>** | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
