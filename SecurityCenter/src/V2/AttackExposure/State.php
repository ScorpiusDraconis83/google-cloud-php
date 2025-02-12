<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/attack_exposure.proto

namespace Google\Cloud\SecurityCenter\V2\AttackExposure;

use UnexpectedValueException;

/**
 * This enum defines the various states an AttackExposure can be in.
 *
 * Protobuf type <code>google.cloud.securitycenter.v2.AttackExposure.State</code>
 */
class State
{
    /**
     * The state is not specified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The attack exposure has been calculated.
     *
     * Generated from protobuf enum <code>CALCULATED = 1;</code>
     */
    const CALCULATED = 1;
    /**
     * The attack exposure has not been calculated.
     *
     * Generated from protobuf enum <code>NOT_CALCULATED = 2;</code>
     */
    const NOT_CALCULATED = 2;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CALCULATED => 'CALCULATED',
        self::NOT_CALCULATED => 'NOT_CALCULATED',
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


