<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * This request signs-out a call center agent. Administrator, supervisor and agent itself can sign-out an agent. 
 *         An empty OCI table in OCI-P response indicates success and the agent has been signed out. This sign-out 
 *         command will fail if the agent is the last signed-in agent of any standard or premium call center to 
 *         which she is currently joined. If the sign-out fails, the OCI-P response will contain a list of 
 *         Call Centers for which the agent is the last signed-in agent. 
 *         If this special logic is not needed, UserCallCenterModifyRequest can still be used to change 
 *         the agents ACD state without checking if the agent is the last signed-in agent.
 *         The response is either a UserCallCenterAgentSignOutResponse or ErrorResponse.
 */
class UserCallCenterAgentSignOutRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\UserCallCenterAgentSignOutResponse';
    public    $name = 'UserCallCenterAgentSignOutRequest';
    protected $agentUserId;

    public function __construct(
         $agentUserId = ''
    ) {
        $this->setAgentUserId($agentUserId);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\UserCallCenterAgentSignOutResponse $response
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
        $this->agentUserId->setName('agentUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $agentUserId
     */
    public function getAgentUserId()
    {
        return ($this->agentUserId) ? $this->agentUserId->getValue() : null;
    }
}
