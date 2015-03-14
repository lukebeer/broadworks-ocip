<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains Call Center queue status and a table with column headings: "User Id", "First Name", "Last Name"
 */
class GroupCallCenterGetInstanceQueueStatusResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = 'GroupCallCenterGetInstanceQueueStatusResponse';
    protected $numberOfCallsQueuedNow = null;
    protected $agentsCurrentlyStaffed = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetInstanceQueueStatusResponse $response
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
        if (!$numberOfCallsQueuedNow) return $this;
        $this->numberOfCallsQueuedNow = new PrimitiveType($numberOfCallsQueuedNow);
        $this->numberOfCallsQueuedNow->setName('numberOfCallsQueuedNow');
        return $this;
    }

    /**
     * 
     * @return int $numberOfCallsQueuedNow
     */
    public function getNumberOfCallsQueuedNow()
    {
        return $this->numberOfCallsQueuedNow->getValue();
    }

    /**
     * 
     */
    public function setAgentsCurrentlyStaffed(TableType $agentsCurrentlyStaffed = null)
    {
        if (!$agentsCurrentlyStaffed) return $this;
        $this->agentsCurrentlyStaffed = $agentsCurrentlyStaffed;
        $this->agentsCurrentlyStaffed->setName('agentsCurrentlyStaffed');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAgentsCurrentlyStaffed()
    {
        return $this->agentsCurrentlyStaffed->getValue();
    }
}
