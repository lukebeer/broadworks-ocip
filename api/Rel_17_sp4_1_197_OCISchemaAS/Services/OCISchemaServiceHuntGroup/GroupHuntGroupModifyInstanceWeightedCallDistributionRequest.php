<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHuntGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntAgentWeight;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify the weighted call distribution of a Hunt Group instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         NOTE: Prior to release 14, any agents who were not in the list kept their
 *         existing weight setting. In release 14, any agents who are not in the list
 *         will have their weight set to 0.
 */
class GroupHuntGroupModifyInstanceWeightedCallDistributionRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $serviceUserId = null;
    protected $agentWeight   = null;

    public function __construct(
         $serviceUserId,
         HuntAgentWeight $agentWeight = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setAgentWeight($agentWeight);
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
     * The weighted call distribution weight for an agent.
     */
    public function setAgentWeight(HuntAgentWeight $agentWeight = null)
    {
        $this->agentWeight = HuntAgentWeight $agentWeight;
    }

    /**
     * The weighted call distribution weight for an agent.
     */
    public function getAgentWeight()
    {
        return (!$this->agentWeight) ?: $this->agentWeight->getValue();
    }
}