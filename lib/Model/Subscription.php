<?php
/**
 * Subscription
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
 * Subscription Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Subscription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contract_binding_until' => '\DateTime',
        'created_time' => '\DateTime',
        'updated_time' => '\DateTime',
        'state_transitions' => '\DigitalRiver\ApiSdk\Model\SubscriptionStateTransitions',
        'live_mode' => 'bool',
        'id' => 'string',
        'billing_agreement_id' => 'string',
        'customer_id' => 'string',
        'source_id' => 'string',
        'tax_inclusive' => 'bool',
        'currency' => 'string',
        'plan_id' => 'string',
        'application_id' => 'string',
        'locale' => 'string',
        'state' => 'string',
        'items' => '\DigitalRiver\ApiSdk\Model\SubscriptionItems[]',
        'current_period_start_date' => '\DateTime',
        'current_period_end_date' => '\DateTime',
        'next_invoice_date' => '\DateTime',
        'next_reminder_date' => '\DateTime',
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
        'contract_binding_until' => 'date-time',
        'created_time' => 'date-time',
        'updated_time' => 'date-time',
        'state_transitions' => null,
        'live_mode' => null,
        'id' => null,
        'billing_agreement_id' => null,
        'customer_id' => null,
        'source_id' => null,
        'tax_inclusive' => null,
        'currency' => null,
        'plan_id' => null,
        'application_id' => null,
        'locale' => null,
        'state' => null,
        'items' => null,
        'current_period_start_date' => 'date-time',
        'current_period_end_date' => 'date-time',
        'next_invoice_date' => 'date-time',
        'next_reminder_date' => 'date-time',
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contract_binding_until' => false,
		'created_time' => false,
		'updated_time' => false,
		'state_transitions' => false,
		'live_mode' => false,
		'id' => false,
		'billing_agreement_id' => false,
		'customer_id' => true,
		'source_id' => false,
		'tax_inclusive' => false,
		'currency' => false,
		'plan_id' => false,
		'application_id' => true,
		'locale' => true,
		'state' => false,
		'items' => false,
		'current_period_start_date' => false,
		'current_period_end_date' => false,
		'next_invoice_date' => false,
		'next_reminder_date' => false,
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
        'contract_binding_until' => 'contractBindingUntil',
        'created_time' => 'createdTime',
        'updated_time' => 'updatedTime',
        'state_transitions' => 'stateTransitions',
        'live_mode' => 'liveMode',
        'id' => 'id',
        'billing_agreement_id' => 'billingAgreementId',
        'customer_id' => 'customerId',
        'source_id' => 'sourceId',
        'tax_inclusive' => 'taxInclusive',
        'currency' => 'currency',
        'plan_id' => 'planId',
        'application_id' => 'applicationId',
        'locale' => 'locale',
        'state' => 'state',
        'items' => 'items',
        'current_period_start_date' => 'currentPeriodStartDate',
        'current_period_end_date' => 'currentPeriodEndDate',
        'next_invoice_date' => 'nextInvoiceDate',
        'next_reminder_date' => 'nextReminderDate',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract_binding_until' => 'setContractBindingUntil',
        'created_time' => 'setCreatedTime',
        'updated_time' => 'setUpdatedTime',
        'state_transitions' => 'setStateTransitions',
        'live_mode' => 'setLiveMode',
        'id' => 'setId',
        'billing_agreement_id' => 'setBillingAgreementId',
        'customer_id' => 'setCustomerId',
        'source_id' => 'setSourceId',
        'tax_inclusive' => 'setTaxInclusive',
        'currency' => 'setCurrency',
        'plan_id' => 'setPlanId',
        'application_id' => 'setApplicationId',
        'locale' => 'setLocale',
        'state' => 'setState',
        'items' => 'setItems',
        'current_period_start_date' => 'setCurrentPeriodStartDate',
        'current_period_end_date' => 'setCurrentPeriodEndDate',
        'next_invoice_date' => 'setNextInvoiceDate',
        'next_reminder_date' => 'setNextReminderDate',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract_binding_until' => 'getContractBindingUntil',
        'created_time' => 'getCreatedTime',
        'updated_time' => 'getUpdatedTime',
        'state_transitions' => 'getStateTransitions',
        'live_mode' => 'getLiveMode',
        'id' => 'getId',
        'billing_agreement_id' => 'getBillingAgreementId',
        'customer_id' => 'getCustomerId',
        'source_id' => 'getSourceId',
        'tax_inclusive' => 'getTaxInclusive',
        'currency' => 'getCurrency',
        'plan_id' => 'getPlanId',
        'application_id' => 'getApplicationId',
        'locale' => 'getLocale',
        'state' => 'getState',
        'items' => 'getItems',
        'current_period_start_date' => 'getCurrentPeriodStartDate',
        'current_period_end_date' => 'getCurrentPeriodEndDate',
        'next_invoice_date' => 'getNextInvoiceDate',
        'next_reminder_date' => 'getNextReminderDate',
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

    public const STATE_DRAFT = 'draft';
    public const STATE_ACTIVE_PENDING_INVOICE = 'activePendingInvoice';
    public const STATE_ACTIVE = 'active';
    public const STATE_ACTIVE_FREE = 'activeFree';
    public const STATE_FAILED = 'failed';
    public const STATE_CANCELLED = 'cancelled';
    public const STATE_ENDED = 'ended';
    public const STATE_LAPSED = 'lapsed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_DRAFT,
            self::STATE_ACTIVE_PENDING_INVOICE,
            self::STATE_ACTIVE,
            self::STATE_ACTIVE_FREE,
            self::STATE_FAILED,
            self::STATE_CANCELLED,
            self::STATE_ENDED,
            self::STATE_LAPSED,
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
        $this->setIfExists('contract_binding_until', $data ?? [], null);
        $this->setIfExists('created_time', $data ?? [], null);
        $this->setIfExists('updated_time', $data ?? [], null);
        $this->setIfExists('state_transitions', $data ?? [], null);
        $this->setIfExists('live_mode', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('billing_agreement_id', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('tax_inclusive', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('plan_id', $data ?? [], null);
        $this->setIfExists('application_id', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('current_period_start_date', $data ?? [], null);
        $this->setIfExists('current_period_end_date', $data ?? [], null);
        $this->setIfExists('next_invoice_date', $data ?? [], null);
        $this->setIfExists('next_reminder_date', $data ?? [], null);
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

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['plan_id'] === null) {
            $invalidProperties[] = "'plan_id' can't be null";
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
     * Gets contract_binding_until
     *
     * @return \DateTime|null
     */
    public function getContractBindingUntil()
    {
        return $this->container['contract_binding_until'];
    }

    /**
     * Sets contract_binding_until
     *
     * @param \DateTime|null $contract_binding_until Represents the date and time when the subscription's contract expires.
     *
     * @return self
     */
    public function setContractBindingUntil($contract_binding_until)
    {
        if (is_null($contract_binding_until)) {
            throw new \InvalidArgumentException('non-nullable contract_binding_until cannot be null');
        }
        $this->container['contract_binding_until'] = $contract_binding_until;

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
     * @param \DateTime|null $created_time The time when the Subscription was created
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
     * Gets updated_time
     *
     * @return \DateTime|null
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param \DateTime|null $updated_time The time when the Subscription was last updated.
     *
     * @return self
     */
    public function setUpdatedTime($updated_time)
    {
        if (is_null($updated_time)) {
            throw new \InvalidArgumentException('non-nullable updated_time cannot be null');
        }
        $this->container['updated_time'] = $updated_time;

        return $this;
    }

    /**
     * Gets state_transitions
     *
     * @return \DigitalRiver\ApiSdk\Model\SubscriptionStateTransitions|null
     */
    public function getStateTransitions()
    {
        return $this->container['state_transitions'];
    }

    /**
     * Sets state_transitions
     *
     * @param \DigitalRiver\ApiSdk\Model\SubscriptionStateTransitions|null $state_transitions state_transitions
     *
     * @return self
     */
    public function setStateTransitions($state_transitions)
    {
        if (is_null($state_transitions)) {
            throw new \InvalidArgumentException('non-nullable state_transitions cannot be null');
        }
        $this->container['state_transitions'] = $state_transitions;

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
     * @param string|null $id The unique identifier of the Subscription.
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
     * Gets billing_agreement_id
     *
     * @return string|null
     */
    public function getBillingAgreementId()
    {
        return $this->container['billing_agreement_id'];
    }

    /**
     * Sets billing_agreement_id
     *
     * @param string|null $billing_agreement_id The billing agreement identifier that is obtained from the subscription's acquisition order.
     *
     * @return self
     */
    public function setBillingAgreementId($billing_agreement_id)
    {
        if (is_null($billing_agreement_id)) {
            throw new \InvalidArgumentException('non-nullable billing_agreement_id cannot be null');
        }
        $this->container['billing_agreement_id'] = $billing_agreement_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id The Customer identifier that is obtained from the subscription's acquisition order.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            array_push($this->openAPINullablesSetToNull, 'customer_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer_id'] = $customer_id;

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
     * @param string|null $source_id The unique identifier of the subscription's reusable payment source.
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
     * Gets tax_inclusive
     *
     * @return bool|null
     */
    public function getTaxInclusive()
    {
        return $this->container['tax_inclusive'];
    }

    /**
     * Sets tax_inclusive
     *
     * @param bool|null $tax_inclusive If true indicates that the prices supplied are tax inclusive.
     *
     * @return self
     */
    public function setTaxInclusive($tax_inclusive)
    {
        if (is_null($tax_inclusive)) {
            throw new \InvalidArgumentException('non-nullable tax_inclusive cannot be null');
        }
        $this->container['tax_inclusive'] = $tax_inclusive;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Three-letter ISO currency code (e.g. \"USD\" or \"EUR\").
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
     * Gets plan_id
     *
     * @return string
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     *
     * @param string $plan_id The Plan identifier.
     *
     * @return self
     */
    public function setPlanId($plan_id)
    {
        if (is_null($plan_id)) {
            throw new \InvalidArgumentException('non-nullable plan_id cannot be null');
        }
        $this->container['plan_id'] = $plan_id;

        return $this;
    }

    /**
     * Gets application_id
     *
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string|null $application_id The identifier of the client application that created the subscription.
     *
     * @return self
     */
    public function setApplicationId($application_id)
    {
        if (is_null($application_id)) {
            array_push($this->openAPINullablesSetToNull, 'application_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('application_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale A locale designator that combines a two-letter ISO 639-1 language code with a ISO 3166-1 alpha-2 country code.
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            array_push($this->openAPINullablesSetToNull, 'locale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('locale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['locale'] = $locale;

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
     * @param string|null $state The state of the subscription
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
     * Gets items
     *
     * @return \DigitalRiver\ApiSdk\Model\SubscriptionItems[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \DigitalRiver\ApiSdk\Model\SubscriptionItems[]|null $items items
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
     * Gets current_period_start_date
     *
     * @return \DateTime|null
     */
    public function getCurrentPeriodStartDate()
    {
        return $this->container['current_period_start_date'];
    }

    /**
     * Sets current_period_start_date
     *
     * @param \DateTime|null $current_period_start_date Represents the date and time when the subscription's current billing period began.
     *
     * @return self
     */
    public function setCurrentPeriodStartDate($current_period_start_date)
    {
        if (is_null($current_period_start_date)) {
            throw new \InvalidArgumentException('non-nullable current_period_start_date cannot be null');
        }
        $this->container['current_period_start_date'] = $current_period_start_date;

        return $this;
    }

    /**
     * Gets current_period_end_date
     *
     * @return \DateTime|null
     */
    public function getCurrentPeriodEndDate()
    {
        return $this->container['current_period_end_date'];
    }

    /**
     * Sets current_period_end_date
     *
     * @param \DateTime|null $current_period_end_date Represents the date and time when the subscription's current billing period ends.
     *
     * @return self
     */
    public function setCurrentPeriodEndDate($current_period_end_date)
    {
        if (is_null($current_period_end_date)) {
            throw new \InvalidArgumentException('non-nullable current_period_end_date cannot be null');
        }
        $this->container['current_period_end_date'] = $current_period_end_date;

        return $this;
    }

    /**
     * Gets next_invoice_date
     *
     * @return \DateTime|null
     */
    public function getNextInvoiceDate()
    {
        return $this->container['next_invoice_date'];
    }

    /**
     * Sets next_invoice_date
     *
     * @param \DateTime|null $next_invoice_date Represents the date and time when Digital River next opens an invoice and starts the billing process.
     *
     * @return self
     */
    public function setNextInvoiceDate($next_invoice_date)
    {
        if (is_null($next_invoice_date)) {
            throw new \InvalidArgumentException('non-nullable next_invoice_date cannot be null');
        }
        $this->container['next_invoice_date'] = $next_invoice_date;

        return $this;
    }

    /**
     * Gets next_reminder_date
     *
     * @return \DateTime|null
     */
    public function getNextReminderDate()
    {
        return $this->container['next_reminder_date'];
    }

    /**
     * Sets next_reminder_date
     *
     * @param \DateTime|null $next_reminder_date Date when the next reminder event will be sent.
     *
     * @return self
     */
    public function setNextReminderDate($next_reminder_date)
    {
        if (is_null($next_reminder_date)) {
            throw new \InvalidArgumentException('non-nullable next_reminder_date cannot be null');
        }
        $this->container['next_reminder_date'] = $next_reminder_date;

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


