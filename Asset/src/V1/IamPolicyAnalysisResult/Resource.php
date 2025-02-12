<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/assets.proto

namespace Google\Cloud\Asset\V1\IamPolicyAnalysisResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Google Cloud resource under analysis.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.IamPolicyAnalysisResult.Resource</code>
 */
class Resource extends \Google\Protobuf\Internal\Message
{
    /**
     * The [full resource
     * name](https://cloud.google.com/asset-inventory/docs/resource-name-format)
     *
     * Generated from protobuf field <code>string full_resource_name = 1;</code>
     */
    protected $full_resource_name = '';
    /**
     * The analysis state of this resource.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisState analysis_state = 2;</code>
     */
    protected $analysis_state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $full_resource_name
     *           The [full resource
     *           name](https://cloud.google.com/asset-inventory/docs/resource-name-format)
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisState $analysis_state
     *           The analysis state of this resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        parent::__construct($data);
    }

    /**
     * The [full resource
     * name](https://cloud.google.com/asset-inventory/docs/resource-name-format)
     *
     * Generated from protobuf field <code>string full_resource_name = 1;</code>
     * @return string
     */
    public function getFullResourceName()
    {
        return $this->full_resource_name;
    }

    /**
     * The [full resource
     * name](https://cloud.google.com/asset-inventory/docs/resource-name-format)
     *
     * Generated from protobuf field <code>string full_resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFullResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_resource_name = $var;

        return $this;
    }

    /**
     * The analysis state of this resource.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisState analysis_state = 2;</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisState|null
     */
    public function getAnalysisState()
    {
        return $this->analysis_state;
    }

    public function hasAnalysisState()
    {
        return isset($this->analysis_state);
    }

    public function clearAnalysisState()
    {
        unset($this->analysis_state);
    }

    /**
     * The analysis state of this resource.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisState analysis_state = 2;</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisState $var
     * @return $this
     */
    public function setAnalysisState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisState::class);
        $this->analysis_state = $var;

        return $this;
    }

}


