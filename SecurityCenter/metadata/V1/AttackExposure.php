<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/attack_exposure.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class AttackExposure
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/securitycenter/v1/attack_exposure.protogoogle.cloud.securitycenter.v1"�
AttackExposure
score (;
latest_calculation_time (2.google.protobuf.Timestamp
attack_exposure_result (	C
state (24.google.cloud.securitycenter.v1.AttackExposure.State*
"exposed_high_value_resources_count (,
$exposed_medium_value_resources_count ()
!exposed_low_value_resources_count ("B
State
STATE_UNSPECIFIED 

CALCULATED
NOT_CALCULATEDB�
"com.google.cloud.securitycenter.v1BAttackExposureProtoPZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

