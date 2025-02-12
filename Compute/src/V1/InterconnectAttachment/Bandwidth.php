<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InterconnectAttachment;

use UnexpectedValueException;

/**
 * Provisioned bandwidth capacity for the interconnect attachment. For attachments of type DEDICATED, the user can set the bandwidth. For attachments of type PARTNER, the Google Partner that is operating the interconnect must set the bandwidth. Output only for PARTNER type, mutable for PARTNER_PROVIDER and DEDICATED, and can take one of the following values: - BPS_50M: 50 Mbit/s - BPS_100M: 100 Mbit/s - BPS_200M: 200 Mbit/s - BPS_300M: 300 Mbit/s - BPS_400M: 400 Mbit/s - BPS_500M: 500 Mbit/s - BPS_1G: 1 Gbit/s - BPS_2G: 2 Gbit/s - BPS_5G: 5 Gbit/s - BPS_10G: 10 Gbit/s - BPS_20G: 20 Gbit/s - BPS_50G: 50 Gbit/s - BPS_100G: 100 Gbit/s 
 *
 * Protobuf type <code>google.cloud.compute.v1.InterconnectAttachment.Bandwidth</code>
 */
class Bandwidth
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_BANDWIDTH = 0;</code>
     */
    const UNDEFINED_BANDWIDTH = 0;
    /**
     * 100 Gbit/s
     *
     * Generated from protobuf enum <code>BPS_100G = 49547952;</code>
     */
    const BPS_100G = 49547952;
    /**
     * 100 Mbit/s
     *
     * Generated from protobuf enum <code>BPS_100M = 49547958;</code>
     */
    const BPS_100M = 49547958;
    /**
     * 10 Gbit/s
     *
     * Generated from protobuf enum <code>BPS_10G = 278693006;</code>
     */
    const BPS_10G = 278693006;
    /**
     * 1 Gbit/s
     *
     * Generated from protobuf enum <code>BPS_1G = 355358448;</code>
     */
    const BPS_1G = 355358448;
    /**
     * 200 Mbit/s
     *
     * Generated from protobuf enum <code>BPS_200M = 49577749;</code>
     */
    const BPS_200M = 49577749;
    /**
     * 20 Gbit/s
     *
     * Generated from protobuf enum <code>BPS_20G = 278693967;</code>
     */
    const BPS_20G = 278693967;
    /**
     * 2 Gbit/s
     *
     * Generated from protobuf enum <code>BPS_2G = 355358479;</code>
     */
    const BPS_2G = 355358479;
    /**
     * 300 Mbit/s
     *
     * Generated from protobuf enum <code>BPS_300M = 49607540;</code>
     */
    const BPS_300M = 49607540;
    /**
     * 400 Mbit/s
     *
     * Generated from protobuf enum <code>BPS_400M = 49637331;</code>
     */
    const BPS_400M = 49637331;
    /**
     * 500 Mbit/s
     *
     * Generated from protobuf enum <code>BPS_500M = 49667122;</code>
     */
    const BPS_500M = 49667122;
    /**
     * 50 Gbit/s
     *
     * Generated from protobuf enum <code>BPS_50G = 278696850;</code>
     */
    const BPS_50G = 278696850;
    /**
     * 50 Mbit/s
     *
     * Generated from protobuf enum <code>BPS_50M = 278696856;</code>
     */
    const BPS_50M = 278696856;
    /**
     * 5 Gbit/s
     *
     * Generated from protobuf enum <code>BPS_5G = 355358572;</code>
     */
    const BPS_5G = 355358572;

    private static $valueToName = [
        self::UNDEFINED_BANDWIDTH => 'UNDEFINED_BANDWIDTH',
        self::BPS_100G => 'BPS_100G',
        self::BPS_100M => 'BPS_100M',
        self::BPS_10G => 'BPS_10G',
        self::BPS_1G => 'BPS_1G',
        self::BPS_200M => 'BPS_200M',
        self::BPS_20G => 'BPS_20G',
        self::BPS_2G => 'BPS_2G',
        self::BPS_300M => 'BPS_300M',
        self::BPS_400M => 'BPS_400M',
        self::BPS_500M => 'BPS_500M',
        self::BPS_50G => 'BPS_50G',
        self::BPS_50M => 'BPS_50M',
        self::BPS_5G => 'BPS_5G',
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


