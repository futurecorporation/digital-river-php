<?php
/**
 * SkuItem
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
 * SkuItem Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SkuItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkuItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'sku_id' => 'string',
        'product_details' => '\DigitalRiver\ApiSdk\Model\ProductDetails',
        'subscription_info' => '\DigitalRiver\ApiSdk\Model\SubscriptionInfo',
        'fees' => '\DigitalRiver\ApiSdk\Model\Fees',
        'quantity' => 'int',
        'amount' => 'float',
        'seller_tax_identifier' => 'string',
        'tax' => '\DigitalRiver\ApiSdk\Model\Tax',
        'importer_tax' => '\DigitalRiver\ApiSdk\Model\ImporterTax',
        'duties' => '\DigitalRiver\ApiSdk\Model\Duties',
        'discount' => '\DigitalRiver\ApiSdk\Model\SkuDiscount',
        'ship_from' => '\DigitalRiver\ApiSdk\Model\ShipFrom',
        'shipping' => '\DigitalRiver\ApiSdk\Model\ItemShipping',
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
        'id' => null,
        'sku_id' => null,
        'product_details' => null,
        'subscription_info' => null,
        'fees' => null,
        'quantity' => null,
        'amount' => 'double',
        'seller_tax_identifier' => null,
        'tax' => null,
        'importer_tax' => null,
        'duties' => null,
        'discount' => null,
        'ship_from' => null,
        'shipping' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'sku_id' => false,
        'product_details' => false,
        'subscription_info' => false,
        'fees' => false,
        'quantity' => false,
        'amount' => false,
        'seller_tax_identifier' => false,
        'tax' => false,
        'importer_tax' => false,
        'duties' => false,
        'discount' => false,
        'ship_from' => false,
        'shipping' => false,
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
        'id' => 'id',
        'sku_id' => 'skuId',
        'product_details' => 'productDetails',
        'subscription_info' => 'subscriptionInfo',
        'fees' => 'fees',
        'quantity' => 'quantity',
        'amount' => 'amount',
        'seller_tax_identifier' => 'sellerTaxIdentifier',
        'tax' => 'tax',
        'importer_tax' => 'importerTax',
        'duties' => 'duties',
        'discount' => 'discount',
        'ship_from' => 'shipFrom',
        'shipping' => 'shipping',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sku_id' => 'setSkuId',
        'product_details' => 'setProductDetails',
        'subscription_info' => 'setSubscriptionInfo',
        'fees' => 'setFees',
        'quantity' => 'setQuantity',
        'amount' => 'setAmount',
        'seller_tax_identifier' => 'setSellerTaxIdentifier',
        'tax' => 'setTax',
        'importer_tax' => 'setImporterTax',
        'duties' => 'setDuties',
        'discount' => 'setDiscount',
        'ship_from' => 'setShipFrom',
        'shipping' => 'setShipping',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sku_id' => 'getSkuId',
        'product_details' => 'getProductDetails',
        'subscription_info' => 'getSubscriptionInfo',
        'fees' => 'getFees',
        'quantity' => 'getQuantity',
        'amount' => 'getAmount',
        'seller_tax_identifier' => 'getSellerTaxIdentifier',
        'tax' => 'getTax',
        'importer_tax' => 'getImporterTax',
        'duties' => 'getDuties',
        'discount' => 'getDiscount',
        'ship_from' => 'getShipFrom',
        'shipping' => 'getShipping',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('sku_id', $data ?? [], null);
        $this->setIfExists('product_details', $data ?? [], null);
        $this->setIfExists('subscription_info', $data ?? [], null);
        $this->setIfExists('fees', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('seller_tax_identifier', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
        $this->setIfExists('importer_tax', $data ?? [], null);
        $this->setIfExists('duties', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('ship_from', $data ?? [], null);
        $this->setIfExists('shipping', $data ?? [], null);
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
     * @param string|null $id The identifier of the item.
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
     * @param string|null $sku_id The identifier of the [stock keeping unit (SKU)](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus).
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
     * Gets product_details
     *
     * @return \DigitalRiver\ApiSdk\Model\ProductDetails|null
     */
    public function getProductDetails()
    {
        return $this->container['product_details'];
    }

    /**
     * Sets product_details
     *
     * @param \DigitalRiver\ApiSdk\Model\ProductDetails|null $product_details product_details
     *
     * @return self
     */
    public function setProductDetails($product_details)
    {
        if (is_null($product_details)) {
            throw new \InvalidArgumentException('non-nullable product_details cannot be null');
        }
        $this->container['product_details'] = $product_details;

        return $this;
    }

    /**
     * Gets subscription_info
     *
     * @return \DigitalRiver\ApiSdk\Model\SubscriptionInfo|null
     */
    public function getSubscriptionInfo()
    {
        return $this->container['subscription_info'];
    }

    /**
     * Sets subscription_info
     *
     * @param \DigitalRiver\ApiSdk\Model\SubscriptionInfo|null $subscription_info subscription_info
     *
     * @return self
     */
    public function setSubscriptionInfo($subscription_info)
    {
        if (is_null($subscription_info)) {
            throw new \InvalidArgumentException('non-nullable subscription_info cannot be null');
        }
        $this->container['subscription_info'] = $subscription_info;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \DigitalRiver\ApiSdk\Model\Fees|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \DigitalRiver\ApiSdk\Model\Fees|null $fees fees
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
     * @param int|null $quantity The number of items.
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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The cost of the items.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets seller_tax_identifier
     *
     * @return string|null
     */
    public function getSellerTaxIdentifier()
    {
        return $this->container['seller_tax_identifier'];
    }

    /**
     * Sets seller_tax_identifier
     *
     * @param string|null $seller_tax_identifier The tax identifier of the seller.
     *
     * @return self
     */
    public function setSellerTaxIdentifier($seller_tax_identifier)
    {
        if (is_null($seller_tax_identifier)) {
            throw new \InvalidArgumentException('non-nullable seller_tax_identifier cannot be null');
        }
        $this->container['seller_tax_identifier'] = $seller_tax_identifier;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \DigitalRiver\ApiSdk\Model\Tax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \DigitalRiver\ApiSdk\Model\Tax|null $tax tax
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
     * Gets importer_tax
     *
     * @return \DigitalRiver\ApiSdk\Model\ImporterTax|null
     */
    public function getImporterTax()
    {
        return $this->container['importer_tax'];
    }

    /**
     * Sets importer_tax
     *
     * @param \DigitalRiver\ApiSdk\Model\ImporterTax|null $importer_tax importer_tax
     *
     * @return self
     */
    public function setImporterTax($importer_tax)
    {
        if (is_null($importer_tax)) {
            throw new \InvalidArgumentException('non-nullable importer_tax cannot be null');
        }
        $this->container['importer_tax'] = $importer_tax;

        return $this;
    }

    /**
     * Gets duties
     *
     * @return \DigitalRiver\ApiSdk\Model\Duties|null
     */
    public function getDuties()
    {
        return $this->container['duties'];
    }

    /**
     * Sets duties
     *
     * @param \DigitalRiver\ApiSdk\Model\Duties|null $duties duties
     *
     * @return self
     */
    public function setDuties($duties)
    {
        if (is_null($duties)) {
            throw new \InvalidArgumentException('non-nullable duties cannot be null');
        }
        $this->container['duties'] = $duties;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \DigitalRiver\ApiSdk\Model\SkuDiscount|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \DigitalRiver\ApiSdk\Model\SkuDiscount|null $discount discount
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
     * Gets shipping
     *
     * @return \DigitalRiver\ApiSdk\Model\ItemShipping|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \DigitalRiver\ApiSdk\Model\ItemShipping|null $shipping shipping
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


