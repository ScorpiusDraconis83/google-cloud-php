<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of operations that perform import Feature values.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ImportFeatureValuesOperationMetadata</code>
 */
class ImportFeatureValuesOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Operation metadata for Featurestore import Feature values.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     */
    protected $generic_metadata = null;
    /**
     * Number of entities that have been imported by the operation.
     *
     * Generated from protobuf field <code>int64 imported_entity_count = 2;</code>
     */
    protected $imported_entity_count = 0;
    /**
     * Number of Feature values that have been imported by the operation.
     *
     * Generated from protobuf field <code>int64 imported_feature_value_count = 3;</code>
     */
    protected $imported_feature_value_count = 0;
    /**
     * The source URI from where Feature values are imported.
     *
     * Generated from protobuf field <code>repeated string source_uris = 4;</code>
     */
    private $source_uris;
    /**
     * The number of rows in input source that weren't imported due to either
     * * Not having any featureValues.
     * * Having a null entityId.
     * * Having a null timestamp.
     * * Not being parsable (applicable for CSV sources).
     *
     * Generated from protobuf field <code>int64 invalid_row_count = 6;</code>
     */
    protected $invalid_row_count = 0;
    /**
     * The number rows that weren't ingested due to having timestamps outside the
     * retention boundary.
     *
     * Generated from protobuf field <code>int64 timestamp_outside_retention_rows_count = 7;</code>
     */
    protected $timestamp_outside_retention_rows_count = 0;
    /**
     * List of ImportFeatureValues operations running under a single EntityType
     * that are blocking this operation.
     *
     * Generated from protobuf field <code>repeated int64 blocking_operation_ids = 8;</code>
     */
    private $blocking_operation_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\GenericOperationMetadata $generic_metadata
     *           Operation metadata for Featurestore import Feature values.
     *     @type int|string $imported_entity_count
     *           Number of entities that have been imported by the operation.
     *     @type int|string $imported_feature_value_count
     *           Number of Feature values that have been imported by the operation.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $source_uris
     *           The source URI from where Feature values are imported.
     *     @type int|string $invalid_row_count
     *           The number of rows in input source that weren't imported due to either
     *           * Not having any featureValues.
     *           * Having a null entityId.
     *           * Having a null timestamp.
     *           * Not being parsable (applicable for CSV sources).
     *     @type int|string $timestamp_outside_retention_rows_count
     *           The number rows that weren't ingested due to having timestamps outside the
     *           retention boundary.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $blocking_operation_ids
     *           List of ImportFeatureValues operations running under a single EntityType
     *           that are blocking this operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Operation metadata for Featurestore import Feature values.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\GenericOperationMetadata|null
     */
    public function getGenericMetadata()
    {
        return $this->generic_metadata;
    }

    public function hasGenericMetadata()
    {
        return isset($this->generic_metadata);
    }

    public function clearGenericMetadata()
    {
        unset($this->generic_metadata);
    }

    /**
     * Operation metadata for Featurestore import Feature values.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\GenericOperationMetadata $var
     * @return $this
     */
    public function setGenericMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GenericOperationMetadata::class);
        $this->generic_metadata = $var;

        return $this;
    }

    /**
     * Number of entities that have been imported by the operation.
     *
     * Generated from protobuf field <code>int64 imported_entity_count = 2;</code>
     * @return int|string
     */
    public function getImportedEntityCount()
    {
        return $this->imported_entity_count;
    }

    /**
     * Number of entities that have been imported by the operation.
     *
     * Generated from protobuf field <code>int64 imported_entity_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setImportedEntityCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->imported_entity_count = $var;

        return $this;
    }

    /**
     * Number of Feature values that have been imported by the operation.
     *
     * Generated from protobuf field <code>int64 imported_feature_value_count = 3;</code>
     * @return int|string
     */
    public function getImportedFeatureValueCount()
    {
        return $this->imported_feature_value_count;
    }

    /**
     * Number of Feature values that have been imported by the operation.
     *
     * Generated from protobuf field <code>int64 imported_feature_value_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setImportedFeatureValueCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->imported_feature_value_count = $var;

        return $this;
    }

    /**
     * The source URI from where Feature values are imported.
     *
     * Generated from protobuf field <code>repeated string source_uris = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSourceUris()
    {
        return $this->source_uris;
    }

    /**
     * The source URI from where Feature values are imported.
     *
     * Generated from protobuf field <code>repeated string source_uris = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSourceUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->source_uris = $arr;

        return $this;
    }

    /**
     * The number of rows in input source that weren't imported due to either
     * * Not having any featureValues.
     * * Having a null entityId.
     * * Having a null timestamp.
     * * Not being parsable (applicable for CSV sources).
     *
     * Generated from protobuf field <code>int64 invalid_row_count = 6;</code>
     * @return int|string
     */
    public function getInvalidRowCount()
    {
        return $this->invalid_row_count;
    }

    /**
     * The number of rows in input source that weren't imported due to either
     * * Not having any featureValues.
     * * Having a null entityId.
     * * Having a null timestamp.
     * * Not being parsable (applicable for CSV sources).
     *
     * Generated from protobuf field <code>int64 invalid_row_count = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInvalidRowCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->invalid_row_count = $var;

        return $this;
    }

    /**
     * The number rows that weren't ingested due to having timestamps outside the
     * retention boundary.
     *
     * Generated from protobuf field <code>int64 timestamp_outside_retention_rows_count = 7;</code>
     * @return int|string
     */
    public function getTimestampOutsideRetentionRowsCount()
    {
        return $this->timestamp_outside_retention_rows_count;
    }

    /**
     * The number rows that weren't ingested due to having timestamps outside the
     * retention boundary.
     *
     * Generated from protobuf field <code>int64 timestamp_outside_retention_rows_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestampOutsideRetentionRowsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp_outside_retention_rows_count = $var;

        return $this;
    }

    /**
     * List of ImportFeatureValues operations running under a single EntityType
     * that are blocking this operation.
     *
     * Generated from protobuf field <code>repeated int64 blocking_operation_ids = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlockingOperationIds()
    {
        return $this->blocking_operation_ids;
    }

    /**
     * List of ImportFeatureValues operations running under a single EntityType
     * that are blocking this operation.
     *
     * Generated from protobuf field <code>repeated int64 blocking_operation_ids = 8;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlockingOperationIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->blocking_operation_ids = $arr;

        return $this;
    }

}

