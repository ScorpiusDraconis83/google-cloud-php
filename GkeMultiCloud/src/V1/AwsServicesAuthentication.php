<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Authentication configuration for the management of AWS resources.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AwsServicesAuthentication</code>
 */
class AwsServicesAuthentication extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Amazon Resource Name (ARN) of the role that the Anthos
     * Multi-Cloud API will assume when managing AWS resources on your account.
     *
     * Generated from protobuf field <code>string role_arn = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $role_arn = '';
    /**
     * Optional. An identifier for the assumed role session.
     * When unspecified, it defaults to `multicloud-service-agent`.
     *
     * Generated from protobuf field <code>string role_session_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $role_session_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $role_arn
     *           Required. The Amazon Resource Name (ARN) of the role that the Anthos
     *           Multi-Cloud API will assume when managing AWS resources on your account.
     *     @type string $role_session_name
     *           Optional. An identifier for the assumed role session.
     *           When unspecified, it defaults to `multicloud-service-agent`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Amazon Resource Name (ARN) of the role that the Anthos
     * Multi-Cloud API will assume when managing AWS resources on your account.
     *
     * Generated from protobuf field <code>string role_arn = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRoleArn()
    {
        return $this->role_arn;
    }

    /**
     * Required. The Amazon Resource Name (ARN) of the role that the Anthos
     * Multi-Cloud API will assume when managing AWS resources on your account.
     *
     * Generated from protobuf field <code>string role_arn = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRoleArn($var)
    {
        GPBUtil::checkString($var, True);
        $this->role_arn = $var;

        return $this;
    }

    /**
     * Optional. An identifier for the assumed role session.
     * When unspecified, it defaults to `multicloud-service-agent`.
     *
     * Generated from protobuf field <code>string role_session_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRoleSessionName()
    {
        return $this->role_session_name;
    }

    /**
     * Optional. An identifier for the assumed role session.
     * When unspecified, it defaults to `multicloud-service-agent`.
     *
     * Generated from protobuf field <code>string role_session_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRoleSessionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->role_session_name = $var;

        return $this;
    }

}

