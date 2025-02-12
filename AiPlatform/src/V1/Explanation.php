<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Explanation of a prediction (provided in
 * [PredictResponse.predictions][google.cloud.aiplatform.v1.PredictResponse.predictions])
 * produced by the Model on a given
 * [instance][google.cloud.aiplatform.v1.ExplainRequest.instances].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Explanation</code>
 */
class Explanation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Feature attributions grouped by predicted outputs.
     * For Models that predict only one output, such as regression Models that
     * predict only one score, there is only one attibution that explains the
     * predicted output. For Models that predict multiple outputs, such as
     * multiclass Models that predict multiple classes, each element explains one
     * specific item.
     * [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     * can be used to identify which output this attribution is explaining.
     * By default, we provide Shapley values for the predicted class. However,
     * you can configure the explanation request to generate Shapley values for
     * any other classes too. For example, if a model predicts a probability of
     * `0.4` for approving a loan application, the model's decision is to reject
     * the application since `p(reject) = 0.6 > p(approve) = 0.4`, and the default
     * Shapley values would be computed for rejection decision and not approval,
     * even though the latter might be the positive class.
     * If users set
     * [ExplanationParameters.top_k][google.cloud.aiplatform.v1.ExplanationParameters.top_k],
     * the attributions are sorted by
     * [instance_output_value][google.cloud.aiplatform.v1.Attribution.instance_output_value]
     * in descending order. If
     * [ExplanationParameters.output_indices][google.cloud.aiplatform.v1.ExplanationParameters.output_indices]
     * is specified, the attributions are stored by
     * [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     * in the same order as they appear in the output_indices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Attribution attributions = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $attributions;
    /**
     * Output only. List of the nearest neighbors for example-based explanations.
     * For models deployed with the examples explanations feature enabled, the
     * attributions field is empty and instead the neighbors field is populated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Neighbor neighbors = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $neighbors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\Attribution>|\Google\Protobuf\Internal\RepeatedField $attributions
     *           Output only. Feature attributions grouped by predicted outputs.
     *           For Models that predict only one output, such as regression Models that
     *           predict only one score, there is only one attibution that explains the
     *           predicted output. For Models that predict multiple outputs, such as
     *           multiclass Models that predict multiple classes, each element explains one
     *           specific item.
     *           [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     *           can be used to identify which output this attribution is explaining.
     *           By default, we provide Shapley values for the predicted class. However,
     *           you can configure the explanation request to generate Shapley values for
     *           any other classes too. For example, if a model predicts a probability of
     *           `0.4` for approving a loan application, the model's decision is to reject
     *           the application since `p(reject) = 0.6 > p(approve) = 0.4`, and the default
     *           Shapley values would be computed for rejection decision and not approval,
     *           even though the latter might be the positive class.
     *           If users set
     *           [ExplanationParameters.top_k][google.cloud.aiplatform.v1.ExplanationParameters.top_k],
     *           the attributions are sorted by
     *           [instance_output_value][google.cloud.aiplatform.v1.Attribution.instance_output_value]
     *           in descending order. If
     *           [ExplanationParameters.output_indices][google.cloud.aiplatform.v1.ExplanationParameters.output_indices]
     *           is specified, the attributions are stored by
     *           [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     *           in the same order as they appear in the output_indices.
     *     @type array<\Google\Cloud\AIPlatform\V1\Neighbor>|\Google\Protobuf\Internal\RepeatedField $neighbors
     *           Output only. List of the nearest neighbors for example-based explanations.
     *           For models deployed with the examples explanations feature enabled, the
     *           attributions field is empty and instead the neighbors field is populated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Feature attributions grouped by predicted outputs.
     * For Models that predict only one output, such as regression Models that
     * predict only one score, there is only one attibution that explains the
     * predicted output. For Models that predict multiple outputs, such as
     * multiclass Models that predict multiple classes, each element explains one
     * specific item.
     * [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     * can be used to identify which output this attribution is explaining.
     * By default, we provide Shapley values for the predicted class. However,
     * you can configure the explanation request to generate Shapley values for
     * any other classes too. For example, if a model predicts a probability of
     * `0.4` for approving a loan application, the model's decision is to reject
     * the application since `p(reject) = 0.6 > p(approve) = 0.4`, and the default
     * Shapley values would be computed for rejection decision and not approval,
     * even though the latter might be the positive class.
     * If users set
     * [ExplanationParameters.top_k][google.cloud.aiplatform.v1.ExplanationParameters.top_k],
     * the attributions are sorted by
     * [instance_output_value][google.cloud.aiplatform.v1.Attribution.instance_output_value]
     * in descending order. If
     * [ExplanationParameters.output_indices][google.cloud.aiplatform.v1.ExplanationParameters.output_indices]
     * is specified, the attributions are stored by
     * [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     * in the same order as they appear in the output_indices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Attribution attributions = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributions()
    {
        return $this->attributions;
    }

    /**
     * Output only. Feature attributions grouped by predicted outputs.
     * For Models that predict only one output, such as regression Models that
     * predict only one score, there is only one attibution that explains the
     * predicted output. For Models that predict multiple outputs, such as
     * multiclass Models that predict multiple classes, each element explains one
     * specific item.
     * [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     * can be used to identify which output this attribution is explaining.
     * By default, we provide Shapley values for the predicted class. However,
     * you can configure the explanation request to generate Shapley values for
     * any other classes too. For example, if a model predicts a probability of
     * `0.4` for approving a loan application, the model's decision is to reject
     * the application since `p(reject) = 0.6 > p(approve) = 0.4`, and the default
     * Shapley values would be computed for rejection decision and not approval,
     * even though the latter might be the positive class.
     * If users set
     * [ExplanationParameters.top_k][google.cloud.aiplatform.v1.ExplanationParameters.top_k],
     * the attributions are sorted by
     * [instance_output_value][google.cloud.aiplatform.v1.Attribution.instance_output_value]
     * in descending order. If
     * [ExplanationParameters.output_indices][google.cloud.aiplatform.v1.ExplanationParameters.output_indices]
     * is specified, the attributions are stored by
     * [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     * in the same order as they appear in the output_indices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Attribution attributions = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Attribution>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Attribution::class);
        $this->attributions = $arr;

        return $this;
    }

    /**
     * Output only. List of the nearest neighbors for example-based explanations.
     * For models deployed with the examples explanations feature enabled, the
     * attributions field is empty and instead the neighbors field is populated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Neighbor neighbors = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNeighbors()
    {
        return $this->neighbors;
    }

    /**
     * Output only. List of the nearest neighbors for example-based explanations.
     * For models deployed with the examples explanations feature enabled, the
     * attributions field is empty and instead the neighbors field is populated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Neighbor neighbors = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Neighbor>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNeighbors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Neighbor::class);
        $this->neighbors = $arr;

        return $this;
    }

}

