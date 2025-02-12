<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/runtime.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Local attached disk resource.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.LocalDisk</code>
 */
class LocalDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Output only. Specifies whether the disk will be auto-deleted when the
     * instance is deleted (but not when the disk is detached from the instance).
     *
     * Generated from protobuf field <code>bool auto_delete = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $auto_delete = false;
    /**
     * Optional. Output only. Indicates that this is a boot disk. The virtual machine
     * will use the first partition of the disk for its root filesystem.
     *
     * Generated from protobuf field <code>bool boot = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $boot = false;
    /**
     * Optional. Output only. Specifies a unique device name
     * of your choice that is reflected into the
     * `/dev/disk/by-id/google-*` tree of a Linux operating system running within
     * the instance. This name can be used to reference the device for mounting,
     * resizing, and so on, from within the instance.
     * If not specified, the server chooses a default device name to apply to this
     * disk, in the form persistent-disk-x, where x is a number assigned by Google
     * Compute Engine. This field is only applicable for persistent disks.
     *
     * Generated from protobuf field <code>string device_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $device_name = '';
    /**
     * Output only. Indicates a list of features to enable on the guest operating system.
     * Applicable only for bootable images. Read  Enabling guest operating
     * system features to see a list of available options.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v1.LocalDisk.RuntimeGuestOsFeature guest_os_features = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $guest_os_features;
    /**
     * Output only. A zero-based index to this disk, where 0 is reserved for the
     * boot disk. If you have many disks attached to an instance, each disk would
     * have a unique index number.
     *
     * Generated from protobuf field <code>int32 index = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $index = 0;
    /**
     * Input only. Specifies the parameters for a new disk that will be created
     * alongside the new instance. Use initialization parameters to create boot
     * disks or local SSDs attached to the new instance.
     * This property is mutually exclusive with the source property; you can only
     * define one or the other, but not both.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.LocalDiskInitializeParams initialize_params = 6 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    protected $initialize_params = null;
    /**
     * Specifies the disk interface to use for attaching this disk, which is
     * either SCSI or NVME. The default is SCSI. Persistent disks must always use
     * SCSI and the request will fail if you attempt to attach a persistent disk
     * in any other format than SCSI. Local SSDs can use either NVME or SCSI. For
     * performance characteristics of SCSI over NVMe, see Local SSD performance.
     * Valid values:
     * * `NVME`
     * * `SCSI`
     *
     * Generated from protobuf field <code>string interface = 7;</code>
     */
    protected $interface = '';
    /**
     * Output only. Type of the resource. Always compute#attachedDisk for attached disks.
     *
     * Generated from protobuf field <code>string kind = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $kind = '';
    /**
     * Output only. Any valid publicly visible licenses.
     *
     * Generated from protobuf field <code>repeated string licenses = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $licenses;
    /**
     * The mode in which to attach this disk, either `READ_WRITE` or `READ_ONLY`.
     * If not specified, the default is to attach the disk in `READ_WRITE` mode.
     * Valid values:
     * * `READ_ONLY`
     * * `READ_WRITE`
     *
     * Generated from protobuf field <code>string mode = 10;</code>
     */
    protected $mode = '';
    /**
     * Specifies a valid partial or full URL to an existing Persistent Disk
     * resource.
     *
     * Generated from protobuf field <code>string source = 11;</code>
     */
    protected $source = '';
    /**
     * Specifies the type of the disk, either `SCRATCH` or `PERSISTENT`. If not
     * specified, the default is `PERSISTENT`.
     * Valid values:
     * * `PERSISTENT`
     * * `SCRATCH`
     *
     * Generated from protobuf field <code>string type = 12;</code>
     */
    protected $type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $auto_delete
     *           Optional. Output only. Specifies whether the disk will be auto-deleted when the
     *           instance is deleted (but not when the disk is detached from the instance).
     *     @type bool $boot
     *           Optional. Output only. Indicates that this is a boot disk. The virtual machine
     *           will use the first partition of the disk for its root filesystem.
     *     @type string $device_name
     *           Optional. Output only. Specifies a unique device name
     *           of your choice that is reflected into the
     *           `/dev/disk/by-id/google-*` tree of a Linux operating system running within
     *           the instance. This name can be used to reference the device for mounting,
     *           resizing, and so on, from within the instance.
     *           If not specified, the server chooses a default device name to apply to this
     *           disk, in the form persistent-disk-x, where x is a number assigned by Google
     *           Compute Engine. This field is only applicable for persistent disks.
     *     @type array<\Google\Cloud\Notebooks\V1\LocalDisk\RuntimeGuestOsFeature>|\Google\Protobuf\Internal\RepeatedField $guest_os_features
     *           Output only. Indicates a list of features to enable on the guest operating system.
     *           Applicable only for bootable images. Read  Enabling guest operating
     *           system features to see a list of available options.
     *     @type int $index
     *           Output only. A zero-based index to this disk, where 0 is reserved for the
     *           boot disk. If you have many disks attached to an instance, each disk would
     *           have a unique index number.
     *     @type \Google\Cloud\Notebooks\V1\LocalDiskInitializeParams $initialize_params
     *           Input only. Specifies the parameters for a new disk that will be created
     *           alongside the new instance. Use initialization parameters to create boot
     *           disks or local SSDs attached to the new instance.
     *           This property is mutually exclusive with the source property; you can only
     *           define one or the other, but not both.
     *     @type string $interface
     *           Specifies the disk interface to use for attaching this disk, which is
     *           either SCSI or NVME. The default is SCSI. Persistent disks must always use
     *           SCSI and the request will fail if you attempt to attach a persistent disk
     *           in any other format than SCSI. Local SSDs can use either NVME or SCSI. For
     *           performance characteristics of SCSI over NVMe, see Local SSD performance.
     *           Valid values:
     *           * `NVME`
     *           * `SCSI`
     *     @type string $kind
     *           Output only. Type of the resource. Always compute#attachedDisk for attached disks.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $licenses
     *           Output only. Any valid publicly visible licenses.
     *     @type string $mode
     *           The mode in which to attach this disk, either `READ_WRITE` or `READ_ONLY`.
     *           If not specified, the default is to attach the disk in `READ_WRITE` mode.
     *           Valid values:
     *           * `READ_ONLY`
     *           * `READ_WRITE`
     *     @type string $source
     *           Specifies a valid partial or full URL to an existing Persistent Disk
     *           resource.
     *     @type string $type
     *           Specifies the type of the disk, either `SCRATCH` or `PERSISTENT`. If not
     *           specified, the default is `PERSISTENT`.
     *           Valid values:
     *           * `PERSISTENT`
     *           * `SCRATCH`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Runtime::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Output only. Specifies whether the disk will be auto-deleted when the
     * instance is deleted (but not when the disk is detached from the instance).
     *
     * Generated from protobuf field <code>bool auto_delete = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getAutoDelete()
    {
        return $this->auto_delete;
    }

    /**
     * Optional. Output only. Specifies whether the disk will be auto-deleted when the
     * instance is deleted (but not when the disk is detached from the instance).
     *
     * Generated from protobuf field <code>bool auto_delete = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoDelete($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_delete = $var;

        return $this;
    }

    /**
     * Optional. Output only. Indicates that this is a boot disk. The virtual machine
     * will use the first partition of the disk for its root filesystem.
     *
     * Generated from protobuf field <code>bool boot = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getBoot()
    {
        return $this->boot;
    }

    /**
     * Optional. Output only. Indicates that this is a boot disk. The virtual machine
     * will use the first partition of the disk for its root filesystem.
     *
     * Generated from protobuf field <code>bool boot = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setBoot($var)
    {
        GPBUtil::checkBool($var);
        $this->boot = $var;

        return $this;
    }

    /**
     * Optional. Output only. Specifies a unique device name
     * of your choice that is reflected into the
     * `/dev/disk/by-id/google-*` tree of a Linux operating system running within
     * the instance. This name can be used to reference the device for mounting,
     * resizing, and so on, from within the instance.
     * If not specified, the server chooses a default device name to apply to this
     * disk, in the form persistent-disk-x, where x is a number assigned by Google
     * Compute Engine. This field is only applicable for persistent disks.
     *
     * Generated from protobuf field <code>string device_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDeviceName()
    {
        return $this->device_name;
    }

    /**
     * Optional. Output only. Specifies a unique device name
     * of your choice that is reflected into the
     * `/dev/disk/by-id/google-*` tree of a Linux operating system running within
     * the instance. This name can be used to reference the device for mounting,
     * resizing, and so on, from within the instance.
     * If not specified, the server chooses a default device name to apply to this
     * disk, in the form persistent-disk-x, where x is a number assigned by Google
     * Compute Engine. This field is only applicable for persistent disks.
     *
     * Generated from protobuf field <code>string device_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_name = $var;

        return $this;
    }

    /**
     * Output only. Indicates a list of features to enable on the guest operating system.
     * Applicable only for bootable images. Read  Enabling guest operating
     * system features to see a list of available options.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v1.LocalDisk.RuntimeGuestOsFeature guest_os_features = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGuestOsFeatures()
    {
        return $this->guest_os_features;
    }

    /**
     * Output only. Indicates a list of features to enable on the guest operating system.
     * Applicable only for bootable images. Read  Enabling guest operating
     * system features to see a list of available options.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v1.LocalDisk.RuntimeGuestOsFeature guest_os_features = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Notebooks\V1\LocalDisk\RuntimeGuestOsFeature>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGuestOsFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Notebooks\V1\LocalDisk\RuntimeGuestOsFeature::class);
        $this->guest_os_features = $arr;

        return $this;
    }

    /**
     * Output only. A zero-based index to this disk, where 0 is reserved for the
     * boot disk. If you have many disks attached to an instance, each disk would
     * have a unique index number.
     *
     * Generated from protobuf field <code>int32 index = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Output only. A zero-based index to this disk, where 0 is reserved for the
     * boot disk. If you have many disks attached to an instance, each disk would
     * have a unique index number.
     *
     * Generated from protobuf field <code>int32 index = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Input only. Specifies the parameters for a new disk that will be created
     * alongside the new instance. Use initialization parameters to create boot
     * disks or local SSDs attached to the new instance.
     * This property is mutually exclusive with the source property; you can only
     * define one or the other, but not both.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.LocalDiskInitializeParams initialize_params = 6 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Cloud\Notebooks\V1\LocalDiskInitializeParams|null
     */
    public function getInitializeParams()
    {
        return $this->initialize_params;
    }

    public function hasInitializeParams()
    {
        return isset($this->initialize_params);
    }

    public function clearInitializeParams()
    {
        unset($this->initialize_params);
    }

    /**
     * Input only. Specifies the parameters for a new disk that will be created
     * alongside the new instance. Use initialization parameters to create boot
     * disks or local SSDs attached to the new instance.
     * This property is mutually exclusive with the source property; you can only
     * define one or the other, but not both.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.LocalDiskInitializeParams initialize_params = 6 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Cloud\Notebooks\V1\LocalDiskInitializeParams $var
     * @return $this
     */
    public function setInitializeParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V1\LocalDiskInitializeParams::class);
        $this->initialize_params = $var;

        return $this;
    }

    /**
     * Specifies the disk interface to use for attaching this disk, which is
     * either SCSI or NVME. The default is SCSI. Persistent disks must always use
     * SCSI and the request will fail if you attempt to attach a persistent disk
     * in any other format than SCSI. Local SSDs can use either NVME or SCSI. For
     * performance characteristics of SCSI over NVMe, see Local SSD performance.
     * Valid values:
     * * `NVME`
     * * `SCSI`
     *
     * Generated from protobuf field <code>string interface = 7;</code>
     * @return string
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Specifies the disk interface to use for attaching this disk, which is
     * either SCSI or NVME. The default is SCSI. Persistent disks must always use
     * SCSI and the request will fail if you attempt to attach a persistent disk
     * in any other format than SCSI. Local SSDs can use either NVME or SCSI. For
     * performance characteristics of SCSI over NVMe, see Local SSD performance.
     * Valid values:
     * * `NVME`
     * * `SCSI`
     *
     * Generated from protobuf field <code>string interface = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setInterface($var)
    {
        GPBUtil::checkString($var, True);
        $this->interface = $var;

        return $this;
    }

    /**
     * Output only. Type of the resource. Always compute#attachedDisk for attached disks.
     *
     * Generated from protobuf field <code>string kind = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Output only. Type of the resource. Always compute#attachedDisk for attached disks.
     *
     * Generated from protobuf field <code>string kind = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Any valid publicly visible licenses.
     *
     * Generated from protobuf field <code>repeated string licenses = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLicenses()
    {
        return $this->licenses;
    }

    /**
     * Output only. Any valid publicly visible licenses.
     *
     * Generated from protobuf field <code>repeated string licenses = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLicenses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->licenses = $arr;

        return $this;
    }

    /**
     * The mode in which to attach this disk, either `READ_WRITE` or `READ_ONLY`.
     * If not specified, the default is to attach the disk in `READ_WRITE` mode.
     * Valid values:
     * * `READ_ONLY`
     * * `READ_WRITE`
     *
     * Generated from protobuf field <code>string mode = 10;</code>
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The mode in which to attach this disk, either `READ_WRITE` or `READ_ONLY`.
     * If not specified, the default is to attach the disk in `READ_WRITE` mode.
     * Valid values:
     * * `READ_ONLY`
     * * `READ_WRITE`
     *
     * Generated from protobuf field <code>string mode = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->mode = $var;

        return $this;
    }

    /**
     * Specifies a valid partial or full URL to an existing Persistent Disk
     * resource.
     *
     * Generated from protobuf field <code>string source = 11;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Specifies a valid partial or full URL to an existing Persistent Disk
     * resource.
     *
     * Generated from protobuf field <code>string source = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Specifies the type of the disk, either `SCRATCH` or `PERSISTENT`. If not
     * specified, the default is `PERSISTENT`.
     * Valid values:
     * * `PERSISTENT`
     * * `SCRATCH`
     *
     * Generated from protobuf field <code>string type = 12;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Specifies the type of the disk, either `SCRATCH` or `PERSISTENT`. If not
     * specified, the default is `PERSISTENT`.
     * Valid values:
     * * `PERSISTENT`
     * * `SCRATCH`
     *
     * Generated from protobuf field <code>string type = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

