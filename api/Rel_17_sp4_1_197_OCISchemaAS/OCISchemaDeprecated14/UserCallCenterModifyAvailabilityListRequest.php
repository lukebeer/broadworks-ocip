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
    public    $name                   = __CLASS__;
    protected $userId                 = null;
    protected $callCenterAvailability = null;

    public function __construct(
         $userId,
         CallCenterAgentAvailability $callCenterAvailability = null
    ) {
        $this->setUserId($userId);
        $this->setCallCenterAvailability($callCenterAvailability);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * Specifies an agent's login state (availability) for a particular Call Center.
     */
    public function setCallCenterAvailability(CallCenterAgentAvailability $callCenterAvailability = null)
    {
        $this->callCenterAvailability = CallCenterAgentAvailability $callCenterAvailability;
    }

    /**
     * Specifies an agent's login state (availability) for a particular Call Center.
     */
    public function getCallCenterAvailability()
    {
        return (!$this->callCenterAvailability) ?: $this->callCenterAvailability->getValue();
    }
}