<?php
/*
Copyright (c) 2018 Aspose Pty Ltd. All Rights Reserved.

Licensed under the MIT (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

      https://github.com/aspose-omr-cloud/aspose-omr-cloud-php/blob/master/LICENSE

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.



    Aspose.OMR for Cloud API Reference

    Aspose.OMR for Cloud helps performing optical mark recognition in the cloud

    OpenAPI spec version: 1.1
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git
*/

/**
 * OmrResponseContent
 *
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\Omr
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Aspose\Omr\Model;

use \ArrayAccess;

/**
 * OmrResponseContent Class Doc Comment
 *
 * @category    Class
 * @description Represents information about part of the text.
 * @package     Aspose\Omr
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OmrResponseContent implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OmrResponseContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'templateId' => 'string',
        'executionTime' => 'double',
        'responseFiles' => '\Aspose\Omr\Model\FileInfo[]',
        'info' => '\Aspose\Omr\Model\OmrResponseInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'templateId' => null,
        'executionTime' => 'double',
        'responseFiles' => null,
        'info' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'templateId' => 'TemplateId',
        'executionTime' => 'ExecutionTime',
        'responseFiles' => 'ResponseFiles',
        'info' => 'Info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'templateId' => 'setTemplateId',
        'executionTime' => 'setExecutionTime',
        'responseFiles' => 'setResponseFiles',
        'info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'templateId' => 'getTemplateId',
        'executionTime' => 'getExecutionTime',
        'responseFiles' => 'getResponseFiles',
        'info' => 'getInfo'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['executionTime'] = isset($data['executionTime']) ? $data['executionTime'] : null;
        $this->container['responseFiles'] = isset($data['responseFiles']) ? $data['responseFiles'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['executionTime'] === null) {
            $invalid_properties[] = "'executionTime' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['executionTime'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets templateId
     * @return string
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     * @param string $templateId GUID string that is used to identify template on server This value is assigned after Template Correction and used later in Template Finalization and Image Recognition
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets executionTime
     * @return double
     */
    public function getExecutionTime()
    {
        return $this->container['executionTime'];
    }

    /**
     * Sets executionTime
     * @param double $executionTime Indicates how long it took to perform task on server.
     * @return $this
     */
    public function setExecutionTime($executionTime)
    {
        $this->container['executionTime'] = $executionTime;

        return $this;
    }

    /**
     * Gets responseFiles
     * @return \Aspose\Omr\Model\FileInfo[]
     */
    public function getResponseFiles()
    {
        return $this->container['responseFiles'];
    }

    /**
     * Sets responseFiles
     * @param \Aspose\Omr\Model\FileInfo[] $responseFiles This structure holds array of files returned in response Type and content of files differes depending on action
     * @return $this
     */
    public function setResponseFiles($responseFiles)
    {
        $this->container['responseFiles'] = $responseFiles;

        return $this;
    }

    /**
     * Gets info
     * @return \Aspose\Omr\Model\OmrResponseInfo
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     * @param \Aspose\Omr\Model\OmrResponseInfo $info
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Aspose\Omr\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Aspose\Omr\ObjectSerializer::sanitizeForSerialization($this));
    }
}

