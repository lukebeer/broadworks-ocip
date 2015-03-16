<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\DNISPromoteCallPrioritySeconds;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
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
    public    $name = 'GroupCallCenterGetDNISListResponse';
    protected $displayDNISNumber;
    protected $displayDNISName;
    protected $promoteCallsFromPriority1to0;
    protected $promoteCallsFromPriority2to1;
    protected $promoteCallsFromPriority3to2;
    protected $promoteCallsFromPriority1to0Seconds;
    protected $promoteCallsFromPriority2to1Seconds;
    protected $promoteCallsFromPriority3to2Seconds;
    protected $dnisTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetDNISListResponse $response
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
        $this->displayDNISNumber = new PrimitiveType($displayDNISNumber);
        $this->displayDNISNumber->setName('displayDNISNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $displayDNISNumber
     */
    public function getDisplayDNISNumber()
    {
        return ($this->displayDNISNumber) ? $this->displayDNISNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setDisplayDNISName($displayDNISName = null)
    {
        $this->displayDNISName = new PrimitiveType($displayDNISName);
        $this->displayDNISName->setName('displayDNISName');
        return $this;
    }

    /**
     * 
     * @return boolean $displayDNISName
     */
    public function getDisplayDNISName()
    {
        return ($this->displayDNISName) ? $this->displayDNISName->getValue() : null;
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority1to0($promoteCallsFromPriority1to0 = null)
    {
        $this->promoteCallsFromPriority1to0 = new PrimitiveType($promoteCallsFromPriority1to0);
        $this->promoteCallsFromPriority1to0->setName('promoteCallsFromPriority1to0');
        return $this;
    }

    /**
     * 
     * @return boolean $promoteCallsFromPriority1to0
     */
    public function getPromoteCallsFromPriority1to0()
    {
        return ($this->promoteCallsFromPriority1to0) ? $this->promoteCallsFromPriority1to0->getValue() : null;
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority2to1($promoteCallsFromPriority2to1 = null)
    {
        $this->promoteCallsFromPriority2to1 = new PrimitiveType($promoteCallsFromPriority2to1);
        $this->promoteCallsFromPriority2to1->setName('promoteCallsFromPriority2to1');
        return $this;
    }

    /**
     * 
     * @return boolean $promoteCallsFromPriority2to1
     */
    public function getPromoteCallsFromPriority2to1()
    {
        return ($this->promoteCallsFromPriority2to1) ? $this->promoteCallsFromPriority2to1->getValue() : null;
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority3to2($promoteCallsFromPriority3to2 = null)
    {
        $this->promoteCallsFromPriority3to2 = new PrimitiveType($promoteCallsFromPriority3to2);
        $this->promoteCallsFromPriority3to2->setName('promoteCallsFromPriority3to2');
        return $this;
    }

    /**
     * 
     * @return boolean $promoteCallsFromPriority3to2
     */
    public function getPromoteCallsFromPriority3to2()
    {
        return ($this->promoteCallsFromPriority3to2) ? $this->promoteCallsFromPriority3to2->getValue() : null;
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority1to0Seconds($promoteCallsFromPriority1to0Seconds = null)
    {
        $this->promoteCallsFromPriority1to0Seconds = ($promoteCallsFromPriority1to0Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority1to0Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority1to0Seconds);
        $this->promoteCallsFromPriority1to0Seconds->setName('promoteCallsFromPriority1to0Seconds');
        return $this;
    }

    /**
     * 
     * @return DNISPromoteCallPrioritySeconds $promoteCallsFromPriority1to0Seconds
     */
    public function getPromoteCallsFromPriority1to0Seconds()
    {
        return ($this->promoteCallsFromPriority1to0Seconds) ? $this->promoteCallsFromPriority1to0Seconds->getValue() : null;
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority2to1Seconds($promoteCallsFromPriority2to1Seconds = null)
    {
        $this->promoteCallsFromPriority2to1Seconds = ($promoteCallsFromPriority2to1Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority2to1Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority2to1Seconds);
        $this->promoteCallsFromPriority2to1Seconds->setName('promoteCallsFromPriority2to1Seconds');
        return $this;
    }

    /**
     * 
     * @return DNISPromoteCallPrioritySeconds $promoteCallsFromPriority2to1Seconds
     */
    public function getPromoteCallsFromPriority2to1Seconds()
    {
        return ($this->promoteCallsFromPriority2to1Seconds) ? $this->promoteCallsFromPriority2to1Seconds->getValue() : null;
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority3to2Seconds($promoteCallsFromPriority3to2Seconds = null)
    {
        $this->promoteCallsFromPriority3to2Seconds = ($promoteCallsFromPriority3to2Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority3to2Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority3to2Seconds);
        $this->promoteCallsFromPriority3to2Seconds->setName('promoteCallsFromPriority3to2Seconds');
        return $this;
    }

    /**
     * 
     * @return DNISPromoteCallPrioritySeconds $promoteCallsFromPriority3to2Seconds
     */
    public function getPromoteCallsFromPriority3to2Seconds()
    {
        return ($this->promoteCallsFromPriority3to2Seconds) ? $this->promoteCallsFromPriority3to2Seconds->getValue() : null;
    }

    /**
     * 
     */
    public function setDnisTable(TableType $dnisTable = null)
    {
        $this->dnisTable = $dnisTable;
        $this->dnisTable->setName('dnisTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDnisTable()
    {
        return $this->dnisTable;
    }
}
