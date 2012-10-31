<?php
require_once 'common.php';
$msg          = OCISchemaUser::UserGetListInGroupRequest('Enterprise-1', 'Group-1');
$xml          = $OCIClient->ociBuilder->build($msg);
$response     = ($OCIClient->send($xml)) ? $OCIClient->getXMLResponseBody() : $errorControl->getErrors();
print_r($response);
