<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\TimeInterval;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a specified system time schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTimeScheduleModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $timeScheduleName     = null;
    protected $newTimeScheduleName  = null;
    protected $timeInterval01       = null;
    protected $timeInterval02       = null;
    protected $timeInterval03       = null;
    protected $timeInterval04       = null;
    protected $timeInterval05       = null;
    protected $timeInterval06       = null;
    protected $timeInterval07       = null;
    protected $timeInterval08       = null;
    protected $timeInterval09       = null;
    protected $timeInterval10       = null;
    protected $timeInterval11       = null;
    protected $timeInterval12       = null;
    protected $timeInterval13       = null;
    protected $timeInterval14       = null;
    protected $timeInterval15       = null;
    protected $timeInterval16       = null;
    protected $timeInterval17       = null;
    protected $timeInterval18       = null;
    protected $timeInterval19       = null;
    protected $timeInterval20       = null;

    public function __construct(
         $timeScheduleName,
         $newTimeScheduleName = null,
         TimeInterval $timeInterval01 = null,
         TimeInterval $timeInterval02 = null,
         TimeInterval $timeInterval03 = null,
         TimeInterval $timeInterval04 = null,
         TimeInterval $timeInterval05 = null,
         TimeInterval $timeInterval06 = null,
         TimeInterval $timeInterval07 = null,
         TimeInterval $timeInterval08 = null,
         TimeInterval $timeInterval09 = null,
         TimeInterval $timeInterval10 = null,
         TimeInterval $timeInterval11 = null,
         TimeInterval $timeInterval12 = null,
         TimeInterval $timeInterval13 = null,
         TimeInterval $timeInterval14 = null,
         TimeInterval $timeInterval15 = null,
         TimeInterval $timeInterval16 = null,
         TimeInterval $timeInterval17 = null,
         TimeInterval $timeInterval18 = null,
         TimeInterval $timeInterval19 = null,
         TimeInterval $timeInterval20 = null
    ) {
        $this->setTimeScheduleName($timeScheduleName);
        $this->setNewTimeScheduleName($newTimeScheduleName);
        $this->setTimeInterval01($timeInterval01);
        $this->setTimeInterval02($timeInterval02);
        $this->setTimeInterval03($timeInterval03);
        $this->setTimeInterval04($timeInterval04);
        $this->setTimeInterval05($timeInterval05);
        $this->setTimeInterval06($timeInterval06);
        $this->setTimeInterval07($timeInterval07);
        $this->setTimeInterval08($timeInterval08);
        $this->setTimeInterval09($timeInterval09);
        $this->setTimeInterval10($timeInterval10);
        $this->setTimeInterval11($timeInterval11);
        $this->setTimeInterval12($timeInterval12);
        $this->setTimeInterval13($timeInterval13);
        $this->setTimeInterval14($timeInterval14);
        $this->setTimeInterval15($timeInterval15);
        $this->setTimeInterval16($timeInterval16);
        $this->setTimeInterval17($timeInterval17);
        $this->setTimeInterval18($timeInterval18);
        $this->setTimeInterval19($timeInterval19);
        $this->setTimeInterval20($timeInterval20);
    }

    public function setTimeScheduleName($timeScheduleName = null)
    {
        $this->timeScheduleName = ($timeScheduleName InstanceOf ScheduleName)
             ? $timeScheduleName
             : new ScheduleName($timeScheduleName);
    }

    public function getTimeScheduleName()
    {
        return (!$this->timeScheduleName) ?: $this->timeScheduleName->value();
    }

    public function setNewTimeScheduleName($newTimeScheduleName = null)
    {
        $this->newTimeScheduleName = ($newTimeScheduleName InstanceOf ScheduleName)
             ? $newTimeScheduleName
             : new ScheduleName($newTimeScheduleName);
    }

    public function getNewTimeScheduleName()
    {
        return (!$this->newTimeScheduleName) ?: $this->newTimeScheduleName->value();
    }

    public function setTimeInterval01(TimeInterval $timeInterval01 = null)
    {
    }

    public function getTimeInterval01()
    {
        return (!$this->timeInterval01) ?: $this->timeInterval01->value();
    }

    public function setTimeInterval02(TimeInterval $timeInterval02 = null)
    {
    }

    public function getTimeInterval02()
    {
        return (!$this->timeInterval02) ?: $this->timeInterval02->value();
    }

    public function setTimeInterval03(TimeInterval $timeInterval03 = null)
    {
    }

    public function getTimeInterval03()
    {
        return (!$this->timeInterval03) ?: $this->timeInterval03->value();
    }

    public function setTimeInterval04(TimeInterval $timeInterval04 = null)
    {
    }

    public function getTimeInterval04()
    {
        return (!$this->timeInterval04) ?: $this->timeInterval04->value();
    }

    public function setTimeInterval05(TimeInterval $timeInterval05 = null)
    {
    }

    public function getTimeInterval05()
    {
        return (!$this->timeInterval05) ?: $this->timeInterval05->value();
    }

    public function setTimeInterval06(TimeInterval $timeInterval06 = null)
    {
    }

    public function getTimeInterval06()
    {
        return (!$this->timeInterval06) ?: $this->timeInterval06->value();
    }

    public function setTimeInterval07(TimeInterval $timeInterval07 = null)
    {
    }

    public function getTimeInterval07()
    {
        return (!$this->timeInterval07) ?: $this->timeInterval07->value();
    }

    public function setTimeInterval08(TimeInterval $timeInterval08 = null)
    {
    }

    public function getTimeInterval08()
    {
        return (!$this->timeInterval08) ?: $this->timeInterval08->value();
    }

    public function setTimeInterval09(TimeInterval $timeInterval09 = null)
    {
    }

    public function getTimeInterval09()
    {
        return (!$this->timeInterval09) ?: $this->timeInterval09->value();
    }

    public function setTimeInterval10(TimeInterval $timeInterval10 = null)
    {
    }

    public function getTimeInterval10()
    {
        return (!$this->timeInterval10) ?: $this->timeInterval10->value();
    }

    public function setTimeInterval11(TimeInterval $timeInterval11 = null)
    {
    }

    public function getTimeInterval11()
    {
        return (!$this->timeInterval11) ?: $this->timeInterval11->value();
    }

    public function setTimeInterval12(TimeInterval $timeInterval12 = null)
    {
    }

    public function getTimeInterval12()
    {
        return (!$this->timeInterval12) ?: $this->timeInterval12->value();
    }

    public function setTimeInterval13(TimeInterval $timeInterval13 = null)
    {
    }

    public function getTimeInterval13()
    {
        return (!$this->timeInterval13) ?: $this->timeInterval13->value();
    }

    public function setTimeInterval14(TimeInterval $timeInterval14 = null)
    {
    }

    public function getTimeInterval14()
    {
        return (!$this->timeInterval14) ?: $this->timeInterval14->value();
    }

    public function setTimeInterval15(TimeInterval $timeInterval15 = null)
    {
    }

    public function getTimeInterval15()
    {
        return (!$this->timeInterval15) ?: $this->timeInterval15->value();
    }

    public function setTimeInterval16(TimeInterval $timeInterval16 = null)
    {
    }

    public function getTimeInterval16()
    {
        return (!$this->timeInterval16) ?: $this->timeInterval16->value();
    }

    public function setTimeInterval17(TimeInterval $timeInterval17 = null)
    {
    }

    public function getTimeInterval17()
    {
        return (!$this->timeInterval17) ?: $this->timeInterval17->value();
    }

    public function setTimeInterval18(TimeInterval $timeInterval18 = null)
    {
    }

    public function getTimeInterval18()
    {
        return (!$this->timeInterval18) ?: $this->timeInterval18->value();
    }

    public function setTimeInterval19(TimeInterval $timeInterval19 = null)
    {
    }

    public function getTimeInterval19()
    {
        return (!$this->timeInterval19) ?: $this->timeInterval19->value();
    }

    public function setTimeInterval20(TimeInterval $timeInterval20 = null)
    {
    }

    public function getTimeInterval20()
    {
        return (!$this->timeInterval20) ?: $this->timeInterval20->value();
    }
}
