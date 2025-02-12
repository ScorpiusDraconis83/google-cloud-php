<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/quota_rule.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListQuotaRulesResponse is the response to a ListQuotaRulesRequest.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.ListQuotaRulesResponse</code>
 */
class ListQuotaRulesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of quota rules
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.QuotaRule quota_rules = 1;</code>
     */
    private $quota_rules;
    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\NetApp\V1\QuotaRule>|\Google\Protobuf\Internal\RepeatedField $quota_rules
     *           List of quota rules
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\QuotaRule::initOnce();
        parent::__construct($data);
    }

    /**
     * List of quota rules
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.QuotaRule quota_rules = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuotaRules()
    {
        return $this->quota_rules;
    }

    /**
     * List of quota rules
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.QuotaRule quota_rules = 1;</code>
     * @param array<\Google\Cloud\NetApp\V1\QuotaRule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuotaRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetApp\V1\QuotaRule::class);
        $this->quota_rules = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

