<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemUserCallingLineIdSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemUserRingTimeoutSeconds;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the SystemSubscriberGetCallProcessingParametersRequest.
 *         Replaced By: SystemSubscriberGetCallProcessingParametersResponse14sp3
 */
class SystemSubscriberGetCallProcessingParametersResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSubscriberGetCallProcessingParametersResponse';
    protected $userCallingLineIdSelection;
    protected $isExtendedCallingLineIdActive;
    protected $isRingTimeOutActive;
    protected $ringTimeoutSeconds;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemSubscriberGetCallProcessingParametersResponse $response
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
        $this->userCallingLineIdSelection->setElementName('userCallingLineIdSelection');
        return $this;
    }

    /**
     * 
     * @return SystemUserCallingLineIdSelection $userCallingLineIdSelection
     */
    public function getUserCallingLineIdSelection()
    {
        return ($this->userCallingLineIdSelection)
            ? $this->userCallingLineIdSelection->getElementValue()
            : null;
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
}
