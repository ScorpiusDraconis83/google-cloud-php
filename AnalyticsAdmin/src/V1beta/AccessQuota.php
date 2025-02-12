<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/access_report.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Current state of all quotas for this Analytics property. If any quota for a
 * property is exhausted, all requests to that property will return Resource
 * Exhausted errors.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.AccessQuota</code>
 */
class AccessQuota extends \Google\Protobuf\Internal\Message
{
    /**
     * Properties can use 250,000 tokens per day. Most requests consume fewer than
     * 10 tokens.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus tokens_per_day = 1;</code>
     */
    protected $tokens_per_day = null;
    /**
     * Properties can use 50,000 tokens per hour. An API request consumes a single
     * number of tokens, and that number is deducted from all of the hourly,
     * daily, and per project hourly quotas.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus tokens_per_hour = 2;</code>
     */
    protected $tokens_per_hour = null;
    /**
     * Properties can use up to 50 concurrent requests.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus concurrent_requests = 3;</code>
     */
    protected $concurrent_requests = null;
    /**
     * Properties and cloud project pairs can have up to 50 server errors per
     * hour.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus server_errors_per_project_per_hour = 4;</code>
     */
    protected $server_errors_per_project_per_hour = null;
    /**
     * Properties can use up to 25% of their tokens per project per hour. This
     * amounts to Analytics 360 Properties can use 12,500 tokens per project per
     * hour. An API request consumes a single number of tokens, and that number is
     * deducted from all of the hourly, daily, and per project hourly quotas.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus tokens_per_project_per_hour = 5;</code>
     */
    protected $tokens_per_project_per_hour = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1beta\AccessQuotaStatus $tokens_per_day
     *           Properties can use 250,000 tokens per day. Most requests consume fewer than
     *           10 tokens.
     *     @type \Google\Analytics\Admin\V1beta\AccessQuotaStatus $tokens_per_hour
     *           Properties can use 50,000 tokens per hour. An API request consumes a single
     *           number of tokens, and that number is deducted from all of the hourly,
     *           daily, and per project hourly quotas.
     *     @type \Google\Analytics\Admin\V1beta\AccessQuotaStatus $concurrent_requests
     *           Properties can use up to 50 concurrent requests.
     *     @type \Google\Analytics\Admin\V1beta\AccessQuotaStatus $server_errors_per_project_per_hour
     *           Properties and cloud project pairs can have up to 50 server errors per
     *           hour.
     *     @type \Google\Analytics\Admin\V1beta\AccessQuotaStatus $tokens_per_project_per_hour
     *           Properties can use up to 25% of their tokens per project per hour. This
     *           amounts to Analytics 360 Properties can use 12,500 tokens per project per
     *           hour. An API request consumes a single number of tokens, and that number is
     *           deducted from all of the hourly, daily, and per project hourly quotas.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\AccessReport::initOnce();
        parent::__construct($data);
    }

    /**
     * Properties can use 250,000 tokens per day. Most requests consume fewer than
     * 10 tokens.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus tokens_per_day = 1;</code>
     * @return \Google\Analytics\Admin\V1beta\AccessQuotaStatus|null
     */
    public function getTokensPerDay()
    {
        return $this->tokens_per_day;
    }

    public function hasTokensPerDay()
    {
        return isset($this->tokens_per_day);
    }

    public function clearTokensPerDay()
    {
        unset($this->tokens_per_day);
    }

    /**
     * Properties can use 250,000 tokens per day. Most requests consume fewer than
     * 10 tokens.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus tokens_per_day = 1;</code>
     * @param \Google\Analytics\Admin\V1beta\AccessQuotaStatus $var
     * @return $this
     */
    public function setTokensPerDay($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1beta\AccessQuotaStatus::class);
        $this->tokens_per_day = $var;

        return $this;
    }

    /**
     * Properties can use 50,000 tokens per hour. An API request consumes a single
     * number of tokens, and that number is deducted from all of the hourly,
     * daily, and per project hourly quotas.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus tokens_per_hour = 2;</code>
     * @return \Google\Analytics\Admin\V1beta\AccessQuotaStatus|null
     */
    public function getTokensPerHour()
    {
        return $this->tokens_per_hour;
    }

    public function hasTokensPerHour()
    {
        return isset($this->tokens_per_hour);
    }

    public function clearTokensPerHour()
    {
        unset($this->tokens_per_hour);
    }

    /**
     * Properties can use 50,000 tokens per hour. An API request consumes a single
     * number of tokens, and that number is deducted from all of the hourly,
     * daily, and per project hourly quotas.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus tokens_per_hour = 2;</code>
     * @param \Google\Analytics\Admin\V1beta\AccessQuotaStatus $var
     * @return $this
     */
    public function setTokensPerHour($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1beta\AccessQuotaStatus::class);
        $this->tokens_per_hour = $var;

        return $this;
    }

    /**
     * Properties can use up to 50 concurrent requests.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus concurrent_requests = 3;</code>
     * @return \Google\Analytics\Admin\V1beta\AccessQuotaStatus|null
     */
    public function getConcurrentRequests()
    {
        return $this->concurrent_requests;
    }

    public function hasConcurrentRequests()
    {
        return isset($this->concurrent_requests);
    }

    public function clearConcurrentRequests()
    {
        unset($this->concurrent_requests);
    }

    /**
     * Properties can use up to 50 concurrent requests.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus concurrent_requests = 3;</code>
     * @param \Google\Analytics\Admin\V1beta\AccessQuotaStatus $var
     * @return $this
     */
    public function setConcurrentRequests($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1beta\AccessQuotaStatus::class);
        $this->concurrent_requests = $var;

        return $this;
    }

    /**
     * Properties and cloud project pairs can have up to 50 server errors per
     * hour.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus server_errors_per_project_per_hour = 4;</code>
     * @return \Google\Analytics\Admin\V1beta\AccessQuotaStatus|null
     */
    public function getServerErrorsPerProjectPerHour()
    {
        return $this->server_errors_per_project_per_hour;
    }

    public function hasServerErrorsPerProjectPerHour()
    {
        return isset($this->server_errors_per_project_per_hour);
    }

    public function clearServerErrorsPerProjectPerHour()
    {
        unset($this->server_errors_per_project_per_hour);
    }

    /**
     * Properties and cloud project pairs can have up to 50 server errors per
     * hour.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus server_errors_per_project_per_hour = 4;</code>
     * @param \Google\Analytics\Admin\V1beta\AccessQuotaStatus $var
     * @return $this
     */
    public function setServerErrorsPerProjectPerHour($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1beta\AccessQuotaStatus::class);
        $this->server_errors_per_project_per_hour = $var;

        return $this;
    }

    /**
     * Properties can use up to 25% of their tokens per project per hour. This
     * amounts to Analytics 360 Properties can use 12,500 tokens per project per
     * hour. An API request consumes a single number of tokens, and that number is
     * deducted from all of the hourly, daily, and per project hourly quotas.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus tokens_per_project_per_hour = 5;</code>
     * @return \Google\Analytics\Admin\V1beta\AccessQuotaStatus|null
     */
    public function getTokensPerProjectPerHour()
    {
        return $this->tokens_per_project_per_hour;
    }

    public function hasTokensPerProjectPerHour()
    {
        return isset($this->tokens_per_project_per_hour);
    }

    public function clearTokensPerProjectPerHour()
    {
        unset($this->tokens_per_project_per_hour);
    }

    /**
     * Properties can use up to 25% of their tokens per project per hour. This
     * amounts to Analytics 360 Properties can use 12,500 tokens per project per
     * hour. An API request consumes a single number of tokens, and that number is
     * deducted from all of the hourly, daily, and per project hourly quotas.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessQuotaStatus tokens_per_project_per_hour = 5;</code>
     * @param \Google\Analytics\Admin\V1beta\AccessQuotaStatus $var
     * @return $this
     */
    public function setTokensPerProjectPerHour($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1beta\AccessQuotaStatus::class);
        $this->tokens_per_project_per_hour = $var;

        return $this;
    }

}

