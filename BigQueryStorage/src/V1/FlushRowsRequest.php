<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/storage.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `FlushRows`.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.FlushRowsRequest</code>
 */
class FlushRowsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The stream that is the target of the flush operation.
     *
     * Generated from protobuf field <code>string write_stream = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $write_stream = '';
    /**
     * Ending offset of the flush operation. Rows before this offset(including
     * this offset) will be flushed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     */
    protected $offset = null;

    /**
     * @param string $writeStream Required. The stream that is the target of the flush operation. Please see
     *                            {@see BigQueryWriteClient::writeStreamName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\Storage\V1\FlushRowsRequest
     *
     * @experimental
     */
    public static function build(string $writeStream): self
    {
        return (new self())
            ->setWriteStream($writeStream);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $write_stream
     *           Required. The stream that is the target of the flush operation.
     *     @type \Google\Protobuf\Int64Value $offset
     *           Ending offset of the flush operation. Rows before this offset(including
     *           this offset) will be flushed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The stream that is the target of the flush operation.
     *
     * Generated from protobuf field <code>string write_stream = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWriteStream()
    {
        return $this->write_stream;
    }

    /**
     * Required. The stream that is the target of the flush operation.
     *
     * Generated from protobuf field <code>string write_stream = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWriteStream($var)
    {
        GPBUtil::checkString($var, True);
        $this->write_stream = $var;

        return $this;
    }

    /**
     * Ending offset of the flush operation. Rows before this offset(including
     * this offset) will be flushed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    public function hasOffset()
    {
        return isset($this->offset);
    }

    public function clearOffset()
    {
        unset($this->offset);
    }

    /**
     * Returns the unboxed value from <code>getOffset()</code>

     * Ending offset of the flush operation. Rows before this offset(including
     * this offset) will be flushed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     * @return int|string|null
     */
    public function getOffsetUnwrapped()
    {
        return $this->readWrapperValue("offset");
    }

    /**
     * Ending offset of the flush operation. Rows before this offset(including
     * this offset) will be flushed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->offset = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Ending offset of the flush operation. Rows before this offset(including
     * this offset) will be flushed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setOffsetUnwrapped($var)
    {
        $this->writeWrapperValue("offset", $var);
        return $this;}

}

