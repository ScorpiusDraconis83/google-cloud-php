<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateConnection.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CreateConnectionRequest</code>
 */
class CreateConnectionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent resource name in the format:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The connection resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Connection connection = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $connection = null;

    /**
     * @param string                          $parent     Required. Parent resource name in the format:
     *                                                    `projects/{project}/locations/{location}`. Please see
     *                                                    {@see DlpServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Dlp\V2\Connection $connection Required. The connection resource.
     *
     * @return \Google\Cloud\Dlp\V2\CreateConnectionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dlp\V2\Connection $connection): self
    {
        return (new self())
            ->setParent($parent)
            ->setConnection($connection);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent resource name in the format:
     *           `projects/{project}/locations/{location}`.
     *     @type \Google\Cloud\Dlp\V2\Connection $connection
     *           Required. The connection resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent resource name in the format:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent resource name in the format:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The connection resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Connection connection = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dlp\V2\Connection|null
     */
    public function getConnection()
    {
        return $this->connection;
    }

    public function hasConnection()
    {
        return isset($this->connection);
    }

    public function clearConnection()
    {
        unset($this->connection);
    }

    /**
     * Required. The connection resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Connection connection = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\Connection $var
     * @return $this
     */
    public function setConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Connection::class);
        $this->connection = $var;

        return $this;
    }

}

