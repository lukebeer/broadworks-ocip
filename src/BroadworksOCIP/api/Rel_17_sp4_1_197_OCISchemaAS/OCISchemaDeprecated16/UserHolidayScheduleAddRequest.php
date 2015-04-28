<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\Holiday;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a holiday schedule to a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserHolidayScheduleAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserHolidayScheduleAddRequest';
    protected $userId;
    protected $holidayScheduleName;
    protected $holiday01;
    protected $holiday02;
    protected $holiday03;
    protected $holiday04;
    protected $holiday05;
    protected $holiday06;
    protected $holiday07;
    protected $holiday08;
    protected $holiday09;
    protected $holiday10;
    protected $holiday11;
    protected $holiday12;
    protected $holiday13;
    protected $holiday14;
    protected $holiday15;
    protected $holiday16;
    protected $holiday17;
    protected $holiday18;
    protected $holiday19;
    protected $holiday20;

    public function __construct(
         $userId = '',
         $holidayScheduleName = '',
         $holiday01 = null,
         $holiday02 = null,
         $holiday03 = null,
         $holiday04 = null,
         $holiday05 = null,
         $holiday06 = null,
         $holiday07 = null,
         $holiday08 = null,
         $holiday09 = null,
         $holiday10 = null,
         $holiday11 = null,
         $holiday12 = null,
         $holiday13 = null,
         $holiday14 = null,
         $holiday15 = null,
         $holiday16 = null,
         $holiday17 = null,
         $holiday18 = null,
         $holiday19 = null,
         $holiday20 = null
    ) {
        $this->setUserId($userId);
        $this->setHolidayScheduleName($holidayScheduleName);
        $this->setHoliday01($holiday01);
        $this->setHoliday02($holiday02);
        $this->setHoliday03($holiday03);
        $this->setHoliday04($holiday04);
        $this->setHoliday05($holiday05);
        $this->setHoliday06($holiday06);
        $this->setHoliday07($holiday07);
        $this->setHoliday08($holiday08);
        $this->setHoliday09($holiday09);
        $this->setHoliday10($holiday10);
        $this->setHoliday11($holiday11);
        $this->setHoliday12($holiday12);
        $this->setHoliday13($holiday13);
        $this->setHoliday14($holiday14);
        $this->setHoliday15($holiday15);
        $this->setHoliday16($holiday16);
        $this->setHoliday17($holiday17);
        $this->setHoliday18($holiday18);
        $this->setHoliday19($holiday19);
        $this->setHoliday20($holiday20);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHolidayScheduleName($holidayScheduleName = null)
    {
        $this->holidayScheduleName = ($holidayScheduleName InstanceOf ScheduleName)
             ? $holidayScheduleName
             : new ScheduleName($holidayScheduleName);
        $this->holidayScheduleName->setElementName('holidayScheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $holidayScheduleName
     */
    public function getHolidayScheduleName()
    {
        return ($this->holidayScheduleName)
            ? $this->holidayScheduleName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHoliday01(Holiday $holiday01 = null)
    {
        $this->holiday01 = ($holiday01 InstanceOf Holiday)
             ? $holiday01
             : new Holiday($holiday01);
        $this->holiday01->setElementName('holiday01');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday01
     */
    public function getHoliday01()
    {
        return $this->holiday01;
    }

    /**
     * 
     */
    public function setHoliday02(Holiday $holiday02 = null)
    {
        $this->holiday02 = ($holiday02 InstanceOf Holiday)
             ? $holiday02
             : new Holiday($holiday02);
        $this->holiday02->setElementName('holiday02');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday02
     */
    public function getHoliday02()
    {
        return $this->holiday02;
    }

    /**
     * 
     */
    public function setHoliday03(Holiday $holiday03 = null)
    {
        $this->holiday03 = ($holiday03 InstanceOf Holiday)
             ? $holiday03
             : new Holiday($holiday03);
        $this->holiday03->setElementName('holiday03');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday03
     */
    public function getHoliday03()
    {
        return $this->holiday03;
    }

    /**
     * 
     */
    public function setHoliday04(Holiday $holiday04 = null)
    {
        $this->holiday04 = ($holiday04 InstanceOf Holiday)
             ? $holiday04
             : new Holiday($holiday04);
        $this->holiday04->setElementName('holiday04');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday04
     */
    public function getHoliday04()
    {
        return $this->holiday04;
    }

    /**
     * 
     */
    public function setHoliday05(Holiday $holiday05 = null)
    {
        $this->holiday05 = ($holiday05 InstanceOf Holiday)
             ? $holiday05
             : new Holiday($holiday05);
        $this->holiday05->setElementName('holiday05');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday05
     */
    public function getHoliday05()
    {
        return $this->holiday05;
    }

    /**
     * 
     */
    public function setHoliday06(Holiday $holiday06 = null)
    {
        $this->holiday06 = ($holiday06 InstanceOf Holiday)
             ? $holiday06
             : new Holiday($holiday06);
        $this->holiday06->setElementName('holiday06');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday06
     */
    public function getHoliday06()
    {
        return $this->holiday06;
    }

    /**
     * 
     */
    public function setHoliday07(Holiday $holiday07 = null)
    {
        $this->holiday07 = ($holiday07 InstanceOf Holiday)
             ? $holiday07
             : new Holiday($holiday07);
        $this->holiday07->setElementName('holiday07');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday07
     */
    public function getHoliday07()
    {
        return $this->holiday07;
    }

    /**
     * 
     */
    public function setHoliday08(Holiday $holiday08 = null)
    {
        $this->holiday08 = ($holiday08 InstanceOf Holiday)
             ? $holiday08
             : new Holiday($holiday08);
        $this->holiday08->setElementName('holiday08');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday08
     */
    public function getHoliday08()
    {
        return $this->holiday08;
    }

    /**
     * 
     */
    public function setHoliday09(Holiday $holiday09 = null)
    {
        $this->holiday09 = ($holiday09 InstanceOf Holiday)
             ? $holiday09
             : new Holiday($holiday09);
        $this->holiday09->setElementName('holiday09');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday09
     */
    public function getHoliday09()
    {
        return $this->holiday09;
    }

    /**
     * 
     */
    public function setHoliday10(Holiday $holiday10 = null)
    {
        $this->holiday10 = ($holiday10 InstanceOf Holiday)
             ? $holiday10
             : new Holiday($holiday10);
        $this->holiday10->setElementName('holiday10');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday10
     */
    public function getHoliday10()
    {
        return $this->holiday10;
    }

    /**
     * 
     */
    public function setHoliday11(Holiday $holiday11 = null)
    {
        $this->holiday11 = ($holiday11 InstanceOf Holiday)
             ? $holiday11
             : new Holiday($holiday11);
        $this->holiday11->setElementName('holiday11');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday11
     */
    public function getHoliday11()
    {
        return $this->holiday11;
    }

    /**
     * 
     */
    public function setHoliday12(Holiday $holiday12 = null)
    {
        $this->holiday12 = ($holiday12 InstanceOf Holiday)
             ? $holiday12
             : new Holiday($holiday12);
        $this->holiday12->setElementName('holiday12');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday12
     */
    public function getHoliday12()
    {
        return $this->holiday12;
    }

    /**
     * 
     */
    public function setHoliday13(Holiday $holiday13 = null)
    {
        $this->holiday13 = ($holiday13 InstanceOf Holiday)
             ? $holiday13
             : new Holiday($holiday13);
        $this->holiday13->setElementName('holiday13');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday13
     */
    public function getHoliday13()
    {
        return $this->holiday13;
    }

    /**
     * 
     */
    public function setHoliday14(Holiday $holiday14 = null)
    {
        $this->holiday14 = ($holiday14 InstanceOf Holiday)
             ? $holiday14
             : new Holiday($holiday14);
        $this->holiday14->setElementName('holiday14');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday14
     */
    public function getHoliday14()
    {
        return $this->holiday14;
    }

    /**
     * 
     */
    public function setHoliday15(Holiday $holiday15 = null)
    {
        $this->holiday15 = ($holiday15 InstanceOf Holiday)
             ? $holiday15
             : new Holiday($holiday15);
        $this->holiday15->setElementName('holiday15');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday15
     */
    public function getHoliday15()
    {
        return $this->holiday15;
    }

    /**
     * 
     */
    public function setHoliday16(Holiday $holiday16 = null)
    {
        $this->holiday16 = ($holiday16 InstanceOf Holiday)
             ? $holiday16
             : new Holiday($holiday16);
        $this->holiday16->setElementName('holiday16');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday16
     */
    public function getHoliday16()
    {
        return $this->holiday16;
    }

    /**
     * 
     */
    public function setHoliday17(Holiday $holiday17 = null)
    {
        $this->holiday17 = ($holiday17 InstanceOf Holiday)
             ? $holiday17
             : new Holiday($holiday17);
        $this->holiday17->setElementName('holiday17');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday17
     */
    public function getHoliday17()
    {
        return $this->holiday17;
    }

    /**
     * 
     */
    public function setHoliday18(Holiday $holiday18 = null)
    {
        $this->holiday18 = ($holiday18 InstanceOf Holiday)
             ? $holiday18
             : new Holiday($holiday18);
        $this->holiday18->setElementName('holiday18');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday18
     */
    public function getHoliday18()
    {
        return $this->holiday18;
    }

    /**
     * 
     */
    public function setHoliday19(Holiday $holiday19 = null)
    {
        $this->holiday19 = ($holiday19 InstanceOf Holiday)
             ? $holiday19
             : new Holiday($holiday19);
        $this->holiday19->setElementName('holiday19');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday19
     */
    public function getHoliday19()
    {
        return $this->holiday19;
    }

    /**
     * 
     */
    public function setHoliday20(Holiday $holiday20 = null)
    {
        $this->holiday20 = ($holiday20 InstanceOf Holiday)
             ? $holiday20
             : new Holiday($holiday20);
        $this->holiday20->setElementName('holiday20');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday20
     */
    public function getHoliday20()
    {
        return $this->holiday20;
    }
}
