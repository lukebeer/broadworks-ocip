<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemNetworkClassOfServiceGetListRequest.
 *         The response contains a table of all Network Classes of Service 
 *         in the system. The column headings are "Name" and "Description"
 */
class SystemNetworkClassOfServiceGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $networkClassOfServiceTable
    ) {
        $this->networkClassOfServiceTable = $networkClassOfServiceTable;
        $this->args                       = func_get_args();
    }

    public function setNetworkClassOfServiceTable($networkClassOfServiceTable)
    {
        $networkClassOfServiceTable and $this->networkClassOfServiceTable = new core:OCITable($networkClassOfServiceTable);
    }

    public function getNetworkClassOfServiceTable()
    {
        return (!$this->networkClassOfServiceTable) ?: $this->networkClassOfServiceTable->value();
    }
}
