<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingWeekOfMonth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceScheduleMonthlyByWeek;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Monthly by week recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleMonthlyByWeek extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceScheduleMonthlyByWeek';
    public    $name        = 'InstantConferencingRecurrenceScheduleMonthlyByWeek';
    protected $weekOfMonth = null;
    protected $dayOfWeek   = null;

    public function __construct(
         $weekOfMonth,
         $dayOfWeek
    ) {
        $this->setWeekOfMonth($weekOfMonth);
        $this->setDayOfWeek($dayOfWeek);
    }

    /**
     * @return InstantConferencingRecurrenceScheduleMonthlyByWeek
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
        if (!$weekOfMonth) return $this;
        $this->weekOfMonth = ($weekOfMonth InstanceOf InstantConferencingWeekOfMonth)
             ? $weekOfMonth
             : new InstantConferencingWeekOfMonth($weekOfMonth);
        $this->weekOfMonth->setName('weekOfMonth');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingWeekOfMonth
     */
    public function getWeekOfMonth()
    {
        return $this->weekOfMonth->getValue();
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
     * @return DayOfWeek
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek->getValue();
    }
}
