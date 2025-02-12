<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/pipeline_job.proto

namespace Google\Cloud\AIPlatform\V1\PipelineTaskExecutorDetail;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The detailed info for a custom job executor.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PipelineTaskExecutorDetail.CustomJobDetail</code>
 */
class CustomJobDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the
     * [CustomJob][google.cloud.aiplatform.v1.CustomJob].
     *
     * Generated from protobuf field <code>string job = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $job = '';
    /**
     * Output only. The names of the previously failed
     * [CustomJob][google.cloud.aiplatform.v1.CustomJob]. The list includes the
     * all attempts in chronological order.
     *
     * Generated from protobuf field <code>repeated string failed_jobs = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $failed_jobs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $job
     *           Output only. The name of the
     *           [CustomJob][google.cloud.aiplatform.v1.CustomJob].
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $failed_jobs
     *           Output only. The names of the previously failed
     *           [CustomJob][google.cloud.aiplatform.v1.CustomJob]. The list includes the
     *           all attempts in chronological order.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PipelineJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the
     * [CustomJob][google.cloud.aiplatform.v1.CustomJob].
     *
     * Generated from protobuf field <code>string job = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Output only. The name of the
     * [CustomJob][google.cloud.aiplatform.v1.CustomJob].
     *
     * Generated from protobuf field <code>string job = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkString($var, True);
        $this->job = $var;

        return $this;
    }

    /**
     * Output only. The names of the previously failed
     * [CustomJob][google.cloud.aiplatform.v1.CustomJob]. The list includes the
     * all attempts in chronological order.
     *
     * Generated from protobuf field <code>repeated string failed_jobs = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFailedJobs()
    {
        return $this->failed_jobs;
    }

    /**
     * Output only. The names of the previously failed
     * [CustomJob][google.cloud.aiplatform.v1.CustomJob]. The list includes the
     * all attempts in chronological order.
     *
     * Generated from protobuf field <code>repeated string failed_jobs = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFailedJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->failed_jobs = $arr;

        return $this;
    }

}


