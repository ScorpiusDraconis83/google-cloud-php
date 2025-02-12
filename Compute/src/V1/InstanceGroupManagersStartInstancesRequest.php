<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupManagersStartInstancesRequest</code>
 */
class InstanceGroupManagersStartInstancesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The URLs of one or more instances to start. This can be a full URL or a partial URL, such as zones/[ZONE]/instances/[INSTANCE_NAME].
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     */
    private $instances;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $instances
     *           The URLs of one or more instances to start. This can be a full URL or a partial URL, such as zones/[ZONE]/instances/[INSTANCE_NAME].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The URLs of one or more instances to start. This can be a full URL or a partial URL, such as zones/[ZONE]/instances/[INSTANCE_NAME].
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * The URLs of one or more instances to start. This can be a full URL or a partial URL, such as zones/[ZONE]/instances/[INSTANCE_NAME].
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->instances = $arr;

        return $this;
    }

}

