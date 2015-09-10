Broadworks OCIP PHP Framework
===================

#### Repo now private, contact me: mail@luke.beer
#### More docs: https://luke.beer/docs

##### Assists rapid development of Broadworks applications, integrations and provisioning tasks
###### Common bulk changes are few lines & minuets work
``` php
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetListInServiceProviderRequest;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingAlways;
$userListRequest = new UserGetListInServiceProviderRequest('exampleServiceProviderId');
foreach ($res->get($client)->getUserTable()->getColumn(0) as $user) {
    $callFwdRequest = new OCISchemaServiceCallForwardingAlways\UserCallForwardingAlwaysModifyRequest($user);
    $callFwdRequest->setForwardToPhoneNumber(false);
    $result = ($callFwdRequest->get($client));
}
```

* Friendlier alternitive to WSDL/SOAP
* Type hinting everywhere provides IDE auto completion on all data types
* Requests and Response objects extend abstract base class 'ComplexType'
* 'ComplexType' objects are built up of child elements as described in the schema
* Child elements can be either ComplexType|SimpleType|SimpleContent|TableType|PrimitiveType
* SimpleTypes may contain Restriction objects for input validation such as maxLength of minLength
* Communication with Broadworks uses HTTP SOAP or TCP Stream with an instance of a Transport object
* Automatic ComplexType conversion (userGetResponse17sp4 --> userAddRequest17sp4)
* Client is the main controller for the whole framework to interact with the API
* Build apps without the frequent distraction of referring to the OCI schema

----------

Features
-------------

#### <i class="icon-file"></i> SOAP or TCP Stream transport
It's now possible to choose between SOAP over HTTPS or a TCP stream (default) for interaction with the Broadworks API. Basic benchmarks suggest 15/requests/second with SOAP and 150/requests/second for TCP Stream. UserGetRequest17sp4 was used for the benchmark.


#### <i class="icon-folder-open"></i> Session management
Sessions can be exported out of and into the Client, this was added to allow Broadworks OCI-P scripts triggered by methods such as cronjobs to execute using external session data. Porting Sessions are a secure way to execute commands as the user that requested it as the password is not stored, cookies/sessionId are used for authentication.

#### <i class="icon-pencil"></i> IDE Autocompletion

All elements of the framework have been built with IDE autocompletion in mind so there isn't a need to remember the details of a data type.

