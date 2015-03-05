<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupRoutePointGetDNISListRequest.
 *         Contains a table with column headings: "Name", "Phone Number", "Extension".
 */
class GroupRoutePointGetDNISListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $displayDNISNumber,
             $displayDNISName,
             $dnisTable
    ) {
        $this->displayDNISNumber = $displayDNISNumber;
        $this->displayDNISName   = $displayDNISName;
        $this->dnisTable         = $dnisTable;
        $this->args              = func_get_args();
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

    public function setDnisTable($dnisTable)
    {
        $dnisTable and $this->dnisTable = new core:OCITable($dnisTable);
    }

    public function getDnisTable()
    {
        return (!$this->dnisTable) ?: $this->dnisTable->value();
    }
}
