<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/version.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Versions.ListVersions][google.cloud.dialogflow.cx.v3.Versions.ListVersions].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ListVersionsRequest</code>
 */
class ListVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [Flow][google.cloud.dialogflow.cx.v3.Flow] to list all
     * versions for. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of items to return in a single page. By default 20 and
     * at most 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The [Flow][google.cloud.dialogflow.cx.v3.Flow] to list all
     *                       versions for. Format:
     *                       `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`. Please see
     *                       {@see VersionsClient::flowName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\ListVersionsRequest
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
     *           Required. The [Flow][google.cloud.dialogflow.cx.v3.Flow] to list all
     *           versions for. Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *     @type int $page_size
     *           The maximum number of items to return in a single page. By default 20 and
     *           at most 100.
     *     @type string $page_token
     *           The next_page_token value returned from a previous list request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [Flow][google.cloud.dialogflow.cx.v3.Flow] to list all
     * versions for. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The [Flow][google.cloud.dialogflow.cx.v3.Flow] to list all
     * versions for. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
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

    /**
     * The maximum number of items to return in a single page. By default 20 and
     * at most 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return in a single page. By default 20 and
     * at most 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

