<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/answer.proto

namespace Google\Cloud\DiscoveryEngine\V1\Answer\Step\Action;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Observation.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Answer.Step.Action.Observation</code>
 */
class Observation extends \Google\Protobuf\Internal\Message
{
    /**
     * Search results observed by the search action, it can be snippets info
     * or chunk info, depending on the citation type set by the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.Step.Action.Observation.SearchResult search_results = 2;</code>
     */
    private $search_results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Answer\Step\Action\Observation\SearchResult>|\Google\Protobuf\Internal\RepeatedField $search_results
     *           Search results observed by the search action, it can be snippets info
     *           or chunk info, depending on the citation type set by the user.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Answer::initOnce();
        parent::__construct($data);
    }

    /**
     * Search results observed by the search action, it can be snippets info
     * or chunk info, depending on the citation type set by the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.Step.Action.Observation.SearchResult search_results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSearchResults()
    {
        return $this->search_results;
    }

    /**
     * Search results observed by the search action, it can be snippets info
     * or chunk info, depending on the citation type set by the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Answer.Step.Action.Observation.SearchResult search_results = 2;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Answer\Step\Action\Observation\SearchResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSearchResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Answer\Step\Action\Observation\SearchResult::class);
        $this->search_results = $arr;

        return $this;
    }

}


