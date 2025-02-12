<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1\QaScorecardResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A scorecard result may have multiple sets of scores from varying sources,
 * one of which becomes the "main" answer above. A ScoreSource represents
 * each individual set of scores.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.QaScorecardResult.ScoreSource</code>
 */
class ScoreSource extends \Google\Protobuf\Internal\Message
{
    /**
     * What created the score.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.QaScorecardResult.ScoreSource.SourceType source_type = 1;</code>
     */
    protected $source_type = 0;
    /**
     * The overall numerical score of the result.
     *
     * Generated from protobuf field <code>optional double score = 2;</code>
     */
    protected $score = null;
    /**
     * The maximum potential overall score of the scorecard. Any questions
     * answered using `na_value` are excluded from this calculation.
     *
     * Generated from protobuf field <code>optional double potential_score = 3;</code>
     */
    protected $potential_score = null;
    /**
     * The normalized score, which is the score divided by the potential score.
     *
     * Generated from protobuf field <code>optional double normalized_score = 4;</code>
     */
    protected $normalized_score = null;
    /**
     * Collection of tags and their scores.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.QaScorecardResult.QaTagResult qa_tag_results = 5;</code>
     */
    private $qa_tag_results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $source_type
     *           What created the score.
     *     @type float $score
     *           The overall numerical score of the result.
     *     @type float $potential_score
     *           The maximum potential overall score of the scorecard. Any questions
     *           answered using `na_value` are excluded from this calculation.
     *     @type float $normalized_score
     *           The normalized score, which is the score divided by the potential score.
     *     @type array<\Google\Cloud\ContactCenterInsights\V1\QaScorecardResult\QaTagResult>|\Google\Protobuf\Internal\RepeatedField $qa_tag_results
     *           Collection of tags and their scores.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * What created the score.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.QaScorecardResult.ScoreSource.SourceType source_type = 1;</code>
     * @return int
     */
    public function getSourceType()
    {
        return $this->source_type;
    }

    /**
     * What created the score.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.QaScorecardResult.ScoreSource.SourceType source_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ContactCenterInsights\V1\QaScorecardResult\ScoreSource\SourceType::class);
        $this->source_type = $var;

        return $this;
    }

    /**
     * The overall numerical score of the result.
     *
     * Generated from protobuf field <code>optional double score = 2;</code>
     * @return float
     */
    public function getScore()
    {
        return isset($this->score) ? $this->score : 0.0;
    }

    public function hasScore()
    {
        return isset($this->score);
    }

    public function clearScore()
    {
        unset($this->score);
    }

    /**
     * The overall numerical score of the result.
     *
     * Generated from protobuf field <code>optional double score = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->score = $var;

        return $this;
    }

    /**
     * The maximum potential overall score of the scorecard. Any questions
     * answered using `na_value` are excluded from this calculation.
     *
     * Generated from protobuf field <code>optional double potential_score = 3;</code>
     * @return float
     */
    public function getPotentialScore()
    {
        return isset($this->potential_score) ? $this->potential_score : 0.0;
    }

    public function hasPotentialScore()
    {
        return isset($this->potential_score);
    }

    public function clearPotentialScore()
    {
        unset($this->potential_score);
    }

    /**
     * The maximum potential overall score of the scorecard. Any questions
     * answered using `na_value` are excluded from this calculation.
     *
     * Generated from protobuf field <code>optional double potential_score = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPotentialScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->potential_score = $var;

        return $this;
    }

    /**
     * The normalized score, which is the score divided by the potential score.
     *
     * Generated from protobuf field <code>optional double normalized_score = 4;</code>
     * @return float
     */
    public function getNormalizedScore()
    {
        return isset($this->normalized_score) ? $this->normalized_score : 0.0;
    }

    public function hasNormalizedScore()
    {
        return isset($this->normalized_score);
    }

    public function clearNormalizedScore()
    {
        unset($this->normalized_score);
    }

    /**
     * The normalized score, which is the score divided by the potential score.
     *
     * Generated from protobuf field <code>optional double normalized_score = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setNormalizedScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->normalized_score = $var;

        return $this;
    }

    /**
     * Collection of tags and their scores.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.QaScorecardResult.QaTagResult qa_tag_results = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQaTagResults()
    {
        return $this->qa_tag_results;
    }

    /**
     * Collection of tags and their scores.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.QaScorecardResult.QaTagResult qa_tag_results = 5;</code>
     * @param array<\Google\Cloud\ContactCenterInsights\V1\QaScorecardResult\QaTagResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQaTagResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ContactCenterInsights\V1\QaScorecardResult\QaTagResult::class);
        $this->qa_tag_results = $arr;

        return $this;
    }

}


