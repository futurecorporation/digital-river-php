# # FulfillmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The identifier of the Order associated with this Fulfillment. |
**shipment_id** | **string** | The unique identifier associated to the shipment | [optional]
**items** | [**\DigitalRiver\ApiSdk\Model\FulfillmentRequestItem[]**](FulfillmentRequestItem.md) | An array of items to fulfill and/or cancel. |
**currency** | **string** | A three-letter ISO currency code. | [optional]
**metadata** | **array<string,mixed>** | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional]
**tracking_company** | **string** | The name of the tracking company. | [optional]
**tracking_number** | **string** | The tracking number provided by the shipping company. | [optional]
**tracking_url** | **string** | The URL of the tracking page for the fulfillment. | [optional]
**partner_id** | **string** | The unique identifier of the partner associated with the sku. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
