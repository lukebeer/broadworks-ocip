<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modifies a list of users to be supervised by a supervisor on a call center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterModifySupervisedAgentListRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $supervisorUserId = null;
    protected $serviceUserId    = null;
    protected $agentUserIdList  = null;

    public function __construct(
         $supervisorUserId,
         $serviceUserId,
         ReplacementUserIdList $agentUserIdList = null
    ) {
        $this->setSupervisorUserId($supervisorUserId);
        $this->setServiceUserId($serviceUserId);
        $this->setAgentUserIdList($agentUserIdList);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setSupervisorUserId($supervisorUserId = null)
    {
        $this->supervisorUserId = ($supervisorUserId InstanceOf UserId)
             ? $supervisorUserId
             : new UserId($supervisorUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getSupervisorUserId()
    {
        return (!$this->supervisorUserId) ?: $this->supervisorUserId->getValue();
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setAgentUserIdList(ReplacementUserIdList $agentUserIdList = null)
    {
        $this->agentUserIdList = ReplacementUserIdList $agentUserIdList;
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getAgentUserIdList()
    {
        return (!$this->agentUserIdList) ?: $this->agentUserIdList->getValue();
    }
}
