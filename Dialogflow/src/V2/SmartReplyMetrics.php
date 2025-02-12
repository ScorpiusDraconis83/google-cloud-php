<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_model.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The evaluation metrics for smart reply model.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SmartReplyMetrics</code>
 */
class SmartReplyMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Percentage of target participant messages in the evaluation dataset for
     * which similar messages have appeared at least once in the allowlist. Should
     * be [0, 1].
     *
     * Generated from protobuf field <code>float allowlist_coverage = 1;</code>
     */
    protected $allowlist_coverage = 0.0;
    /**
     * Metrics of top n smart replies, sorted by [TopNMetric.n][].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SmartReplyMetrics.TopNMetrics top_n_metrics = 2;</code>
     */
    private $top_n_metrics;
    /**
     * Total number of conversations used to generate this metric.
     *
     * Generated from protobuf field <code>int64 conversation_count = 3;</code>
     */
    protected $conversation_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $allowlist_coverage
     *           Percentage of target participant messages in the evaluation dataset for
     *           which similar messages have appeared at least once in the allowlist. Should
     *           be [0, 1].
     *     @type array<\Google\Cloud\Dialogflow\V2\SmartReplyMetrics\TopNMetrics>|\Google\Protobuf\Internal\RepeatedField $top_n_metrics
     *           Metrics of top n smart replies, sorted by [TopNMetric.n][].
     *     @type int|string $conversation_count
     *           Total number of conversations used to generate this metric.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Percentage of target participant messages in the evaluation dataset for
     * which similar messages have appeared at least once in the allowlist. Should
     * be [0, 1].
     *
     * Generated from protobuf field <code>float allowlist_coverage = 1;</code>
     * @return float
     */
    public function getAllowlistCoverage()
    {
        return $this->allowlist_coverage;
    }

    /**
     * Percentage of target participant messages in the evaluation dataset for
     * which similar messages have appeared at least once in the allowlist. Should
     * be [0, 1].
     *
     * Generated from protobuf field <code>float allowlist_coverage = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setAllowlistCoverage($var)
    {
        GPBUtil::checkFloat($var);
        $this->allowlist_coverage = $var;

        return $this;
    }

    /**
     * Metrics of top n smart replies, sorted by [TopNMetric.n][].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SmartReplyMetrics.TopNMetrics top_n_metrics = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopNMetrics()
    {
        return $this->top_n_metrics;
    }

    /**
     * Metrics of top n smart replies, sorted by [TopNMetric.n][].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SmartReplyMetrics.TopNMetrics top_n_metrics = 2;</code>
     * @param array<\Google\Cloud\Dialogflow\V2\SmartReplyMetrics\TopNMetrics>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopNMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\SmartReplyMetrics\TopNMetrics::class);
        $this->top_n_metrics = $arr;

        return $this;
    }

    /**
     * Total number of conversations used to generate this metric.
     *
     * Generated from protobuf field <code>int64 conversation_count = 3;</code>
     * @return int|string
     */
    public function getConversationCount()
    {
        return $this->conversation_count;
    }

    /**
     * Total number of conversations used to generate this metric.
     *
     * Generated from protobuf field <code>int64 conversation_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConversationCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->conversation_count = $var;

        return $this;
    }

}

