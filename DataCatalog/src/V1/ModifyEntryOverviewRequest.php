<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ModifyEntryOverview][google.cloud.datacatalog.v1.DataCatalog.ModifyEntryOverview].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ModifyEntryOverviewRequest</code>
 */
class ModifyEntryOverviewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The full resource name of the entry.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The new value for the Entry Overview.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.EntryOverview entry_overview = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $entry_overview = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The full resource name of the entry.
     *     @type \Google\Cloud\DataCatalog\V1\EntryOverview $entry_overview
     *           Required. The new value for the Entry Overview.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The full resource name of the entry.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The full resource name of the entry.
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
     * Required. The new value for the Entry Overview.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.EntryOverview entry_overview = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataCatalog\V1\EntryOverview|null
     */
    public function getEntryOverview()
    {
        return $this->entry_overview;
    }

    public function hasEntryOverview()
    {
        return isset($this->entry_overview);
    }

    public function clearEntryOverview()
    {
        unset($this->entry_overview);
    }

    /**
     * Required. The new value for the Entry Overview.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.EntryOverview entry_overview = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataCatalog\V1\EntryOverview $var
     * @return $this
     */
    public function setEntryOverview($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\EntryOverview::class);
        $this->entry_overview = $var;

        return $this;
    }

}

