<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/grounded_generation_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.GenerateGroundedContentResponse</code>
 */
class GenerateGroundedContentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate candidates = 1;</code>
     */
    private $candidates;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate>|\Google\Protobuf\Internal\RepeatedField $candidates
     *           Generated candidates.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\GroundedGenerationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate candidates = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCandidates()
    {
        return $this->candidates;
    }

    /**
     * Generated candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate candidates = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCandidates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate::class);
        $this->candidates = $arr;

        return $this;
    }

}

