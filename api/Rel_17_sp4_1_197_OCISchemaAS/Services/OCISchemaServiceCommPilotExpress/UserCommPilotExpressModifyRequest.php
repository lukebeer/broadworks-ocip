<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableOutOfOfficeModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableInOfficeModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressUnavailableModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressBusyModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
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
    public    $name                 = 'UserCommPilotExpressModifyRequest';
    protected $userId               = null;
    protected $profile              = null;
    protected $availableInOffice    = null;
    protected $availableOutOfOffice = null;
    protected $busy                 = null;
    protected $unavailable          = null;

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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
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
     * @return CommPilotExpressProfile $profile
     */
    public function getProfile()
    {
        return $this->profile->getValue();
    }

    /**
     * 
     */
    public function setAvailableInOffice(CommPilotExpressAvailableInOfficeModify $availableInOffice = null)
    {
        if (!$availableInOffice) return $this;
        $this->availableInOffice = $availableInOffice;
        $this->availableInOffice->setName('availableInOffice');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressAvailableInOfficeModify $availableInOffice
     */
    public function getAvailableInOffice()
    {
        return $this->availableInOffice;
    }

    /**
     * 
     */
    public function setAvailableOutOfOffice(CommPilotExpressAvailableOutOfOfficeModify $availableOutOfOffice = null)
    {
        if (!$availableOutOfOffice) return $this;
        $this->availableOutOfOffice = $availableOutOfOffice;
        $this->availableOutOfOffice->setName('availableOutOfOffice');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressAvailableOutOfOfficeModify $availableOutOfOffice
     */
    public function getAvailableOutOfOffice()
    {
        return $this->availableOutOfOffice;
    }

    /**
     * 
     */
    public function setBusy(CommPilotExpressBusyModify $busy = null)
    {
        if (!$busy) return $this;
        $this->busy = $busy;
        $this->busy->setName('busy');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressBusyModify $busy
     */
    public function getBusy()
    {
        return $this->busy;
    }

    /**
     * 
     */
    public function setUnavailable(CommPilotExpressUnavailableModify $unavailable = null)
    {
        if (!$unavailable) return $this;
        $this->unavailable = $unavailable;
        $this->unavailable->setName('unavailable');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressUnavailableModify $unavailable
     */
    public function getUnavailable()
    {
        return $this->unavailable;
    }
}
