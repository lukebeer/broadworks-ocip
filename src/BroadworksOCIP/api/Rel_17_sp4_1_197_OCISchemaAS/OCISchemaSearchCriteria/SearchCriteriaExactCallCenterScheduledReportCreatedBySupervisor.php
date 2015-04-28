<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Criteria for searching for call center scheduled report created by a
 *         supervisor or administrator.
 */
class SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor';
    protected $createdBySupervisor;

    public function __construct(
         $createdBySupervisor = ''
    ) {
        $this->setCreatedBySupervisor($createdBySupervisor);
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
    public function setCreatedBySupervisor($createdBySupervisor = null)
    {
        $this->createdBySupervisor = new PrimitiveType($createdBySupervisor);
        $this->createdBySupervisor->setElementName('createdBySupervisor');
        return $this;
    }

    /**
     * 
     * @return boolean $createdBySupervisor
     */
    public function getCreatedBySupervisor()
    {
        return ($this->createdBySupervisor)
            ? $this->createdBySupervisor->getElementValue()
            : null;
    }
}
