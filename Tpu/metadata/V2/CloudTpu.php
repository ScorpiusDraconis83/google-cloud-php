<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace GPBMetadata\Google\Cloud\Tpu\V2;

class CloudTpu
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
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Interval::initOnce();
        $pool->internalAddGeneratedFile(
            '
�h
#google/cloud/tpu/v2/cloud_tpu.protogoogle.cloud.tpu.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/type/interval.proto"e
GuestAttributes

query_path (	>
query_value (2).google.cloud.tpu.v2.GuestAttributesValue"P
GuestAttributesValue8
items (2).google.cloud.tpu.v2.GuestAttributesEntry"E
GuestAttributesEntry
	namespace (	
key (	
value (	"�
AttachedDisk
source_disk (	8
mode (2*.google.cloud.tpu.v2.AttachedDisk.DiskMode"D
DiskMode
DISK_MODE_UNSPECIFIED 

READ_WRITE
	READ_ONLY"L
SchedulingConfig
preemptible (
reserved (
spot (B�A"m
NetworkEndpoint

ip_address (	
port (8
access_config (2!.google.cloud.tpu.v2.AccessConfig"(
AccessConfig
external_ip (	B�A"�
NetworkConfig
network (	

subnetwork (	
enable_external_ips (
can_ip_forward (
queue_count (B�A".
ServiceAccount
email (	
scope (	"�
Node
name (	B�A�A
description (	
accelerator_type (	B�A3
state	 (2.google.cloud.tpu.v2.Node.StateB�A
health_description
 (	B�A
runtime_version (	B�A:
network_config$ (2".google.cloud.tpu.v2.NetworkConfig@
network_configs1 (2".google.cloud.tpu.v2.NetworkConfigB�A

cidr_block (	<
service_account% (2#.google.cloud.tpu.v2.ServiceAccount4
create_time (2.google.protobuf.TimestampB�A@
scheduling_config (2%.google.cloud.tpu.v2.SchedulingConfigD
network_endpoints (2$.google.cloud.tpu.v2.NetworkEndpointB�A0
health (2 .google.cloud.tpu.v2.Node.Health5
labels (2%.google.cloud.tpu.v2.Node.LabelsEntry9
metadata" (2\'.google.cloud.tpu.v2.Node.MetadataEntry
tags( (	
id! (B�A5

data_disks) (2!.google.cloud.tpu.v2.AttachedDisk>
api_version& (2$.google.cloud.tpu.v2.Node.ApiVersionB�A3
symptoms\' (2.google.cloud.tpu.v2.SymptomB�AM
shielded_instance_config- (2+.google.cloud.tpu.v2.ShieldedInstanceConfigB
accelerator_config. (2&.google.cloud.tpu.v2.AcceleratorConfig
queued_resource/ (	B�A
multislice_node0 (B�A-
LabelsEntry
key (	
value (	:8/
MetadataEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 
CREATING	
READY

RESTARTING
	REIMAGING
DELETING
	REPAIRING
STOPPED
STOPPING	
STARTING

	PREEMPTED

TERMINATED

HIDING

HIDDEN
UNHIDING
UNKNOWN"o
Health
HEALTH_UNSPECIFIED 
HEALTHY
TIMEOUT
UNHEALTHY_TENSORFLOW
UNHEALTHY_MAINTENANCE"W

ApiVersion
API_VERSION_UNSPECIFIED 
	V1_ALPHA1
V1
	V2_ALPHA1
V2:R�AO
tpu.googleapis.com/Node4projects/{project}/locations/{location}/nodes/{node}"�
QueuedResource
name (	B�A�A4
create_time (2.google.protobuf.TimestampB�A;
tpu (2\'.google.cloud.tpu.v2.QueuedResource.TpuB�AH =
spot (2(.google.cloud.tpu.v2.QueuedResource.SpotB�AHI

guaranteed (2..google.cloud.tpu.v2.QueuedResource.GuaranteedB�AHP
queueing_policy (22.google.cloud.tpu.v2.QueuedResource.QueueingPolicyB�A<
state (2(.google.cloud.tpu.v2.QueuedResourceStateB�A
reservation_name (	B�A�
TpuH
	node_spec (20.google.cloud.tpu.v2.QueuedResource.Tpu.NodeSpecB�A�
NodeSpec9
parent (	B)�A�A#
!locations.googleapis.com/Location
node_id (	B�AH c
multislice_params (2A.google.cloud.tpu.v2.QueuedResource.Tpu.NodeSpec.MultisliceParamsB�AH ,
node (2.google.cloud.tpu.v2.NodeB�AH
MultisliceParams

node_count (B�A
node_id_prefix (	B�AB
name_strategy
SpotB

Guaranteed4
min_duration (2.google.protobuf.DurationB�A�
QueueingPolicy>
valid_until_duration (2.google.protobuf.DurationB�AH ;
valid_until_time (2.google.protobuf.TimestampB�AH >
valid_after_duration (2.google.protobuf.DurationB�AH ;
valid_after_time (2.google.protobuf.TimestampB�AH 4
valid_interval (2.google.type.IntervalB�AH B
start_timing_constraints:��A�
!tpu.googleapis.com/QueuedResourceIprojects/{project}/locations/{location}/queuedResources/{queued_resource}*queuedResources2queuedResourceB

resourceB
tier"�

QueuedResourceStateB
state (2..google.cloud.tpu.v2.QueuedResourceState.StateB�AS
creating_data (25.google.cloud.tpu.v2.QueuedResourceState.CreatingDataB�AH S
accepted_data (25.google.cloud.tpu.v2.QueuedResourceState.AcceptedDataB�AH [
provisioning_data (29.google.cloud.tpu.v2.QueuedResourceState.ProvisioningDataB�AH O
failed_data (23.google.cloud.tpu.v2.QueuedResourceState.FailedDataB�AH S
deleting_data (25.google.cloud.tpu.v2.QueuedResourceState.DeletingDataB�AH O
active_data (23.google.cloud.tpu.v2.QueuedResourceState.ActiveDataB�AH W
suspending_data (27.google.cloud.tpu.v2.QueuedResourceState.SuspendingDataB�AH U
suspended_data	 (26.google.cloud.tpu.v2.QueuedResourceState.SuspendedDataB�AH U
state_initiator
 (27.google.cloud.tpu.v2.QueuedResourceState.StateInitiatorB�A
CreatingData
AcceptedData
ProvisioningData4

FailedData&
error (2.google.rpc.StatusB�A
DeletingData

ActiveData
SuspendingData
SuspendedData"�
State
STATE_UNSPECIFIED 
CREATING
ACCEPTED
PROVISIONING

FAILED
DELETING

ACTIVE

SUSPENDING
	SUSPENDED
WAITING_FOR_RESOURCES	"H
StateInitiator
STATE_INITIATOR_UNSPECIFIED 
USER
SERVICEB

state_data"j
ListNodesRequest/
parent (	B�A�Atpu.googleapis.com/Node
	page_size (

page_token (	"k
ListNodesResponse(
nodes (2.google.cloud.tpu.v2.Node
next_page_token (	
unreachable (	"?
GetNodeRequest-
name (	B�A�A
tpu.googleapis.com/Node"�
CreateNodeRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
node_id (	,
node (2.google.cloud.tpu.v2.NodeB�A"B
DeleteNodeRequest-
name (	B�A�A
tpu.googleapis.com/Node"@
StopNodeRequest-
name (	B�A�A
tpu.googleapis.com/Node"A
StartNodeRequest-
name (	B�A�A
tpu.googleapis.com/Node"w
UpdateNodeRequest4
update_mask (2.google.protobuf.FieldMaskB�A,
node (2.google.cloud.tpu.v2.NodeB�A"�
ListQueuedResourcesRequest9
parent (	B)�A�A#!tpu.googleapis.com/QueuedResource
	page_size (B�A

page_token (	B�A"�
ListQueuedResourcesResponse=
queued_resources (2#.google.cloud.tpu.v2.QueuedResource
next_page_token (	
unreachable (	"S
GetQueuedResourceRequest7
name (	B)�A�A#
!tpu.googleapis.com/QueuedResource"�
CreateQueuedResourceRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
queued_resource_id (	B�AA
queued_resource (2#.google.cloud.tpu.v2.QueuedResourceB�A

request_id (	B�A"�
DeleteQueuedResourceRequest7
name (	B)�A�A#
!tpu.googleapis.com/QueuedResource

request_id (	B�A
force (B�A"U
ResetQueuedResourceRequest7
name (	B)�A�A#
!tpu.googleapis.com/QueuedResource" 
ServiceIdentity
email (	"[
GenerateServiceIdentityRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location"Y
GenerateServiceIdentityResponse6
identity (2$.google.cloud.tpu.v2.ServiceIdentity"�
AcceleratorType
name (	
type (	C
accelerator_configs (2&.google.cloud.tpu.v2.AcceleratorConfig:t�Aq
"tpu.googleapis.com/AcceleratorTypeKprojects/{project}/locations/{location}/acceleratorTypes/{accelerator_type}"U
GetAcceleratorTypeRequest8
name (	B*�A�A$
"tpu.googleapis.com/AcceleratorType"�
ListAcceleratorTypesRequest:
parent (	B*�A�A$"tpu.googleapis.com/AcceleratorType
	page_size (

page_token (	
filter (	
order_by (	"�
ListAcceleratorTypesResponse?
accelerator_types (2$.google.cloud.tpu.v2.AcceleratorType
next_page_token (	
unreachable (	"�
RuntimeVersion
name (	
version (	:q�An
!tpu.googleapis.com/RuntimeVersionIprojects/{project}/locations/{location}/runtimeVersions/{runtime_version}"S
GetRuntimeVersionRequest7
name (	B)�A�A#
!tpu.googleapis.com/RuntimeVersion"�
ListRuntimeVersionsRequest9
parent (	B)�A�A#!tpu.googleapis.com/RuntimeVersion
	page_size (

page_token (	
filter (	
order_by (	"�
ListRuntimeVersionsResponse=
runtime_versions (2#.google.cloud.tpu.v2.RuntimeVersion
next_page_token (	
unreachable (	"�
OperationMetadata/
create_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
target (	
verb (	
status_detail (	
cancel_requested (
api_version (	"�
Symptom/
create_time (2.google.protobuf.Timestamp>
symptom_type (2(.google.cloud.tpu.v2.Symptom.SymptomType
details (	
	worker_id (	"�
SymptomType
SYMPTOM_TYPE_UNSPECIFIED 

LOW_MEMORY
OUT_OF_MEMORY
EXECUTE_TIMED_OUT
MESH_BUILD_FAIL
HBM_OUT_OF_MEMORY
PROJECT_ABUSE"r
GetGuestAttributesRequest-
name (	B�A�A
tpu.googleapis.com/Node

query_path (	

worker_ids (	"\\
GetGuestAttributesResponse>
guest_attributes (2$.google.cloud.tpu.v2.GuestAttributes"�
AcceleratorConfig>
type (2+.google.cloud.tpu.v2.AcceleratorConfig.TypeB�A
topology (	B�A"V
Type
TYPE_UNSPECIFIED 
V2
V3
V4

V5LITE_POD	
V5P

V6E"4
ShieldedInstanceConfig
enable_secure_boot (2�
Tpu�
	ListNodes%.google.cloud.tpu.v2.ListNodesRequest&.google.cloud.tpu.v2.ListNodesResponse":�Aparent���+)/v2/{parent=projects/*/locations/*}/nodes�
GetNode#.google.cloud.tpu.v2.GetNodeRequest.google.cloud.tpu.v2.Node"8�Aname���+)/v2/{name=projects/*/locations/*/nodes/*}�

CreateNode&.google.cloud.tpu.v2.CreateNodeRequest.google.longrunning.Operation"i�A
NodeOperationMetadata�Aparent,node,node_id���1")/v2/{parent=projects/*/locations/*}/nodes:node�

DeleteNode&.google.cloud.tpu.v2.DeleteNodeRequest.google.longrunning.Operation"e�A*
google.protobuf.EmptyOperationMetadata�Aname���+*)/v2/{name=projects/*/locations/*/nodes/*}�
StopNode$.google.cloud.tpu.v2.StopNodeRequest.google.longrunning.Operation"U�A
NodeOperationMetadata���3"./v2/{name=projects/*/locations/*/nodes/*}:stop:*�
	StartNode%.google.cloud.tpu.v2.StartNodeRequest.google.longrunning.Operation"V�A
NodeOperationMetadata���4"//v2/{name=projects/*/locations/*/nodes/*}:start:*�

UpdateNode&.google.cloud.tpu.v2.UpdateNodeRequest.google.longrunning.Operation"k�A
NodeOperationMetadata�Anode,update_mask���62./v2/{node.name=projects/*/locations/*/nodes/*}:node�
ListQueuedResources/.google.cloud.tpu.v2.ListQueuedResourcesRequest0.google.cloud.tpu.v2.ListQueuedResourcesResponse"D�Aparent���53/v2/{parent=projects/*/locations/*}/queuedResources�
GetQueuedResource-.google.cloud.tpu.v2.GetQueuedResourceRequest#.google.cloud.tpu.v2.QueuedResource"B�Aname���53/v2/{name=projects/*/locations/*/queuedResources/*}�
CreateQueuedResource0.google.cloud.tpu.v2.CreateQueuedResourceRequest.google.longrunning.Operation"��A#
QueuedResourceOperationMetadata�A)parent,queued_resource,queued_resource_id���F"3/v2/{parent=projects/*/locations/*}/queuedResources:queued_resource�
DeleteQueuedResource0.google.cloud.tpu.v2.DeleteQueuedResourceRequest.google.longrunning.Operation"o�A*
google.protobuf.EmptyOperationMetadata�Aname���5*3/v2/{name=projects/*/locations/*/queuedResources/*}�
ResetQueuedResource/.google.cloud.tpu.v2.ResetQueuedResourceRequest.google.longrunning.Operation"q�A#
QueuedResourceOperationMetadata�Aname���>"9/v2/{name=projects/*/locations/*/queuedResources/*}:reset:*�
GenerateServiceIdentity3.google.cloud.tpu.v2.GenerateServiceIdentityRequest4.google.cloud.tpu.v2.GenerateServiceIdentityResponse"F���@";/v2/{parent=projects/*/locations/*}:generateServiceIdentity:*�
ListAcceleratorTypes0.google.cloud.tpu.v2.ListAcceleratorTypesRequest1.google.cloud.tpu.v2.ListAcceleratorTypesResponse"E�Aparent���64/v2/{parent=projects/*/locations/*}/acceleratorTypes�
GetAcceleratorType..google.cloud.tpu.v2.GetAcceleratorTypeRequest$.google.cloud.tpu.v2.AcceleratorType"C�Aname���64/v2/{name=projects/*/locations/*/acceleratorTypes/*}�
ListRuntimeVersions/.google.cloud.tpu.v2.ListRuntimeVersionsRequest0.google.cloud.tpu.v2.ListRuntimeVersionsResponse"D�Aparent���53/v2/{parent=projects/*/locations/*}/runtimeVersions�
GetRuntimeVersion-.google.cloud.tpu.v2.GetRuntimeVersionRequest#.google.cloud.tpu.v2.RuntimeVersion"B�Aname���53/v2/{name=projects/*/locations/*/runtimeVersions/*}�
GetGuestAttributes..google.cloud.tpu.v2.GetGuestAttributesRequest/.google.cloud.tpu.v2.GetGuestAttributesResponse"G���A"</v2/{name=projects/*/locations/*/nodes/*}:getGuestAttributes:*F�Atpu.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBU
com.google.cloud.tpu.v2BCloudTpuProtoPZ)cloud.google.com/go/tpu/apiv2/tpupb;tpupbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

