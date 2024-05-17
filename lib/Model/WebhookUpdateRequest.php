<?php
/**
 * WebhookUpdateRequest
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
 * WebhookUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'types' => 'string[]',
        'api_version' => 'string',
        'enabled' => 'bool',
        'address' => 'string',
        'transport_type' => 'string',
        'oauth' => '\DigitalRiver\ApiSdk\Model\WebhookUpdateRequestOauth',
        'authentication' => '\DigitalRiver\ApiSdk\Model\WebhookRequestAuthentication'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'types' => null,
        'api_version' => null,
        'enabled' => null,
        'address' => null,
        'transport_type' => null,
        'oauth' => null,
        'authentication' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'types' => false,
        'api_version' => false,
        'enabled' => false,
        'address' => false,
        'transport_type' => false,
        'oauth' => false,
        'authentication' => false
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
        'types' => 'types',
        'api_version' => 'apiVersion',
        'enabled' => 'enabled',
        'address' => 'address',
        'transport_type' => 'transportType',
        'oauth' => 'oauth',
        'authentication' => 'authentication'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'types' => 'setTypes',
        'api_version' => 'setApiVersion',
        'enabled' => 'setEnabled',
        'address' => 'setAddress',
        'transport_type' => 'setTransportType',
        'oauth' => 'setOauth',
        'authentication' => 'setAuthentication'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'types' => 'getTypes',
        'api_version' => 'getApiVersion',
        'enabled' => 'getEnabled',
        'address' => 'getAddress',
        'transport_type' => 'getTransportType',
        'oauth' => 'getOauth',
        'authentication' => 'getAuthentication'
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

    public const API_VERSION__DEFAULT = 'default';
    public const API_VERSION_YYYY_MM_DD = '<YYYY-MM-DD>';
    public const TRANSPORT_TYPE_HTTP = 'HTTP';
    public const TRANSPORT_TYPE_OAUTH = 'OAUTH';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApiVersionAllowableValues()
    {
        return [
            self::API_VERSION__DEFAULT,
            self::API_VERSION_YYYY_MM_DD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportTypeAllowableValues()
    {
        return [
            self::TRANSPORT_TYPE_HTTP,
            self::TRANSPORT_TYPE_OAUTH,
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
        $this->setIfExists('types', $data ?? [], null);
        $this->setIfExists('api_version', $data ?? [], 'default');
        $this->setIfExists('enabled', $data ?? [], true);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('transport_type', $data ?? [], 'HTTP');
        $this->setIfExists('oauth', $data ?? [], null);
        $this->setIfExists('authentication', $data ?? [], null);
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

        $allowedValues = $this->getApiVersionAllowableValues();
        if (!is_null($this->container['api_version']) && !in_array($this->container['api_version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'api_version', must be one of '%s'",
                $this->container['api_version'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransportTypeAllowableValues();
        if (!is_null($this->container['transport_type']) && !in_array($this->container['transport_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transport_type', must be one of '%s'",
                $this->container['transport_type'],
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
     * Gets types
     *
     * @return string[]|null
     */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
     * Sets types
     *
     * @param string[]|null $types types
     *
     * @return self
     */
    public function setTypes($types)
    {
        if (is_null($types)) {
            throw new \InvalidArgumentException('non-nullable types cannot be null');
        }
        $this->container['types'] = $types;

        return $this;
    }

    /**
     * Gets api_version
     *
     * @return string|null
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version
     *
     * @param string|null $api_version Indicates whether to use the current, default version of the API or the version specified by YYYY-MM-DD.
     *
     * @return self
     */
    public function setApiVersion($api_version)
    {
        if (is_null($api_version)) {
            throw new \InvalidArgumentException('non-nullable api_version cannot be null');
        }
        $allowedValues = $this->getApiVersionAllowableValues();
        if (!in_array($api_version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'api_version', must be one of '%s'",
                    $api_version,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['api_version'] = $api_version;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Indicate that webhook is enabled and receives notifications or is not enabled and does not receive notifications
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address URL of the webhook endpoint on your server you have set up to receive webhook notifications. Webhook data is sent as JSON in the POST request body. The full event details are included and can be used directly, after parsing the JSON into an Event object.
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets transport_type
     *
     * @return string|null
     */
    public function getTransportType()
    {
        return $this->container['transport_type'];
    }

    /**
     * Sets transport_type
     *
     * @param string|null $transport_type transport_type
     *
     * @return self
     */
    public function setTransportType($transport_type)
    {
        if (is_null($transport_type)) {
            throw new \InvalidArgumentException('non-nullable transport_type cannot be null');
        }
        $allowedValues = $this->getTransportTypeAllowableValues();
        if (!in_array($transport_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transport_type', must be one of '%s'",
                    $transport_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transport_type'] = $transport_type;

        return $this;
    }

    /**
     * Gets oauth
     *
     * @return \DigitalRiver\ApiSdk\Model\WebhookUpdateRequestOauth|null
     */
    public function getOauth()
    {
        return $this->container['oauth'];
    }

    /**
     * Sets oauth
     *
     * @param \DigitalRiver\ApiSdk\Model\WebhookUpdateRequestOauth|null $oauth oauth
     *
     * @return self
     */
    public function setOauth($oauth)
    {
        if (is_null($oauth)) {
            throw new \InvalidArgumentException('non-nullable oauth cannot be null');
        }
        $this->container['oauth'] = $oauth;

        return $this;
    }

    /**
     * Gets authentication
     *
     * @return \DigitalRiver\ApiSdk\Model\WebhookRequestAuthentication|null
     */
    public function getAuthentication()
    {
        return $this->container['authentication'];
    }

    /**
     * Sets authentication
     *
     * @param \DigitalRiver\ApiSdk\Model\WebhookRequestAuthentication|null $authentication authentication
     *
     * @return self
     */
    public function setAuthentication($authentication)
    {
        if (is_null($authentication)) {
            throw new \InvalidArgumentException('non-nullable authentication cannot be null');
        }
        $this->container['authentication'] = $authentication;

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


