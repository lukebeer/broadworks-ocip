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
    public    $name                      = __CLASS__;
    protected $isActive                  = null;
    protected $phonesToRing              = null;
    protected $mobilePhoneNumber         = null;
    protected $alertClickToDialCalls     = null;
    protected $alertGroupPagingCalls     = null;
    protected $enableDiversionInhibitor  = null;
    protected $requireAnswerConfirmation = null;
    protected $broadworksCallControl     = null;
    protected $useSettingLevel           = null;
    protected $denyCallOriginations      = null;
    protected $denyCallTerminations      = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * BroadWorks Mobility interrupt type.
     */
    public function setPhonesToRing($phonesToRing = null)
    {
        $this->phonesToRing = ($phonesToRing InstanceOf BroadWorksMobilityPhoneToRing)
             ? $phonesToRing
             : new BroadWorksMobilityPhoneToRing($phonesToRing);
    }

    /**
     * BroadWorks Mobility interrupt type.
     */
    public function getPhonesToRing()
    {
        return (!$this->phonesToRing) ?: $this->phonesToRing->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        $this->mobilePhoneNumber = ($mobilePhoneNumber InstanceOf DN)
             ? $mobilePhoneNumber
             : new DN($mobilePhoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getMobilePhoneNumber()
    {
        return (!$this->mobilePhoneNumber) ?: $this->mobilePhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setAlertClickToDialCalls($alertClickToDialCalls = null)
    {
        $this->alertClickToDialCalls = (boolean) $alertClickToDialCalls;
    }

    /**
     * 
     */
    public function getAlertClickToDialCalls()
    {
        return (!$this->alertClickToDialCalls) ?: $this->alertClickToDialCalls->getValue();
    }

    /**
     * 
     */
    public function setAlertGroupPagingCalls($alertGroupPagingCalls = null)
    {
        $this->alertGroupPagingCalls = (boolean) $alertGroupPagingCalls;
    }

    /**
     * 
     */
    public function getAlertGroupPagingCalls()
    {
        return (!$this->alertGroupPagingCalls) ?: $this->alertGroupPagingCalls->getValue();
    }

    /**
     * 
     */
    public function setEnableDiversionInhibitor($enableDiversionInhibitor = null)
    {
        $this->enableDiversionInhibitor = (boolean) $enableDiversionInhibitor;
    }

    /**
     * 
     */
    public function getEnableDiversionInhibitor()
    {
        return (!$this->enableDiversionInhibitor) ?: $this->enableDiversionInhibitor->getValue();
    }

    /**
     * 
     */
    public function setRequireAnswerConfirmation($requireAnswerConfirmation = null)
    {
        $this->requireAnswerConfirmation = (boolean) $requireAnswerConfirmation;
    }

    /**
     * 
     */
    public function getRequireAnswerConfirmation()
    {
        return (!$this->requireAnswerConfirmation) ?: $this->requireAnswerConfirmation->getValue();
    }

    /**
     * 
     */
    public function setBroadworksCallControl($broadworksCallControl = null)
    {
        $this->broadworksCallControl = (boolean) $broadworksCallControl;
    }

    /**
     * 
     */
    public function getBroadworksCallControl()
    {
        return (!$this->broadworksCallControl) ?: $this->broadworksCallControl->getValue();
    }

    /**
     * BroadWorks Mobility setting for the user level.
     */
    public function setUseSettingLevel($useSettingLevel = null)
    {
        $this->useSettingLevel = ($useSettingLevel InstanceOf BroadWorksMobilityUserSettingLevel)
             ? $useSettingLevel
             : new BroadWorksMobilityUserSettingLevel($useSettingLevel);
    }

    /**
     * BroadWorks Mobility setting for the user level.
     */
    public function getUseSettingLevel()
    {
        return (!$this->useSettingLevel) ?: $this->useSettingLevel->getValue();
    }

    /**
     * 
     */
    public function setDenyCallOriginations($denyCallOriginations = null)
    {
        $this->denyCallOriginations = (boolean) $denyCallOriginations;
    }

    /**
     * 
     */
    public function getDenyCallOriginations()
    {
        return (!$this->denyCallOriginations) ?: $this->denyCallOriginations->getValue();
    }

    /**
     * 
     */
    public function setDenyCallTerminations($denyCallTerminations = null)
    {
        $this->denyCallTerminations = (boolean) $denyCallTerminations;
    }

    /**
     * 
     */
    public function getDenyCallTerminations()
    {
        return (!$this->denyCallTerminations) ?: $this->denyCallTerminations->getValue();
    }
}
