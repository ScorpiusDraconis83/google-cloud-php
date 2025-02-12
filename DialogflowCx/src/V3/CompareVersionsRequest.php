<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/version.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Versions.CompareVersions][google.cloud.dialogflow.cx.v3.Versions.CompareVersions].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.CompareVersionsRequest</code>
 */
class CompareVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the base flow version to compare with the target version.
     * Use version ID `0` to indicate the draft version of the specified flow.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *
     * Generated from protobuf field <code>string base_version = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $base_version = '';
    /**
     * Required. Name of the target flow version to compare with the
     * base version. Use version ID `0` to indicate the draft version of the
     * specified flow. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *
     * Generated from protobuf field <code>string target_version = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $target_version = '';
    /**
     * The language to compare the flow versions for.
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/docs/reference/language) are
     * supported. Note: languages must be enabled in the agent before they can be
     * used.
     *
     * Generated from protobuf field <code>string language_code = 3;</code>
     */
    protected $language_code = '';

    /**
     * @param string $baseVersion Required. Name of the base flow version to compare with the target version.
     *                            Use version ID `0` to indicate the draft version of the specified flow.
     *
     *                            Format:
     *                            `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`. Please see
     *                            {@see VersionsClient::versionName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\CompareVersionsRequest
     *
     * @experimental
     */
    public static function build(string $baseVersion): self
    {
        return (new self())
            ->setBaseVersion($baseVersion);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $base_version
     *           Required. Name of the base flow version to compare with the target version.
     *           Use version ID `0` to indicate the draft version of the specified flow.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *     @type string $target_version
     *           Required. Name of the target flow version to compare with the
     *           base version. Use version ID `0` to indicate the draft version of the
     *           specified flow. Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *     @type string $language_code
     *           The language to compare the flow versions for.
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/docs/reference/language) are
     *           supported. Note: languages must be enabled in the agent before they can be
     *           used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the base flow version to compare with the target version.
     * Use version ID `0` to indicate the draft version of the specified flow.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *
     * Generated from protobuf field <code>string base_version = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBaseVersion()
    {
        return $this->base_version;
    }

    /**
     * Required. Name of the base flow version to compare with the target version.
     * Use version ID `0` to indicate the draft version of the specified flow.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *
     * Generated from protobuf field <code>string base_version = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBaseVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_version = $var;

        return $this;
    }

    /**
     * Required. Name of the target flow version to compare with the
     * base version. Use version ID `0` to indicate the draft version of the
     * specified flow. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *
     * Generated from protobuf field <code>string target_version = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTargetVersion()
    {
        return $this->target_version;
    }

    /**
     * Required. Name of the target flow version to compare with the
     * base version. Use version ID `0` to indicate the draft version of the
     * specified flow. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *
     * Generated from protobuf field <code>string target_version = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTargetVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_version = $var;

        return $this;
    }

    /**
     * The language to compare the flow versions for.
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/docs/reference/language) are
     * supported. Note: languages must be enabled in the agent before they can be
     * used.
     *
     * Generated from protobuf field <code>string language_code = 3;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The language to compare the flow versions for.
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/docs/reference/language) are
     * supported. Note: languages must be enabled in the agent before they can be
     * used.
     *
     * Generated from protobuf field <code>string language_code = 3;</code>
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

