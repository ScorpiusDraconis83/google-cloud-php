<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration to control jobs where the content being inspected is outside
 * of Google Cloud Platform.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.HybridOptions</code>
 */
class HybridOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * A short description of where the data is coming from. Will be stored once
     * in the job. 256 max length.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     */
    protected $description = '';
    /**
     * These are labels that each inspection request must include within their
     * 'finding_labels' map. Request may contain others, but any missing one of
     * these will be rejected.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     * No more than 10 keys can be required.
     *
     * Generated from protobuf field <code>repeated string required_finding_label_keys = 2;</code>
     */
    private $required_finding_label_keys;
    /**
     * To organize findings, these labels will be added to each finding.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     * Label values must be between 0 and 63 characters long and must conform
     * to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     * No more than 10 labels can be associated with a given finding.
     * Examples:
     * * `"environment" : "production"`
     * * `"pipeline" : "etl"`
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     */
    private $labels;
    /**
     * If the container is a table, additional information to make findings
     * meaningful such as the columns that are primary keys.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TableOptions table_options = 4;</code>
     */
    protected $table_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *           A short description of where the data is coming from. Will be stored once
     *           in the job. 256 max length.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $required_finding_label_keys
     *           These are labels that each inspection request must include within their
     *           'finding_labels' map. Request may contain others, but any missing one of
     *           these will be rejected.
     *           Label keys must be between 1 and 63 characters long and must conform
     *           to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     *           No more than 10 keys can be required.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           To organize findings, these labels will be added to each finding.
     *           Label keys must be between 1 and 63 characters long and must conform
     *           to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     *           Label values must be between 0 and 63 characters long and must conform
     *           to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     *           No more than 10 labels can be associated with a given finding.
     *           Examples:
     *           * `"environment" : "production"`
     *           * `"pipeline" : "etl"`
     *     @type \Google\Cloud\Dlp\V2\TableOptions $table_options
     *           If the container is a table, additional information to make findings
     *           meaningful such as the columns that are primary keys.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * A short description of where the data is coming from. Will be stored once
     * in the job. 256 max length.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A short description of where the data is coming from. Will be stored once
     * in the job. 256 max length.
     *
     * Generated from protobuf field <code>string description = 1;</code>
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
     * These are labels that each inspection request must include within their
     * 'finding_labels' map. Request may contain others, but any missing one of
     * these will be rejected.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     * No more than 10 keys can be required.
     *
     * Generated from protobuf field <code>repeated string required_finding_label_keys = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequiredFindingLabelKeys()
    {
        return $this->required_finding_label_keys;
    }

    /**
     * These are labels that each inspection request must include within their
     * 'finding_labels' map. Request may contain others, but any missing one of
     * these will be rejected.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     * No more than 10 keys can be required.
     *
     * Generated from protobuf field <code>repeated string required_finding_label_keys = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequiredFindingLabelKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->required_finding_label_keys = $arr;

        return $this;
    }

    /**
     * To organize findings, these labels will be added to each finding.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     * Label values must be between 0 and 63 characters long and must conform
     * to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     * No more than 10 labels can be associated with a given finding.
     * Examples:
     * * `"environment" : "production"`
     * * `"pipeline" : "etl"`
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * To organize findings, these labels will be added to each finding.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     * Label values must be between 0 and 63 characters long and must conform
     * to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     * No more than 10 labels can be associated with a given finding.
     * Examples:
     * * `"environment" : "production"`
     * * `"pipeline" : "etl"`
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
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
     * If the container is a table, additional information to make findings
     * meaningful such as the columns that are primary keys.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TableOptions table_options = 4;</code>
     * @return \Google\Cloud\Dlp\V2\TableOptions|null
     */
    public function getTableOptions()
    {
        return $this->table_options;
    }

    public function hasTableOptions()
    {
        return isset($this->table_options);
    }

    public function clearTableOptions()
    {
        unset($this->table_options);
    }

    /**
     * If the container is a table, additional information to make findings
     * meaningful such as the columns that are primary keys.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TableOptions table_options = 4;</code>
     * @param \Google\Cloud\Dlp\V2\TableOptions $var
     * @return $this
     */
    public function setTableOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\TableOptions::class);
        $this->table_options = $var;

        return $this;
    }

}

