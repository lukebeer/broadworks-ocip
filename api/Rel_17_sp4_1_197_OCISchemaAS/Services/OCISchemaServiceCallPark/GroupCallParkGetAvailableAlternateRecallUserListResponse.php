<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallPark; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupCallParkGetAvailableAlternateRecallUserListResponse.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallParkGetAvailableAlternateRecallUserListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallPark\GroupCallParkGetAvailableAlternateRecallUserListResponse';
    public    $name                    = __CLASS__;
    protected $availableHuntGroupTable = null;


    /**
     * 
     */
    public function setAvailableHuntGroupTable(core:OCITable $availableHuntGroupTable = null)
    {
        $this->availableHuntGroupTable = core:OCITable $availableHuntGroupTable;
    }

    /**
     * 
     */
    public function getAvailableHuntGroupTable()
    {
        return (!$this->availableHuntGroupTable) ?: $this->availableHuntGroupTable->getValue();
    }
}
