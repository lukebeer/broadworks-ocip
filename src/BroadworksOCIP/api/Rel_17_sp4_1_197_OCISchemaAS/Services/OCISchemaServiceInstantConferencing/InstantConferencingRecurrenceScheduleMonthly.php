<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceMonthInterval;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Monthly recurrence conference schedule used in the context of a conference add.
 *         This type is extended by:
 *           InstantConferencingRecurrenceScheduleMonthlyByDay,
 *           InstantConferencingRecurrenceScheduleMonthlyByWeek.
 */
class InstantConferencingRecurrenceScheduleMonthly extends ComplexType implements ComplexInterface
{
    public    $elementName = 'InstantConferencingRecurrenceScheduleMonthly';
    protected $recurrenceMonthInterval;

    public function __construct(
         $recurrenceMonthInterval = ''
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
        $this->recurrenceMonthInterval = ($recurrenceMonthInterval InstanceOf InstantConferencingRecurrenceMonthInterval)
             ? $recurrenceMonthInterval
             : new InstantConferencingRecurrenceMonthInterval($recurrenceMonthInterval);
        $this->recurrenceMonthInterval->setElementName('recurrenceMonthInterval');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecurrenceMonthInterval $recurrenceMonthInterval
     */
    public function getRecurrenceMonthInterval()
    {
        return ($this->recurrenceMonthInterval)
            ? $this->recurrenceMonthInterval->getElementValue()
            : null;
    }
}
