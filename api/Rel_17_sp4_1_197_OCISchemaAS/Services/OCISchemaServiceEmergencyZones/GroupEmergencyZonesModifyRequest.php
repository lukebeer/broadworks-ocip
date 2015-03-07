<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones\EmergencyZonesProhibition;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the group level data associated with Emergency Zones.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupEmergencyZonesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $serviceProviderId                = null;
    protected $groupId                          = null;
    protected $isActive                         = null;
    protected $emergencyZonesProhibition        = null;
    protected $sendEmergencyCallNotifyEmail     = null;
    protected $emergencyCallNotifyEmailAddress  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $isActive = null,
         $emergencyZonesProhibition = null,
         $sendEmergencyCallNotifyEmail = null,
         $emergencyCallNotifyEmailAddress = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setIsActive($isActive);
        $this->setEmergencyZonesProhibition($emergencyZonesProhibition);
        $this->setSendEmergencyCallNotifyEmail($sendEmergencyCallNotifyEmail);
        $this->setEmergencyCallNotifyEmailAddress($emergencyCallNotifyEmailAddress);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

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
