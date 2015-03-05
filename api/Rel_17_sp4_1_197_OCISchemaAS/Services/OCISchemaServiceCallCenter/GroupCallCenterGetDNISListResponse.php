<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISPromoteCallPrioritySeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterGetDNISListResponse.
 *         Contains a table with column headings: "Name", "Phone Number", "Extension", "Priority".
 */
class GroupCallCenterGetDNISListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $displayDNISNumber,
             $displayDNISName,
             $promoteCallsFromPriority1to0,
             $promoteCallsFromPriority2to1,
             $promoteCallsFromPriority3to2,
             $promoteCallsFromPriority1to0Seconds,
             $promoteCallsFromPriority2to1Seconds,
             $promoteCallsFromPriority3to2Seconds,
             $dnisTable
    ) {
        $this->displayDNISNumber                   = $displayDNISNumber;
        $this->displayDNISName                     = $displayDNISName;
        $this->promoteCallsFromPriority1to0        = $promoteCallsFromPriority1to0;
        $this->promoteCallsFromPriority2to1        = $promoteCallsFromPriority2to1;
        $this->promoteCallsFromPriority3to2        = $promoteCallsFromPriority3to2;
        $this->promoteCallsFromPriority1to0Seconds = $promoteCallsFromPriority1to0Seconds;
        $this->promoteCallsFromPriority2to1Seconds = $promoteCallsFromPriority2to1Seconds;
        $this->promoteCallsFromPriority3to2Seconds = $promoteCallsFromPriority3to2Seconds;
        $this->dnisTable                           = $dnisTable;
        $this->args                                = func_get_args();
    }

    public function setDisplayDNISNumber($displayDNISNumber)
    {
        $displayDNISNumber and $this->displayDNISNumber = new xs:boolean($displayDNISNumber);
    }

    public function getDisplayDNISNumber()
    {
        return (!$this->displayDNISNumber) ?: $this->displayDNISNumber->value();
    }

    public function setDisplayDNISName($displayDNISName)
    {
        $displayDNISName and $this->displayDNISName = new xs:boolean($displayDNISName);
    }

    public function getDisplayDNISName()
    {
        return (!$this->displayDNISName) ?: $this->displayDNISName->value();
    }

    public function setPromoteCallsFromPriority1to0($promoteCallsFromPriority1to0)
    {
        $promoteCallsFromPriority1to0 and $this->promoteCallsFromPriority1to0 = new xs:boolean($promoteCallsFromPriority1to0);
    }

    public function getPromoteCallsFromPriority1to0()
    {
        return (!$this->promoteCallsFromPriority1to0) ?: $this->promoteCallsFromPriority1to0->value();
    }

    public function setPromoteCallsFromPriority2to1($promoteCallsFromPriority2to1)
    {
        $promoteCallsFromPriority2to1 and $this->promoteCallsFromPriority2to1 = new xs:boolean($promoteCallsFromPriority2to1);
    }

    public function getPromoteCallsFromPriority2to1()
    {
        return (!$this->promoteCallsFromPriority2to1) ?: $this->promoteCallsFromPriority2to1->value();
    }

    public function setPromoteCallsFromPriority3to2($promoteCallsFromPriority3to2)
    {
        $promoteCallsFromPriority3to2 and $this->promoteCallsFromPriority3to2 = new xs:boolean($promoteCallsFromPriority3to2);
    }

    public function getPromoteCallsFromPriority3to2()
    {
        return (!$this->promoteCallsFromPriority3to2) ?: $this->promoteCallsFromPriority3to2->value();
    }

    public function setPromoteCallsFromPriority1to0Seconds($promoteCallsFromPriority1to0Seconds)
    {
        $promoteCallsFromPriority1to0Seconds and $this->promoteCallsFromPriority1to0Seconds = new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority1to0Seconds);
    }

    public function getPromoteCallsFromPriority1to0Seconds()
    {
        return (!$this->promoteCallsFromPriority1to0Seconds) ?: $this->promoteCallsFromPriority1to0Seconds->value();
    }

    public function setPromoteCallsFromPriority2to1Seconds($promoteCallsFromPriority2to1Seconds)
    {
        $promoteCallsFromPriority2to1Seconds and $this->promoteCallsFromPriority2to1Seconds = new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority2to1Seconds);
    }

    public function getPromoteCallsFromPriority2to1Seconds()
    {
        return (!$this->promoteCallsFromPriority2to1Seconds) ?: $this->promoteCallsFromPriority2to1Seconds->value();
    }

    public function setPromoteCallsFromPriority3to2Seconds($promoteCallsFromPriority3to2Seconds)
    {
        $promoteCallsFromPriority3to2Seconds and $this->promoteCallsFromPriority3to2Seconds = new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority3to2Seconds);
    }

    public function getPromoteCallsFromPriority3to2Seconds()
    {
        return (!$this->promoteCallsFromPriority3to2Seconds) ?: $this->promoteCallsFromPriority3to2Seconds->value();
    }

    public function setDnisTable($dnisTable)
    {
        $dnisTable and $this->dnisTable = new core:OCITable($dnisTable);
    }

    public function getDnisTable()
    {
        return (!$this->dnisTable) ?: $this->dnisTable->value();
    }
}
