<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Restrictions\MaxLength;


/**
 * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
 *         If the domain is not specified, it is assumed to be the system default domain.
 *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
 *         Hunt Groups, Call Centers....
 *         The domain must not be specified for system-level and service-provider-level administrators.
 */
class UserId extends SimpleType
{
    public $elementName = "UserId";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("1"));
        $this->addRestriction(new MaxLength("161"));
    }
}
