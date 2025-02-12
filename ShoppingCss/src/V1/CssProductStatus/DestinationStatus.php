<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/css/v1/css_product_common.proto

namespace Google\Shopping\Css\V1\CssProductStatus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The destination status of the product status.
 *
 * Generated from protobuf message <code>google.shopping.css.v1.CssProductStatus.DestinationStatus</code>
 */
class DestinationStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the destination
     *
     * Generated from protobuf field <code>string destination = 1;</code>
     */
    protected $destination = '';
    /**
     * List of country codes (ISO 3166-1 alpha-2) where the CSS Product is
     * approved.
     *
     * Generated from protobuf field <code>repeated string approved_countries = 2;</code>
     */
    private $approved_countries;
    /**
     * List of country codes (ISO 3166-1 alpha-2) where the CSS Product is
     * pending approval.
     *
     * Generated from protobuf field <code>repeated string pending_countries = 3;</code>
     */
    private $pending_countries;
    /**
     * List of country codes (ISO 3166-1 alpha-2) where the CSS Product is
     * disapproved.
     *
     * Generated from protobuf field <code>repeated string disapproved_countries = 4;</code>
     */
    private $disapproved_countries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $destination
     *           The name of the destination
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $approved_countries
     *           List of country codes (ISO 3166-1 alpha-2) where the CSS Product is
     *           approved.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $pending_countries
     *           List of country codes (ISO 3166-1 alpha-2) where the CSS Product is
     *           pending approval.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $disapproved_countries
     *           List of country codes (ISO 3166-1 alpha-2) where the CSS Product is
     *           disapproved.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Css\V1\CssProductCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the destination
     *
     * Generated from protobuf field <code>string destination = 1;</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * The name of the destination
     *
     * Generated from protobuf field <code>string destination = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination = $var;

        return $this;
    }

    /**
     * List of country codes (ISO 3166-1 alpha-2) where the CSS Product is
     * approved.
     *
     * Generated from protobuf field <code>repeated string approved_countries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApprovedCountries()
    {
        return $this->approved_countries;
    }

    /**
     * List of country codes (ISO 3166-1 alpha-2) where the CSS Product is
     * approved.
     *
     * Generated from protobuf field <code>repeated string approved_countries = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApprovedCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->approved_countries = $arr;

        return $this;
    }

    /**
     * List of country codes (ISO 3166-1 alpha-2) where the CSS Product is
     * pending approval.
     *
     * Generated from protobuf field <code>repeated string pending_countries = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPendingCountries()
    {
        return $this->pending_countries;
    }

    /**
     * List of country codes (ISO 3166-1 alpha-2) where the CSS Product is
     * pending approval.
     *
     * Generated from protobuf field <code>repeated string pending_countries = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPendingCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pending_countries = $arr;

        return $this;
    }

    /**
     * List of country codes (ISO 3166-1 alpha-2) where the CSS Product is
     * disapproved.
     *
     * Generated from protobuf field <code>repeated string disapproved_countries = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisapprovedCountries()
    {
        return $this->disapproved_countries;
    }

    /**
     * List of country codes (ISO 3166-1 alpha-2) where the CSS Product is
     * disapproved.
     *
     * Generated from protobuf field <code>repeated string disapproved_countries = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisapprovedCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->disapproved_countries = $arr;

        return $this;
    }

}


