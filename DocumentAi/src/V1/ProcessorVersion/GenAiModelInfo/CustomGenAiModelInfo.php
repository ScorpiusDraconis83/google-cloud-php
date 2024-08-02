<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/processor.proto

namespace Google\Cloud\DocumentAI\V1\ProcessorVersion\GenAiModelInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information for a custom Generative AI model created by the user. These
 * are created with `Create New Version` in either the `Call foundation
 * model` or `Fine tuning` tabs.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.ProcessorVersion.GenAiModelInfo.CustomGenAiModelInfo</code>
 */
class CustomGenAiModelInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of custom model created by the user.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.GenAiModelInfo.CustomGenAiModelInfo.CustomModelType custom_model_type = 1;</code>
     */
    private $custom_model_type = 0;
    /**
     * The base processor version ID for the custom model.
     *
     * Generated from protobuf field <code>string base_processor_version_id = 2;</code>
     */
    private $base_processor_version_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $custom_model_type
     *           The type of custom model created by the user.
     *     @type string $base_processor_version_id
     *           The base processor version ID for the custom model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Processor::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of custom model created by the user.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.GenAiModelInfo.CustomGenAiModelInfo.CustomModelType custom_model_type = 1;</code>
     * @return int
     */
    public function getCustomModelType()
    {
        return $this->custom_model_type;
    }

    /**
     * The type of custom model created by the user.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.GenAiModelInfo.CustomGenAiModelInfo.CustomModelType custom_model_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCustomModelType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DocumentAI\V1\ProcessorVersion\GenAiModelInfo\CustomGenAiModelInfo\CustomModelType::class);
        $this->custom_model_type = $var;

        return $this;
    }

    /**
     * The base processor version ID for the custom model.
     *
     * Generated from protobuf field <code>string base_processor_version_id = 2;</code>
     * @return string
     */
    public function getBaseProcessorVersionId()
    {
        return $this->base_processor_version_id;
    }

    /**
     * The base processor version ID for the custom model.
     *
     * Generated from protobuf field <code>string base_processor_version_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseProcessorVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_processor_version_id = $var;

        return $this;
    }

}


