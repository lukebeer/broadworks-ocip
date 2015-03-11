<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserVoiceMessagingUserGetOutgoingSMDIMWIRequest.
 */
class UserVoiceMessagingUserGetOutgoingSMDIMWIResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = 'UserVoiceMessagingUserGetOutgoingSMDIMWIResponse';
    protected $isActive                   = null;
    protected $outgoingSMDIMWIPhoneNumber = null;

    /**
     * @return UserVoiceMessagingUserGetOutgoingSMDIMWIResponse
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
    public function setOutgoingSMDIMWIPhoneNumber($outgoingSMDIMWIPhoneNumber = null)
    {
        if (!$outgoingSMDIMWIPhoneNumber) return $this;
        $this->outgoingSMDIMWIPhoneNumber = ($outgoingSMDIMWIPhoneNumber InstanceOf OutgoingDN)
             ? $outgoingSMDIMWIPhoneNumber
             : new OutgoingDN($outgoingSMDIMWIPhoneNumber);
        $this->outgoingSMDIMWIPhoneNumber->setName('outgoingSMDIMWIPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN
     */
    public function getOutgoingSMDIMWIPhoneNumber()
    {
        return $this->outgoingSMDIMWIPhoneNumber->getValue();
    }
}
