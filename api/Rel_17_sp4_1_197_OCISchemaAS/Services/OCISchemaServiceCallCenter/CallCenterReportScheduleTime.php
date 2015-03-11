<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportScheduleTime;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A scheduled time for call center enhanced reporting scheduled report.
 */
class CallCenterReportScheduleTime extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportScheduleTime';
    public    $name         = 'CallCenterReportScheduleTime';
    protected $timeZone     = null;
    protected $scheduleDate = null;
    protected $scheduleTime = null;

    public function __construct(
         $timeZone,
         $scheduleDate,
         $scheduleTime
    ) {
        $this->setTimeZone($timeZone);
        $this->setScheduleDate($scheduleDate);
        $this->setScheduleTime($scheduleTime);
    }

    /**
     * @return CallCenterReportScheduleTime
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
     * @return SimpleContent
     */
    public function getTimeZone()
    {
        return $this->timeZone->getValue();
    }

    /**
     * 
     */
    public function setScheduleDate($scheduleDate = null)
    {
        if (!$scheduleDate) return $this;
        $this->scheduleDate = new SimpleContent($scheduleDate);
        $this->scheduleDate->setName('scheduleDate');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getScheduleDate()
    {
        return $this->scheduleDate->getValue();
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
     * @return SimpleContent
     */
    public function getScheduleTime()
    {
        return $this->scheduleTime->getValue();
    }
}
