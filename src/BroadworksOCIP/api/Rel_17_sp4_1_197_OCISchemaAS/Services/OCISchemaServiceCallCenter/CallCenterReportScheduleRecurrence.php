<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A recurring schedule for call center enhanced reporting scheduled report.
 */
class CallCenterReportScheduleRecurrence extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterReportScheduleRecurrence';
    protected $timeZone;
    protected $startDate;
    protected $scheduleTime;
    protected $recurrence;

    public function __construct(
         $timeZone = '',
         $startDate = '',
         $scheduleTime = '',
         $recurrence = ''
    ) {
        $this->setTimeZone($timeZone);
        $this->setStartDate($startDate);
        $this->setScheduleTime($scheduleTime);
        $this->setRecurrence($recurrence);
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
    public function setTimeZone($timeZone = null)
    {
        $this->timeZone = new SimpleContent($timeZone);
        $this->timeZone->setElementName('timeZone');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeZone
     */
    public function getTimeZone()
    {
        return ($this->timeZone)
            ? $this->timeZone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStartDate($startDate = null)
    {
        $this->startDate = new SimpleContent($startDate);
        $this->startDate->setElementName('startDate');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startDate
     */
    public function getStartDate()
    {
        return ($this->startDate)
            ? $this->startDate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScheduleTime($scheduleTime = null)
    {
        $this->scheduleTime = new SimpleContent($scheduleTime);
        $this->scheduleTime->setElementName('scheduleTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $scheduleTime
     */
    public function getScheduleTime()
    {
        return ($this->scheduleTime)
            ? $this->scheduleTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecurrence($recurrence = null)
    {
        $this->recurrence = new SimpleContent($recurrence);
        $this->recurrence->setElementName('recurrence');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $recurrence
     */
    public function getRecurrence()
    {
        return ($this->recurrence)
            ? $this->recurrence->getElementValue()
            : null;
    }
}
