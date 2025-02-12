<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/schedule.proto

namespace Google\Cloud\AIPlatform\V1\Schedule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Status of a scheduled run.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Schedule.RunResponse</code>
 */
class RunResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The scheduled run time based on the user-specified schedule.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduled_run_time = 1;</code>
     */
    protected $scheduled_run_time = null;
    /**
     * The response of the scheduled run.
     *
     * Generated from protobuf field <code>string run_response = 2;</code>
     */
    protected $run_response = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $scheduled_run_time
     *           The scheduled run time based on the user-specified schedule.
     *     @type string $run_response
     *           The response of the scheduled run.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Schedule::initOnce();
        parent::__construct($data);
    }

    /**
     * The scheduled run time based on the user-specified schedule.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduled_run_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getScheduledRunTime()
    {
        return $this->scheduled_run_time;
    }

    public function hasScheduledRunTime()
    {
        return isset($this->scheduled_run_time);
    }

    public function clearScheduledRunTime()
    {
        unset($this->scheduled_run_time);
    }

    /**
     * The scheduled run time based on the user-specified schedule.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduled_run_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setScheduledRunTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->scheduled_run_time = $var;

        return $this;
    }

    /**
     * The response of the scheduled run.
     *
     * Generated from protobuf field <code>string run_response = 2;</code>
     * @return string
     */
    public function getRunResponse()
    {
        return $this->run_response;
    }

    /**
     * The response of the scheduled run.
     *
     * Generated from protobuf field <code>string run_response = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRunResponse($var)
    {
        GPBUtil::checkString($var, True);
        $this->run_response = $var;

        return $this;
    }

}


