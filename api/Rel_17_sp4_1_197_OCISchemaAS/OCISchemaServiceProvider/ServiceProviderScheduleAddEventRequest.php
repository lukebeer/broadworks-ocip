<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add an event to service provider schedule. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderScheduleAddEventRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $serviceProviderId  = null;
    protected $scheduleKey        = null;
    protected $eventName          = null;
    protected $startDate          = null;
    protected $endDate            = null;
    protected $recurrence         = null;

    public function __construct(
         $serviceProviderId,
         ScheduleKey $scheduleKey,
         $eventName,
         $startDate,
         $endDate,
         Recurrence $recurrence = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setScheduleKey($scheduleKey);
        $this->setEventName($eventName);
        $this->setStartDate($startDate);
        $this->setEndDate($endDate);
        $this->setRecurrence($recurrence);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
    }

    public function getScheduleKey()
    {
        return (!$this->scheduleKey) ?: $this->scheduleKey->value();
    }

    public function setEventName($eventName = null)
    {
        $this->eventName = ($eventName InstanceOf EventName)
             ? $eventName
             : new EventName($eventName);
    }

    public function getEventName()
    {
        return (!$this->eventName) ?: $this->eventName->value();
    }

    public function setStartDate(xs:date $startDate = null)
    {
    }

    public function getStartDate()
    {
        return (!$this->startDate) ?: $this->startDate->value();
    }

    public function setEndDate(xs:date $endDate = null)
    {
    }

    public function getEndDate()
    {
        return (!$this->endDate) ?: $this->endDate->value();
    }

    public function setRecurrence(Recurrence $recurrence = null)
    {
    }

    public function getRecurrence()
    {
        return (!$this->recurrence) ?: $this->recurrence->value();
    }
}
