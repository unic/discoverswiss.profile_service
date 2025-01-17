<?php
/**
 * DsBusinessTrailEntryResponse
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
 * DsBusinessTrailEntryResponse Class Doc Comment
 *
 * @category Class
 * @package  ProfileService\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsBusinessTrailEntryResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessTrailEntryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'timestamp' => '\DateTime',
        'date' => '\DateTime',
        'partner_acronym' => 'string',
        'level' => 'string',
        'origin' => 'string',
        'title' => 'string',
        'description' => 'string',
        'object_name' => 'string',
        'object_key' => 'string',
        'data' => 'string',
        'event' => 'string',
        'term_code' => 'string',
        'term_version_code' => 'string',
        'modified_by' => 'string',
        'subscription' => 'string',
        'term_name' => 'string',
        'ip_address' => 'string',
        'in_timeline' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'timestamp' => 'date-time',
        'date' => 'date-time',
        'partner_acronym' => null,
        'level' => null,
        'origin' => null,
        'title' => null,
        'description' => null,
        'object_name' => null,
        'object_key' => null,
        'data' => null,
        'event' => null,
        'term_code' => null,
        'term_version_code' => null,
        'modified_by' => null,
        'subscription' => null,
        'term_name' => null,
        'ip_address' => null,
        'in_timeline' => null
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
        'timestamp' => 'timestamp',
        'date' => 'date',
        'partner_acronym' => 'partnerAcronym',
        'level' => 'level',
        'origin' => 'origin',
        'title' => 'title',
        'description' => 'description',
        'object_name' => 'objectName',
        'object_key' => 'objectKey',
        'data' => 'data',
        'event' => 'event',
        'term_code' => 'termCode',
        'term_version_code' => 'termVersionCode',
        'modified_by' => 'modifiedBy',
        'subscription' => 'subscription',
        'term_name' => 'termName',
        'ip_address' => 'ipAddress',
        'in_timeline' => 'inTimeline'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timestamp' => 'setTimestamp',
        'date' => 'setDate',
        'partner_acronym' => 'setPartnerAcronym',
        'level' => 'setLevel',
        'origin' => 'setOrigin',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'object_name' => 'setObjectName',
        'object_key' => 'setObjectKey',
        'data' => 'setData',
        'event' => 'setEvent',
        'term_code' => 'setTermCode',
        'term_version_code' => 'setTermVersionCode',
        'modified_by' => 'setModifiedBy',
        'subscription' => 'setSubscription',
        'term_name' => 'setTermName',
        'ip_address' => 'setIpAddress',
        'in_timeline' => 'setInTimeline'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timestamp' => 'getTimestamp',
        'date' => 'getDate',
        'partner_acronym' => 'getPartnerAcronym',
        'level' => 'getLevel',
        'origin' => 'getOrigin',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'object_name' => 'getObjectName',
        'object_key' => 'getObjectKey',
        'data' => 'getData',
        'event' => 'getEvent',
        'term_code' => 'getTermCode',
        'term_version_code' => 'getTermVersionCode',
        'modified_by' => 'getModifiedBy',
        'subscription' => 'getSubscription',
        'term_name' => 'getTermName',
        'ip_address' => 'getIpAddress',
        'in_timeline' => 'getInTimeline'
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
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['partner_acronym'] = isset($data['partner_acronym']) ? $data['partner_acronym'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['object_name'] = isset($data['object_name']) ? $data['object_name'] : null;
        $this->container['object_key'] = isset($data['object_key']) ? $data['object_key'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['term_code'] = isset($data['term_code']) ? $data['term_code'] : null;
        $this->container['term_version_code'] = isset($data['term_version_code']) ? $data['term_version_code'] : null;
        $this->container['modified_by'] = isset($data['modified_by']) ? $data['modified_by'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['term_name'] = isset($data['term_name']) ? $data['term_name'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
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
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
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
     * Gets partner_acronym
     *
     * @return string
     */
    public function getPartnerAcronym()
    {
        return $this->container['partner_acronym'];
    }

    /**
     * Sets partner_acronym
     *
     * @param string $partner_acronym partner_acronym
     *
     * @return $this
     */
    public function setPartnerAcronym($partner_acronym)
    {
        $this->container['partner_acronym'] = $partner_acronym;

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
     * Gets modified_by
     *
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->container['modified_by'];
    }

    /**
     * Sets modified_by
     *
     * @param string $modified_by modified_by
     *
     * @return $this
     */
    public function setModifiedBy($modified_by)
    {
        $this->container['modified_by'] = $modified_by;

        return $this;
    }

    /**
     * Gets subscription
     *
     * @return string
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param string $subscription subscription
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

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
