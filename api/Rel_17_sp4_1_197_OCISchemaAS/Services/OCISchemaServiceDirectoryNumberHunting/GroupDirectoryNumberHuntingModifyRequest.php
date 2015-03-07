<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceDirectoryNumberHunting; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Replaces a list of users as agents for a directory number hunting group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDirectoryNumberHuntingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $serviceUserId    = null;
    protected $agentUserIdList  = null;

    public function __construct(
         $serviceUserId,
         ReplacementUserIdList $agentUserIdList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setAgentUserIdList($agentUserIdList);
    }

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setAgentUserIdList(ReplacementUserIdList $agentUserIdList = null)
    {
    }

    public function getAgentUserIdList()
    {
        return (!$this->agentUserIdList) ?: $this->agentUserIdList->value();
    }
}
