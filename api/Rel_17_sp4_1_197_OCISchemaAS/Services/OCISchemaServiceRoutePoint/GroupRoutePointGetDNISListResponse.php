<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupRoutePointGetDNISListRequest.
 *         Contains a table with column headings: "Name", "Phone Number", "Extension".
 */
class GroupRoutePointGetDNISListResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $displayDNISNumber  = null;
    protected $displayDNISName    = null;
    protected $dnisTable          = null;


    public function setDisplayDNISNumber(xs:boolean $displayDNISNumber = null)
    {
    }

    public function getDisplayDNISNumber()
    {
        return (!$this->displayDNISNumber) ?: $this->displayDNISNumber->value();
    }

    public function setDisplayDNISName(xs:boolean $displayDNISName = null)
    {
    }

    public function getDisplayDNISName()
    {
        return (!$this->displayDNISName) ?: $this->displayDNISName->value();
    }

    public function setDnisTable(core:OCITable $dnisTable = null)
    {
    }

    public function getDnisTable()
    {
        return (!$this->dnisTable) ?: $this->dnisTable->value();
    }
}
