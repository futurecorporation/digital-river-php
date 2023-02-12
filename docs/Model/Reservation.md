# # Reservation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the reservation. | [optional]
**created_time** | **\DateTime** | The time when the reservation was created. | [optional] [readonly]
**ship_to** | [**\DigitalRiver\ApiSdk\Model\ReservationShipping**](ReservationShipping.md) |  | [optional]
**shipping_choice** | [**\DigitalRiver\ApiSdk\Model\ReservationShippingChoice**](ReservationShippingChoice.md) |  | [optional]
**items** | [**\DigitalRiver\ApiSdk\Model\ReservationInventoryItem[]**](ReservationInventoryItem.md) |  | [optional]
**expires_in_seconds** | **int** | A positive integer that specifies the number of seconds before the reservation expires and is deleted. | [optional]
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
