Broadworks OCIP PHP Framework
===================

After years of mentally debating and designing the architecture of this framework, version 2 has finally been pushed!

The driver for this version is a Broadworks provisioning backup system that will have the ability to 'snapshot', backup and restore user/group/enterprise provisioning config much the way Apples 'TimeMachine' backup system does. Versioning and history will support fault diagnosis - being able to switch back to a 'last known working config' at the click of a button will save huge amounts of time, pain and mitigate as much human error as possible.

Building the backup system requires something intelligent enough to handle all data types dynamically in the such a way that it's possible to have an object of any type mapped into another object of any type (think automatically mapping a userGetRequest into a userAddRequest or userModifyRequest on the fly).

The Broadworks API is vast and the aim of this framework version is to aid rapid development of Broadworks applications in as little lines of code as possible with minimal complexity. 

- Every message is now an object
- get/set methods to interact with object properties
- Built with IDE autocompletion support in mind
- Finally no need to keep referring to the schema documentation.

----------


Features
-------------

#### <i class="icon-file"></i> SOAP or TCP Stream transport
It's now possible to choose between SOAP over HTTPS or a TCP stream (default) for interaction with the Broadworks API. Basic benchmarks suggest 15/requests/second with SOAP and 150/requests/second for TCP Stream. UserGetRequest17sp4 was used for the benchmark.


#### <i class="icon-folder-open"></i> Session management
Sessions can be exported out of and into the Client, this was added to allow Broadworks OCI-P scripts triggered by methods such as cronjobs to execute using external session data. Porting Sessions are a secure way to execute commands as the user that requested it as the password is not stored, cookies/sessionId are used for authentication.

#### <i class="icon-pencil"></i> IDE Autocompletion

All elements of the framework have been built with IDE autocompletion in mind so there isn't a need to remember the details of a data type.

#### <i class="icon-refresh"></i>Interactive console
An interacting CLI is built in that requires zero programming knowledge. The user navigates through the schema in the same way you would directories and files on a linux file system. Commands can be executed in the CLI with results printed to screen. Tab autocompletion works.




#### <i class="icon-hdd"></i> Data export

Objects support serialisation to allow saving of messages in plain-text format that can be unserialised back into data types the framework can understand then replayed back into Broadworks for example

----------

Overview
-------------------
The Broadworks OCI-P schema implemented in the framework is composed of various data types following the XSD structure. Requests are instance of ComplexType's and each ComplexType is made up of zero or more Complex, Basic, Primitive, Simple or Table Types.  SimpleTypes implement restrictions such as max value string length or max int size.	


Basic Usage
-------------------

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
-------------------
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
