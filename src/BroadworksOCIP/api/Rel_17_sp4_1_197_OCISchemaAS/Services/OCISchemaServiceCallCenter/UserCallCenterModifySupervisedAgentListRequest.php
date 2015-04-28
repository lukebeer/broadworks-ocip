<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modifies a list of users to be supervised by a supervisor on a call center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterModifySupervisedAgentListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallCenterModifySupervisedAgentListRequest';
    protected $supervisorUserId;
    protected $serviceUserId;
    protected $agentUserIdList;

    public function __construct(
         $supervisorUserId = '',
         $serviceUserId = '',
         $agentUserIdList = null
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
        $this->supervisorUserId->setElementName('supervisorUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $supervisorUserId
     */
    public function getSupervisorUserId()
    {
        return ($this->supervisorUserId)
            ? $this->supervisorUserId->getElementValue()
            : null;
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
    public function setAgentUserIdList(ReplacementUserIdList $agentUserIdList = null)
    {
        $this->agentUserIdList = ($agentUserIdList InstanceOf ReplacementUserIdList)
             ? $agentUserIdList
             : new ReplacementUserIdList($agentUserIdList);
        $this->agentUserIdList->setElementName('agentUserIdList');
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
