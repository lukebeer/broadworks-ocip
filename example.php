<?php
// Example to print the user list in an enterprises group.
require_once 'common.php';
$msg      = OCISchemaUser::UserGetListInGroupRequest('Enterprise-1', 'Group-1');
$response = ($OCIClient->send($msg)) ? $OCIClient->getResponse() : $errorControl->getErrors();
print_r($response);