<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/service.proto

namespace Google\Cloud\AlloyDb\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for creating a Backup
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1.CreateBackupRequest</code>
 */
class CreateBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. ID of the requesting object.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $backup_id = '';
    /**
     * Required. The resource being created
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.Backup backup = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $backup = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server ignores the
     * request if it has already been completed. The server guarantees that for at
     * least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if the original operation with the same request ID
     * was received, and if so, ignores the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. If set, the backend validates the request, but doesn't actually
     * execute it.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                          $parent   Required. Value for parent. Please see
     *                                                  {@see AlloyDBAdminClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\AlloyDb\V1\Backup $backup   Required. The resource being created
     * @param string                          $backupId Required. ID of the requesting object.
     *
     * @return \Google\Cloud\AlloyDb\V1\CreateBackupRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AlloyDb\V1\Backup $backup, string $backupId): self
    {
        return (new self())
            ->setParent($parent)
            ->setBackup($backup)
            ->setBackupId($backupId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Value for parent.
     *     @type string $backup_id
     *           Required. ID of the requesting object.
     *     @type \Google\Cloud\AlloyDb\V1\Backup $backup
     *           Required. The resource being created
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server ignores the
     *           request if it has already been completed. The server guarantees that for at
     *           least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if the original operation with the same request ID
     *           was received, and if so, ignores the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. If set, the backend validates the request, but doesn't actually
     *           execute it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Value for parent.
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
     * Required. ID of the requesting object.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBackupId()
    {
        return $this->backup_id;
    }

    /**
     * Required. ID of the requesting object.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBackupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_id = $var;

        return $this;
    }

    /**
     * Required. The resource being created
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.Backup backup = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AlloyDb\V1\Backup|null
     */
    public function getBackup()
    {
        return $this->backup;
    }

    public function hasBackup()
    {
        return isset($this->backup);
    }

    public function clearBackup()
    {
        unset($this->backup);
    }

    /**
     * Required. The resource being created
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.Backup backup = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AlloyDb\V1\Backup $var
     * @return $this
     */
    public function setBackup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AlloyDb\V1\Backup::class);
        $this->backup = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server ignores the
     * request if it has already been completed. The server guarantees that for at
     * least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if the original operation with the same request ID
     * was received, and if so, ignores the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server ignores the
     * request if it has already been completed. The server guarantees that for at
     * least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if the original operation with the same request ID
     * was received, and if so, ignores the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. If set, the backend validates the request, but doesn't actually
     * execute it.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set, the backend validates the request, but doesn't actually
     * execute it.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

