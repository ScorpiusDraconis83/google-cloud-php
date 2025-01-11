<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck;

use UnexpectedValueException;

/**
 * The HTTP request method options.
 *
 * Protobuf type <code>google.monitoring.v3.UptimeCheckConfig.HttpCheck.RequestMethod</code>
 */
class RequestMethod
{
    /**
     * No request method specified.
     *
     * Generated from protobuf enum <code>METHOD_UNSPECIFIED = 0;</code>
     */
    const METHOD_UNSPECIFIED = 0;
    /**
     * GET request.
     *
     * Generated from protobuf enum <code>GET = 1;</code>
     */
    const GET = 1;
    /**
     * POST request.
     *
     * Generated from protobuf enum <code>POST = 2;</code>
     */
    const POST = 2;

    private static $valueToName = [
        self::METHOD_UNSPECIFIED => 'METHOD_UNSPECIFIED',
        self::GET => 'GET',
        self::POST => 'POST',
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


