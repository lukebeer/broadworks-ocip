<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceWeekInterval;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Weekly recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleWeekly extends ComplexType implements ComplexInterface
{
    public    $name                   = 'InstantConferencingRecurrenceScheduleWeekly';
    protected $recurrenceWeekInterval = null;
    protected $dayOfWeek              = null;

    public function __construct(
         $recurrenceWeekInterval,
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
        if (!$recurrenceWeekInterval) return $this;
        $this->recurrenceWeekInterval = ($recurrenceWeekInterval InstanceOf InstantConferencingRecurrenceWeekInterval)
             ? $recurrenceWeekInterval
             : new InstantConferencingRecurrenceWeekInterval($recurrenceWeekInterval);
        $this->recurrenceWeekInterval->setName('recurrenceWeekInterval');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecurrenceWeekInterval $recurrenceWeekInterval
     */
    public function getRecurrenceWeekInterval()
    {
        return $this->recurrenceWeekInterval->getValue();
    }

    /**
     * 
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        if (!$dayOfWeek) return $this;
        $this->dayOfWeek = ($dayOfWeek InstanceOf DayOfWeek)
             ? $dayOfWeek
             : new DayOfWeek($dayOfWeek);
        $this->dayOfWeek->setName('dayOfWeek');
        return $this;
    }

    /**
     * 
     * @return DayOfWeek $dayOfWeek
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek->getValue();
    }
}
