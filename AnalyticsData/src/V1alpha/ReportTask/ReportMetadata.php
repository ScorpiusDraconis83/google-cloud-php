<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto

namespace Google\Analytics\Data\V1alpha\ReportTask;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The report metadata for a specific report task.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.ReportTask.ReportMetadata</code>
 */
class ReportMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The current state for this report task.
     *
     * Generated from protobuf field <code>optional .google.analytics.data.v1alpha.ReportTask.ReportMetadata.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = null;
    /**
     * Output only. The time when `CreateReportTask` was called and the report
     * began the `CREATING` state.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp begin_creating_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $begin_creating_time = null;
    /**
     * Output only. The total quota tokens charged during creation of the
     * report. Because this token count is based on activity from the `CREATING`
     * state, this tokens charge will be fixed once a report task enters the
     * `ACTIVE` or `FAILED` state.
     *
     * Generated from protobuf field <code>int32 creation_quota_tokens_charged = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $creation_quota_tokens_charged = 0;
    /**
     * Output only. The total number of rows in the report result. This field
     * will be populated when the state is active. You can utilize
     * `task_row_count` for pagination within the confines of their existing
     * report.
     *
     * Generated from protobuf field <code>optional int32 task_row_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $task_row_count = null;
    /**
     * Output only. Error message is populated if a report task fails during
     * creation.
     *
     * Generated from protobuf field <code>optional string error_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error_message = null;
    /**
     * Output only. The total number of rows in Google Analytics storage. If you
     * want to query additional data rows beyond the current report, they can
     * initiate a new report task based on the `total_row_count`.
     * The `task_row_count` represents the number of rows specifically
     * pertaining to the current report, whereas `total_row_count` encompasses
     * the total count of rows across all data retrieved from Google
     * Analytics storage.
     * For example, suppose the current report's `task_row_count` is 20,
     * displaying the data from the first 20 rows. Simultaneously, the
     * `total_row_count` is 30, indicating the presence of data for all 30 rows.
     * The `task_row_count` can be utilizated to paginate through the initial 20
     * rows. To expand the report and include data from all 30 rows, a new
     * report task can be created using the total_row_count to access the full
     * set of 30 rows' worth of data.
     *
     * Generated from protobuf field <code>optional int32 total_row_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $total_row_count = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Output only. The current state for this report task.
     *     @type \Google\Protobuf\Timestamp $begin_creating_time
     *           Output only. The time when `CreateReportTask` was called and the report
     *           began the `CREATING` state.
     *     @type int $creation_quota_tokens_charged
     *           Output only. The total quota tokens charged during creation of the
     *           report. Because this token count is based on activity from the `CREATING`
     *           state, this tokens charge will be fixed once a report task enters the
     *           `ACTIVE` or `FAILED` state.
     *     @type int $task_row_count
     *           Output only. The total number of rows in the report result. This field
     *           will be populated when the state is active. You can utilize
     *           `task_row_count` for pagination within the confines of their existing
     *           report.
     *     @type string $error_message
     *           Output only. Error message is populated if a report task fails during
     *           creation.
     *     @type int $total_row_count
     *           Output only. The total number of rows in Google Analytics storage. If you
     *           want to query additional data rows beyond the current report, they can
     *           initiate a new report task based on the `total_row_count`.
     *           The `task_row_count` represents the number of rows specifically
     *           pertaining to the current report, whereas `total_row_count` encompasses
     *           the total count of rows across all data retrieved from Google
     *           Analytics storage.
     *           For example, suppose the current report's `task_row_count` is 20,
     *           displaying the data from the first 20 rows. Simultaneously, the
     *           `total_row_count` is 30, indicating the presence of data for all 30 rows.
     *           The `task_row_count` can be utilizated to paginate through the initial 20
     *           rows. To expand the report and include data from all 30 rows, a new
     *           report task can be created using the total_row_count to access the full
     *           set of 30 rows' worth of data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The current state for this report task.
     *
     * Generated from protobuf field <code>optional .google.analytics.data.v1alpha.ReportTask.ReportMetadata.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : 0;
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * Output only. The current state for this report task.
     *
     * Generated from protobuf field <code>optional .google.analytics.data.v1alpha.ReportTask.ReportMetadata.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Data\V1alpha\ReportTask\ReportMetadata\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The time when `CreateReportTask` was called and the report
     * began the `CREATING` state.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp begin_creating_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getBeginCreatingTime()
    {
        return $this->begin_creating_time;
    }

    public function hasBeginCreatingTime()
    {
        return isset($this->begin_creating_time);
    }

    public function clearBeginCreatingTime()
    {
        unset($this->begin_creating_time);
    }

    /**
     * Output only. The time when `CreateReportTask` was called and the report
     * began the `CREATING` state.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp begin_creating_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setBeginCreatingTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->begin_creating_time = $var;

        return $this;
    }

    /**
     * Output only. The total quota tokens charged during creation of the
     * report. Because this token count is based on activity from the `CREATING`
     * state, this tokens charge will be fixed once a report task enters the
     * `ACTIVE` or `FAILED` state.
     *
     * Generated from protobuf field <code>int32 creation_quota_tokens_charged = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getCreationQuotaTokensCharged()
    {
        return $this->creation_quota_tokens_charged;
    }

    /**
     * Output only. The total quota tokens charged during creation of the
     * report. Because this token count is based on activity from the `CREATING`
     * state, this tokens charge will be fixed once a report task enters the
     * `ACTIVE` or `FAILED` state.
     *
     * Generated from protobuf field <code>int32 creation_quota_tokens_charged = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setCreationQuotaTokensCharged($var)
    {
        GPBUtil::checkInt32($var);
        $this->creation_quota_tokens_charged = $var;

        return $this;
    }

    /**
     * Output only. The total number of rows in the report result. This field
     * will be populated when the state is active. You can utilize
     * `task_row_count` for pagination within the confines of their existing
     * report.
     *
     * Generated from protobuf field <code>optional int32 task_row_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getTaskRowCount()
    {
        return isset($this->task_row_count) ? $this->task_row_count : 0;
    }

    public function hasTaskRowCount()
    {
        return isset($this->task_row_count);
    }

    public function clearTaskRowCount()
    {
        unset($this->task_row_count);
    }

    /**
     * Output only. The total number of rows in the report result. This field
     * will be populated when the state is active. You can utilize
     * `task_row_count` for pagination within the confines of their existing
     * report.
     *
     * Generated from protobuf field <code>optional int32 task_row_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setTaskRowCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->task_row_count = $var;

        return $this;
    }

    /**
     * Output only. Error message is populated if a report task fails during
     * creation.
     *
     * Generated from protobuf field <code>optional string error_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return isset($this->error_message) ? $this->error_message : '';
    }

    public function hasErrorMessage()
    {
        return isset($this->error_message);
    }

    public function clearErrorMessage()
    {
        unset($this->error_message);
    }

    /**
     * Output only. Error message is populated if a report task fails during
     * creation.
     *
     * Generated from protobuf field <code>optional string error_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

    /**
     * Output only. The total number of rows in Google Analytics storage. If you
     * want to query additional data rows beyond the current report, they can
     * initiate a new report task based on the `total_row_count`.
     * The `task_row_count` represents the number of rows specifically
     * pertaining to the current report, whereas `total_row_count` encompasses
     * the total count of rows across all data retrieved from Google
     * Analytics storage.
     * For example, suppose the current report's `task_row_count` is 20,
     * displaying the data from the first 20 rows. Simultaneously, the
     * `total_row_count` is 30, indicating the presence of data for all 30 rows.
     * The `task_row_count` can be utilizated to paginate through the initial 20
     * rows. To expand the report and include data from all 30 rows, a new
     * report task can be created using the total_row_count to access the full
     * set of 30 rows' worth of data.
     *
     * Generated from protobuf field <code>optional int32 total_row_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getTotalRowCount()
    {
        return isset($this->total_row_count) ? $this->total_row_count : 0;
    }

    public function hasTotalRowCount()
    {
        return isset($this->total_row_count);
    }

    public function clearTotalRowCount()
    {
        unset($this->total_row_count);
    }

    /**
     * Output only. The total number of rows in Google Analytics storage. If you
     * want to query additional data rows beyond the current report, they can
     * initiate a new report task based on the `total_row_count`.
     * The `task_row_count` represents the number of rows specifically
     * pertaining to the current report, whereas `total_row_count` encompasses
     * the total count of rows across all data retrieved from Google
     * Analytics storage.
     * For example, suppose the current report's `task_row_count` is 20,
     * displaying the data from the first 20 rows. Simultaneously, the
     * `total_row_count` is 30, indicating the presence of data for all 30 rows.
     * The `task_row_count` can be utilizated to paginate through the initial 20
     * rows. To expand the report and include data from all 30 rows, a new
     * report task can be created using the total_row_count to access the full
     * set of 30 rows' worth of data.
     *
     * Generated from protobuf field <code>optional int32 total_row_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setTotalRowCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_row_count = $var;

        return $this;
    }

}


