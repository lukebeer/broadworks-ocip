<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutoAttendantDialingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutoAttendantNameDialingEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutoAttendantReadMenu16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupAutoAttendantGetInstanceRequest17.
 *         Contains the service profile information.
 */
class GroupAutoAttendantGetInstanceResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             ServiceInstanceReadProfile17 $serviceInstanceProfile,
             $enableVideo,
             $businessHours=null,
             $holidayScheduleName=null,
             $extensionDialingScope,
             $nameDialingScope,
             $nameDialingEntries,
             $businessHoursMenu,
             $afterHoursMenu
    ) {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->enableVideo            = $enableVideo;
        $this->businessHours          = new ScheduleName($businessHours);
        $this->holidayScheduleName    = new ScheduleName($holidayScheduleName);
        $this->extensionDialingScope  = $extensionDialingScope;
        $this->nameDialingScope       = $nameDialingScope;
        $this->nameDialingEntries     = $nameDialingEntries;
        $this->businessHoursMenu      = $businessHoursMenu;
        $this->afterHoursMenu         = $afterHoursMenu;
        $this->args                   = func_get_args();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceReadProfile17($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setEnableVideo($enableVideo)
    {
        $enableVideo and $this->enableVideo = new xs:boolean($enableVideo);
    }

    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->value();
    }

    public function setBusinessHours($businessHours)
    {
        $businessHours and $this->businessHours = new ScheduleName($businessHours);
    }

    public function getBusinessHours()
    {
        return (!$this->businessHours) ?: $this->businessHours->value();
    }

    public function setHolidayScheduleName($holidayScheduleName)
    {
        $holidayScheduleName and $this->holidayScheduleName = new ScheduleName($holidayScheduleName);
    }

    public function getHolidayScheduleName()
    {
        return (!$this->holidayScheduleName) ?: $this->holidayScheduleName->value();
    }

    public function setExtensionDialingScope($extensionDialingScope)
    {
        $extensionDialingScope and $this->extensionDialingScope = new AutoAttendantDialingScope($extensionDialingScope);
    }

    public function getExtensionDialingScope()
    {
        return (!$this->extensionDialingScope) ?: $this->extensionDialingScope->value();
    }

    public function setNameDialingScope($nameDialingScope)
    {
        $nameDialingScope and $this->nameDialingScope = new AutoAttendantDialingScope($nameDialingScope);
    }

    public function getNameDialingScope()
    {
        return (!$this->nameDialingScope) ?: $this->nameDialingScope->value();
    }

    public function setNameDialingEntries($nameDialingEntries)
    {
        $nameDialingEntries and $this->nameDialingEntries = new AutoAttendantNameDialingEntry($nameDialingEntries);
    }

    public function getNameDialingEntries()
    {
        return (!$this->nameDialingEntries) ?: $this->nameDialingEntries->value();
    }

    public function setBusinessHoursMenu($businessHoursMenu)
    {
        $businessHoursMenu and $this->businessHoursMenu = new AutoAttendantReadMenu16($businessHoursMenu);
    }

    public function getBusinessHoursMenu()
    {
        return (!$this->businessHoursMenu) ?: $this->businessHoursMenu->value();
    }

    public function setAfterHoursMenu($afterHoursMenu)
    {
        $afterHoursMenu and $this->afterHoursMenu = new AutoAttendantReadMenu16($afterHoursMenu);
    }

    public function getAfterHoursMenu()
    {
        return (!$this->afterHoursMenu) ?: $this->afterHoursMenu->value();
    }
}
