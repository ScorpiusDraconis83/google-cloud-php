<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a regional Commitment resource. Creating a commitment resource means that you are purchasing a committed use contract with an explicit start and end time. You can create commitments based on vCPUs and memory usage and receive discounted rates. For full details, read Signing Up for Committed Use Discounts.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Commitment</code>
 */
class Commitment extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies whether to enable automatic renewal for the commitment. The default value is false if not specified. The field can be updated until the day of the commitment expiration at 12:00am PST. If the field is set to true, the commitment will be automatically renewed for either one or three years according to the terms of the existing commitment.
     *
     * Generated from protobuf field <code>optional bool auto_renew = 495520765;</code>
     */
    private $auto_renew = null;
    /**
     * The category of the commitment. Category MACHINE specifies commitments composed of machine resources such as VCPU or MEMORY, listed in resources. Category LICENSE specifies commitments composed of software licenses, listed in licenseResources. Note that only MACHINE commitments should have a Type specified.
     * Check the Category enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string category = 50511102;</code>
     */
    private $category = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * [Input Only] Optional, specifies the CUD end time requested by the customer in RFC3339 text format. Needed when the customer wants CUD's end date is later than the start date + term duration.
     *
     * Generated from protobuf field <code>optional string custom_end_timestamp = 181770852;</code>
     */
    private $custom_end_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * [Output Only] Commitment end time in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string end_timestamp = 468096690;</code>
     */
    private $end_timestamp = null;
    /**
     * Specifies the already existing reservations to attach to the Commitment. This field is optional, and it can be a full or partial URL. For example, the following are valid URLs to an reservation: - https://www.googleapis.com/compute/v1/projects/project/zones/zone /reservations/reservation - projects/project/zones/zone/reservations/reservation 
     *
     * Generated from protobuf field <code>repeated string existing_reservations = 493028443;</code>
     */
    private $existing_reservations;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] Type of the resource. Always compute#commitment for commitments.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * The license specification required as part of a license commitment.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.LicenseResourceCommitment license_resource = 437955148;</code>
     */
    private $license_resource = null;
    /**
     * List of source commitments to be merged into a new commitment.
     *
     * Generated from protobuf field <code>repeated string merge_source_commitments = 188093761;</code>
     */
    private $merge_source_commitments;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * The plan for this commitment, which determines duration and discount rate. The currently supported plans are TWELVE_MONTH (1 year), and THIRTY_SIX_MONTH (3 years).
     * Check the Plan enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string plan = 3443497;</code>
     */
    private $plan = null;
    /**
     * [Output Only] URL of the region where this commitment may be used.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    private $region = null;
    /**
     * List of create-on-create reservations for this commitment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Reservation reservations = 399717927;</code>
     */
    private $reservations;
    /**
     * [Output Only] Status information for Commitment resource.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CommitmentResourceStatus resource_status = 249429315;</code>
     */
    private $resource_status = null;
    /**
     * A list of commitment amounts for particular resources. Note that VCPU and MEMORY resource commitments must occur together.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ResourceCommitment resources = 164412965;</code>
     */
    private $resources;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * Source commitment to be split into a new commitment.
     *
     * Generated from protobuf field <code>optional string split_source_commitment = 402611156;</code>
     */
    private $split_source_commitment = null;
    /**
     * [Output Only] Commitment start time in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string start_timestamp = 83645817;</code>
     */
    private $start_timestamp = null;
    /**
     * [Output Only] Status of the commitment with regards to eventual expiration (each commitment has an end date defined). One of the following values: NOT_YET_ACTIVE, ACTIVE, EXPIRED.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    private $status = null;
    /**
     * [Output Only] An optional, human-readable explanation of the status.
     *
     * Generated from protobuf field <code>optional string status_message = 297428154;</code>
     */
    private $status_message = null;
    /**
     * The type of commitment, which affects the discount rate and the eligible resources. Type MEMORY_OPTIMIZED specifies a commitment that will only apply to memory optimized machines. Type ACCELERATOR_OPTIMIZED specifies a commitment that will only apply to accelerator optimized machines.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     */
    private $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $auto_renew
     *           Specifies whether to enable automatic renewal for the commitment. The default value is false if not specified. The field can be updated until the day of the commitment expiration at 12:00am PST. If the field is set to true, the commitment will be automatically renewed for either one or three years according to the terms of the existing commitment.
     *     @type string $category
     *           The category of the commitment. Category MACHINE specifies commitments composed of machine resources such as VCPU or MEMORY, listed in resources. Category LICENSE specifies commitments composed of software licenses, listed in licenseResources. Note that only MACHINE commitments should have a Type specified.
     *           Check the Category enum for the list of possible values.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $custom_end_timestamp
     *           [Input Only] Optional, specifies the CUD end time requested by the customer in RFC3339 text format. Needed when the customer wants CUD's end date is later than the start date + term duration.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $end_timestamp
     *           [Output Only] Commitment end time in RFC3339 text format.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $existing_reservations
     *           Specifies the already existing reservations to attach to the Commitment. This field is optional, and it can be a full or partial URL. For example, the following are valid URLs to an reservation: - https://www.googleapis.com/compute/v1/projects/project/zones/zone /reservations/reservation - projects/project/zones/zone/reservations/reservation 
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#commitment for commitments.
     *     @type \Google\Cloud\Compute\V1\LicenseResourceCommitment $license_resource
     *           The license specification required as part of a license commitment.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $merge_source_commitments
     *           List of source commitments to be merged into a new commitment.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string $plan
     *           The plan for this commitment, which determines duration and discount rate. The currently supported plans are TWELVE_MONTH (1 year), and THIRTY_SIX_MONTH (3 years).
     *           Check the Plan enum for the list of possible values.
     *     @type string $region
     *           [Output Only] URL of the region where this commitment may be used.
     *     @type array<\Google\Cloud\Compute\V1\Reservation>|\Google\Protobuf\Internal\RepeatedField $reservations
     *           List of create-on-create reservations for this commitment.
     *     @type \Google\Cloud\Compute\V1\CommitmentResourceStatus $resource_status
     *           [Output Only] Status information for Commitment resource.
     *     @type array<\Google\Cloud\Compute\V1\ResourceCommitment>|\Google\Protobuf\Internal\RepeatedField $resources
     *           A list of commitment amounts for particular resources. Note that VCPU and MEMORY resource commitments must occur together.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $split_source_commitment
     *           Source commitment to be split into a new commitment.
     *     @type string $start_timestamp
     *           [Output Only] Commitment start time in RFC3339 text format.
     *     @type string $status
     *           [Output Only] Status of the commitment with regards to eventual expiration (each commitment has an end date defined). One of the following values: NOT_YET_ACTIVE, ACTIVE, EXPIRED.
     *           Check the Status enum for the list of possible values.
     *     @type string $status_message
     *           [Output Only] An optional, human-readable explanation of the status.
     *     @type string $type
     *           The type of commitment, which affects the discount rate and the eligible resources. Type MEMORY_OPTIMIZED specifies a commitment that will only apply to memory optimized machines. Type ACCELERATOR_OPTIMIZED specifies a commitment that will only apply to accelerator optimized machines.
     *           Check the Type enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies whether to enable automatic renewal for the commitment. The default value is false if not specified. The field can be updated until the day of the commitment expiration at 12:00am PST. If the field is set to true, the commitment will be automatically renewed for either one or three years according to the terms of the existing commitment.
     *
     * Generated from protobuf field <code>optional bool auto_renew = 495520765;</code>
     * @return bool
     */
    public function getAutoRenew()
    {
        return isset($this->auto_renew) ? $this->auto_renew : false;
    }

    public function hasAutoRenew()
    {
        return isset($this->auto_renew);
    }

    public function clearAutoRenew()
    {
        unset($this->auto_renew);
    }

    /**
     * Specifies whether to enable automatic renewal for the commitment. The default value is false if not specified. The field can be updated until the day of the commitment expiration at 12:00am PST. If the field is set to true, the commitment will be automatically renewed for either one or three years according to the terms of the existing commitment.
     *
     * Generated from protobuf field <code>optional bool auto_renew = 495520765;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoRenew($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_renew = $var;

        return $this;
    }

    /**
     * The category of the commitment. Category MACHINE specifies commitments composed of machine resources such as VCPU or MEMORY, listed in resources. Category LICENSE specifies commitments composed of software licenses, listed in licenseResources. Note that only MACHINE commitments should have a Type specified.
     * Check the Category enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string category = 50511102;</code>
     * @return string
     */
    public function getCategory()
    {
        return isset($this->category) ? $this->category : '';
    }

    public function hasCategory()
    {
        return isset($this->category);
    }

    public function clearCategory()
    {
        unset($this->category);
    }

    /**
     * The category of the commitment. Category MACHINE specifies commitments composed of machine resources such as VCPU or MEMORY, listed in resources. Category LICENSE specifies commitments composed of software licenses, listed in licenseResources. Note that only MACHINE commitments should have a Type specified.
     * Check the Category enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string category = 50511102;</code>
     * @param string $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->category = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * [Input Only] Optional, specifies the CUD end time requested by the customer in RFC3339 text format. Needed when the customer wants CUD's end date is later than the start date + term duration.
     *
     * Generated from protobuf field <code>optional string custom_end_timestamp = 181770852;</code>
     * @return string
     */
    public function getCustomEndTimestamp()
    {
        return isset($this->custom_end_timestamp) ? $this->custom_end_timestamp : '';
    }

    public function hasCustomEndTimestamp()
    {
        return isset($this->custom_end_timestamp);
    }

    public function clearCustomEndTimestamp()
    {
        unset($this->custom_end_timestamp);
    }

    /**
     * [Input Only] Optional, specifies the CUD end time requested by the customer in RFC3339 text format. Needed when the customer wants CUD's end date is later than the start date + term duration.
     *
     * Generated from protobuf field <code>optional string custom_end_timestamp = 181770852;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomEndTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_end_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * [Output Only] Commitment end time in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string end_timestamp = 468096690;</code>
     * @return string
     */
    public function getEndTimestamp()
    {
        return isset($this->end_timestamp) ? $this->end_timestamp : '';
    }

    public function hasEndTimestamp()
    {
        return isset($this->end_timestamp);
    }

    public function clearEndTimestamp()
    {
        unset($this->end_timestamp);
    }

    /**
     * [Output Only] Commitment end time in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string end_timestamp = 468096690;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_timestamp = $var;

        return $this;
    }

    /**
     * Specifies the already existing reservations to attach to the Commitment. This field is optional, and it can be a full or partial URL. For example, the following are valid URLs to an reservation: - https://www.googleapis.com/compute/v1/projects/project/zones/zone /reservations/reservation - projects/project/zones/zone/reservations/reservation 
     *
     * Generated from protobuf field <code>repeated string existing_reservations = 493028443;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExistingReservations()
    {
        return $this->existing_reservations;
    }

    /**
     * Specifies the already existing reservations to attach to the Commitment. This field is optional, and it can be a full or partial URL. For example, the following are valid URLs to an reservation: - https://www.googleapis.com/compute/v1/projects/project/zones/zone /reservations/reservation - projects/project/zones/zone/reservations/reservation 
     *
     * Generated from protobuf field <code>repeated string existing_reservations = 493028443;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExistingReservations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->existing_reservations = $arr;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#commitment for commitments.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#commitment for commitments.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The license specification required as part of a license commitment.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.LicenseResourceCommitment license_resource = 437955148;</code>
     * @return \Google\Cloud\Compute\V1\LicenseResourceCommitment|null
     */
    public function getLicenseResource()
    {
        return $this->license_resource;
    }

    public function hasLicenseResource()
    {
        return isset($this->license_resource);
    }

    public function clearLicenseResource()
    {
        unset($this->license_resource);
    }

    /**
     * The license specification required as part of a license commitment.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.LicenseResourceCommitment license_resource = 437955148;</code>
     * @param \Google\Cloud\Compute\V1\LicenseResourceCommitment $var
     * @return $this
     */
    public function setLicenseResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\LicenseResourceCommitment::class);
        $this->license_resource = $var;

        return $this;
    }

    /**
     * List of source commitments to be merged into a new commitment.
     *
     * Generated from protobuf field <code>repeated string merge_source_commitments = 188093761;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMergeSourceCommitments()
    {
        return $this->merge_source_commitments;
    }

    /**
     * List of source commitments to be merged into a new commitment.
     *
     * Generated from protobuf field <code>repeated string merge_source_commitments = 188093761;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMergeSourceCommitments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->merge_source_commitments = $arr;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The plan for this commitment, which determines duration and discount rate. The currently supported plans are TWELVE_MONTH (1 year), and THIRTY_SIX_MONTH (3 years).
     * Check the Plan enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string plan = 3443497;</code>
     * @return string
     */
    public function getPlan()
    {
        return isset($this->plan) ? $this->plan : '';
    }

    public function hasPlan()
    {
        return isset($this->plan);
    }

    public function clearPlan()
    {
        unset($this->plan);
    }

    /**
     * The plan for this commitment, which determines duration and discount rate. The currently supported plans are TWELVE_MONTH (1 year), and THIRTY_SIX_MONTH (3 years).
     * Check the Plan enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string plan = 3443497;</code>
     * @param string $var
     * @return $this
     */
    public function setPlan($var)
    {
        GPBUtil::checkString($var, True);
        $this->plan = $var;

        return $this;
    }

    /**
     * [Output Only] URL of the region where this commitment may be used.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] URL of the region where this commitment may be used.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * List of create-on-create reservations for this commitment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Reservation reservations = 399717927;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * List of create-on-create reservations for this commitment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Reservation reservations = 399717927;</code>
     * @param array<\Google\Cloud\Compute\V1\Reservation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReservations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Reservation::class);
        $this->reservations = $arr;

        return $this;
    }

    /**
     * [Output Only] Status information for Commitment resource.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CommitmentResourceStatus resource_status = 249429315;</code>
     * @return \Google\Cloud\Compute\V1\CommitmentResourceStatus|null
     */
    public function getResourceStatus()
    {
        return $this->resource_status;
    }

    public function hasResourceStatus()
    {
        return isset($this->resource_status);
    }

    public function clearResourceStatus()
    {
        unset($this->resource_status);
    }

    /**
     * [Output Only] Status information for Commitment resource.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CommitmentResourceStatus resource_status = 249429315;</code>
     * @param \Google\Cloud\Compute\V1\CommitmentResourceStatus $var
     * @return $this
     */
    public function setResourceStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\CommitmentResourceStatus::class);
        $this->resource_status = $var;

        return $this;
    }

    /**
     * A list of commitment amounts for particular resources. Note that VCPU and MEMORY resource commitments must occur together.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ResourceCommitment resources = 164412965;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * A list of commitment amounts for particular resources. Note that VCPU and MEMORY resource commitments must occur together.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ResourceCommitment resources = 164412965;</code>
     * @param array<\Google\Cloud\Compute\V1\ResourceCommitment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ResourceCommitment::class);
        $this->resources = $arr;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * Source commitment to be split into a new commitment.
     *
     * Generated from protobuf field <code>optional string split_source_commitment = 402611156;</code>
     * @return string
     */
    public function getSplitSourceCommitment()
    {
        return isset($this->split_source_commitment) ? $this->split_source_commitment : '';
    }

    public function hasSplitSourceCommitment()
    {
        return isset($this->split_source_commitment);
    }

    public function clearSplitSourceCommitment()
    {
        unset($this->split_source_commitment);
    }

    /**
     * Source commitment to be split into a new commitment.
     *
     * Generated from protobuf field <code>optional string split_source_commitment = 402611156;</code>
     * @param string $var
     * @return $this
     */
    public function setSplitSourceCommitment($var)
    {
        GPBUtil::checkString($var, True);
        $this->split_source_commitment = $var;

        return $this;
    }

    /**
     * [Output Only] Commitment start time in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string start_timestamp = 83645817;</code>
     * @return string
     */
    public function getStartTimestamp()
    {
        return isset($this->start_timestamp) ? $this->start_timestamp : '';
    }

    public function hasStartTimestamp()
    {
        return isset($this->start_timestamp);
    }

    public function clearStartTimestamp()
    {
        unset($this->start_timestamp);
    }

    /**
     * [Output Only] Commitment start time in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string start_timestamp = 83645817;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_timestamp = $var;

        return $this;
    }

    /**
     * [Output Only] Status of the commitment with regards to eventual expiration (each commitment has an end date defined). One of the following values: NOT_YET_ACTIVE, ACTIVE, EXPIRED.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] Status of the commitment with regards to eventual expiration (each commitment has an end date defined). One of the following values: NOT_YET_ACTIVE, ACTIVE, EXPIRED.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * [Output Only] An optional, human-readable explanation of the status.
     *
     * Generated from protobuf field <code>optional string status_message = 297428154;</code>
     * @return string
     */
    public function getStatusMessage()
    {
        return isset($this->status_message) ? $this->status_message : '';
    }

    public function hasStatusMessage()
    {
        return isset($this->status_message);
    }

    public function clearStatusMessage()
    {
        unset($this->status_message);
    }

    /**
     * [Output Only] An optional, human-readable explanation of the status.
     *
     * Generated from protobuf field <code>optional string status_message = 297428154;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_message = $var;

        return $this;
    }

    /**
     * The type of commitment, which affects the discount rate and the eligible resources. Type MEMORY_OPTIMIZED specifies a commitment that will only apply to memory optimized machines. Type ACCELERATOR_OPTIMIZED specifies a commitment that will only apply to accelerator optimized machines.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @return string
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : '';
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * The type of commitment, which affects the discount rate and the eligible resources. Type MEMORY_OPTIMIZED specifies a commitment that will only apply to memory optimized machines. Type ACCELERATOR_OPTIMIZED specifies a commitment that will only apply to accelerator optimized machines.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

