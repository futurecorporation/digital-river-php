# # PackageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**weight** | **int** | Represents the scale weight of the package (i.e., with the goods and dunnage inside of it) at the warehouse and must be greater than &lt;code&gt;0&lt;/code&gt;. If you don&#39;t have a [default package weight](https://docs.digitalriver.com/digital-river-api/using-our-services/global-logistics#default-box) saved to your account, then its required. |
**weight_unit** | **string** | The box’s weight unit. |
**height** | **int** | Represents the actual height of the package at the warehouse and must be greater than &lt;code&gt;0&lt;/code&gt;. If you don&#39;t have a [default package height](https://docs.digitalriver.com/digital-river-api/using-our-services/global-logistics#default-box) saved to your account, then its required. | [optional]
**width** | **int** | Represents the actual width of the package at the warehouse and must be greater than &lt;code&gt;0&lt;/code&gt;. If you don&#39;t have a [default package width](https://docs.digitalriver.com/digital-river-api/using-our-services/global-logistics#default-box) saved to your account, then its required. | [optional]
**length** | **int** | Represents the actual length of the package at the warehouse and must be greater than &lt;code&gt;0&lt;/code&gt;. If you don&#39;t have a [default package length](https://docs.digitalriver.com/digital-river-api/using-our-services/global-logistics#default-box) saved to your account, then its required. | [optional]
**items** | [**\DigitalRiver\ApiSdk\Model\ProductItemRequest[]**](ProductItemRequest.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
