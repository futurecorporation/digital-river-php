<?php
/**
 * SalesTransaction
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
 * SalesTransaction Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SalesTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SalesTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_time' => '\DateTime',
        'updated_time' => '\DateTime',
        'sale_time' => '\DateTime',
        'sales_summary_id' => 'string',
        'currency' => 'string',
        'amount' => 'float',
        'type' => 'string',
        'order_id' => 'string',
        'sku_id' => 'string',
        'quantity' => 'float',
        'payout_amounts' => '\DigitalRiver\ApiSdk\Model\PayoutAmounts',
        'payer_id' => 'string',
        'payer_name' => 'string',
        'payee_id' => 'string',
        'payee_name' => 'string',
        'live_mode' => 'bool',
        'order_upstream_id' => 'string',
        'sku_tax_code' => 'string',
        'ship_from_country' => 'string',
        'ship_to_country' => 'string',
        'bill_to_country' => 'string',
        'ship_from_state' => 'string',
        'ship_to_state' => 'string',
        'bill_to_state' => 'string',
        'payment_type' => 'string',
        'line_item_id' => 'string',
        'order_metadata' => 'array<string,mixed>',
        'line_item_metadata' => 'array<string,mixed>'
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
        'updated_time' => 'date-time',
        'sale_time' => 'date-time',
        'sales_summary_id' => null,
        'currency' => null,
        'amount' => 'double',
        'type' => null,
        'order_id' => null,
        'sku_id' => null,
        'quantity' => 'double',
        'payout_amounts' => null,
        'payer_id' => null,
        'payer_name' => null,
        'payee_id' => null,
        'payee_name' => null,
        'live_mode' => null,
        'order_upstream_id' => null,
        'sku_tax_code' => null,
        'ship_from_country' => null,
        'ship_to_country' => null,
        'bill_to_country' => null,
        'ship_from_state' => null,
        'ship_to_state' => null,
        'bill_to_state' => null,
        'payment_type' => null,
        'line_item_id' => null,
        'order_metadata' => null,
        'line_item_metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'created_time' => false,
        'updated_time' => false,
        'sale_time' => false,
        'sales_summary_id' => false,
        'currency' => false,
        'amount' => false,
        'type' => false,
        'order_id' => false,
        'sku_id' => false,
        'quantity' => false,
        'payout_amounts' => false,
        'payer_id' => false,
        'payer_name' => false,
        'payee_id' => false,
        'payee_name' => false,
        'live_mode' => false,
        'order_upstream_id' => false,
        'sku_tax_code' => false,
        'ship_from_country' => false,
        'ship_to_country' => false,
        'bill_to_country' => false,
        'ship_from_state' => false,
        'ship_to_state' => false,
        'bill_to_state' => false,
        'payment_type' => false,
        'line_item_id' => false,
        'order_metadata' => false,
        'line_item_metadata' => false
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
        'updated_time' => 'updatedTime',
        'sale_time' => 'saleTime',
        'sales_summary_id' => 'salesSummaryId',
        'currency' => 'currency',
        'amount' => 'amount',
        'type' => 'type',
        'order_id' => 'orderId',
        'sku_id' => 'skuId',
        'quantity' => 'quantity',
        'payout_amounts' => 'payoutAmounts',
        'payer_id' => 'payerId',
        'payer_name' => 'payerName',
        'payee_id' => 'payeeId',
        'payee_name' => 'payeeName',
        'live_mode' => 'liveMode',
        'order_upstream_id' => 'orderUpstreamId',
        'sku_tax_code' => 'skuTaxCode',
        'ship_from_country' => 'shipFromCountry',
        'ship_to_country' => 'shipToCountry',
        'bill_to_country' => 'billToCountry',
        'ship_from_state' => 'shipFromState',
        'ship_to_state' => 'shipToState',
        'bill_to_state' => 'billToState',
        'payment_type' => 'paymentType',
        'line_item_id' => 'lineItemId',
        'order_metadata' => 'orderMetadata',
        'line_item_metadata' => 'lineItemMetadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_time' => 'setCreatedTime',
        'updated_time' => 'setUpdatedTime',
        'sale_time' => 'setSaleTime',
        'sales_summary_id' => 'setSalesSummaryId',
        'currency' => 'setCurrency',
        'amount' => 'setAmount',
        'type' => 'setType',
        'order_id' => 'setOrderId',
        'sku_id' => 'setSkuId',
        'quantity' => 'setQuantity',
        'payout_amounts' => 'setPayoutAmounts',
        'payer_id' => 'setPayerId',
        'payer_name' => 'setPayerName',
        'payee_id' => 'setPayeeId',
        'payee_name' => 'setPayeeName',
        'live_mode' => 'setLiveMode',
        'order_upstream_id' => 'setOrderUpstreamId',
        'sku_tax_code' => 'setSkuTaxCode',
        'ship_from_country' => 'setShipFromCountry',
        'ship_to_country' => 'setShipToCountry',
        'bill_to_country' => 'setBillToCountry',
        'ship_from_state' => 'setShipFromState',
        'ship_to_state' => 'setShipToState',
        'bill_to_state' => 'setBillToState',
        'payment_type' => 'setPaymentType',
        'line_item_id' => 'setLineItemId',
        'order_metadata' => 'setOrderMetadata',
        'line_item_metadata' => 'setLineItemMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_time' => 'getCreatedTime',
        'updated_time' => 'getUpdatedTime',
        'sale_time' => 'getSaleTime',
        'sales_summary_id' => 'getSalesSummaryId',
        'currency' => 'getCurrency',
        'amount' => 'getAmount',
        'type' => 'getType',
        'order_id' => 'getOrderId',
        'sku_id' => 'getSkuId',
        'quantity' => 'getQuantity',
        'payout_amounts' => 'getPayoutAmounts',
        'payer_id' => 'getPayerId',
        'payer_name' => 'getPayerName',
        'payee_id' => 'getPayeeId',
        'payee_name' => 'getPayeeName',
        'live_mode' => 'getLiveMode',
        'order_upstream_id' => 'getOrderUpstreamId',
        'sku_tax_code' => 'getSkuTaxCode',
        'ship_from_country' => 'getShipFromCountry',
        'ship_to_country' => 'getShipToCountry',
        'bill_to_country' => 'getBillToCountry',
        'ship_from_state' => 'getShipFromState',
        'ship_to_state' => 'getShipToState',
        'bill_to_state' => 'getBillToState',
        'payment_type' => 'getPaymentType',
        'line_item_id' => 'getLineItemId',
        'order_metadata' => 'getOrderMetadata',
        'line_item_metadata' => 'getLineItemMetadata'
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

    public const TYPE_SALE = 'sale';
    public const TYPE_REPLACEMENT = 'replacement';
    public const TYPE_REPLACEMENT_REFUND = 'replacement_refund';
    public const TYPE_REPLACEMENT_RETURN = 'replacement_return';
    public const TYPE_FRAUD_CHARGEBACK = 'fraud_chargeback';
    public const TYPE_NON_FRAUD_CHARGEBACK = 'non_fraud_chargeback';
    public const TYPE_REFUND = 'refund';
    public const TYPE__RETURN = 'return';
    public const TYPE_FRAUD_DETECTION = 'fraud_detection';
    public const TYPE_DECLINED_SETTLEMENT = 'declined_settlement';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SALE,
            self::TYPE_REPLACEMENT,
            self::TYPE_REPLACEMENT_REFUND,
            self::TYPE_REPLACEMENT_RETURN,
            self::TYPE_FRAUD_CHARGEBACK,
            self::TYPE_NON_FRAUD_CHARGEBACK,
            self::TYPE_REFUND,
            self::TYPE__RETURN,
            self::TYPE_FRAUD_DETECTION,
            self::TYPE_DECLINED_SETTLEMENT,
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
        $this->setIfExists('created_time', $data ?? [], null);
        $this->setIfExists('updated_time', $data ?? [], null);
        $this->setIfExists('sale_time', $data ?? [], null);
        $this->setIfExists('sales_summary_id', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('sku_id', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('payout_amounts', $data ?? [], null);
        $this->setIfExists('payer_id', $data ?? [], null);
        $this->setIfExists('payer_name', $data ?? [], null);
        $this->setIfExists('payee_id', $data ?? [], null);
        $this->setIfExists('payee_name', $data ?? [], null);
        $this->setIfExists('live_mode', $data ?? [], null);
        $this->setIfExists('order_upstream_id', $data ?? [], null);
        $this->setIfExists('sku_tax_code', $data ?? [], null);
        $this->setIfExists('ship_from_country', $data ?? [], null);
        $this->setIfExists('ship_to_country', $data ?? [], null);
        $this->setIfExists('bill_to_country', $data ?? [], null);
        $this->setIfExists('ship_from_state', $data ?? [], null);
        $this->setIfExists('ship_to_state', $data ?? [], null);
        $this->setIfExists('bill_to_state', $data ?? [], null);
        $this->setIfExists('payment_type', $data ?? [], null);
        $this->setIfExists('line_item_id', $data ?? [], null);
        $this->setIfExists('order_metadata', $data ?? [], null);
        $this->setIfExists('line_item_metadata', $data ?? [], null);
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
     * @param string|null $id Unique identifier for the sales transaction
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
     * @param \DateTime|null $created_time Time at which the sales transaction was created
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
     * @param \DateTime|null $updated_time Time at which the sales transaction was last updated.
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
     * Gets sale_time
     *
     * @return \DateTime|null
     */
    public function getSaleTime()
    {
        return $this->container['sale_time'];
    }

    /**
     * Sets sale_time
     *
     * @param \DateTime|null $sale_time Time at which the sales occurred.
     *
     * @return self
     */
    public function setSaleTime($sale_time)
    {
        if (is_null($sale_time)) {
            throw new \InvalidArgumentException('non-nullable sale_time cannot be null');
        }
        $this->container['sale_time'] = $sale_time;

        return $this;
    }

    /**
     * Gets sales_summary_id
     *
     * @return string|null
     */
    public function getSalesSummaryId()
    {
        return $this->container['sales_summary_id'];
    }

    /**
     * Sets sales_summary_id
     *
     * @param string|null $sales_summary_id Unique identifier of a Digital River sales summary, if any.
     *
     * @return self
     */
    public function setSalesSummaryId($sales_summary_id)
    {
        if (is_null($sales_summary_id)) {
            throw new \InvalidArgumentException('non-nullable sales_summary_id cannot be null');
        }
        $this->container['sales_summary_id'] = $sales_summary_id;

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
     * @param string|null $currency Three-letter ISO currency code representing the sale currency.
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
     * @param float|null $amount The sales transaction amount.
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
     * @param string|null $type Sales transaction type.
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
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id Order identifier.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

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
     * @param string|null $sku_id SKU identifier.
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
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity The quantity of the SKU.
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
     * Gets payout_amounts
     *
     * @return \DigitalRiver\ApiSdk\Model\PayoutAmounts|null
     */
    public function getPayoutAmounts()
    {
        return $this->container['payout_amounts'];
    }

    /**
     * Sets payout_amounts
     *
     * @param \DigitalRiver\ApiSdk\Model\PayoutAmounts|null $payout_amounts payout_amounts
     *
     * @return self
     */
    public function setPayoutAmounts($payout_amounts)
    {
        if (is_null($payout_amounts)) {
            throw new \InvalidArgumentException('non-nullable payout_amounts cannot be null');
        }
        $this->container['payout_amounts'] = $payout_amounts;

        return $this;
    }

    /**
     * Gets payer_id
     *
     * @return string|null
     */
    public function getPayerId()
    {
        return $this->container['payer_id'];
    }

    /**
     * Sets payer_id
     *
     * @param string|null $payer_id The ID of payer.
     *
     * @return self
     */
    public function setPayerId($payer_id)
    {
        if (is_null($payer_id)) {
            throw new \InvalidArgumentException('non-nullable payer_id cannot be null');
        }
        $this->container['payer_id'] = $payer_id;

        return $this;
    }

    /**
     * Gets payer_name
     *
     * @return string|null
     */
    public function getPayerName()
    {
        return $this->container['payer_name'];
    }

    /**
     * Sets payer_name
     *
     * @param string|null $payer_name The name of the payer
     *
     * @return self
     */
    public function setPayerName($payer_name)
    {
        if (is_null($payer_name)) {
            throw new \InvalidArgumentException('non-nullable payer_name cannot be null');
        }
        $this->container['payer_name'] = $payer_name;

        return $this;
    }

    /**
     * Gets payee_id
     *
     * @return string|null
     */
    public function getPayeeId()
    {
        return $this->container['payee_id'];
    }

    /**
     * Sets payee_id
     *
     * @param string|null $payee_id The ID of the payee.
     *
     * @return self
     */
    public function setPayeeId($payee_id)
    {
        if (is_null($payee_id)) {
            throw new \InvalidArgumentException('non-nullable payee_id cannot be null');
        }
        $this->container['payee_id'] = $payee_id;

        return $this;
    }

    /**
     * Gets payee_name
     *
     * @return string|null
     */
    public function getPayeeName()
    {
        return $this->container['payee_name'];
    }

    /**
     * Sets payee_name
     *
     * @param string|null $payee_name The name of the payee.
     *
     * @return self
     */
    public function setPayeeName($payee_name)
    {
        if (is_null($payee_name)) {
            throw new \InvalidArgumentException('non-nullable payee_name cannot be null');
        }
        $this->container['payee_name'] = $payee_name;

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
     * Gets order_upstream_id
     *
     * @return string|null
     */
    public function getOrderUpstreamId()
    {
        return $this->container['order_upstream_id'];
    }

    /**
     * Sets order_upstream_id
     *
     * @param string|null $order_upstream_id Unique upstream ID for the order.
     *
     * @return self
     */
    public function setOrderUpstreamId($order_upstream_id)
    {
        if (is_null($order_upstream_id)) {
            throw new \InvalidArgumentException('non-nullable order_upstream_id cannot be null');
        }
        $this->container['order_upstream_id'] = $order_upstream_id;

        return $this;
    }

    /**
     * Gets sku_tax_code
     *
     * @return string|null
     */
    public function getSkuTaxCode()
    {
        return $this->container['sku_tax_code'];
    }

    /**
     * Sets sku_tax_code
     *
     * @param string|null $sku_tax_code The sku tax code.
     *
     * @return self
     */
    public function setSkuTaxCode($sku_tax_code)
    {
        if (is_null($sku_tax_code)) {
            throw new \InvalidArgumentException('non-nullable sku_tax_code cannot be null');
        }
        $this->container['sku_tax_code'] = $sku_tax_code;

        return $this;
    }

    /**
     * Gets ship_from_country
     *
     * @return string|null
     */
    public function getShipFromCountry()
    {
        return $this->container['ship_from_country'];
    }

    /**
     * Sets ship_from_country
     *
     * @param string|null $ship_from_country Country being shipped from.
     *
     * @return self
     */
    public function setShipFromCountry($ship_from_country)
    {
        if (is_null($ship_from_country)) {
            throw new \InvalidArgumentException('non-nullable ship_from_country cannot be null');
        }
        $this->container['ship_from_country'] = $ship_from_country;

        return $this;
    }

    /**
     * Gets ship_to_country
     *
     * @return string|null
     */
    public function getShipToCountry()
    {
        return $this->container['ship_to_country'];
    }

    /**
     * Sets ship_to_country
     *
     * @param string|null $ship_to_country Country being shipped to.
     *
     * @return self
     */
    public function setShipToCountry($ship_to_country)
    {
        if (is_null($ship_to_country)) {
            throw new \InvalidArgumentException('non-nullable ship_to_country cannot be null');
        }
        $this->container['ship_to_country'] = $ship_to_country;

        return $this;
    }

    /**
     * Gets bill_to_country
     *
     * @return string|null
     */
    public function getBillToCountry()
    {
        return $this->container['bill_to_country'];
    }

    /**
     * Sets bill_to_country
     *
     * @param string|null $bill_to_country Country listed on shopper's billing address.
     *
     * @return self
     */
    public function setBillToCountry($bill_to_country)
    {
        if (is_null($bill_to_country)) {
            throw new \InvalidArgumentException('non-nullable bill_to_country cannot be null');
        }
        $this->container['bill_to_country'] = $bill_to_country;

        return $this;
    }

    /**
     * Gets ship_from_state
     *
     * @return string|null
     */
    public function getShipFromState()
    {
        return $this->container['ship_from_state'];
    }

    /**
     * Sets ship_from_state
     *
     * @param string|null $ship_from_state The state, county, province, or region being shipped from.
     *
     * @return self
     */
    public function setShipFromState($ship_from_state)
    {
        if (is_null($ship_from_state)) {
            throw new \InvalidArgumentException('non-nullable ship_from_state cannot be null');
        }
        $this->container['ship_from_state'] = $ship_from_state;

        return $this;
    }

    /**
     * Gets ship_to_state
     *
     * @return string|null
     */
    public function getShipToState()
    {
        return $this->container['ship_to_state'];
    }

    /**
     * Sets ship_to_state
     *
     * @param string|null $ship_to_state The state, county, province, or region being shipped to.
     *
     * @return self
     */
    public function setShipToState($ship_to_state)
    {
        if (is_null($ship_to_state)) {
            throw new \InvalidArgumentException('non-nullable ship_to_state cannot be null');
        }
        $this->container['ship_to_state'] = $ship_to_state;

        return $this;
    }

    /**
     * Gets bill_to_state
     *
     * @return string|null
     */
    public function getBillToState()
    {
        return $this->container['bill_to_state'];
    }

    /**
     * Sets bill_to_state
     *
     * @param string|null $bill_to_state The state, county, province, or region being billed to.
     *
     * @return self
     */
    public function setBillToState($bill_to_state)
    {
        if (is_null($bill_to_state)) {
            throw new \InvalidArgumentException('non-nullable bill_to_state cannot be null');
        }
        $this->container['bill_to_state'] = $bill_to_state;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string|null $payment_type Type of payment used.
     *
     * @return self
     */
    public function setPaymentType($payment_type)
    {
        if (is_null($payment_type)) {
            throw new \InvalidArgumentException('non-nullable payment_type cannot be null');
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets line_item_id
     *
     * @return string|null
     */
    public function getLineItemId()
    {
        return $this->container['line_item_id'];
    }

    /**
     * Sets line_item_id
     *
     * @param string|null $line_item_id The unique identiier of the line item.
     *
     * @return self
     */
    public function setLineItemId($line_item_id)
    {
        if (is_null($line_item_id)) {
            throw new \InvalidArgumentException('non-nullable line_item_id cannot be null');
        }
        $this->container['line_item_id'] = $line_item_id;

        return $this;
    }

    /**
     * Gets order_metadata
     *
     * @return array<string,mixed>|null
     */
    public function getOrderMetadata()
    {
        return $this->container['order_metadata'];
    }

    /**
     * Sets order_metadata
     *
     * @param array<string,mixed>|null $order_metadata Key-value pairs used to store additional data. Value can be string, boolean or integer types.
     *
     * @return self
     */
    public function setOrderMetadata($order_metadata)
    {
        if (is_null($order_metadata)) {
            throw new \InvalidArgumentException('non-nullable order_metadata cannot be null');
        }
        $this->container['order_metadata'] = $order_metadata;

        return $this;
    }

    /**
     * Gets line_item_metadata
     *
     * @return array<string,mixed>|null
     */
    public function getLineItemMetadata()
    {
        return $this->container['line_item_metadata'];
    }

    /**
     * Sets line_item_metadata
     *
     * @param array<string,mixed>|null $line_item_metadata Key-value pairs used to store additional data. Value can be string, boolean or integer types.
     *
     * @return self
     */
    public function setLineItemMetadata($line_item_metadata)
    {
        if (is_null($line_item_metadata)) {
            throw new \InvalidArgumentException('non-nullable line_item_metadata cannot be null');
        }
        $this->container['line_item_metadata'] = $line_item_metadata;

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


