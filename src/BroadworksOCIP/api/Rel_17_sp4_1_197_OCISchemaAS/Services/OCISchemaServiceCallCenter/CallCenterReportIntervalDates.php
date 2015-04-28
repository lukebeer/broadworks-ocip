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
 * The call center enhanced reporting report interval, using dates.
 */
class CallCenterReportIntervalDates extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterReportIntervalDates';
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
    public function setStartTime($startTime = null)
    {
        $this->startTime = new SimpleContent($startTime);
        $this->startTime->setElementName('startTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startTime
     */
    public function getStartTime()
    {
        return ($this->startTime)
            ? $this->startTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEndDate($endDate = null)
    {
        $this->endDate = new SimpleContent($endDate);
        $this->endDate->setElementName('endDate');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $endDate
     */
    public function getEndDate()
    {
        return ($this->endDate)
            ? $this->endDate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEndTime($endTime = null)
    {
        $this->endTime = new SimpleContent($endTime);
        $this->endTime->setElementName('endTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $endTime
     */
    public function getEndTime()
    {
        return ($this->endTime)
            ? $this->endTime->getElementValue()
            : null;
    }
}
