<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input for summarization quality metric.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.SummarizationQualityInput</code>
 */
class SummarizationQualityInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Spec for summarization quality score metric.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SummarizationQualitySpec metric_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $metric_spec = null;
    /**
     * Required. Summarization quality instance.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SummarizationQualityInstance instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\SummarizationQualitySpec $metric_spec
     *           Required. Spec for summarization quality score metric.
     *     @type \Google\Cloud\AIPlatform\V1\SummarizationQualityInstance $instance
     *           Required. Summarization quality instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Spec for summarization quality score metric.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SummarizationQualitySpec metric_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\SummarizationQualitySpec|null
     */
    public function getMetricSpec()
    {
        return $this->metric_spec;
    }

    public function hasMetricSpec()
    {
        return isset($this->metric_spec);
    }

    public function clearMetricSpec()
    {
        unset($this->metric_spec);
    }

    /**
     * Required. Spec for summarization quality score metric.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SummarizationQualitySpec metric_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\SummarizationQualitySpec $var
     * @return $this
     */
    public function setMetricSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\SummarizationQualitySpec::class);
        $this->metric_spec = $var;

        return $this;
    }

    /**
     * Required. Summarization quality instance.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SummarizationQualityInstance instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\SummarizationQualityInstance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Required. Summarization quality instance.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SummarizationQualityInstance instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\SummarizationQualityInstance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\SummarizationQualityInstance::class);
        $this->instance = $var;

        return $this;
    }

}

