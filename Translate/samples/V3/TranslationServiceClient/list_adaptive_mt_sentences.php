<?php
/*
 * Copyright 2023 Google LLC
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

// [START translate_v3_generated_TranslationService_ListAdaptiveMtSentences_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Translate\V3\AdaptiveMtSentence;
use Google\Cloud\Translate\V3\Client\TranslationServiceClient;
use Google\Cloud\Translate\V3\ListAdaptiveMtSentencesRequest;

/**
 * Lists all AdaptiveMtSentences under a given file/dataset.
 *
 * @param string $formattedParent The resource name of the project from which to list the Adaptive
 *                                MT files. The following format lists all sentences under a file.
 *                                `projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}/adaptiveMtFiles/{file}`
 *                                The following format lists all sentences within a dataset.
 *                                `projects/{project}/locations/{location}/adaptiveMtDatasets/{dataset}`
 *                                Please see {@see TranslationServiceClient::adaptiveMtFileName()} for help formatting this field.
 */
function list_adaptive_mt_sentences_sample(string $formattedParent): void
{
    // Create a client.
    $translationServiceClient = new TranslationServiceClient();

    // Prepare the request message.
    $request = (new ListAdaptiveMtSentencesRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $translationServiceClient->listAdaptiveMtSentences($request);

        /** @var AdaptiveMtSentence $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
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
    $formattedParent = TranslationServiceClient::adaptiveMtFileName(
        '[PROJECT]',
        '[LOCATION]',
        '[DATASET]',
        '[FILE]'
    );

    list_adaptive_mt_sentences_sample($formattedParent);
}
// [END translate_v3_generated_TranslationService_ListAdaptiveMtSentences_sync]
