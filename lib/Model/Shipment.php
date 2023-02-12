<?php
/**
 * Shipment
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
 * If you have a commerce technology in place, the Digital River API allows you to integrate our back-end payments, tax, fraud, and compliance services.  The Digital River API is a RESTful API. That means Digital River designed this API to allow you to retrieve, create, update, and delete objects with the HTTP verbs GET, POST, and DELETE.   You can use the Digital River API in a test environment when you do not want to interact with financial institutions. The API key you use to authenticate a request determines whether the request is in the production environment or test environment.  The Digital River API speaks exclusively in JSON. You should always set the content-type header to `application/json` to ensure the API accepts and processes your requests.  All Digital River API requests are sent to https://<span></span>api.digitalriver.com.  # Explore Digital River Products    <table> <tr>     <td><b>Product</b></td>     <td><b>Description</b></td> </tr> <tr>     <td><a href=\"https://docs.digitalriver.com/digital-river-api/\">Digital River API</a></td>     <td>Explore Digital River&apos;s API suite for Global Seller Services.</td> </tr> <tr>     <td><a href=\"https://docs.digitalriver.com/digital-river-api/payments/payment-integrations-1\">Payment Integrations</a></td>     <td>Explore our payment integration options that allow you to enable payment methods and checkout flows.</td> </tr> </table>   <a name=\"obtaining-credentials\"></a> # Obtaining Digital River API credentials  Before you can start making Digital River API requests, you&apos;ll need to create a test account in the [Dashboard](https://dashboard.digitalriver.com/login). Check out our [Quick Start Guide](https://docs.digitalriver.com/digital-river-api/quick-start-guide) for additional information.       <a name=\"authentication\"></a> # Authentication  The Digital River API authenticates requests using API keys.    Digital River provides secret keys (tokens) for production and test environment in the Digital River API. Each secret key uses a prefix. Use the `sk_test_ prefix` for test environment secret keys and the `sk_ prefix` for production environment secret keys. If you want to apply additional restrictions to access and permissions, you can use restricted API keys.  **Important**&colon; Limit access to your API keys to those who need them. Do not store them in a version control system.  The Java library automatically sends your API key in each request when you assign the API key to `DigitalRiver.apiKey`.  You must send all API requests over HTTPS. Calls sent over plain HTTP will fail. Sending an API request without authentication automatically fails.  <a name=\"api-keys\"></a> # API keys  Digital River uses your account&apos;s API keys to authenticate your API requests. If you do not include your key when you send an API request or use an incorrect or outdated key, Digital River returns an error. See [API keys](https://docs.digitalriver.com/digital-river-api/administration/dashboard/developers/api-keys) in the [Dashboard documentation](https://docs.digitalriver.com/digital-river-api/administration/dashboard) for more information.  ## Get your API keys  To [get your keys](https://docs.digitalriver.com/digital-river-api/getting-started-1#step-1-create-a-test-account), sign in to [Digital River Dashboard](https://dashboard.digitalriver.com/). The API keys page displays your public key and secret key.   # Webhooks Webhooks allow developers to be notified, in near real-time, when specific events occur.  When you register your webhook URLs with Digital River, Digital River creates an Event object and sends webhook events that notify your application any time an event occurs.  The Event object includes the event type and the data associated with that event. Digital River sends the Event object to the endpoint URLs you define in [Dashboard](https://dashboard.digitalriver.com/)&apos;s Webhook settings for your account through an HTTP POST request. You can set up multiple webhook endpoints to receive a single event.  See [Creating a webhook](https://docs.digitalriver.com/digital-river-api/order-management/events-and-webhooks-1/webhooks/creating-a-webhook) to learn how to create a webhook.  ## Event logs To view the webhook events, sign in to [Dashboard](https://dashboard.digitalriver.com/) and click Event logs. The Event logs display the event type, event ID, and timestamp for the event.  <a name=\"metadata\"></a>     # Metadata The metadata parameter stores additional, structured information on an object. You can use the metadata parameter to attach key-value data to the following Digital River resources&colon; SKUs, Checkouts, Orders, Customers, Returns, Refunds, and Fulfillments.  For example, you can store your user&apos;s full name and ID on a Digital River Customer object. Digital River does not use the metadata. Your users will only see this data if you choose to show it to them.  **Note**&colon; Do not store any data that identifies a person, their card information, and so on as metadata.  The metadata parameter supports up to 20 keys. Each key name can be up to 40 characters long&comma; and the values can be up to 500 characters long.  # Pagination All API resources that return lists support bulk fetches. For example, you can use the `limit`, `startingAfter`, and `endingBefore` parameters to list orders, customers, and SKUs.  The `startingBefore` and `endingAfter` parameters both use an object ID value to determine the starting point, and the objects appear in the response in reverse chronological order. To return objects listed before the named object, use the `endingBefore` parameter. To return objects listed after the named object, use the `startingAfter` parameter. If you provide both parameters, the request uses only the `endingBefore` parameter.  ## Parameters  <table> <tr>     <td><b>Parameter</b></td>     <td><b>Description</b></td> </tr> <tr>     <td>limit</td>     <td>The maximum number of objects returned. You can specify a value between 1 and 100.</td> </tr> <tr>     <td>startingAfter</td>     <td>This cursor identifies the pagination starting point in the list based on the object ID. For example, if you send a list request and receive 100 customers ending with `xyz`, your subsequent calls can include `startingAfter=xyz` to fetch the next page of the list.</td> </tr> <tr>     <td>endingBefore</td>     <td>This cursor identifies the pagination starting point in the list based on the object ID. For example, if you send a list request and receive 100 objects starting with `xyz`, your subsequent call can include `endingBefore=xyz` to fetch the previous page of the list.</td> </tr> </table>  ## List response attributes  <table> <tr>     <td><b>Attribute</b></td>     <td><b>Description</b></td> </tr> <tr>     <td>data</td>     <td>This array contains response elements. Any request parameter can paginate the response elements.</td> </tr> <tr>     <td>hasMore</td>     <td>When true, there are more elements available after this set. When false, this set marks the end of the list.</td> </tr> </table>  # Request identifiers  A request identifier is associated with each API request. It appears in the response headers under `x-dr-requestid`. Request identifiers also appear in the URLs of each request log in your [Dashboard](https://dashboard.digitalriver.com/).  **Note**&colon; Contact us if you have a question about a specific request. To ensure a quick solution, include the request identifier.  # Versioning  Your account&apos;s API version determines the structure of events generated by API requests. All versions with breaking changes are dated.  All requests will use the version pinned to your account API settings. It only changes when you upgrade to the latest API version.   Select a version of the library to change the API version used and create a webhook endpoint with the same API version as `DigitalRiver.API_VERSION` property in the library. Use the [Changelog](https://docs.digitalriver.com/digital-river-api/general-resources/release-notes) to  find the API version you need and view all breaking changes.  You can test a single API request without upgrading your API key.  To set an API version with a specific request, send a `DigitalRiver-Version` header, for example:  `digitalriver-version=2020-09-30`  <a name=\"errors\"></a> # Response status codes  Digital River uses HTTP response status codes. These codes indicate whether an API request succeeded or failed. HTTP status codes group responses into the following classes&colon;  * The `2xx` range indicates success.  * The `4xx` range indicates an error that failed based on the provided information provided (for example, you omitted a parameter or a charge failed).  * The `5xx` range indicates an error with Digital River&apos;s servers.  * You can handle some `4xx` errors programmatically to include an error code that briefly explains the error reported (for example, include an error code when you decline a card).  <a name=\"error-types\"></a> ## Error types  <table> <tr>     <td><b>Type</b></td>     <td><b>Description</b></td> </tr> <tr>     <td>bad_request</td>     <td>The server could not process the request due to a client error (for example, malformed request syntax). Correct the problem and try again.</td> </tr>    <tr>     <td>not_found</td>     <td>The server can’t find the requested resource. No indication is given of whether the condition is temporary or permanent.</td> </tr> <tr>     <td>request_timeout</td>     <td>The client did not produce the request within the time that the server was prepared to wait. Resend the request without modifications at any later time.</td> </tr> <tr>     <td>internal_server_error</td>     <td>The server encountered an unexpected problem that prevented it from fulfilling the request.</td> </tr>     <tr>     <td>unauthorized</td>     <td>The request requires user authentication. Resend the request with valid user authentication.</td> </tr>     <tr>     <td>too_many_requests</td>     <td>The user sent too many requests in a given amount of time (&ldquo;rate limiting&rdquo;). The response should include details explaining the condition and may include a Retry-After header indicating how long to wait before sending a new request.</td> </tr>     <tr>     <td>conflict</td>     <td>There is a request conflict with the current state of the server.      Conflicts are most likely to occur in response to a PUT request. For example, you may get a 409 response when uploading a file that is older than the one already on the server resulting in a version control conflict. </td> </tr>     <tr>     <td>validation_error</td>     <td>Errors triggered by our client-side libraries when failing to validate fields (for example, when a card number or expiration date is invalid or incomplete).  Used by&colon; DigitalRiver.js</td> </tr>     <tr>     <td>no_network</td>     <td>There is no network coverage or cellular data connection.</td> </tr>     </table>  <a name=\"error-codes\"></a> ## Error codes  The following table contains a list of API error codes.  **Note**&colon; Do not share the error's <code>code</code> with customers. Doing so may aid fradulent and malicious actors.  <table> <tr>     <td><b>Code</b></td>     <td><b>Description</b></td> </tr> <tr>     <td>account_closed</td>     <td>Stop all billing as this account is closed.</td> </tr> <tr>     <td>already_exists</td>     <td>The item you tried to create already exists.</td> </tr> <tr>     <td>amount_too_large</td>     <td>The given amount is too large. Provide a smaller amount and try again.</td> </tr> <tr>     <td>api_key_expired</td>     <td>The API key has expired.</td> </tr>     <tr>     <td>card_expired</td>     <td>The card has expired. Provide valid card information and try again.</td> </tr>     <tr>     <td>card_limit_exceeded</td>     <td>The transaction exceeds the card limit amount.</td> </tr> <tr>     <td>card_type_block</td>     <td>The merchant has blocked this card type.</td> </tr>     <tr>     <td>card_velocity_exceeded</td>     <td>The transaction exceeds the card velocity amount.</td> </tr> <tr>     <td>charge_expired</td>     <td>The charge has expired. Provide valid charge information and try again.</td> </tr>     <tr>     <td>charge_not_capturable</td>     <td>The charge could not be captured.</td> </tr> <tr>     <td>country_restricted</td>     <td>A user provided a restricted country. Make sure that users can only sign up from supported countries.</td> </tr>  <tr>     <td>create-order-failed</td>     <td>The order is missing required details and could not be completed.</td> </tr>      <tr>     <td>currency_unsupported</td>     <td>The currency provided is not supported. Provide a supported currency and try again.</td> </tr> <tr>     <td>declined</td>     <td>The card has been declined for an unknown reason.</td> </tr>     <tr>     <td>do_not_honor</td>     <td>The card issuing bank has declined this payment.</td> </tr> <tr>     <td>email_invalid</td>     <td>The email address is invalid. Provide a valid email address and try again.</td> </tr> <tr>     <td>failed-request</td>     <td>Failed to charge source.</td> </tr> <tr>     <td>fraud</td>     <td>The transaction has been identified by the issuing bank as fraudulent.</td> </tr> <tr>     <td>fraud_block</td>     <td>The transaction has been identified by Digital River as fraudulent.</td> </tr>     <tr>     <td>invalid_address</td>     <td>The address does not match the card network's records.</td> </tr> <tr>     <td>invalid_amount</td>     <td>The amount is not accepted by the card network.</td> </tr>     <tr>     <td>invalid_boolean</td>     <td>The boolean value is invalid. Provide a valid boolean value and try again.</td> </tr> <tr>     <td>invalid_card_bin</td>     <td>The card bin is invalid.</td> </tr>     <tr>     <td>invalid_card_number</td>     <td>The card number entered is invalid.</td> </tr> <tr>     <td>invalid_currency</td>     <td>This currency is not supported.</td> </tr>     <tr>     <td>invalid_empty</td>     <td>The empty value is invalid. Provide a valid value and try again.</td> </tr> <tr>     <td>invalid_expiration_date</td>     <td>The card is expired, or the expiration date is invalid. This validation message indicates the expiration date did not meet basic validation requirements (for example, the date is in the past, incorrect month, missing year, and so on).</td> </tr>   <tr>     <td>invalid_format</td>     <td>The format of your request is invalid.</td> </tr>      <tr>     <td>invalid_integer</td>     <td>The integer value is valid. Provide a value integer value and try again.</td> </tr> <tr>     <td>invalid_metadata_key</td>     <td>The metadata key is invalid. Provide a value metadata key and try again.</td> </tr>       <tr>     <td>invalid_metadata_value</td>     <td>The value provided for the metadata was invalid.</td> </tr> <tr>     <td>invalid_parameter</td>     <td>The parameter is invalid. Check our API Reference to see which values are valid and try again.</td> </tr>       <tr>     <td>invalid_pin</td>     <td>The PIN provided is invalid or incorrect.invalid_quantity_amount</td> </tr> <tr>     <td>invalid_quantity_amount</td>     <td>The quantity provided in the request was invalid. Check our API Reference to see what is a valid quantity and try again.</td> </tr>       <tr>     <td>invalid_security_code</td>     <td>The security code provided is invalid or incorrect.</td> </tr> <tr>     <td>invalid_shipping_choice</td>     <td>The shipping choice is invalid. Provide a valid shipping choice and try again.</td> </tr>       <tr>     <td>invalid_string_blank</td>     <td>The string value is blank. Provide a valid string value and try again.</td> </tr> <tr>     <td>invalid_string_empty</td>     <td>The string value is empty. Provide a valid string value and try again.</td> </tr>       <tr>     <td>invalid_transaction_type</td>     <td>The transaction type is invalid.</td> </tr> <tr>     <td>issuer_invalid_card</td>     <td>The card does not exist with the issuer.</td> </tr>       <tr>     <td>issuer_not_found</td>     <td>The card issuer does not exist.</td> </tr> <tr>     <td>issuer_unavailable</td>     <td>The card issuing bank could not be reached.</td> </tr>       <tr>     <td>insufficient_funds</td>     <td>The card has insufficient funds to complete the purchase.</td> </tr> <tr>     <td>limit_exceeded</td>     <td>The transaction amount exceeds your assigned limit.</td> </tr>       <tr>     <td>lost_stolen_card</td>     <td>The issuing bank has marked this card lost or stolen.</td> </tr> <tr>     <td>method_not_allowed</td>     <td>The method is not allowed. Provide a valid method value and try again.</td> </tr>     <tr>     <td>mid_limit_exceeded</td>     <td>The transaction amount exceeds the limit assigned for this MID.</td> </tr>       <tr>     <td>missing_parameter</td>     <td>A parameter is missing. Check our API Reference to see which values are required and try again.</td> </tr> <tr>     <td>no_response</td>     <td>The payment processor did not respond.</td> </tr>       <tr>     <td>not_found</td>     <td>The item requested was not found.</td> </tr>   <tr>     <td>order_already_complete</td>     <td>The specified orderId is already complete.</td> </tr>   <tr>     <td>order_submit_failed</td>     <td>The payment session status is invalid.</td> </tr>   <tr>     <td>out_of_inventory</td>     <td>The item is not in inventory.</td> </tr>  <tr>   <td>payment_authorization_failed</td>   <td>The payment authorization failed</td> </tr> <tr>     <td>pin_try_exceeded</td>     <td>The bank's allowable number of PIN tries has been exceeded.</td> </tr>     <tr>     <td>plan_not_active</td>     <td>The plan is not in an active state.</td> </tr> <tr>     <td>postal_code_invalid</td>     <td>The postal code is invalid. Enter a valid postal code and try again.</td> </tr>       <tr>     <td>restricted_card</td>     <td>Restricted by the card network.</td> </tr> <tr>     <td>restricted_update</td>     <td>Additional data cannot be included in the update request</td> </tr>   <tr>     <td>sku_inactive</td>     <td>The given SKU is inactive. Provide an active SKU and try again.</td> </tr>       <tr>     <td>source_expired</td>     <td>The source provided has expired. Check Sources to see which sources have not expired and try again.     </td> </tr> <tr>     <td>source_not_chargeable</td>     <td>The source provided is not chargeable. Check Sources to see which sources are chargeable and try again.</td> </tr>       <tr>     <td>source_not_found</td>     <td>The source you have requested was not found.</td> </tr> <tr>     <td>source_status_invalid_for_session</td>     <td>The source status is invalid for this session.</td> </tr>  <tr>     <td>stop_recurring</td>     <td>The cardholder has requested all recurring and / or installment charges to be stopped.</td> </tr>     <tr>     <td>tax_id_invalid</td>     <td>The tax identifier is not valid. Correct the tax identifier and try again.</td> </tr>       <tr>     <td>too_many_metadata_pairs</td>     <td>The request contained too many metadata pairs.</td> </tr> <tr>     <td>unknown_error</td>     <td>An unknown error has occurred.</td> </tr>      <tr>     <td>unknown_parameter</td>     <td>The request contains an unknown parameter. Check our API Reference to see which values are required and try again.</td> </tr>   <tr>     <td>voice_authorization_required</td>     <td>The request request requires voice authorization before it can be authorized.</td> </tr>     </table>  <br><br>Updated at 2023-01-25T14:24:50.445984Z.
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
 * Shipment Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Shipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_time' => '\DateTime',
        'fulfillment_order_id' => 'string',
        'fulfillment_order_upstream_id' => 'string',
        'shipping_choice_id' => 'string',
        'tracking_company_id' => 'string',
        'tracking_company' => 'string',
        'tracking_number' => 'string',
        'tracking_url' => 'string',
        'items' => '\DigitalRiver\ApiSdk\Model\ShipmentItem[]',
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
        'fulfillment_order_id' => null,
        'fulfillment_order_upstream_id' => null,
        'shipping_choice_id' => null,
        'tracking_company_id' => null,
        'tracking_company' => null,
        'tracking_number' => null,
        'tracking_url' => null,
        'items' => null,
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
		'fulfillment_order_id' => false,
		'fulfillment_order_upstream_id' => false,
		'shipping_choice_id' => false,
		'tracking_company_id' => true,
		'tracking_company' => false,
		'tracking_number' => false,
		'tracking_url' => false,
		'items' => false,
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
        'fulfillment_order_id' => 'fulfillmentOrderId',
        'fulfillment_order_upstream_id' => 'fulfillmentOrderUpstreamId',
        'shipping_choice_id' => 'shippingChoiceId',
        'tracking_company_id' => 'trackingCompanyId',
        'tracking_company' => 'trackingCompany',
        'tracking_number' => 'trackingNumber',
        'tracking_url' => 'trackingUrl',
        'items' => 'items',
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
        'fulfillment_order_id' => 'setFulfillmentOrderId',
        'fulfillment_order_upstream_id' => 'setFulfillmentOrderUpstreamId',
        'shipping_choice_id' => 'setShippingChoiceId',
        'tracking_company_id' => 'setTrackingCompanyId',
        'tracking_company' => 'setTrackingCompany',
        'tracking_number' => 'setTrackingNumber',
        'tracking_url' => 'setTrackingUrl',
        'items' => 'setItems',
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
        'fulfillment_order_id' => 'getFulfillmentOrderId',
        'fulfillment_order_upstream_id' => 'getFulfillmentOrderUpstreamId',
        'shipping_choice_id' => 'getShippingChoiceId',
        'tracking_company_id' => 'getTrackingCompanyId',
        'tracking_company' => 'getTrackingCompany',
        'tracking_number' => 'getTrackingNumber',
        'tracking_url' => 'getTrackingUrl',
        'items' => 'getItems',
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
        $this->setIfExists('fulfillment_order_id', $data ?? [], null);
        $this->setIfExists('fulfillment_order_upstream_id', $data ?? [], null);
        $this->setIfExists('shipping_choice_id', $data ?? [], null);
        $this->setIfExists('tracking_company_id', $data ?? [], null);
        $this->setIfExists('tracking_company', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
        $this->setIfExists('tracking_url', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
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
     * @param string|null $id The unique identifier of a shipment.
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
     * @param \DateTime|null $created_time Time when the shipment was created.
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
     * Gets fulfillment_order_id
     *
     * @return string|null
     */
    public function getFulfillmentOrderId()
    {
        return $this->container['fulfillment_order_id'];
    }

    /**
     * Sets fulfillment_order_id
     *
     * @param string|null $fulfillment_order_id The identifier of the fulfillment order.
     *
     * @return self
     */
    public function setFulfillmentOrderId($fulfillment_order_id)
    {
        if (is_null($fulfillment_order_id)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_order_id cannot be null');
        }
        $this->container['fulfillment_order_id'] = $fulfillment_order_id;

        return $this;
    }

    /**
     * Gets fulfillment_order_upstream_id
     *
     * @return string|null
     */
    public function getFulfillmentOrderUpstreamId()
    {
        return $this->container['fulfillment_order_upstream_id'];
    }

    /**
     * Sets fulfillment_order_upstream_id
     *
     * @param string|null $fulfillment_order_upstream_id The upstream identifier of the fulfillment order.
     *
     * @return self
     */
    public function setFulfillmentOrderUpstreamId($fulfillment_order_upstream_id)
    {
        if (is_null($fulfillment_order_upstream_id)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_order_upstream_id cannot be null');
        }
        $this->container['fulfillment_order_upstream_id'] = $fulfillment_order_upstream_id;

        return $this;
    }

    /**
     * Gets shipping_choice_id
     *
     * @return string|null
     */
    public function getShippingChoiceId()
    {
        return $this->container['shipping_choice_id'];
    }

    /**
     * Sets shipping_choice_id
     *
     * @param string|null $shipping_choice_id The shipping method.
     *
     * @return self
     */
    public function setShippingChoiceId($shipping_choice_id)
    {
        if (is_null($shipping_choice_id)) {
            throw new \InvalidArgumentException('non-nullable shipping_choice_id cannot be null');
        }
        $this->container['shipping_choice_id'] = $shipping_choice_id;

        return $this;
    }

    /**
     * Gets tracking_company_id
     *
     * @return string|null
     */
    public function getTrackingCompanyId()
    {
        return $this->container['tracking_company_id'];
    }

    /**
     * Sets tracking_company_id
     *
     * @param string|null $tracking_company_id The unique identifier of the tracking or carrier company.
     *
     * @return self
     */
    public function setTrackingCompanyId($tracking_company_id)
    {
        if (is_null($tracking_company_id)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_company_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_company_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tracking_company_id'] = $tracking_company_id;

        return $this;
    }

    /**
     * Gets tracking_company
     *
     * @return string|null
     */
    public function getTrackingCompany()
    {
        return $this->container['tracking_company'];
    }

    /**
     * Sets tracking_company
     *
     * @param string|null $tracking_company The name of the tracking or carrier company.
     *
     * @return self
     */
    public function setTrackingCompany($tracking_company)
    {
        if (is_null($tracking_company)) {
            throw new \InvalidArgumentException('non-nullable tracking_company cannot be null');
        }
        $this->container['tracking_company'] = $tracking_company;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number The tracking number provided by the carrier company.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        if (is_null($tracking_number)) {
            throw new \InvalidArgumentException('non-nullable tracking_number cannot be null');
        }
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets tracking_url
     *
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return $this->container['tracking_url'];
    }

    /**
     * Sets tracking_url
     *
     * @param string|null $tracking_url The URL of the fulfillment tracking page.
     *
     * @return self
     */
    public function setTrackingUrl($tracking_url)
    {
        if (is_null($tracking_url)) {
            throw new \InvalidArgumentException('non-nullable tracking_url cannot be null');
        }
        $this->container['tracking_url'] = $tracking_url;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \DigitalRiver\ApiSdk\Model\ShipmentItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \DigitalRiver\ApiSdk\Model\ShipmentItem[]|null $items items
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
     * @param bool|null $live_mode Has the value true if the object exists in live mode or the value false if the object exists in test mode.
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


