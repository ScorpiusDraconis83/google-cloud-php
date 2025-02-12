<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NOTE: This API is intended to be used by Apache Beam BigtableIO.
 * The information required to continue reading the data from a
 * `StreamPartition` from where a previous read left off.
 *
 * Generated from protobuf message <code>google.bigtable.v2.StreamContinuationToken</code>
 */
class StreamContinuationToken extends \Google\Protobuf\Internal\Message
{
    /**
     * The partition that this token applies to.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.StreamPartition partition = 1;</code>
     */
    protected $partition = null;
    /**
     * An encoded position in the stream to restart reading from.
     *
     * Generated from protobuf field <code>string token = 2;</code>
     */
    protected $token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\V2\StreamPartition $partition
     *           The partition that this token applies to.
     *     @type string $token
     *           An encoded position in the stream to restart reading from.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The partition that this token applies to.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.StreamPartition partition = 1;</code>
     * @return \Google\Cloud\Bigtable\V2\StreamPartition|null
     */
    public function getPartition()
    {
        return $this->partition;
    }

    public function hasPartition()
    {
        return isset($this->partition);
    }

    public function clearPartition()
    {
        unset($this->partition);
    }

    /**
     * The partition that this token applies to.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.StreamPartition partition = 1;</code>
     * @param \Google\Cloud\Bigtable\V2\StreamPartition $var
     * @return $this
     */
    public function setPartition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\StreamPartition::class);
        $this->partition = $var;

        return $this;
    }

    /**
     * An encoded position in the stream to restart reading from.
     *
     * Generated from protobuf field <code>string token = 2;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * An encoded position in the stream to restart reading from.
     *
     * Generated from protobuf field <code>string token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

}

