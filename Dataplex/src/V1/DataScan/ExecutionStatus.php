<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/datascans.proto

namespace Google\Cloud\Dataplex\V1\DataScan;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Status of the data scan execution.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataScan.ExecutionStatus</code>
 */
class ExecutionStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The time when the latest DataScanJob started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_job_start_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $latest_job_start_time = null;
    /**
     * Optional. The time when the latest DataScanJob ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_job_end_time = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $latest_job_end_time = null;
    /**
     * Optional. The time when the DataScanJob execution was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_job_create_time = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $latest_job_create_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $latest_job_start_time
     *           Optional. The time when the latest DataScanJob started.
     *     @type \Google\Protobuf\Timestamp $latest_job_end_time
     *           Optional. The time when the latest DataScanJob ended.
     *     @type \Google\Protobuf\Timestamp $latest_job_create_time
     *           Optional. The time when the DataScanJob execution was created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Datascans::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The time when the latest DataScanJob started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_job_start_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLatestJobStartTime()
    {
        return $this->latest_job_start_time;
    }

    public function hasLatestJobStartTime()
    {
        return isset($this->latest_job_start_time);
    }

    public function clearLatestJobStartTime()
    {
        unset($this->latest_job_start_time);
    }

    /**
     * Optional. The time when the latest DataScanJob started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_job_start_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLatestJobStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->latest_job_start_time = $var;

        return $this;
    }

    /**
     * Optional. The time when the latest DataScanJob ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_job_end_time = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLatestJobEndTime()
    {
        return $this->latest_job_end_time;
    }

    public function hasLatestJobEndTime()
    {
        return isset($this->latest_job_end_time);
    }

    public function clearLatestJobEndTime()
    {
        unset($this->latest_job_end_time);
    }

    /**
     * Optional. The time when the latest DataScanJob ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_job_end_time = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLatestJobEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->latest_job_end_time = $var;

        return $this;
    }

    /**
     * Optional. The time when the DataScanJob execution was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_job_create_time = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLatestJobCreateTime()
    {
        return $this->latest_job_create_time;
    }

    public function hasLatestJobCreateTime()
    {
        return isset($this->latest_job_create_time);
    }

    public function clearLatestJobCreateTime()
    {
        unset($this->latest_job_create_time);
    }

    /**
     * Optional. The time when the DataScanJob execution was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_job_create_time = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLatestJobCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->latest_job_create_time = $var;

        return $this;
    }

}


