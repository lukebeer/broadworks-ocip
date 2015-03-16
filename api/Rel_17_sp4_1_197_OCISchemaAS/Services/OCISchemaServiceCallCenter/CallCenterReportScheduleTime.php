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
 * A scheduled time for call center enhanced reporting scheduled report.
 */
class CallCenterReportScheduleTime extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterReportScheduleTime';
    protected $timeZone;
    protected $scheduleDate;
    protected $scheduleTime;

    public function __construct(
         $timeZone = '',
         $scheduleDate = '',
         $scheduleTime = ''
    ) {
        $this->setTimeZone($timeZone);
        $this->setScheduleDate($scheduleDate);
        $this->setScheduleTime($scheduleTime);
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
    public function setScheduleDate($scheduleDate = null)
    {
        $this->scheduleDate = new SimpleContent($scheduleDate);
        $this->scheduleDate->setElementName('scheduleDate');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $scheduleDate
     */
    public function getScheduleDate()
    {
        return ($this->scheduleDate)
            ? $this->scheduleDate->getElementValue()
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
}
