<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/automl_translation.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateModel.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.CreateModelRequest</code>
 */
class CreateModelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project name, in form of
     * `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The Model to create.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.Model model = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $model = null;

    /**
     * @param string                           $parent Required. The project name, in form of
     *                                                 `projects/{project}/locations/{location}`
     *                                                 Please see {@see TranslationServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Translate\V3\Model $model  Required. The Model to create.
     *
     * @return \Google\Cloud\Translate\V3\CreateModelRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Translate\V3\Model $model): self
    {
        return (new self())
            ->setParent($parent)
            ->setModel($model);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project name, in form of
     *           `projects/{project}/locations/{location}`
     *     @type \Google\Cloud\Translate\V3\Model $model
     *           Required. The Model to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\AutomlTranslation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project name, in form of
     * `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project name, in form of
     * `projects/{project}/locations/{location}`
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
     * Required. The Model to create.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.Model model = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Translate\V3\Model|null
     */
    public function getModel()
    {
        return $this->model;
    }

    public function hasModel()
    {
        return isset($this->model);
    }

    public function clearModel()
    {
        unset($this->model);
    }

    /**
     * Required. The Model to create.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.Model model = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Translate\V3\Model $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3\Model::class);
        $this->model = $var;

        return $this;
    }

}

