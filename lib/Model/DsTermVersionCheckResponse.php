<?php
/**
 * DsTermVersionCheckResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  ProfileService\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ProfileService-TEST
 *
 * Profile service
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ProfileService\Client\Model;

use \ArrayAccess;
use \ProfileService\Client\ObjectSerializer;

/**
 * DsTermVersionCheckResponse Class Doc Comment
 *
 * @category Class
 * @package  ProfileService\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsTermVersionCheckResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TermVersionCheckResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'term_code' => 'string',
        'origin' => 'string',
        'accepted' => 'bool',
        'ip_address' => 'string',
        'accepted_date' => '\DateTime',
        'term_versions' => '\ProfileService\Client\Model\DsTermVersionResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'term_code' => null,
        'origin' => null,
        'accepted' => null,
        'ip_address' => null,
        'accepted_date' => 'date-time',
        'term_versions' => null
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
        'term_code' => 'termCode',
        'origin' => 'origin',
        'accepted' => 'accepted',
        'ip_address' => 'ipAddress',
        'accepted_date' => 'acceptedDate',
        'term_versions' => 'termVersions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'term_code' => 'setTermCode',
        'origin' => 'setOrigin',
        'accepted' => 'setAccepted',
        'ip_address' => 'setIpAddress',
        'accepted_date' => 'setAcceptedDate',
        'term_versions' => 'setTermVersions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'term_code' => 'getTermCode',
        'origin' => 'getOrigin',
        'accepted' => 'getAccepted',
        'ip_address' => 'getIpAddress',
        'accepted_date' => 'getAcceptedDate',
        'term_versions' => 'getTermVersions'
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
        $this->container['term_code'] = isset($data['term_code']) ? $data['term_code'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['accepted'] = isset($data['accepted']) ? $data['accepted'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['accepted_date'] = isset($data['accepted_date']) ? $data['accepted_date'] : null;
        $this->container['term_versions'] = isset($data['term_versions']) ? $data['term_versions'] : null;
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
     * Gets term_code
     *
     * @return string
     */
    public function getTermCode()
    {
        return $this->container['term_code'];
    }

    /**
     * Sets term_code
     *
     * @param string $term_code term_code
     *
     * @return $this
     */
    public function setTermCode($term_code)
    {
        $this->container['term_code'] = $term_code;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string $origin origin
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets accepted
     *
     * @return bool
     */
    public function getAccepted()
    {
        return $this->container['accepted'];
    }

    /**
     * Sets accepted
     *
     * @param bool $accepted accepted
     *
     * @return $this
     */
    public function setAccepted($accepted)
    {
        $this->container['accepted'] = $accepted;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address ip_address
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets accepted_date
     *
     * @return \DateTime
     */
    public function getAcceptedDate()
    {
        return $this->container['accepted_date'];
    }

    /**
     * Sets accepted_date
     *
     * @param \DateTime $accepted_date accepted_date
     *
     * @return $this
     */
    public function setAcceptedDate($accepted_date)
    {
        $this->container['accepted_date'] = $accepted_date;

        return $this;
    }

    /**
     * Gets term_versions
     *
     * @return \ProfileService\Client\Model\DsTermVersionResponse[]
     */
    public function getTermVersions()
    {
        return $this->container['term_versions'];
    }

    /**
     * Sets term_versions
     *
     * @param \ProfileService\Client\Model\DsTermVersionResponse[] $term_versions term_versions
     *
     * @return $this
     */
    public function setTermVersions($term_versions)
    {
        $this->container['term_versions'] = $term_versions;

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
