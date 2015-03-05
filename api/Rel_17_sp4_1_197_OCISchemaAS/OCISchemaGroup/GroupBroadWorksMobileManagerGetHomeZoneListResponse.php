<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupBroadWorksMobileManagerGetHomeZoneListRequest.
 *         Contains a table with column headings: 
 *         "Home Zone Id", "Domain Name", "Mobile Country Code",
 *         "Mobile Network Code", "Local Area Code" and "Cell Identity".
 */
class GroupBroadWorksMobileManagerGetHomeZoneListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $homeZonesTable
    ) {
        $this->homeZonesTable = $homeZonesTable;
        $this->args           = func_get_args();
    }

    public function setHomeZonesTable($homeZonesTable)
    {
        $homeZonesTable and $this->homeZonesTable = new core:OCITable($homeZonesTable);
    }

    public function getHomeZonesTable()
    {
        return (!$this->homeZonesTable) ?: $this->homeZonesTable->value();
    }
}
