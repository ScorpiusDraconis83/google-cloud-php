<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert.proto

namespace Google\Cloud\Monitoring\V3\AlertPolicy\AlertStrategy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Control over how the notification channels in `notification_channels`
 * are notified when this alert fires, on a per-channel basis.
 *
 * Generated from protobuf message <code>google.monitoring.v3.AlertPolicy.AlertStrategy.NotificationChannelStrategy</code>
 */
class NotificationChannelStrategy extends \Google\Protobuf\Internal\Message
{
    /**
     * The full REST resource name for the notification channels that these
     * settings apply to. Each of these correspond to the name field in one
     * of the NotificationChannel objects referenced in the
     * notification_channels field of this AlertPolicy.
     * The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *
     * Generated from protobuf field <code>repeated string notification_channel_names = 1;</code>
     */
    private $notification_channel_names;
    /**
     * The frequency at which to send reminder notifications for open
     * incidents.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration renotify_interval = 2;</code>
     */
    protected $renotify_interval = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $notification_channel_names
     *           The full REST resource name for the notification channels that these
     *           settings apply to. Each of these correspond to the name field in one
     *           of the NotificationChannel objects referenced in the
     *           notification_channels field of this AlertPolicy.
     *           The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *     @type \Google\Protobuf\Duration $renotify_interval
     *           The frequency at which to send reminder notifications for open
     *           incidents.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Alert::initOnce();
        parent::__construct($data);
    }

    /**
     * The full REST resource name for the notification channels that these
     * settings apply to. Each of these correspond to the name field in one
     * of the NotificationChannel objects referenced in the
     * notification_channels field of this AlertPolicy.
     * The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *
     * Generated from protobuf field <code>repeated string notification_channel_names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotificationChannelNames()
    {
        return $this->notification_channel_names;
    }

    /**
     * The full REST resource name for the notification channels that these
     * settings apply to. Each of these correspond to the name field in one
     * of the NotificationChannel objects referenced in the
     * notification_channels field of this AlertPolicy.
     * The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *
     * Generated from protobuf field <code>repeated string notification_channel_names = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotificationChannelNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->notification_channel_names = $arr;

        return $this;
    }

    /**
     * The frequency at which to send reminder notifications for open
     * incidents.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration renotify_interval = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getRenotifyInterval()
    {
        return $this->renotify_interval;
    }

    public function hasRenotifyInterval()
    {
        return isset($this->renotify_interval);
    }

    public function clearRenotifyInterval()
    {
        unset($this->renotify_interval);
    }

    /**
     * The frequency at which to send reminder notifications for open
     * incidents.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration renotify_interval = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setRenotifyInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->renotify_interval = $var;

        return $this;
    }

}


