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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/bigquery/storage/v1/storage.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\BigQuery\Storage\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\ServerStream;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\BigQuery\Storage\V1\CreateReadSessionRequest;
use Google\Cloud\BigQuery\Storage\V1\ReadRowsRequest;
use Google\Cloud\BigQuery\Storage\V1\ReadSession;
use Google\Cloud\BigQuery\Storage\V1\SplitReadStreamRequest;
use Google\Cloud\BigQuery\Storage\V1\SplitReadStreamResponse;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: BigQuery Read API.
 *
 * The Read API can be used to read data from BigQuery.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<ReadSession> createReadSessionAsync(CreateReadSessionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<SplitReadStreamResponse> splitReadStreamAsync(SplitReadStreamRequest $request, array $optionalArgs = [])
 */
final class BigQueryReadClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.bigquery.storage.v1.BigQueryRead';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'bigquerystorage.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'bigquerystorage.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/bigquery',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/big_query_read_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/big_query_read_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/big_query_read_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/big_query_read_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a read_session
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $session
     *
     * @return string The formatted read_session resource.
     */
    public static function readSessionName(string $project, string $location, string $session): string
    {
        return self::getPathTemplate('readSession')->render([
            'project' => $project,
            'location' => $location,
            'session' => $session,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a read_stream
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $session
     * @param string $stream
     *
     * @return string The formatted read_stream resource.
     */
    public static function readStreamName(string $project, string $location, string $session, string $stream): string
    {
        return self::getPathTemplate('readStream')->render([
            'project' => $project,
            'location' => $location,
            'session' => $session,
            'stream' => $stream,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a table
     * resource.
     *
     * @param string $project
     * @param string $dataset
     * @param string $table
     *
     * @return string The formatted table resource.
     */
    public static function tableName(string $project, string $dataset, string $table): string
    {
        return self::getPathTemplate('table')->render([
            'project' => $project,
            'dataset' => $dataset,
            'table' => $table,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - project: projects/{project}
     * - readSession: projects/{project}/locations/{location}/sessions/{session}
     * - readStream: projects/{project}/locations/{location}/sessions/{session}/streams/{stream}
     * - table: projects/{project}/datasets/{dataset}/tables/{table}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string  $formattedName The formatted name string
     * @param ?string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, ?string $template = null): array
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
     *           as "<uri>:<port>". Default 'bigquerystorage.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *           *Important*: If you accept a credential configuration (credential
     *           JSON/File/Stream) from an external source for authentication to Google Cloud
     *           Platform, you must validate it before providing it to any Google API or library.
     *           Providing an unvalidated credential configuration to Google APIs can compromise
     *           the security of your systems and data. For more information {@see
     *           https://cloud.google.com/docs/authentication/external/externally-sourced-credentials}
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
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
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
     * Creates a new read session. A read session divides the contents of a
     * BigQuery table into one or more streams, which can then be used to read
     * data from the table. The read session also specifies properties of the
     * data to be read, such as a list of columns or a push-down filter describing
     * the rows to be returned.
     *
     * A particular row can be read by at most one stream. When the caller has
     * reached the end of each stream in the session, then all the data in the
     * table has been read.
     *
     * Data is assigned to each stream such that roughly the same number of
     * rows can be read from each stream. Because the server-side unit for
     * assigning data is collections of rows, the API does not guarantee that
     * each stream will return the same number or rows. Additionally, the
     * limits are enforced based on the number of pre-filtered rows, so some
     * filters can lead to lopsided assignments.
     *
     * Read sessions automatically expire 6 hours after they are created and do
     * not require manual clean-up by the caller.
     *
     * The async variant is {@see BigQueryReadClient::createReadSessionAsync()} .
     *
     * @example samples/V1/BigQueryReadClient/create_read_session.php
     *
     * @param CreateReadSessionRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ReadSession
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createReadSession(CreateReadSessionRequest $request, array $callOptions = []): ReadSession
    {
        return $this->startApiCall('CreateReadSession', $request, $callOptions)->wait();
    }

    /**
     * Reads rows from the stream in the format prescribed by the ReadSession.
     * Each response contains one or more table rows, up to a maximum of 100 MiB
     * per response; read requests which attempt to read individual rows larger
     * than 100 MiB will fail.
     *
     * Each request also returns a set of stream statistics reflecting the current
     * state of the stream.
     *
     * @example samples/V1/BigQueryReadClient/read_rows.php
     *
     * @param ReadRowsRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return ServerStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function readRows(ReadRowsRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('ReadRows', $request, $callOptions);
    }

    /**
     * Splits a given `ReadStream` into two `ReadStream` objects. These
     * `ReadStream` objects are referred to as the primary and the residual
     * streams of the split. The original `ReadStream` can still be read from in
     * the same manner as before. Both of the returned `ReadStream` objects can
     * also be read from, and the rows returned by both child streams will be
     * the same as the rows read from the original stream.
     *
     * Moreover, the two child streams will be allocated back-to-back in the
     * original `ReadStream`. Concretely, it is guaranteed that for streams
     * original, primary, and residual, that original[0-j] = primary[0-j] and
     * original[j-n] = residual[0-m] once the streams have been read to
     * completion.
     *
     * The async variant is {@see BigQueryReadClient::splitReadStreamAsync()} .
     *
     * @example samples/V1/BigQueryReadClient/split_read_stream.php
     *
     * @param SplitReadStreamRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SplitReadStreamResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function splitReadStream(SplitReadStreamRequest $request, array $callOptions = []): SplitReadStreamResponse
    {
        return $this->startApiCall('SplitReadStream', $request, $callOptions)->wait();
    }
}
