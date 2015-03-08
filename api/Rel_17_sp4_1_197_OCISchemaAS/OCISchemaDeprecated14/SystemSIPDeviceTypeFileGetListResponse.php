<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemSIPDeviceTypeFileGetListRequest.
 *           Contains a table of device files managed by the Device Management System on a per-device type basis.
 *           The column headings are: "File Type", "File Format", "Is Authenticated".
 *           Replaced By: SystemSIPDeviceTypeFileGetListResponse14sp8
 */
class SystemSIPDeviceTypeFileGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemSIPDeviceTypeFileGetListResponse';
    public    $name                 = __CLASS__;
    protected $deviceTypeFilesTable = null;


    /**
     * 
     */
    public function setDeviceTypeFilesTable(core:OCITable $deviceTypeFilesTable = null)
    {
        $this->deviceTypeFilesTable = core:OCITable $deviceTypeFilesTable;
    }

    /**
     * 
     */
    public function getDeviceTypeFilesTable()
    {
        return (!$this->deviceTypeFilesTable) ?: $this->deviceTypeFilesTable->getValue();
    }
}