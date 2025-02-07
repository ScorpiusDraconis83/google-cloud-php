<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2\TranscriptNormalization;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single replacement configuration.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.TranscriptNormalization.Entry</code>
 */
class Entry extends \Google\Protobuf\Internal\Message
{
    /**
     * What to replace. Max length is 100 characters.
     *
     * Generated from protobuf field <code>string search = 1;</code>
     */
    protected $search = '';
    /**
     * What to replace with. Max length is 100 characters.
     *
     * Generated from protobuf field <code>string replace = 2;</code>
     */
    protected $replace = '';
    /**
     * Whether the search is case sensitive.
     *
     * Generated from protobuf field <code>bool case_sensitive = 3;</code>
     */
    protected $case_sensitive = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $search
     *           What to replace. Max length is 100 characters.
     *     @type string $replace
     *           What to replace with. Max length is 100 characters.
     *     @type bool $case_sensitive
     *           Whether the search is case sensitive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * What to replace. Max length is 100 characters.
     *
     * Generated from protobuf field <code>string search = 1;</code>
     * @return string
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * What to replace. Max length is 100 characters.
     *
     * Generated from protobuf field <code>string search = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSearch($var)
    {
        GPBUtil::checkString($var, True);
        $this->search = $var;

        return $this;
    }

    /**
     * What to replace with. Max length is 100 characters.
     *
     * Generated from protobuf field <code>string replace = 2;</code>
     * @return string
     */
    public function getReplace()
    {
        return $this->replace;
    }

    /**
     * What to replace with. Max length is 100 characters.
     *
     * Generated from protobuf field <code>string replace = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setReplace($var)
    {
        GPBUtil::checkString($var, True);
        $this->replace = $var;

        return $this;
    }

    /**
     * Whether the search is case sensitive.
     *
     * Generated from protobuf field <code>bool case_sensitive = 3;</code>
     * @return bool
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * Whether the search is case sensitive.
     *
     * Generated from protobuf field <code>bool case_sensitive = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCaseSensitive($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive = $var;

        return $this;
    }

}


