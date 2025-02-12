<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A `CustomTargetType` resource in the Cloud Deploy API.
 * A `CustomTargetType` defines a type of custom target that can be referenced
 * in a `Target` in order to facilitate deploying to other systems besides the
 * supported runtimes.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.CustomTargetType</code>
 */
class CustomTargetType extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Name of the `CustomTargetType`. Format is
     * `projects/{project}/locations/{location}/customTargetTypes/{customTargetType}`.
     * The `customTargetType` component must match
     * `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. Resource id of the `CustomTargetType`.
     *
     * Generated from protobuf field <code>string custom_target_type_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $custom_target_type_id = '';
    /**
     * Output only. Unique identifier of the `CustomTargetType`.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Optional. Description of the `CustomTargetType`. Max length is 255
     * characters.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. User annotations. These attributes can only be set and used by
     * the user, and not by Cloud Deploy. See
     * https://google.aip.dev/128#annotations for more details such as format and
     * size limitations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $annotations;
    /**
     * Optional. Labels are attributes that can be set and used by both the
     * user and by Cloud Deploy. Labels must meet the following constraints:
     * * Keys and values can contain only lowercase letters, numeric characters,
     * underscores, and dashes.
     * * All characters must use UTF-8 encoding, and international characters are
     * allowed.
     * * Keys must start with a lowercase letter or international character.
     * * Each resource is limited to a maximum of 64 labels.
     * Both keys and values are additionally constrained to be <= 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Output only. Time at which the `CustomTargetType` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Most recent time at which the `CustomTargetType` was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. This checksum is computed by the server based on the value of
     * other fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';
    protected $definition;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Name of the `CustomTargetType`. Format is
     *           `projects/{project}/locations/{location}/customTargetTypes/{customTargetType}`.
     *           The `customTargetType` component must match
     *           `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`
     *     @type string $custom_target_type_id
     *           Output only. Resource id of the `CustomTargetType`.
     *     @type string $uid
     *           Output only. Unique identifier of the `CustomTargetType`.
     *     @type string $description
     *           Optional. Description of the `CustomTargetType`. Max length is 255
     *           characters.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Optional. User annotations. These attributes can only be set and used by
     *           the user, and not by Cloud Deploy. See
     *           https://google.aip.dev/128#annotations for more details such as format and
     *           size limitations.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels are attributes that can be set and used by both the
     *           user and by Cloud Deploy. Labels must meet the following constraints:
     *           * Keys and values can contain only lowercase letters, numeric characters,
     *           underscores, and dashes.
     *           * All characters must use UTF-8 encoding, and international characters are
     *           allowed.
     *           * Keys must start with a lowercase letter or international character.
     *           * Each resource is limited to a maximum of 64 labels.
     *           Both keys and values are additionally constrained to be <= 128 bytes.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time at which the `CustomTargetType` was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Most recent time at which the `CustomTargetType` was updated.
     *     @type string $etag
     *           Optional. This checksum is computed by the server based on the value of
     *           other fields, and may be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     *     @type \Google\Cloud\Deploy\V1\CustomTargetSkaffoldActions $custom_actions
     *           Optional. Configures render and deploy for the `CustomTargetType` using
     *           Skaffold custom actions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Name of the `CustomTargetType`. Format is
     * `projects/{project}/locations/{location}/customTargetTypes/{customTargetType}`.
     * The `customTargetType` component must match
     * `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Name of the `CustomTargetType`. Format is
     * `projects/{project}/locations/{location}/customTargetTypes/{customTargetType}`.
     * The `customTargetType` component must match
     * `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`
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
     * Output only. Resource id of the `CustomTargetType`.
     *
     * Generated from protobuf field <code>string custom_target_type_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCustomTargetTypeId()
    {
        return $this->custom_target_type_id;
    }

    /**
     * Output only. Resource id of the `CustomTargetType`.
     *
     * Generated from protobuf field <code>string custom_target_type_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomTargetTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_target_type_id = $var;

        return $this;
    }

    /**
     * Output only. Unique identifier of the `CustomTargetType`.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Unique identifier of the `CustomTargetType`.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Optional. Description of the `CustomTargetType`. Max length is 255
     * characters.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the `CustomTargetType`. Max length is 255
     * characters.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. User annotations. These attributes can only be set and used by
     * the user, and not by Cloud Deploy. See
     * https://google.aip.dev/128#annotations for more details such as format and
     * size limitations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Optional. User annotations. These attributes can only be set and used by
     * the user, and not by Cloud Deploy. See
     * https://google.aip.dev/128#annotations for more details such as format and
     * size limitations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Optional. Labels are attributes that can be set and used by both the
     * user and by Cloud Deploy. Labels must meet the following constraints:
     * * Keys and values can contain only lowercase letters, numeric characters,
     * underscores, and dashes.
     * * All characters must use UTF-8 encoding, and international characters are
     * allowed.
     * * Keys must start with a lowercase letter or international character.
     * * Each resource is limited to a maximum of 64 labels.
     * Both keys and values are additionally constrained to be <= 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels are attributes that can be set and used by both the
     * user and by Cloud Deploy. Labels must meet the following constraints:
     * * Keys and values can contain only lowercase letters, numeric characters,
     * underscores, and dashes.
     * * All characters must use UTF-8 encoding, and international characters are
     * allowed.
     * * Keys must start with a lowercase letter or international character.
     * * Each resource is limited to a maximum of 64 labels.
     * Both keys and values are additionally constrained to be <= 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. Time at which the `CustomTargetType` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time at which the `CustomTargetType` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Most recent time at which the `CustomTargetType` was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Most recent time at which the `CustomTargetType` was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. This checksum is computed by the server based on the value of
     * other fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. This checksum is computed by the server based on the value of
     * other fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Configures render and deploy for the `CustomTargetType` using
     * Skaffold custom actions.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.CustomTargetSkaffoldActions custom_actions = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\CustomTargetSkaffoldActions|null
     */
    public function getCustomActions()
    {
        return $this->readOneof(10);
    }

    public function hasCustomActions()
    {
        return $this->hasOneof(10);
    }

    /**
     * Optional. Configures render and deploy for the `CustomTargetType` using
     * Skaffold custom actions.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.CustomTargetSkaffoldActions custom_actions = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\CustomTargetSkaffoldActions $var
     * @return $this
     */
    public function setCustomActions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\CustomTargetSkaffoldActions::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDefinition()
    {
        return $this->whichOneof("definition");
    }

}

