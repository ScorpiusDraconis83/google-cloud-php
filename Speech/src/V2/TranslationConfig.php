<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Translation configuration. Use to translate the given audio into text for the
 * desired language.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.TranslationConfig</code>
 */
class TranslationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The language code to translate to.
     *
     * Generated from protobuf field <code>string target_language = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $target_language = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $target_language
     *           Required. The language code to translate to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The language code to translate to.
     *
     * Generated from protobuf field <code>string target_language = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetLanguage()
    {
        return $this->target_language;
    }

    /**
     * Required. The language code to translate to.
     *
     * Generated from protobuf field <code>string target_language = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_language = $var;

        return $this;
    }

}

