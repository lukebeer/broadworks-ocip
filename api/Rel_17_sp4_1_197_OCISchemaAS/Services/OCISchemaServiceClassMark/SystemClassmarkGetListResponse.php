<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceClassMark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemClassmarkGetListRequest. 
 *         Contains a table of with the column headings: "Class Mark", "Value" and "Web Display Key".
 */
class SystemClassmarkGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $classmarkTable
    ) {
        $this->classmarkTable = $classmarkTable;
        $this->args           = func_get_args();
    }

    public function setClassmarkTable($classmarkTable)
    {
        $classmarkTable and $this->classmarkTable = new core:OCITable($classmarkTable);
    }

    public function getClassmarkTable()
    {
        return (!$this->classmarkTable) ?: $this->classmarkTable->value();
    }
}
