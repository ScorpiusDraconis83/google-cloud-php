<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\DeltaPresenceEstimationResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A DeltaPresenceEstimationHistogramBucket message with the following
 * values:
 *   min_probability: 0.1
 *   max_probability: 0.2
 *   frequency: 42
 * means that there are 42 records for which δ is in [0.1, 0.2). An
 * important particular case is when min_probability = max_probability = 1:
 * then, every individual who shares this quasi-identifier combination is in
 * the dataset.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.DeltaPresenceEstimationResult.DeltaPresenceEstimationHistogramBucket</code>
 */
class DeltaPresenceEstimationHistogramBucket extends \Google\Protobuf\Internal\Message
{
    /**
     * Between 0 and 1.
     *
     * Generated from protobuf field <code>double min_probability = 1;</code>
     */
    protected $min_probability = 0.0;
    /**
     * Always greater than or equal to min_probability.
     *
     * Generated from protobuf field <code>double max_probability = 2;</code>
     */
    protected $max_probability = 0.0;
    /**
     * Number of records within these probability bounds.
     *
     * Generated from protobuf field <code>int64 bucket_size = 5;</code>
     */
    protected $bucket_size = 0;
    /**
     * Sample of quasi-identifier tuple values in this bucket. The total
     * number of classes returned per bucket is capped at 20.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.DeltaPresenceEstimationResult.DeltaPresenceEstimationQuasiIdValues bucket_values = 6;</code>
     */
    private $bucket_values;
    /**
     * Total number of distinct quasi-identifier tuple values in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_value_count = 7;</code>
     */
    protected $bucket_value_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $min_probability
     *           Between 0 and 1.
     *     @type float $max_probability
     *           Always greater than or equal to min_probability.
     *     @type int|string $bucket_size
     *           Number of records within these probability bounds.
     *     @type array<\Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\DeltaPresenceEstimationResult\DeltaPresenceEstimationQuasiIdValues>|\Google\Protobuf\Internal\RepeatedField $bucket_values
     *           Sample of quasi-identifier tuple values in this bucket. The total
     *           number of classes returned per bucket is capped at 20.
     *     @type int|string $bucket_value_count
     *           Total number of distinct quasi-identifier tuple values in this bucket.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Between 0 and 1.
     *
     * Generated from protobuf field <code>double min_probability = 1;</code>
     * @return float
     */
    public function getMinProbability()
    {
        return $this->min_probability;
    }

    /**
     * Between 0 and 1.
     *
     * Generated from protobuf field <code>double min_probability = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setMinProbability($var)
    {
        GPBUtil::checkDouble($var);
        $this->min_probability = $var;

        return $this;
    }

    /**
     * Always greater than or equal to min_probability.
     *
     * Generated from protobuf field <code>double max_probability = 2;</code>
     * @return float
     */
    public function getMaxProbability()
    {
        return $this->max_probability;
    }

    /**
     * Always greater than or equal to min_probability.
     *
     * Generated from protobuf field <code>double max_probability = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setMaxProbability($var)
    {
        GPBUtil::checkDouble($var);
        $this->max_probability = $var;

        return $this;
    }

    /**
     * Number of records within these probability bounds.
     *
     * Generated from protobuf field <code>int64 bucket_size = 5;</code>
     * @return int|string
     */
    public function getBucketSize()
    {
        return $this->bucket_size;
    }

    /**
     * Number of records within these probability bounds.
     *
     * Generated from protobuf field <code>int64 bucket_size = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBucketSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->bucket_size = $var;

        return $this;
    }

    /**
     * Sample of quasi-identifier tuple values in this bucket. The total
     * number of classes returned per bucket is capped at 20.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.DeltaPresenceEstimationResult.DeltaPresenceEstimationQuasiIdValues bucket_values = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBucketValues()
    {
        return $this->bucket_values;
    }

    /**
     * Sample of quasi-identifier tuple values in this bucket. The total
     * number of classes returned per bucket is capped at 20.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.DeltaPresenceEstimationResult.DeltaPresenceEstimationQuasiIdValues bucket_values = 6;</code>
     * @param array<\Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\DeltaPresenceEstimationResult\DeltaPresenceEstimationQuasiIdValues>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBucketValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\DeltaPresenceEstimationResult\DeltaPresenceEstimationQuasiIdValues::class);
        $this->bucket_values = $arr;

        return $this;
    }

    /**
     * Total number of distinct quasi-identifier tuple values in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_value_count = 7;</code>
     * @return int|string
     */
    public function getBucketValueCount()
    {
        return $this->bucket_value_count;
    }

    /**
     * Total number of distinct quasi-identifier tuple values in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_value_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBucketValueCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->bucket_value_count = $var;

        return $this;
    }

}


