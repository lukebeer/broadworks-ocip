<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection\SelectiveCallRejectionCriteriaCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserSelectiveCallRejectionGetCriteriaRequest16.
 *         Replaced by: UserSelectiveCallRejectionGetCriteriaResponse16sp1
 */
class UserSelectiveCallRejectionGetCriteriaResponse16 extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $timeSchedule     = null;
    protected $fromDnCriteria   = null;
    protected $blacklisted      = null;
    protected $holidaySchedule  = null;


    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
    }

    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->value();
    }

    public function setFromDnCriteria(SelectiveCallRejectionCriteriaCallType $fromDnCriteria = null)
    {
    }

    public function getFromDnCriteria()
    {
        return (!$this->fromDnCriteria) ?: $this->fromDnCriteria->value();
    }

    public function setBlacklisted(xs:boolean $blacklisted = null)
    {
    }

    public function getBlacklisted()
    {
        return (!$this->blacklisted) ?: $this->blacklisted->value();
    }

    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
    }

    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->value();
    }
}
