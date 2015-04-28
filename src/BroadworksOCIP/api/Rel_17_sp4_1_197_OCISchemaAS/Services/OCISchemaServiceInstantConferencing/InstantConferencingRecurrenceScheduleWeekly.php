<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceWeekInterval;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Weekly recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleWeekly extends ComplexType implements ComplexInterface
{
    public    $elementName = 'InstantConferencingRecurrenceScheduleWeekly';
    protected $recurrenceWeekInterval;
    protected $dayOfWeek;

    public function __construct(
         $recurrenceWeekInterval = '',
         $dayOfWeek = null
    ) {
        $this->setRecurrenceWeekInterval($recurrenceWeekInterval);
        $this->setDayOfWeek($dayOfWeek);
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
    public function setRecurrenceWeekInterval($recurrenceWeekInterval = null)
    {
        $this->recurrenceWeekInterval = ($recurrenceWeekInterval InstanceOf InstantConferencingRecurrenceWeekInterval)
             ? $recurrenceWeekInterval
             : new InstantConferencingRecurrenceWeekInterval($recurrenceWeekInterval);
        $this->recurrenceWeekInterval->setElementName('recurrenceWeekInterval');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecurrenceWeekInterval $recurrenceWeekInterval
     */
    public function getRecurrenceWeekInterval()
    {
        return ($this->recurrenceWeekInterval)
            ? $this->recurrenceWeekInterval->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        $this->dayOfWeek = ($dayOfWeek InstanceOf DayOfWeek)
             ? $dayOfWeek
             : new DayOfWeek($dayOfWeek);
        $this->dayOfWeek->setElementName('dayOfWeek');
        return $this;
    }

    /**
     * 
     * @return DayOfWeek $dayOfWeek
     */
    public function getDayOfWeek()
    {
        return ($this->dayOfWeek)
            ? $this->dayOfWeek->getElementValue()
            : null;
    }
}
