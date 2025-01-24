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
 * https://github.com/googleapis/googleapis/blob/master/google/pubsub/v1/pubsub.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\PubSub\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\InsecureCredentialsWrapper;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\PubSub\V1\DeleteTopicRequest;
use Google\Cloud\PubSub\V1\DetachSubscriptionRequest;
use Google\Cloud\PubSub\V1\DetachSubscriptionResponse;
use Google\Cloud\PubSub\V1\GetTopicRequest;
use Google\Cloud\PubSub\V1\ListTopicSnapshotsRequest;
use Google\Cloud\PubSub\V1\ListTopicSubscriptionsRequest;
use Google\Cloud\PubSub\V1\ListTopicsRequest;
use Google\Cloud\PubSub\V1\PublishRequest;
use Google\Cloud\PubSub\V1\PublishResponse;
use Google\Cloud\PubSub\V1\Topic;
use Google\Cloud\PubSub\V1\UpdateTopicRequest;
use Grpc\ChannelCredentials;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: The service that an application uses to manipulate topics, and to send
 * messages to a topic.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<Topic> createTopicAsync(Topic $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteTopicAsync(DeleteTopicRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<DetachSubscriptionResponse> detachSubscriptionAsync(DetachSubscriptionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Topic> getTopicAsync(GetTopicRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listTopicSnapshotsAsync(ListTopicSnapshotsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listTopicSubscriptionsAsync(ListTopicSubscriptionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listTopicsAsync(ListTopicsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PublishResponse> publishAsync(PublishRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Topic> updateTopicAsync(UpdateTopicRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TestIamPermissionsResponse> testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 */
final class PublisherClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.pubsub.v1.Publisher';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'pubsub.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'pubsub.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/pubsub',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/publisher_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/publisher_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/publisher_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/publisher_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * _deleted-topic_ resource.
     *
     * @return string The formatted _deleted-topic_ resource.
     */
    public static function deletedTopicName(): string
    {
        return self::getPathTemplate('deletedTopic')->render([]);
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
     * Formats a string containing the fully-qualified path to represent a
     * project_topic resource.
     *
     * @param string $project
     * @param string $topic
     *
     * @return string The formatted project_topic resource.
     */
    public static function projectTopicName(string $project, string $topic): string
    {
        return self::getPathTemplate('projectTopic')->render([
            'project' => $project,
            'topic' => $topic,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a schema
     * resource.
     *
     * @param string $project
     * @param string $schema
     *
     * @return string The formatted schema resource.
     */
    public static function schemaName(string $project, string $schema): string
    {
        return self::getPathTemplate('schema')->render([
            'project' => $project,
            'schema' => $schema,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a subscription
     * resource.
     *
     * @param string $project
     * @param string $subscription
     *
     * @return string The formatted subscription resource.
     */
    public static function subscriptionName(string $project, string $subscription): string
    {
        return self::getPathTemplate('subscription')->render([
            'project' => $project,
            'subscription' => $subscription,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a topic
     * resource.
     *
     * @param string $project
     * @param string $topic
     *
     * @return string The formatted topic resource.
     */
    public static function topicName(string $project, string $topic): string
    {
        return self::getPathTemplate('topic')->render([
            'project' => $project,
            'topic' => $topic,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - deletedTopic: _deleted-topic_
     * - project: projects/{project}
     * - projectTopic: projects/{project}/topics/{topic}
     * - schema: projects/{project}/schemas/{schema}
     * - subscription: projects/{project}/subscriptions/{subscription}
     * - topic: projects/{project}/topics/{topic}
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
     * Setting the "PUBSUB_EMULATOR_HOST" environment variable will automatically set
     * the API Endpoint to the value specified in the variable, as well as ensure that
     * empty credentials are used in the transport layer.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'pubsub.googleapis.com:443'.
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
        $options = $this->setDefaultEmulatorConfig($options);
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
     * Creates the given topic with the given name. See the [resource name rules]
     * (https://cloud.google.com/pubsub/docs/pubsub-basics#resource_names).
     *
     * The async variant is {@see PublisherClient::createTopicAsync()} .
     *
     * @example samples/V1/PublisherClient/create_topic.php
     *
     * @param Topic $request     A request to house fields associated with the call.
     * @param array $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Topic
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createTopic(Topic $request, array $callOptions = []): Topic
    {
        return $this->startApiCall('CreateTopic', $request, $callOptions)->wait();
    }

    /**
     * Deletes the topic with the given name. Returns `NOT_FOUND` if the topic
     * does not exist. After a topic is deleted, a new topic may be created with
     * the same name; this is an entirely new topic with none of the old
     * configuration or subscriptions. Existing subscriptions to this topic are
     * not deleted, but their `topic` field is set to `_deleted-topic_`.
     *
     * The async variant is {@see PublisherClient::deleteTopicAsync()} .
     *
     * @example samples/V1/PublisherClient/delete_topic.php
     *
     * @param DeleteTopicRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
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
    public function deleteTopic(DeleteTopicRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteTopic', $request, $callOptions)->wait();
    }

    /**
     * Detaches a subscription from this topic. All messages retained in the
     * subscription are dropped. Subsequent `Pull` and `StreamingPull` requests
     * will return FAILED_PRECONDITION. If the subscription is a push
     * subscription, pushes to the endpoint will stop.
     *
     * The async variant is {@see PublisherClient::detachSubscriptionAsync()} .
     *
     * @example samples/V1/PublisherClient/detach_subscription.php
     *
     * @param DetachSubscriptionRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DetachSubscriptionResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function detachSubscription(DetachSubscriptionRequest $request, array $callOptions = []): DetachSubscriptionResponse
    {
        return $this->startApiCall('DetachSubscription', $request, $callOptions)->wait();
    }

    /**
     * Gets the configuration of a topic.
     *
     * The async variant is {@see PublisherClient::getTopicAsync()} .
     *
     * @example samples/V1/PublisherClient/get_topic.php
     *
     * @param GetTopicRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Topic
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTopic(GetTopicRequest $request, array $callOptions = []): Topic
    {
        return $this->startApiCall('GetTopic', $request, $callOptions)->wait();
    }

    /**
     * Lists the names of the snapshots on this topic. Snapshots are used in
     * [Seek](https://cloud.google.com/pubsub/docs/replay-overview) operations,
     * which allow you to manage message acknowledgments in bulk. That is, you can
     * set the acknowledgment state of messages in an existing subscription to the
     * state captured by a snapshot.
     *
     * The async variant is {@see PublisherClient::listTopicSnapshotsAsync()} .
     *
     * @example samples/V1/PublisherClient/list_topic_snapshots.php
     *
     * @param ListTopicSnapshotsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
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
    public function listTopicSnapshots(ListTopicSnapshotsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTopicSnapshots', $request, $callOptions);
    }

    /**
     * Lists the names of the attached subscriptions on this topic.
     *
     * The async variant is {@see PublisherClient::listTopicSubscriptionsAsync()} .
     *
     * @example samples/V1/PublisherClient/list_topic_subscriptions.php
     *
     * @param ListTopicSubscriptionsRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
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
    public function listTopicSubscriptions(ListTopicSubscriptionsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTopicSubscriptions', $request, $callOptions);
    }

    /**
     * Lists matching topics.
     *
     * The async variant is {@see PublisherClient::listTopicsAsync()} .
     *
     * @example samples/V1/PublisherClient/list_topics.php
     *
     * @param ListTopicsRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
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
    public function listTopics(ListTopicsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTopics', $request, $callOptions);
    }

    /**
     * Adds one or more messages to the topic. Returns `NOT_FOUND` if the topic
     * does not exist.
     *
     * The async variant is {@see PublisherClient::publishAsync()} .
     *
     * @example samples/V1/PublisherClient/publish.php
     *
     * @param PublishRequest $request     A request to house fields associated with the call.
     * @param array          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PublishResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function publish(PublishRequest $request, array $callOptions = []): PublishResponse
    {
        return $this->startApiCall('Publish', $request, $callOptions)->wait();
    }

    /**
     * Updates an existing topic by updating the fields specified in the update
     * mask. Note that certain properties of a topic are not modifiable.
     *
     * The async variant is {@see PublisherClient::updateTopicAsync()} .
     *
     * @example samples/V1/PublisherClient/update_topic.php
     *
     * @param UpdateTopicRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Topic
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateTopic(UpdateTopicRequest $request, array $callOptions = []): Topic
    {
        return $this->startApiCall('UpdateTopic', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see PublisherClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/PublisherClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see PublisherClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/PublisherClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see PublisherClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/PublisherClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }

    /** Configure the gapic configuration to use a service emulator. */
    private function setDefaultEmulatorConfig(array $options): array
    {
        $emulatorHost = getenv('PUBSUB_EMULATOR_HOST');
        if (empty($emulatorHost)) {
            return $options;
        }

        if ($scheme = parse_url($emulatorHost, PHP_URL_SCHEME)) {
            $search = $scheme . '://';
            $emulatorHost = str_replace($search, '', $emulatorHost);
        }

        $options['apiEndpoint'] ??= $emulatorHost;
        $options['transportConfig']['grpc']['stubOpts']['credentials'] ??= ChannelCredentials::createInsecure();
        $options['credentials'] ??= new InsecureCredentialsWrapper();
        return $options;
    }
}
