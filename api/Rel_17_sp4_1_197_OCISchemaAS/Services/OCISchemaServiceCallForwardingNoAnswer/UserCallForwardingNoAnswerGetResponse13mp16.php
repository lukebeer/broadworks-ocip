<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingNoAnswer; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingNoAnswer\CallForwardingNoAnswerNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallForwardingNoAnswerGetRequest13mp16.
 */
class UserCallForwardingNoAnswerGetResponse13mp16 extends ComplexType implements ComplexInterface
{
    public    $name                 = 'UserCallForwardingNoAnswerGetResponse13mp16';
    protected $isActive             = null;
    protected $forwardToPhoneNumber = null;
    protected $numberOfRings        = null;

    /**
     * @return UserCallForwardingNoAnswerGetResponse13mp16
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
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        if (!$forwardToPhoneNumber) return $this;
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $forwardToPhoneNumber
             : new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setNumberOfRings($numberOfRings = null)
    {
        if (!$numberOfRings) return $this;
        $this->numberOfRings = ($numberOfRings InstanceOf CallForwardingNoAnswerNumberOfRings)
             ? $numberOfRings
             : new CallForwardingNoAnswerNumberOfRings($numberOfRings);
        $this->numberOfRings->setName('numberOfRings');
        return $this;
    }

    /**
     * 
     * @return CallForwardingNoAnswerNumberOfRings
     */
    public function getNumberOfRings()
    {
        return $this->numberOfRings->getValue();
    }
}
