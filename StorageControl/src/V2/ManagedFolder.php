<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storage/control/v2/storage_control.proto

namespace Google\Cloud\Storage\Control\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A managed folder.
 *
 * Generated from protobuf message <code>google.storage.control.v2.ManagedFolder</code>
 */
class ManagedFolder extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The name of this managed folder.
     * Format:
     * `projects/{project}/buckets/{bucket}/managedFolders/{managedFolder}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. The metadata version of this managed folder. It increases
     * whenever the metadata is updated. Used for preconditions and for detecting
     * changes in metadata. Managed folders don't have a generation number.
     *
     * Generated from protobuf field <code>int64 metageneration = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $metageneration = 0;
    /**
     * Output only. The creation time of the managed folder.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The modification time of the managed folder.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The name of this managed folder.
     *           Format:
     *           `projects/{project}/buckets/{bucket}/managedFolders/{managedFolder}`
     *     @type int|string $metageneration
     *           Output only. The metadata version of this managed folder. It increases
     *           whenever the metadata is updated. Used for preconditions and for detecting
     *           changes in metadata. Managed folders don't have a generation number.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation time of the managed folder.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The modification time of the managed folder.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storage\Control\V2\StorageControl::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The name of this managed folder.
     * Format:
     * `projects/{project}/buckets/{bucket}/managedFolders/{managedFolder}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The name of this managed folder.
     * Format:
     * `projects/{project}/buckets/{bucket}/managedFolders/{managedFolder}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Output only. The metadata version of this managed folder. It increases
     * whenever the metadata is updated. Used for preconditions and for detecting
     * changes in metadata. Managed folders don't have a generation number.
     *
     * Generated from protobuf field <code>int64 metageneration = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getMetageneration()
    {
        return $this->metageneration;
    }

    /**
     * Output only. The metadata version of this managed folder. It increases
     * whenever the metadata is updated. Used for preconditions and for detecting
     * changes in metadata. Managed folders don't have a generation number.
     *
     * Generated from protobuf field <code>int64 metageneration = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMetageneration($var)
    {
        GPBUtil::checkInt64($var);
        $this->metageneration = $var;

        return $this;
    }

    /**
     * Output only. The creation time of the managed folder.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The creation time of the managed folder.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The modification time of the managed folder.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The modification time of the managed folder.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

