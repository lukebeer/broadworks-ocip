<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingConferencePassCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserMeetMeConferencingAddConferenceRequest.
 */
class UserMeetMeConferencingAddConferenceResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $conferenceId,
             $moderatorPin
    ) {
        $this->conferenceId = $conferenceId;
        $this->moderatorPin = $moderatorPin;
        $this->args         = func_get_args();
    }

    public function setConferenceId($conferenceId)
    {
        $conferenceId and $this->conferenceId = new MeetMeConferencingConferencePassCode($conferenceId);
    }

    public function getConferenceId()
    {
        return (!$this->conferenceId) ?: $this->conferenceId->value();
    }

    public function setModeratorPin($moderatorPin)
    {
        $moderatorPin and $this->moderatorPin = new MeetMeConferencingConferencePassCode($moderatorPin);
    }

    public function getModeratorPin()
    {
        return (!$this->moderatorPin) ?: $this->moderatorPin->value();
    }
}
