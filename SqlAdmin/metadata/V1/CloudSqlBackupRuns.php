<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_backup_runs.proto

namespace GPBMetadata\Google\Cloud\Sql\V1;

class CloudSqlBackupRuns
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
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/sql/v1/cloud_sql_backup_runs.protogoogle.cloud.sql.v1google/api/client.protogoogle/api/field_behavior.proto-google/cloud/sql/v1/cloud_sql_resources.protogoogle/protobuf/timestamp.proto"K
SqlBackupRunsDeleteRequest

id (
instance (	
project (	"H
SqlBackupRunsGetRequest

id (
instance (	
project (	"m
SqlBackupRunsInsertRequest
instance (	
project (	,
bodyd (2.google.cloud.sql.v1.BackupRun"f
SqlBackupRunsListRequest
instance (	
max_results (

page_token (	
project (	"�
	BackupRun
kind (	7
status (2\'.google.cloud.sql.v1.SqlBackupRunStatus1
enqueued_time (2.google.protobuf.Timestamp

id (.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp2
error (2#.google.cloud.sql.v1.OperationError3
type (2%.google.cloud.sql.v1.SqlBackupRunType
description	 (	5
window_start_time
 (2.google.protobuf.Timestamp
instance (	
	self_link (	
location (	W
disk_encryption_configuration (20.google.cloud.sql.v1.DiskEncryptionConfigurationI
disk_encryption_status (2).google.cloud.sql.v1.DiskEncryptionStatus7
backup_kind (2".google.cloud.sql.v1.SqlBackupKind
	time_zone (	&
max_chargeable_bytes (B�AH �B
_max_chargeable_bytes"n
BackupRunsListResponse
kind (	-
items (2.google.cloud.sql.v1.BackupRun
next_page_token (	*�
SqlBackupRunStatus%
!SQL_BACKUP_RUN_STATUS_UNSPECIFIED 
ENQUEUED
OVERDUE
RUNNING

FAILED

SUCCESSFUL
SKIPPED
DELETION_PENDING
DELETION_FAILED
DELETED	*L
SqlBackupKind
SQL_BACKUP_KIND_UNSPECIFIED 
SNAPSHOT
PHYSICAL*U
SqlBackupRunType#
SQL_BACKUP_RUN_TYPE_UNSPECIFIED 
	AUTOMATED
	ON_DEMAND2�
SqlBackupRunsService�
Delete/.google.cloud.sql.v1.SqlBackupRunsDeleteRequest.google.cloud.sql.v1.Operation"C���=*;/v1/projects/{project}/instances/{instance}/backupRuns/{id}�
Get,.google.cloud.sql.v1.SqlBackupRunsGetRequest.google.cloud.sql.v1.BackupRun"C���=;/v1/projects/{project}/instances/{instance}/backupRuns/{id}�
Insert/.google.cloud.sql.v1.SqlBackupRunsInsertRequest.google.cloud.sql.v1.Operation"D���>"6/v1/projects/{project}/instances/{instance}/backupRuns:body�
List-.google.cloud.sql.v1.SqlBackupRunsListRequest+.google.cloud.sql.v1.BackupRunsListResponse">���86/v1/projects/{project}/instances/{instance}/backupRuns|�Asqladmin.googleapis.com�A_https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/sqlservice.adminB_
com.google.cloud.sql.v1BCloudSqlBackupRunsProtoPZ)cloud.google.com/go/sql/apiv1/sqlpb;sqlpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

