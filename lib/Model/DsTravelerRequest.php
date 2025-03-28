<?php
/**
 * DsTravelerRequest
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
 * DsTravelerRequest Class Doc Comment
 *
 * @category Class
 * @package  ProfileService\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsTravelerRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TravelerRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identifier' => 'string',
        'salutation' => 'string',
        'gender' => 'string',
        'given_name' => 'string',
        'family_name' => 'string',
        'birth_date' => '\DateTime',
        'nationality' => 'string',
        'country' => 'string',
        'passport' => 'string',
        'reduction' => 'string',
        'additional_property' => '\ProfileService\Client\Model\DsPropertyValueRequest[]',
        'email' => 'string',
        'telephone' => 'string',
        'price_category' => 'string',
        'add_on' => '\ProfileService\Client\Model\DsAddOnRequest[]',
        'profile_image' => 'string',
        'supporting_document' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identifier' => null,
        'salutation' => null,
        'gender' => null,
        'given_name' => null,
        'family_name' => null,
        'birth_date' => 'date-time',
        'nationality' => null,
        'country' => null,
        'passport' => null,
        'reduction' => null,
        'additional_property' => null,
        'email' => null,
        'telephone' => null,
        'price_category' => null,
        'add_on' => null,
        'profile_image' => null,
        'supporting_document' => null
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
        'identifier' => 'identifier',
        'salutation' => 'salutation',
        'gender' => 'gender',
        'given_name' => 'givenName',
        'family_name' => 'familyName',
        'birth_date' => 'birthDate',
        'nationality' => 'nationality',
        'country' => 'country',
        'passport' => 'passport',
        'reduction' => 'reduction',
        'additional_property' => 'additionalProperty',
        'email' => 'email',
        'telephone' => 'telephone',
        'price_category' => 'priceCategory',
        'add_on' => 'addOn',
        'profile_image' => 'profileImage',
        'supporting_document' => 'supportingDocument'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'salutation' => 'setSalutation',
        'gender' => 'setGender',
        'given_name' => 'setGivenName',
        'family_name' => 'setFamilyName',
        'birth_date' => 'setBirthDate',
        'nationality' => 'setNationality',
        'country' => 'setCountry',
        'passport' => 'setPassport',
        'reduction' => 'setReduction',
        'additional_property' => 'setAdditionalProperty',
        'email' => 'setEmail',
        'telephone' => 'setTelephone',
        'price_category' => 'setPriceCategory',
        'add_on' => 'setAddOn',
        'profile_image' => 'setProfileImage',
        'supporting_document' => 'setSupportingDocument'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'salutation' => 'getSalutation',
        'gender' => 'getGender',
        'given_name' => 'getGivenName',
        'family_name' => 'getFamilyName',
        'birth_date' => 'getBirthDate',
        'nationality' => 'getNationality',
        'country' => 'getCountry',
        'passport' => 'getPassport',
        'reduction' => 'getReduction',
        'additional_property' => 'getAdditionalProperty',
        'email' => 'getEmail',
        'telephone' => 'getTelephone',
        'price_category' => 'getPriceCategory',
        'add_on' => 'getAddOn',
        'profile_image' => 'getProfileImage',
        'supporting_document' => 'getSupportingDocument'
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['passport'] = isset($data['passport']) ? $data['passport'] : null;
        $this->container['reduction'] = isset($data['reduction']) ? $data['reduction'] : null;
        $this->container['additional_property'] = isset($data['additional_property']) ? $data['additional_property'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['price_category'] = isset($data['price_category']) ? $data['price_category'] : null;
        $this->container['add_on'] = isset($data['add_on']) ? $data['add_on'] : null;
        $this->container['profile_image'] = isset($data['profile_image']) ? $data['profile_image'] : null;
        $this->container['supporting_document'] = isset($data['supporting_document']) ? $data['supporting_document'] : null;
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
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string $salutation Obsolete. Use Gender property instead
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender Supported values: Male, Female, Diverse
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
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
     * Gets birth_date
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime $birth_date birth_date
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string $nationality nationality
     *
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets passport
     *
     * @return string
     */
    public function getPassport()
    {
        return $this->container['passport'];
    }

    /**
     * Sets passport
     *
     * @param string $passport passport
     *
     * @return $this
     */
    public function setPassport($passport)
    {
        $this->container['passport'] = $passport;

        return $this;
    }

    /**
     * Gets reduction
     *
     * @return string
     */
    public function getReduction()
    {
        return $this->container['reduction'];
    }

    /**
     * Sets reduction
     *
     * @param string $reduction reduction
     *
     * @return $this
     */
    public function setReduction($reduction)
    {
        $this->container['reduction'] = $reduction;

        return $this;
    }

    /**
     * Gets additional_property
     *
     * @return \ProfileService\Client\Model\DsPropertyValueRequest[]
     */
    public function getAdditionalProperty()
    {
        return $this->container['additional_property'];
    }

    /**
     * Sets additional_property
     *
     * @param \ProfileService\Client\Model\DsPropertyValueRequest[] $additional_property additional_property
     *
     * @return $this
     */
    public function setAdditionalProperty($additional_property)
    {
        $this->container['additional_property'] = $additional_property;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string $telephone telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets price_category
     *
     * @return string
     */
    public function getPriceCategory()
    {
        return $this->container['price_category'];
    }

    /**
     * Sets price_category
     *
     * @param string $price_category price_category
     *
     * @return $this
     */
    public function setPriceCategory($price_category)
    {
        $this->container['price_category'] = $price_category;

        return $this;
    }

    /**
     * Gets add_on
     *
     * @return \ProfileService\Client\Model\DsAddOnRequest[]
     */
    public function getAddOn()
    {
        return $this->container['add_on'];
    }

    /**
     * Sets add_on
     *
     * @param \ProfileService\Client\Model\DsAddOnRequest[] $add_on add_on
     *
     * @return $this
     */
    public function setAddOn($add_on)
    {
        $this->container['add_on'] = $add_on;

        return $this;
    }

    /**
     * Gets profile_image
     *
     * @return string
     */
    public function getProfileImage()
    {
        return $this->container['profile_image'];
    }

    /**
     * Sets profile_image
     *
     * @param string $profile_image profile_image
     *
     * @return $this
     */
    public function setProfileImage($profile_image)
    {
        $this->container['profile_image'] = $profile_image;

        return $this;
    }

    /**
     * Gets supporting_document
     *
     * @return string[]
     */
    public function getSupportingDocument()
    {
        return $this->container['supporting_document'];
    }

    /**
     * Sets supporting_document
     *
     * @param string[] $supporting_document supporting_document
     *
     * @return $this
     */
    public function setSupportingDocument($supporting_document)
    {
        $this->container['supporting_document'] = $supporting_document;

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
