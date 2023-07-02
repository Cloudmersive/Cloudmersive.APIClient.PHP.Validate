<?php
/**
 * ValidateCountryResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * validateapi
 *
 * The validation APIs help you validate data. Check if an E-mail address is real. Check if a domain is real. Check up on an IP address, and even where it is located. All this and much more is available in the validation API.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ValidateCountryResponse Class Doc Comment
 *
 * @category Class
 * @description Result of performing a country validation operation
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ValidateCountryResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ValidateCountryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'successful' => 'bool',
        'country_full_name' => 'string',
        'iso_two_letter_code' => 'string',
        'fips_two_letter_code' => 'string',
        'three_letter_code' => 'string',
        'is_european_union_member' => 'bool',
        'timezones' => '\Swagger\Client\Model\Timezone[]',
        'iso_currency_code' => 'string',
        'currency_symbol' => 'string',
        'currency_english_name' => 'string',
        'region' => 'string',
        'subregion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'successful' => null,
        'country_full_name' => null,
        'iso_two_letter_code' => null,
        'fips_two_letter_code' => null,
        'three_letter_code' => null,
        'is_european_union_member' => null,
        'timezones' => null,
        'iso_currency_code' => null,
        'currency_symbol' => null,
        'currency_english_name' => null,
        'region' => null,
        'subregion' => null
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
        'successful' => 'Successful',
        'country_full_name' => 'CountryFullName',
        'iso_two_letter_code' => 'ISOTwoLetterCode',
        'fips_two_letter_code' => 'FIPSTwoLetterCode',
        'three_letter_code' => 'ThreeLetterCode',
        'is_european_union_member' => 'IsEuropeanUnionMember',
        'timezones' => 'Timezones',
        'iso_currency_code' => 'ISOCurrencyCode',
        'currency_symbol' => 'CurrencySymbol',
        'currency_english_name' => 'CurrencyEnglishName',
        'region' => 'Region',
        'subregion' => 'Subregion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'successful' => 'setSuccessful',
        'country_full_name' => 'setCountryFullName',
        'iso_two_letter_code' => 'setIsoTwoLetterCode',
        'fips_two_letter_code' => 'setFipsTwoLetterCode',
        'three_letter_code' => 'setThreeLetterCode',
        'is_european_union_member' => 'setIsEuropeanUnionMember',
        'timezones' => 'setTimezones',
        'iso_currency_code' => 'setIsoCurrencyCode',
        'currency_symbol' => 'setCurrencySymbol',
        'currency_english_name' => 'setCurrencyEnglishName',
        'region' => 'setRegion',
        'subregion' => 'setSubregion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'successful' => 'getSuccessful',
        'country_full_name' => 'getCountryFullName',
        'iso_two_letter_code' => 'getIsoTwoLetterCode',
        'fips_two_letter_code' => 'getFipsTwoLetterCode',
        'three_letter_code' => 'getThreeLetterCode',
        'is_european_union_member' => 'getIsEuropeanUnionMember',
        'timezones' => 'getTimezones',
        'iso_currency_code' => 'getIsoCurrencyCode',
        'currency_symbol' => 'getCurrencySymbol',
        'currency_english_name' => 'getCurrencyEnglishName',
        'region' => 'getRegion',
        'subregion' => 'getSubregion'
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
        $this->container['successful'] = isset($data['successful']) ? $data['successful'] : null;
        $this->container['country_full_name'] = isset($data['country_full_name']) ? $data['country_full_name'] : null;
        $this->container['iso_two_letter_code'] = isset($data['iso_two_letter_code']) ? $data['iso_two_letter_code'] : null;
        $this->container['fips_two_letter_code'] = isset($data['fips_two_letter_code']) ? $data['fips_two_letter_code'] : null;
        $this->container['three_letter_code'] = isset($data['three_letter_code']) ? $data['three_letter_code'] : null;
        $this->container['is_european_union_member'] = isset($data['is_european_union_member']) ? $data['is_european_union_member'] : null;
        $this->container['timezones'] = isset($data['timezones']) ? $data['timezones'] : null;
        $this->container['iso_currency_code'] = isset($data['iso_currency_code']) ? $data['iso_currency_code'] : null;
        $this->container['currency_symbol'] = isset($data['currency_symbol']) ? $data['currency_symbol'] : null;
        $this->container['currency_english_name'] = isset($data['currency_english_name']) ? $data['currency_english_name'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['subregion'] = isset($data['subregion']) ? $data['subregion'] : null;
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
     * Gets successful
     *
     * @return bool
     */
    public function getSuccessful()
    {
        return $this->container['successful'];
    }

    /**
     * Sets successful
     *
     * @param bool $successful True if successful, false otherwise
     *
     * @return $this
     */
    public function setSuccessful($successful)
    {
        $this->container['successful'] = $successful;

        return $this;
    }

    /**
     * Gets country_full_name
     *
     * @return string
     */
    public function getCountryFullName()
    {
        return $this->container['country_full_name'];
    }

    /**
     * Sets country_full_name
     *
     * @param string $country_full_name Full name of the country
     *
     * @return $this
     */
    public function setCountryFullName($country_full_name)
    {
        $this->container['country_full_name'] = $country_full_name;

        return $this;
    }

    /**
     * Gets iso_two_letter_code
     *
     * @return string
     */
    public function getIsoTwoLetterCode()
    {
        return $this->container['iso_two_letter_code'];
    }

    /**
     * Sets iso_two_letter_code
     *
     * @param string $iso_two_letter_code Two-letter ISO 3166-1 country code
     *
     * @return $this
     */
    public function setIsoTwoLetterCode($iso_two_letter_code)
    {
        $this->container['iso_two_letter_code'] = $iso_two_letter_code;

        return $this;
    }

    /**
     * Gets fips_two_letter_code
     *
     * @return string
     */
    public function getFipsTwoLetterCode()
    {
        return $this->container['fips_two_letter_code'];
    }

    /**
     * Sets fips_two_letter_code
     *
     * @param string $fips_two_letter_code Two-letter FIPS 10-4 country code
     *
     * @return $this
     */
    public function setFipsTwoLetterCode($fips_two_letter_code)
    {
        $this->container['fips_two_letter_code'] = $fips_two_letter_code;

        return $this;
    }

    /**
     * Gets three_letter_code
     *
     * @return string
     */
    public function getThreeLetterCode()
    {
        return $this->container['three_letter_code'];
    }

    /**
     * Sets three_letter_code
     *
     * @param string $three_letter_code Three-letter ISO 3166-1 country code
     *
     * @return $this
     */
    public function setThreeLetterCode($three_letter_code)
    {
        $this->container['three_letter_code'] = $three_letter_code;

        return $this;
    }

    /**
     * Gets is_european_union_member
     *
     * @return bool
     */
    public function getIsEuropeanUnionMember()
    {
        return $this->container['is_european_union_member'];
    }

    /**
     * Sets is_european_union_member
     *
     * @param bool $is_european_union_member True if this country is currently a member of the European Union (EU), false otherwise
     *
     * @return $this
     */
    public function setIsEuropeanUnionMember($is_european_union_member)
    {
        $this->container['is_european_union_member'] = $is_european_union_member;

        return $this;
    }

    /**
     * Gets timezones
     *
     * @return \Swagger\Client\Model\Timezone[]
     */
    public function getTimezones()
    {
        return $this->container['timezones'];
    }

    /**
     * Sets timezones
     *
     * @param \Swagger\Client\Model\Timezone[] $timezones Time zones (IANA/Olsen) in the country
     *
     * @return $this
     */
    public function setTimezones($timezones)
    {
        $this->container['timezones'] = $timezones;

        return $this;
    }

    /**
     * Gets iso_currency_code
     *
     * @return string
     */
    public function getIsoCurrencyCode()
    {
        return $this->container['iso_currency_code'];
    }

    /**
     * Sets iso_currency_code
     *
     * @param string $iso_currency_code ISO 4217 currency three-letter code associated with the country
     *
     * @return $this
     */
    public function setIsoCurrencyCode($iso_currency_code)
    {
        $this->container['iso_currency_code'] = $iso_currency_code;

        return $this;
    }

    /**
     * Gets currency_symbol
     *
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->container['currency_symbol'];
    }

    /**
     * Sets currency_symbol
     *
     * @param string $currency_symbol Symbol associated with the currency
     *
     * @return $this
     */
    public function setCurrencySymbol($currency_symbol)
    {
        $this->container['currency_symbol'] = $currency_symbol;

        return $this;
    }

    /**
     * Gets currency_english_name
     *
     * @return string
     */
    public function getCurrencyEnglishName()
    {
        return $this->container['currency_english_name'];
    }

    /**
     * Sets currency_english_name
     *
     * @param string $currency_english_name Full name of the currency
     *
     * @return $this
     */
    public function setCurrencyEnglishName($currency_english_name)
    {
        $this->container['currency_english_name'] = $currency_english_name;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region Region (continent) in which the country is located; possible values are None, Europe, Americas, Asia, Africa, Oceania
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets subregion
     *
     * @return string
     */
    public function getSubregion()
    {
        return $this->container['subregion'];
    }

    /**
     * Sets subregion
     *
     * @param string $subregion Subregion in which the country is located; possible values are None, NorthernEurope, WesternEurope, SouthernEurope, EasternEurope, CentralAmerica, NorthernAmerica, SouthAmerica, EasternAfrica, MiddleAfrica, NorthernAfrica , SouthernAfrica , WesternAfrica , CentralAsia , EasternAsia , SouthernAsia , SouthEasternAsia , WesternAsia , Southern , Middle , AustraliaandNewZealand , Melanesia , Polynesia , Micronesia , Caribbean,
     *
     * @return $this
     */
    public function setSubregion($subregion)
    {
        $this->container['subregion'] = $subregion;

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


