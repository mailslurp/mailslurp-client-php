<?php
/**
 * ProviderSettings
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
 * ProviderSettings Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProviderSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProviderSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mail_provider' => 'string',
        'imap_host' => 'string',
        'imap_port' => 'int',
        'imap_ssl' => 'bool',
        'imap_start_tls' => 'bool',
        'smtp_host' => 'string',
        'smtp_port' => 'int',
        'smtp_ssl' => 'bool',
        'smtp_start_tls' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mail_provider' => null,
        'imap_host' => null,
        'imap_port' => 'int32',
        'imap_ssl' => null,
        'imap_start_tls' => null,
        'smtp_host' => null,
        'smtp_port' => 'int32',
        'smtp_ssl' => null,
        'smtp_start_tls' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mail_provider' => false,
		'imap_host' => false,
		'imap_port' => false,
		'imap_ssl' => false,
		'imap_start_tls' => false,
		'smtp_host' => false,
		'smtp_port' => false,
		'smtp_ssl' => false,
		'smtp_start_tls' => false
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
        'mail_provider' => 'mailProvider',
        'imap_host' => 'imapHost',
        'imap_port' => 'imapPort',
        'imap_ssl' => 'imapSsl',
        'imap_start_tls' => 'imapStartTls',
        'smtp_host' => 'smtpHost',
        'smtp_port' => 'smtpPort',
        'smtp_ssl' => 'smtpSsl',
        'smtp_start_tls' => 'smtpStartTls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mail_provider' => 'setMailProvider',
        'imap_host' => 'setImapHost',
        'imap_port' => 'setImapPort',
        'imap_ssl' => 'setImapSsl',
        'imap_start_tls' => 'setImapStartTls',
        'smtp_host' => 'setSmtpHost',
        'smtp_port' => 'setSmtpPort',
        'smtp_ssl' => 'setSmtpSsl',
        'smtp_start_tls' => 'setSmtpStartTls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mail_provider' => 'getMailProvider',
        'imap_host' => 'getImapHost',
        'imap_port' => 'getImapPort',
        'imap_ssl' => 'getImapSsl',
        'imap_start_tls' => 'getImapStartTls',
        'smtp_host' => 'getSmtpHost',
        'smtp_port' => 'getSmtpPort',
        'smtp_ssl' => 'getSmtpSsl',
        'smtp_start_tls' => 'getSmtpStartTls'
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

    public const MAIL_PROVIDER_GOOGLE = 'GOOGLE';
    public const MAIL_PROVIDER_MICROSOFT = 'MICROSOFT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMailProviderAllowableValues()
    {
        return [
            self::MAIL_PROVIDER_GOOGLE,
            self::MAIL_PROVIDER_MICROSOFT,
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
        $this->setIfExists('mail_provider', $data ?? [], null);
        $this->setIfExists('imap_host', $data ?? [], null);
        $this->setIfExists('imap_port', $data ?? [], null);
        $this->setIfExists('imap_ssl', $data ?? [], null);
        $this->setIfExists('imap_start_tls', $data ?? [], null);
        $this->setIfExists('smtp_host', $data ?? [], null);
        $this->setIfExists('smtp_port', $data ?? [], null);
        $this->setIfExists('smtp_ssl', $data ?? [], null);
        $this->setIfExists('smtp_start_tls', $data ?? [], null);
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

        if ($this->container['mail_provider'] === null) {
            $invalidProperties[] = "'mail_provider' can't be null";
        }
        $allowedValues = $this->getMailProviderAllowableValues();
        if (!is_null($this->container['mail_provider']) && !in_array($this->container['mail_provider'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mail_provider', must be one of '%s'",
                $this->container['mail_provider'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['imap_host'] === null) {
            $invalidProperties[] = "'imap_host' can't be null";
        }
        if ($this->container['imap_port'] === null) {
            $invalidProperties[] = "'imap_port' can't be null";
        }
        if ($this->container['imap_ssl'] === null) {
            $invalidProperties[] = "'imap_ssl' can't be null";
        }
        if ($this->container['smtp_host'] === null) {
            $invalidProperties[] = "'smtp_host' can't be null";
        }
        if ($this->container['smtp_port'] === null) {
            $invalidProperties[] = "'smtp_port' can't be null";
        }
        if ($this->container['smtp_ssl'] === null) {
            $invalidProperties[] = "'smtp_ssl' can't be null";
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
     * Gets mail_provider
     *
     * @return string
     */
    public function getMailProvider()
    {
        return $this->container['mail_provider'];
    }

    /**
     * Sets mail_provider
     *
     * @param string $mail_provider mail_provider
     *
     * @return self
     */
    public function setMailProvider($mail_provider)
    {
        $allowedValues = $this->getMailProviderAllowableValues();
        if (!in_array($mail_provider, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mail_provider', must be one of '%s'",
                    $mail_provider,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($mail_provider)) {
            throw new \InvalidArgumentException('non-nullable mail_provider cannot be null');
        }

        $this->container['mail_provider'] = $mail_provider;

        return $this;
    }

    /**
     * Gets imap_host
     *
     * @return string
     */
    public function getImapHost()
    {
        return $this->container['imap_host'];
    }

    /**
     * Sets imap_host
     *
     * @param string $imap_host imap_host
     *
     * @return self
     */
    public function setImapHost($imap_host)
    {

        if (is_null($imap_host)) {
            throw new \InvalidArgumentException('non-nullable imap_host cannot be null');
        }

        $this->container['imap_host'] = $imap_host;

        return $this;
    }

    /**
     * Gets imap_port
     *
     * @return int
     */
    public function getImapPort()
    {
        return $this->container['imap_port'];
    }

    /**
     * Sets imap_port
     *
     * @param int $imap_port imap_port
     *
     * @return self
     */
    public function setImapPort($imap_port)
    {

        if (is_null($imap_port)) {
            throw new \InvalidArgumentException('non-nullable imap_port cannot be null');
        }

        $this->container['imap_port'] = $imap_port;

        return $this;
    }

    /**
     * Gets imap_ssl
     *
     * @return bool
     */
    public function getImapSsl()
    {
        return $this->container['imap_ssl'];
    }

    /**
     * Sets imap_ssl
     *
     * @param bool $imap_ssl imap_ssl
     *
     * @return self
     */
    public function setImapSsl($imap_ssl)
    {

        if (is_null($imap_ssl)) {
            throw new \InvalidArgumentException('non-nullable imap_ssl cannot be null');
        }

        $this->container['imap_ssl'] = $imap_ssl;

        return $this;
    }

    /**
     * Gets imap_start_tls
     *
     * @return bool|null
     */
    public function getImapStartTls()
    {
        return $this->container['imap_start_tls'];
    }

    /**
     * Sets imap_start_tls
     *
     * @param bool|null $imap_start_tls imap_start_tls
     *
     * @return self
     */
    public function setImapStartTls($imap_start_tls)
    {

        if (is_null($imap_start_tls)) {
            throw new \InvalidArgumentException('non-nullable imap_start_tls cannot be null');
        }

        $this->container['imap_start_tls'] = $imap_start_tls;

        return $this;
    }

    /**
     * Gets smtp_host
     *
     * @return string
     */
    public function getSmtpHost()
    {
        return $this->container['smtp_host'];
    }

    /**
     * Sets smtp_host
     *
     * @param string $smtp_host smtp_host
     *
     * @return self
     */
    public function setSmtpHost($smtp_host)
    {

        if (is_null($smtp_host)) {
            throw new \InvalidArgumentException('non-nullable smtp_host cannot be null');
        }

        $this->container['smtp_host'] = $smtp_host;

        return $this;
    }

    /**
     * Gets smtp_port
     *
     * @return int
     */
    public function getSmtpPort()
    {
        return $this->container['smtp_port'];
    }

    /**
     * Sets smtp_port
     *
     * @param int $smtp_port smtp_port
     *
     * @return self
     */
    public function setSmtpPort($smtp_port)
    {

        if (is_null($smtp_port)) {
            throw new \InvalidArgumentException('non-nullable smtp_port cannot be null');
        }

        $this->container['smtp_port'] = $smtp_port;

        return $this;
    }

    /**
     * Gets smtp_ssl
     *
     * @return bool
     */
    public function getSmtpSsl()
    {
        return $this->container['smtp_ssl'];
    }

    /**
     * Sets smtp_ssl
     *
     * @param bool $smtp_ssl smtp_ssl
     *
     * @return self
     */
    public function setSmtpSsl($smtp_ssl)
    {

        if (is_null($smtp_ssl)) {
            throw new \InvalidArgumentException('non-nullable smtp_ssl cannot be null');
        }

        $this->container['smtp_ssl'] = $smtp_ssl;

        return $this;
    }

    /**
     * Gets smtp_start_tls
     *
     * @return bool|null
     */
    public function getSmtpStartTls()
    {
        return $this->container['smtp_start_tls'];
    }

    /**
     * Sets smtp_start_tls
     *
     * @param bool|null $smtp_start_tls smtp_start_tls
     *
     * @return self
     */
    public function setSmtpStartTls($smtp_start_tls)
    {

        if (is_null($smtp_start_tls)) {
            throw new \InvalidArgumentException('non-nullable smtp_start_tls cannot be null');
        }

        $this->container['smtp_start_tls'] = $smtp_start_tls;

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


