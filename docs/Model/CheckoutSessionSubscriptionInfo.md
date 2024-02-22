# # CheckoutSessionSubscriptionInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**free_trial** | **bool** | If &lt;code&gt;true&lt;/code&gt;, indicates that this is a free trial. | [optional]
**auto_renewal** | **bool** | If &lt;code&gt;true&lt;/code&gt;, indicates that renewals for this subscription are automatic rather than manual. | [optional]
**terms** | **string** | For auto renewal subscriptions, the terms displayed to the customer at acquisition. | [optional]
**plan_id** | **string** | The unique identifier of the plan | [optional]
**plan** | [**\DigitalRiver\ApiSdk\Model\CheckoutSessionSubscriptionInfoPlan**](CheckoutSessionSubscriptionInfoPlan.md) |  | [optional]
**subscription_id** | **string** | The subscription identifier. | [optional]
**billing_agreement_id** | **string** | The Digital River billing agreement identifier. | [optional]
**start_time** | **\DateTime** | The start date and time of the subscription. | [optional]
**end_time** | **\DateTime** | The &lt;code&gt;startTime&lt;/code&gt; plus the subscription duration. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
