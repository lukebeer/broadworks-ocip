<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceClassMark; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemClassmarkGetUtilizationListRequest. 
 *         Contains a table with the column headings: "User Id", "Group Id", "Service Provider Id",
 *         "Last Name", "First Name", and "Phone Number".
 */
class SystemClassmarkGetUtilizationListResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $classmarkUserTable = null;


    /**
     * 
     */
    public function setClassmarkUserTable(core:OCITable $classmarkUserTable = null)
    {
        $this->classmarkUserTable =  $classmarkUserTable;
    }

    /**
     * 
     */
    public function getClassmarkUserTable()
    {
        return (!$this->classmarkUserTable) ?: $this->classmarkUserTable->getValue();
    }
}
