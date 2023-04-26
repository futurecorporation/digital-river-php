<?php
/**
 * Charge
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
 * If you have a commerce technology in place, the Digital River API allows you to integrate our back-end payments, tax, fraud, and compliance services.  The Digital River API is a RESTful API. That means Digital River designed this API to allow you to retrieve, create, update, and delete objects with the HTTP verbs GET, POST, and DELETE.   You can use the Digital River API in a test environment when you do not want to interact with financial institutions. The API key you use to authenticate a request determines whether the request is in the production environment or test environment.  The Digital River API speaks exclusively in JSON. You should always set the content-type header to `application/json` to ensure the API accepts and processes your requests.  All Digital River API requests are sent to https://<span></span>api.digitalriver.com.  # Explore Digital River Products    <table> <tr>     <td><b>Product</b></td>     <td><b>Description</b></td> </tr> <tr>     <td><a href=\"https://docs.digitalriver.com/digital-river-api/\">Digital River API</a></td>     <td>Explore Digital River&apos;s API suite for Global Seller Services.</td> </tr> <tr>     <td><a href=\"https://docs.digitalriver.com/digital-river-api/payments/payment-integrations-1\">Payment Integrations</a></td>     <td>Explore our payment integration options that allow you to enable payment methods and checkout flows.</td> </tr> </table>   <a name=\"obtaining-credentials\"></a> # Obtaining Digital River API credentials  Before you can start making Digital River API requests, you&apos;ll need to create a test account in the [Dashboard](https://dashboard.digitalriver.com/login). Check out our [Quick Start Guide](https://docs.digitalriver.com/digital-river-api/quick-start-guide) for additional information.       <a name=\"authentication\"></a> # Authentication  The Digital River API authenticates requests using API keys.    Digital River provides secret keys (tokens) for production and test environment in the Digital River API. Each secret key uses a prefix. Use the `sk_test_ prefix` for test environment secret keys and the `sk_ prefix` for production environment secret keys. If you want to apply additional restrictions to access and permissions, you can use restricted API keys.  **Important**&colon; Limit access to your API keys to those who need them. Do not store them in a version control system.  The Java library automatically sends your API key in each request when you assign the API key to `DigitalRiver.apiKey`.  You must send all API requests over HTTPS. Calls sent over plain HTTP will fail. Sending an API request without authentication automatically fails.  <a name=\"api-keys\"></a> # API keys  Digital River uses your account&apos;s API keys to authenticate your API requests. If you do not include your key when you send an API request or use an incorrect or outdated key, Digital River returns an error. See [API keys](https://docs.digitalriver.com/digital-river-api/administration/dashboard/developers/api-keys) in the [Dashboard documentation](https://docs.digitalriver.com/digital-river-api/administration/dashboard) for more information.  ## Get your API keys  To [get your keys](https://docs.digitalriver.com/digital-river-api/getting-started-1#step-1-create-a-test-account), sign in to [Digital River Dashboard](https://dashboard.digitalriver.com/). The API keys page displays your public key and secret key.   # Webhooks Webhooks allow developers to be notified, in near real-time, when specific events occur.  When you register your webhook URLs with Digital River, Digital River creates an Event object and sends webhook events that notify your application any time an event occurs.  The Event object includes the event type and the data associated with that event. Digital River sends the Event object to the endpoint URLs you define in [Dashboard](https://dashboard.digitalriver.com/)&apos;s Webhook settings for your account through an HTTP POST request. You can set up multiple webhook endpoints to receive a single event.  See [Creating a webhook](https://docs.digitalriver.com/digital-river-api/order-management/events-and-webhooks-1/webhooks/creating-a-webhook) to learn how to create a webhook.  ## Event logs To view the webhook events, sign in to [Dashboard](https://dashboard.digitalriver.com/) and click Event logs. The Event logs display the event type, event ID, and timestamp for the event.  <a name=\"metadata\"></a>     # Metadata The metadata parameter stores additional, structured information on an object. You can use the metadata parameter to attach key-value data to the following Digital River resources&colon; SKUs, Checkouts, Orders, Customers, Returns, Refunds, and Fulfillments.  For example, you can store your user&apos;s full name and ID on a Digital River Customer object. Digital River does not use the metadata. Your users will only see this data if you choose to show it to them.  **Note**&colon; Do not store any data that identifies a person, their card information, and so on as metadata.  The metadata parameter supports up to 20 keys. Each key name can be up to 40 characters long&comma; and the values can be up to 500 characters long.  # Pagination All API resources that return lists support bulk fetches. For example, you can use the `limit`, `startingAfter`, and `endingBefore` parameters to list orders, customers, and SKUs.  The `startingBefore` and `endingAfter` parameters both use an object ID value to determine the starting point, and the objects appear in the response in reverse chronological order. To return objects listed before the named object, use the `endingBefore` parameter. To return objects listed after the named object, use the `startingAfter` parameter. If you provide both parameters, the request uses only the `endingBefore` parameter.  ## Parameters  <table> <tr>     <td><b>Parameter</b></td>     <td><b>Description</b></td> </tr> <tr>     <td>limit</td>     <td>The maximum number of objects returned. You can specify a value between 1 and 100.</td> </tr> <tr>     <td>startingAfter</td>     <td>This cursor identifies the pagination starting point in the list based on the object ID. For example, if you send a list request and receive 100 customers ending with `xyz`, your subsequent calls can include `startingAfter=xyz` to fetch the next page of the list.</td> </tr> <tr>     <td>endingBefore</td>     <td>This cursor identifies the pagination starting point in the list based on the object ID. For example, if you send a list request and receive 100 objects starting with `xyz`, your subsequent call can include `endingBefore=xyz` to fetch the previous page of the list.</td> </tr> </table>  ## List response attributes  <table> <tr>     <td><b>Attribute</b></td>     <td><b>Description</b></td> </tr> <tr>     <td>data</td>     <td>This array contains response elements. Any request parameter can paginate the response elements.</td> </tr> <tr>     <td>hasMore</td>     <td>When true, there are more elements available after this set. When false, this set marks the end of the list.</td> </tr> </table>  # Request identifiers  A request identifier is associated with each API request. It appears in the response headers under `x-dr-requestid`. Request identifiers also appear in the URLs of each request log in your [Dashboard](https://dashboard.digitalriver.com/).  **Note**&colon; Contact us if you have a question about a specific request. To ensure a quick solution, include the request identifier.  # Versioning  Your account&apos;s API version determines the structure of events generated by API requests. All versions with breaking changes are dated.  All requests will use the version pinned to your account API settings. It only changes when you upgrade to the latest API version.   Select a version of the library to change the API version used and create a webhook endpoint with the same API version as `DigitalRiver.API_VERSION` property in the library. Use the [Changelog](https://docs.digitalriver.com/digital-river-api/general-resources/release-notes) to  find the API version you need and view all breaking changes.  You can test a single API request without upgrading your API key.  To set an API version with a specific request, send a `DigitalRiver-Version` header, for example:  `digitalriver-version=2020-09-30`  <a name=\"errors\"></a> # Response status codes  Digital River uses HTTP response status codes. These codes indicate whether an API request succeeded or failed. HTTP status codes group responses into the following classes&colon;  * The `2xx` range indicates success.  * The `4xx` range indicates an error that failed based on the provided information provided (for example, you omitted a parameter or a charge failed).  * The `5xx` range indicates an error with Digital River&apos;s servers.  * You can handle some `4xx` errors programmatically to include an error code that briefly explains the error reported (for example, include an error code when you decline a card).  <a name=\"error-types\"></a> ## Error types  <table> <tr>     <td><b>Type</b></td>     <td><b>Description</b></td> </tr> <tr>     <td>bad_request</td>     <td>The server could not process the request due to a client error (for example, malformed request syntax). Correct the problem and try again.</td> </tr>    <tr>     <td>not_found</td>     <td>The server can’t find the requested resource. No indication is given of whether the condition is temporary or permanent.</td> </tr> <tr>     <td>request_timeout</td>     <td>The client did not produce the request within the time that the server was prepared to wait. Resend the request without modifications at any later time.</td> </tr> <tr>     <td>internal_server_error</td>     <td>The server encountered an unexpected problem that prevented it from fulfilling the request.</td> </tr>     <tr>     <td>unauthorized</td>     <td>The request requires user authentication. Resend the request with valid user authentication.</td> </tr>     <tr>     <td>too_many_requests</td>     <td>The user sent too many requests in a given amount of time (&ldquo;rate limiting&rdquo;). The response should include details explaining the condition and may include a Retry-After header indicating how long to wait before sending a new request.</td> </tr>     <tr>     <td>conflict</td>     <td>There is a request conflict with the current state of the server.      Conflicts are most likely to occur in response to a PUT request. For example, you may get a 409 response when uploading a file that is older than the one already on the server resulting in a version control conflict. </td> </tr>     <tr>     <td>validation_error</td>     <td>Errors triggered by our client-side libraries when failing to validate fields (for example, when a card number or expiration date is invalid or incomplete).  Used by&colon; DigitalRiver.js</td> </tr>     <tr>     <td>no_network</td>     <td>There is no network coverage or cellular data connection.</td> </tr>     </table>  <a name=\"error-codes\"></a> ## Error codes  The following table contains a list of API error codes.  **Note**&colon; Do not share the error's <code>code</code> with customers. Doing so may aid fradulent and malicious actors.  <table> <tr>     <td><b>Code</b></td>     <td><b>Description</b></td> </tr> <tr>     <td>account_closed</td>     <td>Stop all billing as this account is closed.</td> </tr> <tr>     <td>already_exists</td>     <td>The item you tried to create already exists.</td> </tr> <tr>     <td>amount_too_large</td>     <td>The given amount is too large. Provide a smaller amount and try again.</td> </tr> <tr>     <td>api_key_expired</td>     <td>The API key has expired.</td> </tr>     <tr>     <td>card_expired</td>     <td>The card has expired. Provide valid card information and try again.</td> </tr>     <tr>     <td>card_limit_exceeded</td>     <td>The transaction exceeds the card limit amount.</td> </tr> <tr>     <td>card_type_block</td>     <td>The merchant has blocked this card type.</td> </tr>     <tr>     <td>card_velocity_exceeded</td>     <td>The transaction exceeds the card velocity amount.</td> </tr> <tr>     <td>charge_expired</td>     <td>The charge has expired. Provide valid charge information and try again.</td> </tr>     <tr>     <td>charge_not_capturable</td>     <td>The charge could not be captured.</td> </tr> <tr>     <td>country_restricted</td>     <td>A user provided a restricted country. Make sure that users can only sign up from supported countries.</td> </tr>  <tr>     <td>create-order-failed</td>     <td>The order is missing required details and could not be completed.</td> </tr>      <tr>     <td>currency_unsupported</td>     <td>The currency provided is not supported. Provide a supported currency and try again.</td> </tr> <tr>     <td>declined</td>     <td>The card has been declined for an unknown reason.</td> </tr>     <tr>     <td>do_not_honor</td>     <td>The card issuing bank has declined this payment.</td> </tr> <tr>     <td>email_invalid</td>     <td>The email address is invalid. Provide a valid email address and try again.</td> </tr> <tr>     <td>failed-request</td>     <td>Failed to charge source.</td> </tr> <tr>     <td>fraud</td>     <td>The transaction has been identified by the issuing bank as fraudulent.</td> </tr> <tr>     <td>fraud_block</td>     <td>The transaction has been identified by Digital River as fraudulent.</td> </tr>     <tr>     <td>invalid_address</td>     <td>The address does not match the card network's records.</td> </tr> <tr>     <td>invalid_amount</td>     <td>The amount is not accepted by the card network.</td> </tr>     <tr>     <td>invalid_boolean</td>     <td>The boolean value is invalid. Provide a valid boolean value and try again.</td> </tr> <tr>     <td>invalid_card_bin</td>     <td>The card bin is invalid.</td> </tr>     <tr>     <td>invalid_card_number</td>     <td>The card number entered is invalid.</td> </tr> <tr>     <td>invalid_currency</td>     <td>This currency is not supported.</td> </tr>     <tr>     <td>invalid_empty</td>     <td>The empty value is invalid. Provide a valid value and try again.</td> </tr> <tr>     <td>invalid_expiration_date</td>     <td>The card is expired, or the expiration date is invalid. This validation message indicates the expiration date did not meet basic validation requirements (for example, the date is in the past, incorrect month, missing year, and so on).</td> </tr>   <tr>     <td>invalid_format</td>     <td>The format of your request is invalid.</td> </tr>      <tr>     <td>invalid_integer</td>     <td>The integer value is valid. Provide a value integer value and try again.</td> </tr> <tr>     <td>invalid_metadata_key</td>     <td>The metadata key is invalid. Provide a value metadata key and try again.</td> </tr>       <tr>     <td>invalid_metadata_value</td>     <td>The value provided for the metadata was invalid.</td> </tr> <tr>     <td>invalid_parameter</td>     <td>The parameter is invalid. Check our API Reference to see which values are valid and try again.</td> </tr>       <tr>     <td>invalid_pin</td>     <td>The PIN provided is invalid or incorrect.invalid_quantity_amount</td> </tr> <tr>     <td>invalid_quantity_amount</td>     <td>The quantity provided in the request was invalid. Check our API Reference to see what is a valid quantity and try again.</td> </tr>       <tr>     <td>invalid_security_code</td>     <td>The security code provided is invalid or incorrect.</td> </tr> <tr>     <td>invalid_shipping_choice</td>     <td>The shipping choice is invalid. Provide a valid shipping choice and try again.</td> </tr>       <tr>     <td>invalid_string_blank</td>     <td>The string value is blank. Provide a valid string value and try again.</td> </tr> <tr>     <td>invalid_string_empty</td>     <td>The string value is empty. Provide a valid string value and try again.</td> </tr>       <tr>     <td>invalid_transaction_type</td>     <td>The transaction type is invalid.</td> </tr> <tr>     <td>issuer_invalid_card</td>     <td>The card does not exist with the issuer.</td> </tr>       <tr>     <td>issuer_not_found</td>     <td>The card issuer does not exist.</td> </tr> <tr>     <td>issuer_unavailable</td>     <td>The card issuing bank could not be reached.</td> </tr>       <tr>     <td>insufficient_funds</td>     <td>The card has insufficient funds to complete the purchase.</td> </tr> <tr>     <td>limit_exceeded</td>     <td>The transaction amount exceeds your assigned limit.</td> </tr>       <tr>     <td>lost_stolen_card</td>     <td>The issuing bank has marked this card lost or stolen.</td> </tr> <tr>     <td>method_not_allowed</td>     <td>The method is not allowed. Provide a valid method value and try again.</td> </tr>     <tr>     <td>mid_limit_exceeded</td>     <td>The transaction amount exceeds the limit assigned for this MID.</td> </tr>       <tr>     <td>missing_parameter</td>     <td>A parameter is missing. Check our API Reference to see which values are required and try again.</td> </tr> <tr>     <td>no_response</td>     <td>The payment processor did not respond.</td> </tr>       <tr>     <td>not_found</td>     <td>The item requested was not found.</td> </tr>   <tr>     <td>order_already_complete</td>     <td>The specified orderId is already complete.</td> </tr>   <tr>     <td>order_submit_failed</td>     <td>The payment session status is invalid.</td> </tr>   <tr>     <td>out_of_inventory</td>     <td>The item is not in inventory.</td> </tr>  <tr>   <td>payment_authorization_failed</td>   <td>The payment authorization failed</td> </tr> <tr>     <td>pin_try_exceeded</td>     <td>The bank's allowable number of PIN tries has been exceeded.</td> </tr>     <tr>     <td>plan_not_active</td>     <td>The plan is not in an active state.</td> </tr> <tr>     <td>postal_code_invalid</td>     <td>The postal code is invalid. Enter a valid postal code and try again.</td> </tr>       <tr>     <td>restricted_card</td>     <td>Restricted by the card network.</td> </tr> <tr>     <td>restricted_update</td>     <td>Additional data cannot be included in the update request</td> </tr>   <tr>     <td>sku_inactive</td>     <td>The given SKU is inactive. Provide an active SKU and try again.</td> </tr>       <tr>     <td>source_expired</td>     <td>The source provided has expired. Check Sources to see which sources have not expired and try again.     </td> </tr> <tr>     <td>source_not_chargeable</td>     <td>The source provided is not chargeable. Check Sources to see which sources are chargeable and try again.</td> </tr>       <tr>     <td>source_not_found</td>     <td>The source you have requested was not found.</td> </tr> <tr>     <td>source_status_invalid_for_session</td>     <td>The source status is invalid for this session.</td> </tr>  <tr>     <td>stop_recurring</td>     <td>The cardholder has requested all recurring and / or installment charges to be stopped.</td> </tr>     <tr>     <td>tax_id_invalid</td>     <td>The tax identifier is not valid. Correct the tax identifier and try again.</td> </tr>       <tr>     <td>too_many_metadata_pairs</td>     <td>The request contained too many metadata pairs.</td> </tr> <tr>     <td>unknown_error</td>     <td>An unknown error has occurred.</td> </tr>      <tr>     <td>unknown_parameter</td>     <td>The request contains an unknown parameter. Check our API Reference to see which values are required and try again.</td> </tr>   <tr>     <td>voice_authorization_required</td>     <td>The request request requires voice authorization before it can be authorized.</td> </tr>     </table>  <br><br>Updated at 2023-04-13T20:41:59.090541Z.
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
 * Charge Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Charge implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Charge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_time' => '\DateTime',
        'currency' => 'string',
        'amount' => 'float',
        'state' => 'string',
        'order_id' => 'string',
        'source_id' => 'string',
        'failure_code' => 'string',
        'failure_message' => 'string',
        'payment_session_id' => 'string',
        'cancels' => '\DigitalRiver\ApiSdk\Model\Cancel[]',
        'captures' => '\DigitalRiver\ApiSdk\Model\Capture[]',
        'captured' => 'bool',
        'refunds' => '\DigitalRiver\ApiSdk\Model\Refund[]',
        'refunded' => 'bool',
        'type' => 'string',
        'live_mode' => 'bool'
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
        'created_time' => 'date-time',
        'currency' => null,
        'amount' => 'double',
        'state' => null,
        'order_id' => null,
        'source_id' => null,
        'failure_code' => null,
        'failure_message' => null,
        'payment_session_id' => null,
        'cancels' => null,
        'captures' => null,
        'captured' => null,
        'refunds' => null,
        'refunded' => null,
        'type' => null,
        'live_mode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'created_time' => false,
		'currency' => false,
		'amount' => false,
		'state' => false,
		'order_id' => false,
		'source_id' => false,
		'failure_code' => false,
		'failure_message' => false,
		'payment_session_id' => false,
		'cancels' => false,
		'captures' => false,
		'captured' => false,
		'refunds' => false,
		'refunded' => false,
		'type' => false,
		'live_mode' => false
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
        'created_time' => 'createdTime',
        'currency' => 'currency',
        'amount' => 'amount',
        'state' => 'state',
        'order_id' => 'orderId',
        'source_id' => 'sourceId',
        'failure_code' => 'failureCode',
        'failure_message' => 'failureMessage',
        'payment_session_id' => 'paymentSessionId',
        'cancels' => 'cancels',
        'captures' => 'captures',
        'captured' => 'captured',
        'refunds' => 'refunds',
        'refunded' => 'refunded',
        'type' => 'type',
        'live_mode' => 'liveMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_time' => 'setCreatedTime',
        'currency' => 'setCurrency',
        'amount' => 'setAmount',
        'state' => 'setState',
        'order_id' => 'setOrderId',
        'source_id' => 'setSourceId',
        'failure_code' => 'setFailureCode',
        'failure_message' => 'setFailureMessage',
        'payment_session_id' => 'setPaymentSessionId',
        'cancels' => 'setCancels',
        'captures' => 'setCaptures',
        'captured' => 'setCaptured',
        'refunds' => 'setRefunds',
        'refunded' => 'setRefunded',
        'type' => 'setType',
        'live_mode' => 'setLiveMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_time' => 'getCreatedTime',
        'currency' => 'getCurrency',
        'amount' => 'getAmount',
        'state' => 'getState',
        'order_id' => 'getOrderId',
        'source_id' => 'getSourceId',
        'failure_code' => 'getFailureCode',
        'failure_message' => 'getFailureMessage',
        'payment_session_id' => 'getPaymentSessionId',
        'cancels' => 'getCancels',
        'captures' => 'getCaptures',
        'captured' => 'getCaptured',
        'refunds' => 'getRefunds',
        'refunded' => 'getRefunded',
        'type' => 'getType',
        'live_mode' => 'getLiveMode'
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

    public const STATE_PENDING = 'pending';
    public const STATE_CAPTURABLE = 'capturable';
    public const STATE_PROCESSING = 'processing';
    public const STATE_COMPLETE = 'complete';
    public const STATE_CANCELLED = 'cancelled';
    public const STATE_FAILED = 'failed';
    public const TYPE_CUSTOMER_INITIATED = 'customer_initiated';
    public const TYPE_MERCHANT_INITIATED = 'merchant_initiated';
    public const TYPE_MOTO = 'moto';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_CAPTURABLE,
            self::STATE_PROCESSING,
            self::STATE_COMPLETE,
            self::STATE_CANCELLED,
            self::STATE_FAILED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CUSTOMER_INITIATED,
            self::TYPE_MERCHANT_INITIATED,
            self::TYPE_MOTO,
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
        $this->setIfExists('created_time', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('failure_code', $data ?? [], null);
        $this->setIfExists('failure_message', $data ?? [], null);
        $this->setIfExists('payment_session_id', $data ?? [], null);
        $this->setIfExists('cancels', $data ?? [], null);
        $this->setIfExists('captures', $data ?? [], null);
        $this->setIfExists('captured', $data ?? [], null);
        $this->setIfExists('refunds', $data ?? [], null);
        $this->setIfExists('refunded', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('live_mode', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * @param string|null $id The unique identifier of the charge.
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
     * @param \DateTime|null $created_time The time when the charge was created.
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
     * @param string|null $currency A three-letter ISO 4217 currency code.
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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount An amount representing how much is to be to charged.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

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
     * @param string|null $state The state of the charge.
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
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id The identifier of the associated order.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string|null $source_id The identifier of the source.
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        if (is_null($source_id)) {
            throw new \InvalidArgumentException('non-nullable source_id cannot be null');
        }
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets failure_code
     *
     * @return string|null
     */
    public function getFailureCode()
    {
        return $this->container['failure_code'];
    }

    /**
     * Sets failure_code
     *
     * @param string|null $failure_code Error code identifying reason for charge failure.
     *
     * @return self
     */
    public function setFailureCode($failure_code)
    {
        if (is_null($failure_code)) {
            throw new \InvalidArgumentException('non-nullable failure_code cannot be null');
        }
        $this->container['failure_code'] = $failure_code;

        return $this;
    }

    /**
     * Gets failure_message
     *
     * @return string|null
     */
    public function getFailureMessage()
    {
        return $this->container['failure_message'];
    }

    /**
     * Sets failure_message
     *
     * @param string|null $failure_message Error message describing reason for charge failure.
     *
     * @return self
     */
    public function setFailureMessage($failure_message)
    {
        if (is_null($failure_message)) {
            throw new \InvalidArgumentException('non-nullable failure_message cannot be null');
        }
        $this->container['failure_message'] = $failure_message;

        return $this;
    }

    /**
     * Gets payment_session_id
     *
     * @return string|null
     */
    public function getPaymentSessionId()
    {
        return $this->container['payment_session_id'];
    }

    /**
     * Sets payment_session_id
     *
     * @param string|null $payment_session_id Tracks the process of collecting a payment.
     *
     * @return self
     */
    public function setPaymentSessionId($payment_session_id)
    {
        if (is_null($payment_session_id)) {
            throw new \InvalidArgumentException('non-nullable payment_session_id cannot be null');
        }
        $this->container['payment_session_id'] = $payment_session_id;

        return $this;
    }

    /**
     * Gets cancels
     *
     * @return \DigitalRiver\ApiSdk\Model\Cancel[]|null
     */
    public function getCancels()
    {
        return $this->container['cancels'];
    }

    /**
     * Sets cancels
     *
     * @param \DigitalRiver\ApiSdk\Model\Cancel[]|null $cancels cancels
     *
     * @return self
     */
    public function setCancels($cancels)
    {
        if (is_null($cancels)) {
            throw new \InvalidArgumentException('non-nullable cancels cannot be null');
        }
        $this->container['cancels'] = $cancels;

        return $this;
    }

    /**
     * Gets captures
     *
     * @return \DigitalRiver\ApiSdk\Model\Capture[]|null
     */
    public function getCaptures()
    {
        return $this->container['captures'];
    }

    /**
     * Sets captures
     *
     * @param \DigitalRiver\ApiSdk\Model\Capture[]|null $captures captures
     *
     * @return self
     */
    public function setCaptures($captures)
    {
        if (is_null($captures)) {
            throw new \InvalidArgumentException('non-nullable captures cannot be null');
        }
        $this->container['captures'] = $captures;

        return $this;
    }

    /**
     * Gets captured
     *
     * @return bool|null
     */
    public function getCaptured()
    {
        return $this->container['captured'];
    }

    /**
     * Sets captured
     *
     * @param bool|null $captured Indicates if the charge has been captured.
     *
     * @return self
     */
    public function setCaptured($captured)
    {
        if (is_null($captured)) {
            throw new \InvalidArgumentException('non-nullable captured cannot be null');
        }
        $this->container['captured'] = $captured;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \DigitalRiver\ApiSdk\Model\Refund[]|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \DigitalRiver\ApiSdk\Model\Refund[]|null $refunds refunds
     *
     * @return self
     */
    public function setRefunds($refunds)
    {
        if (is_null($refunds)) {
            throw new \InvalidArgumentException('non-nullable refunds cannot be null');
        }
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets refunded
     *
     * @return bool|null
     */
    public function getRefunded()
    {
        return $this->container['refunded'];
    }

    /**
     * Sets refunded
     *
     * @param bool|null $refunded Indicates if the charge has been refunded.
     *
     * @return self
     */
    public function setRefunded($refunded)
    {
        if (is_null($refunded)) {
            throw new \InvalidArgumentException('non-nullable refunded cannot be null');
        }
        $this->container['refunded'] = $refunded;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of charge.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * @param bool|null $live_mode Has the value <code>true</code> if the object exists in live mode and the value <code>false</code> if the object exists in test mode.
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


