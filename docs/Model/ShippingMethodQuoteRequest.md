# # ShippingMethodQuoteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_id** | **string** | The identifier of the checkout session associated with the shipping quotes request. |
**session_upstream_id** | **string** | The &lt;code&gt;upstreamId&lt;/code&gt; of the checkout-session associated with the shipping quotes request. | [optional]
**currency** | **string** | A three-letter ISO currency code. |
**ship_to** | [**\DigitalRiver\ApiSdk\Model\Shipping**](Shipping.md) |  |
**items** | [**\DigitalRiver\ApiSdk\Model\ShippingMethodQuoteItemRequest[]**](ShippingMethodQuoteItemRequest.md) |  |
**shipping_methods** | [**\DigitalRiver\ApiSdk\Model\DropInShippingQuote[]**](DropInShippingQuote.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
