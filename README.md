# DigitalRiver

If you have a commerce technology in place, the Digital River API allows you to integrate our back-end payments, tax, fraud, and compliance services.

The Digital River API is a RESTful API. That means Digital River designed this API to allow you to retrieve, create, update, and delete objects with the HTTP verbs GET, POST, and DELETE. 

You can use the Digital River API in a test environment when you do not want to interact with financial institutions. The API key you use to authenticate a request determines whether the request is in the production environment or test environment.

The Digital River API speaks exclusively in JSON. You should always set the content-type header to `application/json` to ensure the API accepts and processes your requests.

All Digital River API requests are sent to https://<span></span>api.digitalriver.com.

# Explore Digital River Products  

<table>
<tr>
    <td><b>Product</b></td>
    <td><b>Description</b></td>
</tr>
<tr>
    <td><a href=\"https://docs.digitalriver.com/digital-river-api/\">Digital River API</a></td>
    <td>Explore Digital River&apos;s API suite for Global Seller Services.</td>
</tr>
<tr>
    <td><a href=\"https://docs.digitalriver.com/digital-river-api/payments/payment-integrations-1\">Payment Integrations</a></td>
    <td>Explore our payment integration options that allow you to enable payment methods and checkout flows.</td>
</tr>
</table>


<a name=\"obtaining-credentials\"></a>
# Obtaining Digital River API credentials

