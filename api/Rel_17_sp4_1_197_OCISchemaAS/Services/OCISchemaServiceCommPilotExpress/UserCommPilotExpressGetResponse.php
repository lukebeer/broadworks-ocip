<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableOutOfOffice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableInOffice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressBusy;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCommPilotExpressGetRequest.
 */
class UserCommPilotExpressGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'UserCommPilotExpressGetResponse';
    protected $profile              = null;
    protected $availableInOffice    = null;
    protected $availableOutOfOffice = null;
    protected $busy                 = null;
    protected $unavailable          = null;

    /**
     * @return UserCommPilotExpressGetResponse
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
        if (!$profile) return $this;
        $this->profile = ($profile InstanceOf CommPilotExpressProfile)
             ? $profile
             : new CommPilotExpressProfile($profile);
        $this->profile->setName('profile');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressProfile
     */
    public function getProfile()
    {
        return $this->profile->getValue();
    }

    /**
     * 
     */
    public function setAvailableInOffice(CommPilotExpressAvailableInOffice $availableInOffice = null)
    {
        if (!$availableInOffice) return $this;
        $this->availableInOffice = $availableInOffice;
        $this->availableInOffice->setName('availableInOffice');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressAvailableInOffice
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
        if (!$availableOutOfOffice) return $this;
        $this->availableOutOfOffice = $availableOutOfOffice;
        $this->availableOutOfOffice->setName('availableOutOfOffice');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressAvailableOutOfOffice
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
        if (!$busy) return $this;
        $this->busy = $busy;
        $this->busy->setName('busy');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressBusy
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
        if (!$unavailable) return $this;
        $this->unavailable = $unavailable;
        $this->unavailable->setName('unavailable');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressUnavailable
     */
    public function getUnavailable()
    {
        return $this->unavailable;
    }
}
