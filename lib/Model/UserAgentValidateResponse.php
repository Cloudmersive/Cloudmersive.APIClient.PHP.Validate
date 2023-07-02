<?php
/**
 * UserAgentValidateResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * validateapi
 *
 * The validation APIs help you validate data. Check if an E-mail address is real. Check if a domain is real. Check up on an IP address, and even where it is located. All this and much more is available in the validation API.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * UserAgentValidateResponse Class Doc Comment
 *
 * @category Class
 * @description The result of a User-Agent validation request
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserAgentValidateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserAgentValidateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'successful' => 'bool',
        'is_bot' => 'bool',
        'bot_name' => 'string',
        'bot_url' => 'string',
        'operating_system' => 'string',
        'operating_system_cpu_platform' => 'string',
        'operating_system_version' => 'string',
        'device_type' => 'string',
        'device_brand_name' => 'string',
        'device_model' => 'string',
        'browser_name' => 'string',
        'browser_version' => 'string',
        'browser_engine_name' => 'string',
        'browser_engine_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'successful' => null,
        'is_bot' => null,
        'bot_name' => null,
        'bot_url' => null,
        'operating_system' => null,
        'operating_system_cpu_platform' => null,
        'operating_system_version' => null,
        'device_type' => null,
        'device_brand_name' => null,
        'device_model' => null,
        'browser_name' => null,
        'browser_version' => null,
        'browser_engine_name' => null,
        'browser_engine_version' => null
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
        'successful' => 'Successful',
        'is_bot' => 'IsBot',
        'bot_name' => 'BotName',
        'bot_url' => 'BotURL',
        'operating_system' => 'OperatingSystem',
        'operating_system_cpu_platform' => 'OperatingSystemCPUPlatform',
        'operating_system_version' => 'OperatingSystemVersion',
        'device_type' => 'DeviceType',
        'device_brand_name' => 'DeviceBrandName',
        'device_model' => 'DeviceModel',
        'browser_name' => 'BrowserName',
        'browser_version' => 'BrowserVersion',
        'browser_engine_name' => 'BrowserEngineName',
        'browser_engine_version' => 'BrowserEngineVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'successful' => 'setSuccessful',
        'is_bot' => 'setIsBot',
        'bot_name' => 'setBotName',
        'bot_url' => 'setBotUrl',
        'operating_system' => 'setOperatingSystem',
        'operating_system_cpu_platform' => 'setOperatingSystemCpuPlatform',
        'operating_system_version' => 'setOperatingSystemVersion',
        'device_type' => 'setDeviceType',
        'device_brand_name' => 'setDeviceBrandName',
        'device_model' => 'setDeviceModel',
        'browser_name' => 'setBrowserName',
        'browser_version' => 'setBrowserVersion',
        'browser_engine_name' => 'setBrowserEngineName',
        'browser_engine_version' => 'setBrowserEngineVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'successful' => 'getSuccessful',
        'is_bot' => 'getIsBot',
        'bot_name' => 'getBotName',
        'bot_url' => 'getBotUrl',
        'operating_system' => 'getOperatingSystem',
        'operating_system_cpu_platform' => 'getOperatingSystemCpuPlatform',
        'operating_system_version' => 'getOperatingSystemVersion',
        'device_type' => 'getDeviceType',
        'device_brand_name' => 'getDeviceBrandName',
        'device_model' => 'getDeviceModel',
        'browser_name' => 'getBrowserName',
        'browser_version' => 'getBrowserVersion',
        'browser_engine_name' => 'getBrowserEngineName',
        'browser_engine_version' => 'getBrowserEngineVersion'
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
        $this->container['successful'] = isset($data['successful']) ? $data['successful'] : null;
        $this->container['is_bot'] = isset($data['is_bot']) ? $data['is_bot'] : null;
        $this->container['bot_name'] = isset($data['bot_name']) ? $data['bot_name'] : null;
        $this->container['bot_url'] = isset($data['bot_url']) ? $data['bot_url'] : null;
        $this->container['operating_system'] = isset($data['operating_system']) ? $data['operating_system'] : null;
        $this->container['operating_system_cpu_platform'] = isset($data['operating_system_cpu_platform']) ? $data['operating_system_cpu_platform'] : null;
        $this->container['operating_system_version'] = isset($data['operating_system_version']) ? $data['operating_system_version'] : null;
        $this->container['device_type'] = isset($data['device_type']) ? $data['device_type'] : null;
        $this->container['device_brand_name'] = isset($data['device_brand_name']) ? $data['device_brand_name'] : null;
        $this->container['device_model'] = isset($data['device_model']) ? $data['device_model'] : null;
        $this->container['browser_name'] = isset($data['browser_name']) ? $data['browser_name'] : null;
        $this->container['browser_version'] = isset($data['browser_version']) ? $data['browser_version'] : null;
        $this->container['browser_engine_name'] = isset($data['browser_engine_name']) ? $data['browser_engine_name'] : null;
        $this->container['browser_engine_version'] = isset($data['browser_engine_version']) ? $data['browser_engine_version'] : null;
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
     * Gets successful
     *
     * @return bool
     */
    public function getSuccessful()
    {
        return $this->container['successful'];
    }

    /**
     * Sets successful
     *
     * @param bool $successful True if the operation was successful, false otherwise
     *
     * @return $this
     */
    public function setSuccessful($successful)
    {
        $this->container['successful'] = $successful;

        return $this;
    }

    /**
     * Gets is_bot
     *
     * @return bool
     */
    public function getIsBot()
    {
        return $this->container['is_bot'];
    }

    /**
     * Sets is_bot
     *
     * @param bool $is_bot True if the request is a known robot, false otherwise
     *
     * @return $this
     */
    public function setIsBot($is_bot)
    {
        $this->container['is_bot'] = $is_bot;

        return $this;
    }

    /**
     * Gets bot_name
     *
     * @return string
     */
    public function getBotName()
    {
        return $this->container['bot_name'];
    }

    /**
     * Sets bot_name
     *
     * @param string $bot_name Optional; name of the robot if the request was from a known robot, otherwise null
     *
     * @return $this
     */
    public function setBotName($bot_name)
    {
        $this->container['bot_name'] = $bot_name;

        return $this;
    }

    /**
     * Gets bot_url
     *
     * @return string
     */
    public function getBotUrl()
    {
        return $this->container['bot_url'];
    }

    /**
     * Sets bot_url
     *
     * @param string $bot_url Optional; if available, the URL to the robot
     *
     * @return $this
     */
    public function setBotUrl($bot_url)
    {
        $this->container['bot_url'] = $bot_url;

        return $this;
    }

    /**
     * Gets operating_system
     *
     * @return string
     */
    public function getOperatingSystem()
    {
        return $this->container['operating_system'];
    }

    /**
     * Sets operating_system
     *
     * @param string $operating_system Operating System of the User-Agent (e.g. Windows)
     *
     * @return $this
     */
    public function setOperatingSystem($operating_system)
    {
        $this->container['operating_system'] = $operating_system;

        return $this;
    }

    /**
     * Gets operating_system_cpu_platform
     *
     * @return string
     */
    public function getOperatingSystemCpuPlatform()
    {
        return $this->container['operating_system_cpu_platform'];
    }

    /**
     * Sets operating_system_cpu_platform
     *
     * @param string $operating_system_cpu_platform The CPU platform of the User-Agent (e.g. x64)
     *
     * @return $this
     */
    public function setOperatingSystemCpuPlatform($operating_system_cpu_platform)
    {
        $this->container['operating_system_cpu_platform'] = $operating_system_cpu_platform;

        return $this;
    }

    /**
     * Gets operating_system_version
     *
     * @return string
     */
    public function getOperatingSystemVersion()
    {
        return $this->container['operating_system_version'];
    }

    /**
     * Sets operating_system_version
     *
     * @param string $operating_system_version The version of the operating system of the User-Agent (e.g. \"10\" for Windows 10)
     *
     * @return $this
     */
    public function setOperatingSystemVersion($operating_system_version)
    {
        $this->container['operating_system_version'] = $operating_system_version;

        return $this;
    }

    /**
     * Gets device_type
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     *
     * @param string $device_type Device type of the User-Agent; possible values are \"DESKTOP\", \"SMARTPHONE\", \"TABLET\"
     *
     * @return $this
     */
    public function setDeviceType($device_type)
    {
        $this->container['device_type'] = $device_type;

        return $this;
    }

    /**
     * Gets device_brand_name
     *
     * @return string
     */
    public function getDeviceBrandName()
    {
        return $this->container['device_brand_name'];
    }

    /**
     * Sets device_brand_name
     *
     * @param string $device_brand_name Brand name of the User-Agent
     *
     * @return $this
     */
    public function setDeviceBrandName($device_brand_name)
    {
        $this->container['device_brand_name'] = $device_brand_name;

        return $this;
    }

    /**
     * Gets device_model
     *
     * @return string
     */
    public function getDeviceModel()
    {
        return $this->container['device_model'];
    }

    /**
     * Sets device_model
     *
     * @param string $device_model Model name or number of the User-Agent
     *
     * @return $this
     */
    public function setDeviceModel($device_model)
    {
        $this->container['device_model'] = $device_model;

        return $this;
    }

    /**
     * Gets browser_name
     *
     * @return string
     */
    public function getBrowserName()
    {
        return $this->container['browser_name'];
    }

    /**
     * Sets browser_name
     *
     * @param string $browser_name Name of the Browser
     *
     * @return $this
     */
    public function setBrowserName($browser_name)
    {
        $this->container['browser_name'] = $browser_name;

        return $this;
    }

    /**
     * Gets browser_version
     *
     * @return string
     */
    public function getBrowserVersion()
    {
        return $this->container['browser_version'];
    }

    /**
     * Sets browser_version
     *
     * @param string $browser_version Version of the Browser
     *
     * @return $this
     */
    public function setBrowserVersion($browser_version)
    {
        $this->container['browser_version'] = $browser_version;

        return $this;
    }

    /**
     * Gets browser_engine_name
     *
     * @return string
     */
    public function getBrowserEngineName()
    {
        return $this->container['browser_engine_name'];
    }

    /**
     * Sets browser_engine_name
     *
     * @param string $browser_engine_name Name of the Browser Engine
     *
     * @return $this
     */
    public function setBrowserEngineName($browser_engine_name)
    {
        $this->container['browser_engine_name'] = $browser_engine_name;

        return $this;
    }

    /**
     * Gets browser_engine_version
     *
     * @return string
     */
    public function getBrowserEngineVersion()
    {
        return $this->container['browser_engine_version'];
    }

    /**
     * Sets browser_engine_version
     *
     * @param string $browser_engine_version Version of the Browser Engine
     *
     * @return $this
     */
    public function setBrowserEngineVersion($browser_engine_version)
    {
        $this->container['browser_engine_version'] = $browser_engine_version;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


