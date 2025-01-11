<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes an event in the lifecycle of a payment transaction.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.TransactionEvent</code>
 */
class TransactionEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The type of this transaction event.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionEvent.TransactionEventType event_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $event_type = 0;
    /**
     * Optional. The reason or standardized code that corresponds with this
     * transaction event, if one exists. For example, a CHARGEBACK event with code
     * 6005.
     *
     * Generated from protobuf field <code>string reason = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $reason = '';
    /**
     * Optional. The value that corresponds with this transaction event, if one
     * exists. For example, a refund event where $5.00 was refunded. Currency is
     * obtained from the original transaction data.
     *
     * Generated from protobuf field <code>double value = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $value = 0.0;
    /**
     * Optional. Timestamp when this transaction event occurred; otherwise assumed
     * to be the time of the API call.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp event_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $event_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $event_type
     *           Optional. The type of this transaction event.
     *     @type string $reason
     *           Optional. The reason or standardized code that corresponds with this
     *           transaction event, if one exists. For example, a CHARGEBACK event with code
     *           6005.
     *     @type float $value
     *           Optional. The value that corresponds with this transaction event, if one
     *           exists. For example, a refund event where $5.00 was refunded. Currency is
     *           obtained from the original transaction data.
     *     @type \Google\Protobuf\Timestamp $event_time
     *           Optional. Timestamp when this transaction event occurred; otherwise assumed
     *           to be the time of the API call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The type of this transaction event.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionEvent.TransactionEventType event_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getEventType()
    {
        return $this->event_type;
    }

    /**
     * Optional. The type of this transaction event.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionEvent.TransactionEventType event_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\RecaptchaEnterprise\V1\TransactionEvent\TransactionEventType::class);
        $this->event_type = $var;

        return $this;
    }

    /**
     * Optional. The reason or standardized code that corresponds with this
     * transaction event, if one exists. For example, a CHARGEBACK event with code
     * 6005.
     *
     * Generated from protobuf field <code>string reason = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Optional. The reason or standardized code that corresponds with this
     * transaction event, if one exists. For example, a CHARGEBACK event with code
     * 6005.
     *
     * Generated from protobuf field <code>string reason = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

    /**
     * Optional. The value that corresponds with this transaction event, if one
     * exists. For example, a refund event where $5.00 was refunded. Currency is
     * obtained from the original transaction data.
     *
     * Generated from protobuf field <code>double value = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Optional. The value that corresponds with this transaction event, if one
     * exists. For example, a refund event where $5.00 was refunded. Currency is
     * obtained from the original transaction data.
     *
     * Generated from protobuf field <code>double value = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->value = $var;

        return $this;
    }

    /**
     * Optional. Timestamp when this transaction event occurred; otherwise assumed
     * to be the time of the API call.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp event_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEventTime()
    {
        return $this->event_time;
    }

    public function hasEventTime()
    {
        return isset($this->event_time);
    }

    public function clearEventTime()
    {
        unset($this->event_time);
    }

    /**
     * Optional. Timestamp when this transaction event occurred; otherwise assumed
     * to be the time of the API call.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp event_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEventTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->event_time = $var;

        return $this;
    }

}

