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
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint\GroupRoutePointGetDNISListResponse';
    public    $name              = __CLASS__;
    protected $displayDNISNumber = null;
    protected $displayDNISName   = null;
    protected $dnisTable         = null;


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
        return (!$this->displayDNISNumber) ?: $this->displayDNISNumber->getValue();
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
        return (!$this->displayDNISName) ?: $this->displayDNISName->getValue();
    }

    /**
     * 
     */
    public function setDnisTable(core:OCITable $dnisTable = null)
    {
        $this->dnisTable = core:OCITable $dnisTable;
    }

    /**
     * 
     */
    public function getDnisTable()
    {
        return (!$this->dnisTable) ?: $this->dnisTable->getValue();
    }
}
