## Basic Usage

Straight forward and easy to use for even non-coders, more examples provided in these docs.

The only method you need to rememeber is `$someComplexRequest->get($client)` :)

``` php
<?php
require_once 'Broadworks_OCIP/common.php';

// Use the ComplexType required for this example.
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserServiceGetAssignmentListRequest;

// Create a Client and login. CoreFactory also has getSOAPClient()
$client = Broadworks_OCIP\CoreFactory::getTCPClient('ocip.example.com');
$client->login('user', 'pass');

// Generate a request, send and assign the response to $response
$request  = new UserServiceGetAssignmentListRequest('example@example.com');
$response = $request->get($client);

// This response type returns a TableType object, getValue() renders a table.
echo $response->getServicePacksAssignmentTable()->getValue();
?>
```
```
+--------------------------------------------------+----------+
| Service Name                                     | Assigned |
+--------------------------------------------------+----------+
| Anonymous Call Rejection                         | true     |
| Authentication                                   | true     |
| Call Forwarding Always                           | true     |
| Call Forwarding Busy                             | true     |
| Call Forwarding No Answer                        | true     |
| Call Notify                                      | false    |
| Calling Line ID Delivery Blocking                | true     |
| CommPilot Express                                | true     |
| CommPilot Call Manager                           | true     |
| Do Not Disturb                                   | true     |
| Intercept User                                   | true     |
| Last Number Redial                               | true     |
| Sequential Ring                                  | true     |
+--------------------------------------------------+----------+
```
