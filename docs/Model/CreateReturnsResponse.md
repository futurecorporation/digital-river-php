# # CreateReturnsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the return. | [optional] [readonly]
**created_time** | **\DateTime** | Time at which the return was created. | [optional] [readonly]
**order_id** | **string** | The unique identifier of the order. | [optional] [readonly]
**currency** | **string** | Three-letter ISO currency code. | [optional]
**items** | [**\DigitalRiver\ApiSdk\Model\ReturnsItem[]**](ReturnsItem.md) |  | [optional]
**reason** | **string** | The reason for the return. | [optional]
**state** | **string** | Enumeration indicating the state of the return. | [optional]
**location** | [**\DigitalRiver\ApiSdk\Model\ReturnsLocation**](ReturnsLocation.md) |  | [optional]
**livemode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional]
**metadata** | **array<string,mixed>** | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional]
**refund_ids** | **string[]** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
