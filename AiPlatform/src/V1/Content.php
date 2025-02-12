<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The base structured datatype containing multi-part content of a message.
 * A `Content` includes a `role` field designating the producer of the `Content`
 * and a `parts` field containing multi-part data that contains the content of
 * the message turn.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Content</code>
 */
class Content extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The producer of the content. Must be either 'user' or 'model'.
     * Useful to set for multi-turn conversations, otherwise can be left blank
     * or unset.
     *
     * Generated from protobuf field <code>string role = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $role = '';
    /**
     * Required. Ordered `Parts` that constitute a single message. Parts may have
     * different IANA MIME types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Part parts = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $role
     *           Optional. The producer of the content. Must be either 'user' or 'model'.
     *           Useful to set for multi-turn conversations, otherwise can be left blank
     *           or unset.
     *     @type array<\Google\Cloud\AIPlatform\V1\Part>|\Google\Protobuf\Internal\RepeatedField $parts
     *           Required. Ordered `Parts` that constitute a single message. Parts may have
     *           different IANA MIME types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The producer of the content. Must be either 'user' or 'model'.
     * Useful to set for multi-turn conversations, otherwise can be left blank
     * or unset.
     *
     * Generated from protobuf field <code>string role = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Optional. The producer of the content. Must be either 'user' or 'model'.
     * Useful to set for multi-turn conversations, otherwise can be left blank
     * or unset.
     *
     * Generated from protobuf field <code>string role = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkString($var, True);
        $this->role = $var;

        return $this;
    }

    /**
     * Required. Ordered `Parts` that constitute a single message. Parts may have
     * different IANA MIME types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Part parts = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * Required. Ordered `Parts` that constitute a single message. Parts may have
     * different IANA MIME types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Part parts = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Part>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Part::class);
        $this->parts = $arr;

        return $this;
    }

}

