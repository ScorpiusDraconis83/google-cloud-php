<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/resources.proto

namespace Google\Cloud\AlloyDb\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MaintenanceUpdatePolicy defines the policy for system updates.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1.MaintenanceUpdatePolicy</code>
 */
class MaintenanceUpdatePolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Preferred windows to perform maintenance. Currently limited to 1.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1.MaintenanceUpdatePolicy.MaintenanceWindow maintenance_windows = 1;</code>
     */
    private $maintenance_windows;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AlloyDb\V1\MaintenanceUpdatePolicy\MaintenanceWindow>|\Google\Protobuf\Internal\RepeatedField $maintenance_windows
     *           Preferred windows to perform maintenance. Currently limited to 1.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Preferred windows to perform maintenance. Currently limited to 1.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1.MaintenanceUpdatePolicy.MaintenanceWindow maintenance_windows = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMaintenanceWindows()
    {
        return $this->maintenance_windows;
    }

    /**
     * Preferred windows to perform maintenance. Currently limited to 1.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1.MaintenanceUpdatePolicy.MaintenanceWindow maintenance_windows = 1;</code>
     * @param array<\Google\Cloud\AlloyDb\V1\MaintenanceUpdatePolicy\MaintenanceWindow>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMaintenanceWindows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AlloyDb\V1\MaintenanceUpdatePolicy\MaintenanceWindow::class);
        $this->maintenance_windows = $arr;

        return $this;
    }

}

