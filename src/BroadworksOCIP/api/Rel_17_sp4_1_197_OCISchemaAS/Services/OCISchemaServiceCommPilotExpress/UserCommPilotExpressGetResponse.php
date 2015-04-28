<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableOutOfOffice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableInOffice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressUnavailable;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressBusy;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserCommPilotExpressGetRequest.
 */
class UserCommPilotExpressGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCommPilotExpressGetResponse';
    protected $profile;
    protected $availableInOffice;
    protected $availableOutOfOffice;
    protected $busy;
    protected $unavailable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\UserCommPilotExpressGetResponse $response
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
        $this->profile = ($profile InstanceOf CommPilotExpressProfile)
             ? $profile
             : new CommPilotExpressProfile($profile);
        $this->profile->setElementName('profile');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressProfile $profile
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
    public function setAvailableInOffice(CommPilotExpressAvailableInOffice $availableInOffice = null)
    {
        $this->availableInOffice = ($availableInOffice InstanceOf CommPilotExpressAvailableInOffice)
             ? $availableInOffice
             : new CommPilotExpressAvailableInOffice($availableInOffice);
        $this->availableInOffice->setElementName('availableInOffice');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressAvailableInOffice $availableInOffice
     */
    public function getAvailableInOffice()
    {
        return $this->availableInOffice;
    }

    /**
     * 
     */
    public function setAvailableOutOfOffice(CommPilotExpressAvailableOutOfOffice $availableOutOfOffice = null)
    {
        $this->availableOutOfOffice = ($availableOutOfOffice InstanceOf CommPilotExpressAvailableOutOfOffice)
             ? $availableOutOfOffice
             : new CommPilotExpressAvailableOutOfOffice($availableOutOfOffice);
        $this->availableOutOfOffice->setElementName('availableOutOfOffice');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressAvailableOutOfOffice $availableOutOfOffice
     */
    public function getAvailableOutOfOffice()
    {
        return $this->availableOutOfOffice;
    }

    /**
     * 
     */
    public function setBusy(CommPilotExpressBusy $busy = null)
    {
        $this->busy = ($busy InstanceOf CommPilotExpressBusy)
             ? $busy
             : new CommPilotExpressBusy($busy);
        $this->busy->setElementName('busy');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressBusy $busy
     */
    public function getBusy()
    {
        return $this->busy;
    }

    /**
     * 
     */
    public function setUnavailable(CommPilotExpressUnavailable $unavailable = null)
    {
        $this->unavailable = ($unavailable InstanceOf CommPilotExpressUnavailable)
             ? $unavailable
             : new CommPilotExpressUnavailable($unavailable);
        $this->unavailable->setElementName('unavailable');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressUnavailable $unavailable
     */
    public function getUnavailable()
    {
        return $this->unavailable;
    }
}
