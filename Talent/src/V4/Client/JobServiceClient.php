<?php
/*
 * Copyright 2024 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/talent/v4/job_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Talent\V4\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Talent\V4\BatchCreateJobsRequest;
use Google\Cloud\Talent\V4\BatchDeleteJobsRequest;
use Google\Cloud\Talent\V4\BatchUpdateJobsRequest;
use Google\Cloud\Talent\V4\CreateJobRequest;
use Google\Cloud\Talent\V4\DeleteJobRequest;
use Google\Cloud\Talent\V4\GetJobRequest;
use Google\Cloud\Talent\V4\Job;
use Google\Cloud\Talent\V4\ListJobsRequest;
use Google\Cloud\Talent\V4\SearchJobsRequest;
use Google\Cloud\Talent\V4\SearchJobsResponse;
use Google\Cloud\Talent\V4\UpdateJobRequest;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: A service handles job management, including job CRUD, enumeration and search.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface batchCreateJobsAsync(BatchCreateJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface batchDeleteJobsAsync(BatchDeleteJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface batchUpdateJobsAsync(BatchUpdateJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createJobAsync(CreateJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteJobAsync(DeleteJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getJobAsync(GetJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listJobsAsync(ListJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface searchJobsAsync(SearchJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface searchJobsForAlertAsync(SearchJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateJobAsync(UpdateJobRequest $request, array $optionalArgs = [])
 */
