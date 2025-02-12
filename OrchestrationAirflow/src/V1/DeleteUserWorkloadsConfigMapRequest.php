<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Delete user workloads ConfigMap request.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.DeleteUserWorkloadsConfigMapRequest</code>
 */
class DeleteUserWorkloadsConfigMapRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ConfigMap to delete, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}/userWorkloadsConfigMaps/{userWorkloadsConfigMapId}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The ConfigMap to delete, in the form:
     *                     "projects/{projectId}/locations/{locationId}/environments/{environmentId}/userWorkloadsConfigMaps/{userWorkloadsConfigMapId}"
     *                     Please see {@see EnvironmentsClient::userWorkloadsConfigMapName()} for help formatting this field.
     *
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\DeleteUserWorkloadsConfigMapRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The ConfigMap to delete, in the form:
     *           "projects/{projectId}/locations/{locationId}/environments/{environmentId}/userWorkloadsConfigMaps/{userWorkloadsConfigMapId}"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ConfigMap to delete, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}/userWorkloadsConfigMaps/{userWorkloadsConfigMapId}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The ConfigMap to delete, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}/userWorkloadsConfigMaps/{userWorkloadsConfigMapId}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

