<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to update a view.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.UpdateViewRequest</code>
 */
class UpdateViewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The new view.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.View view = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $view = null;
    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\ContactCenterInsights\V1\View $view       Required. The new view.
     * @param \Google\Protobuf\FieldMask                  $updateMask The list of fields to be updated.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\UpdateViewRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ContactCenterInsights\V1\View $view, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setView($view)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ContactCenterInsights\V1\View $view
     *           Required. The new view.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The list of fields to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The new view.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.View view = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\View|null
     */
    public function getView()
    {
        return $this->view;
    }

    public function hasView()
    {
        return isset($this->view);
    }

    public function clearView()
    {
        unset($this->view);
    }

    /**
     * Required. The new view.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.View view = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\View $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\View::class);
        $this->view = $var;

        return $this;
    }

    /**
     * The list of fields to be updated.
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
     * The list of fields to be updated.
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

