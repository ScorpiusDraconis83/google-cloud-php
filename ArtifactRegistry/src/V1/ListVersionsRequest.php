<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/version.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to list versions.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.ListVersionsRequest</code>
 */
class ListVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the parent resource whose versions will be listed.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The maximum number of versions to return. Maximum page size is 1,000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The next_page_token value returned from a previous list request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * The view that should be returned in the response.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.VersionView view = 4;</code>
     */
    protected $view = 0;
    /**
     * Optional. The field to order the results by.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order_by = '';
    /**
     * Optional. An expression for filtering the results of the request. Filter
     * rules are case insensitive. The fields eligible for filtering are:
     *   * `name`
     *   * `annotations`
     *  Examples of using a filter:
     *  To filter the results of your request to versions with the name
     *  `my-version` in project `my-project` in the `us-central` region, in
     *  repository `my-repo`, append the following filter expression to your
     *  request:
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/my-version"`
     *  You can also use wildcards to match any number of characters before or
     *  after the value:
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/&#42;version"`
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/my*"`
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/&#42;version*"`
     *  To filter the results of your request to versions with the annotation
     *  key-value pair [`external_link`: `external_link_value`], append the
     *  following filter expression to your request:
     *   * `"annotations.external_link:external_link_value"`
     *  To filter just for a specific annotation key `external_link`, append the
     *  following filter expression to your request:
     *   * `"annotations.external_link"`
     *  If the annotation key or value contains special characters, you can escape
     *  them by surrounding the value with backticks. For example, to filter the
     *  results of your request to versions with the annotation key-value pair
     *  [`external.link`:`https://example.com/my-version`], append the following
     *  filter expression to your request:
     *   * `` "annotations.`external.link`:`https://example.com/my-version`" ``
     *  You can also filter with annotations with a wildcard to
     *  match any number of characters before or after the value:
     *   * `` "annotations.*_link:`*example.com*`" ``
     *
     * Generated from protobuf field <code>string filter = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';

    /**
     * @param string $parent The name of the parent resource whose versions will be listed.
     *
     * @return \Google\Cloud\ArtifactRegistry\V1\ListVersionsRequest
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
     *           The name of the parent resource whose versions will be listed.
     *     @type int $page_size
     *           The maximum number of versions to return. Maximum page size is 1,000.
     *     @type string $page_token
     *           The next_page_token value returned from a previous list request, if any.
     *     @type int $view
     *           The view that should be returned in the response.
     *     @type string $order_by
     *           Optional. The field to order the results by.
     *     @type string $filter
     *           Optional. An expression for filtering the results of the request. Filter
     *           rules are case insensitive. The fields eligible for filtering are:
     *             * `name`
     *             * `annotations`
     *            Examples of using a filter:
     *            To filter the results of your request to versions with the name
     *            `my-version` in project `my-project` in the `us-central` region, in
     *            repository `my-repo`, append the following filter expression to your
     *            request:
     *             * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/my-version"`
     *            You can also use wildcards to match any number of characters before or
     *            after the value:
     *             * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/&#42;version"`
     *             * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/my*"`
     *             * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/&#42;version*"`
     *            To filter the results of your request to versions with the annotation
     *            key-value pair [`external_link`: `external_link_value`], append the
     *            following filter expression to your request:
     *             * `"annotations.external_link:external_link_value"`
     *            To filter just for a specific annotation key `external_link`, append the
     *            following filter expression to your request:
     *             * `"annotations.external_link"`
     *            If the annotation key or value contains special characters, you can escape
     *            them by surrounding the value with backticks. For example, to filter the
     *            results of your request to versions with the annotation key-value pair
     *            [`external.link`:`https://example.com/my-version`], append the following
     *            filter expression to your request:
     *             * `` "annotations.`external.link`:`https://example.com/my-version`" ``
     *            You can also filter with annotations with a wildcard to
     *            match any number of characters before or after the value:
     *             * `` "annotations.*_link:`*example.com*`" ``
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the parent resource whose versions will be listed.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The name of the parent resource whose versions will be listed.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
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
     * The maximum number of versions to return. Maximum page size is 1,000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of versions to return. Maximum page size is 1,000.
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
     * The next_page_token value returned from a previous list request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous list request, if any.
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
     * The view that should be returned in the response.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.VersionView view = 4;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * The view that should be returned in the response.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.VersionView view = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ArtifactRegistry\V1\VersionView::class);
        $this->view = $var;

        return $this;
    }

    /**
     * Optional. The field to order the results by.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. The field to order the results by.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Optional. An expression for filtering the results of the request. Filter
     * rules are case insensitive. The fields eligible for filtering are:
     *   * `name`
     *   * `annotations`
     *  Examples of using a filter:
     *  To filter the results of your request to versions with the name
     *  `my-version` in project `my-project` in the `us-central` region, in
     *  repository `my-repo`, append the following filter expression to your
     *  request:
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/my-version"`
     *  You can also use wildcards to match any number of characters before or
     *  after the value:
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/&#42;version"`
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/my*"`
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/&#42;version*"`
     *  To filter the results of your request to versions with the annotation
     *  key-value pair [`external_link`: `external_link_value`], append the
     *  following filter expression to your request:
     *   * `"annotations.external_link:external_link_value"`
     *  To filter just for a specific annotation key `external_link`, append the
     *  following filter expression to your request:
     *   * `"annotations.external_link"`
     *  If the annotation key or value contains special characters, you can escape
     *  them by surrounding the value with backticks. For example, to filter the
     *  results of your request to versions with the annotation key-value pair
     *  [`external.link`:`https://example.com/my-version`], append the following
     *  filter expression to your request:
     *   * `` "annotations.`external.link`:`https://example.com/my-version`" ``
     *  You can also filter with annotations with a wildcard to
     *  match any number of characters before or after the value:
     *   * `` "annotations.*_link:`*example.com*`" ``
     *
     * Generated from protobuf field <code>string filter = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. An expression for filtering the results of the request. Filter
     * rules are case insensitive. The fields eligible for filtering are:
     *   * `name`
     *   * `annotations`
     *  Examples of using a filter:
     *  To filter the results of your request to versions with the name
     *  `my-version` in project `my-project` in the `us-central` region, in
     *  repository `my-repo`, append the following filter expression to your
     *  request:
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/my-version"`
     *  You can also use wildcards to match any number of characters before or
     *  after the value:
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/&#42;version"`
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/my*"`
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo/packages/my-package/versions/&#42;version*"`
     *  To filter the results of your request to versions with the annotation
     *  key-value pair [`external_link`: `external_link_value`], append the
     *  following filter expression to your request:
     *   * `"annotations.external_link:external_link_value"`
     *  To filter just for a specific annotation key `external_link`, append the
     *  following filter expression to your request:
     *   * `"annotations.external_link"`
     *  If the annotation key or value contains special characters, you can escape
     *  them by surrounding the value with backticks. For example, to filter the
     *  results of your request to versions with the annotation key-value pair
     *  [`external.link`:`https://example.com/my-version`], append the following
     *  filter expression to your request:
     *   * `` "annotations.`external.link`:`https://example.com/my-version`" ``
     *  You can also filter with annotations with a wildcard to
     *  match any number of characters before or after the value:
     *   * `` "annotations.*_link:`*example.com*`" ``
     *
     * Generated from protobuf field <code>string filter = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
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

