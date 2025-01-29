<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between a Google Analytics property and a Search Ads 360 entity.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.SearchAds360Link</code>
 */
class SearchAds360Link extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name for this SearchAds360Link resource.
     * Format: properties/{propertyId}/searchAds360Links/{linkId}
     * Note: linkId is not the Search Ads 360 advertiser ID
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Immutable. This field represents the Advertiser ID of the Search Ads 360
     * Advertiser. that has been linked.
     *
     * Generated from protobuf field <code>string advertiser_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $advertiser_id = '';
    /**
     * Immutable. Enables the import of campaign data from Search Ads 360 into the
     * Google Analytics property. After link creation, this can only be updated
     * from the Search Ads 360 product. If this field is not set on create, it
     * will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue campaign_data_sharing_enabled = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $campaign_data_sharing_enabled = null;
    /**
     * Immutable. Enables the import of cost data from Search Ads 360 to the
     * Google Analytics property. This can only be enabled if
     * campaign_data_sharing_enabled is enabled. After link creation, this can
     * only be updated from the Search Ads 360 product. If this field is not set
     * on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue cost_data_sharing_enabled = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $cost_data_sharing_enabled = null;
    /**
     * Output only. The display name of the Search Ads 360 Advertiser.
     * Allows users to easily identify the linked resource.
     *
     * Generated from protobuf field <code>string advertiser_display_name = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $advertiser_display_name = '';
    /**
     * Enables personalized advertising features with this integration.
     * If this field is not set on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ads_personalization_enabled = 6;</code>
     */
    protected $ads_personalization_enabled = null;
    /**
     * Enables export of site stats with this integration.
     * If this field is not set on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue site_stats_sharing_enabled = 7;</code>
     */
    protected $site_stats_sharing_enabled = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name for this SearchAds360Link resource.
     *           Format: properties/{propertyId}/searchAds360Links/{linkId}
     *           Note: linkId is not the Search Ads 360 advertiser ID
     *     @type string $advertiser_id
     *           Immutable. This field represents the Advertiser ID of the Search Ads 360
     *           Advertiser. that has been linked.
     *     @type \Google\Protobuf\BoolValue $campaign_data_sharing_enabled
     *           Immutable. Enables the import of campaign data from Search Ads 360 into the
     *           Google Analytics property. After link creation, this can only be updated
     *           from the Search Ads 360 product. If this field is not set on create, it
     *           will be defaulted to true.
     *     @type \Google\Protobuf\BoolValue $cost_data_sharing_enabled
     *           Immutable. Enables the import of cost data from Search Ads 360 to the
     *           Google Analytics property. This can only be enabled if
     *           campaign_data_sharing_enabled is enabled. After link creation, this can
     *           only be updated from the Search Ads 360 product. If this field is not set
     *           on create, it will be defaulted to true.
     *     @type string $advertiser_display_name
     *           Output only. The display name of the Search Ads 360 Advertiser.
     *           Allows users to easily identify the linked resource.
     *     @type \Google\Protobuf\BoolValue $ads_personalization_enabled
     *           Enables personalized advertising features with this integration.
     *           If this field is not set on create, it will be defaulted to true.
     *     @type \Google\Protobuf\BoolValue $site_stats_sharing_enabled
     *           Enables export of site stats with this integration.
     *           If this field is not set on create, it will be defaulted to true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name for this SearchAds360Link resource.
     * Format: properties/{propertyId}/searchAds360Links/{linkId}
     * Note: linkId is not the Search Ads 360 advertiser ID
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name for this SearchAds360Link resource.
     * Format: properties/{propertyId}/searchAds360Links/{linkId}
     * Note: linkId is not the Search Ads 360 advertiser ID
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Immutable. This field represents the Advertiser ID of the Search Ads 360
     * Advertiser. that has been linked.
     *
     * Generated from protobuf field <code>string advertiser_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * Immutable. This field represents the Advertiser ID of the Search Ads 360
     * Advertiser. that has been linked.
     *
     * Generated from protobuf field <code>string advertiser_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setAdvertiserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->advertiser_id = $var;

        return $this;
    }

    /**
     * Immutable. Enables the import of campaign data from Search Ads 360 into the
     * Google Analytics property. After link creation, this can only be updated
     * from the Search Ads 360 product. If this field is not set on create, it
     * will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue campaign_data_sharing_enabled = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getCampaignDataSharingEnabled()
    {
        return $this->campaign_data_sharing_enabled;
    }

    public function hasCampaignDataSharingEnabled()
    {
        return isset($this->campaign_data_sharing_enabled);
    }

    public function clearCampaignDataSharingEnabled()
    {
        unset($this->campaign_data_sharing_enabled);
    }

    /**
     * Returns the unboxed value from <code>getCampaignDataSharingEnabled()</code>

     * Immutable. Enables the import of campaign data from Search Ads 360 into the
     * Google Analytics property. After link creation, this can only be updated
     * from the Search Ads 360 product. If this field is not set on create, it
     * will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue campaign_data_sharing_enabled = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return bool|null
     */
    public function getCampaignDataSharingEnabledUnwrapped()
    {
        return $this->readWrapperValue("campaign_data_sharing_enabled");
    }

    /**
     * Immutable. Enables the import of campaign data from Search Ads 360 into the
     * Google Analytics property. After link creation, this can only be updated
     * from the Search Ads 360 product. If this field is not set on create, it
     * will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue campaign_data_sharing_enabled = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setCampaignDataSharingEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->campaign_data_sharing_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Immutable. Enables the import of campaign data from Search Ads 360 into the
     * Google Analytics property. After link creation, this can only be updated
     * from the Search Ads 360 product. If this field is not set on create, it
     * will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue campaign_data_sharing_enabled = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setCampaignDataSharingEnabledUnwrapped($var)
    {
        $this->writeWrapperValue("campaign_data_sharing_enabled", $var);
        return $this;}

    /**
     * Immutable. Enables the import of cost data from Search Ads 360 to the
     * Google Analytics property. This can only be enabled if
     * campaign_data_sharing_enabled is enabled. After link creation, this can
     * only be updated from the Search Ads 360 product. If this field is not set
     * on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue cost_data_sharing_enabled = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getCostDataSharingEnabled()
    {
        return $this->cost_data_sharing_enabled;
    }

    public function hasCostDataSharingEnabled()
    {
        return isset($this->cost_data_sharing_enabled);
    }

    public function clearCostDataSharingEnabled()
    {
        unset($this->cost_data_sharing_enabled);
    }

    /**
     * Returns the unboxed value from <code>getCostDataSharingEnabled()</code>

     * Immutable. Enables the import of cost data from Search Ads 360 to the
     * Google Analytics property. This can only be enabled if
     * campaign_data_sharing_enabled is enabled. After link creation, this can
     * only be updated from the Search Ads 360 product. If this field is not set
     * on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue cost_data_sharing_enabled = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return bool|null
     */
    public function getCostDataSharingEnabledUnwrapped()
    {
        return $this->readWrapperValue("cost_data_sharing_enabled");
    }

    /**
     * Immutable. Enables the import of cost data from Search Ads 360 to the
     * Google Analytics property. This can only be enabled if
     * campaign_data_sharing_enabled is enabled. After link creation, this can
     * only be updated from the Search Ads 360 product. If this field is not set
     * on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue cost_data_sharing_enabled = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setCostDataSharingEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->cost_data_sharing_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Immutable. Enables the import of cost data from Search Ads 360 to the
     * Google Analytics property. This can only be enabled if
     * campaign_data_sharing_enabled is enabled. After link creation, this can
     * only be updated from the Search Ads 360 product. If this field is not set
     * on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue cost_data_sharing_enabled = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setCostDataSharingEnabledUnwrapped($var)
    {
        $this->writeWrapperValue("cost_data_sharing_enabled", $var);
        return $this;}

    /**
     * Output only. The display name of the Search Ads 360 Advertiser.
     * Allows users to easily identify the linked resource.
     *
     * Generated from protobuf field <code>string advertiser_display_name = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getAdvertiserDisplayName()
    {
        return $this->advertiser_display_name;
    }

    /**
     * Output only. The display name of the Search Ads 360 Advertiser.
     * Allows users to easily identify the linked resource.
     *
     * Generated from protobuf field <code>string advertiser_display_name = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setAdvertiserDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->advertiser_display_name = $var;

        return $this;
    }

    /**
     * Enables personalized advertising features with this integration.
     * If this field is not set on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ads_personalization_enabled = 6;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getAdsPersonalizationEnabled()
    {
        return $this->ads_personalization_enabled;
    }

    public function hasAdsPersonalizationEnabled()
    {
        return isset($this->ads_personalization_enabled);
    }

    public function clearAdsPersonalizationEnabled()
    {
        unset($this->ads_personalization_enabled);
    }

    /**
     * Returns the unboxed value from <code>getAdsPersonalizationEnabled()</code>

     * Enables personalized advertising features with this integration.
     * If this field is not set on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ads_personalization_enabled = 6;</code>
     * @return bool|null
     */
    public function getAdsPersonalizationEnabledUnwrapped()
    {
        return $this->readWrapperValue("ads_personalization_enabled");
    }

    /**
     * Enables personalized advertising features with this integration.
     * If this field is not set on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ads_personalization_enabled = 6;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setAdsPersonalizationEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->ads_personalization_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Enables personalized advertising features with this integration.
     * If this field is not set on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ads_personalization_enabled = 6;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setAdsPersonalizationEnabledUnwrapped($var)
    {
        $this->writeWrapperValue("ads_personalization_enabled", $var);
        return $this;}

    /**
     * Enables export of site stats with this integration.
     * If this field is not set on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue site_stats_sharing_enabled = 7;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getSiteStatsSharingEnabled()
    {
        return $this->site_stats_sharing_enabled;
    }

    public function hasSiteStatsSharingEnabled()
    {
        return isset($this->site_stats_sharing_enabled);
    }

    public function clearSiteStatsSharingEnabled()
    {
        unset($this->site_stats_sharing_enabled);
    }

    /**
     * Returns the unboxed value from <code>getSiteStatsSharingEnabled()</code>

     * Enables export of site stats with this integration.
     * If this field is not set on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue site_stats_sharing_enabled = 7;</code>
     * @return bool|null
     */
    public function getSiteStatsSharingEnabledUnwrapped()
    {
        return $this->readWrapperValue("site_stats_sharing_enabled");
    }

    /**
     * Enables export of site stats with this integration.
     * If this field is not set on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue site_stats_sharing_enabled = 7;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setSiteStatsSharingEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->site_stats_sharing_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Enables export of site stats with this integration.
     * If this field is not set on create, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue site_stats_sharing_enabled = 7;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setSiteStatsSharingEnabledUnwrapped($var)
    {
        $this->writeWrapperValue("site_stats_sharing_enabled", $var);
        return $this;}

}

