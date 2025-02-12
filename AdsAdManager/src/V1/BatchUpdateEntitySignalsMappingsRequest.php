<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/entity_signals_mapping_service.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request object for `BatchUpdateEntitySignalsMappings` method.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.BatchUpdateEntitySignalsMappingsRequest</code>
 */
class BatchUpdateEntitySignalsMappingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource where `EntitySignalsMappings` will be
     * updated. Format: `networks/{network_code}` The parent field in the
     * UpdateEntitySignalsMappingRequest must match this field.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The `EntitySignalsMapping` objects to update.
     * A maximum of 100 objects can be updated in a batch.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.UpdateEntitySignalsMappingRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $requests;

    /**
     * @param string                                                       $parent   Required. The parent resource where `EntitySignalsMappings` will be
     *                                                                               updated. Format: `networks/{network_code}` The parent field in the
     *                                                                               UpdateEntitySignalsMappingRequest must match this field. Please see
     *                                                                               {@see EntitySignalsMappingServiceClient::networkName()} for help formatting this field.
     * @param \Google\Ads\AdManager\V1\UpdateEntitySignalsMappingRequest[] $requests Required. The `EntitySignalsMapping` objects to update.
     *                                                                               A maximum of 100 objects can be updated in a batch.
     *
     * @return \Google\Ads\AdManager\V1\BatchUpdateEntitySignalsMappingsRequest
     *
     * @experimental
     */
    public static function build(string $parent, array $requests): self
    {
        return (new self())
            ->setParent($parent)
            ->setRequests($requests);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource where `EntitySignalsMappings` will be
     *           updated. Format: `networks/{network_code}` The parent field in the
     *           UpdateEntitySignalsMappingRequest must match this field.
     *     @type array<\Google\Ads\AdManager\V1\UpdateEntitySignalsMappingRequest>|\Google\Protobuf\Internal\RepeatedField $requests
     *           Required. The `EntitySignalsMapping` objects to update.
     *           A maximum of 100 objects can be updated in a batch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\EntitySignalsMappingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource where `EntitySignalsMappings` will be
     * updated. Format: `networks/{network_code}` The parent field in the
     * UpdateEntitySignalsMappingRequest must match this field.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource where `EntitySignalsMappings` will be
     * updated. Format: `networks/{network_code}` The parent field in the
     * UpdateEntitySignalsMappingRequest must match this field.
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
     * Required. The `EntitySignalsMapping` objects to update.
     * A maximum of 100 objects can be updated in a batch.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.UpdateEntitySignalsMappingRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Required. The `EntitySignalsMapping` objects to update.
     * A maximum of 100 objects can be updated in a batch.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.UpdateEntitySignalsMappingRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Ads\AdManager\V1\UpdateEntitySignalsMappingRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\AdManager\V1\UpdateEntitySignalsMappingRequest::class);
        $this->requests = $arr;

        return $this;
    }

}

