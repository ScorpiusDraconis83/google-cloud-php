<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/cluster/v1/cloud_redis_cluster.proto

namespace Google\Cloud\Redis\Cluster\V1\ClusterPersistenceConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of the RDB based persistence.
 *
 * Generated from protobuf message <code>google.cloud.redis.cluster.v1.ClusterPersistenceConfig.RDBConfig</code>
 */
class RDBConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Period between RDB snapshots.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.ClusterPersistenceConfig.RDBConfig.SnapshotPeriod rdb_snapshot_period = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $rdb_snapshot_period = 0;
    /**
     * Optional. The time that the first snapshot was/will be attempted, and to
     * which future snapshots will be aligned. If not provided, the current time
     * will be used.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp rdb_snapshot_start_time = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $rdb_snapshot_start_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $rdb_snapshot_period
     *           Optional. Period between RDB snapshots.
     *     @type \Google\Protobuf\Timestamp $rdb_snapshot_start_time
     *           Optional. The time that the first snapshot was/will be attempted, and to
     *           which future snapshots will be aligned. If not provided, the current time
     *           will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\Cluster\V1\CloudRedisCluster::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Period between RDB snapshots.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.ClusterPersistenceConfig.RDBConfig.SnapshotPeriod rdb_snapshot_period = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getRdbSnapshotPeriod()
    {
        return $this->rdb_snapshot_period;
    }

    /**
     * Optional. Period between RDB snapshots.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.ClusterPersistenceConfig.RDBConfig.SnapshotPeriod rdb_snapshot_period = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setRdbSnapshotPeriod($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Redis\Cluster\V1\ClusterPersistenceConfig\RDBConfig\SnapshotPeriod::class);
        $this->rdb_snapshot_period = $var;

        return $this;
    }

    /**
     * Optional. The time that the first snapshot was/will be attempted, and to
     * which future snapshots will be aligned. If not provided, the current time
     * will be used.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp rdb_snapshot_start_time = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRdbSnapshotStartTime()
    {
        return $this->rdb_snapshot_start_time;
    }

    public function hasRdbSnapshotStartTime()
    {
        return isset($this->rdb_snapshot_start_time);
    }

    public function clearRdbSnapshotStartTime()
    {
        unset($this->rdb_snapshot_start_time);
    }

    /**
     * Optional. The time that the first snapshot was/will be attempted, and to
     * which future snapshots will be aligned. If not provided, the current time
     * will be used.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp rdb_snapshot_start_time = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRdbSnapshotStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->rdb_snapshot_start_time = $var;

        return $this;
    }

}


