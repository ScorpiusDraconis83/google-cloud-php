<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1\DeployPolicy;

use UnexpectedValueException;

/**
 * What invoked the action. Filters enforcing the policy depending on what
 * invoked the action.
 *
 * Protobuf type <code>google.cloud.deploy.v1.DeployPolicy.Invoker</code>
 */
class Invoker
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>INVOKER_UNSPECIFIED = 0;</code>
     */
    const INVOKER_UNSPECIFIED = 0;
    /**
     * The action is user-driven. For example, creating a rollout manually via a
     * gcloud create command.
     *
     * Generated from protobuf enum <code>USER = 1;</code>
     */
    const USER = 1;
    /**
     * Automated action by Cloud Deploy.
     *
     * Generated from protobuf enum <code>DEPLOY_AUTOMATION = 2;</code>
     */
    const DEPLOY_AUTOMATION = 2;

    private static $valueToName = [
        self::INVOKER_UNSPECIFIED => 'INVOKER_UNSPECIFIED',
        self::USER => 'USER',
        self::DEPLOY_AUTOMATION => 'DEPLOY_AUTOMATION',
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


