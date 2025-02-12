<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\BinaryAuthorization;

use UnexpectedValueException;

/**
 * Binary Authorization mode of operation.
 *
 * Protobuf type <code>google.container.v1.BinaryAuthorization.EvaluationMode</code>
 */
class EvaluationMode
{
    /**
     * Default value
     *
     * Generated from protobuf enum <code>EVALUATION_MODE_UNSPECIFIED = 0;</code>
     */
    const EVALUATION_MODE_UNSPECIFIED = 0;
    /**
     * Disable BinaryAuthorization
     *
     * Generated from protobuf enum <code>DISABLED = 1;</code>
     */
    const DISABLED = 1;
    /**
     * Enforce Kubernetes admission requests with BinaryAuthorization using the
     * project's singleton policy. This is equivalent to setting the
     * enabled boolean to true.
     *
     * Generated from protobuf enum <code>PROJECT_SINGLETON_POLICY_ENFORCE = 2;</code>
     */
    const PROJECT_SINGLETON_POLICY_ENFORCE = 2;

    private static $valueToName = [
        self::EVALUATION_MODE_UNSPECIFIED => 'EVALUATION_MODE_UNSPECIFIED',
        self::DISABLED => 'DISABLED',
        self::PROJECT_SINGLETON_POLICY_ENFORCE => 'PROJECT_SINGLETON_POLICY_ENFORCE',
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


