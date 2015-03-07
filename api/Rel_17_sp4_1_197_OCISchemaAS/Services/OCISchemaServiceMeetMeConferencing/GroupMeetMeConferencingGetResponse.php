<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePorts;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupMeetMeConferencingGetRequest.
 */
class GroupMeetMeConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $availablePorts  = null;
    protected $allocatedPorts  = null;


    public function setAvailablePorts(MeetMeConferencingConferencePorts $availablePorts = null)
    {
    }

    public function getAvailablePorts()
    {
        return (!$this->availablePorts) ?: $this->availablePorts->value();
    }

    public function setAllocatedPorts(MeetMeConferencingConferencePorts $allocatedPorts = null)
    {
    }

    public function getAllocatedPorts()
    {
        return (!$this->allocatedPorts) ?: $this->allocatedPorts->value();
    }
}
