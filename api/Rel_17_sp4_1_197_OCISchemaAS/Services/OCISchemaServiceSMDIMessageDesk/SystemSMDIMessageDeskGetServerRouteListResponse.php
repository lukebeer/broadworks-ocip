<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemSMDIMessageDeskGetServerRouteListRequest.
 *         The SMDI Server route table column headings are: "Destination" and "SMDI Servers".
 */
class SystemSMDIMessageDeskGetServerRouteListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $smdiServerRouteTable
    ) {
        $this->smdiServerRouteTable = $smdiServerRouteTable;
        $this->args                 = func_get_args();
    }

    public function setSmdiServerRouteTable($smdiServerRouteTable)
    {
        $smdiServerRouteTable and $this->smdiServerRouteTable = new core:OCITable($smdiServerRouteTable);
    }

    public function getSmdiServerRouteTable()
    {
        return (!$this->smdiServerRouteTable) ?: $this->smdiServerRouteTable->value();
    }
}
