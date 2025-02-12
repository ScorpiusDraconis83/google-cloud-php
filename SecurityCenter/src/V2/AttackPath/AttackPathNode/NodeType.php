<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/attack_path.proto

namespace Google\Cloud\SecurityCenter\V2\AttackPath\AttackPathNode;

use UnexpectedValueException;

/**
 * The type of the incoming attack step node.
 *
 * Protobuf type <code>google.cloud.securitycenter.v2.AttackPath.AttackPathNode.NodeType</code>
 */
class NodeType
{
    /**
     * Type not specified
     *
     * Generated from protobuf enum <code>NODE_TYPE_UNSPECIFIED = 0;</code>
     */
    const NODE_TYPE_UNSPECIFIED = 0;
    /**
     * Incoming edge joined with AND
     *
     * Generated from protobuf enum <code>NODE_TYPE_AND = 1;</code>
     */
    const NODE_TYPE_AND = 1;
    /**
     * Incoming edge joined with OR
     *
     * Generated from protobuf enum <code>NODE_TYPE_OR = 2;</code>
     */
    const NODE_TYPE_OR = 2;
    /**
     * Incoming edge is defense
     *
     * Generated from protobuf enum <code>NODE_TYPE_DEFENSE = 3;</code>
     */
    const NODE_TYPE_DEFENSE = 3;
    /**
     * Incoming edge is attacker
     *
     * Generated from protobuf enum <code>NODE_TYPE_ATTACKER = 4;</code>
     */
    const NODE_TYPE_ATTACKER = 4;

    private static $valueToName = [
        self::NODE_TYPE_UNSPECIFIED => 'NODE_TYPE_UNSPECIFIED',
        self::NODE_TYPE_AND => 'NODE_TYPE_AND',
        self::NODE_TYPE_OR => 'NODE_TYPE_OR',
        self::NODE_TYPE_DEFENSE => 'NODE_TYPE_DEFENSE',
        self::NODE_TYPE_ATTACKER => 'NODE_TYPE_ATTACKER',
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


