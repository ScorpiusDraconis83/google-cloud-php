<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/yum_artifact.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Google Cloud Storage location where the artifacts currently reside.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.ImportYumArtifactsGcsSource</code>
 */
class ImportYumArtifactsGcsSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud Storage paths URI (e.g., gs://my_bucket//my_object).
     *
     * Generated from protobuf field <code>repeated string uris = 1;</code>
     */
    private $uris;
    /**
     * Supports URI wildcards for matching multiple objects from a single URI.
     *
     * Generated from protobuf field <code>bool use_wildcards = 2;</code>
     */
    protected $use_wildcards = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $uris
     *           Cloud Storage paths URI (e.g., gs://my_bucket//my_object).
     *     @type bool $use_wildcards
     *           Supports URI wildcards for matching multiple objects from a single URI.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\YumArtifact::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Storage paths URI (e.g., gs://my_bucket//my_object).
     *
     * Generated from protobuf field <code>repeated string uris = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUris()
    {
        return $this->uris;
    }

    /**
     * Cloud Storage paths URI (e.g., gs://my_bucket//my_object).
     *
     * Generated from protobuf field <code>repeated string uris = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->uris = $arr;

        return $this;
    }

    /**
     * Supports URI wildcards for matching multiple objects from a single URI.
     *
     * Generated from protobuf field <code>bool use_wildcards = 2;</code>
     * @return bool
     */
    public function getUseWildcards()
    {
        return $this->use_wildcards;
    }

    /**
     * Supports URI wildcards for matching multiple objects from a single URI.
     *
     * Generated from protobuf field <code>bool use_wildcards = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseWildcards($var)
    {
        GPBUtil::checkBool($var);
        $this->use_wildcards = $var;

        return $this;
    }

}

