<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/source.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Security Command Center finding source. A finding source
 * is an entity or a mechanism that can produce a finding. A source is like a
 * container of findings that come from the same scanner, logger, monitor, and
 * other tools.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.Source</code>
 */
class Source extends \Google\Protobuf\Internal\Message
{
    /**
     * The relative resource name of this source. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Example:
     * "organizations/{organization_id}/sources/{source_id}"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The source's display name.
     * A source's display name must be unique amongst its siblings, for example,
     * two sources with the same parent can't share the same display name.
     * The display name must have a length between 1 and 64 characters
     * (inclusive).
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * The description of the source (max of 1024 characters).
     * Example:
     * "Web Security Scanner is a web security scanner for common
     * vulnerabilities in App Engine applications. It can automatically
     * scan and detect four common vulnerabilities, including cross-site-scripting
     * (XSS), Flash injection, mixed content (HTTP in HTTPS), and
     * outdated or insecure libraries."
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * The canonical name of the finding source. It's either
     * "organizations/{organization_id}/sources/{source_id}",
     * "folders/{folder_id}/sources/{source_id}", or
     * "projects/{project_number}/sources/{source_id}",
     * depending on the closest CRM ancestor of the resource associated with the
     * finding.
     *
     * Generated from protobuf field <code>string canonical_name = 4;</code>
     */
    protected $canonical_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The relative resource name of this source. See:
     *           https://cloud.google.com/apis/design/resource_names#relative_resource_name
     *           Example:
     *           "organizations/{organization_id}/sources/{source_id}"
     *     @type string $display_name
     *           The source's display name.
     *           A source's display name must be unique amongst its siblings, for example,
     *           two sources with the same parent can't share the same display name.
     *           The display name must have a length between 1 and 64 characters
     *           (inclusive).
     *     @type string $description
     *           The description of the source (max of 1024 characters).
     *           Example:
     *           "Web Security Scanner is a web security scanner for common
     *           vulnerabilities in App Engine applications. It can automatically
     *           scan and detect four common vulnerabilities, including cross-site-scripting
     *           (XSS), Flash injection, mixed content (HTTP in HTTPS), and
     *           outdated or insecure libraries."
     *     @type string $canonical_name
     *           The canonical name of the finding source. It's either
     *           "organizations/{organization_id}/sources/{source_id}",
     *           "folders/{folder_id}/sources/{source_id}", or
     *           "projects/{project_number}/sources/{source_id}",
     *           depending on the closest CRM ancestor of the resource associated with the
     *           finding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Source::initOnce();
        parent::__construct($data);
    }

    /**
     * The relative resource name of this source. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Example:
     * "organizations/{organization_id}/sources/{source_id}"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The relative resource name of this source. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Example:
     * "organizations/{organization_id}/sources/{source_id}"
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The source's display name.
     * A source's display name must be unique amongst its siblings, for example,
     * two sources with the same parent can't share the same display name.
     * The display name must have a length between 1 and 64 characters
     * (inclusive).
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The source's display name.
     * A source's display name must be unique amongst its siblings, for example,
     * two sources with the same parent can't share the same display name.
     * The display name must have a length between 1 and 64 characters
     * (inclusive).
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The description of the source (max of 1024 characters).
     * Example:
     * "Web Security Scanner is a web security scanner for common
     * vulnerabilities in App Engine applications. It can automatically
     * scan and detect four common vulnerabilities, including cross-site-scripting
     * (XSS), Flash injection, mixed content (HTTP in HTTPS), and
     * outdated or insecure libraries."
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the source (max of 1024 characters).
     * Example:
     * "Web Security Scanner is a web security scanner for common
     * vulnerabilities in App Engine applications. It can automatically
     * scan and detect four common vulnerabilities, including cross-site-scripting
     * (XSS), Flash injection, mixed content (HTTP in HTTPS), and
     * outdated or insecure libraries."
     *
     * Generated from protobuf field <code>string description = 3;</code>
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
     * The canonical name of the finding source. It's either
     * "organizations/{organization_id}/sources/{source_id}",
     * "folders/{folder_id}/sources/{source_id}", or
     * "projects/{project_number}/sources/{source_id}",
     * depending on the closest CRM ancestor of the resource associated with the
     * finding.
     *
     * Generated from protobuf field <code>string canonical_name = 4;</code>
     * @return string
     */
    public function getCanonicalName()
    {
        return $this->canonical_name;
    }

    /**
     * The canonical name of the finding source. It's either
     * "organizations/{organization_id}/sources/{source_id}",
     * "folders/{folder_id}/sources/{source_id}", or
     * "projects/{project_number}/sources/{source_id}",
     * depending on the closest CRM ancestor of the resource associated with the
     * finding.
     *
     * Generated from protobuf field <code>string canonical_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCanonicalName($var)
    {
        GPBUtil::checkString($var, True);
        $this->canonical_name = $var;

        return $this;
    }

}

