<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Restrictions\MaxLength;


/**
 * Conference Id or moderator pin.
 */
class MeetMeConferencingConferencePassCode extends SimpleType
{
    public $elementName = "MeetMeConferencingConferencePassCode";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("6"));
        $this->addRestriction(new MaxLength("12"));
    }
}
