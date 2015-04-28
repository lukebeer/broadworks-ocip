<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Holiday entry.
 */
class Holiday extends ComplexType implements ComplexInterface
{
    public    $elementName = 'Holiday';
    protected $holidayName;
    protected $startDate;
    protected $endDate;

    public function __construct(
         $holidayName = '',
         $startDate = '',
         $endDate = null
    ) {
        $this->setHolidayName($holidayName);
        $this->setStartDate($startDate);
        $this->setEndDate($endDate);
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
    public function setHolidayName($holidayName = null)
    {
        $this->holidayName = new SimpleContent($holidayName);
        $this->holidayName->setElementName('holidayName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $holidayName
     */
    public function getHolidayName()
    {
        return ($this->holidayName)
            ? $this->holidayName->getElementValue()
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
}
