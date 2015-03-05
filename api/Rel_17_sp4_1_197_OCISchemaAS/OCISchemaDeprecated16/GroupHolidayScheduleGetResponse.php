<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Holiday;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupHolidayScheduleGetRequest.
 *         The response contains the group's holiday schedule information.
 */
class GroupHolidayScheduleGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $holidayScheduleName,
             $holiday01=null,
             $holiday02=null,
             $holiday03=null,
             $holiday04=null,
             $holiday05=null,
             $holiday06=null,
             $holiday07=null,
             $holiday08=null,
             $holiday09=null,
             $holiday10=null,
             $holiday11=null,
             $holiday12=null,
             $holiday13=null,
             $holiday14=null,
             $holiday15=null,
             $holiday16=null,
             $holiday17=null,
             $holiday18=null,
             $holiday19=null,
             $holiday20=null
    ) {
        $this->holidayScheduleName = new ScheduleName($holidayScheduleName);
        $this->holiday01           = $holiday01;
        $this->holiday02           = $holiday02;
        $this->holiday03           = $holiday03;
        $this->holiday04           = $holiday04;
        $this->holiday05           = $holiday05;
        $this->holiday06           = $holiday06;
        $this->holiday07           = $holiday07;
        $this->holiday08           = $holiday08;
        $this->holiday09           = $holiday09;
        $this->holiday10           = $holiday10;
        $this->holiday11           = $holiday11;
        $this->holiday12           = $holiday12;
        $this->holiday13           = $holiday13;
        $this->holiday14           = $holiday14;
        $this->holiday15           = $holiday15;
        $this->holiday16           = $holiday16;
        $this->holiday17           = $holiday17;
        $this->holiday18           = $holiday18;
        $this->holiday19           = $holiday19;
        $this->holiday20           = $holiday20;
        $this->args                = func_get_args();
    }

    public function setHolidayScheduleName($holidayScheduleName)
    {
        $holidayScheduleName and $this->holidayScheduleName = new ScheduleName($holidayScheduleName);
    }

    public function getHolidayScheduleName()
    {
        return (!$this->holidayScheduleName) ?: $this->holidayScheduleName->value();
    }

    public function setHoliday01($holiday01)
    {
        $holiday01 and $this->holiday01 = new Holiday($holiday01);
    }

    public function getHoliday01()
    {
        return (!$this->holiday01) ?: $this->holiday01->value();
    }

    public function setHoliday02($holiday02)
    {
        $holiday02 and $this->holiday02 = new Holiday($holiday02);
    }

    public function getHoliday02()
    {
        return (!$this->holiday02) ?: $this->holiday02->value();
    }

    public function setHoliday03($holiday03)
    {
        $holiday03 and $this->holiday03 = new Holiday($holiday03);
    }

    public function getHoliday03()
    {
        return (!$this->holiday03) ?: $this->holiday03->value();
    }

    public function setHoliday04($holiday04)
    {
        $holiday04 and $this->holiday04 = new Holiday($holiday04);
    }

    public function getHoliday04()
    {
        return (!$this->holiday04) ?: $this->holiday04->value();
    }

    public function setHoliday05($holiday05)
    {
        $holiday05 and $this->holiday05 = new Holiday($holiday05);
    }

    public function getHoliday05()
    {
        return (!$this->holiday05) ?: $this->holiday05->value();
    }

    public function setHoliday06($holiday06)
    {
        $holiday06 and $this->holiday06 = new Holiday($holiday06);
    }

    public function getHoliday06()
    {
        return (!$this->holiday06) ?: $this->holiday06->value();
    }

    public function setHoliday07($holiday07)
    {
        $holiday07 and $this->holiday07 = new Holiday($holiday07);
    }

    public function getHoliday07()
    {
        return (!$this->holiday07) ?: $this->holiday07->value();
    }

    public function setHoliday08($holiday08)
    {
        $holiday08 and $this->holiday08 = new Holiday($holiday08);
    }

    public function getHoliday08()
    {
        return (!$this->holiday08) ?: $this->holiday08->value();
    }

    public function setHoliday09($holiday09)
    {
        $holiday09 and $this->holiday09 = new Holiday($holiday09);
    }

    public function getHoliday09()
    {
        return (!$this->holiday09) ?: $this->holiday09->value();
    }

    public function setHoliday10($holiday10)
    {
        $holiday10 and $this->holiday10 = new Holiday($holiday10);
    }

    public function getHoliday10()
    {
        return (!$this->holiday10) ?: $this->holiday10->value();
    }

    public function setHoliday11($holiday11)
    {
        $holiday11 and $this->holiday11 = new Holiday($holiday11);
    }

    public function getHoliday11()
    {
        return (!$this->holiday11) ?: $this->holiday11->value();
    }

    public function setHoliday12($holiday12)
    {
        $holiday12 and $this->holiday12 = new Holiday($holiday12);
    }

    public function getHoliday12()
    {
        return (!$this->holiday12) ?: $this->holiday12->value();
    }

    public function setHoliday13($holiday13)
    {
        $holiday13 and $this->holiday13 = new Holiday($holiday13);
    }

    public function getHoliday13()
    {
        return (!$this->holiday13) ?: $this->holiday13->value();
    }

    public function setHoliday14($holiday14)
    {
        $holiday14 and $this->holiday14 = new Holiday($holiday14);
    }

    public function getHoliday14()
    {
        return (!$this->holiday14) ?: $this->holiday14->value();
    }

    public function setHoliday15($holiday15)
    {
        $holiday15 and $this->holiday15 = new Holiday($holiday15);
    }

    public function getHoliday15()
    {
        return (!$this->holiday15) ?: $this->holiday15->value();
    }

    public function setHoliday16($holiday16)
    {
        $holiday16 and $this->holiday16 = new Holiday($holiday16);
    }

    public function getHoliday16()
    {
        return (!$this->holiday16) ?: $this->holiday16->value();
    }

    public function setHoliday17($holiday17)
    {
        $holiday17 and $this->holiday17 = new Holiday($holiday17);
    }

    public function getHoliday17()
    {
        return (!$this->holiday17) ?: $this->holiday17->value();
    }

    public function setHoliday18($holiday18)
    {
        $holiday18 and $this->holiday18 = new Holiday($holiday18);
    }

    public function getHoliday18()
    {
        return (!$this->holiday18) ?: $this->holiday18->value();
    }

    public function setHoliday19($holiday19)
    {
        $holiday19 and $this->holiday19 = new Holiday($holiday19);
    }

    public function getHoliday19()
    {
        return (!$this->holiday19) ?: $this->holiday19->value();
    }

    public function setHoliday20($holiday20)
    {
        $holiday20 and $this->holiday20 = new Holiday($holiday20);
    }

    public function getHoliday20()
    {
        return (!$this->holiday20) ?: $this->holiday20->value();
    }
}
