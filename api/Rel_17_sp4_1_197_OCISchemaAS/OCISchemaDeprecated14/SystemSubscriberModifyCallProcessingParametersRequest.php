<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemUserCallingLineIdSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemUserRingTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxNoAnswerNumberOfRings;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system call processing configuration for all subscribers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: SystemSubscriberModifyCallProcessingParametersRequest14sp7
 */
class SystemSubscriberModifyCallProcessingParametersRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemSubscriberModifyCallProcessingParametersRequest';
    protected $userCallingLineIdSelection;
    protected $isExtendedCallingLineIdActive;
    protected $isRingTimeOutActive;
    protected $ringTimeoutSeconds;
    protected $allowEmergencyRemoteOfficeOriginations;
    protected $maxNoAnswerNumberOfRings;

    public function __construct(
         $userCallingLineIdSelection = null,
         $isExtendedCallingLineIdActive = null,
         $isRingTimeOutActive = null,
         $ringTimeoutSeconds = null,
         $allowEmergencyRemoteOfficeOriginations = null,
         $maxNoAnswerNumberOfRings = null
    ) {
        $this->setUserCallingLineIdSelection($userCallingLineIdSelection);
        $this->setIsExtendedCallingLineIdActive($isExtendedCallingLineIdActive);
        $this->setIsRingTimeOutActive($isRingTimeOutActive);
        $this->setRingTimeoutSeconds($ringTimeoutSeconds);
        $this->setAllowEmergencyRemoteOfficeOriginations($allowEmergencyRemoteOfficeOriginations);
        $this->setMaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings);
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
    public function setUserCallingLineIdSelection($userCallingLineIdSelection = null)
    {
        $this->userCallingLineIdSelection = ($userCallingLineIdSelection InstanceOf SystemUserCallingLineIdSelection)
             ? $userCallingLineIdSelection
             : new SystemUserCallingLineIdSelection($userCallingLineIdSelection);
        $this->userCallingLineIdSelection->setName('userCallingLineIdSelection');
        return $this;
    }

    /**
     * 
     * @return SystemUserCallingLineIdSelection $userCallingLineIdSelection
     */
    public function getUserCallingLineIdSelection()
    {
        return ($this->userCallingLineIdSelection) ? $this->userCallingLineIdSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setIsExtendedCallingLineIdActive($isExtendedCallingLineIdActive = null)
    {
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
        return ($this->isExtendedCallingLineIdActive) ? $this->isExtendedCallingLineIdActive->getValue() : null;
    }

    /**
     * 
     */
    public function setIsRingTimeOutActive($isRingTimeOutActive = null)
    {
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
        return ($this->isRingTimeOutActive) ? $this->isRingTimeOutActive->getValue() : null;
    }

    /**
     * 
     */
    public function setRingTimeoutSeconds($ringTimeoutSeconds = null)
    {
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
        return ($this->ringTimeoutSeconds) ? $this->ringTimeoutSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowEmergencyRemoteOfficeOriginations($allowEmergencyRemoteOfficeOriginations = null)
    {
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
        return ($this->allowEmergencyRemoteOfficeOriginations) ? $this->allowEmergencyRemoteOfficeOriginations->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings = null)
    {
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
        return ($this->maxNoAnswerNumberOfRings) ? $this->maxNoAnswerNumberOfRings->getValue() : null;
    }
}
