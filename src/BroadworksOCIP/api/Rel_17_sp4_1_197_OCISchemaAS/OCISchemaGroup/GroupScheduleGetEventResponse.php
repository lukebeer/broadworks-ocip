<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupScheduleGetEventRequest.
 *         The response contains the event of the group schedule.
 */
class GroupScheduleGetEventResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupScheduleGetEventResponse';
    protected $startDate;
    protected $endDate;
    protected $recurrence;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupScheduleGetEventResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setStartDate($startDate = null)
    {
        $this->startDate = new PrimitiveType($startDate);
        $this->startDate->setElementName('startDate');
        return $this;
    }

    /**
     * 
     * @return string $startDate
     */
    public function getStartDate()
    {
        return ($this->startDate)
            ? $this->startDate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEndDate($endDate = null)
    {
        $this->endDate = new PrimitiveType($endDate);
        $this->endDate->setElementName('endDate');
        return $this;
    }

    /**
     * 
     * @return string $endDate
     */
    public function getEndDate()
    {
        return ($this->endDate)
            ? $this->endDate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecurrence(Recurrence $recurrence = null)
    {
        $this->recurrence = ($recurrence InstanceOf Recurrence)
             ? $recurrence
             : new Recurrence($recurrence);
        $this->recurrence->setElementName('recurrence');
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
