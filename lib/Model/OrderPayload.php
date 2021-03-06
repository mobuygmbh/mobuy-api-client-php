<?php
/**
 * OrderPayload
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mobuy API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * OrderPayload Class Doc Comment
 *
 * @category    Class
 * @description Payload data for a new order
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderPayload implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'orderPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reference' => 'string',
        'amount' => 'double',
        'currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reference' => null,
        'amount' => 'double',
        'currency' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'reference' => 'reference',
        'amount' => 'amount',
        'currency' => 'currency'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'amount' => 'setAmount',
        'currency' => 'setCurrency'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'amount' => 'getAmount',
        'currency' => 'getCurrency'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const CURRENCY_EURO = 'euro';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_EURO,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['reference'] === null) {
            $invalid_properties[] = "'reference' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9\\-]*$/", $this->container['reference'])) {
            $invalid_properties[] = "invalid value for 'reference', must be conform to the pattern /^[a-zA-Z0-9\\-]*$/.";
        }

        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        $allowed_values = $this->getCurrencyAllowableValues();
        if (!in_array($this->container['currency'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'currency', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['reference'] === null) {
            return false;
        }
        if (!preg_match("/^[a-zA-Z0-9\\-]*$/", $this->container['reference'])) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        $allowed_values = $this->getCurrencyAllowableValues();
        if (!in_array($this->container['currency'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     * @param string $reference Reference
     * @return $this
     */
    public function setReference($reference)
    {

        if ((!preg_match("/^[a-zA-Z0-9\\-]*$/", $reference))) {
            throw new \InvalidArgumentException("invalid value for $reference when calling OrderPayload., must conform to the pattern /^[a-zA-Z0-9\\-]*$/.");
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets amount
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param double $amount The amount (money)
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency The currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $allowed_values = $this->getCurrencyAllowableValues();
        if (!is_null($currency) && !in_array($currency, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'currency', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


