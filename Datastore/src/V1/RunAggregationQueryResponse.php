<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for
 * [Datastore.RunAggregationQuery][google.datastore.v1.Datastore.RunAggregationQuery].
 *
 * Generated from protobuf message <code>google.datastore.v1.RunAggregationQueryResponse</code>
 */
class RunAggregationQueryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A batch of aggregation results. Always present.
     *
     * Generated from protobuf field <code>.google.datastore.v1.AggregationResultBatch batch = 1;</code>
     */
    private $batch = null;
    /**
     * The parsed form of the `GqlQuery` from the request, if it was set.
     *
     * Generated from protobuf field <code>.google.datastore.v1.AggregationQuery query = 2;</code>
     */
    private $query = null;
    /**
     * The identifier of the transaction that was started as part of this
     * RunAggregationQuery request.
     * Set only when
     * [ReadOptions.new_transaction][google.datastore.v1.ReadOptions.new_transaction]
     * was set in
     * [RunAggregationQueryRequest.read_options][google.datastore.v1.RunAggregationQueryRequest.read_options].
     *
     * Generated from protobuf field <code>bytes transaction = 5;</code>
     */
    private $transaction = '';
    /**
     * Query explain metrics. This is only present when the
     * [RunAggregationQueryRequest.explain_options][google.datastore.v1.RunAggregationQueryRequest.explain_options]
     * is provided, and it is sent only once with the last response in the stream.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ExplainMetrics explain_metrics = 9;</code>
     */
    private $explain_metrics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastore\V1\AggregationResultBatch $batch
     *           A batch of aggregation results. Always present.
     *     @type \Google\Cloud\Datastore\V1\AggregationQuery $query
     *           The parsed form of the `GqlQuery` from the request, if it was set.
     *     @type string $transaction
     *           The identifier of the transaction that was started as part of this
     *           RunAggregationQuery request.
     *           Set only when
     *           [ReadOptions.new_transaction][google.datastore.v1.ReadOptions.new_transaction]
     *           was set in
     *           [RunAggregationQueryRequest.read_options][google.datastore.v1.RunAggregationQueryRequest.read_options].
     *     @type \Google\Cloud\Datastore\V1\ExplainMetrics $explain_metrics
     *           Query explain metrics. This is only present when the
     *           [RunAggregationQueryRequest.explain_options][google.datastore.v1.RunAggregationQueryRequest.explain_options]
     *           is provided, and it is sent only once with the last response in the stream.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct($data);
    }

    /**
     * A batch of aggregation results. Always present.
     *
     * Generated from protobuf field <code>.google.datastore.v1.AggregationResultBatch batch = 1;</code>
     * @return \Google\Cloud\Datastore\V1\AggregationResultBatch|null
     */
    public function getBatch()
    {
        return $this->batch;
    }

    public function hasBatch()
    {
        return isset($this->batch);
    }

    public function clearBatch()
    {
        unset($this->batch);
    }

    /**
     * A batch of aggregation results. Always present.
     *
     * Generated from protobuf field <code>.google.datastore.v1.AggregationResultBatch batch = 1;</code>
     * @param \Google\Cloud\Datastore\V1\AggregationResultBatch $var
     * @return $this
     */
    public function setBatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\AggregationResultBatch::class);
        $this->batch = $var;

        return $this;
    }

    /**
     * The parsed form of the `GqlQuery` from the request, if it was set.
     *
     * Generated from protobuf field <code>.google.datastore.v1.AggregationQuery query = 2;</code>
     * @return \Google\Cloud\Datastore\V1\AggregationQuery|null
     */
    public function getQuery()
    {
        return $this->query;
    }

    public function hasQuery()
    {
        return isset($this->query);
    }

    public function clearQuery()
    {
        unset($this->query);
    }

    /**
     * The parsed form of the `GqlQuery` from the request, if it was set.
     *
     * Generated from protobuf field <code>.google.datastore.v1.AggregationQuery query = 2;</code>
     * @param \Google\Cloud\Datastore\V1\AggregationQuery $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\AggregationQuery::class);
        $this->query = $var;

        return $this;
    }

    /**
     * The identifier of the transaction that was started as part of this
     * RunAggregationQuery request.
     * Set only when
     * [ReadOptions.new_transaction][google.datastore.v1.ReadOptions.new_transaction]
     * was set in
     * [RunAggregationQueryRequest.read_options][google.datastore.v1.RunAggregationQueryRequest.read_options].
     *
     * Generated from protobuf field <code>bytes transaction = 5;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * The identifier of the transaction that was started as part of this
     * RunAggregationQuery request.
     * Set only when
     * [ReadOptions.new_transaction][google.datastore.v1.ReadOptions.new_transaction]
     * was set in
     * [RunAggregationQueryRequest.read_options][google.datastore.v1.RunAggregationQueryRequest.read_options].
     *
     * Generated from protobuf field <code>bytes transaction = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction = $var;

        return $this;
    }

    /**
     * Query explain metrics. This is only present when the
     * [RunAggregationQueryRequest.explain_options][google.datastore.v1.RunAggregationQueryRequest.explain_options]
     * is provided, and it is sent only once with the last response in the stream.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ExplainMetrics explain_metrics = 9;</code>
     * @return \Google\Cloud\Datastore\V1\ExplainMetrics|null
     */
    public function getExplainMetrics()
    {
        return $this->explain_metrics;
    }

    public function hasExplainMetrics()
    {
        return isset($this->explain_metrics);
    }

    public function clearExplainMetrics()
    {
        unset($this->explain_metrics);
    }

    /**
     * Query explain metrics. This is only present when the
     * [RunAggregationQueryRequest.explain_options][google.datastore.v1.RunAggregationQueryRequest.explain_options]
     * is provided, and it is sent only once with the last response in the stream.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ExplainMetrics explain_metrics = 9;</code>
     * @param \Google\Cloud\Datastore\V1\ExplainMetrics $var
     * @return $this
     */
    public function setExplainMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\ExplainMetrics::class);
        $this->explain_metrics = $var;

        return $this;
    }

}

