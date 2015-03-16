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
 * Response to the UserTimeScheduleGetRequest.
 *         The response contains the requested time schedule information.
 */
class UserTimeScheduleGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserTimeScheduleGetResponse';
    protected $timeScheduleName;
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

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserTimeScheduleGetResponse $response
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
        $this->timeScheduleName->setElementName('timeScheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $timeScheduleName
     */
    public function getTimeScheduleName()
    {
        return ($this->timeScheduleName)
            ? $this->timeScheduleName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeInterval01(TimeInterval $timeInterval01 = null)
    {
        $this->timeInterval01 = ($timeInterval01 InstanceOf TimeInterval)
             ? $timeInterval01
             : new TimeInterval($timeInterval01);
        $this->timeInterval01->setElementName('timeInterval01');
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
        $this->timeInterval02->setElementName('timeInterval02');
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
        $this->timeInterval03->setElementName('timeInterval03');
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
        $this->timeInterval04->setElementName('timeInterval04');
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
        $this->timeInterval05->setElementName('timeInterval05');
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
        $this->timeInterval06->setElementName('timeInterval06');
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
        $this->timeInterval07->setElementName('timeInterval07');
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
        $this->timeInterval08->setElementName('timeInterval08');
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
        $this->timeInterval09->setElementName('timeInterval09');
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
        $this->timeInterval10->setElementName('timeInterval10');
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
        $this->timeInterval11->setElementName('timeInterval11');
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
        $this->timeInterval12->setElementName('timeInterval12');
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
        $this->timeInterval13->setElementName('timeInterval13');
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
        $this->timeInterval14->setElementName('timeInterval14');
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
        $this->timeInterval15->setElementName('timeInterval15');
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
        $this->timeInterval16->setElementName('timeInterval16');
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
        $this->timeInterval17->setElementName('timeInterval17');
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
        $this->timeInterval18->setElementName('timeInterval18');
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
        $this->timeInterval19->setElementName('timeInterval19');
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
        $this->timeInterval20->setElementName('timeInterval20');
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
