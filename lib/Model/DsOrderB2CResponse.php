<?php
/**
 * DsOrderB2CResponse
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
 * DsOrderB2CResponse Class Doc Comment
 *
 * @category Class
 * @package  ProfileService\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsOrderB2CResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderB2CResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_number' => 'string',
'order_date' => '\DateTime',
'order_delivery' => '\ProfileService\Client\Model\DsParcelDeliveryResponse[]',
'customer' => '\ProfileService\Client\Model\DsOrderCustomerResponse',
'customer_field' => '\ProfileService\Client\Model\DsFieldDefinitionResponse[]',
'billing_address' => '\ProfileService\Client\Model\DsFullAddressResponse',
'shipping_address' => '\ProfileService\Client\Model\DsFullAddressResponse',
'payment_method_id' => 'string',
'confirmation_number' => 'string',
'order_status' => 'string',
'price_currency' => 'string',
'sales_channel' => 'string',
'total_amount' => 'double',
'total_amount_chf' => 'double',
'total_tax' => 'double',
'total_tax_chf' => 'double',
'mail_body_token' => 'string',
'language' => 'string',
'ordered_item' => '\ProfileService\Client\Model\DsOrderItemResponse[]',
'description' => 'string',
'expires_at' => '\DateTime',
'term' => '\ProfileService\Client\Model\DsTermVersionCheckResponse[]',
'additional_property' => '\ProfileService\Client\Model\DsPropertyValueResponse[]',
'order_payment_details' => '\ProfileService\Client\Model\DsOrderPaymentDetailsResponse',
'download' => 'string',
'partner_acronym' => 'string',
'profile_id' => 'string',
'id' => 'string',
'data_governance' => '\ProfileService\Client\Model\DsDataGovernanceResponse',
'created_date_time' => '\DateTime',
'last_modified' => '\DateTime',
'last_modified_by' => 'string',
'created_by_subscription' => 'string',
'last_modified_by_subscription' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_number' => null,
'order_date' => 'date-time',
'order_delivery' => null,
'customer' => null,
'customer_field' => null,
'billing_address' => null,
'shipping_address' => null,
'payment_method_id' => null,
'confirmation_number' => null,
'order_status' => null,
'price_currency' => null,
'sales_channel' => null,
'total_amount' => 'double',
'total_amount_chf' => 'double',
'total_tax' => 'double',
'total_tax_chf' => 'double',
'mail_body_token' => null,
'language' => null,
'ordered_item' => null,
'description' => null,
'expires_at' => 'date-time',
'term' => null,
'additional_property' => null,
'order_payment_details' => null,
'download' => null,
'partner_acronym' => null,
'profile_id' => null,
'id' => null,
'data_governance' => null,
'created_date_time' => 'date-time',
'last_modified' => 'date-time',
'last_modified_by' => null,
'created_by_subscription' => null,
'last_modified_by_subscription' => null    ];

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
'order_delivery' => 'orderDelivery',
'customer' => 'customer',
'customer_field' => 'customerField',
'billing_address' => 'billingAddress',
'shipping_address' => 'shippingAddress',
'payment_method_id' => 'paymentMethodId',
'confirmation_number' => 'confirmationNumber',
'order_status' => 'orderStatus',
'price_currency' => 'priceCurrency',
'sales_channel' => 'salesChannel',
'total_amount' => 'totalAmount',
'total_amount_chf' => 'totalAmountCHF',
'total_tax' => 'totalTax',
'total_tax_chf' => 'totalTaxCHF',
'mail_body_token' => 'mailBodyToken',
'language' => 'language',
'ordered_item' => 'orderedItem',
'description' => 'description',
'expires_at' => 'expiresAt',
'term' => 'term',
'additional_property' => 'additionalProperty',
'order_payment_details' => 'orderPaymentDetails',
'download' => '@download',
'partner_acronym' => 'partnerAcronym',
'profile_id' => 'profileId',
'id' => '@id',
'data_governance' => 'dataGovernance',
'created_date_time' => 'createdDateTime',
'last_modified' => 'lastModified',
'last_modified_by' => 'lastModifiedBy',
'created_by_subscription' => 'createdBySubscription',
'last_modified_by_subscription' => 'lastModifiedBySubscription'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_number' => 'setOrderNumber',
'order_date' => 'setOrderDate',
'order_delivery' => 'setOrderDelivery',
'customer' => 'setCustomer',
'customer_field' => 'setCustomerField',
'billing_address' => 'setBillingAddress',
'shipping_address' => 'setShippingAddress',
'payment_method_id' => 'setPaymentMethodId',
'confirmation_number' => 'setConfirmationNumber',
'order_status' => 'setOrderStatus',
'price_currency' => 'setPriceCurrency',
'sales_channel' => 'setSalesChannel',
'total_amount' => 'setTotalAmount',
'total_amount_chf' => 'setTotalAmountChf',
'total_tax' => 'setTotalTax',
'total_tax_chf' => 'setTotalTaxChf',
'mail_body_token' => 'setMailBodyToken',
'language' => 'setLanguage',
'ordered_item' => 'setOrderedItem',
'description' => 'setDescription',
'expires_at' => 'setExpiresAt',
'term' => 'setTerm',
'additional_property' => 'setAdditionalProperty',
'order_payment_details' => 'setOrderPaymentDetails',
'download' => 'setDownload',
'partner_acronym' => 'setPartnerAcronym',
'profile_id' => 'setProfileId',
'id' => 'setId',
'data_governance' => 'setDataGovernance',
'created_date_time' => 'setCreatedDateTime',
'last_modified' => 'setLastModified',
'last_modified_by' => 'setLastModifiedBy',
'created_by_subscription' => 'setCreatedBySubscription',
'last_modified_by_subscription' => 'setLastModifiedBySubscription'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_number' => 'getOrderNumber',
'order_date' => 'getOrderDate',
'order_delivery' => 'getOrderDelivery',
'customer' => 'getCustomer',
'customer_field' => 'getCustomerField',
'billing_address' => 'getBillingAddress',
'shipping_address' => 'getShippingAddress',
'payment_method_id' => 'getPaymentMethodId',
'confirmation_number' => 'getConfirmationNumber',
'order_status' => 'getOrderStatus',
'price_currency' => 'getPriceCurrency',
'sales_channel' => 'getSalesChannel',
'total_amount' => 'getTotalAmount',
'total_amount_chf' => 'getTotalAmountChf',
'total_tax' => 'getTotalTax',
'total_tax_chf' => 'getTotalTaxChf',
'mail_body_token' => 'getMailBodyToken',
'language' => 'getLanguage',
'ordered_item' => 'getOrderedItem',
'description' => 'getDescription',
'expires_at' => 'getExpiresAt',
'term' => 'getTerm',
'additional_property' => 'getAdditionalProperty',
'order_payment_details' => 'getOrderPaymentDetails',
'download' => 'getDownload',
'partner_acronym' => 'getPartnerAcronym',
'profile_id' => 'getProfileId',
'id' => 'getId',
'data_governance' => 'getDataGovernance',
'created_date_time' => 'getCreatedDateTime',
'last_modified' => 'getLastModified',
'last_modified_by' => 'getLastModifiedBy',
'created_by_subscription' => 'getCreatedBySubscription',
'last_modified_by_subscription' => 'getLastModifiedBySubscription'    ];

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
        $this->container['order_delivery'] = isset($data['order_delivery']) ? $data['order_delivery'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['customer_field'] = isset($data['customer_field']) ? $data['customer_field'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['payment_method_id'] = isset($data['payment_method_id']) ? $data['payment_method_id'] : null;
        $this->container['confirmation_number'] = isset($data['confirmation_number']) ? $data['confirmation_number'] : null;
        $this->container['order_status'] = isset($data['order_status']) ? $data['order_status'] : null;
        $this->container['price_currency'] = isset($data['price_currency']) ? $data['price_currency'] : null;
        $this->container['sales_channel'] = isset($data['sales_channel']) ? $data['sales_channel'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['total_amount_chf'] = isset($data['total_amount_chf']) ? $data['total_amount_chf'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
        $this->container['total_tax_chf'] = isset($data['total_tax_chf']) ? $data['total_tax_chf'] : null;
        $this->container['mail_body_token'] = isset($data['mail_body_token']) ? $data['mail_body_token'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['ordered_item'] = isset($data['ordered_item']) ? $data['ordered_item'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['term'] = isset($data['term']) ? $data['term'] : null;
        $this->container['additional_property'] = isset($data['additional_property']) ? $data['additional_property'] : null;
        $this->container['order_payment_details'] = isset($data['order_payment_details']) ? $data['order_payment_details'] : null;
        $this->container['download'] = isset($data['download']) ? $data['download'] : null;
        $this->container['partner_acronym'] = isset($data['partner_acronym']) ? $data['partner_acronym'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['data_governance'] = isset($data['data_governance']) ? $data['data_governance'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['last_modified_by'] = isset($data['last_modified_by']) ? $data['last_modified_by'] : null;
        $this->container['created_by_subscription'] = isset($data['created_by_subscription']) ? $data['created_by_subscription'] : null;
        $this->container['last_modified_by_subscription'] = isset($data['last_modified_by_subscription']) ? $data['last_modified_by_subscription'] : null;
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
     * Gets order_delivery
     *
     * @return \ProfileService\Client\Model\DsParcelDeliveryResponse[]
     */
    public function getOrderDelivery()
    {
        return $this->container['order_delivery'];
    }

    /**
     * Sets order_delivery
     *
     * @param \ProfileService\Client\Model\DsParcelDeliveryResponse[] $order_delivery order_delivery
     *
     * @return $this
     */
    public function setOrderDelivery($order_delivery)
    {
        $this->container['order_delivery'] = $order_delivery;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \ProfileService\Client\Model\DsOrderCustomerResponse
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \ProfileService\Client\Model\DsOrderCustomerResponse $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets customer_field
     *
     * @return \ProfileService\Client\Model\DsFieldDefinitionResponse[]
     */
    public function getCustomerField()
    {
        return $this->container['customer_field'];
    }

    /**
     * Sets customer_field
     *
     * @param \ProfileService\Client\Model\DsFieldDefinitionResponse[] $customer_field customer_field
     *
     * @return $this
     */
    public function setCustomerField($customer_field)
    {
        $this->container['customer_field'] = $customer_field;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \ProfileService\Client\Model\DsFullAddressResponse
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \ProfileService\Client\Model\DsFullAddressResponse $billing_address billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \ProfileService\Client\Model\DsFullAddressResponse
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \ProfileService\Client\Model\DsFullAddressResponse $shipping_address shipping_address
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets payment_method_id
     *
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->container['payment_method_id'];
    }

    /**
     * Sets payment_method_id
     *
     * @param string $payment_method_id payment_method_id
     *
     * @return $this
     */
    public function setPaymentMethodId($payment_method_id)
    {
        $this->container['payment_method_id'] = $payment_method_id;

        return $this;
    }

    /**
     * Gets confirmation_number
     *
     * @return string
     */
    public function getConfirmationNumber()
    {
        return $this->container['confirmation_number'];
    }

    /**
     * Sets confirmation_number
     *
     * @param string $confirmation_number confirmation_number
     *
     * @return $this
     */
    public function setConfirmationNumber($confirmation_number)
    {
        $this->container['confirmation_number'] = $confirmation_number;

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
     * Gets sales_channel
     *
     * @return string
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param string $sales_channel sales_channel
     *
     * @return $this
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double $total_amount total_amount
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
     * @return double
     */
    public function getTotalAmountChf()
    {
        return $this->container['total_amount_chf'];
    }

    /**
     * Sets total_amount_chf
     *
     * @param double $total_amount_chf total_amount_chf
     *
     * @return $this
     */
    public function setTotalAmountChf($total_amount_chf)
    {
        $this->container['total_amount_chf'] = $total_amount_chf;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return double
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param double $total_tax total_tax
     *
     * @return $this
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets total_tax_chf
     *
     * @return double
     */
    public function getTotalTaxChf()
    {
        return $this->container['total_tax_chf'];
    }

    /**
     * Sets total_tax_chf
     *
     * @param double $total_tax_chf total_tax_chf
     *
     * @return $this
     */
    public function setTotalTaxChf($total_tax_chf)
    {
        $this->container['total_tax_chf'] = $total_tax_chf;

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
     * Gets ordered_item
     *
     * @return \ProfileService\Client\Model\DsOrderItemResponse[]
     */
    public function getOrderedItem()
    {
        return $this->container['ordered_item'];
    }

    /**
     * Sets ordered_item
     *
     * @param \ProfileService\Client\Model\DsOrderItemResponse[] $ordered_item ordered_item
     *
     * @return $this
     */
    public function setOrderedItem($ordered_item)
    {
        $this->container['ordered_item'] = $ordered_item;

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
     * Gets expires_at
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime $expires_at expires_at
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets term
     *
     * @return \ProfileService\Client\Model\DsTermVersionCheckResponse[]
     */
    public function getTerm()
    {
        return $this->container['term'];
    }

    /**
     * Sets term
     *
     * @param \ProfileService\Client\Model\DsTermVersionCheckResponse[] $term term
     *
     * @return $this
     */
    public function setTerm($term)
    {
        $this->container['term'] = $term;

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
     * Gets order_payment_details
     *
     * @return \ProfileService\Client\Model\DsOrderPaymentDetailsResponse
     */
    public function getOrderPaymentDetails()
    {
        return $this->container['order_payment_details'];
    }

    /**
     * Sets order_payment_details
     *
     * @param \ProfileService\Client\Model\DsOrderPaymentDetailsResponse $order_payment_details order_payment_details
     *
     * @return $this
     */
    public function setOrderPaymentDetails($order_payment_details)
    {
        $this->container['order_payment_details'] = $order_payment_details;

        return $this;
    }

    /**
     * Gets download
     *
     * @return string
     */
    public function getDownload()
    {
        return $this->container['download'];
    }

    /**
     * Sets download
     *
     * @param string $download download
     *
     * @return $this
     */
    public function setDownload($download)
    {
        $this->container['download'] = $download;

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
     * Gets profile_id
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string $profile_id profile_id
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

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
     * Gets data_governance
     *
     * @return \ProfileService\Client\Model\DsDataGovernanceResponse
     */
    public function getDataGovernance()
    {
        return $this->container['data_governance'];
    }

    /**
     * Sets data_governance
     *
     * @param \ProfileService\Client\Model\DsDataGovernanceResponse $data_governance data_governance
     *
     * @return $this
     */
    public function setDataGovernance($data_governance)
    {
        $this->container['data_governance'] = $data_governance;

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
