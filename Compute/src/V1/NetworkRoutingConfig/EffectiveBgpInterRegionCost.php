<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NetworkRoutingConfig;

use UnexpectedValueException;

/**
 * [Output Only] Effective value of the bgp_inter_region_cost field.
 * Additional supported values which may be not listed in the enum directly due to technical reasons:
 * ADD_COST_TO_MED
 * DEFAULT
 *
 * Protobuf type <code>google.cloud.compute.v1.NetworkRoutingConfig.EffectiveBgpInterRegionCost</code>
 */
class EffectiveBgpInterRegionCost
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_EFFECTIVE_BGP_INTER_REGION_COST = 0;</code>
     */
    const UNDEFINED_EFFECTIVE_BGP_INTER_REGION_COST = 0;

    private static $valueToName = [
        self::UNDEFINED_EFFECTIVE_BGP_INTER_REGION_COST => 'UNDEFINED_EFFECTIVE_BGP_INTER_REGION_COST',
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


