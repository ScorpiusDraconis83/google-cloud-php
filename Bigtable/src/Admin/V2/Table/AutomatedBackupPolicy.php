<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Cloud\Bigtable\Admin\V2\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines an automated backup policy for a table
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Table.AutomatedBackupPolicy</code>
 */
class AutomatedBackupPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. How long the automated backups should be retained. The only
     * supported value at this time is 3 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration retention_period = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $retention_period = null;
    /**
     * Required. How frequently automated backups should occur. The only
     * supported value at this time is 24 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration frequency = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $frequency = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $retention_period
     *           Required. How long the automated backups should be retained. The only
     *           supported value at this time is 3 days.
     *     @type \Google\Protobuf\Duration $frequency
     *           Required. How frequently automated backups should occur. The only
     *           supported value at this time is 24 hours.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. How long the automated backups should be retained. The only
     * supported value at this time is 3 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration retention_period = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getRetentionPeriod()
    {
        return $this->retention_period;
    }

    public function hasRetentionPeriod()
    {
        return isset($this->retention_period);
    }

    public function clearRetentionPeriod()
    {
        unset($this->retention_period);
    }

    /**
     * Required. How long the automated backups should be retained. The only
     * supported value at this time is 3 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration retention_period = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setRetentionPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->retention_period = $var;

        return $this;
    }

    /**
     * Required. How frequently automated backups should occur. The only
     * supported value at this time is 24 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration frequency = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    public function hasFrequency()
    {
        return isset($this->frequency);
    }

    public function clearFrequency()
    {
        unset($this->frequency);
    }

    /**
     * Required. How frequently automated backups should occur. The only
     * supported value at this time is 24 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration frequency = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setFrequency($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->frequency = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AutomatedBackupPolicy::class, \Google\Cloud\Bigtable\Admin\V2\Table_AutomatedBackupPolicy::class);

