<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones\EmergencyZonesProhibition;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the group level data associated with Emergency Zones.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupEmergencyZonesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupEmergencyZonesModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $isActive;
    protected $emergencyZonesProhibition;
    protected $sendEmergencyCallNotifyEmail;
    protected $emergencyCallNotifyEmailAddress;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
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
    public function setEmergencyZonesProhibition($emergencyZonesProhibition = null)
    {
        $this->emergencyZonesProhibition = ($emergencyZonesProhibition InstanceOf EmergencyZonesProhibition)
             ? $emergencyZonesProhibition
             : new EmergencyZonesProhibition($emergencyZonesProhibition);
        $this->emergencyZonesProhibition->setElementName('emergencyZonesProhibition');
        return $this;
    }

    /**
     * 
     * @return EmergencyZonesProhibition $emergencyZonesProhibition
     */
    public function getEmergencyZonesProhibition()
    {
        return ($this->emergencyZonesProhibition)
            ? $this->emergencyZonesProhibition->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendEmergencyCallNotifyEmail($sendEmergencyCallNotifyEmail = null)
    {
        $this->sendEmergencyCallNotifyEmail = new PrimitiveType($sendEmergencyCallNotifyEmail);
        $this->sendEmergencyCallNotifyEmail->setElementName('sendEmergencyCallNotifyEmail');
        return $this;
    }

    /**
     * 
     * @return boolean $sendEmergencyCallNotifyEmail
     */
    public function getSendEmergencyCallNotifyEmail()
    {
        return ($this->sendEmergencyCallNotifyEmail)
            ? $this->sendEmergencyCallNotifyEmail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEmergencyCallNotifyEmailAddress($emergencyCallNotifyEmailAddress = null)
    {
        $this->emergencyCallNotifyEmailAddress = ($emergencyCallNotifyEmailAddress InstanceOf EmailAddress)
             ? $emergencyCallNotifyEmailAddress
             : new EmailAddress($emergencyCallNotifyEmailAddress);
        $this->emergencyCallNotifyEmailAddress->setElementName('emergencyCallNotifyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $emergencyCallNotifyEmailAddress
     */
    public function getEmergencyCallNotifyEmailAddress()
    {
        return ($this->emergencyCallNotifyEmailAddress)
            ? $this->emergencyCallNotifyEmailAddress->getElementValue()
            : null;
    }
}
