<?php
/**
 * ErrorSettings
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
 * ErrorSettings Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ErrorSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ErrorSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dial_timeout_seconds' => 'int',
        'ping_timeout_in_ms' => 'int',
        'call_on_failure' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dial_timeout_seconds' => 'int32',
        'ping_timeout_in_ms' => 'int32',
        'call_on_failure' => null
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
        'dial_timeout_seconds' => 'dialTimeoutSeconds',
        'ping_timeout_in_ms' => 'pingTimeoutInMS',
        'call_on_failure' => 'callOnFailure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dial_timeout_seconds' => 'setDialTimeoutSeconds',
        'ping_timeout_in_ms' => 'setPingTimeoutInMs',
        'call_on_failure' => 'setCallOnFailure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dial_timeout_seconds' => 'getDialTimeoutSeconds',
        'ping_timeout_in_ms' => 'getPingTimeoutInMs',
        'call_on_failure' => 'getCallOnFailure'
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
        $this->container['dial_timeout_seconds'] = isset($data['dial_timeout_seconds']) ? $data['dial_timeout_seconds'] : null;
        $this->container['ping_timeout_in_ms'] = isset($data['ping_timeout_in_ms']) ? $data['ping_timeout_in_ms'] : null;
        $this->container['call_on_failure'] = isset($data['call_on_failure']) ? $data['call_on_failure'] : null;
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
     * Gets dial_timeout_seconds
     *
     * @return int
     */
    public function getDialTimeoutSeconds()
    {
        return $this->container['dial_timeout_seconds'];
    }

    /**
     * Sets dial_timeout_seconds
     *
     * @param int $dial_timeout_seconds dial_timeout_seconds
     *
     * @return $this
     */
    public function setDialTimeoutSeconds($dial_timeout_seconds)
    {
        $this->container['dial_timeout_seconds'] = $dial_timeout_seconds;

        return $this;
    }

    /**
     * Gets ping_timeout_in_ms
     *
     * @return int
     */
    public function getPingTimeoutInMs()
    {
        return $this->container['ping_timeout_in_ms'];
    }

    /**
     * Sets ping_timeout_in_ms
     *
     * @param int $ping_timeout_in_ms ping_timeout_in_ms
     *
     * @return $this
     */
    public function setPingTimeoutInMs($ping_timeout_in_ms)
    {
        $this->container['ping_timeout_in_ms'] = $ping_timeout_in_ms;

        return $this;
    }

    /**
     * Gets call_on_failure
     *
     * @return bool
     */
    public function getCallOnFailure()
    {
        return $this->container['call_on_failure'];
    }

    /**
     * Sets call_on_failure
     *
     * @param bool $call_on_failure call_on_failure
     *
     * @return $this
     */
    public function setCallOnFailure($call_on_failure)
    {
        $this->container['call_on_failure'] = $call_on_failure;

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


