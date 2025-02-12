<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LocalNvmeSsdBlockConfig contains configuration for using raw-block local
 * NVMe SSDs
 *
 * Generated from protobuf message <code>google.container.v1.LocalNvmeSsdBlockConfig</code>
 */
class LocalNvmeSsdBlockConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of local NVMe SSDs to use.  The limit for this value is dependent
     * upon the maximum number of disk available on a machine per zone. See:
     * https://cloud.google.com/compute/docs/disks/local-ssd
     * for more information.
     * A zero (or unset) value has different meanings depending on machine type
     * being used:
     * 1. For pre-Gen3 machines, which support flexible numbers of local ssds,
     * zero (or unset) means to disable using local SSDs as ephemeral storage.
     * 2. For Gen3 machines which dictate a specific number of local ssds, zero
     * (or unset) means to use the default number of local ssds that goes with
     * that machine type. For example, for a c3-standard-8-lssd machine, 2 local
     * ssds would be provisioned. For c3-standard-8 (which doesn't support local
     * ssds), 0 will be provisioned. See
     * https://cloud.google.com/compute/docs/disks/local-ssd#choose_number_local_ssds
     * for more info.
     *
     * Generated from protobuf field <code>int32 local_ssd_count = 1;</code>
     */
    protected $local_ssd_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $local_ssd_count
     *           Number of local NVMe SSDs to use.  The limit for this value is dependent
     *           upon the maximum number of disk available on a machine per zone. See:
     *           https://cloud.google.com/compute/docs/disks/local-ssd
     *           for more information.
     *           A zero (or unset) value has different meanings depending on machine type
     *           being used:
     *           1. For pre-Gen3 machines, which support flexible numbers of local ssds,
     *           zero (or unset) means to disable using local SSDs as ephemeral storage.
     *           2. For Gen3 machines which dictate a specific number of local ssds, zero
     *           (or unset) means to use the default number of local ssds that goes with
     *           that machine type. For example, for a c3-standard-8-lssd machine, 2 local
     *           ssds would be provisioned. For c3-standard-8 (which doesn't support local
     *           ssds), 0 will be provisioned. See
     *           https://cloud.google.com/compute/docs/disks/local-ssd#choose_number_local_ssds
     *           for more info.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of local NVMe SSDs to use.  The limit for this value is dependent
     * upon the maximum number of disk available on a machine per zone. See:
     * https://cloud.google.com/compute/docs/disks/local-ssd
     * for more information.
     * A zero (or unset) value has different meanings depending on machine type
     * being used:
     * 1. For pre-Gen3 machines, which support flexible numbers of local ssds,
     * zero (or unset) means to disable using local SSDs as ephemeral storage.
     * 2. For Gen3 machines which dictate a specific number of local ssds, zero
     * (or unset) means to use the default number of local ssds that goes with
     * that machine type. For example, for a c3-standard-8-lssd machine, 2 local
     * ssds would be provisioned. For c3-standard-8 (which doesn't support local
     * ssds), 0 will be provisioned. See
     * https://cloud.google.com/compute/docs/disks/local-ssd#choose_number_local_ssds
     * for more info.
     *
     * Generated from protobuf field <code>int32 local_ssd_count = 1;</code>
     * @return int
     */
    public function getLocalSsdCount()
    {
        return $this->local_ssd_count;
    }

    /**
     * Number of local NVMe SSDs to use.  The limit for this value is dependent
     * upon the maximum number of disk available on a machine per zone. See:
     * https://cloud.google.com/compute/docs/disks/local-ssd
     * for more information.
     * A zero (or unset) value has different meanings depending on machine type
     * being used:
     * 1. For pre-Gen3 machines, which support flexible numbers of local ssds,
     * zero (or unset) means to disable using local SSDs as ephemeral storage.
     * 2. For Gen3 machines which dictate a specific number of local ssds, zero
     * (or unset) means to use the default number of local ssds that goes with
     * that machine type. For example, for a c3-standard-8-lssd machine, 2 local
     * ssds would be provisioned. For c3-standard-8 (which doesn't support local
     * ssds), 0 will be provisioned. See
     * https://cloud.google.com/compute/docs/disks/local-ssd#choose_number_local_ssds
     * for more info.
     *
     * Generated from protobuf field <code>int32 local_ssd_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLocalSsdCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->local_ssd_count = $var;

        return $this;
    }

}

