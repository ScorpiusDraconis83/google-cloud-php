<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/slsa_provenance_zero_two.proto

namespace Grafeas\V1\SlsaProvenanceZeroTwo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes where the config file that kicked off the build came from.
 * This is effectively a pointer to the source where buildConfig came from.
 *
 * Generated from protobuf message <code>grafeas.v1.SlsaProvenanceZeroTwo.SlsaConfigSource</code>
 */
class SlsaConfigSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    protected $uri = '';
    /**
     * Generated from protobuf field <code>map<string, string> digest = 2;</code>
     */
    private $digest;
    /**
     * Generated from protobuf field <code>string entry_point = 3;</code>
     */
    protected $entry_point = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *     @type array|\Google\Protobuf\Internal\MapField $digest
     *     @type string $entry_point
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\SlsaProvenanceZeroTwo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> digest = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * Generated from protobuf field <code>map<string, string> digest = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDigest($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->digest = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string entry_point = 3;</code>
     * @return string
     */
    public function getEntryPoint()
    {
        return $this->entry_point;
    }

    /**
     * Generated from protobuf field <code>string entry_point = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEntryPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->entry_point = $var;

        return $this;
    }

}