final class JobServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.talent.v4.JobService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'jobs.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'jobs.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/jobs',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/job_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/job_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/job_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/job_service_rest_client_config.php',
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
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Create the default operation client for the service.
     *
     * @param array $options ClientOptions for the client.
     *
     * @return OperationsClient
     */
    private function createOperationsClient(array $options)
    {
        // Unset client-specific configuration options
        unset($options['serviceName'], $options['clientConfig'], $options['descriptorsConfigPath']);

        if (isset($options['operationsClient'])) {
            return $options['operationsClient'];
        }

        return new OperationsClient($options);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a company
     * resource.
     *
     * @param string $project
     * @param string $tenant
     * @param string $company
     *
     * @return string The formatted company resource.
     */
    public static function companyName(string $project, string $tenant, string $company): string
    {
        return self::getPathTemplate('company')->render([
            'project' => $project,
            'tenant' => $tenant,
            'company' => $company,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a job
     * resource.
     *
     * @param string $project
     * @param string $tenant
     * @param string $job
     *
     * @return string The formatted job resource.
     */
    public static function jobName(string $project, string $tenant, string $job): string
    {
        return self::getPathTemplate('job')->render([
            'project' => $project,
            'tenant' => $tenant,
            'job' => $job,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a tenant
     * resource.
     *
     * @param string $project
     * @param string $tenant
     *
     * @return string The formatted tenant resource.
     */
    public static function tenantName(string $project, string $tenant): string
    {
        return self::getPathTemplate('tenant')->render([
            'project' => $project,
            'tenant' => $tenant,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - company: projects/{project}/tenants/{tenant}/companies/{company}
     * - job: projects/{project}/tenants/{tenant}/jobs/{job}
     * - tenant: projects/{project}/tenants/{tenant}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'jobs.googleapis.com:443'.
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

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Begins executing a batch create jobs operation.
     *
     * The async variant is {@see JobServiceClient::batchCreateJobsAsync()} .
     *
     * @example samples/V4/JobServiceClient/batch_create_jobs.php
     *
     * @param BatchCreateJobsRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchCreateJobs(BatchCreateJobsRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('BatchCreateJobs', $request, $callOptions)->wait();
    }

    /**
     * Begins executing a batch delete jobs operation.
     *
     * The async variant is {@see JobServiceClient::batchDeleteJobsAsync()} .
     *
     * @example samples/V4/JobServiceClient/batch_delete_jobs.php
     *
     * @param BatchDeleteJobsRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchDeleteJobs(BatchDeleteJobsRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('BatchDeleteJobs', $request, $callOptions)->wait();
    }

    /**
     * Begins executing a batch update jobs operation.
     *
     * The async variant is {@see JobServiceClient::batchUpdateJobsAsync()} .
     *
     * @example samples/V4/JobServiceClient/batch_update_jobs.php
     *
     * @param BatchUpdateJobsRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchUpdateJobs(BatchUpdateJobsRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('BatchUpdateJobs', $request, $callOptions)->wait();
    }

    /**
     * Creates a new job.
     *
     * Typically, the job becomes searchable within 10 seconds, but it may take
     * up to 5 minutes.
     *
     * The async variant is {@see JobServiceClient::createJobAsync()} .
     *
     * @example samples/V4/JobServiceClient/create_job.php
     *
     * @param CreateJobRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Job
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createJob(CreateJobRequest $request, array $callOptions = []): Job
    {
        return $this->startApiCall('CreateJob', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified job.
     *
     * Typically, the job becomes unsearchable within 10 seconds, but it may take
     * up to 5 minutes.
     *
     * The async variant is {@see JobServiceClient::deleteJobAsync()} .
     *
     * @example samples/V4/JobServiceClient/delete_job.php
     *
     * @param DeleteJobRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteJob(DeleteJobRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteJob', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the specified job, whose status is OPEN or recently EXPIRED
     * within the last 90 days.
     *
     * The async variant is {@see JobServiceClient::getJobAsync()} .
     *
     * @example samples/V4/JobServiceClient/get_job.php
     *
     * @param GetJobRequest $request     A request to house fields associated with the call.
     * @param array         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Job
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getJob(GetJobRequest $request, array $callOptions = []): Job
    {
        return $this->startApiCall('GetJob', $request, $callOptions)->wait();
    }

    /**
     * Lists jobs by filter.
     *
     * The async variant is {@see JobServiceClient::listJobsAsync()} .
     *
     * @example samples/V4/JobServiceClient/list_jobs.php
     *
     * @param ListJobsRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listJobs(ListJobsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListJobs', $request, $callOptions);
    }

    /**
     * Searches for jobs using the provided
     * [SearchJobsRequest][google.cloud.talent.v4.SearchJobsRequest].
     *
     * This call constrains the
     * [visibility][google.cloud.talent.v4.Job.visibility] of jobs present in the
     * database, and only returns jobs that the caller has permission to search
     * against.
     *
     * The async variant is {@see JobServiceClient::searchJobsAsync()} .
     *
     * @example samples/V4/JobServiceClient/search_jobs.php
     *
     * @param SearchJobsRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SearchJobsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function searchJobs(SearchJobsRequest $request, array $callOptions = []): SearchJobsResponse
    {
        return $this->startApiCall('SearchJobs', $request, $callOptions)->wait();
    }

    /**
     * Searches for jobs using the provided
     * [SearchJobsRequest][google.cloud.talent.v4.SearchJobsRequest].
     *
     * This API call is intended for the use case of targeting passive job
     * seekers (for example, job seekers who have signed up to receive email
     * alerts about potential job opportunities), it has different algorithmic
     * adjustments that are designed to specifically target passive job seekers.
     *
     * This call constrains the
     * [visibility][google.cloud.talent.v4.Job.visibility] of jobs present in the
     * database, and only returns jobs the caller has permission to search
     * against.
     *
     * The async variant is {@see JobServiceClient::searchJobsForAlertAsync()} .
     *
     * @example samples/V4/JobServiceClient/search_jobs_for_alert.php
     *
     * @param SearchJobsRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SearchJobsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function searchJobsForAlert(SearchJobsRequest $request, array $callOptions = []): SearchJobsResponse
    {
        return $this->startApiCall('SearchJobsForAlert', $request, $callOptions)->wait();
    }

    /**
     * Updates specified job.
     *
     * Typically, updated contents become visible in search results within 10
     * seconds, but it may take up to 5 minutes.
     *
     * The async variant is {@see JobServiceClient::updateJobAsync()} .
     *
     * @example samples/V4/JobServiceClient/update_job.php
     *
     * @param UpdateJobRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Job
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateJob(UpdateJobRequest $request, array $callOptions = []): Job
    {
        return $this->startApiCall('UpdateJob', $request, $callOptions)->wait();
    }
}
