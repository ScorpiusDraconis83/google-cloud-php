<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace GPBMetadata\Google\Cloud\Backupdr\V1;

class Backupvault
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\FieldInfo::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Backupdr\V1\BackupvaultBa::initOnce();
        \GPBMetadata\Google\Cloud\Backupdr\V1\BackupvaultGce::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�R
*google/cloud/backupdr/v1/backupvault.protogoogle.cloud.backupdr.v1google/api/field_info.protogoogle/api/resource.proto-google/cloud/backupdr/v1/backupvault_ba.proto.google/cloud/backupdr/v1/backupvault_gce.protogoogle/protobuf/duration.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
BackupVault
name (	B�A�A
description (	B�AH �F
labels (21.google.cloud.backupdr.v1.BackupVault.LabelsEntryB�A9
create_time (2.google.protobuf.TimestampB�AH�9
update_time (2.google.protobuf.TimestampB�AH�W
*backup_minimum_enforced_retention_duration (2.google.protobuf.DurationB�AH�
	deletable (B�AH�
etag	 (	B�AH�?
state
 (2+.google.cloud.backupdr.v1.BackupVault.StateB�A<
effective_time (2.google.protobuf.TimestampB�AH�
backup_count (B�A
service_account (	B�A
total_stored_bytes (B�A
uid (	B�A���P
annotations (26.google.cloud.backupdr.v1.BackupVault.AnnotationsEntryB�AX
access_restriction (27.google.cloud.backupdr.v1.BackupVault.AccessRestrictionB�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8"Q
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
DELETING	
ERROR"�
AccessRestriction"
ACCESS_RESTRICTION_UNSPECIFIED 
WITHIN_PROJECT
WITHIN_ORGANIZATION
UNRESTRICTED&
"WITHIN_ORG_BUT_UNRESTRICTED_FOR_BA:��A�
#backupdr.googleapis.com/BackupVaultBprojects/{project}/locations/{location}/backupVaults/{backupvault}*backupVaults2backupVaultB
_descriptionB
_create_timeB
_update_timeB-
+_backup_minimum_enforced_retention_durationB

_deletableB
_etagB
_effective_time"�

DataSource
name (	B�A�A>
state (2*.google.cloud.backupdr.v1.DataSource.StateB�AE
labels (20.google.cloud.backupdr.v1.DataSource.LabelsEntryB�A9
create_time (2.google.protobuf.TimestampB�AH�9
update_time (2.google.protobuf.TimestampB�AH�
backup_count (H�
etag (	H�
total_stored_bytes (H�F
config_state (2+.google.cloud.backupdr.v1.BackupConfigStateB�AK
backup_config_info (2*.google.cloud.backupdr.v1.BackupConfigInfoB�AS
data_source_gcp_resource (2/.google.cloud.backupdr.v1.DataSourceGcpResourceH r
(data_source_backup_appliance_application (2>.google.cloud.backupdr.v1.DataSourceBackupApplianceApplicationH -
LabelsEntry
key (	
value (	:8"Q
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
DELETING	
ERROR:��A�
"backupdr.googleapis.com/DataSource[projects/{project}/locations/{location}/backupVaults/{backupvault}/dataSources/{datasource}*dataSources2
dataSourceB
source_resourceB
_create_timeB
_update_timeB
_backup_countB
_etagB
_total_stored_bytes"�
BackupConfigInfoZ
last_backup_state (2:.google.cloud.backupdr.v1.BackupConfigInfo.LastBackupStateB�AP
\'last_successful_backup_consistency_time (2.google.protobuf.TimestampB�A2
last_backup_error (2.google.rpc.StatusB�AF
gcp_backup_config (2).google.cloud.backupdr.v1.GcpBackupConfigH _
backup_appliance_backup_config (25.google.cloud.backupdr.v1.BackupApplianceBackupConfigH "�
LastBackupState!
LAST_BACKUP_STATE_UNSPECIFIED 
FIRST_BACKUP_PENDING
	SUCCEEDED

FAILED
PERMISSION_DENIEDB
backup_config"�
GcpBackupConfig<
backup_plan (	B\'�A$
"backupdr.googleapis.com/BackupPlan
backup_plan_description (	S
backup_plan_association (	B2�A/
-backupdr.googleapis.com/BackupPlanAssociation
backup_plan_rules (	"�
BackupApplianceBackupConfig
backup_appliance_name (	
backup_appliance_id (
sla_id (
application_name (	
	host_name (	
slt_name (	
slp_name (	"�
DataSourceGcpResource
gcp_resourcename (	B�A
location (	
type (	o
&compute_instance_datasource_properties (2=.google.cloud.backupdr.v1.ComputeInstanceDataSourcePropertiesH B
gcp_resource_properties"�
$DataSourceBackupApplianceApplication
application_name (	
backup_appliance (	
appliance_id (
type (	
application_id (
hostname (	
host_id (")
ServiceLockInfo
	operation (	B�A"�
BackupApplianceLockInfo 
backup_appliance_id (B�A"
backup_appliance_name (	B�A
lock_reason (	B�A
job_name (	H 
backup_image (	H 
sla_id (H B
lock_source"�

BackupLock8
lock_until_time (2.google.protobuf.TimestampB�AW
backup_appliance_lock_info (21.google.cloud.backupdr.v1.BackupApplianceLockInfoH K
service_lock_info (2).google.cloud.backupdr.v1.ServiceLockInfoB�AH B
ClientLockInfo"�
Backup
name (	B�A�A
description (	B�AH�9
create_time (2.google.protobuf.TimestampB�AH�9
update_time (2.google.protobuf.TimestampB�AH�A
labels (2,.google.cloud.backupdr.v1.Backup.LabelsEntryB�AI
enforced_retention_end_time (2.google.protobuf.TimestampB�AH�9
expire_time (2.google.protobuf.TimestampB�AH�>
consistency_time	 (2.google.protobuf.TimestampB�AH�
etag (	B�AH�:
state (2&.google.cloud.backupdr.v1.Backup.StateB�A@
service_locks (2$.google.cloud.backupdr.v1.BackupLockB�AI
backup_appliance_locks (2$.google.cloud.backupdr.v1.BackupLockB�Al
"compute_instance_backup_properties (29.google.cloud.backupdr.v1.ComputeInstanceBackupPropertiesB�AH l
"backup_appliance_backup_properties (29.google.cloud.backupdr.v1.BackupApplianceBackupPropertiesB�AH E
backup_type (2+.google.cloud.backupdr.v1.Backup.BackupTypeB�AW
gcp_backup_plan_info (22.google.cloud.backupdr.v1.Backup.GCPBackupPlanInfoB�AH 
resource_size_bytes (B�An
GCPBackupPlanInfo<
backup_plan (	B\'�A$
"backupdr.googleapis.com/BackupPlan
backup_plan_rule_id (	-
LabelsEntry
key (	
value (	:8"Q
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
DELETING	
ERROR"G

BackupType
BACKUP_TYPE_UNSPECIFIED 
	SCHEDULED
	ON_DEMAND:��A�
backupdr.googleapis.com/Backuplprojects/{project}/locations/{location}/backupVaults/{backupvault}/dataSources/{datasource}/backups/{backup}*backups2backupB
backup_propertiesB
	plan_infoB
_descriptionB
_create_timeB
_update_timeB
_enforced_retention_end_timeB
_expire_timeB
_consistency_timeB
_etag"�
CreateBackupVaultRequest;
parent (	B+�A�A%#backupdr.googleapis.com/BackupVault
backup_vault_id (	B�A@
backup_vault (2%.google.cloud.backupdr.v1.BackupVaultB�A

request_id (	B�A���
validate_only (B�A"�
ListBackupVaultsRequest;
parent (	B+�A�A%#backupdr.googleapis.com/BackupVault
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A<
view (2).google.cloud.backupdr.v1.BackupVaultViewB�A"�
ListBackupVaultsResponse<
backup_vaults (2%.google.cloud.backupdr.v1.BackupVault
next_page_token (	
unreachable (	"�
FetchUsableBackupVaultsRequest;
parent (	B+�A�A%#backupdr.googleapis.com/BackupVault
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
FetchUsableBackupVaultsResponse<
backup_vaults (2%.google.cloud.backupdr.v1.BackupVault
next_page_token (	
unreachable (	"�
GetBackupVaultRequest9
name (	B+�A�A%
#backupdr.googleapis.com/BackupVault<
view (2).google.cloud.backupdr.v1.BackupVaultViewB�A"�
UpdateBackupVaultRequest4
update_mask (2.google.protobuf.FieldMaskB�A@
backup_vault (2%.google.cloud.backupdr.v1.BackupVaultB�A

request_id (	B�A���
validate_only (B�A
force (B�A"�
DeleteBackupVaultRequest9
name (	B+�A�A%
#backupdr.googleapis.com/BackupVault

request_id (	B�A���
force (B�A
etag (	
validate_only (B�A
allow_missing (B�A*
ignore_backup_plan_references (B�A"�
ListDataSourcesRequest:
parent (	B*�A�A$"backupdr.googleapis.com/DataSource
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListDataSourcesResponse:
data_sources (2$.google.cloud.backupdr.v1.DataSource
next_page_token (	
unreachable (	"P
GetDataSourceRequest8
name (	B*�A�A$
"backupdr.googleapis.com/DataSource"�
UpdateDataSourceRequest4
update_mask (2.google.protobuf.FieldMaskB�A>
data_source (2$.google.cloud.backupdr.v1.DataSourceB�A

request_id (	B�A���
allow_missing (B�A"�
ListBackupsRequest6
parent (	B&�A�A backupdr.googleapis.com/Backup
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A7
view (2$.google.cloud.backupdr.v1.BackupViewB�A"v
ListBackupsResponse1
backups (2 .google.cloud.backupdr.v1.Backup
next_page_token (	
unreachable (	"�
GetBackupRequest4
name (	B&�A�A 
backupdr.googleapis.com/Backup7
view (2$.google.cloud.backupdr.v1.BackupViewB�A"�
UpdateBackupRequest4
update_mask (2.google.protobuf.FieldMaskB�A5
backup (2 .google.cloud.backupdr.v1.BackupB�A

request_id (	B�A���"l
DeleteBackupRequest4
name (	B&�A�A 
backupdr.googleapis.com/Backup

request_id (	B�A���"�
RestoreBackupRequest4
name (	B&�A�A 
backupdr.googleapis.com/Backup

request_id (	B�A���i
#compute_instance_target_environment (2:.google.cloud.backupdr.v1.ComputeInstanceTargetEnvironmentH i
#compute_instance_restore_properties (2:.google.cloud.backupdr.v1.ComputeInstanceRestorePropertiesHB
target_environmentB
instance_properties"Z
RestoreBackupResponseA
target_resource (2(.google.cloud.backupdr.v1.TargetResource"g
TargetResource=
gcp_resource (2%.google.cloud.backupdr.v1.GcpResourceH B
target_resource_info"G
GcpResource
gcp_resourcename (	
location (	
type (	*Q
BackupConfigState#
BACKUP_CONFIG_STATE_UNSPECIFIED 

ACTIVE
PASSIVE*V

BackupView
BACKUP_VIEW_UNSPECIFIED 
BACKUP_VIEW_BASIC
BACKUP_VIEW_FULL*m
BackupVaultView!
BACKUP_VAULT_VIEW_UNSPECIFIED 
BACKUP_VAULT_VIEW_BASIC
BACKUP_VAULT_VIEW_FULLB�
com.google.cloud.backupdr.v1BBackupVaultProtoPZ8cloud.google.com/go/backupdr/apiv1/backupdrpb;backupdrpb�Google.Cloud.BackupDR.V1�Google\\Cloud\\BackupDR\\V1�Google::Cloud::BackupDR::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

