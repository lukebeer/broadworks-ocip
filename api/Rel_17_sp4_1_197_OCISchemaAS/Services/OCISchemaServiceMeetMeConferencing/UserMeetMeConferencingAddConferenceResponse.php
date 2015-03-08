<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePassCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserMeetMeConferencingAddConferenceRequest.
 */
class UserMeetMeConferencingAddConferenceResponse extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $conferenceId = null;
    protected $moderatorPin = null;


    /**
     * Conference Id or moderator pin.
     */
    public function setConferenceId($conferenceId = null)
    {
        $this->conferenceId = ($conferenceId InstanceOf MeetMeConferencingConferencePassCode)
             ? $conferenceId
             : new MeetMeConferencingConferencePassCode($conferenceId);
    }

    /**
     * Conference Id or moderator pin.
     */
    public function getConferenceId()
    {
        return (!$this->conferenceId) ?: $this->conferenceId->getValue();
    }

    /**
     * Conference Id or moderator pin.
     */
    public function setModeratorPin($moderatorPin = null)
    {
        $this->moderatorPin = ($moderatorPin InstanceOf MeetMeConferencingConferencePassCode)
             ? $moderatorPin
             : new MeetMeConferencingConferencePassCode($moderatorPin);
    }

    /**
     * Conference Id or moderator pin.
     */
    public function getModeratorPin()
    {
        return (!$this->moderatorPin) ?: $this->moderatorPin->getValue();
    }
}
