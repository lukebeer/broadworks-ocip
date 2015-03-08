<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupEnterpriseTrunkGetListRequest.
 *         Contains a table of enterprise trunks defined in the enterprise
 *         The column headings are: "Enterprise Trunk Name", "Routing Type"
 */
class GroupEnterpriseTrunkGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $enterpriseTrunkTable = null;


    /**
     * 
     */
    public function setEnterpriseTrunkTable(core:OCITable $enterpriseTrunkTable = null)
    {
        $this->enterpriseTrunkTable =  $enterpriseTrunkTable;
    }

    /**
     * 
     */
    public function getEnterpriseTrunkTable()
    {
        return (!$this->enterpriseTrunkTable) ?: $this->enterpriseTrunkTable->getValue();
    }
}
