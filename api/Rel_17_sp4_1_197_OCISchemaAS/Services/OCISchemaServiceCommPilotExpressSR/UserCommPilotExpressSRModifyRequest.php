<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRAvailableOutOfOfficeModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRAvailableInOfficeModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRUnavailableModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRBusyModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's commPilot express SR service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCommPilotExpressSRModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = 'UserCommPilotExpressSRModifyRequest';
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
    public function setAvailableInOffice(CommPilotExpressSRAvailableInOfficeModify $availableInOffice = null)
    {
        if (!$availableInOffice) return $this;
        $this->availableInOffice = $availableInOffice;
        $this->availableInOffice->setName('availableInOffice');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressSRAvailableInOfficeModify $availableInOffice
     */
    public function getAvailableInOffice()
    {
        return $this->availableInOffice;
    }

    /**
     * 
     */
    public function setAvailableOutOfOffice(CommPilotExpressSRAvailableOutOfOfficeModify $availableOutOfOffice = null)
    {
        if (!$availableOutOfOffice) return $this;
        $this->availableOutOfOffice = $availableOutOfOffice;
        $this->availableOutOfOffice->setName('availableOutOfOffice');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressSRAvailableOutOfOfficeModify $availableOutOfOffice
     */
    public function getAvailableOutOfOffice()
    {
        return $this->availableOutOfOffice;
    }

    /**
     * 
     */
    public function setBusy(CommPilotExpressSRBusyModify $busy = null)
    {
        if (!$busy) return $this;
        $this->busy = $busy;
        $this->busy->setName('busy');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressSRBusyModify $busy
     */
    public function getBusy()
    {
        return $this->busy;
    }

    /**
     * 
     */
    public function setUnavailable(CommPilotExpressSRUnavailableModify $unavailable = null)
    {
        if (!$unavailable) return $this;
        $this->unavailable = $unavailable;
        $this->unavailable->setName('unavailable');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressSRUnavailableModify $unavailable
     */
    public function getUnavailable()
    {
        return $this->unavailable;
    }
}
