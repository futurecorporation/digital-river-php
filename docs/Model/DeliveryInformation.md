# # DeliveryInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_days_in_transit** | **string** | The estimated number of business days that the shipment will take to arrive at its final destination. Its value might be a single day or a range of days. | [optional]
**estimated_arrival** | [**\DigitalRiver\ApiSdk\Model\EstimatedArrival**](EstimatedArrival.md) |  | [optional]
**pickup_date** | **\DateTime** | The estimated time and date that the carrier will take possession of the packages in the shipment. | [optional]
**weekend_service** | [**\DigitalRiver\ApiSdk\Model\WeekendService**](WeekendService.md) |  | [optional]
**support_cutoff_time** | **string** | The time of day by which the carrier must take possession of the shipment on &lt;code&gt;pickUpDate&lt;/code&gt; for it to get to its final destination by &lt;code&gt;estimatedArrival.date&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
