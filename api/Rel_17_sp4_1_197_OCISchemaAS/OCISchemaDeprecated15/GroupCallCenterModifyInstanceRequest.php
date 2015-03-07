<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterStatisticsSource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterQueueLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
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
    public    $name                                  = __CLASS__;
    protected $serviceUserId                         = null;
    protected $serviceInstanceProfile                = null;
    protected $policy                                = null;
    protected $huntAfterNoAnswer                     = null;
    protected $noAnswerNumberOfRings                 = null;
    protected $forwardAfterTimeout                   = null;
    protected $forwardTimeoutSeconds                 = null;
    protected $forwardToPhoneNumber                  = null;
    protected $enableVideo                           = null;
    protected $queueLength                           = null;
    protected $allowAgentLogoff                      = null;
    protected $playMusicOnHold                       = null;
    protected $playComfortMessage                    = null;
    protected $timeBetweenComfortMessagesSeconds     = null;
    protected $enableGuardTimer                      = null;
    protected $guardTimerSeconds                     = null;
    protected $agentUserIdList                       = null;
    protected $allowCallWaitingForAgents             = null;
    protected $allowCallsToAgentsInWrapUp            = null;
    protected $enableCallQueueWhenNoAgentsAvailable  = null;
    protected $statisticsSource                      = null;

    public function __construct(
         $serviceUserId,
         ServiceInstanceModifyProfile $serviceInstanceProfile = null,
         $policy = null,
         $huntAfterNoAnswer = null,
         $noAnswerNumberOfRings = null,
         $forwardAfterTimeout = null,
         $forwardTimeoutSeconds = null,
         $forwardToPhoneNumber = null,
         $enableVideo = null,
         $queueLength = null,
         $allowAgentLogoff = null,
         $playMusicOnHold = null,
         $playComfortMessage = null,
         $timeBetweenComfortMessagesSeconds = null,
         $enableGuardTimer = null,
         $guardTimerSeconds = null,
         ReplacementUserIdList $agentUserIdList = null,
         $allowCallWaitingForAgents = null,
         $allowCallsToAgentsInWrapUp = null,
         $enableCallQueueWhenNoAgentsAvailable = null,
         $statisticsSource = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setPolicy($policy);
        $this->setHuntAfterNoAnswer($huntAfterNoAnswer);
        $this->setNoAnswerNumberOfRings($noAnswerNumberOfRings);
        $this->setForwardAfterTimeout($forwardAfterTimeout);
        $this->setForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->setForwardToPhoneNumber($forwardToPhoneNumber);
        $this->setEnableVideo($enableVideo);
        $this->setQueueLength($queueLength);
        $this->setAllowAgentLogoff($allowAgentLogoff);
        $this->setPlayMusicOnHold($playMusicOnHold);
        $this->setPlayComfortMessage($playComfortMessage);
        $this->setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->setEnableGuardTimer($enableGuardTimer);
        $this->setGuardTimerSeconds($guardTimerSeconds);
        $this->setAgentUserIdList($agentUserIdList);
        $this->setAllowCallWaitingForAgents($allowCallWaitingForAgents);
        $this->setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp);
        $this->setEnableCallQueueWhenNoAgentsAvailable($enableCallQueueWhenNoAgentsAvailable);
        $this->setStatisticsSource($statisticsSource);
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

    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setPolicy($policy = null)
    {
        $this->policy = ($policy InstanceOf HuntPolicy)
             ? $policy
             : new HuntPolicy($policy);
    }

    public function getPolicy()
    {
        return (!$this->policy) ?: $this->policy->value();
    }

    public function setHuntAfterNoAnswer(xs:boolean $huntAfterNoAnswer = null)
    {
    }

    public function getHuntAfterNoAnswer()
    {
        return (!$this->huntAfterNoAnswer) ?: $this->huntAfterNoAnswer->value();
    }

    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf HuntNoAnswerRings)
             ? $noAnswerNumberOfRings
             : new HuntNoAnswerRings($noAnswerNumberOfRings);
    }

    public function getNoAnswerNumberOfRings()
    {
        return (!$this->noAnswerNumberOfRings) ?: $this->noAnswerNumberOfRings->value();
    }

    public function setForwardAfterTimeout(xs:boolean $forwardAfterTimeout = null)
    {
    }

    public function getForwardAfterTimeout()
    {
        return (!$this->forwardAfterTimeout) ?: $this->forwardAfterTimeout->value();
    }

    public function setForwardTimeoutSeconds($forwardTimeoutSeconds = null)
    {
        $this->forwardTimeoutSeconds = ($forwardTimeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $forwardTimeoutSeconds
             : new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
    }

    public function getForwardTimeoutSeconds()
    {
        return (!$this->forwardTimeoutSeconds) ?: $this->forwardTimeoutSeconds->value();
    }

    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDN)
             ? $forwardToPhoneNumber
             : new OutgoingDN($forwardToPhoneNumber);
    }

    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->value();
    }

    public function setEnableVideo(xs:boolean $enableVideo = null)
    {
    }

    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->value();
    }

    public function setQueueLength($queueLength = null)
    {
        $this->queueLength = ($queueLength InstanceOf CallCenterQueueLength)
             ? $queueLength
             : new CallCenterQueueLength($queueLength);
    }

    public function getQueueLength()
    {
        return (!$this->queueLength) ?: $this->queueLength->value();
    }

    public function setAllowAgentLogoff(xs:boolean $allowAgentLogoff = null)
    {
    }

    public function getAllowAgentLogoff()
    {
        return (!$this->allowAgentLogoff) ?: $this->allowAgentLogoff->value();
    }

    public function setPlayMusicOnHold(xs:boolean $playMusicOnHold = null)
    {
    }

    public function getPlayMusicOnHold()
    {
        return (!$this->playMusicOnHold) ?: $this->playMusicOnHold->value();
    }

    public function setPlayComfortMessage(xs:boolean $playComfortMessage = null)
    {
    }

    public function getPlayComfortMessage()
    {
        return (!$this->playComfortMessage) ?: $this->playComfortMessage->value();
    }

    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
    }

    public function getTimeBetweenComfortMessagesSeconds()
    {
        return (!$this->timeBetweenComfortMessagesSeconds) ?: $this->timeBetweenComfortMessagesSeconds->value();
    }

    public function setEnableGuardTimer(xs:boolean $enableGuardTimer = null)
    {
    }

    public function getEnableGuardTimer()
    {
        return (!$this->enableGuardTimer) ?: $this->enableGuardTimer->value();
    }

    public function setGuardTimerSeconds($guardTimerSeconds = null)
    {
        $this->guardTimerSeconds = ($guardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $guardTimerSeconds
             : new CallCenterGuardTimerSeconds($guardTimerSeconds);
    }

    public function getGuardTimerSeconds()
    {
        return (!$this->guardTimerSeconds) ?: $this->guardTimerSeconds->value();
    }

    public function setAgentUserIdList(ReplacementUserIdList $agentUserIdList = null)
    {
    }

    public function getAgentUserIdList()
    {
        return (!$this->agentUserIdList) ?: $this->agentUserIdList->value();
    }

    public function setAllowCallWaitingForAgents(xs:boolean $allowCallWaitingForAgents = null)
    {
    }

    public function getAllowCallWaitingForAgents()
    {
        return (!$this->allowCallWaitingForAgents) ?: $this->allowCallWaitingForAgents->value();
    }

    public function setAllowCallsToAgentsInWrapUp(xs:boolean $allowCallsToAgentsInWrapUp = null)
    {
    }

    public function getAllowCallsToAgentsInWrapUp()
    {
        return (!$this->allowCallsToAgentsInWrapUp) ?: $this->allowCallsToAgentsInWrapUp->value();
    }

    public function setEnableCallQueueWhenNoAgentsAvailable(xs:boolean $enableCallQueueWhenNoAgentsAvailable = null)
    {
    }

    public function getEnableCallQueueWhenNoAgentsAvailable()
    {
        return (!$this->enableCallQueueWhenNoAgentsAvailable) ?: $this->enableCallQueueWhenNoAgentsAvailable->value();
    }

    public function setStatisticsSource($statisticsSource = null)
    {
        $this->statisticsSource = ($statisticsSource InstanceOf CallCenterStatisticsSource)
             ? $statisticsSource
             : new CallCenterStatisticsSource($statisticsSource);
    }

    public function getStatisticsSource()
    {
        return (!$this->statisticsSource) ?: $this->statisticsSource->value();
    }
}
