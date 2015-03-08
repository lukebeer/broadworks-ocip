<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the SystemRoamingNetworkGetListRequest.
 *         Contains a table with columns: "MSC Address", "Network Translation Index".
 */
class SystemRoamingNetworkGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $roamingNetworkTable = null;


    /**
     * 
     */
    public function setRoamingNetworkTable(core:OCITable $roamingNetworkTable = null)
    {
        $this->roamingNetworkTable =  $roamingNetworkTable;
    }

    /**
     * 
     */
    public function getRoamingNetworkTable()
    {
        return (!$this->roamingNetworkTable) ?: $this->roamingNetworkTable->getValue();
    }
}
