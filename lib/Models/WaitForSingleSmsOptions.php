<?php
/**
 * WaitForSingleSmsOptions
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
 * WaitForSingleSmsOptions Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WaitForSingleSmsOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WaitForSingleSmsOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phone_number_id' => 'string',
        'timeout' => 'int',
        'unread_only' => 'bool',
        'before' => '\DateTime',
        'since' => '\DateTime',
        'sort_direction' => 'string',
        'delay' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'phone_number_id' => 'uuid',
        'timeout' => 'int64',
        'unread_only' => null,
        'before' => 'date-time',
        'since' => 'date-time',
        'sort_direction' => null,
        'delay' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'phone_number_id' => false,
		'timeout' => false,
		'unread_only' => false,
		'before' => false,
		'since' => false,
		'sort_direction' => false,
		'delay' => false
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
        'phone_number_id' => 'phoneNumberId',
        'timeout' => 'timeout',
        'unread_only' => 'unreadOnly',
        'before' => 'before',
        'since' => 'since',
        'sort_direction' => 'sortDirection',
        'delay' => 'delay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone_number_id' => 'setPhoneNumberId',
        'timeout' => 'setTimeout',
        'unread_only' => 'setUnreadOnly',
        'before' => 'setBefore',
        'since' => 'setSince',
        'sort_direction' => 'setSortDirection',
        'delay' => 'setDelay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone_number_id' => 'getPhoneNumberId',
        'timeout' => 'getTimeout',
        'unread_only' => 'getUnreadOnly',
        'before' => 'getBefore',
        'since' => 'getSince',
        'sort_direction' => 'getSortDirection',
        'delay' => 'getDelay'
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

    public const SORT_DIRECTION_ASC = 'ASC';
    public const SORT_DIRECTION_DESC = 'DESC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSortDirectionAllowableValues()
    {
        return [
            self::SORT_DIRECTION_ASC,
            self::SORT_DIRECTION_DESC,
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
        $this->setIfExists('phone_number_id', $data ?? [], null);
        $this->setIfExists('timeout', $data ?? [], null);
        $this->setIfExists('unread_only', $data ?? [], null);
        $this->setIfExists('before', $data ?? [], null);
        $this->setIfExists('since', $data ?? [], null);
        $this->setIfExists('sort_direction', $data ?? [], null);
        $this->setIfExists('delay', $data ?? [], null);
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

        if ($this->container['phone_number_id'] === null) {
            $invalidProperties[] = "'phone_number_id' can't be null";
        }
        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
        $allowedValues = $this->getSortDirectionAllowableValues();
        if (!is_null($this->container['sort_direction']) && !in_array($this->container['sort_direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sort_direction', must be one of '%s'",
                $this->container['sort_direction'],
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
     * Gets phone_number_id
     *
     * @return string
     */
    public function getPhoneNumberId()
    {
        return $this->container['phone_number_id'];
    }

    /**
     * Sets phone_number_id
     *
     * @param string $phone_number_id phone_number_id
     *
     * @return self
     */
    public function setPhoneNumberId($phone_number_id)
    {

        if (is_null($phone_number_id)) {
            throw new \InvalidArgumentException('non-nullable phone_number_id cannot be null');
        }

        $this->container['phone_number_id'] = $phone_number_id;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return int
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param int $timeout timeout
     *
     * @return self
     */
    public function setTimeout($timeout)
    {

        if (is_null($timeout)) {
            throw new \InvalidArgumentException('non-nullable timeout cannot be null');
        }

        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets unread_only
     *
     * @return bool|null
     */
    public function getUnreadOnly()
    {
        return $this->container['unread_only'];
    }

    /**
     * Sets unread_only
     *
     * @param bool|null $unread_only unread_only
     *
     * @return self
     */
    public function setUnreadOnly($unread_only)
    {

        if (is_null($unread_only)) {
            throw new \InvalidArgumentException('non-nullable unread_only cannot be null');
        }

        $this->container['unread_only'] = $unread_only;

        return $this;
    }

    /**
     * Gets before
     *
     * @return \DateTime|null
     */
    public function getBefore()
    {
        return $this->container['before'];
    }

    /**
     * Sets before
     *
     * @param \DateTime|null $before before
     *
     * @return self
     */
    public function setBefore($before)
    {

        if (is_null($before)) {
            throw new \InvalidArgumentException('non-nullable before cannot be null');
        }

        $this->container['before'] = $before;

        return $this;
    }

    /**
     * Gets since
     *
     * @return \DateTime|null
     */
    public function getSince()
    {
        return $this->container['since'];
    }

    /**
     * Sets since
     *
     * @param \DateTime|null $since since
     *
     * @return self
     */
    public function setSince($since)
    {

        if (is_null($since)) {
            throw new \InvalidArgumentException('non-nullable since cannot be null');
        }

        $this->container['since'] = $since;

        return $this;
    }

    /**
     * Gets sort_direction
     *
     * @return string|null
     */
    public function getSortDirection()
    {
        return $this->container['sort_direction'];
    }

    /**
     * Sets sort_direction
     *
     * @param string|null $sort_direction sort_direction
     *
     * @return self
     */
    public function setSortDirection($sort_direction)
    {
        $allowedValues = $this->getSortDirectionAllowableValues();
        if (!is_null($sort_direction) && !in_array($sort_direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sort_direction', must be one of '%s'",
                    $sort_direction,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($sort_direction)) {
            throw new \InvalidArgumentException('non-nullable sort_direction cannot be null');
        }

        $this->container['sort_direction'] = $sort_direction;

        return $this;
    }

    /**
     * Gets delay
     *
     * @return int|null
     */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
     * Sets delay
     *
     * @param int|null $delay delay
     *
     * @return self
     */
    public function setDelay($delay)
    {

        if (is_null($delay)) {
            throw new \InvalidArgumentException('non-nullable delay cannot be null');
        }

        $this->container['delay'] = $delay;

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


