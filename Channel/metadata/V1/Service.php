<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace GPBMetadata\Google\Cloud\Channel\V1;

class Service
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
        \GPBMetadata\Google\Cloud\Channel\V1\BillingAccounts::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\ChannelPartnerLinks::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\Common::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\Customers::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\EntitlementChanges::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\Entitlements::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\Offers::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\Operations::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\Products::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\Repricing::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
%google/cloud/channel/v1/service.protogoogle.cloud.channel.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto.google/cloud/channel/v1/billing_accounts.proto3google/cloud/channel/v1/channel_partner_links.proto$google/cloud/channel/v1/common.proto\'google/cloud/channel/v1/customers.proto1google/cloud/channel/v1/entitlement_changes.proto*google/cloud/channel/v1/entitlements.proto$google/cloud/channel/v1/offers.proto(google/cloud/channel/v1/operations.proto&google/cloud/channel/v1/products.proto\'google/cloud/channel/v1/repricing.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"t
&CheckCloudIdentityAccountsExistRequest
parent (	B�A
domain (	B�A 
primary_admin_email (	B�A"�
CloudIdentityCustomerAccount
existing (
owned (
customer_name (	"
customer_cloud_identity_id (	N
customer_type (27.google.cloud.channel.v1.CloudIdentityInfo.CustomerType)
!channel_partner_cloud_identity_id (	"�
\'CheckCloudIdentityAccountsExistResponseV
cloud_identity_accounts (25.google.cloud.channel.v1.CloudIdentityCustomerAccount"q
ListCustomersRequest
parent (	B�A
	page_size (B�A

page_token (	B�A
filter (	B�A"f
ListCustomersResponse4
	customers (2!.google.cloud.channel.v1.Customer
next_page_token (	"P
GetCustomerRequest:
name (	B,�A�A&
$cloudchannel.googleapis.com/Customer"f
CreateCustomerRequest
parent (	B�A8
customer (2!.google.cloud.channel.v1.CustomerB�A"�
UpdateCustomerRequest8
customer (2!.google.cloud.channel.v1.CustomerB�A/
update_mask (2.google.protobuf.FieldMask"S
DeleteCustomerRequest:
name (	B,�A�A&
$cloudchannel.googleapis.com/Customer"�
ImportCustomerRequest
domain (	B�AH  
cloud_identity_id (	B�AH "
primary_admin_email (	B�AH 
parent (	B�A

auth_token (	B�A 
overwrite_if_exists (B�A
channel_partner_id (	B�A>
customer (	B,�A�A&
$cloudchannel.googleapis.com/CustomerB
customer_identity"�
ProvisionCloudIdentityRequest>
customer (	B,�A�A&
$cloudchannel.googleapis.com/CustomerG
cloud_identity_info (2*.google.cloud.channel.v1.CloudIdentityInfo0
user (2".google.cloud.channel.v1.AdminUser
validate_only ("�
ListEntitlementsRequest<
parent (	B,�A�A&
$cloudchannel.googleapis.com/Customer
	page_size (B�A

page_token (	B�A"o
ListEntitlementsResponse:
entitlements (2$.google.cloud.channel.v1.Entitlement
next_page_token (	"�
ListTransferableSkusRequest
cloud_identity_id (	H 
customer_name (	H 
parent (	B�A
	page_size (

page_token (	

auth_token (	B�A
language_code (	B
transferred_customer_identity"|
ListTransferableSkusResponseC
transferable_skus (2(.google.cloud.channel.v1.TransferableSku
next_page_token (	"�
ListTransferableOffersRequest
cloud_identity_id (	H 
customer_name (	H 
parent (	B�A
	page_size (

page_token (	
sku (	B�A
language_code (	B�A
billing_account (	B�AB
transferred_customer_identity"�
ListTransferableOffersResponseG
transferable_offers (2*.google.cloud.channel.v1.TransferableOffer
next_page_token (	"B
TransferableOffer-
offer (2.google.cloud.channel.v1.Offer"V
GetEntitlementRequest=
name (	B/�A�A)
\'cloudchannel.googleapis.com/Entitlement"�
ListChannelPartnerLinksRequest
parent (	B�A
	page_size (B�A

page_token (	B�AB
view (2/.google.cloud.channel.v1.ChannelPartnerLinkViewB�A"�
ListChannelPartnerLinksResponseJ
channel_partner_links (2+.google.cloud.channel.v1.ChannelPartnerLink
next_page_token (	"u
GetChannelPartnerLinkRequest
name (	B�AB
view (2/.google.cloud.channel.v1.ChannelPartnerLinkViewB�A"�
CreateChannelPartnerLinkRequest
parent (	B�AN
channel_partner_link (2+.google.cloud.channel.v1.ChannelPartnerLinkB�A"�
UpdateChannelPartnerLinkRequest
name (	B�AN
channel_partner_link (2+.google.cloud.channel.v1.ChannelPartnerLinkB�A4
update_mask (2.google.protobuf.FieldMaskB�A"n
!GetCustomerRepricingConfigRequestI
name (	B;�A�A5
3cloudchannel.googleapis.com/CustomerRepricingConfig"�
#ListCustomerRepricingConfigsRequest<
parent (	B,�A�A&
$cloudchannel.googleapis.com/Customer
	page_size (B�A

page_token (	B�A
filter (	B�A"�
$ListCustomerRepricingConfigsResponseT
customer_repricing_configs (20.google.cloud.channel.v1.CustomerRepricingConfig
next_page_token (	"�
$CreateCustomerRepricingConfigRequest<
parent (	B,�A�A&
$cloudchannel.googleapis.com/CustomerX
customer_repricing_config (20.google.cloud.channel.v1.CustomerRepricingConfigB�A"�
$UpdateCustomerRepricingConfigRequestX
customer_repricing_config (20.google.cloud.channel.v1.CustomerRepricingConfigB�A"q
$DeleteCustomerRepricingConfigRequestI
name (	B;�A�A5
3cloudchannel.googleapis.com/CustomerRepricingConfig"z
\'GetChannelPartnerRepricingConfigRequestO
name (	BA�A�A;
9cloudchannel.googleapis.com/ChannelPartnerRepricingConfig"�
)ListChannelPartnerRepricingConfigsRequestF
parent (	B6�A�A0
.cloudchannel.googleapis.com/ChannelPartnerLink
	page_size (B�A

page_token (	B�A
filter (	B�A"�
*ListChannelPartnerRepricingConfigsResponsea
!channel_partner_repricing_configs (26.google.cloud.channel.v1.ChannelPartnerRepricingConfig
next_page_token (	"�
*CreateChannelPartnerRepricingConfigRequestF
parent (	B6�A�A0
.cloudchannel.googleapis.com/ChannelPartnerLinke
 channel_partner_repricing_config (26.google.cloud.channel.v1.ChannelPartnerRepricingConfigB�A"�
*UpdateChannelPartnerRepricingConfigRequeste
 channel_partner_repricing_config (26.google.cloud.channel.v1.ChannelPartnerRepricingConfigB�A"}
*DeleteChannelPartnerRepricingConfigRequestO
name (	BA�A�A;
9cloudchannel.googleapis.com/ChannelPartnerRepricingConfig"\\
ListSkuGroupsRequest
parent (	B�A
	page_size (B�A

page_token (	B�A"�
ListSkuGroupBillableSkusRequest<
parent (	B,�A�A&
$cloudchannel.googleapis.com/SkuGroup
	page_size (B�A

page_token (	B�A"g
ListSkuGroupsResponse5

sku_groups (2!.google.cloud.channel.v1.SkuGroup
next_page_token (	"x
 ListSkuGroupBillableSkusResponse;
billable_skus (2$.google.cloud.channel.v1.BillableSku
next_page_token (	"�
SkuGroup
name (	
display_name (	:S�AP
$cloudchannel.googleapis.com/SkuGroup(accounts/{account}/skuGroups/{sku_group}"c
BillableSku
sku (	
sku_display_name (	
service (	
service_display_name (	"�
CreateEntitlementRequest<
parent (	B,�A�A&
$cloudchannel.googleapis.com/Customer>
entitlement (2$.google.cloud.channel.v1.EntitlementB�A

request_id (	B�A"�
TransferEntitlementsRequest
parent (	B�A?
entitlements (2$.google.cloud.channel.v1.EntitlementB�A

auth_token (	

request_id (	B�A"Z
TransferEntitlementsResponse:
entitlements (2$.google.cloud.channel.v1.Entitlement"�
#TransferEntitlementsToGoogleRequest
parent (	B�A?
entitlements (2$.google.cloud.channel.v1.EntitlementB�A

request_id (	B�A"�
ChangeParametersRequest
name (	B�A;

parameters (2".google.cloud.channel.v1.ParameterB�A

request_id (	B�A
purchase_order_id (	B�A"�
ChangeRenewalSettingsRequest
name (	B�AG
renewal_settings (2(.google.cloud.channel.v1.RenewalSettingsB�A

request_id (	B�A"�
ChangeOfferRequest
name (	B�A8
offer (	B)�A�A#
!cloudchannel.googleapis.com/Offer;

parameters (2".google.cloud.channel.v1.ParameterB�A
purchase_order_id (	B�A

request_id (	B�A
billing_account (	B�A"E
StartPaidServiceRequest
name (	B�A

request_id (	B�A"F
CancelEntitlementRequest
name (	B�A

request_id (	B�A"G
SuspendEntitlementRequest
name (	B�A

request_id (	B�A"H
ActivateEntitlementRequest
name (	B�A

request_id (	B�A"Z
LookupOfferRequestD
entitlement (	B/�A�A)
\'cloudchannel.googleapis.com/Entitlement"x
ListProductsRequest
account (	B�A
	page_size (B�A

page_token (	B�A
language_code (	B�A"c
ListProductsResponse2
products (2 .google.cloud.channel.v1.Product
next_page_token (	"�
ListSkusRequest;
parent (	B+�A�A%
#cloudchannel.googleapis.com/Product
account (	B�A
	page_size (B�A

page_token (	B�A
language_code (	B�A"W
ListSkusResponse*
skus (2.google.cloud.channel.v1.Sku
next_page_token (	"�
ListOffersRequest
parent (	B�A
	page_size (B�A

page_token (	B�A
filter (	B�A
language_code (	B�A
show_future_offers (B�A"]
ListOffersResponse.
offers (2.google.cloud.channel.v1.Offer
next_page_token (	"�
ListPurchasableSkusRequestt
create_entitlement_purchase (2M.google.cloud.channel.v1.ListPurchasableSkusRequest.CreateEntitlementPurchaseH h
change_offer_purchase (2G.google.cloud.channel.v1.ListPurchasableSkusRequest.ChangeOfferPurchaseH >
customer (	B,�A�A&
$cloudchannel.googleapis.com/Customer
	page_size (B�A

page_token (	B�A
language_code (	B�A1
CreateEntitlementPurchase
product (	B�A�
ChangeOfferPurchase
entitlement (	B�Al
change_type (2R.google.cloud.channel.v1.ListPurchasableSkusRequest.ChangeOfferPurchase.ChangeTypeB�A"E

ChangeType
CHANGE_TYPE_UNSPECIFIED 
UPGRADE
	DOWNGRADEB
purchase_option"y
ListPurchasableSkusResponseA
purchasable_skus (2\'.google.cloud.channel.v1.PurchasableSku
next_page_token (	";
PurchasableSku)
sku (2.google.cloud.channel.v1.Sku"�
ListPurchasableOffersRequestv
create_entitlement_purchase (2O.google.cloud.channel.v1.ListPurchasableOffersRequest.CreateEntitlementPurchaseH j
change_offer_purchase (2I.google.cloud.channel.v1.ListPurchasableOffersRequest.ChangeOfferPurchaseH >
customer (	B,�A�A&
$cloudchannel.googleapis.com/Customer
	page_size (B�A

page_token (	B�A
language_code (	B�AK
CreateEntitlementPurchase
sku (	B�A
billing_account (	B�Ac
ChangeOfferPurchase
entitlement (	B�A
new_sku (	B�A
billing_account (	B�AB
purchase_option"
ListPurchasableOffersResponseE
purchasable_offers (2).google.cloud.channel.v1.PurchasableOffer
next_page_token (	"A
PurchasableOffer-
offer (2.google.cloud.channel.v1.Offer"x
#QueryEligibleBillingAccountsRequest>
customer (	B,�A�A&
$cloudchannel.googleapis.com/Customer
skus (	B�A"n
$QueryEligibleBillingAccountsResponseF
sku_purchase_groups (2).google.cloud.channel.v1.SkuPurchaseGroup"}
SkuPurchaseGroup
skus (	[
billing_account_purchase_infos (23.google.cloud.channel.v1.BillingAccountPurchaseInfo"^
BillingAccountPurchaseInfo@
billing_account (2\'.google.cloud.channel.v1.BillingAccount"O
RegisterSubscriberRequest
account (	B�A
service_account (	B�A"+
RegisterSubscriberResponse
topic (	"Q
UnregisterSubscriberRequest
account (	B�A
service_account (	B�A"-
UnregisterSubscriberResponse
topic (	"_
ListSubscribersRequest
account (	B�A
	page_size (B�A

page_token (	B�A"[
ListSubscribersResponse
topic (	
service_accounts (	
next_page_token (	"�
ListEntitlementChangesRequest?
parent (	B/�A�A)
\'cloudchannel.googleapis.com/Entitlement
	page_size (B�A

page_token (	B�A
filter (	B�A"�
ListEntitlementChangesResponseG
entitlement_changes (2*.google.cloud.channel.v1.EntitlementChange
next_page_token (	2�R
CloudChannelService�
ListCustomers-.google.cloud.channel.v1.ListCustomersRequest..google.cloud.channel.v1.ListCustomersResponse"d���^!/v1/{parent=accounts/*}/customersZ97/v1/{parent=accounts/*/channelPartnerLinks/*}/customers�
GetCustomer+.google.cloud.channel.v1.GetCustomerRequest!.google.cloud.channel.v1.Customer"k�Aname���^!/v1/{name=accounts/*/customers/*}Z97/v1/{name=accounts/*/channelPartnerLinks/*/customers/*}�
CheckCloudIdentityAccountsExist?.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest@.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse"B���<"7/v1/{parent=accounts/*}:checkCloudIdentityAccountsExist:*�
CreateCustomer..google.cloud.channel.v1.CreateCustomerRequest!.google.cloud.channel.v1.Customer"x���r"!/v1/{parent=accounts/*}/customers:customerZC"7/v1/{parent=accounts/*/channelPartnerLinks/*}/customers:customer�
UpdateCustomer..google.cloud.channel.v1.UpdateCustomerRequest!.google.cloud.channel.v1.Customer"�����2*/v1/{customer.name=accounts/*/customers/*}:customerZL2@/v1/{customer.name=accounts/*/channelPartnerLinks/*/customers/*}:customer�
DeleteCustomer..google.cloud.channel.v1.DeleteCustomerRequest.google.protobuf.Empty"k�Aname���^*!/v1/{name=accounts/*/customers/*}Z9*7/v1/{name=accounts/*/channelPartnerLinks/*/customers/*}�
ImportCustomer..google.cloud.channel.v1.ImportCustomerRequest!.google.cloud.channel.v1.Customer"x���r"(/v1/{parent=accounts/*}/customers:import:*ZC">/v1/{parent=accounts/*/channelPartnerLinks/*}/customers:import:*�
ProvisionCloudIdentity6.google.cloud.channel.v1.ProvisionCloudIdentityRequest.google.longrunning.Operation"g�A
CustomerOperationMetadata���A"</v1/{customer=accounts/*/customers/*}:provisionCloudIdentity:*�
ListEntitlements0.google.cloud.channel.v1.ListEntitlementsRequest1.google.cloud.channel.v1.ListEntitlementsResponse"8���20/v1/{parent=accounts/*/customers/*}/entitlements�
ListTransferableSkus4.google.cloud.channel.v1.ListTransferableSkusRequest5.google.cloud.channel.v1.ListTransferableSkusResponse"7���1",/v1/{parent=accounts/*}:listTransferableSkus:*�
ListTransferableOffers6.google.cloud.channel.v1.ListTransferableOffersRequest7.google.cloud.channel.v1.ListTransferableOffersResponse"9���3"./v1/{parent=accounts/*}:listTransferableOffers:*�
GetEntitlement..google.cloud.channel.v1.GetEntitlementRequest$.google.cloud.channel.v1.Entitlement"8���20/v1/{name=accounts/*/customers/*/entitlements/*}�
CreateEntitlement1.google.cloud.channel.v1.CreateEntitlementRequest.google.longrunning.Operation"^�A 
EntitlementOperationMetadata���5"0/v1/{parent=accounts/*/customers/*}/entitlements:*�
ChangeParameters0.google.cloud.channel.v1.ChangeParametersRequest.google.longrunning.Operation"o�A 
EntitlementOperationMetadata���F"A/v1/{name=accounts/*/customers/*/entitlements/*}:changeParameters:*�
ChangeRenewalSettings5.google.cloud.channel.v1.ChangeRenewalSettingsRequest.google.longrunning.Operation"t�A 
EntitlementOperationMetadata���K"F/v1/{name=accounts/*/customers/*/entitlements/*}:changeRenewalSettings:*�
ChangeOffer+.google.cloud.channel.v1.ChangeOfferRequest.google.longrunning.Operation"j�A 
EntitlementOperationMetadata���A"</v1/{name=accounts/*/customers/*/entitlements/*}:changeOffer:*�
StartPaidService0.google.cloud.channel.v1.StartPaidServiceRequest.google.longrunning.Operation"o�A 
EntitlementOperationMetadata���F"A/v1/{name=accounts/*/customers/*/entitlements/*}:startPaidService:*�
SuspendEntitlement2.google.cloud.channel.v1.SuspendEntitlementRequest.google.longrunning.Operation"f�A 
EntitlementOperationMetadata���="8/v1/{name=accounts/*/customers/*/entitlements/*}:suspend:*�
CancelEntitlement1.google.cloud.channel.v1.CancelEntitlementRequest.google.longrunning.Operation"o�A*
google.protobuf.EmptyOperationMetadata���<"7/v1/{name=accounts/*/customers/*/entitlements/*}:cancel:*�
ActivateEntitlement3.google.cloud.channel.v1.ActivateEntitlementRequest.google.longrunning.Operation"g�A 
EntitlementOperationMetadata���>"9/v1/{name=accounts/*/customers/*/entitlements/*}:activate:*�
TransferEntitlements4.google.cloud.channel.v1.TransferEntitlementsRequest.google.longrunning.Operation"w�A1
TransferEntitlementsResponseOperationMetadata���="8/v1/{parent=accounts/*/customers/*}:transferEntitlements:*�
TransferEntitlementsToGoogle<.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest.google.longrunning.Operation"x�A*
google.protobuf.EmptyOperationMetadata���E"@/v1/{parent=accounts/*/customers/*}:transferEntitlementsToGoogle:*�
ListChannelPartnerLinks7.google.cloud.channel.v1.ListChannelPartnerLinksRequest8.google.cloud.channel.v1.ListChannelPartnerLinksResponse"3���-+/v1/{parent=accounts/*}/channelPartnerLinks�
GetChannelPartnerLink5.google.cloud.channel.v1.GetChannelPartnerLinkRequest+.google.cloud.channel.v1.ChannelPartnerLink"3���-+/v1/{name=accounts/*/channelPartnerLinks/*}�
CreateChannelPartnerLink8.google.cloud.channel.v1.CreateChannelPartnerLinkRequest+.google.cloud.channel.v1.ChannelPartnerLink"I���C"+/v1/{parent=accounts/*}/channelPartnerLinks:channel_partner_link�
UpdateChannelPartnerLink8.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest+.google.cloud.channel.v1.ChannelPartnerLink"6���02+/v1/{name=accounts/*/channelPartnerLinks/*}:*�
GetCustomerRepricingConfig:.google.cloud.channel.v1.GetCustomerRepricingConfigRequest0.google.cloud.channel.v1.CustomerRepricingConfig"K�Aname���></v1/{name=accounts/*/customers/*/customerRepricingConfigs/*}�
ListCustomerRepricingConfigs<.google.cloud.channel.v1.ListCustomerRepricingConfigsRequest=.google.cloud.channel.v1.ListCustomerRepricingConfigsResponse"M�Aparent���></v1/{parent=accounts/*/customers/*}/customerRepricingConfigs�
CreateCustomerRepricingConfig=.google.cloud.channel.v1.CreateCustomerRepricingConfigRequest0.google.cloud.channel.v1.CustomerRepricingConfig"��A parent,customer_repricing_config���Y"</v1/{parent=accounts/*/customers/*}/customerRepricingConfigs:customer_repricing_config�
UpdateCustomerRepricingConfig=.google.cloud.channel.v1.UpdateCustomerRepricingConfigRequest0.google.cloud.channel.v1.CustomerRepricingConfig"��Acustomer_repricing_config���s2V/v1/{customer_repricing_config.name=accounts/*/customers/*/customerRepricingConfigs/*}:customer_repricing_config�
DeleteCustomerRepricingConfig=.google.cloud.channel.v1.DeleteCustomerRepricingConfigRequest.google.protobuf.Empty"K�Aname���>*</v1/{name=accounts/*/customers/*/customerRepricingConfigs/*}�
 GetChannelPartnerRepricingConfig@.google.cloud.channel.v1.GetChannelPartnerRepricingConfigRequest6.google.cloud.channel.v1.ChannelPartnerRepricingConfig"[�Aname���NL/v1/{name=accounts/*/channelPartnerLinks/*/channelPartnerRepricingConfigs/*}�
"ListChannelPartnerRepricingConfigsB.google.cloud.channel.v1.ListChannelPartnerRepricingConfigsRequestC.google.cloud.channel.v1.ListChannelPartnerRepricingConfigsResponse"]�Aparent���NL/v1/{parent=accounts/*/channelPartnerLinks/*}/channelPartnerRepricingConfigs�
#CreateChannelPartnerRepricingConfigC.google.cloud.channel.v1.CreateChannelPartnerRepricingConfigRequest6.google.cloud.channel.v1.ChannelPartnerRepricingConfig"��A\'parent,channel_partner_repricing_config���p"L/v1/{parent=accounts/*/channelPartnerLinks/*}/channelPartnerRepricingConfigs: channel_partner_repricing_config�
#UpdateChannelPartnerRepricingConfigC.google.cloud.channel.v1.UpdateChannelPartnerRepricingConfigRequest6.google.cloud.channel.v1.ChannelPartnerRepricingConfig"��A channel_partner_repricing_config����2m/v1/{channel_partner_repricing_config.name=accounts/*/channelPartnerLinks/*/channelPartnerRepricingConfigs/*}: channel_partner_repricing_config�
#DeleteChannelPartnerRepricingConfigC.google.cloud.channel.v1.DeleteChannelPartnerRepricingConfigRequest.google.protobuf.Empty"[�Aname���N*L/v1/{name=accounts/*/channelPartnerLinks/*/channelPartnerRepricingConfigs/*}�
ListSkuGroups-.google.cloud.channel.v1.ListSkuGroupsRequest..google.cloud.channel.v1.ListSkuGroupsResponse"2�Aparent���#!/v1/{parent=accounts/*}/skuGroups�
ListSkuGroupBillableSkus8.google.cloud.channel.v1.ListSkuGroupBillableSkusRequest9.google.cloud.channel.v1.ListSkuGroupBillableSkusResponse"A�Aparent���20/v1/{parent=accounts/*/skuGroups/*}/billableSkus�
LookupOffer+.google.cloud.channel.v1.LookupOfferRequest.google.cloud.channel.v1.Offer"K���EC/v1/{entitlement=accounts/*/customers/*/entitlements/*}:lookupOffer�
ListProducts,.google.cloud.channel.v1.ListProductsRequest-.google.cloud.channel.v1.ListProductsResponse"���/v1/products�
ListSkus(.google.cloud.channel.v1.ListSkusRequest).google.cloud.channel.v1.ListSkusResponse"$���/v1/{parent=products/*}/skus�

ListOffers*.google.cloud.channel.v1.ListOffersRequest+.google.cloud.channel.v1.ListOffersResponse"&��� /v1/{parent=accounts/*}/offers�
ListPurchasableSkus3.google.cloud.channel.v1.ListPurchasableSkusRequest4.google.cloud.channel.v1.ListPurchasableSkusResponse"A���;9/v1/{customer=accounts/*/customers/*}:listPurchasableSkus�
ListPurchasableOffers5.google.cloud.channel.v1.ListPurchasableOffersRequest6.google.cloud.channel.v1.ListPurchasableOffersResponse"C���=;/v1/{customer=accounts/*/customers/*}:listPurchasableOffers�
QueryEligibleBillingAccounts<.google.cloud.channel.v1.QueryEligibleBillingAccountsRequest=.google.cloud.channel.v1.QueryEligibleBillingAccountsResponse"J���DB/v1/{customer=accounts/*/customers/*}:queryEligibleBillingAccounts�
RegisterSubscriber2.google.cloud.channel.v1.RegisterSubscriberRequest3.google.cloud.channel.v1.RegisterSubscriberResponse",���&"!/v1/{account=accounts/*}:register:*�
UnregisterSubscriber4.google.cloud.channel.v1.UnregisterSubscriberRequest5.google.cloud.channel.v1.UnregisterSubscriberResponse".���("#/v1/{account=accounts/*}:unregister:*�
ListSubscribers/.google.cloud.channel.v1.ListSubscribersRequest0.google.cloud.channel.v1.ListSubscribersResponse"0���*(/v1/{account=accounts/*}:listSubscribers�
ListEntitlementChanges6.google.cloud.channel.v1.ListEntitlementChangesRequest7.google.cloud.channel.v1.ListEntitlementChangesResponse"Z�Aparent���KI/v1/{parent=accounts/*/customers/*/entitlements/*}:listEntitlementChangesK�Acloudchannel.googleapis.com�A*https://www.googleapis.com/auth/apps.orderBd
com.google.cloud.channel.v1BServiceProtoPZ5cloud.google.com/go/channel/apiv1/channelpb;channelpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

