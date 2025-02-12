<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2\SpeechAdaptation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A biasing PhraseSet, which can be either a string referencing the name of
 * an existing PhraseSets resource, or an inline definition of a PhraseSet.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.SpeechAdaptation.AdaptationPhraseSet</code>
 */
class AdaptationPhraseSet extends \Google\Protobuf\Internal\Message
{
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phrase_set
     *           The name of an existing PhraseSet resource. The user must have read
     *           access to the resource and it must not be deleted.
     *     @type \Google\Cloud\Speech\V2\PhraseSet $inline_phrase_set
     *           An inline defined PhraseSet.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of an existing PhraseSet resource. The user must have read
     * access to the resource and it must not be deleted.
     *
     * Generated from protobuf field <code>string phrase_set = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getPhraseSet()
    {
        return $this->readOneof(1);
    }

    public function hasPhraseSet()
    {
        return $this->hasOneof(1);
    }

    /**
     * The name of an existing PhraseSet resource. The user must have read
     * access to the resource and it must not be deleted.
     *
     * Generated from protobuf field <code>string phrase_set = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPhraseSet($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * An inline defined PhraseSet.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.PhraseSet inline_phrase_set = 2;</code>
     * @return \Google\Cloud\Speech\V2\PhraseSet|null
     */
    public function getInlinePhraseSet()
    {
        return $this->readOneof(2);
    }

    public function hasInlinePhraseSet()
    {
        return $this->hasOneof(2);
    }

    /**
     * An inline defined PhraseSet.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.PhraseSet inline_phrase_set = 2;</code>
     * @param \Google\Cloud\Speech\V2\PhraseSet $var
     * @return $this
     */
    public function setInlinePhraseSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V2\PhraseSet::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}


