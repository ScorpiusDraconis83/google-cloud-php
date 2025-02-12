<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [VmwareEngine.ListNodes][google.cloud.vmwareengine.v1.VmwareEngine.ListNodes]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.ListNodesResponse</code>
 */
class ListNodesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The nodes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.Node nodes = 1;</code>
     */
    private $nodes;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\VmwareEngine\V1\Node>|\Google\Protobuf\Internal\RepeatedField $nodes
     *           The nodes.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * The nodes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.Node nodes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * The nodes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.Node nodes = 1;</code>
     * @param array<\Google\Cloud\VmwareEngine\V1\Node>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VmwareEngine\V1\Node::class);
        $this->nodes = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

