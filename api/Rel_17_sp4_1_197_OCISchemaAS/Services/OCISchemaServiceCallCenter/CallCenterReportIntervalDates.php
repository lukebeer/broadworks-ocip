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
 * The call center enhanced reporting report interval, using dates.
 */
class CallCenterReportIntervalDates extends ComplexType implements ComplexInterface
{
    public    $name = 'CallCenterReportIntervalDates';
    protected $startDate;
    protected $startTime;
    protected $endDate;
    protected $endTime;

    public function __construct(
         $startDate = '',
         $startTime = '',
         $endDate = '',
         $endTime = ''
    ) {
        $this->setStartDate($startDate);
        $this->setStartTime($startTime);
        $this->setEndDate($endDate);
        $this->setEndTime($endTime);
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
    public function setStartDate($startDate = null)
    {
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
        return ($this->startDate) ? $this->startDate->getValue() : null;
    }

    /**
     * 
     */
    public function setStartTime($startTime = null)
    {
        $this->startTime = new SimpleContent($startTime);
        $this->startTime->setName('startTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startTime
     */
    public function getStartTime()
    {
        return ($this->startTime) ? $this->startTime->getValue() : null;
    }

    /**
     * 
     */
    public function setEndDate($endDate = null)
    {
        $this->endDate = new SimpleContent($endDate);
        $this->endDate->setName('endDate');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $endDate
     */
    public function getEndDate()
    {
        return ($this->endDate) ? $this->endDate->getValue() : null;
    }

    /**
     * 
     */
    public function setEndTime($endTime = null)
    {
        $this->endTime = new SimpleContent($endTime);
        $this->endTime->setName('endTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $endTime
     */
    public function getEndTime()
    {
        return ($this->endTime) ? $this->endTime->getValue() : null;
    }
}
