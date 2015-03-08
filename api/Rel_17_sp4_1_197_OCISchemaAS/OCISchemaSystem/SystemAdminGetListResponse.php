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
     * Response to SystemAdminGetListRequest.
 *         Contains a 6 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Type", "Read Only", "Language".
 */
class SystemAdminGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $systemAdminTable = null;


    /**
     * 
     */
    public function setSystemAdminTable(core:OCITable $systemAdminTable = null)
    {
        $this->systemAdminTable =  $systemAdminTable;
    }

    /**
     * 
     */
    public function getSystemAdminTable()
    {
        return (!$this->systemAdminTable) ?: $this->systemAdminTable->getValue();
    }
}
