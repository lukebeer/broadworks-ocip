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
     * Response to the GroupGroupPagingGetOriginatorListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupGroupPagingGetOriginatorListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging\GroupGroupPagingGetOriginatorListResponse';
    public    $name            = __CLASS__;
    protected $originatorTable = null;


    /**
     * 
     */
    public function setOriginatorTable(core:OCITable $originatorTable = null)
    {
        $this->originatorTable = core:OCITable $originatorTable;
    }

    /**
     * 
     */
    public function getOriginatorTable()
    {
        return (!$this->originatorTable) ?: $this->originatorTable->getValue();
    }
}
