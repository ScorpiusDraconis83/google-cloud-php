<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/gkebackup.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for DeleteRestore.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.DeleteRestoreRequest</code>
 */
class DeleteRestoreRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full name of the Restore
     * Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. If provided, this value must match the current value of the
     * target Restore's [etag][google.cloud.gkebackup.v1.Restore.etag] field or
     * the request is rejected.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';
    /**
     * Optional. If set to true, any VolumeRestores below this restore will also
     * be deleted. Otherwise, the request will only succeed if the restore has no
     * VolumeRestores.
     *
     * Generated from protobuf field <code>bool force = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $force = false;

    /**
     * @param string $name Required. Full name of the Restore
     *                     Format: `projects/&#42;/locations/&#42;/restorePlans/&#42;/restores/*`
     *                     Please see {@see BackupForGKEClient::restoreName()} for help formatting this field.
     *
     * @return \Google\Cloud\GkeBackup\V1\DeleteRestoreRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Full name of the Restore
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;`
     *     @type string $etag
     *           Optional. If provided, this value must match the current value of the
     *           target Restore's [etag][google.cloud.gkebackup.v1.Restore.etag] field or
     *           the request is rejected.
     *     @type bool $force
     *           Optional. If set to true, any VolumeRestores below this restore will also
     *           be deleted. Otherwise, the request will only succeed if the restore has no
     *           VolumeRestores.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Gkebackup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full name of the Restore
     * Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Full name of the Restore
     * Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. If provided, this value must match the current value of the
     * target Restore's [etag][google.cloud.gkebackup.v1.Restore.etag] field or
     * the request is rejected.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. If provided, this value must match the current value of the
     * target Restore's [etag][google.cloud.gkebackup.v1.Restore.etag] field or
     * the request is rejected.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. If set to true, any VolumeRestores below this restore will also
     * be deleted. Otherwise, the request will only succeed if the restore has no
     * VolumeRestores.
     *
     * Generated from protobuf field <code>bool force = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Optional. If set to true, any VolumeRestores below this restore will also
     * be deleted. Otherwise, the request will only succeed if the restore has no
     * VolumeRestores.
     *
     * Generated from protobuf field <code>bool force = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

