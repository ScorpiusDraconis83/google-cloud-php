<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/routeoptimization/v1/route_optimization_service.proto

namespace Google\Maps\RouteOptimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to batch optimize tours as an asynchronous operation.
 * Each input file should contain one `OptimizeToursRequest`, and each output
 * file will contain one `OptimizeToursResponse`. The request contains
 * information to read/write and parse the files. All the input and output files
 * should be under the same project.
 *
 * Generated from protobuf message <code>google.maps.routeoptimization.v1.BatchOptimizeToursRequest</code>
 */
class BatchOptimizeToursRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Target project and location to make a call.
     * Format:
     * * `projects/{project-id}`
     * * `projects/{project-id}/locations/{location-id}`
     * If no location is specified, a region will be chosen automatically.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. Input/Output information each purchase model, such as file paths
     * and data formats.
     *
     * Generated from protobuf field <code>repeated .google.maps.routeoptimization.v1.BatchOptimizeToursRequest.AsyncModelConfig model_configs = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $model_configs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Target project and location to make a call.
     *           Format:
     *           * `projects/{project-id}`
     *           * `projects/{project-id}/locations/{location-id}`
     *           If no location is specified, a region will be chosen automatically.
     *     @type array<\Google\Maps\RouteOptimization\V1\BatchOptimizeToursRequest\AsyncModelConfig>|\Google\Protobuf\Internal\RepeatedField $model_configs
     *           Required. Input/Output information each purchase model, such as file paths
     *           and data formats.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Routeoptimization\V1\RouteOptimizationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Target project and location to make a call.
     * Format:
     * * `projects/{project-id}`
     * * `projects/{project-id}/locations/{location-id}`
     * If no location is specified, a region will be chosen automatically.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Target project and location to make a call.
     * Format:
     * * `projects/{project-id}`
     * * `projects/{project-id}/locations/{location-id}`
     * If no location is specified, a region will be chosen automatically.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Input/Output information each purchase model, such as file paths
     * and data formats.
     *
     * Generated from protobuf field <code>repeated .google.maps.routeoptimization.v1.BatchOptimizeToursRequest.AsyncModelConfig model_configs = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModelConfigs()
    {
        return $this->model_configs;
    }

    /**
     * Required. Input/Output information each purchase model, such as file paths
     * and data formats.
     *
     * Generated from protobuf field <code>repeated .google.maps.routeoptimization.v1.BatchOptimizeToursRequest.AsyncModelConfig model_configs = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Maps\RouteOptimization\V1\BatchOptimizeToursRequest\AsyncModelConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModelConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Maps\RouteOptimization\V1\BatchOptimizeToursRequest\AsyncModelConfig::class);
        $this->model_configs = $arr;

        return $this;
    }

}

