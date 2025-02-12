<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/storage.proto

namespace Google\Cloud\BigQuery\Storage\V1\StorageError;

use UnexpectedValueException;

/**
 * Error code for `StorageError`.
 *
 * Protobuf type <code>google.cloud.bigquery.storage.v1.StorageError.StorageErrorCode</code>
 */
class StorageErrorCode
{
    /**
     * Default error.
     *
     * Generated from protobuf enum <code>STORAGE_ERROR_CODE_UNSPECIFIED = 0;</code>
     */
    const STORAGE_ERROR_CODE_UNSPECIFIED = 0;
    /**
     * Table is not found in the system.
     *
     * Generated from protobuf enum <code>TABLE_NOT_FOUND = 1;</code>
     */
    const TABLE_NOT_FOUND = 1;
    /**
     * Stream is already committed.
     *
     * Generated from protobuf enum <code>STREAM_ALREADY_COMMITTED = 2;</code>
     */
    const STREAM_ALREADY_COMMITTED = 2;
    /**
     * Stream is not found.
     *
     * Generated from protobuf enum <code>STREAM_NOT_FOUND = 3;</code>
     */
    const STREAM_NOT_FOUND = 3;
    /**
     * Invalid Stream type.
     * For example, you try to commit a stream that is not pending.
     *
     * Generated from protobuf enum <code>INVALID_STREAM_TYPE = 4;</code>
     */
    const INVALID_STREAM_TYPE = 4;
    /**
     * Invalid Stream state.
     * For example, you try to commit a stream that is not finalized or is
     * garbaged.
     *
     * Generated from protobuf enum <code>INVALID_STREAM_STATE = 5;</code>
     */
    const INVALID_STREAM_STATE = 5;
    /**
     * Stream is finalized.
     *
     * Generated from protobuf enum <code>STREAM_FINALIZED = 6;</code>
     */
    const STREAM_FINALIZED = 6;
    /**
     * There is a schema mismatch and it is caused by user schema has extra
     * field than bigquery schema.
     *
     * Generated from protobuf enum <code>SCHEMA_MISMATCH_EXTRA_FIELDS = 7;</code>
     */
    const SCHEMA_MISMATCH_EXTRA_FIELDS = 7;
    /**
     * Offset already exists.
     *
     * Generated from protobuf enum <code>OFFSET_ALREADY_EXISTS = 8;</code>
     */
    const OFFSET_ALREADY_EXISTS = 8;
    /**
     * Offset out of range.
     *
     * Generated from protobuf enum <code>OFFSET_OUT_OF_RANGE = 9;</code>
     */
    const OFFSET_OUT_OF_RANGE = 9;
    /**
     * Customer-managed encryption key (CMEK) not provided for CMEK-enabled
     * data.
     *
     * Generated from protobuf enum <code>CMEK_NOT_PROVIDED = 10;</code>
     */
    const CMEK_NOT_PROVIDED = 10;
    /**
     * Customer-managed encryption key (CMEK) was incorrectly provided.
     *
     * Generated from protobuf enum <code>INVALID_CMEK_PROVIDED = 11;</code>
     */
    const INVALID_CMEK_PROVIDED = 11;
    /**
     * There is an encryption error while using customer-managed encryption key.
     *
     * Generated from protobuf enum <code>CMEK_ENCRYPTION_ERROR = 12;</code>
     */
    const CMEK_ENCRYPTION_ERROR = 12;
    /**
     * Key Management Service (KMS) service returned an error, which can be
     * retried.
     *
     * Generated from protobuf enum <code>KMS_SERVICE_ERROR = 13;</code>
     */
    const KMS_SERVICE_ERROR = 13;
    /**
     * Permission denied while using customer-managed encryption key.
     *
     * Generated from protobuf enum <code>KMS_PERMISSION_DENIED = 14;</code>
     */
    const KMS_PERMISSION_DENIED = 14;

    private static $valueToName = [
        self::STORAGE_ERROR_CODE_UNSPECIFIED => 'STORAGE_ERROR_CODE_UNSPECIFIED',
        self::TABLE_NOT_FOUND => 'TABLE_NOT_FOUND',
        self::STREAM_ALREADY_COMMITTED => 'STREAM_ALREADY_COMMITTED',
        self::STREAM_NOT_FOUND => 'STREAM_NOT_FOUND',
        self::INVALID_STREAM_TYPE => 'INVALID_STREAM_TYPE',
        self::INVALID_STREAM_STATE => 'INVALID_STREAM_STATE',
        self::STREAM_FINALIZED => 'STREAM_FINALIZED',
        self::SCHEMA_MISMATCH_EXTRA_FIELDS => 'SCHEMA_MISMATCH_EXTRA_FIELDS',
        self::OFFSET_ALREADY_EXISTS => 'OFFSET_ALREADY_EXISTS',
        self::OFFSET_OUT_OF_RANGE => 'OFFSET_OUT_OF_RANGE',
        self::CMEK_NOT_PROVIDED => 'CMEK_NOT_PROVIDED',
        self::INVALID_CMEK_PROVIDED => 'INVALID_CMEK_PROVIDED',
        self::CMEK_ENCRYPTION_ERROR => 'CMEK_ENCRYPTION_ERROR',
        self::KMS_SERVICE_ERROR => 'KMS_SERVICE_ERROR',
        self::KMS_PERMISSION_DENIED => 'KMS_PERMISSION_DENIED',
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


