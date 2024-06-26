# # SalesTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the sales transaction | [optional]
**created_time** | **\DateTime** | Time at which the sales transaction was created | [optional]
**updated_time** | **\DateTime** | Time at which the sales transaction was last updated. | [optional] [readonly]
**sale_time** | **\DateTime** | Time at which the sales occurred. | [optional]
**sales_summary_id** | **string** | Unique identifier of a Digital River sales summary, if any. | [optional]
**currency** | **string** | Three-letter ISO currency code representing the sale currency. | [optional]
**amount** | **float** | The sales transaction amount. | [optional]
**type** | **string** | Sales transaction type. | [optional]
**order_id** | **string** | Order identifier. | [optional]
**sku_id** | **string** | SKU identifier. | [optional]
**quantity** | **float** | The quantity of the SKU. | [optional]
**payout_amounts** | [**\DigitalRiver\ApiSdk\Model\PayoutAmounts**](PayoutAmounts.md) |  | [optional]
**payer_id** | **string** | The ID of payer. | [optional]
**payer_name** | **string** | The name of the payer | [optional]
**payee_id** | **string** | The ID of the payee. | [optional]
**payee_name** | **string** | The name of the payee. | [optional]
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional]
**order_upstream_id** | **string** | Unique upstream ID for the order. | [optional]
**sku_tax_code** | **string** | The sku tax code. | [optional]
**ship_from_country** | **string** | Country being shipped from. | [optional]
**ship_to_country** | **string** | Country being shipped to. | [optional]
**bill_to_country** | **string** | Country listed on shopper&#39;s billing address. | [optional]
**ship_from_state** | **string** | The state, county, province, or region being shipped from. | [optional]
**ship_to_state** | **string** | The state, county, province, or region being shipped to. | [optional]
**bill_to_state** | **string** | The state, county, province, or region being billed to. | [optional]
**payment_type** | **string** | Type of payment used. | [optional]
**line_item_id** | **string** | The unique identiier of the line item. | [optional]
**order_metadata** | **array<string,mixed>** | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional]
**line_item_metadata** | **array<string,mixed>** | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
