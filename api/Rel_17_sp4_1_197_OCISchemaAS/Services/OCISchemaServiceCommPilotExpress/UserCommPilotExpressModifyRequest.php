<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotExpress; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableOutOfOfficeModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableInOfficeModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressUnavailableModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressBusyModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's commPilot express service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserCommPilotExpressModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $userId                = null;
    protected $profile               = null;
    protected $availableInOffice     = null;
    protected $availableOutOfOffice  = null;
    protected $busy                  = null;
    protected $unavailable           = null;

    public function __construct(
         $userId,
         $profile = null,
         CommPilotExpressAvailableInOfficeModify $availableInOffice = null,
         CommPilotExpressAvailableOutOfOfficeModify $availableOutOfOffice = null,
         CommPilotExpressBusyModify $busy = null,
         CommPilotExpressUnavailableModify $unavailable = null
    ) {
        $this->setUserId($userId);
        $this->setProfile($profile);
        $this->setAvailableInOffice($availableInOffice);
        $this->setAvailableOutOfOffice($availableOutOfOffice);
        $this->setBusy($busy);
        $this->setUnavailable($unavailable);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

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

    public function setAvailableInOffice(CommPilotExpressAvailableInOfficeModify $availableInOffice = null)
    {
    }

    public function getAvailableInOffice()
    {
        return (!$this->availableInOffice) ?: $this->availableInOffice->value();
    }

    public function setAvailableOutOfOffice(CommPilotExpressAvailableOutOfOfficeModify $availableOutOfOffice = null)
    {
    }

    public function getAvailableOutOfOffice()
    {
        return (!$this->availableOutOfOffice) ?: $this->availableOutOfOffice->value();
    }

    public function setBusy(CommPilotExpressBusyModify $busy = null)
    {
    }

    public function getBusy()
    {
        return (!$this->busy) ?: $this->busy->value();
    }

    public function setUnavailable(CommPilotExpressUnavailableModify $unavailable = null)
    {
    }

    public function getUnavailable()
    {
        return (!$this->unavailable) ?: $this->unavailable->value();
    }
}
