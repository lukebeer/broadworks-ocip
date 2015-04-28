<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRAvailableOutOfOfficeModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRAvailableInOfficeModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRUnavailableModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRBusyModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's commPilot express SR service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCommPilotExpressSRModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCommPilotExpressSRModifyRequest';
    protected $userId;
    protected $profile;
    protected $availableInOffice;
    protected $availableOutOfOffice;
    protected $busy;
    protected $unavailable;

    public function __construct(
         $userId = '',
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
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf CommPilotExpressSRProfile)
             ? $profile
             : new CommPilotExpressSRProfile($profile);
        $this->profile->setElementName('profile');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressSRProfile $profile
     */
    public function getProfile()
    {
        return ($this->profile)
            ? $this->profile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAvailableInOffice(CommPilotExpressSRAvailableInOfficeModify $availableInOffice = null)
    {
        $this->availableInOffice = ($availableInOffice InstanceOf CommPilotExpressSRAvailableInOfficeModify)
             ? $availableInOffice
             : new CommPilotExpressSRAvailableInOfficeModify($availableInOffice);
        $this->availableInOffice->setElementName('availableInOffice');
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
        $this->availableOutOfOffice = ($availableOutOfOffice InstanceOf CommPilotExpressSRAvailableOutOfOfficeModify)
             ? $availableOutOfOffice
             : new CommPilotExpressSRAvailableOutOfOfficeModify($availableOutOfOffice);
        $this->availableOutOfOffice->setElementName('availableOutOfOffice');
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
        $this->busy = ($busy InstanceOf CommPilotExpressSRBusyModify)
             ? $busy
             : new CommPilotExpressSRBusyModify($busy);
        $this->busy->setElementName('busy');
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
        $this->unavailable = ($unavailable InstanceOf CommPilotExpressSRUnavailableModify)
             ? $unavailable
             : new CommPilotExpressSRUnavailableModify($unavailable);
        $this->unavailable->setElementName('unavailable');
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
