# # Fulfillment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the Fulfillment. | [optional] [readonly]
**created_time** | **\DateTime** | The time when the Fulfillment was created. | [optional] [readonly]
**order_id** | **string** | The unique identifier of the Order associated with this Fulfillment. | [optional] [readonly]
**shipment_id** | **string** | The unique identifier associated to the shipment | [optional]
**items** | [**\DigitalRiver\ApiSdk\Model\FulfillmentResponseItem[]**](FulfillmentResponseItem.md) | An array of line items fulfilled and/or cancelled. | [optional]
**currency** | **string** | A valid [ISO 4217](https://www.iso.org/iso-4217-currency-codes.html) code that represents the currency the distributor is paid in. | [optional]
**live_mode** | **bool** | Has the value &lt;code&gt;true&lt;/code&gt; if the object exists in live mode or the value &lt;code&gt;false&lt;/code&gt; if the object exists in test mode. | [optional]
**metadata** | **array<string,mixed>** | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional]
**tracking_company** | **string** | The name of the tracking company. | [optional]
**tracking_number** | **string** | A tracking number provided by the shipping company. | [optional]
**tracking_url** | **string** | The URL of the tracking page for the Fulfillment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
