<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for the addons that can be automatically spun up in the
 * cluster, enabling additional functionality.
 *
 * Generated from protobuf message <code>google.container.v1.AddonsConfig</code>
 */
class AddonsConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Configuration for the HTTP (L7) load balancing controller addon, which
     * makes it easy to set up HTTP load balancers for services in a cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.HttpLoadBalancing http_load_balancing = 1;</code>
     */
    protected $http_load_balancing = null;
    /**
     * Configuration for the horizontal pod autoscaling feature, which
     * increases or decreases the number of replica pods a replication controller
     * has based on the resource usage of the existing pods.
     *
     * Generated from protobuf field <code>.google.container.v1.HorizontalPodAutoscaling horizontal_pod_autoscaling = 2;</code>
     */
    protected $horizontal_pod_autoscaling = null;
    /**
     * Configuration for the Kubernetes Dashboard.
     * This addon is deprecated, and will be disabled in 1.15. It is recommended
     * to use the Cloud Console to manage and monitor your Kubernetes clusters,
     * workloads and applications. For more information, see:
     * https://cloud.google.com/kubernetes-engine/docs/concepts/dashboards
     *
     * Generated from protobuf field <code>.google.container.v1.KubernetesDashboard kubernetes_dashboard = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $kubernetes_dashboard = null;
    /**
     * Configuration for NetworkPolicy. This only tracks whether the addon
     * is enabled or not on the Master, it does not track whether network policy
     * is enabled for the nodes.
     *
     * Generated from protobuf field <code>.google.container.v1.NetworkPolicyConfig network_policy_config = 4;</code>
     */
    protected $network_policy_config = null;
    /**
     * Configuration for the Cloud Run addon, which allows the user to use a
     * managed Knative service.
     *
     * Generated from protobuf field <code>.google.container.v1.CloudRunConfig cloud_run_config = 7;</code>
     */
    protected $cloud_run_config = null;
    /**
     * Configuration for NodeLocalDNS, a dns cache running on cluster nodes
     *
     * Generated from protobuf field <code>.google.container.v1.DnsCacheConfig dns_cache_config = 8;</code>
     */
    protected $dns_cache_config = null;
    /**
     * Configuration for the ConfigConnector add-on, a Kubernetes
     * extension to manage hosted GCP services through the Kubernetes API
     *
     * Generated from protobuf field <code>.google.container.v1.ConfigConnectorConfig config_connector_config = 10;</code>
     */
    protected $config_connector_config = null;
    /**
     * Configuration for the Compute Engine Persistent Disk CSI driver.
     *
     * Generated from protobuf field <code>.google.container.v1.GcePersistentDiskCsiDriverConfig gce_persistent_disk_csi_driver_config = 11;</code>
     */
    protected $gce_persistent_disk_csi_driver_config = null;
    /**
     * Configuration for the GCP Filestore CSI driver.
     *
     * Generated from protobuf field <code>.google.container.v1.GcpFilestoreCsiDriverConfig gcp_filestore_csi_driver_config = 14;</code>
     */
    protected $gcp_filestore_csi_driver_config = null;
    /**
     * Configuration for the Backup for GKE agent addon.
     *
     * Generated from protobuf field <code>.google.container.v1.GkeBackupAgentConfig gke_backup_agent_config = 16;</code>
     */
    protected $gke_backup_agent_config = null;
    /**
     * Configuration for the Cloud Storage Fuse CSI driver.
     *
     * Generated from protobuf field <code>.google.container.v1.GcsFuseCsiDriverConfig gcs_fuse_csi_driver_config = 17;</code>
     */
    protected $gcs_fuse_csi_driver_config = null;
    /**
     * Optional. Configuration for the StatefulHA add-on.
     *
     * Generated from protobuf field <code>.google.container.v1.StatefulHAConfig stateful_ha_config = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $stateful_ha_config = null;
    /**
     * Configuration for the Cloud Storage Parallelstore CSI driver.
     *
     * Generated from protobuf field <code>.google.container.v1.ParallelstoreCsiDriverConfig parallelstore_csi_driver_config = 19;</code>
     */
    protected $parallelstore_csi_driver_config = null;
    /**
     * Optional. Configuration for Ray Operator addon.
     *
     * Generated from protobuf field <code>.google.container.v1.RayOperatorConfig ray_operator_config = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ray_operator_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Container\V1\HttpLoadBalancing $http_load_balancing
     *           Configuration for the HTTP (L7) load balancing controller addon, which
     *           makes it easy to set up HTTP load balancers for services in a cluster.
     *     @type \Google\Cloud\Container\V1\HorizontalPodAutoscaling $horizontal_pod_autoscaling
     *           Configuration for the horizontal pod autoscaling feature, which
     *           increases or decreases the number of replica pods a replication controller
     *           has based on the resource usage of the existing pods.
     *     @type \Google\Cloud\Container\V1\KubernetesDashboard $kubernetes_dashboard
     *           Configuration for the Kubernetes Dashboard.
     *           This addon is deprecated, and will be disabled in 1.15. It is recommended
     *           to use the Cloud Console to manage and monitor your Kubernetes clusters,
     *           workloads and applications. For more information, see:
     *           https://cloud.google.com/kubernetes-engine/docs/concepts/dashboards
     *     @type \Google\Cloud\Container\V1\NetworkPolicyConfig $network_policy_config
     *           Configuration for NetworkPolicy. This only tracks whether the addon
     *           is enabled or not on the Master, it does not track whether network policy
     *           is enabled for the nodes.
     *     @type \Google\Cloud\Container\V1\CloudRunConfig $cloud_run_config
     *           Configuration for the Cloud Run addon, which allows the user to use a
     *           managed Knative service.
     *     @type \Google\Cloud\Container\V1\DnsCacheConfig $dns_cache_config
     *           Configuration for NodeLocalDNS, a dns cache running on cluster nodes
     *     @type \Google\Cloud\Container\V1\ConfigConnectorConfig $config_connector_config
     *           Configuration for the ConfigConnector add-on, a Kubernetes
     *           extension to manage hosted GCP services through the Kubernetes API
     *     @type \Google\Cloud\Container\V1\GcePersistentDiskCsiDriverConfig $gce_persistent_disk_csi_driver_config
     *           Configuration for the Compute Engine Persistent Disk CSI driver.
     *     @type \Google\Cloud\Container\V1\GcpFilestoreCsiDriverConfig $gcp_filestore_csi_driver_config
     *           Configuration for the GCP Filestore CSI driver.
     *     @type \Google\Cloud\Container\V1\GkeBackupAgentConfig $gke_backup_agent_config
     *           Configuration for the Backup for GKE agent addon.
     *     @type \Google\Cloud\Container\V1\GcsFuseCsiDriverConfig $gcs_fuse_csi_driver_config
     *           Configuration for the Cloud Storage Fuse CSI driver.
     *     @type \Google\Cloud\Container\V1\StatefulHAConfig $stateful_ha_config
     *           Optional. Configuration for the StatefulHA add-on.
     *     @type \Google\Cloud\Container\V1\ParallelstoreCsiDriverConfig $parallelstore_csi_driver_config
     *           Configuration for the Cloud Storage Parallelstore CSI driver.
     *     @type \Google\Cloud\Container\V1\RayOperatorConfig $ray_operator_config
     *           Optional. Configuration for Ray Operator addon.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Configuration for the HTTP (L7) load balancing controller addon, which
     * makes it easy to set up HTTP load balancers for services in a cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.HttpLoadBalancing http_load_balancing = 1;</code>
     * @return \Google\Cloud\Container\V1\HttpLoadBalancing|null
     */
    public function getHttpLoadBalancing()
    {
        return $this->http_load_balancing;
    }

    public function hasHttpLoadBalancing()
    {
        return isset($this->http_load_balancing);
    }

    public function clearHttpLoadBalancing()
    {
        unset($this->http_load_balancing);
    }

    /**
     * Configuration for the HTTP (L7) load balancing controller addon, which
     * makes it easy to set up HTTP load balancers for services in a cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.HttpLoadBalancing http_load_balancing = 1;</code>
     * @param \Google\Cloud\Container\V1\HttpLoadBalancing $var
     * @return $this
     */
    public function setHttpLoadBalancing($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\HttpLoadBalancing::class);
        $this->http_load_balancing = $var;

        return $this;
    }

    /**
     * Configuration for the horizontal pod autoscaling feature, which
     * increases or decreases the number of replica pods a replication controller
     * has based on the resource usage of the existing pods.
     *
     * Generated from protobuf field <code>.google.container.v1.HorizontalPodAutoscaling horizontal_pod_autoscaling = 2;</code>
     * @return \Google\Cloud\Container\V1\HorizontalPodAutoscaling|null
     */
    public function getHorizontalPodAutoscaling()
    {
        return $this->horizontal_pod_autoscaling;
    }

    public function hasHorizontalPodAutoscaling()
    {
        return isset($this->horizontal_pod_autoscaling);
    }

    public function clearHorizontalPodAutoscaling()
    {
        unset($this->horizontal_pod_autoscaling);
    }

    /**
     * Configuration for the horizontal pod autoscaling feature, which
     * increases or decreases the number of replica pods a replication controller
     * has based on the resource usage of the existing pods.
     *
     * Generated from protobuf field <code>.google.container.v1.HorizontalPodAutoscaling horizontal_pod_autoscaling = 2;</code>
     * @param \Google\Cloud\Container\V1\HorizontalPodAutoscaling $var
     * @return $this
     */
    public function setHorizontalPodAutoscaling($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\HorizontalPodAutoscaling::class);
        $this->horizontal_pod_autoscaling = $var;

        return $this;
    }

    /**
     * Configuration for the Kubernetes Dashboard.
     * This addon is deprecated, and will be disabled in 1.15. It is recommended
     * to use the Cloud Console to manage and monitor your Kubernetes clusters,
     * workloads and applications. For more information, see:
     * https://cloud.google.com/kubernetes-engine/docs/concepts/dashboards
     *
     * Generated from protobuf field <code>.google.container.v1.KubernetesDashboard kubernetes_dashboard = 3 [deprecated = true];</code>
     * @return \Google\Cloud\Container\V1\KubernetesDashboard|null
     * @deprecated
     */
    public function getKubernetesDashboard()
    {
        @trigger_error('kubernetes_dashboard is deprecated.', E_USER_DEPRECATED);
        return $this->kubernetes_dashboard;
    }

    public function hasKubernetesDashboard()
    {
        @trigger_error('kubernetes_dashboard is deprecated.', E_USER_DEPRECATED);
        return isset($this->kubernetes_dashboard);
    }

    public function clearKubernetesDashboard()
    {
        @trigger_error('kubernetes_dashboard is deprecated.', E_USER_DEPRECATED);
        unset($this->kubernetes_dashboard);
    }

    /**
     * Configuration for the Kubernetes Dashboard.
     * This addon is deprecated, and will be disabled in 1.15. It is recommended
     * to use the Cloud Console to manage and monitor your Kubernetes clusters,
     * workloads and applications. For more information, see:
     * https://cloud.google.com/kubernetes-engine/docs/concepts/dashboards
     *
     * Generated from protobuf field <code>.google.container.v1.KubernetesDashboard kubernetes_dashboard = 3 [deprecated = true];</code>
     * @param \Google\Cloud\Container\V1\KubernetesDashboard $var
     * @return $this
     * @deprecated
     */
    public function setKubernetesDashboard($var)
    {
        @trigger_error('kubernetes_dashboard is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\KubernetesDashboard::class);
        $this->kubernetes_dashboard = $var;

        return $this;
    }

    /**
     * Configuration for NetworkPolicy. This only tracks whether the addon
     * is enabled or not on the Master, it does not track whether network policy
     * is enabled for the nodes.
     *
     * Generated from protobuf field <code>.google.container.v1.NetworkPolicyConfig network_policy_config = 4;</code>
     * @return \Google\Cloud\Container\V1\NetworkPolicyConfig|null
     */
    public function getNetworkPolicyConfig()
    {
        return $this->network_policy_config;
    }

    public function hasNetworkPolicyConfig()
    {
        return isset($this->network_policy_config);
    }

    public function clearNetworkPolicyConfig()
    {
        unset($this->network_policy_config);
    }

    /**
     * Configuration for NetworkPolicy. This only tracks whether the addon
     * is enabled or not on the Master, it does not track whether network policy
     * is enabled for the nodes.
     *
     * Generated from protobuf field <code>.google.container.v1.NetworkPolicyConfig network_policy_config = 4;</code>
     * @param \Google\Cloud\Container\V1\NetworkPolicyConfig $var
     * @return $this
     */
    public function setNetworkPolicyConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NetworkPolicyConfig::class);
        $this->network_policy_config = $var;

        return $this;
    }

    /**
     * Configuration for the Cloud Run addon, which allows the user to use a
     * managed Knative service.
     *
     * Generated from protobuf field <code>.google.container.v1.CloudRunConfig cloud_run_config = 7;</code>
     * @return \Google\Cloud\Container\V1\CloudRunConfig|null
     */
    public function getCloudRunConfig()
    {
        return $this->cloud_run_config;
    }

    public function hasCloudRunConfig()
    {
        return isset($this->cloud_run_config);
    }

    public function clearCloudRunConfig()
    {
        unset($this->cloud_run_config);
    }

    /**
     * Configuration for the Cloud Run addon, which allows the user to use a
     * managed Knative service.
     *
     * Generated from protobuf field <code>.google.container.v1.CloudRunConfig cloud_run_config = 7;</code>
     * @param \Google\Cloud\Container\V1\CloudRunConfig $var
     * @return $this
     */
    public function setCloudRunConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\CloudRunConfig::class);
        $this->cloud_run_config = $var;

        return $this;
    }

    /**
     * Configuration for NodeLocalDNS, a dns cache running on cluster nodes
     *
     * Generated from protobuf field <code>.google.container.v1.DnsCacheConfig dns_cache_config = 8;</code>
     * @return \Google\Cloud\Container\V1\DnsCacheConfig|null
     */
    public function getDnsCacheConfig()
    {
        return $this->dns_cache_config;
    }

    public function hasDnsCacheConfig()
    {
        return isset($this->dns_cache_config);
    }

    public function clearDnsCacheConfig()
    {
        unset($this->dns_cache_config);
    }

    /**
     * Configuration for NodeLocalDNS, a dns cache running on cluster nodes
     *
     * Generated from protobuf field <code>.google.container.v1.DnsCacheConfig dns_cache_config = 8;</code>
     * @param \Google\Cloud\Container\V1\DnsCacheConfig $var
     * @return $this
     */
    public function setDnsCacheConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\DnsCacheConfig::class);
        $this->dns_cache_config = $var;

        return $this;
    }

    /**
     * Configuration for the ConfigConnector add-on, a Kubernetes
     * extension to manage hosted GCP services through the Kubernetes API
     *
     * Generated from protobuf field <code>.google.container.v1.ConfigConnectorConfig config_connector_config = 10;</code>
     * @return \Google\Cloud\Container\V1\ConfigConnectorConfig|null
     */
    public function getConfigConnectorConfig()
    {
        return $this->config_connector_config;
    }

    public function hasConfigConnectorConfig()
    {
        return isset($this->config_connector_config);
    }

    public function clearConfigConnectorConfig()
    {
        unset($this->config_connector_config);
    }

    /**
     * Configuration for the ConfigConnector add-on, a Kubernetes
     * extension to manage hosted GCP services through the Kubernetes API
     *
     * Generated from protobuf field <code>.google.container.v1.ConfigConnectorConfig config_connector_config = 10;</code>
     * @param \Google\Cloud\Container\V1\ConfigConnectorConfig $var
     * @return $this
     */
    public function setConfigConnectorConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\ConfigConnectorConfig::class);
        $this->config_connector_config = $var;

        return $this;
    }

    /**
     * Configuration for the Compute Engine Persistent Disk CSI driver.
     *
     * Generated from protobuf field <code>.google.container.v1.GcePersistentDiskCsiDriverConfig gce_persistent_disk_csi_driver_config = 11;</code>
     * @return \Google\Cloud\Container\V1\GcePersistentDiskCsiDriverConfig|null
     */
    public function getGcePersistentDiskCsiDriverConfig()
    {
        return $this->gce_persistent_disk_csi_driver_config;
    }

    public function hasGcePersistentDiskCsiDriverConfig()
    {
        return isset($this->gce_persistent_disk_csi_driver_config);
    }

    public function clearGcePersistentDiskCsiDriverConfig()
    {
        unset($this->gce_persistent_disk_csi_driver_config);
    }

    /**
     * Configuration for the Compute Engine Persistent Disk CSI driver.
     *
     * Generated from protobuf field <code>.google.container.v1.GcePersistentDiskCsiDriverConfig gce_persistent_disk_csi_driver_config = 11;</code>
     * @param \Google\Cloud\Container\V1\GcePersistentDiskCsiDriverConfig $var
     * @return $this
     */
    public function setGcePersistentDiskCsiDriverConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\GcePersistentDiskCsiDriverConfig::class);
        $this->gce_persistent_disk_csi_driver_config = $var;

        return $this;
    }

    /**
     * Configuration for the GCP Filestore CSI driver.
     *
     * Generated from protobuf field <code>.google.container.v1.GcpFilestoreCsiDriverConfig gcp_filestore_csi_driver_config = 14;</code>
     * @return \Google\Cloud\Container\V1\GcpFilestoreCsiDriverConfig|null
     */
    public function getGcpFilestoreCsiDriverConfig()
    {
        return $this->gcp_filestore_csi_driver_config;
    }

    public function hasGcpFilestoreCsiDriverConfig()
    {
        return isset($this->gcp_filestore_csi_driver_config);
    }

    public function clearGcpFilestoreCsiDriverConfig()
    {
        unset($this->gcp_filestore_csi_driver_config);
    }

    /**
     * Configuration for the GCP Filestore CSI driver.
     *
     * Generated from protobuf field <code>.google.container.v1.GcpFilestoreCsiDriverConfig gcp_filestore_csi_driver_config = 14;</code>
     * @param \Google\Cloud\Container\V1\GcpFilestoreCsiDriverConfig $var
     * @return $this
     */
    public function setGcpFilestoreCsiDriverConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\GcpFilestoreCsiDriverConfig::class);
        $this->gcp_filestore_csi_driver_config = $var;

        return $this;
    }

    /**
     * Configuration for the Backup for GKE agent addon.
     *
     * Generated from protobuf field <code>.google.container.v1.GkeBackupAgentConfig gke_backup_agent_config = 16;</code>
     * @return \Google\Cloud\Container\V1\GkeBackupAgentConfig|null
     */
    public function getGkeBackupAgentConfig()
    {
        return $this->gke_backup_agent_config;
    }

    public function hasGkeBackupAgentConfig()
    {
        return isset($this->gke_backup_agent_config);
    }

    public function clearGkeBackupAgentConfig()
    {
        unset($this->gke_backup_agent_config);
    }

    /**
     * Configuration for the Backup for GKE agent addon.
     *
     * Generated from protobuf field <code>.google.container.v1.GkeBackupAgentConfig gke_backup_agent_config = 16;</code>
     * @param \Google\Cloud\Container\V1\GkeBackupAgentConfig $var
     * @return $this
     */
    public function setGkeBackupAgentConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\GkeBackupAgentConfig::class);
        $this->gke_backup_agent_config = $var;

        return $this;
    }

    /**
     * Configuration for the Cloud Storage Fuse CSI driver.
     *
     * Generated from protobuf field <code>.google.container.v1.GcsFuseCsiDriverConfig gcs_fuse_csi_driver_config = 17;</code>
     * @return \Google\Cloud\Container\V1\GcsFuseCsiDriverConfig|null
     */
    public function getGcsFuseCsiDriverConfig()
    {
        return $this->gcs_fuse_csi_driver_config;
    }

    public function hasGcsFuseCsiDriverConfig()
    {
        return isset($this->gcs_fuse_csi_driver_config);
    }

    public function clearGcsFuseCsiDriverConfig()
    {
        unset($this->gcs_fuse_csi_driver_config);
    }

    /**
     * Configuration for the Cloud Storage Fuse CSI driver.
     *
     * Generated from protobuf field <code>.google.container.v1.GcsFuseCsiDriverConfig gcs_fuse_csi_driver_config = 17;</code>
     * @param \Google\Cloud\Container\V1\GcsFuseCsiDriverConfig $var
     * @return $this
     */
    public function setGcsFuseCsiDriverConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\GcsFuseCsiDriverConfig::class);
        $this->gcs_fuse_csi_driver_config = $var;

        return $this;
    }

    /**
     * Optional. Configuration for the StatefulHA add-on.
     *
     * Generated from protobuf field <code>.google.container.v1.StatefulHAConfig stateful_ha_config = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Container\V1\StatefulHAConfig|null
     */
    public function getStatefulHaConfig()
    {
        return $this->stateful_ha_config;
    }

    public function hasStatefulHaConfig()
    {
        return isset($this->stateful_ha_config);
    }

    public function clearStatefulHaConfig()
    {
        unset($this->stateful_ha_config);
    }

    /**
     * Optional. Configuration for the StatefulHA add-on.
     *
     * Generated from protobuf field <code>.google.container.v1.StatefulHAConfig stateful_ha_config = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Container\V1\StatefulHAConfig $var
     * @return $this
     */
    public function setStatefulHaConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\StatefulHAConfig::class);
        $this->stateful_ha_config = $var;

        return $this;
    }

    /**
     * Configuration for the Cloud Storage Parallelstore CSI driver.
     *
     * Generated from protobuf field <code>.google.container.v1.ParallelstoreCsiDriverConfig parallelstore_csi_driver_config = 19;</code>
     * @return \Google\Cloud\Container\V1\ParallelstoreCsiDriverConfig|null
     */
    public function getParallelstoreCsiDriverConfig()
    {
        return $this->parallelstore_csi_driver_config;
    }

    public function hasParallelstoreCsiDriverConfig()
    {
        return isset($this->parallelstore_csi_driver_config);
    }

    public function clearParallelstoreCsiDriverConfig()
    {
        unset($this->parallelstore_csi_driver_config);
    }

    /**
     * Configuration for the Cloud Storage Parallelstore CSI driver.
     *
     * Generated from protobuf field <code>.google.container.v1.ParallelstoreCsiDriverConfig parallelstore_csi_driver_config = 19;</code>
     * @param \Google\Cloud\Container\V1\ParallelstoreCsiDriverConfig $var
     * @return $this
     */
    public function setParallelstoreCsiDriverConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\ParallelstoreCsiDriverConfig::class);
        $this->parallelstore_csi_driver_config = $var;

        return $this;
    }

    /**
     * Optional. Configuration for Ray Operator addon.
     *
     * Generated from protobuf field <code>.google.container.v1.RayOperatorConfig ray_operator_config = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Container\V1\RayOperatorConfig|null
     */
    public function getRayOperatorConfig()
    {
        return $this->ray_operator_config;
    }

    public function hasRayOperatorConfig()
    {
        return isset($this->ray_operator_config);
    }

    public function clearRayOperatorConfig()
    {
        unset($this->ray_operator_config);
    }

    /**
     * Optional. Configuration for Ray Operator addon.
     *
     * Generated from protobuf field <code>.google.container.v1.RayOperatorConfig ray_operator_config = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Container\V1\RayOperatorConfig $var
     * @return $this
     */
    public function setRayOperatorConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\RayOperatorConfig::class);
        $this->ray_operator_config = $var;

        return $this;
    }

}

