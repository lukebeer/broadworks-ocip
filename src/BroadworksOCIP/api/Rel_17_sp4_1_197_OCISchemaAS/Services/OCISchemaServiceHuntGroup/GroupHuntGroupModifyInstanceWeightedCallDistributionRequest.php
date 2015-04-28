<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntAgentWeight;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify the weighted call distribution of a Hunt Group instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         NOTE: Prior to release 14, any agents who were not in the list kept their
 *         existing weight setting. In release 14, any agents who are not in the list
 *         will have their weight set to 0.
 */
class GroupHuntGroupModifyInstanceWeightedCallDistributionRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupHuntGroupModifyInstanceWeightedCallDistributionRequest';
    protected $serviceUserId;
    protected $agentWeight;

    public function __construct(
         $serviceUserId = '',
         $agentWeight = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setAgentWeight($agentWeight);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAgentWeight(HuntAgentWeight $agentWeight = null)
    {
        $this->agentWeight = ($agentWeight InstanceOf HuntAgentWeight)
             ? $agentWeight
             : new HuntAgentWeight($agentWeight);
        $this->agentWeight->setElementName('agentWeight');
        return $this;
    }

    /**
     * 
     * @return HuntAgentWeight $agentWeight
     */
    public function getAgentWeight()
    {
        return $this->agentWeight;
    }
}
