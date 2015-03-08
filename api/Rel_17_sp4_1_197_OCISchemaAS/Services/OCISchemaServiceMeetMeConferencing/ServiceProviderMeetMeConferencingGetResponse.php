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
     * Response to ServiceProviderMeetMeConferencingGetRequest.
 */
class ServiceProviderMeetMeConferencingGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing\ServiceProviderMeetMeConferencingGetResponse';
    public    $name           = __CLASS__;
    protected $allocatedPorts = null;


    /**
     * Number of conference ports. Can either be unlimited or limited to a value between 0 and 999999.
     */
    public function setAllocatedPorts(MeetMeConferencingConferencePorts $allocatedPorts = null)
    {
        $this->allocatedPorts = MeetMeConferencingConferencePorts $allocatedPorts;
    }

    /**
     * Number of conference ports. Can either be unlimited or limited to a value between 0 and 999999.
     */
    public function getAllocatedPorts()
    {
        return (!$this->allocatedPorts) ?: $this->allocatedPorts->getValue();
    }
}
