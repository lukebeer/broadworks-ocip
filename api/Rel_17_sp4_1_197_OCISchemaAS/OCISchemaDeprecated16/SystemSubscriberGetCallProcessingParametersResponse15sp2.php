<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemUserRingTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxNoAnswerNumberOfRings;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemSubscriberGetCallProcessingParametersRequest15sp2.
 *         Replaced by: SystemSubscriberGetCallProcessingParametersResponse17
 */
class SystemSubscriberGetCallProcessingParametersResponse15sp2 extends ComplexType implements ComplexInterface
{
    public    $name                                   = 'SystemSubscriberGetCallProcessingParametersResponse15sp2';
    protected $isExtendedCallingLineIdActive          = null;
    protected $isRingTimeOutActive                    = null;
    protected $ringTimeoutSeconds                     = null;
    protected $allowEmergencyRemoteOfficeOriginations = null;
    protected $maxNoAnswerNumberOfRings               = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemSubscriberGetCallProcessingParametersResponse15sp2 $response
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
}
