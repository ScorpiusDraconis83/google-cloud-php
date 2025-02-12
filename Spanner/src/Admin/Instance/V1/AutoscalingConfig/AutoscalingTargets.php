<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The autoscaling targets for an instance.
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.AutoscalingConfig.AutoscalingTargets</code>
 */
class AutoscalingTargets extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The target high priority cpu utilization percentage that the
     * autoscaler should be trying to achieve for the instance. This number is
     * on a scale from 0 (no utilization) to 100 (full utilization). The valid
     * range is [10, 90] inclusive.
     *
     * Generated from protobuf field <code>int32 high_priority_cpu_utilization_percent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $high_priority_cpu_utilization_percent = 0;
    /**
     * Required. The target storage utilization percentage that the autoscaler
     * should be trying to achieve for the instance. This number is on a scale
     * from 0 (no utilization) to 100 (full utilization). The valid range is
     * [10, 99] inclusive.
     *
     * Generated from protobuf field <code>int32 storage_utilization_percent = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $storage_utilization_percent = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $high_priority_cpu_utilization_percent
     *           Required. The target high priority cpu utilization percentage that the
     *           autoscaler should be trying to achieve for the instance. This number is
     *           on a scale from 0 (no utilization) to 100 (full utilization). The valid
     *           range is [10, 90] inclusive.
     *     @type int $storage_utilization_percent
     *           Required. The target storage utilization percentage that the autoscaler
     *           should be trying to achieve for the instance. This number is on a scale
     *           from 0 (no utilization) to 100 (full utilization). The valid range is
     *           [10, 99] inclusive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The target high priority cpu utilization percentage that the
     * autoscaler should be trying to achieve for the instance. This number is
     * on a scale from 0 (no utilization) to 100 (full utilization). The valid
     * range is [10, 90] inclusive.
     *
     * Generated from protobuf field <code>int32 high_priority_cpu_utilization_percent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getHighPriorityCpuUtilizationPercent()
    {
        return $this->high_priority_cpu_utilization_percent;
    }

    /**
     * Required. The target high priority cpu utilization percentage that the
     * autoscaler should be trying to achieve for the instance. This number is
     * on a scale from 0 (no utilization) to 100 (full utilization). The valid
     * range is [10, 90] inclusive.
     *
     * Generated from protobuf field <code>int32 high_priority_cpu_utilization_percent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setHighPriorityCpuUtilizationPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->high_priority_cpu_utilization_percent = $var;

        return $this;
    }

    /**
     * Required. The target storage utilization percentage that the autoscaler
     * should be trying to achieve for the instance. This number is on a scale
     * from 0 (no utilization) to 100 (full utilization). The valid range is
     * [10, 99] inclusive.
     *
     * Generated from protobuf field <code>int32 storage_utilization_percent = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getStorageUtilizationPercent()
    {
        return $this->storage_utilization_percent;
    }

    /**
     * Required. The target storage utilization percentage that the autoscaler
     * should be trying to achieve for the instance. This number is on a scale
     * from 0 (no utilization) to 100 (full utilization). The valid range is
     * [10, 99] inclusive.
     *
     * Generated from protobuf field <code>int32 storage_utilization_percent = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setStorageUtilizationPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->storage_utilization_percent = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AutoscalingTargets::class, \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig_AutoscalingTargets::class);

