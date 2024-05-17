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


