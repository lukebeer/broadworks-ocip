<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceGetListResponse14;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAccessDeviceGetListRequest14.
 *         Contains a table of devices defined at the System-level.
 *         The column headings are:
 *         "Device Name", "Device Type", "Available Ports", "Net Address" and "MAC Address", "Status".
 */
class SystemAccessDeviceGetListResponse14 extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $accessDeviceTable = null;

    /**
     * @return SystemAccessDeviceGetListResponse14
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

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
