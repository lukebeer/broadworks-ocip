Broadworks_OCI-P
================

PHP Framework for interacting with the Broadworks OCI Provisioning API

-- Version 2!
- Requests are ComplexTypes with elements being an instance of a ComplexType or SimpleType
- SimpleType's such as userId can be either a string, boolean or int
- SimpleType's contain restrictions such as min/max string length or a choice from set list of possible values
- SimpleType's restrictions are validation rules dictated by the OCI-P schema
- ComplexType's have get/set methods for all elements
- Class autoloading is used
- IDE friendly, autocompletion means no more looking at schema documentation
- TCP Transport added, simple performance test results gave 150 requests/sec vs SOAP at 18 requests/sec
- Latest improvements aid rapid development of any OCI-P application

``` php
<?php
require_once 'Broadworks_OCIP/common.php';

// Set up the objects required for this example.
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Transport\TCPTransport;
use Broadworks_OCIP\core\Client\Client;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserServiceGetAssignmentListRequest;

// Create a new Transport object and Client the login.
$transport = new TCPTransport('box.ipt.example.co.uk');
$client    = new Client($transport);
$client->login('user', 'pass');

// Generate a request, get the request and assign it to $response
$request  = new UserServiceGetAssignmentListRequest('example@example.com');
$response = $request->get($client);

// Tables return a TableType object, getValue() renders a table.
echo $response->getServicePacksAssignmentTable()->getValue();

/* Spits out:
+--------------------------------------+----------+------------------------------------------+
| Service Pack Name                    | Assigned | Description                              |
+--------------------------------------+----------+------------------------------------------+
| N-IPVC-854-Unity-Softphone-Rental    | false    | Unity Softphone Rental (Android)         |
| N-IPVC-100-Office-User               | false    | InTechnology Office User V2.2            |
| N-IPVC-856-Unity-Call-Control        | false    | Unity-Call-Control                       |
| N-IPVC-857-Unity-Softphone-Rental    | true     | Unity Softphone Rental (Windows Desktop) |
| N-IPVC-852-Unity-Softphone-Rental    | false    | Unity Softphone Rental (iPhone)          |
| N-IPVC-103-Mobile-Worker-OLD         | true     |                                          |
| N-IPVC-105-Hot-Desk-Phone-OLD        | false    |                                          |
| N-IPVC-106-Meeting-Room-Phone-OLD    | false    |                                          |
| N-IPVC-100-Office-User-OLD           | false    |                                          |
| N-IPVC-102-Receptionist-Software-OLD | false    |                                          |
| N-IPVC-109-CC-Agent                  | false    |                                          |
| N-IPVC-101-Office-Lite-User-OLD      | false    |                                          |
+--------------------------------------+----------+------------------------------------------+
*/
?>
```


UserGetRequest17sp4
====
*responseType is automatically set for dynamic responses*
*element userId is a SimpleType object comprised of min/max restrictions for validation*

``` php
<?php
/*

Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetRequest17sp4 Object
(
    [responseType] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetResponse17sp4
    [name] => UserGetRequest17sp4
    [userId:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId Object
        (
            [name] => userId
            [value:protected] => luke.berezynskyj@intechnology.com
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => Broadworks_OCIP\core\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => Broadworks_OCIP\core\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 161
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [elements:protected] => Array
        (
        )

    [errors:protected] =>
    [args:protected] =>
    [value:protected] =>
)

/*
?>
```

-- Version 1
- Low memory footprint, include schema on demand
- Send any OCI-P request without knowing the XML required
- Portable session objects by serialization (Useful for worker scripts (redis))
- Multiple output formats - array/XML/JSON/SimpleXML
- Job controller to manage job queues
- Ability to output commands as CSV, job files can be saved on disk and replayed by the job controler
- Basic examples provided in examples folder
- repo of scripts that uses this framework here: https://github.com/LukeBeer/ocip-scripts
