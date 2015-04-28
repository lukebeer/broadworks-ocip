<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemUserRingTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IncomingCallToUserAliasMode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxNoAnswerNumberOfRings;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the SystemSubscriberGetCallProcessingParametersRequest17sp3.
 */
class SystemSubscriberGetCallProcessingParametersResponse17sp3 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSubscriberGetCallProcessingParametersResponse17sp3';
    protected $isExtendedCallingLineIdActive;
    protected $isRingTimeOutActive;
    protected $ringTimeoutSeconds;
    protected $allowEmergencyRemoteOfficeOriginations;
    protected $maxNoAnswerNumberOfRings;
    protected $incomingCallToUserAliasMode;
    protected $bypassTerminationLoopDetection;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemSubscriberGetCallProcessingParametersResponse17sp3 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsExtendedCallingLineIdActive($isExtendedCallingLineIdActive = null)
    {
        $this->isExtendedCallingLineIdActive = new PrimitiveType($isExtendedCallingLineIdActive);
        $this->isExtendedCallingLineIdActive->setElementName('isExtendedCallingLineIdActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isExtendedCallingLineIdActive
     */
    public function getIsExtendedCallingLineIdActive()
    {
        return ($this->isExtendedCallingLineIdActive)
            ? $this->isExtendedCallingLineIdActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsRingTimeOutActive($isRingTimeOutActive = null)
    {
        $this->isRingTimeOutActive = new PrimitiveType($isRingTimeOutActive);
        $this->isRingTimeOutActive->setElementName('isRingTimeOutActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isRingTimeOutActive
     */
    public function getIsRingTimeOutActive()
    {
        return ($this->isRingTimeOutActive)
            ? $this->isRingTimeOutActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRingTimeoutSeconds($ringTimeoutSeconds = null)
    {
        $this->ringTimeoutSeconds = ($ringTimeoutSeconds InstanceOf SystemUserRingTimeoutSeconds)
             ? $ringTimeoutSeconds
             : new SystemUserRingTimeoutSeconds($ringTimeoutSeconds);
        $this->ringTimeoutSeconds->setElementName('ringTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return SystemUserRingTimeoutSeconds $ringTimeoutSeconds
     */
    public function getRingTimeoutSeconds()
    {
        return ($this->ringTimeoutSeconds)
            ? $this->ringTimeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowEmergencyRemoteOfficeOriginations($allowEmergencyRemoteOfficeOriginations = null)
    {
        $this->allowEmergencyRemoteOfficeOriginations = new PrimitiveType($allowEmergencyRemoteOfficeOriginations);
        $this->allowEmergencyRemoteOfficeOriginations->setElementName('allowEmergencyRemoteOfficeOriginations');
        return $this;
    }

    /**
     * 
     * @return boolean $allowEmergencyRemoteOfficeOriginations
     */
    public function getAllowEmergencyRemoteOfficeOriginations()
    {
        return ($this->allowEmergencyRemoteOfficeOriginations)
            ? $this->allowEmergencyRemoteOfficeOriginations->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings = null)
    {
        $this->maxNoAnswerNumberOfRings = ($maxNoAnswerNumberOfRings InstanceOf MaxNoAnswerNumberOfRings)
             ? $maxNoAnswerNumberOfRings
             : new MaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings);
        $this->maxNoAnswerNumberOfRings->setElementName('maxNoAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return MaxNoAnswerNumberOfRings $maxNoAnswerNumberOfRings
     */
    public function getMaxNoAnswerNumberOfRings()
    {
        return ($this->maxNoAnswerNumberOfRings)
            ? $this->maxNoAnswerNumberOfRings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncomingCallToUserAliasMode($incomingCallToUserAliasMode = null)
    {
        $this->incomingCallToUserAliasMode = ($incomingCallToUserAliasMode InstanceOf IncomingCallToUserAliasMode)
             ? $incomingCallToUserAliasMode
             : new IncomingCallToUserAliasMode($incomingCallToUserAliasMode);
        $this->incomingCallToUserAliasMode->setElementName('incomingCallToUserAliasMode');
        return $this;
    }

    /**
     * 
     * @return IncomingCallToUserAliasMode $incomingCallToUserAliasMode
     */
    public function getIncomingCallToUserAliasMode()
    {
        return ($this->incomingCallToUserAliasMode)
            ? $this->incomingCallToUserAliasMode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBypassTerminationLoopDetection($bypassTerminationLoopDetection = null)
    {
        $this->bypassTerminationLoopDetection = new PrimitiveType($bypassTerminationLoopDetection);
        $this->bypassTerminationLoopDetection->setElementName('bypassTerminationLoopDetection');
        return $this;
    }

    /**
     * 
     * @return boolean $bypassTerminationLoopDetection
     */
    public function getBypassTerminationLoopDetection()
    {
        return ($this->bypassTerminationLoopDetection)
            ? $this->bypassTerminationLoopDetection->getElementValue()
            : null;
    }
}
