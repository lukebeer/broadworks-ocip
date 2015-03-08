<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderAccessDeviceGetListRequest.
 *         Contains a table of devices configured in the service provider.
 *         The column headings are: "Device Name", "Device Type", "Available Ports",
 *         "Net Address", "MAC Address", and "Status".
 */
class ServiceProviderAccessDeviceGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $accessDeviceTable = null;


    /**
     * 
     */
    public function setAccessDeviceTable(core:OCITable $accessDeviceTable = null)
    {
        $this->accessDeviceTable =  $accessDeviceTable;
    }

    /**
     * 
     */
    public function getAccessDeviceTable()
    {
        return (!$this->accessDeviceTable) ?: $this->accessDeviceTable->getValue();
    }
}
