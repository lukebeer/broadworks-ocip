<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a Call Center Agent Unavailable Code.
 *         The response is either GroupCallCenterAgentUnavailableCodeGetResponse or ErrorResponse.
 */
class GroupCallCenterAgentUnavailableCodeGetRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $serviceProviderId  = null;
    protected $groupId            = null;
    protected $code               = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $code
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setCode($code);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setCode($code = null)
    {
        $this->code = ($code InstanceOf CallCenterAgentUnavailableCode)
             ? $code
             : new CallCenterAgentUnavailableCode($code);
    }

    public function getCode()
    {
        return (!$this->code) ?: $this->code->value();
    }
}
