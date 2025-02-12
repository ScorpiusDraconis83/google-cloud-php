<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/runtime.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Runtime using Virtual Machine for computing.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.VirtualMachine</code>
 */
class VirtualMachine extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The user-friendly name of the Managed Compute Engine instance.
     *
     * Generated from protobuf field <code>string instance_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $instance_name = '';
    /**
     * Output only. The unique identifier of the Managed Compute Engine instance.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $instance_id = '';
    /**
     * Virtual Machine configuration settings.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.VirtualMachineConfig virtual_machine_config = 3;</code>
     */
    protected $virtual_machine_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_name
     *           Output only. The user-friendly name of the Managed Compute Engine instance.
     *     @type string $instance_id
     *           Output only. The unique identifier of the Managed Compute Engine instance.
     *     @type \Google\Cloud\Notebooks\V1\VirtualMachineConfig $virtual_machine_config
     *           Virtual Machine configuration settings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Runtime::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The user-friendly name of the Managed Compute Engine instance.
     *
     * Generated from protobuf field <code>string instance_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getInstanceName()
    {
        return $this->instance_name;
    }

    /**
     * Output only. The user-friendly name of the Managed Compute Engine instance.
     *
     * Generated from protobuf field <code>string instance_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_name = $var;

        return $this;
    }

    /**
     * Output only. The unique identifier of the Managed Compute Engine instance.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * Output only. The unique identifier of the Managed Compute Engine instance.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;

        return $this;
    }

    /**
     * Virtual Machine configuration settings.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.VirtualMachineConfig virtual_machine_config = 3;</code>
     * @return \Google\Cloud\Notebooks\V1\VirtualMachineConfig|null
     */
    public function getVirtualMachineConfig()
    {
        return $this->virtual_machine_config;
    }

    public function hasVirtualMachineConfig()
    {
        return isset($this->virtual_machine_config);
    }

    public function clearVirtualMachineConfig()
    {
        unset($this->virtual_machine_config);
    }

    /**
     * Virtual Machine configuration settings.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.VirtualMachineConfig virtual_machine_config = 3;</code>
     * @param \Google\Cloud\Notebooks\V1\VirtualMachineConfig $var
     * @return $this
     */
    public function setVirtualMachineConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V1\VirtualMachineConfig::class);
        $this->virtual_machine_config = $var;

        return $this;
    }

}

