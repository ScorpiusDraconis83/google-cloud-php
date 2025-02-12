<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For display only. Metadata associated with a Compute Engine instance.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.InstanceInfo</code>
 */
class InstanceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of a Compute Engine instance.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    protected $display_name = '';
    /**
     * URI of a Compute Engine instance.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    protected $uri = '';
    /**
     * Name of the network interface of a Compute Engine instance.
     *
     * Generated from protobuf field <code>string interface = 3;</code>
     */
    protected $interface = '';
    /**
     * URI of a Compute Engine network.
     *
     * Generated from protobuf field <code>string network_uri = 4;</code>
     */
    protected $network_uri = '';
    /**
     * Internal IP address of the network interface.
     *
     * Generated from protobuf field <code>string internal_ip = 5;</code>
     */
    protected $internal_ip = '';
    /**
     * External IP address of the network interface.
     *
     * Generated from protobuf field <code>string external_ip = 6;</code>
     */
    protected $external_ip = '';
    /**
     * Network tags configured on the instance.
     *
     * Generated from protobuf field <code>repeated string network_tags = 7;</code>
     */
    private $network_tags;
    /**
     * Service account authorized for the instance.
     *
     * Generated from protobuf field <code>string service_account = 8 [deprecated = true];</code>
     * @deprecated
     */
    protected $service_account = '';
    /**
     * URI of the PSC network attachment the NIC is attached to (if relevant).
     *
     * Generated from protobuf field <code>string psc_network_attachment_uri = 9;</code>
     */
    protected $psc_network_attachment_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Name of a Compute Engine instance.
     *     @type string $uri
     *           URI of a Compute Engine instance.
     *     @type string $interface
     *           Name of the network interface of a Compute Engine instance.
     *     @type string $network_uri
     *           URI of a Compute Engine network.
     *     @type string $internal_ip
     *           Internal IP address of the network interface.
     *     @type string $external_ip
     *           External IP address of the network interface.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $network_tags
     *           Network tags configured on the instance.
     *     @type string $service_account
     *           Service account authorized for the instance.
     *     @type string $psc_network_attachment_uri
     *           URI of the PSC network attachment the NIC is attached to (if relevant).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of a Compute Engine instance.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Name of a Compute Engine instance.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
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
     * URI of a Compute Engine instance.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * URI of a Compute Engine instance.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Name of the network interface of a Compute Engine instance.
     *
     * Generated from protobuf field <code>string interface = 3;</code>
     * @return string
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Name of the network interface of a Compute Engine instance.
     *
     * Generated from protobuf field <code>string interface = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInterface($var)
    {
        GPBUtil::checkString($var, True);
        $this->interface = $var;

        return $this;
    }

    /**
     * URI of a Compute Engine network.
     *
     * Generated from protobuf field <code>string network_uri = 4;</code>
     * @return string
     */
    public function getNetworkUri()
    {
        return $this->network_uri;
    }

    /**
     * URI of a Compute Engine network.
     *
     * Generated from protobuf field <code>string network_uri = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_uri = $var;

        return $this;
    }

    /**
     * Internal IP address of the network interface.
     *
     * Generated from protobuf field <code>string internal_ip = 5;</code>
     * @return string
     */
    public function getInternalIp()
    {
        return $this->internal_ip;
    }

    /**
     * Internal IP address of the network interface.
     *
     * Generated from protobuf field <code>string internal_ip = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInternalIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->internal_ip = $var;

        return $this;
    }

    /**
     * External IP address of the network interface.
     *
     * Generated from protobuf field <code>string external_ip = 6;</code>
     * @return string
     */
    public function getExternalIp()
    {
        return $this->external_ip;
    }

    /**
     * External IP address of the network interface.
     *
     * Generated from protobuf field <code>string external_ip = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->external_ip = $var;

        return $this;
    }

    /**
     * Network tags configured on the instance.
     *
     * Generated from protobuf field <code>repeated string network_tags = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkTags()
    {
        return $this->network_tags;
    }

    /**
     * Network tags configured on the instance.
     *
     * Generated from protobuf field <code>repeated string network_tags = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->network_tags = $arr;

        return $this;
    }

    /**
     * Service account authorized for the instance.
     *
     * Generated from protobuf field <code>string service_account = 8 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getServiceAccount()
    {
        @trigger_error('service_account is deprecated.', E_USER_DEPRECATED);
        return $this->service_account;
    }

    /**
     * Service account authorized for the instance.
     *
     * Generated from protobuf field <code>string service_account = 8 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setServiceAccount($var)
    {
        @trigger_error('service_account is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * URI of the PSC network attachment the NIC is attached to (if relevant).
     *
     * Generated from protobuf field <code>string psc_network_attachment_uri = 9;</code>
     * @return string
     */
    public function getPscNetworkAttachmentUri()
    {
        return $this->psc_network_attachment_uri;
    }

    /**
     * URI of the PSC network attachment the NIC is attached to (if relevant).
     *
     * Generated from protobuf field <code>string psc_network_attachment_uri = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setPscNetworkAttachmentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->psc_network_attachment_uri = $var;

        return $this;
    }

}

