<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemUserRingTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IncomingCallToUserAliasMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxNoAnswerNumberOfRings;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system call processing configuration for all subscribers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSubscriberModifyCallProcessingParametersRequest14sp7 extends ComplexType implements ComplexInterface
{
    public    $name                                   = 'SystemSubscriberModifyCallProcessingParametersRequest14sp7';
    protected $isExtendedCallingLineIdActive          = null;
    protected $isRingTimeOutActive                    = null;
    protected $ringTimeoutSeconds                     = null;
    protected $allowEmergencyRemoteOfficeOriginations = null;
    protected $maxNoAnswerNumberOfRings               = null;
    protected $incomingCallToUserAliasMode            = null;
    protected $bypassTerminationLoopDetection         = null;
    protected $honorCLIDBlockingForEmergencyCalls     = null;

    public function __construct(
         $isExtendedCallingLineIdActive = null,
         $isRingTimeOutActive = null,
         $ringTimeoutSeconds = null,
         $allowEmergencyRemoteOfficeOriginations = null,
         $maxNoAnswerNumberOfRings = null,
         $incomingCallToUserAliasMode = null,
         $bypassTerminationLoopDetection = null,
         $honorCLIDBlockingForEmergencyCalls = null
    ) {
        $this->setIsExtendedCallingLineIdActive($isExtendedCallingLineIdActive);
        $this->setIsRingTimeOutActive($isRingTimeOutActive);
        $this->setRingTimeoutSeconds($ringTimeoutSeconds);
        $this->setAllowEmergencyRemoteOfficeOriginations($allowEmergencyRemoteOfficeOriginations);
        $this->setMaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings);
        $this->setIncomingCallToUserAliasMode($incomingCallToUserAliasMode);
        $this->setBypassTerminationLoopDetection($bypassTerminationLoopDetection);
        $this->setHonorCLIDBlockingForEmergencyCalls($honorCLIDBlockingForEmergencyCalls);
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
    public function setIsExtendedCallingLineIdActive($isExtendedCallingLineIdActive = null)
    {
        if (!$isExtendedCallingLineIdActive) return $this;
        $this->isExtendedCallingLineIdActive = new PrimitiveType($isExtendedCallingLineIdActive);
        $this->isExtendedCallingLineIdActive->setName('isExtendedCallingLineIdActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isExtendedCallingLineIdActive
     */
    public function getIsExtendedCallingLineIdActive()
    {
        return $this->isExtendedCallingLineIdActive->getValue();
    }

    /**
     * 
     */
    public function setIsRingTimeOutActive($isRingTimeOutActive = null)
    {
        if (!$isRingTimeOutActive) return $this;
        $this->isRingTimeOutActive = new PrimitiveType($isRingTimeOutActive);
        $this->isRingTimeOutActive->setName('isRingTimeOutActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isRingTimeOutActive
     */
    public function getIsRingTimeOutActive()
    {
        return $this->isRingTimeOutActive->getValue();
    }

    /**
     * 
     */
    public function setRingTimeoutSeconds($ringTimeoutSeconds = null)
    {
        if (!$ringTimeoutSeconds) return $this;
        $this->ringTimeoutSeconds = ($ringTimeoutSeconds InstanceOf SystemUserRingTimeoutSeconds)
             ? $ringTimeoutSeconds
             : new SystemUserRingTimeoutSeconds($ringTimeoutSeconds);
        $this->ringTimeoutSeconds->setName('ringTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return SystemUserRingTimeoutSeconds $ringTimeoutSeconds
     */
    public function getRingTimeoutSeconds()
    {
        return $this->ringTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setAllowEmergencyRemoteOfficeOriginations($allowEmergencyRemoteOfficeOriginations = null)
    {
        if (!$allowEmergencyRemoteOfficeOriginations) return $this;
        $this->allowEmergencyRemoteOfficeOriginations = new PrimitiveType($allowEmergencyRemoteOfficeOriginations);
        $this->allowEmergencyRemoteOfficeOriginations->setName('allowEmergencyRemoteOfficeOriginations');
        return $this;
    }

    /**
     * 
     * @return boolean $allowEmergencyRemoteOfficeOriginations
     */
    public function getAllowEmergencyRemoteOfficeOriginations()
    {
        return $this->allowEmergencyRemoteOfficeOriginations->getValue();
    }

    /**
     * 
     */
    public function setMaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings = null)
    {
        if (!$maxNoAnswerNumberOfRings) return $this;
        $this->maxNoAnswerNumberOfRings = ($maxNoAnswerNumberOfRings InstanceOf MaxNoAnswerNumberOfRings)
             ? $maxNoAnswerNumberOfRings
             : new MaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings);
        $this->maxNoAnswerNumberOfRings->setName('maxNoAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return MaxNoAnswerNumberOfRings $maxNoAnswerNumberOfRings
     */
    public function getMaxNoAnswerNumberOfRings()
    {
        return $this->maxNoAnswerNumberOfRings->getValue();
    }

    /**
     * 
     */
    public function setIncomingCallToUserAliasMode($incomingCallToUserAliasMode = null)
    {
        if (!$incomingCallToUserAliasMode) return $this;
        $this->incomingCallToUserAliasMode = ($incomingCallToUserAliasMode InstanceOf IncomingCallToUserAliasMode)
             ? $incomingCallToUserAliasMode
             : new IncomingCallToUserAliasMode($incomingCallToUserAliasMode);
        $this->incomingCallToUserAliasMode->setName('incomingCallToUserAliasMode');
        return $this;
    }

    /**
     * 
     * @return IncomingCallToUserAliasMode $incomingCallToUserAliasMode
     */
    public function getIncomingCallToUserAliasMode()
    {
        return $this->incomingCallToUserAliasMode->getValue();
    }

    /**
     * 
     */
    public function setBypassTerminationLoopDetection($bypassTerminationLoopDetection = null)
    {
        if (!$bypassTerminationLoopDetection) return $this;
        $this->bypassTerminationLoopDetection = new PrimitiveType($bypassTerminationLoopDetection);
        $this->bypassTerminationLoopDetection->setName('bypassTerminationLoopDetection');
        return $this;
    }

    /**
     * 
     * @return boolean $bypassTerminationLoopDetection
     */
    public function getBypassTerminationLoopDetection()
    {
        return $this->bypassTerminationLoopDetection->getValue();
    }

    /**
     * 
     */
    public function setHonorCLIDBlockingForEmergencyCalls($honorCLIDBlockingForEmergencyCalls = null)
    {
        if (!$honorCLIDBlockingForEmergencyCalls) return $this;
        $this->honorCLIDBlockingForEmergencyCalls = new PrimitiveType($honorCLIDBlockingForEmergencyCalls);
        $this->honorCLIDBlockingForEmergencyCalls->setName('honorCLIDBlockingForEmergencyCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $honorCLIDBlockingForEmergencyCalls
     */
    public function getHonorCLIDBlockingForEmergencyCalls()
    {
        return $this->honorCLIDBlockingForEmergencyCalls->getValue();
    }
}
