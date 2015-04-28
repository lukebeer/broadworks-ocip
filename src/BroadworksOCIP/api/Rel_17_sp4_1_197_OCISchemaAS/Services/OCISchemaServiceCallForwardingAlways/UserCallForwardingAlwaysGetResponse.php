<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingAlways; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserCallForwardingAlwaysGetRequest.
 */
class UserCallForwardingAlwaysGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallForwardingAlwaysGetResponse';
    protected $isActive;
    protected $forwardToPhoneNumber;
    protected $isRingSplashActive;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingAlways\UserCallForwardingAlwaysGetResponse $response
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
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $forwardToPhoneNumber
             : new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setElementName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $forwardToPhoneNumber
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
    public function setIsRingSplashActive($isRingSplashActive = null)
    {
        $this->isRingSplashActive = new PrimitiveType($isRingSplashActive);
        $this->isRingSplashActive->setElementName('isRingSplashActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isRingSplashActive
     */
    public function getIsRingSplashActive()
    {
        return ($this->isRingSplashActive)
            ? $this->isRingSplashActive->getElementValue()
            : null;
    }
}
