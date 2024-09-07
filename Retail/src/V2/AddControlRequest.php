<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/serving_config_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for AddControl method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.AddControlRequest</code>
 */
class AddControlRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The source ServingConfig resource name . Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/servingConfigs/{serving_config_id}`
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $serving_config = '';
    /**
     * Required. The id of the control to apply. Assumed to be in the same catalog
     * as the serving config - if id is not found a NOT_FOUND error is returned.
     *
     * Generated from protobuf field <code>string control_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $control_id = '';

    /**
     * @param string $servingConfig Required. The source ServingConfig resource name . Format:
     *                              `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/servingConfigs/{serving_config_id}`
     *                              Please see {@see ServingConfigServiceClient::servingConfigName()} for help formatting this field.
     *
     * @return \Google\Cloud\Retail\V2\AddControlRequest
     *
     * @experimental
     */
    public static function build(string $servingConfig): self
    {
        return (new self())
            ->setServingConfig($servingConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $serving_config
     *           Required. The source ServingConfig resource name . Format:
     *           `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/servingConfigs/{serving_config_id}`
     *     @type string $control_id
     *           Required. The id of the control to apply. Assumed to be in the same catalog
     *           as the serving config - if id is not found a NOT_FOUND error is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\ServingConfigService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The source ServingConfig resource name . Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/servingConfigs/{serving_config_id}`
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getServingConfig()
    {
        return $this->serving_config;
    }

    /**
     * Required. The source ServingConfig resource name . Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/servingConfigs/{serving_config_id}`
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setServingConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->serving_config = $var;

        return $this;
    }

    /**
     * Required. The id of the control to apply. Assumed to be in the same catalog
     * as the serving config - if id is not found a NOT_FOUND error is returned.
     *
     * Generated from protobuf field <code>string control_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getControlId()
    {
        return $this->control_id;
    }

    /**
     * Required. The id of the control to apply. Assumed to be in the same catalog
     * as the serving config - if id is not found a NOT_FOUND error is returned.
     *
     * Generated from protobuf field <code>string control_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setControlId($var)
    {
        GPBUtil::checkString($var, True);
        $this->control_id = $var;

        return $this;
    }

}

