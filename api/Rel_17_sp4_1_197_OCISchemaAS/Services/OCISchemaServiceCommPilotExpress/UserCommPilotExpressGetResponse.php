<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotExpress; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommPilotExpressProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommPilotExpressAvailableInOffice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommPilotExpressAvailableOutOfOffice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommPilotExpressBusy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommPilotExpressUnavailable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCommPilotExpressGetRequest.
 */
class UserCommPilotExpressGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $profile=null,
             $availableInOffice,
             $availableOutOfOffice,
             $busy,
             $unavailable
    ) {
        $this->profile              = $profile;
        $this->availableInOffice    = $availableInOffice;
        $this->availableOutOfOffice = $availableOutOfOffice;
        $this->busy                 = $busy;
        $this->unavailable          = $unavailable;
        $this->args                 = func_get_args();
    }

    public function setProfile($profile)
    {
        $profile and $this->profile = new CommPilotExpressProfile($profile);
    }

    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->value();
    }

    public function setAvailableInOffice($availableInOffice)
    {
        $availableInOffice and $this->availableInOffice = new CommPilotExpressAvailableInOffice($availableInOffice);
    }

    public function getAvailableInOffice()
    {
        return (!$this->availableInOffice) ?: $this->availableInOffice->value();
    }

    public function setAvailableOutOfOffice($availableOutOfOffice)
    {
        $availableOutOfOffice and $this->availableOutOfOffice = new CommPilotExpressAvailableOutOfOffice($availableOutOfOffice);
    }

    public function getAvailableOutOfOffice()
    {
        return (!$this->availableOutOfOffice) ?: $this->availableOutOfOffice->value();
    }

    public function setBusy($busy)
    {
        $busy and $this->busy = new CommPilotExpressBusy($busy);
    }

    public function getBusy()
    {
        return (!$this->busy) ?: $this->busy->value();
    }

    public function setUnavailable($unavailable)
    {
        $unavailable and $this->unavailable = new CommPilotExpressUnavailable($unavailable);
    }

    public function getUnavailable()
    {
        return (!$this->unavailable) ?: $this->unavailable->value();
    }
}
