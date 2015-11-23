## SimpleType

SimpleTypes are made up of a single value and sometimes, Restrictions (more on this further down) For example, Instances
 of SimpleTypes such as GroupId is a single string value so setting it would be as follows:
``` php
<?php

$request = new UserAddRequest17sp4();
$request->setGroupId('someGroupId');
```