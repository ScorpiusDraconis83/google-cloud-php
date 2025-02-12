<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/instance.proto

namespace Google\Cloud\Notebooks\V1\Instance;

use UnexpectedValueException;

/**
 * Possible disk types for notebook instances.
 *
 * Protobuf type <code>google.cloud.notebooks.v1.Instance.DiskType</code>
 */
class DiskType
{
    /**
     * Disk type not set.
     *
     * Generated from protobuf enum <code>DISK_TYPE_UNSPECIFIED = 0;</code>
     */
    const DISK_TYPE_UNSPECIFIED = 0;
    /**
     * Standard persistent disk type.
     *
     * Generated from protobuf enum <code>PD_STANDARD = 1;</code>
     */
    const PD_STANDARD = 1;
    /**
     * SSD persistent disk type.
     *
     * Generated from protobuf enum <code>PD_SSD = 2;</code>
     */
    const PD_SSD = 2;
    /**
     * Balanced persistent disk type.
     *
     * Generated from protobuf enum <code>PD_BALANCED = 3;</code>
     */
    const PD_BALANCED = 3;
    /**
     * Extreme persistent disk type.
     *
     * Generated from protobuf enum <code>PD_EXTREME = 4;</code>
     */
    const PD_EXTREME = 4;

    private static $valueToName = [
        self::DISK_TYPE_UNSPECIFIED => 'DISK_TYPE_UNSPECIFIED',
        self::PD_STANDARD => 'PD_STANDARD',
        self::PD_SSD => 'PD_SSD',
        self::PD_BALANCED => 'PD_BALANCED',
        self::PD_EXTREME => 'PD_EXTREME',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


