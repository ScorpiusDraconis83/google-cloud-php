<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v2/service.proto

namespace GPBMetadata\Google\Cloud\Notebooks\V2;

class Service
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
        \GPBMetadata\Google\Cloud\Notebooks\V2\DiagnosticConfig::initOnce();
        \GPBMetadata\Google\Cloud\Notebooks\V2\Instance::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�&
\'google/cloud/notebooks/v2/service.protogoogle.cloud.notebooks.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto1google/cloud/notebooks/v2/diagnostic_config.proto(google/cloud/notebooks/v2/instance.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
OperationMetadata/
create_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
target (	
verb (	
status_message (	
requested_cancellation (
api_version (	
endpoint (	"�
ListInstancesRequest9
parent (	B)�A�A#!notebooks.googleapis.com/Instance
	page_size (B�A

page_token (	B�A
order_by (	B�A
filter (	B�A"}
ListInstancesResponse6
	instances (2#.google.cloud.notebooks.v2.Instance
next_page_token (	
unreachable (	"M
GetInstanceRequest7
name (	B)�A�A#
!notebooks.googleapis.com/Instance"�
CreateInstanceRequest9
parent (	B)�A�A#!notebooks.googleapis.com/Instance
instance_id (	B�A:
instance (2#.google.cloud.notebooks.v2.InstanceB�A

request_id (	B�A"�
UpdateInstanceRequest:
instance (2#.google.cloud.notebooks.v2.InstanceB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"i
DeleteInstanceRequest7
name (	B)�A�A#
!notebooks.googleapis.com/Instance

request_id (	B�A")
StartInstanceRequest
name (	B�A"(
StopInstanceRequest
name (	B�A")
ResetInstanceRequest
name (	B�A"C
!CheckInstanceUpgradabilityRequest
notebook_instance (	B�A"
"CheckInstanceUpgradabilityResponse
upgradeable (
upgrade_version (	
upgrade_info (	
upgrade_image (	"+
UpgradeInstanceRequest
name (	B�A"�
RollbackInstanceRequest7
name (	B)�A�A#
!notebooks.googleapis.com/Instance
target_snapshot (	B�A
revision_id (	B�A�A"�
DiagnoseInstanceRequest7
name (	B)�A�A#
!notebooks.googleapis.com/InstanceK
diagnostic_config (2+.google.cloud.notebooks.v2.DiagnosticConfigB�A
timeout_minutes (B�A2�
NotebookService�
ListInstances/.google.cloud.notebooks.v2.ListInstancesRequest0.google.cloud.notebooks.v2.ListInstancesResponse">���/-/v2/{parent=projects/*/locations/*}/instances�Aparent�
GetInstance-.google.cloud.notebooks.v2.GetInstanceRequest#.google.cloud.notebooks.v2.Instance"<���/-/v2/{name=projects/*/locations/*/instances/*}�Aname�
CreateInstance0.google.cloud.notebooks.v2.CreateInstanceRequest.google.longrunning.Operation"}���9"-/v2/{parent=projects/*/locations/*}/instances:instance�Aparent,instance,instance_id�A
InstanceOperationMetadata�
UpdateInstance0.google.cloud.notebooks.v2.UpdateInstanceRequest.google.longrunning.Operation"���B26/v2/{instance.name=projects/*/locations/*/instances/*}:instance�Ainstance,update_mask�A
InstanceOperationMetadata�
DeleteInstance0.google.cloud.notebooks.v2.DeleteInstanceRequest.google.longrunning.Operation"i���/*-/v2/{name=projects/*/locations/*/instances/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
StartInstance/.google.cloud.notebooks.v2.StartInstanceRequest.google.longrunning.Operation"^���8"3/v2/{name=projects/*/locations/*/instances/*}:start:*�A
InstanceOperationMetadata�
StopInstance..google.cloud.notebooks.v2.StopInstanceRequest.google.longrunning.Operation"]���7"2/v2/{name=projects/*/locations/*/instances/*}:stop:*�A
InstanceOperationMetadata�
ResetInstance/.google.cloud.notebooks.v2.ResetInstanceRequest.google.longrunning.Operation"^���8"3/v2/{name=projects/*/locations/*/instances/*}:reset:*�A
InstanceOperationMetadata�
CheckInstanceUpgradability<.google.cloud.notebooks.v2.CheckInstanceUpgradabilityRequest=.google.cloud.notebooks.v2.CheckInstanceUpgradabilityResponse"U���OM/v2/{notebook_instance=projects/*/locations/*/instances/*}:checkUpgradability�
UpgradeInstance1.google.cloud.notebooks.v2.UpgradeInstanceRequest.google.longrunning.Operation"`���:"5/v2/{name=projects/*/locations/*/instances/*}:upgrade:*�A
InstanceOperationMetadata�
RollbackInstance2.google.cloud.notebooks.v2.RollbackInstanceRequest.google.longrunning.Operation"a���;"6/v2/{name=projects/*/locations/*/instances/*}:rollback:*�A
InstanceOperationMetadata�
DiagnoseInstance2.google.cloud.notebooks.v2.DiagnoseInstanceRequest.google.longrunning.Operation"z���;"6/v2/{name=projects/*/locations/*/instances/*}:diagnose:*�Aname,diagnostic_config�A
InstanceOperationMetadataL�Anotebooks.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.notebooks.v2BServiceProtoPZ;cloud.google.com/go/notebooks/apiv2/notebookspb;notebookspb�Google.Cloud.Notebooks.V2�Google\\Cloud\\Notebooks\\V2�Google::Cloud::Notebooks::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

