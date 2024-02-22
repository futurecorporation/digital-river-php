# # SessionNextActionData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redirect_url** | **string** | If &lt;code&gt;action&lt;/code&gt; is &lt;code&gt;redirect&lt;/code&gt; then redirect to this resource. | [optional] [readonly]
**source_id** | **string** | The identifier of the payment source. If &lt;code&gt;action&lt;/code&gt; is &lt;code&gt;show_payment_instructions&lt;/code&gt;, then use this identifier to configure the delayed payment instructions element. | [optional] [readonly]
**source_client_secret** | **string** | The client secret of the payment source. If &lt;code&gt;action&lt;/code&gt; is &lt;code&gt;show_payment_instructions&lt;/code&gt;, then use this identifier to configure the delayed payment instructions element. | [optional] [readonly]
**session_id** | **string** | The identifier of the payment session | [optional] [readonly]
**fingerprint_token** | **string** |  | [optional]
**challenge_token** | **string** |  | [optional]
**origin_key** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
