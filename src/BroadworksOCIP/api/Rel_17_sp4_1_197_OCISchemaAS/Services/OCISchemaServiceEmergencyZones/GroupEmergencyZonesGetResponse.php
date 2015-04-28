<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones\EmergencyZonesProhibition;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupEmergencyZonesGetRequest.
 */
class GroupEmergencyZonesGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupEmergencyZonesGetResponse';
    protected $isActive;
    protected $emergencyZonesProhibition;
    protected $sendEmergencyCallNotifyEmail;
    protected $emergencyCallNotifyEmailAddress;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones\GroupEmergencyZonesGetResponse $response
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
