<?php
require_once 'common.php';

$msg = $OCIBuilder->build(
    OCISchemaUser::UserGetListInGroupRequest('Enterprise-1', 'Group-1'),
    $OCIClient->getSessionId()
);

if ($OCIClient->send($msg)) {
    $response = $OCIClient->getXMLResponseBody();
    print_r($response);
} else {
    print_r($errorControl->getErrors());
}