<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfMonth;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Monthly by day recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleMonthlyByDay extends ComplexType implements ComplexInterface
{
    public    $elementName = 'InstantConferencingRecurrenceScheduleMonthlyByDay';
    protected $dayOfMonth;

    public function __construct(
         $dayOfMonth = ''
    ) {
        $this->setDayOfMonth($dayOfMonth);
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
    public function setDayOfMonth($dayOfMonth = null)
    {
        $this->dayOfMonth = ($dayOfMonth InstanceOf DayOfMonth)
             ? $dayOfMonth
             : new DayOfMonth($dayOfMonth);
        $this->dayOfMonth->setElementName('dayOfMonth');
        return $this;
    }

    /**
     * 
     * @return DayOfMonth $dayOfMonth
     */
    public function getDayOfMonth()
    {
        return ($this->dayOfMonth)
            ? $this->dayOfMonth->getElementValue()
            : null;
    }
}
