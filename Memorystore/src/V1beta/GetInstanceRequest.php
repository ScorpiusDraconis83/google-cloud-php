<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memorystore/v1beta/memorystore.proto

namespace Google\Cloud\Memorystore\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [GetInstance][].
 *
 * Generated from protobuf message <code>google.cloud.memorystore.v1beta.GetInstanceRequest</code>
 */
class GetInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the instance to retrieve.
     * Format: projects/{project}/locations/{location}/instances/{instance}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the instance to retrieve.
     *                     Format: projects/{project}/locations/{location}/instances/{instance}
     *                     Please see {@see MemorystoreClient::instanceName()} for help formatting this field.
     *
     * @return \Google\Cloud\Memorystore\V1beta\GetInstanceRequest
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
     *           Required. The name of the instance to retrieve.
     *           Format: projects/{project}/locations/{location}/instances/{instance}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Memorystore\V1Beta\Memorystore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the instance to retrieve.
     * Format: projects/{project}/locations/{location}/instances/{instance}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the instance to retrieve.
     * Format: projects/{project}/locations/{location}/instances/{instance}
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

