<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmergencyZonesProhibition;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupEmergencyZonesGetRequest.
 */
class GroupEmergencyZonesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $emergencyZonesProhibition,
             $sendEmergencyCallNotifyEmail,
             $emergencyCallNotifyEmailAddress=null
    ) {
        $this->isActive                        = $isActive;
        $this->emergencyZonesProhibition       = $emergencyZonesProhibition;
        $this->sendEmergencyCallNotifyEmail    = $sendEmergencyCallNotifyEmail;
        $this->emergencyCallNotifyEmailAddress = new EmailAddress($emergencyCallNotifyEmailAddress);
        $this->args                            = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setEmergencyZonesProhibition($emergencyZonesProhibition)
    {
        $emergencyZonesProhibition and $this->emergencyZonesProhibition = new EmergencyZonesProhibition($emergencyZonesProhibition);
    }

    public function getEmergencyZonesProhibition()
    {
        return (!$this->emergencyZonesProhibition) ?: $this->emergencyZonesProhibition->value();
    }

    public function setSendEmergencyCallNotifyEmail($sendEmergencyCallNotifyEmail)
    {
        $sendEmergencyCallNotifyEmail and $this->sendEmergencyCallNotifyEmail = new xs:boolean($sendEmergencyCallNotifyEmail);
    }

    public function getSendEmergencyCallNotifyEmail()
    {
        return (!$this->sendEmergencyCallNotifyEmail) ?: $this->sendEmergencyCallNotifyEmail->value();
    }

    public function setEmergencyCallNotifyEmailAddress($emergencyCallNotifyEmailAddress)
    {
        $emergencyCallNotifyEmailAddress and $this->emergencyCallNotifyEmailAddress = new EmailAddress($emergencyCallNotifyEmailAddress);
    }

    public function getEmergencyCallNotifyEmailAddress()
    {
        return (!$this->emergencyCallNotifyEmailAddress) ?: $this->emergencyCallNotifyEmailAddress->value();
    }
}
