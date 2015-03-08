<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * The conference call control action.
 */
class InstantConferencingCallControlAction extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "string";
        $this->addRestriction(new Enumeration([
            'Join',
            'Start Recording',
            'Stop Recording',
            'Pause Recording',
            'Resume Recording',
            'Lock',
            'Unlock',
            'Call',
            'Mute',
            'Drop',
            'Hold',
            'Resume'
        ]));
    }
}
