<?php
/**
 * ReplyToEmailOptions
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
 * ReplyToEmailOptions Class Doc Comment
 *
 * @category Class
 * @description Options for replying to email with API
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReplyToEmailOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReplyToEmailOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'body' => 'string',
        'is_html' => 'bool',
        'from' => 'string',
        'reply_to' => 'string',
        'custom_headers' => 'array<string,string>',
        'charset' => 'string',
        'attachments' => 'string[]',
        'template_variables' => 'array<string,object>',
        'template' => 'string',
        'send_strategy' => 'string',
        'use_inbox_name' => 'bool',
        'html' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'body' => null,
        'is_html' => null,
        'from' => null,
        'reply_to' => null,
        'custom_headers' => null,
        'charset' => null,
        'attachments' => null,
        'template_variables' => null,
        'template' => 'uuid',
        'send_strategy' => null,
        'use_inbox_name' => null,
        'html' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'body' => false,
		'is_html' => false,
		'from' => true,
		'reply_to' => true,
		'custom_headers' => true,
		'charset' => true,
		'attachments' => true,
		'template_variables' => true,
		'template' => true,
		'send_strategy' => true,
		'use_inbox_name' => true,
		'html' => false
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
        'body' => 'body',
        'is_html' => 'isHTML',
        'from' => 'from',
        'reply_to' => 'replyTo',
        'custom_headers' => 'customHeaders',
        'charset' => 'charset',
        'attachments' => 'attachments',
        'template_variables' => 'templateVariables',
        'template' => 'template',
        'send_strategy' => 'sendStrategy',
        'use_inbox_name' => 'useInboxName',
        'html' => 'html'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'body' => 'setBody',
        'is_html' => 'setIsHtml',
        'from' => 'setFrom',
        'reply_to' => 'setReplyTo',
        'custom_headers' => 'setCustomHeaders',
        'charset' => 'setCharset',
        'attachments' => 'setAttachments',
        'template_variables' => 'setTemplateVariables',
        'template' => 'setTemplate',
        'send_strategy' => 'setSendStrategy',
        'use_inbox_name' => 'setUseInboxName',
        'html' => 'setHtml'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'body' => 'getBody',
        'is_html' => 'getIsHtml',
        'from' => 'getFrom',
        'reply_to' => 'getReplyTo',
        'custom_headers' => 'getCustomHeaders',
        'charset' => 'getCharset',
        'attachments' => 'getAttachments',
        'template_variables' => 'getTemplateVariables',
        'template' => 'getTemplate',
        'send_strategy' => 'getSendStrategy',
        'use_inbox_name' => 'getUseInboxName',
        'html' => 'getHtml'
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

    public const SEND_STRATEGY_SINGLE_MESSAGE = 'SINGLE_MESSAGE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSendStrategyAllowableValues()
    {
        return [
            self::SEND_STRATEGY_SINGLE_MESSAGE,
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
        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('is_html', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('reply_to', $data ?? [], null);
        $this->setIfExists('custom_headers', $data ?? [], null);
        $this->setIfExists('charset', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('template_variables', $data ?? [], null);
        $this->setIfExists('template', $data ?? [], null);
        $this->setIfExists('send_strategy', $data ?? [], null);
        $this->setIfExists('use_inbox_name', $data ?? [], null);
        $this->setIfExists('html', $data ?? [], null);
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

        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['is_html'] === null) {
            $invalidProperties[] = "'is_html' can't be null";
        }
        $allowedValues = $this->getSendStrategyAllowableValues();
        if (!is_null($this->container['send_strategy']) && !in_array($this->container['send_strategy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'send_strategy', must be one of '%s'",
                $this->container['send_strategy'],
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
     * @param string $body Body of the reply email you want to send
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
     * Gets is_html
     *
     * @return bool
     */
    public function getIsHtml()
    {
        return $this->container['is_html'];
    }

    /**
     * Sets is_html
     *
     * @param bool $is_html Is the reply HTML
     *
     * @return self
     */
    public function setIsHtml($is_html)
    {

        if (is_null($is_html)) {
            throw new \InvalidArgumentException('non-nullable is_html cannot be null');
        }

        $this->container['is_html'] = $is_html;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from The from header that should be used. Optional
     *
     * @return self
     */
    public function setFrom($from)
    {

        if (is_null($from)) {
            array_push($this->openAPINullablesSetToNull, 'from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('from', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets reply_to
     *
     * @return string|null
     */
    public function getReplyTo()
    {
        return $this->container['reply_to'];
    }

    /**
     * Sets reply_to
     *
     * @param string|null $reply_to The replyTo header that should be used. Optional
     *
     * @return self
     */
    public function setReplyTo($reply_to)
    {

        if (is_null($reply_to)) {
            array_push($this->openAPINullablesSetToNull, 'reply_to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reply_to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['reply_to'] = $reply_to;

        return $this;
    }

    /**
     * Gets custom_headers
     *
     * @return array<string,string>|null
     */
    public function getCustomHeaders()
    {
        return $this->container['custom_headers'];
    }

    /**
     * Sets custom_headers
     *
     * @param array<string,string>|null $custom_headers Optional custom headers
     *
     * @return self
     */
    public function setCustomHeaders($custom_headers)
    {

        if (is_null($custom_headers)) {
            array_push($this->openAPINullablesSetToNull, 'custom_headers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_headers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['custom_headers'] = $custom_headers;

        return $this;
    }

    /**
     * Gets charset
     *
     * @return string|null
     */
    public function getCharset()
    {
        return $this->container['charset'];
    }

    /**
     * Sets charset
     *
     * @param string|null $charset The charset that your message should be sent with. Optional. Default is UTF-8
     *
     * @return self
     */
    public function setCharset($charset)
    {

        if (is_null($charset)) {
            array_push($this->openAPINullablesSetToNull, 'charset');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('charset', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['charset'] = $charset;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return string[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param string[]|null $attachments List of uploaded attachments to send with the reply. Optional.
     *
     * @return self
     */
    public function setAttachments($attachments)
    {

        if (is_null($attachments)) {
            array_push($this->openAPINullablesSetToNull, 'attachments');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('attachments', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets template_variables
     *
     * @return array<string,object>|null
     */
    public function getTemplateVariables()
    {
        return $this->container['template_variables'];
    }

    /**
     * Sets template_variables
     *
     * @param array<string,object>|null $template_variables Template variables if using a template
     *
     * @return self
     */
    public function setTemplateVariables($template_variables)
    {

        if (is_null($template_variables)) {
            array_push($this->openAPINullablesSetToNull, 'template_variables');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('template_variables', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['template_variables'] = $template_variables;

        return $this;
    }

    /**
     * Gets template
     *
     * @return string|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string|null $template Template ID to use instead of body. Will use template variable map to fill defined variable slots.
     *
     * @return self
     */
    public function setTemplate($template)
    {

        if (is_null($template)) {
            array_push($this->openAPINullablesSetToNull, 'template');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('template', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets send_strategy
     *
     * @return string|null
     */
    public function getSendStrategy()
    {
        return $this->container['send_strategy'];
    }

    /**
     * Sets send_strategy
     *
     * @param string|null $send_strategy How an email should be sent based on its recipients
     *
     * @return self
     */
    public function setSendStrategy($send_strategy)
    {
        $allowedValues = $this->getSendStrategyAllowableValues();
        if (!is_null($send_strategy) && !in_array($send_strategy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'send_strategy', must be one of '%s'",
                    $send_strategy,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($send_strategy)) {
            array_push($this->openAPINullablesSetToNull, 'send_strategy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('send_strategy', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['send_strategy'] = $send_strategy;

        return $this;
    }

    /**
     * Gets use_inbox_name
     *
     * @return bool|null
     */
    public function getUseInboxName()
    {
        return $this->container['use_inbox_name'];
    }

    /**
     * Sets use_inbox_name
     *
     * @param bool|null $use_inbox_name Optionally use inbox name as display name for sender email address
     *
     * @return self
     */
    public function setUseInboxName($use_inbox_name)
    {

        if (is_null($use_inbox_name)) {
            array_push($this->openAPINullablesSetToNull, 'use_inbox_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('use_inbox_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['use_inbox_name'] = $use_inbox_name;

        return $this;
    }

    /**
     * Gets html
     *
     * @return bool|null
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param bool|null $html html
     *
     * @return self
     */
    public function setHtml($html)
    {

        if (is_null($html)) {
            throw new \InvalidArgumentException('non-nullable html cannot be null');
        }

        $this->container['html'] = $html;

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


