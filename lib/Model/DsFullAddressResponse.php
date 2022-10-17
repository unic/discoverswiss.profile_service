<?php
/**
 * DsFullAddressResponse
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
 * DsFullAddressResponse Class Doc Comment
 *
 * @category Class
 * @package  ProfileService\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsFullAddressResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FullAddressResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'given_name' => 'string',
'family_name' => 'string',
'company_name' => 'string',
'address_country' => 'string',
'address_locality' => 'string',
'address_region' => 'string',
'postal_code' => 'string',
'post_office_box_number' => 'string',
'street_address' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'given_name' => null,
'family_name' => null,
'company_name' => null,
'address_country' => null,
'address_locality' => null,
'address_region' => null,
'postal_code' => null,
'post_office_box_number' => null,
'street_address' => null    ];

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
        'given_name' => 'givenName',
'family_name' => 'familyName',
'company_name' => 'companyName',
'address_country' => 'addressCountry',
'address_locality' => 'addressLocality',
'address_region' => 'addressRegion',
'postal_code' => 'postalCode',
'post_office_box_number' => 'postOfficeBoxNumber',
'street_address' => 'streetAddress'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'given_name' => 'setGivenName',
'family_name' => 'setFamilyName',
'company_name' => 'setCompanyName',
'address_country' => 'setAddressCountry',
'address_locality' => 'setAddressLocality',
'address_region' => 'setAddressRegion',
'postal_code' => 'setPostalCode',
'post_office_box_number' => 'setPostOfficeBoxNumber',
'street_address' => 'setStreetAddress'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'given_name' => 'getGivenName',
'family_name' => 'getFamilyName',
'company_name' => 'getCompanyName',
'address_country' => 'getAddressCountry',
'address_locality' => 'getAddressLocality',
'address_region' => 'getAddressRegion',
'postal_code' => 'getPostalCode',
'post_office_box_number' => 'getPostOfficeBoxNumber',
'street_address' => 'getStreetAddress'    ];

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
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['address_country'] = isset($data['address_country']) ? $data['address_country'] : null;
        $this->container['address_locality'] = isset($data['address_locality']) ? $data['address_locality'] : null;
        $this->container['address_region'] = isset($data['address_region']) ? $data['address_region'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['post_office_box_number'] = isset($data['post_office_box_number']) ? $data['post_office_box_number'] : null;
        $this->container['street_address'] = isset($data['street_address']) ? $data['street_address'] : null;
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
     * Gets given_name
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string $given_name given_name
     *
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string $family_name family_name
     *
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets address_country
     *
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->container['address_country'];
    }

    /**
     * Sets address_country
     *
     * @param string $address_country address_country
     *
     * @return $this
     */
    public function setAddressCountry($address_country)
    {
        $this->container['address_country'] = $address_country;

        return $this;
    }

    /**
     * Gets address_locality
     *
     * @return string
     */
    public function getAddressLocality()
    {
        return $this->container['address_locality'];
    }

    /**
     * Sets address_locality
     *
     * @param string $address_locality address_locality
     *
     * @return $this
     */
    public function setAddressLocality($address_locality)
    {
        $this->container['address_locality'] = $address_locality;

        return $this;
    }

    /**
     * Gets address_region
     *
     * @return string
     */
    public function getAddressRegion()
    {
        return $this->container['address_region'];
    }

    /**
     * Sets address_region
     *
     * @param string $address_region address_region
     *
     * @return $this
     */
    public function setAddressRegion($address_region)
    {
        $this->container['address_region'] = $address_region;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets post_office_box_number
     *
     * @return string
     */
    public function getPostOfficeBoxNumber()
    {
        return $this->container['post_office_box_number'];
    }

    /**
     * Sets post_office_box_number
     *
     * @param string $post_office_box_number post_office_box_number
     *
     * @return $this
     */
    public function setPostOfficeBoxNumber($post_office_box_number)
    {
        $this->container['post_office_box_number'] = $post_office_box_number;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param string $street_address street_address
     *
     * @return $this
     */
    public function setStreetAddress($street_address)
    {
        $this->container['street_address'] = $street_address;

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