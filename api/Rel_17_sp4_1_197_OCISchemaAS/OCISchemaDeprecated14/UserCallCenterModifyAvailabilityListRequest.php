<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentAvailability;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request for an agent to login or logout of one or more Call Centers.
 *         Contains a list specifing the desired login status of one or more call centers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserCallCenterModifyRequest
 */
class UserCallCenterModifyAvailabilityListRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $userId                  = null;
    protected $callCenterAvailability  = null;

    public function __construct(
         $userId,
         CallCenterAgentAvailability $callCenterAvailability = null
    ) {
        $this->setUserId($userId);
        $this->setCallCenterAvailability($callCenterAvailability);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setCallCenterAvailability(CallCenterAgentAvailability $callCenterAvailability = null)
    {
    }

    public function getCallCenterAvailability()
    {
        return (!$this->callCenterAvailability) ?: $this->callCenterAvailability->value();
    }
}
