<?php
/**
 * AddNumberRequest
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
 * AddNumberRequest Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddNumberRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddNumberRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allocation' => 'int',
        'charge_account_if_needed' => 'bool',
        'assignment_settings' => '\Ringba\Model\NumberAssignmentSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allocation' => 'int32',
        'charge_account_if_needed' => null,
        'assignment_settings' => null
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
        'allocation' => 'allocation',
        'charge_account_if_needed' => 'chargeAccountIfNeeded',
        'assignment_settings' => 'assignmentSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allocation' => 'setAllocation',
        'charge_account_if_needed' => 'setChargeAccountIfNeeded',
        'assignment_settings' => 'setAssignmentSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allocation' => 'getAllocation',
        'charge_account_if_needed' => 'getChargeAccountIfNeeded',
        'assignment_settings' => 'getAssignmentSettings'
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
        $this->container['allocation'] = isset($data['allocation']) ? $data['allocation'] : null;
        $this->container['charge_account_if_needed'] = isset($data['charge_account_if_needed']) ? $data['charge_account_if_needed'] : null;
        $this->container['assignment_settings'] = isset($data['assignment_settings']) ? $data['assignment_settings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['allocation'] === null) {
            $invalidProperties[] = "'allocation' can't be null";
        }
        if (($this->container['allocation'] > 3000)) {
            $invalidProperties[] = "invalid value for 'allocation', must be smaller than or equal to 3000.";
        }

        if (($this->container['allocation'] < 1)) {
            $invalidProperties[] = "invalid value for 'allocation', must be bigger than or equal to 1.";
        }

        if ($this->container['charge_account_if_needed'] === null) {
            $invalidProperties[] = "'charge_account_if_needed' can't be null";
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
     * Gets allocation
     *
     * @return int
     */
    public function getAllocation()
    {
        return $this->container['allocation'];
    }

    /**
     * Sets allocation
     *
     * @param int $allocation allocation
     *
     * @return $this
     */
    public function setAllocation($allocation)
    {

        if (($allocation > 3000)) {
            throw new \InvalidArgumentException('invalid value for $allocation when calling AddNumberRequest., must be smaller than or equal to 3000.');
        }
        if (($allocation < 1)) {
            throw new \InvalidArgumentException('invalid value for $allocation when calling AddNumberRequest., must be bigger than or equal to 1.');
        }

        $this->container['allocation'] = $allocation;

        return $this;
    }

    /**
     * Gets charge_account_if_needed
     *
     * @return bool
     */
    public function getChargeAccountIfNeeded()
    {
        return $this->container['charge_account_if_needed'];
    }

    /**
     * Sets charge_account_if_needed
     *
     * @param bool $charge_account_if_needed charge_account_if_needed
     *
     * @return $this
     */
    public function setChargeAccountIfNeeded($charge_account_if_needed)
    {
        $this->container['charge_account_if_needed'] = $charge_account_if_needed;

        return $this;
    }

    /**
     * Gets assignment_settings
     *
     * @return \Ringba\Model\NumberAssignmentSettings
     */
    public function getAssignmentSettings()
    {
        return $this->container['assignment_settings'];
    }

    /**
     * Sets assignment_settings
     *
     * @param \Ringba\Model\NumberAssignmentSettings $assignment_settings assignment_settings
     *
     * @return $this
     */
    public function setAssignmentSettings($assignment_settings)
    {
        $this->container['assignment_settings'] = $assignment_settings;

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


