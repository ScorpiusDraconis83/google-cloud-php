<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace GPBMetadata\Google\Datastore\V1;

class Datastore
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Routing::initOnce();
        \GPBMetadata\Google\Datastore\V1\AggregationResult::initOnce();
        \GPBMetadata\Google\Datastore\V1\Entity::initOnce();
        \GPBMetadata\Google\Datastore\V1\Query::initOnce();
        \GPBMetadata\Google\Datastore\V1\QueryProfile::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�7
#google/datastore/v1/datastore.protogoogle.datastore.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/routing.proto,google/datastore/v1/aggregation_result.proto google/datastore/v1/entity.protogoogle/datastore/v1/query.proto\'google/datastore/v1/query_profile.protogoogle/protobuf/timestamp.proto"�
LookupRequest

project_id (	B�A
database_id	 (	6
read_options (2 .google.datastore.v1.ReadOptions+
keys (2.google.datastore.v1.KeyB�A8
property_mask (2!.google.datastore.v1.PropertyMask"�
LookupResponse0
found (2!.google.datastore.v1.EntityResult2
missing (2!.google.datastore.v1.EntityResult*
deferred (2.google.datastore.v1.Key
transaction (-
	read_time (2.google.protobuf.Timestamp"�
RunQueryRequest

project_id (	B�A
database_id	 (	6
partition_id (2 .google.datastore.v1.PartitionId6
read_options (2 .google.datastore.v1.ReadOptions+
query (2.google.datastore.v1.QueryH 2
	gql_query (2.google.datastore.v1.GqlQueryH 8
property_mask
 (2!.google.datastore.v1.PropertyMaskA
explain_options (2#.google.datastore.v1.ExplainOptionsB�AB

query_type"�
RunQueryResponse4
batch (2%.google.datastore.v1.QueryResultBatch)
query (2.google.datastore.v1.Query
transaction (<
explain_metrics	 (2#.google.datastore.v1.ExplainMetrics"�
RunAggregationQueryRequest

project_id (	B�A
database_id	 (	6
partition_id (2 .google.datastore.v1.PartitionId6
read_options (2 .google.datastore.v1.ReadOptionsB
aggregation_query (2%.google.datastore.v1.AggregationQueryH 2
	gql_query (2.google.datastore.v1.GqlQueryH A
explain_options (2#.google.datastore.v1.ExplainOptionsB�AB

query_type"�
RunAggregationQueryResponse:
batch (2+.google.datastore.v1.AggregationResultBatch4
query (2%.google.datastore.v1.AggregationQuery
transaction (<
explain_metrics	 (2#.google.datastore.v1.ExplainMetrics"�
BeginTransactionRequest

project_id (	B�A
database_id	 (	D
transaction_options
 (2\'.google.datastore.v1.TransactionOptions"/
BeginTransactionResponse
transaction ("Y
RollbackRequest

project_id (	B�A
database_id	 (	
transaction (B�A"
RollbackResponse"�
CommitRequest

project_id (	B�A
database_id	 (	5
mode (2\'.google.datastore.v1.CommitRequest.Mode
transaction (H I
single_use_transaction
 (2\'.google.datastore.v1.TransactionOptionsH 0
	mutations (2.google.datastore.v1.Mutation"F
Mode
MODE_UNSPECIFIED 
TRANSACTIONAL
NON_TRANSACTIONALB
transaction_selector"�
CommitResponse=
mutation_results (2#.google.datastore.v1.MutationResult
index_updates (/
commit_time (2.google.protobuf.Timestamp"o
AllocateIdsRequest

project_id (	B�A
database_id	 (	+
keys (2.google.datastore.v1.KeyB�A"=
AllocateIdsResponse&
keys (2.google.datastore.v1.Key"n
ReserveIdsRequest

project_id (	B�A
database_id	 (	+
keys (2.google.datastore.v1.KeyB�A"
ReserveIdsResponse"�
Mutation-
insert (2.google.datastore.v1.EntityH -
update (2.google.datastore.v1.EntityH -
upsert (2.google.datastore.v1.EntityH *
delete (2.google.datastore.v1.KeyH 
base_version (H1
update_time (2.google.protobuf.TimestampH^
conflict_resolution_strategy
 (28.google.datastore.v1.Mutation.ConflictResolutionStrategy8
property_mask	 (2!.google.datastore.v1.PropertyMaskH
property_transforms (2&.google.datastore.v1.PropertyTransformB�A"R
ConflictResolutionStrategy
STRATEGY_UNSPECIFIED 
SERVER_VALUE
FAILB
	operationB
conflict_detection_strategy"�
PropertyTransform
property (	B�AQ
set_to_server_value (22.google.datastore.v1.PropertyTransform.ServerValueH /
	increment (2.google.datastore.v1.ValueH -
maximum (2.google.datastore.v1.ValueH -
minimum (2.google.datastore.v1.ValueH B
append_missing_elements (2.google.datastore.v1.ArrayValueH @
remove_all_from_array (2.google.datastore.v1.ArrayValueH "=
ServerValue
SERVER_VALUE_UNSPECIFIED 
REQUEST_TIMEB
transform_type"�
MutationResult%
key (2.google.datastore.v1.Key
version (/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp
conflict_detected (5
transform_results (2.google.datastore.v1.Value"
PropertyMask
paths (	"�
ReadOptionsL
read_consistency (20.google.datastore.v1.ReadOptions.ReadConsistencyH 
transaction (H B
new_transaction (2\'.google.datastore.v1.TransactionOptionsH /
	read_time (2.google.protobuf.TimestampH "M
ReadConsistency 
READ_CONSISTENCY_UNSPECIFIED 

STRONG
EVENTUALB
consistency_type"�
TransactionOptionsG

read_write (21.google.datastore.v1.TransactionOptions.ReadWriteH E
	read_only (20.google.datastore.v1.TransactionOptions.ReadOnlyH )
	ReadWrite
previous_transaction (9
ReadOnly-
	read_time (2.google.protobuf.TimestampB
mode2�
	Datastore�
Lookup".google.datastore.v1.LookupRequest#.google.datastore.v1.LookupResponse"m�Aproject_id,read_options,keys���%" /v1/projects/{project_id}:lookup:*���

project_id
database_id�
RunQuery$.google.datastore.v1.RunQueryRequest%.google.datastore.v1.RunQueryResponse"P���\'""/v1/projects/{project_id}:runQuery:*���

project_id
database_id�
RunAggregationQuery/.google.datastore.v1.RunAggregationQueryRequest0.google.datastore.v1.RunAggregationQueryResponse"[���2"-/v1/projects/{project_id}:runAggregationQuery:*���

project_id
database_id�
BeginTransaction,.google.datastore.v1.BeginTransactionRequest-.google.datastore.v1.BeginTransactionResponse"e�A
project_id���/"*/v1/projects/{project_id}:beginTransaction:*���

project_id
database_id�
Commit".google.datastore.v1.CommitRequest#.google.datastore.v1.CommitResponse"��A%project_id,mode,transaction,mutations�Aproject_id,mode,mutations���%" /v1/projects/{project_id}:commit:*���

project_id
database_id�
Rollback$.google.datastore.v1.RollbackRequest%.google.datastore.v1.RollbackResponse"i�Aproject_id,transaction���\'""/v1/projects/{project_id}:rollback:*���

project_id
database_id�
AllocateIds\'.google.datastore.v1.AllocateIdsRequest(.google.datastore.v1.AllocateIdsResponse"e�Aproject_id,keys���*"%/v1/projects/{project_id}:allocateIds:*���

project_id
database_id�

ReserveIds&.google.datastore.v1.ReserveIdsRequest\'.google.datastore.v1.ReserveIdsResponse"d�Aproject_id,keys���)"$/v1/projects/{project_id}:reserveIds:*���

project_id
database_idv�Adatastore.googleapis.com�AXhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/datastoreB�
com.google.datastore.v1BDatastoreProtoPZ;cloud.google.com/go/datastore/apiv1/datastorepb;datastorepb�Google.Cloud.Datastore.V1�Google\\Cloud\\Datastore\\V1�Google::Cloud::Datastore::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

