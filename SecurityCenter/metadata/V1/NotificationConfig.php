<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/notification_config.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class NotificationConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/cloud/securitycenter/v1/notification_config.protogoogle.cloud.securitycenter.v1google/api/resource.proto"�
NotificationConfig
name (	
description (	6
pubsub_topic (	B �A
pubsub.googleapis.com/Topic
service_account (	B�A^
streaming_config (2B.google.cloud.securitycenter.v1.NotificationConfig.StreamingConfigH !
StreamingConfig
filter (	:��A�
0securitycenter.googleapis.com/NotificationConfigForganizations/{organization}/notificationConfigs/{notification_config}:folders/{folder}/notificationConfigs/{notification_config}<projects/{project}/notificationConfigs/{notification_config}*notificationConfigs2notificationConfigB
notify_configB�
"com.google.cloud.securitycenter.v1BNotificationConfigProtoPZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1�A@
pubsub.googleapis.com/Topic!projects/{project}/topics/{topic}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

