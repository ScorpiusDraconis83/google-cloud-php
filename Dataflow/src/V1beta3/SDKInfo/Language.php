<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/templates.proto

namespace Google\Cloud\Dataflow\V1beta3\SDKInfo;

use UnexpectedValueException;

/**
 * SDK Language.
 *
 * Protobuf type <code>google.dataflow.v1beta3.SDKInfo.Language</code>
 */
class Language
{
    /**
     * UNKNOWN Language.
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Java.
     *
     * Generated from protobuf enum <code>JAVA = 1;</code>
     */
    const JAVA = 1;
    /**
     * Python.
     *
     * Generated from protobuf enum <code>PYTHON = 2;</code>
     */
    const PYTHON = 2;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::JAVA => 'JAVA',
        self::PYTHON => 'PYTHON',
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


