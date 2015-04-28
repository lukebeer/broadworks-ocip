<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserVoiceMessagingUserGetOutgoingSMDIMWIRequest.
 */
class UserVoiceMessagingUserGetOutgoingSMDIMWIResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVoiceMessagingUserGetOutgoingSMDIMWIResponse';
    protected $isActive;
    protected $outgoingSMDIMWIPhoneNumber;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserGetOutgoingSMDIMWIResponse $response
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
    public function setOutgoingSMDIMWIPhoneNumber($outgoingSMDIMWIPhoneNumber = null)
    {
        $this->outgoingSMDIMWIPhoneNumber = ($outgoingSMDIMWIPhoneNumber InstanceOf OutgoingDN)
             ? $outgoingSMDIMWIPhoneNumber
             : new OutgoingDN($outgoingSMDIMWIPhoneNumber);
        $this->outgoingSMDIMWIPhoneNumber->setElementName('outgoingSMDIMWIPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $outgoingSMDIMWIPhoneNumber
     */
    public function getOutgoingSMDIMWIPhoneNumber()
    {
        return ($this->outgoingSMDIMWIPhoneNumber)
            ? $this->outgoingSMDIMWIPhoneNumber->getElementValue()
            : null;
    }
}
