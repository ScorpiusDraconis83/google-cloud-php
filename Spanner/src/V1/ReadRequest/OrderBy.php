<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1\ReadRequest;

use UnexpectedValueException;

/**
 * An option to control the order in which rows are returned from a read.
 *
 * Protobuf type <code>google.spanner.v1.ReadRequest.OrderBy</code>
 */
class OrderBy
{
    /**
     * Default value.
     * ORDER_BY_UNSPECIFIED is equivalent to ORDER_BY_PRIMARY_KEY.
     *
     * Generated from protobuf enum <code>ORDER_BY_UNSPECIFIED = 0;</code>
     */
    const ORDER_BY_UNSPECIFIED = 0;
    /**
     * Read rows are returned in primary key order.
     * In the event that this option is used in conjunction with the
     * `partition_token` field, the API will return an `INVALID_ARGUMENT` error.
     *
     * Generated from protobuf enum <code>ORDER_BY_PRIMARY_KEY = 1;</code>
     */
    const ORDER_BY_PRIMARY_KEY = 1;
    /**
     * Read rows are returned in any order.
     *
     * Generated from protobuf enum <code>ORDER_BY_NO_ORDER = 2;</code>
     */
    const ORDER_BY_NO_ORDER = 2;

    private static $valueToName = [
        self::ORDER_BY_UNSPECIFIED => 'ORDER_BY_UNSPECIFIED',
        self::ORDER_BY_PRIMARY_KEY => 'ORDER_BY_PRIMARY_KEY',
        self::ORDER_BY_NO_ORDER => 'ORDER_BY_NO_ORDER',
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
class_alias(OrderBy::class, \Google\Cloud\Spanner\V1\ReadRequest_OrderBy::class);

