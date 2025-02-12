<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\CloudRunConfig;

use UnexpectedValueException;

/**
 * Load balancer type of ingress service of Cloud Run.
 *
 * Protobuf type <code>google.container.v1.CloudRunConfig.LoadBalancerType</code>
 */
class LoadBalancerType
{
    /**
     * Load balancer type for Cloud Run is unspecified.
     *
     * Generated from protobuf enum <code>LOAD_BALANCER_TYPE_UNSPECIFIED = 0;</code>
     */
    const LOAD_BALANCER_TYPE_UNSPECIFIED = 0;
    /**
     * Install external load balancer for Cloud Run.
     *
     * Generated from protobuf enum <code>LOAD_BALANCER_TYPE_EXTERNAL = 1;</code>
     */
    const LOAD_BALANCER_TYPE_EXTERNAL = 1;
    /**
     * Install internal load balancer for Cloud Run.
     *
     * Generated from protobuf enum <code>LOAD_BALANCER_TYPE_INTERNAL = 2;</code>
     */
    const LOAD_BALANCER_TYPE_INTERNAL = 2;

    private static $valueToName = [
        self::LOAD_BALANCER_TYPE_UNSPECIFIED => 'LOAD_BALANCER_TYPE_UNSPECIFIED',
        self::LOAD_BALANCER_TYPE_EXTERNAL => 'LOAD_BALANCER_TYPE_EXTERNAL',
        self::LOAD_BALANCER_TYPE_INTERNAL => 'LOAD_BALANCER_TYPE_INTERNAL',
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


