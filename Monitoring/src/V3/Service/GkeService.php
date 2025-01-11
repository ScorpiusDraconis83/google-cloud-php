<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3\Service;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GKE Service. The "service" here represents a
 * [Kubernetes service
 * object](https://kubernetes.io/docs/concepts/services-networking/service).
 * The field names correspond to the resource labels on [`k8s_service`
 * monitored
 * resources](https://cloud.google.com/monitoring/api/resources#tag_k8s_service).
 *
 * Generated from protobuf message <code>google.monitoring.v3.Service.GkeService</code>
 */
class GkeService extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The project this resource lives in. For legacy services
     * migrated from the `Custom` type, this may be a distinct project from the
     * one parenting the service itself.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $project_id = '';
    /**
     * The location of the parent cluster. This may be a zone or region.
     *
     * Generated from protobuf field <code>string location = 2;</code>
     */
    protected $location = '';
    /**
     * The name of the parent cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 3;</code>
     */
    protected $cluster_name = '';
    /**
     * The name of the parent namespace.
     *
     * Generated from protobuf field <code>string namespace_name = 4;</code>
     */
    protected $namespace_name = '';
    /**
     * The name of this service.
     *
     * Generated from protobuf field <code>string service_name = 5;</code>
     */
    protected $service_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Output only. The project this resource lives in. For legacy services
     *           migrated from the `Custom` type, this may be a distinct project from the
     *           one parenting the service itself.
     *     @type string $location
     *           The location of the parent cluster. This may be a zone or region.
     *     @type string $cluster_name
     *           The name of the parent cluster.
     *     @type string $namespace_name
     *           The name of the parent namespace.
     *     @type string $service_name
     *           The name of this service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The project this resource lives in. For legacy services
     * migrated from the `Custom` type, this may be a distinct project from the
     * one parenting the service itself.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Output only. The project this resource lives in. For legacy services
     * migrated from the `Custom` type, this may be a distinct project from the
     * one parenting the service itself.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The location of the parent cluster. This may be a zone or region.
     *
     * Generated from protobuf field <code>string location = 2;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location of the parent cluster. This may be a zone or region.
     *
     * Generated from protobuf field <code>string location = 2;</code>
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
     * The name of the parent cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 3;</code>
     * @return string
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * The name of the parent cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;

        return $this;
    }

    /**
     * The name of the parent namespace.
     *
     * Generated from protobuf field <code>string namespace_name = 4;</code>
     * @return string
     */
    public function getNamespaceName()
    {
        return $this->namespace_name;
    }

    /**
     * The name of the parent namespace.
     *
     * Generated from protobuf field <code>string namespace_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace_name = $var;

        return $this;
    }

    /**
     * The name of this service.
     *
     * Generated from protobuf field <code>string service_name = 5;</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * The name of this service.
     *
     * Generated from protobuf field <code>string service_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

}


