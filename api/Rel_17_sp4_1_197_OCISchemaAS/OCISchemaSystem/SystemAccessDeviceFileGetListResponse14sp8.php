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
 * Response to SystemAccessDeviceFileGetListRequest14sp8.
 *         Contains a table of device files managed by the Device Management System on a per-device profile basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access URL", "Repository URL", "Template URL".
 */
class SystemAccessDeviceFileGetListResponse14sp8 extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $deviceFilesTable  = null;


    public function setDeviceFilesTable(core:OCITable $deviceFilesTable = null)
    {
    }

    public function getDeviceFilesTable()
    {
        return (!$this->deviceFilesTable) ?: $this->deviceFilesTable->value();
    }
}
