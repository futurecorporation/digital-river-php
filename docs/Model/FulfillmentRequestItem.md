# # FulfillmentRequestItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **string** | The unique identifier of the line item. | [optional]
**sku_id** | **string** | The unique identifier of the aku. | [optional] [readonly]
**shipment_item_id** | **string** | The unique identifier associated to the shipment item | [optional]
**quantity** | **int** | The number of items fulfilled. You must provide either this value and/or a value for the &lt;code&gt;cancelQuantity&lt;/code&gt; attribute. | [optional]
**cancel_quantity** | **int** | The number of items cancelled. You must provide either this value and/or a value for the &lt;code&gt;quantity&lt;/code&gt; attribute. | [optional]
**tracking_company** | **string** | The name of the tracking company | [optional]
**tracking_number** | **string** | A tracking number provided by the shipping company | [optional]
**tracking_url** | **string** | The URL of the tracking page for the fulfillment | [optional]
**subfulfiller_id** | **string** | The unique identifer of the subfulfiller. | [optional]
**distributor_cost** | **float** | The distributor&#39;s cost. If provided, then &lt;code&gt;currency&lt;/code&gt; is required. | [optional]
**shipping_cost** | **float** | The cost of shipping. If provided, then &lt;code&gt;currency&lt;/code&gt; is required. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
