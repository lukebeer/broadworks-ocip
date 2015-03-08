<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotExpressSR; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRAvailableOutOfOfficeModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRAvailableInOfficeModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRUnavailableModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRBusyModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the user's commPilot express SR service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCommPilotExpressSRModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $userId               = null;
    protected $profile              = null;
    protected $availableInOffice    = null;
    protected $availableOutOfOffice = null;
    protected $busy                 = null;
    protected $unavailable          = null;

    public function __construct(
         $userId,
         $profile = null,
         CommPilotExpressSRAvailableInOfficeModify $availableInOffice = null,
         CommPilotExpressSRAvailableOutOfOfficeModify $availableOutOfOffice = null,
         CommPilotExpressSRBusyModify $busy = null,
         CommPilotExpressSRUnavailableModify $unavailable = null
    ) {
        $this->setUserId($userId);
        $this->setProfile($profile);
        $this->setAvailableInOffice($availableInOffice);
        $this->setAvailableOutOfOffice($availableOutOfOffice);
        $this->setBusy($busy);
        $this->setUnavailable($unavailable);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

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
     * CommPilot Express SR Available In Office Settings used in the context of a modify.
     */
    public function setAvailableInOffice(CommPilotExpressSRAvailableInOfficeModify $availableInOffice = null)
    {
        $this->availableInOffice = CommPilotExpressSRAvailableInOfficeModify $availableInOffice;
    }

    /**
     * CommPilot Express SR Available In Office Settings used in the context of a modify.
     */
    public function getAvailableInOffice()
    {
        return (!$this->availableInOffice) ?: $this->availableInOffice->getValue();
    }

    /**
     * CommPilot Express SR Available Out Of Office Configuration used in the context of a modify.
     */
    public function setAvailableOutOfOffice(CommPilotExpressSRAvailableOutOfOfficeModify $availableOutOfOffice = null)
    {
        $this->availableOutOfOffice = CommPilotExpressSRAvailableOutOfOfficeModify $availableOutOfOffice;
    }

    /**
     * CommPilot Express SR Available Out Of Office Configuration used in the context of a modify.
     */
    public function getAvailableOutOfOffice()
    {
        return (!$this->availableOutOfOffice) ?: $this->availableOutOfOffice->getValue();
    }

    /**
     * CommPilot Express SR Available In Office Configuration used in the context of a modify.
     */
    public function setBusy(CommPilotExpressSRBusyModify $busy = null)
    {
        $this->busy = CommPilotExpressSRBusyModify $busy;
    }

    /**
     * CommPilot Express SR Available In Office Configuration used in the context of a modify.
     */
    public function getBusy()
    {
        return (!$this->busy) ?: $this->busy->getValue();
    }

    /**
     * CommPilot Express SR Unavailable Configuration used in the context of a modify.
     */
    public function setUnavailable(CommPilotExpressSRUnavailableModify $unavailable = null)
    {
        $this->unavailable = CommPilotExpressSRUnavailableModify $unavailable;
    }

    /**
     * CommPilot Express SR Unavailable Configuration used in the context of a modify.
     */
    public function getUnavailable()
    {
        return (!$this->unavailable) ?: $this->unavailable->getValue();
    }
}
