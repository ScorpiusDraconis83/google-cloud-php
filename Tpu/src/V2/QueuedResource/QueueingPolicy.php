<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace Google\Cloud\Tpu\V2\QueuedResource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines the policy of the QueuedRequest.
 *
 * Generated from protobuf message <code>google.cloud.tpu.v2.QueuedResource.QueueingPolicy</code>
 */
class QueueingPolicy extends \Google\Protobuf\Internal\Message
{
    protected $start_timing_constraints;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $valid_until_duration
     *           Optional. A relative time after which resources should not be created.
     *           If the request cannot be fulfilled by this time the request will be
     *           failed.
     *     @type \Google\Protobuf\Timestamp $valid_until_time
     *           Optional. An absolute time after which resources should not be created.
     *           If the request cannot be fulfilled by this time the request will be
     *           failed.
     *     @type \Google\Protobuf\Duration $valid_after_duration
     *           Optional. A relative time after which resources may be created.
     *     @type \Google\Protobuf\Timestamp $valid_after_time
     *           Optional. An absolute time after which resources may be created.
     *     @type \Google\Type\Interval $valid_interval
     *           Optional. An absolute time interval within which resources may be
     *           created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tpu\V2\CloudTpu::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A relative time after which resources should not be created.
     * If the request cannot be fulfilled by this time the request will be
     * failed.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration valid_until_duration = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getValidUntilDuration()
    {
        return $this->readOneof(1);
    }

    public function hasValidUntilDuration()
    {
        return $this->hasOneof(1);
    }

    /**
     * Optional. A relative time after which resources should not be created.
     * If the request cannot be fulfilled by this time the request will be
     * failed.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration valid_until_duration = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setValidUntilDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Optional. An absolute time after which resources should not be created.
     * If the request cannot be fulfilled by this time the request will be
     * failed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_until_time = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getValidUntilTime()
    {
        return $this->readOneof(2);
    }

    public function hasValidUntilTime()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. An absolute time after which resources should not be created.
     * If the request cannot be fulfilled by this time the request will be
     * failed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_until_time = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setValidUntilTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. A relative time after which resources may be created.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration valid_after_duration = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getValidAfterDuration()
    {
        return $this->readOneof(3);
    }

    public function hasValidAfterDuration()
    {
        return $this->hasOneof(3);
    }

    /**
     * Optional. A relative time after which resources may be created.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration valid_after_duration = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setValidAfterDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional. An absolute time after which resources may be created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_after_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getValidAfterTime()
    {
        return $this->readOneof(4);
    }

    public function hasValidAfterTime()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. An absolute time after which resources may be created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_after_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setValidAfterTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Optional. An absolute time interval within which resources may be
     * created.
     *
     * Generated from protobuf field <code>.google.type.Interval valid_interval = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Type\Interval|null
     */
    public function getValidInterval()
    {
        return $this->readOneof(5);
    }

    public function hasValidInterval()
    {
        return $this->hasOneof(5);
    }

    /**
     * Optional. An absolute time interval within which resources may be
     * created.
     *
     * Generated from protobuf field <code>.google.type.Interval valid_interval = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Type\Interval $var
     * @return $this
     */
    public function setValidInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Interval::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStartTimingConstraints()
    {
        return $this->whichOneof("start_timing_constraints");
    }

}


