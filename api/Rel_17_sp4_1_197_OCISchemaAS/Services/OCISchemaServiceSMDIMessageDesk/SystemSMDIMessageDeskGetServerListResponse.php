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
 * Response to SystemMediaServerGetListRequest. The SMDI Server table column
 *         headings are: "Device Name", "Net Address", "Port" and "Description".
 */
class SystemSMDIMessageDeskGetServerListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $smdiServerTable
    ) {
        $this->smdiServerTable = $smdiServerTable;
        $this->args            = func_get_args();
    }

    public function setSmdiServerTable($smdiServerTable)
    {
        $smdiServerTable and $this->smdiServerTable = new core:OCITable($smdiServerTable);
    }

    public function getSmdiServerTable()
    {
        return (!$this->smdiServerTable) ?: $this->smdiServerTable->value();
    }
}
