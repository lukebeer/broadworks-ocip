<?php
require_once 'common.php';

$enterpriseId = 'Enterprise-1';
$groupId      = 'Group-1';

$UserGetListInGroupRequest     = OCISchemaUser::UserGetListInGroupRequest($enterpriseId, $groupId);
$UserGetListInGroupRequestXML  = $OCIClient->ociBuilder->build($UserGetListInGroupRequest);
$UserGetListInGroupResponse    = ($OCIClient->send($UserGetListInGroupRequestXML))
                                    ? $OCIClient->getXMLResponseBody()
                                    : $errorControl->getErrors()
                                  ;

print_r($UserGetListInGroupResponse);