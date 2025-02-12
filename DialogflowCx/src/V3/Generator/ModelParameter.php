<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/generator.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Generator;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters to be passed to the LLM. If not set, default values will be
 * used.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Generator.ModelParameter</code>
 */
class ModelParameter extends \Google\Protobuf\Internal\Message
{
    /**
     * The temperature used for sampling. Temperature sampling occurs after both
     * topP and topK have been applied.
     * Valid range: [0.0, 1.0]
     * Low temperature = less random. High temperature = more random.
     *
     * Generated from protobuf field <code>optional float temperature = 1;</code>
     */
    protected $temperature = null;
    /**
     * The maximum number of tokens to generate.
     *
     * Generated from protobuf field <code>optional int32 max_decode_steps = 2;</code>
     */
    protected $max_decode_steps = null;
    /**
     * If set, only the tokens comprising the top top_p probability mass are
     * considered. If both top_p and top_k are
     * set, top_p will be used for further refining candidates selected with
     * top_k.
     * Valid range: (0.0, 1.0].
     * Small topP = less random. Large topP = more random.
     *
     * Generated from protobuf field <code>optional float top_p = 3;</code>
     */
    protected $top_p = null;
    /**
     * If set, the sampling process in each step is limited to the top_k tokens
     * with highest probabilities.
     * Valid range: [1, 40] or 1000+.
     * Small topK = less random. Large topK = more random.
     *
     * Generated from protobuf field <code>optional int32 top_k = 4;</code>
     */
    protected $top_k = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $temperature
     *           The temperature used for sampling. Temperature sampling occurs after both
     *           topP and topK have been applied.
     *           Valid range: [0.0, 1.0]
     *           Low temperature = less random. High temperature = more random.
     *     @type int $max_decode_steps
     *           The maximum number of tokens to generate.
     *     @type float $top_p
     *           If set, only the tokens comprising the top top_p probability mass are
     *           considered. If both top_p and top_k are
     *           set, top_p will be used for further refining candidates selected with
     *           top_k.
     *           Valid range: (0.0, 1.0].
     *           Small topP = less random. Large topP = more random.
     *     @type int $top_k
     *           If set, the sampling process in each step is limited to the top_k tokens
     *           with highest probabilities.
     *           Valid range: [1, 40] or 1000+.
     *           Small topK = less random. Large topK = more random.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Generator::initOnce();
        parent::__construct($data);
    }

    /**
     * The temperature used for sampling. Temperature sampling occurs after both
     * topP and topK have been applied.
     * Valid range: [0.0, 1.0]
     * Low temperature = less random. High temperature = more random.
     *
     * Generated from protobuf field <code>optional float temperature = 1;</code>
     * @return float
     */
    public function getTemperature()
    {
        return isset($this->temperature) ? $this->temperature : 0.0;
    }

    public function hasTemperature()
    {
        return isset($this->temperature);
    }

    public function clearTemperature()
    {
        unset($this->temperature);
    }

    /**
     * The temperature used for sampling. Temperature sampling occurs after both
     * topP and topK have been applied.
     * Valid range: [0.0, 1.0]
     * Low temperature = less random. High temperature = more random.
     *
     * Generated from protobuf field <code>optional float temperature = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setTemperature($var)
    {
        GPBUtil::checkFloat($var);
        $this->temperature = $var;

        return $this;
    }

    /**
     * The maximum number of tokens to generate.
     *
     * Generated from protobuf field <code>optional int32 max_decode_steps = 2;</code>
     * @return int
     */
    public function getMaxDecodeSteps()
    {
        return isset($this->max_decode_steps) ? $this->max_decode_steps : 0;
    }

    public function hasMaxDecodeSteps()
    {
        return isset($this->max_decode_steps);
    }

    public function clearMaxDecodeSteps()
    {
        unset($this->max_decode_steps);
    }

    /**
     * The maximum number of tokens to generate.
     *
     * Generated from protobuf field <code>optional int32 max_decode_steps = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxDecodeSteps($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_decode_steps = $var;

        return $this;
    }

    /**
     * If set, only the tokens comprising the top top_p probability mass are
     * considered. If both top_p and top_k are
     * set, top_p will be used for further refining candidates selected with
     * top_k.
     * Valid range: (0.0, 1.0].
     * Small topP = less random. Large topP = more random.
     *
     * Generated from protobuf field <code>optional float top_p = 3;</code>
     * @return float
     */
    public function getTopP()
    {
        return isset($this->top_p) ? $this->top_p : 0.0;
    }

    public function hasTopP()
    {
        return isset($this->top_p);
    }

    public function clearTopP()
    {
        unset($this->top_p);
    }

    /**
     * If set, only the tokens comprising the top top_p probability mass are
     * considered. If both top_p and top_k are
     * set, top_p will be used for further refining candidates selected with
     * top_k.
     * Valid range: (0.0, 1.0].
     * Small topP = less random. Large topP = more random.
     *
     * Generated from protobuf field <code>optional float top_p = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setTopP($var)
    {
        GPBUtil::checkFloat($var);
        $this->top_p = $var;

        return $this;
    }

    /**
     * If set, the sampling process in each step is limited to the top_k tokens
     * with highest probabilities.
     * Valid range: [1, 40] or 1000+.
     * Small topK = less random. Large topK = more random.
     *
     * Generated from protobuf field <code>optional int32 top_k = 4;</code>
     * @return int
     */
    public function getTopK()
    {
        return isset($this->top_k) ? $this->top_k : 0;
    }

    public function hasTopK()
    {
        return isset($this->top_k);
    }

    public function clearTopK()
    {
        unset($this->top_k);
    }

    /**
     * If set, the sampling process in each step is limited to the top_k tokens
     * with highest probabilities.
     * Valid range: [1, 40] or 1000+.
     * Small topK = less random. Large topK = more random.
     *
     * Generated from protobuf field <code>optional int32 top_k = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTopK($var)
    {
        GPBUtil::checkInt32($var);
        $this->top_k = $var;

        return $this;
    }

}


