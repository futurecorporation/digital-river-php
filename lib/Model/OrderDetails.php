<?php
/**
 * OrderDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Digital River API Reference
 *
 * If you have a commerce technology in place, the Digital River API allows you to integrate our back-end payments, tax, fraud, and compliance services.  The Digital River API is a RESTful API. That means Digital River designed this API to allow you to retrieve, create, update, and delete objects with the HTTP verbs GET, POST, and DELETE.   You can use the Digital River API in a test environment when you do not want to interact with financial institutions. The API key you use to authenticate a request determines whether the request is in the production environment or test environment.  The Digital River API speaks exclusively in JSON. You should always set the content-type header to `application/json` to ensure the API accepts and processes your requests.  All Digital River API requests are sent to https://<span></span>api.digitalriver.com.  # Explore Digital River Products    <table> <tr>     <td><b>Product</b></td>     <td><b>Description</b></td> </tr> <tr>     <td><a href=\"https://docs.digitalriver.com/digital-river-api/\">Digital River API</a></td>     <td>Explore Digital River&apos;s API suite for Global Seller Services.</td> </tr> <tr>     <td><a href=\"https://docs.digitalriver.com/digital-river-api/payments/payment-integrations-1\">Payment Integrations</a></td>     <td>Explore our payment integration options that allow you to enable payment methods and checkout flows.</td> </tr> </table>   <a name=\"obtaining-credentials\"></a> # Obtaining Digital River API credentials  Before you can start making Digital River API requests, you&apos;ll need to create a test account in the [Dashboard](https://dashboard.digitalriver.com/login). Check out our [Quick Start Guide](https://docs.digitalriver.com/digital-river-api/quick-start-guide) for additional information.       <a name=\"authentication\"></a> # Authentication  The Digital River API authenticates requests using API keys.    Digital River provides secret keys (tokens) for production and test environment in the Digital River API. Each secret key uses a prefix. Use the `sk_test_ prefix` for test environment secret keys and the `sk_ prefix` for production environment secret keys. If you want to apply additional restrictions to access and permissions, you can use restricted API keys.  **Important**&colon; Limit access to your API keys to those who need them. Do not store them in a version control system.  The Java library automatically sends your API key in each request when you assign the API key to `DigitalRiver.apiKey`.  You must send all API requests over HTTPS. Calls sent over plain HTTP will fail. Sending an API request without authentication automatically fails.  <a name=\"api-keys\"></a> # API keys  Digital River uses your account&apos;s API keys to authenticate your API requests. If you do not include your key when you send an API request or use an incorrect or outdated key, Digital River returns an error. See [API keys](https://docs.digitalriver.com/digital-river-api/administration/dashboard/developers/api-keys) in the [Dashboard documentation](https://docs.digitalriver.com/digital-river-api/administration/dashboard) for more information.  ## Get your API keys  To [get your keys](https://docs.digitalriver.com/digital-river-api/getting-started-1#step-1-create-a-test-account), sign in to [Digital River Dashboard](https://dashboard.digitalriver.com/). The API keys page displays your public key and secret key.   # Webhooks Webhooks allow developers to be notified, in near real-time, when specific events occur.  When you register your webhook URLs with Digital River, Digital River creates an Event object and sends webhook events that notify your application any time an event occurs.  The Event object includes the event type and the data associated with that event. Digital River sends the Event object to the endpoint URLs you define in [Dashboard](https://dashboard.digitalriver.com/)&apos;s Webhook settings for your account through an HTTP POST request. You can set up multiple webhook endpoints to receive a single event.  See [Creating a webhook](https://docs.digitalriver.com/digital-river-api/order-management/events-and-webhooks-1/webhooks/creating-a-webhook) to learn how to create a webhook.  ## Event logs To view the webhook events, sign in to [Dashboard](https://dashboard.digitalriver.com/) and click Event logs. The Event logs display the event type, event ID, and timestamp for the event.  <a name=\"metadata\"></a>     # Metadata The metadata parameter stores additional, structured information on an object. You can use the metadata parameter to attach key-value data to the following Digital River resources&colon; SKUs, Checkouts, Orders, Customers, Returns, Refunds, and Fulfillments.  For example, you can store your user&apos;s full name and ID on a Digital River Customer object. Digital River does not use the metadata. Your users will only see this data if you choose to show it to them.  **Note**&colon; Do not store any data that identifies a person, their card information, and so on as metadata.  The metadata parameter supports up to 20 keys. Each key name can be up to 40 characters long&comma; and the values can be up to 500 characters long.  # Pagination All API resources that return lists support bulk fetches. For example, you can use the `limit`, `startingAfter`, and `endingBefore` parameters to list orders, customers, and SKUs.  The `startingBefore` and `endingAfter` parameters both use an object ID value to determine the starting point, and the objects appear in the response in reverse chronological order. To return objects listed before the named object, use the `endingBefore` parameter. To return objects listed after the named object, use the `startingAfter` parameter. If you provide both parameters, the request uses only the `endingBefore` parameter.  ## Parameters  <table> <tr>     <td><b>Parameter</b></td>     <td><b>Description</b></td> </tr> <tr>     <td>limit</td>     <td>The maximum number of objects returned. You can specify a value between 1 and 100.</td> </tr> <tr>     <td>startingAfter</td>     <td>This cursor identifies the pagination starting point in the list based on the object ID. For example, if you send a list request and receive 100 customers ending with `xyz`, your subsequent calls can include `startingAfter=xyz` to fetch the next page of the list.</td> </tr> <tr>     <td>endingBefore</td>     <td>This cursor identifies the pagination starting point in the list based on the object ID. For example, if you send a list request and receive 100 objects starting with `xyz`, your subsequent call can include `endingBefore=xyz` to fetch the previous page of the list.</td> </tr> </table>  ## List response attributes  <table> <tr>     <td><b>Attribute</b></td>     <td><b>Description</b></td> </tr> <tr>     <td>data</td>     <td>This array contains response elements. Any request parameter can paginate the response elements.</td> </tr> <tr>     <td>hasMore</td>     <td>When true, there are more elements available after this set. When false, this set marks the end of the list.</td> </tr> </table>  # Request identifiers  A request identifier is associated with each API request. It appears in the response headers under `x-dr-requestid`. Request identifiers also appear in the URLs of each request log in your [Dashboard](https://dashboard.digitalriver.com/).  **Note**&colon; Contact us if you have a question about a specific request. To ensure a quick solution, include the request identifier.  # Versioning  Your account&apos;s API version determines the structure of events generated by API requests. All versions with breaking changes are dated.  All requests will use the version pinned to your account API settings. It only changes when you upgrade to the latest API version.   Select a version of the library to change the API version used and create a webhook endpoint with the same API version as `DigitalRiver.API_VERSION` property in the library. Use the [Changelog](https://docs.digitalriver.com/digital-river-api/general-resources/release-notes) to  find the API version you need and view all breaking changes.  You can test a single API request without upgrading your API key.  To set an API version with a specific request, send a `DigitalRiver-Version` header, for example:  `digitalriver-version=2020-09-30`  <a name=\"errors\"></a> # Response status codes  Digital River uses HTTP response status codes. These codes indicate whether an API request succeeded or failed. HTTP status codes group responses into the following classes&colon;  * The `2xx` range indicates success.  * The `4xx` range indicates an error that failed based on the provided information provided (for example, you omitted a parameter or a charge failed).  * The `5xx` range indicates an error with Digital River&apos;s servers.  * You can handle some `4xx` errors programmatically to include an error code that briefly explains the error reported (for example, include an error code when you decline a card).  <a name=\"error-types\"></a> ## Error types  <table> <tr>     <td><b>Type</b></td>     <td><b>Description</b></td> </tr> <tr>     <td>bad_request</td>     <td>The server could not process the request due to a client error (for example, malformed request syntax). Correct the problem and try again.</td> </tr>    <tr>     <td>not_found</td>     <td>The server can’t find the requested resource. No indication is given of whether the condition is temporary or permanent.</td> </tr> <tr>     <td>request_timeout</td>     <td>The client did not produce the request within the time that the server was prepared to wait. Resend the request without modifications at any later time.</td> </tr> <tr>     <td>internal_server_error</td>     <td>The server encountered an unexpected problem that prevented it from fulfilling the request.</td> </tr>     <tr>     <td>unauthorized</td>     <td>The request requires user authentication. Resend the request with valid user authentication.</td> </tr>     <tr>     <td>too_many_requests</td>     <td>The user sent too many requests in a given amount of time (&ldquo;rate limiting&rdquo;). The response should include details explaining the condition and may include a Retry-After header indicating how long to wait before sending a new request.</td> </tr>     <tr>     <td>conflict</td>     <td>There is a request conflict with the current state of the server.      Conflicts are most likely to occur in response to a PUT request. For example, you may get a 409 response when uploading a file that is older than the one already on the server resulting in a version control conflict. </td> </tr>     <tr>     <td>validation_error</td>     <td>Errors triggered by our client-side libraries when failing to validate fields (for example, when a card number or expiration date is invalid or incomplete).  Used by&colon; DigitalRiver.js</td> </tr>     <tr>     <td>no_network</td>     <td>There is no network coverage or cellular data connection.</td> </tr>     </table>  <a name=\"error-codes\"></a> ## Error codes  The following table contains a list of API error codes.  **Note**&colon; Do not share the error's <code>code</code> with customers. Doing so may aid fradulent and malicious actors.  <table> <tr>     <td><b>Code</b></td>     <td><b>Description</b></td> </tr> <tr>     <td>account_closed</td>     <td>Stop all billing as this account is closed.</td> </tr> <tr>     <td>already_exists</td>     <td>The item you tried to create already exists.</td> </tr> <tr>     <td>amount_too_large</td>     <td>The given amount is too large. Provide a smaller amount and try again.</td> </tr> <tr>     <td>api_key_expired</td>     <td>The API key has expired.</td> </tr>     <tr>     <td>card_expired</td>     <td>The card has expired. Provide valid card information and try again.</td> </tr>     <tr>     <td>card_limit_exceeded</td>     <td>The transaction exceeds the card limit amount.</td> </tr> <tr>     <td>card_type_block</td>     <td>The merchant has blocked this card type.</td> </tr>     <tr>     <td>card_velocity_exceeded</td>     <td>The transaction exceeds the card velocity amount.</td> </tr> <tr>     <td>charge_expired</td>     <td>The charge has expired. Provide valid charge information and try again.</td> </tr>     <tr>     <td>charge_not_capturable</td>     <td>The charge could not be captured.</td> </tr> <tr>     <td>country_restricted</td>     <td>A user provided a restricted country. Make sure that users can only sign up from supported countries.</td> </tr>  <tr>     <td>create-order-failed</td>     <td>The order is missing required details and could not be completed.</td> </tr>      <tr>     <td>currency_unsupported</td>     <td>The currency provided is not supported. Provide a supported currency and try again.</td> </tr> <tr>     <td>declined</td>     <td>The card has been declined for an unknown reason.</td> </tr>     <tr>     <td>do_not_honor</td>     <td>The card issuing bank has declined this payment.</td> </tr> <tr>     <td>email_invalid</td>     <td>The email address is invalid. Provide a valid email address and try again.</td> </tr> <tr>     <td>failed-request</td>     <td>Failed to charge source.</td> </tr> <tr>     <td>fraud</td>     <td>The transaction has been identified by the issuing bank as fraudulent.</td> </tr> <tr>     <td>fraud_block</td>     <td>The transaction has been identified by Digital River as fraudulent.</td> </tr>     <tr>     <td>invalid_address</td>     <td>The address does not match the card network's records.</td> </tr> <tr>     <td>invalid_amount</td>     <td>The amount is not accepted by the card network.</td> </tr>     <tr>     <td>invalid_boolean</td>     <td>The boolean value is invalid. Provide a valid boolean value and try again.</td> </tr> <tr>     <td>invalid_card_bin</td>     <td>The card bin is invalid.</td> </tr>     <tr>     <td>invalid_card_number</td>     <td>The card number entered is invalid.</td> </tr> <tr>     <td>invalid_currency</td>     <td>This currency is not supported.</td> </tr>     <tr>     <td>invalid_empty</td>     <td>The empty value is invalid. Provide a valid value and try again.</td> </tr> <tr>     <td>invalid_expiration_date</td>     <td>The card is expired, or the expiration date is invalid. This validation message indicates the expiration date did not meet basic validation requirements (for example, the date is in the past, incorrect month, missing year, and so on).</td> </tr>   <tr>     <td>invalid_format</td>     <td>The format of your request is invalid.</td> </tr>      <tr>     <td>invalid_integer</td>     <td>The integer value is valid. Provide a value integer value and try again.</td> </tr> <tr>     <td>invalid_metadata_key</td>     <td>The metadata key is invalid. Provide a value metadata key and try again.</td> </tr>       <tr>     <td>invalid_metadata_value</td>     <td>The value provided for the metadata was invalid.</td> </tr> <tr>     <td>invalid_parameter</td>     <td>The parameter is invalid. Check our API Reference to see which values are valid and try again.</td> </tr>       <tr>     <td>invalid_pin</td>     <td>The PIN provided is invalid or incorrect.invalid_quantity_amount</td> </tr> <tr>     <td>invalid_quantity_amount</td>     <td>The quantity provided in the request was invalid. Check our API Reference to see what is a valid quantity and try again.</td> </tr>       <tr>     <td>invalid_security_code</td>     <td>The security code provided is invalid or incorrect.</td> </tr> <tr>     <td>invalid_shipping_choice</td>     <td>The shipping choice is invalid. Provide a valid shipping choice and try again.</td> </tr>       <tr>     <td>invalid_string_blank</td>     <td>The string value is blank. Provide a valid string value and try again.</td> </tr> <tr>     <td>invalid_string_empty</td>     <td>The string value is empty. Provide a valid string value and try again.</td> </tr>       <tr>     <td>invalid_transaction_type</td>     <td>The transaction type is invalid.</td> </tr> <tr>     <td>issuer_invalid_card</td>     <td>The card does not exist with the issuer.</td> </tr>       <tr>     <td>issuer_not_found</td>     <td>The card issuer does not exist.</td> </tr> <tr>     <td>issuer_unavailable</td>     <td>The card issuing bank could not be reached.</td> </tr>       <tr>     <td>insufficient_funds</td>     <td>The card has insufficient funds to complete the purchase.</td> </tr> <tr>     <td>limit_exceeded</td>     <td>The transaction amount exceeds your assigned limit.</td> </tr>       <tr>     <td>lost_stolen_card</td>     <td>The issuing bank has marked this card lost or stolen.</td> </tr> <tr>     <td>method_not_allowed</td>     <td>The method is not allowed. Provide a valid method value and try again.</td> </tr>     <tr>     <td>mid_limit_exceeded</td>     <td>The transaction amount exceeds the limit assigned for this MID.</td> </tr>       <tr>     <td>missing_parameter</td>     <td>A parameter is missing. Check our API Reference to see which values are required and try again.</td> </tr> <tr>     <td>no_response</td>     <td>The payment processor did not respond.</td> </tr>       <tr>     <td>not_found</td>     <td>The item requested was not found.</td> </tr>   <tr>     <td>order_already_complete</td>     <td>The specified orderId is already complete.</td> </tr>   <tr>     <td>order_submit_failed</td>     <td>The payment session status is invalid.</td> </tr>   <tr>     <td>out_of_inventory</td>     <td>The item is not in inventory.</td> </tr>  <tr>   <td>payment_authorization_failed</td>   <td>The payment authorization failed</td> </tr> <tr>     <td>pin_try_exceeded</td>     <td>The bank's allowable number of PIN tries has been exceeded.</td> </tr>     <tr>     <td>plan_not_active</td>     <td>The plan is not in an active state.</td> </tr> <tr>     <td>postal_code_invalid</td>     <td>The postal code is invalid. Enter a valid postal code and try again.</td> </tr>       <tr>     <td>restricted_card</td>     <td>Restricted by the card network.</td> </tr> <tr>     <td>restricted_update</td>     <td>Additional data cannot be included in the update request</td> </tr>   <tr>     <td>sku_inactive</td>     <td>The given SKU is inactive. Provide an active SKU and try again.</td> </tr>       <tr>     <td>source_expired</td>     <td>The source provided has expired. Check Sources to see which sources have not expired and try again.     </td> </tr> <tr>     <td>source_not_chargeable</td>     <td>The source provided is not chargeable. Check Sources to see which sources are chargeable and try again.</td> </tr>       <tr>     <td>source_not_found</td>     <td>The source you have requested was not found.</td> </tr> <tr>     <td>source_status_invalid_for_session</td>     <td>The source status is invalid for this session.</td> </tr>  <tr>     <td>stop_recurring</td>     <td>The cardholder has requested all recurring and / or installment charges to be stopped.</td> </tr>     <tr>     <td>tax_id_invalid</td>     <td>The tax identifier is not valid. Correct the tax identifier and try again.</td> </tr>       <tr>     <td>too_many_metadata_pairs</td>     <td>The request contained too many metadata pairs.</td> </tr> <tr>     <td>unknown_error</td>     <td>An unknown error has occurred.</td> </tr>      <tr>     <td>unknown_parameter</td>     <td>The request contains an unknown parameter. Check our API Reference to see which values are required and try again.</td> </tr>   <tr>     <td>voice_authorization_required</td>     <td>The request request requires voice authorization before it can be authorized.</td> </tr>     </table>  <br><br>Updated at 2023-02-22T14:19:03.878403Z.
 *
 * The version of the OpenAPI document: 2023
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalRiver\ApiSdk\Model;

use \ArrayAccess;
use \DigitalRiver\ApiSdk\ObjectSerializer;

/**
 * OrderDetails Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'checkout_id' => 'string',
        'created_time' => '\DateTime',
        'customer_id' => 'string',
        'currency' => 'string',
        'email' => 'string',
        'locale' => 'string',
        'browser_ip' => 'string',
        'application_id' => 'string',
        'tax_identifiers' => '\DigitalRiver\ApiSdk\Model\TaxIdentifier[]',
        'invoice_attributes' => '\DigitalRiver\ApiSdk\Model\InvoiceAttributes',
        'ship_from' => '\DigitalRiver\ApiSdk\Model\ShipFrom',
        'ship_to' => '\DigitalRiver\ApiSdk\Model\Shipping',
        'bill_to' => '\DigitalRiver\ApiSdk\Model\Billing',
        'organization' => '\DigitalRiver\ApiSdk\Model\Organization',
        'subtotal' => 'float',
        'total_tax' => 'float',
        'total_importer_tax' => 'float',
        'importer_of_record_tax' => 'bool',
        'total_fees' => 'float',
        'total_duty' => 'float',
        'total_discount' => 'float',
        'total_shipping' => 'float',
        'total_amount' => 'float',
        'discount' => '\DigitalRiver\ApiSdk\Model\Discount',
        'available_to_refund_amount' => 'float',
        'refunded_amount' => 'float',
        'cancelled_amount' => 'float',
        'captured_amount' => 'float',
        'items' => '\DigitalRiver\ApiSdk\Model\OrderItem[]',
        'invoice_pdfs' => '\DigitalRiver\ApiSdk\Model\File[]',
        'credit_memo_pdfs' => '\DigitalRiver\ApiSdk\Model\File[]',
        'request_to_be_forgotten' => 'bool',
        'shipping_choice' => '\DigitalRiver\ApiSdk\Model\ShippingChoice',
        'state' => 'string',
        'state_transitions' => '\DigitalRiver\ApiSdk\Model\OrderStateTransitions',
        'fraud_state' => 'string',
        'fraud_state_transitions' => '\DigitalRiver\ApiSdk\Model\FraudStateTransitions',
        'live_mode' => 'bool',
        'metadata' => 'array<string,mixed>',
        'selling_entity' => '\DigitalRiver\ApiSdk\Model\SellingEntity',
        'purchase_location' => '\DigitalRiver\ApiSdk\Model\PurchaseLocation',
        'customer_type' => '\DigitalRiver\ApiSdk\Model\CustomerType',
        'upstream_id' => 'string',
        'updated_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'checkout_id' => null,
        'created_time' => 'date-time',
        'customer_id' => null,
        'currency' => null,
        'email' => 'email',
        'locale' => null,
        'browser_ip' => null,
        'application_id' => null,
        'tax_identifiers' => null,
        'invoice_attributes' => null,
        'ship_from' => null,
        'ship_to' => null,
        'bill_to' => null,
        'organization' => null,
        'subtotal' => 'double',
        'total_tax' => 'double',
        'total_importer_tax' => 'double',
        'importer_of_record_tax' => null,
        'total_fees' => 'double',
        'total_duty' => 'double',
        'total_discount' => 'double',
        'total_shipping' => 'double',
        'total_amount' => 'double',
        'discount' => null,
        'available_to_refund_amount' => 'double',
        'refunded_amount' => 'double',
        'cancelled_amount' => 'double',
        'captured_amount' => 'double',
        'items' => null,
        'invoice_pdfs' => null,
        'credit_memo_pdfs' => null,
        'request_to_be_forgotten' => null,
        'shipping_choice' => null,
        'state' => null,
        'state_transitions' => null,
        'fraud_state' => null,
        'fraud_state_transitions' => null,
        'live_mode' => null,
        'metadata' => null,
        'selling_entity' => null,
        'purchase_location' => null,
        'customer_type' => null,
        'upstream_id' => null,
        'updated_time' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'checkout_id' => false,
		'created_time' => false,
		'customer_id' => false,
		'currency' => false,
		'email' => false,
		'locale' => false,
		'browser_ip' => false,
		'application_id' => false,
		'tax_identifiers' => false,
		'invoice_attributes' => false,
		'ship_from' => false,
		'ship_to' => false,
		'bill_to' => false,
		'organization' => false,
		'subtotal' => false,
		'total_tax' => false,
		'total_importer_tax' => false,
		'importer_of_record_tax' => true,
		'total_fees' => false,
		'total_duty' => false,
		'total_discount' => false,
		'total_shipping' => false,
		'total_amount' => false,
		'discount' => false,
		'available_to_refund_amount' => true,
		'refunded_amount' => false,
		'cancelled_amount' => false,
		'captured_amount' => false,
		'items' => false,
		'invoice_pdfs' => true,
		'credit_memo_pdfs' => true,
		'request_to_be_forgotten' => false,
		'shipping_choice' => true,
		'state' => false,
		'state_transitions' => true,
		'fraud_state' => false,
		'fraud_state_transitions' => true,
		'live_mode' => false,
		'metadata' => false,
		'selling_entity' => false,
		'purchase_location' => false,
		'customer_type' => false,
		'upstream_id' => true,
		'updated_time' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'checkout_id' => 'checkoutId',
        'created_time' => 'createdTime',
        'customer_id' => 'customerId',
        'currency' => 'currency',
        'email' => 'email',
        'locale' => 'locale',
        'browser_ip' => 'browserIp',
        'application_id' => 'applicationId',
        'tax_identifiers' => 'taxIdentifiers',
        'invoice_attributes' => 'invoiceAttributes',
        'ship_from' => 'shipFrom',
        'ship_to' => 'shipTo',
        'bill_to' => 'billTo',
        'organization' => 'organization',
        'subtotal' => 'subtotal',
        'total_tax' => 'totalTax',
        'total_importer_tax' => 'totalImporterTax',
        'importer_of_record_tax' => 'importerOfRecordTax',
        'total_fees' => 'totalFees',
        'total_duty' => 'totalDuty',
        'total_discount' => 'totalDiscount',
        'total_shipping' => 'totalShipping',
        'total_amount' => 'totalAmount',
        'discount' => 'discount',
        'available_to_refund_amount' => 'availableToRefundAmount',
        'refunded_amount' => 'refundedAmount',
        'cancelled_amount' => 'cancelledAmount',
        'captured_amount' => 'capturedAmount',
        'items' => 'items',
        'invoice_pdfs' => 'invoicePDFs',
        'credit_memo_pdfs' => 'creditMemoPDFs',
        'request_to_be_forgotten' => 'requestToBeForgotten',
        'shipping_choice' => 'shippingChoice',
        'state' => 'state',
        'state_transitions' => 'stateTransitions',
        'fraud_state' => 'fraudState',
        'fraud_state_transitions' => 'fraudStateTransitions',
        'live_mode' => 'liveMode',
        'metadata' => 'metadata',
        'selling_entity' => 'sellingEntity',
        'purchase_location' => 'purchaseLocation',
        'customer_type' => 'customerType',
        'upstream_id' => 'upstreamId',
        'updated_time' => 'updatedTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'checkout_id' => 'setCheckoutId',
        'created_time' => 'setCreatedTime',
        'customer_id' => 'setCustomerId',
        'currency' => 'setCurrency',
        'email' => 'setEmail',
        'locale' => 'setLocale',
        'browser_ip' => 'setBrowserIp',
        'application_id' => 'setApplicationId',
        'tax_identifiers' => 'setTaxIdentifiers',
        'invoice_attributes' => 'setInvoiceAttributes',
        'ship_from' => 'setShipFrom',
        'ship_to' => 'setShipTo',
        'bill_to' => 'setBillTo',
        'organization' => 'setOrganization',
        'subtotal' => 'setSubtotal',
        'total_tax' => 'setTotalTax',
        'total_importer_tax' => 'setTotalImporterTax',
        'importer_of_record_tax' => 'setImporterOfRecordTax',
        'total_fees' => 'setTotalFees',
        'total_duty' => 'setTotalDuty',
        'total_discount' => 'setTotalDiscount',
        'total_shipping' => 'setTotalShipping',
        'total_amount' => 'setTotalAmount',
        'discount' => 'setDiscount',
        'available_to_refund_amount' => 'setAvailableToRefundAmount',
        'refunded_amount' => 'setRefundedAmount',
        'cancelled_amount' => 'setCancelledAmount',
        'captured_amount' => 'setCapturedAmount',
        'items' => 'setItems',
        'invoice_pdfs' => 'setInvoicePdfs',
        'credit_memo_pdfs' => 'setCreditMemoPdfs',
        'request_to_be_forgotten' => 'setRequestToBeForgotten',
        'shipping_choice' => 'setShippingChoice',
        'state' => 'setState',
        'state_transitions' => 'setStateTransitions',
        'fraud_state' => 'setFraudState',
        'fraud_state_transitions' => 'setFraudStateTransitions',
        'live_mode' => 'setLiveMode',
        'metadata' => 'setMetadata',
        'selling_entity' => 'setSellingEntity',
        'purchase_location' => 'setPurchaseLocation',
        'customer_type' => 'setCustomerType',
        'upstream_id' => 'setUpstreamId',
        'updated_time' => 'setUpdatedTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'checkout_id' => 'getCheckoutId',
        'created_time' => 'getCreatedTime',
        'customer_id' => 'getCustomerId',
        'currency' => 'getCurrency',
        'email' => 'getEmail',
        'locale' => 'getLocale',
        'browser_ip' => 'getBrowserIp',
        'application_id' => 'getApplicationId',
        'tax_identifiers' => 'getTaxIdentifiers',
        'invoice_attributes' => 'getInvoiceAttributes',
        'ship_from' => 'getShipFrom',
        'ship_to' => 'getShipTo',
        'bill_to' => 'getBillTo',
        'organization' => 'getOrganization',
        'subtotal' => 'getSubtotal',
        'total_tax' => 'getTotalTax',
        'total_importer_tax' => 'getTotalImporterTax',
        'importer_of_record_tax' => 'getImporterOfRecordTax',
        'total_fees' => 'getTotalFees',
        'total_duty' => 'getTotalDuty',
        'total_discount' => 'getTotalDiscount',
        'total_shipping' => 'getTotalShipping',
        'total_amount' => 'getTotalAmount',
        'discount' => 'getDiscount',
        'available_to_refund_amount' => 'getAvailableToRefundAmount',
        'refunded_amount' => 'getRefundedAmount',
        'cancelled_amount' => 'getCancelledAmount',
        'captured_amount' => 'getCapturedAmount',
        'items' => 'getItems',
        'invoice_pdfs' => 'getInvoicePdfs',
        'credit_memo_pdfs' => 'getCreditMemoPdfs',
        'request_to_be_forgotten' => 'getRequestToBeForgotten',
        'shipping_choice' => 'getShippingChoice',
        'state' => 'getState',
        'state_transitions' => 'getStateTransitions',
        'fraud_state' => 'getFraudState',
        'fraud_state_transitions' => 'getFraudStateTransitions',
        'live_mode' => 'getLiveMode',
        'metadata' => 'getMetadata',
        'selling_entity' => 'getSellingEntity',
        'purchase_location' => 'getPurchaseLocation',
        'customer_type' => 'getCustomerType',
        'upstream_id' => 'getUpstreamId',
        'updated_time' => 'getUpdatedTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const STATE_ACCEPTED = 'accepted';
    public const STATE_BLOCKED = 'blocked';
    public const STATE_PENDING_PAYMENT = 'pending_payment';
    public const STATE_IN_REVIEW = 'in_review';
    public const STATE_DISPUTE = 'dispute';
    public const STATE_CANCELLED = 'cancelled';
    public const STATE_FULFILLED = 'fulfilled';
    public const STATE_COMPLETE = 'complete';
    public const STATE_RETURNED = 'returned';
    public const FRAUD_STATE_BLOCKED = 'blocked';
    public const FRAUD_STATE_REVIEW_OPENED = 'review_opened';
    public const FRAUD_STATE_PASSED = 'passed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACCEPTED,
            self::STATE_BLOCKED,
            self::STATE_PENDING_PAYMENT,
            self::STATE_IN_REVIEW,
            self::STATE_DISPUTE,
            self::STATE_CANCELLED,
            self::STATE_FULFILLED,
            self::STATE_COMPLETE,
            self::STATE_RETURNED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFraudStateAllowableValues()
    {
        return [
            self::FRAUD_STATE_BLOCKED,
            self::FRAUD_STATE_REVIEW_OPENED,
            self::FRAUD_STATE_PASSED,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('checkout_id', $data ?? [], null);
        $this->setIfExists('created_time', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('browser_ip', $data ?? [], null);
        $this->setIfExists('application_id', $data ?? [], null);
        $this->setIfExists('tax_identifiers', $data ?? [], null);
        $this->setIfExists('invoice_attributes', $data ?? [], null);
        $this->setIfExists('ship_from', $data ?? [], null);
        $this->setIfExists('ship_to', $data ?? [], null);
        $this->setIfExists('bill_to', $data ?? [], null);
        $this->setIfExists('organization', $data ?? [], null);
        $this->setIfExists('subtotal', $data ?? [], null);
        $this->setIfExists('total_tax', $data ?? [], null);
        $this->setIfExists('total_importer_tax', $data ?? [], null);
        $this->setIfExists('importer_of_record_tax', $data ?? [], null);
        $this->setIfExists('total_fees', $data ?? [], null);
        $this->setIfExists('total_duty', $data ?? [], null);
        $this->setIfExists('total_discount', $data ?? [], null);
        $this->setIfExists('total_shipping', $data ?? [], null);
        $this->setIfExists('total_amount', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('available_to_refund_amount', $data ?? [], null);
        $this->setIfExists('refunded_amount', $data ?? [], null);
        $this->setIfExists('cancelled_amount', $data ?? [], null);
        $this->setIfExists('captured_amount', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('invoice_pdfs', $data ?? [], null);
        $this->setIfExists('credit_memo_pdfs', $data ?? [], null);
        $this->setIfExists('request_to_be_forgotten', $data ?? [], false);
        $this->setIfExists('shipping_choice', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('state_transitions', $data ?? [], null);
        $this->setIfExists('fraud_state', $data ?? [], null);
        $this->setIfExists('fraud_state_transitions', $data ?? [], null);
        $this->setIfExists('live_mode', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('selling_entity', $data ?? [], null);
        $this->setIfExists('purchase_location', $data ?? [], null);
        $this->setIfExists('customer_type', $data ?? [], null);
        $this->setIfExists('upstream_id', $data ?? [], null);
        $this->setIfExists('updated_time', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFraudStateAllowableValues();
        if (!is_null($this->container['fraud_state']) && !in_array($this->container['fraud_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fraud_state', must be one of '%s'",
                $this->container['fraud_state'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier for the order.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets checkout_id
     *
     * @return string|null
     */
    public function getCheckoutId()
    {
        return $this->container['checkout_id'];
    }

    /**
     * Sets checkout_id
     *
     * @param string|null $checkout_id The unique identifier of the checkout submitted to create the order.
     *
     * @return self
     */
    public function setCheckoutId($checkout_id)
    {
        if (is_null($checkout_id)) {
            throw new \InvalidArgumentException('non-nullable checkout_id cannot be null');
        }
        $this->container['checkout_id'] = $checkout_id;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime|null
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime|null $created_time Time at which the order was created.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        if (is_null($created_time)) {
            throw new \InvalidArgumentException('non-nullable created_time cannot be null');
        }
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id The identifier of the customer associated with this order.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            throw new \InvalidArgumentException('non-nullable customer_id cannot be null');
        }
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency A three-letter ISO currency code.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The customer's email address.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale A designator that combines the two-letter ISO 639-1 language code with the ISO 3166-1 alpha-2 country code.
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets browser_ip
     *
     * @return string|null
     */
    public function getBrowserIp()
    {
        return $this->container['browser_ip'];
    }

    /**
     * Sets browser_ip
     *
     * @param string|null $browser_ip The IP address of the browser used by the customer when placing the order.
     *
     * @return self
     */
    public function setBrowserIp($browser_ip)
    {
        if (is_null($browser_ip)) {
            throw new \InvalidArgumentException('non-nullable browser_ip cannot be null');
        }
        $this->container['browser_ip'] = $browser_ip;

        return $this;
    }

    /**
     * Gets application_id
     *
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string|null $application_id An arbitrary string identifier that can be used to track the application type.
     *
     * @return self
     */
    public function setApplicationId($application_id)
    {
        if (is_null($application_id)) {
            throw new \InvalidArgumentException('non-nullable application_id cannot be null');
        }
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets tax_identifiers
     *
     * @return \DigitalRiver\ApiSdk\Model\TaxIdentifier[]|null
     */
    public function getTaxIdentifiers()
    {
        return $this->container['tax_identifiers'];
    }

    /**
     * Sets tax_identifiers
     *
     * @param \DigitalRiver\ApiSdk\Model\TaxIdentifier[]|null $tax_identifiers A list of the tax identifiers applied to this order.
     *
     * @return self
     */
    public function setTaxIdentifiers($tax_identifiers)
    {
        if (is_null($tax_identifiers)) {
            throw new \InvalidArgumentException('non-nullable tax_identifiers cannot be null');
        }
        $this->container['tax_identifiers'] = $tax_identifiers;

        return $this;
    }

    /**
     * Gets invoice_attributes
     *
     * @return \DigitalRiver\ApiSdk\Model\InvoiceAttributes|null
     */
    public function getInvoiceAttributes()
    {
        return $this->container['invoice_attributes'];
    }

    /**
     * Sets invoice_attributes
     *
     * @param \DigitalRiver\ApiSdk\Model\InvoiceAttributes|null $invoice_attributes invoice_attributes
     *
     * @return self
     */
    public function setInvoiceAttributes($invoice_attributes)
    {
        if (is_null($invoice_attributes)) {
            throw new \InvalidArgumentException('non-nullable invoice_attributes cannot be null');
        }
        $this->container['invoice_attributes'] = $invoice_attributes;

        return $this;
    }

    /**
     * Gets ship_from
     *
     * @return \DigitalRiver\ApiSdk\Model\ShipFrom|null
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \DigitalRiver\ApiSdk\Model\ShipFrom|null $ship_from ship_from
     *
     * @return self
     */
    public function setShipFrom($ship_from)
    {
        if (is_null($ship_from)) {
            throw new \InvalidArgumentException('non-nullable ship_from cannot be null');
        }
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \DigitalRiver\ApiSdk\Model\Shipping|null
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \DigitalRiver\ApiSdk\Model\Shipping|null $ship_to ship_to
     *
     * @return self
     */
    public function setShipTo($ship_to)
    {
        if (is_null($ship_to)) {
            throw new \InvalidArgumentException('non-nullable ship_to cannot be null');
        }
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets bill_to
     *
     * @return \DigitalRiver\ApiSdk\Model\Billing|null
     */
    public function getBillTo()
    {
        return $this->container['bill_to'];
    }

    /**
     * Sets bill_to
     *
     * @param \DigitalRiver\ApiSdk\Model\Billing|null $bill_to bill_to
     *
     * @return self
     */
    public function setBillTo($bill_to)
    {
        if (is_null($bill_to)) {
            throw new \InvalidArgumentException('non-nullable bill_to cannot be null');
        }
        $this->container['bill_to'] = $bill_to;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \DigitalRiver\ApiSdk\Model\Organization|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \DigitalRiver\ApiSdk\Model\Organization|null $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        if (is_null($organization)) {
            throw new \InvalidArgumentException('non-nullable organization cannot be null');
        }
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return float|null
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param float|null $subtotal Represents the total order amount exclusive of tax.
     *
     * @return self
     */
    public function setSubtotal($subtotal)
    {
        if (is_null($subtotal)) {
            throw new \InvalidArgumentException('non-nullable subtotal cannot be null');
        }
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return float|null
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param float|null $total_tax Represents the total tax amount.
     *
     * @return self
     */
    public function setTotalTax($total_tax)
    {
        if (is_null($total_tax)) {
            throw new \InvalidArgumentException('non-nullable total_tax cannot be null');
        }
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets total_importer_tax
     *
     * @return float|null
     */
    public function getTotalImporterTax()
    {
        return $this->container['total_importer_tax'];
    }

    /**
     * Sets total_importer_tax
     *
     * @param float|null $total_importer_tax Represents the total tax amount from the importer of record.
     *
     * @return self
     */
    public function setTotalImporterTax($total_importer_tax)
    {
        if (is_null($total_importer_tax)) {
            throw new \InvalidArgumentException('non-nullable total_importer_tax cannot be null');
        }
        $this->container['total_importer_tax'] = $total_importer_tax;

        return $this;
    }

    /**
     * Gets importer_of_record_tax
     *
     * @return bool|null
     */
    public function getImporterOfRecordTax()
    {
        return $this->container['importer_of_record_tax'];
    }

    /**
     * Sets importer_of_record_tax
     *
     * @param bool|null $importer_of_record_tax If <code>true</code>, indicates that the tax amount is paid by the importer of record.
     *
     * @return self
     */
    public function setImporterOfRecordTax($importer_of_record_tax)
    {
        if (is_null($importer_of_record_tax)) {
            array_push($this->openAPINullablesSetToNull, 'importer_of_record_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('importer_of_record_tax', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['importer_of_record_tax'] = $importer_of_record_tax;

        return $this;
    }

    /**
     * Gets total_fees
     *
     * @return float|null
     */
    public function getTotalFees()
    {
        return $this->container['total_fees'];
    }

    /**
     * Sets total_fees
     *
     * @param float|null $total_fees Represents the total fee amount.
     *
     * @return self
     */
    public function setTotalFees($total_fees)
    {
        if (is_null($total_fees)) {
            throw new \InvalidArgumentException('non-nullable total_fees cannot be null');
        }
        $this->container['total_fees'] = $total_fees;

        return $this;
    }

    /**
     * Gets total_duty
     *
     * @return float|null
     */
    public function getTotalDuty()
    {
        return $this->container['total_duty'];
    }

    /**
     * Sets total_duty
     *
     * @param float|null $total_duty Represents the total duty amount.
     *
     * @return self
     */
    public function setTotalDuty($total_duty)
    {
        if (is_null($total_duty)) {
            throw new \InvalidArgumentException('non-nullable total_duty cannot be null');
        }
        $this->container['total_duty'] = $total_duty;

        return $this;
    }

    /**
     * Gets total_discount
     *
     * @return float|null
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     *
     * @param float|null $total_discount Represents the total discount amount.
     *
     * @return self
     */
    public function setTotalDiscount($total_discount)
    {
        if (is_null($total_discount)) {
            throw new \InvalidArgumentException('non-nullable total_discount cannot be null');
        }
        $this->container['total_discount'] = $total_discount;

        return $this;
    }

    /**
     * Gets total_shipping
     *
     * @return float|null
     */
    public function getTotalShipping()
    {
        return $this->container['total_shipping'];
    }

    /**
     * Sets total_shipping
     *
     * @param float|null $total_shipping Represents the total shipping amount.
     *
     * @return self
     */
    public function setTotalShipping($total_shipping)
    {
        if (is_null($total_shipping)) {
            throw new \InvalidArgumentException('non-nullable total_shipping cannot be null');
        }
        $this->container['total_shipping'] = $total_shipping;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float|null $total_amount Represents the total charge amount.
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        if (is_null($total_amount)) {
            throw new \InvalidArgumentException('non-nullable total_amount cannot be null');
        }
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \DigitalRiver\ApiSdk\Model\Discount|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \DigitalRiver\ApiSdk\Model\Discount|null $discount discount
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        if (is_null($discount)) {
            throw new \InvalidArgumentException('non-nullable discount cannot be null');
        }
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets available_to_refund_amount
     *
     * @return float|null
     */
    public function getAvailableToRefundAmount()
    {
        return $this->container['available_to_refund_amount'];
    }

    /**
     * Sets available_to_refund_amount
     *
     * @param float|null $available_to_refund_amount The available to refund amount at the order-level.
     *
     * @return self
     */
    public function setAvailableToRefundAmount($available_to_refund_amount)
    {
        if (is_null($available_to_refund_amount)) {
            array_push($this->openAPINullablesSetToNull, 'available_to_refund_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('available_to_refund_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['available_to_refund_amount'] = $available_to_refund_amount;

        return $this;
    }

    /**
     * Gets refunded_amount
     *
     * @return float|null
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param float|null $refunded_amount Represents the total payment amount refunded.
     *
     * @return self
     */
    public function setRefundedAmount($refunded_amount)
    {
        if (is_null($refunded_amount)) {
            throw new \InvalidArgumentException('non-nullable refunded_amount cannot be null');
        }
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets cancelled_amount
     *
     * @return float|null
     */
    public function getCancelledAmount()
    {
        return $this->container['cancelled_amount'];
    }

    /**
     * Sets cancelled_amount
     *
     * @param float|null $cancelled_amount Represents the total payment amount cancelled.
     *
     * @return self
     */
    public function setCancelledAmount($cancelled_amount)
    {
        if (is_null($cancelled_amount)) {
            throw new \InvalidArgumentException('non-nullable cancelled_amount cannot be null');
        }
        $this->container['cancelled_amount'] = $cancelled_amount;

        return $this;
    }

    /**
     * Gets captured_amount
     *
     * @return float|null
     */
    public function getCapturedAmount()
    {
        return $this->container['captured_amount'];
    }

    /**
     * Sets captured_amount
     *
     * @param float|null $captured_amount Represents the total payment amount captured.
     *
     * @return self
     */
    public function setCapturedAmount($captured_amount)
    {
        if (is_null($captured_amount)) {
            throw new \InvalidArgumentException('non-nullable captured_amount cannot be null');
        }
        $this->container['captured_amount'] = $captured_amount;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \DigitalRiver\ApiSdk\Model\OrderItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \DigitalRiver\ApiSdk\Model\OrderItem[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets invoice_pdfs
     *
     * @return \DigitalRiver\ApiSdk\Model\File[]|null
     */
    public function getInvoicePdfs()
    {
        return $this->container['invoice_pdfs'];
    }

    /**
     * Sets invoice_pdfs
     *
     * @param \DigitalRiver\ApiSdk\Model\File[]|null $invoice_pdfs An array of links to downloadable PDF invoices. If no invoices exist yet, the array is null.
     *
     * @return self
     */
    public function setInvoicePdfs($invoice_pdfs)
    {
        if (is_null($invoice_pdfs)) {
            array_push($this->openAPINullablesSetToNull, 'invoice_pdfs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('invoice_pdfs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['invoice_pdfs'] = $invoice_pdfs;

        return $this;
    }

    /**
     * Gets credit_memo_pdfs
     *
     * @return \DigitalRiver\ApiSdk\Model\File[]|null
     */
    public function getCreditMemoPdfs()
    {
        return $this->container['credit_memo_pdfs'];
    }

    /**
     * Sets credit_memo_pdfs
     *
     * @param \DigitalRiver\ApiSdk\Model\File[]|null $credit_memo_pdfs An array of links to downloadable PDF credit memos. If no credit memos exist yet, the array is null.
     *
     * @return self
     */
    public function setCreditMemoPdfs($credit_memo_pdfs)
    {
        if (is_null($credit_memo_pdfs)) {
            array_push($this->openAPINullablesSetToNull, 'credit_memo_pdfs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('credit_memo_pdfs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['credit_memo_pdfs'] = $credit_memo_pdfs;

        return $this;
    }

    /**
     * Gets request_to_be_forgotten
     *
     * @return bool|null
     */
    public function getRequestToBeForgotten()
    {
        return $this->container['request_to_be_forgotten'];
    }

    /**
     * Sets request_to_be_forgotten
     *
     * @param bool|null $request_to_be_forgotten If <code>true</code> indicates a user placing an order has requested this order be forgotten.
     *
     * @return self
     */
    public function setRequestToBeForgotten($request_to_be_forgotten)
    {
        if (is_null($request_to_be_forgotten)) {
            throw new \InvalidArgumentException('non-nullable request_to_be_forgotten cannot be null');
        }
        $this->container['request_to_be_forgotten'] = $request_to_be_forgotten;

        return $this;
    }

    /**
     * Gets shipping_choice
     *
     * @return \DigitalRiver\ApiSdk\Model\ShippingChoice|null
     */
    public function getShippingChoice()
    {
        return $this->container['shipping_choice'];
    }

    /**
     * Sets shipping_choice
     *
     * @param \DigitalRiver\ApiSdk\Model\ShippingChoice|null $shipping_choice shipping_choice
     *
     * @return self
     */
    public function setShippingChoice($shipping_choice)
    {
        if (is_null($shipping_choice)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_choice');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_choice', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_choice'] = $shipping_choice;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The current order state.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets state_transitions
     *
     * @return \DigitalRiver\ApiSdk\Model\OrderStateTransitions|null
     */
    public function getStateTransitions()
    {
        return $this->container['state_transitions'];
    }

    /**
     * Sets state_transitions
     *
     * @param \DigitalRiver\ApiSdk\Model\OrderStateTransitions|null $state_transitions state_transitions
     *
     * @return self
     */
    public function setStateTransitions($state_transitions)
    {
        if (is_null($state_transitions)) {
            array_push($this->openAPINullablesSetToNull, 'state_transitions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state_transitions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['state_transitions'] = $state_transitions;

        return $this;
    }

    /**
     * Gets fraud_state
     *
     * @return string|null
     */
    public function getFraudState()
    {
        return $this->container['fraud_state'];
    }

    /**
     * Sets fraud_state
     *
     * @param string|null $fraud_state The fraud review state.
     *
     * @return self
     */
    public function setFraudState($fraud_state)
    {
        if (is_null($fraud_state)) {
            throw new \InvalidArgumentException('non-nullable fraud_state cannot be null');
        }
        $allowedValues = $this->getFraudStateAllowableValues();
        if (!in_array($fraud_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fraud_state', must be one of '%s'",
                    $fraud_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fraud_state'] = $fraud_state;

        return $this;
    }

    /**
     * Gets fraud_state_transitions
     *
     * @return \DigitalRiver\ApiSdk\Model\FraudStateTransitions|null
     */
    public function getFraudStateTransitions()
    {
        return $this->container['fraud_state_transitions'];
    }

    /**
     * Sets fraud_state_transitions
     *
     * @param \DigitalRiver\ApiSdk\Model\FraudStateTransitions|null $fraud_state_transitions fraud_state_transitions
     *
     * @return self
     */
    public function setFraudStateTransitions($fraud_state_transitions)
    {
        if (is_null($fraud_state_transitions)) {
            array_push($this->openAPINullablesSetToNull, 'fraud_state_transitions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fraud_state_transitions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fraud_state_transitions'] = $fraud_state_transitions;

        return $this;
    }

    /**
     * Gets live_mode
     *
     * @return bool|null
     */
    public function getLiveMode()
    {
        return $this->container['live_mode'];
    }

    /**
     * Sets live_mode
     *
     * @param bool|null $live_mode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     *
     * @return self
     */
    public function setLiveMode($live_mode)
    {
        if (is_null($live_mode)) {
            throw new \InvalidArgumentException('non-nullable live_mode cannot be null');
        }
        $this->container['live_mode'] = $live_mode;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,mixed>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,mixed>|null $metadata Key-value pairs used to store additional data. Value can be string, boolean or integer types.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets selling_entity
     *
     * @return \DigitalRiver\ApiSdk\Model\SellingEntity|null
     */
    public function getSellingEntity()
    {
        return $this->container['selling_entity'];
    }

    /**
     * Sets selling_entity
     *
     * @param \DigitalRiver\ApiSdk\Model\SellingEntity|null $selling_entity selling_entity
     *
     * @return self
     */
    public function setSellingEntity($selling_entity)
    {
        if (is_null($selling_entity)) {
            throw new \InvalidArgumentException('non-nullable selling_entity cannot be null');
        }
        $this->container['selling_entity'] = $selling_entity;

        return $this;
    }

    /**
     * Gets purchase_location
     *
     * @return \DigitalRiver\ApiSdk\Model\PurchaseLocation|null
     */
    public function getPurchaseLocation()
    {
        return $this->container['purchase_location'];
    }

    /**
     * Sets purchase_location
     *
     * @param \DigitalRiver\ApiSdk\Model\PurchaseLocation|null $purchase_location purchase_location
     *
     * @return self
     */
    public function setPurchaseLocation($purchase_location)
    {
        if (is_null($purchase_location)) {
            throw new \InvalidArgumentException('non-nullable purchase_location cannot be null');
        }
        $this->container['purchase_location'] = $purchase_location;

        return $this;
    }

    /**
     * Gets customer_type
     *
     * @return \DigitalRiver\ApiSdk\Model\CustomerType|null
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type
     *
     * @param \DigitalRiver\ApiSdk\Model\CustomerType|null $customer_type customer_type
     *
     * @return self
     */
    public function setCustomerType($customer_type)
    {
        if (is_null($customer_type)) {
            throw new \InvalidArgumentException('non-nullable customer_type cannot be null');
        }
        $this->container['customer_type'] = $customer_type;

        return $this;
    }

    /**
     * Gets upstream_id
     *
     * @return string|null
     */
    public function getUpstreamId()
    {
        return $this->container['upstream_id'];
    }

    /**
     * Sets upstream_id
     *
     * @param string|null $upstream_id The upstream identifier.
     *
     * @return self
     */
    public function setUpstreamId($upstream_id)
    {
        if (is_null($upstream_id)) {
            array_push($this->openAPINullablesSetToNull, 'upstream_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('upstream_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['upstream_id'] = $upstream_id;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return \DateTime|null
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param \DateTime|null $updated_time Time at which the order was created.
     *
     * @return self
     */
    public function setUpdatedTime($updated_time)
    {
        if (is_null($updated_time)) {
            throw new \InvalidArgumentException('non-nullable updated_time cannot be null');
        }
        $this->container['updated_time'] = $updated_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


