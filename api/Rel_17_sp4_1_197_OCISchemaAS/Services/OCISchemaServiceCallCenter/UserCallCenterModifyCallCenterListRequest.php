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
 * Request to modify the call center list for an agent.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserCallCenterModifyCallCenterListRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'UserCallCenterModifyCallCenterListRequest';
    protected $agentUserId       = null;
    protected $serviceUserIdList = null;

    public function __construct(
         $agentUserId,
         ReplacementUserIdList $serviceUserIdList = null
    ) {
        $this->setAgentUserId($agentUserId);
        $this->setServiceUserIdList($serviceUserIdList);
    }

    /**
     * @return 
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
        if (!$agentUserId) return $this;
        $this->agentUserId = ($agentUserId InstanceOf UserId)
             ? $agentUserId
             : new UserId($agentUserId);
        $this->agentUserId->setName('agentUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getAgentUserId()
    {
        return $this->agentUserId->getValue();
    }

    /**
     * 
     */
    public function setServiceUserIdList(ReplacementUserIdList $serviceUserIdList = null)
    {
        if (!$serviceUserIdList) return $this;
        $this->serviceUserIdList = $serviceUserIdList;
        $this->serviceUserIdList->setName('serviceUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
     */
    public function getServiceUserIdList()
    {
        return $this->serviceUserIdList;
    }
}
