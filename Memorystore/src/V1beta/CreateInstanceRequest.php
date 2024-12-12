<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memorystore/v1beta/memorystore.proto

namespace Google\Cloud\Memorystore\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CreateInstance][].
 *
 * Generated from protobuf message <code>google.cloud.memorystore.v1beta.CreateInstanceRequest</code>
 */
class CreateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource where this instance will be created.
     * Format: projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ID to use for the instance, which will become the final
     * component of the instance's resource name.
     * This value is subject to the following restrictions:
     * * Must be 4-63 characters in length
     * * Must begin with a letter or digit
     * * Must contain only lowercase letters, digits, and hyphens
     * * Must not end with a hyphen
     * * Must be unique within a location
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance_id = '';
    /**
     * Required. The instance to create.
     *
     * Generated from protobuf field <code>.google.cloud.memorystore.v1beta.Instance instance = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string                                    $parent     Required. The parent resource where this instance will be created.
     *                                                              Format: projects/{project}/locations/{location}
     *                                                              Please see {@see MemorystoreClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Memorystore\V1beta\Instance $instance   Required. The instance to create.
     * @param string                                    $instanceId Required. The ID to use for the instance, which will become the final
     *                                                              component of the instance's resource name.
     *
     *                                                              This value is subject to the following restrictions:
     *
     *                                                              * Must be 4-63 characters in length
     *                                                              * Must begin with a letter or digit
     *                                                              * Must contain only lowercase letters, digits, and hyphens
     *                                                              * Must not end with a hyphen
     *                                                              * Must be unique within a location
     *
     * @return \Google\Cloud\Memorystore\V1beta\CreateInstanceRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Memorystore\V1beta\Instance $instance, string $instanceId): self
    {
        return (new self())
            ->setParent($parent)
            ->setInstance($instance)
            ->setInstanceId($instanceId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource where this instance will be created.
     *           Format: projects/{project}/locations/{location}
     *     @type string $instance_id
     *           Required. The ID to use for the instance, which will become the final
     *           component of the instance's resource name.
     *           This value is subject to the following restrictions:
     *           * Must be 4-63 characters in length
     *           * Must begin with a letter or digit
     *           * Must contain only lowercase letters, digits, and hyphens
     *           * Must not end with a hyphen
     *           * Must be unique within a location
     *     @type \Google\Cloud\Memorystore\V1beta\Instance $instance
     *           Required. The instance to create.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Memorystore\V1Beta\Memorystore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource where this instance will be created.
     * Format: projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource where this instance will be created.
     * Format: projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the instance, which will become the final
     * component of the instance's resource name.
     * This value is subject to the following restrictions:
     * * Must be 4-63 characters in length
     * * Must begin with a letter or digit
     * * Must contain only lowercase letters, digits, and hyphens
     * * Must not end with a hyphen
     * * Must be unique within a location
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * Required. The ID to use for the instance, which will become the final
     * component of the instance's resource name.
     * This value is subject to the following restrictions:
     * * Must be 4-63 characters in length
     * * Must begin with a letter or digit
     * * Must contain only lowercase letters, digits, and hyphens
     * * Must not end with a hyphen
     * * Must be unique within a location
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;

        return $this;
    }

    /**
     * Required. The instance to create.
     *
     * Generated from protobuf field <code>.google.cloud.memorystore.v1beta.Instance instance = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Memorystore\V1beta\Instance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Required. The instance to create.
     *
     * Generated from protobuf field <code>.google.cloud.memorystore.v1beta.Instance instance = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Memorystore\V1beta\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Memorystore\V1beta\Instance::class);
        $this->instance = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

