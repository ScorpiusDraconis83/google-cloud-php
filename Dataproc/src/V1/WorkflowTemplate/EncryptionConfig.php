<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1\WorkflowTemplate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encryption settings for encrypting workflow template job arguments.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.WorkflowTemplate.EncryptionConfig</code>
 */
class EncryptionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The Cloud KMS key name to use for encrypting
     * workflow template job arguments.
     * When this this key is provided, the following workflow template
     * [job arguments]
     * (https://cloud.google.com/dataproc/docs/concepts/workflows/use-workflows#adding_jobs_to_a_template),
     * if present, are
     * [CMEK
     * encrypted](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/customer-managed-encryption#use_cmek_with_workflow_template_data):
     * * [FlinkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/FlinkJob)
     * * [HadoopJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/HadoopJob)
     * * [SparkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkJob)
     * * [SparkRJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkRJob)
     * * [PySparkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/PySparkJob)
     * * [SparkSqlJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkSqlJob)
     *   scriptVariables and queryList.queries
     * * [HiveJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/HiveJob)
     *   scriptVariables and queryList.queries
     * * [PigJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PigJob)
     *   scriptVariables and queryList.queries
     * * [PrestoJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PrestoJob)
     *   scriptVariables and queryList.queries
     *
     * Generated from protobuf field <code>string kms_key = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $kms_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kms_key
     *           Optional. The Cloud KMS key name to use for encrypting
     *           workflow template job arguments.
     *           When this this key is provided, the following workflow template
     *           [job arguments]
     *           (https://cloud.google.com/dataproc/docs/concepts/workflows/use-workflows#adding_jobs_to_a_template),
     *           if present, are
     *           [CMEK
     *           encrypted](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/customer-managed-encryption#use_cmek_with_workflow_template_data):
     *           * [FlinkJob
     *           args](https://cloud.google.com/dataproc/docs/reference/rest/v1/FlinkJob)
     *           * [HadoopJob
     *           args](https://cloud.google.com/dataproc/docs/reference/rest/v1/HadoopJob)
     *           * [SparkJob
     *           args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkJob)
     *           * [SparkRJob
     *           args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkRJob)
     *           * [PySparkJob
     *           args](https://cloud.google.com/dataproc/docs/reference/rest/v1/PySparkJob)
     *           * [SparkSqlJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkSqlJob)
     *             scriptVariables and queryList.queries
     *           * [HiveJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/HiveJob)
     *             scriptVariables and queryList.queries
     *           * [PigJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PigJob)
     *             scriptVariables and queryList.queries
     *           * [PrestoJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PrestoJob)
     *             scriptVariables and queryList.queries
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The Cloud KMS key name to use for encrypting
     * workflow template job arguments.
     * When this this key is provided, the following workflow template
     * [job arguments]
     * (https://cloud.google.com/dataproc/docs/concepts/workflows/use-workflows#adding_jobs_to_a_template),
     * if present, are
     * [CMEK
     * encrypted](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/customer-managed-encryption#use_cmek_with_workflow_template_data):
     * * [FlinkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/FlinkJob)
     * * [HadoopJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/HadoopJob)
     * * [SparkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkJob)
     * * [SparkRJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkRJob)
     * * [PySparkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/PySparkJob)
     * * [SparkSqlJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkSqlJob)
     *   scriptVariables and queryList.queries
     * * [HiveJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/HiveJob)
     *   scriptVariables and queryList.queries
     * * [PigJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PigJob)
     *   scriptVariables and queryList.queries
     * * [PrestoJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PrestoJob)
     *   scriptVariables and queryList.queries
     *
     * Generated from protobuf field <code>string kms_key = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getKmsKey()
    {
        return $this->kms_key;
    }

    /**
     * Optional. The Cloud KMS key name to use for encrypting
     * workflow template job arguments.
     * When this this key is provided, the following workflow template
     * [job arguments]
     * (https://cloud.google.com/dataproc/docs/concepts/workflows/use-workflows#adding_jobs_to_a_template),
     * if present, are
     * [CMEK
     * encrypted](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/customer-managed-encryption#use_cmek_with_workflow_template_data):
     * * [FlinkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/FlinkJob)
     * * [HadoopJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/HadoopJob)
     * * [SparkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkJob)
     * * [SparkRJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkRJob)
     * * [PySparkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/PySparkJob)
     * * [SparkSqlJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkSqlJob)
     *   scriptVariables and queryList.queries
     * * [HiveJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/HiveJob)
     *   scriptVariables and queryList.queries
     * * [PigJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PigJob)
     *   scriptVariables and queryList.queries
     * * [PrestoJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PrestoJob)
     *   scriptVariables and queryList.queries
     *
     * Generated from protobuf field <code>string kms_key = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key = $var;

        return $this;
    }

}


