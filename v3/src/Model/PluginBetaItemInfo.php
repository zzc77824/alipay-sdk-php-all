<?php
/**
 * PluginBetaItemInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2023-04-19
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * PluginBetaItemInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PluginBetaItemInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PluginBetaItemInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appName' => 'string',
        'betaStatus' => 'string',
        'memo' => 'string',
        'miniAppId' => 'string',
        'pluginId' => 'string',
        'pluginVersion' => 'string',
        'qrCodeUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appName' => null,
        'betaStatus' => null,
        'memo' => null,
        'miniAppId' => null,
        'pluginId' => null,
        'pluginVersion' => null,
        'qrCodeUrl' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'appName' => 'app_name',
        'betaStatus' => 'beta_status',
        'memo' => 'memo',
        'miniAppId' => 'mini_app_id',
        'pluginId' => 'plugin_id',
        'pluginVersion' => 'plugin_version',
        'qrCodeUrl' => 'qr_code_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appName' => 'setAppName',
        'betaStatus' => 'setBetaStatus',
        'memo' => 'setMemo',
        'miniAppId' => 'setMiniAppId',
        'pluginId' => 'setPluginId',
        'pluginVersion' => 'setPluginVersion',
        'qrCodeUrl' => 'setQrCodeUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appName' => 'getAppName',
        'betaStatus' => 'getBetaStatus',
        'memo' => 'getMemo',
        'miniAppId' => 'getMiniAppId',
        'pluginId' => 'getPluginId',
        'pluginVersion' => 'getPluginVersion',
        'qrCodeUrl' => 'getQrCodeUrl'
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
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['betaStatus'] = $data['betaStatus'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['pluginId'] = $data['pluginId'] ?? null;
        $this->container['pluginVersion'] = $data['pluginVersion'] ?? null;
        $this->container['qrCodeUrl'] = $data['qrCodeUrl'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets appName
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     *
     * @param string|null $appName 小程序名称
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets betaStatus
     *
     * @return string|null
     */
    public function getBetaStatus()
    {
        return $this->container['betaStatus'];
    }

    /**
     * Sets betaStatus
     *
     * @param string|null $betaStatus 被邀测状态，待确认WAITCHECK/确认CHECKED/拒绝REJECT
     *
     * @return self
     */
    public function setBetaStatus($betaStatus)
    {
        $this->container['betaStatus'] = $betaStatus;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 拒绝原因
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets miniAppId
     *
     * @return string|null
     */
    public function getMiniAppId()
    {
        return $this->container['miniAppId'];
    }

    /**
     * Sets miniAppId
     *
     * @param string|null $miniAppId 小程序ID
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets pluginId
     *
     * @return string|null
     */
    public function getPluginId()
    {
        return $this->container['pluginId'];
    }

    /**
     * Sets pluginId
     *
     * @param string|null $pluginId 插件id
     *
     * @return self
     */
    public function setPluginId($pluginId)
    {
        $this->container['pluginId'] = $pluginId;

        return $this;
    }

    /**
     * Gets pluginVersion
     *
     * @return string|null
     */
    public function getPluginVersion()
    {
        return $this->container['pluginVersion'];
    }

    /**
     * Sets pluginVersion
     *
     * @param string|null $pluginVersion 插件版本
     *
     * @return self
     */
    public function setPluginVersion($pluginVersion)
    {
        $this->container['pluginVersion'] = $pluginVersion;

        return $this;
    }

    /**
     * Gets qrCodeUrl
     *
     * @return string|null
     */
    public function getQrCodeUrl()
    {
        return $this->container['qrCodeUrl'];
    }

    /**
     * Sets qrCodeUrl
     *
     * @param string|null $qrCodeUrl 邀测二维码
     *
     * @return self
     */
    public function setQrCodeUrl($qrCodeUrl)
    {
        $this->container['qrCodeUrl'] = $qrCodeUrl;

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

