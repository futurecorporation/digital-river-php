<?php
/**
 * ShippingQuote
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
 * ShippingQuote Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShippingQuote implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingQuote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'description' => 'string',
        'service_level' => 'string',
        'estimated_delivery' => 'string',
        'shipping_terms' => 'string',
        'total_amount' => 'float',
        'ship_from' => '\DigitalRiver\ApiSdk\Model\GLShipFrom',
        'fees' => '\DigitalRiver\ApiSdk\Model\ShippingQuoteFees'
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
        'description' => null,
        'service_level' => null,
        'estimated_delivery' => null,
        'shipping_terms' => null,
        'total_amount' => 'double',
        'ship_from' => null,
        'fees' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'description' => false,
		'service_level' => false,
		'estimated_delivery' => false,
		'shipping_terms' => false,
		'total_amount' => false,
		'ship_from' => false,
		'fees' => false
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
        'description' => 'description',
        'service_level' => 'serviceLevel',
        'estimated_delivery' => 'estimatedDelivery',
        'shipping_terms' => 'shippingTerms',
        'total_amount' => 'totalAmount',
        'ship_from' => 'shipFrom',
        'fees' => 'fees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'description' => 'setDescription',
        'service_level' => 'setServiceLevel',
        'estimated_delivery' => 'setEstimatedDelivery',
        'shipping_terms' => 'setShippingTerms',
        'total_amount' => 'setTotalAmount',
        'ship_from' => 'setShipFrom',
        'fees' => 'setFees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'description' => 'getDescription',
        'service_level' => 'getServiceLevel',
        'estimated_delivery' => 'getEstimatedDelivery',
        'shipping_terms' => 'getShippingTerms',
        'total_amount' => 'getTotalAmount',
        'ship_from' => 'getShipFrom',
        'fees' => 'getFees'
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

    public const SHIPPING_TERMS_DDP = 'DDP';
    public const SHIPPING_TERMS_DAP = 'DAP';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShippingTermsAllowableValues()
    {
        return [
            self::SHIPPING_TERMS_DDP,
            self::SHIPPING_TERMS_DAP,
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('service_level', $data ?? [], null);
        $this->setIfExists('estimated_delivery', $data ?? [], null);
        $this->setIfExists('shipping_terms', $data ?? [], null);
        $this->setIfExists('total_amount', $data ?? [], null);
        $this->setIfExists('ship_from', $data ?? [], null);
        $this->setIfExists('fees', $data ?? [], null);
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

        $allowedValues = $this->getShippingTermsAllowableValues();
        if (!is_null($this->container['shipping_terms']) && !in_array($this->container['shipping_terms'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipping_terms', must be one of '%s'",
                $this->container['shipping_terms'],
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
     * @param string|null $id Shipping quote identifier
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Shipping method description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets service_level
     *
     * @return string|null
     */
    public function getServiceLevel()
    {
        return $this->container['service_level'];
    }

    /**
     * Sets service_level
     *
     * @param string|null $service_level service_level
     *
     * @return self
     */
    public function setServiceLevel($service_level)
    {
        if (is_null($service_level)) {
            throw new \InvalidArgumentException('non-nullable service_level cannot be null');
        }
        $this->container['service_level'] = $service_level;

        return $this;
    }

    /**
     * Gets estimated_delivery
     *
     * @return string|null
     */
    public function getEstimatedDelivery()
    {
        return $this->container['estimated_delivery'];
    }

    /**
     * Sets estimated_delivery
     *
     * @param string|null $estimated_delivery estimated_delivery
     *
     * @return self
     */
    public function setEstimatedDelivery($estimated_delivery)
    {
        if (is_null($estimated_delivery)) {
            throw new \InvalidArgumentException('non-nullable estimated_delivery cannot be null');
        }
        $this->container['estimated_delivery'] = $estimated_delivery;

        return $this;
    }

    /**
     * Gets shipping_terms
     *
     * @return string|null
     */
    public function getShippingTerms()
    {
        return $this->container['shipping_terms'];
    }

    /**
     * Sets shipping_terms
     *
     * @param string|null $shipping_terms The terms of shipping.
     *
     * @return self
     */
    public function setShippingTerms($shipping_terms)
    {
        if (is_null($shipping_terms)) {
            throw new \InvalidArgumentException('non-nullable shipping_terms cannot be null');
        }
        $allowedValues = $this->getShippingTermsAllowableValues();
        if (!in_array($shipping_terms, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipping_terms', must be one of '%s'",
                    $shipping_terms,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipping_terms'] = $shipping_terms;

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
     * @param float|null $total_amount The shipping amount.
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
     * Gets ship_from
     *
     * @return \DigitalRiver\ApiSdk\Model\GLShipFrom|null
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \DigitalRiver\ApiSdk\Model\GLShipFrom|null $ship_from ship_from
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
     * Gets fees
     *
     * @return \DigitalRiver\ApiSdk\Model\ShippingQuoteFees|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \DigitalRiver\ApiSdk\Model\ShippingQuoteFees|null $fees fees
     *
     * @return self
     */
    public function setFees($fees)
    {
        if (is_null($fees)) {
            throw new \InvalidArgumentException('non-nullable fees cannot be null');
        }
        $this->container['fees'] = $fees;

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


