<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntAgentWeight;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the weighted call distribution of a Call Center instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterModifyInstanceWeightedCallDistributionRequest extends ComplexType implements ComplexInterface
{
    public    $name          = 'GroupCallCenterModifyInstanceWeightedCallDistributionRequest';
    protected $serviceUserId = null;
    protected $agentWeight   = null;

    public function __construct(
         $serviceUserId,
         HuntAgentWeight $agentWeight = null
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
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setAgentWeight(HuntAgentWeight $agentWeight = null)
    {
        if (!$agentWeight) return $this;
        $this->agentWeight = $agentWeight;
        $this->agentWeight->setName('agentWeight');
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
