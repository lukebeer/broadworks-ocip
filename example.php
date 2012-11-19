<?php
// Example to count the number of users in Service Provider..
require_once 'common.php';
$msg = OCISchemaUser::UserGetListInServiceProviderRequest('Enterprise-1');
if ($OCIClient->send($msg)) echo count($OCIClient->getResponse()->userTable['row']);