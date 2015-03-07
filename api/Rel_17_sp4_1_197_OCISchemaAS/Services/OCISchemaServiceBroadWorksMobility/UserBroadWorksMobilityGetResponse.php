<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\BroadWorksMobilityUserSettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\BroadWorksMobilityPhoneToRing;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to a UserBroadWorksMobilityGetRequest.
 */
class UserBroadWorksMobilityGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $isActive                   = null;
    protected $phonesToRing               = null;
    protected $mobilePhoneNumber          = null;
    protected $alertClickToDialCalls      = null;
    protected $alertGroupPagingCalls      = null;
    protected $enableDiversionInhibitor   = null;
    protected $requireAnswerConfirmation  = null;
    protected $broadworksCallControl      = null;
    protected $useSettingLevel            = null;
    protected $denyCallOriginations       = null;
    protected $denyCallTerminations       = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setPhonesToRing($phonesToRing = null)
    {
        $this->phonesToRing = ($phonesToRing InstanceOf BroadWorksMobilityPhoneToRing)
             ? $phonesToRing
             : new BroadWorksMobilityPhoneToRing($phonesToRing);
    }

    public function getPhonesToRing()
    {
        return (!$this->phonesToRing) ?: $this->phonesToRing->value();
    }

    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        $this->mobilePhoneNumber = ($mobilePhoneNumber InstanceOf DN)
             ? $mobilePhoneNumber
             : new DN($mobilePhoneNumber);
    }

    public function getMobilePhoneNumber()
    {
        return (!$this->mobilePhoneNumber) ?: $this->mobilePhoneNumber->value();
    }

    public function setAlertClickToDialCalls(xs:boolean $alertClickToDialCalls = null)
    {
    }

    public function getAlertClickToDialCalls()
    {
        return (!$this->alertClickToDialCalls) ?: $this->alertClickToDialCalls->value();
    }

    public function setAlertGroupPagingCalls(xs:boolean $alertGroupPagingCalls = null)
    {
    }

    public function getAlertGroupPagingCalls()
    {
        return (!$this->alertGroupPagingCalls) ?: $this->alertGroupPagingCalls->value();
    }

    public function setEnableDiversionInhibitor(xs:boolean $enableDiversionInhibitor = null)
    {
    }

    public function getEnableDiversionInhibitor()
    {
        return (!$this->enableDiversionInhibitor) ?: $this->enableDiversionInhibitor->value();
    }

    public function setRequireAnswerConfirmation(xs:boolean $requireAnswerConfirmation = null)
    {
    }

    public function getRequireAnswerConfirmation()
    {
        return (!$this->requireAnswerConfirmation) ?: $this->requireAnswerConfirmation->value();
    }

    public function setBroadworksCallControl(xs:boolean $broadworksCallControl = null)
    {
    }

    public function getBroadworksCallControl()
    {
        return (!$this->broadworksCallControl) ?: $this->broadworksCallControl->value();
    }

    public function setUseSettingLevel($useSettingLevel = null)
    {
        $this->useSettingLevel = ($useSettingLevel InstanceOf BroadWorksMobilityUserSettingLevel)
             ? $useSettingLevel
             : new BroadWorksMobilityUserSettingLevel($useSettingLevel);
    }

    public function getUseSettingLevel()
    {
        return (!$this->useSettingLevel) ?: $this->useSettingLevel->value();
    }

    public function setDenyCallOriginations(xs:boolean $denyCallOriginations = null)
    {
    }

    public function getDenyCallOriginations()
    {
        return (!$this->denyCallOriginations) ?: $this->denyCallOriginations->value();
    }

    public function setDenyCallTerminations(xs:boolean $denyCallTerminations = null)
    {
    }

    public function getDenyCallTerminations()
    {
        return (!$this->denyCallTerminations) ?: $this->denyCallTerminations->value();
    }
}
