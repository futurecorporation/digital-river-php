# # LineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** |  | [optional] [readonly]
**upstream_id** | **string** | The upstream line item identifier. | [optional]
**inventory_item_id** | **string** | The inventory item identifier. | [optional]
**shipping** | **float** | The shipping cost for this line item | [optional]
**subtotal** | **float** | The product price of this line item multiplied by its quantity. | [optional]
**total** | **float** | The aggregate price of the product inclusive of taxes, discounts, fees, shipping, handling and duties. | [optional]
**name** | **string** | The product name. | [optional]
**quantity** | **int** | The item quantity. | [optional]
**pending** | **int** | The pending shipment quantity. | [optional]
**backordered** | **int** | The backordered quantity. | [optional]
**shipped** | **int** | The shipped quantity. | [optional]
**cancelled** | **int** | The cancelled quantity. | [optional]
**returned** | **int** | The returned quantity. | [optional]
**gift_message** | **string** | The gift message on the package of the product. | [optional]
**gift_wrap** | **bool** | Has the value true if the item should be gift wrapped. | [optional]
**tax** | [**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentTax**](GlobalFulfillmentTax.md) |  | [optional]
**state** | **string** | Current line item state. | [optional] [readonly]
**metadata** | **array<string,mixed>** | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
