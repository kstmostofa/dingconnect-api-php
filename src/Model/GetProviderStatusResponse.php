<?php
/**
 * GetProviderStatusResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Kstmostofa\DingConnect
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ding API
 *
 * Important note: If you are within DingConnect, your API key is displayed above and can be used to access and send top-up from your system via the Ding API.    The Ding API is a Level 0 REST web service.  We have used the <a href=\"http://swagger.io\">swagger</a> standard to describe this service. As a result, we are able to provide this interactive documentation page. For further information, you may view the <a href=\"/api/description\">additional documentation</a>; read our <a href=\"/api/faq\">FAQ</a> or contact partnersupport@ding.com
 *
 * OpenAPI spec version: V1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.5
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kstmostofa\DingConnect\Model;

use \ArrayAccess;
use \Kstmostofa\DingConnect\ObjectSerializer;

/**
 * GetProviderStatusResponse Class Doc Comment
 *
 * @category Class
 * @package  Kstmostofa\DingConnect
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetProviderStatusResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetProviderStatusResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'result_code' => 'int',
        'error_codes' => '\Kstmostofa\DingConnect\Model\Error[]',
        'items' => '\Kstmostofa\DingConnect\Model\ProviderStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'result_code' => 'int32',
        'error_codes' => null,
        'items' => null
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
        'result_code' => 'ResultCode',
        'error_codes' => 'ErrorCodes',
        'items' => 'Items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'result_code' => 'setResultCode',
        'error_codes' => 'setErrorCodes',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'result_code' => 'getResultCode',
        'error_codes' => 'getErrorCodes',
        'items' => 'getItems'
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
        $this->container['result_code'] = isset($data['result_code']) ? $data['result_code'] : null;
        $this->container['error_codes'] = isset($data['error_codes']) ? $data['error_codes'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['result_code'] === null) {
            $invalidProperties[] = "'result_code' can't be null";
        }
        if ($this->container['error_codes'] === null) {
            $invalidProperties[] = "'error_codes' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets result_code
     *
     * @return int
     */
    public function getResultCode()
    {
        return $this->container['result_code'];
    }

    /**
     * Sets result_code
     *
     * @param int $result_code result_code
     *
     * @return $this
     */
    public function setResultCode($result_code)
    {
        $this->container['result_code'] = $result_code;

        return $this;
    }

    /**
     * Gets error_codes
     *
     * @return \Kstmostofa\DingConnect\Model\Error[]
     */
    public function getErrorCodes()
    {
        return $this->container['error_codes'];
    }

    /**
     * Sets error_codes
     *
     * @param \Kstmostofa\DingConnect\Model\Error[] $error_codes error_codes
     *
     * @return $this
     */
    public function setErrorCodes($error_codes)
    {
        $this->container['error_codes'] = $error_codes;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Kstmostofa\DingConnect\Model\ProviderStatus[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Kstmostofa\DingConnect\Model\ProviderStatus[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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


