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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START analyticsadmin_v1alpha_generated_AnalyticsAdminService_GetCalculatedMetric_sync]
use Google\Analytics\Admin\V1alpha\CalculatedMetric;
use Google\Analytics\Admin\V1alpha\Client\AnalyticsAdminServiceClient;
use Google\Analytics\Admin\V1alpha\GetCalculatedMetricRequest;
use Google\ApiCore\ApiException;

/**
 * Lookup for a single CalculatedMetric.
 *
 * @param string $formattedName The name of the CalculatedMetric to get.
 *                              Format: properties/{property_id}/calculatedMetrics/{calculated_metric_id}
 *                              Example: properties/1234/calculatedMetrics/Metric01
 *                              Please see {@see AnalyticsAdminServiceClient::calculatedMetricName()} for help formatting this field.
 */
function get_calculated_metric_sample(string $formattedName): void
{
    // Create a client.
    $analyticsAdminServiceClient = new AnalyticsAdminServiceClient();

    // Prepare the request message.
    $request = (new GetCalculatedMetricRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var CalculatedMetric $response */
        $response = $analyticsAdminServiceClient->getCalculatedMetric($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = AnalyticsAdminServiceClient::calculatedMetricName(
        '[PROPERTY]',
        '[CALCULATED_METRIC]'
    );

    get_calculated_metric_sample($formattedName);
}
// [END analyticsadmin_v1alpha_generated_AnalyticsAdminService_GetCalculatedMetric_sync]
