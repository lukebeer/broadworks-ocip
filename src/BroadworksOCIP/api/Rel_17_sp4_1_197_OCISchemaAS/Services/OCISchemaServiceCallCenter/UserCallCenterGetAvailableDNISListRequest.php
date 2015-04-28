<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request a list of available DNIS for agent to select.
 *         The response is either UserCallCenterGetAvailableDNISListResponse or ErrorResponse.
 */
class UserCallCenterGetAvailableDNISListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\UserCallCenterGetAvailableDNISListResponse';
    public    $elementName = 'UserCallCenterGetAvailableDNISListRequest';
    protected $agentUserId;

    public function __construct(
         $agentUserId = ''
    ) {
        $this->setAgentUserId($agentUserId);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\UserCallCenterGetAvailableDNISListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAgentUserId($agentUserId = null)
    {
        $this->agentUserId = ($agentUserId InstanceOf UserId)
             ? $agentUserId
             : new UserId($agentUserId);
        $this->agentUserId->setElementName('agentUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $agentUserId
     */
    public function getAgentUserId()
    {
        return ($this->agentUserId)
            ? $this->agentUserId->getElementValue()
            : null;
    }
}
