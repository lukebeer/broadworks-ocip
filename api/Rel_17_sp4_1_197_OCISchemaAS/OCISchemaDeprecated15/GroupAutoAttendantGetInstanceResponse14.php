<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantNameDialingEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantDialingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\AutoAttendantReadMenu;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupAutoAttendantGetInstanceRequest14.
 *         Contains the service profile information.
 *         Replaced By: GroupAutoAttendantGetInstanceResponse16
 */
class GroupAutoAttendantGetInstanceResponse14 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\GroupAutoAttendantGetInstanceResponse14';
    public    $name                   = __CLASS__;
    protected $serviceInstanceProfile = null;
    protected $enableVideo            = null;
    protected $businessHours          = null;
    protected $holidayScheduleName    = null;
    protected $extensionDialingScope  = null;
    protected $nameDialingScope       = null;
    protected $nameDialingEntries     = null;
    protected $businessHoursMenu      = null;
    protected $afterHoursMenu         = null;


    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ServiceInstanceReadProfile $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        $this->enableVideo = (boolean) $enableVideo;
    }

    /**
     * 
     */
    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->getValue();
    }

    /**
     * Schedule name.
     */
    public function setBusinessHours($businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf ScheduleName)
             ? $businessHours
             : new ScheduleName($businessHours);
    }

    /**
     * Schedule name.
     */
    public function getBusinessHours()
    {
        return (!$this->businessHours) ?: $this->businessHours->getValue();
    }

    /**
     * Schedule name.
     */
    public function setHolidayScheduleName($holidayScheduleName = null)
    {
        $this->holidayScheduleName = ($holidayScheduleName InstanceOf ScheduleName)
             ? $holidayScheduleName
             : new ScheduleName($holidayScheduleName);
    }

    /**
     * Schedule name.
     */
    public function getHolidayScheduleName()
    {
        return (!$this->holidayScheduleName) ?: $this->holidayScheduleName->getValue();
    }

    /**
     * The scope of extension or name dialing.
     */
    public function setExtensionDialingScope($extensionDialingScope = null)
    {
        $this->extensionDialingScope = ($extensionDialingScope InstanceOf AutoAttendantDialingScope)
             ? $extensionDialingScope
             : new AutoAttendantDialingScope($extensionDialingScope);
    }

    /**
     * The scope of extension or name dialing.
     */
    public function getExtensionDialingScope()
    {
        return (!$this->extensionDialingScope) ?: $this->extensionDialingScope->getValue();
    }

    /**
     * The scope of extension or name dialing.
     */
    public function setNameDialingScope($nameDialingScope = null)
    {
        $this->nameDialingScope = ($nameDialingScope InstanceOf AutoAttendantDialingScope)
             ? $nameDialingScope
             : new AutoAttendantDialingScope($nameDialingScope);
    }

    /**
     * The scope of extension or name dialing.
     */
    public function getNameDialingScope()
    {
        return (!$this->nameDialingScope) ?: $this->nameDialingScope->getValue();
    }

    /**
     * The format callers should use when dialing by name.
     */
    public function setNameDialingEntries($nameDialingEntries = null)
    {
        $this->nameDialingEntries = ($nameDialingEntries InstanceOf AutoAttendantNameDialingEntry)
             ? $nameDialingEntries
             : new AutoAttendantNameDialingEntry($nameDialingEntries);
    }

    /**
     * The format callers should use when dialing by name.
     */
    public function getNameDialingEntries()
    {
        return (!$this->nameDialingEntries) ?: $this->nameDialingEntries->getValue();
    }

    /**
     * The configuration of the automated receptionist greeting
     *         prompt and dialing menu to be used during after business hours.
     */
    public function setBusinessHoursMenu(AutoAttendantReadMenu $businessHoursMenu = null)
    {
        $this->businessHoursMenu = AutoAttendantReadMenu $businessHoursMenu;
    }

    /**
     * The configuration of the automated receptionist greeting
     *         prompt and dialing menu to be used during after business hours.
     */
    public function getBusinessHoursMenu()
    {
        return (!$this->businessHoursMenu) ?: $this->businessHoursMenu->getValue();
    }

    /**
     * The configuration of the automated receptionist greeting
     *         prompt and dialing menu to be used during after business hours.
     */
    public function setAfterHoursMenu(AutoAttendantReadMenu $afterHoursMenu = null)
    {
        $this->afterHoursMenu = AutoAttendantReadMenu $afterHoursMenu;
    }

    /**
     * The configuration of the automated receptionist greeting
     *         prompt and dialing menu to be used during after business hours.
     */
    public function getAfterHoursMenu()
    {
        return (!$this->afterHoursMenu) ?: $this->afterHoursMenu->getValue();
    }
}