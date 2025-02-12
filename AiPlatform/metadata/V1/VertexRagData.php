<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_data.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class VertexRagData
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ApiAuth::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Io::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
� 
0google/cloud/aiplatform/v1/vertex_rag_data.protogoogle.cloud.aiplatform.v1google/api/resource.proto)google/cloud/aiplatform/v1/api_auth.proto#google/cloud/aiplatform/v1/io.protogoogle/protobuf/timestamp.proto"�
RagEmbeddingModelConfigr
vertex_prediction_endpoint (2L.google.cloud.aiplatform.v1.RagEmbeddingModelConfig.VertexPredictionEndpointH �
VertexPredictionEndpoint<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint6
model (	B\'�A�A!
aiplatform.googleapis.com/Model
model_version_id (	B�AB
model_config"�
RagVectorDbConfigT
rag_managed_db (2:.google.cloud.aiplatform.v1.RagVectorDbConfig.RagManagedDbH J
pinecone (26.google.cloud.aiplatform.v1.RagVectorDbConfig.PineconeH `
vertex_vector_search (2@.google.cloud.aiplatform.v1.RagVectorDbConfig.VertexVectorSearchH 5
api_auth (2#.google.cloud.aiplatform.v1.ApiAuth_
rag_embedding_model_config (23.google.cloud.aiplatform.v1.RagEmbeddingModelConfigB�A�A
RagManagedDb
Pinecone

index_name (	;
VertexVectorSearch
index_endpoint (	
index (	B
	vector_db"�

FileStatus@
state (2,.google.cloud.aiplatform.v1.FileStatus.StateB�A
error_status (	B�A"5
State
STATE_UNSPECIFIED 

ACTIVE	
ERROR"�
CorpusStatusB
state (2..google.cloud.aiplatform.v1.CorpusStatus.StateB�A
error_status (	B�A"<
State
UNKNOWN 
INITIALIZED

ACTIVE	
ERROR"�
	RagCorpus
name (	B�A
display_name (	B�A
description (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AD
corpus_status (2(.google.cloud.aiplatform.v1.CorpusStatusB�AQ
vector_db_config	 (2-.google.cloud.aiplatform.v1.RagVectorDbConfigB�A�AH :��A}
#aiplatform.googleapis.com/RagCorpus?projects/{project}/locations/{location}/ragCorpora/{rag_corpus}*
ragCorpora2	ragCorpusB
backend_config"�
RagFile@

gcs_source (2%.google.cloud.aiplatform.v1.GcsSourceB�AH Q
google_drive_source	 (2-.google.cloud.aiplatform.v1.GoogleDriveSourceB�AH S
direct_upload_source
 (2..google.cloud.aiplatform.v1.DirectUploadSourceB�AH ?
slack_source (2\'.google.cloud.aiplatform.v1.SlackSourceH =
jira_source (2&.google.cloud.aiplatform.v1.JiraSourceH L
share_point_sources (2-.google.cloud.aiplatform.v1.SharePointSourcesH 
name (	B�A
display_name (	B�A
description (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A@
file_status (2&.google.cloud.aiplatform.v1.FileStatusB�A:��A�
!aiplatform.googleapis.com/RagFileSprojects/{project}/locations/{location}/ragCorpora/{rag_corpus}/ragFiles/{rag_file}*ragFiles2ragFileB
rag_file_source"�
RagFileChunkingConfigf
fixed_length_chunking (2E.google.cloud.aiplatform.v1.RagFileChunkingConfig.FixedLengthChunkingH @
FixedLengthChunking

chunk_size (
chunk_overlap (B
chunking_config"r
RagFileTransformationConfigS
rag_file_chunking_config (21.google.cloud.aiplatform.v1.RagFileChunkingConfig"v
UploadRagFileConfig_
rag_file_transformation_config (27.google.cloud.aiplatform.v1.RagFileTransformationConfig"�
ImportRagFilesConfig;

gcs_source (2%.google.cloud.aiplatform.v1.GcsSourceH L
google_drive_source (2-.google.cloud.aiplatform.v1.GoogleDriveSourceH ?
slack_source (2\'.google.cloud.aiplatform.v1.SlackSourceH =
jira_source (2&.google.cloud.aiplatform.v1.JiraSourceH L
share_point_sources (2-.google.cloud.aiplatform.v1.SharePointSourcesH R
partial_failure_gcs_sink (2*.google.cloud.aiplatform.v1.GcsDestinationBH\\
partial_failure_bigquery_sink (2/.google.cloud.aiplatform.v1.BigQueryDestinationBH_
rag_file_transformation_config (27.google.cloud.aiplatform.v1.RagFileTransformationConfig+
max_embedding_requests_per_min (B�AB
import_sourceB
partial_failure_sinkB�
com.google.cloud.aiplatform.v1BVertexRagDataProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

