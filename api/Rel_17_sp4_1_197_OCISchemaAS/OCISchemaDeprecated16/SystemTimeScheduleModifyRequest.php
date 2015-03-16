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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a specified system time schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTimeScheduleModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemTimeScheduleModifyRequest';
    protected $timeScheduleName;
    protected $newTimeScheduleName;
    protected $timeInterval01;
    protected $timeInterval02;
    protected $timeInterval03;
    protected $timeInterval04;
    protected $timeInterval05;
    protected $timeInterval06;
    protected $timeInterval07;
    protected $timeInterval08;
    protected $timeInterval09;
    protected $timeInterval10;
    protected $timeInterval11;
    protected $timeInterval12;
    protected $timeInterval13;
    protected $timeInterval14;
    protected $timeInterval15;
    protected $timeInterval16;
    protected $timeInterval17;
    protected $timeInterval18;
    protected $timeInterval19;
    protected $timeInterval20;

    public function __construct(
         $timeScheduleName = '',
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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTimeScheduleName($timeScheduleName = null)
    {
        $this->timeScheduleName = ($timeScheduleName InstanceOf ScheduleName)
             ? $timeScheduleName
             : new ScheduleName($timeScheduleName);
        $this->timeScheduleName->setName('timeScheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $timeScheduleName
     */
    public function getTimeScheduleName()
    {
        return ($this->timeScheduleName) ? $this->timeScheduleName->getValue() : null;
    }

    /**
     * 
     */
    public function setNewTimeScheduleName($newTimeScheduleName = null)
    {
        $this->newTimeScheduleName = ($newTimeScheduleName InstanceOf ScheduleName)
             ? $newTimeScheduleName
             : new ScheduleName($newTimeScheduleName);
        $this->newTimeScheduleName->setName('newTimeScheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $newTimeScheduleName
     */
    public function getNewTimeScheduleName()
    {
        return ($this->newTimeScheduleName) ? $this->newTimeScheduleName->getValue() : null;
    }

    /**
     * 
     */
    public function setTimeInterval01(TimeInterval $timeInterval01 = null)
    {
        $this->timeInterval01 = ($timeInterval01 InstanceOf TimeInterval)
             ? $timeInterval01
             : new TimeInterval($timeInterval01);
        $this->timeInterval01->setName('timeInterval01');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval01
     */
    public function getTimeInterval01()
    {
        return $this->timeInterval01;
    }

    /**
     * 
     */
    public function setTimeInterval02(TimeInterval $timeInterval02 = null)
    {
        $this->timeInterval02 = ($timeInterval02 InstanceOf TimeInterval)
             ? $timeInterval02
             : new TimeInterval($timeInterval02);
        $this->timeInterval02->setName('timeInterval02');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval02
     */
    public function getTimeInterval02()
    {
        return $this->timeInterval02;
    }

    /**
     * 
     */
    public function setTimeInterval03(TimeInterval $timeInterval03 = null)
    {
        $this->timeInterval03 = ($timeInterval03 InstanceOf TimeInterval)
             ? $timeInterval03
             : new TimeInterval($timeInterval03);
        $this->timeInterval03->setName('timeInterval03');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval03
     */
    public function getTimeInterval03()
    {
        return $this->timeInterval03;
    }

    /**
     * 
     */
    public function setTimeInterval04(TimeInterval $timeInterval04 = null)
    {
        $this->timeInterval04 = ($timeInterval04 InstanceOf TimeInterval)
             ? $timeInterval04
             : new TimeInterval($timeInterval04);
        $this->timeInterval04->setName('timeInterval04');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval04
     */
    public function getTimeInterval04()
    {
        return $this->timeInterval04;
    }

    /**
     * 
     */
    public function setTimeInterval05(TimeInterval $timeInterval05 = null)
    {
        $this->timeInterval05 = ($timeInterval05 InstanceOf TimeInterval)
             ? $timeInterval05
             : new TimeInterval($timeInterval05);
        $this->timeInterval05->setName('timeInterval05');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval05
     */
    public function getTimeInterval05()
    {
        return $this->timeInterval05;
    }

    /**
     * 
     */
    public function setTimeInterval06(TimeInterval $timeInterval06 = null)
    {
        $this->timeInterval06 = ($timeInterval06 InstanceOf TimeInterval)
             ? $timeInterval06
             : new TimeInterval($timeInterval06);
        $this->timeInterval06->setName('timeInterval06');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval06
     */
    public function getTimeInterval06()
    {
        return $this->timeInterval06;
    }

    /**
     * 
     */
    public function setTimeInterval07(TimeInterval $timeInterval07 = null)
    {
        $this->timeInterval07 = ($timeInterval07 InstanceOf TimeInterval)
             ? $timeInterval07
             : new TimeInterval($timeInterval07);
        $this->timeInterval07->setName('timeInterval07');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval07
     */
    public function getTimeInterval07()
    {
        return $this->timeInterval07;
    }

    /**
     * 
     */
    public function setTimeInterval08(TimeInterval $timeInterval08 = null)
    {
        $this->timeInterval08 = ($timeInterval08 InstanceOf TimeInterval)
             ? $timeInterval08
             : new TimeInterval($timeInterval08);
        $this->timeInterval08->setName('timeInterval08');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval08
     */
    public function getTimeInterval08()
    {
        return $this->timeInterval08;
    }

    /**
     * 
     */
    public function setTimeInterval09(TimeInterval $timeInterval09 = null)
    {
        $this->timeInterval09 = ($timeInterval09 InstanceOf TimeInterval)
             ? $timeInterval09
             : new TimeInterval($timeInterval09);
        $this->timeInterval09->setName('timeInterval09');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval09
     */
    public function getTimeInterval09()
    {
        return $this->timeInterval09;
    }

    /**
     * 
     */
    public function setTimeInterval10(TimeInterval $timeInterval10 = null)
    {
        $this->timeInterval10 = ($timeInterval10 InstanceOf TimeInterval)
             ? $timeInterval10
             : new TimeInterval($timeInterval10);
        $this->timeInterval10->setName('timeInterval10');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval10
     */
    public function getTimeInterval10()
    {
        return $this->timeInterval10;
    }

    /**
     * 
     */
    public function setTimeInterval11(TimeInterval $timeInterval11 = null)
    {
        $this->timeInterval11 = ($timeInterval11 InstanceOf TimeInterval)
             ? $timeInterval11
             : new TimeInterval($timeInterval11);
        $this->timeInterval11->setName('timeInterval11');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval11
     */
    public function getTimeInterval11()
    {
        return $this->timeInterval11;
    }

    /**
     * 
     */
    public function setTimeInterval12(TimeInterval $timeInterval12 = null)
    {
        $this->timeInterval12 = ($timeInterval12 InstanceOf TimeInterval)
             ? $timeInterval12
             : new TimeInterval($timeInterval12);
        $this->timeInterval12->setName('timeInterval12');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval12
     */
    public function getTimeInterval12()
    {
        return $this->timeInterval12;
    }

    /**
     * 
     */
    public function setTimeInterval13(TimeInterval $timeInterval13 = null)
    {
        $this->timeInterval13 = ($timeInterval13 InstanceOf TimeInterval)
             ? $timeInterval13
             : new TimeInterval($timeInterval13);
        $this->timeInterval13->setName('timeInterval13');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval13
     */
    public function getTimeInterval13()
    {
        return $this->timeInterval13;
    }

    /**
     * 
     */
    public function setTimeInterval14(TimeInterval $timeInterval14 = null)
    {
        $this->timeInterval14 = ($timeInterval14 InstanceOf TimeInterval)
             ? $timeInterval14
             : new TimeInterval($timeInterval14);
        $this->timeInterval14->setName('timeInterval14');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval14
     */
    public function getTimeInterval14()
    {
        return $this->timeInterval14;
    }

    /**
     * 
     */
    public function setTimeInterval15(TimeInterval $timeInterval15 = null)
    {
        $this->timeInterval15 = ($timeInterval15 InstanceOf TimeInterval)
             ? $timeInterval15
             : new TimeInterval($timeInterval15);
        $this->timeInterval15->setName('timeInterval15');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval15
     */
    public function getTimeInterval15()
    {
        return $this->timeInterval15;
    }

    /**
     * 
     */
    public function setTimeInterval16(TimeInterval $timeInterval16 = null)
    {
        $this->timeInterval16 = ($timeInterval16 InstanceOf TimeInterval)
             ? $timeInterval16
             : new TimeInterval($timeInterval16);
        $this->timeInterval16->setName('timeInterval16');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval16
     */
    public function getTimeInterval16()
    {
        return $this->timeInterval16;
    }

    /**
     * 
     */
    public function setTimeInterval17(TimeInterval $timeInterval17 = null)
    {
        $this->timeInterval17 = ($timeInterval17 InstanceOf TimeInterval)
             ? $timeInterval17
             : new TimeInterval($timeInterval17);
        $this->timeInterval17->setName('timeInterval17');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval17
     */
    public function getTimeInterval17()
    {
        return $this->timeInterval17;
    }

    /**
     * 
     */
    public function setTimeInterval18(TimeInterval $timeInterval18 = null)
    {
        $this->timeInterval18 = ($timeInterval18 InstanceOf TimeInterval)
             ? $timeInterval18
             : new TimeInterval($timeInterval18);
        $this->timeInterval18->setName('timeInterval18');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval18
     */
    public function getTimeInterval18()
    {
        return $this->timeInterval18;
    }

    /**
     * 
     */
    public function setTimeInterval19(TimeInterval $timeInterval19 = null)
    {
        $this->timeInterval19 = ($timeInterval19 InstanceOf TimeInterval)
             ? $timeInterval19
             : new TimeInterval($timeInterval19);
        $this->timeInterval19->setName('timeInterval19');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval19
     */
    public function getTimeInterval19()
    {
        return $this->timeInterval19;
    }

    /**
     * 
     */
    public function setTimeInterval20(TimeInterval $timeInterval20 = null)
    {
        $this->timeInterval20 = ($timeInterval20 InstanceOf TimeInterval)
             ? $timeInterval20
             : new TimeInterval($timeInterval20);
        $this->timeInterval20->setName('timeInterval20');
        return $this;
    }

    /**
     * 
     * @return TimeInterval $timeInterval20
     */
    public function getTimeInterval20()
    {
        return $this->timeInterval20;
    }
}
