<?php
/**
 * PlanRequest
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
 * PlanRequest Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PlanRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlanRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'terms' => 'string',
        'contract_binding_days' => 'int',
        'interval' => 'string',
        'interval_count' => 'int',
        'name' => 'string',
        'reminder_offset_days' => 'int',
        'billing_offset_days' => 'int',
        'collection_period_days' => 'int',
        'state' => 'string',
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
        'terms' => null,
        'contract_binding_days' => null,
        'interval' => null,
        'interval_count' => null,
        'name' => null,
        'reminder_offset_days' => null,
        'billing_offset_days' => null,
        'collection_period_days' => null,
        'state' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'terms' => false,
		'contract_binding_days' => false,
		'interval' => false,
		'interval_count' => false,
		'name' => true,
		'reminder_offset_days' => true,
		'billing_offset_days' => true,
		'collection_period_days' => true,
		'state' => false,
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
        'terms' => 'terms',
        'contract_binding_days' => 'contractBindingDays',
        'interval' => 'interval',
        'interval_count' => 'intervalCount',
        'name' => 'name',
        'reminder_offset_days' => 'reminderOffsetDays',
        'billing_offset_days' => 'billingOffsetDays',
        'collection_period_days' => 'collectionPeriodDays',
        'state' => 'state',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'terms' => 'setTerms',
        'contract_binding_days' => 'setContractBindingDays',
        'interval' => 'setInterval',
        'interval_count' => 'setIntervalCount',
        'name' => 'setName',
        'reminder_offset_days' => 'setReminderOffsetDays',
        'billing_offset_days' => 'setBillingOffsetDays',
        'collection_period_days' => 'setCollectionPeriodDays',
        'state' => 'setState',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'terms' => 'getTerms',
        'contract_binding_days' => 'getContractBindingDays',
        'interval' => 'getInterval',
        'interval_count' => 'getIntervalCount',
        'name' => 'getName',
        'reminder_offset_days' => 'getReminderOffsetDays',
        'billing_offset_days' => 'getBillingOffsetDays',
        'collection_period_days' => 'getCollectionPeriodDays',
        'state' => 'getState',
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

    public const INTERVAL_YEAR = 'year';
    public const INTERVAL_MONTH = 'month';
    public const INTERVAL_WEEK = 'week';
    public const INTERVAL_DAY = 'day';
    public const STATE_DRAFT = 'draft';
    public const STATE_ACTIVE = 'active';
    public const STATE_DISCONTINUED = 'discontinued';
    public const STATE_DEACTIVATED = 'deactivated';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntervalAllowableValues()
    {
        return [
            self::INTERVAL_YEAR,
            self::INTERVAL_MONTH,
            self::INTERVAL_WEEK,
            self::INTERVAL_DAY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_DRAFT,
            self::STATE_ACTIVE,
            self::STATE_DISCONTINUED,
            self::STATE_DEACTIVATED,
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
        $this->setIfExists('terms', $data ?? [], null);
        $this->setIfExists('contract_binding_days', $data ?? [], null);
        $this->setIfExists('interval', $data ?? [], null);
        $this->setIfExists('interval_count', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('reminder_offset_days', $data ?? [], null);
        $this->setIfExists('billing_offset_days', $data ?? [], null);
        $this->setIfExists('collection_period_days', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
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

        if ($this->container['terms'] === null) {
            $invalidProperties[] = "'terms' can't be null";
        }
        if ($this->container['contract_binding_days'] === null) {
            $invalidProperties[] = "'contract_binding_days' can't be null";
        }
        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }
        $allowedValues = $this->getIntervalAllowableValues();
        if (!is_null($this->container['interval']) && !in_array($this->container['interval'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'interval', must be one of '%s'",
                $this->container['interval'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['interval_count'] === null) {
            $invalidProperties[] = "'interval_count' can't be null";
        }
        if ($this->container['billing_offset_days'] === null) {
            $invalidProperties[] = "'billing_offset_days' can't be null";
        }
        if ($this->container['collection_period_days'] === null) {
            $invalidProperties[] = "'collection_period_days' can't be null";
        }
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
     * @param string|null $id The unique identifier of a Plan.
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
     * Gets terms
     *
     * @return string
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param string $terms The contractual agreement displayed to the customer during the acquisition process.
     *
     * @return self
     */
    public function setTerms($terms)
    {
        if (is_null($terms)) {
            throw new \InvalidArgumentException('non-nullable terms cannot be null');
        }
        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets contract_binding_days
     *
     * @return int
     */
    public function getContractBindingDays()
    {
        return $this->container['contract_binding_days'];
    }

    /**
     * Sets contract_binding_days
     *
     * @param int $contract_binding_days Indicates the agreed upon length of the contract. For example, an annual subscription should have a value of 365.
     *
     * @return self
     */
    public function setContractBindingDays($contract_binding_days)
    {
        if (is_null($contract_binding_days)) {
            throw new \InvalidArgumentException('non-nullable contract_binding_days cannot be null');
        }
        $this->container['contract_binding_days'] = $contract_binding_days;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param string $interval The supported billing intervals
     *
     * @return self
     */
    public function setInterval($interval)
    {
        if (is_null($interval)) {
            throw new \InvalidArgumentException('non-nullable interval cannot be null');
        }
        $allowedValues = $this->getIntervalAllowableValues();
        if (!in_array($interval, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'interval', must be one of '%s'",
                    $interval,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets interval_count
     *
     * @return int
     */
    public function getIntervalCount()
    {
        return $this->container['interval_count'];
    }

    /**
     * Sets interval_count
     *
     * @param int $interval_count How often the customer is billed per the unit of time specified by <code>interval</code> (e.g. every 3 months).
     *
     * @return self
     */
    public function setIntervalCount($interval_count)
    {
        if (is_null($interval_count)) {
            throw new \InvalidArgumentException('non-nullable interval_count cannot be null');
        }
        $this->container['interval_count'] = $interval_count;

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
     * @param string|null $name Describes the subscription products or services added to this plan.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets reminder_offset_days
     *
     * @return int|null
     */
    public function getReminderOffsetDays()
    {
        return $this->container['reminder_offset_days'];
    }

    /**
     * Sets reminder_offset_days
     *
     * @param int|null $reminder_offset_days The number of days before the opening of the invoice that the reminder event is triggered.
     *
     * @return self
     */
    public function setReminderOffsetDays($reminder_offset_days)
    {
        if (is_null($reminder_offset_days)) {
            array_push($this->openAPINullablesSetToNull, 'reminder_offset_days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reminder_offset_days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reminder_offset_days'] = $reminder_offset_days;

        return $this;
    }

    /**
     * Gets billing_offset_days
     *
     * @return int
     */
    public function getBillingOffsetDays()
    {
        return $this->container['billing_offset_days'];
    }

    /**
     * Sets billing_offset_days
     *
     * @param int $billing_offset_days The number of days before the due date that billing is initiated.
     *
     * @return self
     */
    public function setBillingOffsetDays($billing_offset_days)
    {
        if (is_null($billing_offset_days)) {
            array_push($this->openAPINullablesSetToNull, 'billing_offset_days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_offset_days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_offset_days'] = $billing_offset_days;

        return $this;
    }

    /**
     * Gets collection_period_days
     *
     * @return int
     */
    public function getCollectionPeriodDays()
    {
        return $this->container['collection_period_days'];
    }

    /**
     * Sets collection_period_days
     *
     * @param int $collection_period_days Represents the number of days that Digital River attempts to collect payment.
     *
     * @return self
     */
    public function setCollectionPeriodDays($collection_period_days)
    {
        if (is_null($collection_period_days)) {
            array_push($this->openAPINullablesSetToNull, 'collection_period_days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('collection_period_days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['collection_period_days'] = $collection_period_days;

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
     * @param string|null $state The valid states of a plan. Setting a plan to <code>deactivated</code> causes all connected subscriptions to end with the current period.
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


