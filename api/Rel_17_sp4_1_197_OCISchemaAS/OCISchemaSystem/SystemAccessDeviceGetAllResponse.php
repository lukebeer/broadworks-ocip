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
     * Response to SystemAccessDeviceGetAllRequest.
 *         Contains a table of devices configured in the entire system.
 *         The column headings are: "Service Provider Id", "Is Enterprise", "Group Id",
 *         "Device Name", "Device Type", "Net Address", "MAC Address", "Status".
 */
class SystemAccessDeviceGetAllResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceGetAllResponse';
    public    $name              = __CLASS__;
    protected $accessDeviceTable = null;


    /**
     * 
     */
    public function setAccessDeviceTable(core:OCITable $accessDeviceTable = null)
    {
        $this->accessDeviceTable = core:OCITable $accessDeviceTable;
    }

    /**
     * 
     */
    public function getAccessDeviceTable()
    {
        return (!$this->accessDeviceTable) ?: $this->accessDeviceTable->getValue();
    }
}
