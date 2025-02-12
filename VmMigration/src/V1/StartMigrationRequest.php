<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'StartMigrationRequest' request.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.StartMigrationRequest</code>
 */
class StartMigrationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the MigratingVm.
     *
     * Generated from protobuf field <code>string migrating_vm = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $migrating_vm = '';

    /**
     * @param string $migratingVm Required. The name of the MigratingVm. Please see
     *                            {@see VmMigrationClient::migratingVmName()} for help formatting this field.
     *
     * @return \Google\Cloud\VMMigration\V1\StartMigrationRequest
     *
     * @experimental
     */
    public static function build(string $migratingVm): self
    {
        return (new self())
            ->setMigratingVm($migratingVm);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $migrating_vm
     *           Required. The name of the MigratingVm.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the MigratingVm.
     *
     * Generated from protobuf field <code>string migrating_vm = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getMigratingVm()
    {
        return $this->migrating_vm;
    }

    /**
     * Required. The name of the MigratingVm.
     *
     * Generated from protobuf field <code>string migrating_vm = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setMigratingVm($var)
    {
        GPBUtil::checkString($var, True);
        $this->migrating_vm = $var;

        return $this;
    }

}

