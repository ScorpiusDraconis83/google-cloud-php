<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/accounts.proto

namespace Google\Shopping\Merchant\Accounts\V1beta\CreateAndConfigureAccountRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Reference to a Terms of Service resource.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.CreateAndConfigureAccountRequest.AcceptTermsOfService</code>
 */
class AcceptTermsOfService extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the terms of service version in the format
     * `termsOfService/{version}`. To retrieve the latest version, use the
     * [termsOfService.retrieveLatest](/merchant/api/reference/rest/accounts_v1beta/termsOfService/retrieveLatest)
     * method.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. Region code as defined by [CLDR](https://cldr.unicode.org/).
     * This is either a country when the ToS applies specifically to that
     * country or `001` when it applies globally.
     *
     * Generated from protobuf field <code>string region_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $region_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the terms of service version in the format
     *           `termsOfService/{version}`. To retrieve the latest version, use the
     *           [termsOfService.retrieveLatest](/merchant/api/reference/rest/accounts_v1beta/termsOfService/retrieveLatest)
     *           method.
     *     @type string $region_code
     *           Required. Region code as defined by [CLDR](https://cldr.unicode.org/).
     *           This is either a country when the ToS applies specifically to that
     *           country or `001` when it applies globally.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Accounts::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the terms of service version in the format
     * `termsOfService/{version}`. To retrieve the latest version, use the
     * [termsOfService.retrieveLatest](/merchant/api/reference/rest/accounts_v1beta/termsOfService/retrieveLatest)
     * method.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the terms of service version in the format
     * `termsOfService/{version}`. To retrieve the latest version, use the
     * [termsOfService.retrieveLatest](/merchant/api/reference/rest/accounts_v1beta/termsOfService/retrieveLatest)
     * method.
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
     * Required. Region code as defined by [CLDR](https://cldr.unicode.org/).
     * This is either a country when the ToS applies specifically to that
     * country or `001` when it applies globally.
     *
     * Generated from protobuf field <code>string region_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * Required. Region code as defined by [CLDR](https://cldr.unicode.org/).
     * This is either a country when the ToS applies specifically to that
     * country or `001` when it applies globally.
     *
     * Generated from protobuf field <code>string region_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

}


