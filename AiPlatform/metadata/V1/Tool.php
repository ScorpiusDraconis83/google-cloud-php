<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tool.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class Tool
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Openapi::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%google/cloud/aiplatform/v1/tool.protogoogle.cloud.aiplatform.v1google/api/resource.proto(google/cloud/aiplatform/v1/openapi.protogoogle/protobuf/struct.protogoogle/type/latlng.proto"�
ToolS
function_declarations (2/.google.cloud.aiplatform.v1.FunctionDeclarationB�A=
	retrieval (2%.google.cloud.aiplatform.v1.RetrievalB�AW
google_search_retrieval (21.google.cloud.aiplatform.v1.GoogleSearchRetrievalB�AK
code_execution (2..google.cloud.aiplatform.v1.Tool.CodeExecutionB�A
CodeExecution"�
FunctionDeclaration
name (	B�A
description (	B�A;

parameters (2".google.cloud.aiplatform.v1.SchemaB�A9
response (2".google.cloud.aiplatform.v1.SchemaB�A"M
FunctionCall
name (	B�A*
args (2.google.protobuf.StructB�A"U
FunctionResponse
name (	B�A.
response (2.google.protobuf.StructB�A"�
ExecutableCodeJ
language (23.google.cloud.aiplatform.v1.ExecutableCode.LanguageB�A
code (	B�A"0
Language
LANGUAGE_UNSPECIFIED 

PYTHON"�
CodeExecutionResultM
outcome (27.google.cloud.aiplatform.v1.CodeExecutionResult.OutcomeB�A
output (	B�A"e
Outcome
OUTCOME_UNSPECIFIED 

OUTCOME_OK
OUTCOME_FAILED
OUTCOME_DEADLINE_EXCEEDED"�
	RetrievalF
vertex_ai_search (2*.google.cloud.aiplatform.v1.VertexAISearchH F
vertex_rag_store (2*.google.cloud.aiplatform.v1.VertexRagStoreH "
disable_attribution (B�AB
source"�
VertexRagStoreR
rag_resources (26.google.cloud.aiplatform.v1.VertexRagStore.RagResourceB�A$
similarity_top_k (B�AH �-
vector_distance_threshold (B�AH�Q
rag_retrieval_config (2..google.cloud.aiplatform.v1.RagRetrievalConfigB�Ai
RagResource?

rag_corpus (	B+�A�A%
#aiplatform.googleapis.com/RagCorpus
rag_file_ids (	B�AB
_similarity_top_kB
_vector_distance_threshold"(
VertexAISearch
	datastore (	B�A"m
GoogleSearchRetrievalT
dynamic_retrieval_config (22.google.cloud.aiplatform.v1.DynamicRetrievalConfig"�
DynamicRetrievalConfigE
mode (27.google.cloud.aiplatform.v1.DynamicRetrievalConfig.Mode#
dynamic_threshold (B�AH �".
Mode
MODE_UNSPECIFIED 
MODE_DYNAMICB
_dynamic_threshold"�

ToolConfigW
function_calling_config (21.google.cloud.aiplatform.v1.FunctionCallingConfigB�AJ
retrieval_config (2+.google.cloud.aiplatform.v1.RetrievalConfigB�A"�
FunctionCallingConfigI
mode (26.google.cloud.aiplatform.v1.FunctionCallingConfig.ModeB�A#
allowed_function_names (	B�A"9
Mode
MODE_UNSPECIFIED 
AUTO
ANY
NONE"v
RetrievalConfig)
lat_lng (2.google.type.LatLngH �
language_code (	H�B

_lat_lngB
_language_code"�
RagRetrievalConfig
top_k (B�AJ
filter (25.google.cloud.aiplatform.v1.RagRetrievalConfig.FilterB�A�
Filter(
vector_distance_threshold (B�AH *
vector_similarity_threshold (B�AH 
metadata_filter (	B�AB
vector_db_thresholdB�
com.google.cloud.aiplatform.v1B	ToolProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

