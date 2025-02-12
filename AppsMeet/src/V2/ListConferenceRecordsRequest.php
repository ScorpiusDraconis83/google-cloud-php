<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2/service.proto

namespace Google\Apps\Meet\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to fetch list of conference records per user.
 *
 * Generated from protobuf message <code>google.apps.meet.v2.ListConferenceRecordsRequest</code>
 */
class ListConferenceRecordsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Maximum number of conference records to return. The service might
     * return fewer than this value. If unspecified, at most 25 conference records
     * are returned. The maximum value is 100; values above 100 are coerced to
     * 100. Maximum might change in the future.
     *
     * Generated from protobuf field <code>int32 page_size = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. Page token returned from previous List Call.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. User specified filtering condition in [EBNF
     * format](https://en.wikipedia.org/wiki/Extended_Backus%E2%80%93Naur_form).
     * The following are the filterable fields:
     * * `space.meeting_code`
     * * `space.name`
     * * `start_time`
     * * `end_time`
     * For example, consider the following filters:
     * * `space.name = "spaces/NAME"`
     * * `space.meeting_code = "abc-mnop-xyz"`
     * * `start_time>="2024-01-01T00:00:00.000Z" AND
     * start_time<="2024-01-02T00:00:00.000Z"`
     * * `end_time IS NULL`
     *
     * Generated from protobuf field <code>string filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $page_size
     *           Optional. Maximum number of conference records to return. The service might
     *           return fewer than this value. If unspecified, at most 25 conference records
     *           are returned. The maximum value is 100; values above 100 are coerced to
     *           100. Maximum might change in the future.
     *     @type string $page_token
     *           Optional. Page token returned from previous List Call.
     *     @type string $filter
     *           Optional. User specified filtering condition in [EBNF
     *           format](https://en.wikipedia.org/wiki/Extended_Backus%E2%80%93Naur_form).
     *           The following are the filterable fields:
     *           * `space.meeting_code`
     *           * `space.name`
     *           * `start_time`
     *           * `end_time`
     *           For example, consider the following filters:
     *           * `space.name = "spaces/NAME"`
     *           * `space.meeting_code = "abc-mnop-xyz"`
     *           * `start_time>="2024-01-01T00:00:00.000Z" AND
     *           start_time<="2024-01-02T00:00:00.000Z"`
     *           * `end_time IS NULL`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Maximum number of conference records to return. The service might
     * return fewer than this value. If unspecified, at most 25 conference records
     * are returned. The maximum value is 100; values above 100 are coerced to
     * 100. Maximum might change in the future.
     *
     * Generated from protobuf field <code>int32 page_size = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Maximum number of conference records to return. The service might
     * return fewer than this value. If unspecified, at most 25 conference records
     * are returned. The maximum value is 100; values above 100 are coerced to
     * 100. Maximum might change in the future.
     *
     * Generated from protobuf field <code>int32 page_size = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Page token returned from previous List Call.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Page token returned from previous List Call.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. User specified filtering condition in [EBNF
     * format](https://en.wikipedia.org/wiki/Extended_Backus%E2%80%93Naur_form).
     * The following are the filterable fields:
     * * `space.meeting_code`
     * * `space.name`
     * * `start_time`
     * * `end_time`
     * For example, consider the following filters:
     * * `space.name = "spaces/NAME"`
     * * `space.meeting_code = "abc-mnop-xyz"`
     * * `start_time>="2024-01-01T00:00:00.000Z" AND
     * start_time<="2024-01-02T00:00:00.000Z"`
     * * `end_time IS NULL`
     *
     * Generated from protobuf field <code>string filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. User specified filtering condition in [EBNF
     * format](https://en.wikipedia.org/wiki/Extended_Backus%E2%80%93Naur_form).
     * The following are the filterable fields:
     * * `space.meeting_code`
     * * `space.name`
     * * `start_time`
     * * `end_time`
     * For example, consider the following filters:
     * * `space.name = "spaces/NAME"`
     * * `space.meeting_code = "abc-mnop-xyz"`
     * * `start_time>="2024-01-01T00:00:00.000Z" AND
     * start_time<="2024-01-02T00:00:00.000Z"`
     * * `end_time IS NULL`
     *
     * Generated from protobuf field <code>string filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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

