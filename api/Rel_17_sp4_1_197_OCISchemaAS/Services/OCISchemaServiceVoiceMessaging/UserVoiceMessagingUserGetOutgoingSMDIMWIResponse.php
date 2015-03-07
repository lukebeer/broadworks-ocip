<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserVoiceMessagingUserGetOutgoingSMDIMWIRequest.
 */
class UserVoiceMessagingUserGetOutgoingSMDIMWIResponse extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $isActive                    = null;
    protected $outgoingSMDIMWIPhoneNumber  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setOutgoingSMDIMWIPhoneNumber($outgoingSMDIMWIPhoneNumber = null)
    {
        $this->outgoingSMDIMWIPhoneNumber = ($outgoingSMDIMWIPhoneNumber InstanceOf OutgoingDN)
             ? $outgoingSMDIMWIPhoneNumber
             : new OutgoingDN($outgoingSMDIMWIPhoneNumber);
    }

    public function getOutgoingSMDIMWIPhoneNumber()
    {
        return (!$this->outgoingSMDIMWIPhoneNumber) ?: $this->outgoingSMDIMWIPhoneNumber->value();
    }
}
