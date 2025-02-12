<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha\CustomMetric;

use UnexpectedValueException;

/**
 * Possible types of representing the custom metric's value.
 * Currency representation may change in the future, requiring a breaking API
 * change.
 *
 * Protobuf type <code>google.analytics.admin.v1alpha.CustomMetric.MeasurementUnit</code>
 */
class MeasurementUnit
{
    /**
     * MeasurementUnit unspecified or missing.
     *
     * Generated from protobuf enum <code>MEASUREMENT_UNIT_UNSPECIFIED = 0;</code>
     */
    const MEASUREMENT_UNIT_UNSPECIFIED = 0;
    /**
     * This metric uses default units.
     *
     * Generated from protobuf enum <code>STANDARD = 1;</code>
     */
    const STANDARD = 1;
    /**
     * This metric measures a currency.
     *
     * Generated from protobuf enum <code>CURRENCY = 2;</code>
     */
    const CURRENCY = 2;
    /**
     * This metric measures feet.
     *
     * Generated from protobuf enum <code>FEET = 3;</code>
     */
    const FEET = 3;
    /**
     * This metric measures meters.
     *
     * Generated from protobuf enum <code>METERS = 4;</code>
     */
    const METERS = 4;
    /**
     * This metric measures kilometers.
     *
     * Generated from protobuf enum <code>KILOMETERS = 5;</code>
     */
    const KILOMETERS = 5;
    /**
     * This metric measures miles.
     *
     * Generated from protobuf enum <code>MILES = 6;</code>
     */
    const MILES = 6;
    /**
     * This metric measures milliseconds.
     *
     * Generated from protobuf enum <code>MILLISECONDS = 7;</code>
     */
    const MILLISECONDS = 7;
    /**
     * This metric measures seconds.
     *
     * Generated from protobuf enum <code>SECONDS = 8;</code>
     */
    const SECONDS = 8;
    /**
     * This metric measures minutes.
     *
     * Generated from protobuf enum <code>MINUTES = 9;</code>
     */
    const MINUTES = 9;
    /**
     * This metric measures hours.
     *
     * Generated from protobuf enum <code>HOURS = 10;</code>
     */
    const HOURS = 10;

    private static $valueToName = [
        self::MEASUREMENT_UNIT_UNSPECIFIED => 'MEASUREMENT_UNIT_UNSPECIFIED',
        self::STANDARD => 'STANDARD',
        self::CURRENCY => 'CURRENCY',
        self::FEET => 'FEET',
        self::METERS => 'METERS',
        self::KILOMETERS => 'KILOMETERS',
        self::MILES => 'MILES',
        self::MILLISECONDS => 'MILLISECONDS',
        self::SECONDS => 'SECONDS',
        self::MINUTES => 'MINUTES',
        self::HOURS => 'HOURS',
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


