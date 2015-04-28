<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\BroadWorksMobilityUserSettingLevel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\BroadWorksMobilityPhoneToRing;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's broadworks mobility service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksMobilityModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBroadWorksMobilityModifyRequest';
    protected $userId;
    protected $isActive;
    protected $phonesToRing;
    protected $mobilePhoneNumber;
    protected $alertClickToDialCalls;
    protected $alertGroupPagingCalls;
    protected $enableDiversionInhibitor;
    protected $requireAnswerConfirmation;
    protected $broadworksCallControl;
    protected $useSettingLevel;
    protected $denyCallOriginations;
    protected $denyCallTerminations;

    public function __construct(
         $userId = '',
         $isActive = null,
         $phonesToRing = null,
         $mobilePhoneNumber = null,
         $alertClickToDialCalls = null,
         $alertGroupPagingCalls = null,
         $enableDiversionInhibitor = null,
         $requireAnswerConfirmation = null,
         $broadworksCallControl = null,
         $useSettingLevel = null,
         $denyCallOriginations = null,
         $denyCallTerminations = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setPhonesToRing($phonesToRing);
        $this->setMobilePhoneNumber($mobilePhoneNumber);
        $this->setAlertClickToDialCalls($alertClickToDialCalls);
        $this->setAlertGroupPagingCalls($alertGroupPagingCalls);
        $this->setEnableDiversionInhibitor($enableDiversionInhibitor);
        $this->setRequireAnswerConfirmation($requireAnswerConfirmation);
        $this->setBroadworksCallControl($broadworksCallControl);
        $this->setUseSettingLevel($useSettingLevel);
        $this->setDenyCallOriginations($denyCallOriginations);
        $this->setDenyCallTerminations($denyCallTerminations);
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
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhonesToRing($phonesToRing = null)
    {
        $this->phonesToRing = ($phonesToRing InstanceOf BroadWorksMobilityPhoneToRing)
             ? $phonesToRing
             : new BroadWorksMobilityPhoneToRing($phonesToRing);
        $this->phonesToRing->setElementName('phonesToRing');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobilityPhoneToRing $phonesToRing
     */
    public function getPhonesToRing()
    {
        return ($this->phonesToRing)
            ? $this->phonesToRing->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        $this->mobilePhoneNumber = ($mobilePhoneNumber InstanceOf DN)
             ? $mobilePhoneNumber
             : new DN($mobilePhoneNumber);
        $this->mobilePhoneNumber->setElementName('mobilePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $mobilePhoneNumber
     */
    public function getMobilePhoneNumber()
    {
        return ($this->mobilePhoneNumber)
            ? $this->mobilePhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlertClickToDialCalls($alertClickToDialCalls = null)
    {
        $this->alertClickToDialCalls = new PrimitiveType($alertClickToDialCalls);
        $this->alertClickToDialCalls->setElementName('alertClickToDialCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertClickToDialCalls
     */
    public function getAlertClickToDialCalls()
    {
        return ($this->alertClickToDialCalls)
            ? $this->alertClickToDialCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlertGroupPagingCalls($alertGroupPagingCalls = null)
    {
        $this->alertGroupPagingCalls = new PrimitiveType($alertGroupPagingCalls);
        $this->alertGroupPagingCalls->setElementName('alertGroupPagingCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertGroupPagingCalls
     */
    public function getAlertGroupPagingCalls()
    {
        return ($this->alertGroupPagingCalls)
            ? $this->alertGroupPagingCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableDiversionInhibitor($enableDiversionInhibitor = null)
    {
        $this->enableDiversionInhibitor = new PrimitiveType($enableDiversionInhibitor);
        $this->enableDiversionInhibitor->setElementName('enableDiversionInhibitor');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDiversionInhibitor
     */
    public function getEnableDiversionInhibitor()
    {
        return ($this->enableDiversionInhibitor)
            ? $this->enableDiversionInhibitor->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRequireAnswerConfirmation($requireAnswerConfirmation = null)
    {
        $this->requireAnswerConfirmation = new PrimitiveType($requireAnswerConfirmation);
        $this->requireAnswerConfirmation->setElementName('requireAnswerConfirmation');
        return $this;
    }

    /**
     * 
     * @return boolean $requireAnswerConfirmation
     */
    public function getRequireAnswerConfirmation()
    {
        return ($this->requireAnswerConfirmation)
            ? $this->requireAnswerConfirmation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBroadworksCallControl($broadworksCallControl = null)
    {
        $this->broadworksCallControl = new PrimitiveType($broadworksCallControl);
        $this->broadworksCallControl->setElementName('broadworksCallControl');
        return $this;
    }

    /**
     * 
     * @return boolean $broadworksCallControl
     */
    public function getBroadworksCallControl()
    {
        return ($this->broadworksCallControl)
            ? $this->broadworksCallControl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseSettingLevel($useSettingLevel = null)
    {
        $this->useSettingLevel = ($useSettingLevel InstanceOf BroadWorksMobilityUserSettingLevel)
             ? $useSettingLevel
             : new BroadWorksMobilityUserSettingLevel($useSettingLevel);
        $this->useSettingLevel->setElementName('useSettingLevel');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobilityUserSettingLevel $useSettingLevel
     */
    public function getUseSettingLevel()
    {
        return ($this->useSettingLevel)
            ? $this->useSettingLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDenyCallOriginations($denyCallOriginations = null)
    {
        $this->denyCallOriginations = new PrimitiveType($denyCallOriginations);
        $this->denyCallOriginations->setElementName('denyCallOriginations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallOriginations
     */
    public function getDenyCallOriginations()
    {
        return ($this->denyCallOriginations)
            ? $this->denyCallOriginations->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDenyCallTerminations($denyCallTerminations = null)
    {
        $this->denyCallTerminations = new PrimitiveType($denyCallTerminations);
        $this->denyCallTerminations->setElementName('denyCallTerminations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallTerminations
     */
    public function getDenyCallTerminations()
    {
        return ($this->denyCallTerminations)
            ? $this->denyCallTerminations->getElementValue()
            : null;
    }
}
