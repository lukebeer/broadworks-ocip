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
    const     RESPONSE_TYPE               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserGetOutgoingSMDIMWIResponse';
    public    $name                       = __CLASS__;
    protected $isActive                   = null;
    protected $outgoingSMDIMWIPhoneNumber = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function setOutgoingSMDIMWIPhoneNumber($outgoingSMDIMWIPhoneNumber = null)
    {
        $this->outgoingSMDIMWIPhoneNumber = ($outgoingSMDIMWIPhoneNumber InstanceOf OutgoingDN)
             ? $outgoingSMDIMWIPhoneNumber
             : new OutgoingDN($outgoingSMDIMWIPhoneNumber);
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function getOutgoingSMDIMWIPhoneNumber()
    {
        return (!$this->outgoingSMDIMWIPhoneNumber) ?: $this->outgoingSMDIMWIPhoneNumber->getValue();
    }
}
