<?php
/**
 * WebhookNewSmsPayload
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MailSlurp API
 *
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.  ## Resources  - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://docs.mailslurp.com/) - [Examples](https://github.com/mailslurp/examples) repository
 *
 * The version of the OpenAPI document: 6.5.2
 * Contact: contact@mailslurp.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MailSlurp\Models;

use \ArrayAccess;
use \MailSlurp\ObjectSerializer;

/**
 * WebhookNewSmsPayload Class Doc Comment
 *
 * @category Class
 * @description NEW_SMS webhook payload. Sent to your webhook url endpoint via HTTP POST when an sms is received by the phone number that your webhook is attached to. Use the SMS ID to fetch the full SMS details.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookNewSmsPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookNewSmsPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'message_id' => 'string',
        'webhook_id' => 'string',
        'event_name' => 'string',
        'webhook_name' => 'string',
        'sms_id' => 'string',
        'user_id' => 'string',
        'phone_number' => 'string',
        'to_number' => 'string',
        'from_number' => 'string',
        'body' => 'string',
        'read' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'message_id' => null,
        'webhook_id' => 'uuid',
        'event_name' => null,
        'webhook_name' => null,
        'sms_id' => 'uuid',
        'user_id' => 'uuid',
        'phone_number' => 'uuid',
        'to_number' => null,
        'from_number' => null,
        'body' => null,
        'read' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'message_id' => false,
		'webhook_id' => false,
		'event_name' => false,
		'webhook_name' => true,
		'sms_id' => false,
		'user_id' => false,
		'phone_number' => false,
		'to_number' => false,
		'from_number' => false,
		'body' => false,
		'read' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'message_id' => 'messageId',
        'webhook_id' => 'webhookId',
        'event_name' => 'eventName',
        'webhook_name' => 'webhookName',
        'sms_id' => 'smsId',
        'user_id' => 'userId',
        'phone_number' => 'phoneNumber',
        'to_number' => 'toNumber',
        'from_number' => 'fromNumber',
        'body' => 'body',
        'read' => 'read'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message_id' => 'setMessageId',
        'webhook_id' => 'setWebhookId',
        'event_name' => 'setEventName',
        'webhook_name' => 'setWebhookName',
        'sms_id' => 'setSmsId',
        'user_id' => 'setUserId',
        'phone_number' => 'setPhoneNumber',
        'to_number' => 'setToNumber',
        'from_number' => 'setFromNumber',
        'body' => 'setBody',
        'read' => 'setRead'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message_id' => 'getMessageId',
        'webhook_id' => 'getWebhookId',
        'event_name' => 'getEventName',
        'webhook_name' => 'getWebhookName',
        'sms_id' => 'getSmsId',
        'user_id' => 'getUserId',
        'phone_number' => 'getPhoneNumber',
        'to_number' => 'getToNumber',
        'from_number' => 'getFromNumber',
        'body' => 'getBody',
        'read' => 'getRead'
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

    public const EVENT_NAME_EMAIL_RECEIVED = 'EMAIL_RECEIVED';
    public const EVENT_NAME_NEW_EMAIL = 'NEW_EMAIL';
    public const EVENT_NAME_NEW_CONTACT = 'NEW_CONTACT';
    public const EVENT_NAME_NEW_ATTACHMENT = 'NEW_ATTACHMENT';
    public const EVENT_NAME_EMAIL_OPENED = 'EMAIL_OPENED';
    public const EVENT_NAME_EMAIL_READ = 'EMAIL_READ';
    public const EVENT_NAME_DELIVERY_STATUS = 'DELIVERY_STATUS';
    public const EVENT_NAME_BOUNCE = 'BOUNCE';
    public const EVENT_NAME_BOUNCE_RECIPIENT = 'BOUNCE_RECIPIENT';
    public const EVENT_NAME_NEW_SMS = 'NEW_SMS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventNameAllowableValues()
    {
        return [
            self::EVENT_NAME_EMAIL_RECEIVED,
            self::EVENT_NAME_NEW_EMAIL,
            self::EVENT_NAME_NEW_CONTACT,
            self::EVENT_NAME_NEW_ATTACHMENT,
            self::EVENT_NAME_EMAIL_OPENED,
            self::EVENT_NAME_EMAIL_READ,
            self::EVENT_NAME_DELIVERY_STATUS,
            self::EVENT_NAME_BOUNCE,
            self::EVENT_NAME_BOUNCE_RECIPIENT,
            self::EVENT_NAME_NEW_SMS,
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
        $this->setIfExists('message_id', $data ?? [], null);
        $this->setIfExists('webhook_id', $data ?? [], null);
        $this->setIfExists('event_name', $data ?? [], null);
        $this->setIfExists('webhook_name', $data ?? [], null);
        $this->setIfExists('sms_id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('to_number', $data ?? [], null);
        $this->setIfExists('from_number', $data ?? [], null);
        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('read', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['message_id'] === null) {
            $invalidProperties[] = "'message_id' can't be null";
        }
        if ($this->container['webhook_id'] === null) {
            $invalidProperties[] = "'webhook_id' can't be null";
        }
        if ($this->container['event_name'] === null) {
            $invalidProperties[] = "'event_name' can't be null";
        }
        $allowedValues = $this->getEventNameAllowableValues();
        if (!is_null($this->container['event_name']) && !in_array($this->container['event_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_name', must be one of '%s'",
                $this->container['event_name'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sms_id'] === null) {
            $invalidProperties[] = "'sms_id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ($this->container['to_number'] === null) {
            $invalidProperties[] = "'to_number' can't be null";
        }
        if ($this->container['from_number'] === null) {
            $invalidProperties[] = "'from_number' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['read'] === null) {
            $invalidProperties[] = "'read' can't be null";
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
     * Gets message_id
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string $message_id Idempotent message ID. Store this ID locally or in a database to prevent message duplication.
     *
     * @return self
     */
    public function setMessageId($message_id)
    {

        if (is_null($message_id)) {
            throw new \InvalidArgumentException('non-nullable message_id cannot be null');
        }

        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets webhook_id
     *
     * @return string
     */
    public function getWebhookId()
    {
        return $this->container['webhook_id'];
    }

    /**
     * Sets webhook_id
     *
     * @param string $webhook_id ID of webhook entity being triggered
     *
     * @return self
     */
    public function setWebhookId($webhook_id)
    {

        if (is_null($webhook_id)) {
            throw new \InvalidArgumentException('non-nullable webhook_id cannot be null');
        }

        $this->container['webhook_id'] = $webhook_id;

        return $this;
    }

    /**
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name Name of the event type webhook is being triggered for.
     *
     * @return self
     */
    public function setEventName($event_name)
    {
        $allowedValues = $this->getEventNameAllowableValues();
        if (!in_array($event_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_name', must be one of '%s'",
                    $event_name,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($event_name)) {
            throw new \InvalidArgumentException('non-nullable event_name cannot be null');
        }

        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets webhook_name
     *
     * @return string|null
     */
    public function getWebhookName()
    {
        return $this->container['webhook_name'];
    }

    /**
     * Sets webhook_name
     *
     * @param string|null $webhook_name Name of the webhook being triggered
     *
     * @return self
     */
    public function setWebhookName($webhook_name)
    {

        if (is_null($webhook_name)) {
            array_push($this->openAPINullablesSetToNull, 'webhook_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('webhook_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['webhook_name'] = $webhook_name;

        return $this;
    }

    /**
     * Gets sms_id
     *
     * @return string
     */
    public function getSmsId()
    {
        return $this->container['sms_id'];
    }

    /**
     * Sets sms_id
     *
     * @param string $sms_id ID of SMS message
     *
     * @return self
     */
    public function setSmsId($sms_id)
    {

        if (is_null($sms_id)) {
            throw new \InvalidArgumentException('non-nullable sms_id cannot be null');
        }

        $this->container['sms_id'] = $sms_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id User ID of event
     *
     * @return self
     */
    public function setUserId($user_id)
    {

        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }

        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number ID of phone number receiving SMS
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {

        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets to_number
     *
     * @return string
     */
    public function getToNumber()
    {
        return $this->container['to_number'];
    }

    /**
     * Sets to_number
     *
     * @param string $to_number Recipient phone number
     *
     * @return self
     */
    public function setToNumber($to_number)
    {

        if (is_null($to_number)) {
            throw new \InvalidArgumentException('non-nullable to_number cannot be null');
        }

        $this->container['to_number'] = $to_number;

        return $this;
    }

    /**
     * Gets from_number
     *
     * @return string
     */
    public function getFromNumber()
    {
        return $this->container['from_number'];
    }

    /**
     * Sets from_number
     *
     * @param string $from_number Sender phone number
     *
     * @return self
     */
    public function setFromNumber($from_number)
    {

        if (is_null($from_number)) {
            throw new \InvalidArgumentException('non-nullable from_number cannot be null');
        }

        $this->container['from_number'] = $from_number;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body SMS message body
     *
     * @return self
     */
    public function setBody($body)
    {

        if (is_null($body)) {
            throw new \InvalidArgumentException('non-nullable body cannot be null');
        }

        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets read
     *
     * @return bool
     */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
     * Sets read
     *
     * @param bool $read SMS has been read
     *
     * @return self
     */
    public function setRead($read)
    {

        if (is_null($read)) {
            throw new \InvalidArgumentException('non-nullable read cannot be null');
        }

        $this->container['read'] = $read;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

