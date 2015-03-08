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
     * Response to the GroupGroupPagingGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column value for "Is Active" can either be true, or false.
 */
class GroupGroupPagingGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging\GroupGroupPagingGetInstanceListResponse';
    public    $name             = __CLASS__;
    protected $pagingGroupTable = null;


    /**
     * 
     */
    public function setPagingGroupTable(core:OCITable $pagingGroupTable = null)
    {
        $this->pagingGroupTable = core:OCITable $pagingGroupTable;
    }

    /**
     * 
     */
    public function getPagingGroupTable()
    {
        return (!$this->pagingGroupTable) ?: $this->pagingGroupTable->getValue();
    }
}