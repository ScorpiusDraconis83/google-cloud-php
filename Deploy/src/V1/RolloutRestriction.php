<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Rollout restrictions.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.RolloutRestriction</code>
 */
class RolloutRestriction extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Restriction rule ID. Required and must be unique within a
     * DeployPolicy. The format is `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $id = '';
    /**
     * Optional. What invoked the action. If left empty, all invoker types will be
     * restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.DeployPolicy.Invoker invokers = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $invokers;
    /**
     * Optional. Rollout actions to be restricted as part of the policy. If left
     * empty, all actions will be restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.RolloutRestriction.RolloutActions actions = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $actions;
    /**
     * Required. Time window within which actions are restricted.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TimeWindows time_windows = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $time_windows = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Required. Restriction rule ID. Required and must be unique within a
     *           DeployPolicy. The format is `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $invokers
     *           Optional. What invoked the action. If left empty, all invoker types will be
     *           restricted.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $actions
     *           Optional. Rollout actions to be restricted as part of the policy. If left
     *           empty, all actions will be restricted.
     *     @type \Google\Cloud\Deploy\V1\TimeWindows $time_windows
     *           Required. Time window within which actions are restricted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Restriction rule ID. Required and must be unique within a
     * DeployPolicy. The format is `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Required. Restriction rule ID. Required and must be unique within a
     * DeployPolicy. The format is `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Optional. What invoked the action. If left empty, all invoker types will be
     * restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.DeployPolicy.Invoker invokers = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInvokers()
    {
        return $this->invokers;
    }

    /**
     * Optional. What invoked the action. If left empty, all invoker types will be
     * restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.DeployPolicy.Invoker invokers = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInvokers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Deploy\V1\DeployPolicy\Invoker::class);
        $this->invokers = $arr;

        return $this;
    }

    /**
     * Optional. Rollout actions to be restricted as part of the policy. If left
     * empty, all actions will be restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.RolloutRestriction.RolloutActions actions = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Optional. Rollout actions to be restricted as part of the policy. If left
     * empty, all actions will be restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.RolloutRestriction.RolloutActions actions = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Deploy\V1\RolloutRestriction\RolloutActions::class);
        $this->actions = $arr;

        return $this;
    }

    /**
     * Required. Time window within which actions are restricted.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TimeWindows time_windows = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Deploy\V1\TimeWindows|null
     */
    public function getTimeWindows()
    {
        return $this->time_windows;
    }

    public function hasTimeWindows()
    {
        return isset($this->time_windows);
    }

    public function clearTimeWindows()
    {
        unset($this->time_windows);
    }

    /**
     * Required. Time window within which actions are restricted.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TimeWindows time_windows = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Deploy\V1\TimeWindows $var
     * @return $this
     */
    public function setTimeWindows($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\TimeWindows::class);
        $this->time_windows = $var;

        return $this;
    }

}

