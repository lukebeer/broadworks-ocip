<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Pattern;


/**
 * Conference duration minutes.
 */
class MeetMeConferencingConferenceDurationMinutes extends SimpleType
{
    public $elementName = "MeetMeConferencingConferenceDurationMinutes";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Pattern("0|15|30|45"));
    }
}
