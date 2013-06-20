<?php
// Include the required common file
require_once '../common.php';

// Get the OCIClient and set the url to send requests to
$client = CoreFactory::getOCIClient('http://example.com/webservice/services/ProvisioningService');

// Try and login
if ($client->login('username', 'password')) {

	// Generate OCI-P request
    $msg = OCISchemaUser::UserGetListInServiceProviderRequest('Enterprise-1');

    // Build then send the request
    $client->send($msg);

	// If we have a valid response, print it;
    if ($response = $client->getResponse()) print_r($response);
}

// Error control comes from CoreFactory, singleton.
if ($errorControl->hasErrors()) print_r($errorControl->getErrors());