<?php
// Example to return users in a Service Provider
require_once 'common.php';
$OCIClient = CoreFactory::getOCIClient('http://example.com/webservice/services/ProvisioningService');
if ($OCIClient->authenticate('username', 'password')) {
    $msg = OCISchemaUser::UserGetListInServiceProviderRequest('Enterprise-1');
    $response = (($OCIClient->send($msg)) && ($OCIClient->getResponse()))
        ? $OCIClient->getResponse()
        : $errorControl->getErrors();
    print_r($response);
}