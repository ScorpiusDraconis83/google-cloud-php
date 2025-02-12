<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/businessidentity.proto

namespace GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta;

class Businessidentity
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/shopping/merchant/accounts/v1beta/businessidentity.proto(google.shopping.merchant.accounts.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto"�	
BusinessIdentity
name (	B�Am
promotions_consent (2L.google.shopping.merchant.accounts.v1beta.BusinessIdentity.PromotionsConsentB�Af
black_owned (2L.google.shopping.merchant.accounts.v1beta.BusinessIdentity.IdentityAttributeB�Af
women_owned (2L.google.shopping.merchant.accounts.v1beta.BusinessIdentity.IdentityAttributeB�Ah
veteran_owned (2L.google.shopping.merchant.accounts.v1beta.BusinessIdentity.IdentityAttributeB�Ag
latino_owned (2L.google.shopping.merchant.accounts.v1beta.BusinessIdentity.IdentityAttributeB�Ai
small_business (2L.google.shopping.merchant.accounts.v1beta.BusinessIdentity.IdentityAttributeB�A�
IdentityAttribute�
identity_declaration (2`.google.shopping.merchant.accounts.v1beta.BusinessIdentity.IdentityAttribute.IdentityDeclarationB�A"r
IdentityDeclaration$
 IDENTITY_DECLARATION_UNSPECIFIED 
SELF_IDENTIFIES_AS
DOES_NOT_SELF_IDENTIFY_AS"t
PromotionsConsent"
PROMOTIONS_CONSENT_UNSPECIFIED 
PROMOTIONS_CONSENT_GIVEN
PROMOTIONS_CONSENT_DENIED:{�Ax
+merchantapi.googleapis.com/BusinessIdentity#accounts/{account}/businessIdentity*businessIdentities2businessIdentity"_
GetBusinessIdentityRequestA
name (	B3�A�A-
+merchantapi.googleapis.com/BusinessIdentity"�
UpdateBusinessIdentityRequestZ
business_identity (2:.google.shopping.merchant.accounts.v1beta.BusinessIdentityB�A4
update_mask (2.google.protobuf.FieldMaskB�A2�
BusinessIdentityService�
GetBusinessIdentityD.google.shopping.merchant.accounts.v1beta.GetBusinessIdentityRequest:.google.shopping.merchant.accounts.v1beta.BusinessIdentity"B�Aname���53/accounts/v1beta/{name=accounts/*/businessIdentity}�
UpdateBusinessIdentityG.google.shopping.merchant.accounts.v1beta.UpdateBusinessIdentityRequest:.google.shopping.merchant.accounts.v1beta.BusinessIdentity"��Abusiness_identity,update_mask���Z2E/accounts/v1beta/{business_identity.name=accounts/*/businessIdentity}:business_identityG�Amerchantapi.googleapis.com�A\'https://www.googleapis.com/auth/contentB�
,com.google.shopping.merchant.accounts.v1betaBBusinessIdentityProtoPZNcloud.google.com/go/shopping/merchant/accounts/apiv1beta/accountspb;accountspbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

