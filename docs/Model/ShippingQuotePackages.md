# # ShippingQuotePackages

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\DigitalRiver\ApiSdk\Model\ProductItemRequest[]**](ProductItemRequest.md) |  |
**weight** | **int** | Represents an approximation of the product and packaging weight. It must be greater than &lt;code&gt;0&lt;/code&gt;. If you don&#39;t have a [default package weight](https://docs.digitalriver.com/digital-river-api/using-our-services/global-logistics#default-box) saved to your account and &lt;code&gt;weight&lt;/code&gt; values do not exist in the &lt;code&gt;items[].productDetails&lt;/code&gt; of this &lt;code&gt;packages[]&lt;/code&gt;, then it&#39;s required. | [optional]
**weight_unit** | **string** | The box’s weight unit. The default is &lt;code&gt;lb&lt;/code&gt;. | [optional]
**height** | **int** | The package&#39;s height. It must greater than &lt;code&gt;0&lt;/code&gt; and should be defined in inches. If you don&#39;t have a [default package height](https://docs.digitalriver.com/digital-river-api/using-our-services/global-logistics#default-box) saved to your account, then it&#39;s required. | [optional]
**width** | **int** | The package&#39;s width. It must greater than &lt;code&gt;0&lt;/code&gt; and should be defined in inches. If you don&#39;t have a [default package width](https://docs.digitalriver.com/digital-river-api/using-our-services/global-logistics#default-box) saved to your account, then it&#39;s required. | [optional]
**length** | **int** | The package&#39;s length. It must greater than &lt;code&gt;0&lt;/code&gt; and should be defined in inches. If you don&#39;t have a [default package length](https://docs.digitalriver.com/digital-river-api/using-our-services/global-logistics#default-box) saved to your account, then it&#39;s required. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
