<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/load_balancer.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information related to the load balancer associated with the
 * finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.LoadBalancer</code>
 */
class LoadBalancer extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the load balancer associated with the finding.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the load balancer associated with the finding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\LoadBalancer::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the load balancer associated with the finding.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the load balancer associated with the finding.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

