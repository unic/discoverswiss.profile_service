<?php
/**
 * DsProductVariantResponse
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
 * DsProductVariantResponse Class Doc Comment
 *
 * @category Class
 * @package  ProfileService\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsProductVariantResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductVariantResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identifier' => 'string',
        'product_identifier' => 'string',
        'product' => 'string',
        'sku' => 'string',
        'name' => 'string',
        'product_name' => 'string',
        'image' => '\ProfileService\Client\Model\DsImageObjectResponse',
        'option' => '\ProfileService\Client\Model\DsOptionResponse[]',
        'data_governance' => '\ProfileService\Client\Model\DsMemberDataGovernanceResponse',
        'price_list' => '\ProfileService\Client\Model\DsProductPriceResponse[]',
        'tax_rate' => 'double',
        'item_field' => '\ProfileService\Client\Model\DsFieldDefinitionResponse[]',
        'traveler_field' => '\ProfileService\Client\Model\DsFieldDefinitionResponse[]',
        'add_on_item' => '\ProfileService\Client\Model\DsProductAddOnResponse[]',
        'add_on_traveler' => '\ProfileService\Client\Model\DsProductAddOnResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identifier' => null,
        'product_identifier' => null,
        'product' => null,
        'sku' => null,
        'name' => null,
        'product_name' => null,
        'image' => null,
        'option' => null,
        'data_governance' => null,
        'price_list' => null,
        'tax_rate' => 'double',
        'item_field' => null,
        'traveler_field' => null,
        'add_on_item' => null,
        'add_on_traveler' => null
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
        'product_identifier' => 'productIdentifier',
        'product' => '@product',
        'sku' => 'sku',
        'name' => 'name',
        'product_name' => 'productName',
        'image' => 'image',
        'option' => 'option',
        'data_governance' => 'dataGovernance',
        'price_list' => 'priceList',
        'tax_rate' => 'taxRate',
        'item_field' => 'itemField',
        'traveler_field' => 'travelerField',
        'add_on_item' => 'addOnItem',
        'add_on_traveler' => 'addOnTraveler'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'product_identifier' => 'setProductIdentifier',
        'product' => 'setProduct',
        'sku' => 'setSku',
        'name' => 'setName',
        'product_name' => 'setProductName',
        'image' => 'setImage',
        'option' => 'setOption',
        'data_governance' => 'setDataGovernance',
        'price_list' => 'setPriceList',
        'tax_rate' => 'setTaxRate',
        'item_field' => 'setItemField',
        'traveler_field' => 'setTravelerField',
        'add_on_item' => 'setAddOnItem',
        'add_on_traveler' => 'setAddOnTraveler'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'product_identifier' => 'getProductIdentifier',
        'product' => 'getProduct',
        'sku' => 'getSku',
        'name' => 'getName',
        'product_name' => 'getProductName',
        'image' => 'getImage',
        'option' => 'getOption',
        'data_governance' => 'getDataGovernance',
        'price_list' => 'getPriceList',
        'tax_rate' => 'getTaxRate',
        'item_field' => 'getItemField',
        'traveler_field' => 'getTravelerField',
        'add_on_item' => 'getAddOnItem',
        'add_on_traveler' => 'getAddOnTraveler'
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
        $this->container['product_identifier'] = isset($data['product_identifier']) ? $data['product_identifier'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['option'] = isset($data['option']) ? $data['option'] : null;
        $this->container['data_governance'] = isset($data['data_governance']) ? $data['data_governance'] : null;
        $this->container['price_list'] = isset($data['price_list']) ? $data['price_list'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['item_field'] = isset($data['item_field']) ? $data['item_field'] : null;
        $this->container['traveler_field'] = isset($data['traveler_field']) ? $data['traveler_field'] : null;
        $this->container['add_on_item'] = isset($data['add_on_item']) ? $data['add_on_item'] : null;
        $this->container['add_on_traveler'] = isset($data['add_on_traveler']) ? $data['add_on_traveler'] : null;
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
     * Gets product_identifier
     *
     * @return string
     */
    public function getProductIdentifier()
    {
        return $this->container['product_identifier'];
    }

    /**
     * Sets product_identifier
     *
     * @param string $product_identifier product_identifier
     *
     * @return $this
     */
    public function setProductIdentifier($product_identifier)
    {
        $this->container['product_identifier'] = $product_identifier;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

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
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name product_name
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \ProfileService\Client\Model\DsImageObjectResponse
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \ProfileService\Client\Model\DsImageObjectResponse $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets option
     *
     * @return \ProfileService\Client\Model\DsOptionResponse[]
     */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
     * Sets option
     *
     * @param \ProfileService\Client\Model\DsOptionResponse[] $option option
     *
     * @return $this
     */
    public function setOption($option)
    {
        $this->container['option'] = $option;

        return $this;
    }

    /**
     * Gets data_governance
     *
     * @return \ProfileService\Client\Model\DsMemberDataGovernanceResponse
     */
    public function getDataGovernance()
    {
        return $this->container['data_governance'];
    }

    /**
     * Sets data_governance
     *
     * @param \ProfileService\Client\Model\DsMemberDataGovernanceResponse $data_governance data_governance
     *
     * @return $this
     */
    public function setDataGovernance($data_governance)
    {
        $this->container['data_governance'] = $data_governance;

        return $this;
    }

    /**
     * Gets price_list
     *
     * @return \ProfileService\Client\Model\DsProductPriceResponse[]
     */
    public function getPriceList()
    {
        return $this->container['price_list'];
    }

    /**
     * Sets price_list
     *
     * @param \ProfileService\Client\Model\DsProductPriceResponse[] $price_list price_list
     *
     * @return $this
     */
    public function setPriceList($price_list)
    {
        $this->container['price_list'] = $price_list;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return double
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param double $tax_rate tax_rate
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets item_field
     *
     * @return \ProfileService\Client\Model\DsFieldDefinitionResponse[]
     */
    public function getItemField()
    {
        return $this->container['item_field'];
    }

    /**
     * Sets item_field
     *
     * @param \ProfileService\Client\Model\DsFieldDefinitionResponse[] $item_field item_field
     *
     * @return $this
     */
    public function setItemField($item_field)
    {
        $this->container['item_field'] = $item_field;

        return $this;
    }

    /**
     * Gets traveler_field
     *
     * @return \ProfileService\Client\Model\DsFieldDefinitionResponse[]
     */
    public function getTravelerField()
    {
        return $this->container['traveler_field'];
    }

    /**
     * Sets traveler_field
     *
     * @param \ProfileService\Client\Model\DsFieldDefinitionResponse[] $traveler_field traveler_field
     *
     * @return $this
     */
    public function setTravelerField($traveler_field)
    {
        $this->container['traveler_field'] = $traveler_field;

        return $this;
    }

    /**
     * Gets add_on_item
     *
     * @return \ProfileService\Client\Model\DsProductAddOnResponse[]
     */
    public function getAddOnItem()
    {
        return $this->container['add_on_item'];
    }

    /**
     * Sets add_on_item
     *
     * @param \ProfileService\Client\Model\DsProductAddOnResponse[] $add_on_item add_on_item
     *
     * @return $this
     */
    public function setAddOnItem($add_on_item)
    {
        $this->container['add_on_item'] = $add_on_item;

        return $this;
    }

    /**
     * Gets add_on_traveler
     *
     * @return \ProfileService\Client\Model\DsProductAddOnResponse[]
     */
    public function getAddOnTraveler()
    {
        return $this->container['add_on_traveler'];
    }

    /**
     * Sets add_on_traveler
     *
     * @param \ProfileService\Client\Model\DsProductAddOnResponse[] $add_on_traveler add_on_traveler
     *
     * @return $this
     */
    public function setAddOnTraveler($add_on_traveler)
    {
        $this->container['add_on_traveler'] = $add_on_traveler;

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
