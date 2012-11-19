<?php
// Example to return users in a Service Provider
require_once 'common.php';
$msg = OCISchemaUser::UserGetListInServiceProviderRequest('Enterprise-1');
$response = (($OCIClient->send($msg)) && ($OCIClient->getResponse()))
    ? $OCIClient->getResponse()
    : $errorControl->getErrors();
print_r($response);