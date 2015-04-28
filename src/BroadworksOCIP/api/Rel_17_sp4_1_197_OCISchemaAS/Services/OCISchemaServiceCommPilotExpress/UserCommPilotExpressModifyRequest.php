<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableOutOfOfficeModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableInOfficeModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressUnavailableModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressBusyModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's commPilot express service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserCommPilotExpressModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCommPilotExpressModifyRequest';
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
        $this->profile = ($profile InstanceOf CommPilotExpressProfile)
             ? $profile
             : new CommPilotExpressProfile($profile);
        $this->profile->setElementName('profile');
        return $this;
    }

    /**
     * 
     * @return CommPilotExpressProfile $profile
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
    public function setAvailableInOffice(CommPilotExpressAvailableInOfficeModify $availableInOffice = null)
    {
        $this->availableInOffice = ($availableInOffice InstanceOf CommPilotExpressAvailableInOfficeModify)
             ? $availableInOffice
             : new CommPilotExpressAvailableInOfficeModify($availableInOffice);
        $this->availableInOffice->setElementName('availableInOffice');
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
        $this->availableOutOfOffice = ($availableOutOfOffice InstanceOf CommPilotExpressAvailableOutOfOfficeModify)
             ? $availableOutOfOffice
             : new CommPilotExpressAvailableOutOfOfficeModify($availableOutOfOffice);
        $this->availableOutOfOffice->setElementName('availableOutOfOffice');
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
        $this->busy = ($busy InstanceOf CommPilotExpressBusyModify)
             ? $busy
             : new CommPilotExpressBusyModify($busy);
        $this->busy->setElementName('busy');
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
        $this->unavailable = ($unavailable InstanceOf CommPilotExpressUnavailableModify)
             ? $unavailable
             : new CommPilotExpressUnavailableModify($unavailable);
        $this->unavailable->setElementName('unavailable');
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
