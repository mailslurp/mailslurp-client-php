<?php
/**
 * WebhookDto
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
 * WebhookDto Class Doc Comment
 *
 * @category Class
 * @description Representation of a webhook for an inbox. The URL specified will be using by MailSlurp whenever an email is received by the attached inbox. A webhook entity should have a URL that points to your server. Your server should accept HTTP/S POST requests and return a success 200. MailSlurp will retry your webhooks if they fail. See https://php.api.mailslurp.com/schemas/webhook-payload for the payload schema.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'basic_auth' => 'bool',
        'name' => 'string',
        'phone_id' => 'string',
        'inbox_id' => 'string',
        'request_body_template' => 'string',
        'url' => 'string',
        'method' => 'string',
        'payload_json_schema' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'event_name' => 'string',
        'request_headers' => '\MailSlurp\Models\WebhookHeaders',
        'ignore_insecure_ssl_certificates' => 'bool',
        'use_static_ip_range' => 'bool',
        'health_status' => 'string'
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
        'basic_auth' => null,
        'name' => null,
        'phone_id' => 'uuid',
        'inbox_id' => 'uuid',
        'request_body_template' => null,
        'url' => null,
        'method' => null,
        'payload_json_schema' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'event_name' => null,
        'request_headers' => null,
        'ignore_insecure_ssl_certificates' => null,
        'use_static_ip_range' => null,
        'health_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'user_id' => false,
		'basic_auth' => false,
		'name' => true,
		'phone_id' => true,
		'inbox_id' => true,
		'request_body_template' => true,
		'url' => false,
		'method' => false,
		'payload_json_schema' => false,
		'created_at' => true,
		'updated_at' => false,
		'event_name' => true,
		'request_headers' => false,
		'ignore_insecure_ssl_certificates' => true,
		'use_static_ip_range' => true,
		'health_status' => true
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
        'basic_auth' => 'basicAuth',
        'name' => 'name',
        'phone_id' => 'phoneId',
        'inbox_id' => 'inboxId',
        'request_body_template' => 'requestBodyTemplate',
        'url' => 'url',
        'method' => 'method',
        'payload_json_schema' => 'payloadJsonSchema',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'event_name' => 'eventName',
        'request_headers' => 'requestHeaders',
        'ignore_insecure_ssl_certificates' => 'ignoreInsecureSslCertificates',
        'use_static_ip_range' => 'useStaticIpRange',
        'health_status' => 'healthStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'basic_auth' => 'setBasicAuth',
        'name' => 'setName',
        'phone_id' => 'setPhoneId',
        'inbox_id' => 'setInboxId',
        'request_body_template' => 'setRequestBodyTemplate',
        'url' => 'setUrl',
        'method' => 'setMethod',
        'payload_json_schema' => 'setPayloadJsonSchema',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'event_name' => 'setEventName',
        'request_headers' => 'setRequestHeaders',
        'ignore_insecure_ssl_certificates' => 'setIgnoreInsecureSslCertificates',
        'use_static_ip_range' => 'setUseStaticIpRange',
        'health_status' => 'setHealthStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'basic_auth' => 'getBasicAuth',
        'name' => 'getName',
        'phone_id' => 'getPhoneId',
        'inbox_id' => 'getInboxId',
        'request_body_template' => 'getRequestBodyTemplate',
        'url' => 'getUrl',
        'method' => 'getMethod',
        'payload_json_schema' => 'getPayloadJsonSchema',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'event_name' => 'getEventName',
        'request_headers' => 'getRequestHeaders',
        'ignore_insecure_ssl_certificates' => 'getIgnoreInsecureSslCertificates',
        'use_static_ip_range' => 'getUseStaticIpRange',
        'health_status' => 'getHealthStatus'
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

    public const METHOD_POST = 'POST';
    public const METHOD_DELETE = 'DELETE';
    public const METHOD_GET = 'GET';
    public const METHOD_PUT = 'PUT';
    public const METHOD_PATCH = 'PATCH';
    public const METHOD_HEAD = 'HEAD';
    public const METHOD_OPTIONS = 'OPTIONS';
    public const METHOD_TRACE = 'TRACE';
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
    public const EVENT_NAME_NEW_GUEST_USER = 'NEW_GUEST_USER';
    public const HEALTH_STATUS_HEALTHY = 'HEALTHY';
    public const HEALTH_STATUS_UNHEALTHY = 'UNHEALTHY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_POST,
            self::METHOD_DELETE,
            self::METHOD_GET,
            self::METHOD_PUT,
            self::METHOD_PATCH,
            self::METHOD_HEAD,
            self::METHOD_OPTIONS,
            self::METHOD_TRACE,
        ];
    }

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
            self::EVENT_NAME_NEW_GUEST_USER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHealthStatusAllowableValues()
    {
        return [
            self::HEALTH_STATUS_HEALTHY,
            self::HEALTH_STATUS_UNHEALTHY,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('basic_auth', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('phone_id', $data ?? [], null);
        $this->setIfExists('inbox_id', $data ?? [], null);
        $this->setIfExists('request_body_template', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('payload_json_schema', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('event_name', $data ?? [], null);
        $this->setIfExists('request_headers', $data ?? [], null);
        $this->setIfExists('ignore_insecure_ssl_certificates', $data ?? [], null);
        $this->setIfExists('use_static_ip_range', $data ?? [], null);
        $this->setIfExists('health_status', $data ?? [], null);
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
        if ($this->container['basic_auth'] === null) {
            $invalidProperties[] = "'basic_auth' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'method', must be one of '%s'",
                $this->container['method'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['payload_json_schema'] === null) {
            $invalidProperties[] = "'payload_json_schema' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        $allowedValues = $this->getEventNameAllowableValues();
        if (!is_null($this->container['event_name']) && !in_array($this->container['event_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_name', must be one of '%s'",
                $this->container['event_name'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHealthStatusAllowableValues();
        if (!is_null($this->container['health_status']) && !in_array($this->container['health_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'health_status', must be one of '%s'",
                $this->container['health_status'],
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
     * @param string $id ID of the Webhook
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
     * @param string $user_id User ID of the Webhook
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
     * Gets basic_auth
     *
     * @return bool
     */
    public function getBasicAuth()
    {
        return $this->container['basic_auth'];
    }

    /**
     * Sets basic_auth
     *
     * @param bool $basic_auth Does webhook expect basic authentication? If true it means you created this webhook with a username and password. MailSlurp will use these in the URL to authenticate itself.
     *
     * @return self
     */
    public function setBasicAuth($basic_auth)
    {

        if (is_null($basic_auth)) {
            throw new \InvalidArgumentException('non-nullable basic_auth cannot be null');
        }

        $this->container['basic_auth'] = $basic_auth;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the webhook
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone_id
     *
     * @return string|null
     */
    public function getPhoneId()
    {
        return $this->container['phone_id'];
    }

    /**
     * Sets phone_id
     *
     * @param string|null $phone_id The phoneNumberId that the Webhook will be triggered by. If null then webhook triggered at account level or inbox level if inboxId set
     *
     * @return self
     */
    public function setPhoneId($phone_id)
    {

        if (is_null($phone_id)) {
            array_push($this->openAPINullablesSetToNull, 'phone_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['phone_id'] = $phone_id;

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
     * @param string|null $inbox_id The inbox that the Webhook will be triggered by. If null then webhook triggered at account level or phone level if phoneId set
     *
     * @return self
     */
    public function setInboxId($inbox_id)
    {

        if (is_null($inbox_id)) {
            array_push($this->openAPINullablesSetToNull, 'inbox_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inbox_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['inbox_id'] = $inbox_id;

        return $this;
    }

    /**
     * Gets request_body_template
     *
     * @return string|null
     */
    public function getRequestBodyTemplate()
    {
        return $this->container['request_body_template'];
    }

    /**
     * Sets request_body_template
     *
     * @param string|null $request_body_template Request body template for HTTP request that will be sent for the webhook. Use Moustache style template variables to insert values from the original event payload.
     *
     * @return self
     */
    public function setRequestBodyTemplate($request_body_template)
    {

        if (is_null($request_body_template)) {
            array_push($this->openAPINullablesSetToNull, 'request_body_template');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('request_body_template', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['request_body_template'] = $request_body_template;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL of your server that the webhook will be sent to. The schema of the JSON that is sent is described by the payloadJsonSchema.
     *
     * @return self
     */
    public function setUrl($url)
    {

        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method HTTP method that your server endpoint must listen for
     *
     * @return self
     */
    public function setMethod($method)
    {
        $allowedValues = $this->getMethodAllowableValues();
        if (!in_array($method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'method', must be one of '%s'",
                    $method,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($method)) {
            throw new \InvalidArgumentException('non-nullable method cannot be null');
        }

        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets payload_json_schema
     *
     * @return string
     */
    public function getPayloadJsonSchema()
    {
        return $this->container['payload_json_schema'];
    }

    /**
     * Sets payload_json_schema
     *
     * @param string $payload_json_schema Deprecated. Fetch JSON Schema for webhook using the getJsonSchemaForWebhookPayload method
     *
     * @return self
     */
    public function setPayloadJsonSchema($payload_json_schema)
    {

        if (is_null($payload_json_schema)) {
            throw new \InvalidArgumentException('non-nullable payload_json_schema cannot be null');
        }

        $this->container['payload_json_schema'] = $payload_json_schema;

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
     * @param \DateTime $created_at When the webhook was created
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {

        if (is_null($created_at)) {
            array_push($this->openAPINullablesSetToNull, 'created_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * Gets event_name
     *
     * @return string|null
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string|null $event_name Webhook trigger event name
     *
     * @return self
     */
    public function setEventName($event_name)
    {
        $allowedValues = $this->getEventNameAllowableValues();
        if (!is_null($event_name) && !in_array($event_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_name', must be one of '%s'",
                    $event_name,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($event_name)) {
            array_push($this->openAPINullablesSetToNull, 'event_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('event_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets request_headers
     *
     * @return \MailSlurp\Models\WebhookHeaders|null
     */
    public function getRequestHeaders()
    {
        return $this->container['request_headers'];
    }

    /**
     * Sets request_headers
     *
     * @param \MailSlurp\Models\WebhookHeaders|null $request_headers request_headers
     *
     * @return self
     */
    public function setRequestHeaders($request_headers)
    {

        if (is_null($request_headers)) {
            throw new \InvalidArgumentException('non-nullable request_headers cannot be null');
        }

        $this->container['request_headers'] = $request_headers;

        return $this;
    }

    /**
     * Gets ignore_insecure_ssl_certificates
     *
     * @return bool|null
     */
    public function getIgnoreInsecureSslCertificates()
    {
        return $this->container['ignore_insecure_ssl_certificates'];
    }

    /**
     * Sets ignore_insecure_ssl_certificates
     *
     * @param bool|null $ignore_insecure_ssl_certificates Should notifier ignore insecure SSL certificates
     *
     * @return self
     */
    public function setIgnoreInsecureSslCertificates($ignore_insecure_ssl_certificates)
    {

        if (is_null($ignore_insecure_ssl_certificates)) {
            array_push($this->openAPINullablesSetToNull, 'ignore_insecure_ssl_certificates');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ignore_insecure_ssl_certificates', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['ignore_insecure_ssl_certificates'] = $ignore_insecure_ssl_certificates;

        return $this;
    }

    /**
     * Gets use_static_ip_range
     *
     * @return bool|null
     */
    public function getUseStaticIpRange()
    {
        return $this->container['use_static_ip_range'];
    }

    /**
     * Sets use_static_ip_range
     *
     * @param bool|null $use_static_ip_range Should notifier use static IP range when sending webhook payload
     *
     * @return self
     */
    public function setUseStaticIpRange($use_static_ip_range)
    {

        if (is_null($use_static_ip_range)) {
            array_push($this->openAPINullablesSetToNull, 'use_static_ip_range');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('use_static_ip_range', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['use_static_ip_range'] = $use_static_ip_range;

        return $this;
    }

    /**
     * Gets health_status
     *
     * @return string|null
     */
    public function getHealthStatus()
    {
        return $this->container['health_status'];
    }

    /**
     * Sets health_status
     *
     * @param string|null $health_status Webhook health
     *
     * @return self
     */
    public function setHealthStatus($health_status)
    {
        $allowedValues = $this->getHealthStatusAllowableValues();
        if (!is_null($health_status) && !in_array($health_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'health_status', must be one of '%s'",
                    $health_status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($health_status)) {
            array_push($this->openAPINullablesSetToNull, 'health_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('health_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['health_status'] = $health_status;

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


