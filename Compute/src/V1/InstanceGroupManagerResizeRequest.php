<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * InstanceGroupManagerResizeRequest represents a request to create a number of VMs: either immediately or by queuing the request for the specified time. This resize request is nested under InstanceGroupManager and the VMs created by this request are added to the owning InstanceGroupManager.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupManagerResizeRequest</code>
 */
class InstanceGroupManagerResizeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The creation timestamp for this resize request in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * [Output Only] A unique identifier for this resource type. The server generates this identifier.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] The resource type, which is always compute#instanceGroupManagerResizeRequest for resize requests.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * The name of this resize request. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * Requested run duration for instances that will be created by this request. At the end of the run duration instance will be deleted.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Duration requested_run_duration = 232146425;</code>
     */
    private $requested_run_duration = null;
    /**
     * The number of instances to be created by this resize request. The group's target size will be increased by this number. This field cannot be used together with 'instances'.
     *
     * Generated from protobuf field <code>optional int32 resize_by = 533735362;</code>
     */
    private $resize_by = null;
    /**
     * [Output Only] The URL for this resize request. The server defines this URL.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] Server-defined URL for this resource with the resource id.
     *
     * Generated from protobuf field <code>optional string self_link_with_id = 44520962;</code>
     */
    private $self_link_with_id = null;
    /**
     * [Output only] Current state of the request.
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     */
    private $state = null;
    /**
     * [Output only] Status of the request.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceGroupManagerResizeRequestStatus status = 181260274;</code>
     */
    private $status = null;
    /**
     * [Output Only] The URL of a zone where the resize request is located. Populated only for zonal resize requests.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     */
    private $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *           [Output Only] The creation timestamp for this resize request in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource.
     *     @type int|string $id
     *           [Output Only] A unique identifier for this resource type. The server generates this identifier.
     *     @type string $kind
     *           [Output Only] The resource type, which is always compute#instanceGroupManagerResizeRequest for resize requests.
     *     @type string $name
     *           The name of this resize request. The name must be 1-63 characters long, and comply with RFC1035.
     *     @type \Google\Cloud\Compute\V1\Duration $requested_run_duration
     *           Requested run duration for instances that will be created by this request. At the end of the run duration instance will be deleted.
     *     @type int $resize_by
     *           The number of instances to be created by this resize request. The group's target size will be increased by this number. This field cannot be used together with 'instances'.
     *     @type string $self_link
     *           [Output Only] The URL for this resize request. The server defines this URL.
     *     @type string $self_link_with_id
     *           [Output Only] Server-defined URL for this resource with the resource id.
     *     @type string $state
     *           [Output only] Current state of the request.
     *           Check the State enum for the list of possible values.
     *     @type \Google\Cloud\Compute\V1\InstanceGroupManagerResizeRequestStatus $status
     *           [Output only] Status of the request.
     *     @type string $zone
     *           [Output Only] The URL of a zone where the resize request is located. Populated only for zonal resize requests.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The creation timestamp for this resize request in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] The creation timestamp for this resize request in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * [Output Only] A unique identifier for this resource type. The server generates this identifier.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] A unique identifier for this resource type. The server generates this identifier.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] The resource type, which is always compute#instanceGroupManagerResizeRequest for resize requests.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] The resource type, which is always compute#instanceGroupManagerResizeRequest for resize requests.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The name of this resize request. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of this resize request. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Requested run duration for instances that will be created by this request. At the end of the run duration instance will be deleted.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Duration requested_run_duration = 232146425;</code>
     * @return \Google\Cloud\Compute\V1\Duration|null
     */
    public function getRequestedRunDuration()
    {
        return $this->requested_run_duration;
    }

    public function hasRequestedRunDuration()
    {
        return isset($this->requested_run_duration);
    }

    public function clearRequestedRunDuration()
    {
        unset($this->requested_run_duration);
    }

    /**
     * Requested run duration for instances that will be created by this request. At the end of the run duration instance will be deleted.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Duration requested_run_duration = 232146425;</code>
     * @param \Google\Cloud\Compute\V1\Duration $var
     * @return $this
     */
    public function setRequestedRunDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Duration::class);
        $this->requested_run_duration = $var;

        return $this;
    }

    /**
     * The number of instances to be created by this resize request. The group's target size will be increased by this number. This field cannot be used together with 'instances'.
     *
     * Generated from protobuf field <code>optional int32 resize_by = 533735362;</code>
     * @return int
     */
    public function getResizeBy()
    {
        return isset($this->resize_by) ? $this->resize_by : 0;
    }

    public function hasResizeBy()
    {
        return isset($this->resize_by);
    }

    public function clearResizeBy()
    {
        unset($this->resize_by);
    }

    /**
     * The number of instances to be created by this resize request. The group's target size will be increased by this number. This field cannot be used together with 'instances'.
     *
     * Generated from protobuf field <code>optional int32 resize_by = 533735362;</code>
     * @param int $var
     * @return $this
     */
    public function setResizeBy($var)
    {
        GPBUtil::checkInt32($var);
        $this->resize_by = $var;

        return $this;
    }

    /**
     * [Output Only] The URL for this resize request. The server defines this URL.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] The URL for this resize request. The server defines this URL.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for this resource with the resource id.
     *
     * Generated from protobuf field <code>optional string self_link_with_id = 44520962;</code>
     * @return string
     */
    public function getSelfLinkWithId()
    {
        return isset($this->self_link_with_id) ? $this->self_link_with_id : '';
    }

    public function hasSelfLinkWithId()
    {
        return isset($this->self_link_with_id);
    }

    public function clearSelfLinkWithId()
    {
        unset($this->self_link_with_id);
    }

    /**
     * [Output Only] Server-defined URL for this resource with the resource id.
     *
     * Generated from protobuf field <code>optional string self_link_with_id = 44520962;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLinkWithId($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link_with_id = $var;

        return $this;
    }

    /**
     * [Output only] Current state of the request.
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     * @return string
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : '';
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * [Output only] Current state of the request.
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * [Output only] Status of the request.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceGroupManagerResizeRequestStatus status = 181260274;</code>
     * @return \Google\Cloud\Compute\V1\InstanceGroupManagerResizeRequestStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output only] Status of the request.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceGroupManagerResizeRequestStatus status = 181260274;</code>
     * @param \Google\Cloud\Compute\V1\InstanceGroupManagerResizeRequestStatus $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InstanceGroupManagerResizeRequestStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of a zone where the resize request is located. Populated only for zonal resize requests.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * [Output Only] The URL of a zone where the resize request is located. Populated only for zonal resize requests.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

