<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeFileGetListResponse14sp8;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSIPDeviceTypeFileGetListRequest14sp8.
 *         Contains a table of device files managed by the Device Management System on a per-device type basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access URL", "Repository URL", "Template URL".
 */
class SystemSIPDeviceTypeFileGetListResponse14sp8 extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $deviceTypeFilesTable = null;

    /**
     * @return SystemSIPDeviceTypeFileGetListResponse14sp8
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceTypeFilesTable(core:OCITable $deviceTypeFilesTable = null)
    {
        $this->deviceTypeFilesTable =  $deviceTypeFilesTable;
    }

    /**
     * 
     */
    public function getDeviceTypeFilesTable()
    {
        return (!$this->deviceTypeFilesTable) ?: $this->deviceTypeFilesTable->getValue();
    }
}
