<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains a signed Cloud Storage URLs.
 *
 * Generated from protobuf message <code>google.cloud.config.v1.PreviewResult</code>
 */
class PreviewResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Plan binary signed URL
     *
     * Generated from protobuf field <code>string binary_signed_uri = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $binary_signed_uri = '';
    /**
     * Output only. Plan JSON signed URL
     *
     * Generated from protobuf field <code>string json_signed_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $json_signed_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $binary_signed_uri
     *           Output only. Plan binary signed URL
     *     @type string $json_signed_uri
     *           Output only. Plan JSON signed URL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Config\V1\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Plan binary signed URL
     *
     * Generated from protobuf field <code>string binary_signed_uri = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getBinarySignedUri()
    {
        return $this->binary_signed_uri;
    }

    /**
     * Output only. Plan binary signed URL
     *
     * Generated from protobuf field <code>string binary_signed_uri = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setBinarySignedUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->binary_signed_uri = $var;

        return $this;
    }

    /**
     * Output only. Plan JSON signed URL
     *
     * Generated from protobuf field <code>string json_signed_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getJsonSignedUri()
    {
        return $this->json_signed_uri;
    }

    /**
     * Output only. Plan JSON signed URL
     *
     * Generated from protobuf field <code>string json_signed_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setJsonSignedUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->json_signed_uri = $var;

        return $this;
    }

}

