<?php
/**
 * Konbini
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
 * Konbini Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Konbini implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Konbini';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'store_id' => 'string',
        'receipt_number' => 'string',
        'printable_invoice_url' => 'string',
        'store_name' => 'string',
        'localized_store_name' => 'string',
        'store_logo_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'store_id' => null,
        'receipt_number' => null,
        'printable_invoice_url' => null,
        'store_name' => null,
        'localized_store_name' => null,
        'store_logo_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'store_id' => false,
		'receipt_number' => false,
		'printable_invoice_url' => false,
		'store_name' => false,
		'localized_store_name' => false,
		'store_logo_url' => false
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
        'store_id' => 'storeId',
        'receipt_number' => 'receiptNumber',
        'printable_invoice_url' => 'printableInvoiceUrl',
        'store_name' => 'storeName',
        'localized_store_name' => 'localizedStoreName',
        'store_logo_url' => 'storeLogoUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'store_id' => 'setStoreId',
        'receipt_number' => 'setReceiptNumber',
        'printable_invoice_url' => 'setPrintableInvoiceUrl',
        'store_name' => 'setStoreName',
        'localized_store_name' => 'setLocalizedStoreName',
        'store_logo_url' => 'setStoreLogoUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'store_id' => 'getStoreId',
        'receipt_number' => 'getReceiptNumber',
        'printable_invoice_url' => 'getPrintableInvoiceUrl',
        'store_name' => 'getStoreName',
        'localized_store_name' => 'getLocalizedStoreName',
        'store_logo_url' => 'getStoreLogoUrl'
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
        $this->setIfExists('store_id', $data ?? [], null);
        $this->setIfExists('receipt_number', $data ?? [], null);
        $this->setIfExists('printable_invoice_url', $data ?? [], null);
        $this->setIfExists('store_name', $data ?? [], null);
        $this->setIfExists('localized_store_name', $data ?? [], null);
        $this->setIfExists('store_logo_url', $data ?? [], null);
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
     * Gets store_id
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param string|null $store_id store_id
     *
     * @return self
     */
    public function setStoreId($store_id)
    {
        if (is_null($store_id)) {
            throw new \InvalidArgumentException('non-nullable store_id cannot be null');
        }
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets receipt_number
     *
     * @return string|null
     */
    public function getReceiptNumber()
    {
        return $this->container['receipt_number'];
    }

    /**
     * Sets receipt_number
     *
     * @param string|null $receipt_number receipt_number
     *
     * @return self
     */
    public function setReceiptNumber($receipt_number)
    {
        if (is_null($receipt_number)) {
            throw new \InvalidArgumentException('non-nullable receipt_number cannot be null');
        }
        $this->container['receipt_number'] = $receipt_number;

        return $this;
    }

    /**
     * Gets printable_invoice_url
     *
     * @return string|null
     */
    public function getPrintableInvoiceUrl()
    {
        return $this->container['printable_invoice_url'];
    }

    /**
     * Sets printable_invoice_url
     *
     * @param string|null $printable_invoice_url printable_invoice_url
     *
     * @return self
     */
    public function setPrintableInvoiceUrl($printable_invoice_url)
    {
        if (is_null($printable_invoice_url)) {
            throw new \InvalidArgumentException('non-nullable printable_invoice_url cannot be null');
        }
        $this->container['printable_invoice_url'] = $printable_invoice_url;

        return $this;
    }

    /**
     * Gets store_name
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name
     *
     * @param string|null $store_name store_name
     *
     * @return self
     */
    public function setStoreName($store_name)
    {
        if (is_null($store_name)) {
            throw new \InvalidArgumentException('non-nullable store_name cannot be null');
        }
        $this->container['store_name'] = $store_name;

        return $this;
    }

    /**
     * Gets localized_store_name
     *
     * @return string|null
     */
    public function getLocalizedStoreName()
    {
        return $this->container['localized_store_name'];
    }

    /**
     * Sets localized_store_name
     *
     * @param string|null $localized_store_name localized_store_name
     *
     * @return self
     */
    public function setLocalizedStoreName($localized_store_name)
    {
        if (is_null($localized_store_name)) {
            throw new \InvalidArgumentException('non-nullable localized_store_name cannot be null');
        }
        $this->container['localized_store_name'] = $localized_store_name;

        return $this;
    }

    /**
     * Gets store_logo_url
     *
     * @return string|null
     */
    public function getStoreLogoUrl()
    {
        return $this->container['store_logo_url'];
    }

    /**
     * Sets store_logo_url
     *
     * @param string|null $store_logo_url store_logo_url
     *
     * @return self
     */
    public function setStoreLogoUrl($store_logo_url)
    {
        if (is_null($store_logo_url)) {
            throw new \InvalidArgumentException('non-nullable store_logo_url cannot be null');
        }
        $this->container['store_logo_url'] = $store_logo_url;

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


