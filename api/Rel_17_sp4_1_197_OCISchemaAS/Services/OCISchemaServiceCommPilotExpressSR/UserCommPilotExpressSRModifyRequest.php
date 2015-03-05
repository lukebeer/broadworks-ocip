<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotExpressSR; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommPilotExpressSRProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommPilotExpressSRAvailableInOfficeModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommPilotExpressSRAvailableOutOfOfficeModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommPilotExpressSRBusyModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommPilotExpressSRUnavailableModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's commPilot express SR service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCommPilotExpressSRModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $profile=null,
             $availableInOffice=null,
             $availableOutOfOffice=null,
             $busy=null,
             $unavailable=null
    ) {
        $this->userId               = new UserId($userId);
        $this->profile              = $profile;
        $this->availableInOffice    = $availableInOffice;
        $this->availableOutOfOffice = $availableOutOfOffice;
        $this->busy                 = $busy;
        $this->unavailable          = $unavailable;
        $this->args                 = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setProfile($profile)
    {
        $profile and $this->profile = new CommPilotExpressSRProfile($profile);
    }

    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->value();
    }

    public function setAvailableInOffice($availableInOffice)
    {
        $availableInOffice and $this->availableInOffice = new CommPilotExpressSRAvailableInOfficeModify($availableInOffice);
    }

    public function getAvailableInOffice()
    {
        return (!$this->availableInOffice) ?: $this->availableInOffice->value();
    }

    public function setAvailableOutOfOffice($availableOutOfOffice)
    {
        $availableOutOfOffice and $this->availableOutOfOffice = new CommPilotExpressSRAvailableOutOfOfficeModify($availableOutOfOffice);
    }

    public function getAvailableOutOfOffice()
    {
        return (!$this->availableOutOfOffice) ?: $this->availableOutOfOffice->value();
    }

    public function setBusy($busy)
    {
        $busy and $this->busy = new CommPilotExpressSRBusyModify($busy);
    }

    public function getBusy()
    {
        return (!$this->busy) ?: $this->busy->value();
    }

    public function setUnavailable($unavailable)
    {
        $unavailable and $this->unavailable = new CommPilotExpressSRUnavailableModify($unavailable);
    }

    public function getUnavailable()
    {
        return (!$this->unavailable) ?: $this->unavailable->value();
    }
}
