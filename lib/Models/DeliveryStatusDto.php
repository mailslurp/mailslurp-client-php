<?php
/**
 * DeliveryStatusDto
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
 * MailSlurp is an API for sending and receiving emails and SMS from dynamically allocated email addresses and phone numbers. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.  ## Resources  - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://docs.mailslurp.com/) - [Examples](https://github.com/mailslurp/examples) repository
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
 * DeliveryStatusDto Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DeliveryStatusDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryStatusDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'sent_id' => 'string',
        'remote_mta_ip' => 'string',
        'inbox_id' => 'string',
        'reporting_mta' => 'string',
        'recipients' => 'string[]',
        'smtp_response' => 'string',
        'smtp_status_code' => 'int',
        'processing_time_millis' => 'int',
        'received' => '\DateTime',
        'subject' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'user_id' => 'uuid',
        'sent_id' => 'uuid',
        'remote_mta_ip' => null,
        'inbox_id' => 'uuid',
        'reporting_mta' => null,
        'recipients' => null,
        'smtp_response' => null,
        'smtp_status_code' => 'int32',
        'processing_time_millis' => 'int64',
        'received' => 'date-time',
        'subject' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'user_id' => false,
		'sent_id' => false,
		'remote_mta_ip' => false,
		'inbox_id' => false,
		'reporting_mta' => false,
		'recipients' => false,
		'smtp_response' => false,
		'smtp_status_code' => false,
		'processing_time_millis' => false,
		'received' => false,
		'subject' => false,
		'created_at' => false,
		'updated_at' => false
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
        'id' => 'id',
        'user_id' => 'userId',
        'sent_id' => 'sentId',
        'remote_mta_ip' => 'remoteMtaIp',
        'inbox_id' => 'inboxId',
        'reporting_mta' => 'reportingMta',
        'recipients' => 'recipients',
        'smtp_response' => 'smtpResponse',
        'smtp_status_code' => 'smtpStatusCode',
        'processing_time_millis' => 'processingTimeMillis',
        'received' => 'received',
        'subject' => 'subject',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'sent_id' => 'setSentId',
        'remote_mta_ip' => 'setRemoteMtaIp',
        'inbox_id' => 'setInboxId',
        'reporting_mta' => 'setReportingMta',
        'recipients' => 'setRecipients',
        'smtp_response' => 'setSmtpResponse',
        'smtp_status_code' => 'setSmtpStatusCode',
        'processing_time_millis' => 'setProcessingTimeMillis',
        'received' => 'setReceived',
        'subject' => 'setSubject',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'sent_id' => 'getSentId',
        'remote_mta_ip' => 'getRemoteMtaIp',
        'inbox_id' => 'getInboxId',
        'reporting_mta' => 'getReportingMta',
        'recipients' => 'getRecipients',
        'smtp_response' => 'getSmtpResponse',
        'smtp_status_code' => 'getSmtpStatusCode',
        'processing_time_millis' => 'getProcessingTimeMillis',
        'received' => 'getReceived',
        'subject' => 'getSubject',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('sent_id', $data ?? [], null);
        $this->setIfExists('remote_mta_ip', $data ?? [], null);
        $this->setIfExists('inbox_id', $data ?? [], null);
        $this->setIfExists('reporting_mta', $data ?? [], null);
        $this->setIfExists('recipients', $data ?? [], null);
        $this->setIfExists('smtp_response', $data ?? [], null);
        $this->setIfExists('smtp_status_code', $data ?? [], null);
        $this->setIfExists('processing_time_millis', $data ?? [], null);
        $this->setIfExists('received', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

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
     * @param string $user_id user_id
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
     * Gets sent_id
     *
     * @return string|null
     */
    public function getSentId()
    {
        return $this->container['sent_id'];
    }

    /**
     * Sets sent_id
     *
     * @param string|null $sent_id sent_id
     *
     * @return self
     */
    public function setSentId($sent_id)
    {

        if (is_null($sent_id)) {
            throw new \InvalidArgumentException('non-nullable sent_id cannot be null');
        }

        $this->container['sent_id'] = $sent_id;

        return $this;
    }

    /**
     * Gets remote_mta_ip
     *
     * @return string|null
     */
    public function getRemoteMtaIp()
    {
        return $this->container['remote_mta_ip'];
    }

    /**
     * Sets remote_mta_ip
     *
     * @param string|null $remote_mta_ip remote_mta_ip
     *
     * @return self
     */
    public function setRemoteMtaIp($remote_mta_ip)
    {

        if (is_null($remote_mta_ip)) {
            throw new \InvalidArgumentException('non-nullable remote_mta_ip cannot be null');
        }

        $this->container['remote_mta_ip'] = $remote_mta_ip;

        return $this;
    }

    /**
     * Gets inbox_id
     *
     * @return string|null
     */
    public function getInboxId()
    {
        return $this->container['inbox_id'];
    }

    /**
     * Sets inbox_id
     *
     * @param string|null $inbox_id inbox_id
     *
     * @return self
     */
    public function setInboxId($inbox_id)
    {

        if (is_null($inbox_id)) {
            throw new \InvalidArgumentException('non-nullable inbox_id cannot be null');
        }

        $this->container['inbox_id'] = $inbox_id;

        return $this;
    }

    /**
     * Gets reporting_mta
     *
     * @return string|null
     */
    public function getReportingMta()
    {
        return $this->container['reporting_mta'];
    }

    /**
     * Sets reporting_mta
     *
     * @param string|null $reporting_mta reporting_mta
     *
     * @return self
     */
    public function setReportingMta($reporting_mta)
    {

        if (is_null($reporting_mta)) {
            throw new \InvalidArgumentException('non-nullable reporting_mta cannot be null');
        }

        $this->container['reporting_mta'] = $reporting_mta;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return string[]|null
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param string[]|null $recipients recipients
     *
     * @return self
     */
    public function setRecipients($recipients)
    {

        if (is_null($recipients)) {
            throw new \InvalidArgumentException('non-nullable recipients cannot be null');
        }

        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets smtp_response
     *
     * @return string|null
     */
    public function getSmtpResponse()
    {
        return $this->container['smtp_response'];
    }

    /**
     * Sets smtp_response
     *
     * @param string|null $smtp_response smtp_response
     *
     * @return self
     */
    public function setSmtpResponse($smtp_response)
    {

        if (is_null($smtp_response)) {
            throw new \InvalidArgumentException('non-nullable smtp_response cannot be null');
        }

        $this->container['smtp_response'] = $smtp_response;

        return $this;
    }

    /**
     * Gets smtp_status_code
     *
     * @return int|null
     */
    public function getSmtpStatusCode()
    {
        return $this->container['smtp_status_code'];
    }

    /**
     * Sets smtp_status_code
     *
     * @param int|null $smtp_status_code smtp_status_code
     *
     * @return self
     */
    public function setSmtpStatusCode($smtp_status_code)
    {

        if (is_null($smtp_status_code)) {
            throw new \InvalidArgumentException('non-nullable smtp_status_code cannot be null');
        }

        $this->container['smtp_status_code'] = $smtp_status_code;

        return $this;
    }

    /**
     * Gets processing_time_millis
     *
     * @return int|null
     */
    public function getProcessingTimeMillis()
    {
        return $this->container['processing_time_millis'];
    }

    /**
     * Sets processing_time_millis
     *
     * @param int|null $processing_time_millis processing_time_millis
     *
     * @return self
     */
    public function setProcessingTimeMillis($processing_time_millis)
    {

        if (is_null($processing_time_millis)) {
            throw new \InvalidArgumentException('non-nullable processing_time_millis cannot be null');
        }

        $this->container['processing_time_millis'] = $processing_time_millis;

        return $this;
    }

    /**
     * Gets received
     *
     * @return \DateTime|null
     */
    public function getReceived()
    {
        return $this->container['received'];
    }

    /**
     * Sets received
     *
     * @param \DateTime|null $received received
     *
     * @return self
     */
    public function setReceived($received)
    {

        if (is_null($received)) {
            throw new \InvalidArgumentException('non-nullable received cannot be null');
        }

        $this->container['received'] = $received;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {

        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {

        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }

        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {

        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }

        $this->container['updated_at'] = $updated_at;

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


