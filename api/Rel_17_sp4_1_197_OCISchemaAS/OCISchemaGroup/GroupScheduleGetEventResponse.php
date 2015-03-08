<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupScheduleGetEventRequest.
 *         The response contains the event of the group schedule.
 */
class GroupScheduleGetEventResponse extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $startDate  = null;
    protected $endDate    = null;
    protected $recurrence = null;


    /**
     * 
     */
    public function setStartDate(xs:date $startDate = null)
    {
        $this->startDate =  $startDate;
    }

    /**
     * 
     */
    public function getStartDate()
    {
        return (!$this->startDate) ?: $this->startDate->getValue();
    }

    /**
     * 
     */
    public function setEndDate(xs:date $endDate = null)
    {
        $this->endDate =  $endDate;
    }

    /**
     * 
     */
    public function getEndDate()
    {
        return (!$this->endDate) ?: $this->endDate->getValue();
    }

    /**
     * Defines recurrence.
     */
    public function setRecurrence(Recurrence $recurrence = null)
    {
        $this->recurrence =  $recurrence;
    }

    /**
     * Defines recurrence.
     */
    public function getRecurrence()
    {
        return (!$this->recurrence) ?: $this->recurrence->getValue();
    }
}
