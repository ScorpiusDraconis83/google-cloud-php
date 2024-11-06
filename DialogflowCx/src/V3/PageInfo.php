<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/webhook.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents page information communicated to and from the webhook.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.PageInfo</code>
 */
class PageInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Always present for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest]. Ignored for
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * unique identifier of the current page. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/pages/<PageID>`.
     *
     * Generated from protobuf field <code>string current_page = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $current_page = '';
    /**
     * Always present for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest]. Ignored for
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * display name of the current page.
     *
     * Generated from protobuf field <code>string display_name = 4;</code>
     */
    protected $display_name = '';
    /**
     * Optional for both
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     * Information about the form.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.PageInfo.FormInfo form_info = 3;</code>
     */
    protected $form_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $current_page
     *           Always present for
     *           [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest]. Ignored for
     *           [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     *           unique identifier of the current page. Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/pages/<PageID>`.
     *     @type string $display_name
     *           Always present for
     *           [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest]. Ignored for
     *           [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     *           display name of the current page.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\PageInfo\FormInfo $form_info
     *           Optional for both
     *           [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     *           [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     *           Information about the form.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Webhook::initOnce();
        parent::__construct($data);
    }

    /**
     * Always present for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest]. Ignored for
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * unique identifier of the current page. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/pages/<PageID>`.
     *
     * Generated from protobuf field <code>string current_page = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCurrentPage()
    {
        return $this->current_page;
    }

    /**
     * Always present for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest]. Ignored for
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * unique identifier of the current page. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/pages/<PageID>`.
     *
     * Generated from protobuf field <code>string current_page = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCurrentPage($var)
    {
        GPBUtil::checkString($var, True);
        $this->current_page = $var;

        return $this;
    }

    /**
     * Always present for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest]. Ignored for
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * display name of the current page.
     *
     * Generated from protobuf field <code>string display_name = 4;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Always present for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest]. Ignored for
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * display name of the current page.
     *
     * Generated from protobuf field <code>string display_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional for both
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     * Information about the form.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.PageInfo.FormInfo form_info = 3;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\PageInfo\FormInfo|null
     */
    public function getFormInfo()
    {
        return $this->form_info;
    }

    public function hasFormInfo()
    {
        return isset($this->form_info);
    }

    public function clearFormInfo()
    {
        unset($this->form_info);
    }

    /**
     * Optional for both
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     * Information about the form.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.PageInfo.FormInfo form_info = 3;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\PageInfo\FormInfo $var
     * @return $this
     */
    public function setFormInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\PageInfo\FormInfo::class);
        $this->form_info = $var;

        return $this;
    }

}

