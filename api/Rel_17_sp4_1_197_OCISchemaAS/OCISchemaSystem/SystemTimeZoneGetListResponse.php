<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Contains a 2 column table with column headings 'Key' and 'Display Name' and a row
 *         for each time zone.
 */
class SystemTimeZoneGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $timeZoneTable
    ) {
        $this->timeZoneTable = $timeZoneTable;
        $this->args          = func_get_args();
    }

    public function setTimeZoneTable($timeZoneTable)
    {
        $timeZoneTable and $this->timeZoneTable = new core:OCITable($timeZoneTable);
    }

    public function getTimeZoneTable()
    {
        return (!$this->timeZoneTable) ?: $this->timeZoneTable->value();
    }
}
