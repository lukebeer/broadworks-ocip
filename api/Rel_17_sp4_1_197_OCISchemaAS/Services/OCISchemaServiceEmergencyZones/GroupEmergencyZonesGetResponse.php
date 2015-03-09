<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEmergencyZones\EmergencyZonesProhibition;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEmergencyZones\GroupEmergencyZonesGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupEmergencyZonesGetRequest.
 */
class GroupEmergencyZonesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $isActive                        = null;
    protected $emergencyZonesProhibition       = null;
    protected $sendEmergencyCallNotifyEmail    = null;
    protected $emergencyCallNotifyEmailAddress = null;

    /**
     * @return GroupEmergencyZonesGetResponse
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
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * Emergency zone policy to specify what kind of calls will be prohibited by the service when
     *         originated from outside the home zone.
     */
    public function setEmergencyZonesProhibition($emergencyZonesProhibition = null)
    {
        $this->emergencyZonesProhibition = ($emergencyZonesProhibition InstanceOf EmergencyZonesProhibition)
             ? $emergencyZonesProhibition
             : new EmergencyZonesProhibition($emergencyZonesProhibition);
    }

    /**
     * Emergency zone policy to specify what kind of calls will be prohibited by the service when
     *         originated from outside the home zone.
     */
    public function getEmergencyZonesProhibition()
    {
        return (!$this->emergencyZonesProhibition) ?: $this->emergencyZonesProhibition->getValue();
    }

    /**
     * 
     */
    public function setSendEmergencyCallNotifyEmail($sendEmergencyCallNotifyEmail = null)
    {
        $this->sendEmergencyCallNotifyEmail = (boolean) $sendEmergencyCallNotifyEmail;
    }

    /**
     * 
     */
    public function getSendEmergencyCallNotifyEmail()
    {
        return (!$this->sendEmergencyCallNotifyEmail) ?: $this->sendEmergencyCallNotifyEmail;
    }

    /**
     * Email Address
     */
    public function setEmergencyCallNotifyEmailAddress($emergencyCallNotifyEmailAddress = null)
    {
        $this->emergencyCallNotifyEmailAddress = ($emergencyCallNotifyEmailAddress InstanceOf EmailAddress)
             ? $emergencyCallNotifyEmailAddress
             : new EmailAddress($emergencyCallNotifyEmailAddress);
    }

    /**
     * Email Address
     */
    public function getEmergencyCallNotifyEmailAddress()
    {
        return (!$this->emergencyCallNotifyEmailAddress) ?: $this->emergencyCallNotifyEmailAddress->getValue();
    }
}
