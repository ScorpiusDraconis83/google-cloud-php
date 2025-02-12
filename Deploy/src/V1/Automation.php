<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An `Automation` resource in the Cloud Deploy API.
 * An `Automation` enables the automation of manually driven actions for
 * a Delivery Pipeline, which includes Release promotion among Targets,
 * Rollout repair and Rollout deployment strategy advancement. The intention
 * of Automation is to reduce manual intervention in the continuous delivery
 * process.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.Automation</code>
 */
class Automation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the `Automation`. Format is
     * `projects/{project}/locations/{location}/deliveryPipelines/{delivery_pipeline}/automations/{automation}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Unique identifier of the `Automation`.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Optional. Description of the `Automation`. Max length is 255 characters.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. Time at which the automation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time at which the automation was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. User annotations. These attributes can only be set and used by
     * the user, and not by Cloud Deploy. Annotations must meet the following
     * constraints:
     * * Annotations are key/value pairs.
     * * Valid annotation keys have two segments: an optional prefix and name,
     * separated by a slash (`/`).
     * * The name segment is required and must be 63 characters or less,
     * beginning and ending with an alphanumeric character (`[a-z0-9A-Z]`) with
     * dashes (`-`), underscores (`_`), dots (`.`), and alphanumerics between.
     * * The prefix is optional. If specified, the prefix must be a DNS subdomain:
     * a series of DNS labels separated by dots(`.`), not longer than 253
     * characters in total, followed by a slash (`/`).
     * See
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/annotations/#syntax-and-character-set
     * for more details.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Both keys and values are additionally constrained to be <= 63 characters.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. The weak etag of the `Automation` resource.
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';
    /**
     * Optional. When Suspended, automation is deactivated from execution.
     *
     * Generated from protobuf field <code>bool suspended = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $suspended = false;
    /**
     * Required. Email address of the user-managed IAM service account that
     * creates Cloud Deploy release and rollout resources.
     *
     * Generated from protobuf field <code>string service_account = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_account = '';
    /**
     * Required. Selected resources to which the automation will be applied.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AutomationResourceSelector selector = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $selector = null;
    /**
     * Required. List of Automation rules associated with the Automation resource.
     * Must have at least one rule and limited to 250 rules per Delivery Pipeline.
     * Note: the order of the rules here is not the same as the order of
     * execution.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.AutomationRule rules = 14 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $rules;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Name of the `Automation`. Format is
     *           `projects/{project}/locations/{location}/deliveryPipelines/{delivery_pipeline}/automations/{automation}`.
     *     @type string $uid
     *           Output only. Unique identifier of the `Automation`.
     *     @type string $description
     *           Optional. Description of the `Automation`. Max length is 255 characters.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time at which the automation was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time at which the automation was updated.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Optional. User annotations. These attributes can only be set and used by
     *           the user, and not by Cloud Deploy. Annotations must meet the following
     *           constraints:
     *           * Annotations are key/value pairs.
     *           * Valid annotation keys have two segments: an optional prefix and name,
     *           separated by a slash (`/`).
     *           * The name segment is required and must be 63 characters or less,
     *           beginning and ending with an alphanumeric character (`[a-z0-9A-Z]`) with
     *           dashes (`-`), underscores (`_`), dots (`.`), and alphanumerics between.
     *           * The prefix is optional. If specified, the prefix must be a DNS subdomain:
     *           a series of DNS labels separated by dots(`.`), not longer than 253
     *           characters in total, followed by a slash (`/`).
     *           See
     *           https://kubernetes.io/docs/concepts/overview/working-with-objects/annotations/#syntax-and-character-set
     *           for more details.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels are attributes that can be set and used by both the
     *           user and by Cloud Deploy. Labels must meet the following constraints:
     *           * Keys and values can contain only lowercase letters, numeric characters,
     *           underscores, and dashes.
     *           * All characters must use UTF-8 encoding, and international characters are
     *           allowed.
     *           * Keys must start with a lowercase letter or international character.
     *           * Each resource is limited to a maximum of 64 labels.
     *           Both keys and values are additionally constrained to be <= 63 characters.
     *     @type string $etag
     *           Optional. The weak etag of the `Automation` resource.
     *           This checksum is computed by the server based on the value of other
     *           fields, and may be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     *     @type bool $suspended
     *           Optional. When Suspended, automation is deactivated from execution.
     *     @type string $service_account
     *           Required. Email address of the user-managed IAM service account that
     *           creates Cloud Deploy release and rollout resources.
     *     @type \Google\Cloud\Deploy\V1\AutomationResourceSelector $selector
     *           Required. Selected resources to which the automation will be applied.
     *     @type array<\Google\Cloud\Deploy\V1\AutomationRule>|\Google\Protobuf\Internal\RepeatedField $rules
     *           Required. List of Automation rules associated with the Automation resource.
     *           Must have at least one rule and limited to 250 rules per Delivery Pipeline.
     *           Note: the order of the rules here is not the same as the order of
     *           execution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the `Automation`. Format is
     * `projects/{project}/locations/{location}/deliveryPipelines/{delivery_pipeline}/automations/{automation}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of the `Automation`. Format is
     * `projects/{project}/locations/{location}/deliveryPipelines/{delivery_pipeline}/automations/{automation}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Unique identifier of the `Automation`.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Unique identifier of the `Automation`.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Optional. Description of the `Automation`. Max length is 255 characters.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the `Automation`. Max length is 255 characters.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. Time at which the automation was created.
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
     * Output only. Time at which the automation was created.
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
     * Output only. Time at which the automation was updated.
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
     * Output only. Time at which the automation was updated.
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

    /**
     * Optional. User annotations. These attributes can only be set and used by
     * the user, and not by Cloud Deploy. Annotations must meet the following
     * constraints:
     * * Annotations are key/value pairs.
     * * Valid annotation keys have two segments: an optional prefix and name,
     * separated by a slash (`/`).
     * * The name segment is required and must be 63 characters or less,
     * beginning and ending with an alphanumeric character (`[a-z0-9A-Z]`) with
     * dashes (`-`), underscores (`_`), dots (`.`), and alphanumerics between.
     * * The prefix is optional. If specified, the prefix must be a DNS subdomain:
     * a series of DNS labels separated by dots(`.`), not longer than 253
     * characters in total, followed by a slash (`/`).
     * See
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/annotations/#syntax-and-character-set
     * for more details.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Optional. User annotations. These attributes can only be set and used by
     * the user, and not by Cloud Deploy. Annotations must meet the following
     * constraints:
     * * Annotations are key/value pairs.
     * * Valid annotation keys have two segments: an optional prefix and name,
     * separated by a slash (`/`).
     * * The name segment is required and must be 63 characters or less,
     * beginning and ending with an alphanumeric character (`[a-z0-9A-Z]`) with
     * dashes (`-`), underscores (`_`), dots (`.`), and alphanumerics between.
     * * The prefix is optional. If specified, the prefix must be a DNS subdomain:
     * a series of DNS labels separated by dots(`.`), not longer than 253
     * characters in total, followed by a slash (`/`).
     * See
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/annotations/#syntax-and-character-set
     * for more details.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Both keys and values are additionally constrained to be <= 63 characters.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Both keys and values are additionally constrained to be <= 63 characters.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The weak etag of the `Automation` resource.
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. The weak etag of the `Automation` resource.
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. When Suspended, automation is deactivated from execution.
     *
     * Generated from protobuf field <code>bool suspended = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * Optional. When Suspended, automation is deactivated from execution.
     *
     * Generated from protobuf field <code>bool suspended = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSuspended($var)
    {
        GPBUtil::checkBool($var);
        $this->suspended = $var;

        return $this;
    }

    /**
     * Required. Email address of the user-managed IAM service account that
     * creates Cloud Deploy release and rollout resources.
     *
     * Generated from protobuf field <code>string service_account = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Required. Email address of the user-managed IAM service account that
     * creates Cloud Deploy release and rollout resources.
     *
     * Generated from protobuf field <code>string service_account = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Required. Selected resources to which the automation will be applied.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AutomationResourceSelector selector = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Deploy\V1\AutomationResourceSelector|null
     */
    public function getSelector()
    {
        return $this->selector;
    }

    public function hasSelector()
    {
        return isset($this->selector);
    }

    public function clearSelector()
    {
        unset($this->selector);
    }

    /**
     * Required. Selected resources to which the automation will be applied.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AutomationResourceSelector selector = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Deploy\V1\AutomationResourceSelector $var
     * @return $this
     */
    public function setSelector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\AutomationResourceSelector::class);
        $this->selector = $var;

        return $this;
    }

    /**
     * Required. List of Automation rules associated with the Automation resource.
     * Must have at least one rule and limited to 250 rules per Delivery Pipeline.
     * Note: the order of the rules here is not the same as the order of
     * execution.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.AutomationRule rules = 14 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Required. List of Automation rules associated with the Automation resource.
     * Must have at least one rule and limited to 250 rules per Delivery Pipeline.
     * Note: the order of the rules here is not the same as the order of
     * execution.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.AutomationRule rules = 14 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Deploy\V1\AutomationRule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\AutomationRule::class);
        $this->rules = $arr;

        return $this;
    }

}

