## Broadworks_OCIP\core\Response\Response

The Response class is constructed with response XML from Broadworks then analyised.
Errors go in the ErrorController and false is returned, SuccessResponse (no payload) returns true and responses with XML payload get passed into the Serializer. A ResponseType parameter can be passed into getResponse by the code to return a non-standard response type.

This is used for returning a UserAddRequest17sp4 instead of the default UserGetResponse17sp4 when a UserGetRequest17sp4 has been sent.


#### UserGetRequest17sp4 to UserGetResponse17sp4 example
``` php
<?php
require_once 'Broadworks_OCIP/common.php';

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetRequest17sp4;
use Broadworks_OCIP\CoreFactory;


$client = Broadworks_OCIP\CoreFactory::getTCPClient(OCIP_HOST);;
$client->login(OCIP_USER, OCIP_PASS);
$client->send(new UserGetRequest17sp4('user@example.com'));
print_r($client->getResponse());
```

#### UserGetResponse17sp4 example structure
```
Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetResponse17sp4 Object
(
    [elementName] => UserGetResponse17sp4
    [serviceProviderId:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId Object
        (
            [elementName] => serviceProviderId
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
            [elementValue:protected] => Some-Enterprise-Id
        )

    [groupId:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId Object
        (
            [elementName] => groupId
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
            [elementValue:protected] => Some-Group-Id
        )

    [lastName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName Object
        (
            [elementName] => lastName
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
            [elementValue:protected] => Bloggs
        )

    [firstName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName Object
        (
            [elementName] => firstName
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
            [elementValue:protected] => Joe
        )

    [callingLineIdLastName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName Object
        (
            [elementName] => callingLineIdLastName
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
            [elementValue:protected] => Bloggs
        )

    [callingLineIdFirstName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName Object
        (
            [elementName] => callingLineIdFirstName
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
            [elementValue:protected] => Joe
        )

    [hiraganaLastName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaLastName Object
        (
            [elementName] => hiraganaLastName
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
            [elementValue:protected] => Bloggs
        )

    [hiraganaFirstName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaFirstName Object
        (
            [elementName] => hiraganaFirstName
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
            [elementValue:protected] => Joe
        )

    [phoneNumber:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN Object
        (
            [elementName] => phoneNumber
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
            [elementValue:protected] => 01189123123
        )

    [extension:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17 Object
        (
            [elementName] => extension
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
            [elementValue:protected] => 1337
        )

    [callingLineIdPhoneNumber:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN Object
        (
            [elementName] => callingLineIdPhoneNumber
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
            [elementValue:protected] => 01189123123
        )

    [department:protected] => 
    [departmentFullPath:protected] => 
    [language:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language Object
        (
            [elementName] => language
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
            [elementValue:protected] => British
        )

    [timeZone:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone Object
        (
            [elementName] => timeZone
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
            [elementValue:protected] => Europe/London
        )

    [timeZoneDisplayName:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZoneDisplayName Object
        (
            [elementName] => timeZoneDisplayName
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
            [elementValue:protected] => (GMT) Europe/London
        )

    [defaultAlias:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI Object
        (
            [elementName] => defaultAlias
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
            [elementValue:protected] => user@example.com
        )

    [alias:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI Object
        (
            [elementName] => alias
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
            [elementValue:protected] => 01423201720@bsas.example.com
        )

    [title:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Title Object
        (
            [elementName] => title
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
            [elementValue:protected] => Mr
        )

    [pagerPhoneNumber:protected] => 
    [mobilePhoneNumber:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN Object
        (
            [elementName] => mobilePhoneNumber
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
            [elementValue:protected] => 07712345123
        )

    [emailAddress:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress Object
        (
            [elementName] => emailAddress
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
            [elementValue:protected] => user@example.com
        )

    [yahooId:protected] => 
    [addressLocation:protected] => 
    [address:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress Object
        (
            [elementName] => address
            [addressLine1:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
                (
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
                    [elementValue:protected] => 1337 Street
                    [elementName:protected] => addressLine1
                )

            [addressLine2:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
                (
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
                    [elementValue:protected] => 
                    [elementName:protected] => addressLine2
                )

            [city:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
                (
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
                    [elementValue:protected] => Reading
                    [elementName:protected] => city
                )

            [stateOrProvince:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
                (
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
                    [elementValue:protected] => 
                    [elementName:protected] => stateOrProvince
                )

            [stateOrProvinceDisplayName:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
                (
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
                    [elementValue:protected] => 
                    [elementName:protected] => stateOrProvinceDisplayName
                )

            [zipOrPostalCode:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
                (
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
                    [elementValue:protected] => RG1 000
                    [elementName:protected] => zipOrPostalCode
                )

            [country:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
                (
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

    [countryCode:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode Object
        (
            [elementName] => countryCode
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
            [elementValue:protected] => 44
        )

    [nationalPrefix:protected] => Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NationalPrefix Object
        (
            [elementName] => nationalPrefix
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