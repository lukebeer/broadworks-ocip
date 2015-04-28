<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceTimeFrame;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceSchedule;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Recurring conference schedule used in the context of a conference add.
 */
class InstantConferencingScheduleRecurring extends ComplexType implements ComplexInterface
{
    public    $elementName = 'InstantConferencingScheduleRecurring';
    protected $startTime;
    protected $duration;
    protected $recurrenceTimeFrame;
    protected $recurrenceSchedule;

    public function __construct(
         $startTime = '',
         $duration = '',
         $recurrenceTimeFrame = '',
         $recurrenceSchedule = ''
    ) {
        $this->setStartTime($startTime);
        $this->setDuration($duration);
        $this->setRecurrenceTimeFrame($recurrenceTimeFrame);
        $this->setRecurrenceSchedule($recurrenceSchedule);
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
    public function setStartTime($startTime = null)
    {
        $this->startTime = new PrimitiveType($startTime);
        $this->startTime->setElementName('startTime');
        return $this;
    }

    /**
     * 
     * @return string $startTime
     */
    public function getStartTime()
    {
        return ($this->startTime)
            ? $this->startTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDuration($duration = null)
    {
        $this->duration = new PrimitiveType($duration);
        $this->duration->setElementName('duration');
        return $this;
    }

    /**
     * 
     * @return string $duration
     */
    public function getDuration()
    {
        return ($this->duration)
            ? $this->duration->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecurrenceTimeFrame($recurrenceTimeFrame = null)
    {
        $this->recurrenceTimeFrame = ($recurrenceTimeFrame InstanceOf InstantConferencingRecurrenceTimeFrame)
             ? $recurrenceTimeFrame
             : new InstantConferencingRecurrenceTimeFrame($recurrenceTimeFrame);
        $this->recurrenceTimeFrame->setElementName('recurrenceTimeFrame');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecurrenceTimeFrame $recurrenceTimeFrame
     */
    public function getRecurrenceTimeFrame()
    {
        return ($this->recurrenceTimeFrame)
            ? $this->recurrenceTimeFrame->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecurrenceSchedule(InstantConferencingRecurrenceSchedule $recurrenceSchedule = null)
    {
        $this->recurrenceSchedule = ($recurrenceSchedule InstanceOf InstantConferencingRecurrenceSchedule)
             ? $recurrenceSchedule
             : new InstantConferencingRecurrenceSchedule($recurrenceSchedule);
        $this->recurrenceSchedule->setElementName('recurrenceSchedule');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecurrenceSchedule $recurrenceSchedule
     */
    public function getRecurrenceSchedule()
    {
        return $this->recurrenceSchedule;
    }
}
