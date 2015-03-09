<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\DNISPromoteCallPrioritySeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterGetDNISListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterGetDNISListResponse.
 *         Contains a table with column headings: "Name", "Phone Number", "Extension", "Priority".
 */
class GroupCallCenterGetDNISListResponse extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $displayDNISNumber                   = null;
    protected $displayDNISName                     = null;
    protected $promoteCallsFromPriority1to0        = null;
    protected $promoteCallsFromPriority2to1        = null;
    protected $promoteCallsFromPriority3to2        = null;
    protected $promoteCallsFromPriority1to0Seconds = null;
    protected $promoteCallsFromPriority2to1Seconds = null;
    protected $promoteCallsFromPriority3to2Seconds = null;
    protected $dnisTable                           = null;

    /**
     * @return GroupCallCenterGetDNISListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDisplayDNISNumber($displayDNISNumber = null)
    {
        $this->displayDNISNumber = (boolean) $displayDNISNumber;
    }

    /**
     * 
     */
    public function getDisplayDNISNumber()
    {
        return (!$this->displayDNISNumber) ?: $this->displayDNISNumber;
    }

    /**
     * 
     */
    public function setDisplayDNISName($displayDNISName = null)
    {
        $this->displayDNISName = (boolean) $displayDNISName;
    }

    /**
     * 
     */
    public function getDisplayDNISName()
    {
        return (!$this->displayDNISName) ?: $this->displayDNISName;
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority1to0($promoteCallsFromPriority1to0 = null)
    {
        $this->promoteCallsFromPriority1to0 = (boolean) $promoteCallsFromPriority1to0;
    }

    /**
     * 
     */
    public function getPromoteCallsFromPriority1to0()
    {
        return (!$this->promoteCallsFromPriority1to0) ?: $this->promoteCallsFromPriority1to0;
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority2to1($promoteCallsFromPriority2to1 = null)
    {
        $this->promoteCallsFromPriority2to1 = (boolean) $promoteCallsFromPriority2to1;
    }

    /**
     * 
     */
    public function getPromoteCallsFromPriority2to1()
    {
        return (!$this->promoteCallsFromPriority2to1) ?: $this->promoteCallsFromPriority2to1;
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority3to2($promoteCallsFromPriority3to2 = null)
    {
        $this->promoteCallsFromPriority3to2 = (boolean) $promoteCallsFromPriority3to2;
    }

    /**
     * 
     */
    public function getPromoteCallsFromPriority3to2()
    {
        return (!$this->promoteCallsFromPriority3to2) ?: $this->promoteCallsFromPriority3to2;
    }

    /**
     * Timer to upgrade the priority for a DNIS number
     */
    public function setPromoteCallsFromPriority1to0Seconds($promoteCallsFromPriority1to0Seconds = null)
    {
        $this->promoteCallsFromPriority1to0Seconds = ($promoteCallsFromPriority1to0Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority1to0Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority1to0Seconds);
    }

    /**
     * Timer to upgrade the priority for a DNIS number
     */
    public function getPromoteCallsFromPriority1to0Seconds()
    {
        return (!$this->promoteCallsFromPriority1to0Seconds) ?: $this->promoteCallsFromPriority1to0Seconds->getValue();
    }

    /**
     * Timer to upgrade the priority for a DNIS number
     */
    public function setPromoteCallsFromPriority2to1Seconds($promoteCallsFromPriority2to1Seconds = null)
    {
        $this->promoteCallsFromPriority2to1Seconds = ($promoteCallsFromPriority2to1Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority2to1Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority2to1Seconds);
    }

    /**
     * Timer to upgrade the priority for a DNIS number
     */
    public function getPromoteCallsFromPriority2to1Seconds()
    {
        return (!$this->promoteCallsFromPriority2to1Seconds) ?: $this->promoteCallsFromPriority2to1Seconds->getValue();
    }

    /**
     * Timer to upgrade the priority for a DNIS number
     */
    public function setPromoteCallsFromPriority3to2Seconds($promoteCallsFromPriority3to2Seconds = null)
    {
        $this->promoteCallsFromPriority3to2Seconds = ($promoteCallsFromPriority3to2Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority3to2Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority3to2Seconds);
    }

    /**
     * Timer to upgrade the priority for a DNIS number
     */
    public function getPromoteCallsFromPriority3to2Seconds()
    {
        return (!$this->promoteCallsFromPriority3to2Seconds) ?: $this->promoteCallsFromPriority3to2Seconds->getValue();
    }

    /**
     * 
     */
    public function setDnisTable(core:OCITable $dnisTable = null)
    {
        $this->dnisTable =  $dnisTable;
    }

    /**
     * 
     */
    public function getDnisTable()
    {
        return (!$this->dnisTable) ?: $this->dnisTable->getValue();
    }
}
