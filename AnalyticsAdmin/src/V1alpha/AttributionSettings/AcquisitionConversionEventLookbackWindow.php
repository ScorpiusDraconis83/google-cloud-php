<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha\AttributionSettings;

use UnexpectedValueException;

/**
 * How far back in time events should be considered for inclusion in a
 * converting path which leads to the first install of an app or the first
 * visit to a site.
 *
 * Protobuf type <code>google.analytics.admin.v1alpha.AttributionSettings.AcquisitionConversionEventLookbackWindow</code>
 */
class AcquisitionConversionEventLookbackWindow
{
    /**
     * Lookback window size unspecified.
     *
     * Generated from protobuf enum <code>ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED = 0;</code>
     */
    const ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED = 0;
    /**
     * 7-day lookback window.
     *
     * Generated from protobuf enum <code>ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_7_DAYS = 1;</code>
     */
    const ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_7_DAYS = 1;
    /**
     * 30-day lookback window.
     *
     * Generated from protobuf enum <code>ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_30_DAYS = 2;</code>
     */
    const ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_30_DAYS = 2;

    private static $valueToName = [
        self::ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED => 'ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED',
        self::ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_7_DAYS => 'ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_7_DAYS',
        self::ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_30_DAYS => 'ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_30_DAYS',
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


