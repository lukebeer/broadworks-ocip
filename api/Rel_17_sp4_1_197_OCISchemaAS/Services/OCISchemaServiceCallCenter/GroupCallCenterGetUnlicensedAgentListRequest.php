<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a list of unlicensed users who are preventing the Call Center from upgrading to another type.
 *         The response is either GroupCallCenterGetUnlicensedAgentListRequest or ErrorResponse.
 */
class GroupCallCenterGetUnlicensedAgentListRequest extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $serviceUserId   = null;
    protected $callCenterType  = null;

    public function __construct(
         $serviceUserId,
         $callCenterType
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setCallCenterType($callCenterType);
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

    public function setCallCenterType($callCenterType = null)
    {
        $this->callCenterType = ($callCenterType InstanceOf CallCenterType)
             ? $callCenterType
             : new CallCenterType($callCenterType);
    }

    public function getCallCenterType()
    {
        return (!$this->callCenterType) ?: $this->callCenterType->value();
    }
}
