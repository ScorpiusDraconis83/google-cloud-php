<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A limit defining a maximum distance which can be traveled. It can be either
 * hard or soft.
 * If a soft limit is defined, both `soft_max_meters` and
 * `cost_per_kilometer_above_soft_max` must be defined and be nonnegative.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.DistanceLimit</code>
 */
class DistanceLimit extends \Google\Protobuf\Internal\Message
{
    /**
     * A hard limit constraining the distance to be at most max_meters. The limit
     * must be nonnegative.
     *
     * Generated from protobuf field <code>optional int64 max_meters = 1;</code>
     */
    protected $max_meters = null;
    /**
     * A soft limit not enforcing a maximum distance limit, but when violated
     * results in a cost which adds up to other costs defined in the model,
     * with the same unit.
     * If defined soft_max_meters must be less than max_meters and must be
     * nonnegative.
     *
     * Generated from protobuf field <code>optional int64 soft_max_meters = 2;</code>
     */
    protected $soft_max_meters = null;
    /**
     * Cost per kilometer incurred, increasing up to `soft_max_meters`, with
     * formula:
     * ```
     *   min(distance_meters, soft_max_meters) / 1000.0 *
     *   cost_per_kilometer_below_soft_max.
     * ```
     * This cost is not supported in `route_distance_limit`.
     *
     * Generated from protobuf field <code>optional double cost_per_kilometer_below_soft_max = 4;</code>
     */
    protected $cost_per_kilometer_below_soft_max = null;
    /**
     * Cost per kilometer incurred if distance is above `soft_max_meters` limit.
     * The additional cost is 0 if the distance is under the limit, otherwise the
     * formula used to compute the cost is the following:
     * ```
     *   (distance_meters - soft_max_meters) / 1000.0 *
     *   cost_per_kilometer_above_soft_max.
     * ```
     * The cost must be nonnegative.
     *
     * Generated from protobuf field <code>optional double cost_per_kilometer_above_soft_max = 3;</code>
     */
    protected $cost_per_kilometer_above_soft_max = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $max_meters
     *           A hard limit constraining the distance to be at most max_meters. The limit
     *           must be nonnegative.
     *     @type int|string $soft_max_meters
     *           A soft limit not enforcing a maximum distance limit, but when violated
     *           results in a cost which adds up to other costs defined in the model,
     *           with the same unit.
     *           If defined soft_max_meters must be less than max_meters and must be
     *           nonnegative.
     *     @type float $cost_per_kilometer_below_soft_max
     *           Cost per kilometer incurred, increasing up to `soft_max_meters`, with
     *           formula:
     *           ```
     *             min(distance_meters, soft_max_meters) / 1000.0 *
     *             cost_per_kilometer_below_soft_max.
     *           ```
     *           This cost is not supported in `route_distance_limit`.
     *     @type float $cost_per_kilometer_above_soft_max
     *           Cost per kilometer incurred if distance is above `soft_max_meters` limit.
     *           The additional cost is 0 if the distance is under the limit, otherwise the
     *           formula used to compute the cost is the following:
     *           ```
     *             (distance_meters - soft_max_meters) / 1000.0 *
     *             cost_per_kilometer_above_soft_max.
     *           ```
     *           The cost must be nonnegative.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * A hard limit constraining the distance to be at most max_meters. The limit
     * must be nonnegative.
     *
     * Generated from protobuf field <code>optional int64 max_meters = 1;</code>
     * @return int|string
     */
    public function getMaxMeters()
    {
        return isset($this->max_meters) ? $this->max_meters : 0;
    }

    public function hasMaxMeters()
    {
        return isset($this->max_meters);
    }

    public function clearMaxMeters()
    {
        unset($this->max_meters);
    }

    /**
     * A hard limit constraining the distance to be at most max_meters. The limit
     * must be nonnegative.
     *
     * Generated from protobuf field <code>optional int64 max_meters = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxMeters($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_meters = $var;

        return $this;
    }

    /**
     * A soft limit not enforcing a maximum distance limit, but when violated
     * results in a cost which adds up to other costs defined in the model,
     * with the same unit.
     * If defined soft_max_meters must be less than max_meters and must be
     * nonnegative.
     *
     * Generated from protobuf field <code>optional int64 soft_max_meters = 2;</code>
     * @return int|string
     */
    public function getSoftMaxMeters()
    {
        return isset($this->soft_max_meters) ? $this->soft_max_meters : 0;
    }

