<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/sessions.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to delete a session.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.DeleteSessionRequest</code>
 */
class DeleteSessionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the session resource to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. A unique ID used to identify the request. If the service
     * receives two
     * [DeleteSessionRequest](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.DeleteSessionRequest)s
     * with the same ID, the second request is ignored.
     * Recommendation: Set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The value must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param string $name Required. The name of the session resource to delete. Please see
     *                     {@see SessionControllerClient::sessionName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dataproc\V1\DeleteSessionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the session resource to delete.
     *     @type string $request_id
     *           Optional. A unique ID used to identify the request. If the service
     *           receives two
     *           [DeleteSessionRequest](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.DeleteSessionRequest)s
     *           with the same ID, the second request is ignored.
     *           Recommendation: Set this value to a
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     *           The value must contain only letters (a-z, A-Z), numbers (0-9),
     *           underscores (_), and hyphens (-). The maximum length is 40 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Sessions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the session resource to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the session resource to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. A unique ID used to identify the request. If the service
     * receives two
     * [DeleteSessionRequest](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.DeleteSessionRequest)s
     * with the same ID, the second request is ignored.
     * Recommendation: Set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The value must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique ID used to identify the request. If the service
     * receives two
     * [DeleteSessionRequest](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.DeleteSessionRequest)s
     * with the same ID, the second request is ignored.
     * Recommendation: Set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The value must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

