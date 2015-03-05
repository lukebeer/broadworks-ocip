<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the call center list for an agent.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserCallCenterModifyCallCenterListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $agentUserId,
             ReplacementUserIdList $serviceUserIdList=null
    ) {
        $this->agentUserId       = new UserId($agentUserId);
        $this->serviceUserIdList = $serviceUserIdList;
        $this->args              = func_get_args();
    }

    public function setAgentUserId($agentUserId)
    {
        $agentUserId and $this->agentUserId = new UserId($agentUserId);
    }

    public function getAgentUserId()
    {
        return (!$this->agentUserId) ?: $this->agentUserId->value();
    }

    public function setServiceUserIdList($serviceUserIdList)
    {
        $serviceUserIdList and $this->serviceUserIdList = new ReplacementUserIdList($serviceUserIdList);
    }

    public function getServiceUserIdList()
    {
        return (!$this->serviceUserIdList) ?: $this->serviceUserIdList->value();
    }
}
