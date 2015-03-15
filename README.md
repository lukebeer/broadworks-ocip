Broadworks OCIP PHP Framework
===================

After years of mentally debating and designing the architecture of this framework, version 2 has finally been pushed!

The driver for this version is a Broadworks provisioning backup system that will have the ability to 'snapshot', backup and restore user/group/enterprise provisioning config much the way Apples 'TimeMachine' backup system does. Versioning and history will support fault diagnosis - being able to switch back to a 'last known working config' at the click of a button will save huge amounts of time, pain and mitigate as much human error as possible.

Building the backup system requires something intelligent enough to handle all data types dynamically in the such a way that it's possible to have an object of any type mapped into another object of any type (think automatically mapping a userGetRequest into a userAddRequest or userModifyRequest on the fly).

The Broadworks API is vast and the aim of this framework version is to aid rapid development of Broadworks applications in as little lines of code as possible with minimal complexity. 

----------

Basic Usage
-------------------

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

/* Spits out:
+--------------------------------------+----------+------------------------------------------+
| Service Pack Name                    | Assigned | Description                              |
+--------------------------------------+----------+------------------------------------------+
| N-IPVC-854-Softphone-Rental          | false    | Softphone Rental (Android)               |
| N-IPVC-100-Office-User               | false    | Office User V2.2                         |
| N-IPVC-856-Call-Control              | false    | Call-Control                             |
| N-IPVC-857-Softphone-Rental          | true     | Softphone Rental (Windows Desktop)       |
| N-IPVC-852-Softphone-Rental          | false    | Softphone Rental (iPhone)                |
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

UserGetRequest17sp4
-------------------
* responseType is automatically set for dynamic response mapping
* Element userId is a SimpleType object comprised of min/max restrictions for validation

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
            [value:protected] => firstname.lastname@example.com
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

UserGetResponse7sp4
-------------------
* Response from UserGetRequest17sp4 is a ComplexType object serialized from XML
* Response has get/set methods for all elements
* Notice how StreetAddress is a nested ComplexType object, this will have get/set methods

example usage:
``` php
$request  = new UserGetRequest17sp4($userId);
$response = $request->get($client);
$address  = $response->getAddress();
$street   = $address->getAddressLine1();
$postcode = $address->getZipOrPostalCode();
```

``` php
<?php
/*
Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetResponse17sp4 Object
(
    [name] => UserGetResponse17sp4
    [serviceProviderId:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId Object
        (
            [name] => serviceProviderId
            [value:protected] => 12345-Example
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
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [groupId:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId Object
        (
            [name] => groupId
            [value:protected] => 12345-Example-Group
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
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [lastName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName Object
        (
            [name] => lastName
            [value:protected] => Bloggs
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
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [firstName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName Object
        (
            [name] => firstName
            [value:protected] => Joe
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
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [callingLineIdLastName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName Object
        (
            [name] => callingLineIdLastName
            [value:protected] => Bloggs
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
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [callingLineIdFirstName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName Object
        (
            [name] => callingLineIdFirstName
            [value:protected] => Joe
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
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [hiraganaLastName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaLastName Object
        (
            [name] => hiraganaLastName
            [value:protected] => Bloggs
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
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [hiraganaFirstName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaFirstName Object
        (
            [name] => hiraganaFirstName
            [value:protected] => Joe
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
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [phoneNumber:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN Object
        (
            [name] => phoneNumber
            [value:protected] => 01239012345
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
                            [value:protected] => 23
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [extension:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17 Object
        (
            [name] => extension
            [value:protected] => 1234
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => Broadworks_OCIP\core\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 2
                            [detail:protected] =>
                        )

                    [1] => Broadworks_OCIP\core\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 20
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [callingLineIdPhoneNumber:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN Object
        (
            [name] => callingLineIdPhoneNumber
            [value:protected] => 01239012345
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
                            [value:protected] => 23
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [department:protected] =>
    [departmentFullPath:protected] =>
    [language:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language Object
        (
            [name] => language
            [value:protected] => British
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
                            [value:protected] => 40
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [timeZone:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone Object
        (
            [name] => timeZone
            [value:protected] => Europe/London
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
                            [value:protected] => 127
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [timeZoneDisplayName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZoneDisplayName Object
        (
            [name] => timeZoneDisplayName
            [value:protected] => (GMT) Europe/London
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
                            [value:protected] => 127
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [defaultAlias:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI Object
        (
            [name] => defaultAlias
            [value:protected] => firstname.lastname@example.com
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

    [alias:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI Object
        (
            [name] => alias
            [value:protected] => 01230123456@example.com
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

    [title:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Title Object
        (
            [name] => title
            [value:protected] => Mr
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
                            [value:protected] => 50
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [pagerPhoneNumber:protected] =>
    [mobilePhoneNumber:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN Object
        (
            [name] => mobilePhoneNumber
            [value:protected] => 07712312312
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
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [emailAddress:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress Object
        (
            [name] => emailAddress
            [value:protected] => firstname.lastname@example.com
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
                            [value:protected] => 80
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [yahooId:protected] =>
    [addressLocation:protected] =>
    [address:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress Object
        (
            [name] => address
            [addressLine1:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
                (
                    [name] => addressLine1
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
                                    [value:protected] => 80
                                    [detail:protected] =>
                                )

                        )

                    [errors:protected] =>
                    [value:protected] => 3-5 Some Road
                )

            [addressLine2:protected] =>
            [city:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
                (
                    [name] => city
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
                                    [value:protected] => 50
                                    [detail:protected] =>
                                )

                        )

                    [errors:protected] =>
                    [value:protected] => Reading
                )

            [stateOrProvince:protected] =>
            [stateOrProvinceDisplayName:protected] =>
            [zipOrPostalCode:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
                (
                    [name] => zipOrPostalCode
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
                                    [value:protected] => 50
                                    [detail:protected] =>
                                )

                        )

                    [errors:protected] =>
                    [value:protected] => RG1 1LX
                )

            [country:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
                (
                    [name] => country
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
                                    [value:protected] => 50
                                    [detail:protected] =>
                                )

                        )

                    [errors:protected] =>
                    [value:protected] => Berkshire
                )

            [elements:protected] => Array
                (
                )

            [responseType:protected] =>
            [errors:protected] =>
            [params:protected] => Array
                (
                )

            [args:protected] =>
            [value:protected] =>
        )

    [countryCode:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode Object
        (
            [name] => countryCode
            [value:protected] => 44
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => Broadworks_OCIP\core\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 3
                            [detail:protected] =>
                        )

                    [1] => Broadworks_OCIP\core\Builder\Restrictions\Pattern Object
                        (
                            [value:protected] => [0-9]|[1-9][0-9]{1,2}
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [dataType] =>
        )

    [nationalPrefix:protected] =>
    [networkClassOfService:protected] =>
    [officeZoneName:protected] =>
    [primaryZoneName:protected] =>
    [elements:protected] => Array
        (
        )

    [responseType:protected] =>
    [errors:protected] =>
    [params:protected] => Array
        (
        )

    [args:protected] =>
    [value:protected] =>
)
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
