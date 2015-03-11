<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantNameDialingEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantModifyMenu16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantDialingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify an Auto Attendant instance.
 *         Only Group and Enterprise level schedules are accepted.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAutoAttendantModifyInstanceRequest17sp1 extends ComplexType implements ComplexInterface
{
    public    $name                   = 'GroupAutoAttendantModifyInstanceRequest17sp1';
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
         ServiceInstanceModifyProfile $serviceInstanceProfile = null,
         $enableVideo = null,
         TimeSchedule $businessHours = null,
         HolidaySchedule $holidaySchedule = null,
         $extensionDialingScope = null,
         $nameDialingScope = null,
         $nameDialingEntries = null,
         AutoAttendantModifyMenu16 $businessHoursMenu = null,
         AutoAttendantModifyMenu16 $afterHoursMenu = null
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
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceModifyProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        if (!$enableVideo) return $this;
        $this->enableVideo = new PrimitiveType($enableVideo);
        $this->enableVideo->setName('enableVideo');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableVideo()
    {
        return $this->enableVideo->getValue();
    }

    /**
     * 
     */
    public function setBusinessHours(TimeSchedule $businessHours = null)
    {
        if (!$businessHours) return $this;
        $this->businessHours = $businessHours;
        $this->businessHours->setName('businessHours');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule
     */
    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    /**
     * 
     */
    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
        if (!$holidaySchedule) return $this;
        $this->holidaySchedule = $holidaySchedule;
        $this->holidaySchedule->setName('holidaySchedule');
        return $this;
    }

    /**
     * 
     * @return HolidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * 
     */
    public function setExtensionDialingScope($extensionDialingScope = null)
    {
        if (!$extensionDialingScope) return $this;
        $this->extensionDialingScope = ($extensionDialingScope InstanceOf AutoAttendantDialingScope)
             ? $extensionDialingScope
             : new AutoAttendantDialingScope($extensionDialingScope);
        $this->extensionDialingScope->setName('extensionDialingScope');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantDialingScope
     */
    public function getExtensionDialingScope()
    {
        return $this->extensionDialingScope->getValue();
    }

    /**
     * 
     */
    public function setNameDialingScope($nameDialingScope = null)
    {
        if (!$nameDialingScope) return $this;
        $this->nameDialingScope = ($nameDialingScope InstanceOf AutoAttendantDialingScope)
             ? $nameDialingScope
             : new AutoAttendantDialingScope($nameDialingScope);
        $this->nameDialingScope->setName('nameDialingScope');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantDialingScope
     */
    public function getNameDialingScope()
    {
        return $this->nameDialingScope->getValue();
    }

    /**
     * 
     */
    public function setNameDialingEntries($nameDialingEntries = null)
    {
        if (!$nameDialingEntries) return $this;
        $this->nameDialingEntries = ($nameDialingEntries InstanceOf AutoAttendantNameDialingEntry)
             ? $nameDialingEntries
             : new AutoAttendantNameDialingEntry($nameDialingEntries);
        $this->nameDialingEntries->setName('nameDialingEntries');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantNameDialingEntry
     */
    public function getNameDialingEntries()
    {
        return $this->nameDialingEntries->getValue();
    }

    /**
     * 
     */
    public function setBusinessHoursMenu(AutoAttendantModifyMenu16 $businessHoursMenu = null)
    {
        if (!$businessHoursMenu) return $this;
        $this->businessHoursMenu = $businessHoursMenu;
        $this->businessHoursMenu->setName('businessHoursMenu');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantModifyMenu16
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu;
    }

    /**
     * 
     */
    public function setAfterHoursMenu(AutoAttendantModifyMenu16 $afterHoursMenu = null)
    {
        if (!$afterHoursMenu) return $this;
        $this->afterHoursMenu = $afterHoursMenu;
        $this->afterHoursMenu->setName('afterHoursMenu');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantModifyMenu16
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu;
    }
}
