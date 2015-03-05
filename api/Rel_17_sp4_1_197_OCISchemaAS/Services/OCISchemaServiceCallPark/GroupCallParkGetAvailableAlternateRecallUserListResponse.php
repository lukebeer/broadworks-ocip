<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallPark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallParkGetAvailableAlternateRecallUserListResponse.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallParkGetAvailableAlternateRecallUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $availableHuntGroupTable
    ) {
        $this->availableHuntGroupTable = $availableHuntGroupTable;
        $this->args                    = func_get_args();
    }

    public function setAvailableHuntGroupTable($availableHuntGroupTable)
    {
        $availableHuntGroupTable and $this->availableHuntGroupTable = new core:OCITable($availableHuntGroupTable);
    }

    public function getAvailableHuntGroupTable()
    {
        return (!$this->availableHuntGroupTable) ?: $this->availableHuntGroupTable->value();
    }
}
