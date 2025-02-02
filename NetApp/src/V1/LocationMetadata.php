<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/common.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for a given
 * [google.cloud.location.Location][google.cloud.location.Location].
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.LocationMetadata</code>
 */
class LocationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Supported service levels in a location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.ServiceLevel supported_service_levels = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $supported_service_levels;
    /**
     * Output only. Supported flex performance in a location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.FlexPerformance supported_flex_performance = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $supported_flex_performance;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $supported_service_levels
     *           Output only. Supported service levels in a location.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $supported_flex_performance
     *           Output only. Supported flex performance in a location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Supported service levels in a location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.ServiceLevel supported_service_levels = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedServiceLevels()
    {
        return $this->supported_service_levels;
    }

    /**
     * Output only. Supported service levels in a location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.ServiceLevel supported_service_levels = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedServiceLevels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\NetApp\V1\ServiceLevel::class);
        $this->supported_service_levels = $arr;

        return $this;
    }

    /**
     * Output only. Supported flex performance in a location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.FlexPerformance supported_flex_performance = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedFlexPerformance()
    {
        return $this->supported_flex_performance;
    }

    /**
     * Output only. Supported flex performance in a location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.FlexPerformance supported_flex_performance = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedFlexPerformance($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\NetApp\V1\FlexPerformance::class);
        $this->supported_flex_performance = $arr;

        return $this;
    }

}

