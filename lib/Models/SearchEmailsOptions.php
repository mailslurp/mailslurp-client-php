<?php
/**
 * SearchEmailsOptions
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
 * SearchEmailsOptions Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SearchEmailsOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchEmailsOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inbox_ids' => 'string[]',
        'page_index' => 'int',
        'page_size' => 'int',
        'sort_direction' => 'string',
        'unread_only' => 'bool',
        'search_filter' => 'string',
        'since' => '\DateTime',
        'before' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inbox_ids' => 'uuid',
        'page_index' => 'int32',
        'page_size' => 'int32',
        'sort_direction' => null,
        'unread_only' => null,
        'search_filter' => null,
        'since' => 'date-time',
        'before' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inbox_ids' => false,
		'page_index' => false,
		'page_size' => false,
		'sort_direction' => false,
		'unread_only' => false,
		'search_filter' => false,
		'since' => false,
		'before' => false
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
        'inbox_ids' => 'inboxIds',
        'page_index' => 'pageIndex',
        'page_size' => 'pageSize',
        'sort_direction' => 'sortDirection',
        'unread_only' => 'unreadOnly',
        'search_filter' => 'searchFilter',
        'since' => 'since',
        'before' => 'before'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inbox_ids' => 'setInboxIds',
        'page_index' => 'setPageIndex',
        'page_size' => 'setPageSize',
        'sort_direction' => 'setSortDirection',
        'unread_only' => 'setUnreadOnly',
        'search_filter' => 'setSearchFilter',
        'since' => 'setSince',
        'before' => 'setBefore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inbox_ids' => 'getInboxIds',
        'page_index' => 'getPageIndex',
        'page_size' => 'getPageSize',
        'sort_direction' => 'getSortDirection',
        'unread_only' => 'getUnreadOnly',
        'search_filter' => 'getSearchFilter',
        'since' => 'getSince',
        'before' => 'getBefore'
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
        $this->setIfExists('inbox_ids', $data ?? [], null);
        $this->setIfExists('page_index', $data ?? [], null);
        $this->setIfExists('page_size', $data ?? [], null);
        $this->setIfExists('sort_direction', $data ?? [], null);
        $this->setIfExists('unread_only', $data ?? [], null);
        $this->setIfExists('search_filter', $data ?? [], null);
        $this->setIfExists('since', $data ?? [], null);
        $this->setIfExists('before', $data ?? [], null);
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

        if (!is_null($this->container['page_size']) && ($this->container['page_size'] > 100)) {
            $invalidProperties[] = "invalid value for 'page_size', must be smaller than or equal to 100.";
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
     * Gets inbox_ids
     *
     * @return string[]|null
     */
    public function getInboxIds()
    {
        return $this->container['inbox_ids'];
    }

    /**
     * Sets inbox_ids
     *
     * @param string[]|null $inbox_ids Optional inbox ids to filter by. Can be repeated. By default will use all inboxes belonging to your account.
     *
     * @return self
     */
    public function setInboxIds($inbox_ids)
    {

        if (is_null($inbox_ids)) {
            throw new \InvalidArgumentException('non-nullable inbox_ids cannot be null');
        }

        $this->container['inbox_ids'] = $inbox_ids;

        return $this;
    }

    /**
     * Gets page_index
     *
     * @return int|null
     */
    public function getPageIndex()
    {
        return $this->container['page_index'];
    }

    /**
     * Sets page_index
     *
     * @param int|null $page_index Optional page index in email list pagination
     *
     * @return self
     */
    public function setPageIndex($page_index)
    {

        if (is_null($page_index)) {
            throw new \InvalidArgumentException('non-nullable page_index cannot be null');
        }

        $this->container['page_index'] = $page_index;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int|null $page_size Optional page size in email list pagination. Maximum size is 100. Use page index and sort to page through larger results
     *
     * @return self
     */
    public function setPageSize($page_size)
    {

        if (!is_null($page_size) && ($page_size > 100)) {
            throw new \InvalidArgumentException('invalid value for $page_size when calling SearchEmailsOptions., must be smaller than or equal to 100.');
        }


        if (is_null($page_size)) {
            throw new \InvalidArgumentException('non-nullable page_size cannot be null');
        }

        $this->container['page_size'] = $page_size;

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
     * @param string|null $sort_direction Optional createdAt sort direction ASC or DESC
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
     * @param bool|null $unread_only Optional filter for unread emails only. All emails are considered unread until they are viewed in the dashboard or requested directly
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
     * Gets search_filter
     *
     * @return string|null
     */
    public function getSearchFilter()
    {
        return $this->container['search_filter'];
    }

    /**
     * Sets search_filter
     *
     * @param string|null $search_filter Optional search filter. Searches email recipients, sender, subject, email address and ID. Does not search email body
     *
     * @return self
     */
    public function setSearchFilter($search_filter)
    {

        if (is_null($search_filter)) {
            throw new \InvalidArgumentException('non-nullable search_filter cannot be null');
        }

        $this->container['search_filter'] = $search_filter;

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
     * @param \DateTime|null $since Optional filter emails received after given date time
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
     * @param \DateTime|null $before Optional filter emails received before given date time
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


