<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appgateways/v1/app_gateways_service.proto

namespace Google\Cloud\BeyondCorp\AppGateways\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BeyondCorp.CreateAppGateway.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.appgateways.v1.CreateAppGatewayRequest</code>
 */
class CreateAppGatewayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource project name of the AppGateway location using the
     * form: `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. User-settable AppGateway resource ID.
     *  * Must start with a letter.
     *  * Must contain between 4-63 characters from `/[a-z][0-9]-/`.
     *  * Must end with a number or a letter.
     *
     * Generated from protobuf field <code>string app_gateway_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $app_gateway_id = '';
    /**
     * Required. A BeyondCorp AppGateway resource.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appgateways.v1.AppGateway app_gateway = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $app_gateway = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. If set, validates request by executing a dry-run which would not
     * alter the resource in any way.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                                             $parent       Required. The resource project name of the AppGateway location using the
     *                                                                         form: `projects/{project_id}/locations/{location_id}`
     *                                                                         Please see {@see AppGatewaysServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\BeyondCorp\AppGateways\V1\AppGateway $appGateway   Required. A BeyondCorp AppGateway resource.
     * @param string                                             $appGatewayId Optional. User-settable AppGateway resource ID.
     *                                                                         * Must start with a letter.
     *                                                                         * Must contain between 4-63 characters from `/[a-z][0-9]-/`.
     *                                                                         * Must end with a number or a letter.
     *
     * @return \Google\Cloud\BeyondCorp\AppGateways\V1\CreateAppGatewayRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\BeyondCorp\AppGateways\V1\AppGateway $appGateway, string $appGatewayId): self
    {
        return (new self())
            ->setParent($parent)
            ->setAppGateway($appGateway)
            ->setAppGatewayId($appGatewayId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource project name of the AppGateway location using the
     *           form: `projects/{project_id}/locations/{location_id}`
     *     @type string $app_gateway_id
     *           Optional. User-settable AppGateway resource ID.
     *            * Must start with a letter.
     *            * Must contain between 4-63 characters from `/[a-z][0-9]-/`.
     *            * Must end with a number or a letter.
     *     @type \Google\Cloud\BeyondCorp\AppGateways\V1\AppGateway $app_gateway
     *           Required. A BeyondCorp AppGateway resource.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and t
     *           he request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. If set, validates request by executing a dry-run which would not
     *           alter the resource in any way.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Appgateways\V1\AppGatewaysService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource project name of the AppGateway location using the
     * form: `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource project name of the AppGateway location using the
     * form: `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. User-settable AppGateway resource ID.
     *  * Must start with a letter.
     *  * Must contain between 4-63 characters from `/[a-z][0-9]-/`.
     *  * Must end with a number or a letter.
     *
     * Generated from protobuf field <code>string app_gateway_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAppGatewayId()
    {
        return $this->app_gateway_id;
    }

    /**
     * Optional. User-settable AppGateway resource ID.
     *  * Must start with a letter.
     *  * Must contain between 4-63 characters from `/[a-z][0-9]-/`.
     *  * Must end with a number or a letter.
     *
     * Generated from protobuf field <code>string app_gateway_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAppGatewayId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_gateway_id = $var;

        return $this;
    }

    /**
     * Required. A BeyondCorp AppGateway resource.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appgateways.v1.AppGateway app_gateway = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BeyondCorp\AppGateways\V1\AppGateway|null
     */
    public function getAppGateway()
    {
        return $this->app_gateway;
    }

    public function hasAppGateway()
    {
        return isset($this->app_gateway);
    }

    public function clearAppGateway()
    {
        unset($this->app_gateway);
    }

    /**
     * Required. A BeyondCorp AppGateway resource.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appgateways.v1.AppGateway app_gateway = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BeyondCorp\AppGateways\V1\AppGateway $var
     * @return $this
     */
    public function setAppGateway($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BeyondCorp\AppGateways\V1\AppGateway::class);
        $this->app_gateway = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. If set, validates request by executing a dry-run which would not
     * alter the resource in any way.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set, validates request by executing a dry-run which would not
     * alter the resource in any way.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

