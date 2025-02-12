<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/session_templates.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A representation of a session template.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.SessionTemplate</code>
 */
class SessionTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the session template.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Optional. Brief description of the template.
     *
     * Generated from protobuf field <code>string description = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. The time when the template was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The email address of the user who created the template.
     *
     * Generated from protobuf field <code>string creator = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $creator = '';
    /**
     * Optional. Labels to associate with sessions created using this template.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** can be empty, but, if present, must contain 1 to 63
     * characters and conform to [RFC
     * 1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     * associated with a session.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Runtime configuration for session execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.RuntimeConfig runtime_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $runtime_config = null;
    /**
     * Optional. Environment configuration for session execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.EnvironmentConfig environment_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $environment_config = null;
    /**
     * Output only. The time the template was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. A session template UUID (Unique Universal Identifier). The
     * service generates this value when it creates the session template.
     *
     * Generated from protobuf field <code>string uuid = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uuid = '';
    protected $session_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the session template.
     *     @type string $description
     *           Optional. Brief description of the template.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the template was created.
     *     @type \Google\Cloud\Dataproc\V1\JupyterConfig $jupyter_session
     *           Optional. Jupyter session config.
     *     @type \Google\Cloud\Dataproc\V1\SparkConnectConfig $spark_connect_session
     *           Optional. Spark Connect session config.
     *     @type string $creator
     *           Output only. The email address of the user who created the template.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels to associate with sessions created using this template.
     *           Label **keys** must contain 1 to 63 characters, and must conform to
     *           [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     *           Label **values** can be empty, but, if present, must contain 1 to 63
     *           characters and conform to [RFC
     *           1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     *           associated with a session.
     *     @type \Google\Cloud\Dataproc\V1\RuntimeConfig $runtime_config
     *           Optional. Runtime configuration for session execution.
     *     @type \Google\Cloud\Dataproc\V1\EnvironmentConfig $environment_config
     *           Optional. Environment configuration for session execution.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time the template was last updated.
     *     @type string $uuid
     *           Output only. A session template UUID (Unique Universal Identifier). The
     *           service generates this value when it creates the session template.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\SessionTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the session template.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the session template.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. Brief description of the template.
     *
     * Generated from protobuf field <code>string description = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Brief description of the template.
     *
     * Generated from protobuf field <code>string description = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. The time when the template was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the template was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Optional. Jupyter session config.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JupyterConfig jupyter_session = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\JupyterConfig|null
     */
    public function getJupyterSession()
    {
        return $this->readOneof(3);
    }

    public function hasJupyterSession()
    {
        return $this->hasOneof(3);
    }

    /**
     * Optional. Jupyter session config.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JupyterConfig jupyter_session = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\JupyterConfig $var
     * @return $this
     */
    public function setJupyterSession($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\JupyterConfig::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional. Spark Connect session config.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkConnectConfig spark_connect_session = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\SparkConnectConfig|null
     */
    public function getSparkConnectSession()
    {
        return $this->readOneof(11);
    }

    public function hasSparkConnectSession()
    {
        return $this->hasOneof(11);
    }

    /**
     * Optional. Spark Connect session config.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkConnectConfig spark_connect_session = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\SparkConnectConfig $var
     * @return $this
     */
    public function setSparkConnectSession($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\SparkConnectConfig::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Output only. The email address of the user who created the template.
     *
     * Generated from protobuf field <code>string creator = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Output only. The email address of the user who created the template.
     *
     * Generated from protobuf field <code>string creator = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCreator($var)
    {
        GPBUtil::checkString($var, True);
        $this->creator = $var;

        return $this;
    }

    /**
     * Optional. Labels to associate with sessions created using this template.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** can be empty, but, if present, must contain 1 to 63
     * characters and conform to [RFC
     * 1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     * associated with a session.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels to associate with sessions created using this template.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** can be empty, but, if present, must contain 1 to 63
     * characters and conform to [RFC
     * 1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     * associated with a session.
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
     * Optional. Runtime configuration for session execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.RuntimeConfig runtime_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\RuntimeConfig|null
     */
    public function getRuntimeConfig()
    {
        return $this->runtime_config;
    }

    public function hasRuntimeConfig()
    {
        return isset($this->runtime_config);
    }

    public function clearRuntimeConfig()
    {
        unset($this->runtime_config);
    }

    /**
     * Optional. Runtime configuration for session execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.RuntimeConfig runtime_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\RuntimeConfig $var
     * @return $this
     */
    public function setRuntimeConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\RuntimeConfig::class);
        $this->runtime_config = $var;

        return $this;
    }

    /**
     * Optional. Environment configuration for session execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.EnvironmentConfig environment_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\EnvironmentConfig|null
     */
    public function getEnvironmentConfig()
    {
        return $this->environment_config;
    }

    public function hasEnvironmentConfig()
    {
        return isset($this->environment_config);
    }

    public function clearEnvironmentConfig()
    {
        unset($this->environment_config);
    }

    /**
     * Optional. Environment configuration for session execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.EnvironmentConfig environment_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\EnvironmentConfig $var
     * @return $this
     */
    public function setEnvironmentConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\EnvironmentConfig::class);
        $this->environment_config = $var;

        return $this;
    }

    /**
     * Output only. The time the template was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the template was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. A session template UUID (Unique Universal Identifier). The
     * service generates this value when it creates the session template.
     *
     * Generated from protobuf field <code>string uuid = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Output only. A session template UUID (Unique Universal Identifier). The
     * service generates this value when it creates the session template.
     *
     * Generated from protobuf field <code>string uuid = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uuid = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSessionConfig()
    {
        return $this->whichOneof("session_config");
    }

}

