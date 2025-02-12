<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/cloudquotas/v1beta/resources.proto

namespace Google\Cloud\CloudQuotas\V1beta\QuotaIncreaseEligibility;

use UnexpectedValueException;

/**
 * The enumeration of reasons when it is ineligible to request increase
 * adjustment.
 *
 * Protobuf type <code>google.api.cloudquotas.v1beta.QuotaIncreaseEligibility.IneligibilityReason</code>
 */
class IneligibilityReason
{
    /**
     * Default value when is_eligible is true.
     *
     * Generated from protobuf enum <code>INELIGIBILITY_REASON_UNSPECIFIED = 0;</code>
     */
    const INELIGIBILITY_REASON_UNSPECIFIED = 0;
    /**
     * The container is not linked with a valid billing account.
     *
     * Generated from protobuf enum <code>NO_VALID_BILLING_ACCOUNT = 1;</code>
     */
    const NO_VALID_BILLING_ACCOUNT = 1;
    /**
     * Quota increase is not supported for the quota.
     *
     * Generated from protobuf enum <code>NOT_SUPPORTED = 3;</code>
     */
    const NOT_SUPPORTED = 3;
    /**
     * There is not enough usage history to determine the eligibility.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_USAGE_HISTORY = 4;</code>
     */
    const NOT_ENOUGH_USAGE_HISTORY = 4;
    /**
     * Other reasons.
     *
     * Generated from protobuf enum <code>OTHER = 2;</code>
     */
    const OTHER = 2;

    private static $valueToName = [
        self::INELIGIBILITY_REASON_UNSPECIFIED => 'INELIGIBILITY_REASON_UNSPECIFIED',
        self::NO_VALID_BILLING_ACCOUNT => 'NO_VALID_BILLING_ACCOUNT',
        self::NOT_SUPPORTED => 'NOT_SUPPORTED',
        self::NOT_ENOUGH_USAGE_HISTORY => 'NOT_ENOUGH_USAGE_HISTORY',
        self::OTHER => 'OTHER',
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


