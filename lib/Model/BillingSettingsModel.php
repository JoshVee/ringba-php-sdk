<?php
/**
 * BillingSettingsModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * api.ringba.com
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ringba\Model;

use \ArrayAccess;
use \Ringba\ObjectSerializer;

/**
 * BillingSettingsModel Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingSettingsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BillingSettingsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'recharge_balance' => 'double',
        'recharge_amount' => 'double',
        'auto_recharge' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'recharge_balance' => 'double',
        'recharge_amount' => 'double',
        'auto_recharge' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'recharge_balance' => 'rechargeBalance',
        'recharge_amount' => 'rechargeAmount',
        'auto_recharge' => 'autoRecharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recharge_balance' => 'setRechargeBalance',
        'recharge_amount' => 'setRechargeAmount',
        'auto_recharge' => 'setAutoRecharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recharge_balance' => 'getRechargeBalance',
        'recharge_amount' => 'getRechargeAmount',
        'auto_recharge' => 'getAutoRecharge'
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
        return self::$swaggerModelName;
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
        $this->container['recharge_balance'] = isset($data['recharge_balance']) ? $data['recharge_balance'] : null;
        $this->container['recharge_amount'] = isset($data['recharge_amount']) ? $data['recharge_amount'] : null;
        $this->container['auto_recharge'] = isset($data['auto_recharge']) ? $data['auto_recharge'] : null;
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
     * Gets recharge_balance
     *
     * @return double
     */
    public function getRechargeBalance()
    {
        return $this->container['recharge_balance'];
    }

    /**
     * Sets recharge_balance
     *
     * @param double $recharge_balance recharge_balance
     *
     * @return $this
     */
    public function setRechargeBalance($recharge_balance)
    {
        $this->container['recharge_balance'] = $recharge_balance;

        return $this;
    }

    /**
     * Gets recharge_amount
     *
     * @return double
     */
    public function getRechargeAmount()
    {
        return $this->container['recharge_amount'];
    }

    /**
     * Sets recharge_amount
     *
     * @param double $recharge_amount recharge_amount
     *
     * @return $this
     */
    public function setRechargeAmount($recharge_amount)
    {
        $this->container['recharge_amount'] = $recharge_amount;

        return $this;
    }

    /**
     * Gets auto_recharge
     *
     * @return bool
     */
    public function getAutoRecharge()
    {
        return $this->container['auto_recharge'];
    }

    /**
     * Sets auto_recharge
     *
     * @param bool $auto_recharge auto_recharge
     *
     * @return $this
     */
    public function setAutoRecharge($auto_recharge)
    {
        $this->container['auto_recharge'] = $auto_recharge;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


