<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `ListTopics` method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.ListTopicsResponse</code>
 */
class ListTopicsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The resulting topics.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1.Topic topics = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $topics;
    /**
     * Optional. If not empty, indicates that there may be more topics that match
     * the request; this value should be passed in a new `ListTopicsRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\PubSub\V1\Topic>|\Google\Protobuf\Internal\RepeatedField $topics
     *           Optional. The resulting topics.
     *     @type string $next_page_token
     *           Optional. If not empty, indicates that there may be more topics that match
     *           the request; this value should be passed in a new `ListTopicsRequest`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The resulting topics.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1.Topic topics = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Optional. The resulting topics.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1.Topic topics = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\PubSub\V1\Topic>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\PubSub\V1\Topic::class);
        $this->topics = $arr;

        return $this;
    }

    /**
     * Optional. If not empty, indicates that there may be more topics that match
     * the request; this value should be passed in a new `ListTopicsRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Optional. If not empty, indicates that there may be more topics that match
     * the request; this value should be passed in a new `ListTopicsRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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

