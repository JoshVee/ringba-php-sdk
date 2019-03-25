<?php
/**
 * CallRoute
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
 * CallRoute Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallRoute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallRoute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'priority' => '\Ringba\Model\RoutingPriority',
        'call_target' => '\Ringba\Model\Target',
        'call_target_group' => '\Ringba\Model\TargetGroup',
        'call_ping_tree' => '\Ringba\Model\PingTree',
        'conversion_settings' => '\Ringba\Model\CallConversionSetting[]',
        'name' => 'string',
        'account_id' => 'string',
        'enabled' => 'bool',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'priority' => null,
        'call_target' => null,
        'call_target_group' => null,
        'call_ping_tree' => null,
        'conversion_settings' => null,
        'name' => null,
        'account_id' => null,
        'enabled' => null,
        'version' => 'int32'
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
        'id' => 'id',
        'priority' => 'priority',
        'call_target' => 'callTarget',
        'call_target_group' => 'callTargetGroup',
        'call_ping_tree' => 'callPingTree',
        'conversion_settings' => 'conversionSettings',
        'name' => 'name',
        'account_id' => 'accountId',
        'enabled' => 'enabled',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'priority' => 'setPriority',
        'call_target' => 'setCallTarget',
        'call_target_group' => 'setCallTargetGroup',
        'call_ping_tree' => 'setCallPingTree',
        'conversion_settings' => 'setConversionSettings',
        'name' => 'setName',
        'account_id' => 'setAccountId',
        'enabled' => 'setEnabled',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'priority' => 'getPriority',
        'call_target' => 'getCallTarget',
        'call_target_group' => 'getCallTargetGroup',
        'call_ping_tree' => 'getCallPingTree',
        'conversion_settings' => 'getConversionSettings',
        'name' => 'getName',
        'account_id' => 'getAccountId',
        'enabled' => 'getEnabled',
        'version' => 'getVersion'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['call_target'] = isset($data['call_target']) ? $data['call_target'] : null;
        $this->container['call_target_group'] = isset($data['call_target_group']) ? $data['call_target_group'] : null;
        $this->container['call_ping_tree'] = isset($data['call_ping_tree']) ? $data['call_ping_tree'] : null;
        $this->container['conversion_settings'] = isset($data['conversion_settings']) ? $data['conversion_settings'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return \Ringba\Model\RoutingPriority
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param \Ringba\Model\RoutingPriority $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets call_target
     *
     * @return \Ringba\Model\Target
     */
    public function getCallTarget()
    {
        return $this->container['call_target'];
    }

    /**
     * Sets call_target
     *
     * @param \Ringba\Model\Target $call_target call_target
     *
     * @return $this
     */
    public function setCallTarget($call_target)
    {
        $this->container['call_target'] = $call_target;

        return $this;
    }

    /**
     * Gets call_target_group
     *
     * @return \Ringba\Model\TargetGroup
     */
    public function getCallTargetGroup()
    {
        return $this->container['call_target_group'];
    }

    /**
     * Sets call_target_group
     *
     * @param \Ringba\Model\TargetGroup $call_target_group call_target_group
     *
     * @return $this
     */
    public function setCallTargetGroup($call_target_group)
    {
        $this->container['call_target_group'] = $call_target_group;

        return $this;
    }

    /**
     * Gets call_ping_tree
     *
     * @return \Ringba\Model\PingTree
     */
    public function getCallPingTree()
    {
        return $this->container['call_ping_tree'];
    }

    /**
     * Sets call_ping_tree
     *
     * @param \Ringba\Model\PingTree $call_ping_tree call_ping_tree
     *
     * @return $this
     */
    public function setCallPingTree($call_ping_tree)
    {
        $this->container['call_ping_tree'] = $call_ping_tree;

        return $this;
    }

    /**
     * Gets conversion_settings
     *
     * @return \Ringba\Model\CallConversionSetting[]
     */
    public function getConversionSettings()
    {
        return $this->container['conversion_settings'];
    }

    /**
     * Sets conversion_settings
     *
     * @param \Ringba\Model\CallConversionSetting[] $conversion_settings conversion_settings
     *
     * @return $this
     */
    public function setConversionSettings($conversion_settings)
    {
        $this->container['conversion_settings'] = $conversion_settings;

        return $this;
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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

