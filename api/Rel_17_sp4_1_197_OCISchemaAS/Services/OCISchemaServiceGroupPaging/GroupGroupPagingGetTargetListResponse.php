<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupGroupPagingGetTargetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupGroupPagingGetTargetListResponse extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $targetTable = null;


    /**
     * 
     */
    public function setTargetTable(core:OCITable $targetTable = null)
    {
        $this->targetTable =  $targetTable;
    }

    /**
     * 
     */
    public function getTargetTable()
    {
        return (!$this->targetTable) ?: $this->targetTable->getValue();
    }
}
