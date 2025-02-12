<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/vehicle_api.proto

namespace Google\Maps\FleetEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains the vehicle and related estimates for a vehicle that match the
 * points of active trips for the vehicle `SearchVehiclesRequest`.
 *
 * Generated from protobuf message <code>maps.fleetengine.v1.VehicleMatch</code>
 */
class VehicleMatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A vehicle that matches the request.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.Vehicle vehicle = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $vehicle = null;
    /**
     * The vehicle's driving ETA to the pickup point specified in the
     * request. An empty value indicates a failure in calculating ETA for the
     * vehicle.  If `SearchVehiclesRequest.include_back_to_back` was `true` and
     * this vehicle has an active trip, `vehicle_pickup_eta` includes the time
     * required to complete the current active trip.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp vehicle_pickup_eta = 2;</code>
     */
    protected $vehicle_pickup_eta = null;
    /**
     * The distance from the Vehicle's current location to the pickup point
     * specified in the request, including any intermediate pickup or dropoff
     * points for existing trips. This distance comprises the calculated driving
     * (route) distance, plus the straight line distance between the navigation
     * end point and the requested pickup point. (The distance between the
     * navigation end point and the requested pickup point is typically small.) An
     * empty value indicates an error in calculating the distance.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_distance_meters = 3;</code>
     */
    protected $vehicle_pickup_distance_meters = null;
    /**
     * Required. The straight-line distance between the vehicle and the pickup
     * point specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_straight_line_distance_meters = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $vehicle_pickup_straight_line_distance_meters = null;
    /**
     * The complete vehicle's driving ETA to the drop off point specified in the
     * request. The ETA includes stopping at any waypoints before the
     * `dropoff_point` specified in the request. The value will only be populated
     * when a drop off point is specified in the request. An empty value indicates
     * an error calculating the ETA.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp vehicle_dropoff_eta = 4;</code>
     */
    protected $vehicle_dropoff_eta = null;
    /**
     * The vehicle's driving distance (in meters) from the pickup point
     * to the drop off point specified in the request. The distance is only
     * between the two points and does not include the vehicle location or any
     * other points that must be visited before the vehicle visits either the
     * pickup point or dropoff point. The value will only be populated when a
     * `dropoff_point` is specified in the request. An empty value indicates
     * a failure in calculating the distance from the pickup to
     * drop off point specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_to_dropoff_distance_meters = 5;</code>
     */
    protected $vehicle_pickup_to_dropoff_distance_meters = null;
    /**
     * Required. The trip type of the request that was used to calculate the ETA
     * to the pickup point.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.TripType trip_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $trip_type = 0;
    /**
     * The ordered list of waypoints used to calculate the ETA. The list
     * includes vehicle location, the pickup points of active
     * trips for the vehicle, and the pickup points provided in the
     * request. An empty list indicates a failure in calculating ETA for the
     * vehicle.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.v1.Waypoint vehicle_trips_waypoints = 7;</code>
     */
    private $vehicle_trips_waypoints;
    /**
     * Type of the vehicle match.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.VehicleMatch.VehicleMatchType vehicle_match_type = 8;</code>
     */
    protected $vehicle_match_type = 0;
    /**
     * The order requested for sorting vehicle matches. Equivalent to
     * `ordered_by`.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.SearchVehiclesRequest.VehicleMatchOrder requested_ordered_by = 9;</code>
     */
    protected $requested_ordered_by = 0;
    /**
     * The order requested for sorting vehicle matches. Equivalent to
     * `requested_ordered_by`.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.SearchVehiclesRequest.VehicleMatchOrder ordered_by = 10;</code>
     */
    protected $ordered_by = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Maps\FleetEngine\V1\Vehicle $vehicle
     *           Required. A vehicle that matches the request.
     *     @type \Google\Protobuf\Timestamp $vehicle_pickup_eta
     *           The vehicle's driving ETA to the pickup point specified in the
     *           request. An empty value indicates a failure in calculating ETA for the
     *           vehicle.  If `SearchVehiclesRequest.include_back_to_back` was `true` and
     *           this vehicle has an active trip, `vehicle_pickup_eta` includes the time
     *           required to complete the current active trip.
     *     @type \Google\Protobuf\Int32Value $vehicle_pickup_distance_meters
     *           The distance from the Vehicle's current location to the pickup point
     *           specified in the request, including any intermediate pickup or dropoff
     *           points for existing trips. This distance comprises the calculated driving
     *           (route) distance, plus the straight line distance between the navigation
     *           end point and the requested pickup point. (The distance between the
     *           navigation end point and the requested pickup point is typically small.) An
     *           empty value indicates an error in calculating the distance.
     *     @type \Google\Protobuf\Int32Value $vehicle_pickup_straight_line_distance_meters
     *           Required. The straight-line distance between the vehicle and the pickup
     *           point specified in the request.
     *     @type \Google\Protobuf\Timestamp $vehicle_dropoff_eta
     *           The complete vehicle's driving ETA to the drop off point specified in the
     *           request. The ETA includes stopping at any waypoints before the
     *           `dropoff_point` specified in the request. The value will only be populated
     *           when a drop off point is specified in the request. An empty value indicates
     *           an error calculating the ETA.
     *     @type \Google\Protobuf\Int32Value $vehicle_pickup_to_dropoff_distance_meters
     *           The vehicle's driving distance (in meters) from the pickup point
     *           to the drop off point specified in the request. The distance is only
     *           between the two points and does not include the vehicle location or any
     *           other points that must be visited before the vehicle visits either the
     *           pickup point or dropoff point. The value will only be populated when a
     *           `dropoff_point` is specified in the request. An empty value indicates
     *           a failure in calculating the distance from the pickup to
     *           drop off point specified in the request.
     *     @type int $trip_type
     *           Required. The trip type of the request that was used to calculate the ETA
     *           to the pickup point.
     *     @type array<\Google\Maps\FleetEngine\V1\Waypoint>|\Google\Protobuf\Internal\RepeatedField $vehicle_trips_waypoints
     *           The ordered list of waypoints used to calculate the ETA. The list
     *           includes vehicle location, the pickup points of active
     *           trips for the vehicle, and the pickup points provided in the
     *           request. An empty list indicates a failure in calculating ETA for the
     *           vehicle.
     *     @type int $vehicle_match_type
     *           Type of the vehicle match.
     *     @type int $requested_ordered_by
     *           The order requested for sorting vehicle matches. Equivalent to
     *           `ordered_by`.
     *     @type int $ordered_by
     *           The order requested for sorting vehicle matches. Equivalent to
     *           `requested_ordered_by`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\VehicleApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A vehicle that matches the request.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.Vehicle vehicle = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Maps\FleetEngine\V1\Vehicle|null
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    public function hasVehicle()
    {
        return isset($this->vehicle);
    }

    public function clearVehicle()
    {
        unset($this->vehicle);
    }

    /**
     * Required. A vehicle that matches the request.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.Vehicle vehicle = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Maps\FleetEngine\V1\Vehicle $var
     * @return $this
     */
    public function setVehicle($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\V1\Vehicle::class);
        $this->vehicle = $var;

        return $this;
    }

    /**
     * The vehicle's driving ETA to the pickup point specified in the
     * request. An empty value indicates a failure in calculating ETA for the
     * vehicle.  If `SearchVehiclesRequest.include_back_to_back` was `true` and
     * this vehicle has an active trip, `vehicle_pickup_eta` includes the time
     * required to complete the current active trip.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp vehicle_pickup_eta = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getVehiclePickupEta()
    {
        return $this->vehicle_pickup_eta;
    }

    public function hasVehiclePickupEta()
    {
        return isset($this->vehicle_pickup_eta);
    }

    public function clearVehiclePickupEta()
    {
        unset($this->vehicle_pickup_eta);
    }

    /**
     * The vehicle's driving ETA to the pickup point specified in the
     * request. An empty value indicates a failure in calculating ETA for the
     * vehicle.  If `SearchVehiclesRequest.include_back_to_back` was `true` and
     * this vehicle has an active trip, `vehicle_pickup_eta` includes the time
     * required to complete the current active trip.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp vehicle_pickup_eta = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setVehiclePickupEta($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->vehicle_pickup_eta = $var;

        return $this;
    }

    /**
     * The distance from the Vehicle's current location to the pickup point
     * specified in the request, including any intermediate pickup or dropoff
     * points for existing trips. This distance comprises the calculated driving
     * (route) distance, plus the straight line distance between the navigation
     * end point and the requested pickup point. (The distance between the
     * navigation end point and the requested pickup point is typically small.) An
     * empty value indicates an error in calculating the distance.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_distance_meters = 3;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getVehiclePickupDistanceMeters()
    {
        return $this->vehicle_pickup_distance_meters;
    }

    public function hasVehiclePickupDistanceMeters()
    {
        return isset($this->vehicle_pickup_distance_meters);
    }

    public function clearVehiclePickupDistanceMeters()
    {
        unset($this->vehicle_pickup_distance_meters);
    }

    /**
     * Returns the unboxed value from <code>getVehiclePickupDistanceMeters()</code>

     * The distance from the Vehicle's current location to the pickup point
     * specified in the request, including any intermediate pickup or dropoff
     * points for existing trips. This distance comprises the calculated driving
     * (route) distance, plus the straight line distance between the navigation
     * end point and the requested pickup point. (The distance between the
     * navigation end point and the requested pickup point is typically small.) An
     * empty value indicates an error in calculating the distance.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_distance_meters = 3;</code>
     * @return int|null
     */
    public function getVehiclePickupDistanceMetersUnwrapped()
    {
        return $this->readWrapperValue("vehicle_pickup_distance_meters");
    }

    /**
     * The distance from the Vehicle's current location to the pickup point
     * specified in the request, including any intermediate pickup or dropoff
     * points for existing trips. This distance comprises the calculated driving
     * (route) distance, plus the straight line distance between the navigation
     * end point and the requested pickup point. (The distance between the
     * navigation end point and the requested pickup point is typically small.) An
     * empty value indicates an error in calculating the distance.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_distance_meters = 3;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setVehiclePickupDistanceMeters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->vehicle_pickup_distance_meters = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * The distance from the Vehicle's current location to the pickup point
     * specified in the request, including any intermediate pickup or dropoff
     * points for existing trips. This distance comprises the calculated driving
     * (route) distance, plus the straight line distance between the navigation
     * end point and the requested pickup point. (The distance between the
     * navigation end point and the requested pickup point is typically small.) An
     * empty value indicates an error in calculating the distance.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_distance_meters = 3;</code>
     * @param int|null $var
     * @return $this
     */
    public function setVehiclePickupDistanceMetersUnwrapped($var)
    {
        $this->writeWrapperValue("vehicle_pickup_distance_meters", $var);
        return $this;}

    /**
     * Required. The straight-line distance between the vehicle and the pickup
     * point specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_straight_line_distance_meters = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getVehiclePickupStraightLineDistanceMeters()
    {
        return $this->vehicle_pickup_straight_line_distance_meters;
    }

    public function hasVehiclePickupStraightLineDistanceMeters()
    {
        return isset($this->vehicle_pickup_straight_line_distance_meters);
    }

    public function clearVehiclePickupStraightLineDistanceMeters()
    {
        unset($this->vehicle_pickup_straight_line_distance_meters);
    }

    /**
     * Returns the unboxed value from <code>getVehiclePickupStraightLineDistanceMeters()</code>

     * Required. The straight-line distance between the vehicle and the pickup
     * point specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_straight_line_distance_meters = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|null
     */
    public function getVehiclePickupStraightLineDistanceMetersUnwrapped()
    {
        return $this->readWrapperValue("vehicle_pickup_straight_line_distance_meters");
    }

    /**
     * Required. The straight-line distance between the vehicle and the pickup
     * point specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_straight_line_distance_meters = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setVehiclePickupStraightLineDistanceMeters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->vehicle_pickup_straight_line_distance_meters = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Required. The straight-line distance between the vehicle and the pickup
     * point specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_straight_line_distance_meters = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|null $var
     * @return $this
     */
    public function setVehiclePickupStraightLineDistanceMetersUnwrapped($var)
    {
        $this->writeWrapperValue("vehicle_pickup_straight_line_distance_meters", $var);
        return $this;}

    /**
     * The complete vehicle's driving ETA to the drop off point specified in the
     * request. The ETA includes stopping at any waypoints before the
     * `dropoff_point` specified in the request. The value will only be populated
     * when a drop off point is specified in the request. An empty value indicates
     * an error calculating the ETA.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp vehicle_dropoff_eta = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getVehicleDropoffEta()
    {
        return $this->vehicle_dropoff_eta;
    }

    public function hasVehicleDropoffEta()
    {
        return isset($this->vehicle_dropoff_eta);
    }

    public function clearVehicleDropoffEta()
    {
        unset($this->vehicle_dropoff_eta);
    }

    /**
     * The complete vehicle's driving ETA to the drop off point specified in the
     * request. The ETA includes stopping at any waypoints before the
     * `dropoff_point` specified in the request. The value will only be populated
     * when a drop off point is specified in the request. An empty value indicates
     * an error calculating the ETA.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp vehicle_dropoff_eta = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setVehicleDropoffEta($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->vehicle_dropoff_eta = $var;

        return $this;
    }

    /**
     * The vehicle's driving distance (in meters) from the pickup point
     * to the drop off point specified in the request. The distance is only
     * between the two points and does not include the vehicle location or any
     * other points that must be visited before the vehicle visits either the
     * pickup point or dropoff point. The value will only be populated when a
     * `dropoff_point` is specified in the request. An empty value indicates
     * a failure in calculating the distance from the pickup to
     * drop off point specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_to_dropoff_distance_meters = 5;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getVehiclePickupToDropoffDistanceMeters()
    {
        return $this->vehicle_pickup_to_dropoff_distance_meters;
    }

    public function hasVehiclePickupToDropoffDistanceMeters()
    {
        return isset($this->vehicle_pickup_to_dropoff_distance_meters);
    }

    public function clearVehiclePickupToDropoffDistanceMeters()
    {
        unset($this->vehicle_pickup_to_dropoff_distance_meters);
    }

    /**
     * Returns the unboxed value from <code>getVehiclePickupToDropoffDistanceMeters()</code>

     * The vehicle's driving distance (in meters) from the pickup point
     * to the drop off point specified in the request. The distance is only
     * between the two points and does not include the vehicle location or any
     * other points that must be visited before the vehicle visits either the
     * pickup point or dropoff point. The value will only be populated when a
     * `dropoff_point` is specified in the request. An empty value indicates
     * a failure in calculating the distance from the pickup to
     * drop off point specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_to_dropoff_distance_meters = 5;</code>
     * @return int|null
     */
    public function getVehiclePickupToDropoffDistanceMetersUnwrapped()
    {
        return $this->readWrapperValue("vehicle_pickup_to_dropoff_distance_meters");
    }

    /**
     * The vehicle's driving distance (in meters) from the pickup point
     * to the drop off point specified in the request. The distance is only
     * between the two points and does not include the vehicle location or any
     * other points that must be visited before the vehicle visits either the
     * pickup point or dropoff point. The value will only be populated when a
     * `dropoff_point` is specified in the request. An empty value indicates
     * a failure in calculating the distance from the pickup to
     * drop off point specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_to_dropoff_distance_meters = 5;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setVehiclePickupToDropoffDistanceMeters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->vehicle_pickup_to_dropoff_distance_meters = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * The vehicle's driving distance (in meters) from the pickup point
     * to the drop off point specified in the request. The distance is only
     * between the two points and does not include the vehicle location or any
     * other points that must be visited before the vehicle visits either the
     * pickup point or dropoff point. The value will only be populated when a
     * `dropoff_point` is specified in the request. An empty value indicates
     * a failure in calculating the distance from the pickup to
     * drop off point specified in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value vehicle_pickup_to_dropoff_distance_meters = 5;</code>
     * @param int|null $var
     * @return $this
     */
    public function setVehiclePickupToDropoffDistanceMetersUnwrapped($var)
    {
        $this->writeWrapperValue("vehicle_pickup_to_dropoff_distance_meters", $var);
        return $this;}

    /**
     * Required. The trip type of the request that was used to calculate the ETA
     * to the pickup point.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.TripType trip_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getTripType()
    {
        return $this->trip_type;
    }

    /**
     * Required. The trip type of the request that was used to calculate the ETA
     * to the pickup point.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.TripType trip_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setTripType($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\V1\TripType::class);
        $this->trip_type = $var;

        return $this;
    }

    /**
     * The ordered list of waypoints used to calculate the ETA. The list
     * includes vehicle location, the pickup points of active
     * trips for the vehicle, and the pickup points provided in the
     * request. An empty list indicates a failure in calculating ETA for the
     * vehicle.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.v1.Waypoint vehicle_trips_waypoints = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVehicleTripsWaypoints()
    {
        return $this->vehicle_trips_waypoints;
    }

    /**
     * The ordered list of waypoints used to calculate the ETA. The list
     * includes vehicle location, the pickup points of active
     * trips for the vehicle, and the pickup points provided in the
     * request. An empty list indicates a failure in calculating ETA for the
     * vehicle.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.v1.Waypoint vehicle_trips_waypoints = 7;</code>
     * @param array<\Google\Maps\FleetEngine\V1\Waypoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVehicleTripsWaypoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Maps\FleetEngine\V1\Waypoint::class);
        $this->vehicle_trips_waypoints = $arr;

        return $this;
    }

    /**
     * Type of the vehicle match.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.VehicleMatch.VehicleMatchType vehicle_match_type = 8;</code>
     * @return int
     */
    public function getVehicleMatchType()
    {
        return $this->vehicle_match_type;
    }

    /**
     * Type of the vehicle match.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.VehicleMatch.VehicleMatchType vehicle_match_type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setVehicleMatchType($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\V1\VehicleMatch\VehicleMatchType::class);
        $this->vehicle_match_type = $var;

        return $this;
    }

    /**
     * The order requested for sorting vehicle matches. Equivalent to
     * `ordered_by`.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.SearchVehiclesRequest.VehicleMatchOrder requested_ordered_by = 9;</code>
     * @return int
     */
    public function getRequestedOrderedBy()
    {
        return $this->requested_ordered_by;
    }

    /**
     * The order requested for sorting vehicle matches. Equivalent to
     * `ordered_by`.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.SearchVehiclesRequest.VehicleMatchOrder requested_ordered_by = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setRequestedOrderedBy($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\V1\SearchVehiclesRequest\VehicleMatchOrder::class);
        $this->requested_ordered_by = $var;

        return $this;
    }

    /**
     * The order requested for sorting vehicle matches. Equivalent to
     * `requested_ordered_by`.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.SearchVehiclesRequest.VehicleMatchOrder ordered_by = 10;</code>
     * @return int
     */
    public function getOrderedBy()
    {
        return $this->ordered_by;
    }

    /**
     * The order requested for sorting vehicle matches. Equivalent to
     * `requested_ordered_by`.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.SearchVehiclesRequest.VehicleMatchOrder ordered_by = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderedBy($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\V1\SearchVehiclesRequest\VehicleMatchOrder::class);
        $this->ordered_by = $var;

        return $this;
    }

}

