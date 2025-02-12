<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/events/subscriptions/v1/subscription_resource.proto

namespace Google\Apps\Events\Subscriptions\V1\Subscription;

use UnexpectedValueException;

/**
 * Possible errors for a subscription.
 *
 * Protobuf type <code>google.apps.events.subscriptions.v1.Subscription.ErrorType</code>
 */
class ErrorType
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>ERROR_TYPE_UNSPECIFIED = 0;</code>
     */
    const ERROR_TYPE_UNSPECIFIED = 0;
    /**
     * The authorizing user has revoked the grant of one or more OAuth scopes.
     * To learn more about authorization for Google Workspace, see [Configure
     * the OAuth consent
     * screen](https://developers.google.com/workspace/guides/configure-oauth-consent#choose-scopes).
     *
     * Generated from protobuf enum <code>USER_SCOPE_REVOKED = 1;</code>
     */
    const USER_SCOPE_REVOKED = 1;
    /**
     * The target resource for the subscription no longer exists.
     *
     * Generated from protobuf enum <code>RESOURCE_DELETED = 2;</code>
     */
    const RESOURCE_DELETED = 2;
    /**
     * The user that authorized the creation of the subscription no longer has
     * access to the subscription's target resource.
     *
     * Generated from protobuf enum <code>USER_AUTHORIZATION_FAILURE = 3;</code>
     */
    const USER_AUTHORIZATION_FAILURE = 3;
    /**
     * The Google Workspace application doesn't have access to deliver
     * events to your subscription's notification endpoint.
     *
     * Generated from protobuf enum <code>ENDPOINT_PERMISSION_DENIED = 4;</code>
     */
    const ENDPOINT_PERMISSION_DENIED = 4;
    /**
     * The subscription's notification endpoint doesn't exist, or the endpoint
     * can't be found in the Google Cloud project where you created the
     * subscription.
     *
     * Generated from protobuf enum <code>ENDPOINT_NOT_FOUND = 6;</code>
     */
    const ENDPOINT_NOT_FOUND = 6;
    /**
     * The subscription's notification endpoint failed to receive events due to
     * insufficient quota or reaching rate limiting.
     *
     * Generated from protobuf enum <code>ENDPOINT_RESOURCE_EXHAUSTED = 7;</code>
     */
    const ENDPOINT_RESOURCE_EXHAUSTED = 7;
    /**
     * An unidentified error has occurred.
     *
     * Generated from protobuf enum <code>OTHER = 5;</code>
     */
    const OTHER = 5;

    private static $valueToName = [
        self::ERROR_TYPE_UNSPECIFIED => 'ERROR_TYPE_UNSPECIFIED',
        self::USER_SCOPE_REVOKED => 'USER_SCOPE_REVOKED',
        self::RESOURCE_DELETED => 'RESOURCE_DELETED',
        self::USER_AUTHORIZATION_FAILURE => 'USER_AUTHORIZATION_FAILURE',
        self::ENDPOINT_PERMISSION_DENIED => 'ENDPOINT_PERMISSION_DENIED',
        self::ENDPOINT_NOT_FOUND => 'ENDPOINT_NOT_FOUND',
        self::ENDPOINT_RESOURCE_EXHAUSTED => 'ENDPOINT_RESOURCE_EXHAUSTED',
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


