<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [TensorboardService.WriteTensorboardRunData][google.cloud.aiplatform.v1.TensorboardService.WriteTensorboardRunData].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.WriteTensorboardRunDataRequest</code>
 */
class WriteTensorboardRunDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the TensorboardRun to write data to.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}`
     *
     * Generated from protobuf field <code>string tensorboard_run = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $tensorboard_run = '';
    /**
     * Required. The TensorboardTimeSeries data to write.
     * Values with in a time series are indexed by their step value.
     * Repeated writes to the same step will overwrite the existing value for that
     * step.
     * The upper limit of data points per write request is 5000.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TimeSeriesData time_series_data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $time_series_data;

    /**
     * @param string                                       $tensorboardRun Required. The resource name of the TensorboardRun to write data to.
     *                                                                     Format:
     *                                                                     `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}`
     *                                                                     Please see {@see TensorboardServiceClient::tensorboardRunName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\TimeSeriesData[] $timeSeriesData Required. The TensorboardTimeSeries data to write.
     *                                                                     Values with in a time series are indexed by their step value.
     *                                                                     Repeated writes to the same step will overwrite the existing value for that
     *                                                                     step.
     *                                                                     The upper limit of data points per write request is 5000.
     *
     * @return \Google\Cloud\AIPlatform\V1\WriteTensorboardRunDataRequest
     *
     * @experimental
     */
    public static function build(string $tensorboardRun, array $timeSeriesData): self
    {
        return (new self())
            ->setTensorboardRun($tensorboardRun)
            ->setTimeSeriesData($timeSeriesData);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tensorboard_run
     *           Required. The resource name of the TensorboardRun to write data to.
     *           Format:
     *           `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}`
     *     @type array<\Google\Cloud\AIPlatform\V1\TimeSeriesData>|\Google\Protobuf\Internal\RepeatedField $time_series_data
     *           Required. The TensorboardTimeSeries data to write.
     *           Values with in a time series are indexed by their step value.
     *           Repeated writes to the same step will overwrite the existing value for that
     *           step.
     *           The upper limit of data points per write request is 5000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the TensorboardRun to write data to.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}`
     *
     * Generated from protobuf field <code>string tensorboard_run = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTensorboardRun()
    {
        return $this->tensorboard_run;
    }

    /**
     * Required. The resource name of the TensorboardRun to write data to.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}`
     *
     * Generated from protobuf field <code>string tensorboard_run = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTensorboardRun($var)
    {
        GPBUtil::checkString($var, True);
        $this->tensorboard_run = $var;

        return $this;
    }

    /**
     * Required. The TensorboardTimeSeries data to write.
     * Values with in a time series are indexed by their step value.
     * Repeated writes to the same step will overwrite the existing value for that
     * step.
     * The upper limit of data points per write request is 5000.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TimeSeriesData time_series_data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTimeSeriesData()
    {
        return $this->time_series_data;
    }

    /**
     * Required. The TensorboardTimeSeries data to write.
     * Values with in a time series are indexed by their step value.
     * Repeated writes to the same step will overwrite the existing value for that
     * step.
     * The upper limit of data points per write request is 5000.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TimeSeriesData time_series_data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\TimeSeriesData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTimeSeriesData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\TimeSeriesData::class);
        $this->time_series_data = $arr;

        return $this;
    }

}

