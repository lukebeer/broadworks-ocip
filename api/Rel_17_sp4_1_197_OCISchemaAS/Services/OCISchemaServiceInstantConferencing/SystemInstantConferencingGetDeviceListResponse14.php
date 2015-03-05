<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemInstantConferencingGetDeviceListRequest14. The table column headings are: "Device Name",
 *         "Device Type", "Integrated" and "Cluster Net Address".
 */
class SystemInstantConferencingGetDeviceListResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $instantConferencingDeviceTable
    ) {
        $this->instantConferencingDeviceTable = $instantConferencingDeviceTable;
        $this->args                           = func_get_args();
    }

    public function setInstantConferencingDeviceTable($instantConferencingDeviceTable)
    {
        $instantConferencingDeviceTable and $this->instantConferencingDeviceTable = new core:OCITable($instantConferencingDeviceTable);
    }

    public function getInstantConferencingDeviceTable()
    {
        return (!$this->instantConferencingDeviceTable) ?: $this->instantConferencingDeviceTable->value();
    }
}
