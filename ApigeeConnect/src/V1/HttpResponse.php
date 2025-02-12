<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeconnect/v1/tether.proto

namespace Google\Cloud\ApigeeConnect\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The proto definition of http response.
 *
 * Generated from protobuf message <code>google.cloud.apigeeconnect.v1.HttpResponse</code>
 */
class HttpResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique identifier that matches the request ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Status of http response, e.g. "200 OK".
     *
     * Generated from protobuf field <code>string status = 2;</code>
     */
    protected $status = '';
    /**
     * Status code of http response, e.g. 200.
     *
     * Generated from protobuf field <code>int32 status_code = 3;</code>
     */
    protected $status_code = 0;
    /**
     * The HTTP 1.1 response body.
     *
     * Generated from protobuf field <code>bytes body = 4;</code>
     */
    protected $body = '';
    /**
     * The HTTP response headers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apigeeconnect.v1.Header headers = 5;</code>
     */
    private $headers;
    /**
     * Content length records the length of the associated content. The
     * value -1 indicates that the length is unknown. Unless http method
     * is "HEAD", values >= 0 indicate that the given number of bytes may
     * be read from Body.
     *
     * Generated from protobuf field <code>int64 content_length = 6;</code>
     */
    protected $content_length = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           A unique identifier that matches the request ID.
     *     @type string $status
     *           Status of http response, e.g. "200 OK".
     *     @type int $status_code
     *           Status code of http response, e.g. 200.
     *     @type string $body
     *           The HTTP 1.1 response body.
     *     @type array<\Google\Cloud\ApigeeConnect\V1\Header>|\Google\Protobuf\Internal\RepeatedField $headers
     *           The HTTP response headers.
     *     @type int|string $content_length
     *           Content length records the length of the associated content. The
     *           value -1 indicates that the length is unknown. Unless http method
     *           is "HEAD", values >= 0 indicate that the given number of bytes may
     *           be read from Body.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeconnect\V1\Tether::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique identifier that matches the request ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * A unique identifier that matches the request ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Status of http response, e.g. "200 OK".
     *
     * Generated from protobuf field <code>string status = 2;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of http response, e.g. "200 OK".
     *
     * Generated from protobuf field <code>string status = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Status code of http response, e.g. 200.
     *
     * Generated from protobuf field <code>int32 status_code = 3;</code>
     * @return int
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * Status code of http response, e.g. 200.
     *
     * Generated from protobuf field <code>int32 status_code = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatusCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->status_code = $var;

        return $this;
    }

    /**
     * The HTTP 1.1 response body.
     *
     * Generated from protobuf field <code>bytes body = 4;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * The HTTP 1.1 response body.
     *
     * Generated from protobuf field <code>bytes body = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, False);
        $this->body = $var;

        return $this;
    }

    /**
     * The HTTP response headers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apigeeconnect.v1.Header headers = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * The HTTP response headers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apigeeconnect.v1.Header headers = 5;</code>
     * @param array<\Google\Cloud\ApigeeConnect\V1\Header>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ApigeeConnect\V1\Header::class);
        $this->headers = $arr;

        return $this;
    }

    /**
     * Content length records the length of the associated content. The
     * value -1 indicates that the length is unknown. Unless http method
     * is "HEAD", values >= 0 indicate that the given number of bytes may
     * be read from Body.
     *
     * Generated from protobuf field <code>int64 content_length = 6;</code>
     * @return int|string
     */
    public function getContentLength()
    {
        return $this->content_length;
    }

    /**
     * Content length records the length of the associated content. The
     * value -1 indicates that the length is unknown. Unless http method
     * is "HEAD", values >= 0 indicate that the given number of bytes may
     * be read from Body.
     *
     * Generated from protobuf field <code>int64 content_length = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setContentLength($var)
    {
        GPBUtil::checkInt64($var);
        $this->content_length = $var;

        return $this;
    }

}

