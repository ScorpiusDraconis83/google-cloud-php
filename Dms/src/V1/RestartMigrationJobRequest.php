<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'RestartMigrationJob' request.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.RestartMigrationJobRequest</code>
 */
class RestartMigrationJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the migration job resource to restart.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. Restart the migration job without running prior configuration
     * verification. Defaults to `false`.
     *
     * Generated from protobuf field <code>bool skip_validation = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $skip_validation = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the migration job resource to restart.
     *     @type bool $skip_validation
     *           Optional. Restart the migration job without running prior configuration
     *           verification. Defaults to `false`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the migration job resource to restart.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the migration job resource to restart.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. Restart the migration job without running prior configuration
     * verification. Defaults to `false`.
     *
     * Generated from protobuf field <code>bool skip_validation = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSkipValidation()
    {
        return $this->skip_validation;
    }

    /**
     * Optional. Restart the migration job without running prior configuration
     * verification. Defaults to `false`.
     *
     * Generated from protobuf field <code>bool skip_validation = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipValidation($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_validation = $var;

        return $this;
    }

}

