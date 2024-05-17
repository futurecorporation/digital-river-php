# # FulfillmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The identifier of the Order associated with this Fulfillment. |
**shipment_id** | **string** | The unique identifier associated to the shipment | [optional]
**items** | [**\DigitalRiver\ApiSdk\Model\FulfillmentRequestItem[]**](FulfillmentRequestItem.md) | An array of items to fulfill and/or cancel. |
**currency** | **string** | A valid [ISO 4217](https://www.iso.org/iso-4217-currency-codes.html) code that represents the currency the distributor should be paid in. If &lt;code&gt; items[].distributorCost&lt;/code&gt; or &lt;code&gt;items[].shippingCost&lt;/code&gt; are specified, then &lt;code&gt;currency&lt;/code&gt; is required. The value doesn&#39;t have to be the same as the [Order&#39;s](https://www.digitalriver.com/docs/digital-river-api-reference/#tag/Orders) &lt;code&gt;currency&lt;/code&gt;. | [optional]
**metadata** | **array<string,mixed>** | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional]
**tracking_company** | **string** | The name of the tracking company. | [optional]
**tracking_number** | **string** | The tracking number provided by the shipping company. | [optional]
**tracking_url** | **string** | The URL of the tracking page for the fulfillment. | [optional]
**partner_id** | **string** | The unique identifier of the partner associated with the sku. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
