<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Time range used to filter call logs.
 */
class EnhancedCallLogsTimeRange extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnhancedCallLogsTimeRange';
    protected $startDateTime;
    protected $endDateTime;

    public function __construct(
         $startDateTime = '',
         $endDateTime = ''
    ) {
        $this->setStartDateTime($startDateTime);
        $this->setEndDateTime($endDateTime);
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
    public function setStartDateTime($startDateTime = null)
    {
        $this->startDateTime = new SimpleContent($startDateTime);
        $this->startDateTime->setElementName('startDateTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startDateTime
     */
    public function getStartDateTime()
    {
        return ($this->startDateTime)
            ? $this->startDateTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEndDateTime($endDateTime = null)
    {
        $this->endDateTime = new SimpleContent($endDateTime);
        $this->endDateTime->setElementName('endDateTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $endDateTime
     */
    public function getEndDateTime()
    {
        return ($this->endDateTime)
            ? $this->endDateTime->getElementValue()
            : null;
    }
}
