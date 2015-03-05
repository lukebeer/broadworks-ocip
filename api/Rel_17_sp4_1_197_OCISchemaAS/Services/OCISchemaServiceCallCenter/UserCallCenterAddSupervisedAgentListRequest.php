<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Assign agent(s) to a call center supervisor.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterAddSupervisedAgentListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $supervisorUserId,
             $serviceUserId,
             $agentUserId=null
    ) {
        $this->supervisorUserId = new UserId($supervisorUserId);
        $this->serviceUserId    = new UserId($serviceUserId);
        $this->agentUserId      = new UserId($agentUserId);
        $this->args             = func_get_args();
    }

    public function setSupervisorUserId($supervisorUserId)
    {
        $supervisorUserId and $this->supervisorUserId = new UserId($supervisorUserId);
    }

    public function getSupervisorUserId()
    {
        return (!$this->supervisorUserId) ?: $this->supervisorUserId->value();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setAgentUserId($agentUserId)
    {
        $agentUserId and $this->agentUserId = new UserId($agentUserId);
    }

    public function getAgentUserId()
    {
        return (!$this->agentUserId) ?: $this->agentUserId->value();
    }
}
