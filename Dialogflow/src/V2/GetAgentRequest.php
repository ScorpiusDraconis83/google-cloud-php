<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/agent.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Agents.GetAgent][google.cloud.dialogflow.v2.Agents.GetAgent].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.GetAgentRequest</code>
 */
class GetAgentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project that the agent to fetch is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';

    /**
     * @param string $parent Required. The project that the agent to fetch is associated with.
     *                       Format: `projects/<Project ID>`. Please see
     *                       {@see AgentsClient::projectName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\V2\GetAgentRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project that the agent to fetch is associated with.
     *           Format: `projects/<Project ID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Agent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project that the agent to fetch is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project that the agent to fetch is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

}

