<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A recurring schedule for call center enhanced reporting scheduled report.
 */
class CallCenterReportScheduleRecurrence extends ComplexType implements ComplexInterface
{
    public    $name         = 'CallCenterReportScheduleRecurrence';
    protected $timeZone     = null;
    protected $startDate    = null;
    protected $scheduleTime = null;
    protected $recurrence   = null;

    public function __construct(
         $timeZone,
         $startDate,
         $scheduleTime,
         $recurrence
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
        if (!$timeZone) return $this;
        $this->timeZone = new SimpleContent($timeZone);
        $this->timeZone->setName('timeZone');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeZone
     */
    public function getTimeZone()
    {
        return $this->timeZone->getValue();
    }

    /**
     * 
     */
    public function setStartDate($startDate = null)
    {
        if (!$startDate) return $this;
        $this->startDate = new SimpleContent($startDate);
        $this->startDate->setName('startDate');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startDate
     */
    public function getStartDate()
    {
        return $this->startDate->getValue();
    }

    /**
     * 
     */
    public function setScheduleTime($scheduleTime = null)
    {
        if (!$scheduleTime) return $this;
        $this->scheduleTime = new SimpleContent($scheduleTime);
        $this->scheduleTime->setName('scheduleTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $scheduleTime
     */
    public function getScheduleTime()
    {
        return $this->scheduleTime->getValue();
    }

    /**
     * 
     */
    public function setRecurrence($recurrence = null)
    {
        if (!$recurrence) return $this;
        $this->recurrence = new SimpleContent($recurrence);
        $this->recurrence->setName('recurrence');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $recurrence
     */
    public function getRecurrence()
    {
        return $this->recurrence->getValue();
    }
}
