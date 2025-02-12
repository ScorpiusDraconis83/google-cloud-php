<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/table.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TableFieldSchema defines a single field/column within a table schema.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.TableFieldSchema</code>
 */
class TableFieldSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The field name. The name must contain only letters (a-z, A-Z),
     * numbers (0-9), or underscores (_), and must start with a letter or
     * underscore. The maximum length is 128 characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. The field data type.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.TableFieldSchema.Type type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = 0;
    /**
     * Optional. The field mode. The default value is NULLABLE.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.TableFieldSchema.Mode mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $mode = 0;
    /**
     * Optional. Describes the nested schema fields if the type property is set to
     * STRUCT.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.storage.v1.TableFieldSchema fields = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $fields;
    /**
     * Optional. The field description. The maximum length is 1,024 characters.
     *
     * Generated from protobuf field <code>string description = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. Maximum length of values of this field for STRINGS or BYTES.
     * If max_length is not specified, no maximum length constraint is imposed
     * on this field.
     * If type = "STRING", then max_length represents the maximum UTF-8
     * length of strings in this field.
     * If type = "BYTES", then max_length represents the maximum number of
     * bytes in this field.
     * It is invalid to set this field if type is not "STRING" or "BYTES".
     *
     * Generated from protobuf field <code>int64 max_length = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $max_length = 0;
    /**
     * Optional. Precision (maximum number of total digits in base 10) and scale
     * (maximum number of digits in the fractional part in base 10) constraints
     * for values of this field for NUMERIC or BIGNUMERIC.
     * It is invalid to set precision or scale if type is not "NUMERIC" or
     * "BIGNUMERIC".
     * If precision and scale are not specified, no value range constraint is
     * imposed on this field insofar as values are permitted by the type.
     * Values of this NUMERIC or BIGNUMERIC field must be in this range when:
     * * Precision (P) and scale (S) are specified:
     *   [-10^(P-S) + 10^(-S), 10^(P-S) - 10^(-S)]
     * * Precision (P) is specified but not scale (and thus scale is
     *   interpreted to be equal to zero):
     *   [-10^P + 1, 10^P - 1].
     * Acceptable values for precision and scale if both are specified:
     * * If type = "NUMERIC":
     *   1 <= precision - scale <= 29 and 0 <= scale <= 9.
     * * If type = "BIGNUMERIC":
     *   1 <= precision - scale <= 38 and 0 <= scale <= 38.
     * Acceptable values for precision if only precision is specified but not
     * scale (and thus scale is interpreted to be equal to zero):
     * * If type = "NUMERIC": 1 <= precision <= 29.
     * * If type = "BIGNUMERIC": 1 <= precision <= 38.
     * If scale is specified but not precision, then it is invalid.
     *
     * Generated from protobuf field <code>int64 precision = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $precision = 0;
    /**
     * Optional. See documentation for precision.
     *
     * Generated from protobuf field <code>int64 scale = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $scale = 0;
    /**
     * Optional. A SQL expression to specify the [default value]
     * (https://cloud.google.com/bigquery/docs/default-values) for this field.
     *
     * Generated from protobuf field <code>string default_value_expression = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $default_value_expression = '';
    /**
     * Optional. The subtype of the RANGE, if the type of this field is RANGE. If
     * the type is RANGE, this field is required. Possible values for the field
     * element type of a RANGE include:
     * * DATE
     * * DATETIME
     * * TIMESTAMP
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.TableFieldSchema.FieldElementType range_element_type = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $range_element_type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The field name. The name must contain only letters (a-z, A-Z),
     *           numbers (0-9), or underscores (_), and must start with a letter or
     *           underscore. The maximum length is 128 characters.
     *     @type int $type
     *           Required. The field data type.
     *     @type int $mode
     *           Optional. The field mode. The default value is NULLABLE.
     *     @type array<\Google\Cloud\BigQuery\Storage\V1\TableFieldSchema>|\Google\Protobuf\Internal\RepeatedField $fields
     *           Optional. Describes the nested schema fields if the type property is set to
     *           STRUCT.
     *     @type string $description
     *           Optional. The field description. The maximum length is 1,024 characters.
     *     @type int|string $max_length
     *           Optional. Maximum length of values of this field for STRINGS or BYTES.
     *           If max_length is not specified, no maximum length constraint is imposed
     *           on this field.
     *           If type = "STRING", then max_length represents the maximum UTF-8
     *           length of strings in this field.
     *           If type = "BYTES", then max_length represents the maximum number of
     *           bytes in this field.
     *           It is invalid to set this field if type is not "STRING" or "BYTES".
     *     @type int|string $precision
     *           Optional. Precision (maximum number of total digits in base 10) and scale
     *           (maximum number of digits in the fractional part in base 10) constraints
     *           for values of this field for NUMERIC or BIGNUMERIC.
     *           It is invalid to set precision or scale if type is not "NUMERIC" or
     *           "BIGNUMERIC".
     *           If precision and scale are not specified, no value range constraint is
     *           imposed on this field insofar as values are permitted by the type.
     *           Values of this NUMERIC or BIGNUMERIC field must be in this range when:
     *           * Precision (P) and scale (S) are specified:
     *             [-10^(P-S) + 10^(-S), 10^(P-S) - 10^(-S)]
     *           * Precision (P) is specified but not scale (and thus scale is
     *             interpreted to be equal to zero):
     *             [-10^P + 1, 10^P - 1].
     *           Acceptable values for precision and scale if both are specified:
     *           * If type = "NUMERIC":
     *             1 <= precision - scale <= 29 and 0 <= scale <= 9.
     *           * If type = "BIGNUMERIC":
     *             1 <= precision - scale <= 38 and 0 <= scale <= 38.
     *           Acceptable values for precision if only precision is specified but not
     *           scale (and thus scale is interpreted to be equal to zero):
     *           * If type = "NUMERIC": 1 <= precision <= 29.
     *           * If type = "BIGNUMERIC": 1 <= precision <= 38.
     *           If scale is specified but not precision, then it is invalid.
     *     @type int|string $scale
     *           Optional. See documentation for precision.
     *     @type string $default_value_expression
     *           Optional. A SQL expression to specify the [default value]
     *           (https://cloud.google.com/bigquery/docs/default-values) for this field.
     *     @type \Google\Cloud\BigQuery\Storage\V1\TableFieldSchema\FieldElementType $range_element_type
     *           Optional. The subtype of the RANGE, if the type of this field is RANGE. If
     *           the type is RANGE, this field is required. Possible values for the field
     *           element type of a RANGE include:
     *           * DATE
     *           * DATETIME
     *           * TIMESTAMP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The field name. The name must contain only letters (a-z, A-Z),
     * numbers (0-9), or underscores (_), and must start with a letter or
     * underscore. The maximum length is 128 characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The field name. The name must contain only letters (a-z, A-Z),
     * numbers (0-9), or underscores (_), and must start with a letter or
     * underscore. The maximum length is 128 characters.
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
     * Required. The field data type.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.TableFieldSchema.Type type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The field data type.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.TableFieldSchema.Type type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\Storage\V1\TableFieldSchema\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. The field mode. The default value is NULLABLE.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.TableFieldSchema.Mode mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Optional. The field mode. The default value is NULLABLE.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.TableFieldSchema.Mode mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\Storage\V1\TableFieldSchema\Mode::class);
        $this->mode = $var;

        return $this;
    }

    /**
     * Optional. Describes the nested schema fields if the type property is set to
     * STRUCT.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.storage.v1.TableFieldSchema fields = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Optional. Describes the nested schema fields if the type property is set to
     * STRUCT.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.storage.v1.TableFieldSchema fields = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\BigQuery\Storage\V1\TableFieldSchema>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\Storage\V1\TableFieldSchema::class);
        $this->fields = $arr;

        return $this;
    }

    /**
     * Optional. The field description. The maximum length is 1,024 characters.
     *
     * Generated from protobuf field <code>string description = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The field description. The maximum length is 1,024 characters.
     *
     * Generated from protobuf field <code>string description = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Maximum length of values of this field for STRINGS or BYTES.
     * If max_length is not specified, no maximum length constraint is imposed
     * on this field.
     * If type = "STRING", then max_length represents the maximum UTF-8
     * length of strings in this field.
     * If type = "BYTES", then max_length represents the maximum number of
     * bytes in this field.
     * It is invalid to set this field if type is not "STRING" or "BYTES".
     *
     * Generated from protobuf field <code>int64 max_length = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getMaxLength()
    {
        return $this->max_length;
    }

    /**
     * Optional. Maximum length of values of this field for STRINGS or BYTES.
     * If max_length is not specified, no maximum length constraint is imposed
     * on this field.
     * If type = "STRING", then max_length represents the maximum UTF-8
     * length of strings in this field.
     * If type = "BYTES", then max_length represents the maximum number of
     * bytes in this field.
     * It is invalid to set this field if type is not "STRING" or "BYTES".
     *
     * Generated from protobuf field <code>int64 max_length = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxLength($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_length = $var;

        return $this;
    }

    /**
     * Optional. Precision (maximum number of total digits in base 10) and scale
     * (maximum number of digits in the fractional part in base 10) constraints
     * for values of this field for NUMERIC or BIGNUMERIC.
     * It is invalid to set precision or scale if type is not "NUMERIC" or
     * "BIGNUMERIC".
     * If precision and scale are not specified, no value range constraint is
     * imposed on this field insofar as values are permitted by the type.
     * Values of this NUMERIC or BIGNUMERIC field must be in this range when:
     * * Precision (P) and scale (S) are specified:
     *   [-10^(P-S) + 10^(-S), 10^(P-S) - 10^(-S)]
     * * Precision (P) is specified but not scale (and thus scale is
     *   interpreted to be equal to zero):
     *   [-10^P + 1, 10^P - 1].
     * Acceptable values for precision and scale if both are specified:
     * * If type = "NUMERIC":
     *   1 <= precision - scale <= 29 and 0 <= scale <= 9.
     * * If type = "BIGNUMERIC":
     *   1 <= precision - scale <= 38 and 0 <= scale <= 38.
     * Acceptable values for precision if only precision is specified but not
     * scale (and thus scale is interpreted to be equal to zero):
     * * If type = "NUMERIC": 1 <= precision <= 29.
     * * If type = "BIGNUMERIC": 1 <= precision <= 38.
     * If scale is specified but not precision, then it is invalid.
     *
     * Generated from protobuf field <code>int64 precision = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Optional. Precision (maximum number of total digits in base 10) and scale
     * (maximum number of digits in the fractional part in base 10) constraints
     * for values of this field for NUMERIC or BIGNUMERIC.
     * It is invalid to set precision or scale if type is not "NUMERIC" or
     * "BIGNUMERIC".
     * If precision and scale are not specified, no value range constraint is
     * imposed on this field insofar as values are permitted by the type.
     * Values of this NUMERIC or BIGNUMERIC field must be in this range when:
     * * Precision (P) and scale (S) are specified:
     *   [-10^(P-S) + 10^(-S), 10^(P-S) - 10^(-S)]
     * * Precision (P) is specified but not scale (and thus scale is
     *   interpreted to be equal to zero):
     *   [-10^P + 1, 10^P - 1].
     * Acceptable values for precision and scale if both are specified:
     * * If type = "NUMERIC":
     *   1 <= precision - scale <= 29 and 0 <= scale <= 9.
     * * If type = "BIGNUMERIC":
     *   1 <= precision - scale <= 38 and 0 <= scale <= 38.
     * Acceptable values for precision if only precision is specified but not
     * scale (and thus scale is interpreted to be equal to zero):
     * * If type = "NUMERIC": 1 <= precision <= 29.
     * * If type = "BIGNUMERIC": 1 <= precision <= 38.
     * If scale is specified but not precision, then it is invalid.
     *
     * Generated from protobuf field <code>int64 precision = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPrecision($var)
    {
        GPBUtil::checkInt64($var);
        $this->precision = $var;

        return $this;
    }

    /**
     * Optional. See documentation for precision.
     *
     * Generated from protobuf field <code>int64 scale = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Optional. See documentation for precision.
     *
     * Generated from protobuf field <code>int64 scale = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setScale($var)
    {
        GPBUtil::checkInt64($var);
        $this->scale = $var;

        return $this;
    }

    /**
     * Optional. A SQL expression to specify the [default value]
     * (https://cloud.google.com/bigquery/docs/default-values) for this field.
     *
     * Generated from protobuf field <code>string default_value_expression = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDefaultValueExpression()
    {
        return $this->default_value_expression;
    }

    /**
     * Optional. A SQL expression to specify the [default value]
     * (https://cloud.google.com/bigquery/docs/default-values) for this field.
     *
     * Generated from protobuf field <code>string default_value_expression = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultValueExpression($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_value_expression = $var;

        return $this;
    }

    /**
     * Optional. The subtype of the RANGE, if the type of this field is RANGE. If
     * the type is RANGE, this field is required. Possible values for the field
     * element type of a RANGE include:
     * * DATE
     * * DATETIME
     * * TIMESTAMP
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.TableFieldSchema.FieldElementType range_element_type = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\TableFieldSchema\FieldElementType|null
     */
    public function getRangeElementType()
    {
        return $this->range_element_type;
    }

    public function hasRangeElementType()
    {
        return isset($this->range_element_type);
    }

    public function clearRangeElementType()
    {
        unset($this->range_element_type);
    }

    /**
     * Optional. The subtype of the RANGE, if the type of this field is RANGE. If
     * the type is RANGE, this field is required. Possible values for the field
     * element type of a RANGE include:
     * * DATE
     * * DATETIME
     * * TIMESTAMP
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.TableFieldSchema.FieldElementType range_element_type = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\TableFieldSchema\FieldElementType $var
     * @return $this
     */
    public function setRangeElementType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\TableFieldSchema\FieldElementType::class);
        $this->range_element_type = $var;

        return $this;
    }

}

