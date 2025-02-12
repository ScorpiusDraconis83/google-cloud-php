<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/oracledatabase.proto

namespace Google\Cloud\OracleDatabase\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for `AutonomousDatabase.List`.
 *
 * Generated from protobuf message <code>google.cloud.oracledatabase.v1.ListAutonomousDatabasesResponse</code>
 */
class ListAutonomousDatabasesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of Autonomous Databases.
     *
     * Generated from protobuf field <code>repeated .google.cloud.oracledatabase.v1.AutonomousDatabase autonomous_databases = 1;</code>
     */
    private $autonomous_databases;
    /**
     * A token identifying a page of results the server should return.
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
     *     @type array<\Google\Cloud\OracleDatabase\V1\AutonomousDatabase>|\Google\Protobuf\Internal\RepeatedField $autonomous_databases
     *           The list of Autonomous Databases.
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oracledatabase\V1\Oracledatabase::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of Autonomous Databases.
     *
     * Generated from protobuf field <code>repeated .google.cloud.oracledatabase.v1.AutonomousDatabase autonomous_databases = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAutonomousDatabases()
    {
        return $this->autonomous_databases;
    }

    /**
     * The list of Autonomous Databases.
     *
     * Generated from protobuf field <code>repeated .google.cloud.oracledatabase.v1.AutonomousDatabase autonomous_databases = 1;</code>
     * @param array<\Google\Cloud\OracleDatabase\V1\AutonomousDatabase>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAutonomousDatabases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OracleDatabase\V1\AutonomousDatabase::class);
        $this->autonomous_databases = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results the server should return.
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

