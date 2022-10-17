<?php
/**
 * DsBusinessTrailRequest
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
 * Profile service test
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
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
 * DsBusinessTrailRequest Class Doc Comment
 *
 * @category Class
 * @package  ProfileService\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsBusinessTrailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessTrailRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
'level' => 'string',
'origin' => 'string',
'title' => 'string',
'description' => 'string',
'object_name' => 'string',
'object_key' => 'string',
'data' => 'string',
'term_code' => 'string',
'term_version_code' => 'string',
'term_name' => 'string',
'event' => 'string',
'in_timeline' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date-time',
'level' => null,
'origin' => null,
'title' => null,
'description' => null,
'object_name' => null,
'object_key' => null,
'data' => null,
'term_code' => null,
'term_version_code' => null,
'term_name' => null,
'event' => null,
'in_timeline' => null    ];

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
        'date' => 'date',
'level' => 'level',
'origin' => 'origin',
'title' => 'title',
'description' => 'description',
'object_name' => 'objectName',
'object_key' => 'objectKey',
'data' => 'data',
'term_code' => 'termCode',
'term_version_code' => 'termVersionCode',
'term_name' => 'termName',
'event' => 'event',
'in_timeline' => 'inTimeline'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
'level' => 'setLevel',
'origin' => 'setOrigin',
'title' => 'setTitle',
'description' => 'setDescription',
'object_name' => 'setObjectName',
'object_key' => 'setObjectKey',
'data' => 'setData',
'term_code' => 'setTermCode',
'term_version_code' => 'setTermVersionCode',
'term_name' => 'setTermName',
'event' => 'setEvent',
'in_timeline' => 'setInTimeline'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
'level' => 'getLevel',
'origin' => 'getOrigin',
'title' => 'getTitle',
'description' => 'getDescription',
'object_name' => 'getObjectName',
'object_key' => 'getObjectKey',
'data' => 'getData',
'term_code' => 'getTermCode',
'term_version_code' => 'getTermVersionCode',
'term_name' => 'getTermName',
'event' => 'getEvent',
'in_timeline' => 'getInTimeline'    ];

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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['object_name'] = isset($data['object_name']) ? $data['object_name'] : null;
        $this->container['object_key'] = isset($data['object_key']) ? $data['object_key'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['term_code'] = isset($data['term_code']) ? $data['term_code'] : null;
        $this->container['term_version_code'] = isset($data['term_version_code']) ? $data['term_version_code'] : null;
        $this->container['term_name'] = isset($data['term_name']) ? $data['term_name'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['in_timeline'] = isset($data['in_timeline']) ? $data['in_timeline'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string $level level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets object_name
     *
     * @return string
     */
    public function getObjectName()
    {
        return $this->container['object_name'];
    }

    /**
     * Sets object_name
     *
     * @param string $object_name object_name
     *
     * @return $this
     */
    public function setObjectName($object_name)
    {
        $this->container['object_name'] = $object_name;

        return $this;
    }

    /**
     * Gets object_key
     *
     * @return string
     */
    public function getObjectKey()
    {
        return $this->container['object_key'];
    }

    /**
     * Sets object_key
     *
     * @param string $object_key object_key
     *
     * @return $this
     */
    public function setObjectKey($object_key)
    {
        $this->container['object_key'] = $object_key;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
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
     * Gets term_version_code
     *
     * @return string
     */
    public function getTermVersionCode()
    {
        return $this->container['term_version_code'];
    }

    /**
     * Sets term_version_code
     *
     * @param string $term_version_code term_version_code
     *
     * @return $this
     */
    public function setTermVersionCode($term_version_code)
    {
        $this->container['term_version_code'] = $term_version_code;

        return $this;
    }

    /**
     * Gets term_name
     *
     * @return string
     */
    public function getTermName()
    {
        return $this->container['term_name'];
    }

    /**
     * Sets term_name
     *
     * @param string $term_name term_name
     *
     * @return $this
     */
    public function setTermName($term_name)
    {
        $this->container['term_name'] = $term_name;

        return $this;
    }

    /**
     * Gets event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string $event event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets in_timeline
     *
     * @return bool
     */
    public function getInTimeline()
    {
        return $this->container['in_timeline'];
    }

    /**
     * Sets in_timeline
     *
     * @param bool $in_timeline in_timeline
     *
     * @return $this
     */
    public function setInTimeline($in_timeline)
    {
        $this->container['in_timeline'] = $in_timeline;

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
