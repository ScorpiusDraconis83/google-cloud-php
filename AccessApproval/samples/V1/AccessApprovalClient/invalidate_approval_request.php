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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START accessapproval_v1_generated_AccessApproval_InvalidateApprovalRequest_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\AccessApproval\V1\ApprovalRequest;
use Google\Cloud\AccessApproval\V1\Client\AccessApprovalClient;
use Google\Cloud\AccessApproval\V1\InvalidateApprovalRequestMessage;

/**
 * Invalidates an existing ApprovalRequest. Returns the updated
 * ApprovalRequest.
 *
 * NOTE: This does not deny access to the resource if another request has been
 * made and approved. It only invalidates a single approval.
 *
 * Returns FAILED_PRECONDITION if the request exists but is not in an approved
 * state.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function invalidate_approval_request_sample(): void
{
    // Create a client.
    $accessApprovalClient = new AccessApprovalClient();

    // Prepare the request message.
    $request = new InvalidateApprovalRequestMessage();

    // Call the API and handle any network failures.
    try {
        /** @var ApprovalRequest $response */
        $response = $accessApprovalClient->invalidateApprovalRequest($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}
// [END accessapproval_v1_generated_AccessApproval_InvalidateApprovalRequest_sync]
