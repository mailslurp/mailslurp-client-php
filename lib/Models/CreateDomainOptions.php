<?php
/**
 * CreateDomainOptions
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
 * CreateDomainOptions Class Doc Comment
 *
 * @category Class
 * @description Options for creating a domain to use with MailSlurp. You must have ownership access to this domain in order to verify it. Domains will not function correctly until the domain has been verified. See https://www.mailslurp.com/guides/custom-domains for help. Domains can be either &#x60;HTTP&#x60; or &#x60;SMTP&#x60; type. The type of domain determines which inboxes can be used with it. &#x60;SMTP&#x60; inboxes use a mail server running &#x60;mxslurp.click&#x60; while &#x60;HTTP&#x60; inboxes are handled by AWS SES.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateDomainOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateDomainOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'domain' => 'string',
        'description' => 'string',
        'created_catch_all_inbox' => 'bool',
        'domain_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'domain' => null,
        'description' => null,
        'created_catch_all_inbox' => null,
        'domain_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'domain' => false,
		'description' => true,
		'created_catch_all_inbox' => true,
		'domain_type' => true
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
        'domain' => 'domain',
        'description' => 'description',
        'created_catch_all_inbox' => 'createdCatchAllInbox',
        'domain_type' => 'domainType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain' => 'setDomain',
        'description' => 'setDescription',
        'created_catch_all_inbox' => 'setCreatedCatchAllInbox',
        'domain_type' => 'setDomainType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain' => 'getDomain',
        'description' => 'getDescription',
        'created_catch_all_inbox' => 'getCreatedCatchAllInbox',
        'domain_type' => 'getDomainType'
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

    public const DOMAIN_TYPE_HTTP_INBOX = 'HTTP_INBOX';
    public const DOMAIN_TYPE_SMTP_DOMAIN = 'SMTP_DOMAIN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDomainTypeAllowableValues()
    {
        return [
            self::DOMAIN_TYPE_HTTP_INBOX,
            self::DOMAIN_TYPE_SMTP_DOMAIN,
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
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('created_catch_all_inbox', $data ?? [], null);
        $this->setIfExists('domain_type', $data ?? [], null);
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

        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        $allowedValues = $this->getDomainTypeAllowableValues();
        if (!is_null($this->container['domain_type']) && !in_array($this->container['domain_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'domain_type', must be one of '%s'",
                $this->container['domain_type'],
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
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain The top level domain you wish to use with MailSlurp. Do not specify subdomain just the top level. So `test.com` covers all subdomains such as `mail.test.com`. Don't include a protocol such as `http://`. Once added you must complete the verification steps by adding the returned records to your domain.
     *
     * @return self
     */
    public function setDomain($domain)
    {

        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }

        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Optional description of the domain.
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets created_catch_all_inbox
     *
     * @return bool|null
     */
    public function getCreatedCatchAllInbox()
    {
        return $this->container['created_catch_all_inbox'];
    }

    /**
     * Sets created_catch_all_inbox
     *
     * @param bool|null $created_catch_all_inbox Whether to create a catch all inbox for the domain. Any email sent to an address using your domain that cannot be matched to an existing inbox you created with the domain will be routed to the created catch all inbox. You can access emails using the regular methods on this inbox ID.
     *
     * @return self
     */
    public function setCreatedCatchAllInbox($created_catch_all_inbox)
    {

        if (is_null($created_catch_all_inbox)) {
            array_push($this->openAPINullablesSetToNull, 'created_catch_all_inbox');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_catch_all_inbox', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['created_catch_all_inbox'] = $created_catch_all_inbox;

        return $this;
    }

    /**
     * Gets domain_type
     *
     * @return string|null
     */
    public function getDomainType()
    {
        return $this->container['domain_type'];
    }

    /**
     * Sets domain_type
     *
     * @param string|null $domain_type Type of domain. Dictates type of inbox that can be created with domain. HTTP means inboxes are processed using SES while SMTP inboxes use a custom SMTP mail server. SMTP does not support sending so use HTTP for sending emails.
     *
     * @return self
     */
    public function setDomainType($domain_type)
    {
        $allowedValues = $this->getDomainTypeAllowableValues();
        if (!is_null($domain_type) && !in_array($domain_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'domain_type', must be one of '%s'",
                    $domain_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($domain_type)) {
            array_push($this->openAPINullablesSetToNull, 'domain_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('domain_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['domain_type'] = $domain_type;

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


