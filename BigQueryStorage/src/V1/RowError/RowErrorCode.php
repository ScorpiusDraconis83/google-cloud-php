<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/storage.proto

namespace Google\Cloud\BigQuery\Storage\V1\RowError;

use UnexpectedValueException;

/**
 * Error code for `RowError`.
 *
 * Protobuf type <code>google.cloud.bigquery.storage.v1.RowError.RowErrorCode</code>
 */
class RowErrorCode
{
    /**
     * Default error.
     *
     * Generated from protobuf enum <code>ROW_ERROR_CODE_UNSPECIFIED = 0;</code>
     */
    const ROW_ERROR_CODE_UNSPECIFIED = 0;
    /**
     * One or more fields in the row has errors.
     *
     * Generated from protobuf enum <code>FIELDS_ERROR = 1;</code>
     */
    const FIELDS_ERROR = 1;

    private static $valueToName = [
        self::ROW_ERROR_CODE_UNSPECIFIED => 'ROW_ERROR_CODE_UNSPECIFIED',
        self::FIELDS_ERROR => 'FIELDS_ERROR',
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


