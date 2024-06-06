<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/tls_route.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used with the ListTlsRoutes method.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.ListTlsRoutesRequest</code>
 */
class ListTlsRoutesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project and location from which the TlsRoutes should be
     * listed, specified in the format `projects/&#42;&#47;locations/global`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Maximum number of TlsRoutes to return per call.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The value returned by the last `ListTlsRoutesResponse`
     * Indicates that this is a continuation of a prior `ListTlsRoutes` call,
     * and that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project and location from which the TlsRoutes should be
     *           listed, specified in the format `projects/&#42;&#47;locations/global`.
     *     @type int $page_size
     *           Maximum number of TlsRoutes to return per call.
     *     @type string $page_token
     *           The value returned by the last `ListTlsRoutesResponse`
     *           Indicates that this is a continuation of a prior `ListTlsRoutes` call,
     *           and that the system should return the next page of data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\TlsRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project and location from which the TlsRoutes should be
     * listed, specified in the format `projects/&#42;&#47;locations/global`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project and location from which the TlsRoutes should be
     * listed, specified in the format `projects/&#42;&#47;locations/global`.
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
     * Maximum number of TlsRoutes to return per call.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of TlsRoutes to return per call.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The value returned by the last `ListTlsRoutesResponse`
     * Indicates that this is a continuation of a prior `ListTlsRoutes` call,
     * and that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value returned by the last `ListTlsRoutesResponse`
     * Indicates that this is a continuation of a prior `ListTlsRoutes` call,
     * and that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

