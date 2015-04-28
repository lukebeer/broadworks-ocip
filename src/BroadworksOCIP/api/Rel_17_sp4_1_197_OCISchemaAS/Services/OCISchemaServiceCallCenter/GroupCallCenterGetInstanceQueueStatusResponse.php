<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains Call Center queue status and a table with column headings: "User Id", "First Name", "Last Name"
 */
class GroupCallCenterGetInstanceQueueStatusResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterGetInstanceQueueStatusResponse';
    protected $numberOfCallsQueuedNow;
    protected $agentsCurrentlyStaffed;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetInstanceQueueStatusResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setNumberOfCallsQueuedNow($numberOfCallsQueuedNow = null)
    {
        $this->numberOfCallsQueuedNow = new PrimitiveType($numberOfCallsQueuedNow);
        $this->numberOfCallsQueuedNow->setElementName('numberOfCallsQueuedNow');
        return $this;
    }

    /**
     * 
     * @return int $numberOfCallsQueuedNow
     */
    public function getNumberOfCallsQueuedNow()
    {
        return ($this->numberOfCallsQueuedNow)
            ? $this->numberOfCallsQueuedNow->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAgentsCurrentlyStaffed(TableType $agentsCurrentlyStaffed = null)
    {
        $this->agentsCurrentlyStaffed = $agentsCurrentlyStaffed;
        $this->agentsCurrentlyStaffed->setElementName('agentsCurrentlyStaffed');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAgentsCurrentlyStaffed()
    {
        return ($this->agentsCurrentlyStaffed)
            ? $this->agentsCurrentlyStaffed->getElementValue()
            : null;
    }
}
