<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSimultaneousRingFamilyGetRequest.
 *         Replaced By: UserSimultaneousRingFamilyGetResponse14sp4
 */
class UserSimultaneousRingFamilyGetResponse extends ComplexType implements ComplexInterface
{
    public    $name               = 'UserSimultaneousRingFamilyGetResponse';
    protected $isActive           = null;
    protected $incomingCalls      = null;
    protected $simRingPhoneNumber = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserSimultaneousRingFamilyGetResponse $response
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
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setIncomingCalls($incomingCalls = null)
    {
        if (!$incomingCalls) return $this;
        $this->incomingCalls = ($incomingCalls InstanceOf SimultaneousRingSelection)
             ? $incomingCalls
             : new SimultaneousRingSelection($incomingCalls);
        $this->incomingCalls->setName('incomingCalls');
        return $this;
    }

    /**
     * 
     * @return SimultaneousRingSelection $incomingCalls
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls->getValue();
    }

    /**
     * 
     */
    public function setSimRingPhoneNumber($simRingPhoneNumber = null)
    {
        if (!$simRingPhoneNumber) return $this;
        $this->simRingPhoneNumber = ($simRingPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $simRingPhoneNumber
             : new OutgoingDNorSIPURI($simRingPhoneNumber);
        $this->simRingPhoneNumber->setName('simRingPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $simRingPhoneNumber
     */
    public function getSimRingPhoneNumber()
    {
        return $this->simRingPhoneNumber->getValue();
    }
}
