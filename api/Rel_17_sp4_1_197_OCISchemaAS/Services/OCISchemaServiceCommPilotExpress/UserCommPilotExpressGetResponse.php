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
    public    $name                  = __CLASS__;
    protected $profile               = null;
    protected $availableInOffice     = null;
    protected $availableOutOfOffice  = null;
    protected $busy                  = null;
    protected $unavailable           = null;


    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf CommPilotExpressProfile)
             ? $profile
             : new CommPilotExpressProfile($profile);
    }

    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->value();
    }

    public function setAvailableInOffice(CommPilotExpressAvailableInOffice $availableInOffice = null)
    {
    }

    public function getAvailableInOffice()
    {
        return (!$this->availableInOffice) ?: $this->availableInOffice->value();
    }

    public function setAvailableOutOfOffice(CommPilotExpressAvailableOutOfOffice $availableOutOfOffice = null)
    {
    }

    public function getAvailableOutOfOffice()
    {
        return (!$this->availableOutOfOffice) ?: $this->availableOutOfOffice->value();
    }

    public function setBusy(CommPilotExpressBusy $busy = null)
    {
    }

    public function getBusy()
    {
        return (!$this->busy) ?: $this->busy->value();
    }

    public function setUnavailable(CommPilotExpressUnavailable $unavailable = null)
    {
    }

    public function getUnavailable()
    {
        return (!$this->unavailable) ?: $this->unavailable->value();
    }
}
