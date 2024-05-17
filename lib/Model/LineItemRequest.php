<?php
/**
 * LineItemRequest
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
 * LineItemRequest Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LineItemRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItemRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'upstream_id' => 'string',
        'inventory_item_id' => 'string',
        'shipping' => 'float',
        'subtotal' => 'float',
        'total' => 'float',
        'name' => 'string',
        'quantity' => 'int',
        'gift_message' => 'string',
        'gift_wrap' => 'bool',
        'tax' => '\DigitalRiver\ApiSdk\Model\GlobalFulfillmentTax',
        'metadata' => 'array<string,mixed>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'upstream_id' => null,
        'inventory_item_id' => null,
        'shipping' => 'double',
        'subtotal' => 'double',
        'total' => 'double',
        'name' => null,
        'quantity' => null,
        'gift_message' => null,
        'gift_wrap' => null,
        'tax' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'upstream_id' => false,
        'inventory_item_id' => false,
        'shipping' => false,
        'subtotal' => false,
        'total' => false,
        'name' => false,
        'quantity' => false,
        'gift_message' => false,
        'gift_wrap' => false,
        'tax' => false,
        'metadata' => false
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
        'upstream_id' => 'upstreamId',
        'inventory_item_id' => 'inventoryItemId',
        'shipping' => 'shipping',
        'subtotal' => 'subtotal',
        'total' => 'total',
        'name' => 'name',
        'quantity' => 'quantity',
        'gift_message' => 'giftMessage',
        'gift_wrap' => 'giftWrap',
        'tax' => 'tax',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'upstream_id' => 'setUpstreamId',
        'inventory_item_id' => 'setInventoryItemId',
        'shipping' => 'setShipping',
        'subtotal' => 'setSubtotal',
        'total' => 'setTotal',
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'gift_message' => 'setGiftMessage',
        'gift_wrap' => 'setGiftWrap',
        'tax' => 'setTax',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'upstream_id' => 'getUpstreamId',
        'inventory_item_id' => 'getInventoryItemId',
        'shipping' => 'getShipping',
        'subtotal' => 'getSubtotal',
        'total' => 'getTotal',
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'gift_message' => 'getGiftMessage',
        'gift_wrap' => 'getGiftWrap',
        'tax' => 'getTax',
        'metadata' => 'getMetadata'
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
        $this->setIfExists('upstream_id', $data ?? [], null);
        $this->setIfExists('inventory_item_id', $data ?? [], null);
        $this->setIfExists('shipping', $data ?? [], null);
        $this->setIfExists('subtotal', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('gift_message', $data ?? [], null);
        $this->setIfExists('gift_wrap', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
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

        if ($this->container['inventory_item_id'] === null) {
            $invalidProperties[] = "'inventory_item_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * @param string|null $upstream_id The upstream line item identifier.
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
     * Gets inventory_item_id
     *
     * @return string
     */
    public function getInventoryItemId()
    {
        return $this->container['inventory_item_id'];
    }

    /**
     * Sets inventory_item_id
     *
     * @param string $inventory_item_id The inventory item identifier.
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
     * Gets shipping
     *
     * @return float|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param float|null $shipping The shipping cost for this line item
     *
     * @return self
     */
    public function setShipping($shipping)
    {
        if (is_null($shipping)) {
            throw new \InvalidArgumentException('non-nullable shipping cannot be null');
        }
        $this->container['shipping'] = $shipping;

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
     * @param float|null $subtotal The product price of this line item multiplied by its quantity.
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
     * Gets total
     *
     * @return float|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float|null $total The aggregate price of the product inclusive of taxes, discounts, fees, shipping, handling and duties.
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The product name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
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
     * Gets gift_message
     *
     * @return string|null
     */
    public function getGiftMessage()
    {
        return $this->container['gift_message'];
    }

    /**
     * Sets gift_message
     *
     * @param string|null $gift_message The gift message on the package of the product.
     *
     * @return self
     */
    public function setGiftMessage($gift_message)
    {
        if (is_null($gift_message)) {
            throw new \InvalidArgumentException('non-nullable gift_message cannot be null');
        }
        $this->container['gift_message'] = $gift_message;

        return $this;
    }

    /**
     * Gets gift_wrap
     *
     * @return bool|null
     */
    public function getGiftWrap()
    {
        return $this->container['gift_wrap'];
    }

    /**
     * Sets gift_wrap
     *
     * @param bool|null $gift_wrap Has the value true if the item should be gift wrapped.
     *
     * @return self
     */
    public function setGiftWrap($gift_wrap)
    {
        if (is_null($gift_wrap)) {
            throw new \InvalidArgumentException('non-nullable gift_wrap cannot be null');
        }
        $this->container['gift_wrap'] = $gift_wrap;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \DigitalRiver\ApiSdk\Model\GlobalFulfillmentTax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \DigitalRiver\ApiSdk\Model\GlobalFulfillmentTax|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        if (is_null($tax)) {
            throw new \InvalidArgumentException('non-nullable tax cannot be null');
        }
        $this->container['tax'] = $tax;

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


