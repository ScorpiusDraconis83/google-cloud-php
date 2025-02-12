<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/managed_service.proto

namespace GPBMetadata\Google\Cloud\Notebooks\V1;

class ManagedService
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
        \GPBMetadata\Google\Cloud\Notebooks\V1\DiagnosticConfig::initOnce();
        \GPBMetadata\Google\Cloud\Notebooks\V1\Event::initOnce();
        \GPBMetadata\Google\Cloud\Notebooks\V1\Runtime::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�\'
/google/cloud/notebooks/v1/managed_service.protogoogle.cloud.notebooks.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto1google/cloud/notebooks/v1/diagnostic_config.proto%google/cloud/notebooks/v1/event.proto\'google/cloud/notebooks/v1/runtime.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"v
ListRuntimesRequest8
parent (	B(�A�A" notebooks.googleapis.com/Runtime
	page_size (

page_token (	"z
ListRuntimesResponse4
runtimes (2".google.cloud.notebooks.v1.Runtime
next_page_token (	
unreachable (	"K
GetRuntimeRequest6
name (	B(�A�A"
 notebooks.googleapis.com/Runtime"�
CreateRuntimeRequest8
parent (	B(�A�A"
 notebooks.googleapis.com/Runtime

runtime_id (	B�A8
runtime (2".google.cloud.notebooks.v1.RuntimeB�A

request_id (	"b
DeleteRuntimeRequest6
name (	B(�A�A"
 notebooks.googleapis.com/Runtime

request_id (	"<
StartRuntimeRequest
name (	B�A

request_id (	";
StopRuntimeRequest
name (	B�A

request_id (	"�
SwitchRuntimeRequest
name (	B�A
machine_type (	O
accelerator_config (23.google.cloud.notebooks.v1.RuntimeAcceleratorConfig

request_id (	"<
ResetRuntimeRequest
name (	B�A

request_id (	">
UpgradeRuntimeRequest
name (	B�A

request_id (	"�
ReportRuntimeEventRequest6
name (	B(�A�A"
 notebooks.googleapis.com/Runtime
vm_id (	B�A4
event (2 .google.cloud.notebooks.v1.EventB�A"�
UpdateRuntimeRequest8
runtime (2".google.cloud.notebooks.v1.RuntimeB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	"p
"RefreshRuntimeTokenInternalRequest6
name (	B(�A�A"
 notebooks.googleapis.com/Runtime
vm_id (	B�A"q
#RefreshRuntimeTokenInternalResponse
access_token (	4
expire_time (2.google.protobuf.TimestampB�A"�
DiagnoseRuntimeRequest6
name (	B(�A�A"
 notebooks.googleapis.com/RuntimeK
diagnostic_config (2+.google.cloud.notebooks.v1.DiagnosticConfigB�A2�
ManagedNotebookService�
ListRuntimes..google.cloud.notebooks.v1.ListRuntimesRequest/.google.cloud.notebooks.v1.ListRuntimesResponse"=�Aparent���.,/v1/{parent=projects/*/locations/*}/runtimes�

GetRuntime,.google.cloud.notebooks.v1.GetRuntimeRequest".google.cloud.notebooks.v1.Runtime";�Aname���.,/v1/{name=projects/*/locations/*/runtimes/*}�
CreateRuntime/.google.cloud.notebooks.v1.CreateRuntimeRequest.google.longrunning.Operation"x�A
RuntimeOperationMetadata�Aparent,runtime_id,runtime���7",/v1/{parent=projects/*/locations/*}/runtimes:runtime�
UpdateRuntime/.google.cloud.notebooks.v1.UpdateRuntimeRequest.google.longrunning.Operation"z�A
RuntimeOperationMetadata�Aruntime,update_mask���?24/v1/{runtime.name=projects/*/locations/*/runtimes/*}:runtime�
DeleteRuntime/.google.cloud.notebooks.v1.DeleteRuntimeRequest.google.longrunning.Operation"h�A*
google.protobuf.EmptyOperationMetadata�Aname���.*,/v1/{name=projects/*/locations/*/runtimes/*}�
StartRuntime..google.cloud.notebooks.v1.StartRuntimeRequest.google.longrunning.Operation"c�A
RuntimeOperationMetadata�Aname���7"2/v1/{name=projects/*/locations/*/runtimes/*}:start:*�
StopRuntime-.google.cloud.notebooks.v1.StopRuntimeRequest.google.longrunning.Operation"b�A
RuntimeOperationMetadata�Aname���6"1/v1/{name=projects/*/locations/*/runtimes/*}:stop:*�
SwitchRuntime/.google.cloud.notebooks.v1.SwitchRuntimeRequest.google.longrunning.Operation"d�A
RuntimeOperationMetadata�Aname���8"3/v1/{name=projects/*/locations/*/runtimes/*}:switch:*�
ResetRuntime..google.cloud.notebooks.v1.ResetRuntimeRequest.google.longrunning.Operation"c�A
RuntimeOperationMetadata�Aname���7"2/v1/{name=projects/*/locations/*/runtimes/*}:reset:*�
UpgradeRuntime0.google.cloud.notebooks.v1.UpgradeRuntimeRequest.google.longrunning.Operation"e�A
RuntimeOperationMetadata�Aname���9"4/v1/{name=projects/*/locations/*/runtimes/*}:upgrade:*�
ReportRuntimeEvent4.google.cloud.notebooks.v1.ReportRuntimeEventRequest.google.longrunning.Operation"i�A
RuntimeOperationMetadata�Aname���="8/v1/{name=projects/*/locations/*/runtimes/*}:reportEvent:*�
RefreshRuntimeTokenInternal=.google.cloud.notebooks.v1.RefreshRuntimeTokenInternalRequest>.google.cloud.notebooks.v1.RefreshRuntimeTokenInternalResponse"`�A
name,vm_id���M"H/v1/{name=projects/*/locations/*/runtimes/*}:refreshRuntimeTokenInternal:*�
DiagnoseRuntime1.google.cloud.notebooks.v1.DiagnoseRuntimeRequest.google.longrunning.Operation"x�A
RuntimeOperationMetadata�Aname,diagnostic_config���:"5/v1/{name=projects/*/locations/*/runtimes/*}:diagnose:*L�Anotebooks.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.notebooks.v1BManagedNotebooksProtoPZ;cloud.google.com/go/notebooks/apiv1/notebookspb;notebookspb�Google.Cloud.Notebooks.V1�Google\\Cloud\\Notebooks\\V1�Google::Cloud::Notebooks::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

