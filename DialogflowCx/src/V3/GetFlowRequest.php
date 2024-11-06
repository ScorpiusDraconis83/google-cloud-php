<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/flow.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for
 * [Flows.GetFlow][google.cloud.dialogflow.cx.v3.Flows.GetFlow].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.GetFlowRequest</code>
 */
class GetFlowRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the flow to get.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The language to retrieve the flow for. The following fields are language
     * dependent:
     * *  `Flow.event_handlers.trigger_fulfillment.messages`
     * *  `Flow.event_handlers.trigger_fulfillment.conditional_cases`
     * *  `Flow.transition_routes.trigger_fulfillment.messages`
     * *  `Flow.transition_routes.trigger_fulfillment.conditional_cases`
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * are supported.
     * Note: languages must be enabled in the agent before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     */
    protected $language_code = '';

    /**
     * @param string $name Required. The name of the flow to get.
     *                     Format:
     *                     `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`. Please see
     *                     {@see FlowsClient::flowName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\GetFlowRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the flow to get.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *     @type string $language_code
     *           The language to retrieve the flow for. The following fields are language
     *           dependent:
     *           *  `Flow.event_handlers.trigger_fulfillment.messages`
     *           *  `Flow.event_handlers.trigger_fulfillment.conditional_cases`
     *           *  `Flow.transition_routes.trigger_fulfillment.messages`
     *           *  `Flow.transition_routes.trigger_fulfillment.conditional_cases`
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           are supported.
     *           Note: languages must be enabled in the agent before they can be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Flow::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the flow to get.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the flow to get.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The language to retrieve the flow for. The following fields are language
     * dependent:
     * *  `Flow.event_handlers.trigger_fulfillment.messages`
     * *  `Flow.event_handlers.trigger_fulfillment.conditional_cases`
     * *  `Flow.transition_routes.trigger_fulfillment.messages`
     * *  `Flow.transition_routes.trigger_fulfillment.conditional_cases`
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * are supported.
     * Note: languages must be enabled in the agent before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The language to retrieve the flow for. The following fields are language
     * dependent:
     * *  `Flow.event_handlers.trigger_fulfillment.messages`
     * *  `Flow.event_handlers.trigger_fulfillment.conditional_cases`
     * *  `Flow.transition_routes.trigger_fulfillment.messages`
     * *  `Flow.transition_routes.trigger_fulfillment.conditional_cases`
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * are supported.
     * Note: languages must be enabled in the agent before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

