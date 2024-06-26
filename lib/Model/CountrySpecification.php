<?php
/**
 * CountrySpecification
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
 * The version of the OpenAPI document: 2024
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0-SNAPSHOT
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
 * CountrySpecification Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CountrySpecification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CountrySpecification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'selling_entity' => 'string',
        'billing_address_schema' => 'string',
        'shipping_address_schema' => 'string',
        'billing_address_only_schema' => 'string',
        'individual_tax_identifiers_schemas' => 'string[]',
        'business_tax_identifiers_schemas' => 'string[]',
        'tax_identifiers_info' => '\DigitalRiver\ApiSdk\Model\TaxIdentifiersInfo',
        'invoice_attribute_info' => '\DigitalRiver\ApiSdk\Model\InvoiceAttributeInfo',
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
        'country' => null,
        'selling_entity' => null,
        'billing_address_schema' => null,
        'shipping_address_schema' => null,
        'billing_address_only_schema' => null,
        'individual_tax_identifiers_schemas' => null,
        'business_tax_identifiers_schemas' => null,
        'tax_identifiers_info' => null,
        'invoice_attribute_info' => null,
        'live_mode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'country' => false,
        'selling_entity' => false,
        'billing_address_schema' => true,
        'shipping_address_schema' => true,
        'billing_address_only_schema' => true,
        'individual_tax_identifiers_schemas' => false,
        'business_tax_identifiers_schemas' => false,
        'tax_identifiers_info' => false,
        'invoice_attribute_info' => false,
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
        'country' => 'country',
        'selling_entity' => 'sellingEntity',
        'billing_address_schema' => 'billingAddressSchema',
        'shipping_address_schema' => 'shippingAddressSchema',
        'billing_address_only_schema' => 'billingAddressOnlySchema',
        'individual_tax_identifiers_schemas' => 'individualTaxIdentifiersSchemas',
        'business_tax_identifiers_schemas' => 'businessTaxIdentifiersSchemas',
        'tax_identifiers_info' => 'taxIdentifiersInfo',
        'invoice_attribute_info' => 'invoiceAttributeInfo',
        'live_mode' => 'liveMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'selling_entity' => 'setSellingEntity',
        'billing_address_schema' => 'setBillingAddressSchema',
        'shipping_address_schema' => 'setShippingAddressSchema',
        'billing_address_only_schema' => 'setBillingAddressOnlySchema',
        'individual_tax_identifiers_schemas' => 'setIndividualTaxIdentifiersSchemas',
        'business_tax_identifiers_schemas' => 'setBusinessTaxIdentifiersSchemas',
        'tax_identifiers_info' => 'setTaxIdentifiersInfo',
        'invoice_attribute_info' => 'setInvoiceAttributeInfo',
        'live_mode' => 'setLiveMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'selling_entity' => 'getSellingEntity',
        'billing_address_schema' => 'getBillingAddressSchema',
        'shipping_address_schema' => 'getShippingAddressSchema',
        'billing_address_only_schema' => 'getBillingAddressOnlySchema',
        'individual_tax_identifiers_schemas' => 'getIndividualTaxIdentifiersSchemas',
        'business_tax_identifiers_schemas' => 'getBusinessTaxIdentifiersSchemas',
        'tax_identifiers_info' => 'getTaxIdentifiersInfo',
        'invoice_attribute_info' => 'getInvoiceAttributeInfo',
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
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('selling_entity', $data ?? [], null);
        $this->setIfExists('billing_address_schema', $data ?? [], null);
        $this->setIfExists('shipping_address_schema', $data ?? [], null);
        $this->setIfExists('billing_address_only_schema', $data ?? [], null);
        $this->setIfExists('individual_tax_identifiers_schemas', $data ?? [], null);
        $this->setIfExists('business_tax_identifiers_schemas', $data ?? [], null);
        $this->setIfExists('tax_identifiers_info', $data ?? [], null);
        $this->setIfExists('invoice_attribute_info', $data ?? [], null);
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
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country An ISO 3166-1 alpha-2 country code.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets selling_entity
     *
     * @return string|null
     */
    public function getSellingEntity()
    {
        return $this->container['selling_entity'];
    }

    /**
     * Sets selling_entity
     *
     * @param string|null $selling_entity A Digital River selling entity.
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
     * Gets billing_address_schema
     *
     * @return string|null
     */
    public function getBillingAddressSchema()
    {
        return $this->container['billing_address_schema'];
    }

    /**
     * Sets billing_address_schema
     *
     * @param string|null $billing_address_schema A billing address schema.
     *
     * @return self
     */
    public function setBillingAddressSchema($billing_address_schema)
    {
        if (is_null($billing_address_schema)) {
            array_push($this->openAPINullablesSetToNull, 'billing_address_schema');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_address_schema', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_address_schema'] = $billing_address_schema;

        return $this;
    }

    /**
     * Gets shipping_address_schema
     *
     * @return string|null
     */
    public function getShippingAddressSchema()
    {
        return $this->container['shipping_address_schema'];
    }

    /**
     * Sets shipping_address_schema
     *
     * @param string|null $shipping_address_schema A ship to address schema.
     *
     * @return self
     */
    public function setShippingAddressSchema($shipping_address_schema)
    {
        if (is_null($shipping_address_schema)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_address_schema');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_address_schema', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_address_schema'] = $shipping_address_schema;

        return $this;
    }

    /**
     * Gets billing_address_only_schema
     *
     * @return string|null
     */
    public function getBillingAddressOnlySchema()
    {
        return $this->container['billing_address_only_schema'];
    }

    /**
     * Sets billing_address_only_schema
     *
     * @param string|null $billing_address_only_schema A billing address only schema.
     *
     * @return self
     */
    public function setBillingAddressOnlySchema($billing_address_only_schema)
    {
        if (is_null($billing_address_only_schema)) {
            array_push($this->openAPINullablesSetToNull, 'billing_address_only_schema');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_address_only_schema', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_address_only_schema'] = $billing_address_only_schema;

        return $this;
    }

    /**
     * Gets individual_tax_identifiers_schemas
     *
     * @return string[]|null
     */
    public function getIndividualTaxIdentifiersSchemas()
    {
        return $this->container['individual_tax_identifiers_schemas'];
    }

    /**
     * Sets individual_tax_identifiers_schemas
     *
     * @param string[]|null $individual_tax_identifiers_schemas individual_tax_identifiers_schemas
     *
     * @return self
     */
    public function setIndividualTaxIdentifiersSchemas($individual_tax_identifiers_schemas)
    {
        if (is_null($individual_tax_identifiers_schemas)) {
            throw new \InvalidArgumentException('non-nullable individual_tax_identifiers_schemas cannot be null');
        }
        $this->container['individual_tax_identifiers_schemas'] = $individual_tax_identifiers_schemas;

        return $this;
    }

    /**
     * Gets business_tax_identifiers_schemas
     *
     * @return string[]|null
     */
    public function getBusinessTaxIdentifiersSchemas()
    {
        return $this->container['business_tax_identifiers_schemas'];
    }

    /**
     * Sets business_tax_identifiers_schemas
     *
     * @param string[]|null $business_tax_identifiers_schemas business_tax_identifiers_schemas
     *
     * @return self
     */
    public function setBusinessTaxIdentifiersSchemas($business_tax_identifiers_schemas)
    {
        if (is_null($business_tax_identifiers_schemas)) {
            throw new \InvalidArgumentException('non-nullable business_tax_identifiers_schemas cannot be null');
        }
        $this->container['business_tax_identifiers_schemas'] = $business_tax_identifiers_schemas;

        return $this;
    }

    /**
     * Gets tax_identifiers_info
     *
     * @return \DigitalRiver\ApiSdk\Model\TaxIdentifiersInfo|null
     */
    public function getTaxIdentifiersInfo()
    {
        return $this->container['tax_identifiers_info'];
    }

    /**
     * Sets tax_identifiers_info
     *
     * @param \DigitalRiver\ApiSdk\Model\TaxIdentifiersInfo|null $tax_identifiers_info tax_identifiers_info
     *
     * @return self
     */
    public function setTaxIdentifiersInfo($tax_identifiers_info)
    {
        if (is_null($tax_identifiers_info)) {
            throw new \InvalidArgumentException('non-nullable tax_identifiers_info cannot be null');
        }
        $this->container['tax_identifiers_info'] = $tax_identifiers_info;

        return $this;
    }

    /**
     * Gets invoice_attribute_info
     *
     * @return \DigitalRiver\ApiSdk\Model\InvoiceAttributeInfo|null
     */
    public function getInvoiceAttributeInfo()
    {
        return $this->container['invoice_attribute_info'];
    }

    /**
     * Sets invoice_attribute_info
     *
     * @param \DigitalRiver\ApiSdk\Model\InvoiceAttributeInfo|null $invoice_attribute_info invoice_attribute_info
     *
     * @return self
     */
    public function setInvoiceAttributeInfo($invoice_attribute_info)
    {
        if (is_null($invoice_attribute_info)) {
            throw new \InvalidArgumentException('non-nullable invoice_attribute_info cannot be null');
        }
        $this->container['invoice_attribute_info'] = $invoice_attribute_info;

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


