<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\Holiday;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a holiday schedule to a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserHolidayScheduleAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $userId              = null;
    protected $holidayScheduleName = null;
    protected $holiday01           = null;
    protected $holiday02           = null;
    protected $holiday03           = null;
    protected $holiday04           = null;
    protected $holiday05           = null;
    protected $holiday06           = null;
    protected $holiday07           = null;
    protected $holiday08           = null;
    protected $holiday09           = null;
    protected $holiday10           = null;
    protected $holiday11           = null;
    protected $holiday12           = null;
    protected $holiday13           = null;
    protected $holiday14           = null;
    protected $holiday15           = null;
    protected $holiday16           = null;
    protected $holiday17           = null;
    protected $holiday18           = null;
    protected $holiday19           = null;
    protected $holiday20           = null;

    public function __construct(
         $userId,
         $holidayScheduleName,
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
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
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
     * Holiday entry.
     */
    public function setHoliday01(Holiday $holiday01 = null)
    {
        $this->holiday01 =  $holiday01;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday01()
    {
        return (!$this->holiday01) ?: $this->holiday01->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday02(Holiday $holiday02 = null)
    {
        $this->holiday02 =  $holiday02;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday02()
    {
        return (!$this->holiday02) ?: $this->holiday02->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday03(Holiday $holiday03 = null)
    {
        $this->holiday03 =  $holiday03;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday03()
    {
        return (!$this->holiday03) ?: $this->holiday03->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday04(Holiday $holiday04 = null)
    {
        $this->holiday04 =  $holiday04;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday04()
    {
        return (!$this->holiday04) ?: $this->holiday04->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday05(Holiday $holiday05 = null)
    {
        $this->holiday05 =  $holiday05;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday05()
    {
        return (!$this->holiday05) ?: $this->holiday05->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday06(Holiday $holiday06 = null)
    {
        $this->holiday06 =  $holiday06;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday06()
    {
        return (!$this->holiday06) ?: $this->holiday06->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday07(Holiday $holiday07 = null)
    {
        $this->holiday07 =  $holiday07;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday07()
    {
        return (!$this->holiday07) ?: $this->holiday07->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday08(Holiday $holiday08 = null)
    {
        $this->holiday08 =  $holiday08;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday08()
    {
        return (!$this->holiday08) ?: $this->holiday08->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday09(Holiday $holiday09 = null)
    {
        $this->holiday09 =  $holiday09;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday09()
    {
        return (!$this->holiday09) ?: $this->holiday09->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday10(Holiday $holiday10 = null)
    {
        $this->holiday10 =  $holiday10;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday10()
    {
        return (!$this->holiday10) ?: $this->holiday10->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday11(Holiday $holiday11 = null)
    {
        $this->holiday11 =  $holiday11;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday11()
    {
        return (!$this->holiday11) ?: $this->holiday11->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday12(Holiday $holiday12 = null)
    {
        $this->holiday12 =  $holiday12;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday12()
    {
        return (!$this->holiday12) ?: $this->holiday12->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday13(Holiday $holiday13 = null)
    {
        $this->holiday13 =  $holiday13;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday13()
    {
        return (!$this->holiday13) ?: $this->holiday13->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday14(Holiday $holiday14 = null)
    {
        $this->holiday14 =  $holiday14;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday14()
    {
        return (!$this->holiday14) ?: $this->holiday14->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday15(Holiday $holiday15 = null)
    {
        $this->holiday15 =  $holiday15;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday15()
    {
        return (!$this->holiday15) ?: $this->holiday15->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday16(Holiday $holiday16 = null)
    {
        $this->holiday16 =  $holiday16;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday16()
    {
        return (!$this->holiday16) ?: $this->holiday16->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday17(Holiday $holiday17 = null)
    {
        $this->holiday17 =  $holiday17;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday17()
    {
        return (!$this->holiday17) ?: $this->holiday17->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday18(Holiday $holiday18 = null)
    {
        $this->holiday18 =  $holiday18;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday18()
    {
        return (!$this->holiday18) ?: $this->holiday18->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday19(Holiday $holiday19 = null)
    {
        $this->holiday19 =  $holiday19;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday19()
    {
        return (!$this->holiday19) ?: $this->holiday19->getValue();
    }

    /**
     * Holiday entry.
     */
    public function setHoliday20(Holiday $holiday20 = null)
    {
        $this->holiday20 =  $holiday20;
    }

    /**
     * Holiday entry.
     */
    public function getHoliday20()
    {
        return (!$this->holiday20) ?: $this->holiday20->getValue();
    }
}
