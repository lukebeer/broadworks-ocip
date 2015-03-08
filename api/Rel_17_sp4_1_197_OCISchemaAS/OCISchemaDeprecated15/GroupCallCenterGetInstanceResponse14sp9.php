<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterStatisticsSource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterQueueLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupCallCenterGetInstanceRequest14sp9.
 *         Contains the service profile information and a table of assigned users.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 *         "Hiragana Last Name", "Hiragana First Name", "Weight".
 */
class GroupCallCenterGetInstanceResponse14sp9 extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $serviceInstanceProfile               = null;
    protected $policy                               = null;
    protected $huntAfterNoAnswer                    = null;
    protected $noAnswerNumberOfRings                = null;
    protected $forwardAfterTimeout                  = null;
    protected $forwardTimeoutSeconds                = null;
    protected $forwardToPhoneNumber                 = null;
    protected $enableVideo                          = null;
    protected $queueLength                          = null;
    protected $allowAgentLogoff                     = null;
    protected $playMusicOnHold                      = null;
    protected $playComfortMessage                   = null;
    protected $timeBetweenComfortMessagesSeconds    = null;
    protected $enableGuardTimer                     = null;
    protected $guardTimerSeconds                    = null;
    protected $agentUserTable                       = null;
    protected $allowCallWaitingForAgents            = null;
    protected $allowCallsToAgentsInWrapUp           = null;
    protected $enableCallQueueWhenNoAgentsAvailable = null;
    protected $statisticsSource                     = null;


    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile =  $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * Policy for distributing calls within a hunt group or call center.
     */
    public function setPolicy($policy = null)
    {
        $this->policy = ($policy InstanceOf HuntPolicy)
             ? $policy
             : new HuntPolicy($policy);
    }

    /**
     * Policy for distributing calls within a hunt group or call center.
     */
    public function getPolicy()
    {
        return (!$this->policy) ?: $this->policy->getValue();
    }

    /**
     * 
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer = null)
    {
        $this->huntAfterNoAnswer = (boolean) $huntAfterNoAnswer;
    }

    /**
     * 
     */
    public function getHuntAfterNoAnswer()
    {
        return (!$this->huntAfterNoAnswer) ?: $this->huntAfterNoAnswer->getValue();
    }

    /**
     * Number of rings to wait for the currently hunted agent to answer before
     *         hunting to the next available agent.
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf HuntNoAnswerRings)
             ? $noAnswerNumberOfRings
             : new HuntNoAnswerRings($noAnswerNumberOfRings);
    }

    /**
     * Number of rings to wait for the currently hunted agent to answer before
     *         hunting to the next available agent.
     */
    public function getNoAnswerNumberOfRings()
    {
        return (!$this->noAnswerNumberOfRings) ?: $this->noAnswerNumberOfRings->getValue();
    }

    /**
     * 
     */
    public function setForwardAfterTimeout($forwardAfterTimeout = null)
    {
        $this->forwardAfterTimeout = (boolean) $forwardAfterTimeout;
    }

    /**
     * 
     */
    public function getForwardAfterTimeout()
    {
        return (!$this->forwardAfterTimeout) ?: $this->forwardAfterTimeout->getValue();
    }

    /**
     * Time to wait for any agent to answer before forwarding the caller elsewhere.
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds = null)
    {
        $this->forwardTimeoutSeconds = ($forwardTimeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $forwardTimeoutSeconds
             : new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
    }

    /**
     * Time to wait for any agent to answer before forwarding the caller elsewhere.
     */
    public function getForwardTimeoutSeconds()
    {
        return (!$this->forwardTimeoutSeconds) ?: $this->forwardTimeoutSeconds->getValue();
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDN)
             ? $forwardToPhoneNumber
             : new OutgoingDN($forwardToPhoneNumber);
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        $this->enableVideo = (boolean) $enableVideo;
    }

    /**
     * 
     */
    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->getValue();
    }

    /**
     * The limit for the number of calls the system will keep in queue, waiting for an available agent.
     */
    public function setQueueLength($queueLength = null)
    {
        $this->queueLength = ($queueLength InstanceOf CallCenterQueueLength)
             ? $queueLength
             : new CallCenterQueueLength($queueLength);
    }

    /**
     * The limit for the number of calls the system will keep in queue, waiting for an available agent.
     */
    public function getQueueLength()
    {
        return (!$this->queueLength) ?: $this->queueLength->getValue();
    }

    /**
     * 
     */
    public function setAllowAgentLogoff($allowAgentLogoff = null)
    {
        $this->allowAgentLogoff = (boolean) $allowAgentLogoff;
    }

    /**
     * 
     */
    public function getAllowAgentLogoff()
    {
        return (!$this->allowAgentLogoff) ?: $this->allowAgentLogoff->getValue();
    }

    /**
     * 
     */
    public function setPlayMusicOnHold($playMusicOnHold = null)
    {
        $this->playMusicOnHold = (boolean) $playMusicOnHold;
    }

    /**
     * 
     */
    public function getPlayMusicOnHold()
    {
        return (!$this->playMusicOnHold) ?: $this->playMusicOnHold->getValue();
    }

    /**
     * 
     */
    public function setPlayComfortMessage($playComfortMessage = null)
    {
        $this->playComfortMessage = (boolean) $playComfortMessage;
    }

    /**
     * 
     */
    public function getPlayComfortMessage()
    {
        return (!$this->playComfortMessage) ?: $this->playComfortMessage->getValue();
    }

    /**
     * The interval in seconds between each repetition of the comfort message played to queued users.
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
    }

    /**
     * The interval in seconds between each repetition of the comfort message played to queued users.
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return (!$this->timeBetweenComfortMessagesSeconds) ?: $this->timeBetweenComfortMessagesSeconds->getValue();
    }

    /**
     * 
     */
    public function setEnableGuardTimer($enableGuardTimer = null)
    {
        $this->enableGuardTimer = (boolean) $enableGuardTimer;
    }

    /**
     * 
     */
    public function getEnableGuardTimer()
    {
        return (!$this->enableGuardTimer) ?: $this->enableGuardTimer->getValue();
    }

    /**
     * The timer determines how long the system will wait before routing a call to a free agent.
     */
    public function setGuardTimerSeconds($guardTimerSeconds = null)
    {
        $this->guardTimerSeconds = ($guardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $guardTimerSeconds
             : new CallCenterGuardTimerSeconds($guardTimerSeconds);
    }

    /**
     * The timer determines how long the system will wait before routing a call to a free agent.
     */
    public function getGuardTimerSeconds()
    {
        return (!$this->guardTimerSeconds) ?: $this->guardTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setAgentUserTable(core:OCITable $agentUserTable = null)
    {
        $this->agentUserTable =  $agentUserTable;
    }

    /**
     * 
     */
    public function getAgentUserTable()
    {
        return (!$this->agentUserTable) ?: $this->agentUserTable->getValue();
    }

    /**
     * 
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents = null)
    {
        $this->allowCallWaitingForAgents = (boolean) $allowCallWaitingForAgents;
    }

    /**
     * 
     */
    public function getAllowCallWaitingForAgents()
    {
        return (!$this->allowCallWaitingForAgents) ?: $this->allowCallWaitingForAgents->getValue();
    }

    /**
     * 
     */
    public function setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp = null)
    {
        $this->allowCallsToAgentsInWrapUp = (boolean) $allowCallsToAgentsInWrapUp;
    }

    /**
     * 
     */
    public function getAllowCallsToAgentsInWrapUp()
    {
        return (!$this->allowCallsToAgentsInWrapUp) ?: $this->allowCallsToAgentsInWrapUp->getValue();
    }

    /**
     * 
     */
    public function setEnableCallQueueWhenNoAgentsAvailable($enableCallQueueWhenNoAgentsAvailable = null)
    {
        $this->enableCallQueueWhenNoAgentsAvailable = (boolean) $enableCallQueueWhenNoAgentsAvailable;
    }

    /**
     * 
     */
    public function getEnableCallQueueWhenNoAgentsAvailable()
    {
        return (!$this->enableCallQueueWhenNoAgentsAvailable) ?: $this->enableCallQueueWhenNoAgentsAvailable->getValue();
    }

    /**
     * The call center statistics source.
     */
    public function setStatisticsSource($statisticsSource = null)
    {
        $this->statisticsSource = ($statisticsSource InstanceOf CallCenterStatisticsSource)
             ? $statisticsSource
             : new CallCenterStatisticsSource($statisticsSource);
    }

    /**
     * The call center statistics source.
     */
    public function getStatisticsSource()
    {
        return (!$this->statisticsSource) ?: $this->statisticsSource->getValue();
    }
}
