<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig;

use UnexpectedValueException;

/**
 * Indicates the quorum type of this instance configuration.
 *
 * Protobuf type <code>google.spanner.admin.instance.v1.InstanceConfig.QuorumType</code>
 */
class QuorumType
{
    /**
     * Quorum type not specified.
     *
     * Generated from protobuf enum <code>QUORUM_TYPE_UNSPECIFIED = 0;</code>
     */
    const QUORUM_TYPE_UNSPECIFIED = 0;
    /**
     * An instance configuration tagged with `REGION` quorum type forms a write
     * quorum in a single region.
     *
     * Generated from protobuf enum <code>REGION = 1;</code>
     */
    const REGION = 1;
    /**
     * An instance configuration tagged with the `DUAL_REGION` quorum type forms
     * a write quorum with exactly two read-write regions in a multi-region
     * configuration.
     * This instance configuration requires failover in the event of
     * regional failures.
     *
     * Generated from protobuf enum <code>DUAL_REGION = 2;</code>
     */
    const DUAL_REGION = 2;
    /**
     * An instance configuration tagged with the `MULTI_REGION` quorum type
     * forms a write quorum from replicas that are spread across more than one
     * region in a multi-region configuration.
     *
     * Generated from protobuf enum <code>MULTI_REGION = 3;</code>
     */
    const MULTI_REGION = 3;

    private static $valueToName = [
        self::QUORUM_TYPE_UNSPECIFIED => 'QUORUM_TYPE_UNSPECIFIED',
        self::REGION => 'REGION',
        self::DUAL_REGION => 'DUAL_REGION',
        self::MULTI_REGION => 'MULTI_REGION',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QuorumType::class, \Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig_QuorumType::class);

