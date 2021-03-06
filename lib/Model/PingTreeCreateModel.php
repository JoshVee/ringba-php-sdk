<?php
/**
 * PingTreeCreateModel
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
 * PingTreeCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PingTreeCreateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PingTreeCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'schedule' => '\Ringba\Model\ScheduleAndCapacity',
        'criteria' => '\Ringba\Model\TagRoutableRule[]',
        'revenue_settings' => '\Ringba\Model\PingRevenueSettings',
        'error_settings' => '\Ringba\Model\PingErrorSettings',
        'min_revenue_to_route' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'schedule' => null,
        'criteria' => null,
        'revenue_settings' => null,
        'error_settings' => null,
        'min_revenue_to_route' => 'double'
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
        'name' => 'name',
        'schedule' => 'schedule',
        'criteria' => 'criteria',
        'revenue_settings' => 'revenueSettings',
        'error_settings' => 'errorSettings',
        'min_revenue_to_route' => 'minRevenueToRoute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'schedule' => 'setSchedule',
        'criteria' => 'setCriteria',
        'revenue_settings' => 'setRevenueSettings',
        'error_settings' => 'setErrorSettings',
        'min_revenue_to_route' => 'setMinRevenueToRoute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'schedule' => 'getSchedule',
        'criteria' => 'getCriteria',
        'revenue_settings' => 'getRevenueSettings',
        'error_settings' => 'getErrorSettings',
        'min_revenue_to_route' => 'getMinRevenueToRoute'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['criteria'] = isset($data['criteria']) ? $data['criteria'] : null;
        $this->container['revenue_settings'] = isset($data['revenue_settings']) ? $data['revenue_settings'] : null;
        $this->container['error_settings'] = isset($data['error_settings']) ? $data['error_settings'] : null;
        $this->container['min_revenue_to_route'] = isset($data['min_revenue_to_route']) ? $data['min_revenue_to_route'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['schedule'] === null) {
            $invalidProperties[] = "'schedule' can't be null";
        }
        if ($this->container['revenue_settings'] === null) {
            $invalidProperties[] = "'revenue_settings' can't be null";
        }
        if ($this->container['error_settings'] === null) {
            $invalidProperties[] = "'error_settings' can't be null";
        }
        if ($this->container['min_revenue_to_route'] === null) {
            $invalidProperties[] = "'min_revenue_to_route' can't be null";
        }
        if (($this->container['min_revenue_to_route'] > 1000000)) {
            $invalidProperties[] = "invalid value for 'min_revenue_to_route', must be smaller than or equal to 1000000.";
        }

        if (($this->container['min_revenue_to_route'] < 0)) {
            $invalidProperties[] = "invalid value for 'min_revenue_to_route', must be bigger than or equal to 0.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \Ringba\Model\ScheduleAndCapacity
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \Ringba\Model\ScheduleAndCapacity $schedule schedule
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets criteria
     *
     * @return \Ringba\Model\TagRoutableRule[]
     */
    public function getCriteria()
    {
        return $this->container['criteria'];
    }

    /**
     * Sets criteria
     *
     * @param \Ringba\Model\TagRoutableRule[] $criteria criteria
     *
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->container['criteria'] = $criteria;

        return $this;
    }

    /**
     * Gets revenue_settings
     *
     * @return \Ringba\Model\PingRevenueSettings
     */
    public function getRevenueSettings()
    {
        return $this->container['revenue_settings'];
    }

    /**
     * Sets revenue_settings
     *
     * @param \Ringba\Model\PingRevenueSettings $revenue_settings revenue_settings
     *
     * @return $this
     */
    public function setRevenueSettings($revenue_settings)
    {
        $this->container['revenue_settings'] = $revenue_settings;

        return $this;
    }

    /**
     * Gets error_settings
     *
     * @return \Ringba\Model\PingErrorSettings
     */
    public function getErrorSettings()
    {
        return $this->container['error_settings'];
    }

    /**
     * Sets error_settings
     *
     * @param \Ringba\Model\PingErrorSettings $error_settings error_settings
     *
     * @return $this
     */
    public function setErrorSettings($error_settings)
    {
        $this->container['error_settings'] = $error_settings;

        return $this;
    }

    /**
     * Gets min_revenue_to_route
     *
     * @return double
     */
    public function getMinRevenueToRoute()
    {
        return $this->container['min_revenue_to_route'];
    }

    /**
     * Sets min_revenue_to_route
     *
     * @param double $min_revenue_to_route min_revenue_to_route
     *
     * @return $this
     */
    public function setMinRevenueToRoute($min_revenue_to_route)
    {

        if (($min_revenue_to_route > 1000000)) {
            throw new \InvalidArgumentException('invalid value for $min_revenue_to_route when calling PingTreeCreateModel., must be smaller than or equal to 1000000.');
        }
        if (($min_revenue_to_route < 0)) {
            throw new \InvalidArgumentException('invalid value for $min_revenue_to_route when calling PingTreeCreateModel., must be bigger than or equal to 0.');
        }

        $this->container['min_revenue_to_route'] = $min_revenue_to_route;

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


