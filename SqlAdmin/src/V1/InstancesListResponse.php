<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Database instances list response.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.InstancesListResponse</code>
 */
class InstancesListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always `sql#instancesList`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    protected $kind = '';
    /**
     * List of warnings that occurred while handling the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.ApiWarning warnings = 2;</code>
     */
    private $warnings;
    /**
     * List of database instance resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.DatabaseInstance items = 3;</code>
     */
    private $items;
    /**
     * The continuation token, used to page through large result sets. Provide
     * this value in a subsequent request to return the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 4;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always `sql#instancesList`.
     *     @type array<\Google\Cloud\Sql\V1\ApiWarning>|\Google\Protobuf\Internal\RepeatedField $warnings
     *           List of warnings that occurred while handling the request.
     *     @type array<\Google\Cloud\Sql\V1\DatabaseInstance>|\Google\Protobuf\Internal\RepeatedField $items
     *           List of database instance resources.
     *     @type string $next_page_token
     *           The continuation token, used to page through large result sets. Provide
     *           this value in a subsequent request to return the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlInstances::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always `sql#instancesList`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#instancesList`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
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
     * List of warnings that occurred while handling the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.ApiWarning warnings = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * List of warnings that occurred while handling the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.ApiWarning warnings = 2;</code>
     * @param array<\Google\Cloud\Sql\V1\ApiWarning>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWarnings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Sql\V1\ApiWarning::class);
        $this->warnings = $arr;

        return $this;
    }

    /**
     * List of database instance resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.DatabaseInstance items = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * List of database instance resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.DatabaseInstance items = 3;</code>
     * @param array<\Google\Cloud\Sql\V1\DatabaseInstance>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Sql\V1\DatabaseInstance::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * The continuation token, used to page through large result sets. Provide
     * this value in a subsequent request to return the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 4;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The continuation token, used to page through large result sets. Provide
     * this value in a subsequent request to return the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 4;</code>
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

