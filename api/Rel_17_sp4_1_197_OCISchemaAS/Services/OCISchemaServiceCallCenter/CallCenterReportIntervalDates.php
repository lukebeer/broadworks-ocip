<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportIntervalDates;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The call center enhanced reporting report interval, using dates.
 */
class CallCenterReportIntervalDates extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportIntervalDates';
    public    $name      = 'CallCenterReportIntervalDates';
    protected $startDate = null;
    protected $startTime = null;
    protected $endDate   = null;
    protected $endTime   = null;

    public function __construct(
         $startDate,
         $startTime,
         $endDate,
         $endTime
    ) {
        $this->setStartDate($startDate);
        $this->setStartTime($startTime);
        $this->setEndDate($endDate);
        $this->setEndTime($endTime);
    }

    /**
     * @return CallCenterReportIntervalDates
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * @return SimpleContent
     */
    public function getStartDate()
    {
        return $this->startDate->getValue();
    }

    /**
     * 
     */
    public function setStartTime($startTime = null)
    {
        if (!$startTime) return $this;
        $this->startTime = new SimpleContent($startTime);
        $this->startTime->setName('startTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getStartTime()
    {
        return $this->startTime->getValue();
    }

    /**
     * 
     */
    public function setEndDate($endDate = null)
    {
        if (!$endDate) return $this;
        $this->endDate = new SimpleContent($endDate);
        $this->endDate->setName('endDate');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEndDate()
    {
        return $this->endDate->getValue();
    }

    /**
     * 
     */
    public function setEndTime($endTime = null)
    {
        if (!$endTime) return $this;
        $this->endTime = new SimpleContent($endTime);
        $this->endTime->setName('endTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEndTime()
    {
        return $this->endTime->getValue();
    }
}
