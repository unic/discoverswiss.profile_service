<?php
/**
 * DsOrderItemTravelerResponse
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
 * DsOrderItemTravelerResponse Class Doc Comment
 *
 * @category Class
 * @package  ProfileService\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsOrderItemTravelerResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderItemTravelerResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'price' => 'double',
        'price_chf' => 'double',
        'currency' => 'string',
        'price_category' => 'string',
        'price_category_name' => 'string',
        'display_group' => 'string',
        'add_on' => '\ProfileService\Client\Model\DsAddOnConfigurationResponse[]',
        'identifier' => 'string',
        'salutation' => 'string',
        'given_name' => 'string',
        'family_name' => 'string',
        'birth_date' => '\DateTime',
        'nationality' => 'string',
        'passport' => 'string',
        'reduction' => 'string',
        'gender' => 'string',
        'country' => 'string',
        'email' => 'string',
        'telephone' => 'string',
        'additional_property' => '\ProfileService\Client\Model\DsPropertyValueResponse[]',
        'profile_image' => 'string',
        'supporting_document' => 'string[]',
        'readonly' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'price' => 'double',
        'price_chf' => 'double',
        'currency' => null,
        'price_category' => null,
        'price_category_name' => null,
        'display_group' => null,
        'add_on' => null,
        'identifier' => null,
        'salutation' => null,
        'given_name' => null,
        'family_name' => null,
        'birth_date' => 'date-time',
        'nationality' => null,
        'passport' => null,
        'reduction' => null,
        'gender' => null,
        'country' => null,
        'email' => null,
        'telephone' => null,
        'additional_property' => null,
        'profile_image' => null,
        'supporting_document' => null,
        'readonly' => null
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
        'price' => 'price',
        'price_chf' => 'priceCHF',
        'currency' => 'currency',
        'price_category' => 'priceCategory',
        'price_category_name' => 'priceCategoryName',
        'display_group' => 'displayGroup',
        'add_on' => 'addOn',
        'identifier' => 'identifier',
        'salutation' => 'salutation',
        'given_name' => 'givenName',
        'family_name' => 'familyName',
        'birth_date' => 'birthDate',
        'nationality' => 'nationality',
        'passport' => 'passport',
        'reduction' => 'reduction',
        'gender' => 'gender',
        'country' => 'country',
        'email' => 'email',
        'telephone' => 'telephone',
        'additional_property' => 'additionalProperty',
        'profile_image' => 'profileImage',
        'supporting_document' => 'supportingDocument',
        'readonly' => 'readonly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price' => 'setPrice',
        'price_chf' => 'setPriceChf',
        'currency' => 'setCurrency',
        'price_category' => 'setPriceCategory',
        'price_category_name' => 'setPriceCategoryName',
        'display_group' => 'setDisplayGroup',
        'add_on' => 'setAddOn',
        'identifier' => 'setIdentifier',
        'salutation' => 'setSalutation',
        'given_name' => 'setGivenName',
        'family_name' => 'setFamilyName',
        'birth_date' => 'setBirthDate',
        'nationality' => 'setNationality',
        'passport' => 'setPassport',
        'reduction' => 'setReduction',
        'gender' => 'setGender',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'telephone' => 'setTelephone',
        'additional_property' => 'setAdditionalProperty',
        'profile_image' => 'setProfileImage',
        'supporting_document' => 'setSupportingDocument',
        'readonly' => 'setReadonly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price' => 'getPrice',
        'price_chf' => 'getPriceChf',
        'currency' => 'getCurrency',
        'price_category' => 'getPriceCategory',
        'price_category_name' => 'getPriceCategoryName',
        'display_group' => 'getDisplayGroup',
        'add_on' => 'getAddOn',
        'identifier' => 'getIdentifier',
        'salutation' => 'getSalutation',
        'given_name' => 'getGivenName',
        'family_name' => 'getFamilyName',
        'birth_date' => 'getBirthDate',
        'nationality' => 'getNationality',
        'passport' => 'getPassport',
        'reduction' => 'getReduction',
        'gender' => 'getGender',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'telephone' => 'getTelephone',
        'additional_property' => 'getAdditionalProperty',
        'profile_image' => 'getProfileImage',
        'supporting_document' => 'getSupportingDocument',
        'readonly' => 'getReadonly'
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
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_chf'] = isset($data['price_chf']) ? $data['price_chf'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['price_category'] = isset($data['price_category']) ? $data['price_category'] : null;
        $this->container['price_category_name'] = isset($data['price_category_name']) ? $data['price_category_name'] : null;
        $this->container['display_group'] = isset($data['display_group']) ? $data['display_group'] : null;
        $this->container['add_on'] = isset($data['add_on']) ? $data['add_on'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['passport'] = isset($data['passport']) ? $data['passport'] : null;
        $this->container['reduction'] = isset($data['reduction']) ? $data['reduction'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['additional_property'] = isset($data['additional_property']) ? $data['additional_property'] : null;
        $this->container['profile_image'] = isset($data['profile_image']) ? $data['profile_image'] : null;
        $this->container['supporting_document'] = isset($data['supporting_document']) ? $data['supporting_document'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
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
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_chf
     *
     * @return double
     */
    public function getPriceChf()
    {
        return $this->container['price_chf'];
    }

    /**
     * Sets price_chf
     *
     * @param double $price_chf price_chf
     *
     * @return $this
     */
    public function setPriceChf($price_chf)
    {
        $this->container['price_chf'] = $price_chf;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * Gets price_category_name
     *
     * @return string
     */
    public function getPriceCategoryName()
    {
        return $this->container['price_category_name'];
    }

    /**
     * Sets price_category_name
     *
     * @param string $price_category_name price_category_name
     *
     * @return $this
     */
    public function setPriceCategoryName($price_category_name)
    {
        $this->container['price_category_name'] = $price_category_name;

        return $this;
    }

    /**
     * Gets display_group
     *
     * @return string
     */
    public function getDisplayGroup()
    {
        return $this->container['display_group'];
    }

    /**
     * Sets display_group
     *
     * @param string $display_group display_group
     *
     * @return $this
     */
    public function setDisplayGroup($display_group)
    {
        $this->container['display_group'] = $display_group;

        return $this;
    }

    /**
     * Gets add_on
     *
     * @return \ProfileService\Client\Model\DsAddOnConfigurationResponse[]
     */
    public function getAddOn()
    {
        return $this->container['add_on'];
    }

    /**
     * Sets add_on
     *
     * @param \ProfileService\Client\Model\DsAddOnConfigurationResponse[] $add_on add_on
     *
     * @return $this
     */
    public function setAddOn($add_on)
    {
        $this->container['add_on'] = $add_on;

        return $this;
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
     * @param string $salutation salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

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
     * @param string $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

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
     * Gets additional_property
     *
     * @return \ProfileService\Client\Model\DsPropertyValueResponse[]
     */
    public function getAdditionalProperty()
    {
        return $this->container['additional_property'];
    }

    /**
     * Sets additional_property
     *
     * @param \ProfileService\Client\Model\DsPropertyValueResponse[] $additional_property additional_property
     *
     * @return $this
     */
    public function setAdditionalProperty($additional_property)
    {
        $this->container['additional_property'] = $additional_property;

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
     * Gets readonly
     *
     * @return bool
     */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
     * Sets readonly
     *
     * @param bool $readonly readonly
     *
     * @return $this
     */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;

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
