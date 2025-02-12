<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedkafka/v1/managed_kafka.proto

namespace Google\Cloud\ManagedKafka\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for UpdateTopic.
 *
 * Generated from protobuf message <code>google.cloud.managedkafka.v1.UpdateTopicRequest</code>
 */
class UpdateTopicRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * Topic resource by the update. The fields specified in the update_mask are
     * relative to the resource, not the full request. A field will be overwritten
     * if it is in the mask. The mask is required and a value of * will update all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;
    /**
     * Required. The topic to update. Its `name` field must be populated.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.Topic topic = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $topic = null;

    /**
     * @param \Google\Cloud\ManagedKafka\V1\Topic $topic      Required. The topic to update. Its `name` field must be populated.
     * @param \Google\Protobuf\FieldMask          $updateMask Required. Field mask is used to specify the fields to be overwritten in the
     *                                                        Topic resource by the update. The fields specified in the update_mask are
     *                                                        relative to the resource, not the full request. A field will be overwritten
     *                                                        if it is in the mask. The mask is required and a value of * will update all
     *                                                        fields.
     *
     * @return \Google\Cloud\ManagedKafka\V1\UpdateTopicRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ManagedKafka\V1\Topic $topic, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setTopic($topic)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Field mask is used to specify the fields to be overwritten in the
     *           Topic resource by the update. The fields specified in the update_mask are
     *           relative to the resource, not the full request. A field will be overwritten
     *           if it is in the mask. The mask is required and a value of * will update all
     *           fields.
     *     @type \Google\Cloud\ManagedKafka\V1\Topic $topic
     *           Required. The topic to update. Its `name` field must be populated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedkafka\V1\ManagedKafka::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * Topic resource by the update. The fields specified in the update_mask are
     * relative to the resource, not the full request. A field will be overwritten
     * if it is in the mask. The mask is required and a value of * will update all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * Topic resource by the update. The fields specified in the update_mask are
     * relative to the resource, not the full request. A field will be overwritten
     * if it is in the mask. The mask is required and a value of * will update all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The topic to update. Its `name` field must be populated.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.Topic topic = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ManagedKafka\V1\Topic|null
     */
    public function getTopic()
    {
        return $this->topic;
    }

    public function hasTopic()
    {
        return isset($this->topic);
    }

    public function clearTopic()
    {
        unset($this->topic);
    }

    /**
     * Required. The topic to update. Its `name` field must be populated.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.Topic topic = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ManagedKafka\V1\Topic $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ManagedKafka\V1\Topic::class);
        $this->topic = $var;

        return $this;
    }

}

