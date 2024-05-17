<?php
/**
 * FulfillmentResponseItem
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
 * FulfillmentResponseItem Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FulfillmentResponseItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FulfillmentResponseItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_id' => 'string',
        'sku_id' => 'string',
        'shipment_item_id' => 'string',
        'quantity' => 'int',
        'cancel_quantity' => 'int',
        'tracking_company' => 'string',
        'tracking_number' => 'string',
        'tracking_url' => 'string',
        'subfulfiller_id' => 'string',
        'distributor_cost' => 'float',
        'shipping_cost' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'item_id' => null,
        'sku_id' => null,
        'shipment_item_id' => null,
        'quantity' => null,
        'cancel_quantity' => null,
        'tracking_company' => null,
        'tracking_number' => null,
        'tracking_url' => null,
        'subfulfiller_id' => null,
        'distributor_cost' => 'double',
        'shipping_cost' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'item_id' => false,
        'sku_id' => false,
        'shipment_item_id' => false,
        'quantity' => false,
        'cancel_quantity' => false,
        'tracking_company' => false,
        'tracking_number' => false,
        'tracking_url' => false,
        'subfulfiller_id' => false,
        'distributor_cost' => false,
        'shipping_cost' => false
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
        'item_id' => 'itemId',
        'sku_id' => 'skuId',
        'shipment_item_id' => 'shipmentItemId',
        'quantity' => 'quantity',
        'cancel_quantity' => 'cancelQuantity',
        'tracking_company' => 'trackingCompany',
        'tracking_number' => 'trackingNumber',
        'tracking_url' => 'trackingUrl',
        'subfulfiller_id' => 'subfulfillerId',
        'distributor_cost' => 'distributorCost',
        'shipping_cost' => 'shippingCost'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_id' => 'setItemId',
        'sku_id' => 'setSkuId',
        'shipment_item_id' => 'setShipmentItemId',
        'quantity' => 'setQuantity',
        'cancel_quantity' => 'setCancelQuantity',
        'tracking_company' => 'setTrackingCompany',
        'tracking_number' => 'setTrackingNumber',
        'tracking_url' => 'setTrackingUrl',
        'subfulfiller_id' => 'setSubfulfillerId',
        'distributor_cost' => 'setDistributorCost',
        'shipping_cost' => 'setShippingCost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_id' => 'getItemId',
        'sku_id' => 'getSkuId',
        'shipment_item_id' => 'getShipmentItemId',
        'quantity' => 'getQuantity',
        'cancel_quantity' => 'getCancelQuantity',
        'tracking_company' => 'getTrackingCompany',
        'tracking_number' => 'getTrackingNumber',
        'tracking_url' => 'getTrackingUrl',
        'subfulfiller_id' => 'getSubfulfillerId',
        'distributor_cost' => 'getDistributorCost',
        'shipping_cost' => 'getShippingCost'
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
        $this->setIfExists('item_id', $data ?? [], null);
        $this->setIfExists('sku_id', $data ?? [], null);
        $this->setIfExists('shipment_item_id', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('cancel_quantity', $data ?? [], null);
        $this->setIfExists('tracking_company', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
        $this->setIfExists('tracking_url', $data ?? [], null);
        $this->setIfExists('subfulfiller_id', $data ?? [], null);
        $this->setIfExists('distributor_cost', $data ?? [], null);
        $this->setIfExists('shipping_cost', $data ?? [], null);
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
     * Gets item_id
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string|null $item_id The unique identifier of the line item.
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        if (is_null($item_id)) {
            throw new \InvalidArgumentException('non-nullable item_id cannot be null');
        }
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets sku_id
     *
     * @return string|null
     */
    public function getSkuId()
    {
        return $this->container['sku_id'];
    }

    /**
     * Sets sku_id
     *
     * @param string|null $sku_id The unique identifier of the sku.
     *
     * @return self
     */
    public function setSkuId($sku_id)
    {
        if (is_null($sku_id)) {
            throw new \InvalidArgumentException('non-nullable sku_id cannot be null');
        }
        $this->container['sku_id'] = $sku_id;

        return $this;
    }

    /**
     * Gets shipment_item_id
     *
     * @return string|null
     */
    public function getShipmentItemId()
    {
        return $this->container['shipment_item_id'];
    }

    /**
     * Sets shipment_item_id
     *
     * @param string|null $shipment_item_id The unique identifier associated to the shipment item
     *
     * @return self
     */
    public function setShipmentItemId($shipment_item_id)
    {
        if (is_null($shipment_item_id)) {
            throw new \InvalidArgumentException('non-nullable shipment_item_id cannot be null');
        }
        $this->container['shipment_item_id'] = $shipment_item_id;

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
     * @param int|null $quantity The number of items fulfilled.
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
     * Gets cancel_quantity
     *
     * @return int|null
     */
    public function getCancelQuantity()
    {
        return $this->container['cancel_quantity'];
    }

    /**
     * Sets cancel_quantity
     *
     * @param int|null $cancel_quantity The number of items cancelled.
     *
     * @return self
     */
    public function setCancelQuantity($cancel_quantity)
    {
        if (is_null($cancel_quantity)) {
            throw new \InvalidArgumentException('non-nullable cancel_quantity cannot be null');
        }
        $this->container['cancel_quantity'] = $cancel_quantity;

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
     * @param string|null $tracking_company The name of the tracking company
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
     * @param string|null $tracking_number A tracking number provided by the shipping company
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
     * @param string|null $tracking_url The URL of the tracking page for the fulfillment
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
     * Gets subfulfiller_id
     *
     * @return string|null
     */
    public function getSubfulfillerId()
    {
        return $this->container['subfulfiller_id'];
    }

    /**
     * Sets subfulfiller_id
     *
     * @param string|null $subfulfiller_id The unique identifer of the distributor.
     *
     * @return self
     */
    public function setSubfulfillerId($subfulfiller_id)
    {
        if (is_null($subfulfiller_id)) {
            throw new \InvalidArgumentException('non-nullable subfulfiller_id cannot be null');
        }
        $this->container['subfulfiller_id'] = $subfulfiller_id;

        return $this;
    }

    /**
     * Gets distributor_cost
     *
     * @return float|null
     */
    public function getDistributorCost()
    {
        return $this->container['distributor_cost'];
    }

    /**
     * Sets distributor_cost
     *
     * @param float|null $distributor_cost The distributor’s total cost for this <code>items[]</code>, inclusive of its <code>quantity</code>. In other words, the distributor’s per unit product cost multiplied by the <code>quantity</code> of shipped units.<br>
     *
     * @return self
     */
    public function setDistributorCost($distributor_cost)
    {
        if (is_null($distributor_cost)) {
            throw new \InvalidArgumentException('non-nullable distributor_cost cannot be null');
        }
        $this->container['distributor_cost'] = $distributor_cost;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return float|null
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param float|null $shipping_cost The cost to ship the line item.
     *
     * @return self
     */
    public function setShippingCost($shipping_cost)
    {
        if (is_null($shipping_cost)) {
            throw new \InvalidArgumentException('non-nullable shipping_cost cannot be null');
        }
        $this->container['shipping_cost'] = $shipping_cost;

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


