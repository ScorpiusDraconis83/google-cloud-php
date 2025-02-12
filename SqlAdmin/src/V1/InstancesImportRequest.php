<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Database instance import request.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.InstancesImportRequest</code>
 */
class InstancesImportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Contains details about the import operation.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ImportContext import_context = 1;</code>
     */
    protected $import_context = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Sql\V1\ImportContext $import_context
     *           Contains details about the import operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlInstances::initOnce();
        parent::__construct($data);
    }

    /**
     * Contains details about the import operation.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ImportContext import_context = 1;</code>
     * @return \Google\Cloud\Sql\V1\ImportContext|null
     */
    public function getImportContext()
    {
        return $this->import_context;
    }

    public function hasImportContext()
    {
        return isset($this->import_context);
    }

    public function clearImportContext()
    {
        unset($this->import_context);
    }

    /**
     * Contains details about the import operation.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ImportContext import_context = 1;</code>
     * @param \Google\Cloud\Sql\V1\ImportContext $var
     * @return $this
     */
    public function setImportContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\ImportContext::class);
        $this->import_context = $var;

        return $this;
    }

}

