<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 


use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Recurrence schedule used in the context of a conference add.
 *         This type is extended by:
 *           InstantConferencingRecurrenceScheduleDaily,
 *           InstantConferencingRecurrenceScheduleWeekly,
 *           InstantConferencingRecurrenceScheduleMonthly.
 */
class InstantConferencingRecurrenceSchedule extends ComplexType implements ComplexInterface
{
    public    $elementName = 'InstantConferencingRecurrenceSchedule';

    public function __construct(    ) {
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
