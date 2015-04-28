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
 * A list of call center reporting data template query filter values that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class CallCenterReportDataTemplateQueryFilterValueReplacementList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterReportDataTemplateQueryFilterValueReplacementList';
    protected $filterValue;

    public function __construct(
         $filterValue = null
    ) {
        $this->setFilterValue($filterValue);
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
    public function setFilterValue($filterValue = null)
    {
        $this->filterValue = new SimpleContent($filterValue);
        $this->filterValue->setElementName('filterValue');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $filterValue
     */
    public function getFilterValue()
    {
        return ($this->filterValue)
            ? $this->filterValue->getElementValue()
            : null;
    }
}
