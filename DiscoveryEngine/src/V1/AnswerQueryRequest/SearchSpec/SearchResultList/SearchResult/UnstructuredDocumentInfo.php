<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Unstructured document information.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo</code>
 */
class UnstructuredDocumentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Document resource name.
     *
     * Generated from protobuf field <code>string document = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $document = '';
    /**
     * URI for the document.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    protected $uri = '';
    /**
     * Title.
     *
     * Generated from protobuf field <code>string title = 3;</code>
     */
    protected $title = '';
    /**
     * List of document contexts. The content will be used for Answer
     * Generation. This is supposed to be the main content of the document
     * that can be long and comprehensive.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.DocumentContext document_contexts = 4;</code>
     */
    private $document_contexts;
    /**
     * List of extractive segments.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.ExtractiveSegment extractive_segments = 5;</code>
     */
    private $extractive_segments;
    /**
     * Deprecated: This field is deprecated and will have no effect on
     * the Answer generation.
     * Please use document_contexts and extractive_segments fields.
     * List of extractive answers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.ExtractiveAnswer extractive_answers = 6 [deprecated = true];</code>
     * @deprecated
     */
    private $extractive_answers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $document
     *           Document resource name.
     *     @type string $uri
     *           URI for the document.
     *     @type string $title
     *           Title.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo\DocumentContext>|\Google\Protobuf\Internal\RepeatedField $document_contexts
     *           List of document contexts. The content will be used for Answer
     *           Generation. This is supposed to be the main content of the document
     *           that can be long and comprehensive.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo\ExtractiveSegment>|\Google\Protobuf\Internal\RepeatedField $extractive_segments
     *           List of extractive segments.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo\ExtractiveAnswer>|\Google\Protobuf\Internal\RepeatedField $extractive_answers
     *           Deprecated: This field is deprecated and will have no effect on
     *           the Answer generation.
     *           Please use document_contexts and extractive_segments fields.
     *           List of extractive answers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Document resource name.
     *
     * Generated from protobuf field <code>string document = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Document resource name.
     *
     * Generated from protobuf field <code>string document = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkString($var, True);
        $this->document = $var;

        return $this;
    }

    /**
     * URI for the document.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * URI for the document.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
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
     * Title.
     *
     * Generated from protobuf field <code>string title = 3;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Title.
     *
     * Generated from protobuf field <code>string title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * List of document contexts. The content will be used for Answer
     * Generation. This is supposed to be the main content of the document
     * that can be long and comprehensive.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.DocumentContext document_contexts = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocumentContexts()
    {
        return $this->document_contexts;
    }

    /**
     * List of document contexts. The content will be used for Answer
     * Generation. This is supposed to be the main content of the document
     * that can be long and comprehensive.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.DocumentContext document_contexts = 4;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo\DocumentContext>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocumentContexts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo\DocumentContext::class);
        $this->document_contexts = $arr;

        return $this;
    }

    /**
     * List of extractive segments.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.ExtractiveSegment extractive_segments = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtractiveSegments()
    {
        return $this->extractive_segments;
    }

    /**
     * List of extractive segments.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.ExtractiveSegment extractive_segments = 5;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo\ExtractiveSegment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtractiveSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo\ExtractiveSegment::class);
        $this->extractive_segments = $arr;

        return $this;
    }

    /**
     * Deprecated: This field is deprecated and will have no effect on
     * the Answer generation.
     * Please use document_contexts and extractive_segments fields.
     * List of extractive answers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.ExtractiveAnswer extractive_answers = 6 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getExtractiveAnswers()
    {
        @trigger_error('extractive_answers is deprecated.', E_USER_DEPRECATED);
        return $this->extractive_answers;
    }

    /**
     * Deprecated: This field is deprecated and will have no effect on
     * the Answer generation.
     * Please use document_contexts and extractive_segments fields.
     * List of extractive answers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.ExtractiveAnswer extractive_answers = 6 [deprecated = true];</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo\ExtractiveAnswer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setExtractiveAnswers($var)
    {
        @trigger_error('extractive_answers is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo\ExtractiveAnswer::class);
        $this->extractive_answers = $arr;

        return $this;
    }

}


