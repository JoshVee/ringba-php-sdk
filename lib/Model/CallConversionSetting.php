<?php
/**
 * CallConversionSetting
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
 * Swagger Codegen version: 2.4.0-SNAPSHOT
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
 * CallConversionSetting Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallConversionSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallConversionSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conversion_value' => 'double',
        'payout_value' => 'double',
        'de_dupe_setting' => '\Ringba\Model\DuplicateSetting',
        'conversion_type' => 'string',
        'conversion_args' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conversion_value' => 'double',
        'payout_value' => 'double',
        'de_dupe_setting' => null,
        'conversion_type' => null,
        'conversion_args' => null
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
        'conversion_value' => 'conversionValue',
        'payout_value' => 'payoutValue',
        'de_dupe_setting' => 'deDupeSetting',
        'conversion_type' => 'conversionType',
        'conversion_args' => 'conversionArgs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversion_value' => 'setConversionValue',
        'payout_value' => 'setPayoutValue',
        'de_dupe_setting' => 'setDeDupeSetting',
        'conversion_type' => 'setConversionType',
        'conversion_args' => 'setConversionArgs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversion_value' => 'getConversionValue',
        'payout_value' => 'getPayoutValue',
        'de_dupe_setting' => 'getDeDupeSetting',
        'conversion_type' => 'getConversionType',
        'conversion_args' => 'getConversionArgs'
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
        $this->container['conversion_value'] = isset($data['conversion_value']) ? $data['conversion_value'] : null;
        $this->container['payout_value'] = isset($data['payout_value']) ? $data['payout_value'] : null;
        $this->container['de_dupe_setting'] = isset($data['de_dupe_setting']) ? $data['de_dupe_setting'] : null;
        $this->container['conversion_type'] = isset($data['conversion_type']) ? $data['conversion_type'] : null;
        $this->container['conversion_args'] = isset($data['conversion_args']) ? $data['conversion_args'] : null;
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
     * Gets conversion_value
     *
     * @return double
     */
    public function getConversionValue()
    {
        return $this->container['conversion_value'];
    }

    /**
     * Sets conversion_value
     *
     * @param double $conversion_value conversion_value
     *
     * @return $this
     */
    public function setConversionValue($conversion_value)
    {
        $this->container['conversion_value'] = $conversion_value;

        return $this;
    }

    /**
     * Gets payout_value
     *
     * @return double
     */
    public function getPayoutValue()
    {
        return $this->container['payout_value'];
    }

    /**
     * Sets payout_value
     *
     * @param double $payout_value payout_value
     *
     * @return $this
     */
    public function setPayoutValue($payout_value)
    {
        $this->container['payout_value'] = $payout_value;

        return $this;
    }

    /**
     * Gets de_dupe_setting
     *
     * @return \Ringba\Model\DuplicateSetting
     */
    public function getDeDupeSetting()
    {
        return $this->container['de_dupe_setting'];
    }

    /**
     * Sets de_dupe_setting
     *
     * @param \Ringba\Model\DuplicateSetting $de_dupe_setting de_dupe_setting
     *
     * @return $this
     */
    public function setDeDupeSetting($de_dupe_setting)
    {
        $this->container['de_dupe_setting'] = $de_dupe_setting;

        return $this;
    }

    /**
     * Gets conversion_type
     *
     * @return string
     */
    public function getConversionType()
    {
        return $this->container['conversion_type'];
    }

    /**
     * Sets conversion_type
     *
     * @param string $conversion_type conversion_type
     *
     * @return $this
     */
    public function setConversionType($conversion_type)
    {
        $this->container['conversion_type'] = $conversion_type;

        return $this;
    }

    /**
     * Gets conversion_args
     *
     * @return map[string,object]
     */
    public function getConversionArgs()
    {
        return $this->container['conversion_args'];
    }

    /**
     * Sets conversion_args
     *
     * @param map[string,object] $conversion_args conversion_args
     *
     * @return $this
     */
    public function setConversionArgs($conversion_args)
    {
        $this->container['conversion_args'] = $conversion_args;

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

