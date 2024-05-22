<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/restore.proto

namespace Google\Cloud\GkeBackup\V1\RestoreConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Binds resources in the scope to the given VolumeDataRestorePolicy.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.RestoreConfig.VolumeDataRestorePolicyBinding</code>
 */
class VolumeDataRestorePolicyBinding extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The VolumeDataRestorePolicy to apply when restoring volumes in
     * scope.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.VolumeDataRestorePolicy policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $policy = 0;
    protected $scope;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $policy
     *           Required. The VolumeDataRestorePolicy to apply when restoring volumes in
     *           scope.
     *     @type int $volume_type
     *           The volume type, as determined by the PVC's bound PV,
     *           to apply the policy to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Restore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The VolumeDataRestorePolicy to apply when restoring volumes in
     * scope.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.VolumeDataRestorePolicy policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Required. The VolumeDataRestorePolicy to apply when restoring volumes in
     * scope.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.VolumeDataRestorePolicy policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeBackup\V1\RestoreConfig\VolumeDataRestorePolicy::class);
        $this->policy = $var;

        return $this;
    }

    /**
     * The volume type, as determined by the PVC's bound PV,
     * to apply the policy to.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.VolumeTypeEnum.VolumeType volume_type = 2;</code>
     * @return int
     */
    public function getVolumeType()
    {
        return $this->readOneof(2);
    }

    public function hasVolumeType()
    {
        return $this->hasOneof(2);
    }

    /**
     * The volume type, as determined by the PVC's bound PV,
     * to apply the policy to.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.VolumeTypeEnum.VolumeType volume_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setVolumeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeBackup\V1\VolumeTypeEnum\VolumeType::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->whichOneof("scope");
    }

}


