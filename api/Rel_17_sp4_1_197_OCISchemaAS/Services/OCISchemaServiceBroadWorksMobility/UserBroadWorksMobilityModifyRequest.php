<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobilityPhoneToRing;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobilityUserSettingLevel;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's broadworks mobility service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksMobilityModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $isActive=null,
             $phonesToRing=null,
             $mobilePhoneNumber=null,
             $alertClickToDialCalls=null,
             $alertGroupPagingCalls=null,
             $enableDiversionInhibitor=null,
             $requireAnswerConfirmation=null,
             $broadworksCallControl=null,
             $useSettingLevel=null,
             $denyCallOriginations=null,
             $denyCallTerminations=null
    ) {
        $this->userId                    = new UserId($userId);
        $this->isActive                  = $isActive;
        $this->phonesToRing              = $phonesToRing;
        $this->mobilePhoneNumber         = new DN($mobilePhoneNumber);
        $this->alertClickToDialCalls     = $alertClickToDialCalls;
        $this->alertGroupPagingCalls     = $alertGroupPagingCalls;
        $this->enableDiversionInhibitor  = $enableDiversionInhibitor;
        $this->requireAnswerConfirmation = $requireAnswerConfirmation;
        $this->broadworksCallControl     = $broadworksCallControl;
        $this->useSettingLevel           = $useSettingLevel;
        $this->denyCallOriginations      = $denyCallOriginations;
        $this->denyCallTerminations      = $denyCallTerminations;
        $this->args                      = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setPhonesToRing($phonesToRing)
    {
        $phonesToRing and $this->phonesToRing = new BroadWorksMobilityPhoneToRing($phonesToRing);
    }

    public function getPhonesToRing()
    {
        return (!$this->phonesToRing) ?: $this->phonesToRing->value();
    }

    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $mobilePhoneNumber and $this->mobilePhoneNumber = new DN($mobilePhoneNumber);
    }

    public function getMobilePhoneNumber()
    {
        return (!$this->mobilePhoneNumber) ?: $this->mobilePhoneNumber->value();
    }

    public function setAlertClickToDialCalls($alertClickToDialCalls)
    {
        $alertClickToDialCalls and $this->alertClickToDialCalls = new xs:boolean($alertClickToDialCalls);
    }

    public function getAlertClickToDialCalls()
    {
        return (!$this->alertClickToDialCalls) ?: $this->alertClickToDialCalls->value();
    }

    public function setAlertGroupPagingCalls($alertGroupPagingCalls)
    {
        $alertGroupPagingCalls and $this->alertGroupPagingCalls = new xs:boolean($alertGroupPagingCalls);
    }

    public function getAlertGroupPagingCalls()
    {
        return (!$this->alertGroupPagingCalls) ?: $this->alertGroupPagingCalls->value();
    }

    public function setEnableDiversionInhibitor($enableDiversionInhibitor)
    {
        $enableDiversionInhibitor and $this->enableDiversionInhibitor = new xs:boolean($enableDiversionInhibitor);
    }

    public function getEnableDiversionInhibitor()
    {
        return (!$this->enableDiversionInhibitor) ?: $this->enableDiversionInhibitor->value();
    }

    public function setRequireAnswerConfirmation($requireAnswerConfirmation)
    {
        $requireAnswerConfirmation and $this->requireAnswerConfirmation = new xs:boolean($requireAnswerConfirmation);
    }

    public function getRequireAnswerConfirmation()
    {
        return (!$this->requireAnswerConfirmation) ?: $this->requireAnswerConfirmation->value();
    }

    public function setBroadworksCallControl($broadworksCallControl)
    {
        $broadworksCallControl and $this->broadworksCallControl = new xs:boolean($broadworksCallControl);
    }

    public function getBroadworksCallControl()
    {
        return (!$this->broadworksCallControl) ?: $this->broadworksCallControl->value();
    }

    public function setUseSettingLevel($useSettingLevel)
    {
        $useSettingLevel and $this->useSettingLevel = new BroadWorksMobilityUserSettingLevel($useSettingLevel);
    }

    public function getUseSettingLevel()
    {
        return (!$this->useSettingLevel) ?: $this->useSettingLevel->value();
    }

    public function setDenyCallOriginations($denyCallOriginations)
    {
        $denyCallOriginations and $this->denyCallOriginations = new xs:boolean($denyCallOriginations);
    }

    public function getDenyCallOriginations()
    {
        return (!$this->denyCallOriginations) ?: $this->denyCallOriginations->value();
    }

    public function setDenyCallTerminations($denyCallTerminations)
    {
        $denyCallTerminations and $this->denyCallTerminations = new xs:boolean($denyCallTerminations);
    }

    public function getDenyCallTerminations()
    {
        return (!$this->denyCallTerminations) ?: $this->denyCallTerminations->value();
    }
}
