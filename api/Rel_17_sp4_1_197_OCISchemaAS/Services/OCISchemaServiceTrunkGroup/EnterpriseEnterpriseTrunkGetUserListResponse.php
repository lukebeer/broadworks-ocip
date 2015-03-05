<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseEnterpriseTrunkGetUserListRequest.
 *         The column headings for the enterpriseTrunkUserTable are: "Group Id", "User Id", "Last Name", "First Name", "Phone Number", "Alternate Trunk Identity", "Hiragana Last Name", "Hiragana First Name".
 */
class EnterpriseEnterpriseTrunkGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enterpriseTrunkUserTable
    ) {
        $this->enterpriseTrunkUserTable = $enterpriseTrunkUserTable;
        $this->args                     = func_get_args();
    }

    public function setEnterpriseTrunkUserTable($enterpriseTrunkUserTable)
    {
        $enterpriseTrunkUserTable and $this->enterpriseTrunkUserTable = new core:OCITable($enterpriseTrunkUserTable);
    }

    public function getEnterpriseTrunkUserTable()
    {
        return (!$this->enterpriseTrunkUserTable) ?: $this->enterpriseTrunkUserTable->value();
    }
}
