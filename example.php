<?php
require_once 'common.php';

$enterpriseId = 'Enterprise-1';
$groupId      = 'Group-1';
$msg          = OCISchemaUser::UserGetListInGroupRequest($enterpriseId, $groupId);
$xml          = $OCIClient->ociBuilder->build($msg);
$response     = ($OCIClient->send($xml)) ? $OCIClient->getXMLResponseBody() : $errorControl->getErrors();

print_r($response);