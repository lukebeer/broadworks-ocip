<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceMonthInterval;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Monthly recurrence conference schedule used in the context of a conference add.
 *         This type is extended by:
 *           InstantConferencingRecurrenceScheduleMonthlyByDay,
 *           InstantConferencingRecurrenceScheduleMonthlyByWeek.
 */
class InstantConferencingRecurrenceScheduleMonthly extends ComplexType implements ComplexInterface
{
    public    $name                    = 'InstantConferencingRecurrenceScheduleMonthly';
    protected $recurrenceMonthInterval = null;

    public function __construct(
         $recurrenceMonthInterval
    ) {
        $this->setRecurrenceMonthInterval($recurrenceMonthInterval);
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
    public function setRecurrenceMonthInterval($recurrenceMonthInterval = null)
    {
        if (!$recurrenceMonthInterval) return $this;
        $this->recurrenceMonthInterval = ($recurrenceMonthInterval InstanceOf InstantConferencingRecurrenceMonthInterval)
             ? $recurrenceMonthInterval
             : new InstantConferencingRecurrenceMonthInterval($recurrenceMonthInterval);
        $this->recurrenceMonthInterval->setName('recurrenceMonthInterval');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecurrenceMonthInterval $recurrenceMonthInterval
     */
    public function getRecurrenceMonthInterval()
    {
        return $this->recurrenceMonthInterval->getValue();
    }
}
