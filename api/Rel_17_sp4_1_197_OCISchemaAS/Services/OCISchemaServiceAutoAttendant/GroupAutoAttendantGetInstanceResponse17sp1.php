<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantNameDialingEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantDialingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantReadMenu16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupAutoAttendantGetInstanceRequest17sp1.
 *         Contains the service profile information.
 */
class GroupAutoAttendantGetInstanceResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupAutoAttendantGetInstanceResponse17sp1';
    protected $serviceInstanceProfile;
    protected $enableVideo;
    protected $businessHours;
    protected $holidaySchedule;
    protected $extensionDialingScope;
    protected $nameDialingScope;
    protected $nameDialingEntries;
    protected $businessHoursMenu;
    protected $afterHoursMenu;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\GroupAutoAttendantGetInstanceResponse17sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile17 $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceReadProfile17)
             ? $serviceInstanceProfile
             : new ServiceInstanceReadProfile17($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile17 $serviceInstanceProfile
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
        $this->enableVideo = new PrimitiveType($enableVideo);
        $this->enableVideo->setElementName('enableVideo');
        return $this;
    }

    /**
     * 
     * @return boolean $enableVideo
     */
    public function getEnableVideo()
    {
        return ($this->enableVideo)
            ? $this->enableVideo->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusinessHours(TimeSchedule $businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf TimeSchedule)
             ? $businessHours
             : new TimeSchedule($businessHours);
        $this->businessHours->setElementName('businessHours');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule $businessHours
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
        $this->holidaySchedule = ($holidaySchedule InstanceOf HolidaySchedule)
             ? $holidaySchedule
             : new HolidaySchedule($holidaySchedule);
        $this->holidaySchedule->setElementName('holidaySchedule');
        return $this;
    }

    /**
     * 
     * @return HolidaySchedule $holidaySchedule
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
        $this->extensionDialingScope = ($extensionDialingScope InstanceOf AutoAttendantDialingScope)
             ? $extensionDialingScope
             : new AutoAttendantDialingScope($extensionDialingScope);
        $this->extensionDialingScope->setElementName('extensionDialingScope');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantDialingScope $extensionDialingScope
     */
    public function getExtensionDialingScope()
    {
        return ($this->extensionDialingScope)
            ? $this->extensionDialingScope->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNameDialingScope($nameDialingScope = null)
    {
        $this->nameDialingScope = ($nameDialingScope InstanceOf AutoAttendantDialingScope)
             ? $nameDialingScope
             : new AutoAttendantDialingScope($nameDialingScope);
        $this->nameDialingScope->setElementName('nameDialingScope');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantDialingScope $nameDialingScope
     */
    public function getNameDialingScope()
    {
        return ($this->nameDialingScope)
            ? $this->nameDialingScope->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNameDialingEntries($nameDialingEntries = null)
    {
        $this->nameDialingEntries = ($nameDialingEntries InstanceOf AutoAttendantNameDialingEntry)
             ? $nameDialingEntries
             : new AutoAttendantNameDialingEntry($nameDialingEntries);
        $this->nameDialingEntries->setElementName('nameDialingEntries');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantNameDialingEntry $nameDialingEntries
     */
    public function getNameDialingEntries()
    {
        return ($this->nameDialingEntries)
            ? $this->nameDialingEntries->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusinessHoursMenu(AutoAttendantReadMenu16 $businessHoursMenu = null)
    {
        $this->businessHoursMenu = ($businessHoursMenu InstanceOf AutoAttendantReadMenu16)
             ? $businessHoursMenu
             : new AutoAttendantReadMenu16($businessHoursMenu);
        $this->businessHoursMenu->setElementName('businessHoursMenu');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantReadMenu16 $businessHoursMenu
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu;
    }

    /**
     * 
     */
    public function setAfterHoursMenu(AutoAttendantReadMenu16 $afterHoursMenu = null)
    {
        $this->afterHoursMenu = ($afterHoursMenu InstanceOf AutoAttendantReadMenu16)
             ? $afterHoursMenu
             : new AutoAttendantReadMenu16($afterHoursMenu);
        $this->afterHoursMenu->setElementName('afterHoursMenu');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantReadMenu16 $afterHoursMenu
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu;
    }
}
