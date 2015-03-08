<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAutoAttendant; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantNameDialingEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantModifyMenu16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantDialingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify an Auto Attendant instance.
 *         Only Group and Enterprise level schedules are accepted.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAutoAttendantModifyInstanceRequest17sp1 extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $serviceUserId          = null;
    protected $serviceInstanceProfile = null;
    protected $enableVideo            = null;
    protected $businessHours          = null;
    protected $holidaySchedule        = null;
    protected $extensionDialingScope  = null;
    protected $nameDialingScope       = null;
    protected $nameDialingEntries     = null;
    protected $businessHoursMenu      = null;
    protected $afterHoursMenu         = null;

    public function __construct(
         $serviceUserId,
          $serviceInstanceProfile = null,
         $enableVideo = null,
          $businessHours = null,
          $holidaySchedule = null,
         $extensionDialingScope = null,
         $nameDialingScope = null,
         $nameDialingEntries = null,
          $businessHoursMenu = null,
          $afterHoursMenu = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setEnableVideo($enableVideo);
        $this->setBusinessHours($businessHours);
        $this->setHolidaySchedule($holidaySchedule);
        $this->setExtensionDialingScope($extensionDialingScope);
        $this->setNameDialingScope($nameDialingScope);
        $this->setNameDialingEntries($nameDialingEntries);
        $this->setBusinessHoursMenu($businessHoursMenu);
        $this->setAfterHoursMenu($afterHoursMenu);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile =  $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
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
     * The from dn criteria.
     */
    public function setBusinessHours(TimeSchedule $businessHours = null)
    {
        $this->businessHours =  $businessHours;
    }

    /**
     * The from dn criteria.
     */
    public function getBusinessHours()
    {
        return (!$this->businessHours) ?: $this->businessHours->getValue();
    }

    /**
     * Holiday Schedule.
     */
    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
        $this->holidaySchedule =  $holidaySchedule;
    }

    /**
     * Holiday Schedule.
     */
    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->getValue();
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
     *         prompt and dialing menu to be used during business hours.
     *         It is used when modifying an Auto Attendant group.
     */
    public function setBusinessHoursMenu(AutoAttendantModifyMenu16 $businessHoursMenu = null)
    {
        $this->businessHoursMenu =  $businessHoursMenu;
    }

    /**
     * The configuration of the automated receptionist greeting
     *         prompt and dialing menu to be used during business hours.
     *         It is used when modifying an Auto Attendant group.
     */
    public function getBusinessHoursMenu()
    {
        return (!$this->businessHoursMenu) ?: $this->businessHoursMenu->getValue();
    }

    /**
     * The configuration of the automated receptionist greeting
     *         prompt and dialing menu to be used during business hours.
     *         It is used when modifying an Auto Attendant group.
     */
    public function setAfterHoursMenu(AutoAttendantModifyMenu16 $afterHoursMenu = null)
    {
        $this->afterHoursMenu =  $afterHoursMenu;
    }

    /**
     * The configuration of the automated receptionist greeting
     *         prompt and dialing menu to be used during business hours.
     *         It is used when modifying an Auto Attendant group.
     */
    public function getAfterHoursMenu()
    {
        return (!$this->afterHoursMenu) ?: $this->afterHoursMenu->getValue();
    }
}
