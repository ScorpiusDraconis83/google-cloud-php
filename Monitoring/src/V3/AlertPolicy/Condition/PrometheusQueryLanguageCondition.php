<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert.proto

namespace Google\Cloud\Monitoring\V3\AlertPolicy\Condition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A condition type that allows alerting policies to be defined using
 * [Prometheus Query Language
 * (PromQL)](https://prometheus.io/docs/prometheus/latest/querying/basics/).
 * The PrometheusQueryLanguageCondition message contains information
 * from a Prometheus alerting rule and its associated rule group.
 * A Prometheus alerting rule is described
 * [here](https://prometheus.io/docs/prometheus/latest/configuration/alerting_rules/).
 * The semantics of a Prometheus alerting rule is described
 * [here](https://prometheus.io/docs/prometheus/latest/configuration/recording_rules/#rule).
 * A Prometheus rule group is described
 * [here](https://prometheus.io/docs/prometheus/latest/configuration/recording_rules/).
 * The semantics of a Prometheus rule group is described
 * [here](https://prometheus.io/docs/prometheus/latest/configuration/recording_rules/#rule_group).
 * Because Cloud Alerting has no representation of a Prometheus rule
 * group resource, we must embed the information of the parent rule
 * group inside each of the conditions that refer to it. We must also
 * update the contents of all Prometheus alerts in case the information
 * of their rule group changes.
 * The PrometheusQueryLanguageCondition protocol buffer combines the
 * information of the corresponding rule group and alerting rule.
 * The structure of the PrometheusQueryLanguageCondition protocol buffer
 * does NOT mimic the structure of the Prometheus rule group and alerting
 * rule YAML declarations. The PrometheusQueryLanguageCondition protocol
 * buffer may change in the future to support future rule group and/or
 * alerting rule features. There are no new such features at the present
 * time (2023-06-26).
 *
 * Generated from protobuf message <code>google.monitoring.v3.AlertPolicy.Condition.PrometheusQueryLanguageCondition</code>
 */
class PrometheusQueryLanguageCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The PromQL expression to evaluate. Every evaluation cycle
     * this expression is evaluated at the current time, and all resultant
     * time series become pending/firing alerts. This field must not be empty.
     *
     * Generated from protobuf field <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query = '';
    /**
     * Optional. Alerts are considered firing once their PromQL expression was
     * evaluated to be "true" for this long.
     * Alerts whose PromQL expression was not evaluated to be "true" for
     * long enough are considered pending.
     * Must be a non-negative duration or missing.
     * This field is optional. Its default value is zero.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $duration = null;
    /**
     * Optional. How often this rule should be evaluated.
     * Must be a positive multiple of 30 seconds or missing.
     * This field is optional. Its default value is 30 seconds.
     * If this PrometheusQueryLanguageCondition was generated from a
     * Prometheus alerting rule, then this value should be taken from the
     * enclosing rule group.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration evaluation_interval = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $evaluation_interval = null;
    /**
     * Optional. Labels to add to or overwrite in the PromQL query result.
     * Label names [must be
     * valid](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels).
     * Label values can be [templatized by using
     * variables](https://cloud.google.com/monitoring/alerts/doc-variables#doc-vars).
     * The only available variable names are the names of the labels in the
     * PromQL result, including "__name__" and "value". "labels" may be empty.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. The rule group name of this alert in the corresponding
     * Prometheus configuration file.
     * Some external tools may require this field to be populated correctly
     * in order to refer to the original Prometheus configuration file.
     * The rule group name and the alert name are necessary to update the
     * relevant AlertPolicies in case the definition of the rule group changes
     * in the future.
     * This field is optional. If this field is not empty, then it must
     * contain a valid UTF-8 string.
     * This field may not exceed 2048 Unicode characters in length.
     *
     * Generated from protobuf field <code>string rule_group = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $rule_group = '';
    /**
     * Optional. The alerting rule name of this alert in the corresponding
     * Prometheus configuration file.
     * Some external tools may require this field to be populated correctly
     * in order to refer to the original Prometheus configuration file.
     * The rule group name and the alert name are necessary to update the
     * relevant AlertPolicies in case the definition of the rule group changes
     * in the future.
     * This field is optional. If this field is not empty, then it must be a
     * [valid Prometheus label
     * name](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels).
     * This field may not exceed 2048 Unicode characters in length.
     *
     * Generated from protobuf field <code>string alert_rule = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $alert_rule = '';
    /**
     * Optional. Whether to disable metric existence validation for this
     * condition.
     * This allows alerting policies to be defined on metrics that do not yet
     * exist, improving advanced customer workflows such as configuring
     * alerting policies using Terraform.
     * Users with the `monitoring.alertPolicyViewer` role are able to see the
     * name of the non-existent metric in the alerting policy condition.
     *
     * Generated from protobuf field <code>bool disable_metric_validation = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $disable_metric_validation = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *           Required. The PromQL expression to evaluate. Every evaluation cycle
     *           this expression is evaluated at the current time, and all resultant
     *           time series become pending/firing alerts. This field must not be empty.
     *     @type \Google\Protobuf\Duration $duration
     *           Optional. Alerts are considered firing once their PromQL expression was
     *           evaluated to be "true" for this long.
     *           Alerts whose PromQL expression was not evaluated to be "true" for
     *           long enough are considered pending.
     *           Must be a non-negative duration or missing.
     *           This field is optional. Its default value is zero.
     *     @type \Google\Protobuf\Duration $evaluation_interval
     *           Optional. How often this rule should be evaluated.
     *           Must be a positive multiple of 30 seconds or missing.
     *           This field is optional. Its default value is 30 seconds.
     *           If this PrometheusQueryLanguageCondition was generated from a
     *           Prometheus alerting rule, then this value should be taken from the
     *           enclosing rule group.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels to add to or overwrite in the PromQL query result.
     *           Label names [must be
     *           valid](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels).
     *           Label values can be [templatized by using
     *           variables](https://cloud.google.com/monitoring/alerts/doc-variables#doc-vars).
     *           The only available variable names are the names of the labels in the
     *           PromQL result, including "__name__" and "value". "labels" may be empty.
     *     @type string $rule_group
     *           Optional. The rule group name of this alert in the corresponding
     *           Prometheus configuration file.
     *           Some external tools may require this field to be populated correctly
     *           in order to refer to the original Prometheus configuration file.
     *           The rule group name and the alert name are necessary to update the
     *           relevant AlertPolicies in case the definition of the rule group changes
     *           in the future.
     *           This field is optional. If this field is not empty, then it must
     *           contain a valid UTF-8 string.
     *           This field may not exceed 2048 Unicode characters in length.
     *     @type string $alert_rule
     *           Optional. The alerting rule name of this alert in the corresponding
     *           Prometheus configuration file.
     *           Some external tools may require this field to be populated correctly
     *           in order to refer to the original Prometheus configuration file.
     *           The rule group name and the alert name are necessary to update the
     *           relevant AlertPolicies in case the definition of the rule group changes
     *           in the future.
     *           This field is optional. If this field is not empty, then it must be a
     *           [valid Prometheus label
     *           name](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels).
     *           This field may not exceed 2048 Unicode characters in length.
     *     @type bool $disable_metric_validation
     *           Optional. Whether to disable metric existence validation for this
     *           condition.
     *           This allows alerting policies to be defined on metrics that do not yet
     *           exist, improving advanced customer workflows such as configuring
     *           alerting policies using Terraform.
     *           Users with the `monitoring.alertPolicyViewer` role are able to see the
     *           name of the non-existent metric in the alerting policy condition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Alert::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The PromQL expression to evaluate. Every evaluation cycle
     * this expression is evaluated at the current time, and all resultant
     * time series become pending/firing alerts. This field must not be empty.
     *
     * Generated from protobuf field <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Required. The PromQL expression to evaluate. Every evaluation cycle
     * this expression is evaluated at the current time, and all resultant
     * time series become pending/firing alerts. This field must not be empty.
     *
     * Generated from protobuf field <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Optional. Alerts are considered firing once their PromQL expression was
     * evaluated to be "true" for this long.
     * Alerts whose PromQL expression was not evaluated to be "true" for
     * long enough are considered pending.
     * Must be a non-negative duration or missing.
     * This field is optional. Its default value is zero.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Optional. Alerts are considered firing once their PromQL expression was
     * evaluated to be "true" for this long.
     * Alerts whose PromQL expression was not evaluated to be "true" for
     * long enough are considered pending.
     * Must be a non-negative duration or missing.
     * This field is optional. Its default value is zero.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * Optional. How often this rule should be evaluated.
     * Must be a positive multiple of 30 seconds or missing.
     * This field is optional. Its default value is 30 seconds.
     * If this PrometheusQueryLanguageCondition was generated from a
     * Prometheus alerting rule, then this value should be taken from the
     * enclosing rule group.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration evaluation_interval = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getEvaluationInterval()
    {
        return $this->evaluation_interval;
    }

    public function hasEvaluationInterval()
    {
        return isset($this->evaluation_interval);
    }

    public function clearEvaluationInterval()
    {
        unset($this->evaluation_interval);
    }

    /**
     * Optional. How often this rule should be evaluated.
     * Must be a positive multiple of 30 seconds or missing.
     * This field is optional. Its default value is 30 seconds.
     * If this PrometheusQueryLanguageCondition was generated from a
     * Prometheus alerting rule, then this value should be taken from the
     * enclosing rule group.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration evaluation_interval = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setEvaluationInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->evaluation_interval = $var;

        return $this;
    }

    /**
     * Optional. Labels to add to or overwrite in the PromQL query result.
     * Label names [must be
     * valid](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels).
     * Label values can be [templatized by using
     * variables](https://cloud.google.com/monitoring/alerts/doc-variables#doc-vars).
     * The only available variable names are the names of the labels in the
     * PromQL result, including "__name__" and "value". "labels" may be empty.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels to add to or overwrite in the PromQL query result.
     * Label names [must be
     * valid](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels).
     * Label values can be [templatized by using
     * variables](https://cloud.google.com/monitoring/alerts/doc-variables#doc-vars).
     * The only available variable names are the names of the labels in the
     * PromQL result, including "__name__" and "value". "labels" may be empty.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The rule group name of this alert in the corresponding
     * Prometheus configuration file.
     * Some external tools may require this field to be populated correctly
     * in order to refer to the original Prometheus configuration file.
     * The rule group name and the alert name are necessary to update the
     * relevant AlertPolicies in case the definition of the rule group changes
     * in the future.
     * This field is optional. If this field is not empty, then it must
     * contain a valid UTF-8 string.
     * This field may not exceed 2048 Unicode characters in length.
     *
     * Generated from protobuf field <code>string rule_group = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRuleGroup()
    {
        return $this->rule_group;
    }

    /**
     * Optional. The rule group name of this alert in the corresponding
     * Prometheus configuration file.
     * Some external tools may require this field to be populated correctly
     * in order to refer to the original Prometheus configuration file.
     * The rule group name and the alert name are necessary to update the
     * relevant AlertPolicies in case the definition of the rule group changes
     * in the future.
     * This field is optional. If this field is not empty, then it must
     * contain a valid UTF-8 string.
     * This field may not exceed 2048 Unicode characters in length.
     *
     * Generated from protobuf field <code>string rule_group = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRuleGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->rule_group = $var;

        return $this;
    }

    /**
     * Optional. The alerting rule name of this alert in the corresponding
     * Prometheus configuration file.
     * Some external tools may require this field to be populated correctly
     * in order to refer to the original Prometheus configuration file.
     * The rule group name and the alert name are necessary to update the
     * relevant AlertPolicies in case the definition of the rule group changes
     * in the future.
     * This field is optional. If this field is not empty, then it must be a
     * [valid Prometheus label
     * name](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels).
     * This field may not exceed 2048 Unicode characters in length.
     *
     * Generated from protobuf field <code>string alert_rule = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAlertRule()
    {
        return $this->alert_rule;
    }

    /**
     * Optional. The alerting rule name of this alert in the corresponding
     * Prometheus configuration file.
     * Some external tools may require this field to be populated correctly
     * in order to refer to the original Prometheus configuration file.
     * The rule group name and the alert name are necessary to update the
     * relevant AlertPolicies in case the definition of the rule group changes
     * in the future.
     * This field is optional. If this field is not empty, then it must be a
     * [valid Prometheus label
     * name](https://prometheus.io/docs/concepts/data_model/#metric-names-and-labels).
     * This field may not exceed 2048 Unicode characters in length.
     *
     * Generated from protobuf field <code>string alert_rule = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAlertRule($var)
    {
        GPBUtil::checkString($var, True);
        $this->alert_rule = $var;

        return $this;
    }

    /**
     * Optional. Whether to disable metric existence validation for this
     * condition.
     * This allows alerting policies to be defined on metrics that do not yet
     * exist, improving advanced customer workflows such as configuring
     * alerting policies using Terraform.
     * Users with the `monitoring.alertPolicyViewer` role are able to see the
     * name of the non-existent metric in the alerting policy condition.
     *
     * Generated from protobuf field <code>bool disable_metric_validation = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDisableMetricValidation()
    {
        return $this->disable_metric_validation;
    }

    /**
     * Optional. Whether to disable metric existence validation for this
     * condition.
     * This allows alerting policies to be defined on metrics that do not yet
     * exist, improving advanced customer workflows such as configuring
     * alerting policies using Terraform.
     * Users with the `monitoring.alertPolicyViewer` role are able to see the
     * name of the non-existent metric in the alerting policy condition.
     *
     * Generated from protobuf field <code>bool disable_metric_validation = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableMetricValidation($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_metric_validation = $var;

        return $this;
    }

}


