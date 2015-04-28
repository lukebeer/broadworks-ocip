<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * The conference call control action.
 */
class InstantConferencingCallControlAction extends SimpleType
{
    public $elementName = "InstantConferencingCallControlAction";
    public function __construct($value) {
        $this->setElementValue($value);
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
