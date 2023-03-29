<?php
/**
 * EventsApi
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

namespace DigitalRiver\ApiSdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use DigitalRiver\ApiSdk\ApiException;
use DigitalRiver\ApiSdk\Configuration;
use DigitalRiver\ApiSdk\HeaderSelector;
use DigitalRiver\ApiSdk\ObjectSerializer;

/**
 * EventsApi Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EventsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'listEvents' => [
            'application/json',
        ],
        'retrieveEvents' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listEvents
     *
     * Returns a list of events
     *
     * @param  array<string,\DateTime> $created_time A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the createdTime field is after this timestamp   - **gte**&amp;mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the createdTime field is before this timestamp   - **lte**&amp;mdash;return values where the createdTime field is before or equal to this timestamp (optional)
     * @param  string $ending_before A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10. (optional)
     * @param  string $type Represents a specific event name, or a group of events using * as a wildcard. The returned list is filtered to include only matching events. You may pass either &lt;code&gt;type&lt;/code&gt; or &lt;code&gt;types&lt;/code&gt;, but not both. (optional)
     * @param  string $types An array containing less than 20 specific event names. The returned list is filtered to include only matching events. You may pass either &lt;code&gt;type&lt;/code&gt; or &lt;code&gt;types&lt;/code&gt;, but not both. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listEvents'] to see the possible values for this operation
     *
     * @throws \DigitalRiver\ApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DigitalRiver\ApiSdk\Model\ListEventsResponse|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors
     */
    public function listEvents($created_time = null, $ending_before = null, $starting_after = null, $limit = null, $type = null, $types = null, string $contentType = self::contentTypes['listEvents'][0])
    {
        list($response) = $this->listEventsWithHttpInfo($created_time, $ending_before, $starting_after, $limit, $type, $types, $contentType);
        return $response;
    }

    /**
     * Operation listEventsWithHttpInfo
     *
     * Returns a list of events
     *
     * @param  array<string,\DateTime> $created_time A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the createdTime field is after this timestamp   - **gte**&amp;mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the createdTime field is before this timestamp   - **lte**&amp;mdash;return values where the createdTime field is before or equal to this timestamp (optional)
     * @param  string $ending_before A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10. (optional)
     * @param  string $type Represents a specific event name, or a group of events using * as a wildcard. The returned list is filtered to include only matching events. You may pass either &lt;code&gt;type&lt;/code&gt; or &lt;code&gt;types&lt;/code&gt;, but not both. (optional)
     * @param  string $types An array containing less than 20 specific event names. The returned list is filtered to include only matching events. You may pass either &lt;code&gt;type&lt;/code&gt; or &lt;code&gt;types&lt;/code&gt;, but not both. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listEvents'] to see the possible values for this operation
     *
     * @throws \DigitalRiver\ApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DigitalRiver\ApiSdk\Model\ListEventsResponse|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors, HTTP status code, HTTP response headers (array of strings)
     */
    public function listEventsWithHttpInfo($created_time = null, $ending_before = null, $starting_after = null, $limit = null, $type = null, $types = null, string $contentType = self::contentTypes['listEvents'][0])
    {
        $request = $this->listEventsRequest($created_time, $ending_before, $starting_after, $limit, $type, $types, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\DigitalRiver\ApiSdk\Model\ListEventsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\ListEventsResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\ListEventsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 408:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\DigitalRiver\ApiSdk\Model\ListEventsResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\ListEventsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 408:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listEventsAsync
     *
     * Returns a list of events
     *
     * @param  array<string,\DateTime> $created_time A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the createdTime field is after this timestamp   - **gte**&amp;mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the createdTime field is before this timestamp   - **lte**&amp;mdash;return values where the createdTime field is before or equal to this timestamp (optional)
     * @param  string $ending_before A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10. (optional)
     * @param  string $type Represents a specific event name, or a group of events using * as a wildcard. The returned list is filtered to include only matching events. You may pass either &lt;code&gt;type&lt;/code&gt; or &lt;code&gt;types&lt;/code&gt;, but not both. (optional)
     * @param  string $types An array containing less than 20 specific event names. The returned list is filtered to include only matching events. You may pass either &lt;code&gt;type&lt;/code&gt; or &lt;code&gt;types&lt;/code&gt;, but not both. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listEventsAsync($created_time = null, $ending_before = null, $starting_after = null, $limit = null, $type = null, $types = null, string $contentType = self::contentTypes['listEvents'][0])
    {
        return $this->listEventsAsyncWithHttpInfo($created_time, $ending_before, $starting_after, $limit, $type, $types, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listEventsAsyncWithHttpInfo
     *
     * Returns a list of events
     *
     * @param  array<string,\DateTime> $created_time A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the createdTime field is after this timestamp   - **gte**&amp;mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the createdTime field is before this timestamp   - **lte**&amp;mdash;return values where the createdTime field is before or equal to this timestamp (optional)
     * @param  string $ending_before A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10. (optional)
     * @param  string $type Represents a specific event name, or a group of events using * as a wildcard. The returned list is filtered to include only matching events. You may pass either &lt;code&gt;type&lt;/code&gt; or &lt;code&gt;types&lt;/code&gt;, but not both. (optional)
     * @param  string $types An array containing less than 20 specific event names. The returned list is filtered to include only matching events. You may pass either &lt;code&gt;type&lt;/code&gt; or &lt;code&gt;types&lt;/code&gt;, but not both. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listEventsAsyncWithHttpInfo($created_time = null, $ending_before = null, $starting_after = null, $limit = null, $type = null, $types = null, string $contentType = self::contentTypes['listEvents'][0])
    {
        $returnType = '\DigitalRiver\ApiSdk\Model\ListEventsResponse';
        $request = $this->listEventsRequest($created_time, $ending_before, $starting_after, $limit, $type, $types, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listEvents'
     *
     * @param  array<string,\DateTime> $created_time A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the createdTime field is after this timestamp   - **gte**&amp;mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the createdTime field is before this timestamp   - **lte**&amp;mdash;return values where the createdTime field is before or equal to this timestamp (optional)
     * @param  string $ending_before A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10. (optional)
     * @param  string $type Represents a specific event name, or a group of events using * as a wildcard. The returned list is filtered to include only matching events. You may pass either &lt;code&gt;type&lt;/code&gt; or &lt;code&gt;types&lt;/code&gt;, but not both. (optional)
     * @param  string $types An array containing less than 20 specific event names. The returned list is filtered to include only matching events. You may pass either &lt;code&gt;type&lt;/code&gt; or &lt;code&gt;types&lt;/code&gt;, but not both. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listEventsRequest($created_time = null, $ending_before = null, $starting_after = null, $limit = null, $type = null, $types = null, string $contentType = self::contentTypes['listEvents'][0])
    {




        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling EventsApi.listEvents, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling EventsApi.listEvents, must be bigger than or equal to 1.');
        }
        



        $resourcePath = '/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_time,
            'createdTime', // param base name
            'object', // openApiType
            'deepObject', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ending_before,
            'endingBefore', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $starting_after,
            'startingAfter', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $types,
            'types', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation retrieveEvents
     *
     * Gets an event by identifier
     *
     * @param  string $id Event identifer (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveEvents'] to see the possible values for this operation
     *
     * @throws \DigitalRiver\ApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DigitalRiver\ApiSdk\Model\Event|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors
     */
    public function retrieveEvents($id, string $contentType = self::contentTypes['retrieveEvents'][0])
    {
        list($response) = $this->retrieveEventsWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation retrieveEventsWithHttpInfo
     *
     * Gets an event by identifier
     *
     * @param  string $id Event identifer (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveEvents'] to see the possible values for this operation
     *
     * @throws \DigitalRiver\ApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DigitalRiver\ApiSdk\Model\Event|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveEventsWithHttpInfo($id, string $contentType = self::contentTypes['retrieveEvents'][0])
    {
        $request = $this->retrieveEventsRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\DigitalRiver\ApiSdk\Model\Event' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Event' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Event', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 408:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DigitalRiver\ApiSdk\Model\Errors' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\DigitalRiver\ApiSdk\Model\Event';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Event',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 408:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveEventsAsync
     *
     * Gets an event by identifier
     *
     * @param  string $id Event identifer (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveEventsAsync($id, string $contentType = self::contentTypes['retrieveEvents'][0])
    {
        return $this->retrieveEventsAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveEventsAsyncWithHttpInfo
     *
     * Gets an event by identifier
     *
     * @param  string $id Event identifer (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveEventsAsyncWithHttpInfo($id, string $contentType = self::contentTypes['retrieveEvents'][0])
    {
        $returnType = '\DigitalRiver\ApiSdk\Model\Event';
        $request = $this->retrieveEventsRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'retrieveEvents'
     *
     * @param  string $id Event identifer (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function retrieveEventsRequest($id, string $contentType = self::contentTypes['retrieveEvents'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling retrieveEvents'
            );
        }


        $resourcePath = '/events/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
