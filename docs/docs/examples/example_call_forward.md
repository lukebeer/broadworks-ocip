## Disable Call Forward Always for all users in a group

This example performs the following.

* Send UserGetListInGroupRequest to obtain a list of users in the group
* Loop over all users in the result for the user id ($row[0])
* Send UserCallForwardingAlwaysGetRequest to identify if they have the service active
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
------------
## Get Call Forwarding Always for all group users as table

This example performs the following.

* Create a new TableType object and set column headings for the data you are going to use
* Send UserGetListInGroupRequest to obtain a list of users in the group
* Loop over all users in the result for the user id ($row[0])
* Foreach user in the group, check if there is a valid response object
* If response, add a new row to the table by passing an array of values matching column headings
* Render table output to screen by calling getValue() on table object


``` php
<?php
require_once 'Broadworks_OCIP/common.php';

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetListInGroupRequest;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingAlways;

$client = Broadworks_OCIP\CoreFactory::getTCPClient(OCIP_HOST);
$client->login(OCIP_USER, OCIP_PASS);

$table = new TableType('callForwardAlwaysTable');
$table->setColHeadings(['User Id', 'Is Active', 'Forwarding To', 'Is Ring Splash Active']);

$request  = new UserGetListInGroupRequest('enterprise-1', 'group-1');
$response = $request->get($client);

foreach ($response->getUserTable()->getAllRows() as $row) {
    $request  = new OCISchemaServiceCallForwardingAlways\UserCallForwardingAlwaysGetRequest($row[0]);
    $response = $request->get($client);
    if ($response) {
        $table->addRow([
            $row[0],
            $response->getIsActive(),
            $response->getForwardToPhoneNumber(),
            $response->getIsRingSplashActive()
        ]);
    }
}

echo $table->getValue();
```

Spits out:
```
+---------------------+-----------+---------------+-----------------------+
| User Id             | Is Active | Forwarding To | Is Ring Splash Active |
+---------------------+-----------+---------------+-----------------------+
| user-1@example.com  | false     | 01234123456   | false                 |
| user-2@example.com  | false     | 01234123456   | false                 |
| user-3@example.com  | false     | 01234123456   | true                  |
| user-4@example.com  | false     | 01234123456   | false                 |
| user-5@example.com  | false     | 01234123456   | false                 |
| user-6@example.com  | false     | 01234123456   | false                 |
| user-7@example.com  | true      | 01234123456   | false                 |
| user-8@example.com  | false     | 01234123456   | false                 |
| user-9@example.com  | false     | 01234123456   | false                 |
| user-10@example.com | false     | 01234123456   | false                 |
| user-11@example.com | false     | 01234123456   | false                 |
| user-12@example.com | false     | 01234123456   | false                 |
| user-13@example.com | false     | 01234123456   | false                 |
| user-15@example.com | false     | 01234123456   | false                 |
+---------------------+-----------+---------------+-----------------------+
```