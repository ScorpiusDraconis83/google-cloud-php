<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/inventory/v1/key_tracking_service.proto

namespace GPBMetadata\Google\Cloud\Kms\Inventory\V1;

class KeyTrackingService
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
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/cloud/kms/inventory/v1/key_tracking_service.protogoogle.cloud.kms.inventory.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/timestamp.proto"r
#GetProtectedResourcesSummaryRequestK
name (	B=�A�A7
5kmsinventory.googleapis.com/ProtectedResourcesSummary"�
ProtectedResourcesSummary
name (	
resource_count (
project_count (c
resource_types (2K.google.cloud.kms.inventory.v1.ProtectedResourcesSummary.ResourceTypesEntryc
cloud_products (2K.google.cloud.kms.inventory.v1.ProtectedResourcesSummary.CloudProductsEntryZ
	locations (2G.google.cloud.kms.inventory.v1.ProtectedResourcesSummary.LocationsEntry4
ResourceTypesEntry
key (	
value (:84
CloudProductsEntry
key (	
value (:80
LocationsEntry
key (	
value (:8:��A�
5kmsinventory.googleapis.com/ProtectedResourcesSummarymprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/protectedResourcesSummary�projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}/protectedResourcesSummary"�
SearchProtectedResourcesRequestG
scope (	B8�A�A2
0cloudresourcemanager.googleapis.com/Organization

crypto_key (	B	�A�A
*
	page_size (

page_token (	
resource_types (	B�A"�
 SearchProtectedResourcesResponseM
protected_resources (20.google.cloud.kms.inventory.v1.ProtectedResource
next_page_token (	"�
ProtectedResource
name (	
project (	

project_id	 (	
cloud_product (	
resource_type (	
location (	L
labels (2<.google.cloud.kms.inventory.v1.ProtectedResource.LabelsEntryI
crypto_key_version (	B-�A*
(cloudkms.googleapis.com/CryptoKeyVersionJ
crypto_key_versions
 (	B-�A*
(cloudkms.googleapis.com/CryptoKeyVersion4
create_time (2.google.protobuf.TimestampB�A-
LabelsEntry
key (	
value (	:8:\'�A$
cloudasset.googleapis.com/Asset*2�
KeyTrackingService�
GetProtectedResourcesSummaryB.google.cloud.kms.inventory.v1.GetProtectedResourcesSummaryRequest8.google.cloud.kms.inventory.v1.ProtectedResourcesSummary"c�Aname���VT/v1/{name=projects/*/locations/*/keyRings/*/cryptoKeys/**}/protectedResourcesSummary�
SearchProtectedResources>.google.cloud.kms.inventory.v1.SearchProtectedResourcesRequest?.google.cloud.kms.inventory.v1.SearchProtectedResourcesResponse"Q�Ascope, crypto_key���75/v1/{scope=organizations/*}/protectedResources:searchO�Akmsinventory.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.kms.inventory.v1BKeyTrackingServiceProtoPZ?cloud.google.com/go/kms/inventory/apiv1/inventorypb;inventorypb��Google.Cloud.Kms.Inventory.V1�Google\\Cloud\\Kms\\Inventory\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

