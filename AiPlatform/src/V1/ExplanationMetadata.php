<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation_metadata.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata describing the Model's input and output for explanation.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExplanationMetadata</code>
 */
class ExplanationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Map from feature names to feature input metadata. Keys are the
     * name of the features. Values are the specification of the feature.
     * An empty InputMetadata is valid. It describes a text feature which has the
     * name specified as the key in
     * [ExplanationMetadata.inputs][google.cloud.aiplatform.v1.ExplanationMetadata.inputs].
     * The baseline of the empty feature is chosen by Vertex AI.
     * For Vertex AI-provided Tensorflow images, the key can be any friendly
     * name of the feature. Once specified,
     * [featureAttributions][google.cloud.aiplatform.v1.Attribution.feature_attributions]
     * are keyed by this key (if not grouped with another feature).
     * For custom images, the key must match with the key in
     * [instance][google.cloud.aiplatform.v1.ExplainRequest.instances].
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata> inputs = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $inputs;
    /**
     * Required. Map from output names to output metadata.
     * For Vertex AI-provided Tensorflow images, keys can be any user defined
     * string that consists of any UTF-8 characters.
     * For custom images, keys are the name of the output field in the prediction
     * to be explained.
     * Currently only one key is allowed.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.ExplanationMetadata.OutputMetadata> outputs = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $outputs;
    /**
     * Points to a YAML file stored on Google Cloud Storage describing the format
     * of the [feature
     * attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions].
     * The schema is defined as an OpenAPI 3.0.2 [Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * AutoML tabular Models always have this field populated by Vertex AI.
     * Note: The URI given on output may be different, including the URI scheme,
     * than the one given on input. The output URI will point to a location where
     * the user only has a read access.
     *
     * Generated from protobuf field <code>string feature_attributions_schema_uri = 3;</code>
     */
    protected $feature_attributions_schema_uri = '';
    /**
     * Name of the source to generate embeddings for example based explanations.
     *
     * Generated from protobuf field <code>string latent_space_source = 5;</code>
     */
    protected $latent_space_source = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $inputs
     *           Required. Map from feature names to feature input metadata. Keys are the
     *           name of the features. Values are the specification of the feature.
     *           An empty InputMetadata is valid. It describes a text feature which has the
     *           name specified as the key in
     *           [ExplanationMetadata.inputs][google.cloud.aiplatform.v1.ExplanationMetadata.inputs].
     *           The baseline of the empty feature is chosen by Vertex AI.
     *           For Vertex AI-provided Tensorflow images, the key can be any friendly
     *           name of the feature. Once specified,
     *           [featureAttributions][google.cloud.aiplatform.v1.Attribution.feature_attributions]
     *           are keyed by this key (if not grouped with another feature).
     *           For custom images, the key must match with the key in
     *           [instance][google.cloud.aiplatform.v1.ExplainRequest.instances].
     *     @type array|\Google\Protobuf\Internal\MapField $outputs
     *           Required. Map from output names to output metadata.
     *           For Vertex AI-provided Tensorflow images, keys can be any user defined
     *           string that consists of any UTF-8 characters.
     *           For custom images, keys are the name of the output field in the prediction
     *           to be explained.
     *           Currently only one key is allowed.
     *     @type string $feature_attributions_schema_uri
     *           Points to a YAML file stored on Google Cloud Storage describing the format
     *           of the [feature
     *           attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions].
     *           The schema is defined as an OpenAPI 3.0.2 [Schema
     *           Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     *           AutoML tabular Models always have this field populated by Vertex AI.
     *           Note: The URI given on output may be different, including the URI scheme,
     *           than the one given on input. The output URI will point to a location where
     *           the user only has a read access.
     *     @type string $latent_space_source
     *           Name of the source to generate embeddings for example based explanations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ExplanationMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Map from feature names to feature input metadata. Keys are the
     * name of the features. Values are the specification of the feature.
     * An empty InputMetadata is valid. It describes a text feature which has the
     * name specified as the key in
     * [ExplanationMetadata.inputs][google.cloud.aiplatform.v1.ExplanationMetadata.inputs].
     * The baseline of the empty feature is chosen by Vertex AI.
     * For Vertex AI-provided Tensorflow images, the key can be any friendly
     * name of the feature. Once specified,
     * [featureAttributions][google.cloud.aiplatform.v1.Attribution.feature_attributions]
     * are keyed by this key (if not grouped with another feature).
     * For custom images, the key must match with the key in
     * [instance][google.cloud.aiplatform.v1.ExplainRequest.instances].
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata> inputs = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Required. Map from feature names to feature input metadata. Keys are the
     * name of the features. Values are the specification of the feature.
     * An empty InputMetadata is valid. It describes a text feature which has the
     * name specified as the key in
     * [ExplanationMetadata.inputs][google.cloud.aiplatform.v1.ExplanationMetadata.inputs].
     * The baseline of the empty feature is chosen by Vertex AI.
     * For Vertex AI-provided Tensorflow images, the key can be any friendly
     * name of the feature. Once specified,
     * [featureAttributions][google.cloud.aiplatform.v1.Attribution.feature_attributions]
     * are keyed by this key (if not grouped with another feature).
     * For custom images, the key must match with the key in
     * [instance][google.cloud.aiplatform.v1.ExplainRequest.instances].
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata> inputs = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * Required. Map from output names to output metadata.
     * For Vertex AI-provided Tensorflow images, keys can be any user defined
     * string that consists of any UTF-8 characters.
     * For custom images, keys are the name of the output field in the prediction
     * to be explained.
     * Currently only one key is allowed.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.ExplanationMetadata.OutputMetadata> outputs = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * Required. Map from output names to output metadata.
     * For Vertex AI-provided Tensorflow images, keys can be any user defined
     * string that consists of any UTF-8 characters.
     * For custom images, keys are the name of the output field in the prediction
     * to be explained.
     * Currently only one key is allowed.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.ExplanationMetadata.OutputMetadata> outputs = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\ExplanationMetadata\OutputMetadata::class);
        $this->outputs = $arr;

        return $this;
    }

    /**
     * Points to a YAML file stored on Google Cloud Storage describing the format
     * of the [feature
     * attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions].
     * The schema is defined as an OpenAPI 3.0.2 [Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * AutoML tabular Models always have this field populated by Vertex AI.
     * Note: The URI given on output may be different, including the URI scheme,
     * than the one given on input. The output URI will point to a location where
     * the user only has a read access.
     *
     * Generated from protobuf field <code>string feature_attributions_schema_uri = 3;</code>
     * @return string
     */
    public function getFeatureAttributionsSchemaUri()
    {
        return $this->feature_attributions_schema_uri;
    }

    /**
     * Points to a YAML file stored on Google Cloud Storage describing the format
     * of the [feature
     * attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions].
     * The schema is defined as an OpenAPI 3.0.2 [Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * AutoML tabular Models always have this field populated by Vertex AI.
     * Note: The URI given on output may be different, including the URI scheme,
     * than the one given on input. The output URI will point to a location where
     * the user only has a read access.
     *
     * Generated from protobuf field <code>string feature_attributions_schema_uri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFeatureAttributionsSchemaUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->feature_attributions_schema_uri = $var;

        return $this;
    }

    /**
     * Name of the source to generate embeddings for example based explanations.
     *
     * Generated from protobuf field <code>string latent_space_source = 5;</code>
     * @return string
     */
    public function getLatentSpaceSource()
    {
        return $this->latent_space_source;
    }

    /**
     * Name of the source to generate embeddings for example based explanations.
     *
     * Generated from protobuf field <code>string latent_space_source = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLatentSpaceSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->latent_space_source = $var;

        return $this;
    }

}

