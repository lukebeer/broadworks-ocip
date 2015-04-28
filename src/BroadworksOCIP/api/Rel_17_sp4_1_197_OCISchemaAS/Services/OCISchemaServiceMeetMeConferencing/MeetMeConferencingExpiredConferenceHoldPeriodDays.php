<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Hold period for expired conferences, in days.
 */
class MeetMeConferencingExpiredConferenceHoldPeriodDays extends SimpleType
{
    public $elementName = "MeetMeConferencingExpiredConferenceHoldPeriodDays";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '15',
            '30',
            '60'
        ]));
    }
}
