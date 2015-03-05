<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserGetServiceInstanceListInSystemRequest.
 *         Contains a table with column headings : "User Id", "Group Id", "Serive Provider Id", "Service Type", "Name", "Phone Number", 
 *         "Extension" in a row for each Service Instance. Possible values for Service Type column are ServiceType enums.
 */
class UserGetServiceInstanceListInSystemResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceInstanceTable
    ) {
        $this->serviceInstanceTable = $serviceInstanceTable;
        $this->args                 = func_get_args();
    }

    public function setServiceInstanceTable($serviceInstanceTable)
    {
        $serviceInstanceTable and $this->serviceInstanceTable = new core:OCITable($serviceInstanceTable);
    }

    public function getServiceInstanceTable()
    {
        return (!$this->serviceInstanceTable) ?: $this->serviceInstanceTable->value();
    }
}
