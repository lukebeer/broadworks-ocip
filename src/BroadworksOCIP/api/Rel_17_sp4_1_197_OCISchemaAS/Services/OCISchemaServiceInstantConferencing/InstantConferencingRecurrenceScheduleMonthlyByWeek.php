<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingWeekOfMonth;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Monthly by week recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleMonthlyByWeek extends ComplexType implements ComplexInterface
{
    public    $elementName = 'InstantConferencingRecurrenceScheduleMonthlyByWeek';
    protected $weekOfMonth;
    protected $dayOfWeek;

    public function __construct(
         $weekOfMonth = '',
         $dayOfWeek = ''
    ) {
        $this->setWeekOfMonth($weekOfMonth);
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
    public function setWeekOfMonth($weekOfMonth = null)
    {
        $this->weekOfMonth = ($weekOfMonth InstanceOf InstantConferencingWeekOfMonth)
             ? $weekOfMonth
             : new InstantConferencingWeekOfMonth($weekOfMonth);
        $this->weekOfMonth->setElementName('weekOfMonth');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingWeekOfMonth $weekOfMonth
     */
    public function getWeekOfMonth()
    {
        return ($this->weekOfMonth)
            ? $this->weekOfMonth->getElementValue()
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
