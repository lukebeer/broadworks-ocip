<?php
// What a hack....
$files = [
    'api/OCISchemaAS/OCISchemaLogin.php',
    'api/OCISchemaAS/OCISchemaUser.php',
    'core/ErrorControl.php',
    'core/OCIBuilder.php',
    'core/OCIClient.php',
    'core/OCIDataTypes.php',
    'core/OCISession.php'
];
foreach ($files as $file) { require_once($file); }

$errorControl = new ErrorControl();
$OCIClient = new OCIClient(
    'host',
    'user',
    'pass',
    $errorControl
);

$OCIBuilder = new OCIBuilder();
$msg = $OCIBuilder->build(OCISchemaUser::UserGetListInGroupRequest('Enterprise-1', 'GroupName'), $OCIClient->getSessionId());
$OCIClient->send($msg);
$response = $OCIClient->getXMLResponseBody();

print_r($response);
print_r($errorControl->getErrors());