<?php
/**
 * OrderRequest
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
 * removed by liao, too long
 *
 * The version of the OpenAPI document: 2023
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
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
 * OrderRequest Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'checkout_id' => 'string',
        'customer_id' => 'string',
        'source_id' => 'string',
        'currency' => 'string',
        'email' => 'string',
        'locale' => 'string',
        'invoice_attribute_id' => 'string',
        'application_id' => 'string',
        'browser_ip' => 'string',
        'ship_from' => '\DigitalRiver\ApiSdk\Model\ShipFrom',
        'ship_to' => '\DigitalRiver\ApiSdk\Model\Shipping',
        'bill_to' => '\DigitalRiver\ApiSdk\Model\Billing',
        'organization' => '\DigitalRiver\ApiSdk\Model\Organization',
        'shipping_choice' => '\DigitalRiver\ApiSdk\Model\ShippingRequest',
        'discount' => '\DigitalRiver\ApiSdk\Model\Discount',
        'billing_optimization' => '\DigitalRiver\ApiSdk\Model\BillingOptimization',
        'items' => '\DigitalRiver\ApiSdk\Model\SkuRequestItem[]',
        'shipping_discount' => '\DigitalRiver\ApiSdk\Model\Discount',
        'tax_inclusive' => 'bool',
        'tax_identifiers' => '\DigitalRiver\ApiSdk\Model\CheckoutTaxIdentifierRequest[]',
        'charge_type' => '\DigitalRiver\ApiSdk\Model\ChargeType',
        'customer_type' => '\DigitalRiver\ApiSdk\Model\CustomerType',
        'metadata' => 'array<string,mixed>',
        'purchase_location' => '\DigitalRiver\ApiSdk\Model\PurchaseLocation',
        'disclosures' => '\DigitalRiver\ApiSdk\Model\DisclosureDetails[]',
        'upstream_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'checkout_id' => null,
        'customer_id' => null,
        'source_id' => null,
        'currency' => null,
        'email' => 'email',
        'locale' => null,
        'invoice_attribute_id' => null,
        'application_id' => null,
        'browser_ip' => null,
        'ship_from' => null,
        'ship_to' => null,
        'bill_to' => null,
        'organization' => null,
        'shipping_choice' => null,
        'discount' => null,
        'billing_optimization' => null,
        'items' => null,
        'shipping_discount' => null,
        'tax_inclusive' => null,
        'tax_identifiers' => null,
        'charge_type' => null,
        'customer_type' => null,
        'metadata' => null,
        'purchase_location' => null,
        'disclosures' => null,
        'upstream_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'checkout_id' => false,
		'customer_id' => false,
		'source_id' => false,
		'currency' => false,
		'email' => false,
		'locale' => false,
		'invoice_attribute_id' => false,
		'application_id' => false,
		'browser_ip' => false,
		'ship_from' => false,
		'ship_to' => false,
		'bill_to' => false,
		'organization' => false,
		'shipping_choice' => true,
		'discount' => false,
		'billing_optimization' => false,
		'items' => false,
		'shipping_discount' => false,
		'tax_inclusive' => false,
		'tax_identifiers' => false,
		'charge_type' => false,
		'customer_type' => false,
		'metadata' => false,
		'purchase_location' => false,
		'disclosures' => false,
		'upstream_id' => false
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
        'checkout_id' => 'checkoutId',
        'customer_id' => 'customerId',
        'source_id' => 'sourceId',
        'currency' => 'currency',
        'email' => 'email',
        'locale' => 'locale',
        'invoice_attribute_id' => 'invoiceAttributeId',
        'application_id' => 'applicationId',
        'browser_ip' => 'browserIp',
        'ship_from' => 'shipFrom',
        'ship_to' => 'shipTo',
        'bill_to' => 'billTo',
        'organization' => 'organization',
        'shipping_choice' => 'shippingChoice',
        'discount' => 'discount',
        'billing_optimization' => 'billingOptimization',
        'items' => 'items',
        'shipping_discount' => 'shippingDiscount',
        'tax_inclusive' => 'taxInclusive',
        'tax_identifiers' => 'taxIdentifiers',
        'charge_type' => 'chargeType',
        'customer_type' => 'customerType',
        'metadata' => 'metadata',
        'purchase_location' => 'purchaseLocation',
        'disclosures' => 'disclosures',
        'upstream_id' => 'upstreamId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checkout_id' => 'setCheckoutId',
        'customer_id' => 'setCustomerId',
        'source_id' => 'setSourceId',
        'currency' => 'setCurrency',
        'email' => 'setEmail',
        'locale' => 'setLocale',
        'invoice_attribute_id' => 'setInvoiceAttributeId',
        'application_id' => 'setApplicationId',
        'browser_ip' => 'setBrowserIp',
        'ship_from' => 'setShipFrom',
        'ship_to' => 'setShipTo',
        'bill_to' => 'setBillTo',
        'organization' => 'setOrganization',
        'shipping_choice' => 'setShippingChoice',
        'discount' => 'setDiscount',
        'billing_optimization' => 'setBillingOptimization',
        'items' => 'setItems',
        'shipping_discount' => 'setShippingDiscount',
        'tax_inclusive' => 'setTaxInclusive',
        'tax_identifiers' => 'setTaxIdentifiers',
        'charge_type' => 'setChargeType',
        'customer_type' => 'setCustomerType',
        'metadata' => 'setMetadata',
        'purchase_location' => 'setPurchaseLocation',
        'disclosures' => 'setDisclosures',
        'upstream_id' => 'setUpstreamId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checkout_id' => 'getCheckoutId',
        'customer_id' => 'getCustomerId',
        'source_id' => 'getSourceId',
        'currency' => 'getCurrency',
        'email' => 'getEmail',
        'locale' => 'getLocale',
        'invoice_attribute_id' => 'getInvoiceAttributeId',
        'application_id' => 'getApplicationId',
        'browser_ip' => 'getBrowserIp',
        'ship_from' => 'getShipFrom',
        'ship_to' => 'getShipTo',
        'bill_to' => 'getBillTo',
        'organization' => 'getOrganization',
        'shipping_choice' => 'getShippingChoice',
        'discount' => 'getDiscount',
        'billing_optimization' => 'getBillingOptimization',
        'items' => 'getItems',
        'shipping_discount' => 'getShippingDiscount',
        'tax_inclusive' => 'getTaxInclusive',
        'tax_identifiers' => 'getTaxIdentifiers',
        'charge_type' => 'getChargeType',
        'customer_type' => 'getCustomerType',
        'metadata' => 'getMetadata',
        'purchase_location' => 'getPurchaseLocation',
        'disclosures' => 'getDisclosures',
        'upstream_id' => 'getUpstreamId'
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
        $this->setIfExists('checkout_id', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('invoice_attribute_id', $data ?? [], null);
        $this->setIfExists('application_id', $data ?? [], null);
        $this->setIfExists('browser_ip', $data ?? [], null);
        $this->setIfExists('ship_from', $data ?? [], null);
        $this->setIfExists('ship_to', $data ?? [], null);
        $this->setIfExists('bill_to', $data ?? [], null);
        $this->setIfExists('organization', $data ?? [], null);
        $this->setIfExists('shipping_choice', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('billing_optimization', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('shipping_discount', $data ?? [], null);
        $this->setIfExists('tax_inclusive', $data ?? [], null);
        $this->setIfExists('tax_identifiers', $data ?? [], null);
        $this->setIfExists('charge_type', $data ?? [], null);
        $this->setIfExists('customer_type', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('purchase_location', $data ?? [], null);
        $this->setIfExists('disclosures', $data ?? [], null);
        $this->setIfExists('upstream_id', $data ?? [], null);
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
     * @param string|null $checkout_id The unique identifier of a Checkout.
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
     * @param string|null $customer_id The identifier of the Customer associated with the Checkout.
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
     * @param string|null $source_id The unique identifier of a Source.
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
     * Gets invoice_attribute_id
     *
     * @return string|null
     */
    public function getInvoiceAttributeId()
    {
        return $this->container['invoice_attribute_id'];
    }

    /**
     * Sets invoice_attribute_id
     *
     * @param string|null $invoice_attribute_id The unique identfier of the invoice attribute.
     *
     * @return self
     */
    public function setInvoiceAttributeId($invoice_attribute_id)
    {
        if (is_null($invoice_attribute_id)) {
            throw new \InvalidArgumentException('non-nullable invoice_attribute_id cannot be null');
        }
        $this->container['invoice_attribute_id'] = $invoice_attribute_id;

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
     * Gets shipping_choice
     *
     * @return \DigitalRiver\ApiSdk\Model\ShippingRequest|null
     */
    public function getShippingChoice()
    {
        return $this->container['shipping_choice'];
    }

    /**
     * Sets shipping_choice
     *
     * @param \DigitalRiver\ApiSdk\Model\ShippingRequest|null $shipping_choice shipping_choice
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
     * Gets billing_optimization
     *
     * @return \DigitalRiver\ApiSdk\Model\BillingOptimization|null
     */
    public function getBillingOptimization()
    {
        return $this->container['billing_optimization'];
    }

    /**
     * Sets billing_optimization
     *
     * @param \DigitalRiver\ApiSdk\Model\BillingOptimization|null $billing_optimization billing_optimization
     *
     * @return self
     */
    public function setBillingOptimization($billing_optimization)
    {
        if (is_null($billing_optimization)) {
            throw new \InvalidArgumentException('non-nullable billing_optimization cannot be null');
        }
        $this->container['billing_optimization'] = $billing_optimization;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \DigitalRiver\ApiSdk\Model\SkuRequestItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \DigitalRiver\ApiSdk\Model\SkuRequestItem[]|null $items items
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
     * Gets shipping_discount
     *
     * @return \DigitalRiver\ApiSdk\Model\Discount|null
     */
    public function getShippingDiscount()
    {
        return $this->container['shipping_discount'];
    }

    /**
     * Sets shipping_discount
     *
     * @param \DigitalRiver\ApiSdk\Model\Discount|null $shipping_discount shipping_discount
     *
     * @return self
     */
    public function setShippingDiscount($shipping_discount)
    {
        if (is_null($shipping_discount)) {
            throw new \InvalidArgumentException('non-nullable shipping_discount cannot be null');
        }
        $this->container['shipping_discount'] = $shipping_discount;

        return $this;
    }

    /**
     * Gets tax_inclusive
     *
     * @return bool|null
     */
    public function getTaxInclusive()
    {
        return $this->container['tax_inclusive'];
    }

    /**
     * Sets tax_inclusive
     *
     * @param bool|null $tax_inclusive If <code>true</code>, indicates that the prices supplied are tax inclusive.
     *
     * @return self
     */
    public function setTaxInclusive($tax_inclusive)
    {
        if (is_null($tax_inclusive)) {
            throw new \InvalidArgumentException('non-nullable tax_inclusive cannot be null');
        }
        $this->container['tax_inclusive'] = $tax_inclusive;

        return $this;
    }

    /**
     * Gets tax_identifiers
     *
     * @return \DigitalRiver\ApiSdk\Model\CheckoutTaxIdentifierRequest[]|null
     */
    public function getTaxIdentifiers()
    {
        return $this->container['tax_identifiers'];
    }

    /**
     * Sets tax_identifiers
     *
     * @param \DigitalRiver\ApiSdk\Model\CheckoutTaxIdentifierRequest[]|null $tax_identifiers tax_identifiers
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
     * Gets charge_type
     *
     * @return \DigitalRiver\ApiSdk\Model\ChargeType|null
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param \DigitalRiver\ApiSdk\Model\ChargeType|null $charge_type charge_type
     *
     * @return self
     */
    public function setChargeType($charge_type)
    {
        if (is_null($charge_type)) {
            throw new \InvalidArgumentException('non-nullable charge_type cannot be null');
        }
        $this->container['charge_type'] = $charge_type;

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
     * Gets disclosures
     *
     * @return \DigitalRiver\ApiSdk\Model\DisclosureDetails[]|null
     */
    public function getDisclosures()
    {
        return $this->container['disclosures'];
    }

    /**
     * Sets disclosures
     *
     * @param \DigitalRiver\ApiSdk\Model\DisclosureDetails[]|null $disclosures disclosures
     *
     * @return self
     */
    public function setDisclosures($disclosures)
    {
        if (is_null($disclosures)) {
            throw new \InvalidArgumentException('non-nullable disclosures cannot be null');
        }
        $this->container['disclosures'] = $disclosures;

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
            throw new \InvalidArgumentException('non-nullable upstream_id cannot be null');
        }
        $this->container['upstream_id'] = $upstream_id;

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


