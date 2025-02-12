<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/document.proto

namespace Google\Cloud\DiscoveryEngine\V1\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Unstructured data linked to this document.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Document.Content</code>
 */
class Content extends \Google\Protobuf\Internal\Message
{
    /**
     * The MIME type of the content. Supported types:
     * * `application/pdf` (PDF, only native PDFs are supported for now)
     * * `text/html` (HTML)
     * * `application/vnd.openxmlformats-officedocument.wordprocessingml.document` (DOCX)
     * * `application/vnd.openxmlformats-officedocument.presentationml.presentation` (PPTX)
     * * `text/plain` (TXT)
     * See https://www.iana.org/assignments/media-types/media-types.xhtml.
     *
     * Generated from protobuf field <code>string mime_type = 1;</code>
     */
    protected $mime_type = '';
    protected $content;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $raw_bytes
     *           The content represented as a stream of bytes. The maximum length is
     *           1,000,000 bytes (1 MB / ~0.95 MiB).
     *           Note: As with all `bytes` fields, this field is represented as pure
     *           binary in Protocol Buffers and base64-encoded string in JSON. For
     *           example, `abc123!?$*&()'-=&#64;~` should be represented as
     *           `YWJjMTIzIT8kKiYoKSctPUB+` in JSON. See
     *           https://developers.google.com/protocol-buffers/docs/proto3#json.
     *     @type string $uri
     *           The URI of the content. Only Cloud Storage URIs (e.g.
     *           `gs://bucket-name/path/to/file`) are supported. The maximum file size
     *           is 2.5 MB for text-based formats, 200 MB for other formats.
     *     @type string $mime_type
     *           The MIME type of the content. Supported types:
     *           * `application/pdf` (PDF, only native PDFs are supported for now)
     *           * `text/html` (HTML)
     *           * `application/vnd.openxmlformats-officedocument.wordprocessingml.document` (DOCX)
     *           * `application/vnd.openxmlformats-officedocument.presentationml.presentation` (PPTX)
     *           * `text/plain` (TXT)
     *           See https://www.iana.org/assignments/media-types/media-types.xhtml.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * The content represented as a stream of bytes. The maximum length is
     * 1,000,000 bytes (1 MB / ~0.95 MiB).
     * Note: As with all `bytes` fields, this field is represented as pure
     * binary in Protocol Buffers and base64-encoded string in JSON. For
     * example, `abc123!?$*&()'-=&#64;~` should be represented as
     * `YWJjMTIzIT8kKiYoKSctPUB+` in JSON. See
     * https://developers.google.com/protocol-buffers/docs/proto3#json.
     *
     * Generated from protobuf field <code>bytes raw_bytes = 2;</code>
     * @return string
     */
    public function getRawBytes()
    {
        return $this->readOneof(2);
    }

    public function hasRawBytes()
    {
        return $this->hasOneof(2);
    }

    /**
     * The content represented as a stream of bytes. The maximum length is
     * 1,000,000 bytes (1 MB / ~0.95 MiB).
     * Note: As with all `bytes` fields, this field is represented as pure
     * binary in Protocol Buffers and base64-encoded string in JSON. For
     * example, `abc123!?$*&()'-=&#64;~` should be represented as
     * `YWJjMTIzIT8kKiYoKSctPUB+` in JSON. See
     * https://developers.google.com/protocol-buffers/docs/proto3#json.
     *
     * Generated from protobuf field <code>bytes raw_bytes = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRawBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The URI of the content. Only Cloud Storage URIs (e.g.
     * `gs://bucket-name/path/to/file`) are supported. The maximum file size
     * is 2.5 MB for text-based formats, 200 MB for other formats.
     *
     * Generated from protobuf field <code>string uri = 3;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->readOneof(3);
    }

    public function hasUri()
    {
        return $this->hasOneof(3);
    }

    /**
     * The URI of the content. Only Cloud Storage URIs (e.g.
     * `gs://bucket-name/path/to/file`) are supported. The maximum file size
     * is 2.5 MB for text-based formats, 200 MB for other formats.
     *
     * Generated from protobuf field <code>string uri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The MIME type of the content. Supported types:
     * * `application/pdf` (PDF, only native PDFs are supported for now)
     * * `text/html` (HTML)
     * * `application/vnd.openxmlformats-officedocument.wordprocessingml.document` (DOCX)
     * * `application/vnd.openxmlformats-officedocument.presentationml.presentation` (PPTX)
     * * `text/plain` (TXT)
     * See https://www.iana.org/assignments/media-types/media-types.xhtml.
     *
     * Generated from protobuf field <code>string mime_type = 1;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * The MIME type of the content. Supported types:
     * * `application/pdf` (PDF, only native PDFs are supported for now)
     * * `text/html` (HTML)
     * * `application/vnd.openxmlformats-officedocument.wordprocessingml.document` (DOCX)
     * * `application/vnd.openxmlformats-officedocument.presentationml.presentation` (PPTX)
     * * `text/plain` (TXT)
     * See https://www.iana.org/assignments/media-types/media-types.xhtml.
     *
     * Generated from protobuf field <code>string mime_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->whichOneof("content");
    }

}


