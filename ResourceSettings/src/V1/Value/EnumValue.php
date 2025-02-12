<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcesettings/v1/resource_settings.proto

namespace Google\Cloud\ResourceSettings\V1\Value;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A enum value that can hold any enum type setting values.
 * Each enum type is represented by a number, this representation
 * is stored in the definitions.
 *
 * Generated from protobuf message <code>google.cloud.resourcesettings.v1.Value.EnumValue</code>
 */
class EnumValue extends \Google\Protobuf\Internal\Message
{
    /**
     * The value of this enum
     *
     * Generated from protobuf field <code>string value = 1;</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           The value of this enum
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcesettings\V1\ResourceSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * The value of this enum
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value of this enum
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}


