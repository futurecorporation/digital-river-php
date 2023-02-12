# # InvoiceItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the item. | [optional]
**sku_id** | **string** | The identifier of the stock keeping unit (SKU). | [optional]
**product_details** | [**\DigitalRiver\ApiSdk\Model\ProductDetails**](ProductDetails.md) |  | [optional]
**subscription_info** | [**\DigitalRiver\ApiSdk\Model\SubscriptionInfo**](SubscriptionInfo.md) |  | [optional]
**fees** | [**\DigitalRiver\ApiSdk\Model\Fees**](Fees.md) |  | [optional]
**quantity** | **int** | The number of items. | [optional]
**amount** | **float** |  | [optional]
**duties** | [**\DigitalRiver\ApiSdk\Model\Duties**](Duties.md) |  | [optional]
**importer_tax** | [**\DigitalRiver\ApiSdk\Model\ImporterTax**](ImporterTax.md) |  | [optional]
**discount** | [**\DigitalRiver\ApiSdk\Model\Discount**](Discount.md) |  | [optional]
**tax** | [**\DigitalRiver\ApiSdk\Model\Tax**](Tax.md) |  | [optional]
**metadata** | **array<string,mixed>** | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
