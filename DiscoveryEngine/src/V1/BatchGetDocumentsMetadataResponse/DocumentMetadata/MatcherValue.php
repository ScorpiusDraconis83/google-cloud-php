<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/document_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\BatchGetDocumentsMetadataResponse\DocumentMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The value of the matcher that was used to match the
 * [Document][google.cloud.discoveryengine.v1.Document].
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.BatchGetDocumentsMetadataResponse.DocumentMetadata.MatcherValue</code>
 */
class MatcherValue extends \Google\Protobuf\Internal\Message
{
    protected $matcher_value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           If match by URI, the URI of the
     *           [Document][google.cloud.discoveryengine.v1.Document].
     *     @type string $fhir_resource
     *           Format:
     *           projects/{project}/locations/{location}/datasets/{dataset}/fhirStores/{fhir_store}/fhir/{resource_type}/{fhir_resource_id}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\DocumentService::initOnce();
        parent::__construct($data);
    }

    /**
     * If match by URI, the URI of the
     * [Document][google.cloud.discoveryengine.v1.Document].
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->readOneof(1);
    }

    public function hasUri()
    {
        return $this->hasOneof(1);
    }

    /**
     * If match by URI, the URI of the
     * [Document][google.cloud.discoveryengine.v1.Document].
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Format:
     * projects/{project}/locations/{location}/datasets/{dataset}/fhirStores/{fhir_store}/fhir/{resource_type}/{fhir_resource_id}
     *
     * Generated from protobuf field <code>string fhir_resource = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getFhirResource()
    {
        return $this->readOneof(2);
    }

    public function hasFhirResource()
    {
        return $this->hasOneof(2);
    }

    /**
     * Format:
     * projects/{project}/locations/{location}/datasets/{dataset}/fhirStores/{fhir_store}/fhir/{resource_type}/{fhir_resource_id}
     *
     * Generated from protobuf field <code>string fhir_resource = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFhirResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMatcherValue()
    {
        return $this->whichOneof("matcher_value");
    }

}


