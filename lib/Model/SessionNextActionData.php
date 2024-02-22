<?php
/**
 * SessionNextActionData
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
 * SessionNextActionData Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SessionNextActionData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Session_nextAction_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'redirect_url' => 'string',
        'source_id' => 'string',
        'source_client_secret' => 'string',
        'session_id' => 'string',
        'fingerprint_token' => 'string',
        'challenge_token' => 'string',
        'origin_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'redirect_url' => null,
        'source_id' => null,
        'source_client_secret' => null,
        'session_id' => null,
        'fingerprint_token' => null,
        'challenge_token' => null,
        'origin_key' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'redirect_url' => false,
		'source_id' => false,
		'source_client_secret' => false,
		'session_id' => false,
		'fingerprint_token' => false,
		'challenge_token' => false,
		'origin_key' => false
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
        'redirect_url' => 'redirectUrl',
        'source_id' => 'sourceId',
        'source_client_secret' => 'sourceClientSecret',
        'session_id' => 'sessionId',
        'fingerprint_token' => 'fingerprintToken',
        'challenge_token' => 'challengeToken',
        'origin_key' => 'originKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'redirect_url' => 'setRedirectUrl',
        'source_id' => 'setSourceId',
        'source_client_secret' => 'setSourceClientSecret',
        'session_id' => 'setSessionId',
        'fingerprint_token' => 'setFingerprintToken',
        'challenge_token' => 'setChallengeToken',
        'origin_key' => 'setOriginKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'redirect_url' => 'getRedirectUrl',
        'source_id' => 'getSourceId',
        'source_client_secret' => 'getSourceClientSecret',
        'session_id' => 'getSessionId',
        'fingerprint_token' => 'getFingerprintToken',
        'challenge_token' => 'getChallengeToken',
        'origin_key' => 'getOriginKey'
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
        $this->setIfExists('redirect_url', $data ?? [], null);
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('source_client_secret', $data ?? [], null);
        $this->setIfExists('session_id', $data ?? [], null);
        $this->setIfExists('fingerprint_token', $data ?? [], null);
        $this->setIfExists('challenge_token', $data ?? [], null);
        $this->setIfExists('origin_key', $data ?? [], null);
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
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url If <code>action</code> is <code>redirect</code> then redirect to this resource.
     *
     * @return self
     */
    public function setRedirectUrl($redirect_url)
    {
        if (is_null($redirect_url)) {
            throw new \InvalidArgumentException('non-nullable redirect_url cannot be null');
        }
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string|null $source_id The identifier of the payment source. If <code>action</code> is <code>show_payment_instructions</code>, then use this identifier to configure the delayed payment instructions element.
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        if (is_null($source_id)) {
            throw new \InvalidArgumentException('non-nullable source_id cannot be null');
        }
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets source_client_secret
     *
     * @return string|null
     */
    public function getSourceClientSecret()
    {
        return $this->container['source_client_secret'];
    }

    /**
     * Sets source_client_secret
     *
     * @param string|null $source_client_secret The client secret of the payment source. If <code>action</code> is <code>show_payment_instructions</code>, then use this identifier to configure the delayed payment instructions element.
     *
     * @return self
     */
    public function setSourceClientSecret($source_client_secret)
    {
        if (is_null($source_client_secret)) {
            throw new \InvalidArgumentException('non-nullable source_client_secret cannot be null');
        }
        $this->container['source_client_secret'] = $source_client_secret;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string|null $session_id The identifier of the payment session
     *
     * @return self
     */
    public function setSessionId($session_id)
    {
        if (is_null($session_id)) {
            throw new \InvalidArgumentException('non-nullable session_id cannot be null');
        }
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets fingerprint_token
     *
     * @return string|null
     */
    public function getFingerprintToken()
    {
        return $this->container['fingerprint_token'];
    }

    /**
     * Sets fingerprint_token
     *
     * @param string|null $fingerprint_token fingerprint_token
     *
     * @return self
     */
    public function setFingerprintToken($fingerprint_token)
    {
        if (is_null($fingerprint_token)) {
            throw new \InvalidArgumentException('non-nullable fingerprint_token cannot be null');
        }
        $this->container['fingerprint_token'] = $fingerprint_token;

        return $this;
    }

    /**
     * Gets challenge_token
     *
     * @return string|null
     */
    public function getChallengeToken()
    {
        return $this->container['challenge_token'];
    }

    /**
     * Sets challenge_token
     *
     * @param string|null $challenge_token challenge_token
     *
     * @return self
     */
    public function setChallengeToken($challenge_token)
    {
        if (is_null($challenge_token)) {
            throw new \InvalidArgumentException('non-nullable challenge_token cannot be null');
        }
        $this->container['challenge_token'] = $challenge_token;

        return $this;
    }

    /**
     * Gets origin_key
     *
     * @return string|null
     */
    public function getOriginKey()
    {
        return $this->container['origin_key'];
    }

    /**
     * Sets origin_key
     *
     * @param string|null $origin_key origin_key
     *
     * @return self
     */
    public function setOriginKey($origin_key)
    {
        if (is_null($origin_key)) {
            throw new \InvalidArgumentException('non-nullable origin_key cannot be null');
        }
        $this->container['origin_key'] = $origin_key;

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

