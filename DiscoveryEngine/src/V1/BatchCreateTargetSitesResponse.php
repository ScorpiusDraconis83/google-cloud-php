<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/site_search_engine_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [SiteSearchEngineService.BatchCreateTargetSites][google.cloud.discoveryengine.v1.SiteSearchEngineService.BatchCreateTargetSites]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.BatchCreateTargetSitesResponse</code>
 */
class BatchCreateTargetSitesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * TargetSites created.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.TargetSite target_sites = 1;</code>
     */
    private $target_sites;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\TargetSite>|\Google\Protobuf\Internal\RepeatedField $target_sites
     *           TargetSites created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SiteSearchEngineService::initOnce();
        parent::__construct($data);
    }

    /**
     * TargetSites created.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.TargetSite target_sites = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetSites()
    {
        return $this->target_sites;
    }

    /**
     * TargetSites created.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.TargetSite target_sites = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\TargetSite>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetSites($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\TargetSite::class);
        $this->target_sites = $arr;

        return $this;
    }

}

