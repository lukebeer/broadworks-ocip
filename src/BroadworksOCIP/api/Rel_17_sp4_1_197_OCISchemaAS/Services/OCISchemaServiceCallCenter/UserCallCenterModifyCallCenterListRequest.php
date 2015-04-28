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
 * Request to modify the call center list for an agent.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserCallCenterModifyCallCenterListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallCenterModifyCallCenterListRequest';
    protected $agentUserId;
    protected $serviceUserIdList;

    public function __construct(
         $agentUserId = '',
         $serviceUserIdList = null
    ) {
        $this->setAgentUserId($agentUserId);
        $this->setServiceUserIdList($serviceUserIdList);
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

    /**
     * 
     */
    public function setServiceUserIdList(ReplacementUserIdList $serviceUserIdList = null)
    {
        $this->serviceUserIdList = ($serviceUserIdList InstanceOf ReplacementUserIdList)
             ? $serviceUserIdList
             : new ReplacementUserIdList($serviceUserIdList);
        $this->serviceUserIdList->setElementName('serviceUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $serviceUserIdList
     */
    public function getServiceUserIdList()
    {
        return $this->serviceUserIdList;
    }
}
