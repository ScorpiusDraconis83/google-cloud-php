<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableInstanceAdmin.PartialUpdateInstance.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.PartialUpdateInstanceRequest</code>
 */
class PartialUpdateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Instance which will (partially) replace the current value.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Instance instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance = null;
    /**
     * Required. The subset of Instance fields which should be replaced.
     * Must be explicitly set.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Bigtable\Admin\V2\Instance $instance   Required. The Instance which will (partially) replace the current value.
     * @param \Google\Protobuf\FieldMask               $updateMask Required. The subset of Instance fields which should be replaced.
     *                                                             Must be explicitly set.
     *
     * @return \Google\Cloud\Bigtable\Admin\V2\PartialUpdateInstanceRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Bigtable\Admin\V2\Instance $instance, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setInstance($instance)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\Admin\V2\Instance $instance
     *           Required. The Instance which will (partially) replace the current value.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The subset of Instance fields which should be replaced.
     *           Must be explicitly set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Instance which will (partially) replace the current value.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Instance instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Instance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Required. The Instance which will (partially) replace the current value.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Instance instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Instance::class);
        $this->instance = $var;

        return $this;
    }

    /**
     * Required. The subset of Instance fields which should be replaced.
     * Must be explicitly set.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The subset of Instance fields which should be replaced.
     * Must be explicitly set.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

