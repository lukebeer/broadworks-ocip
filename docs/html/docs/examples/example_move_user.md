## Migrate user from one group to another

This example performs the following.

* Issues a UserGetRequest17sp4
* Pass UserAddRequest17sp4 type to map response into instead of UserGetResponse17sp4
* Modify required arguments to avoid unique errors
* Send request with ->get();

``` php
<?php
require_once 'Broadworks_OCIP/common.php';

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetRequest17sp4;
use Broadworks_OCIP\core\Response\ResponseOutput;

$client = Broadworks_OCIP\CoreFactory::getTCPClient(OCIP_HOST);
$client->login(OCIP_USER, OCIP_PASS);

$client->send(new UserGetRequest17sp4('original_user@example.com.com'));

$mapInto = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserAddRequest17sp4';
$addRequest = $client->getResponse(ResponseOutput::STD, $mapInto);
$addRequest->setUserId('ocip-test-user@example.com');
$addRequest->setGroupId('new-group-id');
$addRequest->setPassword(rand(0, 100) . substr(uniqid(), 5) . strtoupper(substr(uniqid(), 5)));
$addRequest->setPhoneNumber(null);
$addRequest->setExtension(null);
$addRequest->setAlias(null);

$addRequest->get($client);
```