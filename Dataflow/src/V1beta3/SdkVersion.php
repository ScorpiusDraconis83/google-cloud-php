<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/jobs.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The version of the SDK used to run the job.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.SdkVersion</code>
 */
class SdkVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * The version of the SDK used to run the job.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    protected $version = '';
    /**
     * A readable string describing the version of the SDK.
     *
     * Generated from protobuf field <code>string version_display_name = 2;</code>
     */
    protected $version_display_name = '';
    /**
     * The support status for this SDK version.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.SdkVersion.SdkSupportStatus sdk_support_status = 3;</code>
     */
    protected $sdk_support_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           The version of the SDK used to run the job.
     *     @type string $version_display_name
     *           A readable string describing the version of the SDK.
     *     @type int $sdk_support_status
     *           The support status for this SDK version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * The version of the SDK used to run the job.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of the SDK used to run the job.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * A readable string describing the version of the SDK.
     *
     * Generated from protobuf field <code>string version_display_name = 2;</code>
     * @return string
     */
    public function getVersionDisplayName()
    {
        return $this->version_display_name;
    }

    /**
     * A readable string describing the version of the SDK.
     *
     * Generated from protobuf field <code>string version_display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersionDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_display_name = $var;

        return $this;
    }

    /**
     * The support status for this SDK version.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.SdkVersion.SdkSupportStatus sdk_support_status = 3;</code>
     * @return int
     */
    public function getSdkSupportStatus()
    {
        return $this->sdk_support_status;
    }

    /**
     * The support status for this SDK version.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.SdkVersion.SdkSupportStatus sdk_support_status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSdkSupportStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\SdkVersion\SdkSupportStatus::class);
        $this->sdk_support_status = $var;

        return $this;
    }

}

