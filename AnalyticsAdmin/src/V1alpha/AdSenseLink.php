<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between a Google Analytics property and an AdSense for Content ad
 * client.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.AdSenseLink</code>
 */
class AdSenseLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name for this AdSense Link resource.
     * Format: properties/{propertyId}/adSenseLinks/{linkId}
     * Example: properties/1234/adSenseLinks/6789
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Immutable. The AdSense ad client code that the Google Analytics property is
     * linked to. Example format: "ca-pub-1234567890"
     *
     * Generated from protobuf field <code>string ad_client_code = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $ad_client_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name for this AdSense Link resource.
     *           Format: properties/{propertyId}/adSenseLinks/{linkId}
     *           Example: properties/1234/adSenseLinks/6789
     *     @type string $ad_client_code
     *           Immutable. The AdSense ad client code that the Google Analytics property is
     *           linked to. Example format: "ca-pub-1234567890"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name for this AdSense Link resource.
     * Format: properties/{propertyId}/adSenseLinks/{linkId}
     * Example: properties/1234/adSenseLinks/6789
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name for this AdSense Link resource.
     * Format: properties/{propertyId}/adSenseLinks/{linkId}
     * Example: properties/1234/adSenseLinks/6789
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
     * Immutable. The AdSense ad client code that the Google Analytics property is
     * linked to. Example format: "ca-pub-1234567890"
     *
     * Generated from protobuf field <code>string ad_client_code = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getAdClientCode()
    {
        return $this->ad_client_code;
    }

    /**
     * Immutable. The AdSense ad client code that the Google Analytics property is
     * linked to. Example format: "ca-pub-1234567890"
     *
     * Generated from protobuf field <code>string ad_client_code = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setAdClientCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_client_code = $var;

        return $this;
    }

}

