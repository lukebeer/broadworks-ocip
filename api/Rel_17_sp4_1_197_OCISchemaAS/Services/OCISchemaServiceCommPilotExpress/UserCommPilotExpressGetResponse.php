<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotExpress; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableOutOfOffice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableInOffice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressBusy;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserCommPilotExpressGetRequest.
 */
class UserCommPilotExpressGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $profile              = null;
    protected $availableInOffice    = null;
    protected $availableOutOfOffice = null;
    protected $busy                 = null;
    protected $unavailable          = null;


    /**
     * CommPilot Express Profile Type.
     */
    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf CommPilotExpressProfile)
             ? $profile
             : new CommPilotExpressProfile($profile);
    }

    /**
     * CommPilot Express Profile Type.
     */
    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->getValue();
    }

    /**
     * CommPilot Express Available In Office Settings.
     */
    public function setAvailableInOffice(CommPilotExpressAvailableInOffice $availableInOffice = null)
    {
        $this->availableInOffice =  $availableInOffice;
    }

    /**
     * CommPilot Express Available In Office Settings.
     */
    public function getAvailableInOffice()
    {
        return (!$this->availableInOffice) ?: $this->availableInOffice->getValue();
    }

    /**
     * CommPilot Express Available Out Of Office Configuration used in the context of a get.
     */
    public function setAvailableOutOfOffice(CommPilotExpressAvailableOutOfOffice $availableOutOfOffice = null)
    {
        $this->availableOutOfOffice =  $availableOutOfOffice;
    }

    /**
     * CommPilot Express Available Out Of Office Configuration used in the context of a get.
     */
    public function getAvailableOutOfOffice()
    {
        return (!$this->availableOutOfOffice) ?: $this->availableOutOfOffice->getValue();
    }

    /**
     * CommPilot Express Available In Office Configuration used in the context of a get.
     */
    public function setBusy(CommPilotExpressBusy $busy = null)
    {
        $this->busy =  $busy;
    }

    /**
     * CommPilot Express Available In Office Configuration used in the context of a get.
     */
    public function getBusy()
    {
        return (!$this->busy) ?: $this->busy->getValue();
    }

    /**
     * CommPilot Express Unavailable Configuration used in the context of a get.
     */
    public function setUnavailable(CommPilotExpressUnavailable $unavailable = null)
    {
        $this->unavailable =  $unavailable;
    }

    /**
     * CommPilot Express Unavailable Configuration used in the context of a get.
     */
    public function getUnavailable()
    {
        return (!$this->unavailable) ?: $this->unavailable->getValue();
    }
}
