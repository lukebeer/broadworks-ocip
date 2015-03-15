## Disable Call Forward Always for all users in a group

This example performs the following.

* Send UserGetListInGroupRequest to obtain a list of users in the group
* Loop over all users in the result for the user id
* Send UserCallForwardingAlwatsGetRequest to identify if they have the service active
* If the service is active, send a UserCallForwardingAlwaysModifyRequest to set isActive to false
* Repeat until user list is exhausted

``` php
<?php
require_once 'Broadworks_OCIP/common.php';

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetListInGroupRequest;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingAlways;

$client = Broadworks_OCIP\CoreFactory::getTCPClient(OCIP_HOST);
$client->login(OCIP_USER, OCIP_PASS);

$request  = new UserGetListInGroupRequest('enterprise-id', 'group-id');
$response = $request->get($client);
foreach ($response->getUserTable()->getAllRows() as $row) {
    $request  = new OCISchemaServiceCallForwardingAlways\UserCallForwardingAlwaysGetRequest($row[0]);
    $response = $request->get($client);
    if ($response->getIsActive() === 'true') {
        $request = new OCISchemaServiceCallForwardingAlways\UserCallForwardingAlwaysModifyRequest($row[0], 'false');
        $request->get($client);
    }
}
```