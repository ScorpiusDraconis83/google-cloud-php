<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/customers.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Entity representing a customer of a reseller or distributor.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.Customer</code>
 */
class Customer extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the customer.
     * Format: accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. Name of the organization that the customer entity represents.
     *
     * Generated from protobuf field <code>string org_display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $org_display_name = '';
    /**
     * Required. The organization address for the customer. To enforce US laws and
     * embargoes, we require a region, postal code, and address lines. You must
     * provide valid addresses for every customer. To set the customer's
     * language, use the Customer-level language code.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress org_postal_address = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $org_postal_address = null;
    /**
     * Primary contact info.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ContactInfo primary_contact_info = 4;</code>
     */
    protected $primary_contact_info = null;
    /**
     * Secondary contact email. You need to provide an alternate email to create
     * different domains if a primary contact email already exists. Users will
     * receive a notification with credentials when you create an admin.google.com
     * account. Secondary emails are also recovery email addresses. Alternate
     * emails are optional when you create Team customers.
     *
     * Generated from protobuf field <code>string alternate_email = 5;</code>
     */
    protected $alternate_email = '';
    /**
     * Required. The customer's primary domain. Must match the primary contact
     * email's domain.
     *
     * Generated from protobuf field <code>string domain = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $domain = '';
    /**
     * Output only. Time when the customer was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time when the customer was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. The customer's Cloud Identity ID if the customer has a Cloud
     * Identity resource.
     *
     * Generated from protobuf field <code>string cloud_identity_id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $cloud_identity_id = '';
    /**
     * Optional. The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * https://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $language_code = '';
    /**
     * Output only. Cloud Identity information for the customer.
     * Populated only if a Cloud Identity account exists for this customer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CloudIdentityInfo cloud_identity_info = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $cloud_identity_info = null;
    /**
     * Cloud Identity ID of the customer's channel partner.
     * Populated only if a channel partner exists for this customer.
     *
     * Generated from protobuf field <code>string channel_partner_id = 13;</code>
     */
    protected $channel_partner_id = '';
    /**
     * Optional. External CRM ID for the customer.
     * Populated only if a CRM ID exists for this customer.
     *
     * Generated from protobuf field <code>string correlation_id = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $correlation_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the customer.
     *           Format: accounts/{account_id}/customers/{customer_id}
     *     @type string $org_display_name
     *           Required. Name of the organization that the customer entity represents.
     *     @type \Google\Type\PostalAddress $org_postal_address
     *           Required. The organization address for the customer. To enforce US laws and
     *           embargoes, we require a region, postal code, and address lines. You must
     *           provide valid addresses for every customer. To set the customer's
     *           language, use the Customer-level language code.
     *     @type \Google\Cloud\Channel\V1\ContactInfo $primary_contact_info
     *           Primary contact info.
     *     @type string $alternate_email
     *           Secondary contact email. You need to provide an alternate email to create
     *           different domains if a primary contact email already exists. Users will
     *           receive a notification with credentials when you create an admin.google.com
     *           account. Secondary emails are also recovery email addresses. Alternate
     *           emails are optional when you create Team customers.
     *     @type string $domain
     *           Required. The customer's primary domain. Must match the primary contact
     *           email's domain.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when the customer was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when the customer was updated.
     *     @type string $cloud_identity_id
     *           Output only. The customer's Cloud Identity ID if the customer has a Cloud
     *           Identity resource.
     *     @type string $language_code
     *           Optional. The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     *           information, see
     *           https://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *     @type \Google\Cloud\Channel\V1\CloudIdentityInfo $cloud_identity_info
     *           Output only. Cloud Identity information for the customer.
     *           Populated only if a Cloud Identity account exists for this customer.
     *     @type string $channel_partner_id
     *           Cloud Identity ID of the customer's channel partner.
     *           Populated only if a channel partner exists for this customer.
     *     @type string $correlation_id
     *           Optional. External CRM ID for the customer.
     *           Populated only if a CRM ID exists for this customer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Customers::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the customer.
     * Format: accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the customer.
     * Format: accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. Name of the organization that the customer entity represents.
     *
     * Generated from protobuf field <code>string org_display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getOrgDisplayName()
    {
        return $this->org_display_name;
    }

    /**
     * Required. Name of the organization that the customer entity represents.
     *
     * Generated from protobuf field <code>string org_display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setOrgDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->org_display_name = $var;

        return $this;
    }

    /**
     * Required. The organization address for the customer. To enforce US laws and
     * embargoes, we require a region, postal code, and address lines. You must
     * provide valid addresses for every customer. To set the customer's
     * language, use the Customer-level language code.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress org_postal_address = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Type\PostalAddress|null
     */
    public function getOrgPostalAddress()
    {
        return $this->org_postal_address;
    }

    public function hasOrgPostalAddress()
    {
        return isset($this->org_postal_address);
    }

    public function clearOrgPostalAddress()
    {
        unset($this->org_postal_address);
    }

    /**
     * Required. The organization address for the customer. To enforce US laws and
     * embargoes, we require a region, postal code, and address lines. You must
     * provide valid addresses for every customer. To set the customer's
     * language, use the Customer-level language code.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress org_postal_address = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Type\PostalAddress $var
     * @return $this
     */
    public function setOrgPostalAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\PostalAddress::class);
        $this->org_postal_address = $var;

        return $this;
    }

    /**
     * Primary contact info.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ContactInfo primary_contact_info = 4;</code>
     * @return \Google\Cloud\Channel\V1\ContactInfo|null
     */
    public function getPrimaryContactInfo()
    {
        return $this->primary_contact_info;
    }

    public function hasPrimaryContactInfo()
    {
        return isset($this->primary_contact_info);
    }

    public function clearPrimaryContactInfo()
    {
        unset($this->primary_contact_info);
    }

    /**
     * Primary contact info.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ContactInfo primary_contact_info = 4;</code>
     * @param \Google\Cloud\Channel\V1\ContactInfo $var
     * @return $this
     */
    public function setPrimaryContactInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\ContactInfo::class);
        $this->primary_contact_info = $var;

        return $this;
    }

    /**
     * Secondary contact email. You need to provide an alternate email to create
     * different domains if a primary contact email already exists. Users will
     * receive a notification with credentials when you create an admin.google.com
     * account. Secondary emails are also recovery email addresses. Alternate
     * emails are optional when you create Team customers.
     *
     * Generated from protobuf field <code>string alternate_email = 5;</code>
     * @return string
     */
    public function getAlternateEmail()
    {
        return $this->alternate_email;
    }

    /**
     * Secondary contact email. You need to provide an alternate email to create
     * different domains if a primary contact email already exists. Users will
     * receive a notification with credentials when you create an admin.google.com
     * account. Secondary emails are also recovery email addresses. Alternate
     * emails are optional when you create Team customers.
     *
     * Generated from protobuf field <code>string alternate_email = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAlternateEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->alternate_email = $var;

        return $this;
    }

    /**
     * Required. The customer's primary domain. Must match the primary contact
     * email's domain.
     *
     * Generated from protobuf field <code>string domain = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Required. The customer's primary domain. Must match the primary contact
     * email's domain.
     *
     * Generated from protobuf field <code>string domain = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * Output only. Time when the customer was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when the customer was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time when the customer was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time when the customer was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The customer's Cloud Identity ID if the customer has a Cloud
     * Identity resource.
     *
     * Generated from protobuf field <code>string cloud_identity_id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCloudIdentityId()
    {
        return $this->cloud_identity_id;
    }

    /**
     * Output only. The customer's Cloud Identity ID if the customer has a Cloud
     * Identity resource.
     *
     * Generated from protobuf field <code>string cloud_identity_id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCloudIdentityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cloud_identity_id = $var;

        return $this;
    }

    /**
     * Optional. The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * https://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * https://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Output only. Cloud Identity information for the customer.
     * Populated only if a Cloud Identity account exists for this customer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CloudIdentityInfo cloud_identity_info = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Channel\V1\CloudIdentityInfo|null
     */
    public function getCloudIdentityInfo()
    {
        return $this->cloud_identity_info;
    }

    public function hasCloudIdentityInfo()
    {
        return isset($this->cloud_identity_info);
    }

    public function clearCloudIdentityInfo()
    {
        unset($this->cloud_identity_info);
    }

    /**
     * Output only. Cloud Identity information for the customer.
     * Populated only if a Cloud Identity account exists for this customer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CloudIdentityInfo cloud_identity_info = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Channel\V1\CloudIdentityInfo $var
     * @return $this
     */
    public function setCloudIdentityInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\CloudIdentityInfo::class);
        $this->cloud_identity_info = $var;

        return $this;
    }

    /**
     * Cloud Identity ID of the customer's channel partner.
     * Populated only if a channel partner exists for this customer.
     *
     * Generated from protobuf field <code>string channel_partner_id = 13;</code>
     * @return string
     */
    public function getChannelPartnerId()
    {
        return $this->channel_partner_id;
    }

    /**
     * Cloud Identity ID of the customer's channel partner.
     * Populated only if a channel partner exists for this customer.
     *
     * Generated from protobuf field <code>string channel_partner_id = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setChannelPartnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_partner_id = $var;

        return $this;
    }

    /**
     * Optional. External CRM ID for the customer.
     * Populated only if a CRM ID exists for this customer.
     *
     * Generated from protobuf field <code>string correlation_id = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->correlation_id;
    }

    /**
     * Optional. External CRM ID for the customer.
     * Populated only if a CRM ID exists for this customer.
     *
     * Generated from protobuf field <code>string correlation_id = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCorrelationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->correlation_id = $var;

        return $this;
    }

}

