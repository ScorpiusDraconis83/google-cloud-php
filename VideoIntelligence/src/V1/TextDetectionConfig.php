<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for TEXT_DETECTION.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.TextDetectionConfig</code>
 */
class TextDetectionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Language hint can be specified if the language to be detected is known a
     * priori. It can increase the accuracy of the detection. Language hint must
     * be language code in BCP-47 format.
     * Automatic language detection is performed if no hint is provided.
     *
     * Generated from protobuf field <code>repeated string language_hints = 1;</code>
     */
    private $language_hints;
    /**
     * Model to use for text detection.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest".
     *
     * Generated from protobuf field <code>string model = 2;</code>
     */
    protected $model = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $language_hints
     *           Language hint can be specified if the language to be detected is known a
     *           priori. It can increase the accuracy of the detection. Language hint must
     *           be language code in BCP-47 format.
     *           Automatic language detection is performed if no hint is provided.
     *     @type string $model
     *           Model to use for text detection.
     *           Supported values: "builtin/stable" (the default if unset) and
     *           "builtin/latest".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Language hint can be specified if the language to be detected is known a
     * priori. It can increase the accuracy of the detection. Language hint must
     * be language code in BCP-47 format.
     * Automatic language detection is performed if no hint is provided.
     *
     * Generated from protobuf field <code>repeated string language_hints = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLanguageHints()
    {
        return $this->language_hints;
    }

    /**
     * Language hint can be specified if the language to be detected is known a
     * priori. It can increase the accuracy of the detection. Language hint must
     * be language code in BCP-47 format.
     * Automatic language detection is performed if no hint is provided.
     *
     * Generated from protobuf field <code>repeated string language_hints = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLanguageHints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->language_hints = $arr;

        return $this;
    }

    /**
     * Model to use for text detection.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest".
     *
     * Generated from protobuf field <code>string model = 2;</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Model to use for text detection.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest".
     *
     * Generated from protobuf field <code>string model = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

}

