<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Choices for the notification when attendees join or leave the conferecne.
 */
class MeetMeConferencingConferenceAttendeeNotification extends SimpleType
{
    public $elementName = "MeetMeConferencingConferenceAttendeeNotification";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Play Tone',
            'Play Recorded Name',
            'No Notification'
        ]));
    }
}
