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
 * The call center enhanced reporting report current interval, for example, current week.
 */
class CallCenterReportCurrentInterval extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterReportCurrentInterval';
    protected $timeUnit;

    public function __construct(
         $timeUnit = ''
    ) {
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
