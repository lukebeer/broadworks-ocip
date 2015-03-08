<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotExpressSR; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRAvailableOutOfOffice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRAvailableInOffice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRBusy;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserCommPilotExpressSRGetRequest13mp16.
 */
class UserCommPilotExpressSRGetResponse13mp16 extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $profile              = null;
    protected $availableInOffice    = null;
    protected $availableOutOfOffice = null;
    protected $busy                 = null;
    protected $unavailable          = null;


    /**
     * CommPilot Express SR Profile Type.
     */
    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf CommPilotExpressSRProfile)
             ? $profile
             : new CommPilotExpressSRProfile($profile);
    }

    /**
     * CommPilot Express SR Profile Type.
     */
    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->getValue();
    }

    /**
     * CommPilot Express SR Available In Office Settings used in the context of a get.
     */
    public function setAvailableInOffice(CommPilotExpressSRAvailableInOffice $availableInOffice = null)
    {
        $this->availableInOffice =  $availableInOffice;
    }

    /**
     * CommPilot Express SR Available In Office Settings used in the context of a get.
     */
    public function getAvailableInOffice()
    {
        return (!$this->availableInOffice) ?: $this->availableInOffice->getValue();
    }

    /**
     * CommPilot Express SR Available Out Of Office Configuration used in the context of a get.
     */
    public function setAvailableOutOfOffice(CommPilotExpressSRAvailableOutOfOffice $availableOutOfOffice = null)
    {
        $this->availableOutOfOffice =  $availableOutOfOffice;
    }

    /**
     * CommPilot Express SR Available Out Of Office Configuration used in the context of a get.
     */
    public function getAvailableOutOfOffice()
    {
        return (!$this->availableOutOfOffice) ?: $this->availableOutOfOffice->getValue();
    }

    /**
     * CommPilot Express SR Available In Office Configuration used in the context of a get.
     */
    public function setBusy(CommPilotExpressSRBusy $busy = null)
    {
        $this->busy =  $busy;
    }

    /**
     * CommPilot Express SR Available In Office Configuration used in the context of a get.
     */
    public function getBusy()
    {
        return (!$this->busy) ?: $this->busy->getValue();
    }

    /**
     * CommPilot Express SR Unavailable Configuration used in the context of a get.
     */
    public function setUnavailable(CommPilotExpressSRUnavailable $unavailable = null)
    {
        $this->unavailable =  $unavailable;
    }

    /**
     * CommPilot Express SR Unavailable Configuration used in the context of a get.
     */
    public function getUnavailable()
    {
        return (!$this->unavailable) ?: $this->unavailable->getValue();
    }
}
