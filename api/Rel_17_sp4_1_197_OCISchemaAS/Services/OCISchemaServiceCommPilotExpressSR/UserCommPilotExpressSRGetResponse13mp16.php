<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRAvailableOutOfOffice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRAvailableInOffice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRBusy;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCommPilotExpressSRGetRequest13mp16.
 */
class UserCommPilotExpressSRGetResponse13mp16 extends ComplexType implements ComplexInterface
{
    public    $name                 = 'UserCommPilotExpressSRGetResponse13mp16';
    protected $profile              = null;
    protected $availableInOffice    = null;
    protected $availableOutOfOffice = null;
    protected $busy                 = null;
    protected $unavailable          = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\UserCommPilotExpressSRGetResponse13mp16 $response
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
        $this->profile = ($profile InstanceOf CommPilotExpressSRProfile)
             ? $profile
             : new CommPilotExpressSRProfile($profile);
        $this->profile->setName('profile');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressSRProfile $profile
     */
    public function getProfile()
    {
        return $this->profile->getValue();
    }

    /**
     * 
     */
    public function setAvailableInOffice(CommPilotExpressSRAvailableInOffice $availableInOffice = null)
    {
        if (!$availableInOffice) return $this;
        $this->availableInOffice = $availableInOffice;
        $this->availableInOffice->setName('availableInOffice');
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
        if (!$availableOutOfOffice) return $this;
        $this->availableOutOfOffice = $availableOutOfOffice;
        $this->availableOutOfOffice->setName('availableOutOfOffice');
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
        if (!$busy) return $this;
        $this->busy = $busy;
        $this->busy->setName('busy');
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
        if (!$unavailable) return $this;
        $this->unavailable = $unavailable;
        $this->unavailable->setName('unavailable');
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
