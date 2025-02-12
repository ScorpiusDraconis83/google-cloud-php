<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_users.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User level password validation policy.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.UserPasswordValidationPolicy</code>
 */
class UserPasswordValidationPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of failed login attempts allowed before user get locked.
     *
     * Generated from protobuf field <code>int32 allowed_failed_attempts = 1;</code>
     */
    protected $allowed_failed_attempts = 0;
    /**
     * Expiration duration after password is updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration password_expiration_duration = 2;</code>
     */
    protected $password_expiration_duration = null;
    /**
     * If true, failed login attempts check will be enabled.
     *
     * Generated from protobuf field <code>bool enable_failed_attempts_check = 3;</code>
     */
    protected $enable_failed_attempts_check = false;
    /**
     * Output only. Read-only password status.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.PasswordStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = null;
    /**
     * If true, the user must specify the current password before changing the
     * password. This flag is supported only for MySQL.
     *
     * Generated from protobuf field <code>bool enable_password_verification = 5;</code>
     */
    protected $enable_password_verification = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $allowed_failed_attempts
     *           Number of failed login attempts allowed before user get locked.
     *     @type \Google\Protobuf\Duration $password_expiration_duration
     *           Expiration duration after password is updated.
     *     @type bool $enable_failed_attempts_check
     *           If true, failed login attempts check will be enabled.
     *     @type \Google\Cloud\Sql\V1\PasswordStatus $status
     *           Output only. Read-only password status.
     *     @type bool $enable_password_verification
     *           If true, the user must specify the current password before changing the
     *           password. This flag is supported only for MySQL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlUsers::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of failed login attempts allowed before user get locked.
     *
     * Generated from protobuf field <code>int32 allowed_failed_attempts = 1;</code>
     * @return int
     */
    public function getAllowedFailedAttempts()
    {
        return $this->allowed_failed_attempts;
    }

    /**
     * Number of failed login attempts allowed before user get locked.
     *
     * Generated from protobuf field <code>int32 allowed_failed_attempts = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAllowedFailedAttempts($var)
    {
        GPBUtil::checkInt32($var);
        $this->allowed_failed_attempts = $var;

        return $this;
    }

    /**
     * Expiration duration after password is updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration password_expiration_duration = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getPasswordExpirationDuration()
    {
        return $this->password_expiration_duration;
    }

    public function hasPasswordExpirationDuration()
    {
        return isset($this->password_expiration_duration);
    }

    public function clearPasswordExpirationDuration()
    {
        unset($this->password_expiration_duration);
    }

    /**
     * Expiration duration after password is updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration password_expiration_duration = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPasswordExpirationDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->password_expiration_duration = $var;

        return $this;
    }

    /**
     * If true, failed login attempts check will be enabled.
     *
     * Generated from protobuf field <code>bool enable_failed_attempts_check = 3;</code>
     * @return bool
     */
    public function getEnableFailedAttemptsCheck()
    {
        return $this->enable_failed_attempts_check;
    }

    /**
     * If true, failed login attempts check will be enabled.
     *
     * Generated from protobuf field <code>bool enable_failed_attempts_check = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableFailedAttemptsCheck($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_failed_attempts_check = $var;

        return $this;
    }

    /**
     * Output only. Read-only password status.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.PasswordStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Sql\V1\PasswordStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Output only. Read-only password status.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.PasswordStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Sql\V1\PasswordStatus $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\PasswordStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * If true, the user must specify the current password before changing the
     * password. This flag is supported only for MySQL.
     *
     * Generated from protobuf field <code>bool enable_password_verification = 5;</code>
     * @return bool
     */
    public function getEnablePasswordVerification()
    {
        return $this->enable_password_verification;
    }

    /**
     * If true, the user must specify the current password before changing the
     * password. This flag is supported only for MySQL.
     *
     * Generated from protobuf field <code>bool enable_password_verification = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnablePasswordVerification($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_password_verification = $var;

        return $this;
    }

}

