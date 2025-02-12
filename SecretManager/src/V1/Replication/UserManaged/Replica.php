<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1/resources.proto

namespace Google\Cloud\SecretManager\V1\Replication\UserManaged;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Replica for this
 * [Secret][google.cloud.secretmanager.v1.Secret].
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1.Replication.UserManaged.Replica</code>
 */
class Replica extends \Google\Protobuf\Internal\Message
{
    /**
     * The canonical IDs of the location to replicate data.
     * For example: `"us-east1"`.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     */
    protected $location = '';
    /**
     * Optional. The customer-managed encryption configuration of the
     * [User-Managed Replica][Replication.UserManaged.Replica]. If no
     * configuration is provided, Google-managed default encryption is used.
     * Updates to the [Secret][google.cloud.secretmanager.v1.Secret]
     * encryption configuration only apply to
     * [SecretVersions][google.cloud.secretmanager.v1.SecretVersion] added
     * afterwards. They do not apply retroactively to existing
     * [SecretVersions][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.CustomerManagedEncryption customer_managed_encryption = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $customer_managed_encryption = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           The canonical IDs of the location to replicate data.
     *           For example: `"us-east1"`.
     *     @type \Google\Cloud\SecretManager\V1\CustomerManagedEncryption $customer_managed_encryption
     *           Optional. The customer-managed encryption configuration of the
     *           [User-Managed Replica][Replication.UserManaged.Replica]. If no
     *           configuration is provided, Google-managed default encryption is used.
     *           Updates to the [Secret][google.cloud.secretmanager.v1.Secret]
     *           encryption configuration only apply to
     *           [SecretVersions][google.cloud.secretmanager.v1.SecretVersion] added
     *           afterwards. They do not apply retroactively to existing
     *           [SecretVersions][google.cloud.secretmanager.v1.SecretVersion].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The canonical IDs of the location to replicate data.
     * For example: `"us-east1"`.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The canonical IDs of the location to replicate data.
     * For example: `"us-east1"`.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * Optional. The customer-managed encryption configuration of the
     * [User-Managed Replica][Replication.UserManaged.Replica]. If no
     * configuration is provided, Google-managed default encryption is used.
     * Updates to the [Secret][google.cloud.secretmanager.v1.Secret]
     * encryption configuration only apply to
     * [SecretVersions][google.cloud.secretmanager.v1.SecretVersion] added
     * afterwards. They do not apply retroactively to existing
     * [SecretVersions][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.CustomerManagedEncryption customer_managed_encryption = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\SecretManager\V1\CustomerManagedEncryption|null
     */
    public function getCustomerManagedEncryption()
    {
        return $this->customer_managed_encryption;
    }

    public function hasCustomerManagedEncryption()
    {
        return isset($this->customer_managed_encryption);
    }

    public function clearCustomerManagedEncryption()
    {
        unset($this->customer_managed_encryption);
    }

    /**
     * Optional. The customer-managed encryption configuration of the
     * [User-Managed Replica][Replication.UserManaged.Replica]. If no
     * configuration is provided, Google-managed default encryption is used.
     * Updates to the [Secret][google.cloud.secretmanager.v1.Secret]
     * encryption configuration only apply to
     * [SecretVersions][google.cloud.secretmanager.v1.SecretVersion] added
     * afterwards. They do not apply retroactively to existing
     * [SecretVersions][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.CustomerManagedEncryption customer_managed_encryption = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\SecretManager\V1\CustomerManagedEncryption $var
     * @return $this
     */
    public function setCustomerManagedEncryption($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1\CustomerManagedEncryption::class);
        $this->customer_managed_encryption = $var;

        return $this;
    }

}


