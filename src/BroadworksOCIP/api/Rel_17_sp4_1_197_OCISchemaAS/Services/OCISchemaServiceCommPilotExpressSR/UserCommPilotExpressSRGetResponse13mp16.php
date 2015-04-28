<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRAvailableOutOfOffice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRAvailableInOffice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRUnavailable;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRBusy;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserCommPilotExpressSRGetRequest13mp16.
 */
class UserCommPilotExpressSRGetResponse13mp16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCommPilotExpressSRGetResponse13mp16';
    protected $profile;
    protected $availableInOffice;
    protected $availableOutOfOffice;
    protected $busy;
    protected $unavailable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\UserCommPilotExpressSRGetResponse13mp16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf CommPilotExpressSRProfile)
             ? $profile
             : new CommPilotExpressSRProfile($profile);
        $this->profile->setElementName('profile');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressSRProfile $profile
     */
    public function getProfile()
    {
        return ($this->profile)
            ? $this->profile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAvailableInOffice(CommPilotExpressSRAvailableInOffice $availableInOffice = null)
    {
        $this->availableInOffice = ($availableInOffice InstanceOf CommPilotExpressSRAvailableInOffice)
             ? $availableInOffice
             : new CommPilotExpressSRAvailableInOffice($availableInOffice);
        $this->availableInOffice->setElementName('availableInOffice');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressSRAvailableInOffice $availableInOffice
     */
    public function getAvailableInOffice()
    {
        return $this->availableInOffice;
    }

    /**
     * 
     */
    public function setAvailableOutOfOffice(CommPilotExpressSRAvailableOutOfOffice $availableOutOfOffice = null)
    {
        $this->availableOutOfOffice = ($availableOutOfOffice InstanceOf CommPilotExpressSRAvailableOutOfOffice)
             ? $availableOutOfOffice
             : new CommPilotExpressSRAvailableOutOfOffice($availableOutOfOffice);
        $this->availableOutOfOffice->setElementName('availableOutOfOffice');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressSRAvailableOutOfOffice $availableOutOfOffice
     */
    public function getAvailableOutOfOffice()
    {
        return $this->availableOutOfOffice;
    }

    /**
     * 
     */
    public function setBusy(CommPilotExpressSRBusy $busy = null)
    {
        $this->busy = ($busy InstanceOf CommPilotExpressSRBusy)
             ? $busy
             : new CommPilotExpressSRBusy($busy);
        $this->busy->setElementName('busy');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressSRBusy $busy
     */
    public function getBusy()
    {
        return $this->busy;
    }

    /**
     * 
     */
    public function setUnavailable(CommPilotExpressSRUnavailable $unavailable = null)
    {
        $this->unavailable = ($unavailable InstanceOf CommPilotExpressSRUnavailable)
             ? $unavailable
             : new CommPilotExpressSRUnavailable($unavailable);
        $this->unavailable->setElementName('unavailable');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressSRUnavailable $unavailable
     */
    public function getUnavailable()
    {
        return $this->unavailable;
    }
}
