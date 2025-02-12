<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request object for `ListReleases`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.ListReleasesRequest</code>
 */
class ListReleasesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The `DeliveryPipeline` which owns this collection of `Release`
     * objects.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of `Release` objects to return. The service
     * may return fewer than this value. If unspecified, at most 50 `Release`
     * objects will be returned. The maximum value is 1000; values above 1000 will
     * be set to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A page token, received from a previous `ListReleases` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other provided parameters match
     * the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. Filter releases to be returned. See https://google.aip.dev/160
     * for more details.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. Field to sort by. See https://google.aip.dev/132#ordering for
     * more details.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. The `DeliveryPipeline` which owns this collection of `Release`
     *                       objects. Please see
     *                       {@see CloudDeployClient::deliveryPipelineName()} for help formatting this field.
     *
     * @return \Google\Cloud\Deploy\V1\ListReleasesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The `DeliveryPipeline` which owns this collection of `Release`
     *           objects.
     *     @type int $page_size
     *           Optional. The maximum number of `Release` objects to return. The service
     *           may return fewer than this value. If unspecified, at most 50 `Release`
     *           objects will be returned. The maximum value is 1000; values above 1000 will
     *           be set to 1000.
     *     @type string $page_token
     *           Optional. A page token, received from a previous `ListReleases` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other provided parameters match
     *           the call that provided the page token.
     *     @type string $filter
     *           Optional. Filter releases to be returned. See https://google.aip.dev/160
     *           for more details.
     *     @type string $order_by
     *           Optional. Field to sort by. See https://google.aip.dev/132#ordering for
     *           more details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The `DeliveryPipeline` which owns this collection of `Release`
     * objects.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The `DeliveryPipeline` which owns this collection of `Release`
     * objects.
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
     * Optional. The maximum number of `Release` objects to return. The service
     * may return fewer than this value. If unspecified, at most 50 `Release`
     * objects will be returned. The maximum value is 1000; values above 1000 will
     * be set to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of `Release` objects to return. The service
     * may return fewer than this value. If unspecified, at most 50 `Release`
     * objects will be returned. The maximum value is 1000; values above 1000 will
     * be set to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A page token, received from a previous `ListReleases` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other provided parameters match
     * the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous `ListReleases` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other provided parameters match
     * the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Filter releases to be returned. See https://google.aip.dev/160
     * for more details.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Filter releases to be returned. See https://google.aip.dev/160
     * for more details.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. Field to sort by. See https://google.aip.dev/132#ordering for
     * more details.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. Field to sort by. See https://google.aip.dev/132#ordering for
     * more details.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

