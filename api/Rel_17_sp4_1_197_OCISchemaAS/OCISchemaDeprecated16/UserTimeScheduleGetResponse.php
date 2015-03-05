<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeInterval;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserTimeScheduleGetRequest.
 *         The response contains the requested time schedule information.
 */
class UserTimeScheduleGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $timeScheduleName,
             $timeInterval01=null,
             $timeInterval02=null,
             $timeInterval03=null,
             $timeInterval04=null,
             $timeInterval05=null,
             $timeInterval06=null,
             $timeInterval07=null,
             $timeInterval08=null,
             $timeInterval09=null,
             $timeInterval10=null,
             $timeInterval11=null,
             $timeInterval12=null,
             $timeInterval13=null,
             $timeInterval14=null,
             $timeInterval15=null,
             $timeInterval16=null,
             $timeInterval17=null,
             $timeInterval18=null,
             $timeInterval19=null,
             $timeInterval20=null
    ) {
        $this->timeScheduleName = new ScheduleName($timeScheduleName);
        $this->timeInterval01   = $timeInterval01;
        $this->timeInterval02   = $timeInterval02;
        $this->timeInterval03   = $timeInterval03;
        $this->timeInterval04   = $timeInterval04;
        $this->timeInterval05   = $timeInterval05;
        $this->timeInterval06   = $timeInterval06;
        $this->timeInterval07   = $timeInterval07;
        $this->timeInterval08   = $timeInterval08;
        $this->timeInterval09   = $timeInterval09;
        $this->timeInterval10   = $timeInterval10;
        $this->timeInterval11   = $timeInterval11;
        $this->timeInterval12   = $timeInterval12;
        $this->timeInterval13   = $timeInterval13;
        $this->timeInterval14   = $timeInterval14;
        $this->timeInterval15   = $timeInterval15;
        $this->timeInterval16   = $timeInterval16;
        $this->timeInterval17   = $timeInterval17;
        $this->timeInterval18   = $timeInterval18;
        $this->timeInterval19   = $timeInterval19;
        $this->timeInterval20   = $timeInterval20;
        $this->args             = func_get_args();
    }

    public function setTimeScheduleName($timeScheduleName)
    {
        $timeScheduleName and $this->timeScheduleName = new ScheduleName($timeScheduleName);
    }

    public function getTimeScheduleName()
    {
        return (!$this->timeScheduleName) ?: $this->timeScheduleName->value();
    }

    public function setTimeInterval01($timeInterval01)
    {
        $timeInterval01 and $this->timeInterval01 = new TimeInterval($timeInterval01);
    }

    public function getTimeInterval01()
    {
        return (!$this->timeInterval01) ?: $this->timeInterval01->value();
    }

    public function setTimeInterval02($timeInterval02)
    {
        $timeInterval02 and $this->timeInterval02 = new TimeInterval($timeInterval02);
    }

    public function getTimeInterval02()
    {
        return (!$this->timeInterval02) ?: $this->timeInterval02->value();
    }

    public function setTimeInterval03($timeInterval03)
    {
        $timeInterval03 and $this->timeInterval03 = new TimeInterval($timeInterval03);
    }

    public function getTimeInterval03()
    {
        return (!$this->timeInterval03) ?: $this->timeInterval03->value();
    }

    public function setTimeInterval04($timeInterval04)
    {
        $timeInterval04 and $this->timeInterval04 = new TimeInterval($timeInterval04);
    }

    public function getTimeInterval04()
    {
        return (!$this->timeInterval04) ?: $this->timeInterval04->value();
    }

    public function setTimeInterval05($timeInterval05)
    {
        $timeInterval05 and $this->timeInterval05 = new TimeInterval($timeInterval05);
    }

    public function getTimeInterval05()
    {
        return (!$this->timeInterval05) ?: $this->timeInterval05->value();
    }

    public function setTimeInterval06($timeInterval06)
    {
        $timeInterval06 and $this->timeInterval06 = new TimeInterval($timeInterval06);
    }

    public function getTimeInterval06()
    {
        return (!$this->timeInterval06) ?: $this->timeInterval06->value();
    }

    public function setTimeInterval07($timeInterval07)
    {
        $timeInterval07 and $this->timeInterval07 = new TimeInterval($timeInterval07);
    }

    public function getTimeInterval07()
    {
        return (!$this->timeInterval07) ?: $this->timeInterval07->value();
    }

    public function setTimeInterval08($timeInterval08)
    {
        $timeInterval08 and $this->timeInterval08 = new TimeInterval($timeInterval08);
    }

    public function getTimeInterval08()
    {
        return (!$this->timeInterval08) ?: $this->timeInterval08->value();
    }

    public function setTimeInterval09($timeInterval09)
    {
        $timeInterval09 and $this->timeInterval09 = new TimeInterval($timeInterval09);
    }

    public function getTimeInterval09()
    {
        return (!$this->timeInterval09) ?: $this->timeInterval09->value();
    }

    public function setTimeInterval10($timeInterval10)
    {
        $timeInterval10 and $this->timeInterval10 = new TimeInterval($timeInterval10);
    }

    public function getTimeInterval10()
    {
        return (!$this->timeInterval10) ?: $this->timeInterval10->value();
    }

    public function setTimeInterval11($timeInterval11)
    {
        $timeInterval11 and $this->timeInterval11 = new TimeInterval($timeInterval11);
    }

    public function getTimeInterval11()
    {
        return (!$this->timeInterval11) ?: $this->timeInterval11->value();
    }

    public function setTimeInterval12($timeInterval12)
    {
        $timeInterval12 and $this->timeInterval12 = new TimeInterval($timeInterval12);
    }

    public function getTimeInterval12()
    {
        return (!$this->timeInterval12) ?: $this->timeInterval12->value();
    }

    public function setTimeInterval13($timeInterval13)
    {
        $timeInterval13 and $this->timeInterval13 = new TimeInterval($timeInterval13);
    }

    public function getTimeInterval13()
    {
        return (!$this->timeInterval13) ?: $this->timeInterval13->value();
    }

    public function setTimeInterval14($timeInterval14)
    {
        $timeInterval14 and $this->timeInterval14 = new TimeInterval($timeInterval14);
    }

    public function getTimeInterval14()
    {
        return (!$this->timeInterval14) ?: $this->timeInterval14->value();
    }

    public function setTimeInterval15($timeInterval15)
    {
        $timeInterval15 and $this->timeInterval15 = new TimeInterval($timeInterval15);
    }

    public function getTimeInterval15()
    {
        return (!$this->timeInterval15) ?: $this->timeInterval15->value();
    }

    public function setTimeInterval16($timeInterval16)
    {
        $timeInterval16 and $this->timeInterval16 = new TimeInterval($timeInterval16);
    }

    public function getTimeInterval16()
    {
        return (!$this->timeInterval16) ?: $this->timeInterval16->value();
    }

    public function setTimeInterval17($timeInterval17)
    {
        $timeInterval17 and $this->timeInterval17 = new TimeInterval($timeInterval17);
    }

    public function getTimeInterval17()
    {
        return (!$this->timeInterval17) ?: $this->timeInterval17->value();
    }

    public function setTimeInterval18($timeInterval18)
    {
        $timeInterval18 and $this->timeInterval18 = new TimeInterval($timeInterval18);
    }

    public function getTimeInterval18()
    {
        return (!$this->timeInterval18) ?: $this->timeInterval18->value();
    }

    public function setTimeInterval19($timeInterval19)
    {
        $timeInterval19 and $this->timeInterval19 = new TimeInterval($timeInterval19);
    }

    public function getTimeInterval19()
    {
        return (!$this->timeInterval19) ?: $this->timeInterval19->value();
    }

    public function setTimeInterval20($timeInterval20)
    {
        $timeInterval20 and $this->timeInterval20 = new TimeInterval($timeInterval20);
    }

    public function getTimeInterval20()
    {
        return (!$this->timeInterval20) ?: $this->timeInterval20->value();
    }
}
