<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating a stream.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.UpdateStreamRequest</code>
 */
class UpdateStreamRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Field mask is used to specify the fields to be overwritten in the
     * stream resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;
    /**
     * Required. The stream resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Stream stream = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $stream = null;
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. Only validate the stream with the changes, without actually
     * updating it. The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;
    /**
     * Optional. Update the stream without validating it.
     *
     * Generated from protobuf field <code>bool force = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $force = false;

    /**
     * @param \Google\Cloud\Datastream\V1\Stream $stream     Required. The stream resource to update.
     * @param \Google\Protobuf\FieldMask         $updateMask Optional. Field mask is used to specify the fields to be overwritten in the
     *                                                       stream resource by the update.
     *                                                       The fields specified in the update_mask are relative to the resource, not
     *                                                       the full request. A field will be overwritten if it is in the mask. If the
     *                                                       user does not provide a mask then all fields will be overwritten.
     *
     * @return \Google\Cloud\Datastream\V1\UpdateStreamRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Datastream\V1\Stream $stream, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setStream($stream)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Field mask is used to specify the fields to be overwritten in the
     *           stream resource by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If the
     *           user does not provide a mask then all fields will be overwritten.
     *     @type \Google\Cloud\Datastream\V1\Stream $stream
     *           Required. The stream resource to update.
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. Only validate the stream with the changes, without actually
     *           updating it. The default is false.
     *     @type bool $force
     *           Optional. Update the stream without validating it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\Datastream::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Field mask is used to specify the fields to be overwritten in the
     * stream resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. Field mask is used to specify the fields to be overwritten in the
     * stream resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The stream resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Stream stream = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Datastream\V1\Stream|null
     */
    public function getStream()
    {
        return $this->stream;
    }

    public function hasStream()
    {
        return isset($this->stream);
    }

    public function clearStream()
    {
        unset($this->stream);
    }

    /**
     * Required. The stream resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Stream stream = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Datastream\V1\Stream $var
     * @return $this
     */
    public function setStream($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\Stream::class);
        $this->stream = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. Only validate the stream with the changes, without actually
     * updating it. The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Only validate the stream with the changes, without actually
     * updating it. The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Optional. Update the stream without validating it.
     *
     * Generated from protobuf field <code>bool force = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Optional. Update the stream without validating it.
     *
     * Generated from protobuf field <code>bool force = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

