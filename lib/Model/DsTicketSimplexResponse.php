<?php
/**
 * DsTicketSimplexResponse
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
 * DsTicketSimplexResponse Class Doc Comment
 *
 * @category Class
 * @package  ProfileService\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsTicketSimplexResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TicketSimplexResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identifier' => 'string',
        'parent_ticket_identifier' => 'string',
        'name' => 'string',
        'product' => '\ProfileService\Client\Model\DsProductVariantResponse',
        'additional_type' => 'string',
        'ticket_number' => 'string',
        'booking_number' => 'string',
        'ticket_token' => 'string',
        'date_issued' => '\DateTime',
        'issued_by' => '\ProfileService\Client\Model\DsPartnerSimplexResponse',
        'price_currency' => 'string',
        'price_category' => 'string',
        'price_category_name' => 'string',
        'total_price' => 'double',
        'hide_amount' => 'bool',
        'under_name' => '\ProfileService\Client\Model\DsTravelerResponse',
        'under_names' => '\ProfileService\Client\Model\DsTravelerResponse[]',
        'valid_from' => '\DateTime',
        'valid_until' => '\DateTime',
        'ticket_token_id' => 'string',
        'qr_code_token' => 'string',
        'html_token' => 'string',
        'image_token' => 'string',
        'number_of_travelers' => 'int',
        'is_active' => 'bool',
        'ticket_verification_status' => 'string',
        'ticket_renew_status' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identifier' => null,
        'parent_ticket_identifier' => null,
        'name' => null,
        'product' => null,
        'additional_type' => null,
        'ticket_number' => null,
        'booking_number' => null,
        'ticket_token' => null,
        'date_issued' => 'date-time',
        'issued_by' => null,
        'price_currency' => null,
        'price_category' => null,
        'price_category_name' => null,
        'total_price' => 'double',
        'hide_amount' => null,
        'under_name' => null,
        'under_names' => null,
        'valid_from' => 'date-time',
        'valid_until' => 'date-time',
        'ticket_token_id' => null,
        'qr_code_token' => null,
        'html_token' => null,
        'image_token' => null,
        'number_of_travelers' => 'int32',
        'is_active' => null,
        'ticket_verification_status' => null,
        'ticket_renew_status' => null,
        'id' => null
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
        'parent_ticket_identifier' => 'parentTicketIdentifier',
        'name' => 'name',
        'product' => 'product',
        'additional_type' => 'additionalType',
        'ticket_number' => 'ticketNumber',
        'booking_number' => 'bookingNumber',
        'ticket_token' => 'ticketToken',
        'date_issued' => 'dateIssued',
        'issued_by' => 'issuedBy',
        'price_currency' => 'priceCurrency',
        'price_category' => 'priceCategory',
        'price_category_name' => 'priceCategoryName',
        'total_price' => 'totalPrice',
        'hide_amount' => 'hideAmount',
        'under_name' => 'underName',
        'under_names' => 'underNames',
        'valid_from' => 'validFrom',
        'valid_until' => 'validUntil',
        'ticket_token_id' => 'ticketTokenId',
        'qr_code_token' => 'qrCodeToken',
        'html_token' => 'htmlToken',
        'image_token' => 'imageToken',
        'number_of_travelers' => 'numberOfTravelers',
        'is_active' => 'isActive',
        'ticket_verification_status' => 'ticketVerificationStatus',
        'ticket_renew_status' => 'ticketRenewStatus',
        'id' => '@id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'parent_ticket_identifier' => 'setParentTicketIdentifier',
        'name' => 'setName',
        'product' => 'setProduct',
        'additional_type' => 'setAdditionalType',
        'ticket_number' => 'setTicketNumber',
        'booking_number' => 'setBookingNumber',
        'ticket_token' => 'setTicketToken',
        'date_issued' => 'setDateIssued',
        'issued_by' => 'setIssuedBy',
        'price_currency' => 'setPriceCurrency',
        'price_category' => 'setPriceCategory',
        'price_category_name' => 'setPriceCategoryName',
        'total_price' => 'setTotalPrice',
        'hide_amount' => 'setHideAmount',
        'under_name' => 'setUnderName',
        'under_names' => 'setUnderNames',
        'valid_from' => 'setValidFrom',
        'valid_until' => 'setValidUntil',
        'ticket_token_id' => 'setTicketTokenId',
        'qr_code_token' => 'setQrCodeToken',
        'html_token' => 'setHtmlToken',
        'image_token' => 'setImageToken',
        'number_of_travelers' => 'setNumberOfTravelers',
        'is_active' => 'setIsActive',
        'ticket_verification_status' => 'setTicketVerificationStatus',
        'ticket_renew_status' => 'setTicketRenewStatus',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'parent_ticket_identifier' => 'getParentTicketIdentifier',
        'name' => 'getName',
        'product' => 'getProduct',
        'additional_type' => 'getAdditionalType',
        'ticket_number' => 'getTicketNumber',
        'booking_number' => 'getBookingNumber',
        'ticket_token' => 'getTicketToken',
        'date_issued' => 'getDateIssued',
        'issued_by' => 'getIssuedBy',
        'price_currency' => 'getPriceCurrency',
        'price_category' => 'getPriceCategory',
        'price_category_name' => 'getPriceCategoryName',
        'total_price' => 'getTotalPrice',
        'hide_amount' => 'getHideAmount',
        'under_name' => 'getUnderName',
        'under_names' => 'getUnderNames',
        'valid_from' => 'getValidFrom',
        'valid_until' => 'getValidUntil',
        'ticket_token_id' => 'getTicketTokenId',
        'qr_code_token' => 'getQrCodeToken',
        'html_token' => 'getHtmlToken',
        'image_token' => 'getImageToken',
        'number_of_travelers' => 'getNumberOfTravelers',
        'is_active' => 'getIsActive',
        'ticket_verification_status' => 'getTicketVerificationStatus',
        'ticket_renew_status' => 'getTicketRenewStatus',
        'id' => 'getId'
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
        $this->container['parent_ticket_identifier'] = isset($data['parent_ticket_identifier']) ? $data['parent_ticket_identifier'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['additional_type'] = isset($data['additional_type']) ? $data['additional_type'] : null;
        $this->container['ticket_number'] = isset($data['ticket_number']) ? $data['ticket_number'] : null;
        $this->container['booking_number'] = isset($data['booking_number']) ? $data['booking_number'] : null;
        $this->container['ticket_token'] = isset($data['ticket_token']) ? $data['ticket_token'] : null;
        $this->container['date_issued'] = isset($data['date_issued']) ? $data['date_issued'] : null;
        $this->container['issued_by'] = isset($data['issued_by']) ? $data['issued_by'] : null;
        $this->container['price_currency'] = isset($data['price_currency']) ? $data['price_currency'] : null;
        $this->container['price_category'] = isset($data['price_category']) ? $data['price_category'] : null;
        $this->container['price_category_name'] = isset($data['price_category_name']) ? $data['price_category_name'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['hide_amount'] = isset($data['hide_amount']) ? $data['hide_amount'] : null;
        $this->container['under_name'] = isset($data['under_name']) ? $data['under_name'] : null;
        $this->container['under_names'] = isset($data['under_names']) ? $data['under_names'] : null;
        $this->container['valid_from'] = isset($data['valid_from']) ? $data['valid_from'] : null;
        $this->container['valid_until'] = isset($data['valid_until']) ? $data['valid_until'] : null;
        $this->container['ticket_token_id'] = isset($data['ticket_token_id']) ? $data['ticket_token_id'] : null;
        $this->container['qr_code_token'] = isset($data['qr_code_token']) ? $data['qr_code_token'] : null;
        $this->container['html_token'] = isset($data['html_token']) ? $data['html_token'] : null;
        $this->container['image_token'] = isset($data['image_token']) ? $data['image_token'] : null;
        $this->container['number_of_travelers'] = isset($data['number_of_travelers']) ? $data['number_of_travelers'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['ticket_verification_status'] = isset($data['ticket_verification_status']) ? $data['ticket_verification_status'] : null;
        $this->container['ticket_renew_status'] = isset($data['ticket_renew_status']) ? $data['ticket_renew_status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
     * Gets parent_ticket_identifier
     *
     * @return string
     */
    public function getParentTicketIdentifier()
    {
        return $this->container['parent_ticket_identifier'];
    }

    /**
     * Sets parent_ticket_identifier
     *
     * @param string $parent_ticket_identifier parent_ticket_identifier
     *
     * @return $this
     */
    public function setParentTicketIdentifier($parent_ticket_identifier)
    {
        $this->container['parent_ticket_identifier'] = $parent_ticket_identifier;

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
     * Gets product
     *
     * @return \ProfileService\Client\Model\DsProductVariantResponse
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \ProfileService\Client\Model\DsProductVariantResponse $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets additional_type
     *
     * @return string
     */
    public function getAdditionalType()
    {
        return $this->container['additional_type'];
    }

    /**
     * Sets additional_type
     *
     * @param string $additional_type additional_type
     *
     * @return $this
     */
    public function setAdditionalType($additional_type)
    {
        $this->container['additional_type'] = $additional_type;

        return $this;
    }

    /**
     * Gets ticket_number
     *
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->container['ticket_number'];
    }

    /**
     * Sets ticket_number
     *
     * @param string $ticket_number ticket_number
     *
     * @return $this
     */
    public function setTicketNumber($ticket_number)
    {
        $this->container['ticket_number'] = $ticket_number;

        return $this;
    }

    /**
     * Gets booking_number
     *
     * @return string
     */
    public function getBookingNumber()
    {
        return $this->container['booking_number'];
    }

    /**
     * Sets booking_number
     *
     * @param string $booking_number booking_number
     *
     * @return $this
     */
    public function setBookingNumber($booking_number)
    {
        $this->container['booking_number'] = $booking_number;

        return $this;
    }

    /**
     * Gets ticket_token
     *
     * @return string
     */
    public function getTicketToken()
    {
        return $this->container['ticket_token'];
    }

    /**
     * Sets ticket_token
     *
     * @param string $ticket_token ticket_token
     *
     * @return $this
     */
    public function setTicketToken($ticket_token)
    {
        $this->container['ticket_token'] = $ticket_token;

        return $this;
    }

    /**
     * Gets date_issued
     *
     * @return \DateTime
     */
    public function getDateIssued()
    {
        return $this->container['date_issued'];
    }

    /**
     * Sets date_issued
     *
     * @param \DateTime $date_issued date_issued
     *
     * @return $this
     */
    public function setDateIssued($date_issued)
    {
        $this->container['date_issued'] = $date_issued;

        return $this;
    }

    /**
     * Gets issued_by
     *
     * @return \ProfileService\Client\Model\DsPartnerSimplexResponse
     */
    public function getIssuedBy()
    {
        return $this->container['issued_by'];
    }

    /**
     * Sets issued_by
     *
     * @param \ProfileService\Client\Model\DsPartnerSimplexResponse $issued_by issued_by
     *
     * @return $this
     */
    public function setIssuedBy($issued_by)
    {
        $this->container['issued_by'] = $issued_by;

        return $this;
    }

    /**
     * Gets price_currency
     *
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->container['price_currency'];
    }

    /**
     * Sets price_currency
     *
     * @param string $price_currency price_currency
     *
     * @return $this
     */
    public function setPriceCurrency($price_currency)
    {
        $this->container['price_currency'] = $price_currency;

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
     * Gets total_price
     *
     * @return double
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param double $total_price total_price
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets hide_amount
     *
     * @return bool
     */
    public function getHideAmount()
    {
        return $this->container['hide_amount'];
    }

    /**
     * Sets hide_amount
     *
     * @param bool $hide_amount hide_amount
     *
     * @return $this
     */
    public function setHideAmount($hide_amount)
    {
        $this->container['hide_amount'] = $hide_amount;

        return $this;
    }

    /**
     * Gets under_name
     *
     * @return \ProfileService\Client\Model\DsTravelerResponse
     */
    public function getUnderName()
    {
        return $this->container['under_name'];
    }

    /**
     * Sets under_name
     *
     * @param \ProfileService\Client\Model\DsTravelerResponse $under_name under_name
     *
     * @return $this
     */
    public function setUnderName($under_name)
    {
        $this->container['under_name'] = $under_name;

        return $this;
    }

    /**
     * Gets under_names
     *
     * @return \ProfileService\Client\Model\DsTravelerResponse[]
     */
    public function getUnderNames()
    {
        return $this->container['under_names'];
    }

    /**
     * Sets under_names
     *
     * @param \ProfileService\Client\Model\DsTravelerResponse[] $under_names under_names
     *
     * @return $this
     */
    public function setUnderNames($under_names)
    {
        $this->container['under_names'] = $under_names;

        return $this;
    }

    /**
     * Gets valid_from
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param \DateTime $valid_from valid_from
     *
     * @return $this
     */
    public function setValidFrom($valid_from)
    {
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_until
     *
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     *
     * @param \DateTime $valid_until valid_until
     *
     * @return $this
     */
    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;

        return $this;
    }

    /**
     * Gets ticket_token_id
     *
     * @return string
     */
    public function getTicketTokenId()
    {
        return $this->container['ticket_token_id'];
    }

    /**
     * Sets ticket_token_id
     *
     * @param string $ticket_token_id ticket_token_id
     *
     * @return $this
     */
    public function setTicketTokenId($ticket_token_id)
    {
        $this->container['ticket_token_id'] = $ticket_token_id;

        return $this;
    }

    /**
     * Gets qr_code_token
     *
     * @return string
     */
    public function getQrCodeToken()
    {
        return $this->container['qr_code_token'];
    }

    /**
     * Sets qr_code_token
     *
     * @param string $qr_code_token qr_code_token
     *
     * @return $this
     */
    public function setQrCodeToken($qr_code_token)
    {
        $this->container['qr_code_token'] = $qr_code_token;

        return $this;
    }

    /**
     * Gets html_token
     *
     * @return string
     */
    public function getHtmlToken()
    {
        return $this->container['html_token'];
    }

    /**
     * Sets html_token
     *
     * @param string $html_token html_token
     *
     * @return $this
     */
    public function setHtmlToken($html_token)
    {
        $this->container['html_token'] = $html_token;

        return $this;
    }

    /**
     * Gets image_token
     *
     * @return string
     */
    public function getImageToken()
    {
        return $this->container['image_token'];
    }

    /**
     * Sets image_token
     *
     * @param string $image_token image_token
     *
     * @return $this
     */
    public function setImageToken($image_token)
    {
        $this->container['image_token'] = $image_token;

        return $this;
    }

    /**
     * Gets number_of_travelers
     *
     * @return int
     */
    public function getNumberOfTravelers()
    {
        return $this->container['number_of_travelers'];
    }

    /**
     * Sets number_of_travelers
     *
     * @param int $number_of_travelers number_of_travelers
     *
     * @return $this
     */
    public function setNumberOfTravelers($number_of_travelers)
    {
        $this->container['number_of_travelers'] = $number_of_travelers;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets ticket_verification_status
     *
     * @return string
     */
    public function getTicketVerificationStatus()
    {
        return $this->container['ticket_verification_status'];
    }

    /**
     * Sets ticket_verification_status
     *
     * @param string $ticket_verification_status ticket_verification_status
     *
     * @return $this
     */
    public function setTicketVerificationStatus($ticket_verification_status)
    {
        $this->container['ticket_verification_status'] = $ticket_verification_status;

        return $this;
    }

    /**
     * Gets ticket_renew_status
     *
     * @return string
     */
    public function getTicketRenewStatus()
    {
        return $this->container['ticket_renew_status'];
    }

    /**
     * Sets ticket_renew_status
     *
     * @param string $ticket_renew_status ticket_renew_status
     *
     * @return $this
     */
    public function setTicketRenewStatus($ticket_renew_status)
    {
        $this->container['ticket_renew_status'] = $ticket_renew_status;

        return $this;
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
