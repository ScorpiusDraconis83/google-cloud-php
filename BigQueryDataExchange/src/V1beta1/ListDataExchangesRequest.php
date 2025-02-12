<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/dataexchange/v1beta1/dataexchange.proto

namespace Google\Cloud\BigQuery\DataExchange\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for requesting the list of data exchanges.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.dataexchange.v1beta1.ListDataExchangesRequest</code>
 */
class ListDataExchangesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource path of the data exchanges.
     * e.g. `projects/myproject/locations/US`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of results to return in a single response page. Leverage
     * the page tokens to iterate through the entire collection.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * Page token, returned by a previous call, to request the next page of
     * results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent resource path of the data exchanges.
     *                       e.g. `projects/myproject/locations/US`. Please see
     *                       {@see AnalyticsHubServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\DataExchange\V1beta1\ListDataExchangesRequest
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
     *           Required. The parent resource path of the data exchanges.
     *           e.g. `projects/myproject/locations/US`.
     *     @type int $page_size
     *           The maximum number of results to return in a single response page. Leverage
     *           the page tokens to iterate through the entire collection.
     *     @type string $page_token
     *           Page token, returned by a previous call, to request the next page of
     *           results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Dataexchange\V1Beta1\Dataexchange::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource path of the data exchanges.
     * e.g. `projects/myproject/locations/US`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource path of the data exchanges.
     * e.g. `projects/myproject/locations/US`.
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
     * The maximum number of results to return in a single response page. Leverage
     * the page tokens to iterate through the entire collection.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of results to return in a single response page. Leverage
     * the page tokens to iterate through the entire collection.
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
     * Page token, returned by a previous call, to request the next page of
     * results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token, returned by a previous call, to request the next page of
     * results.
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

