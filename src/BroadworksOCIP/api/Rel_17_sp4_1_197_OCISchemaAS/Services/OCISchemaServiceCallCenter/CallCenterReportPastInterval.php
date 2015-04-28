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
 * The call center enhanced reporting report past interval, for example, last 24 month.
 */
class CallCenterReportPastInterval extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterReportPastInterval';
    protected $number;
    protected $timeUnit;

    public function __construct(
         $number = '',
         $timeUnit = ''
    ) {
        $this->setNumber($number);
        $this->setTimeUnit($timeUnit);
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
    public function setNumber($number = null)
    {
        $this->number = new SimpleContent($number);
        $this->number->setElementName('number');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $number
     */
    public function getNumber()
    {
        return ($this->number)
            ? $this->number->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeUnit($timeUnit = null)
    {
        $this->timeUnit = new SimpleContent($timeUnit);
        $this->timeUnit->setElementName('timeUnit');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeUnit
     */
    public function getTimeUnit()
    {
        return ($this->timeUnit)
            ? $this->timeUnit->getElementValue()
            : null;
    }
}
