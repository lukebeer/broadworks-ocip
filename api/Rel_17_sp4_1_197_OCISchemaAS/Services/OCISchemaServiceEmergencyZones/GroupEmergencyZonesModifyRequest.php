<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones\EmergencyZonesProhibition;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the group level data associated with Emergency Zones.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupEmergencyZonesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = 'GroupEmergencyZonesModifyRequest';
    protected $serviceProviderId               = null;
    protected $groupId                         = null;
    protected $isActive                        = null;
    protected $emergencyZonesProhibition       = null;
    protected $sendEmergencyCallNotifyEmail    = null;
    protected $emergencyCallNotifyEmailAddress = null;

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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
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
    public function setEmergencyZonesProhibition($emergencyZonesProhibition = null)
    {
        if (!$emergencyZonesProhibition) return $this;
        $this->emergencyZonesProhibition = ($emergencyZonesProhibition InstanceOf EmergencyZonesProhibition)
             ? $emergencyZonesProhibition
             : new EmergencyZonesProhibition($emergencyZonesProhibition);
        $this->emergencyZonesProhibition->setName('emergencyZonesProhibition');
        return $this;
    }

    /**
     * 
     * @return EmergencyZonesProhibition $emergencyZonesProhibition
     */
    public function getEmergencyZonesProhibition()
    {
        return $this->emergencyZonesProhibition->getValue();
    }

    /**
     * 
     */
    public function setSendEmergencyCallNotifyEmail($sendEmergencyCallNotifyEmail = null)
    {
        if (!$sendEmergencyCallNotifyEmail) return $this;
        $this->sendEmergencyCallNotifyEmail = new PrimitiveType($sendEmergencyCallNotifyEmail);
        $this->sendEmergencyCallNotifyEmail->setName('sendEmergencyCallNotifyEmail');
        return $this;
    }

    /**
     * 
     * @return boolean $sendEmergencyCallNotifyEmail
     */
    public function getSendEmergencyCallNotifyEmail()
    {
        return $this->sendEmergencyCallNotifyEmail->getValue();
    }

    /**
     * 
     */
    public function setEmergencyCallNotifyEmailAddress($emergencyCallNotifyEmailAddress = null)
    {
        if (!$emergencyCallNotifyEmailAddress) return $this;
        $this->emergencyCallNotifyEmailAddress = ($emergencyCallNotifyEmailAddress InstanceOf EmailAddress)
             ? $emergencyCallNotifyEmailAddress
             : new EmailAddress($emergencyCallNotifyEmailAddress);
        $this->emergencyCallNotifyEmailAddress->setName('emergencyCallNotifyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $emergencyCallNotifyEmailAddress
     */
    public function getEmergencyCallNotifyEmailAddress()
    {
        return $this->emergencyCallNotifyEmailAddress->getValue();
    }
}
