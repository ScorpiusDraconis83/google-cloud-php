<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/resources.proto

namespace Google\Cloud\AlloyDb\V1\Cluster;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information and all metadata related to TRIAL clusters.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1.Cluster.TrialMetadata</code>
 */
class TrialMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * start time of the trial cluster.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    protected $start_time = null;
    /**
     * End time of the trial cluster.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    protected $end_time = null;
    /**
     * Upgrade time of trial cluster to Standard cluster.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp upgrade_time = 3;</code>
     */
    protected $upgrade_time = null;
    /**
     * grace end time of the cluster.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp grace_end_time = 4;</code>
     */
    protected $grace_end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           start time of the trial cluster.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           End time of the trial cluster.
     *     @type \Google\Protobuf\Timestamp $upgrade_time
     *           Upgrade time of trial cluster to Standard cluster.
     *     @type \Google\Protobuf\Timestamp $grace_end_time
     *           grace end time of the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * start time of the trial cluster.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
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
     * start time of the trial cluster.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
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
     * End time of the trial cluster.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
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
     * End time of the trial cluster.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
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
     * Upgrade time of trial cluster to Standard cluster.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp upgrade_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpgradeTime()
    {
        return $this->upgrade_time;
    }

    public function hasUpgradeTime()
    {
        return isset($this->upgrade_time);
    }

    public function clearUpgradeTime()
    {
        unset($this->upgrade_time);
    }

    /**
     * Upgrade time of trial cluster to Standard cluster.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp upgrade_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpgradeTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->upgrade_time = $var;

        return $this;
    }

    /**
     * grace end time of the cluster.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp grace_end_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getGraceEndTime()
    {
        return $this->grace_end_time;
    }

    public function hasGraceEndTime()
    {
        return isset($this->grace_end_time);
    }

    public function clearGraceEndTime()
    {
        unset($this->grace_end_time);
    }

    /**
     * grace end time of the cluster.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp grace_end_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setGraceEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->grace_end_time = $var;

        return $this;
    }

}


