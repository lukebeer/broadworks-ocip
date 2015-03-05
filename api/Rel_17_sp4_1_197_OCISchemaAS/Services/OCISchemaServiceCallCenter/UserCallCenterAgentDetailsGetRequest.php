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
 * Request to get the detail information of a Call Center Agent. Administrator, supervisor and agent
 *         itself can send this command.
 *         The response is either UserCallCenterAgentDetailsGetResponse or ErrorResponse.
 */
class UserCallCenterAgentDetailsGetRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $agentUserId
    ) {
        $this->agentUserId = new UserId($agentUserId);
        $this->args        = func_get_args();
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
