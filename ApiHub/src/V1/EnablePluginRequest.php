<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/plugin_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The [EnablePlugin][google.cloud.apihub.v1.ApiHubPlugin.EnablePlugin] method's
 * request.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.EnablePluginRequest</code>
 */
class EnablePluginRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the plugin to enable.
     * Format: `projects/{project}/locations/{location}/plugins/{plugin}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the plugin to enable.
     *                     Format: `projects/{project}/locations/{location}/plugins/{plugin}`. Please see
     *                     {@see ApiHubPluginClient::pluginName()} for help formatting this field.
     *
     * @return \Google\Cloud\ApiHub\V1\EnablePluginRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the plugin to enable.
     *           Format: `projects/{project}/locations/{location}/plugins/{plugin}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\PluginService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the plugin to enable.
     * Format: `projects/{project}/locations/{location}/plugins/{plugin}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the plugin to enable.
     * Format: `projects/{project}/locations/{location}/plugins/{plugin}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

