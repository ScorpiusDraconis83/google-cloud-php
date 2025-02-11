<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/iam/v2/policy.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Iam\V2\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V2\CreatePolicyRequest;
use Google\Cloud\Iam\V2\DeletePolicyRequest;
use Google\Cloud\Iam\V2\GetPolicyRequest;
use Google\Cloud\Iam\V2\ListPoliciesRequest;
use Google\Cloud\Iam\V2\ListPoliciesResponse;
use Google\Cloud\Iam\V2\Policy;
use Google\Cloud\Iam\V2\UpdatePolicyRequest;
use Google\LongRunning\Operation;

/**
 * Service Description: An interface for managing Identity and Access Management (IAM) policies.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $policiesClient = new PoliciesClient();
 * try {
 *     $parent = 'parent';
 *     $policy = new Policy();
 *     $operationResponse = $policiesClient->createPolicy($parent, $policy);
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *     // Alternatively:
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $policiesClient->createPolicy($parent, $policy);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $policiesClient->resumeOperation($operationName, 'createPolicy');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *         $result = $newOperationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $newOperationResponse->getError();
 *         // handleError($error)
 *     }
 * } finally {
 *     $policiesClient->close();
 * }
 * ```
 *
 * @deprecated Please use the new service client {@see \Google\Cloud\Iam\V2\Client\PoliciesClient}.
 */
class PoliciesGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.iam.v2.Policies';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    const SERVICE_ADDRESS = 'iam.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'iam.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ . '/../resources/policies_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ . '/../resources/policies_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ . '/../resources/policies_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/policies_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse(
            $operationName,
            $this->getOperationsClient(),
            $options
        );
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'iam.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Creates a policy.
     *
     * Sample code:
     * ```
     * $policiesClient = new PoliciesClient();
     * try {
     *     $parent = 'parent';
     *     $policy = new Policy();
     *     $operationResponse = $policiesClient->createPolicy($parent, $policy);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $policiesClient->createPolicy($parent, $policy);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $policiesClient->resumeOperation($operationName, 'createPolicy');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $policiesClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource that the policy is attached to, along with the kind of policy
     *                             to create. Format: `policies/{attachment_point}/denypolicies`
     *
     *
     *                             The attachment point is identified by its URL-encoded full resource name,
     *                             which means that the forward-slash character, `/`, must be written as
     *                             `%2F`. For example,
     *                             `policies/cloudresourcemanager.googleapis.com%2Fprojects%2Fmy-project/denypolicies`.
     *
     *                             For organizations and folders, use the numeric ID in the full resource
     *                             name. For projects, you can use the alphanumeric or the numeric ID.
     * @param Policy $policy       Required. The policy to create.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $policyId
     *           The ID to use for this policy, which will become the final component of
     *           the policy's resource name. The ID must contain 3 to 63 characters. It can
     *           contain lowercase letters and numbers, as well as dashes (`-`) and periods
     *           (`.`). The first character must be a lowercase letter.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function createPolicy($parent, $policy, array $optionalArgs = [])
    {
        $request = new CreatePolicyRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setPolicy($policy);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['policyId'])) {
            $request->setPolicyId($optionalArgs['policyId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startOperationsCall(
            'CreatePolicy',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a policy. This action is permanent.
     *
     * Sample code:
     * ```
     * $policiesClient = new PoliciesClient();
     * try {
     *     $name = 'name';
     *     $operationResponse = $policiesClient->deletePolicy($name);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $policiesClient->deletePolicy($name);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $policiesClient->resumeOperation($operationName, 'deletePolicy');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $policiesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the policy to delete. Format:
     *                             `policies/{attachment_point}/denypolicies/{policy_id}`
     *
     *
     *                             Use the URL-encoded full resource name, which means that the forward-slash
     *                             character, `/`, must be written as `%2F`. For example,
     *                             `policies/cloudresourcemanager.googleapis.com%2Fprojects%2Fmy-project/denypolicies/my-policy`.
     *
     *                             For organizations and folders, use the numeric ID in the full resource
     *                             name. For projects, you can use the alphanumeric or the numeric ID.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $etag
     *           Optional. The expected `etag` of the policy to delete. If the value does not match
     *           the value that is stored in IAM, the request fails with a `409` error code
     *           and `ABORTED` status.
     *
     *           If you omit this field, the policy is deleted regardless of its current
     *           `etag`.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function deletePolicy($name, array $optionalArgs = [])
    {
        $request = new DeletePolicyRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['etag'])) {
            $request->setEtag($optionalArgs['etag']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startOperationsCall(
            'DeletePolicy',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Gets a policy.
     *
     * Sample code:
     * ```
     * $policiesClient = new PoliciesClient();
     * try {
     *     $name = 'name';
     *     $response = $policiesClient->getPolicy($name);
     * } finally {
     *     $policiesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the policy to retrieve. Format:
     *                             `policies/{attachment_point}/denypolicies/{policy_id}`
     *
     *
     *                             Use the URL-encoded full resource name, which means that the forward-slash
     *                             character, `/`, must be written as `%2F`. For example,
     *                             `policies/cloudresourcemanager.googleapis.com%2Fprojects%2Fmy-project/denypolicies/my-policy`.
     *
     *                             For organizations and folders, use the numeric ID in the full resource
     *                             name. For projects, you can use the alphanumeric or the numeric ID.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V2\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function getPolicy($name, array $optionalArgs = [])
    {
        $request = new GetPolicyRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Retrieves the policies of the specified kind that are attached to a
     * resource.
     *
     * The response lists only policy metadata. In particular, policy rules are
     * omitted.
     *
     * Sample code:
     * ```
     * $policiesClient = new PoliciesClient();
     * try {
     *     $parent = 'parent';
     *     // Iterate over pages of elements
     *     $pagedResponse = $policiesClient->listPolicies($parent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $policiesClient->listPolicies($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $policiesClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource that the policy is attached to, along with the kind of policy
     *                             to list. Format:
     *                             `policies/{attachment_point}/denypolicies`
     *
     *
     *                             The attachment point is identified by its URL-encoded full resource name,
     *                             which means that the forward-slash character, `/`, must be written as
     *                             `%2F`. For example,
     *                             `policies/cloudresourcemanager.googleapis.com%2Fprojects%2Fmy-project/denypolicies`.
     *
     *                             For organizations and folders, use the numeric ID in the full resource
     *                             name. For projects, you can use the alphanumeric or the numeric ID.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listPolicies($parent, array $optionalArgs = [])
    {
        $request = new ListPoliciesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListPolicies',
            $optionalArgs,
            ListPoliciesResponse::class,
            $request
        );
    }

    /**
     * Updates the specified policy.
     *
     * You can update only the rules and the display name for the policy.
     *
     * To update a policy, you should use a read-modify-write loop:
     *
     * 1. Use [GetPolicy][google.iam.v2.Policies.GetPolicy] to read the current version of the policy.
     * 2. Modify the policy as needed.
     * 3. Use `UpdatePolicy` to write the updated policy.
     *
     * This pattern helps prevent conflicts between concurrent updates.
     *
     * Sample code:
     * ```
     * $policiesClient = new PoliciesClient();
     * try {
     *     $policy = new Policy();
     *     $operationResponse = $policiesClient->updatePolicy($policy);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $policiesClient->updatePolicy($policy);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $policiesClient->resumeOperation($operationName, 'updatePolicy');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $policiesClient->close();
     * }
     * ```
     *
     * @param Policy $policy       Required. The policy to update.
     *
     *                             To prevent conflicting updates, the `etag` value must match the value that
     *                             is stored in IAM. If the `etag` values do not match, the request fails with
     *                             a `409` error code and `ABORTED` status.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function updatePolicy($policy, array $optionalArgs = [])
    {
        $request = new UpdatePolicyRequest();
        $requestParamHeaders = [];
        $request->setPolicy($policy);
        $requestParamHeaders['policy.name'] = $policy->getName();
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startOperationsCall(
            'UpdatePolicy',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }
}
