<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceDayInterval;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Daily recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleDaily extends ComplexType implements ComplexInterface
{
    public    $elementName = 'InstantConferencingRecurrenceScheduleDaily';
    protected $recurrenceDayInterval;

    public function __construct(
         $recurrenceDayInterval = ''
    ) {
        $this->setRecurrenceDayInterval($recurrenceDayInterval);
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
    public function setRecurrenceDayInterval($recurrenceDayInterval = null)
    {
        $this->recurrenceDayInterval = ($recurrenceDayInterval InstanceOf InstantConferencingRecurrenceDayInterval)
             ? $recurrenceDayInterval
             : new InstantConferencingRecurrenceDayInterval($recurrenceDayInterval);
        $this->recurrenceDayInterval->setElementName('recurrenceDayInterval');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecurrenceDayInterval $recurrenceDayInterval
     */
    public function getRecurrenceDayInterval()
    {
        return ($this->recurrenceDayInterval)
            ? $this->recurrenceDayInterval->getElementValue()
            : null;
    }
}
