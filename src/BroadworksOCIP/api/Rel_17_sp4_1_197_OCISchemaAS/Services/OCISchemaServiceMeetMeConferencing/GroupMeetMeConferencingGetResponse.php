<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePorts;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupMeetMeConferencingGetRequest.
 */
class GroupMeetMeConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupMeetMeConferencingGetResponse';
    protected $availablePorts;
    protected $allocatedPorts;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\GroupMeetMeConferencingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAvailablePorts(MeetMeConferencingConferencePorts $availablePorts = null)
    {
        $this->availablePorts = ($availablePorts InstanceOf MeetMeConferencingConferencePorts)
             ? $availablePorts
             : new MeetMeConferencingConferencePorts($availablePorts);
        $this->availablePorts->setElementName('availablePorts');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePorts $availablePorts
     */
    public function getAvailablePorts()
    {
        return $this->availablePorts;
    }

    /**
     * 
     */
    public function setAllocatedPorts(MeetMeConferencingConferencePorts $allocatedPorts = null)
    {
        $this->allocatedPorts = ($allocatedPorts InstanceOf MeetMeConferencingConferencePorts)
             ? $allocatedPorts
             : new MeetMeConferencingConferencePorts($allocatedPorts);
        $this->allocatedPorts->setElementName('allocatedPorts');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePorts $allocatedPorts
     */
    public function getAllocatedPorts()
    {
        return $this->allocatedPorts;
    }
}
