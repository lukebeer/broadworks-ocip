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
 * Response to SystemSIPGetACLListRequest. The table columns are:
 *         "Net Address", "Transport" and "Description".
 */
class SystemSIPGetACLListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $aclTable
    ) {
        $this->aclTable = $aclTable;
        $this->args     = func_get_args();
    }

    public function setAclTable($aclTable)
    {
        $aclTable and $this->aclTable = new core:OCITable($aclTable);
    }

    public function getAclTable()
    {
        return (!$this->aclTable) ?: $this->aclTable->value();
    }
}
