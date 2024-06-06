<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/grpc_route.proto

namespace Google\Cloud\NetworkServices\V1\GrpcRoute;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A match against a collection of headers.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.GrpcRoute.HeaderMatch</code>
 */
class HeaderMatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Specifies how to match against the value of the header. If not
     * specified, a default value of EXACT is used.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.GrpcRoute.HeaderMatch.Type type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type = 0;
    /**
     * Required. The key of the header.
     *
     * Generated from protobuf field <code>string key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $key = '';
    /**
     * Required. The value of the header.
     *
     * Generated from protobuf field <code>string value = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Optional. Specifies how to match against the value of the header. If not
     *           specified, a default value of EXACT is used.
     *     @type string $key
     *           Required. The key of the header.
     *     @type string $value
     *           Required. The value of the header.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\GrpcRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Specifies how to match against the value of the header. If not
     * specified, a default value of EXACT is used.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.GrpcRoute.HeaderMatch.Type type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. Specifies how to match against the value of the header. If not
     * specified, a default value of EXACT is used.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.GrpcRoute.HeaderMatch.Type type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkServices\V1\GrpcRoute\HeaderMatch\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Required. The key of the header.
     *
     * Generated from protobuf field <code>string key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Required. The key of the header.
     *
     * Generated from protobuf field <code>string key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Required. The value of the header.
     *
     * Generated from protobuf field <code>string value = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Required. The value of the header.
     *
     * Generated from protobuf field <code>string value = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}


