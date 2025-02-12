<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [MetadataService.PurgeExecutions][google.cloud.aiplatform.v1.MetadataService.PurgeExecutions].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PurgeExecutionsRequest</code>
 */
class PurgeExecutionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The metadata store to purge Executions from.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. A required filter matching the Executions to be purged.
     * E.g., `update_time <= 2020-11-19T11:30:00-04:00`.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $filter = '';
    /**
     * Optional. Flag to indicate to actually perform the purge.
     * If `force` is set to false, the method will return a sample of
     * Execution names that would be deleted.
     *
     * Generated from protobuf field <code>bool force = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $force = false;

    /**
     * @param string $parent Required. The metadata store to purge Executions from.
     *                       Format:
     *                       `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *                       Please see {@see MetadataServiceClient::metadataStoreName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\PurgeExecutionsRequest
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
     *           Required. The metadata store to purge Executions from.
     *           Format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *     @type string $filter
     *           Required. A required filter matching the Executions to be purged.
     *           E.g., `update_time <= 2020-11-19T11:30:00-04:00`.
     *     @type bool $force
     *           Optional. Flag to indicate to actually perform the purge.
     *           If `force` is set to false, the method will return a sample of
     *           Execution names that would be deleted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The metadata store to purge Executions from.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The metadata store to purge Executions from.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
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
     * Required. A required filter matching the Executions to be purged.
     * E.g., `update_time <= 2020-11-19T11:30:00-04:00`.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required. A required filter matching the Executions to be purged.
     * E.g., `update_time <= 2020-11-19T11:30:00-04:00`.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. Flag to indicate to actually perform the purge.
     * If `force` is set to false, the method will return a sample of
     * Execution names that would be deleted.
     *
     * Generated from protobuf field <code>bool force = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Optional. Flag to indicate to actually perform the purge.
     * If `force` is set to false, the method will return a sample of
     * Execution names that would be deleted.
     *
     * Generated from protobuf field <code>bool force = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

