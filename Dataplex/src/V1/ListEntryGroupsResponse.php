<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List entry groups response.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.ListEntryGroupsResponse</code>
 */
class ListEntryGroupsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Entry groups under the given parent location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.EntryGroup entry_groups = 1;</code>
     */
    private $entry_groups;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that the service couldn't reach.
     *
     * Generated from protobuf field <code>repeated string unreachable_locations = 3;</code>
     */
    private $unreachable_locations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dataplex\V1\EntryGroup>|\Google\Protobuf\Internal\RepeatedField $entry_groups
     *           Entry groups under the given parent location.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable_locations
     *           Locations that the service couldn't reach.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Entry groups under the given parent location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.EntryGroup entry_groups = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntryGroups()
    {
        return $this->entry_groups;
    }

    /**
     * Entry groups under the given parent location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.EntryGroup entry_groups = 1;</code>
     * @param array<\Google\Cloud\Dataplex\V1\EntryGroup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntryGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\EntryGroup::class);
        $this->entry_groups = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
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
     * Locations that the service couldn't reach.
     *
     * Generated from protobuf field <code>repeated string unreachable_locations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachableLocations()
    {
        return $this->unreachable_locations;
    }

    /**
     * Locations that the service couldn't reach.
     *
     * Generated from protobuf field <code>repeated string unreachable_locations = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachableLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable_locations = $arr;

        return $this;
    }

}