![Screenshot](https://luke.beer/docs/img/autocomplete-1.png)

![Screenshot](https://luke.beer/docs/img/autocomplete-2.png)

#### <i class="icon-refresh"></i>Interactive console
An interacting CLI is built in that requires zero programming knowledge. The user navigates through the schema in the same way you would directories and files on a linux file system. Commands can be executed in the CLI with results printed to screen. Tab autocompletion works.


#### <i class="icon-hdd"></i> Data export

Objects support serialisation to allow saving of messages in plain-text format that can be unserialised back into data types the framework can understand then replayed back into Broadworks for example

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


## BroadworksOCIP\Response\Response

The Response class is constructed with response XML from Broadworks then analyised.
Errors go in the ErrorController and false is returned, SuccessResponse (no payload) returns true and responses with XML payload get passed into the Serializer. A ResponseType parameter can be passed into getResponse by the code to return a non-standard response type.

This is used for returning a UserAddRequest17sp4 instead of the default UserGetResponse17sp4 when a UserGetRequest17sp4 has been sent.


#### UserGetRequest17sp4 to UserGetResponse17sp4 example
``` php
<?php
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetRequest17sp4;
use BroadworksOCIPFactory;


$client = BroadworksOCIPFactory::getTCPClient(OCIP_HOST);;
$client->login(OCIP_USER, OCIP_PASS);
$client->send(new UserGetRequest17sp4('user@example.com'));
print_r($client->getResponse());
```

#### UserGetResponse17sp4 example structure
```
BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetResponse17sp4 Object
(
    [elementName] => UserGetResponse17sp4
    [serviceProviderId:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId Object
        (
            [elementName] => serviceProviderId
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => Some-Enterprise-Id
        )

    [groupId:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId Object
        (
            [elementName] => groupId
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => Some-Group-Id
        )

    [lastName:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName Object
        (
            [elementName] => lastName
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => Bloggs
        )

    [firstName:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName Object
        (
            [elementName] => firstName
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => Joe
        )

    [callingLineIdLastName:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName Object
        (
            [elementName] => callingLineIdLastName
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => Bloggs
        )

    [callingLineIdFirstName:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName Object
        (
            [elementName] => callingLineIdFirstName
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => Joe
        )

    [hiraganaLastName:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaLastName Object
        (
            [elementName] => hiraganaLastName
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => Bloggs
        )

    [hiraganaFirstName:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaFirstName Object
        (
            [elementName] => hiraganaFirstName
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => Joe
        )

    [phoneNumber:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN Object
        (
            [elementName] => phoneNumber
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 23
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => 01189123123
        )

    [extension:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17 Object
        (
            [elementName] => extension
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 2
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 20
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => 1337
        )

    [callingLineIdPhoneNumber:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN Object
        (
            [elementName] => callingLineIdPhoneNumber
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 23
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => 01189123123
        )

    [department:protected] =>
    [departmentFullPath:protected] =>
    [language:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language Object
        (
            [elementName] => language
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 40
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => British
        )

    [timeZone:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone Object
        (
            [elementName] => timeZone
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 127
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => Europe/London
        )

    [timeZoneDisplayName:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZoneDisplayName Object
        (
            [elementName] => timeZoneDisplayName
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 127
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => (GMT) Europe/London
        )

    [defaultAlias:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI Object
        (
            [elementName] => defaultAlias
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 161
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => user@example.com
        )

    [alias:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI Object
        (
            [elementName] => alias
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 161
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => 01423201720@bsas.example.com
        )

    [title:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Title Object
        (
            [elementName] => title
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 50
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => Mr
        )

    [pagerPhoneNumber:protected] =>
    [mobilePhoneNumber:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN Object
        (
            [elementName] => mobilePhoneNumber
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 30
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => 07712345123
        )

    [emailAddress:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress Object
        (
            [elementName] => emailAddress
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 80
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => user@example.com
        )

    [yahooId:protected] =>
    [addressLocation:protected] =>
    [address:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress Object
        (
            [elementName] => address
            [addressLine1:protected] => BroadworksOCIP\Builder\Types\SimpleContent Object
                (
                    [annontation:protected] =>
                    [attributes:protected] =>
                    [restrictions:protected] => Array
                        (
                            [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                                (
                                    [value:protected] => 1
                                    [detail:protected] =>
                                )

                            [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                                (
                                    [value:protected] => 80
                                    [detail:protected] =>
                                )

                        )

                    [errors:protected] =>
                    [elementValue:protected] => 1337 Street
                    [elementName:protected] => addressLine1
                )

            [addressLine2:protected] => BroadworksOCIP\Builder\Types\SimpleContent Object
                (
                    [annontation:protected] =>
                    [attributes:protected] =>
                    [restrictions:protected] => Array
                        (
                            [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                                (
                                    [value:protected] => 1
                                    [detail:protected] =>
                                )

                            [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                                (
                                    [value:protected] => 80
                                    [detail:protected] =>
                                )

                        )

                    [errors:protected] =>
                    [elementValue:protected] =>
                    [elementName:protected] => addressLine2
                )

            [city:protected] => BroadworksOCIP\Builder\Types\SimpleContent Object
                (
                    [annontation:protected] =>
                    [attributes:protected] =>
                    [restrictions:protected] => Array
                        (
                            [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                                (
                                    [value:protected] => 1
                                    [detail:protected] =>
                                )

                            [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                                (
                                    [value:protected] => 50
                                    [detail:protected] =>
                                )

                        )

                    [errors:protected] =>
                    [elementValue:protected] => Reading
                    [elementName:protected] => city
                )

            [stateOrProvince:protected] => BroadworksOCIP\Builder\Types\SimpleContent Object
                (
                    [annontation:protected] =>
                    [attributes:protected] =>
                    [restrictions:protected] => Array
                        (
                            [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                                (
                                    [value:protected] => 1
                                    [detail:protected] =>
                                )

                            [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                                (
                                    [value:protected] => 50
                                    [detail:protected] =>
                                )

                        )

                    [errors:protected] =>
                    [elementValue:protected] =>
                    [elementName:protected] => stateOrProvince
                )

            [stateOrProvinceDisplayName:protected] => BroadworksOCIP\Builder\Types\SimpleContent Object
                (
                    [annontation:protected] =>
                    [attributes:protected] =>
                    [restrictions:protected] => Array
                        (
                            [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                                (
                                    [value:protected] => 1
                                    [detail:protected] =>
                                )

                            [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                                (
                                    [value:protected] => 50
                                    [detail:protected] =>
                                )

                        )

                    [errors:protected] =>
                    [elementValue:protected] =>
                    [elementName:protected] => stateOrProvinceDisplayName
                )

            [zipOrPostalCode:protected] => BroadworksOCIP\Builder\Types\SimpleContent Object
                (
                    [annontation:protected] =>
                    [attributes:protected] =>
                    [restrictions:protected] => Array
                        (
                            [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                                (
                                    [value:protected] => 1
                                    [detail:protected] =>
                                )

                            [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                                (
                                    [value:protected] => 50
                                    [detail:protected] =>
                                )

                        )

                    [errors:protected] =>
                    [elementValue:protected] => RG1 000
                    [elementName:protected] => zipOrPostalCode
                )

            [country:protected] => BroadworksOCIP\Builder\Types\SimpleContent Object
                (
                    [annontation:protected] =>
                    [attributes:protected] =>
                    [restrictions:protected] => Array
                        (
                            [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                                (
                                    [value:protected] => 1
                                    [detail:protected] =>
                                )

                            [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                                (
                                    [value:protected] => 50
                                    [detail:protected] =>
                                )

                        )

                    [errors:protected] =>
                    [elementValue:protected] => Berkshire
                    [elementName:protected] => country
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
            [elementValue:protected] =>
        )

    [countryCode:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode Object
        (
            [elementName] => countryCode
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 3
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\Pattern Object
                        (
                            [value:protected] => [0-9]|[1-9][0-9]{1,2}
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => 44
        )

    [nationalPrefix:protected] => BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NationalPrefix Object
        (
            [elementName] => nationalPrefix
            [annontation:protected] =>
            [attributes:protected] =>
            [restrictions:protected] => Array
                (
                    [0] => BroadworksOCIP\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] =>
                        )

                    [1] => BroadworksOCIP\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 2
                            [detail:protected] =>
                        )

                )

            [errors:protected] =>
            [elementValue:protected] => 0
        )

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
    [elementValue:protected] =>
)
```
