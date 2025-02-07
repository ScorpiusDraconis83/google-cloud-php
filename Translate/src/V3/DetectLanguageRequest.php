<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for language detection.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.DetectLanguageRequest</code>
 */
class DetectLanguageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Project or location to make a call. Must refer to a caller's
     * project.
     * Format: `projects/{project-number-or-id}/locations/{location-id}` or
     * `projects/{project-number-or-id}`.
     * For global calls, use `projects/{project-number-or-id}/locations/global` or
     * `projects/{project-number-or-id}`.
     * Only models within the same region (has same location-id) can be used.
     * Otherwise an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>string parent = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The language detection model to be used.
     * Format:
     * `projects/{project-number-or-id}/locations/{location-id}/models/language-detection/{model-id}`
     * Only one language detection model is currently supported:
     * `projects/{project-number-or-id}/locations/{location-id}/models/language-detection/default`.
     * If not specified, the default model is used.
     *
     * Generated from protobuf field <code>string model = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $model = '';
    /**
     * Optional. The format of the source text, for example, "text/html",
     * "text/plain". If left blank, the MIME type defaults to "text/html".
     *
     * Generated from protobuf field <code>string mime_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $mime_type = '';
    /**
     * Optional. The labels with user-defined metadata for the request.
     * Label keys and values can be no longer than 63 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * Label values are optional. Label keys must start with a letter.
     * See https://cloud.google.com/translate/docs/advanced/labels for more
     * information.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    protected $source;

    /**
     * @param string $parent   Required. Project or location to make a call. Must refer to a caller's
     *                         project.
     *
     *                         Format: `projects/{project-number-or-id}/locations/{location-id}` or
     *                         `projects/{project-number-or-id}`.
     *
     *                         For global calls, use `projects/{project-number-or-id}/locations/global` or
     *                         `projects/{project-number-or-id}`.
     *
     *                         Only models within the same region (has same location-id) can be used.
     *                         Otherwise an INVALID_ARGUMENT (400) error is returned. Please see
     *                         {@see TranslationServiceClient::locationName()} for help formatting this field.
     * @param string $model    Optional. The language detection model to be used.
     *
     *                         Format:
     *                         `projects/{project-number-or-id}/locations/{location-id}/models/language-detection/{model-id}`
     *
     *                         Only one language detection model is currently supported:
     *                         `projects/{project-number-or-id}/locations/{location-id}/models/language-detection/default`.
     *
     *                         If not specified, the default model is used.
     * @param string $mimeType Optional. The format of the source text, for example, "text/html",
     *                         "text/plain". If left blank, the MIME type defaults to "text/html".
     * @param string $content  The content of the input stored as a string.
     *
     * @return \Google\Cloud\Translate\V3\DetectLanguageRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $model, string $mimeType, string $content): self
    {
        return (new self())
            ->setParent($parent)
            ->setModel($model)
            ->setMimeType($mimeType)
            ->setContent($content);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Project or location to make a call. Must refer to a caller's
     *           project.
     *           Format: `projects/{project-number-or-id}/locations/{location-id}` or
     *           `projects/{project-number-or-id}`.
     *           For global calls, use `projects/{project-number-or-id}/locations/global` or
     *           `projects/{project-number-or-id}`.
     *           Only models within the same region (has same location-id) can be used.
     *           Otherwise an INVALID_ARGUMENT (400) error is returned.
     *     @type string $model
     *           Optional. The language detection model to be used.
     *           Format:
     *           `projects/{project-number-or-id}/locations/{location-id}/models/language-detection/{model-id}`
     *           Only one language detection model is currently supported:
     *           `projects/{project-number-or-id}/locations/{location-id}/models/language-detection/default`.
     *           If not specified, the default model is used.
     *     @type string $content
     *           The content of the input stored as a string.
     *     @type string $mime_type
     *           Optional. The format of the source text, for example, "text/html",
     *           "text/plain". If left blank, the MIME type defaults to "text/html".
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata for the request.
     *           Label keys and values can be no longer than 63 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           Label values are optional. Label keys must start with a letter.
     *           See https://cloud.google.com/translate/docs/advanced/labels for more
     *           information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Project or location to make a call. Must refer to a caller's
     * project.
     * Format: `projects/{project-number-or-id}/locations/{location-id}` or
     * `projects/{project-number-or-id}`.
     * For global calls, use `projects/{project-number-or-id}/locations/global` or
     * `projects/{project-number-or-id}`.
     * Only models within the same region (has same location-id) can be used.
     * Otherwise an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>string parent = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Project or location to make a call. Must refer to a caller's
     * project.
     * Format: `projects/{project-number-or-id}/locations/{location-id}` or
     * `projects/{project-number-or-id}`.
     * For global calls, use `projects/{project-number-or-id}/locations/global` or
     * `projects/{project-number-or-id}`.
     * Only models within the same region (has same location-id) can be used.
     * Otherwise an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>string parent = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. The language detection model to be used.
     * Format:
     * `projects/{project-number-or-id}/locations/{location-id}/models/language-detection/{model-id}`
     * Only one language detection model is currently supported:
     * `projects/{project-number-or-id}/locations/{location-id}/models/language-detection/default`.
     * If not specified, the default model is used.
     *
     * Generated from protobuf field <code>string model = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Optional. The language detection model to be used.
     * Format:
     * `projects/{project-number-or-id}/locations/{location-id}/models/language-detection/{model-id}`
     * Only one language detection model is currently supported:
     * `projects/{project-number-or-id}/locations/{location-id}/models/language-detection/default`.
     * If not specified, the default model is used.
     *
     * Generated from protobuf field <code>string model = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * The content of the input stored as a string.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->readOneof(1);
    }

    public function hasContent()
    {
        return $this->hasOneof(1);
    }

    /**
     * The content of the input stored as a string.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Optional. The format of the source text, for example, "text/html",
     * "text/plain". If left blank, the MIME type defaults to "text/html".
     *
     * Generated from protobuf field <code>string mime_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Optional. The format of the source text, for example, "text/html",
     * "text/plain". If left blank, the MIME type defaults to "text/html".
     *
     * Generated from protobuf field <code>string mime_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Optional. The labels with user-defined metadata for the request.
     * Label keys and values can be no longer than 63 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * Label values are optional. Label keys must start with a letter.
     * See https://cloud.google.com/translate/docs/advanced/labels for more
     * information.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels with user-defined metadata for the request.
     * Label keys and values can be no longer than 63 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * Label values are optional. Label keys must start with a letter.
     * See https://cloud.google.com/translate/docs/advanced/labels for more
     * information.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

