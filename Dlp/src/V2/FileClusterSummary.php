<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The file cluster summary.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.FileClusterSummary</code>
 */
class FileClusterSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * The file cluster type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FileClusterType file_cluster_type = 1;</code>
     */
    protected $file_cluster_type = null;
    /**
     * InfoTypes detected in this cluster.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileStoreInfoTypeSummary file_store_info_type_summaries = 2;</code>
     */
    private $file_store_info_type_summaries;
    /**
     * The sensitivity score of this cluster. The score will be SENSITIVITY_LOW
     * if nothing has been scanned.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 3;</code>
     */
    protected $sensitivity_score = null;
    /**
     * The data risk level of this cluster. RISK_LOW if nothing has been
     * scanned.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataRiskLevel data_risk_level = 4;</code>
     */
    protected $data_risk_level = null;
    /**
     * A list of errors detected while scanning this cluster. The list is
     * truncated to 10 per cluster.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Error errors = 6;</code>
     */
    private $errors;
    /**
     * A sample of file types scanned in this cluster. Empty if no files were
     * scanned. File extensions can be derived from the file name or the file
     * content.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileExtensionInfo file_extensions_scanned = 7;</code>
     */
    private $file_extensions_scanned;
    /**
     * A sample of file types seen in this cluster. Empty if no files were seen.
     * File extensions can be derived from the file name or the file content.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileExtensionInfo file_extensions_seen = 8;</code>
     */
    private $file_extensions_seen;
    /**
     * True if no files exist in this cluster. If the bucket had more files than
     * could be listed, this will be false even if no files for this cluster
     * were seen and file_extensions_seen is empty.
     *
     * Generated from protobuf field <code>bool no_files_exist = 9;</code>
     */
    protected $no_files_exist = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\FileClusterType $file_cluster_type
     *           The file cluster type.
     *     @type array<\Google\Cloud\Dlp\V2\FileStoreInfoTypeSummary>|\Google\Protobuf\Internal\RepeatedField $file_store_info_type_summaries
     *           InfoTypes detected in this cluster.
     *     @type \Google\Cloud\Dlp\V2\SensitivityScore $sensitivity_score
     *           The sensitivity score of this cluster. The score will be SENSITIVITY_LOW
     *           if nothing has been scanned.
     *     @type \Google\Cloud\Dlp\V2\DataRiskLevel $data_risk_level
     *           The data risk level of this cluster. RISK_LOW if nothing has been
     *           scanned.
     *     @type array<\Google\Cloud\Dlp\V2\Error>|\Google\Protobuf\Internal\RepeatedField $errors
     *           A list of errors detected while scanning this cluster. The list is
     *           truncated to 10 per cluster.
     *     @type array<\Google\Cloud\Dlp\V2\FileExtensionInfo>|\Google\Protobuf\Internal\RepeatedField $file_extensions_scanned
     *           A sample of file types scanned in this cluster. Empty if no files were
     *           scanned. File extensions can be derived from the file name or the file
     *           content.
     *     @type array<\Google\Cloud\Dlp\V2\FileExtensionInfo>|\Google\Protobuf\Internal\RepeatedField $file_extensions_seen
     *           A sample of file types seen in this cluster. Empty if no files were seen.
     *           File extensions can be derived from the file name or the file content.
     *     @type bool $no_files_exist
     *           True if no files exist in this cluster. If the bucket had more files than
     *           could be listed, this will be false even if no files for this cluster
     *           were seen and file_extensions_seen is empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The file cluster type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FileClusterType file_cluster_type = 1;</code>
     * @return \Google\Cloud\Dlp\V2\FileClusterType|null
     */
    public function getFileClusterType()
    {
        return $this->file_cluster_type;
    }

    public function hasFileClusterType()
    {
        return isset($this->file_cluster_type);
    }

    public function clearFileClusterType()
    {
        unset($this->file_cluster_type);
    }

    /**
     * The file cluster type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FileClusterType file_cluster_type = 1;</code>
     * @param \Google\Cloud\Dlp\V2\FileClusterType $var
     * @return $this
     */
    public function setFileClusterType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\FileClusterType::class);
        $this->file_cluster_type = $var;

        return $this;
    }

    /**
     * InfoTypes detected in this cluster.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileStoreInfoTypeSummary file_store_info_type_summaries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileStoreInfoTypeSummaries()
    {
        return $this->file_store_info_type_summaries;
    }

    /**
     * InfoTypes detected in this cluster.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileStoreInfoTypeSummary file_store_info_type_summaries = 2;</code>
     * @param array<\Google\Cloud\Dlp\V2\FileStoreInfoTypeSummary>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileStoreInfoTypeSummaries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\FileStoreInfoTypeSummary::class);
        $this->file_store_info_type_summaries = $arr;

        return $this;
    }

    /**
     * The sensitivity score of this cluster. The score will be SENSITIVITY_LOW
     * if nothing has been scanned.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 3;</code>
     * @return \Google\Cloud\Dlp\V2\SensitivityScore|null
     */
    public function getSensitivityScore()
    {
        return $this->sensitivity_score;
    }

    public function hasSensitivityScore()
    {
        return isset($this->sensitivity_score);
    }

    public function clearSensitivityScore()
    {
        unset($this->sensitivity_score);
    }

    /**
     * The sensitivity score of this cluster. The score will be SENSITIVITY_LOW
     * if nothing has been scanned.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 3;</code>
     * @param \Google\Cloud\Dlp\V2\SensitivityScore $var
     * @return $this
     */
    public function setSensitivityScore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\SensitivityScore::class);
        $this->sensitivity_score = $var;

        return $this;
    }

    /**
     * The data risk level of this cluster. RISK_LOW if nothing has been
     * scanned.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataRiskLevel data_risk_level = 4;</code>
     * @return \Google\Cloud\Dlp\V2\DataRiskLevel|null
     */
    public function getDataRiskLevel()
    {
        return $this->data_risk_level;
    }

    public function hasDataRiskLevel()
    {
        return isset($this->data_risk_level);
    }

    public function clearDataRiskLevel()
    {
        unset($this->data_risk_level);
    }

    /**
     * The data risk level of this cluster. RISK_LOW if nothing has been
     * scanned.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataRiskLevel data_risk_level = 4;</code>
     * @param \Google\Cloud\Dlp\V2\DataRiskLevel $var
     * @return $this
     */
    public function setDataRiskLevel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DataRiskLevel::class);
        $this->data_risk_level = $var;

        return $this;
    }

    /**
     * A list of errors detected while scanning this cluster. The list is
     * truncated to 10 per cluster.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Error errors = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * A list of errors detected while scanning this cluster. The list is
     * truncated to 10 per cluster.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Error errors = 6;</code>
     * @param array<\Google\Cloud\Dlp\V2\Error>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\Error::class);
        $this->errors = $arr;

        return $this;
    }

    /**
     * A sample of file types scanned in this cluster. Empty if no files were
     * scanned. File extensions can be derived from the file name or the file
     * content.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileExtensionInfo file_extensions_scanned = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileExtensionsScanned()
    {
        return $this->file_extensions_scanned;
    }

    /**
     * A sample of file types scanned in this cluster. Empty if no files were
     * scanned. File extensions can be derived from the file name or the file
     * content.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileExtensionInfo file_extensions_scanned = 7;</code>
     * @param array<\Google\Cloud\Dlp\V2\FileExtensionInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileExtensionsScanned($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\FileExtensionInfo::class);
        $this->file_extensions_scanned = $arr;

        return $this;
    }

    /**
     * A sample of file types seen in this cluster. Empty if no files were seen.
     * File extensions can be derived from the file name or the file content.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileExtensionInfo file_extensions_seen = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileExtensionsSeen()
    {
        return $this->file_extensions_seen;
    }

    /**
     * A sample of file types seen in this cluster. Empty if no files were seen.
     * File extensions can be derived from the file name or the file content.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileExtensionInfo file_extensions_seen = 8;</code>
     * @param array<\Google\Cloud\Dlp\V2\FileExtensionInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileExtensionsSeen($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\FileExtensionInfo::class);
        $this->file_extensions_seen = $arr;

        return $this;
    }

    /**
     * True if no files exist in this cluster. If the bucket had more files than
     * could be listed, this will be false even if no files for this cluster
     * were seen and file_extensions_seen is empty.
     *
     * Generated from protobuf field <code>bool no_files_exist = 9;</code>
     * @return bool
     */
    public function getNoFilesExist()
    {
        return $this->no_files_exist;
    }

    /**
     * True if no files exist in this cluster. If the bucket had more files than
     * could be listed, this will be false even if no files for this cluster
     * were seen and file_extensions_seen is empty.
     *
     * Generated from protobuf field <code>bool no_files_exist = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoFilesExist($var)
    {
        GPBUtil::checkBool($var);
        $this->no_files_exist = $var;

        return $this;
    }

}

