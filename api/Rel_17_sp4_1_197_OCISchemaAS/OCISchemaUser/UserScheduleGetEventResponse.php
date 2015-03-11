<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserScheduleGetEventRequest.
 *         The response contains the event of the user schedule.
 */
class UserScheduleGetEventResponse extends ComplexType implements ComplexInterface
{
    public    $name       = 'UserScheduleGetEventResponse';
    protected $startDate  = null;
    protected $endDate    = null;
    protected $recurrence = null;

    /**
     * @return UserScheduleGetEventResponse
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
        if (!$startDate) return $this;
        $this->startDate->setName('startDate');
        return $this;
    }

    /**
     * 
     * @return xs:date
     */
    public function getStartDate()
    {
        return $this->startDate->getValue();
    }

    /**
     * 
     */
    public function setEndDate(xs:date $endDate = null)
    {
        if (!$endDate) return $this;
        $this->endDate->setName('endDate');
        return $this;
    }

    /**
     * 
     * @return xs:date
     */
    public function getEndDate()
    {
        return $this->endDate->getValue();
    }

    /**
     * 
     */
    public function setRecurrence(Recurrence $recurrence = null)
    {
        if (!$recurrence) return $this;
        $this->recurrence = $recurrence;
        $this->recurrence->setName('recurrence');
        return $this;
    }

    /**
     * 
     * @return Recurrence
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }
}
