<?php
/**
 * SearchInboxesOptions
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
 * SearchInboxesOptions Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SearchInboxesOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchInboxesOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'page_index' => 'int',
        'page_size' => 'int',
        'sort_direction' => 'string',
        'favourite' => 'bool',
        'search' => 'string',
        'tag' => 'string',
        'since' => '\DateTime',
        'before' => '\DateTime',
        'inbox_type' => 'string',
        'inbox_function' => 'string',
        'domain_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'page_index' => 'int32',
        'page_size' => 'int32',
        'sort_direction' => null,
        'favourite' => null,
        'search' => null,
        'tag' => null,
        'since' => 'date-time',
        'before' => 'date-time',
        'inbox_type' => null,
        'inbox_function' => null,
        'domain_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'page_index' => true,
		'page_size' => true,
		'sort_direction' => true,
		'favourite' => true,
		'search' => true,
		'tag' => true,
		'since' => true,
		'before' => true,
		'inbox_type' => true,
		'inbox_function' => true,
		'domain_id' => true
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
        'page_index' => 'pageIndex',
        'page_size' => 'pageSize',
        'sort_direction' => 'sortDirection',
        'favourite' => 'favourite',
        'search' => 'search',
        'tag' => 'tag',
        'since' => 'since',
        'before' => 'before',
        'inbox_type' => 'inboxType',
        'inbox_function' => 'inboxFunction',
        'domain_id' => 'domainId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page_index' => 'setPageIndex',
        'page_size' => 'setPageSize',
        'sort_direction' => 'setSortDirection',
        'favourite' => 'setFavourite',
        'search' => 'setSearch',
        'tag' => 'setTag',
        'since' => 'setSince',
        'before' => 'setBefore',
        'inbox_type' => 'setInboxType',
        'inbox_function' => 'setInboxFunction',
        'domain_id' => 'setDomainId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page_index' => 'getPageIndex',
        'page_size' => 'getPageSize',
        'sort_direction' => 'getSortDirection',
        'favourite' => 'getFavourite',
        'search' => 'getSearch',
        'tag' => 'getTag',
        'since' => 'getSince',
        'before' => 'getBefore',
        'inbox_type' => 'getInboxType',
        'inbox_function' => 'getInboxFunction',
        'domain_id' => 'getDomainId'
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
    public const INBOX_TYPE_HTTP_INBOX = 'HTTP_INBOX';
    public const INBOX_TYPE_SMTP_INBOX = 'SMTP_INBOX';
    public const INBOX_FUNCTION_ALIAS = 'ALIAS';
    public const INBOX_FUNCTION_THREAD = 'THREAD';
    public const INBOX_FUNCTION_CATCH_ALL = 'CATCH_ALL';
    public const INBOX_FUNCTION_CONNECTOR = 'CONNECTOR';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInboxTypeAllowableValues()
    {
        return [
            self::INBOX_TYPE_HTTP_INBOX,
            self::INBOX_TYPE_SMTP_INBOX,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInboxFunctionAllowableValues()
    {
        return [
            self::INBOX_FUNCTION_ALIAS,
            self::INBOX_FUNCTION_THREAD,
            self::INBOX_FUNCTION_CATCH_ALL,
            self::INBOX_FUNCTION_CONNECTOR,
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
        $this->setIfExists('page_index', $data ?? [], null);
        $this->setIfExists('page_size', $data ?? [], null);
        $this->setIfExists('sort_direction', $data ?? [], null);
        $this->setIfExists('favourite', $data ?? [], null);
        $this->setIfExists('search', $data ?? [], null);
        $this->setIfExists('tag', $data ?? [], null);
        $this->setIfExists('since', $data ?? [], null);
        $this->setIfExists('before', $data ?? [], null);
        $this->setIfExists('inbox_type', $data ?? [], null);
        $this->setIfExists('inbox_function', $data ?? [], null);
        $this->setIfExists('domain_id', $data ?? [], null);
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

        $allowedValues = $this->getSortDirectionAllowableValues();
        if (!is_null($this->container['sort_direction']) && !in_array($this->container['sort_direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sort_direction', must be one of '%s'",
                $this->container['sort_direction'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInboxTypeAllowableValues();
        if (!is_null($this->container['inbox_type']) && !in_array($this->container['inbox_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'inbox_type', must be one of '%s'",
                $this->container['inbox_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInboxFunctionAllowableValues();
        if (!is_null($this->container['inbox_function']) && !in_array($this->container['inbox_function'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'inbox_function', must be one of '%s'",
                $this->container['inbox_function'],
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
     * @param int|null $page_index Optional page index in list pagination
     *
     * @return self
     */
    public function setPageIndex($page_index)
    {

        if (is_null($page_index)) {
            array_push($this->openAPINullablesSetToNull, 'page_index');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('page_index', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param int|null $page_size Optional page size in list pagination
     *
     * @return self
     */
    public function setPageSize($page_size)
    {

        if (is_null($page_size)) {
            array_push($this->openAPINullablesSetToNull, 'page_size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('page_size', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
            array_push($this->openAPINullablesSetToNull, 'sort_direction');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sort_direction', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['sort_direction'] = $sort_direction;

        return $this;
    }

    /**
     * Gets favourite
     *
     * @return bool|null
     */
    public function getFavourite()
    {
        return $this->container['favourite'];
    }

    /**
     * Sets favourite
     *
     * @param bool|null $favourite Optionally filter results for favourites only
     *
     * @return self
     */
    public function setFavourite($favourite)
    {

        if (is_null($favourite)) {
            array_push($this->openAPINullablesSetToNull, 'favourite');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('favourite', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['favourite'] = $favourite;

        return $this;
    }

    /**
     * Gets search
     *
     * @return string|null
     */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
     * Sets search
     *
     * @param string|null $search Optionally filter by search words partial matching ID, tags, name, and email address
     *
     * @return self
     */
    public function setSearch($search)
    {

        if (is_null($search)) {
            array_push($this->openAPINullablesSetToNull, 'search');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('search', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['search'] = $search;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string|null $tag Optionally filter by tags. Will return inboxes that include given tags
     *
     * @return self
     */
    public function setTag($tag)
    {

        if (is_null($tag)) {
            array_push($this->openAPINullablesSetToNull, 'tag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['tag'] = $tag;

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
     * @param \DateTime|null $since Optional filter by created after given date time
     *
     * @return self
     */
    public function setSince($since)
    {

        if (is_null($since)) {
            array_push($this->openAPINullablesSetToNull, 'since');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('since', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param \DateTime|null $before Optional filter by created before given date time
     *
     * @return self
     */
    public function setBefore($before)
    {

        if (is_null($before)) {
            array_push($this->openAPINullablesSetToNull, 'before');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('before', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['before'] = $before;

        return $this;
    }

    /**
     * Gets inbox_type
     *
     * @return string|null
     */
    public function getInboxType()
    {
        return $this->container['inbox_type'];
    }

    /**
     * Sets inbox_type
     *
     * @param string|null $inbox_type Type of inbox. HTTP inboxes are faster and better for most cases. SMTP inboxes are more suited for public facing inbound messages (but cannot send).
     *
     * @return self
     */
    public function setInboxType($inbox_type)
    {
        $allowedValues = $this->getInboxTypeAllowableValues();
        if (!is_null($inbox_type) && !in_array($inbox_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'inbox_type', must be one of '%s'",
                    $inbox_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($inbox_type)) {
            array_push($this->openAPINullablesSetToNull, 'inbox_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inbox_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['inbox_type'] = $inbox_type;

        return $this;
    }

    /**
     * Gets inbox_function
     *
     * @return string|null
     */
    public function getInboxFunction()
    {
        return $this->container['inbox_function'];
    }

    /**
     * Sets inbox_function
     *
     * @param string|null $inbox_function Optional filter by inbox function
     *
     * @return self
     */
    public function setInboxFunction($inbox_function)
    {
        $allowedValues = $this->getInboxFunctionAllowableValues();
        if (!is_null($inbox_function) && !in_array($inbox_function, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'inbox_function', must be one of '%s'",
                    $inbox_function,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($inbox_function)) {
            array_push($this->openAPINullablesSetToNull, 'inbox_function');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inbox_function', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['inbox_function'] = $inbox_function;

        return $this;
    }

    /**
     * Gets domain_id
     *
     * @return string|null
     */
    public function getDomainId()
    {
        return $this->container['domain_id'];
    }

    /**
     * Sets domain_id
     *
     * @param string|null $domain_id Optional domain ID filter
     *
     * @return self
     */
    public function setDomainId($domain_id)
    {

        if (is_null($domain_id)) {
            array_push($this->openAPINullablesSetToNull, 'domain_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('domain_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['domain_id'] = $domain_id;

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

