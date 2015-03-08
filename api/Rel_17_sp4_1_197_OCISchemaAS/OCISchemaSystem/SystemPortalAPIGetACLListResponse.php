<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemPortalAPIGetACLListRequest.
 *         Returns a table with column headings:
 *           "Net Address" and "Description".
 */
class SystemPortalAPIGetACLListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemPortalAPIGetACLListResponse';
    public    $name     = __CLASS__;
    protected $aclTable = null;


    /**
     * 
     */
    public function setAclTable(core:OCITable $aclTable = null)
    {
        $this->aclTable = core:OCITable $aclTable;
    }

    /**
     * 
     */
    public function getAclTable()
    {
        return (!$this->aclTable) ?: $this->aclTable->getValue();
    }
}
