<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SecurityPolicyRuleRateLimitOptions;

use UnexpectedValueException;

/**
 * Determines the key to enforce the rate_limit_threshold on. Possible values are: - ALL: A single rate limit threshold is applied to all the requests matching this rule. This is the default value if "enforceOnKey" is not configured. - IP: The source IP address of the request is the key. Each IP has this limit enforced separately. - HTTP_HEADER: The value of the HTTP header whose name is configured under "enforceOnKeyName". The key value is truncated to the first 128 bytes of the header value. If no such header is present in the request, the key type defaults to ALL. - XFF_IP: The first IP address (i.e. the originating client IP address) specified in the list of IPs under X-Forwarded-For HTTP header. If no such header is present or the value is not a valid IP, the key defaults to the source IP address of the request i.e. key type IP. - HTTP_COOKIE: The value of the HTTP cookie whose name is configured under "enforceOnKeyName". The key value is truncated to the first 128 bytes of the cookie value. If no such cookie is present in the request, the key type defaults to ALL. - HTTP_PATH: The URL path of the HTTP request. The key value is truncated to the first 128 bytes. - SNI: Server name indication in the TLS session of the HTTPS request. The key value is truncated to the first 128 bytes. The key type defaults to ALL on a HTTP session. - REGION_CODE: The country/region from which the request originates. - TLS_JA3_FINGERPRINT: JA3 TLS/SSL fingerprint if the client connects using HTTPS, HTTP/2 or HTTP/3. If not available, the key type defaults to ALL. - USER_IP: The IP address of the originating client, which is resolved based on "userIpRequestHeaders" configured with the security policy. If there is no "userIpRequestHeaders" configuration or an IP address cannot be resolved from it, the key type defaults to IP. - TLS_JA4_FINGERPRINT: JA4 TLS/SSL fingerprint if the client connects using HTTPS, HTTP/2 or HTTP/3. If not available, the key type defaults to ALL. 
 *
 * Protobuf type <code>google.cloud.compute.v1.SecurityPolicyRuleRateLimitOptions.EnforceOnKey</code>
 */
class EnforceOnKey
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ENFORCE_ON_KEY = 0;</code>
     */
    const UNDEFINED_ENFORCE_ON_KEY = 0;
    /**
     * Generated from protobuf enum <code>ALL = 64897;</code>
     */
    const ALL = 64897;
    /**
     * Generated from protobuf enum <code>HTTP_COOKIE = 494981627;</code>
     */
    const HTTP_COOKIE = 494981627;
    /**
     * Generated from protobuf enum <code>HTTP_HEADER = 91597348;</code>
     */
    const HTTP_HEADER = 91597348;
    /**
     * Generated from protobuf enum <code>HTTP_PATH = 311503228;</code>
     */
    const HTTP_PATH = 311503228;
    /**
     * Generated from protobuf enum <code>IP = 2343;</code>
     */
    const IP = 2343;
    /**
     * Generated from protobuf enum <code>REGION_CODE = 79559768;</code>
     */
    const REGION_CODE = 79559768;
    /**
     * Generated from protobuf enum <code>SNI = 82254;</code>
     */
    const SNI = 82254;
    /**
     * Generated from protobuf enum <code>TLS_JA3_FINGERPRINT = 327127933;</code>
     */
    const TLS_JA3_FINGERPRINT = 327127933;
    /**
     * Generated from protobuf enum <code>TLS_JA4_FINGERPRINT = 33724926;</code>
     */
    const TLS_JA4_FINGERPRINT = 33724926;
    /**
     * Generated from protobuf enum <code>USER_IP = 34009627;</code>
     */
    const USER_IP = 34009627;
    /**
     * Generated from protobuf enum <code>XFF_IP = 438707118;</code>
     */
    const XFF_IP = 438707118;

    private static $valueToName = [
        self::UNDEFINED_ENFORCE_ON_KEY => 'UNDEFINED_ENFORCE_ON_KEY',
        self::ALL => 'ALL',
        self::HTTP_COOKIE => 'HTTP_COOKIE',
        self::HTTP_HEADER => 'HTTP_HEADER',
        self::HTTP_PATH => 'HTTP_PATH',
        self::IP => 'IP',
        self::REGION_CODE => 'REGION_CODE',
        self::SNI => 'SNI',
        self::TLS_JA3_FINGERPRINT => 'TLS_JA3_FINGERPRINT',
        self::TLS_JA4_FINGERPRINT => 'TLS_JA4_FINGERPRINT',
        self::USER_IP => 'USER_IP',
        self::XFF_IP => 'XFF_IP',
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


