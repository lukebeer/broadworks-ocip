<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderScheduleGetEventRequest.
 *         The response contains the event of the service provider schedule.
 */
class ServiceProviderScheduleGetEventResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderScheduleGetEventResponse';
    public    $name       = __CLASS__;
    protected $startDate  = null;
    protected $endDate    = null;
    protected $recurrence = null;


    /**
     * 
     */
    public function setStartDate(xs:date $startDate = null)
    {
        $this->startDate = xs:date $startDate;
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
        $this->endDate = xs:date $endDate;
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
        $this->recurrence = Recurrence $recurrence;
    }

    /**
     * Defines recurrence.
     */
    public function getRecurrence()
    {
        return (!$this->recurrence) ?: $this->recurrence->getValue();
    }
}