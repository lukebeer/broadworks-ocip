<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones\EmergencyZonesProhibition;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupEmergencyZonesGetRequest.
 */
class GroupEmergencyZonesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupEmergencyZonesGetResponse';
    protected $isActive;
    protected $emergencyZonesProhibition;
    protected $sendEmergencyCallNotifyEmail;
    protected $emergencyCallNotifyEmailAddress;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones\GroupEmergencyZonesGetResponse $response
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
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setEmergencyZonesProhibition($emergencyZonesProhibition = null)
    {
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
        return ($this->emergencyZonesProhibition) ? $this->emergencyZonesProhibition->getValue() : null;
    }

    /**
     * 
     */
    public function setSendEmergencyCallNotifyEmail($sendEmergencyCallNotifyEmail = null)
    {
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
        return ($this->sendEmergencyCallNotifyEmail) ? $this->sendEmergencyCallNotifyEmail->getValue() : null;
    }

    /**
     * 
     */
    public function setEmergencyCallNotifyEmailAddress($emergencyCallNotifyEmailAddress = null)
    {
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
        return ($this->emergencyCallNotifyEmailAddress) ? $this->emergencyCallNotifyEmailAddress->getValue() : null;
    }
}
