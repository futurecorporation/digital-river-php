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
**subfulfiller_id** | **string** | The unique identifer of the distributor. If you don&#39;t provide it, then Digital River’s accounting service won’t have the information it needs to make a payout to the distributor and the fulfillment can&#39;t be resolved. | [optional]
**distributor_cost** | **float** | The distributor’s total cost for this &lt;code&gt;items[]&lt;/code&gt;, inclusive of its &lt;code&gt;quantity&lt;/code&gt;. In other words, the value should equal the distributor’s per unit product cost multiplied by the &lt;code&gt;quantity&lt;/code&gt; of shipped units.&lt;br&gt; &lt;br&gt;The &lt;code&gt;distributorCost&lt;/code&gt; can&#39;t be less then &lt;code&gt;0&lt;/code&gt;.  &lt;br&gt;If provided, then &lt;code&gt;currency&lt;/code&gt; is required. | [optional]
**shipping_cost** | **float** | The cost to ship the line item.&lt;br&gt;&lt;br&gt; If provided, then &lt;code&gt;currency&lt;/code&gt; is required.&lt;br&gt; &lt;br&gt;The &lt;code&gt;shippingCost&lt;/code&gt; can&#39;t be less then &lt;code&gt;0&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
