## ComplexType

ComplexTypes such as UserGetRequest17sp4 are types that may contain a mixture of element types including ComplexTypes.
Think of them as XML with nested children.

If one of the elements to be set is a ComplexType, the ComplexType needs creating before being set in the parent object.
For example, StreetAddress is a ComplexType:
``` php
<?php

$address = new StreetAddress();
$address->setAddressLine1('1337 Street');
$address->setCounty('Berkshire');

$request = new UserAddRequest17sp4();
$request->setStreetAddress($address);
```