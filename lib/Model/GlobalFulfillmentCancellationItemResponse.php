<?php
/**
 * GlobalFulfillmentCancellationItemResponse
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
 * GlobalFulfillmentCancellationItemResponse Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GlobalFulfillmentCancellationItemResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GlobalFulfillmentCancellationItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fulfillment_order_item_id' => 'string',
        'fulfillment_order_item_upstream_id' => 'string',
        'inventory_item_id' => 'string',
        'quantity' => 'int',
        'quantity_accepted' => 'int',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fulfillment_order_item_id' => null,
        'fulfillment_order_item_upstream_id' => null,
        'inventory_item_id' => null,
        'quantity' => null,
        'quantity_accepted' => null,
        'state' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fulfillment_order_item_id' => false,
        'fulfillment_order_item_upstream_id' => false,
        'inventory_item_id' => false,
        'quantity' => false,
        'quantity_accepted' => false,
        'state' => false
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
        'fulfillment_order_item_id' => 'fulfillmentOrderItemId',
        'fulfillment_order_item_upstream_id' => 'fulfillmentOrderItemUpstreamId',
        'inventory_item_id' => 'inventoryItemId',
        'quantity' => 'quantity',
        'quantity_accepted' => 'quantityAccepted',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillment_order_item_id' => 'setFulfillmentOrderItemId',
        'fulfillment_order_item_upstream_id' => 'setFulfillmentOrderItemUpstreamId',
        'inventory_item_id' => 'setInventoryItemId',
        'quantity' => 'setQuantity',
        'quantity_accepted' => 'setQuantityAccepted',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillment_order_item_id' => 'getFulfillmentOrderItemId',
        'fulfillment_order_item_upstream_id' => 'getFulfillmentOrderItemUpstreamId',
        'inventory_item_id' => 'getInventoryItemId',
        'quantity' => 'getQuantity',
        'quantity_accepted' => 'getQuantityAccepted',
        'state' => 'getState'
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
    public const STATE_ACCEPTED = 'accepted';
    public const STATE_REJECTED = 'rejected';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_ACCEPTED,
            self::STATE_REJECTED,
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
        $this->setIfExists('fulfillment_order_item_id', $data ?? [], null);
        $this->setIfExists('fulfillment_order_item_upstream_id', $data ?? [], null);
        $this->setIfExists('inventory_item_id', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('quantity_accepted', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
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
     * Gets fulfillment_order_item_id
     *
     * @return string|null
     */
    public function getFulfillmentOrderItemId()
    {
        return $this->container['fulfillment_order_item_id'];
    }

    /**
     * Sets fulfillment_order_item_id
     *
     * @param string|null $fulfillment_order_item_id The identifier of the fulfillment order item.
     *
     * @return self
     */
    public function setFulfillmentOrderItemId($fulfillment_order_item_id)
    {
        if (is_null($fulfillment_order_item_id)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_order_item_id cannot be null');
        }
        $this->container['fulfillment_order_item_id'] = $fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets fulfillment_order_item_upstream_id
     *
     * @return string|null
     */
    public function getFulfillmentOrderItemUpstreamId()
    {
        return $this->container['fulfillment_order_item_upstream_id'];
    }

    /**
     * Sets fulfillment_order_item_upstream_id
     *
     * @param string|null $fulfillment_order_item_upstream_id The identifier of the item in the upstream fulfillment order
     *
     * @return self
     */
    public function setFulfillmentOrderItemUpstreamId($fulfillment_order_item_upstream_id)
    {
        if (is_null($fulfillment_order_item_upstream_id)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_order_item_upstream_id cannot be null');
        }
        $this->container['fulfillment_order_item_upstream_id'] = $fulfillment_order_item_upstream_id;

        return $this;
    }

    /**
     * Gets inventory_item_id
     *
     * @return string|null
     */
    public function getInventoryItemId()
    {
        return $this->container['inventory_item_id'];
    }

    /**
     * Sets inventory_item_id
     *
     * @param string|null $inventory_item_id The identifier of the inventory item.
     *
     * @return self
     */
    public function setInventoryItemId($inventory_item_id)
    {
        if (is_null($inventory_item_id)) {
            throw new \InvalidArgumentException('non-nullable inventory_item_id cannot be null');
        }
        $this->container['inventory_item_id'] = $inventory_item_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The quantity specified in the fulfillment cancellation request.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_accepted
     *
     * @return int|null
     */
    public function getQuantityAccepted()
    {
        return $this->container['quantity_accepted'];
    }

    /**
     * Sets quantity_accepted
     *
     * @param int|null $quantity_accepted The quantity accepted for cancellation by the fulfiller.
     *
     * @return self
     */
    public function setQuantityAccepted($quantity_accepted)
    {
        if (is_null($quantity_accepted)) {
            throw new \InvalidArgumentException('non-nullable quantity_accepted cannot be null');
        }
        $this->container['quantity_accepted'] = $quantity_accepted;

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
     * @param string|null $state An enumeration indicating the current state of the item in the fulfillment cancellation.
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


