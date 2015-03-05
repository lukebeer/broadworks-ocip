<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterStatisticsSource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a Call Center instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifyInstanceRequest16
 */
class GroupCallCenterModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             ServiceInstanceModifyProfile $serviceInstanceProfile=null,
             $policy=null,
             $huntAfterNoAnswer=null,
             $noAnswerNumberOfRings=null,
             $forwardAfterTimeout=null,
             $forwardTimeoutSeconds=null,
             $forwardToPhoneNumber=null,
             $enableVideo=null,
             $queueLength=null,
             $allowAgentLogoff=null,
             $playMusicOnHold=null,
             $playComfortMessage=null,
             $timeBetweenComfortMessagesSeconds=null,
             $enableGuardTimer=null,
             $guardTimerSeconds=null,
             ReplacementUserIdList $agentUserIdList=null,
             $allowCallWaitingForAgents=null,
             $allowCallsToAgentsInWrapUp=null,
             $enableCallQueueWhenNoAgentsAvailable=null,
             $statisticsSource=null
    ) {
        $this->serviceUserId                        = new UserId($serviceUserId);
        $this->serviceInstanceProfile               = $serviceInstanceProfile;
        $this->policy                               = new HuntPolicy($policy);
        $this->huntAfterNoAnswer                    = $huntAfterNoAnswer;
        $this->noAnswerNumberOfRings                = new HuntNoAnswerRings($noAnswerNumberOfRings);
        $this->forwardAfterTimeout                  = $forwardAfterTimeout;
        $this->forwardTimeoutSeconds                = new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->forwardToPhoneNumber                 = new OutgoingDN($forwardToPhoneNumber);
        $this->enableVideo                          = $enableVideo;
        $this->queueLength                          = $queueLength;
        $this->allowAgentLogoff                     = $allowAgentLogoff;
        $this->playMusicOnHold                      = $playMusicOnHold;
        $this->playComfortMessage                   = $playComfortMessage;
        $this->timeBetweenComfortMessagesSeconds    = $timeBetweenComfortMessagesSeconds;
        $this->enableGuardTimer                     = $enableGuardTimer;
        $this->guardTimerSeconds                    = $guardTimerSeconds;
        $this->agentUserIdList                      = $agentUserIdList;
        $this->allowCallWaitingForAgents            = $allowCallWaitingForAgents;
        $this->allowCallsToAgentsInWrapUp           = $allowCallsToAgentsInWrapUp;
        $this->enableCallQueueWhenNoAgentsAvailable = $enableCallQueueWhenNoAgentsAvailable;
        $this->statisticsSource                     = new CallCenterStatisticsSource($statisticsSource);
        $this->args                                 = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceModifyProfile($serviceInstanceProfile);
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

    public function setEnableVideo($enableVideo)
    {
        $enableVideo and $this->enableVideo = new xs:boolean($enableVideo);
    }

    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->value();
    }

    public function setQueueLength($queueLength)
    {
        $queueLength and $this->queueLength = new CallCenterQueueLength($queueLength);
    }

    public function getQueueLength()
    {
        return (!$this->queueLength) ?: $this->queueLength->value();
    }

    public function setAllowAgentLogoff($allowAgentLogoff)
    {
        $allowAgentLogoff and $this->allowAgentLogoff = new xs:boolean($allowAgentLogoff);
    }

    public function getAllowAgentLogoff()
    {
        return (!$this->allowAgentLogoff) ?: $this->allowAgentLogoff->value();
    }

    public function setPlayMusicOnHold($playMusicOnHold)
    {
        $playMusicOnHold and $this->playMusicOnHold = new xs:boolean($playMusicOnHold);
    }

    public function getPlayMusicOnHold()
    {
        return (!$this->playMusicOnHold) ?: $this->playMusicOnHold->value();
    }

    public function setPlayComfortMessage($playComfortMessage)
    {
        $playComfortMessage and $this->playComfortMessage = new xs:boolean($playComfortMessage);
    }

    public function getPlayComfortMessage()
    {
        return (!$this->playComfortMessage) ?: $this->playComfortMessage->value();
    }

    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds)
    {
        $timeBetweenComfortMessagesSeconds and $this->timeBetweenComfortMessagesSeconds = new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
    }

    public function getTimeBetweenComfortMessagesSeconds()
    {
        return (!$this->timeBetweenComfortMessagesSeconds) ?: $this->timeBetweenComfortMessagesSeconds->value();
    }

    public function setEnableGuardTimer($enableGuardTimer)
    {
        $enableGuardTimer and $this->enableGuardTimer = new xs:boolean($enableGuardTimer);
    }

    public function getEnableGuardTimer()
    {
        return (!$this->enableGuardTimer) ?: $this->enableGuardTimer->value();
    }

    public function setGuardTimerSeconds($guardTimerSeconds)
    {
        $guardTimerSeconds and $this->guardTimerSeconds = new CallCenterGuardTimerSeconds($guardTimerSeconds);
    }

    public function getGuardTimerSeconds()
    {
        return (!$this->guardTimerSeconds) ?: $this->guardTimerSeconds->value();
    }

    public function setAgentUserIdList($agentUserIdList)
    {
        $agentUserIdList and $this->agentUserIdList = new ReplacementUserIdList($agentUserIdList);
    }

    public function getAgentUserIdList()
    {
        return (!$this->agentUserIdList) ?: $this->agentUserIdList->value();
    }

    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents)
    {
        $allowCallWaitingForAgents and $this->allowCallWaitingForAgents = new xs:boolean($allowCallWaitingForAgents);
    }

    public function getAllowCallWaitingForAgents()
    {
        return (!$this->allowCallWaitingForAgents) ?: $this->allowCallWaitingForAgents->value();
    }

    public function setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp)
    {
        $allowCallsToAgentsInWrapUp and $this->allowCallsToAgentsInWrapUp = new xs:boolean($allowCallsToAgentsInWrapUp);
    }

    public function getAllowCallsToAgentsInWrapUp()
    {
        return (!$this->allowCallsToAgentsInWrapUp) ?: $this->allowCallsToAgentsInWrapUp->value();
    }

    public function setEnableCallQueueWhenNoAgentsAvailable($enableCallQueueWhenNoAgentsAvailable)
    {
        $enableCallQueueWhenNoAgentsAvailable and $this->enableCallQueueWhenNoAgentsAvailable = new xs:boolean($enableCallQueueWhenNoAgentsAvailable);
    }

    public function getEnableCallQueueWhenNoAgentsAvailable()
    {
        return (!$this->enableCallQueueWhenNoAgentsAvailable) ?: $this->enableCallQueueWhenNoAgentsAvailable->value();
    }

    public function setStatisticsSource($statisticsSource)
    {
        $statisticsSource and $this->statisticsSource = new CallCenterStatisticsSource($statisticsSource);
    }

    public function getStatisticsSource()
    {
        return (!$this->statisticsSource) ?: $this->statisticsSource->value();
    }
}
