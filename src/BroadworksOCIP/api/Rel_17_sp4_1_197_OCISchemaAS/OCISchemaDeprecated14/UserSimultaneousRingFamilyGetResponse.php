<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserSimultaneousRingFamilyGetRequest.
 *         Replaced By: UserSimultaneousRingFamilyGetResponse14sp4
 */
class UserSimultaneousRingFamilyGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSimultaneousRingFamilyGetResponse';
    protected $isActive;
    protected $incomingCalls;
    protected $simRingPhoneNumber;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserSimultaneousRingFamilyGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncomingCalls($incomingCalls = null)
    {
        $this->incomingCalls = ($incomingCalls InstanceOf SimultaneousRingSelection)
             ? $incomingCalls
             : new SimultaneousRingSelection($incomingCalls);
        $this->incomingCalls->setElementName('incomingCalls');
        return $this;
    }

    /**
     * 
     * @return SimultaneousRingSelection $incomingCalls
     */
    public function getIncomingCalls()
    {
        return ($this->incomingCalls)
            ? $this->incomingCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSimRingPhoneNumber($simRingPhoneNumber = null)
    {
        $this->simRingPhoneNumber = ($simRingPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $simRingPhoneNumber
             : new OutgoingDNorSIPURI($simRingPhoneNumber);
        $this->simRingPhoneNumber->setElementName('simRingPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $simRingPhoneNumber
     */
    public function getSimRingPhoneNumber()
    {
        return ($this->simRingPhoneNumber)
            ? $this->simRingPhoneNumber->getElementValue()
            : null;
    }
}
