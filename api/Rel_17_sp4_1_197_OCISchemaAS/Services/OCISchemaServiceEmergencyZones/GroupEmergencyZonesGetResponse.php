<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones\EmergencyZonesProhibition;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupEmergencyZonesGetRequest.
 */
class GroupEmergencyZonesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $isActive                         = null;
    protected $emergencyZonesProhibition        = null;
    protected $sendEmergencyCallNotifyEmail     = null;
    protected $emergencyCallNotifyEmailAddress  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setEmergencyZonesProhibition($emergencyZonesProhibition = null)
    {
        $this->emergencyZonesProhibition = ($emergencyZonesProhibition InstanceOf EmergencyZonesProhibition)
             ? $emergencyZonesProhibition
             : new EmergencyZonesProhibition($emergencyZonesProhibition);
    }

    public function getEmergencyZonesProhibition()
    {
        return (!$this->emergencyZonesProhibition) ?: $this->emergencyZonesProhibition->value();
    }

    public function setSendEmergencyCallNotifyEmail(xs:boolean $sendEmergencyCallNotifyEmail = null)
    {
    }

    public function getSendEmergencyCallNotifyEmail()
    {
        return (!$this->sendEmergencyCallNotifyEmail) ?: $this->sendEmergencyCallNotifyEmail->value();
    }

    public function setEmergencyCallNotifyEmailAddress($emergencyCallNotifyEmailAddress = null)
    {
        $this->emergencyCallNotifyEmailAddress = ($emergencyCallNotifyEmailAddress InstanceOf EmailAddress)
             ? $emergencyCallNotifyEmailAddress
             : new EmailAddress($emergencyCallNotifyEmailAddress);
    }

    public function getEmergencyCallNotifyEmailAddress()
    {
        return (!$this->emergencyCallNotifyEmailAddress) ?: $this->emergencyCallNotifyEmailAddress->value();
    }
}
