<?php
/**
 * SkuRequest
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
 * SkuRequest Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SkuRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkuRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'eccn' => 'string',
        'hs_code' => 'string',
        'sku_group_id' => 'string',
        'part_number' => 'string',
        'manufacturer_id' => 'string',
        'managed_fulfillment' => 'string',
        'tax_code' => 'string',
        'name' => 'string',
        'description' => 'string',
        'image' => 'string',
        'url' => 'string',
        'weight' => 'float',
        'weight_unit' => 'string',
        'item_breadcrumb' => 'string',
        'country_of_origin' => 'string',
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
        'eccn' => null,
        'hs_code' => null,
        'sku_group_id' => null,
        'part_number' => null,
        'manufacturer_id' => null,
        'managed_fulfillment' => null,
        'tax_code' => null,
        'name' => null,
        'description' => null,
        'image' => null,
        'url' => null,
        'weight' => 'double',
        'weight_unit' => null,
        'item_breadcrumb' => null,
        'country_of_origin' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'eccn' => false,
		'hs_code' => false,
		'sku_group_id' => false,
		'part_number' => false,
		'manufacturer_id' => false,
		'managed_fulfillment' => false,
		'tax_code' => false,
		'name' => false,
		'description' => false,
		'image' => false,
		'url' => false,
		'weight' => false,
		'weight_unit' => false,
		'item_breadcrumb' => false,
		'country_of_origin' => false,
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
        'eccn' => 'eccn',
        'hs_code' => 'hsCode',
        'sku_group_id' => 'skuGroupId',
        'part_number' => 'partNumber',
        'manufacturer_id' => 'manufacturerId',
        'managed_fulfillment' => 'managedFulfillment',
        'tax_code' => 'taxCode',
        'name' => 'name',
        'description' => 'description',
        'image' => 'image',
        'url' => 'url',
        'weight' => 'weight',
        'weight_unit' => 'weightUnit',
        'item_breadcrumb' => 'itemBreadcrumb',
        'country_of_origin' => 'countryOfOrigin',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'eccn' => 'setEccn',
        'hs_code' => 'setHsCode',
        'sku_group_id' => 'setSkuGroupId',
        'part_number' => 'setPartNumber',
        'manufacturer_id' => 'setManufacturerId',
        'managed_fulfillment' => 'setManagedFulfillment',
        'tax_code' => 'setTaxCode',
        'name' => 'setName',
        'description' => 'setDescription',
        'image' => 'setImage',
        'url' => 'setUrl',
        'weight' => 'setWeight',
        'weight_unit' => 'setWeightUnit',
        'item_breadcrumb' => 'setItemBreadcrumb',
        'country_of_origin' => 'setCountryOfOrigin',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'eccn' => 'getEccn',
        'hs_code' => 'getHsCode',
        'sku_group_id' => 'getSkuGroupId',
        'part_number' => 'getPartNumber',
        'manufacturer_id' => 'getManufacturerId',
        'managed_fulfillment' => 'getManagedFulfillment',
        'tax_code' => 'getTaxCode',
        'name' => 'getName',
        'description' => 'getDescription',
        'image' => 'getImage',
        'url' => 'getUrl',
        'weight' => 'getWeight',
        'weight_unit' => 'getWeightUnit',
        'item_breadcrumb' => 'getItemBreadcrumb',
        'country_of_origin' => 'getCountryOfOrigin',
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

    public const MANAGED_FULFILLMENT_DR_GLOBAL_FULFILLMENT = 'DRGlobalFulfillment';
    public const WEIGHT_UNIT_OZ = 'oz';
    public const WEIGHT_UNIT_LB = 'lb';
    public const WEIGHT_UNIT_G = 'g';
    public const WEIGHT_UNIT_KG = 'kg';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getManagedFulfillmentAllowableValues()
    {
        return [
            self::MANAGED_FULFILLMENT_DR_GLOBAL_FULFILLMENT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWeightUnitAllowableValues()
    {
        return [
            self::WEIGHT_UNIT_OZ,
            self::WEIGHT_UNIT_LB,
            self::WEIGHT_UNIT_G,
            self::WEIGHT_UNIT_KG,
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
        $this->setIfExists('eccn', $data ?? [], null);
        $this->setIfExists('hs_code', $data ?? [], null);
        $this->setIfExists('sku_group_id', $data ?? [], null);
        $this->setIfExists('part_number', $data ?? [], null);
        $this->setIfExists('manufacturer_id', $data ?? [], null);
        $this->setIfExists('managed_fulfillment', $data ?? [], null);
        $this->setIfExists('tax_code', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('weight_unit', $data ?? [], null);
        $this->setIfExists('item_breadcrumb', $data ?? [], null);
        $this->setIfExists('country_of_origin', $data ?? [], null);
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

        $allowedValues = $this->getManagedFulfillmentAllowableValues();
        if (!is_null($this->container['managed_fulfillment']) && !in_array($this->container['managed_fulfillment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'managed_fulfillment', must be one of '%s'",
                $this->container['managed_fulfillment'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getWeightUnitAllowableValues();
        if (!is_null($this->container['weight_unit']) && !in_array($this->container['weight_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'weight_unit', must be one of '%s'",
                $this->container['weight_unit'],
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
     * @param string|null $id The unique identifier of a SKU.
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
     * Gets eccn
     *
     * @return string|null
     */
    public function getEccn()
    {
        return $this->container['eccn'];
    }

    /**
     * Sets eccn
     *
     * @param string|null $eccn The export control classification number.
     *
     * @return self
     */
    public function setEccn($eccn)
    {
        if (is_null($eccn)) {
            throw new \InvalidArgumentException('non-nullable eccn cannot be null');
        }
        $this->container['eccn'] = $eccn;

        return $this;
    }

    /**
     * Gets hs_code
     *
     * @return string|null
     */
    public function getHsCode()
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     *
     * @param string|null $hs_code The international and US Harmonized System code (sometimes referred to as the Harmonized Tariff Schedule).
     *
     * @return self
     */
    public function setHsCode($hs_code)
    {
        if (is_null($hs_code)) {
            throw new \InvalidArgumentException('non-nullable hs_code cannot be null');
        }
        $this->container['hs_code'] = $hs_code;

        return $this;
    }

    /**
     * Gets sku_group_id
     *
     * @return string|null
     */
    public function getSkuGroupId()
    {
        return $this->container['sku_group_id'];
    }

    /**
     * Sets sku_group_id
     *
     * @param string|null $sku_group_id The unique identifier of the Sku Group.
     *
     * @return self
     */
    public function setSkuGroupId($sku_group_id)
    {
        if (is_null($sku_group_id)) {
            throw new \InvalidArgumentException('non-nullable sku_group_id cannot be null');
        }
        $this->container['sku_group_id'] = $sku_group_id;

        return $this;
    }

    /**
     * Gets part_number
     *
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->container['part_number'];
    }

    /**
     * Sets part_number
     *
     * @param string|null $part_number The manufacturer's part number.
     *
     * @return self
     */
    public function setPartNumber($part_number)
    {
        if (is_null($part_number)) {
            throw new \InvalidArgumentException('non-nullable part_number cannot be null');
        }
        $this->container['part_number'] = $part_number;

        return $this;
    }

    /**
     * Gets manufacturer_id
     *
     * @return string|null
     */
    public function getManufacturerId()
    {
        return $this->container['manufacturer_id'];
    }

    /**
     * Sets manufacturer_id
     *
     * @param string|null $manufacturer_id The unique identifier
     *
     * @return self
     */
    public function setManufacturerId($manufacturer_id)
    {
        if (is_null($manufacturer_id)) {
            throw new \InvalidArgumentException('non-nullable manufacturer_id cannot be null');
        }
        $this->container['manufacturer_id'] = $manufacturer_id;

        return $this;
    }

    /**
     * Gets managed_fulfillment
     *
     * @return string|null
     */
    public function getManagedFulfillment()
    {
        return $this->container['managed_fulfillment'];
    }

    /**
     * Sets managed_fulfillment
     *
     * @param string|null $managed_fulfillment Signifies the product is physically fulfilled by Digital River.
     *
     * @return self
     */
    public function setManagedFulfillment($managed_fulfillment)
    {
        if (is_null($managed_fulfillment)) {
            throw new \InvalidArgumentException('non-nullable managed_fulfillment cannot be null');
        }
        $allowedValues = $this->getManagedFulfillmentAllowableValues();
        if (!in_array($managed_fulfillment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'managed_fulfillment', must be one of '%s'",
                    $managed_fulfillment,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['managed_fulfillment'] = $managed_fulfillment;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return string|null
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param string|null $tax_code The designated tax code.
     *
     * @return self
     */
    public function setTaxCode($tax_code)
    {
        if (is_null($tax_code)) {
            throw new \InvalidArgumentException('non-nullable tax_code cannot be null');
        }
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The product’s name.
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
     * @param string|null $description A description of the product.
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
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image An image of the product.
     *
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url A product url.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight The weight of the product measured in the unit specified by weightUnit.
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets weight_unit
     *
     * @return string|null
     */
    public function getWeightUnit()
    {
        return $this->container['weight_unit'];
    }

    /**
     * Sets weight_unit
     *
     * @param string|null $weight_unit The unit of measurement applied to the weight.
     *
     * @return self
     */
    public function setWeightUnit($weight_unit)
    {
        if (is_null($weight_unit)) {
            throw new \InvalidArgumentException('non-nullable weight_unit cannot be null');
        }
        $allowedValues = $this->getWeightUnitAllowableValues();
        if (!in_array($weight_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'weight_unit', must be one of '%s'",
                    $weight_unit,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['weight_unit'] = $weight_unit;

        return $this;
    }

    /**
     * Gets item_breadcrumb
     *
     * @return string|null
     */
    public function getItemBreadcrumb()
    {
        return $this->container['item_breadcrumb'];
    }

    /**
     * Sets item_breadcrumb
     *
     * @param string|null $item_breadcrumb The full path to the category where item is included. Categories should be separated by “ > “.
     *
     * @return self
     */
    public function setItemBreadcrumb($item_breadcrumb)
    {
        if (is_null($item_breadcrumb)) {
            throw new \InvalidArgumentException('non-nullable item_breadcrumb cannot be null');
        }
        $this->container['item_breadcrumb'] = $item_breadcrumb;

        return $this;
    }

    /**
     * Gets country_of_origin
     *
     * @return string|null
     */
    public function getCountryOfOrigin()
    {
        return $this->container['country_of_origin'];
    }

    /**
     * Sets country_of_origin
     *
     * @param string|null $country_of_origin A two-letter Alpha-2 country code as described in the ISO 3166 international standard.
     *
     * @return self
     */
    public function setCountryOfOrigin($country_of_origin)
    {
        if (is_null($country_of_origin)) {
            throw new \InvalidArgumentException('non-nullable country_of_origin cannot be null');
        }
        $this->container['country_of_origin'] = $country_of_origin;

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


