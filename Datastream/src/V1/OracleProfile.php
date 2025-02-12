<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Oracle database profile.
 * Next ID: 10.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.OracleProfile</code>
 */
class OracleProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Hostname for the Oracle connection.
     *
     * Generated from protobuf field <code>string hostname = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $hostname = '';
    /**
     * Port for the Oracle connection, default value is 1521.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     */
    protected $port = 0;
    /**
     * Required. Username for the Oracle connection.
     *
     * Generated from protobuf field <code>string username = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $username = '';
    /**
     * Optional. Password for the Oracle connection. Mutually exclusive with the
     * `secret_manager_stored_password` field.
     *
     * Generated from protobuf field <code>string password = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $password = '';
    /**
     * Required. Database for the Oracle connection.
     *
     * Generated from protobuf field <code>string database_service = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $database_service = '';
    /**
     * Connection string attributes
     *
     * Generated from protobuf field <code>map<string, string> connection_attributes = 6;</code>
     */
    private $connection_attributes;
    /**
     * Optional. SSL configuration for the Oracle connection.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleSslConfig oracle_ssl_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $oracle_ssl_config = null;
    /**
     * Optional. Configuration for Oracle ASM connection.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleAsmConfig oracle_asm_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $oracle_asm_config = null;
    /**
     * Optional. A reference to a Secret Manager resource name storing the Oracle
     * connection password. Mutually exclusive with the `password` field.
     *
     * Generated from protobuf field <code>string secret_manager_stored_password = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $secret_manager_stored_password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hostname
     *           Required. Hostname for the Oracle connection.
     *     @type int $port
     *           Port for the Oracle connection, default value is 1521.
     *     @type string $username
     *           Required. Username for the Oracle connection.
     *     @type string $password
     *           Optional. Password for the Oracle connection. Mutually exclusive with the
     *           `secret_manager_stored_password` field.
     *     @type string $database_service
     *           Required. Database for the Oracle connection.
     *     @type array|\Google\Protobuf\Internal\MapField $connection_attributes
     *           Connection string attributes
     *     @type \Google\Cloud\Datastream\V1\OracleSslConfig $oracle_ssl_config
     *           Optional. SSL configuration for the Oracle connection.
     *     @type \Google\Cloud\Datastream\V1\OracleAsmConfig $oracle_asm_config
     *           Optional. Configuration for Oracle ASM connection.
     *     @type string $secret_manager_stored_password
     *           Optional. A reference to a Secret Manager resource name storing the Oracle
     *           connection password. Mutually exclusive with the `password` field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Hostname for the Oracle connection.
     *
     * Generated from protobuf field <code>string hostname = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Required. Hostname for the Oracle connection.
     *
     * Generated from protobuf field <code>string hostname = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHostname($var)
    {
        GPBUtil::checkString($var, True);
        $this->hostname = $var;

        return $this;
    }

    /**
     * Port for the Oracle connection, default value is 1521.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Port for the Oracle connection, default value is 1521.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Required. Username for the Oracle connection.
     *
     * Generated from protobuf field <code>string username = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Required. Username for the Oracle connection.
     *
     * Generated from protobuf field <code>string username = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Optional. Password for the Oracle connection. Mutually exclusive with the
     * `secret_manager_stored_password` field.
     *
     * Generated from protobuf field <code>string password = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Optional. Password for the Oracle connection. Mutually exclusive with the
     * `secret_manager_stored_password` field.
     *
     * Generated from protobuf field <code>string password = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Required. Database for the Oracle connection.
     *
     * Generated from protobuf field <code>string database_service = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatabaseService()
    {
        return $this->database_service;
    }

    /**
     * Required. Database for the Oracle connection.
     *
     * Generated from protobuf field <code>string database_service = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatabaseService($var)
    {
        GPBUtil::checkString($var, True);
        $this->database_service = $var;

        return $this;
    }

    /**
     * Connection string attributes
     *
     * Generated from protobuf field <code>map<string, string> connection_attributes = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getConnectionAttributes()
    {
        return $this->connection_attributes;
    }

    /**
     * Connection string attributes
     *
     * Generated from protobuf field <code>map<string, string> connection_attributes = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setConnectionAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->connection_attributes = $arr;

        return $this;
    }

    /**
     * Optional. SSL configuration for the Oracle connection.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleSslConfig oracle_ssl_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Datastream\V1\OracleSslConfig|null
     */
    public function getOracleSslConfig()
    {
        return $this->oracle_ssl_config;
    }

    public function hasOracleSslConfig()
    {
        return isset($this->oracle_ssl_config);
    }

    public function clearOracleSslConfig()
    {
        unset($this->oracle_ssl_config);
    }

    /**
     * Optional. SSL configuration for the Oracle connection.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleSslConfig oracle_ssl_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Datastream\V1\OracleSslConfig $var
     * @return $this
     */
    public function setOracleSslConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\OracleSslConfig::class);
        $this->oracle_ssl_config = $var;

        return $this;
    }

    /**
     * Optional. Configuration for Oracle ASM connection.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleAsmConfig oracle_asm_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Datastream\V1\OracleAsmConfig|null
     */
    public function getOracleAsmConfig()
    {
        return $this->oracle_asm_config;
    }

    public function hasOracleAsmConfig()
    {
        return isset($this->oracle_asm_config);
    }

    public function clearOracleAsmConfig()
    {
        unset($this->oracle_asm_config);
    }

    /**
     * Optional. Configuration for Oracle ASM connection.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleAsmConfig oracle_asm_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Datastream\V1\OracleAsmConfig $var
     * @return $this
     */
    public function setOracleAsmConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\OracleAsmConfig::class);
        $this->oracle_asm_config = $var;

        return $this;
    }

    /**
     * Optional. A reference to a Secret Manager resource name storing the Oracle
     * connection password. Mutually exclusive with the `password` field.
     *
     * Generated from protobuf field <code>string secret_manager_stored_password = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSecretManagerStoredPassword()
    {
        return $this->secret_manager_stored_password;
    }

    /**
     * Optional. A reference to a Secret Manager resource name storing the Oracle
     * connection password. Mutually exclusive with the `password` field.
     *
     * Generated from protobuf field <code>string secret_manager_stored_password = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSecretManagerStoredPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_manager_stored_password = $var;

        return $this;
    }

}

