<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePorts;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderMeetMeConferencingGetRequest.
 */
class ServiceProviderMeetMeConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'ServiceProviderMeetMeConferencingGetResponse';
    protected $allocatedPorts = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\ServiceProviderMeetMeConferencingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAllocatedPorts(MeetMeConferencingConferencePorts $allocatedPorts = null)
    {
        if (!$allocatedPorts) return $this;
        $this->allocatedPorts = $allocatedPorts;
        $this->allocatedPorts->setName('allocatedPorts');
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
