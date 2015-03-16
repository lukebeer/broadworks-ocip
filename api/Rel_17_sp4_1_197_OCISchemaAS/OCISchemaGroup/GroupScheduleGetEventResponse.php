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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupScheduleGetEventRequest.
 *         The response contains the event of the group schedule.
 */
class GroupScheduleGetEventResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupScheduleGetEventResponse';
    protected $startDate;
    protected $endDate;
    protected $recurrence;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupScheduleGetEventResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setStartDate(xs:date $startDate = null)
    {
        $this->startDate->setName('startDate');
        return $this;
    }

    /**
     * 
     * @return xs:date $startDate
     */
    public function getStartDate()
    {
        return ($this->startDate) ? $this->startDate->getValue() : null;
    }

    /**
     * 
     */
    public function setEndDate(xs:date $endDate = null)
    {
        $this->endDate->setName('endDate');
        return $this;
    }

    /**
     * 
     * @return xs:date $endDate
     */
    public function getEndDate()
    {
        return ($this->endDate) ? $this->endDate->getValue() : null;
    }

    /**
     * 
     */
    public function setRecurrence(Recurrence $recurrence = null)
    {
        $this->recurrence = ($recurrence InstanceOf Recurrence)
             ? $recurrence
             : new Recurrence($recurrence);
        $this->recurrence->setName('recurrence');
        return $this;
    }

    /**
     * 
     * @return Recurrence $recurrence
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }
}
