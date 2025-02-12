<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/resource.proto

namespace Google\Apps\Meet\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Single instance of a meeting held in a space.
 *
 * Generated from protobuf message <code>google.apps.meet.v2beta.ConferenceRecord</code>
 */
class ConferenceRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Resource name of the conference record.
     * Format: `conferenceRecords/{conference_record}` where `{conference_record}`
     * is a unique ID for each instance of a call within a space.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. Timestamp when the conference started. Always set.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_time = null;
    /**
     * Output only. Timestamp when the conference ended.
     * Set for past conferences. Unset if the conference is ongoing.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $end_time = null;
    /**
     * Output only. Server enforced expiration time for when this conference
     * record resource is deleted. The resource is deleted 30 days after the
     * conference ends.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $expire_time = null;
    /**
     * Output only. The space where the conference was held.
     *
     * Generated from protobuf field <code>string space = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $space = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Resource name of the conference record.
     *           Format: `conferenceRecords/{conference_record}` where `{conference_record}`
     *           is a unique ID for each instance of a call within a space.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Timestamp when the conference started. Always set.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. Timestamp when the conference ended.
     *           Set for past conferences. Unset if the conference is ongoing.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Output only. Server enforced expiration time for when this conference
     *           record resource is deleted. The resource is deleted 30 days after the
     *           conference ends.
     *     @type string $space
     *           Output only. The space where the conference was held.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2Beta\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Resource name of the conference record.
     * Format: `conferenceRecords/{conference_record}` where `{conference_record}`
     * is a unique ID for each instance of a call within a space.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Resource name of the conference record.
     * Format: `conferenceRecords/{conference_record}` where `{conference_record}`
     * is a unique ID for each instance of a call within a space.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Output only. Timestamp when the conference started. Always set.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. Timestamp when the conference started. Always set.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when the conference ended.
     * Set for past conferences. Unset if the conference is ongoing.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. Timestamp when the conference ended.
     * Set for past conferences. Unset if the conference is ongoing.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. Server enforced expiration time for when this conference
     * record resource is deleted. The resource is deleted 30 days after the
     * conference ends.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Output only. Server enforced expiration time for when this conference
     * record resource is deleted. The resource is deleted 30 days after the
     * conference ends.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Output only. The space where the conference was held.
     *
     * Generated from protobuf field <code>string space = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * Output only. The space where the conference was held.
     *
     * Generated from protobuf field <code>string space = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSpace($var)
    {
        GPBUtil::checkString($var, True);
        $this->space = $var;

        return $this;
    }

}