Before you can start making Digital River API requests, you&apos;ll need to create a test account in the [Dashboard](https://dashboard.digitalriver.com/login). Check out our [Quick Start Guide](https://docs.digitalriver.com/digital-river-api/quick-start-guide) for additional information.     

<a name=\"authentication\"></a>
# Authentication

The Digital River API authenticates requests using API keys.  

Digital River provides secret keys (tokens) for production and test environment in the Digital River API. Each secret key uses a prefix. Use the `sk_test_ prefix` for test environment secret keys and the `sk_ prefix` for production environment secret keys. If you want to apply additional restrictions to access and permissions, you can use restricted API keys.

**Important**&colon; Limit access to your API keys to those who need them. Do not store them in a version control system.

The Java library automatically sends your API key in each request when you assign the API key to `DigitalRiver.apiKey`.

You must send all API requests over HTTPS. Calls sent over plain HTTP will fail. Sending an API request without authentication automatically fails.

<a name=\"api-keys\"></a>
# API keys

Digital River uses your account&apos;s API keys to authenticate your API requests. If you do not include your key when you send an API request or use an incorrect or outdated key, Digital River returns an error. See [API keys](https://docs.digitalriver.com/digital-river-api/administration/dashboard/developers/api-keys) in the [Dashboard documentation](https://docs.digitalriver.com/digital-river-api/administration/dashboard) for more information.

## Get your API keys

To [get your keys](https://docs.digitalriver.com/digital-river-api/getting-started-1#step-1-create-a-test-account), sign in to [Digital River Dashboard](https://dashboard.digitalriver.com/). The API keys page displays your public key and secret key. 

# Webhooks
Webhooks allow developers to be notified, in near real-time, when specific events occur.

When you register your webhook URLs with Digital River, Digital River creates an Event object and sends webhook events that notify your application any time an event occurs.

The Event object includes the event type and the data associated with that event. Digital River sends the Event object to the endpoint URLs you define in [Dashboard](https://dashboard.digitalriver.com/)&apos;s Webhook settings for your account through an HTTP POST request. You can set up multiple webhook endpoints to receive a single event.

See [Creating a webhook](https://docs.digitalriver.com/digital-river-api/order-management/events-and-webhooks-1/webhooks/creating-a-webhook) to learn how to create a webhook.

## Event logs
To view the webhook events, sign in to [Dashboard](https://dashboard.digitalriver.com/) and click Event logs. The Event logs display the event type, event ID, and timestamp for the event.

<a name=\"metadata\"></a>    
# Metadata
The metadata parameter stores additional, structured information on an object. You can use the metadata parameter to attach key-value data to the following Digital River resources&colon; SKUs, Checkouts, Orders, Customers, Returns, Refunds, and Fulfillments.

For example, you can store your user&apos;s full name and ID on a Digital River Customer object. Digital River does not use the metadata. Your users will only see this data if you choose to show it to them.

**Note**&colon; Do not store any data that identifies a person, their card information, and so on as metadata.

The metadata parameter supports up to 20 keys. Each key name can be up to 40 characters long&comma; and the values can be up to 500 characters long.

# Pagination
All API resources that return lists support bulk fetches. For example, you can use the `limit`, `startingAfter`, and `endingBefore` parameters to list orders, customers, and SKUs.

The `startingBefore` and `endingAfter` parameters both use an object ID value to determine the starting point, and the objects appear in the response in reverse chronological order. To return objects listed before the named object, use the `endingBefore` parameter. To return objects listed after the named object, use the `startingAfter` parameter. If you provide both parameters, the request uses only the `endingBefore` parameter.

## Parameters

<table>
<tr>
    <td><b>Parameter</b></td>
    <td><b>Description</b></td>
</tr>
<tr>
    <td>limit</td>
    <td>The maximum number of objects returned. You can specify a value between 1 and 100.</td>
</tr>
<tr>
    <td>startingAfter</td>
    <td>This cursor identifies the pagination starting point in the list based on the object ID. For example, if you send a list request and receive 100 customers ending with `xyz`, your subsequent calls can include `startingAfter=xyz` to fetch the next page of the list.</td>
</tr>
<tr>
    <td>endingBefore</td>
    <td>This cursor identifies the pagination starting point in the list based on the object ID. For example, if you send a list request and receive 100 objects starting with `xyz`, your subsequent call can include `endingBefore=xyz` to fetch the previous page of the list.</td>
</tr>
</table>

## List response attributes

<table>
<tr>
    <td><b>Attribute</b></td>
    <td><b>Description</b></td>
</tr>
<tr>
    <td>data</td>
    <td>This array contains response elements. Any request parameter can paginate the response elements.</td>
</tr>
<tr>
    <td>hasMore</td>
    <td>When true, there are more elements available after this set. When false, this set marks the end of the list.</td>
</tr>
</table>

# Request identifiers

A request identifier is associated with each API request. It appears in the response headers under `x-dr-requestid`. Request identifiers also appear in the URLs of each request log in your [Dashboard](https://dashboard.digitalriver.com/).

**Note**&colon; Contact us if you have a question about a specific request. To ensure a quick solution, include the request identifier.

# Versioning

Your account&apos;s API version determines the structure of events generated by API requests. All versions with breaking changes are dated.

All requests will use the version pinned to your account API settings. It only changes when you upgrade to the latest API version. 

Select a version of the library to change the API version used and create a webhook endpoint with the same API version as `DigitalRiver.API_VERSION` property in the library. Use the [Changelog](https://docs.digitalriver.com/digital-river-api/general-resources/release-notes) to  find the API version you need and view all breaking changes.

You can test a single API request without upgrading your API key.  To set an API version with a specific request, send a `DigitalRiver-Version` header, for example:

`digitalriver-version=2020-09-30`

<a name=\"errors\"></a>
# Response status codes

Digital River uses HTTP response status codes. These codes indicate whether an API request succeeded or failed. HTTP status codes group responses into the following classes&colon;

* The `2xx` range indicates success.

* The `4xx` range indicates an error that failed based on the provided information provided (for example, you omitted a parameter or a charge failed).

* The `5xx` range indicates an error with Digital River&apos;s servers.

* You can handle some `4xx` errors programmatically to include an error code that briefly explains the error reported (for example, include an error code when you decline a card).

<a name=\"error-types\"></a>
## Error types

<table>
<tr>
    <td><b>Type</b></td>
    <td><b>Description</b></td>
</tr>
<tr>
    <td>bad_request</td>
    <td>The server could not process the request due to a client error (for example, malformed request syntax). Correct the problem and try again.</td>
</tr>   
<tr>
    <td>not_found</td>
    <td>The server can’t find the requested resource. No indication is given of whether the condition is temporary or permanent.</td>
</tr>
<tr>
    <td>request_timeout</td>
    <td>The client did not produce the request within the time that the server was prepared to wait. Resend the request without modifications at any later time.</td>
</tr>
<tr>
    <td>internal_server_error</td>
    <td>The server encountered an unexpected problem that prevented it from fulfilling the request.</td>
</tr>    
<tr>
    <td>unauthorized</td>
    <td>The request requires user authentication. Resend the request with valid user authentication.</td>
</tr>    
<tr>
    <td>too_many_requests</td>
    <td>The user sent too many requests in a given amount of time (&ldquo;rate limiting&rdquo;). The response should include details explaining the condition and may include a Retry-After header indicating how long to wait before sending a new request.</td>
</tr>    
<tr>
    <td>conflict</td>
    <td>There is a request conflict with the current state of the server.
    
Conflicts are most likely to occur in response to a PUT request. For example, you may get a 409 response when uploading a file that is older than the one already on the server resulting in a version control conflict.
</td>
</tr>    
<tr>
    <td>validation_error</td>
    <td>Errors triggered by our client-side libraries when failing to validate fields (for example, when a card number or expiration date is invalid or incomplete).

Used by&colon; DigitalRiver.js</td>
</tr>    
<tr>
    <td>no_network</td>
    <td>There is no network coverage or cellular data connection.</td>
</tr>    
</table>

<a name=\"error-codes\"></a>
## Error codes

The following table contains a list of API error codes.

**Note**&colon; Do not share the error's <code>code</code> with customers. Doing so may aid fradulent and malicious actors.

<table>
<tr>
    <td><b>Code</b></td>
    <td><b>Description</b></td>
</tr>
<tr>
    <td>account_closed</td>
    <td>Stop all billing as this account is closed.</td>
</tr>
<tr>
    <td>already_exists</td>
    <td>The item you tried to create already exists.</td>
</tr>
<tr>
    <td>amount_too_large</td>
    <td>The given amount is too large. Provide a smaller amount and try again.</td>
</tr>
<tr>
    <td>api_key_expired</td>
    <td>The API key has expired.</td>
</tr>    
<tr>
    <td>card_expired</td>
    <td>The card has expired. Provide valid card information and try again.</td>
</tr>    
<tr>
    <td>card_limit_exceeded</td>
    <td>The transaction exceeds the card limit amount.</td>
</tr>
<tr>
    <td>card_type_block</td>
    <td>The merchant has blocked this card type.</td>
</tr>    
<tr>
    <td>card_velocity_exceeded</td>
    <td>The transaction exceeds the card velocity amount.</td>
</tr>
<tr>
    <td>charge_expired</td>
    <td>The charge has expired. Provide valid charge information and try again.</td>
</tr>    
<tr>
    <td>charge_not_capturable</td>
    <td>The charge could not be captured.</td>
</tr>
<tr>
    <td>country_restricted</td>
    <td>A user provided a restricted country. Make sure that users can only sign up from supported countries.</td>
</tr> 
<tr>
    <td>create-order-failed</td>
    <td>The order is missing required details and could not be completed.</td>
</tr>     
<tr>
    <td>currency_unsupported</td>
    <td>The currency provided is not supported. Provide a supported currency and try again.</td>
</tr>
<tr>
    <td>declined</td>
    <td>The card has been declined for an unknown reason.</td>
</tr>    
<tr>
    <td>do_not_honor</td>
    <td>The card issuing bank has declined this payment.</td>
</tr>
<tr>
    <td>email_invalid</td>
    <td>The email address is invalid. Provide a valid email address and try again.</td>
</tr>
<tr>
    <td>failed-request</td>
    <td>Failed to charge source.</td>
</tr>
<tr>
    <td>fraud</td>
    <td>The transaction has been identified by the issuing bank as fraudulent.</td>
</tr>
<tr>
    <td>fraud_block</td>
    <td>The transaction has been identified by Digital River as fraudulent.</td>
</tr>    
<tr>
    <td>invalid_address</td>
    <td>The address does not match the card network's records.</td>
</tr>
<tr>
    <td>invalid_amount</td>
    <td>The amount is not accepted by the card network.</td>
</tr>    
<tr>
    <td>invalid_boolean</td>
    <td>The boolean value is invalid. Provide a valid boolean value and try again.</td>
</tr>
<tr>
    <td>invalid_card_bin</td>
    <td>The card bin is invalid.</td>
</tr>    
<tr>
    <td>invalid_card_number</td>
    <td>The card number entered is invalid.</td>
</tr>
<tr>
    <td>invalid_currency</td>
    <td>This currency is not supported.</td>
</tr>    
<tr>
    <td>invalid_empty</td>
    <td>The empty value is invalid. Provide a valid value and try again.</td>
</tr>
<tr>
    <td>invalid_expiration_date</td>
    <td>The card is expired, or the expiration date is invalid. This validation message indicates the expiration date did not meet basic validation requirements (for example, the date is in the past, incorrect month, missing year, and so on).</td>
</tr>  
<tr>
    <td>invalid_format</td>
    <td>The format of your request is invalid.</td>
</tr>     
<tr>
    <td>invalid_integer</td>
    <td>The integer value is valid. Provide a value integer value and try again.</td>
</tr>
<tr>
    <td>invalid_metadata_key</td>
    <td>The metadata key is invalid. Provide a value metadata key and try again.</td>
</tr>      
<tr>
    <td>invalid_metadata_value</td>
    <td>The value provided for the metadata was invalid.</td>
</tr>
<tr>
    <td>invalid_parameter</td>
    <td>The parameter is invalid. Check our API Reference to see which values are valid and try again.</td>
</tr>      
<tr>
    <td>invalid_pin</td>
    <td>The PIN provided is invalid or incorrect.invalid_quantity_amount</td>
</tr>
<tr>
    <td>invalid_quantity_amount</td>
    <td>The quantity provided in the request was invalid. Check our API Reference to see what is a valid quantity and try again.</td>
</tr>      
<tr>
    <td>invalid_security_code</td>
    <td>The security code provided is invalid or incorrect.</td>
</tr>
<tr>
    <td>invalid_shipping_choice</td>
    <td>The shipping choice is invalid. Provide a valid shipping choice and try again.</td>
</tr>      
<tr>
    <td>invalid_string_blank</td>
    <td>The string value is blank. Provide a valid string value and try again.</td>
</tr>
<tr>
    <td>invalid_string_empty</td>
    <td>The string value is empty. Provide a valid string value and try again.</td>
</tr>      
<tr>
    <td>invalid_transaction_type</td>
    <td>The transaction type is invalid.</td>
</tr>
<tr>
    <td>issuer_invalid_card</td>
    <td>The card does not exist with the issuer.</td>
</tr>      
<tr>
    <td>issuer_not_found</td>
    <td>The card issuer does not exist.</td>
</tr>
<tr>
    <td>issuer_unavailable</td>
    <td>The card issuing bank could not be reached.</td>
</tr>      
<tr>
    <td>insufficient_funds</td>
    <td>The card has insufficient funds to complete the purchase.</td>
</tr>
<tr>
    <td>limit_exceeded</td>
    <td>The transaction amount exceeds your assigned limit.</td>
</tr>      
<tr>
    <td>lost_stolen_card</td>
    <td>The issuing bank has marked this card lost or stolen.</td>
</tr>
<tr>
    <td>method_not_allowed</td>
    <td>The method is not allowed. Provide a valid method value and try again.</td>
</tr>    
<tr>
    <td>mid_limit_exceeded</td>
    <td>The transaction amount exceeds the limit assigned for this MID.</td>
</tr>      
<tr>
    <td>missing_parameter</td>
    <td>A parameter is missing. Check our API Reference to see which values are required and try again.</td>
</tr>
<tr>
    <td>no_response</td>
    <td>The payment processor did not respond.</td>
</tr>      
<tr>
    <td>not_found</td>
    <td>The item requested was not found.</td>
</tr>  
<tr>
    <td>order_already_complete</td>
    <td>The specified orderId is already complete.</td>
</tr>  
<tr>
    <td>order_submit_failed</td>
    <td>The payment session status is invalid.</td>
</tr>  
<tr>
    <td>out_of_inventory</td>
    <td>The item is not in inventory.</td>
</tr> 
<tr>
  <td>payment_authorization_failed</td>
  <td>The payment authorization failed</td>
</tr>
<tr>
    <td>pin_try_exceeded</td>
    <td>The bank's allowable number of PIN tries has been exceeded.</td>
</tr>    
<tr>
    <td>plan_not_active</td>
    <td>The plan is not in an active state.</td>
</tr>
<tr>
    <td>postal_code_invalid</td>
    <td>The postal code is invalid. Enter a valid postal code and try again.</td>
</tr>      
<tr>
    <td>restricted_card</td>
    <td>Restricted by the card network.</td>
</tr>
<tr>
    <td>restricted_update</td>
    <td>Additional data cannot be included in the update request</td>
</tr>  
<tr>
    <td>sku_inactive</td>
    <td>The given SKU is inactive. Provide an active SKU and try again.</td>
</tr>      
<tr>
    <td>source_expired</td>
    <td>The source provided has expired. Check Sources to see which sources have not expired and try again.
    </td>
</tr>
<tr>
    <td>source_not_chargeable</td>
    <td>The source provided is not chargeable. Check Sources to see which sources are chargeable and try again.</td>
</tr>      
<tr>
    <td>source_not_found</td>
    <td>The source you have requested was not found.</td>
</tr>
<tr>
    <td>source_status_invalid_for_session</td>
    <td>The source status is invalid for this session.</td>
</tr> 
<tr>
    <td>stop_recurring</td>
    <td>The cardholder has requested all recurring and / or installment charges to be stopped.</td>
</tr>    
<tr>
    <td>tax_id_invalid</td>
    <td>The tax identifier is not valid. Correct the tax identifier and try again.</td>
</tr>      
<tr>
    <td>too_many_metadata_pairs</td>
    <td>The request contained too many metadata pairs.</td>
</tr>
<tr>
    <td>unknown_error</td>
    <td>An unknown error has occurred.</td>
</tr>     
<tr>
    <td>unknown_parameter</td>
    <td>The request contains an unknown parameter. Check our API Reference to see which values are required and try again.</td>
</tr>  
<tr>
    <td>voice_authorization_required</td>
    <td>The request request requires voice authorization before it can be authorized.</td>
</tr>    
</table> 
<br><br>Updated at 2023-01-25T14:24:50.445984Z.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/DigitalRiver/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Charge ID

try {
    $result = $apiInstance->retrieveCharges($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->retrieveCharges: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.digitalriver.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ChargesApi* | [**retrieveCharges**](docs/Api/ChargesApi.md#retrievecharges) | **GET** /charges/{id} | Gets a charge by ID
*CheckoutsApi* | [**attachSourceToCheckout**](docs/Api/CheckoutsApi.md#attachsourcetocheckout) | **POST** /checkouts/{id}/sources/{sourceId} | Attach source to checkout.
*CheckoutsApi* | [**createCheckouts**](docs/Api/CheckoutsApi.md#createcheckouts) | **POST** /checkouts | Creates a new checkout
*CheckoutsApi* | [**deleteCheckouts**](docs/Api/CheckoutsApi.md#deletecheckouts) | **DELETE** /checkouts/{id} | Deletes a checkout by ID.
*CheckoutsApi* | [**detachSourceToCheckout**](docs/Api/CheckoutsApi.md#detachsourcetocheckout) | **DELETE** /checkouts/{id}/sources/{sourceId} | Deletes a checkout association to source.
*CheckoutsApi* | [**listCheckouts**](docs/Api/CheckoutsApi.md#listcheckouts) | **GET** /checkouts | Returns a list of checkouts
*CheckoutsApi* | [**retrieveCheckouts**](docs/Api/CheckoutsApi.md#retrievecheckouts) | **GET** /checkouts/{id} | Gets a checkout by ID.
*CheckoutsApi* | [**updateCheckouts**](docs/Api/CheckoutsApi.md#updatecheckouts) | **POST** /checkouts/{id} | Updates an existing checkout
*CountrySpecificationsApi* | [**listCountrySpecifications**](docs/Api/CountrySpecificationsApi.md#listcountryspecifications) | **GET** /country-specs | Returns an array containing a country specification
*CustomersApi* | [**createCustomerSource**](docs/Api/CustomersApi.md#createcustomersource) | **POST** /customers/{id}/sources/{sourceId} | Attaches a source to a customer
*CustomersApi* | [**createCustomerTaxIdentifier**](docs/Api/CustomersApi.md#createcustomertaxidentifier) | **POST** /customers/{id}/tax-identifiers/{taxId} | Attaches a tax identifier to a customer
*CustomersApi* | [**createCustomers**](docs/Api/CustomersApi.md#createcustomers) | **POST** /customers | Creates a new customer
*CustomersApi* | [**deleteCustomerSource**](docs/Api/CustomersApi.md#deletecustomersource) | **DELETE** /customers/{id}/sources/{sourceId} | Detaches a source from a customer
*CustomersApi* | [**deleteCustomers**](docs/Api/CustomersApi.md#deletecustomers) | **DELETE** /customers/{id} | Deletes a customer by ID
*CustomersApi* | [**listCustomers**](docs/Api/CustomersApi.md#listcustomers) | **GET** /customers | Returns a list of customers
*CustomersApi* | [**retrieveCustomers**](docs/Api/CustomersApi.md#retrievecustomers) | **GET** /customers/{id} | Gets a customer by ID
*CustomersApi* | [**updateCustomers**](docs/Api/CustomersApi.md#updatecustomers) | **POST** /customers/{id} | Updates an existing customer
*DropInCheckoutLinksApi* | [**createDropInCheckoutLink**](docs/Api/DropInCheckoutLinksApi.md#createdropincheckoutlink) | **POST** /drop-in/checkout-links | Creates a new Drop-in checkout link
*DropInCheckoutLinksApi* | [**deleteDropInCheckoutLinks**](docs/Api/DropInCheckoutLinksApi.md#deletedropincheckoutlinks) | **DELETE** /drop-in/checkout-links/{id} | Deletes a Drop-in checkout link by ID.
*DropInCheckoutLinksApi* | [**listDropInCheckoutLink**](docs/Api/DropInCheckoutLinksApi.md#listdropincheckoutlink) | **GET** /drop-in/checkout-links | List Drop-in checkout links
*DropInCheckoutSessionsApi* | [**createDropInCheckoutSession**](docs/Api/DropInCheckoutSessionsApi.md#createdropincheckoutsession) | **POST** /drop-in/checkout-sessions | Creates a new Drop-in checkout session
*DropInShippingQuotesApi* | [**listShippingMethodQuotes**](docs/Api/DropInShippingQuotesApi.md#listshippingmethodquotes) | **POST** /checkout/shipping-quotes | Returns shipping method quotes
*EventsApi* | [**listEvents**](docs/Api/EventsApi.md#listevents) | **GET** /events | Returns a list of events
*EventsApi* | [**retrieveEvents**](docs/Api/EventsApi.md#retrieveevents) | **GET** /events/{id} | Gets an event by identifier
*FeesApi* | [**createFees**](docs/Api/FeesApi.md#createfees) | **POST** /fees | Creates a fee
*FeesApi* | [**deleteFees**](docs/Api/FeesApi.md#deletefees) | **DELETE** /fees/{id} | Deletes a fee by identifier
*FeesApi* | [**listFees**](docs/Api/FeesApi.md#listfees) | **GET** /fees | Returns a list of fees
*FeesApi* | [**retrieveFees**](docs/Api/FeesApi.md#retrievefees) | **GET** /fees/{id} | Gets a Fee by identifier
*FeesApi* | [**updateFees**](docs/Api/FeesApi.md#updatefees) | **POST** /fees/{id} | Updates an existing Fee
*FileLinksApi* | [**createFileLinks**](docs/Api/FileLinksApi.md#createfilelinks) | **POST** /file-links | Creates a file link
*FileLinksApi* | [**deleteFileLinks**](docs/Api/FileLinksApi.md#deletefilelinks) | **DELETE** /file-links/{id} | Deletes a file link by ID.
*FileLinksApi* | [**listFileLinks**](docs/Api/FileLinksApi.md#listfilelinks) | **GET** /file-links | Returns a list of file links
*FileLinksApi* | [**retrieveFileLinks**](docs/Api/FileLinksApi.md#retrievefilelinks) | **GET** /file-links/{id} | Gets a file link by identifer
*FileLinksApi* | [**updateFileLinks**](docs/Api/FileLinksApi.md#updatefilelinks) | **POST** /file-links/{id} | Updates a file link
*FilesApi* | [**createFiles**](docs/Api/FilesApi.md#createfiles) | **POST** /files | Creates a file.
*FilesApi* | [**deleteFiles**](docs/Api/FilesApi.md#deletefiles) | **DELETE** /files/{id} | Deletes a file by ID.
*FilesApi* | [**downloadFiles**](docs/Api/FilesApi.md#downloadfiles) | **GET** /files/{id}/content | Gets file content by ID.
*FilesApi* | [**listFiles**](docs/Api/FilesApi.md#listfiles) | **GET** /files | Returns a list of files.
*FilesApi* | [**retrieveFiles**](docs/Api/FilesApi.md#retrievefiles) | **GET** /files/{id} | Gets a file by ID.
*FulfillmentCancellationsApi* | [**createFulfillmentCancellations**](docs/Api/FulfillmentCancellationsApi.md#createfulfillmentcancellations) | **POST** /fulfillment-cancellations | Creates a cancellation
*FulfillmentCancellationsApi* | [**listFulfillmentCancellations**](docs/Api/FulfillmentCancellationsApi.md#listfulfillmentcancellations) | **GET** /fulfillment-cancellations | Returns a list of fulfillment cancellations
*FulfillmentCancellationsApi* | [**retrieveFulfillmentCancellations**](docs/Api/FulfillmentCancellationsApi.md#retrievefulfillmentcancellations) | **GET** /fulfillment-cancellations/{id} | Gets a fulfillment cancellation by its unique identifier.
*FulfillmentOrdersApi* | [**createFulfillmentOrders**](docs/Api/FulfillmentOrdersApi.md#createfulfillmentorders) | **POST** /fulfillment-orders | Creates a new Fulfillment order
*FulfillmentOrdersApi* | [**listFulfillmentOrders**](docs/Api/FulfillmentOrdersApi.md#listfulfillmentorders) | **GET** /fulfillment-orders | Returns a list of Fulfillment orders.
*FulfillmentOrdersApi* | [**retrieveFulfillmentOrders**](docs/Api/FulfillmentOrdersApi.md#retrievefulfillmentorders) | **GET** /fulfillment-orders/{id} | Gets a Fulfillment order by ID.
*FulfillmentReturnsApi* | [**createFulfillmentReturns**](docs/Api/FulfillmentReturnsApi.md#createfulfillmentreturns) | **POST** /fulfillment-returns | Creates a return
*FulfillmentReturnsApi* | [**listFulfillmentReturns**](docs/Api/FulfillmentReturnsApi.md#listfulfillmentreturns) | **GET** /fulfillment-returns | Returns a list of fulfillment returns
*FulfillmentReturnsApi* | [**retrieveFulfillmentReturns**](docs/Api/FulfillmentReturnsApi.md#retrievefulfillmentreturns) | **GET** /fulfillment-returns/{id} | Gets a fulfillment return by its unique identifier
*FulfillmentsApi* | [**createFulfillments**](docs/Api/FulfillmentsApi.md#createfulfillments) | **POST** /fulfillments | Creates a Fulfillment
*FulfillmentsApi* | [**listFulfillments**](docs/Api/FulfillmentsApi.md#listfulfillments) | **GET** /fulfillments | Returns a list of Fulfillments.
*FulfillmentsApi* | [**retrieveFulfillments**](docs/Api/FulfillmentsApi.md#retrievefulfillments) | **GET** /fulfillments/{id} | Gets a Fulfillment by unique identifier
*InventoryItemsApi* | [**createInventoryItems**](docs/Api/InventoryItemsApi.md#createinventoryitems) | **POST** /inventory-items | Creates an inventory item.
*InventoryItemsApi* | [**deleteInventoryItems**](docs/Api/InventoryItemsApi.md#deleteinventoryitems) | **DELETE** /inventory-items/{id} | Deletes an inventory item by ID.
*InventoryItemsApi* | [**listInventoryItems**](docs/Api/InventoryItemsApi.md#listinventoryitems) | **GET** /inventory-items | Returns a list of inventory items.
*InventoryItemsApi* | [**retrieveInventoryItems**](docs/Api/InventoryItemsApi.md#retrieveinventoryitems) | **GET** /inventory-items/{id} | Gets an inventory item by ID.
*InventoryItemsApi* | [**updateInventoryItems**](docs/Api/InventoryItemsApi.md#updateinventoryitems) | **POST** /inventory-items/{id} | Updates an inventory item.
*InventoryLevelsApi* | [**listInventoryLevels**](docs/Api/InventoryLevelsApi.md#listinventorylevels) | **GET** /inventory-levels | Returns a list of inventory levels.
*InvoicesApi* | [**attachSourceToInvoice**](docs/Api/InvoicesApi.md#attachsourcetoinvoice) | **POST** /invoices/{id}/sources/{sourceId} | Attach source to invoice.
*InvoicesApi* | [**createInvoices**](docs/Api/InvoicesApi.md#createinvoices) | **POST** /invoices | Creates a new invoice
*InvoicesApi* | [**deleteInvoices**](docs/Api/InvoicesApi.md#deleteinvoices) | **DELETE** /invoices/{id} | Deletes an invoice.
*InvoicesApi* | [**detachSourceToInvoice**](docs/Api/InvoicesApi.md#detachsourcetoinvoice) | **DELETE** /invoices/{id}/sources/{sourceId} | Deletes a invoice association to source.
*InvoicesApi* | [**listInvoices**](docs/Api/InvoicesApi.md#listinvoices) | **GET** /invoices | Returns a list of invoices
*InvoicesApi* | [**openInvoices**](docs/Api/InvoicesApi.md#openinvoices) | **POST** /invoices/{id}/open | Opens an existing invoice
*InvoicesApi* | [**retrieveInvoices**](docs/Api/InvoicesApi.md#retrieveinvoices) | **GET** /invoices/{id} | Gets an invoice by identifier
*InvoicesApi* | [**updateInvoices**](docs/Api/InvoicesApi.md#updateinvoices) | **POST** /invoices/{id} | Updates an existing invoice
*InvoicesApi* | [**voidInvoices**](docs/Api/InvoicesApi.md#voidinvoices) | **POST** /invoices/{id}/void | Voids an existing invoice
*LogisticsReturnsApi* | [**createLogisticsReturns**](docs/Api/LogisticsReturnsApi.md#createlogisticsreturns) | **POST** /logistics-returns | Creates a return
*LogisticsReturnsApi* | [**listLogisticsReturns**](docs/Api/LogisticsReturnsApi.md#listlogisticsreturns) | **GET** /logistics-returns | Returns a list of returns
*LogisticsReturnsApi* | [**retrieveLogisticsReturns**](docs/Api/LogisticsReturnsApi.md#retrievelogisticsreturns) | **GET** /logistics-returns/{id} | Gets a return by ID
*OrdersApi* | [**createOrders**](docs/Api/OrdersApi.md#createorders) | **POST** /orders | Creates a new order.
*OrdersApi* | [**listOrders**](docs/Api/OrdersApi.md#listorders) | **GET** /orders | Returns a list of orders.
*OrdersApi* | [**retrieveOrders**](docs/Api/OrdersApi.md#retrieveorders) | **GET** /orders/{id} | Gets an order by ID.
*OrdersApi* | [**updateOrders**](docs/Api/OrdersApi.md#updateorders) | **POST** /orders/{id} | Updates an existing order.
*PayoutTransactionsApi* | [**listPayoutTransactions**](docs/Api/PayoutTransactionsApi.md#listpayouttransactions) | **GET** /payouts/{id}/transactions | Lists the payout transactions for a payout.
*PayoutsApi* | [**listPayouts**](docs/Api/PayoutsApi.md#listpayouts) | **GET** /payouts | Returns a list of payouts
*PayoutsApi* | [**retrievePayouts**](docs/Api/PayoutsApi.md#retrievepayouts) | **GET** /payouts/{id} | Gets a payout by ID.
*PlansApi* | [**createPlans**](docs/Api/PlansApi.md#createplans) | **POST** /plans | Creates a Plan
*PlansApi* | [**deletePlans**](docs/Api/PlansApi.md#deleteplans) | **DELETE** /plans/{id} | Deletes a Plan by ID
*PlansApi* | [**listPlans**](docs/Api/PlansApi.md#listplans) | **GET** /plans | Returns a list of Plans
*PlansApi* | [**retrievePlans**](docs/Api/PlansApi.md#retrieveplans) | **GET** /plans/{id} | Gets a Plan by ID
*PlansApi* | [**updatePlans**](docs/Api/PlansApi.md#updateplans) | **POST** /plans/{id} | Updates a Plan
*RefundsApi* | [**createRefunds**](docs/Api/RefundsApi.md#createrefunds) | **POST** /refunds | Creates a refund for an order.
*RefundsApi* | [**listRefunds**](docs/Api/RefundsApi.md#listrefunds) | **GET** /refunds | Returns a list of refunds
*RefundsApi* | [**retrieveRefunds**](docs/Api/RefundsApi.md#retrieverefunds) | **GET** /refunds/{id} | Gets a refund by ID.
*RefundsApi* | [**updateRefunds**](docs/Api/RefundsApi.md#updaterefunds) | **POST** /refunds/{id} | Updates a refund for an order or a specific order charge.
*ReservationsApi* | [**createReservations**](docs/Api/ReservationsApi.md#createreservations) | **POST** /reservations | Create a reservation
*ReservationsApi* | [**deleteReservations**](docs/Api/ReservationsApi.md#deletereservations) | **DELETE** /reservations/{id} | Cancels a reservation by ID.
*ReturnsApi* | [**createReturns**](docs/Api/ReturnsApi.md#createreturns) | **POST** /returns | Creates a return
*ReturnsApi* | [**listReturns**](docs/Api/ReturnsApi.md#listreturns) | **GET** /returns | Returns a list of returns
*ReturnsApi* | [**retrieveReturns**](docs/Api/ReturnsApi.md#retrievereturns) | **GET** /returns/{id} | Gets a return by ID
*ReturnsApi* | [**updateReturns**](docs/Api/ReturnsApi.md#updatereturns) | **POST** /returns/{id} | Updates an existing return
*SKUsApi* | [**createSkus**](docs/Api/SKUsApi.md#createskus) | **POST** /skus | Creates a SKU
*SKUsApi* | [**deleteSkus**](docs/Api/SKUsApi.md#deleteskus) | **DELETE** /skus/{id} | Deletes a SKU by ID
*SKUsApi* | [**listSkus**](docs/Api/SKUsApi.md#listskus) | **GET** /skus | Returns a list of SKUs
*SKUsApi* | [**retrieveSkus**](docs/Api/SKUsApi.md#retrieveskus) | **GET** /skus/{id} | Gets a SKU by ID
*SKUsApi* | [**updateSkus**](docs/Api/SKUsApi.md#updateskus) | **POST** /skus/{id} | Updates a SKU
*SKUsApi* | [**upsertSkus**](docs/Api/SKUsApi.md#upsertskus) | **PUT** /skus/{id} | Upserts a SKU
*SalesSummariesApi* | [**listSalesSummaries**](docs/Api/SalesSummariesApi.md#listsalessummaries) | **GET** /sales-summaries | Returns a list of sales summaries
*SalesSummariesApi* | [**retrieveSalesSummaries**](docs/Api/SalesSummariesApi.md#retrievesalessummaries) | **GET** /sales-summaries/{id} | Gets a sales summary by ID.
*SalesTransactionsApi* | [**listSalesTransactions**](docs/Api/SalesTransactionsApi.md#listsalestransactions) | **GET** /sales-transactions | Returns a list of sales transactions
*SalesTransactionsApi* | [**retrieveSalesTransactions**](docs/Api/SalesTransactionsApi.md#retrievesalestransactions) | **GET** /sales-transactions/{id} | Gets a sales transaction by ID.
*ShipmentsApi* | [**listShipments**](docs/Api/ShipmentsApi.md#listshipments) | **GET** /shipments | Returns a list of shipments
*ShipmentsApi* | [**retrieveShipments**](docs/Api/ShipmentsApi.md#retrieveshipments) | **GET** /shipments/{id} | Gets a shipment by ID.
*ShippingLabelsApi* | [**createShippingLabel**](docs/Api/ShippingLabelsApi.md#createshippinglabel) | **POST** /shipping-labels | Returns shipping label
*ShippingLabelsApi* | [**listShippingLabel**](docs/Api/ShippingLabelsApi.md#listshippinglabel) | **GET** /shipping-labels | Returns shipping label
*ShippingLabelsApi* | [**retrieveShippingLabels**](docs/Api/ShippingLabelsApi.md#retrieveshippinglabels) | **GET** /shipping-labels/{id} | Gets a shipping label by ID.
*ShippingQuotesApi* | [**postShippingQuotes**](docs/Api/ShippingQuotesApi.md#postshippingquotes) | **POST** /shipping-quotes | Returns shipping quotes
*SkuGroupsApi* | [**listSkuGroups**](docs/Api/SkuGroupsApi.md#listskugroups) | **GET** /sku-groups | Returns a list of SKU Groups
*SourcesApi* | [**createSources**](docs/Api/SourcesApi.md#createsources) | **POST** /sources | Posts a source
*SourcesApi* | [**retrieveSources**](docs/Api/SourcesApi.md#retrievesources) | **GET** /sources/{id} | Gets a source by identifier
*StoreCreditCalloutApi* | [**removeStoreCreditsCallout**](docs/Api/StoreCreditCalloutApi.md#removestorecreditscallout) | **DELETE** /checkouts/store-credits/{upstreamId} | Remove store credit callout
*StoreCreditCalloutApi* | [**storeCreditsCallout**](docs/Api/StoreCreditCalloutApi.md#storecreditscallout) | **POST** /checkouts/store-credits | Store credit callout
*SubscriptionsApi* | [**deleteSubscriptions**](docs/Api/SubscriptionsApi.md#deletesubscriptions) | **DELETE** /subscriptions/{id} | Deletes a Subscription by ID
*SubscriptionsApi* | [**listSubscriptions**](docs/Api/SubscriptionsApi.md#listsubscriptions) | **GET** /subscriptions | Returns a list of Subscriptions
*SubscriptionsApi* | [**retrieveSubscriptions**](docs/Api/SubscriptionsApi.md#retrievesubscriptions) | **GET** /subscriptions/{id} | Gets a Subscription by ID
*SubscriptionsApi* | [**updateSubscriptions**](docs/Api/SubscriptionsApi.md#updatesubscriptions) | **POST** /subscriptions/{id} | Updates a Subscription
*TaxIdentifiersApi* | [**createTaxIdentifiers**](docs/Api/TaxIdentifiersApi.md#createtaxidentifiers) | **POST** /tax-identifiers | Creates a new tax identifier
*TaxIdentifiersApi* | [**deleteTaxIdentifiers**](docs/Api/TaxIdentifiersApi.md#deletetaxidentifiers) | **DELETE** /tax-identifiers/{id} | Deletes a tax identifier by ID.
*TaxIdentifiersApi* | [**listTaxIdentifiers**](docs/Api/TaxIdentifiersApi.md#listtaxidentifiers) | **GET** /tax-identifiers | Returns a list of tax identifiers
*TaxIdentifiersApi* | [**retrieveTaxIdentifiers**](docs/Api/TaxIdentifiersApi.md#retrievetaxidentifiers) | **GET** /tax-identifiers/{id} | Gets a tax identifier by ID.
*WebhooksApi* | [**createWebhooks**](docs/Api/WebhooksApi.md#createwebhooks) | **POST** /webhooks | Creates a new webhook
*WebhooksApi* | [**deleteWebhooks**](docs/Api/WebhooksApi.md#deletewebhooks) | **DELETE** /webhooks/{id} | Deletes a webhook endpoint by ID.
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /webhooks | Returns a list of webhooks
*WebhooksApi* | [**retrieveWebhooks**](docs/Api/WebhooksApi.md#retrievewebhooks) | **GET** /webhooks/{id} | Gets a webhook endpoint by ID.
*WebhooksApi* | [**updateWebhooks**](docs/Api/WebhooksApi.md#updatewebhooks) | **PATCH** /webhooks/{id} | Updates an existing webhook endpoint

## Models

- [AdditionalAddressInfo](docs/Model/AdditionalAddressInfo.md)
- [AdditionalBillingAddressInfo](docs/Model/AdditionalBillingAddressInfo.md)
- [Address](docs/Model/Address.md)
- [Applicability](docs/Model/Applicability.md)
- [Attributes](docs/Model/Attributes.md)
- [BPay](docs/Model/BPay.md)
- [Battery](docs/Model/Battery.md)
- [Billing](docs/Model/Billing.md)
- [Billing1](docs/Model/Billing1.md)
- [Business](docs/Model/Business.md)
- [Cancel](docs/Model/Cancel.md)
- [Capture](docs/Model/Capture.md)
- [Charge](docs/Model/Charge.md)
- [ChargeType](docs/Model/ChargeType.md)
- [Charges](docs/Model/Charges.md)
- [Checkout](docs/Model/Checkout.md)
- [CheckoutLinkDetails](docs/Model/CheckoutLinkDetails.md)
- [CheckoutRequest](docs/Model/CheckoutRequest.md)
- [CheckoutTaxIdentifierRequest](docs/Model/CheckoutTaxIdentifierRequest.md)
- [CountrySpecification](docs/Model/CountrySpecification.md)
- [CreateDropInCheckoutTokenResponse](docs/Model/CreateDropInCheckoutTokenResponse.md)
- [CreateReturnsResponse](docs/Model/CreateReturnsResponse.md)
- [CreditCard](docs/Model/CreditCard.md)
- [CreditSource](docs/Model/CreditSource.md)
- [Customer](docs/Model/Customer.md)
- [CustomerRequest](docs/Model/CustomerRequest.md)
- [CustomerTaxIdentifier](docs/Model/CustomerTaxIdentifier.md)
- [CustomerType](docs/Model/CustomerType.md)
- [CustomerType1](docs/Model/CustomerType1.md)
- [DirectDebit](docs/Model/DirectDebit.md)
- [DirectDebitRedirect](docs/Model/DirectDebitRedirect.md)
- [Disclosure](docs/Model/Disclosure.md)
- [DisclosureDetails](docs/Model/DisclosureDetails.md)
- [Disclosures](docs/Model/Disclosures.md)
- [Discount](docs/Model/Discount.md)
- [DropInCheckoutLink](docs/Model/DropInCheckoutLink.md)
- [DropInCheckoutLinkResponse](docs/Model/DropInCheckoutLinkResponse.md)
- [DropInCheckoutRequest](docs/Model/DropInCheckoutRequest.md)
- [DropInCheckoutSession](docs/Model/DropInCheckoutSession.md)
- [DropInOptionsRequest](docs/Model/DropInOptionsRequest.md)
- [DropInSku](docs/Model/DropInSku.md)
- [Duties](docs/Model/Duties.md)
- [Error](docs/Model/Error.md)
- [Errors](docs/Model/Errors.md)
- [Event](docs/Model/Event.md)
- [EventData](docs/Model/EventData.md)
- [Fee](docs/Model/Fee.md)
- [FeeDetails](docs/Model/FeeDetails.md)
- [FeeRequest](docs/Model/FeeRequest.md)
- [FeeUpdateRequest](docs/Model/FeeUpdateRequest.md)
- [Fees](docs/Model/Fees.md)
- [File](docs/Model/File.md)
- [FileContent](docs/Model/FileContent.md)
- [FileJsonRequest](docs/Model/FileJsonRequest.md)
- [FileLink](docs/Model/FileLink.md)
- [FileLinkRequest](docs/Model/FileLinkRequest.md)
- [FileObject](docs/Model/FileObject.md)
- [FraudStateTransitions](docs/Model/FraudStateTransitions.md)
- [Fulfillment](docs/Model/Fulfillment.md)
- [FulfillmentOrder](docs/Model/FulfillmentOrder.md)
- [FulfillmentRequest](docs/Model/FulfillmentRequest.md)
- [FulfillmentRequestItem](docs/Model/FulfillmentRequestItem.md)
- [FulfillmentResponseItem](docs/Model/FulfillmentResponseItem.md)
- [GLAddress](docs/Model/GLAddress.md)
- [GLShipFrom](docs/Model/GLShipFrom.md)
- [GiftCard](docs/Model/GiftCard.md)
- [GlobalFulfillmentAddress](docs/Model/GlobalFulfillmentAddress.md)
- [GlobalFulfillmentCancellationItemRequest](docs/Model/GlobalFulfillmentCancellationItemRequest.md)
- [GlobalFulfillmentCancellationItemResponse](docs/Model/GlobalFulfillmentCancellationItemResponse.md)
- [GlobalFulfillmentCancellationRequest](docs/Model/GlobalFulfillmentCancellationRequest.md)
- [GlobalFulfillmentCancellationResponse](docs/Model/GlobalFulfillmentCancellationResponse.md)
- [GlobalFulfillmentOrder](docs/Model/GlobalFulfillmentOrder.md)
- [GlobalFulfillmentOrderRequest](docs/Model/GlobalFulfillmentOrderRequest.md)
- [GlobalFulfillmentReturnItemRequest](docs/Model/GlobalFulfillmentReturnItemRequest.md)
- [GlobalFulfillmentReturnItemResponse](docs/Model/GlobalFulfillmentReturnItemResponse.md)
- [GlobalFulfillmentReturnRequest](docs/Model/GlobalFulfillmentReturnRequest.md)
- [GlobalFulfillmentReturnResponse](docs/Model/GlobalFulfillmentReturnResponse.md)
- [GlobalFulfillmentShippingChoice](docs/Model/GlobalFulfillmentShippingChoice.md)
- [GlobalFulfillmentTax](docs/Model/GlobalFulfillmentTax.md)
- [GooglePay](docs/Model/GooglePay.md)
- [HTTPAuthorization](docs/Model/HTTPAuthorization.md)
- [ImporterTax](docs/Model/ImporterTax.md)
- [Individual](docs/Model/Individual.md)
- [IntegrationAddress](docs/Model/IntegrationAddress.md)
- [IntegrationShippingMethod](docs/Model/IntegrationShippingMethod.md)
- [IntegrationStoreCreditRequest](docs/Model/IntegrationStoreCreditRequest.md)
- [InternetBankPayment](docs/Model/InternetBankPayment.md)
- [InventoryItem](docs/Model/InventoryItem.md)
- [InventoryItemRequest](docs/Model/InventoryItemRequest.md)
- [InventoryItemUpdateRequest](docs/Model/InventoryItemUpdateRequest.md)
- [InventoryLevel](docs/Model/InventoryLevel.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceAttributeInfo](docs/Model/InvoiceAttributeInfo.md)
- [InvoiceAttributes](docs/Model/InvoiceAttributes.md)
- [InvoiceItem](docs/Model/InvoiceItem.md)
- [InvoiceItemRequest](docs/Model/InvoiceItemRequest.md)
- [InvoiceRequest](docs/Model/InvoiceRequest.md)
- [ItemShipping](docs/Model/ItemShipping.md)
- [Klarna](docs/Model/Klarna.md)
- [KlarnaAddress](docs/Model/KlarnaAddress.md)
- [KlarnaRecurring](docs/Model/KlarnaRecurring.md)
- [KlarnaShipping](docs/Model/KlarnaShipping.md)
- [Konbini](docs/Model/Konbini.md)
- [LabelResponse](docs/Model/LabelResponse.md)
- [LineItem](docs/Model/LineItem.md)
- [LineItemRequest](docs/Model/LineItemRequest.md)
- [ListCheckoutLinksResponse](docs/Model/ListCheckoutLinksResponse.md)
- [ListCheckoutsResponse](docs/Model/ListCheckoutsResponse.md)
- [ListCountrySpecsResponse](docs/Model/ListCountrySpecsResponse.md)
- [ListCustomersResponse](docs/Model/ListCustomersResponse.md)
- [ListEventsResponse](docs/Model/ListEventsResponse.md)
- [ListFeesResponse](docs/Model/ListFeesResponse.md)
- [ListFileLinksResponse](docs/Model/ListFileLinksResponse.md)
- [ListFilesResponse](docs/Model/ListFilesResponse.md)
- [ListFulfillmentOrders200Response](docs/Model/ListFulfillmentOrders200Response.md)
- [ListFulfillmentsResponse](docs/Model/ListFulfillmentsResponse.md)
- [ListGlobalFulfillmentCancellationsResponse](docs/Model/ListGlobalFulfillmentCancellationsResponse.md)
- [ListGlobalFulfillmentReturnsResponse](docs/Model/ListGlobalFulfillmentReturnsResponse.md)
- [ListInventoryItems200Response](docs/Model/ListInventoryItems200Response.md)
- [ListInventoryLevels200Response](docs/Model/ListInventoryLevels200Response.md)
- [ListInvoices200Response](docs/Model/ListInvoices200Response.md)
- [ListOrdersResponse](docs/Model/ListOrdersResponse.md)
- [ListPayoutTransactionResponse](docs/Model/ListPayoutTransactionResponse.md)
- [ListPayoutsResponse](docs/Model/ListPayoutsResponse.md)
- [ListPlansResponse](docs/Model/ListPlansResponse.md)
- [ListRefundsResponse](docs/Model/ListRefundsResponse.md)
- [ListReturnsResponse](docs/Model/ListReturnsResponse.md)
- [ListReturnsResponse1](docs/Model/ListReturnsResponse1.md)
- [ListSalesSummariesResponse](docs/Model/ListSalesSummariesResponse.md)
- [ListSalesTransactionsResponse](docs/Model/ListSalesTransactionsResponse.md)
- [ListShipments200Response](docs/Model/ListShipments200Response.md)
- [ListShippingLabel](docs/Model/ListShippingLabel.md)
- [ListSkuGroupsResponse](docs/Model/ListSkuGroupsResponse.md)
- [ListSkusResponse](docs/Model/ListSkusResponse.md)
- [ListSubscriptionsResponse](docs/Model/ListSubscriptionsResponse.md)
- [ListTaxIdentifiers200Response](docs/Model/ListTaxIdentifiers200Response.md)
- [Location](docs/Model/Location.md)
- [OAUTHTokenInfo](docs/Model/OAUTHTokenInfo.md)
- [Order](docs/Model/Order.md)
- [OrderDetails](docs/Model/OrderDetails.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderItem1](docs/Model/OrderItem1.md)
- [OrderItemStateTransitions](docs/Model/OrderItemStateTransitions.md)
- [OrderRefund](docs/Model/OrderRefund.md)
- [OrderRequest](docs/Model/OrderRequest.md)
- [OrderStateTransitions](docs/Model/OrderStateTransitions.md)
- [Organization](docs/Model/Organization.md)
- [Owner](docs/Model/Owner.md)
- [PackageRequest](docs/Model/PackageRequest.md)
- [Packages](docs/Model/Packages.md)
- [PayPal](docs/Model/PayPal.md)
- [PayPalToken](docs/Model/PayPalToken.md)
- [PaycoResponse](docs/Model/PaycoResponse.md)
- [Payments](docs/Model/Payments.md)
- [Payout](docs/Model/Payout.md)
- [PayoutAmounts](docs/Model/PayoutAmounts.md)
- [PayoutTransaction](docs/Model/PayoutTransaction.md)
- [Plan](docs/Model/Plan.md)
- [PlanRequest](docs/Model/PlanRequest.md)
- [PricingFormat](docs/Model/PricingFormat.md)
- [ProductDetails](docs/Model/ProductDetails.md)
- [ProductItem](docs/Model/ProductItem.md)
- [ProductItemRequest](docs/Model/ProductItemRequest.md)
- [PurchaseLocation](docs/Model/PurchaseLocation.md)
- [Redirect](docs/Model/Redirect.md)
- [Redirects](docs/Model/Redirects.md)
- [Refund](docs/Model/Refund.md)
- [RefundCharges](docs/Model/RefundCharges.md)
- [RefundItem](docs/Model/RefundItem.md)
- [RefundItemRequest](docs/Model/RefundItemRequest.md)
- [RefundRequest](docs/Model/RefundRequest.md)
- [RequestReturnsItem](docs/Model/RequestReturnsItem.md)
- [Reservation](docs/Model/Reservation.md)
- [ReservationAddress](docs/Model/ReservationAddress.md)
- [ReservationInventoryItem](docs/Model/ReservationInventoryItem.md)
- [ReservationRequest](docs/Model/ReservationRequest.md)
- [ReservationShipping](docs/Model/ReservationShipping.md)
- [ReservationShippingChoice](docs/Model/ReservationShippingChoice.md)
- [ReturnItem](docs/Model/ReturnItem.md)
- [ReturnItemRequest](docs/Model/ReturnItemRequest.md)
- [ReturnRequest](docs/Model/ReturnRequest.md)
- [ReturnResponse](docs/Model/ReturnResponse.md)
- [ReturnsAddress](docs/Model/ReturnsAddress.md)
- [ReturnsItem](docs/Model/ReturnsItem.md)
- [ReturnsLocation](docs/Model/ReturnsLocation.md)
- [ReturnsRequest](docs/Model/ReturnsRequest.md)
- [ReturnsResponse](docs/Model/ReturnsResponse.md)
- [SalesSummary](docs/Model/SalesSummary.md)
- [SalesTransaction](docs/Model/SalesTransaction.md)
- [SellingEntity](docs/Model/SellingEntity.md)
- [Session](docs/Model/Session.md)
- [ShipFrom](docs/Model/ShipFrom.md)
- [ShipFrom1](docs/Model/ShipFrom1.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentItem](docs/Model/ShipmentItem.md)
- [ShipmentUnitAttributes](docs/Model/ShipmentUnitAttributes.md)
- [Shipments](docs/Model/Shipments.md)
- [Shipping](docs/Model/Shipping.md)
- [Shipping1](docs/Model/Shipping1.md)
- [ShippingChoice](docs/Model/ShippingChoice.md)
- [ShippingLabelRequest](docs/Model/ShippingLabelRequest.md)
- [ShippingLabelResponse](docs/Model/ShippingLabelResponse.md)
- [ShippingMethod](docs/Model/ShippingMethod.md)
- [ShippingMethodQuote](docs/Model/ShippingMethodQuote.md)
- [ShippingMethodQuoteItemRequest](docs/Model/ShippingMethodQuoteItemRequest.md)
- [ShippingMethodQuoteItemResponse](docs/Model/ShippingMethodQuoteItemResponse.md)
- [ShippingMethodQuoteRequest](docs/Model/ShippingMethodQuoteRequest.md)
- [ShippingMethodQuoteResponse](docs/Model/ShippingMethodQuoteResponse.md)
- [ShippingQuote](docs/Model/ShippingQuote.md)
- [ShippingQuoteFees](docs/Model/ShippingQuoteFees.md)
- [ShippingQuoteFeesDetails](docs/Model/ShippingQuoteFeesDetails.md)
- [ShippingQuotePackages](docs/Model/ShippingQuotePackages.md)
- [ShippingQuoteRequest](docs/Model/ShippingQuoteRequest.md)
- [ShippingQuoteResponse](docs/Model/ShippingQuoteResponse.md)
- [ShippingRequest](docs/Model/ShippingRequest.md)
- [Sku](docs/Model/Sku.md)
- [SkuDiscount](docs/Model/SkuDiscount.md)
- [SkuGroup](docs/Model/SkuGroup.md)
- [SkuItem](docs/Model/SkuItem.md)
- [SkuItemRequest](docs/Model/SkuItemRequest.md)
- [SkuRequest](docs/Model/SkuRequest.md)
- [SkuRequestItem](docs/Model/SkuRequestItem.md)
- [SkuUpdateRequestItem](docs/Model/SkuUpdateRequestItem.md)
- [SkuUpsertRequest](docs/Model/SkuUpsertRequest.md)
- [Source](docs/Model/Source.md)
- [StateTransitions](docs/Model/StateTransitions.md)
- [StoreCreditAuthorizationRequest](docs/Model/StoreCreditAuthorizationRequest.md)
- [StoreCreditValidationResponse](docs/Model/StoreCreditValidationResponse.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionInfo](docs/Model/SubscriptionInfo.md)
- [SubscriptionItems](docs/Model/SubscriptionItems.md)
- [SubscriptionStateTransitions](docs/Model/SubscriptionStateTransitions.md)
- [Tax](docs/Model/Tax.md)
- [TaxCertificate](docs/Model/TaxCertificate.md)
- [TaxDetail](docs/Model/TaxDetail.md)
- [TaxIdentifier](docs/Model/TaxIdentifier.md)
- [TaxIdentifier1](docs/Model/TaxIdentifier1.md)
- [TaxIdentifierRequest](docs/Model/TaxIdentifierRequest.md)
- [TaxIdentifierStateTransitions](docs/Model/TaxIdentifierStateTransitions.md)
- [TaxIdentifiersInfo](docs/Model/TaxIdentifiersInfo.md)
- [TokenInformation](docs/Model/TokenInformation.md)
- [Tracking](docs/Model/Tracking.md)
- [UnitAttributes](docs/Model/UnitAttributes.md)
- [UpdateCheckoutRequest](docs/Model/UpdateCheckoutRequest.md)
- [UpdateCustomerRequest](docs/Model/UpdateCustomerRequest.md)
- [UpdateFileLinkRequest](docs/Model/UpdateFileLinkRequest.md)
- [UpdateInvoiceRequest](docs/Model/UpdateInvoiceRequest.md)
- [UpdateOrderRequest](docs/Model/UpdateOrderRequest.md)
- [UpdatePlanRequest](docs/Model/UpdatePlanRequest.md)
- [UpdateRefundRequest](docs/Model/UpdateRefundRequest.md)
- [UpdateReturnsItem](docs/Model/UpdateReturnsItem.md)
- [UpdateReturnsRequest](docs/Model/UpdateReturnsRequest.md)
- [UpdateSkuRequest](docs/Model/UpdateSkuRequest.md)
- [UpdateSubscriptionRequest](docs/Model/UpdateSubscriptionRequest.md)
- [UpdateTaxIdentifierRequest](docs/Model/UpdateTaxIdentifierRequest.md)
- [WEEE](docs/Model/WEEE.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookOauth](docs/Model/WebhookOauth.md)
- [WebhookRequest](docs/Model/WebhookRequest.md)
- [WebhookRequestAuthentication](docs/Model/WebhookRequestAuthentication.md)
- [WebhookRequestOauth](docs/Model/WebhookRequestOauth.md)
- [WebhookUpdateRequest](docs/Model/WebhookUpdateRequest.md)
- [WebhookUpdateRequestOauth](docs/Model/WebhookUpdateRequestOauth.md)
- [WireTransfer](docs/Model/WireTransfer.md)

## Authorization

### apiKey

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header



### basicAuth

- **Type**: HTTP basic authentication


### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2023`
    - Package version: `2023`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
