<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * All supported message transforms types.
 *
 * Generated from protobuf message <code>google.pubsub.v1.MessageTransform</code>
 */
class MessageTransform extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. If set to true, the transform is enabled. If false, the transform
     * is disabled and will not be applied to messages. Defaults to `true`.
     *
     * Generated from protobuf field <code>bool enabled = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enabled = false;
    protected $transform;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\PubSub\V1\JavaScriptUDF $javascript_udf
     *           Optional. JavaScript User Defined Function. If multiple JavaScriptUDF's
     *           are specified on a resource, each must have a unique `function_name`.
     *     @type bool $enabled
     *           Optional. If set to true, the transform is enabled. If false, the transform
     *           is disabled and will not be applied to messages. Defaults to `true`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. JavaScript User Defined Function. If multiple JavaScriptUDF's
     * are specified on a resource, each must have a unique `function_name`.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.JavaScriptUDF javascript_udf = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\PubSub\V1\JavaScriptUDF|null
     */
    public function getJavascriptUdf()
    {
        return $this->readOneof(2);
    }

    public function hasJavascriptUdf()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. JavaScript User Defined Function. If multiple JavaScriptUDF's
     * are specified on a resource, each must have a unique `function_name`.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.JavaScriptUDF javascript_udf = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\PubSub\V1\JavaScriptUDF $var
     * @return $this
     */
    public function setJavascriptUdf($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\JavaScriptUDF::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. If set to true, the transform is enabled. If false, the transform
     * is disabled and will not be applied to messages. Defaults to `true`.
     *
     * Generated from protobuf field <code>bool enabled = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Optional. If set to true, the transform is enabled. If false, the transform
     * is disabled and will not be applied to messages. Defaults to `true`.
     *
     * Generated from protobuf field <code>bool enabled = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransform()
    {
        return $this->whichOneof("transform");
    }

}

