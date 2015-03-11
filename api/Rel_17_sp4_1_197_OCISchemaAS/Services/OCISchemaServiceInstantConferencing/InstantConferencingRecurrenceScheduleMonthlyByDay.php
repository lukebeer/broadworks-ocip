<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfMonth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceScheduleMonthlyByDay;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Monthly by day recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleMonthlyByDay extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceScheduleMonthlyByDay';
    public    $name       = 'InstantConferencingRecurrenceScheduleMonthlyByDay';
    protected $dayOfMonth = null;

    public function __construct(
         $dayOfMonth
    ) {
        $this->setDayOfMonth($dayOfMonth);
    }

    /**
     * @return InstantConferencingRecurrenceScheduleMonthlyByDay
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDayOfMonth($dayOfMonth = null)
    {
        if (!$dayOfMonth) return $this;
        $this->dayOfMonth = ($dayOfMonth InstanceOf DayOfMonth)
             ? $dayOfMonth
             : new DayOfMonth($dayOfMonth);
        $this->dayOfMonth->setName('dayOfMonth');
        return $this;
    }

    /**
     * 
     * @return DayOfMonth
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth->getValue();
    }
}
