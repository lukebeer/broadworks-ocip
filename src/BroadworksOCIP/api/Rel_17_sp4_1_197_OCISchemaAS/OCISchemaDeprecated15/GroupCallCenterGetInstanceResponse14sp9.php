<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterStatisticsSource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterQueueLength;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupCallCenterGetInstanceRequest14sp9.
 *         Contains the service profile information and a table of assigned users.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 *         "Hiragana Last Name", "Hiragana First Name", "Weight".
 */
class GroupCallCenterGetInstanceResponse14sp9 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterGetInstanceResponse14sp9';
    protected $serviceInstanceProfile;
    protected $policy;
    protected $huntAfterNoAnswer;
    protected $noAnswerNumberOfRings;
    protected $forwardAfterTimeout;
    protected $forwardTimeoutSeconds;
    protected $forwardToPhoneNumber;
    protected $enableVideo;
    protected $queueLength;
    protected $allowAgentLogoff;
    protected $playMusicOnHold;
    protected $playComfortMessage;
    protected $timeBetweenComfortMessagesSeconds;
    protected $enableGuardTimer;
    protected $guardTimerSeconds;
    protected $agentUserTable;
    protected $allowCallWaitingForAgents;
    protected $allowCallsToAgentsInWrapUp;
    protected $enableCallQueueWhenNoAgentsAvailable;
    protected $statisticsSource;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\GroupCallCenterGetInstanceResponse14sp9 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceReadProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceReadProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setPolicy($policy = null)
    {
        $this->policy = ($policy InstanceOf HuntPolicy)
             ? $policy
             : new HuntPolicy($policy);
        $this->policy->setElementName('policy');
        return $this;
    }

    /**
     * 
     * @return HuntPolicy $policy
     */
    public function getPolicy()
    {
        return ($this->policy)
            ? $this->policy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer = null)
    {
        $this->huntAfterNoAnswer = new PrimitiveType($huntAfterNoAnswer);
        $this->huntAfterNoAnswer->setElementName('huntAfterNoAnswer');
        return $this;
    }

    /**
     * 
     * @return boolean $huntAfterNoAnswer
     */
    public function getHuntAfterNoAnswer()
    {
        return ($this->huntAfterNoAnswer)
            ? $this->huntAfterNoAnswer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf HuntNoAnswerRings)
             ? $noAnswerNumberOfRings
             : new HuntNoAnswerRings($noAnswerNumberOfRings);
        $this->noAnswerNumberOfRings->setElementName('noAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return HuntNoAnswerRings $noAnswerNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return ($this->noAnswerNumberOfRings)
            ? $this->noAnswerNumberOfRings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForwardAfterTimeout($forwardAfterTimeout = null)
    {
        $this->forwardAfterTimeout = new PrimitiveType($forwardAfterTimeout);
        $this->forwardAfterTimeout->setElementName('forwardAfterTimeout');
        return $this;
    }

    /**
     * 
     * @return boolean $forwardAfterTimeout
     */
    public function getForwardAfterTimeout()
    {
        return ($this->forwardAfterTimeout)
            ? $this->forwardAfterTimeout->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds = null)
    {
        $this->forwardTimeoutSeconds = ($forwardTimeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $forwardTimeoutSeconds
             : new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->forwardTimeoutSeconds->setElementName('forwardTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return HuntForwardTimeoutSeconds $forwardTimeoutSeconds
     */
    public function getForwardTimeoutSeconds()
    {
        return ($this->forwardTimeoutSeconds)
            ? $this->forwardTimeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDN)
             ? $forwardToPhoneNumber
             : new OutgoingDN($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setElementName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $forwardToPhoneNumber
     */
    public function getForwardToPhoneNumber()
    {
        return ($this->forwardToPhoneNumber)
            ? $this->forwardToPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        $this->enableVideo = new PrimitiveType($enableVideo);
        $this->enableVideo->setElementName('enableVideo');
        return $this;
    }

    /**
     * 
     * @return boolean $enableVideo
     */
    public function getEnableVideo()
    {
        return ($this->enableVideo)
            ? $this->enableVideo->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setQueueLength($queueLength = null)
    {
        $this->queueLength = ($queueLength InstanceOf CallCenterQueueLength)
             ? $queueLength
             : new CallCenterQueueLength($queueLength);
        $this->queueLength->setElementName('queueLength');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueLength $queueLength
     */
    public function getQueueLength()
    {
        return ($this->queueLength)
            ? $this->queueLength->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowAgentLogoff($allowAgentLogoff = null)
    {
        $this->allowAgentLogoff = new PrimitiveType($allowAgentLogoff);
        $this->allowAgentLogoff->setElementName('allowAgentLogoff');
        return $this;
    }

    /**
     * 
     * @return boolean $allowAgentLogoff
     */
    public function getAllowAgentLogoff()
    {
        return ($this->allowAgentLogoff)
            ? $this->allowAgentLogoff->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayMusicOnHold($playMusicOnHold = null)
    {
        $this->playMusicOnHold = new PrimitiveType($playMusicOnHold);
        $this->playMusicOnHold->setElementName('playMusicOnHold');
        return $this;
    }

    /**
     * 
     * @return boolean $playMusicOnHold
     */
    public function getPlayMusicOnHold()
    {
        return ($this->playMusicOnHold)
            ? $this->playMusicOnHold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayComfortMessage($playComfortMessage = null)
    {
        $this->playComfortMessage = new PrimitiveType($playComfortMessage);
        $this->playComfortMessage->setElementName('playComfortMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $playComfortMessage
     */
    public function getPlayComfortMessage()
    {
        return ($this->playComfortMessage)
            ? $this->playComfortMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->timeBetweenComfortMessagesSeconds->setElementName('timeBetweenComfortMessagesSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterTimeBetweenComfortMessagesSeconds $timeBetweenComfortMessagesSeconds
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return ($this->timeBetweenComfortMessagesSeconds)
            ? $this->timeBetweenComfortMessagesSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableGuardTimer($enableGuardTimer = null)
    {
        $this->enableGuardTimer = new PrimitiveType($enableGuardTimer);
        $this->enableGuardTimer->setElementName('enableGuardTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $enableGuardTimer
     */
    public function getEnableGuardTimer()
    {
        return ($this->enableGuardTimer)
            ? $this->enableGuardTimer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGuardTimerSeconds($guardTimerSeconds = null)
    {
        $this->guardTimerSeconds = ($guardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $guardTimerSeconds
             : new CallCenterGuardTimerSeconds($guardTimerSeconds);
        $this->guardTimerSeconds->setElementName('guardTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterGuardTimerSeconds $guardTimerSeconds
     */
    public function getGuardTimerSeconds()
    {
        return ($this->guardTimerSeconds)
            ? $this->guardTimerSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAgentUserTable(TableType $agentUserTable = null)
    {
        $this->agentUserTable = $agentUserTable;
        $this->agentUserTable->setElementName('agentUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAgentUserTable()
    {
        return $this->agentUserTable;
    }

    /**
     * 
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents = null)
    {
        $this->allowCallWaitingForAgents = new PrimitiveType($allowCallWaitingForAgents);
        $this->allowCallWaitingForAgents->setElementName('allowCallWaitingForAgents');
        return $this;
    }

    /**
     * 
     * @return boolean $allowCallWaitingForAgents
     */
    public function getAllowCallWaitingForAgents()
    {
        return ($this->allowCallWaitingForAgents)
            ? $this->allowCallWaitingForAgents->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp = null)
    {
        $this->allowCallsToAgentsInWrapUp = new PrimitiveType($allowCallsToAgentsInWrapUp);
        $this->allowCallsToAgentsInWrapUp->setElementName('allowCallsToAgentsInWrapUp');
        return $this;
    }

    /**
     * 
     * @return boolean $allowCallsToAgentsInWrapUp
     */
    public function getAllowCallsToAgentsInWrapUp()
    {
        return ($this->allowCallsToAgentsInWrapUp)
            ? $this->allowCallsToAgentsInWrapUp->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableCallQueueWhenNoAgentsAvailable($enableCallQueueWhenNoAgentsAvailable = null)
    {
        $this->enableCallQueueWhenNoAgentsAvailable = new PrimitiveType($enableCallQueueWhenNoAgentsAvailable);
        $this->enableCallQueueWhenNoAgentsAvailable->setElementName('enableCallQueueWhenNoAgentsAvailable');
        return $this;
    }

    /**
     * 
     * @return boolean $enableCallQueueWhenNoAgentsAvailable
     */
    public function getEnableCallQueueWhenNoAgentsAvailable()
    {
        return ($this->enableCallQueueWhenNoAgentsAvailable)
            ? $this->enableCallQueueWhenNoAgentsAvailable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStatisticsSource($statisticsSource = null)
    {
        $this->statisticsSource = ($statisticsSource InstanceOf CallCenterStatisticsSource)
             ? $statisticsSource
             : new CallCenterStatisticsSource($statisticsSource);
        $this->statisticsSource->setElementName('statisticsSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsSource $statisticsSource
     */
    public function getStatisticsSource()
    {
        return ($this->statisticsSource)
            ? $this->statisticsSource->getElementValue()
            : null;
    }
}
