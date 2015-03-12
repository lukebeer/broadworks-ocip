<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupAccessDeviceGetListRequest.
 *         Contains a table of devices configured in the group.
 *         The column headings are: "Device Name", "Device Type", "Available Ports", "Net Address", "MAC Address" and "Status".
 */
class GroupAccessDeviceGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'GroupAccessDeviceGetListResponse';
    protected $accessDeviceTable = null;

    /**
     * @return GroupAccessDeviceGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAccessDeviceTable(TableType $accessDeviceTable = null)
    {
        if (!$accessDeviceTable) return $this;
        $this->accessDeviceTable = $accessDeviceTable;
        $this->accessDeviceTable->setName('accessDeviceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAccessDeviceTable()
    {
        return $this->accessDeviceTable->getValue();
    }
}
