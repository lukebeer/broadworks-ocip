## ComplexType

ComplexTypes such as UserGetRequest17sp4 are types that may contain a mixture of element types including ComplexTypes.
Think of them as XML with nested children.

If one of the elements to be set is a ComplexType, the ComplexType needs creating before being set in the parent object.
For example, StreetAddress is a ComplexType:
``` php
<?php

$address = new StreetAddress();
$address->setAddressLine1('1337 Street');
$address->setCountry('England');

$request = new UserAddRequest17sp4();
$request->setStreetAddress($address);
```

#### ComplexType StreetAddress structure
```
Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress Object
(
    [elementName] => StreetAddress
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
            [elementValue:protected] => 
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
            [elementValue:protected] => 
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
            [elementValue:protected] => Enngland
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

```