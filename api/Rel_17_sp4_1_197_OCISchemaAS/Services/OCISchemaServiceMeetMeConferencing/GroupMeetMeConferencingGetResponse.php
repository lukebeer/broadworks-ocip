<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing\GroupMeetMeConferencingGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupMeetMeConferencingGetRequest.
 */
class GroupMeetMeConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $availablePorts = null;
    protected $allocatedPorts = null;

    /**
     * @return GroupMeetMeConferencingGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Number of conference ports. Can either be unlimited or limited to a value between 0 and 999999.
     */
    public function setAvailablePorts(MeetMeConferencingConferencePorts $availablePorts = null)
    {
        $this->availablePorts =  $availablePorts;
    }

    /**
     * Number of conference ports. Can either be unlimited or limited to a value between 0 and 999999.
     */
    public function getAvailablePorts()
    {
        return (!$this->availablePorts) ?: $this->availablePorts->getValue();
    }

    /**
     * Number of conference ports. Can either be unlimited or limited to a value between 0 and 999999.
     */
    public function setAllocatedPorts(MeetMeConferencingConferencePorts $allocatedPorts = null)
    {
        $this->allocatedPorts =  $allocatedPorts;
    }

    /**
     * Number of conference ports. Can either be unlimited or limited to a value between 0 and 999999.
     */
    public function getAllocatedPorts()
    {
        return (!$this->allocatedPorts) ?: $this->allocatedPorts->getValue();
    }
}
