<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to UpdateIapSettings.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.UpdateIapSettingsRequest</code>
 */
class UpdateIapSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The new values for the IAP settings to be updated.
     * Authorization: Requires the `updateSettings` permission for the associated
     * resource.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.IapSettings iap_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $iap_settings = null;
    /**
     * The field mask specifying which IAP settings should be updated.
     * If omitted, then all of the settings are updated. See
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     * Note: All IAP reauth settings must always be set together, using the
     * field mask: `iapSettings.accessSettings.reauthSettings`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Iap\V1\IapSettings $iap_settings
     *           Required. The new values for the IAP settings to be updated.
     *           Authorization: Requires the `updateSettings` permission for the associated
     *           resource.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The field mask specifying which IAP settings should be updated.
     *           If omitted, then all of the settings are updated. See
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     *           Note: All IAP reauth settings must always be set together, using the
     *           field mask: `iapSettings.accessSettings.reauthSettings`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The new values for the IAP settings to be updated.
     * Authorization: Requires the `updateSettings` permission for the associated
     * resource.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.IapSettings iap_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Iap\V1\IapSettings|null
     */
    public function getIapSettings()
    {
        return $this->iap_settings;
    }

    public function hasIapSettings()
    {
        return isset($this->iap_settings);
    }

    public function clearIapSettings()
    {
        unset($this->iap_settings);
    }

    /**
     * Required. The new values for the IAP settings to be updated.
     * Authorization: Requires the `updateSettings` permission for the associated
     * resource.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.IapSettings iap_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Iap\V1\IapSettings $var
     * @return $this
     */
    public function setIapSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\IapSettings::class);
        $this->iap_settings = $var;

        return $this;
    }

    /**
     * The field mask specifying which IAP settings should be updated.
     * If omitted, then all of the settings are updated. See
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     * Note: All IAP reauth settings must always be set together, using the
     * field mask: `iapSettings.accessSettings.reauthSettings`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The field mask specifying which IAP settings should be updated.
     * If omitted, then all of the settings are updated. See
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     * Note: All IAP reauth settings must always be set together, using the
     * field mask: `iapSettings.accessSettings.reauthSettings`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

