<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupHuntGroupGetInstanceRequest14.
 *         Contains the service profile information and a table of assigned users.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 *         "Hiragana Last Name", "Hiragana First Name", "Weight".
 */
class GroupHuntGroupGetInstanceResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceInstanceProfile,
             $policy,
             $huntAfterNoAnswer,
             $noAnswerNumberOfRings,
             $forwardAfterTimeout,
             $forwardTimeoutSeconds,
             $forwardToPhoneNumber=null,
             $agentUserTable,
             $allowCallWaitingForAgents
    ) {
        $this->serviceInstanceProfile    = $serviceInstanceProfile;
        $this->policy                    = new HuntPolicy($policy);
        $this->huntAfterNoAnswer         = $huntAfterNoAnswer;
        $this->noAnswerNumberOfRings     = new HuntNoAnswerRings($noAnswerNumberOfRings);
        $this->forwardAfterTimeout       = $forwardAfterTimeout;
        $this->forwardTimeoutSeconds     = new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->forwardToPhoneNumber      = new OutgoingDN($forwardToPhoneNumber);
        $this->agentUserTable            = $agentUserTable;
        $this->allowCallWaitingForAgents = $allowCallWaitingForAgents;
        $this->args                      = func_get_args();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceReadProfile($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setPolicy($policy)
    {
        $policy and $this->policy = new HuntPolicy($policy);
    }

    public function getPolicy()
    {
        return (!$this->policy) ?: $this->policy->value();
    }

    public function setHuntAfterNoAnswer($huntAfterNoAnswer)
    {
        $huntAfterNoAnswer and $this->huntAfterNoAnswer = new xs:boolean($huntAfterNoAnswer);
    }

    public function getHuntAfterNoAnswer()
    {
        return (!$this->huntAfterNoAnswer) ?: $this->huntAfterNoAnswer->value();
    }

    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $noAnswerNumberOfRings and $this->noAnswerNumberOfRings = new HuntNoAnswerRings($noAnswerNumberOfRings);
    }

    public function getNoAnswerNumberOfRings()
    {
        return (!$this->noAnswerNumberOfRings) ?: $this->noAnswerNumberOfRings->value();
    }

    public function setForwardAfterTimeout($forwardAfterTimeout)
    {
        $forwardAfterTimeout and $this->forwardAfterTimeout = new xs:boolean($forwardAfterTimeout);
    }

    public function getForwardAfterTimeout()
    {
        return (!$this->forwardAfterTimeout) ?: $this->forwardAfterTimeout->value();
    }

    public function setForwardTimeoutSeconds($forwardTimeoutSeconds)
    {
        $forwardTimeoutSeconds and $this->forwardTimeoutSeconds = new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
    }

    public function getForwardTimeoutSeconds()
    {
        return (!$this->forwardTimeoutSeconds) ?: $this->forwardTimeoutSeconds->value();
    }

    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $forwardToPhoneNumber and $this->forwardToPhoneNumber = new OutgoingDN($forwardToPhoneNumber);
    }

    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->value();
    }

    public function setAgentUserTable($agentUserTable)
    {
        $agentUserTable and $this->agentUserTable = new core:OCITable($agentUserTable);
    }

    public function getAgentUserTable()
    {
        return (!$this->agentUserTable) ?: $this->agentUserTable->value();
    }

    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents)
    {
        $allowCallWaitingForAgents and $this->allowCallWaitingForAgents = new xs:boolean($allowCallWaitingForAgents);
    }

    public function getAllowCallWaitingForAgents()
    {
        return (!$this->allowCallWaitingForAgents) ?: $this->allowCallWaitingForAgents->value();
    }
}
