<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies a list of users to be supervised by a supervisor on a call center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterModifySupervisedAgentListRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserCallCenterModifySupervisedAgentListRequest';
    protected $supervisorUserId;
    protected $serviceUserId;
    protected $agentUserIdList;

    public function __construct(
         $supervisorUserId = '',
         $serviceUserId = '',
         ReplacementUserIdList $agentUserIdList = null
    ) {
        $this->setSupervisorUserId($supervisorUserId);
        $this->setServiceUserId($serviceUserId);
        $this->setAgentUserIdList($agentUserIdList);
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
    public function setSupervisorUserId($supervisorUserId = null)
    {
        $this->supervisorUserId = ($supervisorUserId InstanceOf UserId)
             ? $supervisorUserId
             : new UserId($supervisorUserId);
        $this->supervisorUserId->setName('supervisorUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $supervisorUserId
     */
    public function getSupervisorUserId()
    {
        return ($this->supervisorUserId) ? $this->supervisorUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
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
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setAgentUserIdList(ReplacementUserIdList $agentUserIdList = null)
    {
        $this->agentUserIdList = ($agentUserIdList InstanceOf ReplacementUserIdList)
             ? $agentUserIdList
             : new ReplacementUserIdList($agentUserIdList);
        $this->agentUserIdList->setName('agentUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $agentUserIdList
     */
    public function getAgentUserIdList()
    {
        return $this->agentUserIdList;
    }
}
