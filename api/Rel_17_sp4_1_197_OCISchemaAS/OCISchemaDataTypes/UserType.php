<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Types of users in BroadWorks.
 */
class UserType extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "string";
        $this->addRestriction(new Enumeration([
            'Normal',
            'Auto Attendant',
            'BroadWorks Anywhere',
            'Call Center',
            'Group Paging',
            'Hunt Group',
            'Instant Group Call',
            'Instant Conferencing',
            'Meet-Me Conferencing',
            'Music On Hold',
            'Route Point',
            'Voice Messaging'
        ]));
    }
}
