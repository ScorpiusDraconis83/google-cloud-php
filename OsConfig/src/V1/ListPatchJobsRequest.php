<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for listing patch jobs.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.ListPatchJobsRequest</code>
 */
class ListPatchJobsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. In the form of `projects/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of instance status to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A pagination token returned from a previous call
     * that indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * If provided, this field specifies the criteria that must be met by patch
     * jobs to be included in the response.
     * Currently, filtering is only available on the patch_deployment field.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    protected $filter = '';

    /**
     * @param string $parent Required. In the form of `projects/*`
     *                       Please see {@see OsConfigServiceClient::projectName()} for help formatting this field.
     *
     * @return \Google\Cloud\OsConfig\V1\ListPatchJobsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. In the form of `projects/&#42;`
     *     @type int $page_size
     *           The maximum number of instance status to return.
     *     @type string $page_token
     *           A pagination token returned from a previous call
     *           that indicates where this listing should continue from.
     *     @type string $filter
     *           If provided, this field specifies the criteria that must be met by patch
     *           jobs to be included in the response.
     *           Currently, filtering is only available on the patch_deployment field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. In the form of `projects/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. In the form of `projects/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of instance status to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of instance status to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A pagination token returned from a previous call
     * that indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A pagination token returned from a previous call
     * that indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * If provided, this field specifies the criteria that must be met by patch
     * jobs to be included in the response.
     * Currently, filtering is only available on the patch_deployment field.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * If provided, this field specifies the criteria that must be met by patch
     * jobs to be included in the response.
     * Currently, filtering is only available on the patch_deployment field.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

