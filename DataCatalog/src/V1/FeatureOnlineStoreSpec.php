<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detail description of the source information of a Vertex Feature Online
 * Store.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.FeatureOnlineStoreSpec</code>
 */
class FeatureOnlineStoreSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Type of underelaying storage for the FeatureOnlineStore.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.FeatureOnlineStoreSpec.StorageType storage_type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $storage_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $storage_type
     *           Output only. Type of underelaying storage for the FeatureOnlineStore.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Type of underelaying storage for the FeatureOnlineStore.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.FeatureOnlineStoreSpec.StorageType storage_type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStorageType()
    {
        return $this->storage_type;
    }

    /**
     * Output only. Type of underelaying storage for the FeatureOnlineStore.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.FeatureOnlineStoreSpec.StorageType storage_type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStorageType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataCatalog\V1\FeatureOnlineStoreSpec\StorageType::class);
        $this->storage_type = $var;

        return $this;
    }

}

