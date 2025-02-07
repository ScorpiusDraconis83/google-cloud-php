<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Probe describes a health check to be performed against a container to
 * determine whether it is alive or ready to receive traffic.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Probe</code>
 */
class Probe extends \Google\Protobuf\Internal\Message
{
    /**
     * How often (in seconds) to perform the probe. Default to 10 seconds.
     * Minimum value is 1. Must be less than timeout_seconds.
     * Maps to Kubernetes probe argument 'periodSeconds'.
     *
     * Generated from protobuf field <code>int32 period_seconds = 2;</code>
     */
    protected $period_seconds = 0;
    /**
     * Number of seconds after which the probe times out. Defaults to 1 second.
     * Minimum value is 1. Must be greater or equal to period_seconds.
     * Maps to Kubernetes probe argument 'timeoutSeconds'.
     *
     * Generated from protobuf field <code>int32 timeout_seconds = 3;</code>
     */
    protected $timeout_seconds = 0;
    /**
     * Number of consecutive failures before the probe is considered failed.
     * Defaults to 3. Minimum value is 1.
     * Maps to Kubernetes probe argument 'failureThreshold'.
     *
     * Generated from protobuf field <code>int32 failure_threshold = 7;</code>
     */
    protected $failure_threshold = 0;
    /**
     * Number of consecutive successes before the probe is considered successful.
     * Defaults to 1. Minimum value is 1.
     * Maps to Kubernetes probe argument 'successThreshold'.
     *
     * Generated from protobuf field <code>int32 success_threshold = 8;</code>
     */
    protected $success_threshold = 0;
    /**
     * Number of seconds to wait before starting the probe. Defaults to 0.
     * Minimum value is 0.
     * Maps to Kubernetes probe argument 'initialDelaySeconds'.
     *
     * Generated from protobuf field <code>int32 initial_delay_seconds = 9;</code>
     */
    protected $initial_delay_seconds = 0;
    protected $probe_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Probe\ExecAction $exec
     *           ExecAction probes the health of a container by executing a command.
     *     @type \Google\Cloud\AIPlatform\V1\Probe\HttpGetAction $http_get
     *           HttpGetAction probes the health of a container by sending an HTTP GET
     *           request.
     *     @type \Google\Cloud\AIPlatform\V1\Probe\GrpcAction $grpc
     *           GrpcAction probes the health of a container by sending a gRPC request.
     *     @type \Google\Cloud\AIPlatform\V1\Probe\TcpSocketAction $tcp_socket
     *           TcpSocketAction probes the health of a container by opening a TCP socket
     *           connection.
     *     @type int $period_seconds
     *           How often (in seconds) to perform the probe. Default to 10 seconds.
     *           Minimum value is 1. Must be less than timeout_seconds.
     *           Maps to Kubernetes probe argument 'periodSeconds'.
     *     @type int $timeout_seconds
     *           Number of seconds after which the probe times out. Defaults to 1 second.
     *           Minimum value is 1. Must be greater or equal to period_seconds.
     *           Maps to Kubernetes probe argument 'timeoutSeconds'.
     *     @type int $failure_threshold
     *           Number of consecutive failures before the probe is considered failed.
     *           Defaults to 3. Minimum value is 1.
     *           Maps to Kubernetes probe argument 'failureThreshold'.
     *     @type int $success_threshold
     *           Number of consecutive successes before the probe is considered successful.
     *           Defaults to 1. Minimum value is 1.
     *           Maps to Kubernetes probe argument 'successThreshold'.
     *     @type int $initial_delay_seconds
     *           Number of seconds to wait before starting the probe. Defaults to 0.
     *           Minimum value is 0.
     *           Maps to Kubernetes probe argument 'initialDelaySeconds'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Model::initOnce();
        parent::__construct($data);
    }

    /**
     * ExecAction probes the health of a container by executing a command.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Probe.ExecAction exec = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\Probe\ExecAction|null
     */
    public function getExec()
    {
        return $this->readOneof(1);
    }

    public function hasExec()
    {
        return $this->hasOneof(1);
    }

    /**
     * ExecAction probes the health of a container by executing a command.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Probe.ExecAction exec = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\Probe\ExecAction $var
     * @return $this
     */
    public function setExec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Probe\ExecAction::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * HttpGetAction probes the health of a container by sending an HTTP GET
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Probe.HttpGetAction http_get = 4;</code>
     * @return \Google\Cloud\AIPlatform\V1\Probe\HttpGetAction|null
     */
    public function getHttpGet()
    {
        return $this->readOneof(4);
    }

    public function hasHttpGet()
    {
        return $this->hasOneof(4);
    }

    /**
     * HttpGetAction probes the health of a container by sending an HTTP GET
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Probe.HttpGetAction http_get = 4;</code>
     * @param \Google\Cloud\AIPlatform\V1\Probe\HttpGetAction $var
     * @return $this
     */
    public function setHttpGet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Probe\HttpGetAction::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * GrpcAction probes the health of a container by sending a gRPC request.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Probe.GrpcAction grpc = 5;</code>
     * @return \Google\Cloud\AIPlatform\V1\Probe\GrpcAction|null
     */
    public function getGrpc()
    {
        return $this->readOneof(5);
    }

    public function hasGrpc()
    {
        return $this->hasOneof(5);
    }

    /**
     * GrpcAction probes the health of a container by sending a gRPC request.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Probe.GrpcAction grpc = 5;</code>
     * @param \Google\Cloud\AIPlatform\V1\Probe\GrpcAction $var
     * @return $this
     */
    public function setGrpc($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Probe\GrpcAction::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * TcpSocketAction probes the health of a container by opening a TCP socket
     * connection.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Probe.TcpSocketAction tcp_socket = 6;</code>
     * @return \Google\Cloud\AIPlatform\V1\Probe\TcpSocketAction|null
     */
    public function getTcpSocket()
    {
        return $this->readOneof(6);
    }

    public function hasTcpSocket()
    {
        return $this->hasOneof(6);
    }

    /**
     * TcpSocketAction probes the health of a container by opening a TCP socket
     * connection.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Probe.TcpSocketAction tcp_socket = 6;</code>
     * @param \Google\Cloud\AIPlatform\V1\Probe\TcpSocketAction $var
     * @return $this
     */
    public function setTcpSocket($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Probe\TcpSocketAction::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * How often (in seconds) to perform the probe. Default to 10 seconds.
     * Minimum value is 1. Must be less than timeout_seconds.
     * Maps to Kubernetes probe argument 'periodSeconds'.
     *
     * Generated from protobuf field <code>int32 period_seconds = 2;</code>
     * @return int
     */
    public function getPeriodSeconds()
    {
        return $this->period_seconds;
    }

    /**
     * How often (in seconds) to perform the probe. Default to 10 seconds.
     * Minimum value is 1. Must be less than timeout_seconds.
     * Maps to Kubernetes probe argument 'periodSeconds'.
     *
     * Generated from protobuf field <code>int32 period_seconds = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPeriodSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->period_seconds = $var;

        return $this;
    }

    /**
     * Number of seconds after which the probe times out. Defaults to 1 second.
     * Minimum value is 1. Must be greater or equal to period_seconds.
     * Maps to Kubernetes probe argument 'timeoutSeconds'.
     *
     * Generated from protobuf field <code>int32 timeout_seconds = 3;</code>
     * @return int
     */
    public function getTimeoutSeconds()
    {
        return $this->timeout_seconds;
    }

    /**
     * Number of seconds after which the probe times out. Defaults to 1 second.
     * Minimum value is 1. Must be greater or equal to period_seconds.
     * Maps to Kubernetes probe argument 'timeoutSeconds'.
     *
     * Generated from protobuf field <code>int32 timeout_seconds = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeoutSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->timeout_seconds = $var;

        return $this;
    }

    /**
     * Number of consecutive failures before the probe is considered failed.
     * Defaults to 3. Minimum value is 1.
     * Maps to Kubernetes probe argument 'failureThreshold'.
     *
     * Generated from protobuf field <code>int32 failure_threshold = 7;</code>
     * @return int
     */
    public function getFailureThreshold()
    {
        return $this->failure_threshold;
    }

    /**
     * Number of consecutive failures before the probe is considered failed.
     * Defaults to 3. Minimum value is 1.
     * Maps to Kubernetes probe argument 'failureThreshold'.
     *
     * Generated from protobuf field <code>int32 failure_threshold = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFailureThreshold($var)
    {
        GPBUtil::checkInt32($var);
        $this->failure_threshold = $var;

        return $this;
    }

    /**
     * Number of consecutive successes before the probe is considered successful.
     * Defaults to 1. Minimum value is 1.
     * Maps to Kubernetes probe argument 'successThreshold'.
     *
     * Generated from protobuf field <code>int32 success_threshold = 8;</code>
     * @return int
     */
    public function getSuccessThreshold()
    {
        return $this->success_threshold;
    }

    /**
     * Number of consecutive successes before the probe is considered successful.
     * Defaults to 1. Minimum value is 1.
     * Maps to Kubernetes probe argument 'successThreshold'.
     *
     * Generated from protobuf field <code>int32 success_threshold = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setSuccessThreshold($var)
    {
        GPBUtil::checkInt32($var);
        $this->success_threshold = $var;

        return $this;
    }

    /**
     * Number of seconds to wait before starting the probe. Defaults to 0.
     * Minimum value is 0.
     * Maps to Kubernetes probe argument 'initialDelaySeconds'.
     *
     * Generated from protobuf field <code>int32 initial_delay_seconds = 9;</code>
     * @return int
     */
    public function getInitialDelaySeconds()
    {
        return $this->initial_delay_seconds;
    }

    /**
     * Number of seconds to wait before starting the probe. Defaults to 0.
     * Minimum value is 0.
     * Maps to Kubernetes probe argument 'initialDelaySeconds'.
     *
     * Generated from protobuf field <code>int32 initial_delay_seconds = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setInitialDelaySeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->initial_delay_seconds = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getProbeType()
    {
        return $this->whichOneof("probe_type");
    }

}

