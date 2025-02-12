<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/common_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for node pool kubelet options.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.NodeKubeletConfig</code>
 */
class NodeKubeletConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Enable the insecure kubelet read only port.
     *
     * Generated from protobuf field <code>bool insecure_kubelet_readonly_port_enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $insecure_kubelet_readonly_port_enabled = false;
    /**
     * Optional. Control the CPU management policy on the node.
     * See
     * https://kubernetes.io/docs/tasks/administer-cluster/cpu-management-policies/
     * The following values are allowed.
     * * "none": the default, which represents the existing scheduling behavior.
     * * "static": allows pods with certain resource characteristics to be granted
     * increased CPU affinity and exclusivity on the node.
     * The default value is 'none' if unspecified.
     *
     * Generated from protobuf field <code>optional string cpu_manager_policy = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cpu_manager_policy = null;
    /**
     * Optional. Enable CPU CFS quota enforcement for containers that specify CPU
     * limits.
     * This option is enabled by default which makes kubelet use CFS quota
     * (https://www.kernel.org/doc/Documentation/scheduler/sched-bwc.txt) to
     * enforce container CPU limits. Otherwise, CPU limits will not be enforced at
     * all.
     * Disable this option to mitigate CPU throttling problems while still having
     * your pods to be in Guaranteed QoS class by specifying the CPU limits.
     * The default value is 'true' if unspecified.
     *
     * Generated from protobuf field <code>optional bool cpu_cfs_quota = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cpu_cfs_quota = null;
    /**
     * Optional. Set the CPU CFS quota period value 'cpu.cfs_period_us'.
     * The string must be a sequence of decimal numbers, each with optional
     * fraction and a unit suffix, such as "300ms".
     * Valid time units are "ns", "us" (or "µs"), "ms", "s", "m", "h".
     * The value must be a positive duration.
     * The default value is '100ms' if unspecified.
     *
     * Generated from protobuf field <code>optional string cpu_cfs_quota_period = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cpu_cfs_quota_period = null;
    /**
     * Optional. Set the Pod PID limits. See
     * https://kubernetes.io/docs/concepts/policy/pid-limiting/#pod-pid-limits
     * Controls the maximum number of processes allowed to run in a pod. The value
     * must be greater than or equal to 1024 and less than 4194304.
     *
     * Generated from protobuf field <code>optional int64 pod_pids_limit = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $pod_pids_limit = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $insecure_kubelet_readonly_port_enabled
     *           Optional. Enable the insecure kubelet read only port.
     *     @type string $cpu_manager_policy
     *           Optional. Control the CPU management policy on the node.
     *           See
     *           https://kubernetes.io/docs/tasks/administer-cluster/cpu-management-policies/
     *           The following values are allowed.
     *           * "none": the default, which represents the existing scheduling behavior.
     *           * "static": allows pods with certain resource characteristics to be granted
     *           increased CPU affinity and exclusivity on the node.
     *           The default value is 'none' if unspecified.
     *     @type bool $cpu_cfs_quota
     *           Optional. Enable CPU CFS quota enforcement for containers that specify CPU
     *           limits.
     *           This option is enabled by default which makes kubelet use CFS quota
     *           (https://www.kernel.org/doc/Documentation/scheduler/sched-bwc.txt) to
     *           enforce container CPU limits. Otherwise, CPU limits will not be enforced at
     *           all.
     *           Disable this option to mitigate CPU throttling problems while still having
     *           your pods to be in Guaranteed QoS class by specifying the CPU limits.
     *           The default value is 'true' if unspecified.
     *     @type string $cpu_cfs_quota_period
     *           Optional. Set the CPU CFS quota period value 'cpu.cfs_period_us'.
     *           The string must be a sequence of decimal numbers, each with optional
     *           fraction and a unit suffix, such as "300ms".
     *           Valid time units are "ns", "us" (or "µs"), "ms", "s", "m", "h".
     *           The value must be a positive duration.
     *           The default value is '100ms' if unspecified.
     *     @type int|string $pod_pids_limit
     *           Optional. Set the Pod PID limits. See
     *           https://kubernetes.io/docs/concepts/policy/pid-limiting/#pod-pid-limits
     *           Controls the maximum number of processes allowed to run in a pod. The value
     *           must be greater than or equal to 1024 and less than 4194304.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\CommonResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Enable the insecure kubelet read only port.
     *
     * Generated from protobuf field <code>bool insecure_kubelet_readonly_port_enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getInsecureKubeletReadonlyPortEnabled()
    {
        return $this->insecure_kubelet_readonly_port_enabled;
    }

    /**
     * Optional. Enable the insecure kubelet read only port.
     *
     * Generated from protobuf field <code>bool insecure_kubelet_readonly_port_enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setInsecureKubeletReadonlyPortEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->insecure_kubelet_readonly_port_enabled = $var;

        return $this;
    }

    /**
     * Optional. Control the CPU management policy on the node.
     * See
     * https://kubernetes.io/docs/tasks/administer-cluster/cpu-management-policies/
     * The following values are allowed.
     * * "none": the default, which represents the existing scheduling behavior.
     * * "static": allows pods with certain resource characteristics to be granted
     * increased CPU affinity and exclusivity on the node.
     * The default value is 'none' if unspecified.
     *
     * Generated from protobuf field <code>optional string cpu_manager_policy = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCpuManagerPolicy()
    {
        return isset($this->cpu_manager_policy) ? $this->cpu_manager_policy : '';
    }

    public function hasCpuManagerPolicy()
    {
        return isset($this->cpu_manager_policy);
    }

    public function clearCpuManagerPolicy()
    {
        unset($this->cpu_manager_policy);
    }

    /**
     * Optional. Control the CPU management policy on the node.
     * See
     * https://kubernetes.io/docs/tasks/administer-cluster/cpu-management-policies/
     * The following values are allowed.
     * * "none": the default, which represents the existing scheduling behavior.
     * * "static": allows pods with certain resource characteristics to be granted
     * increased CPU affinity and exclusivity on the node.
     * The default value is 'none' if unspecified.
     *
     * Generated from protobuf field <code>optional string cpu_manager_policy = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCpuManagerPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpu_manager_policy = $var;

        return $this;
    }

    /**
     * Optional. Enable CPU CFS quota enforcement for containers that specify CPU
     * limits.
     * This option is enabled by default which makes kubelet use CFS quota
     * (https://www.kernel.org/doc/Documentation/scheduler/sched-bwc.txt) to
     * enforce container CPU limits. Otherwise, CPU limits will not be enforced at
     * all.
     * Disable this option to mitigate CPU throttling problems while still having
     * your pods to be in Guaranteed QoS class by specifying the CPU limits.
     * The default value is 'true' if unspecified.
     *
     * Generated from protobuf field <code>optional bool cpu_cfs_quota = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getCpuCfsQuota()
    {
        return isset($this->cpu_cfs_quota) ? $this->cpu_cfs_quota : false;
    }

    public function hasCpuCfsQuota()
    {
        return isset($this->cpu_cfs_quota);
    }

    public function clearCpuCfsQuota()
    {
        unset($this->cpu_cfs_quota);
    }

    /**
     * Optional. Enable CPU CFS quota enforcement for containers that specify CPU
     * limits.
     * This option is enabled by default which makes kubelet use CFS quota
     * (https://www.kernel.org/doc/Documentation/scheduler/sched-bwc.txt) to
     * enforce container CPU limits. Otherwise, CPU limits will not be enforced at
     * all.
     * Disable this option to mitigate CPU throttling problems while still having
     * your pods to be in Guaranteed QoS class by specifying the CPU limits.
     * The default value is 'true' if unspecified.
     *
     * Generated from protobuf field <code>optional bool cpu_cfs_quota = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setCpuCfsQuota($var)
    {
        GPBUtil::checkBool($var);
        $this->cpu_cfs_quota = $var;

        return $this;
    }

    /**
     * Optional. Set the CPU CFS quota period value 'cpu.cfs_period_us'.
     * The string must be a sequence of decimal numbers, each with optional
     * fraction and a unit suffix, such as "300ms".
     * Valid time units are "ns", "us" (or "µs"), "ms", "s", "m", "h".
     * The value must be a positive duration.
     * The default value is '100ms' if unspecified.
     *
     * Generated from protobuf field <code>optional string cpu_cfs_quota_period = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCpuCfsQuotaPeriod()
    {
        return isset($this->cpu_cfs_quota_period) ? $this->cpu_cfs_quota_period : '';
    }

    public function hasCpuCfsQuotaPeriod()
    {
        return isset($this->cpu_cfs_quota_period);
    }

    public function clearCpuCfsQuotaPeriod()
    {
        unset($this->cpu_cfs_quota_period);
    }

    /**
     * Optional. Set the CPU CFS quota period value 'cpu.cfs_period_us'.
     * The string must be a sequence of decimal numbers, each with optional
     * fraction and a unit suffix, such as "300ms".
     * Valid time units are "ns", "us" (or "µs"), "ms", "s", "m", "h".
     * The value must be a positive duration.
     * The default value is '100ms' if unspecified.
     *
     * Generated from protobuf field <code>optional string cpu_cfs_quota_period = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCpuCfsQuotaPeriod($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpu_cfs_quota_period = $var;

        return $this;
    }

    /**
     * Optional. Set the Pod PID limits. See
     * https://kubernetes.io/docs/concepts/policy/pid-limiting/#pod-pid-limits
     * Controls the maximum number of processes allowed to run in a pod. The value
     * must be greater than or equal to 1024 and less than 4194304.
     *
     * Generated from protobuf field <code>optional int64 pod_pids_limit = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getPodPidsLimit()
    {
        return isset($this->pod_pids_limit) ? $this->pod_pids_limit : 0;
    }

    public function hasPodPidsLimit()
    {
        return isset($this->pod_pids_limit);
    }

    public function clearPodPidsLimit()
    {
        unset($this->pod_pids_limit);
    }

    /**
     * Optional. Set the Pod PID limits. See
     * https://kubernetes.io/docs/concepts/policy/pid-limiting/#pod-pid-limits
     * Controls the maximum number of processes allowed to run in a pod. The value
     * must be greater than or equal to 1024 and less than 4194304.
     *
     * Generated from protobuf field <code>optional int64 pod_pids_limit = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPodPidsLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->pod_pids_limit = $var;

        return $this;
    }

}

