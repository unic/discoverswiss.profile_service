<?php
/**
 * DsOrderDownload
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
 * DsOrderDownload Class Doc Comment
 *
 * @category Class
 * @package  ProfileService\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsOrderDownload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderDownload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_number' => 'string',
'order_date' => '\DateTime',
'partner_acronym' => 'string',
'id' => 'string',
'customer' => '\ProfileService\Client\Model\DsCustomerDownload',
'order_status' => 'string',
'price_currency' => 'string',
'total_amount' => 'float',
'total_amount_chf' => 'float',
'mail_body_token' => 'string',
'order_token_name' => 'string',
'language' => 'string',
'created_date_time' => '\DateTime',
'last_modified' => '\DateTime',
'last_modified_by' => 'string',
'created_by_subscription' => 'string',
'last_modified_by_subscription' => 'string',
'ticket' => '\ProfileService\Client\Model\DsTicketDownload[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_number' => null,
'order_date' => 'date-time',
'partner_acronym' => null,
'id' => null,
'customer' => null,
'order_status' => null,
'price_currency' => null,
'total_amount' => 'float',
'total_amount_chf' => 'float',
'mail_body_token' => null,
'order_token_name' => null,
'language' => null,
'created_date_time' => 'date-time',
'last_modified' => 'date-time',
'last_modified_by' => null,
'created_by_subscription' => null,
'last_modified_by_subscription' => null,
'ticket' => null    ];

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
        'order_number' => 'orderNumber',
'order_date' => 'orderDate',
'partner_acronym' => 'partnerAcronym',
'id' => '@id',
'customer' => 'customer',
'order_status' => 'orderStatus',
'price_currency' => 'priceCurrency',
'total_amount' => 'totalAmount',
'total_amount_chf' => 'totalAmountCHF',
'mail_body_token' => 'mailBodyToken',
'order_token_name' => 'orderTokenName',
'language' => 'language',
'created_date_time' => 'createdDateTime',
'last_modified' => 'lastModified',
'last_modified_by' => 'lastModifiedBy',
'created_by_subscription' => 'createdBySubscription',
'last_modified_by_subscription' => 'lastModifiedBySubscription',
'ticket' => 'ticket'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_number' => 'setOrderNumber',
'order_date' => 'setOrderDate',
'partner_acronym' => 'setPartnerAcronym',
'id' => 'setId',
'customer' => 'setCustomer',
'order_status' => 'setOrderStatus',
'price_currency' => 'setPriceCurrency',
'total_amount' => 'setTotalAmount',
'total_amount_chf' => 'setTotalAmountChf',
'mail_body_token' => 'setMailBodyToken',
'order_token_name' => 'setOrderTokenName',
'language' => 'setLanguage',
'created_date_time' => 'setCreatedDateTime',
'last_modified' => 'setLastModified',
'last_modified_by' => 'setLastModifiedBy',
'created_by_subscription' => 'setCreatedBySubscription',
'last_modified_by_subscription' => 'setLastModifiedBySubscription',
'ticket' => 'setTicket'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_number' => 'getOrderNumber',
'order_date' => 'getOrderDate',
'partner_acronym' => 'getPartnerAcronym',
'id' => 'getId',
'customer' => 'getCustomer',
'order_status' => 'getOrderStatus',
'price_currency' => 'getPriceCurrency',
'total_amount' => 'getTotalAmount',
'total_amount_chf' => 'getTotalAmountChf',
'mail_body_token' => 'getMailBodyToken',
'order_token_name' => 'getOrderTokenName',
'language' => 'getLanguage',
'created_date_time' => 'getCreatedDateTime',
'last_modified' => 'getLastModified',
'last_modified_by' => 'getLastModifiedBy',
'created_by_subscription' => 'getCreatedBySubscription',
'last_modified_by_subscription' => 'getLastModifiedBySubscription',
'ticket' => 'getTicket'    ];

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
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
        $this->container['partner_acronym'] = isset($data['partner_acronym']) ? $data['partner_acronym'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['order_status'] = isset($data['order_status']) ? $data['order_status'] : null;
        $this->container['price_currency'] = isset($data['price_currency']) ? $data['price_currency'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['total_amount_chf'] = isset($data['total_amount_chf']) ? $data['total_amount_chf'] : null;
        $this->container['mail_body_token'] = isset($data['mail_body_token']) ? $data['mail_body_token'] : null;
        $this->container['order_token_name'] = isset($data['order_token_name']) ? $data['order_token_name'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['last_modified_by'] = isset($data['last_modified_by']) ? $data['last_modified_by'] : null;
        $this->container['created_by_subscription'] = isset($data['created_by_subscription']) ? $data['created_by_subscription'] : null;
        $this->container['last_modified_by_subscription'] = isset($data['last_modified_by_subscription']) ? $data['last_modified_by_subscription'] : null;
        $this->container['ticket'] = isset($data['ticket']) ? $data['ticket'] : null;
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
     * Gets order_number
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string $order_number order_number
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param \DateTime $order_date order_date
     *
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

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
     * Gets customer
     *
     * @return \ProfileService\Client\Model\DsCustomerDownload
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \ProfileService\Client\Model\DsCustomerDownload $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string $order_status order_status
     *
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $this->container['order_status'] = $order_status;

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
     * Gets total_amount
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets total_amount_chf
     *
     * @return float
     */
    public function getTotalAmountChf()
    {
        return $this->container['total_amount_chf'];
    }

    /**
     * Sets total_amount_chf
     *
     * @param float $total_amount_chf total_amount_chf
     *
     * @return $this
     */
    public function setTotalAmountChf($total_amount_chf)
    {
        $this->container['total_amount_chf'] = $total_amount_chf;

        return $this;
    }

    /**
     * Gets mail_body_token
     *
     * @return string
     */
    public function getMailBodyToken()
    {
        return $this->container['mail_body_token'];
    }

    /**
     * Sets mail_body_token
     *
     * @param string $mail_body_token mail_body_token
     *
     * @return $this
     */
    public function setMailBodyToken($mail_body_token)
    {
        $this->container['mail_body_token'] = $mail_body_token;

        return $this;
    }

    /**
     * Gets order_token_name
     *
     * @return string
     */
    public function getOrderTokenName()
    {
        return $this->container['order_token_name'];
    }

    /**
     * Sets order_token_name
     *
     * @param string $order_token_name order_token_name
     *
     * @return $this
     */
    public function setOrderTokenName($order_token_name)
    {
        $this->container['order_token_name'] = $order_token_name;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets created_date_time
     *
     * @return \DateTime
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     *
     * @param \DateTime $created_date_time created_date_time
     *
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param \DateTime $last_modified last_modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets last_modified_by
     *
     * @return string
     */
    public function getLastModifiedBy()
    {
        return $this->container['last_modified_by'];
    }

    /**
     * Sets last_modified_by
     *
     * @param string $last_modified_by last_modified_by
     *
     * @return $this
     */
    public function setLastModifiedBy($last_modified_by)
    {
        $this->container['last_modified_by'] = $last_modified_by;

        return $this;
    }

    /**
     * Gets created_by_subscription
     *
     * @return string
     */
    public function getCreatedBySubscription()
    {
        return $this->container['created_by_subscription'];
    }

    /**
     * Sets created_by_subscription
     *
     * @param string $created_by_subscription created_by_subscription
     *
     * @return $this
     */
    public function setCreatedBySubscription($created_by_subscription)
    {
        $this->container['created_by_subscription'] = $created_by_subscription;

        return $this;
    }

    /**
     * Gets last_modified_by_subscription
     *
     * @return string
     */
    public function getLastModifiedBySubscription()
    {
        return $this->container['last_modified_by_subscription'];
    }

    /**
     * Sets last_modified_by_subscription
     *
     * @param string $last_modified_by_subscription last_modified_by_subscription
     *
     * @return $this
     */
    public function setLastModifiedBySubscription($last_modified_by_subscription)
    {
        $this->container['last_modified_by_subscription'] = $last_modified_by_subscription;

        return $this;
    }

    /**
     * Gets ticket
     *
     * @return \ProfileService\Client\Model\DsTicketDownload[]
     */
    public function getTicket()
    {
        return $this->container['ticket'];
    }

    /**
     * Sets ticket
     *
     * @param \ProfileService\Client\Model\DsTicketDownload[] $ticket ticket
     *
     * @return $this
     */
    public function setTicket($ticket)
    {
        $this->container['ticket'] = $ticket;

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
