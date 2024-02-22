<?php
/**
 * FeeUpdateRequest
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
 * FeeUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FeeUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeeUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'sku_id' => 'string',
        'category' => 'string',
        'value' => 'string',
        'amount' => 'float',
        'battery' => '\DigitalRiver\ApiSdk\Model\Battery',
        'compliance_agency' => 'string',
        'fee_exemption' => 'string',
        'brand_name' => 'string',
        'weee' => '\DigitalRiver\ApiSdk\Model\WEEE',
        'weight_and_units' => 'string',
        'currency' => 'string',
        'country' => 'string',
        'subdivisions' => 'string[]',
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
        'type' => null,
        'sku_id' => null,
        'category' => null,
        'value' => null,
        'amount' => 'double',
        'battery' => null,
        'compliance_agency' => null,
        'fee_exemption' => null,
        'brand_name' => null,
        'weee' => null,
        'weight_and_units' => null,
        'currency' => null,
        'country' => null,
        'subdivisions' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
		'sku_id' => false,
		'category' => false,
		'value' => false,
		'amount' => false,
		'battery' => false,
		'compliance_agency' => false,
		'fee_exemption' => false,
		'brand_name' => false,
		'weee' => false,
		'weight_and_units' => false,
		'currency' => false,
		'country' => false,
		'subdivisions' => false,
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
        'type' => 'type',
        'sku_id' => 'skuId',
        'category' => 'category',
        'value' => 'value',
        'amount' => 'amount',
        'battery' => 'battery',
        'compliance_agency' => 'complianceAgency',
        'fee_exemption' => 'feeExemption',
        'brand_name' => 'brandName',
        'weee' => 'weee',
        'weight_and_units' => 'weightAndUnits',
        'currency' => 'currency',
        'country' => 'country',
        'subdivisions' => 'subdivisions',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'sku_id' => 'setSkuId',
        'category' => 'setCategory',
        'value' => 'setValue',
        'amount' => 'setAmount',
        'battery' => 'setBattery',
        'compliance_agency' => 'setComplianceAgency',
        'fee_exemption' => 'setFeeExemption',
        'brand_name' => 'setBrandName',
        'weee' => 'setWeee',
        'weight_and_units' => 'setWeightAndUnits',
        'currency' => 'setCurrency',
        'country' => 'setCountry',
        'subdivisions' => 'setSubdivisions',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'sku_id' => 'getSkuId',
        'category' => 'getCategory',
        'value' => 'getValue',
        'amount' => 'getAmount',
        'battery' => 'getBattery',
        'compliance_agency' => 'getComplianceAgency',
        'fee_exemption' => 'getFeeExemption',
        'brand_name' => 'getBrandName',
        'weee' => 'getWeee',
        'weight_and_units' => 'getWeightAndUnits',
        'currency' => 'getCurrency',
        'country' => 'getCountry',
        'subdivisions' => 'getSubdivisions',
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

    public const TYPE_BATTERY = 'battery';
    public const TYPE_WEEE = 'weee';
    public const TYPE_COPYRIGHT = 'copyright';
    public const TYPE_E_WASTE = 'e_waste';
    public const TYPE_PACKAGING = 'packaging';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BATTERY,
            self::TYPE_WEEE,
            self::TYPE_COPYRIGHT,
            self::TYPE_E_WASTE,
            self::TYPE_PACKAGING,
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('sku_id', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('battery', $data ?? [], null);
        $this->setIfExists('compliance_agency', $data ?? [], null);
        $this->setIfExists('fee_exemption', $data ?? [], null);
        $this->setIfExists('brand_name', $data ?? [], null);
        $this->setIfExists('weee', $data ?? [], null);
        $this->setIfExists('weight_and_units', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('subdivisions', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of fee.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * @param string|null $sku_id The unique identifer of the stock keeping unit associated with the fee.
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
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category The category of the fee as defined by regulatory law.
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value The value of the product.
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

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
     * @param float|null $amount The fee amount.
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
     * Gets battery
     *
     * @return \DigitalRiver\ApiSdk\Model\Battery|null
     */
    public function getBattery()
    {
        return $this->container['battery'];
    }

    /**
     * Sets battery
     *
     * @param \DigitalRiver\ApiSdk\Model\Battery|null $battery battery
     *
     * @return self
     */
    public function setBattery($battery)
    {
        if (is_null($battery)) {
            throw new \InvalidArgumentException('non-nullable battery cannot be null');
        }
        $this->container['battery'] = $battery;

        return $this;
    }

    /**
     * Gets compliance_agency
     *
     * @return string|null
     */
    public function getComplianceAgency()
    {
        return $this->container['compliance_agency'];
    }

    /**
     * Sets compliance_agency
     *
     * @param string|null $compliance_agency The unique identifier of the recycling agency associated with the product's jurisdiction.
     *
     * @return self
     */
    public function setComplianceAgency($compliance_agency)
    {
        if (is_null($compliance_agency)) {
            throw new \InvalidArgumentException('non-nullable compliance_agency cannot be null');
        }
        $this->container['compliance_agency'] = $compliance_agency;

        return $this;
    }

    /**
     * Gets fee_exemption
     *
     * @return string|null
     */
    public function getFeeExemption()
    {
        return $this->container['fee_exemption'];
    }

    /**
     * Sets fee_exemption
     *
     * @param string|null $fee_exemption Indicates whether business to business sales are exempt from paying the fee.
     *
     * @return self
     */
    public function setFeeExemption($fee_exemption)
    {
        if (is_null($fee_exemption)) {
            throw new \InvalidArgumentException('non-nullable fee_exemption cannot be null');
        }
        $this->container['fee_exemption'] = $fee_exemption;

        return $this;
    }

    /**
     * Gets brand_name
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string|null $brand_name The product's brand name.
     *
     * @return self
     */
    public function setBrandName($brand_name)
    {
        if (is_null($brand_name)) {
            throw new \InvalidArgumentException('non-nullable brand_name cannot be null');
        }
        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets weee
     *
     * @return \DigitalRiver\ApiSdk\Model\WEEE|null
     */
    public function getWeee()
    {
        return $this->container['weee'];
    }

    /**
     * Sets weee
     *
     * @param \DigitalRiver\ApiSdk\Model\WEEE|null $weee weee
     *
     * @return self
     */
    public function setWeee($weee)
    {
        if (is_null($weee)) {
            throw new \InvalidArgumentException('non-nullable weee cannot be null');
        }
        $this->container['weee'] = $weee;

        return $this;
    }

    /**
     * Gets weight_and_units
     *
     * @return string|null
     */
    public function getWeightAndUnits()
    {
        return $this->container['weight_and_units'];
    }

    /**
     * Sets weight_and_units
     *
     * @param string|null $weight_and_units The weight of the unit, minus packaging or batteries, and the unit of measurement applied to the weight.
     *
     * @return self
     */
    public function setWeightAndUnits($weight_and_units)
    {
        if (is_null($weight_and_units)) {
            throw new \InvalidArgumentException('non-nullable weight_and_units cannot be null');
        }
        $this->container['weight_and_units'] = $weight_and_units;

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
     * @param string|null $country A two-letter ISO 3166 country code.
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
     * Gets subdivisions
     *
     * @return string[]|null
     */
    public function getSubdivisions()
    {
        return $this->container['subdivisions'];
    }

    /**
     * Sets subdivisions
     *
     * @param string[]|null $subdivisions An array of ISO 3166-2 subdivision codes.
     *
     * @return self
     */
    public function setSubdivisions($subdivisions)
    {
        if (is_null($subdivisions)) {
            throw new \InvalidArgumentException('non-nullable subdivisions cannot be null');
        }
        $this->container['subdivisions'] = $subdivisions;

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


