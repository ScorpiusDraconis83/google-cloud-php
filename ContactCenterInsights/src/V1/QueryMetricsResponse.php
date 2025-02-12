<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for querying metrics.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.QueryMetricsResponse</code>
 */
class QueryMetricsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The location of the data.
     * "projects/{project}/locations/{location}"
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $location = '';
    /**
     * The metrics last update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     */
    protected $update_time = null;
    /**
     * A slice contains a total and (if the request specified a time granularity)
     * a time series of metric values. Each slice contains a unique combination of
     * the cardinality of dimensions from the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice slices = 2;</code>
     */
    private $slices;
    /**
     * The macro average slice contains aggregated averages across the selected
     * dimension. i.e. if group_by agent is specified this field will contain the
     * average across all agents.
     * This field is only populated if the request specifies a Dimension.
     *
     * Generated from protobuf field <code>optional .google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice macro_average_slice = 4;</code>
     */
    protected $macro_average_slice = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           Required. The location of the data.
     *           "projects/{project}/locations/{location}"
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The metrics last update time.
     *     @type array<\Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice>|\Google\Protobuf\Internal\RepeatedField $slices
     *           A slice contains a total and (if the request specified a time granularity)
     *           a time series of metric values. Each slice contains a unique combination of
     *           the cardinality of dimensions from the request.
     *     @type \Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice $macro_average_slice
     *           The macro average slice contains aggregated averages across the selected
     *           dimension. i.e. if group_by agent is specified this field will contain the
     *           average across all agents.
     *           This field is only populated if the request specifies a Dimension.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The location of the data.
     * "projects/{project}/locations/{location}"
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Required. The location of the data.
     * "projects/{project}/locations/{location}"
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * The metrics last update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * The metrics last update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * A slice contains a total and (if the request specified a time granularity)
     * a time series of metric values. Each slice contains a unique combination of
     * the cardinality of dimensions from the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice slices = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSlices()
    {
        return $this->slices;
    }

    /**
     * A slice contains a total and (if the request specified a time granularity)
     * a time series of metric values. Each slice contains a unique combination of
     * the cardinality of dimensions from the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice slices = 2;</code>
     * @param array<\Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSlices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice::class);
        $this->slices = $arr;

        return $this;
    }

    /**
     * The macro average slice contains aggregated averages across the selected
     * dimension. i.e. if group_by agent is specified this field will contain the
     * average across all agents.
     * This field is only populated if the request specifies a Dimension.
     *
     * Generated from protobuf field <code>optional .google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice macro_average_slice = 4;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice|null
     */
    public function getMacroAverageSlice()
    {
        return $this->macro_average_slice;
    }

    public function hasMacroAverageSlice()
    {
        return isset($this->macro_average_slice);
    }

    public function clearMacroAverageSlice()
    {
        unset($this->macro_average_slice);
    }

    /**
     * The macro average slice contains aggregated averages across the selected
     * dimension. i.e. if group_by agent is specified this field will contain the
     * average across all agents.
     * This field is only populated if the request specifies a Dimension.
     *
     * Generated from protobuf field <code>optional .google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice macro_average_slice = 4;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice $var
     * @return $this
     */
    public function setMacroAverageSlice($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice::class);
        $this->macro_average_slice = $var;

        return $this;
    }

}

