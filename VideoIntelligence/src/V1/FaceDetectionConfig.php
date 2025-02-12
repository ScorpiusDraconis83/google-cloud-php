<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for FACE_DETECTION.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.FaceDetectionConfig</code>
 */
class FaceDetectionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Model to use for face detection.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest".
     *
     * Generated from protobuf field <code>string model = 1;</code>
     */
    protected $model = '';
    /**
     * Whether bounding boxes are included in the face annotation output.
     *
     * Generated from protobuf field <code>bool include_bounding_boxes = 2;</code>
     */
    protected $include_bounding_boxes = false;
    /**
     * Whether to enable face attributes detection, such as glasses, dark_glasses,
     * mouth_open etc. Ignored if 'include_bounding_boxes' is set to false.
     *
     * Generated from protobuf field <code>bool include_attributes = 5;</code>
     */
    protected $include_attributes = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $model
     *           Model to use for face detection.
     *           Supported values: "builtin/stable" (the default if unset) and
     *           "builtin/latest".
     *     @type bool $include_bounding_boxes
     *           Whether bounding boxes are included in the face annotation output.
     *     @type bool $include_attributes
     *           Whether to enable face attributes detection, such as glasses, dark_glasses,
     *           mouth_open etc. Ignored if 'include_bounding_boxes' is set to false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Model to use for face detection.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest".
     *
     * Generated from protobuf field <code>string model = 1;</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Model to use for face detection.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest".
     *
     * Generated from protobuf field <code>string model = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * Whether bounding boxes are included in the face annotation output.
     *
     * Generated from protobuf field <code>bool include_bounding_boxes = 2;</code>
     * @return bool
     */
    public function getIncludeBoundingBoxes()
    {
        return $this->include_bounding_boxes;
    }

    /**
     * Whether bounding boxes are included in the face annotation output.
     *
     * Generated from protobuf field <code>bool include_bounding_boxes = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeBoundingBoxes($var)
    {
        GPBUtil::checkBool($var);
        $this->include_bounding_boxes = $var;

        return $this;
    }

    /**
     * Whether to enable face attributes detection, such as glasses, dark_glasses,
     * mouth_open etc. Ignored if 'include_bounding_boxes' is set to false.
     *
     * Generated from protobuf field <code>bool include_attributes = 5;</code>
     * @return bool
     */
    public function getIncludeAttributes()
    {
        return $this->include_attributes;
    }

    /**
     * Whether to enable face attributes detection, such as glasses, dark_glasses,
     * mouth_open etc. Ignored if 'include_bounding_boxes' is set to false.
     *
     * Generated from protobuf field <code>bool include_attributes = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeAttributes($var)
    {
        GPBUtil::checkBool($var);
        $this->include_attributes = $var;

        return $this;
    }

}

