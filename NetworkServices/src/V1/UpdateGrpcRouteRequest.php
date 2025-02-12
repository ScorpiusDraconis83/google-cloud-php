<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/grpc_route.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used by the UpdateGrpcRoute method.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.UpdateGrpcRouteRequest</code>
 */
class UpdateGrpcRouteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Field mask is used to specify the fields to be overwritten in the
     * GrpcRoute resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;
    /**
     * Required. Updated GrpcRoute resource.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.GrpcRoute grpc_route = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $grpc_route = null;

    /**
     * @param \Google\Cloud\NetworkServices\V1\GrpcRoute $grpcRoute  Required. Updated GrpcRoute resource.
     * @param \Google\Protobuf\FieldMask                 $updateMask Optional. Field mask is used to specify the fields to be overwritten in the
     *                                                               GrpcRoute resource by the update.
     *                                                               The fields specified in the update_mask are relative to the resource, not
     *                                                               the full request. A field will be overwritten if it is in the mask. If the
     *                                                               user does not provide a mask then all fields will be overwritten.
     *
     * @return \Google\Cloud\NetworkServices\V1\UpdateGrpcRouteRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\NetworkServices\V1\GrpcRoute $grpcRoute, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setGrpcRoute($grpcRoute)
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
     *           GrpcRoute resource by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If the
     *           user does not provide a mask then all fields will be overwritten.
     *     @type \Google\Cloud\NetworkServices\V1\GrpcRoute $grpc_route
     *           Required. Updated GrpcRoute resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\GrpcRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Field mask is used to specify the fields to be overwritten in the
     * GrpcRoute resource by the update.
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
     * GrpcRoute resource by the update.
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
     * Required. Updated GrpcRoute resource.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.GrpcRoute grpc_route = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkServices\V1\GrpcRoute|null
     */
    public function getGrpcRoute()
    {
        return $this->grpc_route;
    }

    public function hasGrpcRoute()
    {
        return isset($this->grpc_route);
    }

    public function clearGrpcRoute()
    {
        unset($this->grpc_route);
    }

    /**
     * Required. Updated GrpcRoute resource.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.GrpcRoute grpc_route = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkServices\V1\GrpcRoute $var
     * @return $this
     */
    public function setGrpcRoute($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkServices\V1\GrpcRoute::class);
        $this->grpc_route = $var;

        return $this;
    }

}

