<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tool.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result of executing the [ExecutableCode].
 * Always follows a `part` containing the [ExecutableCode].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CodeExecutionResult</code>
 */
class CodeExecutionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Outcome of the code execution.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CodeExecutionResult.Outcome outcome = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $outcome = 0;
    /**
     * Optional. Contains stdout when code execution is successful, stderr or
     * other description otherwise.
     *
     * Generated from protobuf field <code>string output = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $output = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $outcome
     *           Required. Outcome of the code execution.
     *     @type string $output
     *           Optional. Contains stdout when code execution is successful, stderr or
     *           other description otherwise.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Tool::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Outcome of the code execution.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CodeExecutionResult.Outcome outcome = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Required. Outcome of the code execution.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CodeExecutionResult.Outcome outcome = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setOutcome($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\CodeExecutionResult\Outcome::class);
        $this->outcome = $var;

        return $this;
    }

    /**
     * Optional. Contains stdout when code execution is successful, stderr or
     * other description otherwise.
     *
     * Generated from protobuf field <code>string output = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Optional. Contains stdout when code execution is successful, stderr or
     * other description otherwise.
     *
     * Generated from protobuf field <code>string output = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOutput($var)
    {
        GPBUtil::checkString($var, True);
        $this->output = $var;

        return $this;
    }

}

