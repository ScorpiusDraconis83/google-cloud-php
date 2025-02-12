<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/slsa_provenance.proto

namespace Grafeas\V1\SlsaProvenance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grafeas.v1.SlsaProvenance.Material</code>
 */
class Material extends \Google\Protobuf\Internal\Message
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
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *     @type array|\Google\Protobuf\Internal\MapField $digest
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\SlsaProvenance::initOnce();
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

}


