<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/job_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [JobService.ListNasTrialDetails][google.cloud.aiplatform.v1.JobService.ListNasTrialDetails]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListNasTrialDetailsResponse</code>
 */
class ListNasTrialDetailsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of top NasTrials in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NasTrialDetail nas_trial_details = 1;</code>
     */
    private $nas_trial_details;
    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListNasTrialDetailsRequest.page_token][google.cloud.aiplatform.v1.ListNasTrialDetailsRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\NasTrialDetail>|\Google\Protobuf\Internal\RepeatedField $nas_trial_details
     *           List of top NasTrials in the requested page.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     *           Pass to
     *           [ListNasTrialDetailsRequest.page_token][google.cloud.aiplatform.v1.ListNasTrialDetailsRequest.page_token]
     *           to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of top NasTrials in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NasTrialDetail nas_trial_details = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNasTrialDetails()
    {
        return $this->nas_trial_details;
    }

    /**
     * List of top NasTrials in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NasTrialDetail nas_trial_details = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\NasTrialDetail>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNasTrialDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\NasTrialDetail::class);
        $this->nas_trial_details = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListNasTrialDetailsRequest.page_token][google.cloud.aiplatform.v1.ListNasTrialDetailsRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListNasTrialDetailsRequest.page_token][google.cloud.aiplatform.v1.ListNasTrialDetailsRequest.page_token]
     * to obtain that page.
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

}

