<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/membership.proto

namespace Google\Cloud\GkeHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Authority encodes how Google will recognize identities from this Membership.
 * See the workload identity documentation for more details:
 * https://cloud.google.com/kubernetes-engine/docs/how-to/workload-identity
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1.Authority</code>
 */
class Authority extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A JSON Web Token (JWT) issuer URI. `issuer` must start with
     * `https://` and be a valid URL with length <2000 characters.
     * If set, then Google will allow valid OIDC tokens from this issuer to
     * authenticate within the workload_identity_pool. OIDC discovery will be
     * performed on this URI to validate tokens from the issuer.
     * Clearing `issuer` disables Workload Identity. `issuer` cannot be directly
     * modified; it must be cleared (and Workload Identity disabled) before using
     * a new issuer (and re-enabling Workload Identity).
     *
     * Generated from protobuf field <code>string issuer = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $issuer = '';
    /**
     * Output only. The name of the workload identity pool in which `issuer` will
     * be recognized.
     * There is a single Workload Identity Pool per Hub that is shared
     * between all Memberships that belong to that Hub. For a Hub hosted in
     * {PROJECT_ID}, the workload pool format is `{PROJECT_ID}.hub.id.goog`,
     * although this is subject to change in newer versions of this API.
     *
     * Generated from protobuf field <code>string workload_identity_pool = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $workload_identity_pool = '';
    /**
     * Output only. An identity provider that reflects the `issuer` in the
     * workload identity pool.
     *
     * Generated from protobuf field <code>string identity_provider = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $identity_provider = '';
    /**
     * Optional. OIDC verification keys for this Membership in JWKS format (RFC
     * 7517).
     * When this field is set, OIDC discovery will NOT be performed on `issuer`,
     * and instead OIDC tokens will be validated using this field.
     *
     * Generated from protobuf field <code>bytes oidc_jwks = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $oidc_jwks = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $issuer
     *           Optional. A JSON Web Token (JWT) issuer URI. `issuer` must start with
     *           `https://` and be a valid URL with length <2000 characters.
     *           If set, then Google will allow valid OIDC tokens from this issuer to
     *           authenticate within the workload_identity_pool. OIDC discovery will be
     *           performed on this URI to validate tokens from the issuer.
     *           Clearing `issuer` disables Workload Identity. `issuer` cannot be directly
     *           modified; it must be cleared (and Workload Identity disabled) before using
     *           a new issuer (and re-enabling Workload Identity).
     *     @type string $workload_identity_pool
     *           Output only. The name of the workload identity pool in which `issuer` will
     *           be recognized.
     *           There is a single Workload Identity Pool per Hub that is shared
     *           between all Memberships that belong to that Hub. For a Hub hosted in
     *           {PROJECT_ID}, the workload pool format is `{PROJECT_ID}.hub.id.goog`,
     *           although this is subject to change in newer versions of this API.
     *     @type string $identity_provider
     *           Output only. An identity provider that reflects the `issuer` in the
     *           workload identity pool.
     *     @type string $oidc_jwks
     *           Optional. OIDC verification keys for this Membership in JWKS format (RFC
     *           7517).
     *           When this field is set, OIDC discovery will NOT be performed on `issuer`,
     *           and instead OIDC tokens will be validated using this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A JSON Web Token (JWT) issuer URI. `issuer` must start with
     * `https://` and be a valid URL with length <2000 characters.
     * If set, then Google will allow valid OIDC tokens from this issuer to
     * authenticate within the workload_identity_pool. OIDC discovery will be
     * performed on this URI to validate tokens from the issuer.
     * Clearing `issuer` disables Workload Identity. `issuer` cannot be directly
     * modified; it must be cleared (and Workload Identity disabled) before using
     * a new issuer (and re-enabling Workload Identity).
     *
     * Generated from protobuf field <code>string issuer = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Optional. A JSON Web Token (JWT) issuer URI. `issuer` must start with
     * `https://` and be a valid URL with length <2000 characters.
     * If set, then Google will allow valid OIDC tokens from this issuer to
     * authenticate within the workload_identity_pool. OIDC discovery will be
     * performed on this URI to validate tokens from the issuer.
     * Clearing `issuer` disables Workload Identity. `issuer` cannot be directly
     * modified; it must be cleared (and Workload Identity disabled) before using
     * a new issuer (and re-enabling Workload Identity).
     *
     * Generated from protobuf field <code>string issuer = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setIssuer($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuer = $var;

        return $this;
    }

    /**
     * Output only. The name of the workload identity pool in which `issuer` will
     * be recognized.
     * There is a single Workload Identity Pool per Hub that is shared
     * between all Memberships that belong to that Hub. For a Hub hosted in
     * {PROJECT_ID}, the workload pool format is `{PROJECT_ID}.hub.id.goog`,
     * although this is subject to change in newer versions of this API.
     *
     * Generated from protobuf field <code>string workload_identity_pool = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getWorkloadIdentityPool()
    {
        return $this->workload_identity_pool;
    }

    /**
     * Output only. The name of the workload identity pool in which `issuer` will
     * be recognized.
     * There is a single Workload Identity Pool per Hub that is shared
     * between all Memberships that belong to that Hub. For a Hub hosted in
     * {PROJECT_ID}, the workload pool format is `{PROJECT_ID}.hub.id.goog`,
     * although this is subject to change in newer versions of this API.
     *
     * Generated from protobuf field <code>string workload_identity_pool = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setWorkloadIdentityPool($var)
    {
        GPBUtil::checkString($var, True);
        $this->workload_identity_pool = $var;

        return $this;
    }

    /**
     * Output only. An identity provider that reflects the `issuer` in the
     * workload identity pool.
     *
     * Generated from protobuf field <code>string identity_provider = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getIdentityProvider()
    {
        return $this->identity_provider;
    }

    /**
     * Output only. An identity provider that reflects the `issuer` in the
     * workload identity pool.
     *
     * Generated from protobuf field <code>string identity_provider = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setIdentityProvider($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity_provider = $var;

        return $this;
    }

    /**
     * Optional. OIDC verification keys for this Membership in JWKS format (RFC
     * 7517).
     * When this field is set, OIDC discovery will NOT be performed on `issuer`,
     * and instead OIDC tokens will be validated using this field.
     *
     * Generated from protobuf field <code>bytes oidc_jwks = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOidcJwks()
    {
        return $this->oidc_jwks;
    }

    /**
     * Optional. OIDC verification keys for this Membership in JWKS format (RFC
     * 7517).
     * When this field is set, OIDC discovery will NOT be performed on `issuer`,
     * and instead OIDC tokens will be validated using this field.
     *
     * Generated from protobuf field <code>bytes oidc_jwks = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOidcJwks($var)
    {
        GPBUtil::checkString($var, False);
        $this->oidc_jwks = $var;

        return $this;
    }

}

