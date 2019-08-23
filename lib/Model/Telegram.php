<?php
/**
 * Telegram
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
 * [Messente](https://messente.com) is a global provider of messaging and user verification services. Use Messente API library to send and receive SMS, Viber, WhatsApp and Telegram messages, blacklist phone numbers to make sure you're not sending any unwanted messages, manage contacts and groups.  Messente builds [tools](https://messente.com/documentation) to help organizations connect their services to people anywhere in the world.
 *
 * The version of the OpenAPI document: 1.1.0
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
 * Telegram Class Doc Comment
 *
 * @category Class
 * @description Telegram message content
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Telegram implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Telegram';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sender' => 'string',
        'validity' => 'int',
        'text' => 'string',
        'imageUrl' => 'string',
        'documentUrl' => 'string',
        'audioUrl' => 'string',
        'channel' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sender' => null,
        'validity' => null,
        'text' => null,
        'imageUrl' => null,
        'documentUrl' => null,
        'audioUrl' => null,
        'channel' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'sender' => false,
        'validity' => false,
        'text' => false,
        'imageUrl' => false,
        'documentUrl' => false,
        'audioUrl' => false,
        'channel' => false
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
        'sender' => 'sender',
        'validity' => 'validity',
        'text' => 'text',
        'imageUrl' => 'image_url',
        'documentUrl' => 'document_url',
        'audioUrl' => 'audio_url',
        'channel' => 'channel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sender' => 'setSender',
        'validity' => 'setValidity',
        'text' => 'setText',
        'imageUrl' => 'setImageUrl',
        'documentUrl' => 'setDocumentUrl',
        'audioUrl' => 'setAudioUrl',
        'channel' => 'setChannel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sender' => 'getSender',
        'validity' => 'getValidity',
        'text' => 'getText',
        'imageUrl' => 'getImageUrl',
        'documentUrl' => 'getDocumentUrl',
        'audioUrl' => 'getAudioUrl',
        'channel' => 'getChannel'
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

    const CHANNEL_TELEGRAM = 'telegram';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChannelAllowableValues()
    {
        return [
            self::CHANNEL_TELEGRAM,
        ];
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
        $this->setIfExists('sender', $data, null);
        $this->setIfExists('validity', $data, null);
        $this->setIfExists('text', $data, null);
        $this->setIfExists('imageUrl', $data, null);
        $this->setIfExists('documentUrl', $data, null);
        $this->setIfExists('audioUrl', $data, null);
        $this->setIfExists('channel', $data, 'telegram');
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

        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($this->container['channel']) && !in_array($this->container['channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'channel', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets sender
     *
     * @return string|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string|null $sender Phone number or alphanumeric sender name
     *
     * @return $this
     */
    public function setSender($sender)
    {


        if (is_null($sender)) {
            throw new \InvalidArgumentException('non-nullable sender cannot be null');
        }

        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets validity
     *
     * @return int|null
     */
    public function getValidity()
    {
        return $this->container['validity'];
    }

    /**
     * Sets validity
     *
     * @param int|null $validity After how many minutes this channel is considered as failed and the next channel is attempted
     *
     * @return $this
     */
    public function setValidity($validity)
    {


        if (is_null($validity)) {
            throw new \InvalidArgumentException('non-nullable validity cannot be null');
        }

        $this->container['validity'] = $validity;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Plaintext content for Telegram
     *
     * @return $this
     */
    public function setText($text)
    {


        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }

        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string|null $imageUrl URL for the embedded image. Mutually exclusive with \"document_url\" and \"audio_url\"
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {


        if (is_null($imageUrl)) {
            throw new \InvalidArgumentException('non-nullable imageUrl cannot be null');
        }

        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets documentUrl
     *
     * @return string|null
     */
    public function getDocumentUrl()
    {
        return $this->container['documentUrl'];
    }

    /**
     * Sets documentUrl
     *
     * @param string|null $documentUrl URL for the embedded image. Mutually exclusive with \"audio_url\" and \"image_url\"
     *
     * @return $this
     */
    public function setDocumentUrl($documentUrl)
    {


        if (is_null($documentUrl)) {
            throw new \InvalidArgumentException('non-nullable documentUrl cannot be null');
        }

        $this->container['documentUrl'] = $documentUrl;

        return $this;
    }

    /**
     * Gets audioUrl
     *
     * @return string|null
     */
    public function getAudioUrl()
    {
        return $this->container['audioUrl'];
    }

    /**
     * Sets audioUrl
     *
     * @param string|null $audioUrl URL for the embedded image. Mutually exclusive with \"document_url\" and \"image_url\"
     *
     * @return $this
     */
    public function setAudioUrl($audioUrl)
    {


        if (is_null($audioUrl)) {
            throw new \InvalidArgumentException('non-nullable audioUrl cannot be null');
        }

        $this->container['audioUrl'] = $audioUrl;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string|null $channel The channel used to deliver the message
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($channel) && !in_array($channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'channel', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }

        $this->container['channel'] = $channel;

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


