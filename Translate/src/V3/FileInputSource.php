<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/common.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An inlined file.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.FileInputSource</code>
 */
class FileInputSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The file's mime type.
     *
     * Generated from protobuf field <code>string mime_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $mime_type = '';
    /**
     * Required. The file's byte contents.
     *
     * Generated from protobuf field <code>bytes content = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $content = '';
    /**
     * Required. The file's display name.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mime_type
     *           Required. The file's mime type.
     *     @type string $content
     *           Required. The file's byte contents.
     *     @type string $display_name
     *           Required. The file's display name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The file's mime type.
     *
     * Generated from protobuf field <code>string mime_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Required. The file's mime type.
     *
     * Generated from protobuf field <code>string mime_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Required. The file's byte contents.
     *
     * Generated from protobuf field <code>bytes content = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Required. The file's byte contents.
     *
     * Generated from protobuf field <code>bytes content = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->content = $var;

        return $this;
    }

    /**
     * Required. The file's display name.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The file's display name.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

