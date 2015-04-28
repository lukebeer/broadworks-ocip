<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterForceDeliveryWaitTimeSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\NoAnswerTimeoutRings;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterWrapUpSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueLength16;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AgentACDAutomaticState;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AudioFileCodec;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify a Route Point instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupRoutePointModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupRoutePointModifyInstanceRequest';
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $networkClassOfService;
    protected $externalPreferredAudioCodec;
    protected $internalPreferredAudioCodec;
    protected $queueLength;
    protected $noAnswerTimeoutRings;
    protected $enableVideo;
    protected $playRingingWhenOfferingCall;
    protected $overrideAgentWrapUpTime;
    protected $wrapUpSeconds;
    protected $enableAutomaticStateChangeForAgents;
    protected $agentStateAfterCall;
    protected $agentUnavailableCode;
    protected $forceDeliveryOfCalls;
    protected $forceDeliveryWaitTimeSeconds;

    public function __construct(
         $serviceUserId = '',
         $serviceInstanceProfile = null,
         $networkClassOfService = null,
         $externalPreferredAudioCodec = null,
         $internalPreferredAudioCodec = null,
         $queueLength = null,
         $noAnswerTimeoutRings = null,
         $enableVideo = null,
         $playRingingWhenOfferingCall = null,
         $overrideAgentWrapUpTime = null,
         $wrapUpSeconds = null,
         $enableAutomaticStateChangeForAgents = null,
         $agentStateAfterCall = null,
         $agentUnavailableCode = null,
         $forceDeliveryOfCalls = null,
         $forceDeliveryWaitTimeSeconds = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setNetworkClassOfService($networkClassOfService);
        $this->setExternalPreferredAudioCodec($externalPreferredAudioCodec);
        $this->setInternalPreferredAudioCodec($internalPreferredAudioCodec);
        $this->setQueueLength($queueLength);
        $this->setNoAnswerTimeoutRings($noAnswerTimeoutRings);
        $this->setEnableVideo($enableVideo);
        $this->setPlayRingingWhenOfferingCall($playRingingWhenOfferingCall);
        $this->setOverrideAgentWrapUpTime($overrideAgentWrapUpTime);
        $this->setWrapUpSeconds($wrapUpSeconds);
        $this->setEnableAutomaticStateChangeForAgents($enableAutomaticStateChangeForAgents);
        $this->setAgentStateAfterCall($agentStateAfterCall);
        $this->setAgentUnavailableCode($agentUnavailableCode);
        $this->setForceDeliveryOfCalls($forceDeliveryOfCalls);
        $this->setForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceModifyProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceModifyProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceModifyProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setNetworkClassOfService($networkClassOfService = null)
    {
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
        $this->networkClassOfService->setElementName('networkClassOfService');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceName $networkClassOfService
     */
    public function getNetworkClassOfService()
    {
        return ($this->networkClassOfService)
            ? $this->networkClassOfService->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExternalPreferredAudioCodec($externalPreferredAudioCodec = null)
    {
        $this->externalPreferredAudioCodec = ($externalPreferredAudioCodec InstanceOf AudioFileCodec)
             ? $externalPreferredAudioCodec
             : new AudioFileCodec($externalPreferredAudioCodec);
        $this->externalPreferredAudioCodec->setElementName('externalPreferredAudioCodec');
        return $this;
    }

    /**
     * 
     * @return AudioFileCodec $externalPreferredAudioCodec
     */
    public function getExternalPreferredAudioCodec()
    {
        return ($this->externalPreferredAudioCodec)
            ? $this->externalPreferredAudioCodec->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInternalPreferredAudioCodec($internalPreferredAudioCodec = null)
    {
        $this->internalPreferredAudioCodec = ($internalPreferredAudioCodec InstanceOf AudioFileCodec)
             ? $internalPreferredAudioCodec
             : new AudioFileCodec($internalPreferredAudioCodec);
        $this->internalPreferredAudioCodec->setElementName('internalPreferredAudioCodec');
        return $this;
    }

    /**
     * 
     * @return AudioFileCodec $internalPreferredAudioCodec
     */
    public function getInternalPreferredAudioCodec()
    {
        return ($this->internalPreferredAudioCodec)
            ? $this->internalPreferredAudioCodec->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setQueueLength($queueLength = null)
    {
        $this->queueLength = ($queueLength InstanceOf CallCenterQueueLength16)
             ? $queueLength
             : new CallCenterQueueLength16($queueLength);
        $this->queueLength->setElementName('queueLength');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueLength16 $queueLength
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
    public function setNoAnswerTimeoutRings($noAnswerTimeoutRings = null)
    {
        $this->noAnswerTimeoutRings = ($noAnswerTimeoutRings InstanceOf NoAnswerTimeoutRings)
             ? $noAnswerTimeoutRings
             : new NoAnswerTimeoutRings($noAnswerTimeoutRings);
        $this->noAnswerTimeoutRings->setElementName('noAnswerTimeoutRings');
        return $this;
    }

    /**
     * 
     * @return NoAnswerTimeoutRings $noAnswerTimeoutRings
     */
    public function getNoAnswerTimeoutRings()
    {
        return ($this->noAnswerTimeoutRings)
            ? $this->noAnswerTimeoutRings->getElementValue()
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
    public function setPlayRingingWhenOfferingCall($playRingingWhenOfferingCall = null)
    {
        $this->playRingingWhenOfferingCall = new PrimitiveType($playRingingWhenOfferingCall);
        $this->playRingingWhenOfferingCall->setElementName('playRingingWhenOfferingCall');
        return $this;
    }

    /**
     * 
     * @return boolean $playRingingWhenOfferingCall
     */
    public function getPlayRingingWhenOfferingCall()
    {
        return ($this->playRingingWhenOfferingCall)
            ? $this->playRingingWhenOfferingCall->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOverrideAgentWrapUpTime($overrideAgentWrapUpTime = null)
    {
        $this->overrideAgentWrapUpTime = new PrimitiveType($overrideAgentWrapUpTime);
        $this->overrideAgentWrapUpTime->setElementName('overrideAgentWrapUpTime');
        return $this;
    }

    /**
     * 
     * @return boolean $overrideAgentWrapUpTime
     */
    public function getOverrideAgentWrapUpTime()
    {
        return ($this->overrideAgentWrapUpTime)
            ? $this->overrideAgentWrapUpTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWrapUpSeconds($wrapUpSeconds = null)
    {
        $this->wrapUpSeconds = ($wrapUpSeconds InstanceOf CallCenterWrapUpSeconds)
             ? $wrapUpSeconds
             : new CallCenterWrapUpSeconds($wrapUpSeconds);
        $this->wrapUpSeconds->setElementName('wrapUpSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterWrapUpSeconds $wrapUpSeconds
     */
    public function getWrapUpSeconds()
    {
        return ($this->wrapUpSeconds)
            ? $this->wrapUpSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableAutomaticStateChangeForAgents($enableAutomaticStateChangeForAgents = null)
    {
        $this->enableAutomaticStateChangeForAgents = new PrimitiveType($enableAutomaticStateChangeForAgents);
        $this->enableAutomaticStateChangeForAgents->setElementName('enableAutomaticStateChangeForAgents');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutomaticStateChangeForAgents
     */
    public function getEnableAutomaticStateChangeForAgents()
    {
        return ($this->enableAutomaticStateChangeForAgents)
            ? $this->enableAutomaticStateChangeForAgents->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAgentStateAfterCall($agentStateAfterCall = null)
    {
        $this->agentStateAfterCall = ($agentStateAfterCall InstanceOf AgentACDAutomaticState)
             ? $agentStateAfterCall
             : new AgentACDAutomaticState($agentStateAfterCall);
        $this->agentStateAfterCall->setElementName('agentStateAfterCall');
        return $this;
    }

    /**
     * 
     * @return AgentACDAutomaticState $agentStateAfterCall
     */
    public function getAgentStateAfterCall()
    {
        return ($this->agentStateAfterCall)
            ? $this->agentStateAfterCall->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAgentUnavailableCode($agentUnavailableCode = null)
    {
        $this->agentUnavailableCode = ($agentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $agentUnavailableCode
             : new CallCenterAgentUnavailableCode($agentUnavailableCode);
        $this->agentUnavailableCode->setElementName('agentUnavailableCode');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $agentUnavailableCode
     */
    public function getAgentUnavailableCode()
    {
        return ($this->agentUnavailableCode)
            ? $this->agentUnavailableCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForceDeliveryOfCalls($forceDeliveryOfCalls = null)
    {
        $this->forceDeliveryOfCalls = new PrimitiveType($forceDeliveryOfCalls);
        $this->forceDeliveryOfCalls->setElementName('forceDeliveryOfCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $forceDeliveryOfCalls
     */
    public function getForceDeliveryOfCalls()
    {
        return ($this->forceDeliveryOfCalls)
            ? $this->forceDeliveryOfCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds = null)
    {
        $this->forceDeliveryWaitTimeSeconds = ($forceDeliveryWaitTimeSeconds InstanceOf CallCenterForceDeliveryWaitTimeSeconds)
             ? $forceDeliveryWaitTimeSeconds
             : new CallCenterForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds);
        $this->forceDeliveryWaitTimeSeconds->setElementName('forceDeliveryWaitTimeSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterForceDeliveryWaitTimeSeconds $forceDeliveryWaitTimeSeconds
     */
    public function getForceDeliveryWaitTimeSeconds()
    {
        return ($this->forceDeliveryWaitTimeSeconds)
            ? $this->forceDeliveryWaitTimeSeconds->getElementValue()
            : null;
    }
}
