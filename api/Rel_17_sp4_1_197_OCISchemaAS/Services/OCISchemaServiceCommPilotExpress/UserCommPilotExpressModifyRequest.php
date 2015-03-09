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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotExpress\UserCommPilotExpressModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's commPilot express service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserCommPilotExpressModifyRequest extends ComplexType implements ComplexInterface
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
          $availableInOffice = null,
          $availableOutOfOffice = null,
          $busy = null,
          $unavailable = null
    ) {
        $this->setUserId($userId);
        $this->setProfile($profile);
        $this->setAvailableInOffice($availableInOffice);
        $this->setAvailableOutOfOffice($availableOutOfOffice);
        $this->setBusy($busy);
        $this->setUnavailable($unavailable);
    }

    /**
     * @return UserCommPilotExpressModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setAvailableInOffice(CommPilotExpressAvailableInOfficeModify $availableInOffice = null)
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
     * CommPilot Express Available Out Of Office Configuration used in the context of a modify.
     */
    public function setAvailableOutOfOffice(CommPilotExpressAvailableOutOfOfficeModify $availableOutOfOffice = null)
    {
        $this->availableOutOfOffice =  $availableOutOfOffice;
    }

    /**
     * CommPilot Express Available Out Of Office Configuration used in the context of a modify.
     */
    public function getAvailableOutOfOffice()
    {
        return (!$this->availableOutOfOffice) ?: $this->availableOutOfOffice->getValue();
    }

    /**
     * CommPilot Express Available In Office Configuration used in the context of a modify.
     */
    public function setBusy(CommPilotExpressBusyModify $busy = null)
    {
        $this->busy =  $busy;
    }

    /**
     * CommPilot Express Available In Office Configuration used in the context of a modify.
     */
    public function getBusy()
    {
        return (!$this->busy) ?: $this->busy->getValue();
    }

    /**
     * CommPilot Express Unavailable Configuration used in the context of a modify.
     */
    public function setUnavailable(CommPilotExpressUnavailableModify $unavailable = null)
    {
        $this->unavailable =  $unavailable;
    }

    /**
     * CommPilot Express Unavailable Configuration used in the context of a modify.
     */
    public function getUnavailable()
    {
        return (!$this->unavailable) ?: $this->unavailable->getValue();
    }
}
