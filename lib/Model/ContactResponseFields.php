<?php
/**
 * ContactResponseFields
 *
 * PHP version 5
 *
 * @category Class
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Messente API
 *
 * [Messente](https://messente.com) is a global provider of messaging and user verification services.  * Send and receive SMS, Viber, WhatsApp and Telegram messages. * Manage contacts and groups. * Fetch detailed info about phone numbers. * Blacklist phone numbers to make sure you're not sending any unwanted messages.  Messente builds [tools](https://messente.com/documentation) to help organizations connect their services to people anywhere in the world.
 *
 * The version of the OpenAPI document: 1.4.0
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Api\Model;

use \ArrayAccess;
use \Messente\Api\ObjectSerializer;

/**
 * ContactResponseFields Class Doc Comment
 *
 * @category Class
 * @description A container for response fields of a contact
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactResponseFields implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactResponseFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phoneNumber' => 'string',
        'email' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'company' => 'string',
        'title' => 'string',
        'custom' => 'string',
        'custom2' => 'string',
        'custom3' => 'string',
        'custom4' => 'string',
        'scheduledDeletionDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'phoneNumber' => null,
        'email' => null,
        'firstName' => null,
        'lastName' => null,
        'company' => null,
        'title' => null,
        'custom' => null,
        'custom2' => null,
        'custom3' => null,
        'custom4' => null,
        'scheduledDeletionDate' => 'date'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'phoneNumber' => false,
        'email' => true,
        'firstName' => true,
        'lastName' => true,
        'company' => true,
        'title' => true,
        'custom' => true,
        'custom2' => true,
        'custom3' => true,
        'custom4' => true,
        'scheduledDeletionDate' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of property to nullable mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPINullables()
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array
     */
    public function getOpenAPINullablesSetToNull()
    {
        return $this->openAPINullablesSetToNull;
    }

    public function setOpenAPINullablesSetToNull($nullablesSetToNull)
    {
        $this->openAPINullablesSetToNull=$nullablesSetToNull;

        return $this;
    }

    /**
     * Checks if a property is nullable
     *
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        if (isset(self::$openAPINullables[$property])) {
            return self::$openAPINullables[$property];
        }

        return false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        if (in_array($property, $this->getOpenAPINullablesSetToNull())) {
            return true;
        }
        return false;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'phoneNumber' => 'phoneNumber',
        'email' => 'email',
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'company' => 'company',
        'title' => 'title',
        'custom' => 'custom',
        'custom2' => 'custom2',
        'custom3' => 'custom3',
        'custom4' => 'custom4',
        'scheduledDeletionDate' => 'scheduledDeletionDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phoneNumber' => 'setPhoneNumber',
        'email' => 'setEmail',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'company' => 'setCompany',
        'title' => 'setTitle',
        'custom' => 'setCustom',
        'custom2' => 'setCustom2',
        'custom3' => 'setCustom3',
        'custom4' => 'setCustom4',
        'scheduledDeletionDate' => 'setScheduledDeletionDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phoneNumber' => 'getPhoneNumber',
        'email' => 'getEmail',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'company' => 'getCompany',
        'title' => 'getTitle',
        'custom' => 'getCustom',
        'custom2' => 'getCustom2',
        'custom3' => 'getCustom3',
        'custom4' => 'getCustom4',
        'scheduledDeletionDate' => 'getScheduledDeletionDate'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('phoneNumber', $data, null);
        $this->setIfExists('email', $data, null);
        $this->setIfExists('firstName', $data, null);
        $this->setIfExists('lastName', $data, null);
        $this->setIfExists('company', $data, null);
        $this->setIfExists('title', $data, null);
        $this->setIfExists('custom', $data, null);
        $this->setIfExists('custom2', $data, null);
        $this->setIfExists('custom3', $data, null);
        $this->setIfExists('custom4', $data, null);
        $this->setIfExists('scheduledDeletionDate', $data, null);
    }

    public function setIfExists(string $variableName, $fields, $defaultValue)
    {
        if (is_array($fields) && array_key_exists($variableName, $fields) && is_null($fields[$variableName]) && self::isNullable($variableName)) {
            array_push($this->openAPINullablesSetToNull, $variableName);
        }

        $this->container[$variableName] = isset($fields[$variableName]) ? $fields[$variableName] : $defaultValue;

        return $this;
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
     * Gets phoneNumber
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string|null $phoneNumber Phone number in e.164 format
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {


        if (is_null($phoneNumber)) {
            throw new \InvalidArgumentException('non-nullable phoneNumber cannot be null');
        }

        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The email of the contact
     *
     * @return $this
     */
    public function setEmail($email)
    {

        if (is_null($email)) {
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName The first name of the contact
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {

        if (is_null($firstName)) {
            array_push($this->openAPINullablesSetToNull, 'firstName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('firstName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string|null $lastName The last name of the contact
     *
     * @return $this
     */
    public function setLastName($lastName)
    {

        if (is_null($lastName)) {
            array_push($this->openAPINullablesSetToNull, 'lastName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company The company of the contact
     *
     * @return $this
     */
    public function setCompany($company)
    {

        if (is_null($company)) {
            array_push($this->openAPINullablesSetToNull, 'company');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of the contact
     *
     * @return $this
     */
    public function setTitle($title)
    {

        if (is_null($title)) {
            array_push($this->openAPINullablesSetToNull, 'title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets custom
     *
     * @return string|null
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param string|null $custom The first custom field
     *
     * @return $this
     */
    public function setCustom($custom)
    {

        if (is_null($custom)) {
            array_push($this->openAPINullablesSetToNull, 'custom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets custom2
     *
     * @return string|null
     */
    public function getCustom2()
    {
        return $this->container['custom2'];
    }

    /**
     * Sets custom2
     *
     * @param string|null $custom2 The second custom field
     *
     * @return $this
     */
    public function setCustom2($custom2)
    {

        if (is_null($custom2)) {
            array_push($this->openAPINullablesSetToNull, 'custom2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['custom2'] = $custom2;

        return $this;
    }

    /**
     * Gets custom3
     *
     * @return string|null
     */
    public function getCustom3()
    {
        return $this->container['custom3'];
    }

    /**
     * Sets custom3
     *
     * @param string|null $custom3 The third custom field
     *
     * @return $this
     */
    public function setCustom3($custom3)
    {

        if (is_null($custom3)) {
            array_push($this->openAPINullablesSetToNull, 'custom3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['custom3'] = $custom3;

        return $this;
    }

    /**
     * Gets custom4
     *
     * @return string|null
     */
    public function getCustom4()
    {
        return $this->container['custom4'];
    }

    /**
     * Sets custom4
     *
     * @param string|null $custom4 The fourth custom field
     *
     * @return $this
     */
    public function setCustom4($custom4)
    {

        if (is_null($custom4)) {
            array_push($this->openAPINullablesSetToNull, 'custom4');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom4', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['custom4'] = $custom4;

        return $this;
    }

    /**
     * Gets scheduledDeletionDate
     *
     * @return \DateTime|null
     */
    public function getScheduledDeletionDate()
    {
        return $this->container['scheduledDeletionDate'];
    }

    /**
     * Sets scheduledDeletionDate
     *
     * @param \DateTime|null $scheduledDeletionDate The date in ISO 8601 format, YYYY-MM-DD,  on which the contact is going to be deleted  because it has not belonged to a group for 30 days
     *
     * @return $this
     */
    public function setScheduledDeletionDate($scheduledDeletionDate)
    {

        if (is_null($scheduledDeletionDate)) {
            array_push($this->openAPINullablesSetToNull, 'scheduledDeletionDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('scheduledDeletionDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['scheduledDeletionDate'] = $scheduledDeletionDate;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