    public function hasSoftMaxMeters()
    {
        return isset($this->soft_max_meters);
    }

    public function clearSoftMaxMeters()
    {
        unset($this->soft_max_meters);
    }

    /**
     * A soft limit not enforcing a maximum distance limit, but when violated
     * results in a cost which adds up to other costs defined in the model,
     * with the same unit.
     * If defined soft_max_meters must be less than max_meters and must be
     * nonnegative.
     *
     * Generated from protobuf field <code>optional int64 soft_max_meters = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSoftMaxMeters($var)
    {
        GPBUtil::checkInt64($var);
        $this->soft_max_meters = $var;

        return $this;
    }

    /**
     * Cost per kilometer incurred, increasing up to `soft_max_meters`, with
     * formula:
     * ```
     *   min(distance_meters, soft_max_meters) / 1000.0 *
     *   cost_per_kilometer_below_soft_max.
     * ```
     * This cost is not supported in `route_distance_limit`.
     *
     * Generated from protobuf field <code>optional double cost_per_kilometer_below_soft_max = 4;</code>
     * @return float
     */
    public function getCostPerKilometerBelowSoftMax()
    {
        return isset($this->cost_per_kilometer_below_soft_max) ? $this->cost_per_kilometer_below_soft_max : 0.0;
    }

    public function hasCostPerKilometerBelowSoftMax()
    {
        return isset($this->cost_per_kilometer_below_soft_max);
    }

    public function clearCostPerKilometerBelowSoftMax()
    {
        unset($this->cost_per_kilometer_below_soft_max);
    }

    /**
     * Cost per kilometer incurred, increasing up to `soft_max_meters`, with
     * formula:
     * ```
     *   min(distance_meters, soft_max_meters) / 1000.0 *
     *   cost_per_kilometer_below_soft_max.
     * ```
     * This cost is not supported in `route_distance_limit`.
     *
     * Generated from protobuf field <code>optional double cost_per_kilometer_below_soft_max = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setCostPerKilometerBelowSoftMax($var)
    {
        GPBUtil::checkDouble($var);
        $this->cost_per_kilometer_below_soft_max = $var;

        return $this;
    }

    /**
     * Cost per kilometer incurred if distance is above `soft_max_meters` limit.
     * The additional cost is 0 if the distance is under the limit, otherwise the
     * formula used to compute the cost is the following:
     * ```
     *   (distance_meters - soft_max_meters) / 1000.0 *
     *   cost_per_kilometer_above_soft_max.
     * ```
     * The cost must be nonnegative.
     *
     * Generated from protobuf field <code>optional double cost_per_kilometer_above_soft_max = 3;</code>
     * @return float
     */
    public function getCostPerKilometerAboveSoftMax()
    {
        return isset($this->cost_per_kilometer_above_soft_max) ? $this->cost_per_kilometer_above_soft_max : 0.0;
    }

    public function hasCostPerKilometerAboveSoftMax()
    {
        return isset($this->cost_per_kilometer_above_soft_max);
    }

    public function clearCostPerKilometerAboveSoftMax()
    {
        unset($this->cost_per_kilometer_above_soft_max);
    }

    /**
     * Cost per kilometer incurred if distance is above `soft_max_meters` limit.
     * The additional cost is 0 if the distance is under the limit, otherwise the
     * formula used to compute the cost is the following:
     * ```
     *   (distance_meters - soft_max_meters) / 1000.0 *
     *   cost_per_kilometer_above_soft_max.
     * ```
     * The cost must be nonnegative.
     *
     * Generated from protobuf field <code>optional double cost_per_kilometer_above_soft_max = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setCostPerKilometerAboveSoftMax($var)
    {
        GPBUtil::checkDouble($var);
        $this->cost_per_kilometer_above_soft_max = $var;

        return $this;
    }

}

