# # LineItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**upstream_id** | **string** | The upstream line item identifier. | [optional]
**inventory_item_id** | **string** | The inventory item identifier. |
**shipping** | **float** | The shipping cost for this line item | [optional]
**subtotal** | **float** | The product price of this line item multiplied by its quantity. | [optional]
**total** | **float** | The aggregate price of the product inclusive of taxes, discounts, fees, shipping, handling and duties. | [optional]
**name** | **string** | The product name. | [optional]
**quantity** | **int** |  |
**gift_message** | **string** | The gift message on the package of the product. | [optional]
**gift_wrap** | **bool** | Has the value true if the item should be gift wrapped. | [optional]
**tax** | [**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentTax**](GlobalFulfillmentTax.md) |  | [optional]
**metadata** | **array<string,mixed>** | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
