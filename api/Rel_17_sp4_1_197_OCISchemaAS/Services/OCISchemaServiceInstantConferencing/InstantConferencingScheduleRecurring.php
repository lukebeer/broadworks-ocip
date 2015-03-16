<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceTimeFrame;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceSchedule;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public function setStartTime(xs:time $startTime = null)
    {
        $this->startTime->setElementName('startTime');
        return $this;
    }

    /**
     * 
     * @return xs:time $startTime
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
    public function setDuration(xs:duration $duration = null)
    {
        $this->duration->setElementName('duration');
        return $this;
    }

    /**
     * 
     * @return xs:duration $duration
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
