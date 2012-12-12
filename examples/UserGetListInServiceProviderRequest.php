<?php
// Include the required common file
require_once '../common.php';

// Get the OCIClient and set the url to send requests to
$OCIClient = CoreFactory::getOCIClient('http://bsews1.ipt.intechnology.co.uk/webservice/services/ProvisioningService');

// Try and login
if ($OCIClient->login('username', 'password')) {

	// Generate OCI-P request
    $msg = OCISchemaUser::UserGetListInServiceProviderRequest('Enterprise-1');

	// If we have a valid response, assign it to $response, else set $response to errors
    $response = (($OCIClient->send($msg)) && ($OCIClient->getResponse()))
        ? $OCIClient->getResponse()
        : $errorControl->getErrors();

	// Print out response, hopefully, the userlist.
    print_r($response);
}
