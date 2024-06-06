<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/grpc_route.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used by the CreateGrpcRoute method.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.CreateGrpcRouteRequest</code>
 */
class CreateGrpcRouteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the GrpcRoute. Must be in the
     * format `projects/&#42;&#47;locations/global`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Short name of the GrpcRoute resource to be created.
     *
     * Generated from protobuf field <code>string grpc_route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $grpc_route_id = '';
    /**
     * Required. GrpcRoute resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.GrpcRoute grpc_route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $grpc_route = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the GrpcRoute. Must be in the
     *           format `projects/&#42;&#47;locations/global`.
     *     @type string $grpc_route_id
     *           Required. Short name of the GrpcRoute resource to be created.
     *     @type \Google\Cloud\NetworkServices\V1\GrpcRoute $grpc_route
     *           Required. GrpcRoute resource to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\GrpcRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the GrpcRoute. Must be in the
     * format `projects/&#42;&#47;locations/global`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the GrpcRoute. Must be in the
     * format `projects/&#42;&#47;locations/global`.
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
     * Required. Short name of the GrpcRoute resource to be created.
     *
     * Generated from protobuf field <code>string grpc_route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getGrpcRouteId()
    {
        return $this->grpc_route_id;
    }

    /**
     * Required. Short name of the GrpcRoute resource to be created.
     *
     * Generated from protobuf field <code>string grpc_route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setGrpcRouteId($var)
    {
        GPBUtil::checkString($var, True);
        $this->grpc_route_id = $var;

        return $this;
    }

    /**
     * Required. GrpcRoute resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.GrpcRoute grpc_route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. GrpcRoute resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.GrpcRoute grpc_route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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

